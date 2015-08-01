<html>
<head>
<title>Treble Booking</title>
<?php include 'includes/head.php'; ?>
</head>
<body class="musician">
<?php include 'includes/header.php'; ?>
	<section class="fixed_top col-xs-16">
		<h1 class="col-xs-8">
			<span class="text">Jimmy Jam Mariachi Band</span>
			<a href="#" class="rating">
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star-o"></span>
				<span class="fa fa-star-o"></span>
				<span class="fa fa-star-o"></span>
			</a>
		</h1>
		<ul class="col-xs-8">
			<li><a href="#"><span class="fa fa-envelope-o"></span> Message</a></li>
			<li><a href="#"><span class="fa fa-globe"></span> Visit Website</a></li>
			<li><a href="#"><span class="fa fa-heart"></span> Favorite</a></li>
			<li><a href="#"><span class="fa fa-hand-o-left"></span> Back to Search</a></li>
		</ul>
	</section>
	
	<section class="musician_profile col-xs-16">
		<div class="musician_left">
			<div class="gallery">
				<a href="#"><img class="current_image" src="http://lorempixel.com/400/300/cats/" /></a>
				
				<ul>
					<li><a href="http://lorempixel.com/400/300/cats/"><img src="http://lorempixel.com/75/75/cats/" /></a></li>
					<li><a href="http://lorempixel.com/400/300/cats/"><img src="http://lorempixel.com/75/75/cats/" /></a></li>
					<li><a href="http://lorempixel.com/400/300/cats/"><img src="http://lorempixel.com/75/75/cats/" /></a></li>
					<li><a href="http://lorempixel.com/400/300/cats/"><img src="http://lorempixel.com/75/75/cats/" /></a></li>
				</ul>
			</div>
			<ul class="buttons">
				<li><a href="#"><span class="fa fa-flag"></span> Report</a></li>
			</ul>
		</div>
		<div class="musician_info">
			<ul>
				<li><h5 class="col-xs-4">Number of members:</h5><div class="content col-xs-12">4</div></li>
				<li class="alt">
					<h5 class="col-xs-4">Members:</h5>
					<div class="content col-xs-12">
						<table class="col-xs-16">
							<tbody>
								<tr>
									<td>Guitar</td>
									<td>Jimbo Jones</td>
								</tr>
								<tr class="alt">
									<td>Flute</td>
									<td>Sammy Jones</td>
								</tr>
								<tr>
									<td>Voice - Soprano, Tambourine</td>
									<td>Alexander Jones</td>
								</tr>
								<tr class="alt">
									<td>Judgemental Glaring</td>
									<td>Mildred Jones</td>
								</tr>
							</tbody>
						</table>
					</div>
				</li>
				<li><h5 class="col-xs-4">Hourly Rate:</h5><div class="content col-xs-12">$750/hr</div></li>
				<li class="alt"><h5 class="col-xs-4">Music suitable for:</h5><div class="content col-xs-12">Weddings, Funerals and Memorial Services, Christmas Events, Religious Events- Jewish, Private Parties</div></li>
				<li><h5 class="col-xs-4">Genres:</h5><div class="content col-xs-12">Mariachi, Folk, Dubstep, Indie</div></li>
				<li class="alt"><h5 class="col-xs-4">About Us:</h5><div class="content col-xs-12">We're the hottest mariachi band in south Utica.</div></li>
				<li>
					<h5 class="col-xs-4">Repertoire:</h5>
					<div class="content col-xs-12">
						<ul class="rep_list">
							<li>Twinkle Twinkle (Mexican Remix)</li>
							<li class="alt">Hot Dog Song - Mickey Mouse Clubhouse</li>
							<li>Uptown Girl - Billy Joel</li>
							<li class="alt">A Night on Bald Mountain - Modest Mussorgsky</li>
							<li>Fat Bottomed Girls - Queen</li>
						</ul>
						<ul id="rep_list_all">
							<li class="alt">I Think It's Groovy - Scooby Doo</li>
							<li >I Think It's Groovy - Scooby Doo</li>
							<li class="alt">I Think It's Groovy - Scooby Doo</li>
							<li>I Think It's Groovy - Scooby Doo</li>
							<li class="alt">Groovy Guys Groovy - Scooby Doo</li>
						</ul>
						<a id="rep_list_all_link" data-addsongs="6" href="javascript:void(0);">Show Full List (+6 More Songs)</a>
					</div>
				</li>
				<li class="alt"><div class="content col-xs-16">This group is willing to learn specially requested music.</div></li>
				<li><div class="content col-xs-16">This group does not want to be contacted by other musicians.</div></li>
			</ul>
			<a name="audio_samples"></a>
			<h4>Audio Samples</h4>
			<div class="audio_sample">
				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/170893200&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
			</div>
			<div class="audio_sample">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/4CDx4ahEivY" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="audio_sample">
				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/93602472&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
			</div>
		</div>
	</section>

<?php include 'includes/footer.php'; ?>
<script type="text/javascript" src="static/js/musician.js"></script>
</body>
</html>