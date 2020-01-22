
<!DOCTYPE html>
<head>
<title>BRE4DO LOGIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url()?>assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()?>assets/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='<?php echo base_url()?>assets///fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font.css" type="text/css"/>
<link href="<?php echo base_url()?>assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?php echo base_url()?>assets/js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">

<h2><?php echo lang('login_heading');?></h2>
<!-- <p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div> -->

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

 

  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>
</div>
</div>

<script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url()?>assets/js/scripts.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url()?>assets/js/jquery.scrollTo.js"></script>
</body>
</html>