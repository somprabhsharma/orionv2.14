<?php include '../_include/php/users_connectivity.php';//select the table 

?>

<html>
<head>


</head>
<body style="font-family:Comic Sans MS;" >
<?php
  session_start();
  $emailid=$_SESSION['emailid'];
  $sql1="SELECT * FROM reg_users WHERE emailid ='$emailid'";
  $result1=mysql_query($sql1);
  $rows=mysql_fetch_array($result1);
   if($rows)
  {
  $userid=$rows['userid'];
   @$query="select userid1 from greencanvas where userid1='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {

			 ?>

		
			<br><br><br><br><br><br><br><br><br><br>
			<center><span id="a">You have already registered for this event.<br><br>
				<span>

			<span> Now you can close this window. <span>
</center>
					</center>
	
              <?php
 }
else
 {
?>
<br/><br>
<h1 style="margin-left:180px;">Green Canvas Registration Form</h1>


  <!--  The form that will be parsed by jQuery before submit  -->
  <div>
  <form action="eventsubmit.php" method="post" id="register-form" >
  <table>
    <tr><td><span style="margin-left:220px;">Event Name:&nbsp;&nbsp;</span><select id="eventname" name="eventname" />
                                      <option value="greencanvas">Green Canvas</option>
                   
                                   </select><br />
  </tr>
      <tr><td><span style="margin-left:220px;">Team Name:&nbsp;&nbsp;</span><input type="text" id="tname" name="tname" required><br />
  </tr>
   <tr>
   <td><span style="color:red;margin-left:72px;">
   <?php $reasons = array("wrongtname" => "Team name is already taken. Please try a different name.", "blank" => "You have left one or more fields blank."); if ($_GET["regifailed"]) echo $reasons[$_GET["reason"]]; ?>
  </span> </td>
   </tr>
  <tr>
  <td><h4 style="margin-left:140px;margin-top:0px;">You will be the team leader and first team member of the team.</h4>
  <hr style="margin-left:140px;margin-top:-20px;"/><marquee style="font-family:comic sans ms;font-size:14px; color:red;">Team members must be registered users.<marquee></td>
  </tr></table><table>
  <tr><td><br><h4 style="margin-left:280px;margin-top:-20px;margin-bottom:0px;"><u>Member 2 Details:</u></h4></td>
  </tr>
  <tr>

   <td>   <span style="margin-left:70px;">Name:&nbsp;&nbsp;</span><input type="text" id="tmem2" name="tmem2" size="30" required></td>
   <td> <span style="margin-left:-20px">RegID:&nbsp;&nbsp;ORION14_</span><input type="text" id="userid2" name="userid2"  maxlength="4" size="10" required></td></tr>
  <tr>
   <td><span style="color:red;margin-left:72px;">
   <?php $reasons = array("wronguserid2" => "User2 is not registered user. Please register first.", "blank" => "You have left one or more fields blank."); if ($_GET["regifailed"]) echo $reasons[$_GET["reason"]]; ?>
  </span> </td></tr>
  <!--<tr><td><br><br><h4 style="margin-left:280px;margin-top:-20px;margin-bottom:0px;"><u>Member 3 Details:</u></h4></td>
  </tr>
  <tr>

   <td>   <span style="margin-left:70px;">Name:&nbsp;&nbsp;</span><input type="text" id="tmem3" name="tmem3"  size="30"/></td>
   <td> <span style="margin-left:-20px">RegID:&nbsp;&nbsp;ORION14_</span><input type="text" id="userid3" name="userid3"  maxlength="4" size="10"/></td></tr>
  <tr><td><br><br><h4 style="margin-left:280px;margin-top:-20px;margin-bottom:0px;"><u>Member 4 Details:</u></h4></td>
  </tr>
  <tr>

   <td>   <span style="margin-left:70px;">Name:&nbsp;&nbsp;</span><input type="text" id="tmem4" name="tmem4"  size="30"/></td>
   <td> <span style="margin-left:-20px">RegID:&nbsp;&nbsp;ORION14_</span><input type="text" id="userid4" name="userid4"  maxlength="4" size="10"/></td></tr>-->
   </table> 
    <br> <div style="margin-left:340px; font-size:20px;"><input type="submit" name="submit" value="Submit" /></div>
<span style="font-family:comic sans ms;font-size:14px; color:red; margin-left:250px">Minimum Team Members : 2</span><h4 style="margin-left:230px;margin-top:0px;">Participate to win exciting prizes.</h4></form>
  

</div>
<?php
 }
  }
 else{
 	  ?>
	  <br><br><br><br><br><br><br><br>
	  <center style="font-family:comic sans ms"> Your session has expired. Please log in again. <br>
<a href="../login.php" target="_parent"><button type="button">Log in</button></a></center>
	  <?php
 
 }
?>





  </body>
  </html>