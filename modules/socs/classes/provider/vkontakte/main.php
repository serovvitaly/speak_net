<?php defined('SYSPATH') or die('No direct access allowed.');

class Provider_Vkontakte_Main extends Provider_Prototype implements Provider_Socialnet {

    protected $_urls_list = array(
        'auth_url'     => 'https://oauth.vk.com/authorize',
        'access_token' => 'https://oauth.vk.com/access_token'
    );
    
    
    /**
    * Функция авторизации в соцсети
    * 
    */
    public function authorization()
    {
        $url = "https://oauth.vk.com/authorize?client_id={$this->config('client_id')}&scope=friends&redirect_uri=http://www.speaknet/test/complite&display=page&response_type=token";
        
        
        Request::current()->redirect($url);
    }
    
    
    /**
    * Запрашивает access_token
    * 
    */
    protected function api_access_token($params = array())
    {
        $url = 'https://oauth.vk.com/access_token';
        
        $opt['client_id']     = $this->config('client_id');
        $opt['client_secret'] = $this->config('client_secret');
        
        if (isset($params['code']) AND !empty($params['code'])) {
            $opt['code'] = $params['code'];
        }
        if (isset($params['grant_type']) AND !empty($params['grant_type'])) {
            $opt['grant_type'] = $params['grant_type'];
        }
        
        
        $response = $this->_request($url, $opt);
        
        $data = json_decode($response);
        print_r($opt); echo '<hr/>';
        print_r($data); echo '<hr/>';
        if (isset($data->error)) {
            throw new Exception("API ERROR : {$data->error} - {$data->error_description}");
            return NULL;
        }
        
        
        $result = new Call_Result_Access_Token();
        
        $result->uid          = $data->user_id;
        $result->access_token = $data->access_token;
        
        return $result;
    }
    
    public function get_auth_code()
    {
        //
    }
    
    public function api_user_data($params)
    {
        $url = 'https://api.vk.com/method/users.get';
        
        $opt['uids']   = $params['uids'];
        $opt['fields'] = 'nickname,photo';
        
        if (isset($params['access_token']) AND !empty($params['access_token'])) {
            $opt['access_token'] = $params['access_token'];
        }
        
        $response = $this->_request($url, $opt);
        
        $data = json_decode($response);
        
        $result = new Call_Result_User_Data();
        
        $result->uid        = $data->uid;
        $result->first_name = $data->first_name;
        $result->last_name  = $data->last_name;
        
        return $result;
    }  

} // End
