<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller {

    public function action_index()
    {        
        $this->response->body('');
    }
    
    
    public function action_socs()
    {
        $result_driver = $this->request->param('id');
        
        if ($result_driver AND $user = SOCS::authentication($result_driver)) {
            
            var_dump($user);
            
            //$location = isset($_GET['from']) ? $_GET['from'] : '/';
        }
        else {
            $location = SOCS::auth_location();
        } 
        
        $this->response->headers('Location', $location); 
    }


} // End