 <?php

 session_start();
 if(!$_SESSION['login_username'] ){
     header("Location: index.php");
     die();
 }
require_once("config.php");


$thisUserID = $_GET['userid'];
//echo "thisUserID: ".$thisUserID;

$foundUser = fetchThisUser($thisUserID);
echo "<pre>";
//print_r($foundUser);
echo "</pre>";
?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>
        FIRST CRUD - Ipdate This Record
    </title>
    <!-- Style -- Can also be included as a file usually style.css -->
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
            color: green;
            border-width: 1px;
            border-color: #3A3A3A;
            border-collapse: collapse;
        }
        table.table-style-three th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: orange;
            background-color: orangered;
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
            background-color: yellow;
        }
        table.table-style-three td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: yellow;
            background-color: #ffffff;
        }
    </style>

</head>
<body>
<li><a href='logout.php'>Logout</a></li>
<form name="getUserDetails" method="post" action="processUpdateUser.php">
    <table class="table-style-three">
        <?php foreach ($foundUser as $userdetails) { ?>
            <tr><td>FirstName :</td>      <td><input type="text" name="firstname" value="<?php print $userdetails['firstname']; ?>"></td></tr>
            <tr><td>LastName :</td>       <td><input type="text" name="lastname" value="<?php print $userdetails['lastname']; ?>"></td></tr>
            <tr><td>Date of Birth :</td>  <td><input type="text" name="dateofbirth" value="<?php print $userdetails['dateofbirth']; ?>"></td></tr>
            <tr><td>Email :</td>          <td><input type="text" name="email" value="<?php print $userdetails['email']; ?>"></td></tr>
            <tr><td>City :</td>           <td><input type="text" name="city" value="<?php print $userdetails['city']; ?>"></td></tr>
            <tr><td>Zip :</td>            <td><input type="text" name="zip" value="<?php print $userdetails['zip']; ?>"></td></tr>
            <tr><td>Userid : </td>      <td><input type="text" name="userid" value="<?php print $userdetails['userid'];?>"></td></tr>
        <?php } ?>
    </table>

    <input type="submit" name="submit" value="Update Me">

</form>


</body>
</html>