@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">{{ $book->title }}</h1>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ $book->thumbnail }}" class="img-fluid" alt="{{ $book->title }}">
            </div>
            <div class="col-md-8">
                <p><strong>Tác giả:</strong> {{ $book->author }}</p>
                <p><strong>Nhà xuất bản:</strong> {{ $book->publisher }}</p>
                <p><strong>Ngày xuất bản:</strong> {{ $book->publication->format('d-m-Y') }}</p>
                <p><strong>Giá:</strong> {{ number_format($book->price) }} VNĐ</p>
                <p><strong>Số lượng:</strong> {{ $book->quantity }}</p>
                <p><strong>Mô tả:</strong> {{ $book->description }}</p>
            </div>
        </div>
    </div>
@endsection
