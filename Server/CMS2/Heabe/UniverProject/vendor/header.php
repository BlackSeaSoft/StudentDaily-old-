	<div class="container-fluid">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div id="logo" style="width:365px; text-align: cetner; margin: 0 auto;">
						<img style="margin: 0 auto; margin-top: 1px;" src="img/logo/SD_logo.png" alt="logo" width="360">
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid menu-nav">
			<div class="container" style="text-align: center;">
					<div style="width: 520px; margin: 0 auto;">
						<div><a href="index.php" class="menu-left <?php if ($page_name=="index.php")
      echo "active-link"; ?>"  >Главная</a></div>
						<div><a class="<?php if ($page_name=="about.php")
      echo "active-link"; ?>" href="about.php">О приложении</a></div>
						<div><a class="<?php if ($page_name=="settings.php")
      echo "active-link"; ?>" href="settings.php">Настройки</a></div>
						<div><a href="blog.php" class="menu-right <?php if ($page_name=="blog.php")
      echo "active-link"; ?>">Блог</a></div>
					</div>
			</div>
		</div>
		
		<a href="#" class="myButton FixedLogOut"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
		<a href="#" class="myButton FixedHome"><i class="fa fa-home"></i>&nbsp;Home</a>
