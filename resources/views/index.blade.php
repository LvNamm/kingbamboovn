@extends('layout')
@section('title-page','Mây che đan mỹ nghệ | Kingbamnboo')
@section('main-content')
<style>
    .category{
        background-color: {{$interfaceColor->bd_cl_background_category}};
    }

    .category-text{
        color:{{$interfaceColor->bd_cl_text_category}};
    }
</style>
<div class="container p-0">
      <div class=" ps-0 pe-0  mb-3 row w-100" style="justify-content:space-between">
        <div class="col-md-8 pe-1 boder-green">
        
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="/images/carosel/anhbialon1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/images/carosel/anhbialon2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/images/carosel/anhbialon3.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                 
                  
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  
                  
                </a>
              </div>

        </div>

        <div class="col-md-4 ps-1 row p-0">
          <div class="col-md-12 ">
            <img class="boder-green w-100 p-0 pb-2" src="/images/carosel/anhbianho3.jpg"  alt="">
          </div>

          <div class="col-md-12">
            <img class="col-md-12 boder-green w-100 p-0 pt-2" src="/images/carosel/anhbianho4.jpg"  alt="">
          </div>
          
          
        </div>
      </div>
    </div>


<nav class="navbar navbar-expand-lg navbar-light bg-light container" style=" display:flex;border: 1px solid green;flex-direction: column;">
    <div class="container-fluid">
        <a class="navbar-brand d-md-none d-md-flex" href="#">Danh mục</a>
        <a href="/danhmuc/all">Tât cả sản phẩm</a>
    </div>
    <div class="container-fluid">
        <div>
            <ul class="navbar-nav d-flex flex-row">
                @foreach ($categories as $category)
                <li class="nav-item   item-dm">
                    <a class="nav-link active" aria-current="page" href="/danhmuc/trang-tri-nha-cua">
                        <img style="height:100px" src="{{$category->url_img}}" alt="">
                        <p style="margin: 0;text-align: center;">{{$category->title}}</p>
                    </a>
                </li>
                @endforeach
                

            </ul>

        </div>

    </div>
</nav>






<section class="section-products">
    <!-- Trang trí nhà cửa -->
    <div class="container mb-5">
        <div class="row mb-3 category" >
            <div class="col-md-8 col-lg-6">
                <div>
                    <a href="/danhmuc/trang-tri-nha-cua">
                        <h2 class="category-text">Trang trí nhà cửa</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-xl-5">
        @php
            $i = 1;
            for($i=1;$i<=10;$i++){
                 if($i%2==1){
                     echo'<a href="/sanpham/abc" class="col product-item">
                    <div id="product-1" class="single-product ms-1 me-1 mb-1">
                        <div class="part">
                            <img class="test" style="width: 100%;" src="/images/ex_product.jpg" alt="">
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Here Product Title</h3>
                            <h4 class="product-old-price">$79.99</h4>
                            <h4 class="product-price">$49.99</h4>
                        </div>
                    </div>
                </a>' ;
                    } 
                    else{
                        echo '<a href="/sanpham/abc" class="col product-item">
                    <div id="product-2" class="single-product ms-1 me-1 mb-1">
                        <div class="part">
                            <img class="test" style="width: 100%;" src="/images/ex_product.jpg" alt="">
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Here Product Title</h3>
                            <h4 class="product-price">$49.99</h4>
                        </div>
                    </div>
                    </a>';
                    }
            } @endphp <!-- Single Product -->
        </div>
    </div>
    <!-- Trang trí quán cafe -->
    <div class="container mb-5">
        <div class="row mb-3 category" >
            <div class="col-md-8 col-lg-6">
                <a href="/danhmuc/trang-tri-quan-cafe">
                    <h2 class="category-text">Trang trí quán cafe</h2>
                </a>
            </div>
        </div>
        <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-xl-5">
            <!-- Single Product -->
             @php
            $i = 1;
            for($i=1;$i<=10;$i++){
                 if($i%2==1){
                     echo'<a href="/sanpham/abc" class="col product-item">
                    <div id="product-1" class="single-product ms-1 me-1 mb-1">
                        <div class="part">
                            <img class="test" style="width: 100%;" src="/images/ex_product.jpg" alt="">
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Here Product Title</h3>
                            <h4 class="product-old-price">$79.99</h4>
                            <h4 class="product-price">$49.99</h4>
                        </div>
                    </div>
                </a>' ;
                    } 
                    else{
                        echo '<a href="/sanpham/abc" class="col product-item">
                    <div id="product-2" class="single-product ms-1 me-1 mb-1">
                        <div class="part">
                            <img class="test" style="width: 100%;" src="/images/ex_product.jpg" alt="">
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Here Product Title</h3>
                            <h4 class="product-price">$49.99</h4>
                        </div>
                    </div>
                    </a>';
                    }
            } @endphp <!-- Single Product -->
        </div>
    </div>
    <!-- Trang trí văn phòng -->
    <div class="container mb-5">
        <div class="row mb-3 category" >
            <div class="col-md-8 col-lg-6">
                <div>
                    <a href="/danhmuc/trang-tri-van-phong">
                        <h2 class="category-text">Trang trí văn phòng</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-xl-5">
            <!-- Single Product -->
             @php
            $i = 1;
            for($i=1;$i<=10;$i++){
                 if($i%2==1){
                     echo'<a href="/sanpham/abc" class="col product-item">
                    <div id="product-1" class="single-product ms-1 me-1 mb-1">
                        <div class="part">
                            <img class="test" style="width: 100%;" src="/images/ex_product.jpg" alt="">
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Here Product Title</h3>
                            <h4 class="product-old-price">$79.99</h4>
                            <h4 class="product-price">$49.99</h4>
                        </div>
                    </div>
                </a>' ;
                    } 
                    else{
                        echo '<a href="/sanpham/abc" class="col product-item">
                    <div id="product-2" class="single-product ms-1 me-1 mb-1">
                        <div class="part">
                            <img class="test" style="width: 100%;" src="/images/ex_product.jpg" alt="">
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Here Product Title</h3>
                            <h4 class="product-price">$49.99</h4>
                        </div>
                    </div>
                    </a>';
                    }
            } @endphp <!-- Single Product -->
        </div>
    </div>
    <!-- Khay đựng -->
    <div class="container mb-5">
        <div class="row mb-3 category" >
            <div class="col-md-8 col-lg-6">
                <div>
                    <a href="/danhmuc/khay-dung">
                        <h2 class="category-text">Khay đựng</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-xl-5">
            <!-- Single Product -->
             @php
            $i = 1;
            for($i=1;$i<=10;$i++){
                 if($i%2==1){
                     echo'<a href="/sanpham/abc" class="col product-item">
                    <div id="product-1" class="single-product ms-1 me-1 mb-1">
                        <div class="part">
                            <img class="test" style="width: 100%;" src="/images/ex_product.jpg" alt="">
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Here Product Title</h3>
                            <h4 class="product-old-price">$79.99</h4>
                            <h4 class="product-price">$49.99</h4>
                        </div>
                    </div>
                </a>' ;
                    } 
                    else{
                        echo '<a href="/sanpham/abc" class="col product-item">
                    <div id="product-2" class="single-product ms-1 me-1 mb-1">
                        <div class="part">
                            <img class="test" style="width: 100%;" src="/images/ex_product.jpg" alt="">
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Here Product Title</h3>
                            <h4 class="product-price">$49.99</h4>
                        </div>
                    </div>
                    </a>';
                    }
            } @endphp <!-- Single Product -->
        </div>
    </div>
    <!-- Nha bếp -->
    <div class="container mb-5">
        <div class="row mb-3 category" >
            <div class="col-md-8 col-lg-6">
                <div>
                    <a href="/danhmuc/nha-bep">
                        <h2 class="category-text">Nhà bếp</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-xl-5">
            <!-- Single Product -->
             @php
            $i = 1;
            for($i=1;$i<=10;$i++){
                 if($i%2==1){
                     echo'<a href="/sanpham/abc" class="col product-item">
                    <div id="product-1" class="single-product ms-1 me-1 mb-1">
                        <div class="part">
                            <img class="test" style="width: 100%;" src="/images/ex_product.jpg" alt="">
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Here Product Title</h3>
                            <h4 class="product-old-price">$79.99</h4>
                            <h4 class="product-price">$49.99</h4>
                        </div>
                    </div>
                </a>' ;
                    } 
                    else{
                        echo '<a href="/sanpham/abc" class="col product-item">
                    <div id="product-2" class="single-product ms-1 me-1 mb-1">
                        <div class="part">
                            <img class="test" style="width: 100%;" src="/images/ex_product.jpg" alt="">
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Here Product Title</h3>
                            <h4 class="product-price">$49.99</h4>
                        </div>
                    </div>
                    </a>';
                    }
            } @endphp <!-- Single Product -->
        </div>
    </div>
    <!-- Túi xách -->
    <div class="container mb-5">
        <div class="row mb-3 category" >
            <div class="col-md-8 col-lg-6">
                <div>
                    <a href="/danhmuc/tui-xach">
                        <h2 class="category-text">Túi xách</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-xl-5">
            <!-- Single Product -->
             @php
            $i = 1;
            for($i=1;$i<=10;$i++){
                 if($i%2==1){
                     echo'<a href="/sanpham/abc" class="col product-item">
                    <div id="product-1" class="single-product ms-1 me-1 mb-1">
                        <div class="part">
                            <img class="test" style="width: 100%;" src="/images/ex_product.jpg" alt="">
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Here Product Title</h3>
                            <h4 class="product-old-price">$79.99</h4>
                            <h4 class="product-price">$49.99</h4>
                        </div>
                    </div>
                </a>' ;
                    } 
                    else{
                        echo '<a href="/sanpham/abc" class="col product-item">
                    <div id="product-2" class="single-product ms-1 me-1 mb-1">
                        <div class="part">
                            <img class="test" style="width: 100%;" src="/images/ex_product.jpg" alt="">
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Here Product Title</h3>
                            <h4 class="product-price">$49.99</h4>
                        </div>
                    </div>
                    </a>';
                    }
            } @endphp <!-- Single Product -->
        </div>
    </div>
    <!-- Giỏ đựng -->
    <div class="container product-item">
        <div class="row mb-3 category" >
            <div class="col-md-8 col-lg-6">
                <div>
                    <a href="/danhmuc/gio-dung">
                        <h2 class="category-text">Giỏ đựng</h2>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-xl-5">
            <!-- Single Product -->
             @php
            $i = 1;
            for($i=1;$i<=10;$i++){
                 if($i%2==1){
                     echo'<a href="/sanpham/abc" class="col product-item">
                    <div id="product-1" class="single-product ms-1 me-1 mb-1">
                        <div class="part">
                            <img class="test" style="width: 100%;" src="/images/ex_product.jpg" alt="">
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Here Product Title</h3>
                            <h4 class="product-old-price">$79.99</h4>
                            <h4 class="product-price">$49.99</h4>
                        </div>
                    </div>
                </a>' ;
                    } 
                    else{
                        echo '<a href="/sanpham/abc" class="col product-item">
                    <div id="product-2" class="single-product ms-1 me-1 mb-1">
                        <div class="part">
                            <img class="test" style="width: 100%;" src="/images/ex_product.jpg" alt="">
                        </div>
                        <div class="part-2">
                            <h3 class="product-title">Here Product Title</h3>
                            <h4 class="product-price">$49.99</h4>
                        </div>
                    </div>
                    </a>';
                    }
            } @endphp <!-- Single Product -->
        </div>
    </div>
</section>



<br>
<br>
<br>
@endsection