<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller {

	public function action_index()
	{
    
        echo '<a href="/auth/">авторизация</a>'; return;
        
        $call = SOCS::call('vkontakte.user.data');
        print(SOCS::provider('vkontakte')->access_token());
        echo '<hr/>';
        print_r($call);
        
        return;
        
        
        
        echo '<hr/>';
            
        $url = '/oauth/facebook/login?from=' . $_SERVER['REQUEST_URI'];
        
        echo "<a href='$url'>login</a>";
        
	}

} // End Welcome
