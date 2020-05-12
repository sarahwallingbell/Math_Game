<?php

require_once('subtractiongame.php');
require_once('config.php');
require_once('files.php');
//get info passed by last page
$arr = prepare_query_string();

print_r($arr);
//if correct method, check answer
if($arr['method']==1){
    check_answer($arr['answer'], $arr['username'], $arr['current_problem']);
}

//check answer and redirect appropriately
function check_answer($right_answer, $username, $problem){
    session_start();

      increment_num_probs_attempted(SUBPROGRESSFILE, $username);
    //increase total question count by 1
    if(isset($_SESSION['sub_total'])){
        $_SESSION['sub_total']++;
    }
    else{
        $_SESSION['sub_total']=1;
    }
    //extract user answer
    $user_answer= $_POST["digitplace"];
    if($user_answer==$right_answer){

    $array_txt = include 'subtraction_got_wrong.txt';
    $num = sizeof($arr_txt) -1;
    echo $num;

    if(!($num == 0)){
      $new_array = include 'subtraction_got_wrong.txt';

     // print_r($new_array);

      $prob = explode("-", $problem);
      $answ = explode(" ", $right_answer);
      $ques = array_merge($prob, $answ);

      $key = array_search($ques, $new_array);

      //grab num of questions
      $newTotal = $new_array['total']--;

      $final_array = array_splice($new_array, $key, 1);
      

      $array = array('total' => $newTotal -1);
      print_r($final_array);
      $high_array = array_merge($array, $final_array);

    file_put_contents('subtraction_got_wrong.txt',  '<?php return ' . var_export($high_array, true) . ';');
    }





      increment_num_probs_correct(SUBPROGRESSFILE, $username);
    //increase correct question count by 1
        if(isset($_SESSION['sub_correct'])){
            $_SESSION['sub_correct']++;
        }
        else{
            $_SESSION['sub_correct']=1;
        }
        $_SESSION['burger_image_sub']++;
    //go to correct answer page if haven't won, or to win screen if have

        if($_SESSION['sub_correct']<POINTS_TO_WIN){
            header("Location: subtraction_right_answer.php");
        }
        else{
          increment_num_games_won(SUBPROGRESSFILE, $username);
            header("Location: subtraction_won_game.php");
        }

    }
    else{
        // turn question and answer into one array
    $big_array = array();
//merge wrong array with ques then submit wrong array to file_ptu
    $prob = explode("-", $problem);
    $answ = explode(" ", $right_answer);
    $ques = array_merge($prob, $answ);

    $the_array = array_merge($big_array, $ques);

   // $new_array = array(0=>$the_array);

    $new_array = include 'subtraction_got_wrong.txt';
    if(isset($new_array['total'])){
        $new_array[$new_array['total']] = $the_array;
        $new_array['total']++;

    }
    
    print_r($new_array);


   //     print_r($prob);
   //     print_r($answ);
   //     print_r($ques);

  //  print_r($the_array);


    file_put_contents('subtraction_got_wrong.txt',  '<?php return ' . var_export($new_array, true) . ';');

    //go to incorrect answer page
        // header("Location: subtraction_wrong_answer.php?correct_answer=$right_answer");
    }
}

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
?>
