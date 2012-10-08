<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-08 00:43:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skins/default/img/sn-button-manager-home ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 00:43:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skins/default/img/sn-button-manager-home ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 00:43:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skins/default/img/sn-button-manager-home ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 00:43:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skins/default/img/sn-button-manager-home ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 00:43:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skins/default/img/sn-button-manager-home.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 00:43:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skins/default/img/sn-button-manager-home.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 00:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skins/default/img/sn-button-manager-home.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 00:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skins/default/img/sn-button-manager-home.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 00:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skins/default/img/sn-button-home-on.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 00:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skins/default/img/sn-button-home-on.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 00:43:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skins/default/img/sn-button-home-on.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 00:43:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: skins/default/img/sn-button-home-on.png ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 03:57:06 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-10-08 03:57:06 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\OPENSERVER\domains\speak_net\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\OPENSERVER\domains\speak_net\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\OPENSERVER\domains\speak_net\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('users')
#3 D:\OPENSERVER\domains\speak_net\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#4 D:\OPENSERVER\domains\speak_net\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 D:\OPENSERVER\domains\speak_net\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 D:\OPENSERVER\domains\speak_net\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(1)
#7 D:\OPENSERVER\domains\speak_net\modules\socs\classes\kohana\socs.php(136): Kohana_ORM::factory('user', 1)
#8 D:\OPENSERVER\domains\speak_net\modules\socs\classes\kohana\socs.php(98): Kohana_SOCS->_get_user(1)
#9 D:\OPENSERVER\domains\speak_net\application\classes\controller\index.php(8): Kohana_SOCS::call(1, 'user.data')
#10 [internal function]: Controller_Index->action_index()
#11 D:\OPENSERVER\domains\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#12 D:\OPENSERVER\domains\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\OPENSERVER\domains\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#15 {main}
2012-10-08 03:57:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 03:57:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 03:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 03:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 04:06:07 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-10-08 04:06:07 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Подключение не установлено, т.к. конечный компьютер отверг запрос на подключение.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\OPENSERVER\domains\speak_net\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\OPENSERVER\domains\speak_net\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\OPENSERVER\domains\speak_net\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('users')
#3 D:\OPENSERVER\domains\speak_net\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#4 D:\OPENSERVER\domains\speak_net\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 D:\OPENSERVER\domains\speak_net\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 D:\OPENSERVER\domains\speak_net\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(1)
#7 D:\OPENSERVER\domains\speak_net\modules\socs\classes\kohana\socs.php(136): Kohana_ORM::factory('user', 1)
#8 D:\OPENSERVER\domains\speak_net\modules\socs\classes\kohana\socs.php(98): Kohana_SOCS->_get_user(1)
#9 D:\OPENSERVER\domains\speak_net\application\classes\controller\index.php(8): Kohana_SOCS::call(1, 'user.data')
#10 [internal function]: Controller_Index->action_index()
#11 D:\OPENSERVER\domains\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Index))
#12 D:\OPENSERVER\domains\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\OPENSERVER\domains\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#15 {main}
2012-10-08 04:06:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 04:06:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 04:06:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 04:06:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 04:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 04:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 04:06:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 04:06:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 04:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 04:07:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 04:07:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 04:07:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 04:24:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 04:24:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:06:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:06:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:06:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:06:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:07:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:07:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:08:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:08:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:08:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:08:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:08:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:08:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:08:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:08:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:08:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:08:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:08:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:08:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:08:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:08:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:08:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:08:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:09:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:09:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:09:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:09:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:09:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:09:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:09:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:09:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:09:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:09:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:49:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:49:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:49:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:49:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:49:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:49:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:55:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:55:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:55:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:55:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 05:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 05:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 07:47:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: baz.html ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 07:47:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: baz.html ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 07:47:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: baz.html ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 07:47:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: baz.html ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 07:47:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: baz.html ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 07:47:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: baz.html ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 07:48:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 07:48:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 07:48:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 07:48:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 07:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 07:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 07:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 07:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 07:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 07:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 07:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 07:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 07:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 07:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 07:48:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 07:48:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 07:48:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 07:48:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 07:48:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 07:48:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 09:25:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/page4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-08 09:25:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/page4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\OPENSERVER\domains\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\OPENSERVER\domains\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\OPENSERVER\domains\speak_net\www\index.php(109): Kohana_Request->execute()
#3 {main}