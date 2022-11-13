

<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left"><br>

                <h2>Product List</h2>

            </div>

            <div class="pull-right"><br><br>

                <a class="btn btn-success" href="<?php echo e(route('products.create')); ?>"> +</a>

            </div>

        </div>

    </div>

    <?php if($message = Session::get('success')): ?>

        <div class="alert alert-success">

            <p><?php echo e($message); ?></p>

        </div>

    <?php endif; ?>

    <table class="table table-bordered"><br>

        <tr>

            <th width="50px">No</th>
            <th width="150px">Image</th>
            <th width="200px">Name</th>
            <th width="250px">Details</th>
            <th width="200px">Action</th>

        </tr>

        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>

            <td><?php echo e(++$i); ?></td>

            <td><img src="/image/<?php echo e($product->image); ?>" width="100px"></td>

            <td><?php echo e($product->name); ?></td>

            <td><?php echo e(Str::limit($product->detail, 50)); ?></td>

            <td>

                <form action="<?php echo e(route('products.destroy',$product->id)); ?>" method="POST">

                    <a class="btn btn-info" href="<?php echo e(route('products.show',$product->id)); ?>">View</a>

                    <a class="btn btn-warning" href="<?php echo e(route('products.edit',$product->id)); ?>">Edit</a>

                    <?php echo csrf_field(); ?>

                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>

    <?php echo $products->links(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Desktop\muti-auth\resources\views/products/index.blade.php ENDPATH**/ ?>