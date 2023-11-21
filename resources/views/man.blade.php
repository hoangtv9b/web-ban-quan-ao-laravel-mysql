@extends('Layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="title-page-man d-flex justify-content-center align-items-center">
            <h1 class="title-page-nav">Nam</h1>
        </div>
    </div>
</div>
<div class="container-fluid p-5">
    <div class="row justify-content-between">
        <div class="col-md-4">
            <label class="" for="">Danh mục sản phẩm</label>
        </div>
        <div class="col-md-4">
            <span>hiển thị từ 1 đến 20 sản phẩm</span>
            <select name="filter-prouct" id="">
                <option value="">Thứ tự mặc định</option>
                <option value="">Độ phổ biến</option>
                <option value="">Từ cao đến thấp</option>
                <option value="">Từ thấp đến cao</option>
            </select>
        </div>
    </div>
</div>
<div class="container-fluid px-5">
    <div class="row">
        <div class="col-md-2 col-12">
            <p>Adidas</p>
            <p>Adidas</p>
            <p>Adidas</p>
            <p>Adidas</p>
            <p>Adidas</p>
        </div>
        <div class="col-md-10 col-12">
            <div class="row">
                @foreach ($man as $mans)
                    <div class="col-md-3 my-5 col-6 d-flex text-center justify-content-center flex-column block-product">
                        <a href="{{ route('detailProduct', $mans->slug) }}"><img class="img-product" src="{{ $mans->avtProduct }}" alt="title block" height="245px"></a>
                        <div class="image-thumbnail-wrap text-center mt-4">
                            <img src="{{ $mans->avtProduct }}" class="image-thumbnail" alt="">
                        </div>
                        <a href="{{ route('detailProduct', $mans->slug) }}" class="name-product-block">{{ $mans->nameProduct }}</a>
                        <div class="price-wrap">
                            <span class="price-product"><strike>{{ number_format($mans->price) }}₫</strike></span><span class="price-prm-product">{{ number_format($mans->prmPrice) }}₫</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
