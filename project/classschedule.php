<?php
Include("connection.php");
?>
<html>
    <head>
        <title>CLASS SCHEDULE</title>
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
        <fieldset style="margin-top:110px;height:460px">
        <h1 align="center" style="font-size: 30px;"> CLASS SCHEDULE</h1>
        <form action="" method="post" name="class schedule" >
            <label style="margin-left: 30px;margin-right: 30px;padding: 1px 20px;">
            <input type="text" name="batch" placeholder="BATCH" style="margin-left:-5px;"><br>
            <input type="text" name="subject" placeholder="SUBJECT" style="margin-left:45px;"><br>
            <input type="text" name="tutor" placeholder="TUTOR" style="margin-left:45px;"><br>
            <input type="date" name="date" placeholder="DATE" style="margin-left:45px;"><br>
             <input type="text" name="stime" placeholder="START TIME" style="margin-left:45px;"><br>
            <input type="text" name="etime" placeholder="END TIME" style="margin-left:45px;"><br>
            
            
            
            <input type="Submit" name="add" value="ADD" size="100" style="color: rgb(0, 0, 0);background: #f7f7f7;border-radius: 10px;margin-left:115px;width:50%;">
        </fieldset></form></div>
    </div>
    </body>
</html>
<?php
if(isset($_POST['add']))
{
    extract($_POST);
    $bat=$_POST['batch'];
    $sub=$_POST['subject'];
    $tut=$_POST['tutor'];
    $dte=$_POST['date'];
    $stm=$_POST['stime'];
    $etm=$_POST['etime'];
    $q="INSERT INTO class_schedule(batch,subject,tutor,date,stime,etime)values('$bat','$sub','$tut','$dte','$stm','$etm')";
    if($con->query($q)===TRUE)
    
      {
        Header("location:adminindex.php");
 exit();
      }
    else
     {
        echo" </br>Error in inserting";
  }
}

$con->close();

?>