<section class="section-padding bg-white text-center" style="background: #ED213A;
background: -webkit-linear-gradient(to right, #93291E, #ED213A);
background: linear-gradient(to right, #93291E, #ED213A);
">
<h2 class="mt-0 text-white">Find Your Dream Home</h2>
<a href="<?php echo base_url('properties'); ?>" class="btn btn-primary text-white" style="box-shadow:0 5px 10px rgba(0, 0, 0,0.3);">View Property</a>
<a href="<?php echo base_url('contact-us'); ?>" class="btn btn-secondary" style="box-shadow:0 5px 10px rgba(0, 0, 0,0.3);">Contact Us</a> 
</section>
<section class="section-padding footer bg-white border-top" style="background: #8A2387;
background: -webkit-linear-gradient(to right, #F27121, #E94057, #8A2387);
background: linear-gradient(to right, #F27121, #E94057, #8A2387);
">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3">
<h4 class="mb-5 mt-0"><a class="logo" href="<?php echo base_url();?>"><img src="img/logo.png" alt="<?php echo APP_NAME;?>"></a></h4>
<p class="text-white"><?php echo ADDRESS;?></p>
<p class="mb-0"><a class="text-white" href="tel:<?php echo MOBNO;?>"><?php echo MOBNO;?></a></p>
<p class="mb-0"><a class="text-white" href="mailto:<?php echo EMAIL;?>"><span class="__cf_email__"><?php echo EMAIL;?></span></a></p>
</div>
<!-- <div class="col-lg-2 col-md-2">
<h6 class="mb-4">OUR PROPERTIES</h6>
<ul>
<li><a href="javascript:void(0);">Dream Town</a></li>
<li><a href="javascript:void(0);">Dream Farms</a></li>
<li><a href="javascript:void(0);">Dream Plot</a></li>
<li><a href="javascript:void(0);">Resort</a></li>
<li><a href="javascript:void(0);">Home in Lucknow</a></li>
<ul>
</div> -->
<div class="col-lg-4 col-md-4">
<h6 class="mb-4">Our Properties</h6>
<ul>
<li><a href="javascript:void(0);">Raebarely Road in Lucknow</a></li>
<li><a href="javascript:void(0);">Sultanpur Road in Lucknow</a></li>
<li><a href="javascript:void(0);">Barabanki Road in Lucknow</a></li>
<li><a href="javascript:void(0);">Ashiyana in Lucknow</a></li>
<li><a href="javascript:void(0);">Kisan Path in Lucknow</a></li>
<ul>
</div>
<div class="col-lg-2 col-md-2">
<h6 class="mb-4">ABOUT Us</h6>
<ul>
<li><a href="javascript:void(0);">Company Information</a></li>
<li><a href="javascript:void(0);">Careers</a></li>
<li><a href="javascript:void(0);">Privacy Policy</a></li>
<li><a href="javascript:void(0);">Terms & Conditions</a></li>
<li><a href="javascript:void(0);">Copyright</a></li>
<ul>
</div>
<div class="col-lg-3 col-md-3">
<h6 class="mb-4">NEWSLETTER</h6>
<div class="input-group">
<input type="text" class="form-control" placeholder="Email Address..." aria-label="Recipient's username" aria-describedby="basic-addon2">
<div class="input-group-append" >
<button class="btn btn-secondary" type="button" style="box-shadow: none;"><i class="mdi mdi-arrow-right"></i></button>
</div>
</div>
<a class="logo" href="<?php echo base_url('assets/brocure.pdf');?>"><img src="img/broucher.png" alt="<?php echo APP_NAME;?>" style="height: 50px;margin-top:10px;"></a>
<h6 class="mb-3 mt-4">GET IN TOUCH</h6>
<div class="footer-social">
<a class="btn-facebook" href="#"><i class="mdi mdi-facebook"></i></a>
<a class="btn-twitter" href="#"><i class="mdi mdi-twitter"></i></a>
<a class="btn-instagram" href="https://www.instagram.com/aipl_group/"><i class="mdi mdi-instagram"></i></a>
<a class="btn-whatsapp" href="#"><i class="mdi mdi-whatsapp"></i></a>
</div>
</div>
</div>
</div>
</section>


<section class="pt-4 pb-4 text-center" style="background:#ff5722;">
<p class="mt-0 mb-0 text-white">© Copyright 2022 <strong class=""><?php echo APP_NAME;?></strong>. All Rights Reserved</p>
<small class="mt-0 mb-0 text-white">
Developed by <a class="text-white" target="_blank" href="https://www.chatresh.com">Chatresh Technologies</a>
</small>
</section>


</script><script src="vendor/jquery/jquery.min.js" type="6abe5c5bd17217409af08e51-text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>
	$(document).ready(function(){
		$('.galleries').magnificPopup({
			type:'image',
			delegate:'a',
			gallery:{
				enabled:true
			}
		});
	});
</script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="6abe5c5bd17217409af08e51-text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
	$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
  	loop:true,
    margin:10,
    center: true,
    nav:false,
    autoplay: true,
	
    responsive:{
       0: {
        items: 1
      },
      768: {
        items: 2
      },
      1170: {
        items: 3
      }
    }
  });
});
</script>

<script src="js/jqBootstrapValidation.js" type="6abe5c5bd17217409af08e51-text/javascript"></script>
<script src="js/contact_me.js" type="6abe5c5bd17217409af08e51-text/javascript"></script>

<script src="vendor/select2/js/select2.min.js" type="6abe5c5bd17217409af08e51-text/javascript"></script>

<script src="js/custom.js" type="6abe5c5bd17217409af08e51-text/javascript"></script>
<script src="js/rocket-loader.min.js" data-cf-settings="6abe5c5bd17217409af08e51-|49" defer="">
</script>

</body>
</html>