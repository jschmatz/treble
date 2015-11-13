<header class="col-xs-16">
    <?php if($pc->bodyClass != "home") { ?>
	<div class="logo_container col-xs-16 col-lg-4">
		<a href="#">
			<img src="static/img/logo_purple_small.png" />
		</a>
	</div>
	<div class="form_container col-xs-16 col-lg-6">
		<?php include 'header_form.php'; ?>
	</div>
    <?php } ?>
	<ul>
		<li><a href="#">Sign In</a></li>
		<li><a href="#">My Profile</a></li>
	</ul>
</header>