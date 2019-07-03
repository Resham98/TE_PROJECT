<head>
    <style>
        h1 {
    display: block;
    font-size: 2em;
   margin-top: -8px;
    margin-bottom: -18px;
    font-weight: bold;
}
body {
    font-family: "Muli", Arial, sans-serif;
    background: #fff;
    font-size: 16px;
    line-height: 1.8;
    font-weight: 300;
    color: #8b8b92;
    margin-top: 123px;
}
body {
    margin: 0;
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans
    </style>
</head>
<?php
session_start();
if(isset($_SESSION['uid'])){
    include "nav1.php";
}
else{
    exit();
}

$restid = $_GET['restid'];

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

$sql = "SELECT review FROM reviews WHERE restid=$restid";

$result=mysqli_query($conn, $sql);
    
$reviews = array();

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        array_push($reviews, $row['review']);
    }
}
//print_r($reviews);
foreach($reviews as $value){
    echo "<h1 style='color:black;'>".$value."</h1>";
    
}

mysqli_close($conn);
?>