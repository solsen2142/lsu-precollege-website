<li class="<?php echo e($item->isActive() ? 'current' : ''); ?>">
    <a href="<?php echo e($item->url()); ?>">
        <i><?php echo $item->icon(); ?></i><span><?php echo e(__($item->name())); ?></span>
        <updates-badge class="ml-1"></updates-badge>
    </a>
</li>
<?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/nav/updates.blade.php ENDPATH**/ ?>