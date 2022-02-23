<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h3>Retrive records asynchronusly</h3>
    
      <?php
      $server = "localhost";
      $username ='root';
      $pass = '';
      $db = 'orders';
      $dbconn = new mysqli($server,$username,$pass,$db);
      if($dbconn->connect_error){ die("connection failed".$connect_error);}
      else{
      $query = "select * from order";
      $query1 = $dbconn->query($query);
      echo (mysqli_num_rows($query1) > 0) ? 'success' : "fail";
      }
      
      ?>
        <input type='text' name='text' id='text'>
        <input type='submit' id='submit' name='submit'>
 
    
   <div id='demo'></div>
<script>
 
  $('input#submit').on('click',function(){

     var text = $('input#text').val();  
     if($.trim(text) != ''){
        $.post('first.php',{text : text},function(data){
            $('#demo').text(data);
        });
     }
      //alert(text);
      //alert($('input#text').val());
  });
</script>    
</body>
</html>