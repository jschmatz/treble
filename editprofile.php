<html>
<head>
<title>Treble Booking</title>
<?php include 'includes/head.php'; ?>
</head>
<body class="editprofile">
<?php include 'includes/header.php'; ?>
	
	<section class="profile_form">
		<h1>My Account</h1>
		<form action="" method="POST">
			<h2 class="col-xs-16">Personal Information</h2>
            <div class="col-xs-10 col-xs-offset-3">
                <div class="col-xs-8">
                    <fieldset>
                        <label class="col-xs-16 row" for="fname">First Name</label>
                        <input class="col-xs-12 form-control" type="text" name="fname" value="" placeholder="Enter First Name" />
                    </fieldset>
                    <fieldset>
                        <label class="col-xs-16 row" for="lname">Last Name</label>
                        <input class="col-xs-12 form-control" type="text" name="lname" value="" placeholder="Enter Last Name" />
                    </fieldset>
                    <fieldset>
                        <label class="col-xs-16 row" for="email">Zip Code</label>
                        <input class="col-xs-3 form-control" type="text" name="email" value="" placeholder="Enter Zip" />
                        <a class="col-xs-13 align-w-fields" href="#">Select a specific location</a>
                    </fieldset>
                </div>
                <div class="col-xs-8">
                    <fieldset>
                        <label class="col-xs-16 row" for="email">Email</label>
                        <input class="col-xs-12 form-control" type="text" name="email" value="" placeholder="Enter Email Address" />
                    </fieldset>
                    <fieldset>
                        <label class="col-xs-16 row" for="birthyear">Year Born</label>
                        <select class="col-xs-6 form-control" name="birthyear"><option value="">Year</option><option value="1915">1915</option><option value="1916">1916</option><option value="1917">1917</option><option value="1918">1918</option><option value="1919">1919</option><option value="1920">1920</option><option value="1921">1921</option><option value="1922">1922</option><option value="1923">1923</option><option value="1924">1924</option><option value="1925">1925</option><option value="1926">1926</option><option value="1927">1927</option><option value="1928">1928</option><option value="1929">1929</option><option value="1930">1930</option><option value="1931">1931</option><option value="1932">1932</option><option value="1933">1933</option><option value="1934">1934</option><option value="1935">1935</option><option value="1936">1936</option><option value="1937">1937</option><option value="1938">1938</option><option value="1939">1939</option><option value="1940">1940</option><option value="1941">1941</option><option value="1942">1942</option><option value="1943">1943</option><option value="1944">1944</option><option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option></select>
                    </fieldset>
                </div>
            </div>
			<h2 class="col-xs-16">Musician Information</h2>
            <div class="col-xs-10 col-xs-offset-3">
                <div class="col-xs-8">
                    <fieldset>
                        <label class="col-xs-16 row" for="groupname">Group Name</label>
                        <input class="col-xs-12 form-control" type="text" name="groupname" value="" placeholder="Enter Group / Ensemble Name" />
                    </fieldset>
                </div>
                <div class="col-xs-8">
                    <fieldset>
                        <label class="col-xs-16 row" for="rate">Hourly Rate</label>
                        <span class="col-xs-1 align-w-fields">$</span>
                        <input class="col-xs-7 form-control" type="text" name="rate" value="" placeholder="Enter Hourly Rate" />
                        <span class="col-xs-2 align-w-fields"> / hr</span>
                    </fieldset>
                </div>
                <div class="col-xs-16">
                    <fieldset class="genres_field">
                        <label class="col-xs-16 row" for="genres">Genre(s) </label>
                        <input class="col-xs-16 form-control" id="genres" type="text" name="genres" value="" />
                        <a class="col-xs-16" href="#genresModal" data-toggle="modal">or Select from a list</a>
                    </fieldset>
                    <div id="genresModal" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Select your genres</h4>
                                </div>
                                <div id="genre_list" class="modal-body">
                                    <script id="genre_tmpl" type="x-tmpl-mustache">
                                        <h3 class="col-xs-16"><input type="checkbox" id="genrecat_{{ num }}" name="genrecat_{{ num }}" value="{{ cat_name }}" /><label for="genrecat_{{ num }}">{{ cat_name }}</label></h3>
                                        <div class="col-xs-16">
                                            <ul>
                                                {{#subcats}}
                                                    <li class="col-xs-4">
                                                        <input class="col-xs-2" type="checkbox" id="genresubcat_{{ num }}_{{ subcat_num }}" name="genresubcat_{{ num }}_{{ subcat_num }}" value="{{ subcat_name }}" />
                                                        <label class="col-xs-14" for="genresubcat_{{ num }}_{{ subcat_num }}">{{ subcat_name }}</label>
                                                    </li>
                                                {{/subcats}}
                                            </ul>
                                        </div>
                                    </script>
                                </div>
                                <div class="modal-footer">
                                    <button id="save_genres" type="button" class="btn btn-default">Save</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <h3 class="col-xs-16">Members</h3>
                <div id="member_list" class="col-xs-16">
                    <script id="member_tmpl" type="x-tmpl-mustache">
                        <div class="col-xs-16 member_line" id="member_{{ num }}">
                            <div class="col-xs-7">
                                <fieldset>
                                    <label class="col-xs-16 row" for="groupname">Instrument</label>
                                    <input class="col-xs-12 form-control instrument" type="text" name="instrument[{{num}}]" value="" placeholder="Enter Instrument" />
                                </fieldset>
                            </div>
                            <div class="col-xs-8">
                                <fieldset>
                                    <label class="col-xs-16 row" for="groupname">Musician Name</label>
                                    <input class="col-xs-12 form-control" type="text" name="musician_name[{{num}}]" value="" placeholder="Enter Musician Name" />
                                </fieldset>
                            </div>
                            <div class="col-xs-1">
                                <a id="remove_member_{{ num }}" class="remove_member fa fa-times" href="javascript:void(0);"></a>
                            </div>
                        </div>
                    </script>
                </div>
                <a id="member_list_add" class="col-xs-16" href="javascript:void(0);">Add Another Member</a>
                
                <div class="col-xs-16">
                    <fieldset>
                        <label class="col-xs-16 row" for="about">About the Musician / Group</label>
                        <textarea class="col-xs-16 form-control" name="about"></textarea>
                    </fieldset>
                </div>
            </div>
		</form>
	</section>

<?php include 'includes/footer.php'; ?>
<script type="text/javascript" src="static/js/plugins/mustache.min.js"></script>
<script type="text/javascript" src="static/js/plugins/typeahead.js"></script>
<script type="text/javascript" src="static/js/typeahead_setup.js"></script>
<script type="text/javascript" src="static/js/editprofile.js"></script>
</body>
</html>