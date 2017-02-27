<?
	function dump($var, $all = false)
	{
		global $USER;
		if( ($USER->GetID() == 1) || ($all == true))
		{
			echo '<font style="text-align: left; font-size: 10px"><pre>';
			var_dump($var);
			echo '</pre></font><br>';
		}
	}
?>