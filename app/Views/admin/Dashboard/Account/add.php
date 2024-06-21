<?php 
  $this->extend('admin/Layout/index');
?>
<?= $this->section('content'); ?>

    
Add Account
<div class="container-fluid">
<div class="row">

<div class="col-md-12">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Add ACCOUNT <small>check account</small></h3>
</div>


<form id="quickForm" method="POST" action="<?= site_url('Admin/Account_internal_add'); ?>">
<div class="card-body">

    <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="username_ad" class="form-control" id="exampleInputEmail1" placeholder="User Name">
    </div>
    
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email_ad" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password_ad" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
    <label for="role">Role</label>
    <select name="role" class="form-control" id="role">
        <option value="admin">Admin</option>
        <option value="employee">Employee</option>
    </select>
    </div>
    <div class="form-group mb-0">
        <div class="custom-control custom-checkbox">
        <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
        <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
        </div>
    </div>

</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>

</div>


<div class="col-md-6">
</div>

</div>

</div>
</section>

</div>




</div>


<?= $this->endSection(); ?>
