<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="action" action="" method="POST">
        <input type="text" name="idade" placeholder="digite a idade do nadador">
        <input type="submit">
    </form>
</body>
<?php
$idade = $_POST['idade'];
if($idade >= 5 && $idade <= 7){
    echo 'Está na categoria INFANTIL "A"';
}else if($idade >= 8 && $idade <= 10){
    echo 'Está na categoria INFANTIL "B"';
}else if($idade >= 11 && $idade <= 13){
    echo 'Está na categoria JUVENIL "A"';
}else if($idade >= 14 && $idade <= 17){
    echo 'Está na categoria INFANTIL "B"';
}else if($idade >17){
    echo 'Está na categoria SÊNIOR';
}
?>
</html>