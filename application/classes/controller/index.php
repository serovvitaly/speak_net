<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller {

	public function action_index()
	{
        
        $url = SOCS::driver('facebook')->auth_url();
        
        
        echo "<a href='$url'>login</a>";
        
	}

} // End Welcome
