<?php $__env->startSection('title', __('Rebuild Search')); ?>

<?php $__env->startSection('content'); ?>

    <header class="mb-3">
        <?php echo $__env->make('statamic::partials.breadcrumb', [
            'url' => cp_route('utilities.index'),
            'title' => __('Utilities')
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h1><?php echo e(__('Update Search Indexes')); ?></h1>
    </header>

    <div class="card">
        <form method="POST" action="<?php echo e(cp_route('utilities.search')); ?>">
            <?php echo csrf_field(); ?>

            <?php if($errors->has('indexes')): ?>
                <p class="mb-1"><small class="help-block text-red"><?php echo e($errors->first()); ?></small></p>
            <?php endif; ?>

            <?php $__currentLoopData = \Statamic\Facades\Search::indexes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <label class="mb-1">
                    <input type="checkbox" name="indexes[]" value="<?php echo e($index->name()); ?>" class="mr-1">
                    <?php echo e($index->title()); ?>

                </label>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <button type="submit" class="btn-primary mt-1"><?php echo e(__('Update')); ?></button>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/utilities/search.blade.php ENDPATH**/ ?>