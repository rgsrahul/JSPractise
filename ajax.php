<?php 

$text = $_POST['value'];
if(isset($_POST['value']) === true){
    include "conn.php";
    $query = "select * from customer_orders where order_id=$text";
    $query1 = $dbconn->query($query);
    if($query1){
        while($data = mysqli_fetch_assoc($query1)){
            echo "order_id :".$data['order_id']."</br>"."Product Name:".$data['name'];
        }
    }
    else{
        echo "query is not running";
    }

    //echo "name is : ".$text;
}
else{
    echo "enter correct id";
}
 
//echo "hello sharma";
?>