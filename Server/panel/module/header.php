		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					
				</div>
				<div class="col-md-8" style="text-align: center">
					<h1><i class="fa fa-table" style="font-size: 45px;"></i>&nbsp;&nbsp;<?php echo $name_function; ?></h1>
				</div>
				<div class="col-md-2">
					
				</div>
			</div>
		</div>
		<form class="ajax" method="post" action="../module/ajax.php">
			<input type="hidden" name="act" value="logout">
		<button class="myButton FixedLogOut" type="submit"><i class="fa fa-sign-out"></i>&nbsp;Logout</button>
		</form>
		<a href="../index.php" class="myButton FixedHome"><i class="fa fa-home"></i>&nbsp;Home</a>
