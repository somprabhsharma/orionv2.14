<?php include 'users_connectivity.php';//select the table 
?>
<html>
<head>
<link rel="shortcut icon" href="../_include/img/favicon.png" type="image/png"><link rel="shortcut icon" href="http://www.orion14.co.in/favicon.png" type="image/png">
<link rel="shortcut icon" type="image/png" href="http://www.orion14.co.in/favicon.png" />
<link href="http://fonts.googleapis.com/css?family=Spinnaker&subset=latin" rel="stylesheet" type="text/css">
<style type="text/css">
#a
{
	font-family:'Spinnaker', sans-serif;
}
</style>
</head>
<body>
<?php



// Passkey that got from link 
$passkey=$_GET['passkey'];
$tbl_name1="users";

// Retrieve data from table where row that match this passkey 
$sql1="SELECT * FROM $tbl_name1 WHERE confim_code ='$passkey'";
$result1=mysql_query($sql1);

// If successfully queried 
if($result1){

// Count how many row has this passkey
$count=mysql_num_rows($result1);

// if found this passkey in our database, retrieve data from table "users"
if($count==1){

$rows=mysql_fetch_array($result1);
$userid=$rows['userid'];
$fullname=$rows['fullname'];
$emailid=$rows['emailid'];
$mobno=$rows['mobno'];
$collname=$rows['collname'];
$collid=$rows['collid'];
$branch=$rows['branch'];
$semester=$rows['semester'];
$password=$rows['password']; 
$tbl_name2="reg_users";

// Insert data that retrieves from "temp_members_db" into table "registered_members" 
$sql2="INSERT INTO $tbl_name2(userid, fullname, emailid, mobno, collname, collid, branch, semester, password)VALUES('$userid', '$fullname', '$emailid', '$mobno', '$collname', '$collid', '$branch', '$semester', '$password')";
$result2=mysql_query($sql2);
}

// if not found passkey, display message "Wrong Confirmation code" 
else {
echo "Wrong Confirmation code";
}

// if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db"
if($result2){

?>
<script> alert('Your account has been activated Your Registration ID is ORION14_<?php echo $userid ?>');
window.location='../../login.php'</script>
<?php

// Delete information of this user from table "temp_members_db" that has this passkey 
$sql3="DELETE FROM $tbl_name1 WHERE confirm_code = '$passkey'";
$result3=mysql_query($sql3);

}
else{
?>
<script> alert('Your have already activated your account');
window.location='../../login.php'</script>
<?php
}
}
?>
</body>
</html>