<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<style> 
#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  display: none;
}
</style>
<body>
     
   <form id='form'> 
    <input type='text' name='text' value='' id='text'> 
    <input type='submit' id='submit' name='submit'>
   </form>

   <div id='demo'></div> 

    <script>
    $(document).ready(function(){
    $("#form").submit(function(event){
        event.preventDefault();
        //var formData = new FormData(this);
        var text = $('#text').val();
          $.ajax({
             url: 'first.php',
             type: 'POST',
             data: 'text',
             async: false,
             success: function(data) {
               alert(data);
            },
            cache: false,
            contentType: false,
            processData: false
        });
     });
});
        
     /*   $(document).ready(function(){
         $('#btn2').click(function(){
          $('#demo1').load('first1.php',function(responseTxt,statusTxt,xhr){
              if(statusTxt=='success'){
                  alert('data has loaded successfully');
              }
              else{
                  alert("Error:" + xhr.status);
              }
          })
         });
        });

        $(document).ready(function(){
            $('#btn2').click(function(){
                $.ajax({url : 'first1.php', success : function(result){
                     alert('success');
                }
                });
            });
        });*/

       
    </script>
</body>
</html>