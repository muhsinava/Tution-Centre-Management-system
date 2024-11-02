<?php
       include 'connection.php';
	   ?>

<html>
<head>
	<CENTER>
<h1 style="color:white;"> STUDENT ATTENDANCE</h1>
</CENTER>

	
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
<body>
	<center>
<form action="" method="post">
	<?php echo $cur_date = date("Y-m-d"); ?>
 	<table border="1">
 	  <tr>
       <th width="25%">id</th>
	   <th width="25%">Student Name</th>
     	<th width="25%">Attendance</th>
 	  </tr>
       <?php
       include 'connection.php';
       $q="SELECT * from students";
       $r=mysqli_query($con,$q);
	   $i=1;
	   
       while($s=mysqli_fetch_array($r))
       { ?>
							<input type="hidden" name="sid<?php echo $i;?>" value="<?php echo $s['studentid']; ?>">
							<input type="hidden" name="name<?php echo $i;?>" value="<?php echo $s['firstname']; ?>">
					
							<td><?php echo $s['studentid']; ?></td>
							<td><?php echo $s['firstname']; ?></td>
							<td>
								<input type="radio"  name="ab<?php echo $i;?>" value="absent">A
								<input type="radio" name="ab<?php echo $i;?>" value="present">P
								
							</td>
						</tr>
		<?php 
		
		///////////////////////////

		if(isset($_POST['Submit']))
		{
			echo "Haiiiiiiiiiiiiiiiiiiiiiiii";
			$attend= $_POST['ab'.$i];
			$sid= $_POST['sid'.$i];
			$name= $_POST['name'.$i];
			echo $attend;
				// foreach($attend as $att){
					if($attend=="present"){
						
						$q="insert into studentattendance values(null,".$sid.",'".$name."','present', now())";
						echo $q;
						$succ = mysqli_query($con,$q); 
					} elseif($attend=="absent") {
						$q="insert into studentattendance values(null,".$sid.",'".$name."','absent', now())";
						echo $q;
						$succ = mysqli_query($con,$q);

					}

				// 	}
				// }
	



		///////////////////////////
		
		
			}
		
		$i++; } ?>
    

      

	</div>
    </table>
	<br>
	<input type="submit" name="Submit" id="Submit"style="color: rgb(0, 0, 0);background: #eeeaec;border-radius: 10px;"/>
	   </form>
	   </center>
</body>
</html>


