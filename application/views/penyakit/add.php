<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Penyakit Add</h3>
            </div>
            <?php echo form_open('penyakit/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="kode_penyakit" class="control-label">Kode Penyakit</label>
						<div class="form-group">
							<input type="text" name="kode_penyakit" value="<?php echo $this->input->post('kode_penyakit'); ?>" class="form-control" id="kode_penyakit" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama_penyakit" class="control-label">Nama Penyakit</label>
						<div class="form-group">
							<input type="text" name="nama_penyakit" value="<?php echo $this->input->post('nama_penyakit'); ?>" class="form-control" id="nama_penyakit" />
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