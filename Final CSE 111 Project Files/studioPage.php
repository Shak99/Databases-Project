<?php include 'connectDB.php';

$var = $_POST['studioSearch'];

$sqlStudio = "SELECT s_name, s_location
             FROM studio
             Where
                s_name LIKE '%$var%'";

$result1 = $conn->query($sqlStudio);
echo "<h3>Studio Info</h3>";
if ($result1) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {
    echo "Name: ".$row["s_name"]. "<br> Location: ".$row["s_location"]." <br><br>";
  }
} else {
  echo "0 results";
}

$sqlSmovies = "SELECT m_name
FROM movie, studio
Where
   s_studioKey = m_studio AND s_name LIKE '%$var%' GROUP BY m_name";
echo "<h3> Movies Produced: </h3>";
$result2 = $conn->query($sqlSmovies);
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