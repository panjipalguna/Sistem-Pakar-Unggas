<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Gejala Add</h3>
            </div>
            <?php echo form_open('gejala/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama_gejala" class="control-label">Nama Gejala</label>
						<div class="form-group">
							<input type="text" name="nama_gejala" value="<?php echo $this->input->post('nama_gejala'); ?>" class="form-control" id="nama_gejala" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>