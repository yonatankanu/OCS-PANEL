<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                SSH Account
            </h1>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-12 hidden-print">                    
                <?= $user['message']?>
            </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user fa-fw"></i> Account Details
                </div>
                <div class="panel-body">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Username</td><td>:</td><td><?= $user['username']?></td>
                        </tr>
                        <tr>
                            <td>Password</td><td>:</td><td><?= $user['password']?></td>
                        </tr>
                        <tr>
                            <td>Host</td><td>:</td><td><?= $user['hostname']?></td>
                        </tr>
                        <tr>
                            <td>Lokasi</td><td>:</td><td><?= $user['location']?></td>
                        </tr>
                        <tr>
                            <td>Openssh</td><td>:</td><td><?= $user['openssh']?></td>
                        </tr>
                         <tr>
                            <td>Dropbear</td><td>:</td><td><?= $user['dropbear']?></td>
                        </tr>
                         <tr>
                            <td>Harga</td><td>:</td><td><?= $user['price']?></td>
                        </tr>
                        <tr>
                            <td>Exp</td><td>:</td><td><?= date("Y-m-d H:i:s",strtotime("+".$user['expired']." days", time() ) )?></td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-muted">
					Catatan:<br>
					Untuk squid port menggunakan port(80, 3128, dan 8080)
					DIlarang menggunakan torrent, login lebih dari 2 akun, apabila melanggar aturan, akun akan terhapus secar otomatis olesh system
                </p>
					<div class="hidden-print">
					<a href="#" class="btn btn-primary" onclick="print_report()">Print</a>
					<a href="<?= base_url('panel/reseller/'.$_SESSION['username'].'/server') ?>" class="btn btn-default">Kembali</a>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
