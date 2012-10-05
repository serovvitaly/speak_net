<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-05 13:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-05 13:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 13:41:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-05 13:41:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 13:52:49 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_SOCS::factory() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\index.php [ 8 ]
2012-10-05 13:52:49 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_SOCS::factory() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\index.php [ 8 ]
--
#0 D:\OPENSERVER\html\speak_net\application\classes\controller\index.php(8): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\OPENSERVER\h...', 8, Array)
#1 [internal function]: Controller_Index->action_index()
#2 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#3 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-05 14:25:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method SOCS::factory() ~ APPPATH\classes\controller\index.php [ 8 ]
2012-10-05 14:25:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method SOCS::factory() ~ APPPATH\classes\controller\index.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 14:26:22 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Kohana_SOCS ~ MODPATH\socs\classes\kohana\socs.php [ 25 ]
2012-10-05 14:26:22 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Kohana_SOCS ~ MODPATH\socs\classes\kohana\socs.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 14:26:37 --- ERROR: ErrorException [ 1 ]: Class Driver_Facebook_Main contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Driver_Socialnet::get_auth_code) ~ MODPATH\socs\classes\driver\facebook\main.php [ 7 ]
2012-10-05 14:26:37 --- STRACE: ErrorException [ 1 ]: Class Driver_Facebook_Main contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Driver_Socialnet::get_auth_code) ~ MODPATH\socs\classes\driver\facebook\main.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 14:27:18 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Kohana_SOCS::$DRIVER_INTERFACE ~ MODPATH\socs\classes\kohana\socs.php [ 74 ]
2012-10-05 14:27:18 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Kohana_SOCS::$DRIVER_INTERFACE ~ MODPATH\socs\classes\kohana\socs.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 14:29:18 --- ERROR: ErrorException [ 1 ]: Call to a member function get_auth_code() on a non-object ~ APPPATH\classes\controller\index.php [ 8 ]
2012-10-05 14:29:18 --- STRACE: ErrorException [ 1 ]: Call to a member function get_auth_code() on a non-object ~ APPPATH\classes\controller\index.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 14:31:00 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2012-10-05 14:31:00 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('DBGSESSID', NULL)
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(202): Kohana_Cookie::get('DBGSESSID')
#2 D:\OPENSERVER\html\speak_net\www\index.php(108): Kohana_Request::factory()
#3 {main}
2012-10-05 14:41:38 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2012-10-05 14:41:38 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('DBGSESSID', NULL)
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(202): Kohana_Cookie::get('DBGSESSID')
#2 D:\OPENSERVER\html\speak_net\www\index.php(108): Kohana_Request::factory()
#3 {main}
2012-10-05 14:42:46 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2012-10-05 14:42:46 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('DBGSESSID', NULL)
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(202): Kohana_Cookie::get('DBGSESSID')
#2 D:\OPENSERVER\html\speak_net\www\index.php(108): Kohana_Request::factory()
#3 {main}
2012-10-05 14:45:49 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2012-10-05 14:45:49 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('DBGSESSID', NULL)
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(202): Kohana_Cookie::get('DBGSESSID')
#2 D:\OPENSERVER\html\speak_net\www\index.php(108): Kohana_Request::factory()
#3 {main}
2012-10-05 14:50:09 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2012-10-05 14:50:09 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('DBGSESSID', NULL)
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(202): Kohana_Cookie::get('DBGSESSID')
#2 D:\OPENSERVER\html\speak_net\www\index.php(108): Kohana_Request::factory()
#3 {main}
2012-10-05 14:50:23 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2012-10-05 14:50:23 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('DBGSESSID', NULL)
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(202): Kohana_Cookie::get('DBGSESSID')
#2 D:\OPENSERVER\html\speak_net\www\index.php(108): Kohana_Request::factory()
#3 {main}