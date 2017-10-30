<?php
	$title="Presentation of VEB Orange";
	$description="Find everything from toys, to clothes and kitchen utensils from the 60s and 70s";
	include("includes/head.inc.php");
?>
<body>
<?php
	include("includes/nav.inc.php");
?>
<div class="container"> 
  <!-- content -->
  <section>
    <div class="divbox grad">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="text-center">Presentation</h2>
        </div>
      </div>
      <!-- A carousel we found on w3school for making a bootstrap carousel -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active"> <img src="images/m_presentation.jpg" alt="Store front" width="100%" height="400px"> </div>
          <div class="item"> <img src="images/m_presentation_inside.jpg" alt="Inside the store" width="100%" height="400px"> </div>
          <div class="item"> <img src="images/m_presentation_front.jpg" alt="Flower" width="100%" height="400px"> </div>
          <div class="item"> <img src="images/m_presentation_front2.jpg" alt="Flower" width="100%" height="400px"> </div>
        </div>
        
        <!-- Left and right controls --> 
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
      <div class="row">
        <div class="col-xs-12"> <br>
          <p>VEB Orange has alot of exiting things like:<br>
            Furniture, Clothes, Jewelry, Porcelain, Glass, Kitchen utensils, Pictures, Lamps, Books and much more.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-md-5 divboxpresentation grad">
        <h3 class="text-center">Explore the kitchen</h3>
        <img src="images/m_kitchenutensils.jpg" class="img-responsive" alt="Presentation of VEB Orange"/>
        <br>
        <p>Come and be amazed by the kitchen utensils in all of the rainbow colors</p>
      </div>
      <div class="col-xs-12 col-md-5  col-md-offset-2 divboxpresentation grad">
        <h3 class="text-center">Experience DDR</h3>
        <img src="images/m_ddr.jpg" class="img-responsive" alt="Presentation of VEB Orange"/>
        <br>
        <p>Watch some of the medals and try on a uniform from the DDR</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-5 divboxpresentation grad">
        <h3 class="text-center">Play with the toys</h3>
        <img src="images/m_toys.jpg" class="img-responsive" alt="Presentation of VEB Orange"/>
        <br>
        <p>Have a look at toys and games from back at that time</p>
      </div>
      <div class="col-xs-12 col-md-5 col-md-offset-2 divboxpresentation grad">
        <h3 class="text-center">Be surprised</h3>
        <img src="images/m_explore.jpg" class="img-responsive" alt="Presentation of VEB Orange"/>
        <br>
        <p>Be surprised of everything the store has to offer</p>
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