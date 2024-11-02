<?php
Include("connection.php");
?>
<html>

<head>
    <title>Add batch</title>
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
margin-bottom:10px;
height:100%;

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
<form method="post" enctype="multipart/form-data">
    <div class="form-input py-2">
        <div class="form-group">
        <fieldset style="height:230;margin-top:150" >
                <h1 align="center" style="font-size: 30px;">ADD NOTES</h1>
          <input type="file" name="pdf_file"
                 class="form-control" accept=".pdf"
                 title="Upload PDF"/><br><br>
        <input type="Submit" name="submit" value="upload" size="200" style="color: rgb(0, 0, 0);background: #eeeaec;border-radius: 10px;margin-left:45px;"></a></fieldset></form></div>
        </div>
   </div>
</form>
</center>

<?php
    if (isset($_POST['submit'])) {
 
 
        if (isset($_FILES['pdf_file']['name']))
        {
          $file_name = $_FILES['pdf_file']['name'];
          $file_tmp = $_FILES['pdf_file']['tmp_name'];
 
          move_uploaded_file($file_tmp,"./pdf/".$file_name);
 
          $insertquery =
          "INSERT INTO pdffile(pdf) VALUES('$file_name')";
          $iquery = mysqli_query($con, $insertquery);
        }
        else
        {
           ?>
            <div class=
            "alert alert-danger alert-dismissible
            fade show text-center">
              <a class="close" data-dismiss="alert"
                 aria-label="close">×</a>
              <strong>Failed!</strong>
                  File must be uploaded in PDF format!
            </div>
          <?php
        }
    }
?>