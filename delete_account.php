<?php
require_once 'files.php';
require_once 'config.php';

delete_account();

function delete_account() {
    //echo "Delete this account!!\n";

    session_start();
    //echo $_SESSION['username'];

    $all_user = get_user_info(USERFILE);
    //print_r($all_user);

    $all_user_update = array();
    foreach ($all_user as $key => $value) {

        if($key != $_SESSION['username']){
            $all_user_update[$key] = $value;
        }
    }
    //print_r($all_user_update);

    update_file(USERFILE, $all_user_update);

    header("Location: login.php");
    //TODO delete the $username line from the file user_file.txt
    //		 I drafted a method called delete_data() in files.php that we can call here, but I don't know
    //		 if it works yet. You can also just find the line that has the $username in it and delete that
    //		 line of the file.

    //TODO you can delete the following 5 lines whenever. They are my attempts to get the $username
    //		 we are trying to delete.
    // echo "\nthis is \$_POST:\n";
    // print_r($_POST);
    // $test = prepare_query_string();
    // echo "\nthis is \$test:\n";
    // print_r($test);

    //TODO uncomment the following two lines to write success message and redirect to the login.
    // echo "Account successfully deleted.";
    // header("refresh:3; url=login.php"); /*Redirect to login.php after 3 seconds*/
}

function prepare_query_string(){
 //echo $_SERVER['QUERY_STRING'];
 $re = [];
 $query_array = explode("&", $_SERVER["QUERY_STRING"]);
 foreach ($query_array as $key => $value) {
 $temp = explode("=", $value);
 $re[$temp[0]] = $temp[1];
 }
 return $re;
}
?>
