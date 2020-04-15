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
    #button{
        width:400px;
        margin:auto;
        text-align: center;
    }
    </style>
    <br><br><br>
    <div class="center_text">You won!</div>
<?php
require_once("additiongame.php");
session_start();
$current_image = $_SESSION['burger_image'];
unset($_SESSION['add_correct']);
unset($_SESSION['burger_image']);
unset($_SESSION['add_total']);
echo <<<_END
    <br>
    <img class="center" src=$burger_images[$current_image]>
    <br>
_END;
?>

<meta http-equiv="refresh" content="3;url=addition.php?user=$_SESSION[username]"/>

</body>
</html>
