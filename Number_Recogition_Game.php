<?php
    require_once 'edit_number_recognition_DB.php';
    define("FILENAME","number_recognition_testing.txt");
    define("POINTS_TO_WIN",5);
    define("NUM_PROBS",6);

    class NRGame {
        //instance variables
        public $numQCorrect;
        public $numQTotal;
        public $gameWon;
        public $problems;

        //constructor (initializes instance variables to zero)
        public function __construct(){
            $this->numQCorrect = 0;
            $this->numQTotal = 0;
            $this->points = 0;
            $this->gameWon = false;
            $this->problems = array();
        }

        //get problems from file and store in array
        function get_problems(){
            $file = fopen(FILENAME,"r") or die ("Unable to open file");
            while(!feof($file)){
                $line = fgets($file);
                $info = explode(" ",$line);
                $this->problems[]=$info;
            }
            fclose($file);
        }

        //play one turn of the game, assuming the user
        //always says ones (do html code for user input later)
        function play_turn(){
            $prob_num = rand(1,NUM_PROBS)-1;
            $number = $this->problems[$prob_num][0];
            $digit = $this->problems[$prob_num][1];
            $answer = $this->problems[$prob_num][2];
            echo "For the number ".$number.", what place is the ".$digit." in?"."<br>";
            if($number<100){
                $num_digits = 2;
            }
            else{
                $num_digits = 3;
            }
            //would get user input here
            //assuming user entered "ones"
            $userAnswer = "ones";
            if(strcmp($userAnswer,$answer)==0){
                echo "That is correct! You get one point."."<br>";
                $this->numQCorrect ++;
            }
            else{
                echo "That is incorrect. The correct answer is ".$answer."."."<br>";
            }
            $this->numQTotal ++;
        }

        //play one round of the game
        //(until the user wins with 5 correct answers)
        function play_game(){
            $this->get_problems();
            while($this->numQCorrect<POINTS_TO_WIN){
                $this->play_turn();
            }
            echo "You won! You got ".$this->numQCorrect." out of ".$this->numQTotal." questions correct."."<br>";
        }
    }

    //test with one round of the game
    $test_game = new NRGame();
    $test_game->play_game();
?>
