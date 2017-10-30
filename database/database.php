<?php
//The connection used when inserting things to the database
$connect=mysqli_connect('localhost','root','','testdatabase');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
?>