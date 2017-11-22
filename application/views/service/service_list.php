
      <?php $this->load->view('header') ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Data Service <small></small>

                        </h1>
                        <small><?php echo anchor(site_url("service/tambah"), '<i class="fa fa-plus"></i> Tambah Data', 'class="btn btn-primary"');
	?></small><br>
        
                    </div>
  
                </div>
                <!-- /. ROW  -->


<div>
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<th>ID </th>
			<th>Nama Pemilik </th>
			<th>Merek </th>
			<th>No Plat </th>
			<th>Tanggal Masuk </th>
			<th>Sparepart </th>
			<th>Harga </th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php foreach ($service as $key => $value) {?>
			<tr>
				<td><?php echo $value->id_service; ?></td>
				<td><?php echo $value->nama_pemilik; ?></td>
				<td><?php echo $value->merek; ?></td>
				<td><?php echo $value->noplat; ?></td>
				<td><?php echo $value->tgl_masuk; ?></td>
				<td><?php echo $value->nama_sparepart; ?></td>
				<td><?php echo $value->harga; ?></td>
				<td>
					<?php echo anchor(site_url('service/edit/'.$value->id_service), '<i class="fa fa-pencil"></i>', 
						'class="btn btn-warning"');
					?>
					<?php echo anchor(site_url('service/hapus/'.$value->id_service), '<i class="fa fa-minus"></i>', 
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


