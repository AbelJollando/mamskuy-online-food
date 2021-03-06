

<?php $__env->startSection('title'); ?>
    Transaction
    <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3>Transaction</h3>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
        <div class="row starter-main">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>Data Transaction</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Shipping Cost</th>
                                        <th>Courier</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($transaction->user->name); ?></td>
                                            <td><?php echo e($transaction->address); ?></td>
                                            <td><?php echo e($transaction->regency . ', ' . $transaction->province); ?></td>
                                            <td><?php echo e(number_format($transaction->shipping_cost, 2, ',', '.')); ?></td>
                                            <td class="text-uppercase"><?php echo e($transaction->courier->courier); ?></td>
                                            <td><?php echo e($transaction->status); ?></td>
                                            <td><?php echo e(number_format($transaction->total, 2, ',', '.')); ?></td>
                                            <td class="justify-content-center">
                                                <div class="mb-2">
                                                    <?php if($transaction->status != 'Dibatalkan' && $transaction->status != 'Telah Sampai'): ?>
                                                        <form
                                                            action="<?php echo e(route('admin.transaction.cancel', $transaction->id)); ?>"
                                                            method="post" id="form-cancel-transaction">
                                                            <?php echo csrf_field(); ?>
                                                            <a onclick="if(confirm('Apakah kamu yakin ingin membatalkan transaksi ini?')){return document.getElementById('form-cancel-transaction').submit()}"
                                                                class="btn btn-danger btn-xs" data-bs-placement="top"
                                                                title="Cancel Transaction">
                                                                <i class="fa fa-ban"></i>
                                                            </a>
                                                        </form>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="mb-2">
                                                    <div class="mb-2">
                                                        <a data-bs-toggle="modal"
                                                            data-bs-target="#product--<?php echo e($transaction->id); ?>"
                                                            class="btn btn-info btn-xs">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </div>
                                                    <div class="mb-2">
                                                        <a data-bs-toggle="modal"
                                                            data-bs-target="#proof--<?php echo e($transaction->id); ?>"
                                                            class="btn btn-primary btn-xs">
                                                            <i class="fa fa-file-photo-o"></i>
                                                        </a>
                                                    </div>
                                                    <?php if($transaction->status == 'Pending'): ?>
                                                        <form
                                                            action="<?php echo e(route('admin.transaction.accept', $transaction->id)); ?>"
                                                            method="post" id="form-acc">
                                                            <?php echo csrf_field(); ?>
                                                            <a onclick="document.getElementById('form-acc').submit()"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Accept Payment" class="btn btn-success btn-xs">
                                                                <i class="fa fa-check"></i>
                                                            </a>
                                                        </form>
                                                    <?php endif; ?>
                                                    <?php if($transaction->status == 'Dalam Pengiriman'): ?>
                                                        <form
                                                            action="<?php echo e(route('admin.transaction.shipped', $transaction->id)); ?>"
                                                            method="post" id="form-shipped">
                                                            <?php echo csrf_field(); ?>
                                                            <a onclick="document.getElementById('form-shipped').submit()"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Has Shipped" class="btn btn-warning btn-xs">
                                                                <i class="fa fa-truck"></i>
                                                            </a>
                                                        </form>
                                                    <?php endif; ?>
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

    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <div class="modal fade" id="product--<?php echo e($transaction->id); ?>" tabindex="-1" aria-labelledby="productLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productLabel">Transaction ID :
                            #<?php echo e($transaction->id); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <table class="table table-bordered text-white" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Discount</th>
                                        <th>Price After Discount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $transaction->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($product->product_name); ?></td>
                                            <td><?php echo e(number_format($product->price, 2, ',', '.')); ?>

                                            </td>
                                            <td><?php echo e($product->pivot->qty); ?></td>
                                            <td><?php echo e($product->pivot->discount); ?>%</td>
                                            <td><?php echo e(number_format((1 - $product->pivot->discount / 100) * $product->price, 2, ',', '.')); ?>

                                            </td>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="proof--<?php echo e($transaction->id); ?>" tabindex="-1" aria-labelledby="proofLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="proofLabel">Proof Of Payment Transaction ID :
                            #<?php echo e($transaction->id); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="<?php echo e(asset('images/proof_payment/' . $transaction->proof_of_payment)); ?>"
                            class="img-fluid">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__env->startPush('scripts'); ?>
        <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable({
                    "drawCallback": function() {
                        var tooltipTriggerList = [].slice.call(document.querySelectorAll(
                            '[data-bs-toggle="tooltip"]'))
                        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                            return new bootstrap.Tooltip(tooltipTriggerEl, {
                                container: 'body'
                            })
                        })

                    }
                });
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\SEMESTER IV\Praktikum Prognet\praktikum-prognet\resources\views/admin/transaction/index.blade.php ENDPATH**/ ?>