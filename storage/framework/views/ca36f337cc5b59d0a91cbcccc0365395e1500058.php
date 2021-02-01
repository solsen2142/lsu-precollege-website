<?php $__env->startSection('title', __('Global Sets')); ?>

<?php $__env->startSection('content'); ?>

    <?php if (! ($globals->isEmpty())): ?>

        <div class="flex items-center mb-3">
            <h1 class="flex-1"><?php echo e(__('Globals')); ?></h1>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', 'Statamic\Contracts\Globals\GlobalSet')): ?>
                <a href="<?php echo e(cp_route('globals.create')); ?>" class="btn-primary"><?php echo e(__('Create Global Set')); ?></a>
            <?php endif; ?>
        </div>

        <global-listing :globals="<?php echo e(json_encode($globals)); ?>"></global-listing>

    <?php else: ?>

        <?php echo $__env->make('statamic::partials.empty-state', [
            'title' => __('Globals'),
            'description' => __('statamic::messages.global_set_config_intro'),
            'svg' => 'empty/content',
            'button_url' => cp_route('globals.create'),
            'button_text' => __('Create Global Set'),
            'can' => $user->can('create', 'Statamic\Contracts\Globals\GlobalSet')
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php endif; ?>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Global Variables'),
        'url' => Statamic::docsUrl('globals')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/globals/index.blade.php ENDPATH**/ ?>