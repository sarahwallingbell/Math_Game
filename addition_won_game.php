<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <style type="text/css">
    .center{
    	display: block;
    	margin-left: auto;
    	margin-right: auto;
    	width: 50%;
    }
    .center_text{
    	text-align: center;
    }
    </style>
    <div class="center_text">You won!</div>
<?php
require_once("additiongame.php");
session_start();
$current_image = $_SESSION['burger_image'];
session_unset();
session_destroy();
echo <<<_END
    <br>
    <img class="center" src=$burger_images[$current_image]>
_END;
?>
</body>
</html>
