<?php $__env->startSection('title', __('Updater')); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('statamic::partials.breadcrumb', [
        'url' => cp_route('updater'),
        'title' => __('Updates')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <updater slug="<?php echo e($slug); ?>" package="<?php echo e($package); ?>" name="<?php echo e($name); ?>"></updater>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/updater/show.blade.php ENDPATH**/ ?>