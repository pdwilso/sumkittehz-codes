    <?php
/*
  File:  gl-item-head.php
  Date:  2023-05-11 (Last-Modified: 2023-05-16 by sumkitteh)
  Auth:  sumkittehz.codes
  Desc:  This module is part of the grid-layout template.
  Desc:  This module outputs HTML to create div.item-head element

  File Dependencies:  

  This file depends on 

    gl-item-head.css
    gl-item-head.js
    catspaw.svg
 */
    ?>
   
<div class="item-head">
  <object id="cat-paw" data="catspaw.svg">catspaw.svg</object>
  <div class="daydisplay">
    <span class="label">Today is </span>
    <span id="today">&mdash;&mdash;</span>
  </div>
  <div class="timedisplay">
    <div id="localtime">00:00:00</div>
    <div id="UTC">00:00:00</div>
  </div>
    
  <script>
    function showTime() {
	let time = new Date();
        let hour = time.getHours();
        let min  = time.getMinutes();
        let sec  = time.getSeconds();
        am_pm    = "AM";
	
        hour = hour < 10 ? "0" + hour : hour;
        min  = min < 10 ? "0" + min : min;
        sec  = sec < 10 ? "0" + sec : sec;
	
        let currentTime = hour + ":" + min + ":" + sec;
        /*
          assign the time string value to element with ID localtime 
        */
	document.getElementById("localtime").innerHTML = time.toTimeString();
        document.getElementById("UTC").innerHTML = time.toUTCString();
	document.getElementById("today").innerHTML = time.toDateString();
    }
    setInterval(showTime, 1000);
  </script>
</div><!-- close class item-head -->
