  <?php $this->load->view('header') ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Masukkan Data  User <small></small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
<br>
<form action="<?php echo $Action; ?>" method="post">
<div class="form-group">
	<label>Nama</label>
	<input type="text" placeholder="Masukkan Nama" value="<?php echo $Nama; ?>" class="form-control" name="Nama">
</div>
<div class="form-group">
	<label>Username</label>
	<input type="text" placeholder="Masukkan Username" value="<?php echo $Username; ?>" class="form-control" name="Username">
</div>
<div class="form-group">
	<label>Password</label>
	<input type="password" placeholder="Masukkan Password" value="<?php echo $Password; ?>" class="form-control" name="Password">
</div>
<div class="form-group">
	<label>Jabatan</label>
	<select name="Jabatan"><option value="admin">Admin</option>
	<option value="bos">Bos</option></select>
</div>
<button type="submit" class="btn btn-primary"><?php echo $Button; ?></button>
<a href="<?php echo site_url('user'); ?>" class="btn btn-default"> Cancel</a>
</form>

</div>
<?php 
$this->load->view('footer');
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable();
	});
</script>
