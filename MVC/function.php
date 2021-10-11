<?php

function autoLoadClass($c)

{
	
	if (is_file("Model/$c.php"))
		include "Model/$c.php";
	elseif (is_file("Controller/$c.php"))
		include "Controller/$c.php";
		
	else {
			echo "No class $c"; exit;
		}

}
function getIndex($index, $default)
{

	return isset($_GET[$index])?$_GET[$index]:$default;
}

function currency_format($number, $suffix = 'đ') 
{
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
}


?>

		