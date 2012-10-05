<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller {

	public function action_index()
	{
		
        $facebook = SOCS::driver('facebook');
        
        $facebook_auth = $facebook->plugin('auth', array(
            
        ));
        
	}

} // End Welcome
