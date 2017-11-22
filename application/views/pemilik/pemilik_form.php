  <?php $this->load->view('header') ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Masukkan Data Customer <small></small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
<br>
<form action="<?php echo $Action; ?>" method="post">
<div class="form-group">
    <label>Nama</label>
    <input type="text" placeholder="Masukkan Nama" value="<?php echo $nama_pemilik; ?>" class="form-control" name="nama_pemilik">
</div>
<div class="form-group">
    <label>Alamat</label>
    <input type="text" placeholder="Masukkan Alamat" value="<?php echo $alamat_pemilik; ?>" class="form-control" name="alamat_pemilik">
</div>
<div class="form-group">
    <label>No. HP</label>
    <input type="text" placeholder="Masukkan No. HP" value="<?php echo $nohp; ?>" class="form-control" name="nohp">
</div>
<input type="hidden" name="id_pemilik" value="<?php echo $id_pemilik; ?>">
<button type="submit" class="btn btn-primary"><?php echo $Button; ?></button>
<a href="<?php echo site_url('pemilik'); ?>" class="btn btn-default"> Cancel</a>
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
