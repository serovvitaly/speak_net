<?php defined('SYSPATH') or die('No direct access allowed.');

class Provider_Vkontakte_Main extends Provider_Prototype implements Provider_Socialnet {

    protected $_urls_list = array(
        'auth_url' => 'https://graph.facebook.com/oauth/authorize'
    );
    
    public function get_auth_code()
    {
        echo 'foo-prot';
    }
    
    public function api_user_data()
    {
        return 'vkontakte';
    }  

} // End
