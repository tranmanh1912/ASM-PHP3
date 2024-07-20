





<?php $__env->startSection('title', 'Chi tiết sản phẩm'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1><?php echo e($name->tensp); ?></h1>
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo e($name->anh); ?>" class="img-fluid" alt="<?php echo e($name->tensp); ?>">
            </div>
            <div class="col-md-8">
                <ul>
                    <li><strong>Giá:</strong> <?php echo e($name->price); ?></li>
                    <li><strong>Số lượng:</strong> <?php echo e($name->soluong); ?></li>
                    <li><strong>Danh mục:</strong> <?php echo e($name->tenhang); ?></li>
                </ul>
                <a href="<?php echo e(route('name.edit', $name->id)); ?>" class="btn btn-warning">Sửa</a>
                <form action="<?php echo e(route('name.destroy', $name->id)); ?>" method="post" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</button>
                </form>
                
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\assphp3\resources\views/show.blade.php ENDPATH**/ ?>