<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between mb-4">
        <h3>Create Product</h3>
        <a class="btn btn-success btn-sm" href="<?php echo e(route('index')); ?>">List Products</a>
    </div>

    <?php if(session()->has('success')): ?>
        <label class="alert alert-success w-100"><?php echo e(session('success')); ?></label>
    <?php elseif(session()->has('error')): ?>
        <label class="alert alert-danger w-100"><?php echo e(session('error')); ?></label>
    <?php endif; ?>

    <form action="<?php echo e(route('store')); ?>" method="POSt">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="product name">
        </div>
        <div class="form-group">
            <label>Color</label>
            <input type="color" name="color" class="form-control" placeholder="product color">
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Weight</label>
                            <input type="text" name="weight" class="form-control" placeholder="product weight">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" placeholder="product price">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" row="5" placeholder="product description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel/project-laravel/resources/views/products/create.blade.php ENDPATH**/ ?>