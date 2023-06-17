

'''
	pdw@raspberrypi:/var/www/html/mud $ grep grid-container *.{php,css,html}
	gl-body-elem.php:  <div class="grid-container"> <!-- open grid-container element -->
	gl-body-elem.php:  </div><!-- close DIV class grid-container -->
	gl-head-elem.php:    . "    .grid-container div { font-size:10pt; font-weight:normal; }\n"
	gl-item-main.php:          in the <code>.grid-container</code>, above.
	gl-style.css:.grid-container div {
	grid-layout.10.css:.grid-container {
	grid-layout.10.css:.grid-container > div {
'''
	The '''<DIV class="grid-container">''' element
	is created within the [gl-body-elem](gl-body-elem.php)
	PHP module.

	That is:  The .grid-container element is opened at the
	beginning of the body element and closed at the end.

	Note that there should be more than one defined
	'grid-container' for the tempalte - specifically,
	each row should be a flex box, and the flex boxes should
	be contained in grid-container element.

	The .grid-container CSS selector is defined in gl-body-elem.css

