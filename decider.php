<?php
/**
 *
 */
?>


<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>
        BUG ISSUE - Create New Record
    </title>
    <style type="text/css">
        body{
            margin:0;
            color:#6a6f8c;
            background:#c8c8c8;
            font:600 16px/18px 'Open Sans',sans-serif;
        }
        table.table-style-three {
            font-family: verdana, arial, sans-serif;
            font-size: 11px;
            color: #333333;
            border-width: 1px;
            border-color: #3A3A3A;
            border-collapse: collapse;
        }
        table.table-style-three th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: black;
            background-color: rgba(40,57,101,.9);
            color: #ffffff;
        }
        table.table-style-three a {
            color: #ffffff;
            text-decoration: none;
        }

        table.table-style-three tr:hover td {
            cursor: pointer;
        }
        table.table-style-three tr:nth-child(even) td{
            //background-color: #F7CFCF;
        }
        table.table-style-three td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: black;
            background-color: #ffffff;
        }
    </style>

</head>
<body>

<?php require_once("config.php");
session_start();
//print_r($_POST);

//require_once("config.php");

// Assigning $_POST values to individual variables for reuse.
//echo $_SESSION['login_username'];
if($_SESSION['login_username'] ){
    $username = $_SESSION['login_username'];
    $password = $_SESSION['login_pwd'];
}else{
    header("Location: index.php");
//    $username = $_POST['username'];
//    $password = $_POST['password'];
//    $_SESSION['login_username'] = $username;
//    $_SESSION['login_pwd'] = $password;
}






//Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
//successfull and 0 when there is an error with executing the query .

$newuser = login($username, $password);

//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//insert is completed successfully.
//print_r ($newuser);
//echo $newuser[0]['userType'];
$userType = $newuser[0]['userType'];


$_SESSION['username'] = $newuser[0]['username'];
$_SESSION['userType'] = $newuser[0]['userType'];
//echo $_SESSION['username'];
?>
<li><a href='logout.php'>Logout</a></li>
<?php
if($userType == "U"){
//echo "User";
    ?>

    <table class="table-style-three">
        <thead>
        <!-- Display CRUD options in TH format -->
        <tr>
            <th><a href="createNewRecord.php">Create a new record (C)</a></th>
        </tr>
        <tr>
            <th><a href="displayAllRecords.php">Read All Record information (R)</a></th>
        </tr>
        </thead>
    </table>

    <?php
}else if($userType == "A"){
//echo "Admin";

?>
<table class="table-style-three">
    <thead>
    <tr>
        <th><a href="createNewRecord.php">Create a new record (C)</a></th>
    </tr>
    <tr>
        <th><a href="displayAllRecords.php">View All Record information (R)</a></th>
    </tr>
    <!--            <tr>
                    <th><a href="displayAllRecords.php">Update A Record (U)</a></th>
                </tr>
                <tr>
                    <th><a href="displayAllRecords.php">Delete A Record (D)</a></th>
                </tr>
                </thead>
            </table>
            -->

    <?php
    }else{
        echo "user not found";
    }
    ?>
</body>
</html>







<?php
/**
 *
 */


?>
