<?php
Include("connection.php");
?>
<html>
    <head>
        <title>update student</title>
        <style>*
        {
            font-family: 'Times New Roman', Times, serif;
            font-size: 15px;
            color:grey;
        }
	body{
		  background:url('images/12.jpg');
      background-color: grey;
		  background-size:cover;
		  background-repeat:no-repeat;
                  opacity:0.9;
}
fieldset {
  display: block;
  margin-left: 500px;
  margin-right: 510px;
  border-radius: 10px;
  background-color:black;
  margin-bottom:20px;
  
}
input {
  width: 80%;
  padding: 6px 55px;
  margin: 10px 0px;
  box-sizing:border-box;
  background-color:white;
  
}
        </style>
    </head>
    <body>
        <center>
    <div>
        <fieldset style="margin-top:70px;height:500px">
        <h1 align="center" style="font-size: 30px;"> update tutor</h1>
        <form action="" method="post" name="add student" >
            <label style="margin-left: 30px;margin-right: 30px;padding: 1px 20px;">
            
           <center> <input type="text" name="tutorid" placeholder="TUTOR ID" ></center>
            <input type="text" name="firstname" placeholder="FIRST NAME" >
            <input type="text" name="lastname" placeholder="LAST NAME" >
            <input type="text" name="phonenumber" placeholder="PHONENUMBER" >
            
            <input type="text" name="email" placeholder="EMAIL" >
            
            <input type="text" name="password" placeholder="PASSWORD" >
            
           <center> <input type="Submit" name="update" value="UPDATE" size="100" style="color: rgb(0, 0, 0)"></center>
        </fieldset></form></div>
    </div>
</center>
    </body>
</html>
<?php
if(isset($_POST['update']))
{
    extract($_POST);
    $tid=$_POST['tutorid'];
    $tfname=$_POST['firstname'];
    $tlname=$_POST['lastname'];
    $phn=$_POST['phonenumber'];
    $mail=$_POST['email'];
    $pswd=$_POST['password'];
    if(!$con)
die("Connectionfailed".mysqli_connect_error());
$sql="update tutors set first_name='$tfname',last_name='$tlname',phone=$phn,email='$mail' where tutor_id=$tid";
if(mysqli_query($con,$sql))
$sql="INSERT INTO login(username,password,usertype)values('$mail','$pswd','tutor')";
if(mysqli_query($con,$sql))
echo"</br>Updated Successfully";
else echo"</br>Error in Updating";
mysqli_close($con);
}
