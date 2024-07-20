@extends('layout')

@section('title', 'Sản phẩm theo danh mục')

@section('content')
    <h1>Sản phẩm trong danh mục: {{ $categoryName }}</h1>
    
    @if ($names->isEmpty())
        <p>Không có sản phẩm nào trong danh mục này.</p>
    @else
        <div class="tenhang-list">
            @foreach($names as $name)
                <div class="tenhang-item">
                    <div class="tenhang-title">{{ $name->tensp }}</div>
                    <div class="tenhang-price">Giá: {{ $name->price }}</div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
