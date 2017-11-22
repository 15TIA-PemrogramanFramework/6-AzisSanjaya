
      <?php $this->load->view('header') ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Data Customer <small></small>

                        </h1>
                        <small><?php echo anchor(site_url("pemilik/tambah"), '<i class="fa fa-plus"></i> Tambah Data', 'class="btn btn-primary"');
	?></small><br>
        
                    </div>
  
                </div>
                <!-- /. ROW  -->


<div>
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<th>ID </th>
			<th>Nama </th>
			<th>Alamat </th>
			<th>No HP </th>
			
			<th>Aksi</th>
			
		</thead>
		<tbody>
			<?php foreach ($pemilik as $key => $value) {?>
			<tr>
				<td><?php echo $key+1; ?></td>
				<td><?php echo $value->nama_pemilik; ?></td>
				<td><?php echo $value->alamat_pemilik; ?></td>
				<td><?php echo $value->nohp; ?></td>
				
				<td>
					<?php echo anchor(site_url('pemilik/edit/'.$value->id_pemilik), '<i class="fa fa-pencil"></i>', 
						'class="btn btn-warning"');
					?>
					<?php echo anchor(site_url('pemilik/hapus/'.$value->id_pemilik), '<i class="fa fa-minus"></i>', 
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

