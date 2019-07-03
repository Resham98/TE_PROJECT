<?php
session_start();
if(isset($_SESSION['uid'])){
    include "nav1.php";
}
else{
    exit();
}

$uid = $_SESSION['uid'];
$restid = $_GET['rest'];

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

$sql = "DELETE FROM bookmarks WHERE uid=$uid and restid=$restid";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<script>
    window.location.href = "viewbookmarksforid.php";
</script>