<?php
	if(isset($_POST['submit']))
	{
			$u_id             = $_POST['u_id'];
			$aadhar_no        = $_POST['aadhar_no'];
			$name             = $_POST['name'];
			$uname  		  = $_POST['uname'];
			$password 		  = $_POST['password'];
			$con_password     = $_POST['con_password'];
			$email            = $_POST['email'];
			
			$address		  = $_POST['address'];
			$pincode		  = $_POST['pincode'];
			$birth_date		  = $_POST['birth_date'];
			$city   		  = $_POST['city'];
			
			$age    		  = $_POST['age'];
			
			$mobile    		  = $_POST['mobile'];
			
			$gender  		  = $_POST['gender'];

			$photo            = $_FILES['photo']['name'];
			$file_type        = $_FILES['photo']['type'];
			$file_size        = $_FILES['photo']['size'];
			$tmp_name         = $_FILES['photo']['tmp_name'];

			$status  		  = $_POST['status'];
		
		
		if($u_id !="")
		{
			//update;
			$old_img = $_POST['old_img'];
			$sql="UPDATE  `user_reg` SET `aadhar_no`='$aadhar_no',`name`='$name',`uname`='$uname',`password`='$password',`con_password`='$con_password',`email`='$email',`address`='$address',`pincode`='$pincode',`birth_date`='$birth_date',`city`='$city',`age`='$age',`mobile`='$mobile',`gender`='$gender' WHERE `u_id`='$u_id'";
			$query = $con->exec($sql);


			if($old_img == true && $photo== null)
			{
				header('location:index.php?page=profile');
			}
			else if($old_img == true && $photo == true)
			{
				//echo "delete the pic";
				$old_img_pic = unlink("./upload/".$old_img);
				if($old_img_pic == true)
				{
					$new_uplod_file = move_uploaded_file($tmp_name,"./photo/".$photo);
					if($new_uplod_file == true)
					{
						$sql_pic = "UPDATE `user_reg` SET `photo`='$photo' WHERE `u_id`='$u_id'";
						$query = $con->exec($sql_pic);
						header('location:index.php?page=profile');
					}
					else
					{
						echo "!Error for upload new File";
					}
				}
				else
				{
					//echo "!Error for delete the old file";
				}
			}
		}
		
	}
?>