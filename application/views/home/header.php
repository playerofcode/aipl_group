<!DOCTYPE html>
<html lang="en">
<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120909275-1" type="6abe5c5bd17217409af08e51-text/javascript"></script>
<script type="6abe5c5bd17217409af08e51-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120909275-1');
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Askbootstrap">
<meta name="author" content="Askbootstrap">
<base href="<?php echo base_url('assets/');?>"/>
<title><?php echo APP_NAME;?></title>
<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/fevicon.jpg');?>">

<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="vendor/icons/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />

<link href="vendor/select2/css/select2-bootstrap.css" />
<link href="vendor/select2/css/select2.min.css" rel="stylesheet" />

<link href="css/osahan.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="navbar-top bg-primary"  style="background: #ED213A;
background: -webkit-linear-gradient(to right, #93291E, #ED213A);
background: linear-gradient(to right, #93291E, #ED213A);
">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4">
<p>
Welcome To <strong><?php echo APP_NAME;?></strong>
</p>
</div>
<div class="col-lg-8 col-md-8 text-right">
<ul class="list-inline">
<li class="list-inline-item">
<a href="mailto:<?php echo EMAIL;?>"><i class="mdi mdi-email-outline"></i> <span class="__cf_email__"><?php echo EMAIL;?></span></a>
</li>
<li class="list-inline-item">
<a href="tel:<?php echo MOBNO;?>"><i class="mdi mdi-phone"></i> <?php echo MOBNO;?></a>
</li>
<li class="list-inline-item">
<a href="<?php echo base_url('contact-us');?>"><i class="mdi mdi-headphones"></i> Contact Us</a>
</li>
<li class="list-inline-item">
<span>Download App</span> &nbsp;
<a href="javascript:void(0);"><i class="mdi mdi-apple"></i></a>
<a href="javascript:void(0);"><i class="mdi mdi-android"></i></a>
</li>
</ul>
</div>
</div>
</div>
</div>


<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
<a class="navbar-brand text-success logo" href="<?php echo base_url();?>">
<img src="img/logo.png" alt="<?php echo APP_NAME;?>">
</a>
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav mr-auto mt-2 mt-lg-0 margin-auto">
<li class="nav-item ">
<a class="nav-link" href="<?php echo base_url();?>">
HOME
</a>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Profile
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
<a class="dropdown-item" href="<?php echo base_url('about-us');?>">Company Profile</a>
<a class="dropdown-item" href="<?php echo base_url('cmd-message');?>">CMD Message</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Gallery
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
<a class="dropdown-item" href="<?php echo base_url('home/gallery');?>">Gallery</a>
<a class="dropdown-item" href="<?php echo base_url('home/media');?>">Media</a>
</div>
</li>
<li class="nav-item ">
<a class="nav-link" href="<?php echo base_url('properties');?>">Properties</a></li>
<li class="nav-item ">
<a class="nav-link" href="<?php echo base_url('our-blog');?>">Blog</a></li>
<li class="nav-item ">
<a class="nav-link" href="<?php echo base_url('contact-us');?>">Contact</a></li>
</ul>
<div class="my-2 my-lg-0">
<ul class="list-inline main-nav-right">
<li class="list-inline-item">
<a class="btn btn btn-outline-primary btn-sm" href="<?php echo base_url('emi-calculator');?>"><i class="mdi mdi-calculator"></i> EMI Calculator</a>
</li>
</ul>
</div>
</div>
</div>
</nav>
</header>