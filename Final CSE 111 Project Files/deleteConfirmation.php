<?php
    include 'connectDB.php'; 


$key = $_POST['deleteSugg'];

$newUser = "DELETE FROM suggestionBox WHERE sb_key='$key'";

if ($conn->query($newUser) === TRUE) {
  echo "The suggestion has been deleted successfully";
} else {
  echo "Error: " . $newUser . "<br>" . $conn->error;
}

$conn->close();

?>

<br>
<br>
<button onclick="window.location.href='mainPage.php'">Back to Homescreen</button>


</body>
</html>