<?  
$a = ['01', '02', '03'];
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    for ($i=0; $i<count($a); $i++) {
       echo '<li>'.$a[$i].'</li>'.$a[$i];
    }

    echo !$a ?  'done' : 'etc';

    echo "{$a[0]}<br>";


    
    ?>
</body>
</html>