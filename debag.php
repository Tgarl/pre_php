<?
function Debug($message, $title = false, $color = '#996600')
	{
		
		
			echo '<table border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #d7d6ba; background-color: #FEFDEA; margin: 2px;"><tr><td style="padding: 10px 8px 10px 8px;">';

			if (strlen($title) > 0) { echo '<p style="color:'.$color.'; font-size: 11px; font-family: Verdana;"><b>['.$title.']</b></p>'; }

			echo '<pre style="color:'.$color.'; font-size:11px; font-family:Verdana;">';  
			if (is_array($message) || is_object($message)) { print_r($message); } else { var_dump($message); }
			echo '</pre>';
			
			echo '</td></tr></table>';
		
	}
?>