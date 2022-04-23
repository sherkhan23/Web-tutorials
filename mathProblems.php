<?php 

function test(){
  $a = rand(0, 1000);
  if ($a % 2 == 0){
    echo $a;
  }
  else{
    echo $a + 1;
  }
}

return test();

 ?>
 
