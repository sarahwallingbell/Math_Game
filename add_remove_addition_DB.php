<?php
echo "<pre>";
$fileName = "addition_testing.txt";
$myFile = fopen(getcwd()."/".$fileName, "a+");
$fileContents = file_get_contents($myFile, NULL);

//variable $myFile holds the addition database


extract($_POST);
$line = "".$firstnumber." ".$secondnumber." ".$sum." ";
if (isset ($_POST['add_problem'])){
	if ($firstnumber =="" or $secondnumber == "" or !isset($sum)){
		echo "Incomplete problem information, please fill all fields and try again.";
		header("refresh:3; url=add_remove_addition.php");
	}
	//if we get here, that means that all fields are entered
	elseif (strpos($fileContents, ($line)) !== false){
		echo "Problem already exists in problem set!";
	}
	//check to see if the numbers actually equal the sum
	elseif ($firstnumber + $secondnumber !== $sum) {
		echo "Error: the first two numbers do not equal the sum";
	}
	else {
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
	//if we get
	else {
		//get rid of the line
		//str_replace($line, "", $fileContents, 1);
		//overwrite the old file
		//file_put_contents($fileName, $fileContents);
	}

}








?>
