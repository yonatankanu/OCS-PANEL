<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">SSH User List
                <small><?= $server -> HostName ?></small>
                <a href="<?= base_url('seller/buy/'. $server->Id )?>" class="btn btn-default pull-right"><i class="fa fa-plus fa-fw"></i> Tambah</a>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-group fa-fw"></i> Account List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User</th>
                                    <th>Create By</th>
                                    <th>Reg</th>
                                    <th>Exp</th>
                                    <th>Del</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($user)): ?>
                                        <?php foreach ($user as $row): ?>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['username'] ?></td>
                                                <td><?= $row['created_by']?></td>
                                                <td><?= $row['created_at']?></td>
                                                <td><?= $row['expired_at']?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/delet_account/'. $row['id'])?>" class="btn btn-default"><span class="fa fa-trash-o fa-sm"></span></a>
                                                </td>
                                             </tr>
                                       <?php endforeach; ?>
                                    <?php else: ?>
                                   
                                        <tr>
                                            <td class="text-muted text-center" colspan="6"> No User</td>
                                        </tr>
                                   <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
