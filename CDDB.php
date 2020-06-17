<?php
$servername = "localhost";
$username = "wight9";
$password = "patsy";
$dbname = "wight9";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$artistID=$_POST['artistid'];
$albT=$_POST['album'];
$albumID=$_POST['albumID'];
$albG=$_POST['genre'];
$albRD=$_POST['release'];
$tracks=$_POST['trackList'];
$trackString = explode(",", $tracks);


 if (!mysqli_multi_query($conn, $sql)) {
	 echo 'Not inserted';
 } else {
	 echo 'CD added';
 }

$conn->close();
?>
