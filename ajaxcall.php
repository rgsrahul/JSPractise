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
    <h2>Ajax call Practise</h2>
   <input type='text' name='text' id='text'>
    <input type='submit' name='submit' id='submit'>
    <div id='demo'></div>
  <script>
   
      $(document).ready(function(){
          $('#submit').click(function(){
              var value = $('#text').val();
              $.post('ajax.php',{value : value},function(data){
                   $('#demo').html(data);
              });
          });
      });
  </script>  
</body>
</html>