<?php $__env->startSection('title', '| Edit Permission'); ?>

<?php $__env->startSection('body'); ?>

    <div class='col-lg-4 col-lg-offset-4'>

        <h1><i class='fa fa-key'></i> Edit <?php echo e($permission->name); ?></h1>
        <br>
        <?php echo e(Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT'))); ?>


        <div class="form-group">
            <?php echo e(Form::label('name', 'Permission Name')); ?>

            <?php echo e(Form::text('name', null, array('class' => 'form-control'))); ?>

        </div>
        <br>
        <?php echo e(Form::submit('Edit', array('class' => 'btn btn-primary'))); ?>


        <?php echo e(Form::close()); ?>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jah/Desktop/Bustani/resources/views/permissions/edit.blade.php ENDPATH**/ ?>