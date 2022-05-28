

<?php $__env->startSection('title'); ?>
    Product Master
<?php $__env->stopSection(); ?>

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
                        <h5>Edit Data Product</h5>
                        <a href="<?php echo e(url('admin/product')); ?>" class="float-right btn btn-success btn-sm">Back!</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="post" enctype="multipart/form-data" action="<?php echo e(route('admin.product.update',$product)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Product Name</th>
                                        <td><input name="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($product->product_name); ?>" /> 
                                            <?php $__errorArgs = ['name'];
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
                                        <th>Price</span> </th>
                                        <td> <input name="price" type="text" class="form-control  <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($product->price); ?>">
                                            <?php $__errorArgs = ['price'];
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
                                        <th>Stock</span> </th>
                                        <td> <input name="stock" type="number" class="form-control <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($product->stock); ?>">
                                            <?php $__errorArgs = ['stock'];
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
                                        <th>Weight</span> </th>
                                        <td> <input name="weight" type="number" class="form-control <?php $__errorArgs = ['weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($product->weight); ?>">
                                            <?php $__errorArgs = ['weight'];
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
                                        <th>Description</th>
                                        <td><textarea name="desc" class="form-control <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e($product->description); ?></textarea> 
                                            <?php $__errorArgs = ['desc'];
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

    
    <div class="container-fluid">
        <div class="row starter-main">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>Data Image Product</h5>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addImageModal">
                            + Add Image Product
                    </button>
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
                                    <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td> <img class="img-fluid" width="100" src="<?php echo e($image->image_name); ?>"/></td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#imageModal<?php echo e($image->id); ?>">
                                                <i class="fa-solid fa fa-image"></i>
                                                </button>
                                                <a onclick="return confirm('Apakah anda yakin untuk menghapus gambar product?')"
                                                    href="<?php echo e(url('admin/product/' . $image->id . '/deleteImage')); ?>"
                                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>     
                                            </td>
                                        </tr>
                                         
                                    <div class="modal fade" id="imageModal<?php echo e($image->id); ?>" tabindex="-1" role="dialog"
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
                                                    <img src="<?php echo e($image->image_name); ?>" class="img-fluid"
                                                        alt="<?php echo e($image->name); ?>">
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                                + Add Category Product
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" > 
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($category->category_name); ?></td>
                                            <td>
                                                <form action="<?php echo e(route('admin.product.delete-category', $product->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?php echo e($category->id); ?>">
                                                    <button onclick="return confirm('Apakah anda yakin untuk menghapus category product?')" type="submit"  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>
                                                
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

    
    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add Category Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('admin.product.category.add',$product)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="name">Product Category</label>
                            <select name="categories[]" multiple class="form-control" id="category" name="category">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>

      
      <div class="modal fade" id="addImageModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Category Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('admin.product.image.add',$product)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="name">Product Picture</label>
                            <input type="file" multiple name="product[]" class="form-control" id="product-images" />
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/select2.css')); ?>">
    <style>
        .select2-selection--multiple .select2-search--inline .select2-search__field {
            width: auto !important;
        }

    </style>
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.3/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script>
        $(document).ready(function() {

            // Selecr2
            $('#category').select2({
                placeholder: 'Select Category',
                width: 'resolve',
            });

            // filepond
            FilePond.registerPlugin(FilePondPluginFileValidateType);
            FilePond.registerPlugin(
                FilePondPluginFileValidateSize);
            FilePond.registerPlugin(FilePondPluginImagePreview);
            const post = FilePond.create(document.querySelector('#product-images'));
            post.setOptions({
                server: {
                    process: {
                        url: '<?php echo e(route('admin.product.images.upload')); ?>',
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                        }
                    },
                    revert: {
                        url: '<?php echo e(route('admin.product.images.revert')); ?>',
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                        },
                        onload: (response) => {
                            console.log(response);
                        },
                        onerror: (response) => {
                            console.log(response);
                        }
                    }
                },
                allowImagePreview: 'true',
                imagePreviewMaxHeight: 256,
                allowFileTypeValidation: 'true',
                acceptedFileTypes: ['image/jpg', 'image/jpeg', 'image/png'],
                allowFileSizeValidation: 'true',
                maxFileSize: '3mb'
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin-layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UNUD\Semester 4\Praktikum Pemrograman Internet\praktikum-prognet\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>