<?php
$con = new PDO('mysql:host=localhost;dbname=license','root','123');
?>
<html>
	<head>
	</head>
	<body>
	<center>
		<table border="1">
			<tr>
				<th>Student Id</th>
				<th>Student Name</th>
				<th>Field</th>
				<th>Teacher Id</th>
			</tr>
			<?php
				$sql = "SELECT * FROM `student`";
				$query = $con->query($sql);
				
				$sql1 = "SELECT * FROM `teacher`";
				$query1 = $con->query($sql1);

				
				while($data = $query->fetch(PDO::FETCH_ASSOC))
				{
			
			?>
			<tr>
				<td><?php echo $data['s_id']; ?></td>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['field']; ?></td>
				<td></td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
