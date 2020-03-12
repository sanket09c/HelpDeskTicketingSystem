<?php
/**
 *
 */


require_once("config.php");

// print_r is to display the contents of an array() in PHP.
//echo "aaaa";
//print_r($_POST);
//echo "bbbb";



// Assigning $_POST values to individual variables for reuse.
$bug_name = $_POST['bug_name'];
$bug_detail = $_POST['bug_detail'];
$bug_severity = $_POST['bug_severity'];
$bug_reportedby = $_POST['bug_reportedby'];
$report_date =  time() ;
$status = $_POST['status'];
$thisuserid = $_POST['uid'];

//echo "bugname starts: ".$bug_name."////////ends";
//echo "bug_detail: ".$bug_detail."////////ends";
//echo "bug_severity: ". $bug_severity."////////ends";
//echo "bug_reportedby: ". $bug_reportedby."////////ends";
//echo "report_date: ".$report_date."////////ends";
//echo "status: ".$status."////////ends";
//echo "aaaid: ".$thisuserid."////////ends";


//Creating a variable to hold the "@return boolean value returned by function updateThisRecord - is boolean 1 with
//successfull and 0 when there is an error with executing the query .
$updatedRecord  = updateThisRecord($bug_name, $bug_detail, $bug_severity, $bug_reportedby, $report_date, $status, $thisuserid);

header("Location: displayAllRecords.php");
die();

//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//update is completed successfully.
//echo "final" . $updatedRecord. "is it ";
