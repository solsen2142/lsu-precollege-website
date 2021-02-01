<?php if(config('statamic.cp.link_to_docs')): ?>
    <div class="flex justify-center text-center mt-6">
        <div class="bg-white rounded-full px-3 py-1 shadow-sm text-sm text-grey-70"><?php echo e($text ?? __('Learn more about')); ?> <a href="<?php echo e($url); ?>" target="_blank" rel="noopener noopener" class="text-blue hover:text-blue-dark"><?php echo e($topic); ?></a></div>
    </div>
<?php endif; ?>
<?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/partials/docs-callout.blade.php ENDPATH**/ ?>