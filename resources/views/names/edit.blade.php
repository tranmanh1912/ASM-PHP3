<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>
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
        <h1>Cập nhật sản phẩm</h1>
        <form action="{{route('name.update', $name->id)}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$name->id}}">
            <div class="mb-3">
                <label for="" class="form-label">Tên: </label>
                <input type="text" name="tensp" class="form-control" id="" placeholder="" value="{{$name->tensp}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Ảnh</label>
                <input type="text" name="anh" class="form-control" id="" placeholder="" value="{{$name->anh}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="number" step="0.1" name="price" class="form-control" id="" placeholder="" value="{{$name->price}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Số lượng</label>
                <input type="number" name="soluong" class="form-control" id="" placeholder="" value="{{$name->price}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">CateName</label>
                <select name="category_id" class="form-control" id="" value="{{$name->category_id}}">
                    @foreach ($hangs as $cate)
                        <option value="{{$cate->id}}">
                            {{$cate->tenhang}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Add new name</button>
                <a href="{{route('name.index')}}" class="btn btn-success">Back</a>
            </div>
        </form>
    </div>
  </body>
</html>