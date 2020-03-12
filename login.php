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
            border-color: orange;
            background-color: red;
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
            background-color: #F7CFCF;
        }
        table.table-style-three td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: orange;
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

    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['login_username'] = $username;
    $_SESSION['login_pwd'] = $password;

    header("Location: decider.php");
    die();

?>
