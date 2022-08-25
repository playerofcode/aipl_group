<section class="osahan-slider">
<div id="osahanslider" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#osahanslider" data-slide-to="0" class="active"></li>
<li data-target="#osahanslider" data-slide-to="1"></li>
<li data-target="#osahanslider" data-slide-to="2"></li>
</ol>
<div class="carousel-inner" role="listbox">
<div class="carousel-item active slider-one">
<!-- <div class="overlay"></div> -->
</div>
<div class="carousel-item slider-two"></div>
<div class="carousel-item slider-three"></div>
</div>
<a class="carousel-control-prev" href="#osahanslider" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#osahanslider" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</section>
            <marquee onmouseover="stop()" onmouseout="start()" style="height: 50px;background: #ED213A;
background: -webkit-linear-gradient(to right, #93291E, #ED213A);
background: linear-gradient(to right, #93291E, #ED213A);line-height: 50px;color:#fff;font-size: 18px;">AIPL GROUP is a vibrant and dynamic realty company offers "DREAM TOWN" at KISANPATH, LUCKNOW... !!!HURRYUP !!! Booking Open... LIMITED PLOTS AVAILABLE. </marquee>
<section class="section-padding">
<div class="section-title text-center mb-5">
<h2>Latest Properties</h2>
<p><?php echo APP_NAME;?> latest properties</p>
</div>
<div class="container">
<div class="row">
<?php foreach ($properties as $key): ?>
<div class="col-lg-4 col-md-4">
<div class="card card-list">
<a href="<?php echo base_url('home/property_info/'.$key->id);?>">
<div class="card-img">
<div class="love-badge text-danger"><i class="mdi mdi-heart"></i></div>
<!-- <div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 12</div> -->
<img class="card-img-top" src="<?php echo base_url().$key->image; ?>" alt="<?php echo $key->name; ?>" style="height: 245px;">
</div>
<div class="card-body">
<h2 class="text-primary mb-2 mt-0">
&#8377; <?php echo $key->price; ?> <small>/ Sq. Ft.</small>
</h2>
<h5 class="card-title mb-2"><?php echo $key->name; ?> </h5>
<h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> <?php echo $key->address; ?></h6>
</div>
<div class="card-footer">
<span><i class="mdi mdi-hospital"></i> Hospital : <strong><?php echo $key->hospital." km"; ?> </strong></span>
<span><i class="mdi mdi-move-resize-variant"></i> Area : <strong><?php echo $key->size; ?> sq ft</strong></span>
</div>
</a>
</div>
</div>
<?php endforeach ?>
</div>
<div class="row mt-4">
<div class="col-md-12 text-center">
<a href="<?php echo base_url('properties');?>" class="btn btn-secondary font-weight-bold btn-lg" type="submit">VIEW ALL</a>
</div>
</div>
</div>
</section>


<section class="section-padding bg-white">
<div class="section-title text-center mb-5">
<h2>Property By Location</h2>
</div>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8">
<div class="card bg-dark text-white card-overlay">
<a href="javascript:void(0)">
<img class="card-img" src="img/kisan_path.jpg" alt="Card image">
<div class="card-img-overlay">
<h3 class="card-title text-white">Kisan Path</h3>
<p class="card-text text-white">7 Properties</p>
</div>
</a>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="card bg-dark text-white card-overlay">
<a href="javascript:void(0)">
<img class="card-img" src="img/golf_city.jpg" alt="Card image">
<div class="card-img-overlay">
<h3 class="card-title text-white">Sushant Golf City Outer Ring Road</h3>
<p class="card-text text-white">15 Properties</p>
</div>
</a>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="card bg-dark text-white card-overlay">
<a href="javascript:void(0)">
<img class="card-img" src="img/ashiyama.webp" alt="Card image">
<div class="card-img-overlay">
<h3 class="card-title text-white">Ashiyana</h3>
<p class="card-text text-white">10 Properties</p>
</div>
</a>
.
</div>
</div>
<div class="col-lg-8 col-md-8">
<div class="card bg-dark text-white card-overlay">
<a href="javascript:void(0)">
<img class="card-img" src="img/raebarely.jpg" alt="Card image">
<div class="card-img-overlay">
<h3 class="card-title text-white">Raebarely Road</h3>
<p class="card-text text-white">8 Properties</p>
</div>
</a>
</div>
</div>
</div>
</div>
</section>

<style>
    
</style>
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


<section class="section-padding border-top">
<div class="section-title text-center mb-5">
<h2>Blogs We Wrote For You</h2>
<p><?php echo APP_NAME;?> latest blog</p>
</div>
<div class="container">
<div class="row">
<?php foreach ($recent_blog as $key): ?>
<div class="col-lg-4 col-md-4">
<div class="card blog-card">
<a href="<?php echo base_url('home/blog_info/'.$key->id);?>">
<img class="card-img-top" src="<?php echo base_url($key->image);?>" alt="<?php echo $key->title;?>" style=";">
<div class="card-body">
<span class="badge badge-success">AIPL Group</span>
<h6><?php echo $key->title;?></h6>
<!-- <p class="mb-0"><?php echo word_limiter($key->description,10);?></p> -->
</div>
<div class="card-footer">
<p class="mb-0"><i class="mdi mdi-calendar"></i> <strong>Posted </strong> On <?php echo date('M d, Y',strtotime($key->created_at));?></p>
</div>
</a>
</div>
</div>
<?php endforeach; ?>
</div>
</div>
</section>