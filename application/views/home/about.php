<section class="section-padding inner-header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h1 class="mt-0 mb-3">About Us</h1>
<div class="breadcrumbs">
<p class="mb-0"><a href="<?php echo base_url();?>"><i class="mdi mdi-home-outline"></i> Home</a> / About Us</p>
</div>
</div>
</div>
</div>
</section>
<section class="section-padding bg-white">
<div class="container">
<div class="row">
<div class="pl-4 col-lg-5 col-md-5 pr-4">
<img class="rounded img-fluid" src="img/about.jpeg" alt="Card image cap">
</div>
<div class="col-lg-6 col-md-6 pl-5 pr-5">
<h2 class="mb-1">WELCOME TO <?php echo APP_NAME;?></h2>
<p class="text-justify">AIPL GROUP (Atharva Heights Infraestate pvt. ltd.) began the operation in 2015 from the City of Nawab-Lucknow, Uttar Pradesh, India. Since the we are carrying out various residential and commercial projects to cater the needs and requirements of people at affordable rates along with excellent quantity. The upcoming government projects are going to give a new dimension to the City of Nawab Lucknow.</p>
<h5 class="mt-2 text-dark">Our Mission</h5>
<p class="text-justify">It aims to develop 'integrated master planned communities' which comprise residential projects along with one or more community facilities, including retail and commercial developments, schools and hospitals, enabling a "live, work, play" theme within the same development.</p>

<h5 class="mt-4 text-dark">Our Vision</h5>
<p class="text-justify">The Company's mission as a real estate company is to develop and deliver unique, integrated lifestyle and work place environments through its focus on high quality architecture, strong project execution and our customer-centric approach.</p>
</div>
</div>
</div>
</section>


<section class="section-padding" style="background: #E0EAFC;
background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);
background: linear-gradient(to right, #CFDEF3, #E0EAFC);">
<div class="section-title text-center mb-5">
<h2>What We Provide?</h2>
</div>
<div class="container">
<div class="row text-center">
<div class="col-lg-4 col-md-4">
<div class="mt-4 mb-4"><i class="round-icon text-secondary mdi mdi-sticker-emoji mdi-48px"></i></div>
<h5 class="mt-3 mb-3">PLOTS</h5>
</div>
<div class="col-lg-4 col-md-4">
<div class="mt-4 mb-4"><i class="round-icon text-secondary mdi mdi-sticker-emoji mdi-48px"></i></div>
<h5 class="mb-3">APARTMENTS</h5>
</div>
<div class="col-lg-4 col-md-4">
<div class="mt-4 mb-4"><i class="round-icon text-secondary mdi mdi-sticker-emoji mdi-48px"></i></div>
<h5 class="mt-3 mb-3">ROW HOUSES</h5>
</div>
</div>
</div>
</section>


<section class="section-padding">
<div class="section-title text-center mb-5">
<h2>PEOPLE SAYS</h2>
<p><?php echo APP_NAME;?></p>
</div>
<div class="container">
<div class="row owl-carousel">
<?php foreach ($testimonial as $key): ?>
<div class="item">
<div class="agents-card text-center">
<img class="img-fluid mb-4" src="<?php echo base_url().$key->image; ?>" alt="">
<p class="mb-4"><?php echo $key->description; ?></p>
<h6 class="mb-0 text-primary">- <?php echo $key->name; ?>
 <span class="star-rating">
<i class="mdi mdi-star text-warning"></i>
<i class="mdi mdi-star text-warning"></i>
<i class="mdi mdi-star text-warning"></i>
<i class="mdi mdi-star text-warning"></i>
<i class="mdi mdi-star-half text-warning"></i>
</span>
</h6>
<small><?php echo $key->designation; ?></small>
</div>
</div>
 <?php endforeach ?>
</div>
</div>
</section>