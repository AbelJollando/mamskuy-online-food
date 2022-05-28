

<?php $__env->startSection('title'); ?>
    Product Review
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3>Product Review</h3>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
        <div class="row starter-main">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>Reviews</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User</th>
                                        <th>Rate</th>
                                        <th>Content</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($review->user->name); ?></td>
                                            <td><?php echo e($review->rate); ?> ⭐</td>
                                            <td><?php echo e($review->content); ?></td>
                                            <td>
                                                
                                                <button type="button" data-bs-toggle="modal"
                                                    data-bs-target="#modal-review-<?php echo e($review->id); ?>"
                                                    class="btn btn-success"><i class="fa fa-comments"></i></button>
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

    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <div class="modal fade" id="modal-review-<?php echo e($review->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Response
                            Review</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo e(url('admin/product/' . $review->id . '/review-response')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" id="content" class="form-control"
                                    rows="3"><?php echo e($review->response->content ?? ''); ?></textarea>
                                </textarea>
                            </div>
                            <?php if(!$review->response()->exists()): ?>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit
                                        Response</button>
                                </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__env->startPush('scripts'); ?>
        <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UNUD\Semester 4\Praktikum Pemrograman Internet\praktikum-prognet\resources\views/admin/product/review.blade.php ENDPATH**/ ?>