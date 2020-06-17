<?php
$servername = "localhost";
$username = "wight9";
$password = "patsy";
$dbname = "wight9";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//function getGenreID($genr) {
	$lower = strtolower($genr);
	//echo "lower case input: $lower";
	
	$genres = array(
	'action' => 1,
	'adventure' => 2,
	'comedy' => 3,
	'crime' => 4,
	'drama' => 5,
	'fantasy' => 6,
	'horror' => 7,
	'mystery' => 8,
	'romance' => 9,
	'thriller' => 10,
	'western' => 11,
	);
	$genre = $genres[$lower];
	return $genre;
}

	
$artistID=$_POST['artistid'];
$albT=$_POST['album'];
$albumID=$_POST['albumID'];
$albG=$_POST['genre'];
$albRD=$_POST['release'];
$tracks=$_POST['trackList'];
$trackString = explode(",", $tracks);
print_r(4trackString);
//$directid = random_int(0,99999999);
//$actorid = random_int(0,99999999);
//$genreIDE = getGenreID($tracks);
/*
FIND MOVIES WITH DEFINED GENRES
select movies.title, movies.year, movies.length,movies.rating, movies.direct,
movies.tarr from movies,genre where movies.id = genres.id;

SELECT ALL MOVIES
select * from movies;
gives every column of movie table

SELECT ALL UNIQUE GENRES
select distinct genre from genres;

SELECT MOVIES BY DIRECTOR
select movies.title, movies.direct from movies,director where movies.direct = director.directorName;

SELECT MOVIES BY STAR
select movies.title, movies.star from movies inner join stars on movies.id = stars.movieid;

SELECT ALL UNIQUE ACTORS
select distinct star from stars;
*/

//$sql = "INSERT INTO movies (title, year, length, rating, genre, id, direct, star) VALUES ('$albT', '$albumID', '$albG', '$albRD', '$tracks', '$artistID', '$movD','$movS');";
//$sql .= "INSERT INTO genres (id, genre, genreid) VALUES ('$artistID', '$tracks','$genreIDE');"; 
//$sql .= "INSERT INTO stars (movieid, star) VALUES ('$artistID', '$movS');";
//$sql .= "INSERT IGNORE INTO director (directorName, directorID) VALUES ('$movD', '$directid')";

//$sql .= "INSERT INTO starsinmovies (movieID, actorID) VALUES ('$artistID','$actorid');";
//$sql .= "INSERT INTO directorandmovie (directorID, movieID) VALUES ('$directid', '$artistID');";
//$sql .= "INSERT INTO genreandmovie (movieID, genreid) VALUES ('$artistID', '$genreIDE');";
//$sql .= "INSERT INTO totalMovies (title, genre, id) VALUES ('$albT', '$tracks', '$artistID');";
//$sql .= "CREATE ALGORITHM = UNDEFINED DEFINER='wight9'@'localhost' SQL SECURITY defineR VIEW 'totalMovies' AS  select `movies`.`id` AS `id`,`movies`.`title` AS `title`,`movies`.`year` AS `year`,group_concat(`genres`.`id` separator ',') AS `genreid`,group_concat(concat(`genres`.`id`,':',`genres`.`genre`) order by `genres`.`genre` ASC separator '|') AS `genre` from ((`movies` join `genreandmovie` on((`movies`.`id` = `genreandmovie`.`movieID`))) join `genres` on((`genreandmovie`.`genreid` = `genres`.`id`))) group by `movies`.`id` order by `movies`.`title`,`genres`.`genre` ;
//$sql .= "SELECT actorID FROM starsinmovies WHERE actorID='$actorid';";


 if (!mysqli_multi_query($conn, $sql)) {
	 echo 'Not inserted';
 } else {
	 echo 'CD added';
 }
 //header("refresh:2; url=site.php");


$conn->close();
?>
