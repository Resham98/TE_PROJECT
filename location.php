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
    .abc{
        width: 750px;
        height: 45px;
        margin-top: 210px;
      
    }
     .container {
/*        margin-top: -77px;*/
/*      max-width: 1140px;*/
/*    margin-top: -111px;*/
    max-width: 1140px;}
    .def{
     margin-left: auto;   
    margin-right: auto;
    margin-top: -37px;
    font-size: 44px;
    }
    .fgh{
        background: #ffad00;
        color: black;
        height: 50px;
        width: 119px;
        border-radius: 5px;
        
        cursor: pointer;
    }
    .fgh:hover{
        background: black;
        color:#ffad00 ;
        height: 50px;
        width: 119px;
        border-radius: 5px;
        
        cursor: pointer;
    }
  
</style>
  <?php include 'nav1.php';?>
<?php
if (isset($_POST['zomsubmit'])) {
    $zomloc = $_POST['zomlocation'];
    $zomsea = $_POST['zomsearch'];
}
else {
    exit();
}

if($zomloc != '' and $zomsea != ''){
    //echo "hii";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://developers.zomato.com/api/v2.1/locations?query=".$zomloc);
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
    curl_setopt($ch, CURLOPT_URL, "https://developers.zomato.com/api/v2.1/search?entity_id=".$ent_id."&entity_type=".$ent_type."&q=".$zomsea);
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
}

elseif($zomloc != '' and $zomsea == ''){
    //echo "hii";
        
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://developers.zomato.com/api/v2.1/locations?query=".$zomloc);
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

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://developers.zomato.com/api/v2.1/search?entity_id=".$ent_id."&entity_type=".$ent_type);
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

    $zomrestaurants = $zomdata->restaurants;
    //echo "<pre>"; print_r($zomrestaurants); echo "</pre>";

    if (count($zomrestaurants) == 0) {
      echo "<b>No results found for your search query</b>"; 
      exit();
    }

}
elseif($zomloc == '' and $zomsea != ''){
    //echo "hii";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://developers.zomato.com/api/v2.1/search?q=".$zomsea);
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
    $zomrestaurants = $zomdata->restaurants;
    //echo "<pre>"; print_r($zomrestaurants); echo "</pre>";
        if (count($zomrestaurants) == 0) {
          echo "<b>No results found for your search query</b>"; 
          exit();
        }

}

elseif($zomloc == '' and $zomsea == ''){
    //echo "hii";
    header('Location: After_Login.php');
}
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
    $zomdata = json_decode($result);

    $zomrestaurants = $zomdata->restaurants;
    //echo "<pre>"; print_r($zomrestaurants); echo "</pre>";

    if (count($zomrestaurants) == 0) {
      echo "<b>No results found for your search query</b>"; 
      exit();
    }
    ?>
  <div>
          <center><form action="sorting.php?entid='.$ent_id.'&entcity='.$ent_type.'" method="POST">
        <select name="sort" class="abc">
            <option value="cost">sort by cost(asc)</option>
            <option value="rating">sort by rating(desc)</option>
        </select>
  
        <input type="submit" value="Search" class='fgh'>
              </form></center></div>


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
      <p><?php echo @$restaurant->restaurant->location->locality.", ".@$restaurant->restaurant->location->city." <br/>";?></p>    </div>
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