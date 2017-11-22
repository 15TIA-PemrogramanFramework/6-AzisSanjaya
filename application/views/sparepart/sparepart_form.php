  <?php $this->load->view('header') ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Masukkan Data Sparepart <small></small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
<br>
<form action="<?php echo $Action; ?>" method="post">
<div class="form-group">
    <label>Nama SparePart</label>
    <input type="text" placeholder="Masukkan Nama SparePart" value="<?php echo $nama_sparepart; ?>" class="form-control" name="nama_sparepart">
</div>
<div class="form-group">
    <label>Harga</label>
    <input type="text" placeholder="Masukkan Harga" value="<?php echo $harga; ?>" class="form-control" name="harga">
</div>
<input type="hidden" name="id_sparepart" value="<?php echo $id_sparepart; ?>">
<button type="submit" class="btn btn-primary"><?php echo $Button; ?></button>
<a href="<?php echo site_url('sparepart'); ?>" class="btn btn-default"> Cancel</a>
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
