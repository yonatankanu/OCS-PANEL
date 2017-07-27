<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
	 <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambah Saldo (Via-Pulsa)</h1>
            <div class="well">Saldo Anda : <B><?php if (isset($user->saldo)) {echo $user->saldo; }?></B></div>
        </div>
    </div>
    <div class="row">
		  <div class="col-sm-6">
			   <p class="text-muted">Catatan: jika sudah membayar, silakan klik konfirmasi maka saldo anda akan bertambah otomatis setelah di cek admin.</p>
			   <p class="text-info">Silakan kirim pulsa ke salah satu no berikut: </p>
			   <?php foreach ($this->user_model->view_asset() as $row): ?>
					<?php if (!empty($row['nohp'])): ?>
					<p class="text-default" align="center"> <?= $row['pemilik']?><br> <?= $row['nohp']?> <br> <?= $row['provider']?> </p>
					<?php endif; ?>	
			   <?php endforeach; ?>
		  </div>
           <div class="col-sm-6">
			  <?php if (validation_errors()) : ?>
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert"><?= validation_errors() ?></div>
					</div>
					<?php endif; ?>
					<?php if (isset($error)) : ?>
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert"><?= $error ?></div>
					</div>
					<?php endif;?>
					<?php if (isset($message)) : ?>
					<div class="col-md-12">
						<div class="alert alert-success" role="alert"><?= $message ?></div>
					</div>
					<?php endif;?>
			   <?= form_open() ?>
					<div class="form-group">
						<label for="sender">No Hp pengirim / mkios kode</label>
						<input type="text" name="sender" class="form-control" id="sender" placeholder="Masukan no hp/mkios kode"/>
						<small class="text-muted">Untuk bukti telah membayar</small>
					</div>
					<div class="form-group">
						<label for="hp">No Hp yg dikirim</label>
						<select name="hp" id="hp" class="form-control">
							<?php foreach ($this->user_model->view_asset() as $row): ?>
							<?php if (!empty($row['nohp'])): ?>
							<option value="<?= $row['nohp']?>"><?= $row['nohp'].' ('.$row['provider'].')'?></option>
							<?php endif;?>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="hp">Jumlah deposit</label>
						<input type="number" name="jumlah" class="form-control" id="jumlah" value="30000"/>
						<small class="text-muted">Jumlah deposit minimal 30000</small>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary form-control" value="Konfirmasi"/>
					</div>
			   </form>
            </div>
    </div>
</div>
