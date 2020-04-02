<!DOCTYPE html>
<html>
<head>
</head>
<body>
    That is incorrect.
    <?php
        //get info passed by last page
        function prepare_query_string(){
                $re = [];
                $query_array = explode("&", $_SERVER["QUERY_STRING"]);
                if(!empty($query_array[0])){
                    foreach ($query_array as $key => $value) {
                        $temp = explode("=", $value);
                        $re[$temp[0]] = $temp[1];
                }
            }
            return $re;
        }
        $info = prepare_query_string();
        //print correct answer
        $answer = $info['correct_answer'];
        echo "<br>"."The correct answer is ".$answer.".";
    ?>
    <form action="additionplaygame.php" method="post" id="form_id">
    	<input type="submit" name="next_problem" id="next_problem" value="Next Problem" />
    </form>
</body>
</html>
