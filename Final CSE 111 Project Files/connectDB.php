<?php
$servername = "localhost";
$username = "root";
$password = "";
$dataBase = "movieDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dataBase) or die("Connection failed");

echo "Connection Success!";

// Check connection
/*if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";*/






//working query
/*
$sql = "SELECT * FROM director";
$result = $conn->query($sql);

if ($result) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["d_directorKey"]. " ------" . $row["d_name"]. " -------" . $row["d_birthdate"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
*/
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Movie Page Code
/*
$var = "Hate";

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
    " <br> Genre: ".$row["m_genre"]. "<br> Rotten Tomatos Rating: ".$row["m_rating"]."% <br> Studio: ".$row["s_name"];
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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Actor Page
/*$var = "Martin";

$sqlActor = "SELECT DISTINCT a_name, a_actorKey, a_birthdate
             FROM actor
             Where
                a_name LIKE '%$var%' ";

$result1 = $conn->query($sqlActor);
echo "<h3>Actor Info</h3>";
if ($result1) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {
    echo "Name: ".$row['a_name']."<br> Birthday: ".$row['a_birthdate'];
  }
} else {
  echo "0 results";
}
echo "<br> <h3>Associated Movies</h3>";
$sqlAmovies = "SELECT m_name
               FROM movie, actor
               Where
                  a_movieKey = m_movieKey AND a_name LIKE '%$var%' GROUP BY m_name";

$result2 = $conn->query($sqlAmovies);
if ($result2) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    echo $row['m_name']."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

*/



?>