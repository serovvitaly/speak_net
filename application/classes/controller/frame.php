<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frame extends Controller {

    public function action_index()
    {   
        $view = View::factory('frame/index');
         
        $this->response->body($view);
    }

} // End
