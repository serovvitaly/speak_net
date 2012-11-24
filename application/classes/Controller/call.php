<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Call extends Controller {

    protected $_output = array(
        'success' => true
    );
    
    protected $_data      = NULL;
    
    protected $_errors    = array();
    
    protected $_callbacks = array();
    
    
    
    protected function _set_error($method, $message, $code = NULL)
    {
        $this->_errors[] = array(
            'method'  => $method,
            'message' => $message,
            'code'    => $code
        );
    }
    
    protected function _set_callback($method, $result)
    {
        if (!is_array($result)) {
            $this->_set_error($method,'Метода `' . $method . '` вернул не верные параметры, должен быть array');
            return false;
        }
        
        $this->_callbacks[] = array(
            'method' => $method,
            'result' => $result
        );
    }
    
    protected function _get_data($key, $default = NULL)
    {        
        return Arr::get( (array) $this->_data, $key, $default);
    }    
    
    public function before()
    {
        $this->_data = json_decode(file_get_contents('php://input'));
    }
    
    public function after()
    {
        if (count($this->_errors) > 0) {
            $this->_output['errors']    = $this->_errors;
        }
        
        if (count($this->_callbacks) > 0) {
            $this->_output['callback'] = $this->_callbacks;
        }
        
        $this->response->body(json_encode($this->_output));
    }
    
    public function action_index()
    {   
        
        if (is_array($this->_data) AND count($this->_data) > 0) {
            foreach ($this->_data AS $call_inst) {
                $method = Arr::get( (array) $call_inst, 'method');
                $params = Arr::get( (array) $call_inst, 'params');
                
                $method_name = 'api_' . str_replace('.', '_', strtolower( $method ));
                
                if (method_exists($this, $method_name)) {
                    $this->_set_callback($method, $this->$method_name($params));
                }
                else {
                    $this->_set_error($method, 'Вызов несуществующего метода ' . $method);
                }
            }
        }
        else {
            $this->_set_error($method, 'Список вызовов пуст');
        }
    }
    
    
    
    // =====================================================================================
    // =====================================================================================
    
    protected function api_content_get($params)
    {        
        $content = Request::factory($params->url)
        ->post('ajax', 1)
        ->execute()
        ->send_headers(TRUE)
        ->body();
        
        return array('content' => $content);
    }
    
    protected function api_content_hello($params)
    {
        $text = 'Вы запросили контент для страницы ' . $params->els;
        
        return array('text' => $text);
    }

} // End
