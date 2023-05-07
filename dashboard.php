<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
	<div class="container">
		<nav>
			<ul>
				<li class="padding1 <?php if(isset($_GET['page']) && $_GET['page'] == 'foodstalls') { echo 'active'; } ?>"><a href="?page=foodstalls">FOOD STALLS</a></li>
				<li class="padding1 <?php if(isset($_GET['page']) && $_GET['page'] == 'nowshowing') { echo 'active'; } ?>"><a href="?page=nowshowing">NOW SHOWING</a></li>
				<li class="padding1 <?php if(isset($_GET['page']) && $_GET['page'] == 'restroom') { echo 'active'; } ?>"><a href="?page=restroom">RESTROOM</a></li>
				<li class="padding1 <?php if(isset($_GET['page']) && $_GET['page'] == 'staffinfo') { echo 'active'; } ?>"><a href="?page=staffinfo">STAFF INFORMATION</a></li>
				<li class="padding <?php if(isset($_GET['page']) && $_GET['page'] == 'users') { echo 'active'; } ?>"><a href="?page=users">USERS</a></li>
			</ul>
			<form action="logout.php" method="post">
				<button type="submit" name="logout">Log <span class = "out">Out</span></button>
			</form>
		</nav>
		<div class="content">
			<?php
			if(isset($_GET['page'])) {
				$page = $_GET['page'];
				if($page == 'foodstalls') {
					include('foodstalls.php');
				} elseif($page == 'nowshowing') {
					include('nowshowing.php');
				} elseif($page == 'restroom') {
					include('restroom.php');
				} elseif($page == 'staffinfo') {
					include('staffinfo.php');
				} elseif($page == 'users') {
					include('users.php');
				}
			}
			?>
		</div>
	</div>
</body>
</html>
