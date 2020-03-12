<?php

require_once("config.php");
session_start();
if(!$_SESSION['login_username'] ){
    header("Location: index.php");
    die();
}

$thisUserID = $_GET['uid'];

$foundUser = fetchThisUser($thisUserID);

?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <title>
        FIRST CRUD - Update This Record
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
            color: #333333;
            border-width: 1px;
            border-color: black;
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
<li><a href='logout.php'>Logout</a></li>
<form name="getUserDetails" method="post" action="processUpdateUser.php">
    <table class="table-style-three">
        <?php foreach ($foundUser as $userdetails) { ?>
                <tr><th>Bug Name :          </th><td><input type="text" name="bug_name" value="<?php print $userdetails['bug_name']; ?>"></td></tr>
                <tr><th>Bug Detail :        </th><td><input type="text" name="bug_detail" value="<?php print $userdetails['bug_detail']; ?>"></td></tr>
                <tr><th>Update Date-time :</th><td><input  type="text" name="report_date" value="<?php print $userdetails['report_date']; ?>"></td></tr>
                <tr><th>Bug Severity: </th><td><select input name="bug_severity">
                        <option value="<?php print $userdetails['bug_severity']; ?>"><?php echo $userdetails['bug_severity']; ?></option>
                        <option value="critical" style="color:red;">critical</option>
                        <option value="high" style="color:orange;">high</option>
                        <option value="medium" style="color:yellow;">medium</option>
                        <option value="low" style="color:green;">low</option>
                    </select>
                </td>
                </tr>
                <tr><th>Bug Reported By :   </th><td><input  type="text"  name="bug_reportedby" value="<?php print $userdetails['bug_reportedby']; ?>" readonly></td></tr>
                <tr><th>Status : </th><td><select input name="status">
                        <option value="<?php print $userdetails['status']; ?>"><?php print $userdetails['status']; ?></option>
                        <option value="1" style="color:red;">active</option>
                        <option value="0" style="color:green;">resolved</option>
                    </select>
                </td>
                </tr>
                <input type="text" name="uid" hidden value="<?php print $userdetails['uid'];?>"></td></tr>


        <?php } ?>
    </table>
    <input type="submit" name="submit" value="Update Me">
</form>

    <form name="deleteUserDetails" method="post" action="processDeleteUser.php">
        <?php foreach ($foundUser as $userdetails) { ?>
            <tr><td><input type="hidden" name="uid" value="<?php print $userdetails['uid'];?>"></td></tr>

 <!--       <?php } ?>
    </table>
-->
    <input type="submit" name="submit" value="Delete Me">

    </form>
</body>
</html>