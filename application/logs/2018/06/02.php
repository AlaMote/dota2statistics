<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-06-02 15:39:23 --- CRITICAL: ErrorException [ 2 ]: array_merge(): Argument #1 is not an array ~ APPPATH\classes\Controller\common.php [ 51 ] in file:line
2018-06-02 15:39:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_merge(): ...', 'D:\\OpenServer\\O...', 51, Array)
#1 D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\common.php(51): array_merge(NULL, Array)
#2 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#5 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2018-06-02 15:40:10 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-06-02 15:40:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-06-02 15:44:02 --- CRITICAL: Error [ 0 ]: Call to undefined method Template::render() ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\common.php:56
2018-06-02 15:44:02 --- DEBUG: #0 D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\common.php(56): Kohana_Controller_Template->after()
#1 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\common.php:56
2018-06-02 15:46:43 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Template::$styles ~ APPPATH\classes\Controller\common.php [ 61 ] in D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\common.php:61
2018-06-02 15:46:43 --- DEBUG: #0 D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\common.php(61): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\\OpenServer\\O...', 61, Array)
#1 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(87): Controller_Common->after()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\common.php:61
2018-06-02 15:47:59 --- CRITICAL: ParseError [ 0 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\default.php [ 10 ] in file:line
2018-06-02 15:47:59 --- DEBUG: #0 [internal function]: Kohana_Core::auto_load('Controller_Defa...')
#1 [internal function]: spl_autoload_call('Controller_Defa...')
#2 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(74): class_exists('Controller_Defa...')
#3 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#5 D:\OpenServer\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#6 {main} in file:line
2018-06-02 15:48:01 --- CRITICAL: ParseError [ 0 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\default.php [ 10 ] in file:line
2018-06-02 15:48:01 --- DEBUG: #0 [internal function]: Kohana_Core::auto_load('Controller_Defa...')
#1 [internal function]: spl_autoload_call('Controller_Defa...')
#2 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(74): class_exists('Controller_Defa...')
#3 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#5 D:\OpenServer\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#6 {main} in file:line
2018-06-02 15:48:11 --- CRITICAL: ParseError [ 0 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\default.php [ 10 ] in file:line
2018-06-02 15:48:11 --- DEBUG: #0 [internal function]: Kohana_Core::auto_load('Controller_Defa...')
#1 [internal function]: spl_autoload_call('Controller_Defa...')
#2 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(74): class_exists('Controller_Defa...')
#3 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#5 D:\OpenServer\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#6 {main} in file:line
2018-06-02 16:29:42 --- CRITICAL: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 241 ] in D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php:1668
2018-06-02 16:29:42 --- DEBUG: #0 D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_PDO->list_columns('dota2s')
#1 D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#2 D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#3 D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#4 D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#5 D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\default.php(11): Kohana_ORM::factory('Model_dota2')
#6 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Default->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#9 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 D:\OpenServer\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#12 {main} in D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php:1668
2018-06-02 16:30:18 --- CRITICAL: Database_Exception [ 2 ]: mysqli::__construct(): (HY000/1045): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 75 ] in D:\OpenServer\OSPanel\domains\dota2.local\modules\database\classes\Kohana\Database\MySQLi.php:154
2018-06-02 16:30:18 --- DEBUG: #0 D:\OpenServer\OSPanel\domains\dota2.local\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#1 D:\OpenServer\OSPanel\domains\dota2.local\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#2 D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`dota2s`')
#3 D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\default.php(11): Kohana_ORM::factory('Model_dota2')
#8 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Default->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#11 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\OSPanel\domains\dota2.local\modules\database\classes\Kohana\Database\MySQLi.php:154
2018-06-02 16:30:41 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dota2.dota2s' doesn't exist [ SHOW FULL COLUMNS FROM `dota2s` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in D:\OpenServer\OSPanel\domains\dota2.local\modules\database\classes\Kohana\Database\MySQLi.php:337
2018-06-02 16:30:41 --- DEBUG: #0 D:\OpenServer\OSPanel\domains\dota2.local\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`dota2s`')
#2 D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\OpenServer\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\default.php(11): Kohana_ORM::factory('Model_dota2')
#7 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Default->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#10 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#12 D:\OpenServer\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#13 {main} in D:\OpenServer\OSPanel\domains\dota2.local\modules\database\classes\Kohana\Database\MySQLi.php:337
2018-06-02 16:31:54 --- CRITICAL: Error [ 0 ]: Class 'Model_dota2' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\default.php:11
2018-06-02 16:31:54 --- DEBUG: #0 D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\default.php(11): Kohana_ORM::factory('Model_dota2')
#1 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Default->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\default.php:11
2018-06-02 16:32:13 --- CRITICAL: Error [ 0 ]: Class 'Model_match' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\default.php:11
2018-06-02 16:32:13 --- DEBUG: #0 D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\default.php(11): Kohana_ORM::factory('Model_match')
#1 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Default->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\default.php:11
2018-06-02 16:57:37 --- CRITICAL: TypeError [ 0 ]: Argument 1 passed to Kohana_ORM::create() must be an instance of Validation or null, string given, called in D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Model\unit.php on line 19 ~ MODPATH\orm\classes\Kohana\ORM.php [ 1294 ] in D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Model\unit.php:19
2018-06-02 16:57:37 --- DEBUG: #0 D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Model\unit.php(19): Kohana_ORM->create('name', 'chttubnciz')
#1 D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\default.php(12): Model_Unit->randomize(100)
#2 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Default->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#5 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 D:\OpenServer\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Model\unit.php:19
2018-06-02 17:10:32 --- CRITICAL: Error [ 0 ]: Call to undefined method Model_Unit::randomize() ~ APPPATH\classes\Controller\default.php [ 12 ] in D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php:84
2018-06-02 17:10:32 --- DEBUG: #0 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Default->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#3 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#5 D:\OpenServer\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#6 {main} in D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php:84
2018-06-02 17:11:08 --- CRITICAL: Error [ 0 ]: Call to undefined function set() ~ APPPATH\classes\Model\team.php [ 18 ] in D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\default.php:11
2018-06-02 17:11:08 --- DEBUG: #0 D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\default.php(11): Model_Team->randomize()
#1 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Default->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\OSPanel\domains\dota2.local\application\classes\Controller\default.php:11
2018-06-02 19:31:46 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/players could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in D:\OSPanel\domains\dota2.local\system\classes\Kohana\View.php:145
2018-06-02 19:31:46 --- DEBUG: #0 D:\OSPanel\domains\dota2.local\system\classes\Kohana\View.php(145): Kohana_View->set_filename('pages/players')
#1 D:\OSPanel\domains\dota2.local\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/players', NULL)
#2 D:\OSPanel\domains\dota2.local\application\classes\Controller\player.php(11): Kohana_View::factory('pages/players')
#3 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Player->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#6 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 D:\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#9 {main} in D:\OSPanel\domains\dota2.local\system\classes\Kohana\View.php:145
2018-06-02 19:54:21 --- CRITICAL: Error [ 0 ]: Call to undefined method Database_MySQLi_Result::count_all() ~ APPPATH\classes\Model\player.php [ 1037 ] in D:\OSPanel\domains\dota2.local\application\classes\Controller\player.php:17
2018-06-02 19:54:21 --- DEBUG: #0 D:\OSPanel\domains\dota2.local\application\classes\Controller\player.php(17): Model_Player->randomize()
#1 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Player->action_players()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Player))
#4 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 D:\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OSPanel\domains\dota2.local\application\classes\Controller\player.php:17
2018-06-02 20:04:54 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_Team class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php:603
2018-06-02 20:04:54 --- DEBUG: #0 D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 D:\OSPanel\domains\dota2.local\application\classes\Controller\team.php(20): Kohana_ORM->__get('country')
#2 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Team->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 D:\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php:603
2018-06-02 20:05:04 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_Team class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php:603
2018-06-02 20:05:04 --- DEBUG: #0 D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 D:\OSPanel\domains\dota2.local\application\classes\Controller\team.php(20): Kohana_ORM->__get('country')
#2 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Team->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 D:\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php:603
2018-06-02 20:05:05 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_Team class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php:603
2018-06-02 20:05:05 --- DEBUG: #0 D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 D:\OSPanel\domains\dota2.local\application\classes\Controller\team.php(20): Kohana_ORM->__get('country')
#2 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Team->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 D:\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php:603
2018-06-02 20:09:40 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_Team class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php:603
2018-06-02 20:09:40 --- DEBUG: #0 D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 D:\OSPanel\domains\dota2.local\application\classes\Controller\team.php(20): Kohana_ORM->__get('country')
#2 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Team->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 D:\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php:603
2018-06-02 20:09:42 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_Team class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php:603
2018-06-02 20:09:42 --- DEBUG: #0 D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 D:\OSPanel\domains\dota2.local\application\classes\Controller\team.php(20): Kohana_ORM->__get('country')
#2 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Team->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 D:\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php:603
2018-06-02 20:09:50 --- CRITICAL: Kohana_Exception [ 0 ]: The country property does not exist in the Model_Team class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php:603
2018-06-02 20:09:50 --- DEBUG: #0 D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('country')
#1 D:\OSPanel\domains\dota2.local\application\classes\Controller\team.php(20): Kohana_ORM->__get('country')
#2 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Team->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 D:\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php:603
2018-06-02 20:12:24 --- CRITICAL: Kohana_Exception [ 0 ]: The player property does not exist in the Model_Team class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php:603
2018-06-02 20:12:24 --- DEBUG: #0 D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('player')
#1 D:\OSPanel\domains\dota2.local\application\classes\Controller\team.php(21): Kohana_ORM->__get('player')
#2 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Controller.php(84): Controller_Team->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#5 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\OSPanel\domains\dota2.local\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 D:\OSPanel\domains\dota2.local\index.php(118): Kohana_Request->execute()
#8 {main} in D:\OSPanel\domains\dota2.local\modules\orm\classes\Kohana\ORM.php:603