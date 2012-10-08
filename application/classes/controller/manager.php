<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Manager extends Controller {

    protected $_template   = NULL;
    
    protected $_layout     = NULL;
    
    protected $_controller = NULL;
    
    protected $_action     = NULL;
    
    
    
    public function before()
    {
        $this->_controller = $this->request->controller();
        $this->_action     = $this->request->action();
        
        $this->_template = View::factory('manager/' . $this->_controller . '/' . $this->_action);
        
        $this->_layout   = View::factory('manager/layout');
        
        $this->_layout->controller = $this->_controller;
        $this->_layout->action     = $this->_action;
    }
    
    public function after()
    {
        $this->_layout->content = $this->_template;
        
        $this->response->body($this->_layout);
    }
    
    public function action_index()
    {        
        $this->response->body('');
    }

} // End
