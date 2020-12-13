<?php include 'connectDB.php';  


$movie = $_POST['movieSuggestion'];
$year = $_POST['yearSuggestion'];

echo "<br><br><br>";

$sql = "SELECT MAX(sb_key) FROM suggestionBox;";

$result = $conn->query($sql);
$num;
if ($result) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $num = $row["MAX(sb_key)"] + 1;
  }
}


//echo $index."<br><br><br>";

$newSugg = "INSERT INTO suggestionBox (sb_name, sb_key, sb_year, sb_acceptance, sb_username)
VALUES ('$movie', $num, '$year', 2, 'disney')";

if ($conn->query($newSugg) === TRUE) {
  echo "<h3>Your suggestion has been submitted successfully!</h3>";
} else {
  echo "Error: " . $newSugg . "<br>" . $conn->error;
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