<?php
include 'connection.php';
?>

<html>
<CENTER>
<h1 style="color:white;">BOOKING  DETAILS</h1>
</CENTER>
<head>
	<title>BOOKING DETAILS</title>
	<style>
	body {
	margin: 1rem;
	background:url("");
		  background-size:cover;
		  background-repeat:no-repeat;
		  background-color:black;
}

table {


	--accent-color: #362f4b;
	--text-color: black;
	--bgColorDarker: white;
	--bgColorLighter: white;
	--insideBorderColor: lightgray;
	width: 90%;
	margin: 40;
	padding: -10;
	border: 1px solid var(--accent-color);
	border-collapse: collapse;
	color: var(--text-color);
	table-layout: center;
}

table caption {
	margin: 1rem 0;
	color: slategray;
	font-size: 1.5rem;
	font-weight: 600;
	letter-spacing: 0.055rem;
	text-align: center;
}

table thead tr {
	color: whitesmoke;
	background-color: var(--accent-color);
	font-size: 1rem;
}

table tbody tr {
	border: 1px solid var(--insideBorderColor);
	background-color: var(--bgColorDarker);
}

table tbody tr:nth-child(odd) {
	background-color: var(--bgColorLighter);
}

table th {
	letter-spacing: 0.075rem;
}

table th,
table td {
	padding: 0.75rem 1rem;
	font-weight: normal;
	text-align: center;
}

table th:nth-child(4),
table td:nth-child(4) {
	text-align: center;
}

@media screen and (max-width: 768px) {
	table {
		border: none;
	}

	table caption {
		padding: 0.75rem 1rem;
		border-radius: 6px 6px 0 0;
		color: whitesmoke;
		font-size: 1.35rem;
		background-color: var(--accent-color);
	}

	table thead {
		position: center;
		width: 1px;
		height: 1px;
		clip: rect(0 0 0 0);
		overflow: hidden;
	}

	table tbody tr {
		margin-bottom: 2rem;
		display: center;
		
	}

	table td {
		font-size: 0.875rem;
		text-align: center;
		display: block;
	}

	table td:before {
		content: attr(data-label);
		font-size: 0.75rem;
		font-weight: 600;
		letter-spacing: 0.075rem;
		text-transform: uppercase;
		float: center;
		opacity: 0.5;
	}

	table td:not(:last-child) {
		border-bottom: 1px solid var(--insideBorderColor);

}
	}


	</style>
</head>
<body>
<div style="text-align:center;">
 	<table>
 	  <tr>
 	  	<th>BATCH</th>
 	  	<th>PARENT EMAIL</th>
 	  	<th>STUDENT NAME</th>
 	  </tr>
</div>

 	  <?php
       include 'connection.php';
       $q="SELECT batchname,parentmail,studentname from bookings where id='0'";
       $r=mysqli_query($con,$q);
       while($s=mysqli_fetch_array($r))
       {
       echo '<tr>';
       echo '<th>'.$s['batchname'].'</th>';
       echo '<th>'.$s['parentmail'].'</th>';
       echo '<th>'.$s['studentname'].'</th>';
     
       echo '</tr>';
      }
 	  ?>
    </table>
</body>
</html>
