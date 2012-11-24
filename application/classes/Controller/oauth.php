<?php defined('SYSPATH') or die('No direct script access.');

class Controller_OAuth extends Controller {
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
        
        $this->_provider->authorization();
        
        return;
        
        $from = isset($_GET['from']) ? $_GET['from'] : '/';
        
        $provider_redirect = $this->_oauth->set('redirect_uri', 'http://' . $_SERVER['SERVER_NAME'] . '/oauth/' . $this->name . '/complete?from=' . $from)->authorize_uri();
        
        $this->redirect($provider_redirect);
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
        
        $token_uri = "https://oauth.vk.com/access_token?client_id=3175485&client_secret=dkHaWI2rhrXV8wfFWySw&code={$code}&redirect_uri=http://{$_SERVER['SERVER_NAME']}/oauth/vkontakte/complete?from={$from}";  
        
        
        $result = json_decode( $this->curl_query($token_uri) );
        
        //print_r($result);
        
        return;
        
        
        $access_token = SOCS::call('vkontakte.access.token', array(
            'code' => $code,
            //'grant_type' => 'client_credentials'
        ));
        
        //var_dump($access_token); echo '<hr/>';
        return;
        $user_data = SOCS::call('vkontakte.user.data', array(
            'uids'         => $access_token->uid,
            'access_token' => $access_token->access_token
        ));
        
        //print_r($user_data);
        
        return;
        
        $this->redirect($from);
    }
    
    
    /**
    * Выполняет cURL запрос
    * 
    */
    protected function curl_query($url)
    {
        $_curl = CURL::factory(array(
            CURLOPT_URL  => $url,
            CURLOPT_SSL_VERIFYPEER  => false,
            CURLOPT_SSL_VERIFYHOST  => false,
            CURLOPT_POST => 0
        ));
        
        $result = $_curl->execute();
        
        return $result;
    }
 
}