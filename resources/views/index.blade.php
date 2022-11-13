@extends('layout')
@section('title-page','Mây tre đan mỹ nghệ | Kingbamnboo')
@section('main-content')
<style>
    .category{
        background-color: {{$interfaceColor->bd_cl_background_category}};
    }

    .category-text{
        color:{{$interfaceColor->bd_cl_text_category}};
    }

    .div-show-product {
      flex-direction: row;
      flex-wrap: nowrap;
      overflow-y: hidden;
      overflow-x: scroll;
    }

    .div-show-product::-webkit-scrollbar {
      height: 0px;
    }

    .div-show-product::-webkit-scrollbar-track {
      background-color: black;
    }


    .product-next:hover {
      cursor: pointer;
    }

    .product-next:hover>.product-action-icon-next{
      color: rgb(87, 87, 87);
    }
    

    .product-previous:hover>.product-action-icon-previous{
      color: rgb(87, 87, 87);
    }
    .product-previous:hover{
        cursor: pointer;
    }

    .product-action-icon{
        color: rgb(187, 170, 170);
    }
    
</style>
<div class="container p-0">
      <div class=" ps-0 pe-0  mb-3 row w-100" style="justify-content:space-between">
        <div class="col-md-8 pe-1 boder-green">
        
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="/images/carosel/bia1.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/images/carosel/bia2.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/images/carosel/bia3.png" alt="Third slide">
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
            <img class="boder-green w-100 p-0 pb-2" src="/images/carosel/biabe1.png"  alt="">
          </div>

          <div class="col-md-12">
            <img class="col-md-12 boder-green w-100 p-0 pt-2" src="/images/carosel/biabe1.png"  alt="">
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
                <div class ="category-text">
                    <a  href="/danhmuc/trang-tri-nha-cua">
                        <h2 class="category-text">Trang trí nhà cửa</h2>
                    </a>
                </div>
            </div>
        </div>
        <div style="position: relative">
            <div class="product-next product-icon-more mb-1" style="height: 99%;width:5%;position:absolute; right:-1%;">
                <i class="fa-solid fa-chevron-right product-action-icon product-action-icon-next" style="position:absolute; top:50%;left:50%;transform:translate(-50%,-50%);font-size:2rem"></i>
            </div>


            <div class="product-previous product-icon-more mb-1" style="height: 99%;width:5%;position:absolute; left:-1%;">
                <i class="fa-solid fa-chevron-left product-action-icon product-action-icon-previous" style="position:absolute; top:50%;left:50%;transform:translate(-50%,-50%);font-size:2rem"></i>
            </div>

            <div class="row div-show-product">
                @php
                $i = 1;
                for($i=1;$i<=10;$i++){ if($i%2==1){ 
                    if($i==1)
                    echo'<a href="/sanpham/abc" class="product-item w-20">
                    <div id="product-1" class="single-product me-1 mb-1">
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
                    else{
                        echo'<a href="/sanpham/abc" class="product-item w-20">
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
                    }
                    else{
                    echo '<a href="/sanpham/abc" class="product-item w-20">
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
                    } @endphp
                    <!-- Single Product -->
            </div>
        </div>
    </div>
    <!-- Trang trí quán cafe -->
    <div class="container mb-5">
        <div class="row mb-3 category" >
            <div class="col-md-8 col-lg-6">
                <div class ="category-text">
                    <a  href="/danhmuc/trang-tri-quan-cafe">
                        <h2 class="category-text">Trang trí quán cafe</h2>
                    </a>
                </div>
            </div>
        </div>
        <div style="position: relative">
            <div class="product-next product-icon-more mb-1" style="height: 99%;width:5%;position:absolute; right:-1%;">
                <i class="fa-solid fa-chevron-right product-action-icon product-action-icon-next" style="position:absolute; top:50%;left:50%;transform:translate(-50%,-50%);font-size:2rem"></i>
            </div>


            <div class="product-previous product-icon-more mb-1" style="height: 99%;width:5%;position:absolute; left:-1%;">
                <i class="fa-solid fa-chevron-left product-action-icon product-action-icon-previous" style="position:absolute; top:50%;left:50%;transform:translate(-50%,-50%);font-size:2rem"></i>
            </div>

            <div class="row div-show-product">
                @php
                $i = 1;
                for($i=1;$i<=10;$i++){ if($i%2==1){ 
                    if($i==1)
                    echo'<a href="/sanpham/abc" class="product-item w-20">
                    <div id="product-1" class="single-product me-1 mb-1">
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
                    else{
                        echo'<a href="/sanpham/abc" class="product-item w-20">
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
                    }
                    else{
                    echo '<a href="/sanpham/abc" class="product-item w-20">
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
                    } @endphp
                    <!-- Single Product -->
            </div>
        </div>
    </div>
    <!-- Trang trí văn phòng -->
    <div class="container mb-5">
        <div class="row mb-3 category" >
            <div class="col-md-8 col-lg-6">
                <div class ="category-text">
                    <a  href="/danhmuc/trang-tri-văn phòng">
                        <h2 class="category-text">Trang trí văn phòng</h2>
                    </a>
                </div>
            </div>
        </div>
        <div style="position: relative">
            <div class="product-next product-icon-more mb-1" style="height: 99%;width:5%;position:absolute; right:-1%;">
                <i class="fa-solid fa-chevron-right product-action-icon product-action-icon-next" style="position:absolute; top:50%;left:50%;transform:translate(-50%,-50%);font-size:2rem"></i>
            </div>


            <div class="product-previous product-icon-more mb-1" style="height: 99%;width:5%;position:absolute; left:-1%;">
                <i class="fa-solid fa-chevron-left product-action-icon product-action-icon-previous" style="position:absolute; top:50%;left:50%;transform:translate(-50%,-50%);font-size:2rem"></i>
            </div>

            <div class="row div-show-product">
                @php
                $i = 1;
                for($i=1;$i<=10;$i++){ if($i%2==1){ 
                    if($i==1)
                    echo'<a href="/sanpham/abc" class="product-item w-20">
                    <div id="product-1" class="single-product me-1 mb-1">
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
                    else{
                        echo'<a href="/sanpham/abc" class="product-item w-20">
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
                    }
                    else{
                    echo '<a href="/sanpham/abc" class="product-item w-20">
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
                    } @endphp
                    <!-- Single Product -->
            </div>
        </div>
    </div>
    <!-- Khay đựng -->
    <div class="container mb-5">
        <div class="row mb-3 category" >
            <div class="col-md-8 col-lg-6">
                <div class ="category-text">
                    <a  href="/danhmuc/khay-dung">
                        <h2 class="category-text">Khay đựng</h2>
                    </a>
                </div>
            </div>
        </div>
        <div style="position: relative">
            <div class="product-next product-icon-more mb-1" style="height: 99%;width:5%;position:absolute; right:-1%;">
                <i class="fa-solid fa-chevron-right product-action-icon product-action-icon-next" style="position:absolute; top:50%;left:50%;transform:translate(-50%,-50%);font-size:2rem"></i>
            </div>


            <div class="product-previous product-icon-more mb-1" style="height: 99%;width:5%;position:absolute; left:-1%;">
                <i class="fa-solid fa-chevron-left product-action-icon product-action-icon-previous" style="position:absolute; top:50%;left:50%;transform:translate(-50%,-50%);font-size:2rem"></i>
            </div>

            <div class="row div-show-product">
                @php
                $i = 1;
                for($i=1;$i<=10;$i++){ if($i%2==1){ 
                    if($i==1)
                    echo'<a href="/sanpham/abc" class="product-item w-20">
                    <div id="product-1" class="single-product me-1 mb-1">
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
                    else{
                        echo'<a href="/sanpham/abc" class="product-item w-20">
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
                    }
                    else{
                    echo '<a href="/sanpham/abc" class="product-item w-20">
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
                    } @endphp
                    <!-- Single Product -->
            </div>
        </div>
    </div>
    <!-- Nha bếp -->
    <div class="container mb-5">
        <div class="row mb-3 category" >
            <div class="col-md-8 col-lg-6">
                <div class ="category-text">
                    <a  href="/danhmuc/nha-bep">
                        <h2 class="category-text">Nhà bếp</h2>
                    </a>
                </div>
            </div>
        </div>
        <div style="position: relative">
            <div class="product-next product-icon-more mb-1" style="height: 99%;width:5%;position:absolute; right:-1%;">
                <i class="fa-solid fa-chevron-right product-action-icon product-action-icon-next" style="position:absolute; top:50%;left:50%;transform:translate(-50%,-50%);font-size:2rem"></i>
            </div>


            <div class="product-previous product-icon-more mb-1" style="height: 99%;width:5%;position:absolute; left:-1%;">
                <i class="fa-solid fa-chevron-left product-action-icon product-action-icon-previous" style="position:absolute; top:50%;left:50%;transform:translate(-50%,-50%);font-size:2rem"></i>
            </div>

            <div class="row div-show-product">
                @php
                $i = 1;
                for($i=1;$i<=10;$i++){ if($i%2==1){ 
                    if($i==1)
                    echo'<a href="/sanpham/abc" class="product-item w-20">
                    <div id="product-1" class="single-product me-1 mb-1">
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
                    else{
                        echo'<a href="/sanpham/abc" class="product-item w-20">
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
                    }
                    else{
                    echo '<a href="/sanpham/abc" class="product-item w-20">
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
                    } @endphp
                    <!-- Single Product -->
            </div>
        </div>
    </div>
    <!-- Túi xách -->
    <div class="container mb-5">
        <div class="row mb-3 category" >
            <div class="col-md-8 col-lg-6">
                <div class ="category-text">
                    <a  href="/danhmuc/tui-xach">
                        <h2 class="category-text">Túi xách</h2>
                    </a>
                </div>
            </div>
        </div>
        <div style="position: relative">
            <div class="product-next product-icon-more mb-1" style="height: 99%;width:5%;position:absolute; right:-1%;">
                <i class="fa-solid fa-chevron-right product-action-icon product-action-icon-next" style="position:absolute; top:50%;left:50%;transform:translate(-50%,-50%);font-size:2rem"></i>
            </div>


            <div class="product-previous product-icon-more mb-1" style="height: 99%;width:5%;position:absolute; left:-1%;">
                <i class="fa-solid fa-chevron-left product-action-icon product-action-icon-previous" style="position:absolute; top:50%;left:50%;transform:translate(-50%,-50%);font-size:2rem"></i>
            </div>

            <div class="row div-show-product">
                @php
                $i = 1;
                for($i=1;$i<=10;$i++){ if($i%2==1){ 
                    if($i==1)
                    echo'<a href="/sanpham/abc" class="product-item w-20">
                    <div id="product-1" class="single-product me-1 mb-1">
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
                    else{
                        echo'<a href="/sanpham/abc" class="product-item w-20">
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
                    }
                    else{
                    echo '<a href="/sanpham/abc" class="product-item w-20">
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
                    } @endphp
                    <!-- Single Product -->
            </div>
        </div>
    </div>
    <!-- Giỏ đựng -->
    <div class="container mb-5">
        <div class="row mb-3 category" >
            <div class="col-md-8 col-lg-6">
                <div class ="category-text">
                    <a  href="/danhmuc/gio-dung">
                        <h2 class="category-text">gio-dung</h2>
                    </a>
                </div>
            </div>
        </div>
        <div style="position: relative">
            <div class="product-next product-icon-more mb-1" style="height: 99%;width:5%;position:absolute; right:-1%;">
                <i class="fa-solid fa-chevron-right product-action-icon product-action-icon-next" style="position:absolute; top:50%;left:50%;transform:translate(-50%,-50%);font-size:2rem"></i>
            </div>


            <div class="product-previous product-icon-more mb-1" style="height: 99%;width:5%;position:absolute; left:-1%;">
                <i class="fa-solid fa-chevron-left product-action-icon product-action-icon-previous" style="position:absolute; top:50%;left:50%;transform:translate(-50%,-50%);font-size:2rem"></i>
            </div>

            <div class="row div-show-product">
                @php
                $i = 1;
                for($i=1;$i<=10;$i++){ if($i%2==1){ 
                    if($i==1)
                    echo'<a href="/sanpham/abc" class="product-item w-20">
                    <div id="product-1" class="single-product me-1 mb-1">
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
                    else{
                        echo'<a href="/sanpham/abc" class="product-item w-20">
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
                    }
                    else{
                    echo '<a href="/sanpham/abc" class="product-item w-20">
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
                    } @endphp
                    <!-- Single Product -->
            </div>
        </div>
    </div>
</section>



<br>
<br>
<br>
@endsection