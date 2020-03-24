<?php

$question_and_answer;

//generates file, uses generate_question_and_answer()
function generate_file(){
//variable $myFile holds the number recognition database
$myFile = fopen("number_recognition_DB.txt", "c");

//loop generates the file
for ($i=10; $i < 1000; $i++) {
	$str =$i."_";
	fwrite($myFile, $str);
	generate_question_and_answer($i);
	fwrite($myFile, $question_and_answer);
	}

	fclose($myFile);
}

function generate_question_and_answer($num){
	$str = $num;

	$randomChar = $str[rand(0, strlen($str)-1)];

	$question = "What place is the $randomChar in?_";

	$pos= strpos($num, $randomChar);

	if($pos == 0){
		$answer="Ones_";
	}
	if($pos == 1){
		$answer="Tens_";
	}
	if($pos == 2){
		$answer="Hundreds_";
	}
	$question_and_answer=$question.$answer;

}


?>
