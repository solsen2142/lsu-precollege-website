<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <?php echo $__env->make('statamic::partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
      <div id="statamic" :style="{ marginRight: panes.length ? `24rem` : null }">

      <?php echo $__env->make('statamic::partials.session-expiry', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('statamic::partials.licensing-alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('statamic::partials.global-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div id="main"
            class="<?php echo $__env->yieldContent('content-class'); ?>"
            :class="{
                  'nav-closed': ! navOpen,
                  'nav-mobile-open': mobileNavOpen,
                  'showing-license-banner': showBanner
            }">
            <?php echo $__env->make('statamic::partials.nav-main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('statamic::partials.nav-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="workspace">
                  <div class="page-wrapper" :class="wrapperClass">
                        <?php echo $__env->yieldContent('content'); ?>
                  </div>
            </div>

            <component
                  v-for="component in appendedComponents"
                  :key="component.id"
                  :is="component.name"
                  v-bind="component.props"
                  v-on="component.events"
            ></component>

            <portal to="modals" v-if="showLoginModal">
                <login-modal
                      email="<?php echo e($user->email()); ?>"
                      @closed="showLoginModal = false"
                ></login-modal>
            </portal>

            <keyboard-shortcuts-modal></keyboard-shortcuts-modal>

            <tooltip :pointer="true"></tooltip>

            <portal-target name="live-preview"></portal-target>

            <stacks v-if="stacks.length"></stacks>

            <portal-target
                  v-for="(modal, i) in modals"
                  :key="`modal-${modal}-${i}`"
                  :name="`modal-${i}`"
            ></portal-target>

            <portal-target name="pane" :slim="true"></portal-target>

            <portal-target name="outside"></portal-target>
      </div>

      

  </div>

<?php echo $__env->make('statamic::partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
<?php /**PATH /home/vagrant/code/vendor/statamic/cms/src/Providers/../../resources/views/layout.blade.php ENDPATH**/ ?>