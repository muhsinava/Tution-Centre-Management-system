<html>
  <head>
    
<style>
body {
    margin: 0;
    padding: 0;
  }
  
  .header {
    background-color:#333333;
  }
  
  .container {
    max-width: 940px;
    margin: 0 auto;
    padding: 0 10px;
  }
  
  .img {
    background: url('images/11.jpg');
    background-size:cover;
    background-position:center center;
    background-repeat:no-repeat;
    height: 700px;
  }
  
  .nav {
    margin: 0;
    padding: 30px 0;
  }
  
  .nav li {
    display:inline;
    color: #fff;
    font-family: 'Raleway', sans-serif;
    font-weight: 500;
    font-size: 10px;
    text-transform:uppercase;
    margin-left:10px;
    margin-right:10px;
    word-spacing:3px;
  }
  
  .main {
    position: relative;
    top: 180px;
    text-align: center;
  }
  
  .main h1 {
    color: #333;
    font-family: 'Raleway', sans-serif;
    font-weight: 600;
    font-size: 40px;
    margin-top: 0;
    margin-bottom: 80px;
    text-transform: uppercase;
  }

  .btn-main {
    background-color: #333;
    color: #fff;
    font-family: 'Raleway', sans-serif;
    font-weight: 600;
    font-size: 18px;
    letter-spacing: 1.3px;
    padding: 16px 40px;
    text-decoration: none;
    text-transform: uppercase;
  }
  
  ul li a{
    text-decoration:none;
    color:white;
  }
  ul li a:hover{
    color:grey;
  }
  .topnav-right {
   font-size: 15px;
   float: right;
   margin: 0 auto;
   margin-right:-60px;
   color: #fff;
  }

  .dropbtn{
    display:inline;
    color: #000000;
    font-family: 'Raleway', sans-serif;
    font-weight: 500;
    font-size: 10px;
    text-transform:uppercase;
    margin-left:10px;
    margin-right:10px;
    word-spacing:10px;
  
  }


.dropdown {
  position: relative;
  display: inline-block;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color:#333 ;
  font-family: 'Raleway', sans-serif;
    font-weight: 500;
    font-size: 10px;
    text-transform:uppercase;
    margin-left:10px;
    margin-right:10px;
    word-spacing:10px;
  box-shadow: grey;
  z-index: 1;
}


.dropdown-content a {
  color: #fff;
  padding: 12px 10px;
  text-decoration: none;
  display: block;
}


.dropdown-content a:hover {background-color: grey}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #fff;
}
  
</style>
  </head>
  <body>
    <div class="header">
      <div class="container">
        <ul class="nav">
          
		     <li><a href="index.php">HOME</a></li>
         <div class="dropdown">
  <li>ADD</li>
  <div class="dropdown-content">
    <a href="addbatch.php"> BATCH</a>
    <a href="addsubject.php">SUBJECT</a>
    <a href="addtutor.php">TUTOR</a>
    <a href="addstudent.php">STUDENT</a>
  </div>
</div>
                  <li><a href="classschedule.php">CLASS SCHEDULE</a></li>
                  <div class="dropdown">
  <li>VIEW</li>
  <div class="dropdown-content">
    <a href="viewparents.php"> PARENT</a>
    <a href="viewstudent.php">STUDENT</a>
    <a href="viewtutors.php">TUTOR</a>
  </div>
</div>
                  <li><a href="viewbookings.php">BOOKINGS</a></li>
                  <li><a href="manage.php">MANAGE PROFILES</a></li>
          <li><a href="index.php" class="topnav-right">LOGOUT</a></li>
        </ul>
      </div>
    </div>
    <div class="img">
      <div class="container">  
        <div class="main">
          <h1>WELCOME ADMIN</h1>
        </div>
      </div>
    </div>
  </body>
</html