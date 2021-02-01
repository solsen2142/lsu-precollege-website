<?php $__env->startSection('title', __('Fieldsets')); ?>

<?php $__env->startSection('content'); ?>

    <?php if (! ($fieldsets->isEmpty())): ?>

        <div class="flex mb-3">
            <h1 class="flex-1"><?php echo e(__('Fieldsets')); ?></h1>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', 'Statamic\Fields\Fieldset')): ?>
                <a href="<?php echo e(cp_route('fieldsets.create')); ?>" class="btn-primary"><?php echo e(__('Create Fieldset')); ?></a>
            <?php endif; ?>
        </div>

        <fieldset-listing :initial-rows="<?php echo e(json_encode($fieldsets)); ?>"></fieldset-listing>

    <?php else: ?>

        <?php echo $__env->make('statamic::partials.empty-state', [
            'title' => __('Fieldsets'),
            'description' => __('statamic::messages.fieldset_intro'),
            'svg' => 'empty/form',
            'button_text' => __('Create Fieldset'),
            'button_url' => cp_route('fieldsets.create'),
            'can' => $user->can('create', 'Statamic\Fields\Fieldset')
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php endif; ?>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Fieldsets'),
        'url' => Statamic::docsUrl('fieldsets')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/fieldsets/index.blade.php ENDPATH**/ ?>