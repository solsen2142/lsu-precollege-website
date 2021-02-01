<?php $str = app('Statamic\Support\Str'); ?>

<?php $__env->startSection('title', __('Edit Term')); ?>
<?php $__env->startSection('wrapper_class', 'max-w-3xl'); ?>

<?php $__env->startSection('content'); ?>

    <term-publish-form
        publish-container="base"
        :initial-actions="<?php echo e(json_encode($actions)); ?>"
        method="patch"
        taxonomy-handle="<?php echo e($taxonomy); ?>"
        :breadcrumbs="<?php echo e($breadcrumbs->toJson()); ?>"
        initial-title="<?php echo e($title); ?>"
        initial-reference="<?php echo e($reference); ?>"
        :initial-fieldset="<?php echo e(json_encode($blueprint)); ?>"
        :initial-values="<?php echo e(json_encode($values)); ?>"
        :initial-localized-fields="<?php echo e(json_encode($localizedFields)); ?>"
        :initial-meta="<?php echo e(json_encode($meta)); ?>"
        :initial-published="<?php echo e($str::bool($published)); ?>"
        initial-permalink="<?php echo e($permalink); ?>"
        :initial-localizations="<?php echo e(json_encode($localizations)); ?>"
        :initial-has-origin="<?php echo e($str::bool($hasOrigin)); ?>"
        :initial-origin-values="<?php echo e(json_encode($originValues)); ?>"
        :initial-origin-meta="<?php echo e(json_encode($originMeta)); ?>"
        initial-site="<?php echo e($locale); ?>"
        :initial-is-working-copy="<?php echo e($str::bool($hasWorkingCopy)); ?>"
        :initial-is-root="<?php echo e($str::bool($isRoot)); ?>"
        :revisions-enabled="<?php echo e($str::bool($revisionsEnabled)); ?>"
        
        :initial-read-only="<?php echo e($str::bool($readOnly)); ?>"
        :preloaded-assets="<?php echo e(json_encode($preloadedAssets)); ?>"
        :breadcrumbs="<?php echo e($breadcrumbs->toJson()); ?>"
        create-another-url="<?php echo e(cp_route('taxonomies.terms.create', [$taxonomy, $locale])); ?>"
        listing-url="<?php echo e(cp_route('taxonomies.show', $taxonomy)); ?>"
    ></term-publish-form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/terms/edit.blade.php ENDPATH**/ ?>