<?php
/**
 *
 */

//print_r($_POST);
session_start();

require_once("config.php");
//echo $_SESSION['username'];
// Assigning $_POST values to individual variables for reuse.
$bug_name = $_POST['bug_name'];
$bug_detail = $_POST['bug_detail'];
$bug_severity = $_POST['bug_severity'];
$bug_reportedby = $_SESSION['username'];
$report_date = $_POST['report_date'];
$status = $_POST['status'];


//Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
//successfull and 0 when there is an error with executing the query .

$newuser = createNewBug($bug_name, $bug_detail, $bug_severity, $bug_reportedby, $report_date, $status);


    header("Location: displayAllRecords.php");
    die();
//}

//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//insert is completed successfully.
//echo $newuser;
?>
