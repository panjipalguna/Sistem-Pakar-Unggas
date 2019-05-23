<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pengetahuan Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pengetahuan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Pengetahuan</th>
						<th>Kode Penyakit</th>
						<th>Id Gejala</th>
						<th>Mb</th>
						<th>Md</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($pengetahuan as $p){ ?>
                    <tr>
						<td><?php echo $p['id_pengetahuan']; ?></td>
						<td><?php echo $p['kode_penyakit']; ?></td>
						<td><?php echo $p['id_gejala']; ?></td>
						<td><?php echo $p['mb']; ?></td>
						<td><?php echo $p['md']; ?></td>
						<td>
                            <a href="<?php echo site_url('pengetahuan/edit/'.$p['id_pengetahuan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('pengetahuan/remove/'.$p['id_pengetahuan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
