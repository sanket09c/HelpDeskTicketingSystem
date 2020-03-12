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
    FIRST CRUD
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
      color: blue;
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
  $allrecords = fetchAllUsers();
//echo "allrecords: ".$allrecords;
  ?>
  <li><a href='logout.php'>Logout</a></li>
  <!-- Table goes in the document BODY -->
  <table class="table-style-three">
      <thead>
        <!-- display user details header  -->
        <th>User ID</th>
        <th>Bug Name</th>
        <th>Bug Detail</th>
        <th>Bug Severity</th>
        <th>Bug Reported By</th>
        <th>Report Date</th>
        <th>Status</th>
      </thead>
      <tbody>

      <?php foreach ($allrecords as $displayRecords) { ?>
          <tr>
              <?php      if ($_SESSION['username']=='admin')   {      ?>
        <td><a href="updateThisUser.php?uid=<?php print $displayRecords['uid']; ?>"><?php print $displayRecords['uid']; ?></a></td>
<?php     }       else { ?>  <td><?php print $displayRecords['uid'];  } ?></a></td>

          <td><?php print $displayRecords['bug_name']; ?></td>
        <td><?php print $displayRecords['bug_detail']; ?></td>
        <td><?php print $displayRecords['bug_severity']; ?></td>
        <td><?php print $displayRecords['bug_reportedby']; ?></td>
        <td><?php print date("Y-m-d", $displayRecords['report_date']); ?></td>
            <?php      if($displayRecords['status']=='1')  {  ?>
                        <td>  <?php print "active";?></td>
         <?php     }else{       ?>
              <td>  <?php print "resolved";?> </td>
<?php              }                 ?>

      </tr>
      <?php } ?>
      </tbody>
  </table>

</body>
</html>
