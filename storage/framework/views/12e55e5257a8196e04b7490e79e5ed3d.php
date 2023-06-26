<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between mb-4">
        <h3>Product List</h3>
        <a class="btn btn-success btn-sm" href="<?php echo e(route('create')); ?>">Create New</a>
    </div>

    <?php if(session()->has('success')): ?>
        <label class="alert alert-success w-100"><?php echo e(session('success')); ?></label>
    <?php elseif(session()->has('error')): ?>
        <label class="alert alert-danger w-100"><?php echo e(session('error')); ?></label>
    <?php endif; ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Created At</th>
                <th>Name</th>
                <th>Weight</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->created_at); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->weight); ?></td>
                    <td><?php echo e($product->price); ?></td>
                    <td>
                        <a href="<?php echo e(route('edit', ['id' => $product->id])); ?>" class="btn btn-success btn-sm">Edit</a>
                        <a href="<?php echo e(route('show', ['id' => $product->id])); ?>" class="btn btn-info btn-sm">Show</a>

                        <form action="<?php echo e(route('delete', ['id' => $product->id])); ?>" method="POST" class="d-inline-block" id="deleteForm">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmDelete()">Delete</button>
                        </form>

                        <script>
                            function confirmDelete(){
                                if (confirm("Are you sure you want to delete this item?")){
                                    document.getElementById("deleteForm").submit();
                                }else{
                                    return false;
                                }
                            }
                        </script>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <div class="d-flex justify-content-between">
        <?php echo e($products->render()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel/project-laravel/resources/views/products/index.blade.php ENDPATH**/ ?>