<?php $__env->startSection('content'); ?>
 <!-- Bootstrap Core CSS -->
    <link href="css/app.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <div>
        <p></p>
        <a href="<?php echo e(url('/accountant')); ?>" class="btn btn-default btn-lg">Accountant</a>
        <a href="<?php echo e(url('/accountantclerk')); ?>" class="btn btn-default btn-lg">Accountant Clerk</a>
        <a href="<?php echo e(url('/auditor')); ?>" class="btn btn-default btn-lg">Auditor</a>
        <a href="<?php echo e(url('/auditorclerk')); ?>" class="btn btn-default btn-lg">Auditor Clerk</a>
        <a href="<?php echo e(url('/companydirector')); ?>" class="btn btn-default btn-lg">Company Director</a>
        <a href="<?php echo e(url('/companysecretary')); ?>" class="btn btn-default btn-lg">Company Secretary</a>
        </div>

    <div>
    <p></p>
        <center><a href="<?php echo e(url('/update')); ?>" class="btn btn-primary btn-lg">Edit Profile</a></center>
        <p></p>
        <center><a href="<?php echo e(url('/admin')); ?>" class="btn btn-primary btn-lg">View New Role Request</a></center>
        <p></p>
        <center><a href="<?php echo e(url('/admin2')); ?>" class="btn btn-primary btn-lg">View Current User WIth Role</a></center>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>