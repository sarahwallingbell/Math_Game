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
    <?php
    require_once("menu_bar.php");
    ?>
    <br><br><br>
    <div class="center_text">That is correct! You have earned the next piece of your burger!</div>
    <?php
    require_once("subtractiongame.php");
    session_start();
    $current_image = $_SESSION['burger_image_sub'];
    echo <<<_END
    <br>
    <img class="center" src=$burger_images[$current_image]>
    <br>
    <form action="subtractionplaygame.php" method="post" id="form_id" class:"center_text">
        <div id="button">
        <input type="submit" name="next_problem" id="next_problem" value="Next Problem">
        </div>
    </form>
    _END;
    ?>
</body>
</html>
