

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
                        <h5>Create Data Discount</h5>
                        <a href="<?php echo e(url('admin/discount')); ?>" class="float-right btn btn-success btn-sm">Back!</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="post" enctype="multipart/form-data" action="<?php echo e(route('admin.discount.store')); ?>">
                                <?php echo csrf_field(); ?>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Product</th>
                                        <td>
                                            <select name="product[]" multiple class="form-control <?php $__errorArgs = ['product'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="product">
                                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($product->id); ?>"><?php echo e($product->product_name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['product'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback">
                                                <?php echo e($message); ?>

                                            </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Discount</span> </th>
                                        <td> <input name="discount" type="number" class="form-control <?php $__errorArgs = ['discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('discount')); ?>">
                                            <?php $__errorArgs = ['discount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback">
                                                <?php echo e($message); ?>

                                            </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Start Time</span> </th>
                                        <td> <input name="start" type="datetime-local" class="form-control <?php $__errorArgs = ['start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('start')); ?>">
                                            <?php $__errorArgs = ['start'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback">
                                                <?php echo e($message); ?>

                                            </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>End Time</span> </th>
                                        <td> <input name="end" type="datetime-local" class="form-control <?php $__errorArgs = ['end'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('end')); ?>">
                                            <?php $__errorArgs = ['end'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="invalid-feedback">
                                                <?php echo e($message); ?>

                                            </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" class="btn btn-primary" />
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startPush('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.3/dist/js/select2.min.js"></script>
        <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
        </script>
        <script>
            $(document).ready(function() {

            // Selecr2
            $('#product').select2({
                placeholder: 'Select Product',
                width: 'resolve',
            }); 
        });
        </script>
    <?php $__env->stopPush(); ?>

    <?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/select2.css')); ?>">
    <style>
        .select2-selection--multiple .select2-search--inline .select2-search__field {
            width: auto !important;
        }

    </style>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UNUD\Semester 4\Praktikum Pemrograman Internet\praktikum-prognet\resources\views/admin/discount/create.blade.php ENDPATH**/ ?>