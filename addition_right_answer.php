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
    <div class="center_text">That is correct! You have earned the next piece of your burger!</div>
    <?php
    require_once("additiongame.php");
    session_start();
    $current_image = $_SESSION['burger_image'];
    echo <<<_END
    <br>
    <img class="center" src=$burger_images[$current_image]>
    <form action="additionplaygame.php" method="post" id="form_id" class:"center_text">
    	<input type="submit" name="next_problem" id="next_problem" value="Next Problem" />
    </form>
    _END;
    ?>
</body>
</html>
