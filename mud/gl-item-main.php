<?php
/*
  File: gl-item-main.php
  Desc: grid-layout content module for #item-main, the primary content
        area defined by the template.
  Date: 2023-05-10
  Auth: sumkittehz.codes

  Usage notes: This file provides the content of the #item-main
               container.  

               This file depends on other files, including
               gl-style.css and gl-item-main.css, as well as subsidary
               content modules which may be included as plain text,
               XML, JSON, CSS, PHP, X/HTML, etc

               This file depends on certain global variable
               definitions having been given a value before this
               module is processed.

               See data documentation for more about data used by this
               module to populate these parts of the document produced
               by this template.

 */
echo <<< 'EOBM'
   <div class="item-main">
      <details id="ga-main">
    	<summary><span class="divlabel">#item-main</span></summary>
	<p>
          This is the <code>#item-main</code> grid area block.
        </p>
        <p>
          The CSS block shown below is used in the stylesheet
	  to create an area map of the grid.
        </p>
	<pre>
  grid-template-areas:
    'header header header header header header'
    'menu main main main main main'
    'footer footer footer footer footer footer';
	</pre>
	<p>
          Each of the grid area blocks is identified
          by <code>id=&quot;item-[NAME]&quot;</code>,
          where <code>[NAME]</code> is replaced by one of the grid area
          names from the <code>grid-template-areas</code> value assigned
          in the <code>.grid-container</code>, above.
	</p>
	<p>
           This grid layout contains six columns and three rows.
	</p>
	<p>
          This is a <i>Responsive CSS Grid Template Example</i> built
          from the examples at w3schools.
	</p>
      </details>
      
EOBM;
?>

    <h2>Grid Layout Template Diagram</h2>
    <div style="margin:auto;">
      <object id="dia-gram" data="Diagram1.svg">Diagram1.svg</object>
    </div>
    <div style="margin:1em;">
      <object id="dia-g2" data="Diagram2.svg"></object>
      <p>
	Diagram 2 shows data blocks processed within the document's
	&lt;head&gt; element.
      </p>
    </div>                                   


  </div><!-- close class item-main -->
<?php
?>
