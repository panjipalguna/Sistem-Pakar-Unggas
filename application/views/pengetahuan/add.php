<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Pengetahuan Add</h3>
            </div>
            <?php echo form_open('pengetahuan/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="kode_penyakit" class="control-label">Kode Penyakit</label>
						<div class="form-group">
							<input type="text" name="kode_penyakit" value="<?php echo $this->input->post('kode_penyakit'); ?>" class="form-control" id="kode_penyakit" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_gejala" class="control-label">Id Gejala</label>
						<div class="form-group">
							<input type="text" name="id_gejala" value="<?php echo $this->input->post('id_gejala'); ?>" class="form-control" id="id_gejala" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mb" class="control-label">Mb</label>
						<div class="form-group">
							<input type="text" name="mb" value="<?php echo $this->input->post('mb'); ?>" class="form-control" id="mb" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="md" class="control-label">Md</label>
						<div class="form-group">
							<input type="text" name="md" value="<?php echo $this->input->post('md'); ?>" class="form-control" id="md" />
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