<section class="section-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14237.11648097276!2d81.0016428!3d26.8628717!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x99bcf1358c365fdc!2sChatresh%20Technologies%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1653124226093!5m2!1sen!2sin" width="100%" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>


<section class="section-padding  bg-white">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="section-title">
<h2 class="mt-1 mb-5">Get In Touch</h2>
</div>
<h6 class="text-dark"><i class="mdi mdi-home-map-marker"></i> Address :</h6>
<p><?php echo ADDRESS;?></p>
<h6 class="text-dark"><i class="mdi mdi-deskphone"></i> Mobile :</h6>
<p><?php echo MOBNO;?></p>
<h6 class="text-dark"><i class="mdi mdi-email"></i> Email :</h6>
<p><a href="mailto:<?php echo EMAIL;?>" class="__cf_email__"><?php echo EMAIL;?></a></p>
<h6 class="text-dark"><i class="mdi mdi-link"></i> Website :</h6>
<p><?php echo base_url();?></p>
</div>

<form action="<?php echo base_url('home/enquiry');?>" method="POST" class="col-lg-8 col-md-8" name="sentMessage">
<div class="section-title">
<h2 class="mt-1 mb-5">Contact Us</h2>
<?php if($this->session->flashdata('msg')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Message!</strong> <?php echo $this->session->flashdata('msg');?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif;?>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Full Name <span class="text-danger">*</span></label>
<input type="text" placeholder="Full Name" class="form-control" name="name" value="<?php echo set_value('name');?>">
<?php echo form_error('name'); ?>
</div>
</div>
<div class="row">
<div class="control-group form-group col-md-6">
<label>Phone Number <span class="text-danger">*</span></label>
<div class="controls">
<input type="tel" placeholder="Phone Number" class="form-control" name="phone"  value="<?php echo set_value('phone');?>">
<?php echo form_error('phone'); ?>
</div>
</div>
<div class="control-group form-group col-md-6">
<div class="controls">
<label>Email Address <span class="text-danger">*</span></label>
<input type="text" placeholder="Email Address" class="form-control" name="email"  value="<?php echo set_value('email');?>">
<?php echo form_error('email'); ?>
</div>
</div>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Message <span class="text-danger">*</span></label>
<textarea rows="4" cols="100" placeholder="Message" class="form-control" name="message" required data-validation-required-message="Please enter your message" maxlength="999"> <?php echo set_value('message');?></textarea>
<?php echo form_error('message'); ?>
</div>
</div>

<button type="submit" class="btn btn-secondary btn-lg">Send Message</button>
</form>
</div>
</div>
</section>
