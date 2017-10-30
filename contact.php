<?php
	$title="Contact VEB Orange";
	$description="See contact info for VEB Orange and find out where it's located";
	include("includes/head.inc.php");
?>
<body>
<?php
	include("includes/nav.inc.php");
?>
<div class="container"> 
  <!-- content -->
  <section>
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1">
        <div id="map"></div>
        <!--This is a script we have from google maps. We define the coordinates and the zoom level and the sript creates a google maps location on the website-->
        <script>
      function initMap() {
        var veb = {lat: 52.540355, lng: 13.405625};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: veb
        });
        var marker = new google.maps.Marker({
          position: veb,
          map: map
        });
      }
    </script> 
        <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAol_KTNiAmD0EMoWjzM_N8XMM7tt_3Nbk&callback=initMap">
    </script> 
      </div>
    </div>
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-1 divbox grad text-center">
        <h2>Contact</h2>
        <p>Address:<br> Oderberger Str. 29 10435 Berlinnge</p>
        <p>E-Mail:<br> info@veborange.de</p>
        <p>Telephone:<br>+49 30 97886886</p>
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-2 text-center divbox grad">
        <h2>Opening Hours</h2>
        <p>Monday               11-17</p>
        <p>Tuesday              11-17</p>
        <p>Wednessday           11-17</p>
        <p>Thursday             11-17</p>
        <p>Friday               11-17</p>
        <p>Saturday             11-17</p>
        <p>Sunday               Closed</p>
      </div>
    </div>
  </section>
</div>
  <?php
	include("includes/footer.inc.php");
?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>