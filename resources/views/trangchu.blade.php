@extends('layout')

@section('content')
    <h1>Flashship</h1>
    <div class="tenhang-list">
        @foreach($names as $name) <!-- Sửa từ $Names thành $names -->
            <div class="tenhang-item">
                <div class="tenhang-title">{{ $name->tensp }}</div>
                <div class="tenhang-price">Giá: {{ $name->price }}</div>
                <a href="{{ route('show', $name->id) }}">{{ $name->tensp }}</a>
            </div>
        @endforeach
    </div>
@endsection
