<?php
		include "../include/config.php";
		error_reporting(0);
	
	    if(isset($_POST['submit']))
		{
			$num = $_POST['num'];      //Collection on number of rows like counts rows..

			$sql = "INSERT INTO `test`(`question`,`ans1`,`ans2`,`ans3`,`ans4`,`answer`) VALUES";		
			for($i=0;$i<$num;$i++)
			{
					$t_id 		= 	$_POST['t_id'];
					$question 	= 	$_POST['question'];
					$ans1 		= 	$_POST['ans1'];
					$ans2 		= 	$_POST['ans2'];
					$ans3 		= 	$_POST['ans3'];
					$ans4 		= 	$_POST['ans4'];
					$answer 	= 	$_POST['answer'];
					
				$sql .= "('".$question[$i]."','".$ans1[$i]."','".$ans2[$i]."','".$ans3[$i]."','".$ans4[$i]."','".$answer[$i]."'),";
			} 
			$sql = rtrim($sql,",");
			//echo $sql;          //Show no of data
			$query = $con->exec($sql);
			if($query == true)
			{
				header('location:index.php?page=test_view');
			}
			else
			{
				echo "!Error for Multiple Records Inserttion...";
			}
		}	
?>