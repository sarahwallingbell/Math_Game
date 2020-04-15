<?php
    define("FILENAME","additionDB.txt");
    define("POINTS_TO_WIN",10);

    $burger_images = array();
    $burger_images[]="goodburger00.jpg";
    $burger_images[]="goodburger01.jpg";
    $burger_images[]="goodburger02.jpg";
    $burger_images[]="goodburger03.jpg";
    $burger_images[]="goodburger04.jpg";
    $burger_images[]="goodburger05.jpg";
    $burger_images[]="goodburger06.jpg";
    $burger_images[]="goodburger07.jpg";
    $burger_images[]="goodburger08.jpg";
    $burger_images[]="goodburger09.jpg";
    $burger_images[]="goodburger10.jpg";

    $burger_height = array();
    $burger_height[] = 200;
    $burger_height[] = 230;
    $burger_height[] = 260;
    $burger_height[] = 290;
    $burger_height[] = 320;
    $burger_height[] = 350;
    $burger_height[] = 380;
    $burger_height[] = 410;
    $burger_height[] = 440;
    $burger_height[] = 470;
    $burger_height[] = 500;


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
        global $num_probs;
        $problems = get_problems();
        $prob_num = rand(1,$num_probs)-1;
        $number1 = $problems[$prob_num][0];
        $number2 = $problems[$prob_num][1];
        global $current_answer;
        $current_answer = $problems[$prob_num][2];
        return $number1." + ".$number2." = ";
    }
?>
