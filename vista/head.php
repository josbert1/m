<!DOCTYPE HTML>
<html>
<head>	
<?php  $perfil = $archivos."perfil";
	   $apostillar = $archivos."apostillar";
       $validator = $_SERVER['REQUEST_URI']; ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Medicinal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="shortcut icon" href="<?php echo $archivos; ?>images/cedis.ico" type="image/ico">
<link href="<?php echo $archivos; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo $archivos; ?>css/style.css" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="<?php echo $archivos; ?>css/slider.css">
<link rel="stylesheet" href="<?php echo $archivos; ?>css/helpers.css">
<script src="<?php echo $archivos; ?>js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo $archivos; ?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo $archivos; ?>js/easing.js"></script>
<link rel="stylesheet" href="<?php echo $archivos; ?>css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo $archivos; ?>css/owl.theme.default.css">
<link rel="stylesheet" href="<?php echo $archivos; ?>css/font-awesome/css/font-awesome.css">
<script src="<?php echo $archivos; ?>js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo $archivos; ?>js/sleekslider.min.js"></script>
<script type="text/javascript" src="<?php echo $archivos; ?>js/app.js"></script>
<script src="<?php echo $archivos; ?>js/bootstrap.js"></script>
<link rel="stylesheet" href="<?php echo $archivos."css/404.css" ?>">
<?php if ($validator == $apostillar) {?>
<link rel="stylesheet" href="<?php echo $archivos; ?>css/apostillar.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<?php } ?>


<?php if ($validator == $perfil OR $validator == $apostillar){}

else{?>
<link href="<?php echo $archivos; ?>css/paper-bootstrap-wizard.css" rel="stylesheet" />
<link href="<?php echo $archivos; ?>css/themify-icons.css" rel="stylesheet">
<script src="<?php echo $archivos; ?>js/paper-bootstrap-wizard.js" type="text/javascript"></script>
<script src="<?php echo $archivos; ?>js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<?php  }?>



<!--/web-font-->
</head>
