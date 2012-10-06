<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Базовый класс для драйверов соцсетей
 *
 * @package    Kohana/SOCS
 * @author     Vitaliy Serov
 * @copyright  (c) 2012 Vitaliy Serov
 * @license    serovvitaly@gmail.com
 */
abstract class Driver_Prototype {
    
    protected $_driver = NULL;
    
    protected $_urls_list = array();
    
    protected $_config = NULL;
    
    
    
    public function config($param_name = NULL)
    {
        if (!$this->_config) {
            $this->_config = Kohana::$config->load('socs.drivers.' . $this->get_name());
        }
        
        if (!empty($param_name)) {
            if ( isset($this->_config['apps']) AND is_array($this->_config['apps']) AND count($this->_config['apps']) > 0 ) {
                foreach ($this->_config['apps'] AS $access) {
                    if ($access['host'] AND $access['host'] == $_SERVER['SERVER_NAME'] AND isset($access[$param_name])) {
                        return $access[$param_name];
                    }
                }
            }
            
            return NULL;
        }
        
        return $this->_config;
    }
    
    
    public function get_name()
    {
        if (!$this->_driver) {  
            $called_class_mix = explode('_', get_called_class());
            
            $this->_driver = strtolower($called_class_mix[1]);
        }
        
        return $this->_driver;
    }

    public final function api($config = array())
    {
        //
    }

    public final function plugin($plugin_name, $config = array())
    {
        //
    }
    
    
    public function get_url($key, array $params = array())
    {
        $params_list = array();
        
        if (count($params) > 0) {
            foreach ($params AS $param_name => $param_value) {
                $params_list[] = $param_name . '=' . $param_value;
            }
        }
        
        if (count($params_list) > 0) {
            $params_list = '?' . implode('&', $params_list);
        } else {
            $params_list = NULL;
        }
        
        return isset($this->_urls_list[$key]) ? $this->_urls_list[$key] . $params_list : NULL;
    }
    
    
    public function auth_url()
    {
        
        $from = $_SERVER['REQUEST_URI'];
        
        $driver = $this->get_name();
        
        $out_url = "/auth/socs?d=$driver&from={$from}";
        
        return $out_url;
    }

} // End
