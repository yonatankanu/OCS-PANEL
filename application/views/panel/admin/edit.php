<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	<div id="page-wrapper">
			<div class="row"><div class="col-lg-12"><h1 class="page-header">Edit Server</h1></div></div>
				<div class="row"><div class="col-lg-12">
					
					<div class="panel panel-default">
						<div class="panel-heading"></div>
						<div class="panel-body">
							<?php if (isset($message)) : ?>
									<?= $message ?>
							<?php endif; ?>
							<form action="<?= base_url('panel/administrator/edit/'.str_replace(' ','-',$server -> ServerName).'/'.$server->Id ) ?>" method="POST">
								<div class="form-group">
									<label for="ServerName">Server Name</label>
									<input type="text" class="form-control" id="ServerName" name="ServerName" value="<?= $server -> ServerName ?>">
									<p class="help-block">Virtual server name</p>
								</div>
								<div class="form-group">
									<label for="sel1">Location :</label>
									<select class="form-control" id="sel1" name="Location">
										<option value="<?= $server->Location ?>" selected="<?= $server->Location  ?>"><?= $server->Location  ?></option>
										<?php foreach($this->user_model->get_country() as $row):?>
										<option value="<?= $row['Country'] ?>"><?= $row['Country'] ?></option>
										<?php endforeach;?>
									</select>
									<p class="help-block">Pilih lokasi yang sudah disediakan</p>
								</div>
								<div class="form-group">
									<label for="email">Harga</label>
									<input type="number" class="form-control" id="email" name="Price" value="<?= $server->Price ?>">
									<p class="help-block">Jika harga diset 0 server akan tampil di halaman utama dg status free, tapi jika diset harga server akan muncul di menu reseller</p>
								</div>
								<div class="form-group">
									<label for="email">Hostname</label>
									<input type="text" class="form-control" id="email" name="HostName" value="<?= $server->HostName ?>">
									<p class="help-block">Masukan hostname yg valid</p>
								</div>
								<div class="form-group">
									<label for="password_confirm">RootPasswd</label>
									<input type="text" class="form-control" id="password_confirm" name="RootPasswd" value="<?= $server->RootPasswd ?>">
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label for="password_confirm">Maxuser</label>
										<input type="number" class="form-control" id="password_confirm" name="MaxUser" value="<?= $server->MaxUser ?>">
									</div>
								</div>			
								<div class="col-xs-6">
									<div class="form-group">
										<label for="password_confirm">User Expired</label>
										<input type="number" class="form-control" id="password_confirm" name="Expired" value="<?= $server->Expired ?>">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label for="password_confirm">Openssh</label>
										<input type="text" class="form-control" id="password_confirm" name="OpenSSH" value="<?= $server->OpenSSH ?>">
										<p class="help-block">jika banyak, pisah dengan (,)</p>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label for="password_confirm">Dropbear</label>
										<input type="text" class="form-control" id="password_confirm" name="Dropbear" value="<?= $server->Dropbear?>">
										<p class="help-block">jika banyak pisah dengan (,)</p>
									</div>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary" value="Simpan">									
									<a href="<?= base_url('panel/administrator/'.$_SESSION['username'].'/'.'server') ?>" class="btn btn-default">Kembali</a>
								</div>
							</form>
						</div>
					</div>
				</div></div><!-- .row -->
		</div>
