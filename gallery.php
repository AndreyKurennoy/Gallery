<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <table class="table table-hover">
        <tr>
            <td> Фото</td> <td>Название</td> <td>Размер</td>
        </tr>

    <?php
    $var = './gallery/';
    $handle = opendir('./gallery');                         //открываю директорию галлереи
    while (($element = readdir($handle))){                  //считываю все элементы
        if($element != "." and $element !="..") {

            $size = filesize($var . $element);
            echo "<tr>";
            echo "<td><a href=\"$var/$element\"><img src ='$var/$element' height='80px' width='100px'></a></td>";
            echo "<td>$element</td>";
            echo "<td>$size Байт</td>";

            echo "</tr>";

        }
    }closedir($handle);




?>
        </table>
    </div>

</body>
</html>

<?php

?>