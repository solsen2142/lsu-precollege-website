<?php $__env->startSection('title', Statamic::crumb($taxonomy->title(), 'Taxonomies')); ?>
<?php $__env->startSection('wrapper_class', 'max-w-full'); ?>

<?php $__env->startSection('content'); ?>

    <header class="mb-3">
        <?php echo $__env->make('statamic::partials.breadcrumb', [
            'url' => cp_route('taxonomies.index'),
            'title' => __('Taxonomies')
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="flex items-center">
            <h1 class="flex-1"><?php echo e($taxonomy->title()); ?></h1>

            <dropdown-list class="mr-1">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $taxonomy)): ?>
                    <dropdown-item :text="__('Edit Taxonomy')" redirect="<?php echo e($taxonomy->editUrl()); ?>"></dropdown-item>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('configure fields')): ?>
                    <dropdown-item :text="__('Edit Blueprints')" redirect="<?php echo e(cp_route('taxonomies.blueprints.index', $taxonomy)); ?>"></dropdown-item>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $taxonomy)): ?>
                    <dropdown-item :text="__('Delete Taxonomy')" class="warning" @click="$refs.deleter.confirm()">
                        <resource-deleter
                            ref="deleter"
                            resource-title="<?php echo e($taxonomy->title()); ?>"
                            route="<?php echo e(cp_route('taxonomies.destroy', $taxonomy->handle())); ?>"
                            redirect="<?php echo e(cp_route('taxonomies.index')); ?>"
                        ></resource-deleter>
                    </dropdown-item>
                <?php endif; ?>
            </dropdown-list>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', ['Statamic\Contracts\Taxonomies\Term', $taxonomy])): ?>
                <create-term-button
                    url="<?php echo e(cp_route('taxonomies.terms.create', [$taxonomy->handle(), $site])); ?>"
                    :blueprints="<?php echo e($blueprints->toJson()); ?>">
                </create-term-button>
            <?php endif; ?>
        </div>
    </header>

    <?php if($hasTerms): ?>

        <term-list
            taxonomy="<?php echo e($taxonomy->handle()); ?>"
            initial-sort-column="<?php echo e($taxonomy->sortField()); ?>"
            initial-sort-direction="<?php echo e($taxonomy->sortDirection()); ?>"
            :initial-columns="<?php echo e($columns->toJson()); ?>"
            :filters="<?php echo e($filters->toJson()); ?>"
            run-action-url="<?php echo e(cp_route('taxonomies.terms.actions.run', $taxonomy->handle())); ?>"
            bulk-actions-url="<?php echo e(cp_route('taxonomies.terms.actions.bulk', $taxonomy->handle())); ?>"
        ></term-list>

    <?php else: ?>

        <?php $__env->startComponent('statamic::partials.create-first', [
            'resource' => __("{$taxonomy->title()} term"),
            'svg' => 'empty/taxonomy', // TODO: Do we want separate term SVG?
            'can' => $user->can('create', ['Statamic\Contracts\Taxonomies\Term', $taxonomy])
        ]); ?>
            <?php $__env->slot('button'); ?>
                
            <?php $__env->endSlot(); ?>
        <?php if (isset($__componentOriginal5dd26d51346130c32eac65ae56a7cd3c7e14c712)): ?>
<?php $component = $__componentOriginal5dd26d51346130c32eac65ae56a7cd3c7e14c712; ?>
<?php unset($__componentOriginal5dd26d51346130c32eac65ae56a7cd3c7e14c712); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/taxonomies/show.blade.php ENDPATH**/ ?>