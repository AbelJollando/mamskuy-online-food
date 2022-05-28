

<?php $__env->startSection('title'); ?>
Product Master
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">
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
                    <a href="<?php echo e(url('admin/product')); ?>" class="float-right btn btn-success btn-sm" >Back!</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" > 
                            <tr>
                                <th>Product Name</th>
                                <td><?php echo e($data->product_name); ?></td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>Rp.<?php echo e(number_format($data->price, 2, ',', '.')); ?></td>
                            </tr>
                            <tr>
                                <th>Stock</th>
                                <td><?php echo e($data->stock); ?></td>
                            </tr>
                            <tr>
                                <th>Weight</th>
                                <td><?php echo e($data->weight); ?></td>
                            </tr>
                            <tr>
                                <th>Product Rate</th>
                                <td><?php echo e($data->product_rate); ?></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><?php echo e($data->description); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row starter-main">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Data Gambar Product</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" > 
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td> <img class="img-fluid" width="150" src="<?php echo e($product->image_name); ?>"/></td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#imageModal<?php echo e($product->id); ?>">
                                            <i class="fa-solid fa fa-image"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    
                                    <div class="modal fade" id="imageModal<?php echo e($product->id); ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="imageModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="imageModalLabel">Image Product</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <center>
                                                <div class="modal-body">
                                                    <img src="<?php echo e($product->image_name); ?>" class="img-fluid"
                                                        alt="<?php echo e($product->name); ?>">
                                                </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row starter-main">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Data Category Product</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" > 
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($category->category_name); ?></td>
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


<script type="text/javascript">
    var body = document.body;
        body.classList.add("dark-only");
</script>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UNUD\Semester 4\Praktikum Pemrograman Internet\praktikum-prognet\resources\views/admin/product/show.blade.php ENDPATH**/ ?>