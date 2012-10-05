<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Базовый интерфейс для драйверов соцсетей
 *
 * @package    Kohana/SOCS
 * @author     Vitaliy Serov
 * @copyright  (c) 2012 Vitaliy Serov
 * @license    serovvitaly@gmail.com
 */
interface Driver_Socialnet {

    /**
    * Возвращает код виджета авторизации
    */
    public function get_auth_code();

} // End