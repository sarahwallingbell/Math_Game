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
unset($_SESSION['correct']);
unset($_SESSION['burger_image']);
unset($_SESSION['total']);
echo <<<_END
    <br>
    <img class="center" src=$burger_images[$current_image]>
    <br>
    <form action="welcome.php" method="post" id="form_id" class:"center_text">
        <div id="button">
    	<input type="submit" name="return_menu" id="return_menu" value="Return To Menu" />
        </div>
    </form>
_END;
?>
</body>
</html>
