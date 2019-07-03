<?php
session_start();
if(isset($_SESSION['uid'])){
    include "nav1.php";
}
else{
    exit();
}

$id = $_SESSION['uid'];
$restid = $_GET['restid'];
$review = $_POST['Message'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zomato";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "REPLACE INTO reviews VALUES ('$id', '$restid', '$review')";

if (mysqli_query($conn, $sql)) {
    echo "<h1 style='color:black;'>"."Thanks for adding a review :)"."</h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>