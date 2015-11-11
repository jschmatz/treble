<html>
<head>
<title>Treble Booking</title>
<?php include 'includes/head.php'; ?>
<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="static/css/jquery.fileupload.css">
<link rel="stylesheet" href="static/css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="static/css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="static/css/jquery.fileupload-ui-noscript.css"></noscript>
</head>
<body class="editprofile">
<?php include 'includes/header.php'; ?>
	
	<section class="profile_form">
		<h1>My Profile</h1>
		<form action="/saveprofile" method="POST">
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
                        <label class="col-xs-16 row" for="zip">Zip Code</label>
                        <input class="col-xs-3 form-control" type="text" name="zip" value="" placeholder="Enter Zip" />
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
                <div class="col-xs-8">
                    <fieldset>
                        <label class="col-xs-16 row" for="website">Website</label>
                        <input class="col-xs-12 form-control" type="text" name="website" value="" placeholder="Enter URL to Website" />
                    </fieldset>
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
                <div class="col-xs-16">
                    <fieldset class="events_field">
                        <label class="col-xs-16 row" for="events">Music Suitable for </label>
                        <input class="col-xs-16 form-control" id="events" type="text" name="events" value="" />
                        <a class="col-xs-16" href="#eventsModal" data-toggle="modal">or Select from a list</a>
                    </fieldset>
                    <div id="eventsModal" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Select what events your music is suitable for</h4>
                                </div>
                                <div id="event_list" class="modal-body">
                                    <div class="col-xs-16">
                                        <ul>
                                            <script id="event_tmpl" type="x-tmpl-mustache">
                                                <li class="col-xs-5">
                                                    <input class="col-xs-2" type="checkbox" id="event_{{ num }}" name="event_{{ num }}" value="{{ name }}" />
                                                    <label class="col-xs-14" for="event_{{ num }}">{{ name }}</label>
                                                </li>
                                            </script>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="save_events" type="button" class="btn btn-default">Save</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-16">
                    <fieldset>
                        <label class="col-xs-16 row" for="about">About the Musician / Group</label>
                        <textarea class="col-xs-16 form-control" name="about"></textarea>
                    </fieldset>
                </div>
            </div>
            <h2 class="col-xs-16">Images</h2>
            <div class="col-xs-10 col-xs-offset-3 upload-container">
                <div class="col-xs-16">
                    <p>You can upload up to 5 images that are 1 MB or less each.</p>
                    <!-- The file upload form used as target for the file upload widget -->
                    <div id="imageupload">
                        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                        <div class="row imageupload-buttonbar">
                            <div class="col-xs-16">
                                <!-- The fileinput-button span is used to style the file input field as button -->
                                <span class="btn btn-success fileinput-button">
                                    <span>Add images...</span>
                                    <input type="file" name="files[]" multiple>
                                </span>
                                <button type="submit" class="btn btn-primary start">
                                    <span>Start upload</span>
                                </button>
                                <button type="reset" class="btn btn-warning cancel">
                                    <span>Cancel upload</span>
                                </button>
                                <button type="button" class="btn btn-danger delete">
                                    <span>Delete</span>
                                </button>
                                <input type="checkbox" class="toggle">
                                <!-- The global file processing state -->
                                <span class="imageupload-process"></span>
                            </div>
                            <!-- The global progress state -->
                            <div class="col-lg-5 imageupload-progress fade">
                                <!-- The global progress bar -->
                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                </div>
                                <!-- The extended global progress state -->
                                <div class="progress-extended">&nbsp;</div>
                            </div>
                        </div>
                        <!-- The table listing the files available for upload/download -->
                        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                    </div>
                    <!-- The blueimp Gallery widget -->
                    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                        <div class="slides"></div>
                        <h3 class="title"></h3>
                        <a class="prev">‹</a>
                        <a class="next">›</a>
                        <a class="close">×</a>
                        <a class="play-pause"></a>
                        <ol class="indicator"></ol>
                    </div>
                </div>
            </div>
            <h2 class="col-xs-16">Audio</h2>
            <div class="col-xs-10 col-xs-offset-3 upload-container">
                <div class="col-xs-16">
                    <p>You can upload up to 5 audio that are 3 MB or less each.</p>
                    <!-- The file upload form used as target for the file upload widget -->
                    <div id="audioupload">
                        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                        <div class="row audioupload-buttonbar">
                            <div class="col-xs-16">
                                <!-- The fileinput-button span is used to style the file input field as button -->
                                <span class="btn btn-success fileinput-button">
                                    <span>Add audio...</span>
                                    <input type="file" name="files[]" multiple>
                                </span>
                                <button type="submit" class="btn btn-primary start">
                                    <span>Start upload</span>
                                </button>
                                <button type="reset" class="btn btn-warning cancel">
                                    <span>Cancel upload</span>
                                </button>
                                <button type="button" class="btn btn-danger delete">
                                    <span>Delete</span>
                                </button>
                                <input type="checkbox" class="toggle">
                                <!-- The global file processing state -->
                                <span class="audioupload-process"></span>
                            </div>
                            <!-- The global progress state -->
                            <div class="col-lg-5 audioupload-progress fade">
                                <!-- The global progress bar -->
                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                </div>
                                <!-- The extended global progress state -->
                                <div class="progress-extended">&nbsp;</div>
                            </div>
                        </div>
                        <!-- The table listing the files available for upload/download -->
                        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                    </div>
                    <div class="col-xs-16">
                        <fieldset>
                            <h3 class="col-xs-16">External Audio Links</h3>
                            <div id="sc_list">
                                <script id="sc_tmpl" type="x-tmpl-mustache">
                                    <div class="col-xs-16 sc_line" id="sc_link_{{ num }}">
                                        <div class="col-xs-15">
                                            <input class="col-xs-16 form-control sc_link" type="text" name="sc_link[{{num}}]" value="" placeholder="Enter Link To External Audio Page (such as YouTube, SoundCloud, or Vimeo)" />
                                        </div>
                                        <div class="col-xs-1">
                                            <a id="remove_sc_link_{{ num }}" class="remove_sc_link fa fa-times" href="javascript:void(0);"></a>
                                        </div>
                                    </div>
                                </script>
                            </div>
                            <a id="sc_list_add" class="col-xs-16" href="javascript:void(0);">Add Another External Audio Link</a>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div id="form-end" class="col-xs-10 col-xs-offset-3">
                <div class="col-xs-8">
                    <fieldset>
                        <input class="col-xs-1 form-control" type="checkbox" name="available_for_hire" />
                        <label class="col-xs-15" for="available_for_hire">I am available for hire.</label>
                    </fieldset>
                </div>
                <div class="col-xs-8">
                    <fieldset>
                        <input class="col-xs-1 form-control" type="checkbox" name="contact_by_others" />
                        <label class="col-xs-15" for="contact_by_others">I would like to be listed for contact by other musicians.</label>
                    </fieldset>
                </div>
                <div class="col-xs-16">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce faucibus nunc vel tempus molestie. Donec hendrerit nisl sem, eu pulvinar felis tincidunt porttitor. Vivamus vitae nunc a quam pulvinar venenatis. Quisque a ligula non tortor convallis tempus. Proin eget dapibus felis, non mattis ex. Etiam in varius nunc. Vestibulum vitae vestibulum neque. Duis scelerisque, ipsum a ullamcorper mollis, urna massa feugiat velit, quis scelerisque lacus metus sit amet arcu. Maecenas feugiat sollicitudin tellus, nec eleifend diam condimentum quis.</p>
                </div>
                <div class="col-xs-16">
                    <fieldset>
                        <input class="col-xs-1 form-control" type="checkbox" name="accept_conditions" />
                        <label class="col-xs-15" for="accept_conditions">I accept the terms and conditions.</label>
                    </fieldset>
                    <fieldset>
                        <input class="form-control col-xs-8 col-xs-offset-4" type="submit" value="Update Profile" />
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

<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- blueimp Gallery script -->
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="static/js/plugins/fileupload/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="static/js/plugins/fileupload/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="static/js/plugins/fileupload/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="static/js/plugins/fileupload/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="static/js/plugins/fileupload/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="static/js/plugins/fileupload/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="static/js/plugins/fileupload/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="static/js/plugins/fileupload/jquery.fileupload-ui.js"></script>

</body>
</html>