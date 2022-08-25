<section class="section-padding inner-header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h1 class="mt-0 mb-3">Media</h1>
<div class="breadcrumbs">
<p class="mb-0"><a href="<?php echo base_url();?>"><i class="mdi mdi-home-outline"></i> Home</a> / Media</p>
</div>
</div>
</div>
</div>
</section>
<section class="section-padding" style="background: #E0EAFC;
background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);
background: linear-gradient(to right, #CFDEF3, #E0EAFC);">
<div class="container">
<div class="row galleries">
<?php foreach ($image as $key): ?>
<div class="col-lg-4 col-md-4">
<div class="card card-list">
<a href="<?php echo base_url($key->image);?>">
<img class="card-img-top" src="<?php echo base_url($key->image);?>" alt="AIPL Group" style="height: 240px;">
</a>
</div>
</div>
<?php endforeach ?>
</div>
</div>
</div>
</section>