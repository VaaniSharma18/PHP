<?php
$range = 10;
$ans = " ";
$first = 0;
$second = 1;
$fibonacci = 0;
for($i=0;$i<=$range;$i++){
    if($i<=1){
        $fibonacci = $i;
        $ans .= $fibonacci . " ";
    }
    else{
        
        $first = $second;
        $second = $fibonacci;
        $fibonacci = $first + $second;
        $ans .= $fibonacci . " ";
        
    }
}
echo "$ans" ;




?>
