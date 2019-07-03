<!DOCTYPE html>
<html>
<head>
<title>The Food Doofs</title>
     <link rel="icon" href="images/icon.png">
<link rel="icon" href="images/icon1.jpg" type="image/icon" sizes="20x20">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!-- //pignose css -->
         <link href="css/contact.css" rel='stylesheet' type='text/css' media="all">
         


    
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<!--<script src="js/simpleCart.min.js"></script>-->
<!-- cart -->
    <style>
        
        .all {
  font: 700 18px/59px "Roboto", sans-serif;
  width: 180px;
  text-align: center;
  background: #FDA30E;
  /*display: block;*/
  border: 0;
  color: #fff;
  text-transform: uppercase;
  position: relative;
  z-index: 2;
  padding: 0;
}
.all:before {
  content: "";
  position: absolute;
  z-index: -1;
  background: #222222;
  top: 0;
  bottom: 0;
  left: 0;
  display: block;
  right: 0;
  transform: scaleY(0);
  transform-origin: 50%;
  transition-property: transform;
  transition-duration: 0.3s;
  transition-timing-function: ease-out;
}
.all:hover, .all:focus {
  color: #fff !important;
}
.all:hover:before {
  transform: scaleY(1);
}
        .agileits_mail_grid_left h4 {
    font-size: 1em;
    color: black;
    margin-bottom: 1em;
    font-weight: 600;
}
        .why_us{
	color: black;
}
      .ftco-navbar-light {
    background-color: dimgrey !important position: absolute;
    left: 0;
    right: 0;
    z-index: 3;
    top: 0px;
    height: 189px;
}
    body {
    font-family: "Muli", Arial, sans-serif;
    background: #fff;
    font-size: 16px;
    line-height: 1.8;
    font-weight: 300;
    color: #8b8b92;
    margin-top: 122px;
}
        .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
    margin-left: -15px;
    height: 117px;
}
        .heading-agileinfo span:after {
    content: '';
    background: #212121;
    height: 7px;
    width: 6%;
    position: absolute;
    top: 103%;
    /* right: 47%; */
    left: 47%;
}
    .heading-agileinfo {
    font-weight: 600;
    letter-spacing: 2px;
    font-size: 40px;
    text-align: center;
    color: #fff;
    padding-top: 3em;
	margin-bottom: 2.5em;
    text-transform: capitalize;
    position: relative;
}    
    </style>

   </head>
   <body>
        <?php include 'nav.php'; ?>
        
          
<section class="mail">
    <div class="container">
        <h2 class="heading-agileinfo why_us">Contact Us
            <span></span>
        </h2>
        <div class="row agileits_mail_grids">
            <div class="col-md-7 agileits_mail_grid_left">
                <form action="message.php" method="post" id="contactfrm">
                    <h4>Your Name*</h4>
                    <input type="text" name="name" placeholder="Name..." required=""  id="name">
                    <h4>Your Email*</h4>
                    <input type="email" name="email" placeholder="Email..." required=""  id="email" >
                    <h4>Your Phone Number*</h4>
                    <input type="text" name="number" placeholder="Phone..." required=""  id="number" pattern="[0-9]{10}">
                    <h4>Your Message</h4>
                    <textarea placeholder="Message" name="msg" id="msg" ></textarea>
                    	
<!--
                    <button type="submit" class="all" name="send" value="Send Message">
                    Send Message</button>
                    <div class="result" id="result" style="display:inline-block"></div>
                </form>
            </div>
            <script type="text/javascript">
	function send_enquiry()
	{
		event.preventDefault();
		//param=$('#booking').serialize();
		var param = new FormData($('form')[0]);
		$.ajax
			(
				{
					url:'sendmail.php', //url for background file
					type : 'POST', //method of sending data
					data : param, // data to be sent
					processData: false, // Do not process any data
  					contentType: false, // remove existing content type
  					beforeSend: function(xhr) 
  					{
					    $('.result').html("<img src='images/lg.rotating-balls-spinner.gif'>");
					},
					success:function(data)
					{
						//$('.result').html(data);  //taking output into a class
						if(data == "OK") //SUCCESS
						{   
							$('.result').html("<br><div class='alert alert-success'>Your request has sent successfully . We will get back to you shortly.</div>");
							$('#contactfrm').trigger("reset");
						}
						else
						{
							$('.result').html("<div class='alert alert-danger'>Sorry, We could not send your request. Please try again later  </div>");	
						}
					},
					error:function(err)
					{
						$('.result').html(err.status); //if any error, taking that in this
					},	
				}
			)
			.fail(function( jqXHR, textStatus )
			{
				alert( "Request failed: " + textStatus );  //failure status
			});
	}

</script>
-->
    <button type="submit" class="all" name="send" value="Send Message">
                    Send Message</button>
                    <div class="result" id="result" style="display:inline-block"></div>
                </form>
            </div>
            <script type="text/javascript">
	function send_enquiry()
	{
		event.preventDefault();
		//param=$('#booking').serialize();
		var param = new FormData($('form')[0]);
		$.ajax
			(
				{
					url:'sendmail.php', //url for background file
					type : 'POST', //method of sending data
					data : param, // data to be sent
					processData: false, // Do not process any data
  					contentType: false, // remove existing content type
  					beforeSend: function(xhr) 
  					{
					    $('.result').html("<img src='images/lg.rotating-balls-spinner.gif'>");
					},
					success:function(data)
					{
						//$('.result').html(data);  //taking output into a class
						if(data == "OK") //SUCCESS
						{   
							$('.result').html("<br><div class='alert alert-success'>Your request has sent successfully . We will get back to you shortly.</div>");
							$('#contactfrm').trigger("reset");
						}
						else
						{
							$('.result').html("<div class='alert alert-danger'>Sorry, We could not send your request. Please try again later  </div>");	
						}
					},
					error:function(err)
					{
						$('.result').html(err.status); //if any error, taking that in this
					},	
				}
			)
			.fail(function( jqXHR, textStatus )
			{
				alert( "Request failed: " + textStatus );  //failure status
			});
	}

</script>
            
            <div class="col-md-5 agileits_mail_grid_right">
                <div class="agile-map">
                    <img src="images/contact.jpg" width="600" height="450" frameborder="0" style="border:0">
                </div>
                   </div>
        </div>
    </div>
</section>
		<script src="js/bootstrap.min.js"></script>
        

   
</body>
    <?php include 'FooterOnly.php';?>
</html>