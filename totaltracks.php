<html>
<head>
<link rel="stylesheet" href="style.php">
</head><?php
$servername = "localhost";
$username = "wight9";
$password = "patsy";
$dbname = "wight9";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sup = "select * from tracks";

$result = mysqli_query($conn, $sup);

if (mysqli_num_rows($result) > 0) {
	echo "<table><tr><th>ID</th><th>Album ID</th><th>Title</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td>".$row["id"]."</td><td>".$row["albumID"]."</td><td>".$row["title"]."</td></tr>";
	}
	echo "</table>";
	} else {
		echo "No result.";
}

$conn->close();
?>
</html>


