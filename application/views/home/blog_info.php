<section class="section-padding bg-dark inner-header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h1 class="mt-0 mb-3">Blog </h1>
<div class="breadcrumbs">
<p class="mb-0"><a href="<?php echo base_url();?>"><i class="mdi mdi-home-outline"></i> Home</a> / Blog </p>
</div>
</div>
</div>
</div>
</section>


<section class="section-padding">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8">
<div class="card blog-card padding-card">
<img class="card-img-top" src="<?php echo base_url().$blog[0]->image;?>" alt="<?php echo $blog[0]->title;?>">
<div class="card-body">
<span class="badge badge-success">AIPL Group</span>
<h2><?php echo $blog[0]->title;?></h2>
<h6 class="mb-3"><i class="mdi mdi-calendar-text"></i> <?php echo date('M d, Y',strtotime($blog[0]->created_at));?> </h6>
<?php echo $blog[0]->description;?>
</div>
</div>
</div>
<div class="col-lg-4 col-md-4">
<div class="card sidebar-card">
<div class="card-body">
<h5 class="card-title mb-4">Blog Search</h5>
<div class="input-group">
<input class="form-control" placeholder="Type and hit enter" aria-label="Recipient's username" aria-describedby="basic-addon2" type="text">
<div class="input-group-append">
<button class="btn btn-outline-secondary" type="button"><i class="mdi mdi-arrow-right"></i></button>
</div>
</div>
</div>
</div>
 <div class="card sidebar-card">
<div class="card-body">
<h5 class="card-title mb-4">Recent Posts</h5>
<?php foreach($recent_blog as $key):?>
<a href="<?php echo base_url('home/blog_info/'.$key->id);?>">
<h6><?php echo $key->title;?></h6>
</a>
<p class="mb-0"><i class="mdi mdi-calendar-text"></i> <?php echo date('M d, Y',strtotime($key->created_at));?></p>
<hr>
<?php endforeach;?>
</div>
</div>
</div>
</div>
</div>
</section>