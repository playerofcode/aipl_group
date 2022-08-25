    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Add Property</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Add Property
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body">
<div class="row">
    <div class="col-xs-12">
       <?php if($this->session->flashdata('msg')): ?>
        <div class="alert alert-success text-center"><?php echo $this->session->flashdata('msg');?></div>
        <?php endif;?>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Property</h4>
            </div>
            <div class="card-body collapse in p-2">
                <form action="<?php  echo base_url('admin/addProperty');?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Property Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo set_value('name');?>" placeholder="Property Name">
                    <?php echo form_error('name');?>
                  </div>
                  <div class="form-group">
                    <label>Property Address</label>
                    <input type="text" name="address" class="form-control" value="<?php echo set_value('address');?>" placeholder="Address">
                    <?php echo form_error('address');?>
                  </div>
                   <div class="form-group">
                    <label>Property Size (Sq.Ft.)</label>
                    <input type="text" name="size" class="form-control" value="<?php echo set_value('size');?>" placeholder="Size">
                    <?php echo form_error('size');?>
                  </div>
                  <div class="form-group">
                    <label>Property Price(/Sq.Ft.)</label>
                    <input type="text" name="price" class="form-control" value="<?php echo set_value('price');?>" placeholder="Price">
                    <?php echo form_error('price');?>
                  </div>
                  <div class="form-group">
                    <label>Property Image</label>
                    <input type="file" name="image" class="form-control" >
                    <?php if(isset($upload_error)){echo $upload_error; } ?>
                  </div>
                  <div class="form-group">
                    <label>Property Description</label>
                    <textarea name="description"  id="ckeditor"  class="form-control" placeholder="Description goes here.."></textarea>
                    <?php echo form_error('description');?>
                  </div>
                  <div class="form-group">
                    <label>Nearby School Distance</label>
                    <input type="text" name="school" class="form-control" value="<?php echo set_value('school');?>" placeholder="Nearby School Distance">
                    <?php echo form_error('school');?>
                  </div>
                  <div class="form-group">
                    <label>Nearby Shopping Mall Distance</label>
                    <input type="text" name="shopping_mall" class="form-control" value="<?php echo set_value('shopping_mall');?>" placeholder="Nearby Shopping Mall Distance">
                    <?php echo form_error('shopping_mall');?>
                  </div>
                  <div class="form-group">
                    <label>Nearby Hospital Distance</label>
                    <input type="text" name="hospital" class="form-control" value="<?php echo set_value('hospital');?>" placeholder="Nearby Hospital Distance">
                    <?php echo form_error('hospital');?>
                  </div>
                  <div class="form-group">
                    <label>Nearby Restaurant Distance</label>
                    <input type="text" name="restaurant" class="form-control" value="<?php echo set_value('restaurant');?>" placeholder="Nearby Restaurant Distance">
                    <?php echo form_error('restaurant');?>
                  </div>
                  <div class="form-group">
                    <label>Nearby ATM Distance</label>
                    <input type="text" name="atm" class="form-control" value="<?php echo set_value('atm');?>" placeholder="Nearby ATM Distance">
                    <?php echo form_error('atm');?>
                  </div>
                  <div class="form-group">
                    <label>Nearby Cinema Hall Distance</label>
                    <input type="text" name="cinema" class="form-control" value="<?php echo set_value('cinema');?>" placeholder="Nearby Cinema Hall Distance">
                    <?php echo form_error('cinema');?>
                  </div>
                  <div class="form-group">
                    <label>Nearby Park Distance</label>
                    <input type="text" name="park" class="form-control" value="<?php echo set_value('park');?>" placeholder="Nearby Park Distance">
                    <?php echo form_error('park');?>
                  </div>
                  <div class="form-group">
                    <label>Map Link</label>
                    <input type="text" name="map_link" class="form-control" value="<?php echo set_value('map_link');?>" placeholder="Map Link">
                    <?php echo form_error('map_link');?>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Add Property" class="btn btn-success">
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
        </div>
      </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
     <script>
         CKEDITOR.replace( 'ckeditor' );
    </script>