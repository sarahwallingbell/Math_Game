<?php
    define("FILENAME","additionDB.txt");
    define("POINTS_TO_WIN",10);

    $burger_images = array();
    $burger_images[]="burger0.PNG";
    $burger_images[]="burger1.PNG";
    $burger_images[]="burger2.PNG";
    $burger_images[]="burger3.PNG";
    $burger_images[]="burger4.PNG";
    $burger_images[]="burger5.PNG";
    $burger_images[]="burger6.PNG";
    $burger_images[]="burger7.PNG";
    $burger_images[]="burger8.PNG";
    $burger_images[]="burger9.PNG";
    $burger_images[]="burger10.PNG";

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
