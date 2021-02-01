<?php $__env->startSection('title', __('Collections')); ?>

<?php $__env->startSection('content'); ?>

    <?php if (! ($collections->isEmpty())): ?>

        <div class="flex items-center justify-between mb-3">
            <h1><?php echo e(__('Collections')); ?></h1>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', 'Statamic\Contracts\Entries\Collection')): ?>
                <a href="<?php echo e(cp_route('collections.create')); ?>" class="btn-primary"><?php echo e(__('Create Collection')); ?></a>
            <?php endif; ?>
        </div>

        <collection-list
            :initial-rows="<?php echo e(json_encode($collections)); ?>"
            :initial-columns="<?php echo e(json_encode($columns)); ?>"
            :endpoints="{}">
        </collection-list>

    <?php else: ?>

        <?php echo $__env->make('statamic::partials.empty-state', [
            'title' => __('Collections'),
            'description' => __('statamic::messages.collection_configure_intro'),
            'svg' => 'empty/content',
            'button_text' => __('Create Collection'),
            'button_url' => cp_route('collections.create'),
            'can' => $user->can('create', 'Statamic\Contracts\Entries\Collection')
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php endif; ?>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Collections'),
        'url' => Statamic::docsUrl('collections-and-entries')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/collections/index.blade.php ENDPATH**/ ?>