<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Myanmar' Treatures</title>

	<link href='http://mywebfont.appspot.com/css?font=yunghkio' rel='stylesheet' type='text/css'>
        <link href='http://mywebfont.appspot.com/css?font=myanmar3' rel='stylesheet' type='text/css'>
        	
               <link href='http://mywebfont.appspot.com/css?font=padauk' rel='stylesheet' type='text/css'>
        <link href='http://mywebfont.appspot.com/css?font=parabaik' rel='stylesheet' type='text/css'>
        <link href='http://mywebfont.appspot.com/css?font=zawgyi' rel='stylesheet' type='text/css'>
  	
	<style type="text/css">
		.zawgyi{
			font-family:'Zawgyi-One';
		}
		.unicode{
			font-family:'Myanmar3','Yunghkio','Masterpiece Uni Sans';
		}


.yunghkio {
    font-family:"Masterpiece Uni Sans",'Yunghkio';
    font-size:13px;
}

.padauk {
    font-family:"Masterpiece Uni Sans",'Padauk';
    font-size:18px;
}

.parabaik {
    font-family:"Masterpiece Uni Sans",'Parabaik';
    font-size:16px;
}
</style>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<script>
    google.charts.load('current', { 'packages': ['map'] });
    google.charts.setOnLoadCallback(drawMap);

    function drawMap() {
      var data = google.visualization.arrayToDataTable([
        ['Country', 'Population'],
        ['China', 'China: 1,363,800,000'],
        ['India', 'India: 1,242,620,000'],
        ['US', 'US: 317,842,000'],
        ['Indonesia', 'Indonesia: 247,424,598'],
        ['Brazil', 'Brazil: 201,032,714'],
        ['Pakistan', 'Pakistan: 186,134,000'],
        ['Nigeria', 'Nigeria: 173,615,000'],
        ['Bangladesh', 'Bangladesh: 152,518,015'],
        ['Russia', 'Russia: 146,019,512'],
        ['Japan', 'Japan: 127,120,000']
      ]);

    var options = {
      showTooltip: true,
      showInfoWindow: true
    };

    var map = new google.visualization.Map(document.getElementById('chart_div'));

    map.draw(data, options);
  };
  </script>

		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
<style>
.dropdown-menu > a:hover{
	
	background-image: -webkit-linear-gradient(0deg, #e66587 0%, #f09458 100%);"
}

body:after{
	background-image: -webkit-linear-gradient(0deg, #e66587 0%, #f09458 100%);
}
body{
  font-size:1rem;
}

.main-wrapper-first {
  width: 68.75%;
  margin: 0 auto;
  margin-top: 5rem;
}

.active-works-carousel .owl-dots:after {
  content: "";
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  position: absolute;
  width: 83%;
  height: 1px;
  background: #eeeeee;
  z-index: -1;
}


.like {
    font-size: 1.2em;
  }
  .fa-thumbs-down, .fa-thumbs-o-down {
    transform:rotateY(180deg);
  }
  
  .ii {
    color: blue;
  }

</style>

	
	</head>
	<body class="zawgyi unicode">
	
	<?php include_once "admin/include_admin/function.php"?>
	<?php include_once "admin/include_admin/function2.php"?>
	<?php include_once "treaturesite/function1.php" ?>