<?php
    define("FILENAME","subtractionDB.txt");
    define("POINTS_TO_WIN",4);

    $icecream_images = array();
    $icecream_images[]="icecream0.png";
    $icecream_images[]="icecream1.png";
    $icecream_images[]="icecream2.png";
    $icecream_images[]="icecream3.png";
    $icecream_images[]="icecream4.png";


    $icecream_height = array();
    $icecream_height[] = 100;
    $icecream_height[] = 150;
    $icecream_height[] = 180;
    $icecream_height[] = 190;
    $icecream_height[] = 210;


    global $num_probs;
    global $current_answer;
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
    function pick_problem(){
        $random_num = rand(1,100);
        $arr = include 'subtraction_got_wrong.txt';
        $num = sizeof($arr) -1;
        echo $num;

        if($num == 0){
        global $num_probs;
        $problems = get_problems();
        $prob_num = rand(1,$num_probs)-1;
        $number1 = $problems[$prob_num][0];
        $number2 = $problems[$prob_num][1];
        global $current_answer;
        $current_answer = $problems[$prob_num][2];
        return $number1."-".$number2."=";
        }
        else if ($random_num > 30){
        global $num_probs;
        $problems = get_problems();
        $prob_num = rand(1,$num_probs)-1;
        $number1 = $problems[$prob_num][0];
        $number2 = $problems[$prob_num][1];
        global $current_answer;
        $current_answer = $problems[$prob_num][2];
        return $number1."-".$number2."=";
        }
        else {
        $array_of_numbers = include 'subtraction_got_wrong.txt';
        $max = sizeof($array_of_numbers) - 1;
        echo $max;
        $random = rand(0,$max-1);


        $the_question = $array_of_numbers[$random];
        print_r($the_question);

        $first = $the_question[0]; 
        $second = $the_question[1];

        global $current_answer; 
        $current_answer = $the_question[2];
            
        return $first."-".$second."=";
        }
    }
?>
