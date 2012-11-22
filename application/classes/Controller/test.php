<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {

    public $app_id     = '3175485';
    public $app_secret = 'dkHaWI2rhrXV8wfFWySw';
    
    public function action_index()
    {        
        $this->response->body('<a href="/test/login">Авторизация</a>');
    }
    
    public function action_login()
    {        
        //$url = "https://oauth.vk.com/authorize?client_id={$this->app_id}&scope=friends&redirect_uri=http://www.speaknet/test/complite&response_type=code";
        $url = "https://oauth.vk.com/authorize?client_id={$this->app_id}&scope=friends&redirect_uri=http://www.speaknet/test/complite&display=page&response_type=token";
        
        $this->request->redirect($url);
    }
    
    public function action_complite()
    {        
        echo '<p>Комплит</p>';
        
        print_r($this->request->query());
        
        return;
        
        $code = $this->request->query('code');
        
        $url = "https://oauth.vk.com/access_token?client_id={$this->app_id}&client_secret={$this->app_secret}&code={$code}&redirect_uri=http://www.speaknet/test/access";
        
        $this->request->redirect($url);
    }
    
    public function action_access()
    {        
        echo '<p>ACCESS TOKEN</p>';
        
    }

} // End
