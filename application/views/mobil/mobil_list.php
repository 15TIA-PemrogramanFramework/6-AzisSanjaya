
      <?php $this->load->view('header') ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Data Customer <small></small>

                        </h1>
                        <small><?php echo anchor(site_url("mobil/tambah"), '<i class="fa fa-plus"></i> Tambah Data', 'class="btn btn-primary"');
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
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php foreach ($mobil as $key => $value) {?>
			<tr>
				<td><?php echo $value->id_mobil; ?></td>
				<td><?php echo $value->nama_pemilik; ?></td>
				<td><?php echo $value->merek; ?></td>
				<td><?php echo $value->noplat; ?></td>
				<td>
					<?php echo anchor(site_url('mobil/edit/'.$value->id_mobil), '<i class="fa fa-pencil"></i>', 
						'class="btn btn-warning"');
					?>
					<?php echo anchor(site_url('mobil/hapus/'.$value->id_mobil), '<i class="fa fa-minus"></i>', 
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


