@extends('layout')

@section('title', 'Danh sách sản phẩm')

@section('content')
    <h1>Danh sách sản phẩm</h1>
    <a href="{{ route('name.create') }}" class="btn btn-success mb-3">Thêm mới sản phẩm</a>
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
            @foreach ($names as $name)
                <tr>
                    <th scope="row">{{ $name->id }}</th>
                    <td><a href="{{ route('show', $name->id) }}">{{ $name->tensp }}</a></td>
                    <td>
                        <img src="{{ $name->anh }}" width="60" alt="">
                    </td>
                    <td>{{ $name->price }}</td>
                    <td>{{ $name->soluong }}</td>
                    <td>{{ $name->tenhang }}</td>
                    <td>
                        <a href="{{ route('name.edit', $name->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('name.destroy', $name->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
