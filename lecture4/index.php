<?php
    include_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PDO</title>
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="?menu=insert">INSERT</a></li>
            <li><a href="?menu=select">SELECT</a></li>
            <li><a href="?menu=update">UPDATE</a></li>
            <li><a href="?menu=delete">DELETE</a></li>
        </ul>
    </div>
    <div class="container">
        <?php
            if(isset($_GET["menu"]) && $_GET["menu"]=="insert"){
                include "queries/insert.php";
            }
        ?>
    </div>
</body>
</html>