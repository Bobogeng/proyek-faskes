<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Faskes</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Login page</p>
            <?=
            $this->session->flashdata('message');
            ?>
            <form action="<?= base_url('auth'); ?>" method="post">
                <div class="input-group mb-3 d-flex d-column">
                    <input type="text" class="form-control w-100" placeholder="Full name" name="username" id="username" value="<?= set_value('username'); ?>">
                    <div class="input-group-append">
                        <?= form_error('username', ' <small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control w-100" placeholder="Password" id="password" name="password">
                    <div class="input-group-append">
                        <?= form_error('password', ' <small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mb-0">
                <a href="<?= base_url('auth/registration') ?>" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->