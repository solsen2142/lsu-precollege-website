<?php $__env->startSection('title', __('PHP Info')); ?>

<?php $__env->startSection('content'); ?>

    <header class="mb-3">
        <?php echo $__env->make('statamic::partials.breadcrumb', [
            'url' => cp_route('utilities.index'),
            'title' => __('Utilities')
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h1><?php echo e(__('PHP Info')); ?></h1>
    </header>

    <div class="card p-0">
        <table class="data-table">
            <tr>
                <th class="pl-2 py-1 w-1/4">PHP Version</th>
                <td><?php echo e(PHP_VERSION); ?></td>
            </tr>
        </table>
    </div>

    <?php $__currentLoopData = $phpinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h2 class="mt-4 mb-1 font-bold text-lg"><?php echo e($section); ?></h2>
        <div class="card p-0">
            <table class="data-table">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th class="pl-2 py-1 w-1/4"><?php echo e($name); ?></th>
                    <td><?php echo e(is_array($value) ? join(', ', $value) : $value); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/utilities/phpinfo.blade.php ENDPATH**/ ?>