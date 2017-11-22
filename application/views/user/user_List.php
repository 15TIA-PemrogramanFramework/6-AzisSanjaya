
      <?php $this->load->view('header') ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Data Spare Part <small></small>

                        </h1>
                        <small><?php echo anchor(site_url("user/tambah"), '<i class="fa fa-plus"></i> Tambah Data', 'class="btn btn-primary"');
	?></small><br>
        
                    </div>
  
                </div>
                <!-- /. ROW  -->


<div>
	<table id="example" class="table table-striped table-bordered">
		<thead>
			<th>Nama</th>
			<th>Username</th>
			<th>Jabatan</th>
			
			<th>Aksi</th>
			
		</thead>
		<tbody>
			<?php foreach ($user as $key => $value) {?>
			<tr>
				<td><?php echo  $value->Nama; ?></td>
				<td><?php echo $value->Username; ?></td>
				<td><?php echo $value->Jabatan; ?></td>
				
				<td>
					<?php echo anchor(site_url('user/edit/'.$value->Username), '<i class="fa fa-pencil"></i>', 
						'class="btn btn-warning"');
					?>
					<?php echo anchor(site_url('user/hapus/'.$value->Username), '<i class="fa fa-minus"></i>', 
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

