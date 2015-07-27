<html>
<head>
<title>Treble Booking</title>
<?php include 'includes/head.php'; ?>
</head>
<body class="results">
<?php include 'includes/header.php'; ?>

	<section class="ads col-xs-2">
	
	</section>
	<section class="search_results col-xs-14">
		<form action="" method="GET">
			<div class="result_count col-xs-16">32 results found</div>
			<a class="narrow_toggle col-xs-4" href="javascript:void(0);">Narrow Your Results<span class="icon fa fa-plus-circle"></span></a>
			<div class="radio_container col-xs-4">
				<input type="radio" id="radio_for_hire" name="search_type" value="for_hire" checked="true" />
				<label for="radio_for_hire">Musicians for hire</label>
			</div>
			<div class="radio_container col-xs-8">
				<input type="radio" id="radio_looking_for" name="search_type" value="looking_for" />
				<label for="radio_looking_for">Musicians looking for other musicians</label>
			</div>
			<div class="narrow_fields col-xs-16">
				<div class="option col-xs-6">
					<label for="distance">Within: </label>
					<select name="distance" class="form-control">
						<option value="1">1</option>
						<option value="5">5</option>
						<option value="10">10</option>
						<option value="25">25</option>
						<option value="50">50</option>
					</select> 
					<label for="distance_location">miles of </label>
					<input type="text" name="distance_location" class="form-control" />
				</div>
				<div class="option col-xs-10">
					<label for="hourly_rate_min">Hourly Rate: </label>
					<select name="hourly_rate_min" class="form-control">
						<option value="0">$0/hr</option>
						<option value="10">$10/hr</option>
						<option value="25">$25/hr</option>
						<option value="50">$50/hr</option>
						<option value="75">$75/hr</option>
						<option value="100">$100/hr</option>
						<option value="200">$200/hr</option>
						<option value="500">$500/hr</option>
						<option value="1000">$1000/hr</option>
					</select> 
					<label for="hourly_rate_max">to </label>
					<select name="hourly_rate_max" class="form-control">
						<option value="0">$0/hr</option>
						<option value="10">$10/hr</option>
						<option value="25">$25/hr</option>
						<option value="50">$50/hr</option>
						<option value="75">$75/hr</option>
						<option value="100">$100/hr</option>
						<option value="200">$200/hr</option>
						<option value="500">$500/hr</option>
						<option value="1000">$1000/hr</option>
						<option value="5000">$5000/hr</option>
					</select>
				</div>
				<div class="option col-xs-6">
					<label for="num_musicians">Size: </label>
					<select name="num_musicians" class="form-control">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5+">5+</option>
					</select> 
					<label>musicians in group</label>
				</div>
				<div class="option col-xs-10">
					<label for="genre">Specific Genre: </label>
					<select name="genre" class="form-control">
						<option value=""></option>
						<option value="jazz">Jazz</option>
						<option value="classical">Classical</option>
						<option value="rock">Rock</option>
					</select> 
				</div>
				<div class="option col-xs-6">
					<label for="occassion">Special Occassion Music: </label>
					<select name="occassion" class="form-control">
						<option value=""></option>
						<option value="wedding">Wedding</option>
						<option value="birthday">Birthday</option>
						<option value="funeral">Funeral</option>
						<option value="bar_mitzvah">Bar Mitzvah</option>
					</select>
				</div>
				<div class="option col-xs-10">
					<label for="instruments">Instrument(s): </label>
					<input type="text" name="instruments" value="" data-role="tagsinput" />
				</div>
				<div class="option col-xs-16">
					<div class="checkbox">
						<label><input type="checkbox" name="special_requests" /> Considers special requests</label>
					</div>
				</div>
				<div class="option col-xs-13">
					<label for="name">Search By Name: </label>
					<input type="text" id="search_by_name" name="name" class="form-control" />
				</div>
			</div>
		</form>
		<ul class="sorts col-xs-16">
			<li class="title">Sort By:</li>
			<li><a class="selected" href="#">Distance</a></li>
			<li><a href="#">Rating</a></li>
			<li><a href="#">Cost</a></li>
			<li><a href="#">Group Size</a></li>
		</ul>
		<ul class="pages col-xs-16">
			<li><a href="#"><span class="icon fa fa-arrow-circle-o-left"></span> Prev</a></li>
			<li><a class="selected" href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">Next <span class="icon fa fa-arrow-circle-o-right"></span></a></li>
		</ul>
		<ul class="results col-xs-16">
			<li class="result featured col-xs-8">
				<div class="pic_ratings col-xs-4">
					<a href="#">
						<img src="static/img/sample_profile_pic.jpg" />
					</a>
					<div class="rating">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-o"></span>
						<span class="fa fa-star-o"></span>
						<span class="fa fa-star-o"></span>
					</div>
				</div>
				<div class="info col-xs-12">
					<h3><a href="#">Featured Profile 1 Name</a></h3>
					<ul>
						<li>Instrument(s): Guitar, Drums</li>
						<li>Size of Group: 154</li>
						<li>City: Anytown, USA</li>
						<li>Hourly Rate: $1,000.00</li>
						<li><a href="#">Audio Preview</a></li>
					</ul>
				</div>
			</li>
			<li class="result featured col-xs-8">
				<div class="pic_ratings col-xs-4">
					<a href="#">
						<img src="static/img/sample_profile_pic.jpg" />
					</a>
					<div class="rating">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-o"></span>
						<span class="fa fa-star-o"></span>
						<span class="fa fa-star-o"></span>
					</div>
				</div>
				<div class="info col-xs-12">
					<h3><a href="#">Featured Profile 1 Name</a></h3>
					<ul>
						<li>Instrument(s): Guitar, Drums</li>
						<li>Size of Group: 154</li>
						<li>City: Anytown, USA</li>
						<li>Hourly Rate: $1,000.00</li>
						<li><a href="#">Audio Preview</a></li>
					</ul>
				</div>
			</li>
			<li class="result col-xs-8">
				<div class="pic_ratings col-xs-4">
					<a href="#">
						<img src="static/img/sample_profile_pic.jpg" />
					</a>
					<div class="rating">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-o"></span>
						<span class="fa fa-star-o"></span>
						<span class="fa fa-star-o"></span>
					</div>
				</div>
				<div class="info col-xs-12">
					<h3><a href="#">Profile 1 Name</a></h3>
					<ul>
						<li>Instrument(s): Guitar, Drums</li>
						<li>Size of Group: 154</li>
						<li>City: Anytown, USA</li>
						<li>Hourly Rate: $1,000.00</li>
						<li><a href="#">Audio Preview</a></li>
					</ul>
				</div>
			</li>
			<li class="result col-xs-8">
				<div class="pic_ratings col-xs-4">
					<a href="#">
						<img src="static/img/sample_profile_pic.jpg" />
					</a>
					<div class="rating">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-o"></span>
						<span class="fa fa-star-o"></span>
						<span class="fa fa-star-o"></span>
					</div>
				</div>
				<div class="info col-xs-12">
					<h3><a href="#">Profile 1 Name</a></h3>
					<ul>
						<li>Instrument(s): Guitar, Drums</li>
						<li>Size of Group: 154</li>
						<li>City: Anytown, USA</li>
						<li>Hourly Rate: $1,000.00</li>
						<li><a href="#">Audio Preview</a></li>
					</ul>
				</div>
			</li>
			<li class="result col-xs-8">
				<div class="pic_ratings col-xs-4">
					<a href="#">
						<img src="static/img/sample_profile_pic.jpg" />
					</a>
					<div class="rating">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-o"></span>
						<span class="fa fa-star-o"></span>
						<span class="fa fa-star-o"></span>
					</div>
				</div>
				<div class="info col-xs-12">
					<h3><a href="#">Profile 1 Name</a></h3>
					<ul>
						<li>Instrument(s): Guitar, Drums</li>
						<li>Size of Group: 154</li>
						<li>City: Anytown, USA</li>
						<li>Hourly Rate: $1,000.00</li>
						<li><a href="#">Audio Preview</a></li>
					</ul>
				</div>
			</li>
			<li class="result col-xs-8">
				<div class="pic_ratings col-xs-4">
					<a href="#">
						<img src="static/img/sample_profile_pic.jpg" />
					</a>
					<div class="rating">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-o"></span>
						<span class="fa fa-star-o"></span>
						<span class="fa fa-star-o"></span>
					</div>
				</div>
				<div class="info col-xs-12">
					<h3><a href="#">Profile 1 Name</a></h3>
					<ul>
						<li>Instrument(s): Guitar, Drums</li>
						<li>Size of Group: 154</li>
						<li>City: Anytown, USA</li>
						<li>Hourly Rate: $1,000.00</li>
						<li><a href="#">Audio Preview</a></li>
					</ul>
				</div>
			</li>
		</ul>
		<ul class="pages col-xs-16">
			<li><a href="#"><span class="icon fa fa-arrow-circle-o-left"></span> Prev</a></li>
			<li><a class="selected" href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">Next <span class="icon fa fa-arrow-circle-o-right"></span></a></li>
		</ul>
		<ul class="sorts col-xs-16">
			<li class="title">Sort By:</li>
			<li><a class="selected" href="#">Distance</a></li>
			<li><a href="#">Rating</a></li>
			<li><a href="#">Cost</a></li>
			<li><a href="#">Group Size</a></li>
		</ul>
	</section>

<?php include 'includes/footer.php'; ?>
<script type="text/javascript" src="static/js/results.js"></script>
</body>
</html>