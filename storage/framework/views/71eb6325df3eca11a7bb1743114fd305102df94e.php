<?php $__env->startSection('title', $breadcrumbs->title('Create Term')); ?>
<?php $__env->startSection('wrapper_class', 'max-w-3xl'); ?>

<?php $__env->startSection('content'); ?>
    <base-term-create-form
        :actions="<?php echo e(json_encode($actions)); ?>"
        taxonomy-handle="<?php echo e($taxonomy); ?>"
        :breadcrumbs="<?php echo e($breadcrumbs->toJson()); ?>"
        :fieldset="<?php echo e(json_encode($blueprint)); ?>"
        :values="<?php echo e(json_encode($values)); ?>"
        :meta="<?php echo e(json_encode($meta)); ?>"
        :published="<?php echo e(json_encode($published)); ?>"
        :localizations="<?php echo e(json_encode($localizations)); ?>"
        create-another-url="<?php echo e(cp_route('taxonomies.terms.create', [$taxonomy, $locale])); ?>"
        listing-url="<?php echo e(cp_route('taxonomies.show', $taxonomy)); ?>"
    ></base-term-create-form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/terms/create.blade.php ENDPATH**/ ?>