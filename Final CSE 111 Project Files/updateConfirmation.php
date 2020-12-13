<?php
    include 'connectDB.php'; 

$key = $_POST['chooseSugg'];
$status = $_POST['updateSugg'];

$suggUpdate = "UPDATE suggestionBox SET sb_acceptance = '$status' WHERE sb_key='$key';";

if ($conn->query($suggUpdate) === TRUE) {
  echo "The suggestion has been updated successfully";
} else {
  echo "Error: " . $suggUpdate . "<br>" . $conn->error;
}

$conn->close();

?>

<br>
<br>
<button onclick="window.location.href='mainPage.php'">Back to Homescreen</button>


</body>
</html>