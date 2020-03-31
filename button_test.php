<!DOCTYPE html>
<html>
<head>
</head>
<body>

    <?php
    define("FILENAME","number_recognition_testing.txt");
    define("POINTS_TO_WIN",5);
    define("NUM_PROBS",6);

    global $numQCorrect;
    global $numQTotal;
    global $gameWon;
    global $problems;
    global $current_answer;

    function get_problems(){
        $file = fopen(FILENAME,"r") or die ("Unable to open file");
        while(!feof($file)){
            $line = fgets($file);
            $info = explode(" ",$line);
            $problems[]=$info;
        }
        fclose($file);
    }

    function pick_print_problem(){
        $prob_num = rand(1,NUM_PROBS)-1;
        $number = $problems[$prob_num][0];
        $digit = $problems[$prob_num][1];
        $current_answer = $problems[$prob_num][2];
        echo "For the number ".$number.", what place is the ".$digit." in?"."<br>";
    }

    function check_answer(){
        $userAnswer = $_GET["digitplace"];
        if(strcmp($userAnswer,$current_answer)==0){
            echo "That is correct! You get one point."."<br>";
            $numQCorrect ++;
        }
        else{
            echo "That is incorrect. The correct answer is ".$answer."."."<br>";
        }
        $numQTotal ++;
    }

    get_problems();
    pick_print_problem();
    ?>

    <form action="button_test.php" method="get">
        Answer:<input type="text" name="digitplace">
        <input type="submit">
    </form>

    <?php
    check_answer();
    ?>

</body>
</html>
