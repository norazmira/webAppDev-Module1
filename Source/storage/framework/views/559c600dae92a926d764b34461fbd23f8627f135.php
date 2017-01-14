<?php $__env->startSection('content'); ?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<h1>Table of Current Users With Their own Role</h1>
<table class="table">
    <thead>
    <th>name</th>
    <th>email</th>
    <th>user</th>
    <th>admin</th>
    <th>accountant</th>
    <th>accountantclerk</th>
    <th>auditor</th>
    <th>auditorclerk</th>
    <th>companydirector</th>
    <th>companysecretary</th>
    <th></th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <form>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?> <input type="hidden" name="email" value="<?php echo e($user->email); ?>"></td>
                <td><input type="checkbox" <?php echo e($user->hasRole('NewUser') ? 'checked' : ''); ?> name="role_user"></td>
                <td><input type="checkbox" <?php echo e($user->hasRole('Admin') ? 'checked' : ''); ?> name="role_admin"></td>
                <td><input type="checkbox" <?php echo e($user->hasRole('Accountant') ? 'checked' : ''); ?> name="role_accountant"></td>
                <td><input type="checkbox" <?php echo e($user->hasRole('AccountantClerk') ? 'checked' : ''); ?> name="role_accountant_clerk"></td>
                <td><input type="checkbox" <?php echo e($user->hasRole('Auditor') ? 'checked' : ''); ?> name="role_auditor"></td>
                <td><input type="checkbox" <?php echo e($user->hasRole('AuditorClerk') ? 'checked' : ''); ?> name="role_auditor_clerk"></td>
                <td><input type="checkbox" <?php echo e($user->hasRole('CompanyDirector') ? 'checked' : ''); ?> name="role_company_director"></td>
                <td><input type="checkbox" <?php echo e($user->hasRole('CompanySecretary') ? 'checked' : ''); ?>  name="role_company_secretary"></td>
                <td><button type="submit">Assign Roles</button></td>
            </form>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>