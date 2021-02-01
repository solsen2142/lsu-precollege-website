<div class="no-results md:pt-8 max-w-2xl mx-auto">
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2">
            <h1 class="mb-4"><?php echo e($title); ?></h1>

            <?php if($description ?? false): ?>
            <p class="text-grey-70 leading-normal mb-4 text-lg antialiased">
                <?php echo e($description); ?>

            </p>
            <?php endif; ?>

            
            <?php if (! (!isset($button_url) || (isset($can) && !$can))): ?>
                <a href="<?php echo e($button_url); ?>" class="btn-primary btn-lg"><?php echo e($button_text); ?></a>
            <?php endif; ?>
        </div>
        <div class="hidden md:block w-1/2 pl-6">
            <?php echo Statamic::svg($svg ?? 'empty/content') ?>
        </div>
    </div>
</div>
<?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/partials/empty-state.blade.php ENDPATH**/ ?>