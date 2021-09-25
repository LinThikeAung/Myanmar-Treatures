<?php include_once "function.php" ?>
<?php include_once "function2.php" ?>
<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>
  Myanmar' Treatures Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />



  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>

<body class="zawgyi unicode">

<?php
   
    if(isset($_SESSION['name'])){
     
    }
    else{
        header('Location: ../index.php');
    }
?>