<?php $__env->startSection('title', __('Scaffold Collection')); ?>

<?php $__env->startSection('content'); ?>
    <header class="mb-3">
        <?php echo $__env->make('statamic::partials.breadcrumb', [
            'url' => cp_route('collections.show', $collection->handle()),
            'title' => $collection->title()
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h1> <?php echo e(__('Scaffold Resources')); ?></h1>
    </header>

    <collection-scaffolder
        title="<?php echo e($collection->title()); ?>"
        handle="<?php echo e($collection->handle()); ?>"
        route="<?php echo e(url()->current()); ?>" >
    </collection-scaffolder>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/collections/scaffold.blade.php ENDPATH**/ ?>