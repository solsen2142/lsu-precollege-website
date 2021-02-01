<?php $__env->startSection('title', __('Taxonomies')); ?>

<?php $__env->startSection('content'); ?>

    <?php if (! ($taxonomies->isEmpty())): ?>

        <div class="flex mb-3">
            <h1 class="flex-1"><?php echo e(__('Taxonomies')); ?></h1>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', 'Statamic\Contracts\Taxonomies\Taxonomy')): ?>
                <a href="<?php echo e(cp_route('taxonomies.create')); ?>" class="btn-primary"><?php echo e(__('Create Taxonomy')); ?></a>
            <?php endif; ?>
        </div>

        <taxonomy-list
            :initial-rows="<?php echo e(json_encode($taxonomies)); ?>"
            :initial-columns="<?php echo e(json_encode($columns)); ?>"
            :endpoints="{}">
        </taxonomy-list>

    <?php else: ?>

        <?php echo $__env->make('statamic::partials.empty-state', [
            'title' => __('Taxonomies'),
            'description' => __('statamic::messages.taxonomy_configure_intro'),
            'svg' => 'empty/taxonomy',
            'button_text' => __('Create Taxonomy'),
            'button_url' => cp_route('taxonomies.create'),
            'can' => $user->can('create', 'Statamic\Contracts\Taxonomies\Taxonomy')
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php endif; ?>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Taxonomies'),
        'url' => Statamic::docsUrl('taxonomies')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/taxonomies/index.blade.php ENDPATH**/ ?>