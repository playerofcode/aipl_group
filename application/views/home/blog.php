<section class="section-padding bg-dark inner-header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h1 class="mt-0 mb-3">Blog</h1>
<div class="breadcrumbs">
<p class="mb-0"><a href="<?php echo base_url();?>"><i class="mdi mdi-home-outline"></i> Home</a> / Blog</p>
</div>
</div>
</div>
</div>
</section>


<section class="section-padding">
<div class="container">
<div class="row">
	<?php foreach ($blog as $key): ?>
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