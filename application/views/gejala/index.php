<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Gejala Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('gejala/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Gejala</th>
						<th>Nama Gejala</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($gejala as $g){ ?>
                    <tr>
						<td><?php echo $g['id_gejala']; ?></td>
						<td><?php echo $g['nama_gejala']; ?></td>
						<td>
                            <a href="<?php echo site_url('gejala/edit/'.$g['id_gejala']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('gejala/remove/'.$g['id_gejala']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
