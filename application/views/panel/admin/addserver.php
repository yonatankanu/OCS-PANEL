<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               Tambah Server
            </h1>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-12">
				<?php if (isset($message)) { echo $message; }?>               
            </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-gear fa-fw"></i> Server Settings
                </div>
                <div class="panel-body">
                    <form action="<?= base_url('panel/administrator/'.$_SESSION['username'].'/'.'addserver') ?>" method="POST">
                        <div class="form-group">
                            <label>Nama Server</label>
                            <input class="form-control" placeholder="Server Demo 1" name="ServerName" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <select class="form-control" name="Location">
								<?php foreach($this->user_model->get_country() as $row):?>
								<option value="<?= $row['Country'] ?>"><?= $row['Country'] ?></option>
								<?php endforeach;?>
							</select>
                        </div>
                        <div class="form-group">
                            <label>IP / Host</label>
                            <input class="form-control" placeholder="192.168.1.1 atau www.example-server.com" name="HostName" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Harga Sewa / Bulan</label>
                            <div class="input-group">
                                <span class="input-group-addon">Rp. </span>
                                <input class="form-control" placeholder="10000" name="Price" type="number" step="100" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Root Password</label>
                            <input class="form-control" placeholder="r0oT_p4s5wo0rD" name="RootPasswd" type="text">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                        <a href="<?= base_url('panel/administrator/'.$_SESSION['username'].'/'.'server') ?>" class="btn btn-default">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
