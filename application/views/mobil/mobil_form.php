  <?php $this->load->view('header') ?>
  <!-- /. NAV SIDE  -->
  <div id="page-wrapper">
    <div id="page-inner">


        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Masukkan Data Mobil <small></small>
                </h1>
            </div>
        </div>
        <!-- /. ROW  -->
        <br>
        <form action="<?php echo $Action; ?>" method="post">
            <div class="form-group">
               <label>Nama Pemilik</label>
               <select name="id_pemilik" class="form-control show-tick">
                <?php foreach ($pemilik as $key => $value) { ?>
                <option value="<?php echo $value->id_pemilik; ?>"><?php echo $value->nama_pemilik;?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
           <label>Merek</label>
           <input type="text" placeholder="Masukkan merek" value="<?php echo $merek; ?>" class="form-control" name="merek">
       </div>
       <div class="form-group">
           <label>No.Plat</label>
           <input type="text" placeholder="Masukkan No.Plat" value="<?php echo $noplat; ?>" class="form-control" name="noplat">
       </div>
       <input type="hidden" name="id_mobil" value="<?php echo $id_mobil; ?>">
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
