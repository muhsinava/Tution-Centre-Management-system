
<?php
Include("connection.php");
?>
<html>
    <head>
        <title>delete parent</title>
        <style>*
        {
            font-family: 'Times New Roman', Times, serif;
            font-size: 15px;
            color:grey;
        }
	body{
        background: url('images/13.jpg');
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
        <fieldset style="margin-top:190px;height:200px">
        <h1 align="center" style="font-size: 30px;"> DELETE PARENT</h1>
        <form action="" method="post" name="register" >
            <label style="margin-left: 30px;margin-right: 30px;padding: 1px 20px;">
            <input type="text" name="parentid" placeholder="PARENT ID" style="margin-left:-5px;"><br>
            <input type="Submit" name="delete" value="DELETE" size="100" style="color: rgb(0, 0, 0);background: #f7f7f7;border-radius: 10px;margin-left:115px;width:50%;">
        </fieldset></form></div>
    </div>
    </body>
</html>
<?php
if(isset($_POST['delete']))
{
$pid=$_POST['parentid'];
if(!$con)
die("connection failed".mysqli_connect_error());
$sql="delete from parents where parentid=$pid";
if(mysqli_query($con,$sql))
echo "</br>deleted successfully";
else
echo "deletion failed";
mysqli_close($con);
}

