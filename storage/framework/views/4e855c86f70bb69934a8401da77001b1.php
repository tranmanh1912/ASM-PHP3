

<?php $__env->startSection('content'); ?>
    <h1>Flashship</h1>
    <div class="tenhang-list">
        <?php $__currentLoopData = $names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!-- Sửa từ $Names thành $names -->
            <div class="tenhang-item">
                <div class="tenhang-title"><?php echo e($name->tensp); ?></div>
                <div class="tenhang-price">Giá: <?php echo e($name->price); ?></div>
                <a href="<?php echo e(route('show', $name->id)); ?>"><?php echo e($name->tensp); ?></a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\assphp3\resources\views/trangchu.blade.php ENDPATH**/ ?>