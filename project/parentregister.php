<?php
Include("connection.php");
?>
<html>
    <head>
   
        <title>Add student</title>
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
        
    <div>
        <fieldset style="margin-top:70px;height:455px">
        <h1 align="center" style="font-size: 30px;"> REGISTER PARENTS</h1>
        <form action="" method="post" name="add student" >
            <label style="margin-left: 30px;margin-right: 30px;padding: 1px 20px;">
            
            <input type="text" name="first" placeholder="FIRST NAME" style="margin-left:-5px;"><br>
            <input type="text" name="last" placeholder="LAST NAME" style="margin-left:45px;"><br>
            <input type="text" name="phonenumber" placeholder="PHONENUMBER" style="margin-left:45px;"><br>
            <input type="text" name="place" placeholder="PLACE" style="margin-left:45px;"><br>
            <input type="text" name="mail" placeholder="EMAIL" style="margin-left:45px;"><br>
            <input type="text" name="pwd" placeholder="PASSWORD" style="margin-left:45px;"><br>
            
            <input type="Submit" name="add" value="ADD" size="100" style="color: rgb(0, 0, 0);background: #f7f7f7;border-radius: 10px;margin-left:115px;width:50%;">
        </fieldset></form></div>
    </div>
    </body>
</html>
<?php
if(isset($_POST['add']))
{
    extract($_POST);
    $pfname=$_POST['first'];
    $plname=$_POST['last'];
    $phn=$_POST['phonenumber'];
    $plc=$_POST['place'];
    $mail=$_POST['mail'];
    $pswd=$_POST['pwd'];
    $q="INSERT INTO parents(firstname,lastname,phone,place,email)values('$pfname','$plname','$phn','$plc','$mail')";
    if($con->query($q)===TRUE)
    {
     $q="INSERT INTO login(username,password,usertype)values('$mail','$pswd','parent')";
      if($con->query($q)===TRUE)
      {
        Header("location:parentindex.php");
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