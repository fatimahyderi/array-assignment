<?php
function leftrotation(&$arr ,$count) {
        for ($i = 0; $i < $count; $i++) {
            array_push($arr, array_shift($arr));
        }
    }
	
	
		$integers = array('1','2','3','4','5','6','7','8','9','10');
		$rotate = 3;
		leftrotation($integers, $rotate);
		echo implode(" ",$integers);
   
   ?>