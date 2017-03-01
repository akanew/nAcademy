<?
	if(file_exists($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/constants.php"))
		require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/constants.php");
	
	if(file_exists($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/functions-dump.php"))
		require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/functions-dump.php");
	
	/*if(file_exists($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/agent.php"))
		require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/agent.php");*/
	
	if(file_exists($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/events.php"))
		require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/events.php");
	
	//global $DB; 
	//$results = $DB->Query("DELETE FROM `b_agent` WHERE `NAME` like 'agentCheckStocks();'");	 
?>