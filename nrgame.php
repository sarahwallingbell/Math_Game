<?php
    define("FILENAME","number_recognition_DB.txt");
    define("POINTS_TO_WIN",5);

    global $num_probs;
    //get problems from file and store in array
    function get_problems(){
        global $num_probs;
        $num_probs=0;
        $file = fopen(FILENAME,"r") or die ("Unable to open file");
        while(!feof($file)){
            $line = fgets($file);
            $info = explode(" ",$line);
            $problems[]=$info;
            $num_probs++;
        }
        fclose($file);
        return $problems;
    }

    //pick a problem and print it
    function pick_print_problem(){
        global $num_probs;
        $problems = get_problems();
        $prob_num = rand(1,$num_probs)-1;
        $number = $problems[$prob_num][0];
        $digit = $problems[$prob_num][1];
        $current_answer = $problems[$prob_num][2];
        echo "For the number ".$number.", what place is the ".$digit." in?"."<br>";
        return $current_answer;
    }
?>
