<?php $__env->startSection('adminlte_css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('vendor/adminlte/css/auth.css')); ?>">
    <?php echo $__env->yieldContent('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body_class', 'register-page'); ?>

<?php $__env->startSection('body'); ?>
    <div class="register-box">
        <div class="register-logo">
            <a href="<?php echo e(url(config('adminlte.dashboard_url', 'home'))); ?>"><?php echo config('adminlte.logo', '<b>Admin</b>LTE'); ?></a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg"><?php echo e(trans('adminlte::adminlte.register_message')); ?></p>
            <form action="<?php echo e(url(config('adminlte.register_url', 'register'))); ?>" method="post">
                <?php echo csrf_field(); ?>


                <div class="form-group has-feedback <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                    <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>"
                           placeholder="<?php echo e(trans('adminlte::adminlte.full_name')); ?>">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <?php if($errors->has('name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group has-feedback <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                    <input type="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>"
                           placeholder="<?php echo e(trans('adminlte::adminlte.email')); ?>">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <?php if($errors->has('email')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group has-feedback <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                    <input type="password" name="password" class="form-control"
                           placeholder="<?php echo e(trans('adminlte::adminlte.password')); ?>">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group has-feedback <?php echo e($errors->has('password_confirmation') ? 'has-error' : ''); ?>">
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="<?php echo e(trans('adminlte::adminlte.retype_password')); ?>">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    <?php if($errors->has('password_confirmation')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <button type="submit"
                        class="btn btn-primary btn-block btn-flat"
                ><?php echo e(trans('adminlte::adminlte.register')); ?></button>
            </form>
            <div class="auth-links">
                <a href="<?php echo e(url(config('adminlte.login_url', 'login'))); ?>"
                   class="text-center"><?php echo e(trans('adminlte::adminlte.i_already_have_a_membership')); ?></a>
            </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.register-box -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('adminlte_js'); ?>
    <?php echo $__env->yieldContent('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>