

<?php $__env->startSection('title', 'Sản phẩm theo danh mục'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Sản phẩm trong danh mục: <?php echo e($categoryName); ?></h1>
    
    <?php if($names->isEmpty()): ?>
        <p>Không có sản phẩm nào trong danh mục này.</p>
    <?php else: ?>
        <div class="tenhang-list">
            <?php $__currentLoopData = $names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="tenhang-item">
                    <div class="tenhang-title"><?php echo e($name->tensp); ?></div>
                    <div class="tenhang-price">Giá: <?php echo e($name->price); ?></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\assphp3\resources\views/category.blade.php ENDPATH**/ ?>