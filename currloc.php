<script>

var lat, lon;

if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
} 

function showPosition(position) {

    lat = position.coords.latitude;
    lon = position.coords.longitude;

    document.cookie = 'lat='+lat;
    document.cookie = 'lon='+lon;
}
    
</script>
<link rel="icon" href="images/icon.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
    
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
    .row{
        margin-top: 100px;
    }
    .w3-quarter{
         box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
         transition: 1s;
        border-radius: 15px;
    }
   .w3-quarter:hover {
  box-shadow: 0 8px 16px 0 rgba(2.5,2.5,0,1);
}
  
</style>

<?php
/*
if (isset($_GET['zomsubmit'])) {
  $zomquery = $_GET['zomlocation'];
}
else {
  exit();
}
*/

$lat = $_COOKIE['lat'];
$lon = $_COOKIE['lon'];

//echo $lat . '<br>';
//echo $lon;


// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://developers.zomato.com/api/v2.1/search?lat=".$lat."&lon=".$lon."&sort=real_distance&order=asc");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

$headers = array(
  "Accept: application/json",
  "User-Key: f0baf53bd8c31d3c625e9d9c0d379379"
  );
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

$zomdata = json_decode($result);

//echo "<pre>"; print_r($zomdata); echo "</pre>";


$zomrestaurants = $zomdata->restaurants;
//echo "<pre>"; print_r($zomrestaurants); echo "</pre>";

if (count($zomrestaurants) == 0) {
  echo "<b>No results found for your search query</b>"; 
  exit();
}
//echo "Found: ".$zomdata->results_found." results<br/>";
//echo "Result shown: ".$zomdata->results_start." to ".$zomdata->results_shown."<br/><br/>";

//foreach ($zomrestaurants as $restaurant) {
//  echo "<h3>".@$restaurant->restaurant->name."</h3>";
//    if ($restaurant->restaurant->thumb != "") {
//      echo "<img width='330' src='".@$restaurant->restaurant->thumb."' /><br/>";
//    }
//  
//  echo "Restaurant ID: ".@$restaurant->restaurant->id."<br/>";
//  echo "User rating: ".@$restaurant->restaurant->user_rating->rating_text."( ".@$restaurant->restaurant->user_rating->aggregate_rating."/5 ) Depending upon ".@$restaurant->restaurant->user_rating->votes." votes<br/>";
//  echo @$restaurant->restaurant->location->address.", ".@$restaurant->restaurant->location->city." <a href='".@$restaurant->restaurant->url."'>Visit restaurant page</a><br/>";
//  echo "<br/><hr>";
//  //echo "<pre>"; print_r($restaurant->restaurant); echo "</pre>";
//}

?>
<?php include 'nav1.php';?>
<div class="container">
  <div class="row">
      <div class="col-md-4">
<?php
foreach ($zomrestaurants as $restaurant) {
    if ($restaurant->restaurant->thumb != "") {
//      echo "<img width='330' src='".@$restaurant->restaurant->thumb."' class='rest_image' /><br/>";
    }else{
        $restaurant->restaurant->thumb="images/abc.jpg";
    }
?>
        
    
    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:50px">
  <!-- First Photo Grid-->
          <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter" style="width: 85%;">
        <h3><strong><?php echo $restaurant->restaurant->name; ?></strong></h3>
      
        <img src="<?php echo $restaurant->restaurant->thumb?>" class="restimg" alt="Sandwich" style="width:100%">

        <?php
            echo "<p id='".$restaurant->restaurant->id."'>" 
        ?>
     <h4><?php  echo "User rating: ".$restaurant->restaurant->user_rating->aggregate_rating."/5" ?></h4>
      <p><?php echo @$restaurant->restaurant->location->locality.", ".@$restaurant->restaurant->location->city." <br/>";?></p>
   
    </div>
  </div>
      </div>
          </div>
      <div class="col-md-4">
        

<!-- End page content -->
<!--</div>-->
<?php
    }//for each loop closing 
?>
      </div>
</div>
</div>
<?php include 'FooterOnly.php';?>

<script>
    $(document).ready(function(){
        $(".restimg").click(function(){
            restid = $(this).parent().find('p').attr('id');
            window.location.href = "restInfo.php?restid="+restid;
        })
    })
</script>


