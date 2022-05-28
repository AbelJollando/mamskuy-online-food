

<?php $__env->startSection('title'); ?>
    Product Master
    <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3>Product Master</h3>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
        <div class="row starter-main">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>Data Product</h5>
                        <a href="<?php echo e(url('admin/product/create')); ?>" class="float-right btn btn-success btn-sm">Add
                            Product!</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Reviews</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($product->product_name); ?></td>
                                            <td>Rp.<?php echo e(number_format($product->price, 2, ',', '.')); ?></td>
                                            <td><?php echo e($product->stock); ?></td>
                                            <td><?php echo e($product->reviews()->count()); ?></td>
                                            <td>
                                                <a href="<?php echo e(url('admin/product/' . $product->id)); ?>"
                                                    class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                <a href="<?php echo e(url('admin/product/' . $product->id . '/reviews')); ?>"
                                                    class="btn btn-warning btn-sm"><i class="fa fa-comment"></i></a>
                                                <a href="<?php echo e(url('admin/product/' . $product->id . '/edit')); ?>"
                                                    class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                <a onclick="return confirm('Apakah anda yakin untuk menghapus data product?')"
                                                    href="<?php echo e(url('admin/product/' . $product->id . '/delete')); ?>"
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

<?php echo $__env->make('layouts.admin-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\SEMESTER IV\Praktikum Prognet\praktikum-prognet\resources\views/admin/product/index.blade.php ENDPATH**/ ?>