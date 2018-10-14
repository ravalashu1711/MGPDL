  	
<div id="header">
	
	<div class="container">			
		<img src="" />
		<h1><a href="default.htm">Mehsana General Public License</a></h1>			
		
		<div id="info">				
			
			<a href="javascript:;" id="info-trigger">
				<i class="icon-cog"></i>
			</a>
			
			<div id="info-menu">
				
				<div class="info-details">
				
					<h4>Welcome back, <?php echo $_SESSION['name']; ?></h4>
					
					<p>
						Logged in as Admin.
						<br>
						<a href="middlepage/logout.php">logout</a>
					</p>
					
				</div> <!-- /.info-details -->
				
				<div class="info-avatar">

					
					 <img src="upload/<?php echo $_SESSION['photo']; ?>" alt="<?php echo $_SESSION['photo']; ?>" style="height:50px;width:50px;"/><br>
					
				</div> <!-- /.info-avatar -->
				
			</div> <!-- /#info-menu -->
			
		</div> <!-- /#info -->
		
	</div> <!-- /.container -->

</div> <!-- /#header -->