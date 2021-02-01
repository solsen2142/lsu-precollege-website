<?php $__env->startSection('title', $breadcrumbs->title('Create Entry')); ?>
<?php $__env->startSection('wrapper_class', 'max-w-3xl'); ?>

<?php $__env->startSection('content'); ?>
    <base-entry-create-form
        :actions="<?php echo e(json_encode($actions)); ?>"
        collection-handle="<?php echo e($collection); ?>"
        :fieldset="<?php echo e(json_encode($blueprint)); ?>"
        :values="<?php echo e(json_encode($values)); ?>"
        :meta="<?php echo e(json_encode($meta)); ?>"
        :published="<?php echo e(json_encode($published)); ?>"
        :localizations="<?php echo e(json_encode($localizations)); ?>"
        :revisions="<?php echo e(Statamic\Support\Str::bool($revisionsEnabled )); ?>"
        :breadcrumbs="<?php echo e($breadcrumbs->toJson()); ?>"
        site="<?php echo e($locale); ?>"
        create-another-url="<?php echo e(cp_route('collections.entries.create', [$collection, $locale, 'blueprint' => $blueprint['handle']])); ?>"
        listing-url="<?php echo e(cp_route('collections.show', $collection)); ?>"
        :can-manage-publish-state="<?php echo e(Statamic\Support\Str::bool($canManagePublishState)); ?>"
    ></base-entry-create-form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/entries/create.blade.php ENDPATH**/ ?>