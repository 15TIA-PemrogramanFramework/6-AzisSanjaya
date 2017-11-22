  <?php $this->load->view('header') ?>
  <!-- /. NAV SIDE  -->
  <div id="page-wrapper">
    <div id="page-inner">


        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Masukkan Data Service <small></small>
                </h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <br>
        <form action="<?php echo $Action; ?>" method="post">
            <div class="form-group">
               <label>No Plat Mobil</label>5
               <select name="id_mobil" class="form-control show-tick">
                <?php foreach ($mobil as $key => $value) { ?>
                <option value="<?php echo $value->id_mobil; ?>"><?php echo $value->noplat;?></option>
                <?php } ?>
            </select>
        </div>
       <div class="form-group">
           <label>Sparepart</label>
           <select name="id_sparepart" class="form-control show-tick">
                <?php foreach ($sparepart as $key => $value) { ?>
                <option value="<?php echo $value->id_sparepart; ?>"><?php echo $value->nama_sparepart;?></option>
                <?php } ?>
            </select>
       </div>
       <input type="hidden" name="id_service" value="<?php echo $id_service; ?>">
       <button type="submit" class="btn btn-primary"><?php echo $Button; ?></button>
       <a href="<?php echo site_url('mobil'); ?>" class="btn btn-default"> Cancel</a>
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
