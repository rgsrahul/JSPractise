<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>S</th>
            <th>M</th>
            <th>T</th>
            <th>W</th>
            <th>T</th>
            <th>F</th>
            <th>S</th>
        </tr>
</thead>
    <tbody>

    <?php
    
    $today = date('d-m-Y');
    $total_days = date('t');
    $day = date('l');
    //echo $total_days;
    //echo $day;
    for($i=1;$i<=$total_days;$i++){
        echo "<tr style='float:left;padding:15px;'>
                <td onmouseover='over()'>$i</td>
              </tr>   
        ";
    }
 
    ?>
    </tbody>
</table>
<script>
    let date = new Date();
    function over(){
       if()
    }
</script>
</body>
</html>