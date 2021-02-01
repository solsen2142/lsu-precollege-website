<div class="global-header">
    <div class="lg:w-56 pl-1 md:pl-3 h-full flex items-center">
        <button class="nav-toggle hidden md:block ml-sm flex-shrink-0" @click="toggleNav" aria-label="<?php echo e(__('Toggle Nav')); ?>"><?php echo Statamic::svg('burger') ?></button>
        <button class="nav-toggle md:hidden ml-sm flex-shrink-0" @click="toggleMobileNav" v-if="! mobileNavOpen" aria-label="<?php echo e(__('Toggle Mobile Nav')); ?>"><?php echo Statamic::svg('burger') ?></button>
        <button class="nav-toggle md:hidden ml-sm flex-shrink-0" @click="toggleMobileNav" v-else v-cloak aria-label="<?php echo e(__('Toggle Mobile Nav')); ?>"><?php echo Statamic::svg('close') ?></button>
        <a href="<?php echo e(route('statamic.cp.index')); ?>" class="flex items-end">
            <div v-tooltip="version" class="hidden md:block flex-shrink-0">
                <?php echo Statamic::svg('statamic-wordmark') ?>
                <?php if(Statamic::pro()): ?><span class="font-bold text-4xs align-top">PRO</span><?php endif; ?>
            </div>
        </a>
    </div>

    <div class="sm:px-4 w-full flex-1 mx-auto" :class="wrapperClass">
        <global-search endpoint="<?php echo e(cp_route('search')); ?>" placeholder="<?php echo e(__('Search...')); ?>">
        </global-search>
    </div>

    <div class="lg:absolute top-0 right-0 head-link h-full md:pr-3 flex items-center">

        <?php if(Statamic\Facades\Site::hasMultiple()): ?>
            <global-site-selector>
                <template slot="icon"><?php echo Statamic::svg('sites') ?></template>
            </global-site-selector>
        <?php endif; ?>

        <favorite-creator class="hidden md:block"></favorite-creator>

        <?php if(config('telescope.enabled')): ?>
            <a class="hidden md:block h-6 w-6 p-sm text-grey ml-2 hover:text-grey-80" href="/<?php echo e(config('telescope.path')); ?>" target="_blank" v-tooltip="'Laravel Telescope'">
                <?php echo Statamic::svg('telescope') ?>
            </a>
        <?php endif; ?>
        <dropdown-list v-cloak>
            <template v-slot:trigger>
                <button class="hidden md:block h-6 w-6 ml-2 p-sm text-grey hover:text-grey-80" v-tooltip="__('Useful Links')" aria-label="<?php echo e(__('View Useful Links')); ?>">
                    <?php echo Statamic::svg('book-open') ?>
                </button>
            </template>

            <dropdown-item external-link="https://statamic.dev" class="flex items-center">
                <span><?php echo e(__('Documentation')); ?></span>
                <i class="w-3 block ml-1"><?php echo Statamic::svg('external-link') ?></i>
            </dropdown-item>

            <dropdown-item external-link="https://statamic.com/forum" class="flex items-center">
                <span><?php echo e(__('Support')); ?></span>
                <i class="w-3 block ml-1"><?php echo Statamic::svg('external-link') ?></i>
            </dropdown-item>

            <dropdown-item @click="$events.$emit('keyboard-shortcuts.open')" class="flex items-center">
                <span><?php echo e(__('Keyboard Shortcuts')); ?></span>
            </dropdown-item>
        </dropdown-list>

        <a class="hidden md:block h-6 w-6 p-sm text-grey ml-2 hover:text-grey-80" href="<?php echo e(route('statamic.site')); ?>" target="_blank" v-tooltip="'<?php echo e(__('View Site')); ?>'" aria-label="<?php echo e(__('View Site')); ?>">
            <?php echo Statamic::svg('browser-com') ?>
        </a>
        <dropdown-list v-cloak>
            <template v-slot:trigger>
                <a class="dropdown-toggle items-center ml-2 h-full hide flex">
                    <?php if($user->avatar()): ?>
                        <div class="icon-header-avatar"><img src="<?php echo e($user->avatar()); ?>" /></div>
                    <?php else: ?>
                        <div class="icon-header-avatar icon-user-initials"><?php echo e($user->initials()); ?></div>
                    <?php endif; ?>
                </a>
            </template>

            <div class="px-1">
                <div class="text-base mb-px"><?php echo e($user->email()); ?></div>
                <?php if($user->isSuper()): ?>
                    <div class="text-2xs mt-px text-grey-60"><?php echo e(__('Super Admin')); ?></div>
                <?php endif; ?>
            </div>
            <div class="divider"></div>

            <dropdown-item :text="__('Profile')" redirect="<?php echo e(route('statamic.cp.account')); ?>"></dropdown-item>
            <dropdown-item :text="__('Log out')" redirect="<?php echo e(route('statamic.cp.logout')); ?>"></dropdown-item>
        </dropdown-list>
    </div>
</div>
<?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/partials/global-header.blade.php ENDPATH**/ ?>