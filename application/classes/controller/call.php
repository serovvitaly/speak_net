<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Call extends Controller {

    protected $_output = array(
        'success' => true
    );
    
    protected $_data      = NULL;
    
    protected $_errors    = array();
    
    protected $_callbacks = array();
    
    
    
    protected function _set_error($error)
    {
        $this->_errors[] = $error;
    }
    
    protected function _set_callback($method, $result)
    {
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
        
        if (count($this->_callbacks) == 1) {
            $this->_output['callback'] = $this->_callbacks[0];
        }
        elseif (count($this->_callbacks) > 0) {
            $this->_output['callback'] = $this->_callbacks;
        }
        
        $this->response->body(json_encode($this->_output));
    }
    
    public function action_index()
    {   
        
        if (is_array($this->_data)) {
            //
        }
        elseif (is_object($this->_data)) {
            $method = $this->_get_data('method');
            $params = $this->_get_data('params');
            
            $method_name = 'api_' . str_replace('.', '_', strtolower( $method ));
            
            if (method_exists($this, $method_name)) {
                $this->_set_callback($method, $this->$method_name($params));
            }
            else {
                $this->_set_error('Вызов несуществующего метода ' . $method);
            }
        }
        else {
            //
        }
        
        //$this->_output['data'] = ;
    }
    
    
    
    // =====================================================================================
    // =====================================================================================
    
    protected function api_content_get($params)
    {
        return 'Вы запросили контент для страницы ' . $params->url;
    }

} // End
