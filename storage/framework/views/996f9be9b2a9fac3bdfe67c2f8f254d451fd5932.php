<?php $__env->startSection('title', __('Utilities')); ?>

<?php $__env->startSection('content'); ?>

    <header class="mb-3">
        <h1><?php echo e(__('Utilities')); ?></h1>
    </header>

    <div class="card p-2 content">
        <div class="flex flex-wrap">
        <?php $__currentLoopData = $utilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $utility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($utility->url()); ?>" class="w-full lg:w-1/2 p-2 md:flex items-start hover:bg-grey-20 rounded-md group">
                <div class="h-8 w-8 mr-2 text-grey-80">
                    <?php echo Statamic::svg($utility->icon()) ?>
                </div>
                <div class="text-blue flex-1 mb-2 md:mb-0 md:mr-3">
                    <h3><?php echo e($utility->title()); ?></h3>
                    <p class="text-xs"><?php echo e($utility->description()); ?></p>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Utilities'),
        'url' => Statamic::docsUrl('extending/utilities')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/utilities/index.blade.php ENDPATH**/ ?>