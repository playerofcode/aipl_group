    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Student List</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a>
                </li>
                <li class="breadcrumb-item active">Student List
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone No</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Pincode</th>
                                <th>DOB</th>
                                <th>Facebook</th>
                                <th>Instagram</th>
                                <th>Twitter</th>
                                <th>Linkedin</th>
                                <th>Password</th>
                                <th>Created At</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach ($student as $key): ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $key->name;?></td>
                                <td><?php echo $key->email;?></td>
                                <td><?php echo $key->mobno;?></td>
                                <td><?php echo $key->address;?></td>
                                <td><?php echo $key->city;?></td>
                                <td><?php echo $key->state;?></td>
                                <td><?php echo $key->pincode;?></td>
                                <td><?php echo $key->dob;?></td>
                                <td><?php echo $key->facebook;?></td>
                                <td><?php echo $key->instagram;?></td>
                                <td><?php echo $key->twitter;?></td>
                                <td><?php echo $key->linkedin;?></td>
                                <td><?php echo $key->password;?></td>
                                <td><?php echo $key->created_at;?></td>
                                <td><a href="<?php echo base_url('admin/editStudent/'.$key->id);?>" class="btn btn-primary btn-sm"><i class="fa icon-edit"></i></a></td>
                                <td><a onclick="return confirm('Are you sure want to delete?');"href="<?php echo base_url('admin/deleteStudent/'.$key->id);?>" class="btn btn-danger btn-sm"><i class="fa icon-trash"></i></a></td>
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

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Contact</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/addContact');?>" method="post">
            <div class="form-group">
               <input type="text" name="name" class="form-control" placeholder="Enter Contact Name" required="">
            </div>
            <div class="form-group">
               <input type="tel" name="mobno" class="form-control" placeholder="Enter Contact Number" required="">
            </div>
      </div>
      <div class="modal-footer">
        <input type="submit" value="Add Contact" class="btn btn-success">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>

  </div>
</div>