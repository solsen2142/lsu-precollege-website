<?php $__env->startSection('title', Statamic::crumb('Assets', $container['title'])); ?>
<?php $__env->startSection('wrapper_class', 'max-w-full'); ?>

<?php $__env->startSection('content'); ?>

    <asset-manager
        :initial-container="<?php echo e(json_encode($container)); ?>"
        initial-path="<?php echo e($folder); ?>"
        initial-editing-asset-id="<?php echo e($editing ?? null); ?>"
        :can-create-containers="<?php echo e(Statamic\Support\Str::bool($user->can('create', \Statamic\Contracts\Assets\AssetContainer::class))); ?>"
        create-container-url="<?php echo e(cp_route('asset-containers.create')); ?>"
    ></asset-manager>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Assets'),
        'url' => Statamic::docsUrl('assets')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/assets/browse.blade.php ENDPATH**/ ?>