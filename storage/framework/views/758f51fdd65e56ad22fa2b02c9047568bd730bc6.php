

<?php $__env->startSection('title'); ?>
Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('breadcrumb_title'); ?>
<h3>Dashboard</h3>
<?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="container-fluid">
    <div class="row starter-main">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Kick start your project development !</h5>
                </div>
                <div class="card-body">
                    <p>
                        Getting start with your project custom requirements using a ready template which is quite
                        difficult and time taking process, viho Admin provides useful features to kick start your
                        project development with no efforts
                        !
                    </p>
                    <ul>
                        <li>
                            <p>viho Admin provides you getting start pages with different layouts, use the layout as per
                                your custom requirements and just change the branding, menu & content.</p>
                        </li>
                        <li>
                            <p>Every components in viho Admin are decoupled, it means use only components you actually
                                need! Remove unnecessary and extra code easily just by excluding the path to specific
                                SCSS, JS file.</p>
                        </li>
                        <li>
                            <p>
                                It use PUG as template engine to generate pages and whole template quickly using node
                                js. Save your time for doing the common changes for each page (i.e menu, branding and
                                footer) by generating template with
                                pug.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var body = document.body;
        body.classList.add("dark-only");
</script>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UNUD\Semester 4\Praktikum Pemrograman Internet\praktikum-prognet\resources\views/admin/dashboard/index.blade.php ENDPATH**/ ?>