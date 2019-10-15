<?php  
  
function swapping(&$arr) { 
    $n = sizeof($arr); 
	$v=0;
 
    for($i = 0; $i < $n; $i++){ 
  
        for ($j = 0; $j < $n - 1; $j++){ 
             
            if ($arr[$j] > $arr[$j+1]){ 
				
				$v = $v+1;
                $t = $arr[$j]; 
                $arr[$j] = $arr[$j+1]; 
                $arr[$j+1] = $t; 
				
            for ($l = 0; $l < $n; $l++) 
				echo $arr[$l]." ";
			
			echo '</br>';
			
			}
			
		} 
		
		$GLOBALS['swap'] = $v ;
		$GLOBALS['firstElement'] = reset($arr);
		$GLOBALS['lastElement'] = end($arr);
    } 
} 
   
$arr = array(3,2,1,7,6,5); 
$len = sizeof($arr); 

swapping($arr); 

echo "Sorted array : "; 
  
for ($i = 0; $i < $len; $i++) 
    echo $arr[$i]." "; 
echo '</br>';

echo "First element : $firstElement";
echo '</br>';

echo "Last element : $lastElement";
echo '</br>';

echo "No of swaps : $swap" ;
  
?> 