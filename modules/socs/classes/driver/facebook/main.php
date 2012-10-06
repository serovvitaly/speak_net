<?php defined('SYSPATH') or die('No direct access allowed.');

class Driver_Facebook_Main extends Driver_Prototype implements Driver_Socialnet {

    protected $_urls_list = array(
        'auth_url' => 'https://graph.facebook.com/oauth/authorize'
    );
    
    public function get_auth_code()
    {
        echo 'foo-prot';
    }   

} // End