<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Базовый класс для драйверов соцсетей
 *
 * @package    Kohana/SOCS
 * @author     Vitaliy Serov
 * @copyright  (c) 2012 Vitaliy Serov
 * @license    serovvitaly@gmail.com
 */
abstract class Provider_Prototype {
    
    protected $_provider = NULL;
    
    protected $_urls_list = array();
    
    protected $_config = NULL;
    
    
    protected $_access_token = NULL;
    
    
    public static $CURL_OPTS = array(
        CURLOPT_CONNECTTIMEOUT => 10,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 60,
        CURLOPT_USERAGENT      => '',
    );
    
    
    public function config($param_name = NULL)
    {
        if (!$this->_config) {
            $this->_config = Kohana::$config->load('socs.drivers.' . $this->get_name());
        }
        
        if (!empty($param_name)) {
            if ( isset($this->_config['apps']) AND is_array($this->_config['apps']) AND count($this->_config['apps']) > 0 ) {
                foreach ($this->_config['apps'] AS $access) {
                    if ($access['host'] AND $access['host'] == $_SERVER['SERVER_NAME'] AND isset($access[$param_name])) {
                        return $access[$param_name];
                    }
                }
            }
            
            return NULL;
        }
        
        return $this->_config;
    }
    
    
    public function get_name()
    {
        if (!$this->_provider) {  
            $called_class_mix = explode('_', get_called_class());
            
            $this->_provider = strtolower($called_class_mix[1]);
        }
        
        return $this->_provider;
    }

    
    /**
    * Вызывает зарегистрированный метод провайдера
    * 
    * @param ORM $user
    * @param mixed $method
    * @param mixed $params
    */
    public final function call($method, array $params = array(), ORM $user = NULL)
    {
        
        $result_class = 'Call_Result_' . str_replace(' ', '_', ucwords(str_replace('.', ' ', strtolower($method))));
        
        $method_name = 'api_' . str_replace('.', '_', strtolower($method));
        
        if (method_exists($this, $method_name)) {
            $result = $this->$method_name($params);
            
            if ($result instanceof $result_class) {
                return $result;
            }
            else {
                throw new Exception("The result of the call `" . $this->get_name() . ".$method` must be `$result_class`");
            }
        }
        else {
            throw new Exception("`Call method` - `$method_name` not found in provider `" . $this->get_name() . "`");
        }
        
    }

    
    protected final function _request($url, $params = array(), $file_upload = false) {
    
        
        $ch = curl_init();
        

        $opts = self::$CURL_OPTS;
        
        if ($file_upload) {
            $opts[CURLOPT_POSTFIELDS] = $params;
        } else {
            $opts[CURLOPT_POSTFIELDS] = http_build_query($params, null, '&');
        }
        
        $opts[CURLOPT_URL] = $url;

        // disable the 'Expect: 100-continue' behaviour. This causes CURL to wait
        // for 2 seconds if the server does not support this header.
        if (isset($opts[CURLOPT_HTTPHEADER])) {
          $existing_headers = $opts[CURLOPT_HTTPHEADER];
          $existing_headers[] = 'Expect:';
          $opts[CURLOPT_HTTPHEADER] = $existing_headers;
        } else {
          $opts[CURLOPT_HTTPHEADER] = array('Expect:');
        }
        
        $opts[CURLOPT_SSL_VERIFYPEER] = false;
        $opts[CURLOPT_SSL_VERIFYHOST] = false;

        curl_setopt_array($ch, $opts);
        
        $result = curl_exec($ch);

        if (curl_errno($ch) == 60) { // CURLE_SSL_CACERT
            //throw new Exception('Invalid or no certificate authority found, using bundled information');
            curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__) . '/fb_ca_chain_bundle.crt');
            $result = curl_exec($ch);
        }

        // With dual stacked DNS responses, it's possible for a server to
        // have IPv6 enabled but not have IPv6 connectivity.  If this is
        // the case, curl will try IPv4 first and if that fails, then it will
        // fall back to IPv6 and the error EHOSTUNREACH is returned by the
        // operating system.
        if ($result === false && empty($opts[CURLOPT_IPRESOLVE])) {
            $matches = array();
            $regex = '/Failed to connect to ([^:].*): Network is unreachable/';
            if (preg_match($regex, curl_error($ch), $matches)) {
              if (strlen(@inet_pton($matches[1])) === 16) {
                self::errorLog('Invalid IPv6 configuration on server, '.
                               'Please disable or get native IPv6 on your server.');
                self::$CURL_OPTS[CURLOPT_IPRESOLVE] = CURL_IPRESOLVE_V4;
                curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
                $result = curl_exec($ch);
              }
            }
        }

        if ($result === false) {
          $e = new Exception(curl_error($ch), curl_errno($ch));
          curl_close($ch);
          throw $e;
        }
        
        curl_close($ch);
        
        return $result;
    }
    
    
    public final function plugin($plugin_name, $config = array())
    {
        //
    }
    
    
    public function get_uri($key, array $params = array())
    {
        $params_list = array();
        
        if (count($params) > 0) {
            foreach ($params AS $param_name => $param_value) {
                $params_list[] = $param_name . '=' . $param_value;
            }
        }
        
        if (count($params_list) > 0) {
            $params_list = '?' . implode('&', $params_list);
        } else {
            $params_list = NULL;
        }
        
        return isset($this->_urls_list[$key]) ? $this->_urls_list[$key] . $params_list : NULL;
    }
    

    /**
    * 
    * 
    * @param mixed $code
    */
    public function access_token($code = NULL)
    {
        if (!empty($code)) {
            $this->_set_access_token($code);
        }
        
        return $this->_get_access_token($code);
    }
    
    
    /**
    * 
    * 
    * @param mixed $access_token
    */
    protected function _set_access_token($access_token)
    {
        //Session::instance()->set('access_token', $access_token);
        
        return $this->_access_token = $access_token;
    }
    
    
    /**
    * 
    * 
    */
    protected function _get_access_token()
    {
        //$access_token = Session::instance()->get('access_token');
        //$access_token = NULL;
        
        if (!$this->_access_token) {
            $this->_access_token = $this->api_access_token();
        }
        
        return $this->_access_token;
    }
    
} // End


