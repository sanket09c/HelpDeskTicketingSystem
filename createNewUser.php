<?php
/**
 *
 */

//print_r($_POST);

require_once("config.php");

// Assigning $_POST values to individual variables for reuse.
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];



//Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
//successfull and 0 when there is an error with executing the query .

$newuser = createNewUser($fname, $lname, $username, $password);
header("Location: index.php");
die();
//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//insert is completed successfully.
//echo $newuser;
?>
