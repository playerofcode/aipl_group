    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">All Posted Property</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a>
                </li>
                <li class="breadcrumb-item active">All Posted Property
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body">
<!-- Responsive tables start -->
<div class="row">
    <div class="col-xs-12">
       <?php if($this->session->flashdata('msg')): ?>
        <div class="alert alert-success text-center"><?php echo $this->session->flashdata('msg');?></div>
        <?php endif;?>
        <div class="card">
            <div class="card-body collapse in p-2">
                <div class="table-responsive">
                    <table class="table mb-0" id="my_table">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Size</th>
                                <th>Price</th>
                                <th>School</th>
                                <th>Shopping Mall</th>
                                <th>Hospital</th>
                                <th>Restaurant</th>
                                <th>ATM</th>
                                <th>Cinema</th>
                                <th>Park</th>
                                <th>Created At</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($properties as $key): ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><img src="<?php echo base_url().$key->image;?>" style="height: 100px;width:120px;border:1px dashed orange;border-radius: 5px;box-shadow: 0 5px 10px rgba(0, 0, 0,0.3);"></td>
                                <td><?php echo $key->name;?></td>
                                <td><?php echo $key->address;?></td>
                                <td><?php echo $key->size;?></td>
                                <td><?php echo $key->price;?></td>
                                <td><?php echo $key->school." km";?></td>
                                <td><?php echo $key->shopping_mall." km";?></td>
                                <td><?php echo $key->hospital." km";?></td>
                                <td><?php echo $key->restaurant." km";?></td>
                                <td><?php echo $key->atm." km";?></td>
                                <td><?php echo $key->cinema." km";?></td>
                                <td><?php echo $key->park." km";?></td>
                                <td><?php echo $key->created_at;?></td>
                                 <td><a href="<?php echo base_url('admin/editProperty/'.$key->id);?>" class="btn btn-primary btn-sm"><i class="fa icon-edit"></i></a></td>
                                <td><a onclick="return confirm('Are you sure want to delete?');"href="<?php echo base_url('admin/deleteProperty/'.$key->id);?>" class="btn btn-danger btn-sm"><i class="fa icon-trash"></i></a></td>
                            </tr>
                            <?php $i++;endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Responsive tables end -->
        </div>
      </div>
    </div>