<?php
Session_start();
Include("connection.php");
If(isset($_POST['login']))
$uname=$_POST['username '];
$pwd=$_POST['password'];
$sql="select * from tutor where username='$uname' and password='$pwd'";
$data=mysqli_query($con,$sql);
If($data)
{
 If(mysqli_num_rows($data)==1)
{
 $row=mysqli_fetch_array($data);
If($row['username ']===$uname&&$row['password']===$pwd)
{
 $SESSION['uname']=$row['uname'];
$SESSION['name']=$row['name'];
$SESSION['userid']=$row['userid'];
If($rowq['usertype']=='admin')
{
 Header("location:admindashboard.html");
}
Exit();
}
Else
{
 Header("location:login.html?incorrect username or password");
Exit();
}
}
Else
{
Header("location:login.html?incorrect username or password");
Exit();
}
}
?>php