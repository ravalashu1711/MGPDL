<?php
		include "../include/config.php";
		error_reporting(0);
	
	    if(isset($_POST['submit']))
		{
		
            $lic_type = $_POST['lic_type'];
            $lic_id = $_POST['lic_id'];
            
            
			if($lic_id != '')
			{
				//update
				$sql ="UPDATE `license_type` SET `lic_type`='$lic_type' WHERE `lic_id`='$lic_id'"; 
				$query = $con->exec($sql);
				
				if($query)
				{
					header('location:http://mgpdl.local/admin/index.php?page=license_type_view');
				}
				else
				{
					header('location:http://mgpdl.local/admin/index.php?page=404');
				}
			}
			else
			{
				//insert
				$sql="INSERT INTO `license_type` (`lic_type`) VALUES('$lic_type')";
				$query = $con->exec($sql);
                
                if($query)
				{
					header('location:http://mgpdl.local/admin/index.php?page=license_type_view');
				}
				else
				{
					header('location:http://mgpdl.local/admin/index.php?page=404');
				}
			}

		}
		
			if($_GET)
			{
				//delete

				$a_id = $_GET['lic_id'];
				$sql = "DELETE FROM `license_type` WHERE `lic_id` = '$a_id'";
                $query =$con->exec($sql);
                var_dump($query);
				if($query)
				{
					header("location:http://mgpdl.local/admin/index.php?page=license_type_view");
				}
				else
				{
					header('location:http://mgpdl.local/admin/index.php?page=404');
				}
			}
?>