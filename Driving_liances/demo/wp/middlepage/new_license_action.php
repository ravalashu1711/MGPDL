<?php
		include "../include/config.php";
		error_reporting(0);
	
	    if(isset($_POST['submit']))
		{
		
			$nl_id             = $_POST['nl_id'];
			$name              = $_POST['name'];
			$email             = $_POST['email'];
			$address           = $_POST['address'];
			$city              = $_POST['city'];
			$pincode           = $_POST['pincode'];
			$state             = $_POST['state'];
			$country           = $_POST['country'];
			$mobile            = $_POST['mobile'];
			$birth_date        = $_POST['birth_date'];
			$place_of_birth    = $_POST['place_of_birth'];
			$age               = $_POST['age'];
			$b_group           = $_POST['b_group'];
			$education         = $_POST['education'];
			$lic_cat           = $_POST['lic_cat'];
			
			$document          = $_FILES['document']['name'];
			$file_type         = $_FILES['document']['type'];
			$file_size         = $_FILES['document']['size'];
			$tmp_name          = $_FILES['document']['tmp_name'];

			
			
			
			//insert

			$sql="INSERT INTO `new_license` (`name`,`email`,`address`,`pincode`,`city`,`state`,`country`,`mobile`,`birth_date`,`place_of_birth`,`age`,`b_group`,`education`,`document`,`lic_cat`) VALUES('$name','$email','$address','$pincode','$city','$state','$country','$mobile','$birth_date','$place_of_birth','$age','$b_group','$education','$document','$lic_cat')";
			$query = $con->exec($sql);

			$sql_new_licence = "SELECT * FROM `new_license` ORDER BY `nl_id` DESC";
			$query_new_licence = $con->query($sql_new_licence);
			$data_new_licence = $query_new_licence->fetch(PDO::FETCH_ASSOC);
			$last_id = $data_new_licence['nl_id'];
			if($query <=1)
			{

				move_uploaded_file($tmp_name,"../upload/".$document);
				
				header('location:../index.php?page=license_view&msg=Successfull&nl_id='.$last_id);
			}
			else
			{
				header('location:../index.php?page=404');
			}


		}
		
?>