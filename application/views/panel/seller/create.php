<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create SSH Account</h1>
        </div>
    </div>
    <div class="row">
       <div class="col-xs-6 col-md-5 col-md-4 col-lg-3">
            <div class="well">Saldo : <B><?php if (isset($user->saldo)) {echo $user->saldo; }?></B></div>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-12">
                <?php if (isset($message)) {echo $message; }?>
            </div>
           <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b><?= $server->ServerName ?></b>
                    </div>
                    <div class="panel-body">
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
					<?= form_open() ?>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" class="form-control" id="username" placeholder="Masukan username"/>
						</div>
						<div class="form-group">
							<label for="password">Password </label>
							<input type="text" name="password" id="password" class="form-control" placeholder="Masukan password"/>
						</div>
                    
                    </div>
                    <div class="panel-footer text-center">
                    <input type="submit" class="btn btn-primary" value="Create Account"/>
                    </form>
                </div>
            </div>
    </div>
</div>
