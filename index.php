<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$server="localhost";

// INfo of the user 
$table = "user";
$info = "*"; // all the row
$state = "state";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Get th id form the URL if it exist
$id =  isset($_GET['id']) ;

//fetch the info about the user's id 
$sql = "SELECT ".$info." FROM ".$table." WHERE id='{$id}'";
$result = $conn->query($sql);


// user exist
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "name: " . $row["name"]. "<br>"; 
    $nom =     $row["name"] ;
    $prenom =  $row['prenom'] ;
    $team =    $row['team'] ;
  }
  
  // marquer la presences 
  $sql = "UPDATE ".$table." SET ".$state."='checked' WHERE id='{$id}'";
  $conn->query($sql);
  // checked
  $url = "Location: http://localhost/checkin/checked.php?name=".$nom."&pname=".$prenom."&team=".$team ; 
  header($url);
  exit();
} else {
  echo("noncheck");

  // Non checked
  header("Location: http://localhost/checkin/nonchecked.php");
  exit();
}

$conn->close();

?>
