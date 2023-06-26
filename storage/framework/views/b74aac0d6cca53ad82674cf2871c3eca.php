<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between mb-4">
        <h3>Show Product</h3>
        <a class="btn btn-success btn-sm" href="<?php echo e(route('index')); ?>">List Products</a>
    </div>

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo e($product->name); ?>" disabled>
    </div>
    <div class="form-group">
        <label>Color</label>
        <input type="color" name="color" class="form-control" value="<?php echo e($product->color); ?>" disabled>
    </div>
    <div class="form-group">
        <label>Weight</label>
        <input type="text" name="weight" class="form-control" value="<?php echo e($product->weight); ?>" disabled>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" row="5" placeholder="product description" class="form-control" disabled><?php echo e($product->description); ?></textarea>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel/project-laravel/resources/views/products/show.blade.php ENDPATH**/ ?>