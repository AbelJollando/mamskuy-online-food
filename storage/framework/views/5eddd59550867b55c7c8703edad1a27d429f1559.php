<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Font Awesome-->
    <?php echo $__env->make('layouts.admin-layout.partials.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper compact-sidebar" id="pageWrapper">
        <!-- Page Header Start-->
        <?php echo $__env->make('layouts.admin-layout.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->
            <?php echo $__env->make('layouts.admin-layout.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success alert-block">
                        <strong><?php echo e($message); ?></strong>
                    </div>
                <?php endif; ?>

                <?php if($message = Session::get('danger')): ?>
                <div class="alert alert-danger alert-block">
                        <strong><?php echo e($message); ?></strong>
                </div>
                <?php endif; ?>
                <?php echo $__env->yieldContent('content'); ?>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer fixed">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright
                                <?php echo e(date('Y')); ?>-<?php echo e(date('y', strtotime('+1 year'))); ?>

                                © viho All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Hand crafted & made with <i
                                    class="fa fa-heart font-secondary"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->


    <script type="text/javascript">
        // localStorage.clear();

        var div = document.querySelector("div.page-wrapper")
        if (div.classList.contains('compact-sidebar')) {
            div.classList.remove("compact-sidebar");
        }
        if (div.classList.contains('modern-sidebar')) {
            div.classList.remove("modern-sidebar");
        }
        localStorage.setItem('page-wrapper', 'page-wrapper compact-wrapper compact-sidebar');
        localStorage.setItem('page-body-wrapper', 'sidebar-icon');
        var body = document.body;
        body.classList.add("dark-only");
    </script>

    <?php echo $__env->make('layouts.admin-layout.partials.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>


</body>

</html>
<?php /**PATH D:\Kuliah\SEMESTER IV\Praktikum Prognet\praktikum-prognet\resources\views/layouts/admin-layout/master.blade.php ENDPATH**/ ?>