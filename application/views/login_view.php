<?php 

$notif = $this->session->flashdata('notif');
if(notif != NULL) {
    echo '
    <div class= "alert alert-danger">'.notif.'</div>
    ';
}
?>
<form class="form-auth-small" action="<?php echo base_url('index.php/login/cek_login'); ?>" method="post">
<div class="form-group">
    <label for="signin-email" class="control-label sr-only">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
</div>
<div class="form-group">
    <label for="signin-password" class="control-label sr-only">Password</label>
    <input type="password" class="form-control" id="password" name="password" value="" placeholder="">
</div>
<div class="form-group clearfix">
    <label class="fancy-checkbox element-left">
<input type="checkbox" name="" id="">
<span>Remember me</span>
    </label>
</div>
<input type="submit" class="btn btn-primary btn-lg btn-block" value="LOGIN">
</form>