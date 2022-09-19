<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        table,
        tr {
            border-collapse: collapse ;
            border: 1px solid black;
            width: 600px;
            height: auto;
            margin: 0 auto;
            font-family: Arial, Helvetica, sans-serif;
            text-align: justify;
        }

        td {
            text-align: center;
            font-size: 15px;
            color: #666666;
        }
    </style>
</head>

<body>
    <?php
    $contador = 0;
    echo "<table>";
    for ($i = 0; $i < 31; $i++) {
        echo "<tr>";

        if ($contador % 2 == 0) {
            echo '<td>';
            echo 'Pedro Henrique Leme';
            echo '</td>';
            $contador++;
        } else {
            echo '<td style="background-color: gray; color: yellow">';
            echo 'Pedro Henrique Leme';
            echo '</td>';
            $contador++;
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>

</html>