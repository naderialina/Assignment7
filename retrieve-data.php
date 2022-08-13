<?php
include 'mydbCon.php';
$query="select * from Students limit 50"; // Fetch all the data from the table Students
$result=mysqli_query($dbCon,$query);
?>