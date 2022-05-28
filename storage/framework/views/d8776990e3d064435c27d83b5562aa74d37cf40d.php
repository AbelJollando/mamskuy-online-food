

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="login-card">
                <form class="theme-form login-form" action="<?php echo e(route('admin.login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <h4>Login</h4>
                    <h6>Welcome back! Log in to your account.</h6>
                    <div class="form-group">
                        <label>Username</label>
                        <div class="input-group <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><span
                                class="input-group-text"><i class="icon-email"></i></span>
                            <input class="form-control" type="text" required="" placeholder="admin" name="username">
                        </div>
                        <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                            <input class="form-control" type="password" name="password" required=""
                                placeholder="*********">
                            <div class="show-hide"><span class="show"> </span></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout.blank-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\SEMESTER IV\Praktikum Prognet\praktikum-prognet\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>