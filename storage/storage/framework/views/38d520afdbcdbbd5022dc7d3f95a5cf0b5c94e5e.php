

<?php $__env->startSection('title', 'AdminLTE'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>secret shit page</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>have fun</p>
    <img src="https://78.media.tumblr.com/9c4baa0e71d320be81c24343e8a67a46/tumblr_p3l0u1QtMp1r2geqjo1_540.gif" alt="">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>