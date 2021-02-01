<?php $licenses = app('Statamic\Licensing\LicenseManager'); ?>

<?php if($licenses->requestFailed()): ?>
    <div class="p-1 w-full fixed bottom-0 z-20">
        <div class="py-1.5 px-2 text-sm w-full rounded-md bg-yellow border border-yellow-dark">
        <?php if($licenses->requestErrorCode() === 422): ?>
            <?php echo e(__('statamic::messages.outpost_error_422')); ?>

            <?php echo e(join(' ', $licenses->requestValidationErrors()->unique())); ?>

        <?php elseif($licenses->requestErrorCode() === 429): ?>
            <?php echo e(__('statamic::messages.outpost_error_429')); ?>

            <?php echo e(trans_choice('statamic::messages.try_again_in_seconds', $licenses->failedRequestRetrySeconds())); ?>

        <?php else: ?>
            <?php echo e(__('statamic::messages.outpost_issue_try_later')); ?>

        <?php endif; ?>
        </div>
    </div>
<?php else: ?>
    <?php if($licenses->invalid()): ?>
        <div class="p-1 w-full fixed bottom-0 z-20" v-show="showBanner">
            <div class="
                py-1.5 px-2 text-sm w-full rounded-md
                <?php if($licenses->isOnTestDomain()): ?> bg-grey-80 text-grey-30 <?php endif; ?>
                <?php if($licenses->isOnPublicDomain()): ?> bg-red text-white <?php endif; ?>
            ">
                <?php if($licenses->isOnTestDomain()): ?>
                    <div class="flex items-center justify-between">
                        <span>
                            <b class="mr-1"><?php echo e(__('Trial Mode')); ?>:</b>
                            <?php echo e(__('statamic::messages.licensing_trial_mode_alert')); ?>

                        </span>
                        <div class="flex">
                            <button @click="hideBanner" class="mr-2 text-2xs opacity-50 hover:opacity-75"><?php echo e(__('Dismiss')); ?></button>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('access licensing utility')): ?>
                            <a href="<?php echo e(cp_route('utilities.licensing')); ?>" class="text-white hover:text-yellow flex items-center" aria-label="<?php echo e(__('Go to Your License Settings')); ?>">
                                <?php echo Statamic::svg('arrow-right') ?>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="flex items-center justify-between">
                        <?php echo e(__('statamic::messages.licensing_production_alert')); ?>

                        <div class="flex">
                            <button @click="hideBanner" class="mr-2 text-2xs opacity-50 hover:opacity-75"><?php echo e(__('Dismiss')); ?></button>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('access licensing utility')): ?>
                                <a href="<?php echo e(cp_route('utilities.licensing')); ?>" class="text-white hover:text-yellow flex items-center" aria-label="<?php echo e(__('Go to Your License Settings')); ?>">
                                    <?php echo Statamic::svg('arrow-right') ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/partials/licensing-alerts.blade.php ENDPATH**/ ?>