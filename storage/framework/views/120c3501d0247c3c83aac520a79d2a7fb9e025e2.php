<?php $__env->startSection('title', Statamic::crumb($taxonomy->title(), 'Taxonomies')); ?>

<?php $__env->startSection('content'); ?>

<header class="mb-3">
    <?php echo $__env->make('statamic::partials.breadcrumb', [
        'url' => cp_route('taxonomies.index'),
        'title' => __('Taxonomies')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <h1><?php echo e($taxonomy->title()); ?></h1>
</header>

<div class="card p-2 content">
    <div class="flex flex-wrap">
        <a href="<?php echo e(cp_route('taxonomies.edit', $taxonomy->handle())); ?>" class="w-full lg:w-1/2 p-2 flex items-start hover:bg-grey-20 rounded-md group">
            <div class="h-8 w-8 mr-2 text-grey-80">
                <?php echo Statamic::svg('hammer-wrench') ?>
            </div>
            <div class="flex-1 mb-2 md:mb-0 md:mr-3">
                <h3 class="mb-1 text-blue"><?php echo e(__('Configure Taxonomy')); ?> &rarr;</h3>
                <p><?php echo e(__('statamic::messages.taxonomy_next_steps_configure_description')); ?></p>
            </div>
        </a>
        <a href="<?php echo e(cp_route('taxonomies.terms.create', [$taxonomy->handle(), $site])); ?>" class="w-full lg:w-1/2 p-2 flex items-start hover:bg-grey-20 rounded-md group">
            <div class="h-8 w-8 mr-2 text-grey-80">
                <?php echo Statamic::svg('content-writing') ?>
            </div>
            <div class="flex-1 mb-2 md:mb-0 md:mr-3">
                <h3 class="mb-1 text-blue"><?php echo e(__('Create Term')); ?> &rarr;</h3>
                <p><?php echo e(__('statamic::messages.taxonomy_next_steps_create_term_description')); ?></p>
            </div>
        </a>
        <a href="<?php echo e(Statamic::docsUrl('taxonomies')); ?>" target="_blank" class="w-full lg:w-1/2 p-2 flex items-start hover:bg-grey-20 rounded-md group">
            <div class="h-8 w-8 mr-2 text-grey-80">
                <?php echo Statamic::svg('book-pages') ?>
            </div>
            <div class="flex-1 mb-2 md:mb-0 md:mr-3">
                <h3 class="mb-1 text-blue"><?php echo e(__('Read the Documentation')); ?> &rarr;</h3>
                <p><?php echo e(__('statamic::messages.taxonomy_next_steps_documentation_description')); ?></p>
            </div>
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/taxonomies/empty.blade.php ENDPATH**/ ?>