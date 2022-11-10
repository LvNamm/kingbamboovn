@extends('layout')
@section('title-page','Mây tre đan mỹ nghệ | Kingbamnboo')
@section('main-content')

<!-- style="position: relative;top:200px" -->


<section class="section-products" style="padding: 0px;">
    <!-- Trang trí nhà cửa -->
    <div class="container mb-5">
        <div class="row mb-3" style="border:1px solid green; background-color: #46b946;justify-content: center;align-items: center;">
            <div class="col-md-8 col-lg-6">
                <div>
                    <h2 style="color: white; text-align: center; margin: 0;padding: 5px 0 5px 0;">{{$category}}</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center row-cols-sm-2 row-cols-md-3 row-cols-xl-5">

            @php
            $i = 1;
            for($i=1;$i<=20;$i++){
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