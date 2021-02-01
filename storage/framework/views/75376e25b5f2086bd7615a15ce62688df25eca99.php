<?php $__env->startSection('title', Statamic::crumb($collection->title(), 'Collections')); ?>
<?php $__env->startSection('wrapper_class', 'max-w-full'); ?>

<?php $__env->startSection('content'); ?>

    <collection-view
        title="<?php echo e($collection->title()); ?>"
        handle="<?php echo e($collection->handle()); ?>"
        breadcrumb-url="<?php echo e(cp_route('collections.index')); ?>"
        :can-create="<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', ['Statamic\Contracts\Entries\Entry', $collection])): ?> true <?php else: ?> false <?php endif; ?>"
        create-url="<?php echo e(cp_route('collections.entries.create', [$collection->handle(), $site])); ?>"
        :blueprints='<?php echo json_encode($blueprints, 15, 512) ?>'
        sort-column="<?php echo e($collection->sortField()); ?>"
        sort-direction="<?php echo e($collection->sortDirection()); ?>"
        :columns="<?php echo e($columns->toJson()); ?>"
        :filters="<?php echo e($filters->toJson()); ?>"
        run-action-url="<?php echo e(cp_route('collections.entries.actions.run', $collection->handle())); ?>"
        bulk-actions-url="<?php echo e(cp_route('collections.entries.actions.bulk', $collection->handle())); ?>"
        reorder-url="<?php echo e(cp_route('collections.entries.reorder', $collection->handle())); ?>"
        initial-site="<?php echo e($site); ?>"
        :sites="<?php echo e(json_encode($sites)); ?>"

        <?php if($collection->hasStructure()): ?>
        :structured="<?php echo e(Statamic\Support\Str::bool($user->can('reorder', $collection))); ?>"
        structure-pages-url="<?php echo e(cp_route('structures.pages.index', $structure->handle())); ?>"
        structure-submit-url="<?php echo e(cp_route('collections.structure.update', $collection->handle())); ?>"
        :structure-max-depth="<?php echo e($structure->maxDepth() ?? 'Infinity'); ?>"
        :structure-expects-root="<?php echo e(Statamic\Support\Str::bool($structure->expectsRoot())); ?>"
        <?php endif; ?>
    >
        <template #twirldown>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $collection)): ?>
                <dropdown-item :text="__('Edit Collection')" redirect="<?php echo e($collection->editUrl()); ?>"></dropdown-item>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('configure fields')): ?>
                <dropdown-item :text="__('Edit Blueprints')" redirect="<?php echo e(cp_route('collections.blueprints.index', $collection)); ?>"></dropdown-item>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $collection)): ?>
                <dropdown-item :text="__('Scaffold Resources')" redirect="<?php echo e(cp_route('collections.scaffold', $collection->handle())); ?>"></dropdown-item>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $collection)): ?>
                <dropdown-item :text="__('Delete Collection')" class="warning" @click="$refs.deleter.confirm()">
                    <resource-deleter
                        ref="deleter"
                        resource-title="<?php echo e($collection->title()); ?>"
                        route="<?php echo e(cp_route('collections.destroy', $collection->handle())); ?>"
                        redirect="<?php echo e(cp_route('collections.index')); ?>"
                    ></resource-deleter>
                </dropdown-item>
            <?php endif; ?>
        </template>
    </collection-view>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/collections/show.blade.php ENDPATH**/ ?>