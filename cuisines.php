<form action="cuisines.php" method="GET">
  <input type="text" name="cuisine"><input type="submit" name="zomcuisine" value="Search">
</form>


<?php
if (isset($_GET['zomcuisine'])) {
  $zomquery = $_GET['cuisine'];
  # Continue running code
}
else {
  //echo "Search key not found";
  exit();
}

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://developers.zomato.com/api/v2.1/locations?query=".$zomquery);
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

    $ent_type = $zomdata->location_suggestions[0]->entity_type;
    $ent_id = $zomdata->location_suggestions[0]->entity_id;

    //echo $ent_type;
    //echo $ent_id;
        
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://developers.zomato.com/api/v2.1/cuisines?city_id=".$ent_id);
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

    $zomcuisines = $zomdata->cuisines;
    //echo "<pre>"; print_r($zomcuisines); echo "</pre>";

    if (count($zomcuisines) == 0) {
      echo "<b>No results found for your search query</b>"; 
      exit();
    }
//    echo "Found: ".$zomdata->results_found." results<br/>";
//    echo "Result shown: ".$zomdata->results_start." to ".$zomdata->results_shown."<br/><br/>";


    echo '<form action="cuis.php" method="POST">';
    echo '<select id="cuis" name="cuis">';
    foreach($zomcuisines as $cuisine){
        echo '<option value='.$cuisine->cuisine->cuisine_id.'>'.$cuisine->cuisine->cuisine_name.'</option>';
    }
    echo '</select>';

//    $text=$_POST['category'];
//    echo "Category ".$text." selected<br>";


    echo '<input type="submit" name="zomcuisine" value="Search">';
    echo '</form>'

//    foreach ($zomcuisines as $cuis) {
//      echo "<h3>".@$restaurant->restaurant->name."</h3>";
//        if ($restaurant->restaurant->thumb != "") {
//          echo "<img width='330' src='".@$restaurant->restaurant->thumb."' /><br/>";
//        }
//
//      echo "Restaurant ID: ".@$restaurant->restaurant->id."<br/>";
//      echo "User rating: ".@$restaurant->restaurant->user_rating->rating_text."( ".@$restaurant->restaurant->user_rating->aggregate_rating."/5 ) Depending upon ".@$restaurant->restaurant->user_rating->votes." votes<br/>";
//      echo @$restaurant->restaurant->location->address.", ".@$restaurant->restaurant->location->city." <a href='".@$restaurant->restaurant->url."'>Visit restaurant page</a><br/>";
//      echo "<br/><hr>";
?>