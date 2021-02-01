<?php $authed = \Statamic\Facades\User::current(); ?>



<?php $__env->startSection('content'); ?>
    <div class="min-h-screen flex justify-center <?php echo e($authed ? 'pt-8' : 'items-center'); ?>">
        <h1 class="text-3xl tracking-tight mb-5 opacity-50 text-center"><?php echo e(__('Page Not Found')); ?></h1>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($authed ? 'statamic::layout' : 'statamic::outside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/errors/404.blade.php ENDPATH**/ ?>