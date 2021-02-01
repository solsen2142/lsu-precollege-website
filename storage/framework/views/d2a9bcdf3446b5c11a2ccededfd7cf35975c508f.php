<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <?php echo $__env->make('statamic::partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body class="outside <?php echo $__env->yieldContent('body_class'); ?>">
        <div id="statamic">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <?php echo $__env->make('statamic::partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('scripts'); ?>
    </body>
</html>
<?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/outside.blade.php ENDPATH**/ ?>