<?php $__env->startSection('title', __('Cache Manager')); ?>

<?php $__env->startSection('content'); ?>

    <header class="mb-3">

        <?php echo $__env->make('statamic::partials.breadcrumb', [
            'url' => cp_route('utilities.index'),
            'title' => __('Utilities')
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="flex items-center justify-between">
            <h1><?php echo e(__('Cache Manager')); ?></h1>

            <form method="POST" action="<?php echo e(cp_route('utilities.cache.clear', 'all')); ?>">
                <?php echo csrf_field(); ?>
                <button class="btn-primary"><?php echo e(__('Clear All')); ?></button>
            </form>
        </div>
    </header>

    <div class="card p-0">
        <div class="p-2">
            <div class="flex justify-between items-center">
                <div class="pr-4">
                    <h2 class="font-bold"><?php echo e(__('Content Stache')); ?></h2>
                    <p class="text-grey text-sm my-1"><?php echo e(__('statamic::messages.cache_utility_stache_description')); ?></p>
                </div>
                <form method="POST" action="<?php echo e(cp_route('utilities.cache.clear', 'stache')); ?>">
                    <?php echo csrf_field(); ?>
                    <button class="btn"><?php echo e(__('Clear')); ?></button>
                </form>
            </div>
            <div class="text-sm text-grey flex">
                <div class="mr-2 badge-pill-sm"><span class="text-grey-80 font-medium"><?php echo e(__('Records')); ?>:</span> <?php echo e($stache['records']); ?></div>
                <div class="mr-2 badge-pill-sm"><span class="text-grey-80 font-medium"><?php echo e(__('Size')); ?>:</span> <?php echo e($stache['size']); ?></div>
                <?php if($stache['time']): ?>
                    <div class="mr-2 badge-pill-sm"><span class="text-grey-80 font-medium"><?php echo e(__('Build time')); ?>:</span> <?php echo e($stache['time']); ?></div>
                <?php endif; ?>
                <?php if($stache['rebuilt']): ?>
                    <div class="badge-pill-sm"><span class="text-grey-80 font-medium"><?php echo e(__('Last rebuild')); ?>:</span> <?php echo e($stache['rebuilt']); ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="p-2 bg-grey-20 border-t">
            <div class="flex justify-between items-center">
                <div class="pr-4">
                    <h2 class="font-bold"><?php echo e(__('Static Page Cache')); ?></h2>
                    <p class="text-grey text-sm my-1"><?php echo e(__('statamic::messages.cache_utility_static_cache_description')); ?></p>
                </div>
                <?php if($static['enabled']): ?>
                    <form method="POST" action="<?php echo e(cp_route('utilities.cache.clear', 'static')); ?>">
                        <?php echo csrf_field(); ?>
                        <button class="btn"><?php echo e(__('Clear')); ?></button>
                    </form>
                <?php endif; ?>
            </div>
            <div class="text-sm text-grey flex">
                <div class="mr-2 badge-pill-sm"><span class="text-grey-80 font-medium"><?php echo e(__('Strategy')); ?>:</span> <?php echo e($static['strategy']); ?></div>
                <?php if($static['enabled']): ?>
                    <div class="mr-2 badge-pill-sm"><span class="text-grey-80 font-medium"><?php echo e(__('Pages')); ?>:</span> <?php echo e($static['count']); ?></div>
                <?php endif; ?>
            </div>
        </div>

        <div class="p-2 border-t">
            <div class="flex justify-between items-center">
                <div class="pr-4">
                    <h2 class="font-bold"><?php echo e(__('Application Cache')); ?></h2>
                    <p class="text-grey text-sm my-1"><?php echo e(__('statamic::messages.cache_utility_application_cache_description')); ?></p>
                </div>
                <form method="POST" action="<?php echo e(cp_route('utilities.cache.clear', 'application')); ?>">
                    <?php echo csrf_field(); ?>
                    <button class="btn"><?php echo e(__('Clear')); ?></button>
                </form>
            </div>
            <div class="text-sm text-grey flex">
                <div class="mr-2 badge-pill-sm"><span class="text-grey-80 font-medium"><?php echo e(__('Driver')); ?>:</span> <?php echo e($cache['driver']); ?></div>
            </div>
        </div>

        <div class="p-2 border-t bg-grey-20 rounded-b">
            <div class="flex justify-between items-center">
                <div class="pr-4">
                    <h2 class="font-bold"><?php echo e(__('Image Cache')); ?></h2>
                    <p class="text-grey text-sm my-1"><?php echo e(__('statamic::messages.cache_utility_image_cache_description')); ?></p>
                </div>
                <form method="POST" action="<?php echo e(cp_route('utilities.cache.clear', 'image')); ?>">
                    <?php echo csrf_field(); ?>
                    <button class="btn"><?php echo e(__('Clear')); ?></button>
                </form>
            </div>
            <div class="text-sm text-grey flex">
                <div class="mr-2 badge-pill-sm"><span class="text-grey-80 font-medium"><?php echo e(__('Cached images')); ?>:</span> <?php echo e($images['count']); ?></div>
                <div class="mr-2 badge-pill-sm"><span class="text-grey-80 font-medium"><?php echo e(__('Size')); ?>:</span> <?php echo e($images['size']); ?></div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/utilities/cache.blade.php ENDPATH**/ ?>