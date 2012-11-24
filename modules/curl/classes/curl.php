<?php defined('SYSPATH') or die('No direct script access.');

class CURL {
    
    
    protected static $_instance = NULL;
    
    protected $_curl = NULL;
    
    public $error;
    
    public function __destruct()
    {
        if (self::$_instance->_curl) {
            curl_close(self::$_instance->_curl);
        }
    }
    
    
    /**
    * 
    * 
    */
    public static function factory(array $options = array())
    {
        if (!self::$_instance) {
            $class = __CLASS__;
            self::$_instance = new $class;
        }
        
        if (!self::$_instance->_curl) {
            self::$_instance->_curl = curl_init();
        }
        
        if (count($options) > 0) {
            foreach ($options AS $option_name => $option_value) {
                self::$_instance->setopt($option_name, $option_value);
            }
        }
        
        return self::$_instance;
    }
    
    
    /**
    * Устанавливает cURL опцию
    * 
    * @param mixed $option
    * @param mixed $value
    */
    public function setopt($option, $value)
    {
        curl_setopt($this->_curl, $option, $value);
        
        return $this;
    }
    
    
    /**
    * Выполняет непосредственно запрос
    * 
    */
    public function execute()
    {
        
        // todo 3 -o vs -c модуль cURL: выяснить откуда идет вывод json данных
        $result = curl_exec($this->_curl);
        
        //$this->error = curl_error($this->_curl);
        
        //return $result;
    }
    

} // End
