<?php
    define("FILENAME","number_recognition_DB.txt");
    define("POINTS_TO_WIN",5);
    define("NUM_PROBS",6);

    //get problems from file and store in array
    function get_problems(){
        $file = fopen(FILENAME,"r") or die ("Unable to open file");
        while(!feof($file)){
            $line = fgets($file);
            $info = explode(" ",$line);
            $problems[]=$info;
        }
        fclose($file);
        return $problems;
    }

    //pick a problem and print it
    function pick_print_problem(){
        $problems = get_problems();
        $prob_num = rand(1,NUM_PROBS)-1;
        $number = $problems[$prob_num][0];
        $digit = $problems[$prob_num][1];
        $current_answer = $problems[$prob_num][2];
        echo "For the number ".$number.", what place is the ".$digit." in?"."<br>";
        return $current_answer;
    }
?>
