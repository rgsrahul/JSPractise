<?php
function divide($dividend,$divisor){
    if($divisor == 0){
      throw new Exception('Division by zero');
    }
    else{
         return $dividend / $divisor;
    }
}
echo divide(25,5);
?>