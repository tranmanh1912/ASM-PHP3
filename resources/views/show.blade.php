{{-- @extends('layout')
@section('content')
    <h1>{{ $name->tensp }}</h1>
    <img src="{{ $name->anh }}" alt="{{ $name->tensp }}">
    <p>Giá bán: {{ number_format($name->price, 2) }}</p>
    <p>Số lượng: {{ $name->soluong }}</p>
@endsection --}}



@extends('layout')

@section('title', 'Chi tiết sản phẩm')

@section('content')
    <div class="container">
        <h1>{{ $name->tensp }}</h1>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ $name->anh }}" class="img-fluid" alt="{{ $name->tensp }}">
            </div>
            <div class="col-md-8">
                <ul>
                    <li><strong>Giá:</strong> {{ $name->price }}</li>
                    <li><strong>Số lượng:</strong> {{ $name->soluong }}</li>
                    <li><strong>Danh mục:</strong> {{ $name->tenhang }}</li>
                </ul>
                <a href="{{ route('name.edit', $name->id) }}" class="btn btn-warning">Sửa</a>
                <form action="{{ route('name.destroy', $name->id) }}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</button>
                </form>
                {{-- <a href="{{ route('views') }}" class="btn btn-secondary">Trở về danh sách sản phẩm</a> --}}
            </div>
        </div>
    </div>
@endsection
