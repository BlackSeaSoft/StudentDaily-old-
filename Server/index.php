<?php
include 'module/check.php';
$page_name = "index.php";
$page_title = "Admin Panel";
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php include 'module/meta.php';?>
  </head>
  <body>
	<header>
		<?php include 'module/header.php';?>
	</header>
    
    <main>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a href="panel/add.php">
						<div class="element-menu opacity">
							<img src="img/icon/icon1.png" width="340" alt="logo">
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="panel/show.php">
						<div class="element-menu opacity">
							<img src="img/icon/icon2.png" width="340" alt="logo">
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<div class="element-menu opacity">
						<img src="img/icon/icon3.png" width="340" alt="logo">
					</div>
				</div>
			</div>   
		</div>
    </main>

    <?php include 'module/script.php';?>
  </body>
</html>
