<?php include 'database.php'; ?>
 
<?php
 
// create a variable
$name=$_POST['name'];
$post=$_POST['post'];

//Execute the query to insert info into the database
mysqli_query($connect,"INSERT INTO guestbook (id, date, name, post) VALUES (NULL, CURRENT_TIMESTAMP, '$name','$post')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo "<a href=\"guestbook.php\">Go Back</a>";
} else {
	echo "Please fill out the form<br />";
	echo mysqli_error ($connect);
}