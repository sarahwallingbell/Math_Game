<?php
    define("FILENAME","additionDB.txt");
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
        $number1 = $problems[$prob_num][0];
        $number2 = $problems[$prob_num][1];
        $current_answer = $problems[$prob_num][2];
        echo $number1." + ".$number2." = ";
        return $current_answer;
    }
?>
