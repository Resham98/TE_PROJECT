<link rel="icon" href="images/icon.png">
<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "zomato";
    
    $conn = mysqli_connect($host, $username, $password, $db);
    echo "hi";
    
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    $customer_name = $_POST['name'];
    $customer_uname = $_POST['username'];
    $customer_password = $_POST['password'];
    //$customer_address = $_POST['address'];
    $customer_phone = $_POST['phone'];    


    $sql="SELECT COUNT('uid') FROM users";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $var=$row[0]+1;
    

    $sql = "INSERT INTO users VALUES ('', '$customer_name', '$customer_uname', '$customer_password', '$customer_phone')";
    if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: " . mysqli_error($conn);
    }

    $cvsData = $var . "," . $customer_name . "," . $customer_uname . "," . $customer_password . "," . $customer_phone . "\n";

    $fp = fopen("users.csv","a");
    echo "hi";
    if($fp){
        echo "in";
        fwrite($fp,$cvsData); 
        fclose($fp);

        echo "done";
}

    mysqli_close($conn);

    header('Location: feLoginReg.php');

?>