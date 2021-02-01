<?php $__env->startSection('title', __('Create Taxonomy')); ?>

<?php $__env->startSection('content'); ?>

    <taxonomy-create-form
        route="<?php echo e(cp_route('taxonomies.store')); ?>">
    </taxonomy-create-form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/taxonomies/create.blade.php ENDPATH**/ ?>