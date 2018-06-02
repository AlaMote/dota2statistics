<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-03-01 14:21:12 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host kohana.local. If you trust kohana.local, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in Z:\home\kohana.local\www\system\classes\Kohana\URL.php:144
2018-03-01 14:21:12 --- DEBUG: #0 Z:\home\kohana.local\www\system\classes\Kohana\URL.php(144): Kohana_URL::base('http', false)
#1 Z:\home\kohana.local\www\system\classes\Kohana\HTML.php(245): Kohana_URL::site('assets/js/boots...', true, false)
#2 Z:\home\kohana.local\www\application\views\templates\default.php(12): Kohana_HTML::script('assets/js/boots...', NULL, true)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#4 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#5 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\kohana.local\www\application\classes\Controller\DefaultTemplate.php(49): Kohana_Controller_Template->after()
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#10 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana.local\www\system\classes\Kohana\URL.php:144
2018-03-01 14:21:16 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host kohana.local. If you trust kohana.local, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in Z:\home\kohana.local\www\system\classes\Kohana\URL.php:144
2018-03-01 14:21:16 --- DEBUG: #0 Z:\home\kohana.local\www\system\classes\Kohana\URL.php(144): Kohana_URL::base('http', false)
#1 Z:\home\kohana.local\www\system\classes\Kohana\HTML.php(245): Kohana_URL::site('assets/js/boots...', true, false)
#2 Z:\home\kohana.local\www\application\views\templates\default.php(12): Kohana_HTML::script('assets/js/boots...', NULL, true)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#4 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#5 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\kohana.local\www\application\classes\Controller\DefaultTemplate.php(49): Kohana_Controller_Template->after()
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#10 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana.local\www\system\classes\Kohana\URL.php:144
2018-03-01 14:25:16 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host kohana.local. If you trust kohana.local, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in Z:\home\kohana.local\www\system\classes\Kohana\URL.php:144
2018-03-01 14:25:16 --- DEBUG: #0 Z:\home\kohana.local\www\system\classes\Kohana\URL.php(144): Kohana_URL::base('http', false)
#1 Z:\home\kohana.local\www\system\classes\Kohana\HTML.php(245): Kohana_URL::site('js/jquery-3.1.1...', true, false)
#2 Z:\home\kohana.local\www\application\views\templates\default.php(12): Kohana_HTML::script('js/jquery-3.1.1...', NULL, true)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#4 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#5 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\kohana.local\www\application\classes\Controller\DefaultTemplate.php(49): Kohana_Controller_Template->after()
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#10 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana.local\www\system\classes\Kohana\URL.php:144
2018-03-01 14:25:18 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host kohana.local. If you trust kohana.local, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in Z:\home\kohana.local\www\system\classes\Kohana\URL.php:144
2018-03-01 14:25:18 --- DEBUG: #0 Z:\home\kohana.local\www\system\classes\Kohana\URL.php(144): Kohana_URL::base('http', false)
#1 Z:\home\kohana.local\www\system\classes\Kohana\HTML.php(245): Kohana_URL::site('js/jquery-3.1.1...', true, false)
#2 Z:\home\kohana.local\www\application\views\templates\default.php(12): Kohana_HTML::script('js/jquery-3.1.1...', NULL, true)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#4 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#5 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\kohana.local\www\application\classes\Controller\DefaultTemplate.php(49): Kohana_Controller_Template->after()
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#10 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana.local\www\system\classes\Kohana\URL.php:144
2018-03-01 14:39:38 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/default could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\kohana.local\www\system\classes\Kohana\View.php:145
2018-03-01 14:39:38 --- DEBUG: #0 Z:\home\kohana.local\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('templates/defau...')
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/defau...', NULL)
#2 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('templates/defau...')
#3 Z:\home\kohana.local\www\application\classes\Controller\DefaultTemplate.php(15): Kohana_Controller_Template->before()
#4 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(69): Controller_DefaultTemplate->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#7 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\kohana.local\www\system\classes\Kohana\View.php:145
2018-03-01 14:41:45 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/main could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\kohana.local\www\system\classes\Kohana\View.php:145
2018-03-01 14:41:45 --- DEBUG: #0 Z:\home\kohana.local\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('pages/main')
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/main', NULL)
#2 Z:\home\kohana.local\www\application\classes\Controller\Default.php(10): Kohana_View::factory('pages/main')
#3 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(84): Controller_Default->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#6 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana.local\www\system\classes\Kohana\View.php:145
2018-03-01 14:56:16 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/header could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in Z:\home\kohana.local\www\system\classes\Kohana\View.php:145
2018-03-01 14:56:16 --- DEBUG: #0 Z:\home\kohana.local\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('templates/heade...')
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/heade...', NULL)
#2 Z:\home\kohana.local\www\application\classes\Controller\Default.php(9): Kohana_View::factory('templates/heade...')
#3 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(84): Controller_Default->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#6 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana.local\www\system\classes\Kohana\View.php:145
2018-03-01 14:58:27 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host kohana.local. If you trust kohana.local, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in Z:\home\kohana.local\www\system\classes\Kohana\URL.php:144
2018-03-01 14:58:27 --- DEBUG: #0 Z:\home\kohana.local\www\system\classes\Kohana\URL.php(144): Kohana_URL::base('http', false)
#1 Z:\home\kohana.local\www\system\classes\Kohana\HTML.php(245): Kohana_URL::site('application/ass...', true, false)
#2 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(12): Kohana_HTML::script('application/ass...', NULL, true)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#4 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#5 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 Z:\home\kohana.local\www\application\classes\Controller\DefaultTemplate.php(47): Kohana_Controller_Template->after()
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#10 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#13 {main} in Z:\home\kohana.local\www\system\classes\Kohana\URL.php:144
2018-03-01 15:00:20 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: nothing to repeat at offset 1 ~ SYSPATH\classes\Kohana\URL.php [ 265 ] in file:line
2018-03-01 15:00:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'Z:\\home\\kohana....', 265, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\URL.php(265): preg_match('#^*\\.kohana\\.lo...', 'kohana.local')
#2 Z:\home\kohana.local\www\system\classes\Kohana\URL.php(105): Kohana_URL::is_trusted_host('kohana.local')
#3 Z:\home\kohana.local\www\system\classes\Kohana\URL.php(144): Kohana_URL::base('http', false)
#4 Z:\home\kohana.local\www\system\classes\Kohana\HTML.php(245): Kohana_URL::site('application/ass...', true, false)
#5 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(12): Kohana_HTML::script('application/ass...', NULL, true)
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#7 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#8 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana.local\www\application\classes\Controller\DefaultTemplate.php(47): Kohana_Controller_Template->after()
#10 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#16 {main} in file:line
2018-03-01 15:00:56 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: nothing to repeat at offset 1 ~ SYSPATH\classes\Kohana\URL.php [ 265 ] in file:line
2018-03-01 15:00:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'Z:\\home\\kohana....', 265, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\URL.php(265): preg_match('#^*kohana\\.loca...', 'kohana.local')
#2 Z:\home\kohana.local\www\system\classes\Kohana\URL.php(105): Kohana_URL::is_trusted_host('kohana.local')
#3 Z:\home\kohana.local\www\system\classes\Kohana\URL.php(144): Kohana_URL::base('http', false)
#4 Z:\home\kohana.local\www\system\classes\Kohana\HTML.php(245): Kohana_URL::site('application/ass...', true, false)
#5 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(12): Kohana_HTML::script('application/ass...', NULL, true)
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#7 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#8 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\kohana.local\www\application\classes\Controller\DefaultTemplate.php(47): Kohana_Controller_Template->after()
#10 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#16 {main} in file:line
2018-03-01 16:16:24 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_DefaultModel::$_db ~ APPPATH\classes\Model\DefaultModel.php [ 14 ] in Z:\home\kohana.local\www\application\classes\Model\DefaultModel.php:14
2018-03-01 16:16:24 --- DEBUG: #0 Z:\home\kohana.local\www\application\classes\Model\DefaultModel.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\\home\\kohana....', 14, Array)
#1 Z:\home\kohana.local\www\application\classes\Controller\Default.php(18): Model_DefaultModel->getUserList()
#2 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(84): Controller_Default->action_users()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#5 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana.local\www\application\classes\Model\DefaultModel.php:14
2018-03-01 16:19:37 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_DefaultModel::$_db ~ APPPATH\classes\Model\DefaultModel.php [ 14 ] in Z:\home\kohana.local\www\application\classes\Model\DefaultModel.php:14
2018-03-01 16:19:37 --- DEBUG: #0 Z:\home\kohana.local\www\application\classes\Model\DefaultModel.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\\home\\kohana....', 14, Array)
#1 Z:\home\kohana.local\www\application\classes\Controller\Default.php(18): Model_DefaultModel->getUserList()
#2 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(84): Controller_Default->action_users()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#5 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana.local\www\application\classes\Model\DefaultModel.php:14
2018-03-01 16:20:03 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_DefaultModel::$_db ~ APPPATH\classes\Model\DefaultModel.php [ 14 ] in Z:\home\kohana.local\www\application\classes\Model\DefaultModel.php:14
2018-03-01 16:20:03 --- DEBUG: #0 Z:\home\kohana.local\www\application\classes\Model\DefaultModel.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\\home\\kohana....', 14, Array)
#1 Z:\home\kohana.local\www\application\classes\Controller\Default.php(18): Model_DefaultModel->getUserList()
#2 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(84): Controller_Default->action_users()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#5 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana.local\www\application\classes\Model\DefaultModel.php:14
2018-03-01 16:35:52 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 16:35:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 16:36:13 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 16:36:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 16:39:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ko3 ~ APPPATH\classes\Controller\Default.php [ 19 ] in Z:\home\kohana.local\www\application\classes\Controller\Default.php:19
2018-03-01 16:39:25 --- DEBUG: #0 Z:\home\kohana.local\www\application\classes\Controller\Default.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\kohana....', 19, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(84): Controller_Default->action_users()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana.local\www\application\classes\Controller\Default.php:19
2018-03-01 16:41:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: ko3 ~ APPPATH\classes\Controller\Default.php [ 19 ] in Z:\home\kohana.local\www\application\classes\Controller\Default.php:19
2018-03-01 16:41:13 --- DEBUG: #0 Z:\home\kohana.local\www\application\classes\Controller\Default.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\kohana....', 19, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(84): Controller_Default->action_users()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana.local\www\application\classes\Controller\Default.php:19
2018-03-01 16:41:16 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\users.php [ 3 ] in Z:\home\kohana.local\www\application\views\pages\users.php:3
2018-03-01 16:41:16 --- DEBUG: #0 Z:\home\kohana.local\www\application\views\pages\users.php(3): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\\home\\kohana....', 3, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#2 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(17): Kohana_View->__toString()
#5 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana.local\www\application\classes\Controller\DefaultTemplate.php(47): Kohana_Controller_Template->after()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana.local\www\application\views\pages\users.php:3
2018-03-01 16:41:56 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\users.php [ 7 ] in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:41:56 --- DEBUG: #0 Z:\home\kohana.local\www\application\views\pages\users.php(7): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\\home\\kohana....', 7, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#2 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(17): Kohana_View->__toString()
#5 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana.local\www\application\classes\Controller\DefaultTemplate.php(47): Kohana_Controller_Template->after()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:42:51 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\users.php [ 7 ] in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:42:51 --- DEBUG: #0 Z:\home\kohana.local\www\application\views\pages\users.php(7): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\\home\\kohana....', 7, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#2 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(17): Kohana_View->__toString()
#5 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana.local\www\application\classes\Controller\DefaultTemplate.php(47): Kohana_Controller_Template->after()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:42:54 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\users.php [ 7 ] in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:42:54 --- DEBUG: #0 Z:\home\kohana.local\www\application\views\pages\users.php(7): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\\home\\kohana....', 7, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#2 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(17): Kohana_View->__toString()
#5 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana.local\www\application\classes\Controller\DefaultTemplate.php(47): Kohana_Controller_Template->after()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:43:18 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\users.php [ 7 ] in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:43:18 --- DEBUG: #0 Z:\home\kohana.local\www\application\views\pages\users.php(7): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\\home\\kohana....', 7, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#2 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(17): Kohana_View->__toString()
#5 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana.local\www\application\classes\Controller\DefaultTemplate.php(47): Kohana_Controller_Template->after()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_DefaultTemplate->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:44:42 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\users.php [ 7 ] in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:44:42 --- DEBUG: #0 Z:\home\kohana.local\www\application\views\pages\users.php(7): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\\home\\kohana....', 7, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#2 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(17): Kohana_View->__toString()
#5 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana.local\www\application\classes\Controller\Default.php(67): Kohana_Controller_Template->after()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:45:13 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\users.php [ 7 ] in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:45:13 --- DEBUG: #0 Z:\home\kohana.local\www\application\views\pages\users.php(7): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\\home\\kohana....', 7, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#2 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(17): Kohana_View->__toString()
#5 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana.local\www\application\classes\Controller\Default.php(64): Kohana_Controller_Template->after()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:45:59 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\users.php [ 7 ] in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:45:59 --- DEBUG: #0 Z:\home\kohana.local\www\application\views\pages\users.php(7): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\\home\\kohana....', 7, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#2 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(17): Kohana_View->__toString()
#5 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana.local\www\application\classes\Controller\Default.php(65): Kohana_Controller_Template->after()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:46:00 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\users.php [ 7 ] in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:46:00 --- DEBUG: #0 Z:\home\kohana.local\www\application\views\pages\users.php(7): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\\home\\kohana....', 7, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#2 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(17): Kohana_View->__toString()
#5 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana.local\www\application\classes\Controller\Default.php(65): Kohana_Controller_Template->after()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:46:17 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\users.php [ 7 ] in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:46:17 --- DEBUG: #0 Z:\home\kohana.local\www\application\views\pages\users.php(7): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\\home\\kohana....', 7, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#2 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(17): Kohana_View->__toString()
#5 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana.local\www\application\classes\Controller\Default.php(65): Kohana_Controller_Template->after()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:46:18 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\users.php [ 7 ] in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:46:18 --- DEBUG: #0 Z:\home\kohana.local\www\application\views\pages\users.php(7): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\\home\\kohana....', 7, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#2 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(17): Kohana_View->__toString()
#5 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana.local\www\application\classes\Controller\Default.php(65): Kohana_Controller_Template->after()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana.local\www\application\views\pages\users.php:7
2018-03-01 16:46:59 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 16:46:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 16:56:44 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 16:56:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 16:57:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\pages\users.php [ 2 ] in Z:\home\kohana.local\www\application\views\pages\users.php:2
2018-03-01 16:57:04 --- DEBUG: #0 Z:\home\kohana.local\www\application\views\pages\users.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\kohana....', 2, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#2 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(17): Kohana_View->__toString()
#5 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana.local\www\application\classes\Controller\Default.php(64): Kohana_Controller_Template->after()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana.local\www\application\views\pages\users.php:2
2018-03-01 16:57:20 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 16:57:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:02:44 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:02:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:02:59 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:02:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:03:00 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:03:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:04:46 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:04:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:04:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\classes\Model\DefaultModel.php [ 20 ] in Z:\home\kohana.local\www\application\classes\Model\DefaultModel.php:20
2018-03-01 17:04:58 --- DEBUG: #0 Z:\home\kohana.local\www\application\classes\Model\DefaultModel.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\kohana....', 20, Array)
#1 Z:\home\kohana.local\www\application\classes\Controller\Default.php(20): Model_DefaultModel->getUserList()
#2 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(84): Controller_Default->action_users()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#5 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\kohana.local\www\application\classes\Model\DefaultModel.php:20
2018-03-01 17:07:45 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:07:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:11:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\pages\users.php [ 2 ] in Z:\home\kohana.local\www\application\views\pages\users.php:2
2018-03-01 17:11:05 --- DEBUG: #0 Z:\home\kohana.local\www\application\views\pages\users.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\kohana....', 2, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#2 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(17): Kohana_View->__toString()
#5 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana.local\www\application\classes\Controller\Default.php(64): Kohana_Controller_Template->after()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana.local\www\application\views\pages\users.php:2
2018-03-01 17:11:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\pages\users.php [ 2 ] in Z:\home\kohana.local\www\application\views\pages\users.php:2
2018-03-01 17:11:07 --- DEBUG: #0 Z:\home\kohana.local\www\application\views\pages\users.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\kohana....', 2, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#2 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(17): Kohana_View->__toString()
#5 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana.local\www\application\classes\Controller\Default.php(64): Kohana_Controller_Template->after()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana.local\www\application\views\pages\users.php:2
2018-03-01 17:11:14 --- CRITICAL: ErrorException [ 1 ]: Method View::__toString() must not throw an exception, caught Error: Call to undefined function mysql_connect() ~ APPPATH\views\templates\defaultTemplate.php [ 0 ] in file:line
2018-03-01 17:11:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:18:04 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:18:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:21:55 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:21:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:22:20 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:22:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:22:21 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:22:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:23:02 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:23:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:24:43 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:24:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:24:45 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:24:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:24:54 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:24:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:24:54 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:24:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:24:56 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:24:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:25:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\pages\users.php [ 3 ] in Z:\home\kohana.local\www\application\views\pages\users.php:3
2018-03-01 17:25:02 --- DEBUG: #0 Z:\home\kohana.local\www\application\views\pages\users.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\\home\\kohana....', 3, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#2 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#3 Z:\home\kohana.local\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 Z:\home\kohana.local\www\application\views\templates\defaultTemplate.php(17): Kohana_View->__toString()
#5 Z:\home\kohana.local\www\system\classes\Kohana\View.php(62): include('Z:\\home\\kohana....')
#6 Z:\home\kohana.local\www\system\classes\Kohana\View.php(359): Kohana_View::capture('Z:\\home\\kohana....', Array)
#7 Z:\home\kohana.local\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\kohana.local\www\application\classes\Controller\Default.php(66): Kohana_Controller_Template->after()
#9 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(87): Controller_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#12 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\kohana.local\www\application\views\pages\users.php:3
2018-03-01 17:37:54 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:37:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:37:57 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:37:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:38:43 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:38:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:38:46 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:38:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:39:01 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:39:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:40:35 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:40:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:41:12 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:41:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:41:15 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:41:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:43:46 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:43:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:43:53 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:43:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:43:53 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:43:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:43:54 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:43:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:43:55 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:43:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:43:55 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:43:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:43:56 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:43:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:46:41 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:46:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:46:42 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:46:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:46:42 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:46:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:54:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: _result ~ MODPATH\database\classes\Kohana\Database\Result\Cached.php [ 48 ] in Z:\home\kohana.local\www\modules\database\classes\Kohana\Database\Result\Cached.php:48
2018-03-01 17:54:27 --- DEBUG: #0 Z:\home\kohana.local\www\modules\database\classes\Kohana\Database\Result\Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\kohana....', 48, Array)
#1 Z:\home\kohana.local\www\modules\database\classes\Kohana\Database\Result.php(243): Kohana_Database_Result_Cached->current()
#2 Z:\home\kohana.local\www\application\classes\Controller\Default.php(21): Kohana_Database_Result->offsetGet('_result')
#3 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(84): Controller_Default->action_users()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#6 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana.local\www\modules\database\classes\Kohana\Database\Result\Cached.php:48
2018-03-01 17:54:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: _result ~ MODPATH\database\classes\Kohana\Database\Result\Cached.php [ 48 ] in Z:\home\kohana.local\www\modules\database\classes\Kohana\Database\Result\Cached.php:48
2018-03-01 17:54:36 --- DEBUG: #0 Z:\home\kohana.local\www\modules\database\classes\Kohana\Database\Result\Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\\home\\kohana....', 48, Array)
#1 Z:\home\kohana.local\www\modules\database\classes\Kohana\Database\Result.php(243): Kohana_Database_Result_Cached->current()
#2 Z:\home\kohana.local\www\application\classes\Controller\Default.php(21): Kohana_Database_Result->offsetGet('_result')
#3 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(84): Controller_Default->action_users()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#6 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\kohana.local\www\modules\database\classes\Kohana\Database\Result\Cached.php:48
2018-03-01 17:55:03 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:55:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:55:05 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:55:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:55:06 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:55:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 17:55:10 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 17:55:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 18:06:27 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Default::action_users(), called in Z:\home\kohana.local\www\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Default.php [ 13 ] in Z:\home\kohana.local\www\application\classes\Controller\Default.php:13
2018-03-01 18:06:27 --- DEBUG: #0 Z:\home\kohana.local\www\application\classes\Controller\Default.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\\home\\kohana....', 13, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(84): Controller_Default->action_users()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana.local\www\application\classes\Controller\Default.php:13
2018-03-01 18:06:54 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Default::action_users(), called in Z:\home\kohana.local\www\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Default.php [ 13 ] in Z:\home\kohana.local\www\application\classes\Controller\Default.php:13
2018-03-01 18:06:54 --- DEBUG: #0 Z:\home\kohana.local\www\application\classes\Controller\Default.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\\home\\kohana....', 13, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(84): Controller_Default->action_users()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana.local\www\application\classes\Controller\Default.php:13
2018-03-01 18:06:58 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Default::action_users(), called in Z:\home\kohana.local\www\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Default.php [ 13 ] in Z:\home\kohana.local\www\application\classes\Controller\Default.php:13
2018-03-01 18:06:58 --- DEBUG: #0 Z:\home\kohana.local\www\application\classes\Controller\Default.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\\home\\kohana....', 13, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(84): Controller_Default->action_users()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana.local\www\application\classes\Controller\Default.php:13
2018-03-01 18:08:09 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Default::action_users(), called in Z:\home\kohana.local\www\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Default.php [ 13 ] in Z:\home\kohana.local\www\application\classes\Controller\Default.php:13
2018-03-01 18:08:09 --- DEBUG: #0 Z:\home\kohana.local\www\application\classes\Controller\Default.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\\home\\kohana....', 13, Array)
#1 Z:\home\kohana.local\www\system\classes\Kohana\Controller.php(84): Controller_Default->action_users()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Default))
#4 Z:\home\kohana.local\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\kohana.local\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\kohana.local\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\kohana.local\www\application\classes\Controller\Default.php:13
2018-03-01 18:08:17 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 18:08:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 18:08:25 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 18:08:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 18:08:25 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 18:08:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 18:08:26 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 18:08:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 18:12:05 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 18:12:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 18:12:07 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 18:12:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 18:21:15 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 18:21:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 18:21:29 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 18:21:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 18:21:30 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 18:21:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-03-01 18:22:26 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in Z:\home\kohana.local\www\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2018-03-01 18:22:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line