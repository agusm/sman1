<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMAN 1 Baserah</title>

    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    <link href="<?=base_url()?>assets/user/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
    <link href="<?=base_url()?>assets/user/js/dropdown-menu/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="<?=base_url()?>assets/user/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="<?=base_url()?>assets/user/js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="<?=base_url()?>assets/user/js/audioplayer/audioplayer.css" rel="stylesheet" type="text/css"><!-- Audioplayer -->
    <link href="<?=base_url()?>assets/user/css/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->

</head>

<body role="document">

<!-- device test, don't remove. javascript needed! -->
<span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
<!-- device test end -->

<?php $this->load->view('user/header')?>
<?php $this->load->view($content)?>
<?php $this->load->view('user/footer')?>

<!-- jQuery -->
<script src="<?=base_url()?>assets/user/jQuery/jquery-2.1.1.min.js"></script>
<script src="<?=base_url()?>assets/user/jQuery/jquery-migrate-1.2.1.min.js"></script>

<!-- Bootstrap -->
<script src="<?=base_url()?>assets/user/bootstrap/js/bootstrap.min.js"></script>

<!-- Drop-down -->
<script src="<?=base_url()?>assets/user/js/dropdown-menu/dropdown-menu.js"></script>

<!-- Fancybox -->
<script src="<?=base_url()?>assets/user/js/fancybox/jquery.fancybox.pack.js"></script>
<script src="<?=base_url()?>assets/user/js/fancybox/jquery.fancybox-media.js"></script><!-- Fancybox media -->

<!-- Responsive videos -->
<script src="<?=base_url()?>assets/user/js/jquery.fitvids.js"></script>

<!-- Audio player -->
<script src="<?=base_url()?>assets/user/js/audioplayer/audioplayer.min.js"></script>

<!-- Pie charts -->
<script src="<?=base_url()?>assets/user/js/jquery.easy-pie-chart.js"></script>

<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>

<!-- Theme -->
<script src="<?=base_url()?>assets/user/js/theme.js"></script>

</body>

</html>