<section class="osahan-slider">
<div id="osahanslider" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#osahanslider" data-slide-to="0" class="active"></li>
<li data-target="#osahanslider" data-slide-to="1"></li>
</ol>
<div class="carousel-inner" role="listbox">
<div class="carousel-item active slider-one">
<div class="overlay"></div>
</div>
<div class="carousel-item slider-two">
<div class="overlay"></div>
</div>
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
<div class="property-single-title">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8">
<h1><?php echo $properties[0]->name; ?></h1>
<h6><i class="mdi mdi-home-map-marker"></i><?php echo $properties[0]->address; ?></h6>
</div>
<div class="col-lg-4 col-md-4 text-right">  
<h2 class="text-primary">&#8377; <?php echo $properties[0]->price; ?><small>/ Sq. Ft.</small></h2>
</div>
</div>
<hr>
<div class="row">
<div class="col-lg-8 col-md-8">
<p class="mt-1 mb-0"><strong>Property ID</strong> : <?php echo $properties[0]->id; ?> &nbsp;&nbsp; <strong>Add to favorites</strong> <i class="mdi mdi-heart text-danger"></i></p>
</div>
<div class="col-lg-4 col-md-4 text-right">
<div class="footer-social">
<span class="text-info">Share :</span> &nbsp;
<a class="btn-facebook" href="#"><i class="mdi mdi-facebook"></i></a>
<a class="btn-twitter" href="#"><i class="mdi mdi-twitter"></i></a>
<a class="btn-instagram" href="#"><i class="mdi mdi-instagram"></i></a>
<a class="btn-whatsapp" href="#"><i class="mdi mdi-whatsapp"></i></a>
<a class="btn-messenger" href="#"><i class="mdi mdi-facebook-messenger"></i></a>
<a class="btn-google" href="#"><i class="mdi mdi-google"></i></a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="section-padding">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8">
<div class="card padding-card">
<div class="card-body">
<h5 class="card-title mb-3">Description</h5>
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="list-icon">
<i class="mdi mdi-move-resize-variant"></i>
<strong>Area:</strong>
<p class="mb-0"><?php echo $properties[0]->size; ?> sq ft</p>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="list-icon">
<i class="mdi mdi-hospital"></i>
<strong>Hospital:</strong>
<p class="mb-0"><?php echo $properties[0]->hospital." km"; ?></p>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="list-icon">
<i class="mdi mdi-school"></i>
<strong>School:</strong>
<p class="mb-0"><?php echo $properties[0]->school." km"; ?></p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="list-icon">
<i class="mdi mdi-cart"></i>
<strong>Shopping Mall:</strong>
<p class="mb-0"><?php echo $properties[0]->shopping_mall." km"; ?></p>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="list-icon">
<i class="mdi mdi-food"></i>
<strong>Restaurant:</strong>
<p class="mb-0"><?php echo $properties[0]->restaurant." km"; ?></p>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="list-icon">
<i class="mdi mdi-credit-card"></i>
<strong>ATM:</strong>
<p class="mb-0"><?php echo $properties[0]->atm." km"; ?></p>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="list-icon">
<i class="mdi mdi-theater"></i>
<strong>Cinema:</strong>
<p class="mb-0"><?php echo $properties[0]->cinema." km"; ?></p>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="list-icon">
<i class="mdi mdi-parking"></i>
<strong>Park:</strong>
<p class="mb-0"><?php echo $properties[0]->park." km"; ?></p>
</div>
</div>
</div>
<?php echo $properties[0]->description; ?>
</div>
</div>
<!-- <div class="card padding-card">
<div class="card-body">
<h5 class="card-title mb-3">Features</h5>
<div class="row">
<div class="col-lg-4 col-md-4">
<ul class="sidebar-card-list">
<li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i> In-room tea and coffee</a></li>
<li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i> Writing desk</a></li>
<li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i> Personal safe</a></li>
<li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i> Minibar</a></li>
<li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i> Refrigerator</a></li>
<li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i> Electronic key card access</a></li>
</ul>
</div>
<div class="col-lg-4 col-md-4">
<ul class="sidebar-card-list">
<li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i> Refrigerator</a></li>
<li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i> Electronic key card access</a></li>
<li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i> In-room tea and coffee</a></li>
<li><a href="#"><i class="mdi mdi-close-box-outline text-danger"></i> Writing desk</a></li>
<li><a href="#"><i class="mdi mdi-close-box-outline text-danger"></i> Personal safe</a></li>
<li><a href="#"><i class="mdi mdi-close-box-outline text-danger"></i> Minibar</a></li>
</ul>
</div>
<div class="col-lg-4 col-md-4">
<ul class="sidebar-card-list">
<li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i> Personal safe</a></li>
<li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i> Minibar</a></li>
<li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i> Refrigerator</a></li>
<li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i> In-room tea and coffee</a></li>
<li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i> Writing desk</a></li>
<li><a href="#"><i class="mdi mdi-checkbox-marked-outline text-success"></i> Electronic key card access</a></li>
</ul>
</div>
</div>
</div>
</div> -->
<!-- <div class="card padding-card">
<div class="card-body">
<h5 class="card-title mb-3">Location</h5>
<div class="row mb-3">
<div class="col-lg-6 col-md-6">
<p><strong class="text-dark">Address :</strong> 1200 Petersham Town</p>
<p><strong class="text-dark">State :</strong> Newcastle</p>
</div>
<div class="col-lg-6 col-md-6">
<p><strong class="text-dark">City :</strong> Sydney</p>
<p><strong class="text-dark">Zip/Postal Code :</strong> 54330</p>
</div>
</div>
</div>
</div> -->
<div class="card padding-card">
<div class="card-body">
<h5 class="card-title mb-4">Video</h5>
<a href="javascript:void(0);"><img class="rounded img-fluid" src="img/video.jpg" alt="Card image cap"></a>
</div>
</div>
<!-- <div class="card padding-card reviews-card">
<div class="card-body">
<h5 class="card-title mb-4">3 Reviews</h5>
<div class="media mb-4">
<img class="d-flex mr-3 rounded-circle" src="img/user/1.jpg" alt="">
<div class="media-body">
<h5 class="mt-0">Stave Martin <small>Feb 12, 2018</small>
<span class="star-rating float-right">
<i class="mdi mdi-star text-warning"></i>
<i class="mdi mdi-star text-warning"></i>
<i class="mdi mdi-star text-warning"></i>
<i class="mdi mdi-star-half text-warning"></i>
<i class="mdi mdi-star-half text-warning"></i><small class="text-success">5/2</small>
</span>
</h5>
<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
</div>
</div>
<div class="media">
<img class="d-flex mr-3 rounded-circle" src="img/user/2.jpg" alt="">
<div class="media-body">
<h5 class="mt-0">Mark Smith <small>Feb 09, 2018</small> <span class="star-rating float-right">
<i class="mdi mdi-star text-warning"></i>
<i class="mdi mdi-star-half text-warning"></i>
<i class="mdi mdi-star-half text-warning"></i>
<i class="mdi mdi-star-half text-warning"></i>
<i class="mdi mdi-star-half text-warning"></i><small class="text-success">5/1</small>
</span>
</h5>
<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
</div>
</div>
<div class="media mt-4">
<img class="d-flex mr-3 rounded-circle" src="img/user/4.jpg" alt="">
<div class="media-body">
<h5 class="mt-0">Stave Mark <small>Feb 12, 2018</small>
<span class="star-rating float-right">
<i class="mdi mdi-star text-warning"></i>
<i class="mdi mdi-star text-warning"></i>
<i class="mdi mdi-star text-warning"></i>
<i class="mdi mdi-star-half text-warning"></i>
<i class="mdi mdi-star-half text-warning"></i><small class="text-success">5/2</small>
</span>
</h5>
<p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
</div>
</div>
</div>
</div> -->
<!-- <div class="card padding-card">
<div class="card-body">
<h5 class="card-title mb-4">Leave a Review</h5>
<form name="sentMessage">
<div class="row">
<div class="control-group form-group col-lg-4 col-md-4">
<div class="controls">
<label>Your Name <span class="text-danger">*</span></label>
<input type="text" class="form-control" required>
</div>
</div>
<div class="control-group form-group col-lg-4 col-md-4">
<div class="controls">
<label>Your Email <span class="text-danger">*</span></label>
<input type="email" class="form-control" required>
</div>
</div>
<div class="control-group form-group col-lg-4 col-md-4">
<div class="controls">
<label>Rating <span class="text-danger">*</span></label>
<select class="form-control custom-select">
<option>1 Star</option>
<option>2 Star</option>
<option>3 Star</option>
<option>4 Star</option>
<option>5 Star</option>
</select>
</div>
</div>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Review <span class="text-danger">*</span></label>
<textarea rows="10" cols="100" class="form-control"></textarea>
</div>
</div>
<button type="submit" class="btn btn-secondary btn-lg">Review Now</button>
</form>
</div>
</div> -->
</div>
<div class="col-lg-4 col-md-4">
<!-- <div class="card sidebar-card">
<div class="card-body">
<h5 class="card-title mb-4">About Agent</h5>
<div class="about-agent">
<div class="carousel-inner">
<div class="carousel-item active">
<div class="card card-list">
<a href="#">
<img class="card-img-top" src="img/agent.jpg" alt="Card image cap">
<div class="card-body pb-0">
<h5 class="card-title mb-4">Gurdeep Osahan</h5>
<h6 class="card-subtitle mb-3 text-muted"><i class="mdi mdi-phone"></i> (950) 491-570-180</h6>
<h6 class="card-subtitle mb-3 text-muted"><i class="mdi mdi-email"></i> <span class="__cf_email__" data-cfemail="73000603031c010733160b121e031f165d101c1e">[email&#160;protected]</span></h6>
<h6 class="card-subtitle text-muted"><i class="mdi mdi-link"></i> www.askbootstrap.com</h6>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</div> -->
<div class="card sidebar-card">
<div class="card-body">
<h5 class="card-title mb-4">Request a Showing</h5>
<form name="sentMessage">
<div class="control-group form-group">
<div class="controls">
<label>Your Name <span class="text-danger">*</span></label>
<input type="text" placeholder="Enter Your Name" class="form-control" required>
</div>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Your Email <span class="text-danger">*</span></label>
<input type="text" placeholder="Enter Your Email" class="form-control" required>
</div>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Phone <span class="text-danger">*</span></label>
<input type="text" placeholder="Enter Phone Number" class="form-control" required>
</div>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Message <span class="text-danger">*</span></label>
<textarea rows="5" cols="50" class="form-control"></textarea>
</div>
</div>
<button type="submit" class="btn btn-secondary btn-lg btn-block">SEND REQUEST</button>
</form>
</div>
</div>
<!-- <div class="card sidebar-card">
<div class="card-body">
<h5 class="card-title mb-4">Featured Properties</h5>
<div id="featured-properties" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#featured-properties" data-slide-to="0" class="active"></li>
<li data-target="#featured-properties" data-slide-to="1"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<div class="card card-list">
<a href="#">
<div class="card-img">
<div class="love-badge text-danger"><i class="mdi mdi-heart-outline"></i></div>
<div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 03</div>
<span class="badge badge-success">For Sale</span>
<img class="card-img-top" src="img/list/3.png" alt="Card image cap">
</div>
<div class="card-body">
<h2 class="text-primary mb-2 mt-0">
$55,000 <small>/month</small>
</h2>
<h5 class="card-title mb-2">Loft Above The City</h5>
<h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> Hope Street (Stop P), London SW11, UK</h6>
</div>
<div class="card-footer">
<span><i class="mdi mdi-sofa"></i> Beds : <strong>2</strong></span>
<span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>1</strong></span>
<span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>100 sq ft</strong></span>
</div>
</a>
</div>
</div>
<div class="carousel-item">
<div class="card card-list">
<a href="#">
<div class="card-img">
<div class="love-badge text-danger"><i class="mdi mdi-heart-outline"></i></div>
<div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 03</div>
<span class="badge badge-success">For Sale</span>
<img class="card-img-top" src="img/list/3.png" alt="Card image cap">
</div>
<div class="card-body">
<h2 class="text-primary mb-2 mt-0">
$55,000 <small>/month</small>
</h2>
<h5 class="card-title mb-2">Loft Above The City</h5>
<h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> Hope Street (Stop P), London SW11, UK</h6>
</div>
<div class="card-footer">
<span><i class="mdi mdi-sofa"></i> Beds : <strong>2</strong></span>
<span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>1</strong></span>
<span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>100 sq ft</strong></span>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
</div> -->
<!-- <div class="card sidebar-card">
<div class="card-body">
<h5 class="card-title mb-4">Mortage Calculator</h5>
<form name="sentMessage">
<div class="control-group form-group">
<div class="controls">
<label>Sale Price <span class="text-danger">*</span></label>
<input type="text" placeholder="$" class="form-control" required>
</div>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Down payment <span class="text-danger">*</span></label>
<input type="text" placeholder="$" class="form-control" required>
</div>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Term <span class="text-danger">*</span></label>
<input type="text" placeholder="Years" class="form-control" required>
</div>
</div>
 <div class="control-group form-group">
<div class="controls">
<label>Interest Rate <span class="text-danger">*</span></label>
<input type="text" placeholder="%" class="form-control" required>
</div>
</div>
<button type="submit" class="btn btn-secondary btn-lg btn-block">CALCULATE</button>
</form>
</div>
</div> -->
</div>
</div>
</div>
</section>


<!-- <section class="section-padding  border-top">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 section-title text-left mb-4">
<h2>Similar Properties</h2>
</div>
<div class="col-lg-4 col-md-4">
<div class="card card-list">
<a href="#">
<div class="card-img">
<div class="love-badge text-danger"><i class="mdi mdi-heart"></i></div>
<div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 12</div>
<span class="badge badge-primary">For Sale</span>
<img class="card-img-top" src="img/list/1.png" alt="Card image cap">
</div>
<div class="card-body">
<h2 class="text-primary mb-2 mt-0">
$130,000 <small>/Per Month</small>
</h2>
<h5 class="card-title mb-2">House in Kent Street</h5>
<h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> 127 Kent Sreet, Sydny, NEW 2000</h6>
</div>
<div class="card-footer">
<span><i class="mdi mdi-sofa"></i> Beds : <strong>3</strong></span>
<span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>2</strong></span>
<span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>587 sq ft</strong></span>
</div>
</a>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="card card-list">
<a href="#">
<div class="card-img">
<div class="love-badge text-danger"><i class="mdi mdi-heart"></i></div>
<div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 60</div>
<span class="badge badge-secondary">For Rent</span>
<img class="card-img-top" src="img/list/2.png" alt="Card image cap">
</div>
<div class="card-body">
<h2 class="text-primary mb-2 mt-0">
$127,000 <small>/month</small>
</h2>
<h5 class="card-title mb-2">Family House in Hudson</h5>
<h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> Hoboken, NJ, USA</h6>
</div>
<div class="card-footer">
<span><i class="mdi mdi-sofa"></i> Beds : <strong>5</strong></span>
<span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>3</strong></span>
<span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>300 sq ft</strong></span>
</div>
</a>
</div>
</div>
<div class="col-lg-4 col-md-4">
 <div class="card card-list">
<a href="#">
<div class="card-img">
<div class="love-badge text-danger"><i class="mdi mdi-heart-outline"></i></div>
<div class="badge images-badge"><i class="mdi mdi-image-filter"></i> 03</div>
<span class="badge badge-success">For Sale</span>
<img class="card-img-top" src="img/list/3.png" alt="Card image cap">
</div>
<div class="card-body">
<h2 class="text-primary mb-2 mt-0">
$55,000 <small>/month</small>
</h2>
<h5 class="card-title mb-2">Loft Above The City</h5>
<h6 class="card-subtitle mt-1 mb-0 text-muted"><i class="mdi mdi-home-map-marker"></i> Hope Street (Stop P), London SW11, UK</h6>
</div>
<div class="card-footer">
<span><i class="mdi mdi-sofa"></i> Beds : <strong>2</strong></span>
<span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>1</strong></span>
<span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>100 sq ft</strong></span>
</div>
</a>
</div>
</div>
</div>
</div>
</section> -->