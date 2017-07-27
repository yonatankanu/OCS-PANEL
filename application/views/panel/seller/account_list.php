<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">SSH User List
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
       
                                    <th>User</th>
                                    <th>Create By</th>
                                    <th>Hostname</th>
                                    <th>Create</th>
                                    <th>Price</th>
                                    <th>Del</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($account)):?>
										<?php $jumlah=0; $counter=0; ?>
                                        <?php foreach ($account as $row): ?>
											<?php $counter++; ?>
                                            <tr>
                          
                                                <td><?= $row['username'] ?></td>
                                                <td><?= $row['created_by']?></td>
                                                <td><?= $row['hostname']?></td>
                                                <td><?= $row['created_at']?></td>
                                                <td><?= $row['price']?></td>
                                                <td>
                                                    <a href="<?= base_url('seller/delet_account/'. $row['id'])?>" class="btn btn-default"><span class="fa fa-trash-o fa-sm"></span></a>
                                                </td>
                                             </tr>
                                             <?php $jumlah = $jumlah + $row['price']; ?>
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
				<div class="panel-footer"> <?php if (isset($counter)) {echo 'Total user : '. $counter; } ?> | <?php if (isset($jumlah)) {echo 'Total penjualan : '. $jumlah; } ?></div>
            </div>
        </div>
    </div>
</div>
