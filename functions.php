 <?php
/**
 *
 */



//Retrieve information for all users
/**
 * @return array
 */
/*
 *
		report_date,
		status*/
session_start();
function fetchAllUsers() {
  global $mysqli;
  if($_SESSION['userType'] == "A"){
      $stmt = $mysqli->prepare(
          "SELECT
		uid,
		bug_name,
		bug_detail,
		bug_severity,
		bug_reportedby,
		report_date,
		status
		FROM bug_report"
      );
  }else{
      $stmt = $mysqli->prepare(
          "SELECT
		uid,
		bug_name,
		bug_detail,
		bug_severity,
		bug_reportedby,
		report_date,
		status
		FROM bug_report
		where 
		bug_reportedby = ?"
      );
      $stmt->bind_param("s", $_SESSION['username']);
  }

  $stmt->execute();
  $stmt->bind_result(
    $uid,
    $bug_name,
    $bug_detail,
    $bug_severity,
    $bug_reportedby,
    $report_date,
    $status
  );

  while ($stmt->fetch()) {
    $row[] = array(
      'uid'                     => $uid,
      'bug_name'                => $bug_name,
      'bug_detail'              => $bug_detail,
      'bug_severity'            => $bug_severity,
      'bug_reportedby'          => $bug_reportedby,
      'report_date'             => $report_date,
      'status'                  => $status
    );
  }
  $stmt->close();
  return ($row);
}

 function createNewBug($bug_name, $bug_detail, $bug_severity, $bug_reportedby, $report_date, $status)
//function createNewUser($fname, $lname, $dob, $email, $city, $zip)
 {
     global $mysqli;
     //Generate A random userid

     $character_array =     array_merge(range(a, z), range(0, 9));
     $rand_string = "";
     for ($i = 0; $i < 6; $i++) {
         $rand_string .= $character_array[rand(
             0, (count($character_array) - 1)
         )];
     }


     $stmt = $mysqli->prepare(
         "INSERT INTO bug_report (
		uid,
		bug_name,
		bug_detail,
		bug_severity,
		bug_reportedby,
		report_date,
		status
		)
		VALUES (
		'" . $rand_string . "',
		?,
		?,
		?,
		?,
		'" . time() . "',
        1
		)"
     );
     $stmt->bind_param("ssss", $bug_name, $bug_detail, $bug_severity, $bug_reportedby);
     $result = $stmt->execute();
     $stmt->close();
     return $result;

 }


//Create a new user

/**
 * @param $fname
 * @param $lname
 * @param $dob
 * @param $email
 * @param $city
 * @param $zip
 *
 * @return bool
 */
function createNewUser($fname, $lname, $username, $password)
//function createNewUser($fname, $lname, $dob, $email, $city, $zip)
{
  global $mysqli;
  //Generate A random userid

    $character_array =     array_merge(range(a, z), range(0, 9));
  $rand_string = "";
  for ($i = 0; $i < 6; $i++) {
    $rand_string .= $character_array[rand(
      0, (count($character_array) - 1)
    )];
  }

    $userType = "U";


  $stmt = $mysqli->prepare(
    "INSERT INTO Users (
		username,
		password, 
		userType,
		first_name,
		last_name
		)
		VALUES (
		?,
		?,
		'" . $userType . "',
		?,
		?
		)"
  );
  $stmt->bind_param("ssss",  $username, $password,$fname, $lname);
  $result = $stmt->execute();
  $stmt->close();
  return $result;

}

function login($username, $password){
    global $mysqli;
    $stmt = $mysqli->prepare(
        "
    SELECT
    userId,
    username,
    password,
    userType
    

    FROM Users
    WHERE
    username = ? and password = ?
    LIMIT 1"
    );
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $stmt->bind_result(
        $uid,
        $username,
        $password,
        $userType
    );

    $stmt->execute();
    while ($stmt->fetch()) {
        $row[] = array(
            'uid'                     => $uid,
            'username'                => $username,
            'password'              => $password,
            'userType'            => $userType
        );
    }
    $stmt->close();
    if($row){
        echo "Found";
    }else{
        echo "Not Found";
    }
    return ($row);
}

//fetch particular users record

/**
 * @param $userid
 *
 * @return array
 */
//function createNewUser($bug_name, $bug_detail, $bug_severity, $bug_reportedby, $report_date, $status)

function fetchThisUser($uid)
{
    global $mysqli;
    $stmt = $mysqli->prepare(
      "
    SELECT
    uid,
    bug_name,
    bug_detail,
    bug_severity,
    bug_reportedby,
    report_date,
    status

    FROM bug_report
    WHERE
    uid = ?
    LIMIT 1"
    );
    $stmt->bind_param("s", $uid);
    $stmt->execute();
    $stmt->bind_result(
        $uid,
        $bug_name,
        $bug_detail,
        $bug_severity,
        $bug_reportedby,
        $report_date,
        $status
    );

    $stmt->execute();
  while ($stmt->fetch()) {
    $row[] = array(
        'uid'                     => $uid,
        'bug_name'                => $bug_name,
        'bug_detail'              => $bug_detail,
        'bug_severity'            => $bug_severity,
        'bug_reportedby'          => $bug_reportedby,
        'report_date'             => $report_date,
        'status'                  => $status
    );
  }
  $stmt->close();
  return ($row);
}


//Update selected users record.
/**
 * @param $fname
 * @param $lname
 * @param $city
 * @param $zip
 * @param $dob
 * @param $email
 * @param $userid
 *
 * @return bool
 */
function updateThisRecord($bug_name, $bug_detail, $bug_severity, $bug_reportedby, $report_date, $status, $uid)
{
    global $mysqli;
    $stmt = $mysqli->prepare(
      "UPDATE bug_report
		SET
		bug_name = ?,
		bug_detail = ?,
		bug_severity = ?,
		bug_reportedby = ?,
		report_date = ?,
		status = ?
		WHERE
		uid = ?
		LIMIT 1"
    );
    $stmt->bind_param("sssssss", $bug_name, $bug_detail, $bug_severity, $bug_reportedby, $report_date, $status, $uid);
 //   echo  $stmt;
    $result = $stmt->execute();
    echo "result is: ".$result. " xx";
    $stmt->close();

    return $result;
}
function deleteThisRecord($uid)
{
    global $mysqli;
    $stmt = $mysqli->prepare(
        "DELETE FROM bug_report
		WHERE
		uid = ?"
    );
    $stmt->bind_param("s",$uid);
    $stmt->execute();
    $stmt->close();

//    return $result;
}
