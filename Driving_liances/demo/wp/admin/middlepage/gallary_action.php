<?php
if(isset($_POST['submit']))
{
	$g_id          =   $_POST['g_id'];
	$title         =   $_POST['title'];
	$status        =   $_POST['status'];
	$discription   =   $_POST['discription'];

	$photo         =   $_FILES['photo']['name'];
	$img_type      =   $_FILES['photo']['type'];
	$img_size      =   $_FILES['photo']['size'];
	$tmp_name      =   $_FILES['photo']['tmp_name'];
	
	//echo "<pre>";
	//print_r($_POST);
	
	if($g_id !="")
	{
		$con = new PDO('mysql:host=localhost;dbname=license','root','123');
		$old_img = $_POST['old_img'];
		$sql="UPDATE  `gallary` SET `title`='$title',`status`='$status',`discription`='$discription' WHERE `g_id`='$g_id'";
		$query = $con->exec($sql);
		if($old_img == true && $photo== null)
		{
			header('location:index.php?page=gallary_view');
		}
		else if($old_img == true && $photo == true)
		{
			//echo "delete the pic";
			$old_img_pic = unlink("./upload/".$old_img);
			if($old_img_pic == true)
			{
				$new_uplod_file = move_uploaded_file($tmp_name,"./upload/".$photo);
				if($new_uplod_file == true)
				{
					$sql_pic = "UPDATE `gallary` SET `photo`='$photo' WHERE `g_id`='$g_id'";
					$query = $con->exec($sql_pic);
					header('location:index.php?page=gallary_view');
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
	else
	{
			$sql="INSERT INTO `gallary`(`title`,`photo`,`status`,`discription`)VALUES('$title','$photo','$status','$discription')";
			$query=$con->exec($sql);
			if($query)
			{
				move_uploaded_file($tmp_name,"./upload/".$photo);
				header('location:index.php?page=gallary_view&msg=success..');
			}
			else
			{
				header('location:index.php?page=gallary_form&msg=!Error..');
			}
		}
	}
	else
	{
		$status=$_GET['status'];
		$id=$_GET['g_id'];

	if($status !="")
	{
		if($status =='Active')
		{
			$sql="UPDATE `gallary` SET `status`='Inactive' WHERE `g_id`='$id'";
			$query=$con->exec($sql);
			if($query)
			{
				header('location:index.php?page=gallary_view&msg=success.');
			}
			else
			{
				header('location:index.php?page=gallary_view&msg=!Error..');
			}
		}
		else
		{
			$sql="UPDATE `gallary` SET `status`='Active' WHERE `g_id`='$id'";
			$query=$con->exec($sql);
			if($query)
			{
				header('location:index.php?page=gallary_view&msg=success.');
			}
			else
			{
				header('location:index.php?page=gallary_view&msg=!Error..');
			}
		}
	}

	else
	{

		//delete;
		$id=$_GET['g_id'];
		$sql="DELETE FROM `gallary` WHERE `g_id`='$id'";
		$quer=$con->exec($sql);
		if($query)
		{
			header('location:index.php?page=gallary_view&msg=success..');
		}
		else
		{
			header('location:index.php?page=gallary_view&msg=!Error..');
		}
	}
}
?>