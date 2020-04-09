<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php
  require_once('menu_bar.php');
  ?>
    That is incorrect.
    <?php
        //get info passed by last page

        $info = prepare_query_string();

        //print correct answer
        $answer = $info['correct_answer'];
        echo "<br>"."The correct answer is ".$answer.".";
    ?>
    <form action="nrplaygame.php" method="post" id="form_id">
    	<input type="submit" name="next_problem" id="next_problem" value="Next Problem" />
    </form>
</body>
</html>
