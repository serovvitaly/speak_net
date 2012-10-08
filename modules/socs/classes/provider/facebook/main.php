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
        $url = 'https://api.facebook.com/method/users.getInfo';
        
        $resp = $this->_request($url, array(
            'uids' => '100001510022600',
            'fields' => 'name,email,pic_square',
            'access_token' => 'AAAAAAITEghMBAE3lj8VM47rIyrjmf4E5ZCeoZB7eUiUb3VrlOGihS3URNPz36nxBGBEPEk8TZBwj13wZAnbJ8MYWkieTU7Xcc7PxmITOz4mYOC0YuoWh',
            'format' => 'json'
        ));
        
        $result = new Call_Result_User_Data();
        
        $result->uid = json_decode($resp);
        
        return $result;
    }  

} // End
