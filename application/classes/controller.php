<?php defined('SYSPATH') or die('No direct script access.');

class Controller extends Kohana_Controller {

    protected $_USER = NULL;
    
    public function __construct(Request $request, Response $response)
    {        
        parent::__construct($request, $response);
        
        if (!$this->_USER) {
            $this->_USER = Auth::instance()->get_user();
        }
    }

} // End
