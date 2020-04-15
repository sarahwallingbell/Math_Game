<?php
echo "<pre>";
$fileName = "subtraction_testing.txt";
$myFile = fopen(getcwd()."/".$fileName, "a+");
$fileContents = file_get_contents($myFile, NULL);

//variable $myFile holds the addition database


extract($_POST);
$line = "".$firstnumber." ".$secondnumber." ".$difference." ";
if (isset ($_POST['add_problem'])){
	if ($firstnumber =="" or $secondnumber == "" or !isset($difference)){
		echo "Incomplete problem information, please fill all fields and try again.";
		header("refresh:3; url=add_remove_addition.php");
	}
	//if we get here, that means that all fields are entered
	elseif (strpos($fileContents, ($line)) !== false){
		echo "Problem already exists in problem set!";
	}
	//all fields entered, but result is negative
	elseif ($firstnumber - $secondnumber < 0) {
		echo "Sorry, only problems with a positive result are allowed.";
	}
	//all fields entered, but number1-number2 != difference
	elseif ($firstnumber - $secondnumber !== $difference){
		echo "Error: ".$firstnumber."- ".$secondnumber." does not equal ".$difference.".";
	}
	else{
		//add the line to the contents of the file
		echo "success";
		$fileContents .= $line;
		//overwrite the old file
		file_put_contents($fileName, $fileContents);
	}		
}
elseif (isset($_POST['remove_problem'])){
	if ($firstnumber =="" or $secondnumber == "" or !isset($sum)){
		echo "Incomplete problem information, please fill all fields and try again.";
		header("refresh:3; url= add_remove_addition.php");
	}
	//if we get here, that means that all fields are entered
	elseif (strpos($fileContents, ($line)) == false){
		echo "Problem does not exist in problem set, please try again.";
	}
	//if we get here, we should remove it.
	else {
		//get rid of the line
		//str_replace($line, "", $fileContents, 1);
		//overwrite the old file
		//file_put_contents($fileName, $fileContents);
	}

}








?>
