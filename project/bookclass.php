<?php
include 'connection.php';
?>

<html>
<head>
	<title>batch and amount</title>
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
 
 	<table>
   <table border="2">
 	  <tr>
 	  	<th>BATCH NAME</th>
 	  	<th>AMOUNT</th>
 	  </tr>

 	  <?php
       include 'connection.php';
       $q="SELECT batchname,amount from batches where id='0'";
       $r=mysqli_query($con,$q);
       while($s=mysqli_fetch_array($r))
       {
       echo '<tr>';
       echo '<td>'.$s['batchname'].'</td>';
       echo '<td>'.$s['amount'].'</td>';
     
   echo '</tr>';
      }
 	  ?>
    </table>
    
</body>
</html>
<?php
Include("connection.php");
?>
<html>
<body>
  <center>
        
        <div>
        
            
            <form action="" method="post" name="book class" >
                
                <fieldset style="height:310;" >
                    <h1 align="center" style="font-size: 30px;">BOOK CLASS</h1>
                <input type="text" name="batch" placeholder="BATCH"><br>
                <input type="text" name="parentmail" placeholder="PARENT MAIL"><br>
                <input type="text" name="studentname" placeholder="STUDENT NAME"><br>
                <input type="Submit" name="add" value="BOOK CLASS" size="200" style="color: rgb(0, 0, 0);background: #eeeaec;border-radius: 10px;"></a></fieldset></form></div>
        </div>
    </center>
        </body>
        </html>
        <?php
if(isset($_POST['add']))
{
    extract($_POST);
    $bname=$_POST['batch'];
    $pma=$_POST['parentmail'];
    $std=$_POST['studentname'];
    $q="INSERT INTO bookings(batchname,parentmail,studentname)values('$bname','$pma','$std')";
      if($con->query($q)===TRUE)
      {
        Header("location:parentindex.php");
        echo" </br>success";
 exit();
      }
    else
     {
        echo" </br>Error";
  }
}

$con->close();
?>