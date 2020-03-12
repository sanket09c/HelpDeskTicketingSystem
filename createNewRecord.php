<?php
/**
 *
 */
session_start();
if(!$_SESSION['login_username'] ){
    header("Location: index.php");
    die();
}
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
  // background-color: #F7CFCF;
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
 // echo $_SESSION['username'];
  ?>
  <li><a href='logout.php'>Logout</a></li>
  <form name="createNewRecord" action="createNewRecord_DBINSERT.php" method="post">
  <!-- Table goes in the document BODY -->
  <table class="table-style-three">
      <thead>
      <!-- Display CRUD options in TH format -->
      <tr>
        <th>Bug Name</th>
        <td><input type="text" name="bug_name" value=""></td>
      </tr>

      <tr>
        <th>Bug Detail</th>
        <td><input type="text" name="bug_detail" value=""></td>
      </tr>

      <tr>
        <th>Bug Severity</th>
          <td>
            <select input name="bug_severity">
              <option value="">--Please choose an option--</option>
              <option value="critical" style="color:red;">critical</option>
              <option value="high" style="color:orange;">high</option>
              <option value="medium" style="color:yellow;">medium</option>
              <option value="low" style="color:green;">low</option>
            </select>
          </td>
      </tr>

<!--      <tr>-->
<!--        <th>Bug Reported By</th>-->
<!--        <td><input type="text" name="bug_reportedby" value=""></td>-->
<!--      </tr>-->
      <tr>
        <th>Status</th>
        <td><input disabled type="text" name="status" value="active"></td>
      </tr>

      <tr>
        <td><input type="Submit" name="submit" value="create record"></td>
      </tr>
      </thead>
    </table>
  </form>
</body>
</html>




