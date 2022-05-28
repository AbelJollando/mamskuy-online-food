

<?php $__env->startSection('content'); ?>

<div class="mb-4">
    <h1 class="text-center">My Account</h1>
</div>
<div class="my-4 my-xl-8">
    <div class="row">
        <div class="col-md-5 ml-xl-auto mr-md-auto mr-xl-0 mb-8 mb-md-0">
            <!-- Title -->
            <div class="border-bottom border-color-1 mb-6">
                <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Login</h3>
            </div>
            <p class="text-gray-90 mb-4">Welcome back! Sign in to your account.</p>
            <!-- End Title -->
            <form class="js-validate" novalidate="novalidate" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <!-- Form Group -->
                <div class="js-form-message form-group">
                    <label class="form-label" for="signinSrEmailExample3">Email address
                        <span class="text-danger">*</span>
                    </label>
                    <input type="email" class="form-control  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                        id="signinSrEmailExample3" placeholder="Email address" aria-label="Username or Email address"
                        required data-msg="Please enter a valid email address." data-error-class="u-has-error"
                        data-success-class="u-has-success">
                    <?php $__errorArgs = ['email'];
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
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                    <label class="form-label" for="signinSrPasswordExample2">Password <span
                            class="text-danger">*</span></label>
                    <input type="password" class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"
                        id="signinSrPasswordExample2" placeholder="Password" aria-label="Password" required
                        data-msg="Your password is invalid. Please try again." data-error-class="u-has-error"
                        data-success-class="u-has-success">
                    <?php $__errorArgs = ['password'];
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
                <!-- End Form Group -->

                <!-- Checkbox -->
                <div class="js-form-message mb-3">
                    <div class="custom-control custom-checkbox d-flex align-items-center">
                        <input type="checkbox" class="custom-control-input" id="rememberCheckbox" name="remember"
                            data-error-class="u-has-error" data-success-class="u-has-success" <?php echo e(old('remember')
                            ? 'checked' : ''); ?>>
                        <label class="custom-control-label form-label" for="rememberCheckbox">
                            Remember me
                        </label>
                    </div>
                </div>
                <!-- End Checkbox -->

                <!-- Button -->
                <div class="mb-1">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary-dark-w px-5">Login</button>
                    </div>
                    <div class="mb-2">
                        <a class="text-blue" href="<?php echo e(route('password.request')); ?>">Lost your password?</a>
                    </div>
                </div>
                <!-- End Button -->
            </form>
        </div>
        <div class="col-md-1 d-none d-md-block">
            <div class="flex-content-center h-100">
                <div class="width-1 bg-1 h-100"></div>
                <div
                    class="width-50 height-50 border border-color-1 rounded-circle flex-content-center font-italic bg-white position-absolute">
                    or</div>
            </div>
        </div>
        <div class="col-md-5 ml-md-auto ml-xl-0 mr-xl-auto">
            <!-- Title -->
            <div class="border-bottom border-color-1 mb-6">
                <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Register</h3>
            </div>
            <p class="text-gray-90 mb-4">Create new account today to reap the benefits of a personalized shopping
                experience.</p>
            <!-- End Title -->
            <!-- Form Group -->
            <form class="js-validate" novalidate="novalidate" action="<?php echo e(route('register')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="js-form-message form-group mb-5">
                    <label class="form-label" for="name">Name
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" id="name"
                        placeholder="Name" aria-label="Name" required data-msg="Please enter a valid name."
                        data-error-class="u-has-error" data-success-class="u-has-success">
                    <?php $__errorArgs = ['name'];
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
                <div class="js-form-message form-group mb-5">
                    <label class="form-label" for="email">Email address
                        <span class="text-danger">*</span>
                    </label>
                    <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                        id="email" placeholder="Email address" aria-label="Email address" required
                        data-msg="Please enter a valid email address." data-error-class="u-has-error"
                        data-success-class="u-has-success">
                    <?php $__errorArgs = ['email'];
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
                <div class="row">
                    <div class="col-6">
                        <div class="js-form-message form-group mb-5">
                            <label class="form-label" for="password">Password
                                <span class="text-danger">*</span>
                            </label>
                            <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                name="password" id="password" placeholder="Password" aria-label="Password" required
                                data-msg="Please enter a password." data-error-class="u-has-error"
                                data-success-class="u-has-success">
                            <?php $__errorArgs = ['password'];
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
                    </div>
                    <div class="col-6">
                        <div class="js-form-message form-group mb-5">
                            <label class="form-label" for="password_confirmation">Confirm Password
                                <span class="text-danger">*</span>
                            </label>
                            <input type="password"
                                class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"
                                aria-label="Confirm Password" required data-msg="Please enter a same password."
                                data-error-class="u-has-error" data-success-class="u-has-success">
                            <?php $__errorArgs = ['password_confirmation'];
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
                    </div>
                </div>
                <!-- End Form Group -->

                <!-- Button -->
                <div class="mb-6">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary-dark-w px-5">Register</button>
                    </div>
                </div>
                <!-- End Button -->
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\SEMESTER IV\Praktikum Prognet\praktikum-prognet\resources\views/user/auth/index.blade.php ENDPATH**/ ?>