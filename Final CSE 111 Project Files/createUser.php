<?php include 'connectDB.php';  
include 'login_signup.php';?>

<!DOCTYPE html>
<html>
<body>
<br><br><br><br><br><br>
    <form action = "confirmNewUser.php" method = "post"> <br>
        Name: <input type = "text" name = "name"><br>
        Email: <input type = "text" name = "email"><br>
        Username: <input type = "text" name = "username"><br>
        Password: <input type = "text" name = "password"><br>
        <input type = "submit" value="createUser">
    </form>



</body>
</html>