<?php
/*
    File: gl-body-elem.php
    Desc: Grid Layout <body> element for grid layout Tempate
    Date: 2023-05-10
    Auth: sumkittehz.codes

    This file is the body content module for our grid-layout
    responsive page model template.

    This file is modified for the current instanciation project,
    /mud/.

    This module defines the list of required content modules per grid
    area.

    The content of the <body> element is defined in PHP content
    modules.

    Content is grouped into four responsive grid areas.

    Each of these grid areas is defined and populated by a PHP content
    module.

    The required content modules are: 

    + item-head 
    + item-menu 
    + item-main
    + item-foot

    Note that the list of content modules does NOT include this file,
    nor the template's <head> element definition module
    gl-head-elem.php

    Note that each of the modules in this list may have dependencies
    and requirements of their own.

    Furthermoer, note that the main PHP file that contains the data
    definitions for the template population is not included here,
    eiteher.  This list includes only PHP modules tht are required by
    the body element defined in this file
 */
$contentmodules = array(
    "gl-item-head.php",
    "gl-item-menu.php",
    "gl-item-main.php",
    "gl-item-foot.php"
);

/* 
   open the body element 
*/
echo <<<'EOE'
<body>
  <details>
    <summary><span class="info">#file-info</span></summary>
    <pre class="file-info">
      File: <a href="gl-body-elem.php"><code>gl-body-elem.php</code></a>
      Desc: Responsive Grid Layout Customization
      Upddated: 2023-05-08
      Author: <a href="https://sumkittehz.codes/">sumkittehz.codes</a>
    </pre>
  </details>
  <div class="grid-container"> <!-- open grid-container element -->
EOE;

/* 
   This module maintains the list of PHP content modules that is to populate
   this instance of the template - this module provides the <body> element's
   open and close element tags and populates the body element from the list 
   of PHP content modules.  The list of content modules is iterated with 
   individual 'require()' statements generated for each contnet module.

*/
foreach( $contentmodules as $fn ) { require( $fn ); }

/*
  TODO:
  It seems a good idea to load the individual content modules against
  named HTML elements from this module.  This would mean that the
  viewport grid elements would be defined here and associated with the
  named content module, explicitly, here, rather than depending o nthe
  more generalized 'require()' statements.

  TODO: The file listings should be a distinct module.  Shuld probably
  Load in the footer section.  The index of source file listings could
  also be considered an appendix to the main document.

  TODO: Create an indexed list of viewport grid areas with HTML ID
  attribute value indexed against source file base name with access to
  [basename].{php,js,css,json,xml,html} modules.

 */
echo( '  
  </div><!-- close DIV class grid-container -->
' );
/*  
    Create source file listings 
*/
echo '  <div class="listings">'."\n";
foreach ( array_merge( $stylesheets, $phpmodules ) as $fn ) {
    echo '<details><summary><span class="info">' . $fn . '</span></summary>'."\n";
    echo '<pre class="filelisting">Filename:  <a target="_blank" href="' . $fn . '">' . $fn . "</a>\n<hr/>\n";
    highlight_file($fn);
    echo '<hr/>'."\n<span>end of file ". $fn ."</span></pre>\n</details>\n";
    /*
      $html_output_string .= '<details><summary><span class="info">' . $fn . '</span></summary>'
                        . '<pre class="filelisting">Filename:  <a target="_blank" href="'
                        . $fn . '">' . $fn . '</a>'."\n<hr/>\n";
    $html_output_string .= highlight_file($fn,TRUE);
    $html_putput_string .= '<hr>'
                        . '<span>end of file ' . $fn . "</span></pre>\n"
                        . "</details>\n";
    */
   }
echo "   </div><!-- listings -->\n" . "  </body>\n";

?>
