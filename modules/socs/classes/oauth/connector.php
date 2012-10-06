<?php defined('SYSPATH') or die('No direct script access.');

class OAuth_Connector {

    protected $_provider = NULL;
    
    
    public function __construct($provider)
    {
        
        
        if ( !($provider instanceof Provider_Prototype) ) {
            throw new Exception('Конструктор класса OAuth_Connector ожидает объект типа Provider_Prototype');
        }
        
        $this->_provider = $provider;
    }
    
    
    public function __set($name, $value)
    {
        $this->$name = $value;
    }   
    
    public function set($name, $value)
    {
        $this->__set($name, $value);
        
        return $this;
    }
    
    
    public function authorize_uri()
    {      
    
        $uri = $this->_provider->get_uri('auth_url', array(
                'client_id'     => $this->_provider->config('client_id'),
                //'redirect_uri'  => '/oauth/socs/' . $this->_provider->get_name() . '?from=' . $from,
                'redirect_uri'  => $this->redirect_uri,
                'scope'         => $this->_provider->config('scope'),
                'response_type' => 'code'
            ));
      
        return $uri;
    }

} // End

