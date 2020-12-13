<?php
 require('connectDB.php');
 include 'login_signup.php';




 
// redirect user to login page if they're not logged in
//if (empty($_SESSION['u_name'])) {
 //   header('location: index.php');
//}



/*
if (isset($_POST['u_name']) and isset($_POST['u_password'])){
	
// Assigning POST values to variables.
$username = $_POST['u_name'];
$password = $_POST['u_password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM users WHERE u_name='$username' and u_password ='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}*/

/*
if (isset($_POST['u_name']) and isset($_POST['u_password'])){
    $username = $_POST['u_name'];
    $password = $_POST['u_password'];

    $sql = "select * from users where u_username = '" .$username. "' AND u_password = '" .$password."'
    limit 1";

    $result = $conn;

    if($result == 1){
        echo "You have successfully logged in!";
        echo "Account info:..."
        exit();
    }
    else{
        echo "You have entered an incorrect username or password";
        exit();
}
*/
/*
if (isset($_POST['u_name']) and isset($_POST['u_password'])){
	
    // Assigning POST values to variables.
    $username = $_POST['user_id'];
    $password = $_POST['user_pass'];
    
    // CHECK FOR THE RECORD FROM TABLE
    $query = "SELECT * FROM users WHERE u_username='$username' and Password='$password'";
     
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
    
    if ($count == 1){
    
    //echo "Login Credentials verified";
    echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
    echo "Welcome " .$row['u_name'];
    
    }else{
    echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
    //echo "Invalid Login Credentials";
    }
    }

*/
?>

<!DOCTYPE html>
<html>
<body>



<h1>KS Choices</h1>
<p>Welcome to the movie database created by Shakira and Karla, for Shakira and Karla!</p>
<p>These are some of the most randomly popular movies in showbiz!</p>



<h4>Search Movies</h4>
<form id="movieSearch" method="post" action="moviePage.php" >
        <table border="0.2" >
            <tr>
                <td><label for="movie_search">Movie: </label></td>
                <td><input type="text" name="movieSearch" id="s_movie"></td>
            </tr>			
            <tr>
				
                <td><input type="submit" value="Submit" />
				
            </tr>
        </table>
</form>
<h4>Search Actors</h4>
<form id="actorSearch" method="post" action="actorPage.php" >
        <table border="0.2" >
            <tr>
                <td><label for="actor_search">Actor: </label></td>
                <td><input type="text" name="actorSearch" id="s_actor"></td>
            </tr>			
            <tr>
				
                <td><input type="submit" value="Submit" />
				
            </tr>
        </table>
</form>
<h4>Search Directors</h4>
<form id="directorSearch" method="post" action="directorPage.php" >
        <table border="0.2" >
            <tr>
                <td><label for="directorsearch">Director: </label></td>
                <td><input type="text" name="directorSearch" id="s_director"></td>
            </tr>			
            <tr>
				
                <td><input type="submit" value="Submit" />
				
            </tr>
        </table>
</form>

<h4>Search Studios</h4>
<form id="studioSearch" method="post" action="studioPage.php" >
        <table border="0.2" >
            <tr>
                <td><label for="studiosearch">Studio: </label></td>
                <td><input type="text" name="studioSearch" id="s_studio"></td>
            </tr>			
            <tr>
				
                <td><input type="submit" value="Submit" />
				
            </tr>
        </table>
</form>

<h2>Action Movies!</h2>
<form method="POST" action="moviePage.php">

<input type="image" name = "Terminator" id = "m_name" src="https://external-preview.redd.it/Je1GK0RkwQsA3kr9jm_kP1MUIkD2Q17Chaz6p2HMLbE.png?auto=webp&s=fc339d95ed5dc4439e89778e7fb503f12c9cc6f6" width="160" height="240"/>
<input type="image" name = "Matrix" src="https://i.pinimg.com/originals/8f/03/8c/8f038ca7faa7487ac154d8b72b7f0af1.png" width="160" height="240"/>
<input type="image" name = "Kill Bill" src="https://www.kindpng.com/picc/m/406-4062788_transparent-kill-bill-png-kill-bill-volume-1.png" width="160" height="240"/>
<input type="image" name = "The Avenegers" src="https://i.pinimg.com/originals/6e/d7/cc/6ed7cc2ecddf4add15b64896c0728949.png" width="160" height="240"/>
<input type="image" name = "Rush Hour" src="https://thetwizard.files.wordpress.com/2019/05/rush-hour-1.png?w=1140" width="160" height="240"/>
<br>
    <input type="radio" id="Terminator" name="movie" value="Terminator">
    <label for="Terminator">Terminator</label>

    <input type="radio" id="Matrix" name="movie" value="Matrix">
    <label for="Matrix">Matrix</label>

    <input type="radio" id="Kill Bill" name="movie" value="Kill Bill">
    <label for="Kill Bill">Kill Bill</label>

    <input type="radio" id="The Avenegers" name="movie" value="The Avenegers">
    <label for="The Avenegers">The Avenegers</label>

    <input type="radio" id="Rush Hour" name="movie" value="Rush Hour">
    <label for="Rush Hour">Rush Hour</label>

<h2>Coming of Age</h2>
<input type="image" name = "Sixteen Candles" src="https://i.pinimg.com/originals/be/78/53/be78533b2aa0ab95adf1e31cea83d2e2.png" width="160" height="240"/>
<input type="image" name = "To All the Boys I've Loved Before" src="https://m.media-amazon.com/images/M/MV5BMjQ3NjM5MTAzN15BMl5BanBnXkFtZTgwODQzMDAwNjM@._V1_.jpg" width="160" height="240"/>
<input type="image" name = "Moonlight" src="https://i.pinimg.com/originals/02/e9/74/02e9740ffb7055fd2e919c06c23fd091.png" width="160" height="240"/>
<input type="image" name = "10 Things I Hate About You" src="https://www.joblo.com/assets/images/oldsite/posters/images/full/1999-poster-ten_things_i_hate_about_you-1.jpg" width="160" height="240"/>
<input type="image" name = "A Bronx Tale" src="https://images-na.ssl-images-amazon.com/images/I/51ubyWLPlfL._AC_.jpg" width="160" height="240"/>
<br>

    <input type="radio" id="Sixteen Candles" name="movie" value="Sixteen Candles">
    <label for="Sixteen Candles">Sixteen Candles</label>

    <input type="radio" id="To All the Boys I've Loved Before" name="movie" value="To All the Boys I've Loved Before">
    <label for="To All the Boys I've Loved Before">To All the Boys I've Loved Before</label>

    <input type="radio" id="Moonlight" name="movie" value="Moonlight">
    <label for="Moonlight">Moonlight</label>

    <input type="radio" id="10 Things I Hate About You" name="movie" value="10 Things I Hate About You">
    <label for="10 Things I Hate About You">10 Things I Hate About You</label>

    <input type="radio" id="A Bronx Tale" name="movie" value="A Bronx Tale">
    <label for="A Bronx Tale">A Bronx Tale</label>

<h2>Fantasy/Sci-Fi</h2>
<input type="image" name = "Harry Potter and the Sorcerer’s Stone" src="https://i.pinimg.com/originals/c1/c3/fe/c1c3fe4f40d52fc06715bc597732dac3.png" width="160" height="240"/>
<input type="image" name = "X-Men" src="https://i.pinimg.com/originals/6c/8b/57/6c8b57bb1bfe9f63f475ec0e3440ab67.png" width="160" height="240"/>
<input type="image" name = "Aliens" src="https://i.pinimg.com/originals/c7/3a/10/c73a106a7f05d089ad09eae0361f06e9.png" width="160" height="240"/>
<input type="image" name = "Pacific Rim" src="https://i.imgur.com/66ll2Je.jpg" width="160" height="240"/>
<input type="image" name = "Power Rangers" src="https://upload.wikimedia.org/wikipedia/en/7/78/Power_Rangers_%282017_Official_Theatrical_Poster%29.png" width="160" height="240"/>
<br>

    <input type="radio" id="Harry Potter and the Sorcerer’s Stone" name="movie" value="Harry Potter and the Sorcerer’s Stone">
    <label for="Harry Potter and the Sorcerer’s Stone">Harry Potter and the Sorcerer’s Stone</label>

    <input type="radio" id="X-Men" name="movie" value="X-Men">
    <label for="X-Men">X-Men</label>

    <input type="radio" id="Aliens" name="movie" value="Aliens">
    <label for="Aliens">Aliens</label>

    <input type="radio" id="Pacific Rim" name="movie" value="Pacific Rim">
    <label for="Pacific Rim">Pacific Rim</label>

    <input type="radio" id="Power Rangers" name="movie" value="Power Rangers">
    <label for="Power Rangers">Power Rangers</label>

<h2>Thriller</h2>
<input type="image" name = "Bird Box" src="https://m.media-amazon.com/images/M/MV5BMjAzMTI1MjMyN15BMl5BanBnXkFtZTgwNzU5MTE2NjM@._V1_.jpg" width="160" height="240"/>
<input type="image" name = "Flatliners" src="https://movieposters2.com/images/1526071-b.jpg" width="160" height="240"/>
<input type="image" name = "Us" src="https://deadentertainment.com/uploads/jordan-peeles-us-gets-poster-01-a6aa0t803o.png" width="160" height="240"/>
<input type="image" name = "Psycho" src="https://i.pinimg.com/originals/92/e7/19/92e719891f2c19dd9503d1b7190d213d.png" width="160" height="240"/>
<input type="image" name = "Joker" src="https://i.pinimg.com/originals/a7/b3/69/a7b3698f4e920aec12035dbee06a4d06.png" width="160" height="240"/>
<br>

    <input type="radio" id="Bird Box" name="movie" value="Bird Box">
    <label for="Bird Box">Bird Box</label>

    <input type="radio" id="Flatliners" name="movie" value="Flatliners">
    <label for="Flatliners">Flatliners</label>

    <input type="radio" id="Us" name="movie" value="Us">
    <label for="Us">Us</label>

    <input type="radio" id="Psycho" name="movie" value="Psycho">
    <label for="Psycho">Psycho</label>

    <input type="radio" id="Joker" name="movie" value="Joker">
    <label for="Joker">Joker</label>

<h2>Black Heritage</h2>
<input type="image" name = "Black Panther" src="https://i.pinimg.com/originals/0d/a1/1b/0da11b5d881a2bb15d80b6226dcb4cad.png" width="160" height="240"/>
<input type="image" name = "Coffy" src="https://c8.alamy.com/comp/PXNBB8/coffy-original-movie-poster-PXNBB8.jpg" width="160" height="240"/>
<input type="image" name = "Do the Right Thing" src="https://upload.wikimedia.org/wikipedia/en/thumb/0/03/Do_the_Right_Thing_poster.png/220px-Do_the_Right_Thing_poster.png" width="160" height="240"/>
<input type="image" name = "The Best Man" src="https://static.toiimg.com/thumb/msid-61967974,width-219,height-317,imgsize-137992/61967974.jpg" width="160" height="240"/>
<input type="image" name = "Boomerang" src="https://i.pinimg.com/originals/9f/3d/9e/9f3d9edbd37a6695f9c98e48e2df8732.png" width="160" height="240"/>
<br>

    <input type="radio" id="Black Panther" name="movie" value="Black Panther">
    <label for="Black Panther">Black Panther</label>

    <input type="radio" id="Coffy" name="movie" value="Coffy">
    <label for="Coffy">Coffy</label>

    <input type="radio" id="Do the Right Thing" name="movie" value="Do the Right Thing">
    <label for="Do the Right Thing">Do the Right Thing</label>

    <input type="radio" id="The Best Man" name="movie" value="The Best Man">
    <label for="The Best Man">The Best Man</label>

    <input type="radio" id="Boomerang" name="movie" value="Boomerang">
    <label for="Boomerang">Boomerang</label>

<h3>Romance</h3>
<input type="image" name = "Titanic" src="https://images-na.ssl-images-amazon.com/images/I/71i6L1vZjiL._AC_SL1058_.jpg" width="160" height="240"/>
<input type="image" name = "The Notebook" src="https://images-na.ssl-images-amazon.com/images/I/81zHy%2BInA5L._AC_SL1303_.jpg" width="160" height="240"/>
<input type="image" name = "Dirty Dancing" src="https://southernhillfarms.com/wp-content/uploads/Dirty-Dancing.jpg" width="160" height="240"/>
<input type="image" name = "Crazy Rich Asians" src="https://images-na.ssl-images-amazon.com/images/I/61hj%2B0zJJeL._AC_SY879_.jpg" width="160" height="240"/>
<input type="image" name = "Pretty Woman" src="https://images-na.ssl-images-amazon.com/images/I/51JQhqFJphL._AC_.jpg" width="160" height="240"/>
<br>
    <input type="radio" id="Titanic" name="movie" value="Titanic">
    <label for="Titanic">Titanic</label>

    <input type="radio" id="The Notebook" name="movie" value="The Notebook">
    <label for="The Notebook">The Notebook</label>

    <input type="radio" id="Dirty Dancing" name="movie" value="Dirty Dancing">
    <label for="Dirty Dancing">Dirty Dancing</label>

    <input type="radio" id="Crazy Rich Asians" name="movie" value="Crazy Rich Asians">
    <label for="Crazy Rich Asians">Crazy Rich Asians</label>

    <input type="radio" id="Pretty Woman" name="movie" value="Pretty Woman">
    <label for="Pretty Woman">Pretty Woman</label>
  
<h2>Comedy</h2>
<input type="image" name = "Blades of Glory" src="https://images-na.ssl-images-amazon.com/images/I/81-qNeoviLL._AC_SL1500_.jpg" width="160" height="240"/>
<input type="image" name = "The Hangover" src="https://images-na.ssl-images-amazon.com/images/I/61stp43AX%2BL._AC_SY879_.jpg" width="160" height="240"/>
<input type="image" name = "Nacho Libre" src="https://images-na.ssl-images-amazon.com/images/I/61QOBuL-qPL._AC_SY741_.jpg" width="160" height="240"/>
<input type="image" name = "Naploean Dynamite" src="https://images-na.ssl-images-amazon.com/images/I/717ZFtQY9yL._AC_SY741_.jpg" width="160" height="240"/>
<input type="image" name = "21 Jump Street" src="https://i.pinimg.com/originals/0f/1a/e2/0f1ae28eeac9cf665f4354189aeb2209.jpg" width="160" height="240"/>
<br>
    <input type="radio" id="Blades of Glory" name="movie" value="Blades of Glory">
    <label for="Blades of Glory">Blades of Glory</label>

    <input type="radio" id="The Hangover" name="movie" value="The Hangover">
    <label for="The Hangover">The Hangover</label>

    <input type="radio" id="Nacho Libre" name="movie" value="Nacho Libre">
    <label for="Nacho Libre">Nacho Libre</label>

    <input type="radio" id="Naploean Dynamite" name="movie" value="Naploean Dynamite">
    <label for="Naploean Dynamite">Naploean Dynamite</label>

    <input type="radio" id="21 Jump Street" name="movie" value="21 Jump Street">
    <label for="21 Jump Street">21 Jump Street</label>

<h2>Animation</h2>
<input type="image" name = "The Lion King" src="https://images-na.ssl-images-amazon.com/images/I/61sJaBqGxZL._AC_SL1184_.jpg" width="160" height="240"/>
<input type="image" name = "The Road to El Dorado" src="https://fffmovieposters.com/wp-content/uploads/73153.jpg" width="160" height="240"/>
<input type="image" name = "101 Dalmations" src="https://images-na.ssl-images-amazon.com/images/I/81sYhrXHYpL._AC_SL1500_.jpg" width="160" height="240"/>
<input type="image" name = "The Prince of Egypt" src="https://images-na.ssl-images-amazon.com/images/I/51DsolAeXOL._AC_.jpg" width="160" height="240"/>
<input type="image" name = "Pinocchio" src="https://images-na.ssl-images-amazon.com/images/I/51X6QYqmWvL._AC_.jpg" width="160" height="240"/>
<br>
    <input type="radio" id="The Lion King" name="movie" value="The Lion King">
    <label for="The Lion King">The Lion King</label>

    <input type="radio" id="The Road to El Dorado" name="movie" value="The Road to El Dorado">
    <label for="The Road to El Dorado">The Road to El Dorado</label>

    <input type="radio" id="101 Dalmations" name="movie" value="101 Dalmations">
    <label for="101 Dalmations">101 Dalmations</label>

    <input type="radio" id="The Prince of Egypt" name="movie" value="The Prince of Egypt">
    <label for="The Prince of Egypt">The Prince of Egypt</label>

    <input type="radio" id="Pinocchio" name="movie" value="Pinocchio">
    <label for="Pinocchio">Pinocchio</label>

<h2>Hispanic Heritage</h2>
<input type="image" name = "Selena" src="https://www.iceposter.com/thumbs/MOV_98c249b1_b.jpg" width="160" height="240"/>
<input type="image" name = "La Bamba" src="https://images-na.ssl-images-amazon.com/images/I/51YjhbKoA5L._AC_.jpg" width="160" height="240"/>
<input type="image" name = "Coco" src="https://images-na.ssl-images-amazon.com/images/I/A1tyD0nKdhL._AC_SL1500_.jpg" width="160" height="240"/>
<input type="image" name = "McFarland USA" src="https://images-na.ssl-images-amazon.com/images/I/51iPHmljGrL._AC_SX385_.jpg" width="160" height="240"/>
<input type="image" name = "Stand and Deliver" src="https://resizing.flixster.com/fTKIXWkItviDj1czAh99K0BR4RQ=/206x305/v1.bTsxMTIwNzUyNTtqOzE4NzE0OzEyMDA7MTU2MzsyMDg0" width="160" height="240"/>
<br>
    <input type="radio" id="Selena" name="movie" value="Selena">
    <label for="Selena">Selena</label>

    <input type="radio" id="La Bamba" name="movie" value="La Bamba">
    <label for="La Bamba">La Bamba</label>

    <input type="radio" id="Coco" name="movie" value="Coco">
    <label for="Coco">Coco</label>

    <input type="radio" id="McFarland USA" name="movie" value="McFarland USA">
    <label for="McFarland USA">McFarland USA</label>

    <input type="radio" id="Stand and Deliver" name="movie" value="Stand and Deliver">
    <label for="Stand and Deliver">Stand and Deliver</label>

<h2>Horror</h2>
<input type="image" name = "Get Out" src="https://images-na.ssl-images-amazon.com/images/I/71UWjZcXTNL._AC_SL1188_.jpg" width="160" height="240"/>
<input type="image" name = "A Quiet Place" src="https://images-na.ssl-images-amazon.com/images/I/516fV0Y-OaL._AC_SY445_.jpg" width="160" height="240"/>
<input type="image" name = "The Silence of the Lambs" src="https://images-na.ssl-images-amazon.com/images/I/410VHPrwUPL._AC_.jpg" width="160" height="240"/>
<input type="image" name = "Zombieland" src="https://images-na.ssl-images-amazon.com/images/I/511vqXb9dLL._AC_.jpg" width="160" height="240"/>
<input type="image" name = "The Birds" src="https://images-na.ssl-images-amazon.com/images/I/81GUXkMB6nL._AC_SL1500_.jpg" width="160" height="240"/>
<br>
    <input type="radio" id="Get Out" name="movie" value="Get Out">
    <label for="Get Out">Get Out</label>

    <input type="radio" id="A Quiet Place" name="movie" value="A Quiet Place">
    <label for="A Quiet Place">A Quiet Place</label>

    <input type="radio" id="The Silence of the Lambs" name="movie" value="The Silence of the Lambs">
    <label for="The Silence of the Lambs">The Silence of the Lambs</label>

    <input type="radio" id="Zombieland" name="movie" value="Zombieland">
    <label for="Zombieland">Zombieland</label>

    <input type="radio" id="The Birds" name="movie" value="The Birds">
    <label for="The Birds">The Birds</label>
<br>

    <input type="submit" value="Submit">
</form>

<br>
<br>
<h4>Suggestions?</h4>
<form id="movieSearch" method="post" action="newSuggestion.php" >
        <table border="0.2" >
            <tr>
                <td><label for="movie_suggestion">Movie: </label></td>
                <td><input type="text" name="movieSuggestion" id="sb_movie"></td>
            </tr>			
            <tr>
            <td><label for="year_search">Year: </label></td>
                <td><input type="text" name="yearSuggestion" id="sb_year"></td>
            </tr>			
				
                <td><input type="submit" value="Submit" />
				
            </tr>
        </table>
</form>
<br>
<br>
<button onclick="window.location.href='deleteSuggestion.php'">Delete a Suggestion</button>
<br>
<button onclick="window.location.href='updateSuggestion.php'">Update Suggestion Status</button>
<br>
<br>

<button onclick="window.location.href='index.php'">Back to Login</button>




</body>
</html>