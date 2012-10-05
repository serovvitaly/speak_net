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

    const DRIVER_INTERFACE = 'Driver_Socialnet';
    
    protected static $_instance = NULL;
    
    protected static $_drivers = array();
    
    
    protected static function instance()
    {
        if (!self::$_instance) {
            
            $class_name = __CLASS__;
            
            self::$_instance = new $class_name();
        }
        
        return self::$_instance;
    }
    
    
    /**
    * Возвращает объект доступного драйвера
    * 
    * @param mixed $driver_name
    */
    public static function driver($driver_name)
    {
        return self::instance()->get_driver($driver_name);
    }
    
    
    /**
    * Определяет, зарегистрирован ли драйвер.
    * Если зарегистрирован и реализует интерфейс Driver_Socialnet, то возвращает объек драйвера.
    * Если не зарегистирован, то пытается зарегистрировать и после проверки интерфейса возвращает объект.
    * Иначе возвращает NULL.
    * 
    * @param mixed $driver_name
    */
    protected function get_driver($driver_name)
    {
        $DRIVER_INTERFACE = self::DRIVER_INTERFACE;
        
        if ( isset(self::$_drivers[$driver_name]) AND self::$_drivers[$driver_name] instanceof $DRIVER_INTERFACE ) {
            return self::$_drivers[$driver_name];
        }
        elseif ( $driver_instance = self::instance()->define_driver($driver_name) AND $driver_instance instanceof $DRIVER_INTERFACE ) {
            return $driver_instance;
        }
        
        return NULL;
    }
    
    
    /**
    * Регистрирует драйвер
    * 
    * @param mixed $driver_name
    */
    protected function define_driver($driver_name)
    {
        $driver_name = strtolower($driver_name);
        $driver_class_name = 'Driver_' . ucfirst($driver_name)  . '_Main';
        
        $DRIVER_INTERFACE = self::DRIVER_INTERFACE;
        
        if (class_exists($driver_class_name) AND class_implements($driver_class_name, $DRIVER_INTERFACE)) {
            self::$_drivers[$driver_name] = new $driver_class_name();
            
            return self::$_drivers[$driver_name];
        }
        
        return false;
    }
    
    

} // End
