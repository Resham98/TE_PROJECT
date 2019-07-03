<?php
session_start();
if(isset($_SESSION['uid'])){
    include "nav1.php";
}
else{
    exit();
}

$uid = $_SESSION['uid'];
$restid = $_GET['rid'];
$rating = $_GET['star'];

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

$sql = "REPLACE INTO user_rest_map VALUES ($uid, $restid, $rating)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$cvsData = $uid . "," . $restid . "," . $rating . "\n";

    $fp = fopen("user_rest_map.csv","a");
    echo "hi";
    if($fp){
        echo "in";
        fwrite($fp,$cvsData); 
        fclose($fp);

        echo "done";
    }

mysqli_close($conn);
?>

<script>
    window.location.href = "restInfo.php?restid="+<?php echo $restid; ?>;
</script>