<?php
Include("connection.php");
?>
<html>
    <head>
        <title>Add tutor</title>
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
        
    <div>
        <fieldset style="margin-top:120px;height:420px">
        <h1 align="center" style="font-size: 30px;"> ADD TUTOR</h1>
        <form action="" method="post" name="register" >
            <label style="margin-left: 30px;margin-right: 70px;padding: 10px 20px;">
            <input type="text" name="firstname" placeholder="FIRST NAME" style="margin-left:-5px;"><br>
            <input type="text" name="lastname" placeholder="LAST NAME" style="margin-left:45px;"><br>
            <input type="text" name="phonenumber" placeholder="PHONENUMBER" style="margin-left:45px;"><br>
            
            <input type="text" name="email" placeholder="EMAIL" style="margin-left:45px;"><br>
            
            <input type="text" name="password" placeholder="PASSWORD" style="margin-left:45px;"><br>
            
            <input type="Submit" name="add" value="ADD" size="100" style="color: rgb(0, 0, 0);background: #f7f7f7;border-radius: 10px;margin-left:115px;width:50%;">
        </fieldset></form></div>
    </div>
    </body>
</html>
<?php
if(isset($_POST['add']))
{
    extract($_POST);
    $tfname=$_POST['firstname'];
    $tlname=$_POST['lastname'];
    $phn=$_POST['phonenumber'];
    $mail=$_POST['email'];
    $pswd=$_POST['password'];
    $q="INSERT INTO tutors(first_name,last_name,phone,email)values('$tfname','$tlname','$phn','$mail')";
    if($con->query($q)===TRUE)
    {
     $q="INSERT INTO login(username,password,usertype)values('$mail','$pswd','tutor')";
      if($con->query($q)===TRUE)
      {
        Header("location:adminindex.php");
 exit();
      }
    else
     {
        echo" </br>Error";
  }
}

$con->close();
}
?>