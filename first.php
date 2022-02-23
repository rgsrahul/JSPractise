<?php
 require "conn.php";
 require_once "conn.php";
  $result = "select * from customer_orders";
  $result1 = $dbconn->query($result);
  if(mysqli_num_rows($result1) > 0){
   while($data = mysqli_fetch_assoc($result1)){
       echo $data['order_id']."</br>".$data['name'];
   }
  }
  else{
    echo "fail";
  }
  
?>