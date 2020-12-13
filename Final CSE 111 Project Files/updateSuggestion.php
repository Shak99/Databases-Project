<?php include 'connectDB.php';

$sql = "SELECT *
             FROM suggestionBox";

$result = $conn->query($sql);
echo "<br><br><h3>Suggestions...</h3><br>";
if ($result) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "Key: ".$row['sb_key']. "<br>";
      echo "Movie Title: ".$row['sb_name']."<br>";
      echo "Year of Release: ".$row['sb_year']."<br>";
      echo "Status: ".$row['sb_acceptance']."<br><br><br>";
    //echo "Key: ".$row['sb_key']."----- Movie Title: ".$row['sb_name']."----- Year of Release: ".$row['sb_year']."<br>"];
  }
} else {
  echo "0 results";
}

$conn->close();
?>




<!DOCTYPE html>
<html>
<body>
<br><br><br>
<h3> Status KEY:      0 = "Denied"      1 = "Accepted"      2 = "Pending" </h3>
<form id="deleteSuggestion" method="post" action="updateConfirmation.php" >
        <table border="0.2" >
            <tr>
                <td><label for="choose_suggestion">Choose Suggestion Key: </label></td>
                <td><input type="text" name="chooseSugg" id="choose_sugg"></td>
                <td><label for="update_suggestion">Enter New Status: </label></td>
                <td><input type="text" name="updateSugg" id="update_sugg"></td>
            </tr>			
            <tr>
				
                <td><input type="submit" value="Submit" />
				
            </tr>
        </table>
</form>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<br>
<br>
<button onclick="window.location.href='mainPage.php'">Back to Homescreen</button>


</body>
</html>