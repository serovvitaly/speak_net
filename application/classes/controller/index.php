<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller {

	public function action_index()
	{
    
        print(SOCS::provider('facebook')->access_token());
        
        echo '<hr/>';
            
        $url = '/oauth/facebook/login?from=' . $_SERVER['REQUEST_URI'];
        
        echo "<a href='$url'>login</a>";
        
	}

} // End Welcome
