<!DOCTYPE HTML>
<html>

<head>
    <title>Gallery</title>
     <link rel="icon" href="images/icon.png">
    <link href="https://www.static-codes.com/SC-components/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="https://www.static-codes.com/SC-components/js/jquery-1.11.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta name="keywords" content="gallery, photo gallery, bootstrap gallery, html gallery, gallery design, responsive image gallery, bootstrap modal image gallery, bootstrap portfolio gallery, wedding photo gallery, bootstrap image gallery template."
    />
    <script type="text/javascript" src="https://www.static-codes.com/SC-components/js/easing.js"></script>
    <script src="https://www.static-codes.com/SC-components/js/wow.min.js"></script>
    <link href="https://www.static-codes.com/SC-components/css/animate.css" rel='stylesheet' type='text/css' />
    <script>
        new WOW().init();
    </script>

    <script type="text/javascript" src="https://www.static-codes.com/SC-components/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript">
    </script>
    
    <script>
        $(function () {
	
	var filterList = {
	
		init: function () {
		
		$('#portfoliolist').mixitup({
			targetSelector: '.portfolio',
			filterSelector: '.filter',
			effects: ['fade'],
			easing: 'snap',
			onMixEnd: filterList.hoverEffect()
		});				
	
	},
	
	hoverEffect: function () {
	
		$('#portfoliolist .portfolio').hover(
			function () {
				$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
				$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
			},
			function () {
				$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
				$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
			}		
		);				
	
	}

};

	filterList.init();
	
});	
jQuery(function($) {
				$(".swipebox").swipebox();
			});
        </script>
    
    <style>
    h2, h3 {margin-top: 0;}
ul {margin: 0;}
p {margin: 0;}
html, body{
	font-family:Tahoma;
	font-size: 100%;
	background:#fff;
}
body a:hover{
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-ms-transition:0.5s all;
	-o-transition:0.5s all;
}

h3.heding {
    margin-top: 9px;
    color: black;
    text-transform: uppercase;
    font-weight: 400;
    font-size: 2.5em;
}
        
        
h3.heding span{
	border-bottom:1px solid #555;
	padding:0.6em 0;
}
.portfolios{
	background:#f5f5f5;
	padding:4em 0 1em;
}
.portfolios p{
	margin:2em 0;
	font-size:1.2em;
	color:#808080;
	font-weight:400;
}
.b-link-stripe{
	position:relative;
	display:inline-block;
	vertical-align:top;
	font-family: 'Open Sans', sans-serif;
	font-weight: 300;
	overflow:hidden;
}
.b-link-stripe .b-wrapper{
	position:absolute;
	width:100%;
	height:100%;
	top:0;
	left:0;
	text-align:center;
	color:#ffffff;
	overflow:hidden;
}
.b-animate-go{
	text-decoration:none;
}
.b-animate{
	transition: all 0.5s;
	-moz-transition: all 0.5s;
	-ms-transition: all 0.5s;
	-o-transition: all 0.5s;
	-webkit-transition: all 0.5s;
	visibility: hidden;
	font-size:1.1em;
	font-weight:700;
}
.b-animate img{
	margin-top:16%;
	display: -webkit-inline-box;
}
.b-animate-go:hover .b-animate{
	visibility:visible;
}
.b-from-left{
	position:relative;
	left:-100%;
}
.b-animate-go:hover .b-from-left{
	left:0;
}
ul#filters {
	padding: 0px;
}
.b-wrapper:hover {
	background: rgba(212, 86, 38, 0.57);
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-o-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-ms-transition: 0.5s all;
}

#filters {
	margin: 3% 0;
	padding: 0;
	list-style: none;
	text-align: center;
}
	#filters li {
		display: -webkit-inline-box;
	}
	#filters li span {
    display: block;
    padding: 9px 112px;
    text-decoration: none;
    color: rgba(31, 49, 63, 0.7);
    cursor: pointer;
    font-size: 0.875em;
    font-weight: 400;
    text-transform: uppercase;
    background: #fff;
    margin: 0 10px 0 0;
}
	#filters li span.active {
		background: #ffc107;
		color: black;
	}
 	#portfoliolist .portfolio {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		-o-box-sizing: border-box;
		width: 30%;
		display:none;
		float:left;
		overflow:hidden;
		margin: 0 2% 5% 0;
	}
	div#portfoliolist {
		padding: 40px 0px;
}	
	.portfolio-wrapper {
		overflow:hidden;
		position: relative !important;
        margin-left: 50PX;
		cursor:pointer;
	}
	.portfolio img {
		max-width:100%;
		transition: all 300ms!important;
		-webkit-transition: all 300ms!important;
		-moz-transition: all 300ms!important;
	}
  
.container:after { content: "\0020"; display: block; height: 0; clear: both; visibility: hidden; }
.clearfix:before,
.clearfix:after {
  content: '\0020';
  display: block;
  overflow: hidden;
  visibility: hidden;
  width: 0;
  height: 0; }
.clearfix:after {
  clear: both; }
.clearfix {
  zoom: 1; }

@media(max-width:768px){
	#portfoliolist .portfolio {
		width: 48%;
	}
	
}
@media(max-width:640px){
	.portfolios {
		padding: 2em 0 1em;
	}
	h3.heding {
		font-size: 1.5em;
	}
}
@media(max-width:480px){
	h3.heding {
		font-size: 1.2em;
	}
	.portfolios p {
		margin: 2em 0 1em;
		font-size: 0.875em;
	}
	#filters li span {
		margin: 0 6px 0 0;
	}
}
@media(max-width:320px){
	h3.heding {
		font-size: 1em;
	}
	#filters li span {
		padding: 5px 4px;
		margin:0;
		font-size:0.7em;
	}
	.b-animate img {
		margin-top: 15%;
		width: 35%;
	}
	
}
    </style>
   
    
    

</head>

<body>
    <div class="portfolios entertain_box  wow fadeInUp" data-wow-delay="0.4s" id="project">
        <div class="container">
            <center><h3 class="heding">
                GALLERY
</h3></center>


            <ul id="filters" class="clearfix">
                <li>
                    <span class="filter active" data-filter="app card icon logo web">Food and Ambience</span>
                </li>
<!--
                <li>
                    <span class="filter" data-filter="app">FOOD</span>
                </li>
                <li>
                    <span class="filter" data-filter="card">AMBIENCE</span>
                </li>
-->
                
            </ul>
            <div id="portfoliolist">
                <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper">
                        <a href="images/f1.jpg" class="b-link-stripe b-animate-go   swipebox"
                            >
                            <img src="images/f1.jpg" />
                </a>
                    </div>
                </div>
                <div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper">
                        <a href="images/f3.jpg" class="b-link-stripe b-animate-go   swipebox"
                            >
                             <img src="images/f3.jpg" />
                            
                        </a>
                    </div>
                </div>
                <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper">
                        <a href="images/f5.jpg"class="b-link-stripe b-animate-go   swipebox"
                            >
                           <img src="images/f5.jpg" />
                            
                        </a>
                    </div>
                </div>
                <div class="portfolio icon mix_all" data-cat="logo" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper">
                        <a href="images/pixel1.jpg" class="b-link-stripe b-animate-go   swipebox"
                            >
                            <img src="images/pixel1.jpg" />
                            
                        </a>
                    </div>
                </div>
                <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper">
                        <a href="images/pixel10.jpg" class="b-link-stripe b-animate-go   swipebox"
                            >
                            <img src="images/pixel10.jpg" />
                            
                        </a>
                    </div>
                </div>
                <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper">
                        <a href="images/pixel11.jpg" class="b-link-stripe b-animate-go  swipebox"
                            >
                           <img src="images/pixel11.jpg" />
                                                  </a>
                    </div>
                </div>
            </div>
              <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper">
                        <a href="images/pixel12.jpg"class="b-link-stripe b-animate-go   swipebox"
                            >
                            <img src="images/pixel12.jpg" />
                            
                        </a>
                    </div>
                </div>
            <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper">
                        <a href="images/f15.jpg" class="b-link-stripe b-animate-go   swipebox">
                            
                            <img src="images/f15.jpg" />
                            
                        </a>
                    </div>
                </div>
            
            
        </div>
    

        <link rel="stylesheet" href="https://www.static-codes.com/SC-components/css/swipebox.css">
        <script src="https://www.static-codes.com/SC-components/js/jquery.swipebox.min.js"></script>
        <script type="text/javascript">

        </script>
        
    </div>

    </body>
</html>