
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh sách</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Thêm mới sản phẩm</h1>
        <form action="<?php echo e(route('name.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="" class="form-label">Tên: </label>
                <input type="text" name="tensp" class="form-control" id="" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Ảnh</label>
                <input type="text" name="anh" class="form-control" id="" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="number" step="0.1" name="price" class="form-control" id="" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Số lượng</label>
                <input type="number" name="soluong" class="form-control" id="" placeholder="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">CateName</label>
                <select name="category_id" class="form-control" id="">
                    <?php $__currentLoopData = $hangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cate->id); ?>">
                            <?php echo e($cate->tenhang); ?> <!-- Sửa thành 'tenhang' -->
                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Add new name</button>
                <a href="<?php echo e(route('name.index')); ?>" class="btn btn-success">Back</a>
            </div>
        </form>
    </div>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\assphp3\resources\views/names/index.blade.php ENDPATH**/ ?>