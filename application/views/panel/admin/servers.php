<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Server List
				<?php if (isset($_SESSION['is_admin'])): ?>
                <a href="<?= base_url('panel/administrator/'.str_replace(' ','-',$_SESSION['username']).'/addserver') ?>" class="btn btn-default pull-right"><i class="fa fa-plus fa-fw"></i> Tambah</a>
                <?php endif; ?>
            </h1>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-12">
                <?php if (isset($message)) { echo $message;} ?>
            </div>
        <?php foreach($server as $row): ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="panel panel-default">
					 
                    <div class="panel-heading">
                       
							<div class="panel-title"><b><?= $row['ServerName']?></b></div>
							<span clas="pull-right">
							<?php if ($row['Status']): ?>
								<a class="btn btn-default btn-sm pull-right" href="<?= base_url('panel/administrator/edit/'.str_replace(' ','-',$row['ServerName']).'/'.$row['Id'].'/lock' ) ?>"><i class="fa fa-unlock"></i> lock</a>
								<?php else: ?>
								<a class="btn btn-default btn-sm pull-right" href="<?= base_url('panel/administrator/edit/'.str_replace(' ','-',$row['ServerName']).'/'.$row['Id'].'/unlock' ) ?>"><i class="fa fa-lock"></i>  unlock</a>
								<?php endif; ?>
							</span>
                    </div>
                    <div class="panel-body">
                    <table class="table table-condensed">
                        <tr>
                            <td>Lokasi</td><td><?= $row['Location']?></td>
                        </tr>
                        <tr>
                            <td>Host</td><td><?= $row['HostName']?></td>
                        </tr>
                        <tr>
                            <td>Harga</td><td><?= $row['Price']?></td>
                        </tr>
                    </table>  
                    </div>
						
                    <div class="panel-footer text-center">
                        <a href="<?= base_url('panel/administrator/edit/'.str_replace(' ','-',$row['ServerName']).'/'.$row['Id'])?>" class="btn btn-primary btn-sm"><i class="fa fa-edit fa-fw"></i> Edit</a>
                        <a href="<?= base_url('admin/cekuser/'.$row['Id']) ?>" class="btn btn-default btn-sm"><i class="fa fa-group fa-fw"></i> Check User</a>
                        <a href="<?= base_url('panel/administrator/edit/'.str_replace(' ','-',$row['ServerName']).'/'.$row['Id'].'/del' ) ?>" class="btn btn-danger btn-sm hapus pull-right"> Hapus</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
