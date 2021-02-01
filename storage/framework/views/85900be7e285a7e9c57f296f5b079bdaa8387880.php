<?php $str = app('Statamic\Support\Str'); ?>

<?php $__env->startSection('body_class', 'rad-mode'); ?>
<?php $__env->startSection('title', __('Log in')); ?>

<?php $__env->startSection('content'); ?>
<div class="logo pt-7">
    <?php echo Statamic::svg('statamic-wordmark') ?>
</div>

<div class="card auth-card mx-auto">
    <login inline-template :show-email-login="!<?php echo e($str::bool($oauth)); ?>" :has-error="<?php echo e($str::bool(count($errors) > 0)); ?>">
    <div>
        <?php if($oauth): ?>
            <div class="login-oauth-providers">
                <?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="provider mb-1">
                        <a href="<?php echo e($provider->loginUrl()); ?>?redirect=<?php echo e(parse_url(cp_route('index'))['path']); ?>" class="btn block btn-primary">
                            <?php echo e(__('Log in with :provider', ['provider' => $provider->label()])); ?>

                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="text-center italic my-3">or</div>

            <div class="login-with-email" v-if="! showEmailLogin">
                <a class="btn block" @click.prevent="showEmailLogin = true">
                    <?php echo e(__('Log in with email')); ?>

                </a>
            </div>
        <?php endif; ?>

        <form method="POST" v-show="showEmailLogin" class="email-login select-none" <?php if($oauth): ?> v-cloak <?php endif; ?>>
            <?php echo csrf_field(); ?>


            <input type="hidden" name="referer" value="<?php echo e($referer); ?>" />

            <div class="mb-4">
                <label class="mb-1" for="input-email"><?php echo e(__('Email')); ?></label>
                <input type="text" class="input-text input-text" name="email" value="<?php echo e(old('email')); ?>" autofocus id="input-email">
                <?php if($hasError('email')): ?><div class="text-red text-xs mt-1"><?php echo e($errors->first('email')); ?></div><?php endif; ?>
            </div>

            <div class="mb-4">
                <label class="mb-1" for="input-password"><?php echo e(__('Password')); ?></label>
                <input type="password" class="input-text input-text" name="password" id="input-password">
                <?php if($hasError('password')): ?><div class="text-red text-xs mt-1"><?php echo e($errors->first('password')); ?></div><?php endif; ?>
            </div>
            <div class="flex justify-between items-center">
                <label for="remember-me" class="flex items-center cursor-pointer">
                    <input type="checkbox" name="remember" id="remember-me">
                    <span class="ml-1"><?php echo e(__('Remember me')); ?></span>
                </label>
                <button type="submit" class="btn-primary"><?php echo e(__('Log in')); ?></button>
            </div>
        </form>
    </div>
    </login>
</div>
<?php if(! $oauth): ?>
    <div class="w-full text-center mt-2">
        <a href="<?php echo e(cp_route('password.request')); ?>" class="forgot-password-link text-sm opacity-75 hover:opacity-100">
            <?php echo e(__('Forgot password?')); ?>

        </a>
    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::outside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/auth/login.blade.php ENDPATH**/ ?>