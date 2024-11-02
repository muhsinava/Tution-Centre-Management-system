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
    <center>
    <body>
        
    <div>
        <fieldset style="margin-top:90px;height:480px">
        <h1 align="center" style="font-size: 30px;"> UPDATE PARENT</h1>
        <form action="" method="post" name="register" >
           
            <input type="text" name="parentid" placeholder="PARENT ID" >
            <input type="text" name="first" placeholder="FIRST NAME" >
            <input type="text" name="last" placeholder="LAST NAME" >
            <input type="text" name="place" placeholder="PLACE" >
            
            <input type="text" name="email" placeholder="EMAIL" >
            
            <input type="text" name="pwd" placeholder="PASSWORD"> 
            
            <input type="Submit" name="update" value="UPDATE" size="100" style="color: rgb(0, 0, 0)">
        </fieldset></form></div>
    </div>
</center>
    </body>
</html>
<?php
if(isset($_POST['update']))
{
    extract($_POST);
    $pid=$_POST['parentid'];
    $pfname=$_POST['first'];
    $plname=$_POST['last'];
    $phn=$_POST['phonenumber'];
    $plc=$_POST['place'];
    $mail=$_POST['email'];
    $pswd=$_POST['pwd'];
    if(!$con)
die("Connectionfailed".mysqli_connect_error());
$sql="update parents set firstname='$pfname',lastname='$plname',phone=$phn,place='$plc',email='$mail' where parentid=$pid";
if(mysqli_query($con,$sql))
$sql="INSERT INTO login(username,password,usertype)values('$mail','$pswd','parent')";
if(mysqli_query($con,$sql))
echo"</br>Updated Successfully";
else echo"</br>Error in Updating";
mysqli_close($con);
}
