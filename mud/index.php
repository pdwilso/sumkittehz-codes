<?php
/*
  File: grid-layout.10.php
  Desc: This code loads and populates the grid-layout responsive template
  Date: 2023-05-06 (Last Modified: 2023-05-16)
  Auth: sumkittehz.codes

CHANGELOG:
2023-05-06 21:50 sumkitteh
+ Move the source file name array data structures from the head and body element modules
+ to this module - all data items for used to populate the template should be declared and
+ initialized here.

2023-05-16 sumkittehz.codes
+ make template layout responsive using CSS Flexbox
+ as per <https://www.w3schools.com/css/css3_flexbox_responsive.asp>
+ changes may be in template compenent files esp gl-elem-body and gl-item-head 
+ remove     "gl-style.css" requirement
+ added "gl-body-elem.css" requirement
+ added "gl-item-foot.css" requirement
+ added "gl-item-menu.css" rquirement

TODO:  use virtual length units for fonts and sizes
TODO:  use display: flex for template row elements
TODO:  use display grid for top-level tepmlate container

 */
/* 
   List of Stylesheets for this Template;
   $stylesheets is an array of stylesheet filenames
   [last-modified 2023-05-16 by sumkitteh see CHANGLOG]
*/
$stylesheets = array (
    "grid-layout.10.css",
    "gl-body-elem.css",
    "gl-info.css",
    "gl-details.css",
    "gl-filelisting.css",
    "gl-item-head.css",
    "gl-item-menu.css",
    "gl-item-main.css",
    "gl-item-foot.css",

);
/*
  List of PHP modules for this Template;
  $phpmodules is a list of PHP source file names
 */
$phpmodules = array(
    "gl-item-head.php",
    "gl-item-menu.php",
    "gl-item-main.php",
    "gl-item-foot.php",
    "gl-head-elem.php",
    "gl-body-elem.php",
    "grid-layout.10.php"
);
$templateModules = array (
    "gl-head-elem.php",
    "gl-body-elem.php",
    "grid-layout.10.php"
);
$contentModules = array (
    "gl-item-head.php",
    "gl-item-menu.php",
    "gl-item-main.php",
    "gl-item-foot.php",
);
/*
  Output of the HTML document starts here:
 */
echo( '<!DOCTYPE html>'."\n" );
echo( '<html lang="en">'."\n" );

require( "gl-head-elem.php" ); 
require( "gl-body-elem.php");

/*
  Close HTML document output:
 */
echo( "</html>\n" );
?>
