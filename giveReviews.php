<!DOCTYPE html>
<html lang="zxx">

<head>
     <link rel="icon" href="images/icon.png">
    <title>The Food Doofs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="forms, bootstrap form, html form, webforms, html 5 form, php form, bootstrap 4 login form, login form using bootstrap, form using bootstrap, bootstrap responsive form, contact form in bootstrap, bootstrap responsive registration form"/>
    <link rel="stylesheet" href="https://components.staticcodes.io/css/bootstrap.css" type="text/css" media="all">
    
    <style>
        
        
       
input[type="submit"] {
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	-ms-transition: 0.5s all;
}

h3 {
	margin: 0;
	padding: 0;
	text-align: center;
	font-family: 'Montserrat', sans-serif;
}


.agilecontactw3ls {
/*	background-image: url(https://components.staticcodes.io/img/games/game-robo/tabs-bg.jpg);*/
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-attachment: fixed;
	padding: 100px 0;
margin-top: 0px;
}



.agilecontactw3ls-grid input[type="text"], .agilecontactw3ls-grid input[type="email"], .agilecontactw3ls-grid textarea {
	width: 100%;
	padding: 10px;
	border: 5px solid  #000;
	color: #000;
	outline: none;
	background: transparent;
	border-left: 10px solid  #000;
	border-radius: 0;
	margin-bottom: 20px;
	font-family: 'Montserrat', sans-serif;
	font-size: 13px;
}

.agilecontactw3ls-grid input[type="email"], .agilecontactw3ls-grid textarea {
	margin-bottom: 0;
}

.agilecontactw3ls-grid textarea {
    height: 150px;
    font-size: 25px;
    width: 830px;
}

.agilecontactw3ls-grid .send-button {
	margin-top: 5px;
}

.agilecontactw3ls input[type="submit"] {
	padding: 4px 40px;
	font-family: 'Montserrat', sans-serif;
	background-color:  #fff;
	color: #000;
	border: 5px solid #000;
	font-size: 16px;
	float: right;
}
        .agilecontactw3ls.send-button1 {
	padding: 4px 40px;
	font-family: 'Montserrat', sans-serif;
	background-color:  #fff;
	color: #000;
	border: 5px solid #000;
	font-size: 16px;
	float: right;
}

.agilecontactw3ls input[type="submit"]:hover {
	background-color: transparent;
	
	color: #000;
}


	::selection {
		background-color: #1e1e1e;
		color: #fff;
	}

	
	::-moz-selection {
		background-color: #1e1e1e;
		color: #fff;
	}

	
	::-o-selection {
		background-color: #1e1e1e;
		color: #fff;
	}

	::-ms-selection {
		background-color: #1e1e1e;
		color: #fff;
	}

	
	::-webkit-selection {
		background-color: #1e1e1e;
		color: #fff;
	}



@media screen and (max-width: 1080px) {
	.agilecontactw3ls {
		padding: 75px 0;
	}
	.agilecontactw3ls h3{
		font-size: 35px;
		margin-bottom: 35px;
	}
}

@media screen and (max-width: 991px) {
	.container {
		width: 100%;
	}
	.agilecontactw3ls-grid {
		width: 50%;
		float: left;
		padding: 5px;
	}
}

@media screen and (max-width: 768px) {
	.agilecontactw3ls {
		padding: 50px 0;
	}
	.agilecontactw3ls h3 {
		font-size: 30px;
		margin-bottom: 30px;
	}
}

@media screen and (max-width: 603px) {
	.agilecontactw3ls input[type="submit"] {
		font-size: 14px;
	}
}

@media screen and (max-width: 568px) {
	.agilecontactw3ls {
		padding: 35px 0;
	}
}

@media screen and (max-width: 480px) {
	.agilecontactw3ls h3 {
		font-size: 25px;
		margin-bottom: 25px;
	}
	.agilecontactw3ls-grid {
		width: 100%;
		padding: 0;
	}
	.agilecontactw3ls-grid input[type="text"], .agilecontactw3ls-grid input[type="email"], .agilecontactw3ls-grid textarea {
		margin-bottom: 5px;
		font-size: 11px;
		padding: 7px;
		border-left: 3px solid #0199e6;
	}
	.agilecontactw3ls-grid textarea {
		height: 100px;
	}
	.agilecontactw3ls-grid .send-button {
		margin-top: 0;
	}
	.agilecontactw3ls input[type="submit"] {
		font-size: 12px;
		padding: 4px 40px;
		border: 2px solid transparent;
	}
}
      .send-button1 {
    /* margin-bottom: -39px; */
    margin-top: -59px;
    margin-left: 1226px;
    padding: 4px 43px;
    font-family: 'Montserrat', sans-serif;
    background-color: #fff;
    color: #000;
    border: 5px solid #000;
    font-size: 16px;
    width: 197px;
    height: 38px;
    text-decoration: none !important;
}
        .donate{
            color: black;
        }

        .donate:hover
        {
          color: black;
          text-decoration: none !important;
          
        }
   



        
        </style>
</head>

<?php
$id = $_GET['restid'];    
?>
    
<body>

    <div class="agilecontactw3ls" id="agilecontactw3ls">
        <div class="container">
            
            <form action="review.php?restid=<?php echo $id; ?>" method="post">
                <div class="col-md-6 agilecontactw3ls-grid agilecontactw3ls-grid-2">
                    <textarea name="Message" placeholder="GIVE YOUR REVIEWS HERE..." required=""></textarea>
                    
                </div>
                <div class="send-button">
                <input type="submit" value="Submit Review">
                
                        
                </div>
                
                
               
                
                   
            </form>
           
        </div>
       
             <div class="send-button1">
                <a href="viewReviews.php?restid=<?php echo $id; ?>" class="donate">View Reviews</a>
            
        </div> 
    
    
    </div>
      
</body>

</html>