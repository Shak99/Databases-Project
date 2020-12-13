<?php
    include 'connectDB.php'; 


$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$newUser = "INSERT INTO users (u_name, u_email, u_username, u_password)
VALUES ('$name', '$email', '$username', '$password')";

if ($conn->query($newUser) === TRUE) {
  echo "Your Account has been created successfully";
} else {
  echo "Error: " . $newUser . "<br>" . $conn->error;
}

$conn->close();

?>

<br>
<br>
<button onclick="window.location.href='mainPage.php'">Continue to Homescreen</button>


</body>
</html>