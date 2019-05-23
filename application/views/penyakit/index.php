<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Penyakit Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('penyakit/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Penyakit</th>
						<th>Kode Penyakit</th>
						<th>Nama Penyakit</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($penyakit as $p){ ?>
                    <tr>
						<td><?php echo $p['id_penyakit']; ?></td>
						<td><?php echo $p['kode_penyakit']; ?></td>
						<td><?php echo $p['nama_penyakit']; ?></td>
						<td>
                            <a href="<?php echo site_url('penyakit/edit/'.$p['id_penyakit']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('penyakit/remove/'.$p['id_penyakit']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
