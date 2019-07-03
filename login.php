<link rel="icon" href="images/icon.png">
<?php
session_start();

define("SERVER", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DB", "zomato");

$connection = mysqli_connect(SERVER, USER, PASSWORD, DB);
if(!$connection){
    die("some issue ". mysqli_error($connection));
}

if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    //echo $username;
    $query = "SELECT * FROM users WHERE username = '$username'";
    $select_user_details = mysqli_query($connection, $query);
    
    function checkQueryResult($resultset){
        global $connection;
        if(!$resultset){
            die("QUERY FAILED: ".mysqli_error($connection));
    }
}

    checkQueryResult($select_user_details);
    //proceed if there is data returned otherwise there would be errors;
    
    if(mysqli_num_rows($select_user_details)>1){
        die("how");
        //later we would create a error wala page and will print the error in user friendly manner
        //header();
    }
    //if im coming here that means 1 have exactly 0/1 rows
    //$db_password = "";
    
    
    if($row = mysqli_fetch_assoc($select_user_details)){
        //i have 1 row
        $db_password = $row['password'];
        $user_id = $row['uid'];
    }
    else{
        $db_password="";
    }
    
    if($password == $db_password){
        //$_SESSION['uid'] = $user_id;
        echo "Verify";
        $_SESSION['uid'] = $user_id;
        header('Location: After_Login.php');
        
        //header("Location: ../index.php");
    }
    else{
        die("Some Issue.....");
    }
}
?>