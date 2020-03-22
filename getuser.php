		<!DOCTYPE html>
		<html>
		<head>
		<style>
            
		table {
			width: 100%;
			border-collapse: collapse;
			text-align:center;
		}

		table, td, th {
			border: 2px solid red;
			padding: 5px;
            color: white;
		}

		th {text-align: center;}
            
		</style>
		</head>
		<body>

		<?php
		$q = intval($_GET['q']);

		$con = mysqli_connect('localhost','root','','project');
		if (!$con) {
			die('Could not connect: ' . mysqli_error($con));
		}

		mysqli_select_db($con,"ajax_demo");
		$sql="SELECT * FROM employes WHERE id = '".$q."'";
		$result = mysqli_query($con,$sql);

		echo "<table>
		<tr>
		<th>First-Name</th>
		<th>Middel-Name</th>
		<th>Last-Name</th>
		<th>Email</th>
		<th>Age</th>
		<th>Roll</th>
		<th>Salary</th>
		<th>Mobile</th>
		<th>Country</th>
		</tr>";
		while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $row['firstname'] . "</td>";
			echo "<td>" . $row['middlename'] . "</td>";
			echo "<td>" . $row['lastname'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td>" . $row['age'] . "</td>";
			echo "<td>" . $row['roll'] . "</td>";
			echo "<td>" . $row['salary'] . "</td>";
			echo "<td>" . $row['mobile'] . "</td>";
			echo "<td>" . $row['country'] . "</td>";
			echo "</tr>";
		}
		echo "</table>";
		mysqli_close($con);
		?>
		</body>
		</html>