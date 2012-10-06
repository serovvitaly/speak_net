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
        
        $this->_provider = SOCS::provider($this->request->controller());
        
        $this->_oauth    = SOCS::oauth($this->_provider);
        
        //$this->_token    = $_SESSION['access_token'];
    }
 
 
    public function action_login()
    {
        $from = isset($_GET['from']) ? $_GET['from'] : '/';
        
        $provider_redirect = $this->_oauth->set('redirect_uri', 'http://' . $_SERVER['SERVER_NAME'] . '/oauth/' . $this->name . '/complete')->authorize_uri();
        
        $this->request->redirect($provider_redirect);
    }
 
 
    public function action_complete()
    {
        $code = $this->request->query('code');
        
        $from = $this->request->query('from');
        
        if (!$code)
        {
            throw new Exception('Ошибка OAuth, не верный `code`');
            return;
        }
        
        $this->_token = $this->_provider->access_token($code);
        
        $this->request->redirect($from);
    }
 
}