@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Trang Chủ</h1>

        <h2 class="my-4">8 Sản phẩm có giá cao nhất</h2>
        <div class="row">
            @foreach ($highPriceBooks as $book)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ $book->thumbnail }}" class="card-img-top" alt="{{ $book->title }}">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('book.show', $book->id) }}">{{ $book->title }}</a></h5>
                            <p class="card-text">{{ number_format($book->price) }} VNĐ</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <h2 class="my-4">8 Sản phẩm có giá thấp nhất</h2>
        <div class="row">
            @foreach ($lowPriceBooks as $book)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ $book->thumbnail }}" class="card-img-top" alt="{{ $book->title }}">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('book.show', $book->id) }}">{{ $book->title }}</a></h5>
                            <p class="card-text">{{ number_format($book->price) }} VNĐ</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
