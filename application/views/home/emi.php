<section class="section-padding  bg-white">
<div class="container">
<div class="row">
<div class="col-md-12">
    <div class="section-title">
<h2 class="mt-1 mb-5">EMI Calculator</h2>
<?php if($this->session->flashdata('msg')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Result!</strong> <?php echo $this->session->flashdata('msg');?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif;?>
</div>
</div>
  <div class="col-md-12">
<form action="<?php echo base_url('home/emi_calculate');?>" method="POST" >

<div class="control-group form-group">
<div class="controls">
<label>Loan Amount <span class="text-danger">*</span></label>
<input type="text" placeholder="Loan Amount" class="form-control" name="p" value="<?php echo set_value('p');?>">
<?php echo form_error('p'); ?>
</div>
</div>
<div class="row">
<div class="control-group form-group col-md-6">
<label>Tenure <span class="text-danger">*</span></label>
<div class="controls">
<input type="number" placeholder="Tenure Yr" class="form-control" name="t"  value="<?php echo set_value('t');?>">
<?php echo form_error('t'); ?>
</div>
</div>
<div class="control-group form-group col-md-6">
<div class="controls">
<label>
Rate of Interest <span class="text-danger">*</span></label>
<input type="number" placeholder="Rate of Interest %" class="form-control" name="r"  value="<?php echo set_value('r');?>">
<?php echo form_error('r'); ?>
</div>
</div>
</div>
<button type="submit" class="btn btn-secondary btn-lg">Calculate Your EMI</button>
</form>
</div>
</div>
</div>
</section>
