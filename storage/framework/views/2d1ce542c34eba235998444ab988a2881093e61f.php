<?php $__env->startSection('title', __('Create Collection')); ?>

<?php $__env->startSection('content'); ?>
    <collection-create-form
        route="<?php echo e(cp_route('collections.store')); ?>">
    </collection-create-form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/collections/create.blade.php ENDPATH**/ ?>