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
2012-10-05 17:08:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/socs was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-05 17:08:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/socs was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\domains\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\domains\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-05 17:08:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 17:08:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 17:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 17:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 17:28:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 17:28:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 17:28:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 17:28:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 17:28:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 17:28:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 17:48:47 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_SOCS::get_driver() should not be called statically ~ MODPATH\socs\classes\kohana\socs.php [ 63 ]
2012-10-05 17:48:47 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_SOCS::get_driver() should not be called statically ~ MODPATH\socs\classes\kohana\socs.php [ 63 ]
--
#0 D:\domains\speak_net\modules\socs\classes\kohana\socs.php(63): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\domains\spea...', 63, Array)
#1 D:\domains\speak_net\modules\socs\classes\kohana\socs.php(63): Kohana_SOCS::get_driver()
#2 D:\domains\speak_net\application\classes\controller\auth.php(14): Kohana_SOCS::auth_location()
#3 [internal function]: Controller_Auth->action_socs()
#4 D:\domains\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#5 D:\domains\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\domains\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-05 17:48:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 17:48:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 17:49:59 --- ERROR: ErrorException [ 1 ]: Call to undefined function get_driver() ~ MODPATH\socs\classes\kohana\socs.php [ 63 ]
2012-10-05 17:49:59 --- STRACE: ErrorException [ 1 ]: Call to undefined function get_driver() ~ MODPATH\socs\classes\kohana\socs.php [ 63 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-05 17:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 17:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 17:50:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 17:50:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 17:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 17:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 17:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 17:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:10:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:10:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:10:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:10:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:17:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:17:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:17:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:17:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:17:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:17:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:18:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:18:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:19:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:19:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:19:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:19:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:20:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:20:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:20:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:20:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:27:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:27:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:29:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:29:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:29:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:29:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:31:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:31:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:34:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:34:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:40:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:40:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:40:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:40:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:43:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:43:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:43:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:43:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:44:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:44:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:45:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:45:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:46:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:46:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:48:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:48:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:50:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:50:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:50:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:50:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:55:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:55:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:55:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:55:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:55:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:55:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:56:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:56:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:56:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:56:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:57:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:57:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:57:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:57:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:58:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:58:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:58:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:58:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-05 18:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-05 18:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}