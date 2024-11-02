<?php
Session_start();
Include("connection.php");
?>
<html>
    <head>
        <title>login</title>
        <style>*
        {
            font-family: 'Times New Roman', Times, serif;
            font-size: 15px;
            color:grey;
	         
        }
	body{
        background: url('images/12.jpg');
		  background-size:cover;
		  background-repeat:no-repeat;
          
}
fieldset {
  display: block;
  margin-left: 500px;
  margin-right: 500px;
  margin-top: 100px;
  border-radius: 10px;
  background-color: black;
  padding: 5px 40px;
  height:350px;
  padding-bottom: 50px;
  opacity: 0.7;
 
}
input {
  width: 90%;
  padding: 15px 55px;
  margin: 25px 0px;
  
  box-sizing:border-box;
  background-color: white;
  
}
a:hover
{
    color:white;
    background:white;

}
        </style>
    </head>
    <body>
        
    <div>
    
        
        <form action="" method="post" name="login" >
            
            <fieldset >
<center>
                <h1 align="center" style="font-size: 30px;">LOGIN</h1>
            <input type="text" name="username" placeholder="USERNAME"><br>
            <input type="Password" name="password" placeholder="PASSWORD"><br>
            <a href="admindashboard.html"><input type="Submit" name="Login" value="LOGIN" size="200" style="color: rgb(0, 0, 0);background: #eeeaec;border-radius: 10px;"></a></fieldset></form></div>
    </div>
</center>
    </body>
</html>

<?php
If(isset($_POST['Login']))
{
$mail=$_POST['username'];
$pswd=$_POST['password'];
$sql="select * from login where username='$mail' and password='$pswd'";
$data=mysqli_query($con,$sql);
If($data)
{
 If(mysqli_num_rows($data)==1)
{
 $row=mysqli_fetch_array($data);
If($row['username']===$mail&&$row['password']===$pswd)
{
$_SESSION['username']=$row['username'];
$_SESSION['password']=$row['password'];
$_SESSION['id']=$row['id'];
If($row['usertype']=='admin')
{
 Header("location:adminindex.php");
 exit();
}
if($row['usertype']=='parent')
{
 Header("location:parentindex.php");
 exit();
}
if($row['usertype']=='tutor')
{
 Header("location:tutorindex.php");
 exit();
}
if($row['usertype']=='student')
{
 Header("location:studentindex.php");
}
Else
{
Header("location:login.php?incorrect username or password");
Exit();
}
}
}
}
}
?>