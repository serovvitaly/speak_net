<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Manager extends Controller {

    public function action_index()
    {       
        $view = View::factory('manager/index');
     
        $this->response->body($view);
    }

} // End
