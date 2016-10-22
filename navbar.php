<div class="navbar" style="background: #ccc;">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="#">Home</a>
			</li>
			<li>
				<a href="#">Reseller</a>
			</li>
		</ul>

		<?php if(isset($_SESSION['LOGGED_IN_USER'])): ?>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $_SESSION['LOGGED_IN_USER']['full_name']; ?> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="?p=profile">Profile</a></li>
					<li><a href="?p=logout">Logout</a></li>
				</ul>
			</li>
		</ul>
		<?php endif ?>
	</div>
</div>