<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_OAuth extends Controller {
    /**
     * @var OAuth2
     */
    protected $_oauth;
    /**
     * @var OAuth_Token
     */
    protected $_token;
    /**
     * @var OAuth2_Provider
     */
    protected $_provider;
    /**
     * @var OAuth_Client
     */
    protected $_consumer;
    protected $_cookie;
 
    public $name;
 
    public function before()
    {
        parent::before();
        $this->_oauth = new OAuth2;
        // создаем объект консумера, загружая в него настройки приложения из конфига
        $this->_consumer = OAuth2_Client::factory(Kohana::$config->load('oauth.'.$this->name));
        $this->_cookie = 'oauth_cookie_'.$this->name;
        // создаем объект провайдера
        $this->_provider = $this->_oauth->provider($this->name);
        if ($token = Cookie::get($this->_cookie))
        {
            // а вдруг мы уже имеем в куках временный токен (code)
            $this->_token = unserialize($token);
        }
    }
 
    public function action_login()
    {
        // подготавливаем callback для передачи провайдеру
        $callback = $this->request->url(array('action' => 'complete'), Request::initial()->protocol());
        $this->_consumer->callback($callback);
        // редиректим пользователя на страницу провайдера
        $this->request->redirect($this->_provider->authorize_url($this->_consumer));
    }
 
    public function action_complete()
    {
        // мы должны получить code в GET-строке 
        $code = $this->request->query('code');
        if ( ! $code)
        {
            // по идее надо проверять наличие кодов ошибок и т.д.
            return;
        }
        // меняем код временного токена на токен доступа. Используется curl
        $this->_token = $this->_provider->access_token($this->_consumer, $code);
        // сохраняем токен в куке, далее можно его использовать для получения данных пользователя
        Cookie::set($this->_cookie, serialize($this->_token));
        // перенаправляем куда-нибудь - аутентификация закончена, токен получен
        $this->request->redirect('/');
    }
 
}