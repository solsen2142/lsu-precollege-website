<?php $__env->startSection('nav-main'); ?>
    <nav class="nav-main" v-cloak>
        <div class="nav-main-inner">
            <?php $__currentLoopData = $nav; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($section !== 'Top Level'): ?>
                    <h6><?php echo e(__($section)); ?></h6>
                <?php endif; ?>
                <ul>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if (! ($item->view())): ?>
                            <li class="<?php echo e($item->isActive() ? 'current' : ''); ?>">
                                <a href="<?php echo e($item->url()); ?>">
                                    <i><?php echo $item->icon(); ?></i><span><?php echo e(__($item->name())); ?></span>
                                </a>
                                <?php if($item->children() && $item->isActive()): ?>
                                    <ul>
                                        <?php $__currentLoopData = $item->children(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="<?php echo e($child->isActive() ? 'current' : ''); ?>">
                                                <a href="<?php echo e($child->url()); ?>"><?php echo e(__($child->name())); ?></a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php else: ?>
                            <?php echo $__env->make($item->view(), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </nav>
<?php $__env->stopSection(); ?>

<?php echo $__env->yieldContent('nav-main'); ?>
<?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/partials/nav-main.blade.php ENDPATH**/ ?>