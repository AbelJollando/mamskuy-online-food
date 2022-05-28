<header class="main-nav">
    <nav>
        <div class="main-navbar">
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="<?php echo e(route('admin.index')); ?>"><i
                                data-feather="home"></i><span>Dashboard</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="<?php echo e(route('admin.product.index')); ?>"><i
                                data-feather="gift"></i><span>Product CRUD</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="<?php echo e(route('admin.courier.index')); ?>"><i
                                data-feather="truck"></i><span>Courier CRUD</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="<?php echo e(route('admin.productcategory.index')); ?>"><i
                                data-feather="package"></i><span>Product Categories CRUD</span></a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="<?php echo e(route('admin.discount.index')); ?>"><i
                                data-feather="dollar-sign"></i><span>Discount CRUD</span></a>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title" href="<?php echo e(route('admin.transaction.index')); ?>"><i
                                data-feather="dollar-sign"></i><span>Transaction CRUD</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH D:\UNUD\Semester 4\Praktikum Pemrograman Internet\praktikum-prognet\resources\views/layouts/admin-layout/partials/sidebar.blade.php ENDPATH**/ ?>