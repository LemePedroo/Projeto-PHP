<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form name="action" action="" method="POST">
        <input type="text" name="num1" placeholder="digite um numero:">
        <input type="text" name="num2" placeholder="digite um numero:">
        <input type="text" name="num3" placeholder="digite um numero:">
        <input type="submit">
    </form>

</body>
<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$sorte = array($num1, $num2, $num3);
rsort($sorte);
print "Descrescente: ";
for($i=0; $i<3; $i++){
    print $sorte[$i]. " ";
}
sort($sorte);
print "<br>";
print "Crescente: ";
for($i=0; $i<3; $i++){
    print $sorte[$i]. " ";
}
?>

</html>