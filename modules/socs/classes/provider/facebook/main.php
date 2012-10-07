<?php defined('SYSPATH') or die('No direct access allowed.');

class Provider_Facebook_Main extends Provider_Prototype implements Provider_Socialnet {

    protected $_urls_list = array(
        'auth_url' => 'https://graph.facebook.com/oauth/authorize'
    );
    
    public function get_auth_code()
    {
        //
    }
    
    public function api_user_data()
    {
        $url = 'https://graph.facebook.com/19292868552';
        
        $resp = $this->_request($url);
        
        $result = new Call_Result_User_Data();
        
        $result->uid = json_decode($resp);
        
        return $result;
    }  

} // End
