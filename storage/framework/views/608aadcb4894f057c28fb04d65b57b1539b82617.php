<div class="card flush">
    <div class="head">
        <h1><a href="<?php echo e($form->showUrl()); ?>"><?php echo e($title); ?></a></h1>
    </div>
    <div class="card-body pad-16">
        <?php if( ! $submissions): ?>
            <p class="text-center light mv-16"><?php echo e(__('This form is awaiting responses')); ?></p>
        <?php else: ?>
            <table class="dossier">
                <?php $__currentLoopData = $submissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><a href="<?php echo e(cp_route('forms.submissions.show', [$form->handle(), $submission['id']])); ?>"><?php echo e(array_get($submission, $field)); ?></a></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <td class="minor text-right">
                            <?php echo e(($submission['date']->diffInDays() <= 14) ? $submission['date']->diffForHumans() : $submission['date']->format($format)); ?>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/forms/widget.blade.php ENDPATH**/ ?>