<?php
include 'connection.php';
?>

<html>
<<head>
	<CENTER>
<h1 style="color:white;">SCHEDULED CLASS</h1>
</CENTER>

	<title>CLASS DETAILS</title>
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
	width: 80%;
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
 	<table>
 	  <tr>
		<th>BATCH</th>
 	  	<th>SUBJECT</th>
 	  	<th>TUTOR</th>
 	  	<th>DATE</th>
 	  	<th>STARTING TIME</th>
        <th>ENDING TIME</th>
 	  </tr>

 	  <?php
       include 'connection.php';
       $q="SELECT batch,subject,tutor,date,stime,etime from class_schedule where id='0'";
       $r=mysqli_query($con,$q);
       while($s=mysqli_fetch_array($r))
       {
       echo '<tr>';
	   echo '<th>'.$s['batch'].'</th>';
       echo '<th>'.$s['subject'].'</th>';
       echo '<th>'.$s['tutor'].'</th>';
       echo '<th>'.$s['date'].'</th>';
       echo '<th>'.$s['stime'].'</th>';
       echo '<th>'.$s['etime'].'</th>';
       echo '</tr>';
      }
 	  ?>
    </table>
</body>
</html>
