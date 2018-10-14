<?php
$con = new PDO('mysql:host=localhost;dbname=license','root','123');

?>
<html>
	<head>
	</head>
	<body>
		<form action="action_stu.php" method="post">
			<label>Name</label>
			<input type="text" name="name">
			<br>
			<label>Field</label>
			<input type="text" name="field">
			<br>
			<label>Teachers</label>
			<?php
			$sql = "SELECT * FROM `teacher`";
			$query = $con->query($sql);
			
			
			$sql1 = "SELECT * FROM `student`";
			$query1 = $con->query($sql1);
			
			?>
			<select name="t_id">
				<?php
				while($data = $query->fetch(PDO::FETCH_ASSOC))
				{
				?>
				<option value="<?php echo $data['t_id']; ?>"><?php echo $data['name'];  ?></option>
				<?php
				}
				?>
			</select>
			<br>
			<input type="submit" name="submit">
		</form>
	</body>
</html>
