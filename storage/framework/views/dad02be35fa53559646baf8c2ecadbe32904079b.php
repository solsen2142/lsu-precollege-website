<div class="card p-0 overflow-hidden">
    <div class="flex justify-between items-center p-2">
        <h2><?php echo e($title); ?></h2>
        <a href="<?php echo e($collection->createEntryUrl()); ?>" class="text-blue hover:text-blue-dark text-sm"><?php echo e($button); ?></a>
    </div>
    <collection-widget
        collection="<?php echo e($collection->handle()); ?>"
        :filters="<?php echo e($filters->toJson()); ?>"
        initial-sort-column="<?php echo e($sortColumn); ?>"
        initial-sort-direction="<?php echo e($sortDirection); ?>"
        :initial-per-page="<?php echo e($limit); ?>"
    ></collection-widget>
</div>
<?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/widgets/collection.blade.php ENDPATH**/ ?>