

<?php $__env->startSection('title', 'Danh sách sản phẩm'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Sản phẩm giá cao nhất</h1>
    <div class="tenhang-list">
        <?php $__currentLoopData = $highestPricedNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="tenhang-item">
                <div class="tenhang-title"><?php echo e($name->tensp); ?></div>
                <div class="tenhang-price">Giá: <?php echo e($name->price); ?></div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <h1>Sản phẩm giá thấp nhất</h1>
    <div class="tenhang-list">
        <?php $__currentLoopData = $lowestPricedNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="tenhang-item">
                <div class="tenhang-title"><?php echo e($name->tensp); ?></div>
                <div class="tenhang-price">Giá: <?php echo e($name->price); ?></div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <h1>Tất cả sản phẩm</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($name->id); ?></th>
                    <td><a href="<?php echo e(route('show', $name->id)); ?>"><?php echo e($name->tensp); ?></a></td>
                    <td>
                        <img src="<?php echo e($name->anh); ?>" width="60" alt="">
                    </td>
                    <td><?php echo e($name->price); ?></td>
                    <td><?php echo e($name->soluong); ?></td>
                    <td><?php echo e($name->tenhang); ?></td>
                    <td>
                        <a href="<?php echo e(route('name.edit', $name->id)); ?>" class="btn btn-warning">Sửa</a>
                        <form action="<?php echo e(route('name.destroy', $name->id)); ?>" method="post" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\assphp3\resources\views//names/sanpham.blade.php ENDPATH**/ ?>