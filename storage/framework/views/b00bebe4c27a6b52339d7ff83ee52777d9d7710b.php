

<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left"><br>

                <h2>Product</h2>

            </div>

            <div class="pull-right"><br>

                <a class="btn btn-secondary" href="<?php echo e(route('products.index')); ?>"> Back</a>

            </div>

        </div>

    </div>

    <br>
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                <?php echo e($product->name); ?>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">
    
                    
    
                    <img src="/image/<?php echo e($product->image); ?>" width="400px">
    
                </div>
    
            </div>

            <div class="form-group">

                <strong>Details:</strong>

                <?php echo e($product->detail); ?>


            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Desktop\muti-auth\resources\views/products/show.blade.php ENDPATH**/ ?>