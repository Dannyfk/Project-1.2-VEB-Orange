<?php
	$title="Guestbook VEB Orange";
	$description="Tell us about your visit or hear what others said about the place";
	include("includes/head.inc.php");
?>
<body>
<?php
	include("includes/nav.inc.php");
?>
<!-- content -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="text-center">Guestbook</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 visible-xs">
        <form method="get" action="guestbook_mobile.php">
          <button type="submit">Create</button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1"> 
        <!-- Getting posts from the database-->
        <?php
		error_reporting(E_ERROR | E_PARSE);
		// We didn't have time to setup and style the guestbook so we only had it working on a local server
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   // die("Connection failed: " . $conn->connect_error);
	die("Something went wrong with the server so sadly we can't show the guestbook");
} else {
// Select from the database
$sql = "SELECT id, date, name, post FROM guestbook";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table><tr><td>" . $row["id"]. "</td><td>" . $row["date"]. "</td></tr><tr><td>" . $row["name"]. "</td><td>" . $row["post"]. "</td></tr></table>";
    }
} else {
    echo "0 results";
}
$conn->close();
}
?>
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