<!DOCTYPE html>
<html>
<body>

<?php
    include 'connectDB.php'; 

    $var = $_POST['directorSearch'];

$sqlDirector = "SELECT DISTINCT d_name, d_directorKey, d_birthdate
             FROM director
             Where
                d_name LIKE '%$var%' ";

$result1 = $conn->query($sqlDirector);
echo "<h3>Director Info</h3>";
if ($result1) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {
    echo "Name: ".$row['d_name']."<br> Birthday: ".$row['d_birthdate']."<br><br>";
  }
} else {
  echo "0 results";
}
echo "<br> <h3>Associated Movies</h3>";
$sqlAmovies = "SELECT m_name
               FROM movie, director
               Where
                  d_directorKey = m_director AND d_name LIKE '%$var%' GROUP BY d_name";

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


<br>
<br>
<button onclick="window.location.href='mainPage.php'">Back to Homescreen</button>


</body>
</html>