<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Базовый класс для взаимодействия с социальными сетями
 *
 * @package    Kohana/SOCS
 * @author     Vitaliy Serov
 * @copyright  (c) 2012 Vitaliy Serov
 * @license    serovvitaly@gmail.com
 */
class Kohana_SOCS {

    const DRIVER_INTERFACE = 'Provider_Socialnet';
    
    protected static $_instance = NULL;
    
    protected static $_providers = array();
    
    protected static $_oauth   = NULL;
    
    protected static $_config  = NULL;
    
    protected $_user    = NULL;
    
    public $base_url = NULL;
    
    
    public function __construct()
    {
        $this->base_url = $_SERVER['SERVER_NAME'];
        
    }
    
    
    protected static function instance()
    {
        if (!self::$_instance) {
            
            $class_name = __CLASS__;
            
            self::$_instance = new $class_name();
        }
        
        return self::$_instance;
    }
    
    
    protected static function config()
    {
        if (!self::$_config) {
            self::$_config = Kohana::$config->load('socs');
        }
        
        return self::$_config;
    }
    
    
    public static function oauth($provider)
    {
        if (!self::$_oauth) {
            self::$_oauth = new OAuth_Connector($provider);
        }
        
        return self::$_oauth;
    }
    
    
    /**
    * Определение пользователя при успешном авторизации в соцсети
    * 
    * @param mixed $result_driver
    */
    public static function authentication($result_driver)
    {
        //
    }
    
    
    /**
    * Синоним SOCS::call
    * 
    * @param mixed $user_id
    * @param mixed $params
    */
    public static function api($user_id, $method, array $params = array())
    {
        return self::call($user_id, $params);
    }
    
    
    /**
    * Выполняет запрос для определенного пользователя
    * 
    * @param mixed $user_id
    * @param mixed $params
    */
    public static function call($method, $params = NULL, $user_id = NULL)
    {
        if (!is_array($params)) {
            $params = array();
        }
        
        if ($user_id > 0) {
            $_user      = self::instance()->_get_user($user_id);
            $provider   = $_user->provider;
        }
        else {
            $_user      = NULL;
            $method_els = explode('.', $method);
            $provider   = $method_els[0];
            
            unset($method_els[0]);
            $method     = implode('.', $method_els);
        }
        
        $provider = self::provider($provider);
        
        if ($provider) {
            return $provider->call($method, $params, $_user);
        }        
        
        return false;
    }
    
    
    /**
    * Возвращает модель User
    * 
    * @param mixed $user_id
    */
    protected function _get_user($user_id)
    {
        $user_model_name = 'user';
        
        if (is_array($user_id)) {
            $provider_name = key($user_id);
            
            $_uid = $user_id[$provider_name];
            
            $provider_column_name = $provider_name . '_uid';
            
            if ($this->_user AND $this->_user instanceof ORM AND $this->_user->provider = $provider_name AND $this->_user->uid == $_uid) {
                return $this->_user;
            } else {
                $this->_user = ORM::factory($user_model_name)->where('provider', '=', $provider_name)->where('uid', '=', $_uid)->find();
                return $this->_user;
            }
        }
        elseif (is_integer($user_id *= 1)) {
            
            if ($this->_user AND $this->_user instanceof ORM AND $this->_user->id == $user_id) {
                return $this->_user;
            } else {
                $this->_user = ORM::factory('user', $user_id);
                return $this->_user;
            }
        }
        
        return NULL;
    }
    
    
    /**
    * Возвращает объект доступного драйвера
    * 
    * @param mixed $provider_name
    */
    public static function provider($provider_name)
    {
        $_provider = self::instance()->get_provider($provider_name);
        
        if (!$_provider) {
            throw new Exception("Provider `$provider_name` not found");
        }
        
        return $_provider;
    }
    
    
    /**
    * Определяет, зарегистрирован ли драйвер.
    * Если зарегистрирован и реализует интерфейс Driver_Socialnet, то возвращает объек драйвера.
    * Если не зарегистирован, то пытается зарегистрировать и после проверки интерфейса возвращает объект.
    * Иначе возвращает NULL.
    * 
    * @param mixed $provider_name
    */
    protected function get_provider($provider_name)
    {
        $DRIVER_INTERFACE = self::DRIVER_INTERFACE;
        
        if ( isset(self::$_providers[$provider_name]) AND self::$_providers[$provider_name] instanceof $DRIVER_INTERFACE ) {
            return self::$_providers[$provider_name];
        }
        elseif ( $driver_instance = self::instance()->define_provider($provider_name) AND $driver_instance instanceof $DRIVER_INTERFACE ) {
            return $driver_instance;
        }
        
        return NULL;
    }
    
    
    /**
    * Регистрирует драйвер
    * 
    * @param mixed $provider_name
    */
    protected function define_provider($provider_name)
    {
        $provider_name = strtolower($provider_name);
        $provider_class_name = 'Provider_' . ucfirst($provider_name)  . '_Main';
        
        
        if (class_exists($provider_class_name) AND class_implements($provider_class_name, self::DRIVER_INTERFACE)) {
            self::$_providers[$provider_name] = new $provider_class_name();
            
            return self::$_providers[$provider_name];
        }
        
        return false;
    }
    
    

} // End




