<?php
session_start();
//$phone_number = $_SESSION["phone_no"];
//require_once("login.php");
//echo "$phone_number";
$name= $_POST['name'];
$msg = $_POST['msg'];
//echo $msg;

$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?country=91&sender=".$name."&route=4&mobiles=7350402576&authkey=243436AORq1TmNv2hr5bc8a667&message=".$msg,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "CURL Error #:" . $err;
} else{
    if(isset($_SESSION['uid'])){
        header("Location: contactus1.php");
    }
    else{
        header("Location: contactus.php");
    }

}

?>