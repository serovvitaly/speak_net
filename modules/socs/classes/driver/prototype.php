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

    public final function api($config = array())
    {
        //
    }

    public final function plugin($plugin_name, $config = array())
    {
        //
    }

} // End