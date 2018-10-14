<?php
include "../include/config.php";

$sql = "SELECT * FROM `test` WHERE `status`='Active'";
$query = $con->query($sql);

?>
<html>
	<head>
		<title>Quize Modules</title>
			<script src="jquery-2.1.4.min.js" type="text/javascript" rel="javascript"></script>
			<script type="text/javascript">
				function timeout()
				{
					var minute=Math.floor(timeLeft/60);
					var second=timeLeft%60
					if(timeLeft<=0)
					{
						clearTimeout(timeout);
						document.getElementById("form1").submit();
					}
					else
					{
						document.getElementById("time").innerHTML=minute+":"+second;
					}
					timeLeft--;
					var setTimeout(function(){timeout()},1000);
				}
			</script>
	</head>
	<body onload="timeout()">
		<center>
			<h1>Question List<div id="time">Time Out</div></h1>
			<script>
				var timeLeft=2*60;
			</script>
			<form action="index.php?page=t_attemt" method="post" enctype="multipart/form-data">
			<table>
			<?php 
				$i=1;
				while($data = $query->fetch(PDO::FETCH_ASSOC))
				{
			?>
					<tr>
						<th rowspan="3" valign="top"="top">Que:<?php echo $i++;?></th>
						<th colspan="2" align="left">
							<label><?php echo $data['question']; ?></label>
						</th>
						<tr>
							<?php
								if(isset($data['ans1']))
								{
							?>
							<td>
								<label>A.</label>
								<input type="radio" name="<?php echo $data['t_id']; ?>" id="" value="0" />
								<label for=""><?php echo $data['ans1'] ?></label>
								<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							</td>
							<?php
								}
							?>
							
							
							<?php
								if(isset($data['ans2']))
								{
							?>
							<td>
								<label>B.</label>
								<input type="radio" name="<?php echo $data['t_id']; ?>" id="" value="1"/>
								<label for=""><?php echo $data['ans2'] ?></label>
								<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							</td>
							<?php
								}
							?>
							
						</tr>
						<tr>
							<?php
								if(isset($data['ans3']))
								{
							?>
							<td>
								<label>C.</label>
								<input type="radio" name="<?php echo $data['t_id']; ?>" id="" value="2"/>
								<label for=""><?php echo $data['ans3'] ?></label>
								<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							</td>
							<?php
								}
							?>
							
							<?php
								if(isset($data['ans4']))
								{
							?>
							<td>
								<label>D.</label>
								<input type="radio" name="<?php echo $data['t_id']; ?>" id="" value="3"/>
								<label for=""><?php echo $data['ans4'] ?></label>
								<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
							</td>
							<?php
								}
							?>
						</tr>
					</tr>
					
					<tr>
						<td colspan="3">
							&nbsp;
							<input type="radio" checked="checked" style="display:none;" name="<?php echo $data['t_id']; ?>" value="No_Attemp" />
						</td>
					</tr>
					<tr>
						<td colspan="3">&nbsp;</td>
					</tr>
				<?php
				}
				?>
					<tr>
						<td colspan="3"><center><button type="submit">Submit</button></center></td>
					</tr>
			</table>
			</form>
		</center>	
	</body>
</html>