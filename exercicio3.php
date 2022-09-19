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
        <input type="text" name="num1" placeholder="digite o primeiro lado do triangulo:">
        <input type="text" name="num2" placeholder="digite o segundo lado do triangulo:">
        <input type="text" name="num3" placeholder="digite o terceiro lado do triangulo:">
        <input type="submit">
    </form>
</body>
<?php
$lado1 = $_POST['num1'];
$lado2 = $_POST['num2'];
$lado3 = $_POST['num3'];
if($lado1 == $lado2 && $lado2 == $lado3){
    echo 'É um Triangulo Equilátero';
}else if($lado1 != $lado2 && $lado2 != $lado3){
    echo 'É um Triangulo Escaleno';
}else{
    echo 'É um Triangulo Isósceles';
}
?>
</html>