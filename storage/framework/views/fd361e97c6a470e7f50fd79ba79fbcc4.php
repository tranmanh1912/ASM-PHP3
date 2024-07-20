

<?php $__env->startSection('title', 'Trang chủ'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Danh mục sản phẩm</h1>
    <ul>
        <?php $__currentLoopData = $hangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(url('/names/category/' . $hang->id)); ?>"><?php echo e($hang->tenhang); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h1>Sản phẩm giá cao nhất</h1>
    <div class="tenhang-list">
        <?php $__currentLoopData = $highestPricedNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="tenhang-item">
                <a href="<?php echo e(route('show', $name->id)); ?>">
                    <div class="tenhang-title"><?php echo e($name->tensp); ?></div>
                    <div class="tenhang-price">Giá: <?php echo e($name->price); ?></div>
                </a>
                <li>
                    <a href="<?php echo e(route('show', $hang->id)); ?>"><?php echo e($hang->tenhang); ?></a>
                </li>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <h1>Sản phẩm giá thấp nhất</h1>
    <div class="tenhang-list">
        <?php $__currentLoopData = $lowestPricedNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="tenhang-item">
                <a href="<?php echo e(route('show', $name->id)); ?>">
                    <div class="tenhang-title"><?php echo e($name->tensp); ?></div>
                    <div class="tenhang-price">Giá: <?php echo e($name->price); ?></div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\assphp3\resources\views/sanpham.blade.php ENDPATH**/ ?>