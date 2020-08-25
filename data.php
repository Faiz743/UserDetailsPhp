<!DOCTYPE html>
<html>
<head>
	<title>User Address Details Form</title>
	<style type="text/css">
		table{
			width: 100%;
			color: #588c7e;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
		th{
			background-color: #588c7e;
			color: white;
		}
		tr:nth-child(even){
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>Password</th>
			<th>Address</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "userinfo");
		if ($conn-> connect_error){
		die("Connection failed:". $conn-> connect_error);
		}

		$sql = "SELECT id, username, password, address from login";
		$result = $conn-> query($sql);

		if ($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()) {
		echo "<tr><td>". $row["id"] ."</td><td>". $row["username"] ."</td><td>". $row["password"] ."</td><td>". $row["address"] ."</td></tr>";
		}
		echo "</table>";
		}
		else{
		echo "0 result";
		}
		$conn-> close();
		?>
	</table>
</body>
</html>