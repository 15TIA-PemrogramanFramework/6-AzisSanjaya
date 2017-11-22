
      <?php $this->load->view('header') ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Data Spare Part <small></small>

                        </h1>
                        <small><?php echo anchor(site_url("sparepart/tambah"), '<i class="fa fa-plus"></i> Tambah Data', 'class="btn btn-primary"');
	?></small><br>
        
                    </div>
  
                </div>
                <!-- /. ROW  -->


<div>
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<th>ID </th>
			<th>Nama Spare Part </th>
			<th>Harga </th>
			
			<th>Aksi</th>
			
		</thead>
		<tbody>
			<?php foreach ($sparepart as $key => $value) {?>
			<tr>
				<td><?php echo $key+1; ?></td>
				<td><?php echo $value->nama_sparepart; ?></td>
				<td>Rp.<?php echo $value->harga; ?></td>
				
				<td>
					<?php echo anchor(site_url('sparepart/edit/'.$value->id_sparepart), '<i class="fa fa-pencil"></i>', 
						'class="btn btn-warning"');
					?>
					<?php echo anchor(site_url('sparepart/hapus/'.$value->id_sparepart), '<i class="fa fa-minus"></i>', 
						'class="btn btn-danger"');
					?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
</div>
<?php 
$this->load->view('footer');
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable();
	});
</script>

