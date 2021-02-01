<?php $__env->startSection('title', Statamic::crumb($collection->title(), 'Collections')); ?>

<?php $__env->startSection('content'); ?>

<header class="mb-3">
    <?php echo $__env->make('statamic::partials.breadcrumb', [
        'url' => cp_route('collections.index'),
        'title' => __('Collections')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <h1><?php echo e($collection->title()); ?></h1>
</header>

<div class="card p-2 content">
    <div class="flex flex-wrap">
        <a href="<?php echo e(cp_route('collections.edit', $collection->handle())); ?>" class="w-full lg:w-1/2 p-2 flex items-start hover:bg-grey-20 rounded-md group">
            <div class="h-8 w-8 mr-2 text-grey-80">
                <?php echo Statamic::svg('hammer-wrench') ?>
            </div>
            <div class="flex-1 mb-2 md:mb-0 md:mr-3">
                <h3 class="mb-1 text-blue"><?php echo e(__('Configure Collection')); ?> &rarr;</h3>
                <p><?php echo e(__('statamic::messages.collection_next_steps_configure_description')); ?></p>
            </div>
        </a>
        <?php $multipleBlueprints = $collection->entryBlueprints()->count() > 1 ?>
        <?php if($multipleBlueprints): ?><div
        <?php else: ?><a href="<?php echo e(cp_route('collections.entries.create', [$collection->handle(), $site])); ?>"
        <?php endif; ?>
            class="w-full lg:w-1/2 p-2 flex items-start hover:bg-grey-20 rounded-md group"
        >
            <div class="h-8 w-8 mr-2 text-grey-80">
                <?php echo Statamic::svg('content-writing') ?>
            </div>
            <div class="flex-1 mb-2 md:mb-0 md:mr-3">
                <h3 class="mb-1 text-blue"><?php echo e(__('Create Entry')); ?> <?php if(!$multipleBlueprints): ?>&rarr;<?php endif; ?></h3>
                <p><?php echo e(__('statamic::messages.collection_next_steps_create_entry_description')); ?></p>
                <?php if($multipleBlueprints): ?>
                    <?php $__currentLoopData = $collection->entryBlueprints(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blueprint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(cp_route('collections.entries.create', [$collection->handle(), $site, 'blueprint' => $blueprint->handle()])); ?>"
                           class="text-blue text-sm mr-1"><?php echo e($blueprint->title()); ?> &rarr;</a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        <?php if($multipleBlueprints): ?></div><?php else: ?></a><?php endif; ?>
        <a href="<?php echo e(cp_route('collections.scaffold', $collection->handle())); ?>" class="w-full lg:w-1/2 p-2 flex items-start hover:bg-grey-20 rounded-md group">
            <div class="h-8 w-8 mr-2 text-grey-80">
                <?php echo Statamic::svg('crane') ?>
            </div>
            <div class="flex-1 mb-2 md:mb-0 md:mr-3">
                <h3 class="mb-1 text-blue"><?php echo e(__('Scaffold Resources')); ?> &rarr;</h3>
                <p><?php echo e(__('statamic::messages.collection_next_steps_scaffold_description')); ?></p>
            </div>
        </a>
        <a href="<?php echo e(Statamic::docsUrl('collections')); ?>" target="_blank" class="w-full lg:w-1/2 p-2 flex items-start hover:bg-grey-20 rounded-md group">
            <div class="h-8 w-8 mr-2 text-grey-80">
                <?php echo Statamic::svg('book-pages') ?>
            </div>
            <div class="flex-1 mb-2 md:mb-0 md:mr-3">
                <h3 class="mb-1 text-blue"><?php echo e(__('Read the Documentation')); ?> &rarr;</h3>
                <p><?php echo e(__('statamic::messages.collection_next_steps_documentation_description')); ?></p>
            </div>
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/collections/empty.blade.php ENDPATH**/ ?>