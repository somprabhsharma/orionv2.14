
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
  ?>
 <h2> Multi Participant Event </h2>
  <?php
  $userid=$rows['userid'];
   @$query="select * from admadshow where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Ad Mad Show - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Ad Mad Show - Not Registered</b></p>
 <?php
 }

   @$query="select * from bouquetmaking where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Bouquet Making - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Bouquet Making - Not Registered</b></p>
 <?php
 }
    @$query="select * from bugothon where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Bug O Thon - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Bug O Thon - Not Registered</b></p>
 <?php
 }
    @$query="select * from cardstruction where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Cardstruction - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Cardstruction - Not Registered</b></p>
 <?php
 }
    @$query="select * from circuiteria where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Circuiteria - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></span></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Circuiteria - Not Registered</b></p>
 <?php
 }
     @$query="select * from counterstrike where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid or userid5='$userid' or userid6='$userid' or userid7='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Counter Strike - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Counter Strike - Not Registered</b></p>
 <?php
 }
    @$query="select * from dancemasti where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Dance Masti - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Dance Masti - Not Registered</b></p>
 <?php
 }
      @$query="select * from docudrama where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid or userid5='$userid' or userid6='$userid' or userid7='$userid' or userid8='$userid' or userid9='$userid' or userid10='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Director's Cut - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Director's Cut - Not Registered</b></p>
 <?php
 }
    @$query="select * from electromania where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Electromania - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Electromania - Not Registered</b></p>
 <?php
 }
    @$query="select * from exhibition where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Exhibition - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Exhibition - Not Registered</b></p>
 <?php
 }
    @$query="select * from googledia where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Googledia Quiz- <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Googledia Quiz- Not Registered</b></p>
 <?php
 }
    @$query="select * from ignitron where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Ignitron - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Ignitron - Not Registered</b></p>
 <?php
 }
    @$query="select * from kill_o_zone where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Kill-O-Zone - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Kill-O-Zone - Not Registered</b></p>
 <?php
 }
    @$query="select * from line_apostle where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Line Apostle - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Line Apostle - Not Registered</b></p>
 <?php
 }
    @$query="select * from matlab where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Master O Rock Matlab - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Master O Rock Matlab - Not Registered</b></p>
 <?php
 }
    @$query="select * from photomontage where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Photomontage - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Photomontage - Not Registered</b></p>
 <?php
 }   @$query="select * from robo_race where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Robo Race - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Robo Race - Not Registered</b></p>
 <?php
 }
    @$query="select * from robo_soccer where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Robo Soccer - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Robo Soccer - Not Registered</b></p>
 <?php
 }
    @$query="select * from scavengerhunt where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Scavanger Hunt - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Scavenger Hunt - Not Registered</b></p>
 <?php
 }
    @$query="select * from secondtofame where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>60 Second to Fame - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>60 Second to Fame - Not Registered</b></p>
 <?php
 }
    @$query="select * from taqneeq where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Taqneeq - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Taqneeq - Not Registered</b></p>
 <?php
 }
    @$query="select * from technoquasi where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Technoquasi - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Technoquasi - Not Registered</b></p>
 <?php
 }   @$query="select * from teknikacolaz where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Teknikacolaz - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Teknikacolaz - Not Registered</b></p>
 <?php
 }
    @$query="select * from threecodifers where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Three Codifers - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Three codifers - Not Registered</b></p>
 <?php
 }
    @$query="select * from treasurehunt where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Treasure Hunt - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Treasure Hunt - Not Registered</b></p>
 <?php
 }
    @$query="select * from waver where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Waver - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Waver - Not Registered</b></p>
 <?php
 }
    @$query="select * from webista where userid1='$userid' or userid2='$userid' or userid3='$userid' or userid4='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Webista - <span style="Color:red">Registered</span></b> &nbsp;&nbsp; <br><span style="font-size:14px;color:blue;"><b>Team Name:</b> <?php echo $tname;?> &nbsp;&nbsp; <b>Team Leader:</b> <?php echo $tmem1;?> &nbsp;&nbsp; <b> User ID:</b> <?php echo $userid1; ?>&nbsp;&nbsp; <b> Mob No.:</b> <?php echo $mobno; ?></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Webista - Not Registered</b></p>
 <?php
 }
 ?>
 <h2> Single Participant Event </h2>
 <?php
     @$query="select * from android where userid1='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Android Workshop - <span style="Color:red">Registered</span></b></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Android Workshop - Not Registered</b></p>
 <?php
 }
      @$query="select * from bestowal where userid1='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Bestowal - <span style="Color:red">Registered</span></b></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Bestowal - Not Registered</b></p>
 <?php
 }
      @$query="select * from cadarena where userid1='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Cad Arena Workshop - <span style="Color:red">Registered</span></b></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Cad Arena Workshop - Not Registered</b></p>
 <?php
 }
      @$query="select * from expresso where userid1='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Expresso - <span style="Color:red">Registered</span></b></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Expresso - Not Registered</b></p>
 <?php
 }
      @$query="select * from finalticket where userid1='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Final Ticket - <span style="Color:red">Registered</span></b></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Final Ticket - Not Registered</b></p>
 <?php
 }
      @$query="select * from needforspeed where userid1='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Need for Speed Most Wanted - <span style="Color:red">Registered</span></b></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Need for Speed Most Wanted - Not Registered</b></p>
 <?php
 }
      @$query="select * from networksecurity where userid1='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Network Security Workshop - <span style="Color:red">Registered</span></b></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Network Security Workshop - Not Registered</b></p>
 <?php
 }
      @$query="select * from pockettank where userid1='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Pocket Tank - <span style="Color:red">Registered</span></b></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Pocket Tank - Not Registered</b></p>
 <?php
 }
      @$query="select * from technicoskartun where userid1='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Technicos Kartun - <span style="Color:red">Registered</span></b></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Technicos Kartun - Not Registered</b></p>
 <?php
 }
      @$query="select * from techwhirl where userid1='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>Techwhirl - <span style="Color:red">Registered</span></b></p>
 <?php
 }
 else
 {
 ?>
 <p><b>Techwhirl - Not Registered</b></p>
 <?php
 }
      @$query="select * from warofwranglers where userid1='$userid'";
	 @$result=mysql_query($query);
	 @$data=mysql_fetch_array($result);
  if ($data)
 {
 @$tname=$data['tname'];
 @$tmem1=$data['tmem1'];
 @$userid1=$data['userid1'];
 @$mobno=$data['mobno'];
 ?>
 <p><b>War of Wranglers - <span style="Color:red">Registered</span></b></p>
 <?php
 }
 else
 {
 ?>
 <p><b>War of Wranglers - Not Registered</b></p>
 <?php
 }
 }
 else
 {
  	  ?>
	  <br><span style="font-size:14px;color:blue;"><br><span style="font-size:14px;color:blue;"><br><span style="font-size:14px;color:blue;"><br><span style="font-size:14px;color:blue;"><br><span style="font-size:14px;color:blue;"><br><span style="font-size:14px;color:blue;"><br><span style="font-size:14px;color:blue;"><br><span style="font-size:14px;color:blue;">
	  <center style="font-family:comic sans ms"> Your session has expired. Please log in again. <br><span style="font-size:14px;color:blue;">
<a href="../login.php" target="_parent"><button type="button">Log in</button></a></center>
	  <?php
 
 }
 ?>
 </body>
 </html>