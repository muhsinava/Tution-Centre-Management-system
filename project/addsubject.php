<?php
Include("connection.php");
?>
<html>
    <head>
        <title>Add subject</title>
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
  display: center;
  margin-left: 500px;
  margin-right: 510px;
  border-radius: 10px;
  background-color:black;
  margin-bottom:100px;
  
}
input {
  width: 80%;
  padding: 10px 55px;
  margin: 10px 0px;
  box-sizing:border-box;
  background-color:white;
  
}
        </style>
    </head>
    <body>
      <center>
        
    <div>
    
        
        <form action="" method="post" name="add subject" >
            
            <fieldset style="height:340;margin-top:150" >
                <h1 align="center" style="font-size: 30px;">ADD SUBJECT</h1>
            <input type="text" name="batch" placeholder="BATCH"><br>
            <input type="text" name="title" placeholder="TITLE"><br>
            <input type="text" name="description" placeholder="DESCRIPTION"><br>
            <input type="Submit" name="add" value="ADD" size="200" style="color: rgb(0, 0, 0);background: #eeeaec;border-radius: 10px;"></a></fieldset></form></div>
    </div>
</center>
    </body>
</html>
<?php
if(isset($_POST['add']))
{
    extract($_POST);
    $baname=$_POST['batch'];
    $tle=$_POST['title'];
    $des=$_POST['description'];
    $q="INSERT INTO subjects(batchn,title,description)values('$baname','$tle','$des')";
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
?>