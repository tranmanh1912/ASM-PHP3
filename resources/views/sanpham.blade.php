@extends('layout')

@section('title', 'Trang chủ')

@section('content')
    <h1>Danh mục sản phẩm</h1>
    <ul>
        @foreach($hangs as $hang)
            <li>
                <a href="{{ url('/names/category/' . $hang->id) }}">{{ $hang->tenhang }}</a>
            </li>
        @endforeach
    </ul>

    <h1>Sản phẩm giá cao nhất</h1>
    <div class="tenhang-list">
        @foreach($highestPricedNames as $name)
            <div class="tenhang-item">
                <a href="{{ route('show', $name->id) }}">
                    <div class="tenhang-title">{{ $name->tensp }}</div>
                    <div class="tenhang-price">Giá: {{ $name->price }}</div>
                </a>
                <li>
                    <a href="{{ route('show', $hang->id) }}">{{ $hang->tenhang }}</a>
                </li>
            </div>
        @endforeach
    </div>

    <h1>Sản phẩm giá thấp nhất</h1>
    <div class="tenhang-list">
        @foreach($lowestPricedNames as $name)
            <div class="tenhang-item">
                <a href="{{ route('show', $name->id) }}">
                    <div class="tenhang-title">{{ $name->tensp }}</div>
                    <div class="tenhang-price">Giá: {{ $name->price }}</div>
                </a>
            </div>
        @endforeach

    </div>
@endsection
