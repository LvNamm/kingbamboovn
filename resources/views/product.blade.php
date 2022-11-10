@extends('layout')
@section('title-page','Mây che đan mỹ nghệ | Kingbamnboo')
@section('main-content')
<style>
    .w-20 {
        width: 20% !important;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="false">
                <div class="carousel-inner" style="border:1px solid rgb(122, 240, 122)">
                    <div class="carousel-item active">
                        <img src="/images/products/lotly/bia.jpg" class="d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item">
                        <img src="/images/products/lotly/6.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/products/lotly/7.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/products/lotly/8.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/products/lotly/9.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/products/lotly/10.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/products/lotly/11.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/products/lotly/12.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/products/lotly/5.jpg" class="d-block w-100" alt="...">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- style="white-space:nowrap;overflow-x: scroll;" -->
            <div class="mt-2" style="display:flex; flex-wrap: wrap;">
                <div class="pe-1 pb-1 w-20">
                    <img style="border:1px solid rgba(0,0,0,0.3)" class="w-100" src="/images/products/lotly/bia.jpg" alt="">
                </div>
                <div class="pe-1 pb-1 w-20">
                    <img style="border:1px solid rgba(0,0,0,0.3)" class="w-100" src="/images/products/lotly/6.jpg" alt="">
                </div>
                <div class="pe-1 pb-1 w-20">
                    <img style="border:1px solid rgba(0,0,0,0.3)" class="w-100" src="/images/products/lotly/7.jpg" alt="">
                </div>
                <div class="pe-1 pb-1 w-20">
                    <img style="border:1px solid rgba(0,0,0,0.3)" class="w-100"  src="/images/products/lotly/8.jpg" alt="">
                </div>
                <div class="pe-1 pb-1 w-20">
                    <img style="border:1px solid rgba(0,0,0,0.3)" class="w-100" src="/images/products/lotly/9.jpg" alt="">
                </div>
                <div class="pe-1 pb-1 w-20">
                    <img style="border:1px solid rgba(0,0,0,0.3)" class="w-100" src="/images/products/lotly/10.jpg" alt="">
                </div>
                <div class="pe-1 pb-1 w-20">
                    <img style="border:1px solid rgba(0,0,0,0.3)" class="w-100" src="/images/products/lotly/11.jpg" alt="">
                </div>
                <div class="pe-1 pb-1 w-20">
                    <img style="border:1px solid rgba(0,0,0,0.3)" class="w-100" src="/images/products/lotly/12.jpg" alt="">
                </div>
                <div class="pe-1 pb-1 w-20">
                    <img style="border:1px solid rgba(0,0,0,0.3)" class="w-100" src="/images/products/lotly/15.jpg" alt="">
                </div>
            </div>

        </div>

        <div class=" ps-5 col-md-6">
            <div class="mt-3 mb-3">
                <b>
                    <h5>Lót ly mây tre đan - King Bamboo</h5>
                </b>
            </div>


            <div>
                <p>20,000đ</p>
            </div>

            <div>
                <p>Phân loại</p>
            </div>

            <div style="display:flex;">
                <p style="margin-right: 150px;">Số lượng</p>
                <div class="center" style="
                                background-color: #1ccb1c;
                                border: 1px solid white;
                                border-radius: 30px;">
                    <p style="color: white" class="ps-3 pe-3 pb-0 mt-1 mb-1">Đặt hàng ngay</p>
                </div>
            </div>

            <br>
            <br>
            <hr>
            <br>
            <br>
            <div>
                <b>
                    <p>SKU</p>
                </b>
            </div>

            <div>
                <b>
                    <p>Chất liệu:</p>
                </b>
            </div>

            <div>
                <b>
                    <p>Xuất khẩu:</p>
                </b>
            </div>

            <div>
                <b>
                    <p>Bao bì đóng gói:</p>
                </b>
            </div>

            <div>
                <b>
                    <p>Công dụng:</p>
                </b>
            </div>

            <div>
                <b>
                    <p>Mô tả sản phẩm:</p>
                </b>
            </div>

            <div>
                <b>
                    <p>Lưu ý khi sử dụng:</p>
                </b>
            </div>


        </div>

    </div>
</div>
</div>


<br>
<br>
<br>

@endsection