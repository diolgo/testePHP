<?php
class ShowNumberList(){
  for($i = 1; $i <= 100; $i++){
    echo CheckNumber(&i);
  }
	
  function CheckNumber($num){
    switch($num){
	  case $num % 3 == 0 && $num % 5 == 0:
	    return "BHUT IT";
	  case $num % 3 == 0:
	    return 'BHUT';
		break;
	  case $num % 5 == 0: 
	    return 'IT';
		break;
	  default:
		return $num;
	}
  }	
}
?>

