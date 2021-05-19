<br />
<div class="row">
    <div class="col-lg-4">
        
    </div>
     <div class="col-lg-4">
        <form action="<?= base_url(); ?>login/doLogin" method="post">
    <h2>Login Page</h2>
    <hr />
    <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-warning">
            <?= $this->session->flashdata('msg'); ?>
        </div>
    <?php } ?>
    <div class="form-group">
        <label for="email">Username:</label>
        <input type="email" name="email" required class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="password" required class="form-control" id="pwd">
        <a href="<?php echo base_url(); ?>Reset_Pass/resetpass">Forgot Password</a>
    </div>
   
    
    <button type="submit" class="btn btn-default">Login</button>
   
    <span class="float-right"><a href="<?= base_url() . 'register'; ?>" class="btn btn-primary">Register</a></span>
</form>
    </div>
     <div class="col-lg-4">
        
    </div>
</div>

