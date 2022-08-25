 <section class="section-padding inner-header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h1 class="mt-0 mb-3">Properties</h1>
<div class="breadcrumbs">
<p class="mb-0"><a href="<?php echo base_url();?>"><i class="mdi mdi-home-outline"></i> Home</a> / Properties</p>
</div>
</div>
</div>
</div>
</section>
<section class="section-padding" style="background: #E0EAFC;
background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);
background: linear-gradient(to right, #CFDEF3, #E0EAFC);">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="osahan_top_filter row">
    <h3>Find Your Favorite Property</h1>
</div>
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
</div>
</div>
</div>
</section>