<?php

generate_file();

//generates file, uses generate_question_and_answer()
function generate_file(){
	//variable $myFile holds the number recognition database
	$myFile = fopen("number_recognition_DB.txt", "c");

	//loop generates the file
	for ($i=10; $i<1000; $i++) {
		$nums=str_split($i);
		//check for duplicate digits
		$duplicate = false;
		if(strlen($i)==3){
			if($nums[0]==$nums[1] || $nums[0]==$nums[2] || $nums[1]==$nums[2]){
				$duplicate = true;
			}
		}
		else{
			if($nums[0]==$nums[1]){
				$duplicate = true;
			}
		}
		if(!$duplicate){
			$str =$i." ";
			fwrite($myFile, $str);
			$question_and_answer = generate_question_and_answer($i);
			fwrite($myFile, $question_and_answer);
			fwrite($myFile,"\n");
		}

	}
		fclose($myFile);
}

//generates a question and answer
function generate_question_and_answer($num){
	$str = $num;
	$pos = rand(0, strlen($str)-1);

	$randomChar = substr($str,$pos,1);

	if(strlen($str)==3){
		if($pos == 0){
			$answer=" hundreds ";
		}
		if($pos == 1){
			$answer=" tens ";
		}
		if($pos == 2){
			$answer=" ones ";
		}
	}
	else{
		if($pos == 0){
			$answer=" tens ";
		}
		if($pos == 1){
			$answer=" ones ";
		}
	}


	$question_and_answer=$randomChar.$answer;

	return $question_and_answer;

}
?>
