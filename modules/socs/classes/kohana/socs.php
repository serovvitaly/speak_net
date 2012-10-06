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
    * Возвращает объект доступного драйвера
    * 
    * @param mixed $provider_name
    */
    public static function provider($provider_name)
    {
        return self::instance()->get_provider($provider_name);
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




