<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            text-align: center;
        }
    </style>
</head>

<body>
    <p>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo " " . $i . " ";
    }
    ?>
    </p>
</body>

</html>