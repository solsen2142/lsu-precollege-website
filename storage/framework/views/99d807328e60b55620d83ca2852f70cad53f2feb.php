<?php $__env->startSection('body_class', 'rad-mode'); ?>

<?php $__env->startSection('content'); ?>
    <div class="logo pt-7">
        <?php echo Statamic::svg('statamic-wordmark') ?>
    </div>

    <div class="card auth-card mx-auto">
        <div class="text-center pb-2 mb-2">
            <h1 class="mb-2 text-lg text-grey-80"><?php echo e(__('Forgot Your Password?')); ?></h1>
            <p class="text-sm text-grey"><?php echo e(__('statamic::messages.forgot_password_enter_email')); ?></p>
        </div>

        <?php if(session('status')): ?>
            <div class="alert alert-success mb-3">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(cp_route('password.email')); ?>">
            <?php echo csrf_field(); ?>

            <div class="mb-4">
                <label for="email" class="mb-1"><?php echo e(__('Email Address')); ?></label>
                <input id="email" type="text" class="input-text input-text" name="email" value="<?php echo e(old('email')); ?>" >

                <?php $__errorArgs = ['email', 'user.forgot_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-red text-xs mt-1"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit" class="btn-primary">
                <?php echo e(__('Submit')); ?>

            </button>
        </form>

    </div>

    <div class="w-full text-center mt-2">
        <a href="<?php echo e(cp_route('login')); ?>" class="forgot-password-link text-sm opacity-75 hover:opacity-100">
            <?php echo e(__('I remember my password')); ?>

        </a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::outside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>