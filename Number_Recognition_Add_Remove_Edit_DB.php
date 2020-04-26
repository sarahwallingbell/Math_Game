<?php
echo "<pre>";
$fileName = "number_recognition_testing.txt";
$myFile = fopen($fileName, "w+");
$fileContents = file_get_contents($myFile, NULL); 

//variable $myFile holds the number recognition database


extract($_POST);
$line = "".$number." ".$place." ".$digit." ";
if (isset ($_POST['add_problem'])){
	if ($number =="" or $digit == "" or !isset($place)){ 
		echo "Incomplete problem information, please fill all fields and try again.";
		header("refresh:3; url=add_remove_problem_number_recognition.php");
	}
	//if we get here, that means that all fields are entered
	elseif (strpos($fileContents, ($line)) !== false){
		echo "Problem already exists in problem set!";
	}
	//if we get 
	else {
		//add the line to the contents of the file
		echo "success";
		$fileContents .= $line;
		//overwrite the old file
		file_put_contents($fileName, $fileContents);
		
	}
}
elseif (isset($_POST['remove_problem'])){
	if ($number =="" or $digit == "" or !isset($place)){ 
		echo "Incomplete problem information, please fill all fields and try again.";
		header("refresh:3; url=add_remove_problem_number_recognition.php");
	}
	//if we get here, that means that all fields are entered
	elseif (strpos($fileContents, ($line)) == false){
		echo "Problem does not exist in problem set, please try again.";
	}
	//if we get 
	else {
		//get rid of the line
		str_replace($line, "", $fileContents, 1);
		//overwrite the old file
		file_put_contents($fileName, $fileContents);
	}

}

?>


