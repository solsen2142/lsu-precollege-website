<script src="<?php echo e(Statamic::cpAssetUrl('js/manifest.js')); ?>?v=<?php echo e(Statamic::version()); ?>"></script>
<script src="<?php echo e(Statamic::cpAssetUrl('js/vendor.js')); ?>?v=<?php echo e(Statamic::version()); ?>"></script>
<script src="<?php echo e(Statamic::cpAssetUrl('js/app.js')); ?>?v=<?php echo e(Statamic::version()); ?>"></script>

<?php $__currentLoopData = Statamic::availableExternalScripts(request()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <script src="<?php echo e($url); ?>"></script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__currentLoopData = Statamic::availableScripts(request()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package => $paths): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $paths; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $path): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script src="<?php echo e(Statamic::vendorAssetUrl("$package/js/$path")); ?>"></script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script>
    Statamic.config(<?php echo json_encode(array_merge(Statamic::jsonVariables(request()), [
        'wrapperClass' => $__env->getSection('wrapper_class', 'max-w-xl')
    ])) ?>);
    Statamic.start();
</script>

<?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/partials/scripts.blade.php ENDPATH**/ ?>