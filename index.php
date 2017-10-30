<?php
	$title="Welcome to VEB Orange";
	$description="VEB Orange is a thriftstore with a large variation of objects from the 60s and 70s";
	include("includes/head.inc.php");
?>
<body>
<?php
	include("includes/nav.inc.php");
?>
<div class="container"> 
  <!-- content section -->
  <section>
    <div class="row">
      <div class="col-xs-12"> <img class="img-responsive" src="images/m_front.gif" alt="Frontpage image"/> </div>
    </div>
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-0 textbox grad">
        <h1 class="text-center">VEB Orange</h1>
        <p>Thrift store filled with the most beautiful vintage selection from the 60’s and the 70’s. Come by, explore, be amazed as we welcome you to our unique shop. Follow us on Facebook as we regularly update you about new cool stuff in our collection. Hope to see you soon. <a href="presentation.php">Read more</a></p>
      </div>
      
      <!-- Facebook plugin to show news from facebook-->
      <!-- The code is from Facebooks developer page-->
      <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-0">
        <h3 class="text-center">News</h3>
        <div id="news">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FVEB-orange-130922697012342%2F&tabs=timeline&width=500&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
      </div>
    </div>
  </section>
  <?php
	include("includes/footer.inc.php");
?>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>