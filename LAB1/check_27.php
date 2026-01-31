<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>

<body>
    <p>
        <?php
        $number_check = 27;
        if ($number_check % 3 == 0) {
            echo "$number_check кратне 3";
        } else {
            echo "$number_check не кратне";
        }
        ?>
    </p>

</body>

</html>