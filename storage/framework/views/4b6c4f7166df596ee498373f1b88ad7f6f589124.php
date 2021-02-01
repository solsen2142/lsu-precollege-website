<?php $__env->startSection('title', __('Configure Taxonomy')); ?>

<?php $__env->startSection('content'); ?>

    <header class="mb-3">
        <?php echo $__env->make('statamic::partials.breadcrumb', [
            'url' => cp_route('taxonomies.show', $taxonomy->handle()),
            'title' => $taxonomy->title()
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h1><?php echo $__env->yieldContent('title'); ?></h1>
    </header>

    <taxonomy-edit-form
        :blueprint="<?php echo e(json_encode($blueprint)); ?>"
        :initial-values="<?php echo e(json_encode($values)); ?>"
        :meta="<?php echo e(json_encode($meta)); ?>"
        url="<?php echo e(cp_route('taxonomies.update', $taxonomy->handle())); ?>"
    ></taxonomy-edit-form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/taxonomies/edit.blade.php ENDPATH**/ ?>