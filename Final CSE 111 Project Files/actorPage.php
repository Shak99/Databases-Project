<?php include 'connectDB.php';

$var = $_POST['actorSearch'];

$sqlActor = "SELECT DISTINCT a_name, a_actorKey, a_birthdate
             FROM actor
             Where
                a_name LIKE '%$var%' ";

$result1 = $conn->query($sqlActor);
echo "<h3>Actor Info</h3>";
if ($result1) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {
    echo "Name: ".$row['a_name']."<br> Birthday: ".$row['a_birthdate']."<br><br>";
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
?>




<!DOCTYPE html>
<html>
<body>

<br>
<br>
<button onclick="window.location.href='mainPage.php'">Back to Homescreen</button>


</body>
</html>