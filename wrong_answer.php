<!DOCTYPE html>
<html>
<head>
</head>
<body>

<style type="text/css">
.center_text{
    text-align: center;
}
</style>

  <?php
  require_once('menu_bar.php');
  ?>
  <br><br><br>
  <div class="center_text">That is incorrect.</div>
    <?php
        //get info passed by last page

        $info = prepare_query_string();

        //print correct answer
        $answer = $info['correct_answer'];
        echo <<<_END
            <div class="center_text">The correct answer is $answer.</div>
            <br>
        _END;
    ?>
    <form action="nrplaygame.php" method="post" id="form_id" class="center_text">
    	<input type="submit" name="next_problem" id="next_problem" value="Next Problem" />
    </form>
</body>
</html>
