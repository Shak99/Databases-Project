<?php include 'connectDB.php';

$mSearch = $_POST['movieSearch'];
$mButton = $_POST['movie'];

if($mSearch != null){
  $var = $mSearch;
} else if ($mButton != null){
  $var = $mButton;
}



$sqlMovie = "SELECT m_name, m_year, m_genre, d_name, m_rating, s_name
             FROM movie, director, studio
             Where
                m_name LIKE '%$var%' AND m_director = d_directorKey AND m_studio = s_studioKey";

$result1 = $conn->query($sqlMovie);
echo "<h3>Movie Info</h3>";
if ($result1) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {
    echo "Title: ".$row["m_name"]. "<br> Director: ".$row["d_name"]." <br> Year: ".$row["m_year"]. 
    " <br> Genre: ".$row["m_genre"]. "<br> Rotten Tomatos Rating: ".$row["m_rating"]."% <br> Studio: ".$row["s_name"]."<br><br>";
  }
} else {
  echo "0 results";
}

$sqlMactors = "SELECT a_name, a_actorKey
               FROM actor, movie
               WHERE
                  m_name LIKE '%$var%' AND m_movieKey = a_movieKey GROUP BY a_name";

$result2 = $conn->query($sqlMactors);
echo "<br><br> <h3>Featured Actors: </h3>";
if ($result2) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    echo $row['a_name']."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>

<!DOCTYPE html>
<html>
<body>

<br>
<br>
<button onclick="window.location.href='mainPage.php'">Back to Homescreen</button>


</body>
</html>