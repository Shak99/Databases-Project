
<?php 
include 'connectDB.php';  
include 'login_signup.php';?>



    <br><br><br><br><br><br><br>   

<!DOCTYPE html >
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="body_bg">
<div <div align="center">

<h3>Login</h3>
    <form id="login-form" method="post" action="mainPage.php" >
        <table border="0.5" >
            <tr>
                <td><label for="user_id">Username: </label></td>
                <td><input type="text" name="username" id="u_username"></td>
            </tr>
            <tr>
                <td><label for="user_pass">Password: </label></td>
                <td><input type="password" name="password" id="u_password"></input></td>
            </tr>
			
            <tr>
				
                <td><input type="submit" value="Submit" />
				
            </tr>
        </table>
    </form>
   <form is = "newUser-form" method="post" action="createUser.php" >
      <td><input type="submit" value="Create New Account">
   </form>
		</div>
</body>
</html>
<br><br><br><br><br>

