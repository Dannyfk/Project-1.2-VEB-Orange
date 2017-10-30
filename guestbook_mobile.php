<?php
	$title="Mobile guestbook VEB Orange";
	include("includes/head.inc.php");
?>
<body>
<?php
	include("includes/nav.inc.php");
?>
<div class="container"> 
  <!-- content -->
  <section>
    <div>
      <div class="row">
        <div class="col-xs-12">
          <h2 class="text-center">Create guestbook post</h2>
          <form method="post" action="guestbook.php">
            <label>Name</label>
            <input type="text" name="name" />
            <br />
            <br />
            <label>Post</label>
            <input type="text" name="post" />
            <br />
            <input type="submit" value="Create post">
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <form method="get" action="create post">
            <button type="submit">Back</button>
          </form>
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