

<?php $__env->startSection('title'); ?>
    Discount Master
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3>Discount Master</h3>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
        <div class="row starter-main">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>Data Discount</h5>
                        <a href="<?php echo e(url('admin/discount/create')); ?>" class="float-right btn btn-success btn-sm">Add
                            Discount!</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Discount</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $discounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($discount->product->product_name); ?></td>
                                            <td><?php echo e($discount->percentage); ?>%</td>
                                            <td><?php echo e($discount->start); ?></td>
                                            <td><?php echo e($discount->end); ?></td>
                                            <td>
                                                <a href="<?php echo e(url('admin/discount/' . $discount->id . '/edit')); ?>"
                                                    class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                <a onclick="return confirm('Apakah anda yakin untuk menghapus data discount?')"
                                                    href="<?php echo e(url('admin/discount/' . $discount->id . '/delete')); ?>"
                                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php $__env->startPush('scripts'); ?>
        <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UNUD\Semester 4\Praktikum Pemrograman Internet\praktikum-prognet\resources\views/admin/discount/index.blade.php ENDPATH**/ ?>