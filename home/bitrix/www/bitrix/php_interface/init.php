<?
	if(file_exists($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/functions-dump.php"))
		require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/functions-dump.php");
	
	if(file_exists($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/agent.php"))
		require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/agent.php");
	
	if(file_exists($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/events.php"))
		require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/events.php");
?>