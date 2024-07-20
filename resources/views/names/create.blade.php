<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thêm mới sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Thêm mới sản phẩm</h1>
        <form action="{{ route('name.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="tensp" class="form-label">Tên sản phẩm</label>
                <input type="text" name="tensp" class="form-control" id="tensp" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="mb-3">
                <label for="anh" class="form-label">Ảnh</label>
                <input type="text" name="anh" class="form-control" id="anh" placeholder="Nhập URL ảnh">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Giá</label>
                <input type="number" step="0.1" name="price" class="form-control" id="price" placeholder="Nhập giá sản phẩm">
            </div>
            <div class="mb-3">
                <label for="soluong" class="form-label">Số lượng</label>
                <input type="number" name="soluong" class="form-control" id="soluong" placeholder="Nhập số lượng sản phẩm">
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Danh mục</label>
                <select name="category_id" class="form-control" id="category_id">
                    @foreach ($hangs as $cate)
                        <option value="{{ $cate->id }}">{{ $cate->tenhang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Thêm mới</button>
                <a href="{{ route('name.index') }}" class="btn btn-secondary">Quay lại</a>
            </div>
        </form>
    </div>
</body>
</html>
