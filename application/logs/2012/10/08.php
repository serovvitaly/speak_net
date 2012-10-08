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
2012-10-08 12:03:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:03:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:03:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:03:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:03:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:03:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:03:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:03:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:03:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:03:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:17:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:17:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:17:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:17:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:19:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:19:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:19:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:19:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:19:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:19:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:19:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:19:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/page2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-08 12:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/page2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-08 12:36:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/page4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-08 12:36:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/page4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-08 12:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/page4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-08 12:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/page4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-08 12:41:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:41:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:41:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:41:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:41:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:41:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:41:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:41:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/page3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-08 12:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/page3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-08 12:41:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:41:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:54:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:54:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/page3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-08 12:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/page3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-08 12:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:54:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:54:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 12:58:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 12:58:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 13:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-08 13:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-08 13:06:30 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Manager' not found ~ APPPATH\classes\controller\manager\index.php [ 3 ]
2012-10-08 13:06:30 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Manager' not found ~ APPPATH\classes\controller\manager\index.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-08 13:12:47 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-10-08 13:12:47 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\view.php(137): Kohana_View->set_filename('index')
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\view.php(30): Kohana_View->__construct('index', NULL)
#2 D:\OPENSERVER\html\speak_net\application\classes\controller\manager.php(11): Kohana_View::factory('index')
#3 [internal function]: Controller_Manager->before()
#4 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Manager_Index))
#5 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-08 13:16:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/page1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-08 13:16:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/page1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-08 13:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/page2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-08 13:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/page2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-08 13:28:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/page2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-08 13:28:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/page2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-08 13:37:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 13:37:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 13:37:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 13:37:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 13:37:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 13:37:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 13:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 13:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 13:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 13:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 13:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-08 13:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-08 14:17:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL call was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-08 14:17:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL call was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-08 14:26:14 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
2012-10-08 14:26:14 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
--
#0 D:\OPENSERVER\html\speak_net\application\classes\controller\call.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OPENSERVER\h...', 27, Array)
#1 [internal function]: Controller_Call->action_index()
#2 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Call))
#3 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 14:26:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
2012-10-08 14:26:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
--
#0 D:\OPENSERVER\html\speak_net\application\classes\controller\call.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OPENSERVER\h...', 27, Array)
#1 [internal function]: Controller_Call->action_index()
#2 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Call))
#3 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 14:28:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
2012-10-08 14:28:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
--
#0 D:\OPENSERVER\html\speak_net\application\classes\controller\call.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OPENSERVER\h...', 27, Array)
#1 [internal function]: Controller_Call->action_index()
#2 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Call))
#3 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 14:28:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
2012-10-08 14:28:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
--
#0 D:\OPENSERVER\html\speak_net\application\classes\controller\call.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OPENSERVER\h...', 27, Array)
#1 [internal function]: Controller_Call->action_index()
#2 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Call))
#3 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 14:28:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
2012-10-08 14:28:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
--
#0 D:\OPENSERVER\html\speak_net\application\classes\controller\call.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OPENSERVER\h...', 27, Array)
#1 [internal function]: Controller_Call->action_index()
#2 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Call))
#3 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 14:28:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
2012-10-08 14:28:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
--
#0 D:\OPENSERVER\html\speak_net\application\classes\controller\call.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OPENSERVER\h...', 27, Array)
#1 [internal function]: Controller_Call->action_index()
#2 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Call))
#3 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 14:31:15 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
2012-10-08 14:31:15 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
--
#0 D:\OPENSERVER\html\speak_net\application\classes\controller\call.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OPENSERVER\h...', 27, Array)
#1 [internal function]: Controller_Call->action_index()
#2 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Call))
#3 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 14:31:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
2012-10-08 14:31:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
--
#0 D:\OPENSERVER\html\speak_net\application\classes\controller\call.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OPENSERVER\h...', 27, Array)
#1 [internal function]: Controller_Call->action_index()
#2 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Call))
#3 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 14:31:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
2012-10-08 14:31:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
--
#0 D:\OPENSERVER\html\speak_net\application\classes\controller\call.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OPENSERVER\h...', 27, Array)
#1 [internal function]: Controller_Call->action_index()
#2 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Call))
#3 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 14:31:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
2012-10-08 14:31:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
--
#0 D:\OPENSERVER\html\speak_net\application\classes\controller\call.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OPENSERVER\h...', 27, Array)
#1 [internal function]: Controller_Call->action_index()
#2 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Call))
#3 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 14:32:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
2012-10-08 14:32:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
--
#0 D:\OPENSERVER\html\speak_net\application\classes\controller\call.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OPENSERVER\h...', 27, Array)
#1 [internal function]: Controller_Call->action_index()
#2 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Call))
#3 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 14:32:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
2012-10-08 14:32:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
--
#0 D:\OPENSERVER\html\speak_net\application\classes\controller\call.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OPENSERVER\h...', 27, Array)
#1 [internal function]: Controller_Call->action_index()
#2 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Call))
#3 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 14:32:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
2012-10-08 14:32:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
--
#0 D:\OPENSERVER\html\speak_net\application\classes\controller\call.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OPENSERVER\h...', 27, Array)
#1 [internal function]: Controller_Call->action_index()
#2 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Call))
#3 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 14:32:47 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
2012-10-08 14:32:47 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Call::$output ~ APPPATH\classes\controller\call.php [ 27 ]
--
#0 D:\OPENSERVER\html\speak_net\application\classes\controller\call.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\OPENSERVER\h...', 27, Array)
#1 [internal function]: Controller_Call->action_index()
#2 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Call))
#3 D:\OPENSERVER\html\speak_net\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\OPENSERVER\html\speak_net\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 D:\OPENSERVER\html\speak_net\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-08 15:02:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\controller\call.php [ 32 ]
2012-10-08 15:02:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\controller\call.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-08 15:36:46 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
2012-10-08 15:36:46 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ SYSPATH\classes\kohana\arr.php [ 277 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-08 15:43:59 --- ERROR: ErrorException [ 1 ]: Call to undefined function api_content_get() ~ APPPATH\classes\controller\call.php [ 57 ]
2012-10-08 15:43:59 --- STRACE: ErrorException [ 1 ]: Call to undefined function api_content_get() ~ APPPATH\classes\controller\call.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}