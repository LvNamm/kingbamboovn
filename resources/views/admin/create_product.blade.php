@extends('admin.layout')
@section('content')

<div class="row d-flex justify-content-center">
    @if(Session::has('errAddCategory'))
    <div class="alert alert-sucess">
    {{ Session::pull('errAddCategory')}}
    </div>
    @endif
    
    <form action="/admin/add-product" class="col-md-6" enctype="multipart/form-data" method="post">
        <p style="color: red">Chưa dùng được cái này</p>
        @csrf
        {{-- title --}}
        {!!$errors->has('title')?'<p class="error mb-0" style = "color:red">'.$errors->get("title")[0].'</p>':null!!}
        <div class="input-group mb-3 row  ms-0 me-0">
            <span class="input-group-text col-md-3" id="basic-addon1">Tiêu đề</span>
            <input name="title" type="text" class="form-control" placeholder="Tiêu đề" aria-describedby="basic-addon1">
        </div>

        {{-- Price --}}
        {!!$errors->has('title')?'<p class="error mb-0" style = "color:red">'.$errors->get("title")[0].'</p>':null!!}
        <div class="input-group mb-3 row  ms-0 me-0">
            <span class="input-group-text col-md-3" id="basic-addon1">Giá</span>
            <input name="price" type="text" class="form-control" placeholder="Giá" aria-describedby="basic-addon1">
        </div>

        {{-- Số lượng --}}
        {!!$errors->has('amount')?'<p class="error mb-0" style = "color:red">'.$errors->get("amount")[0].'</p>':null!!}
        <div class="input-group mb-3 row  ms-0 me-0">
            <span class="input-group-text col-md-3" id="basic-addon1">Số lượng</span>
            <input name="amount" type="text" class="form-control" placeholder="Số lượng" aria-describedby="basic-addon1">
        </div>

        {{-- sku --}}
        {!!$errors->has('sku')?'<p class="error mb-0" style = "color:red">'.$errors->get("sku")[0].'</p>':null!!}
        <div class="input-group mb-3 row  ms-0 me-0">
            <span class="input-group-text col-md-3" id="basic-addon1">SKU</span>
            <input name="sku" type="text" class="form-control" placeholder="SKU" aria-describedby="basic-addon1">
        </div>
        
        {{-- Chất liệu --}}
        {!!$errors->has('fabrics')?'<p class="error mb-0" style = "color:red">'.$errors->get("fabrics")[0].'</p>':null!!}
        <div class="input-group mb-3 row  ms-0 me-0">
            <span class="input-group-text col-md-3" id="basic-addon1">Chất liệu</span>
            <input name="fabrics" type="text" class="form-control" placeholder="Chất liệu" aria-describedby="basic-addon1">
        </div>

        {{-- Xuất khẩu --}}
        {!!$errors->has('export')?'<p class="error mb-0" style = "color:red">'.$errors->get("export")[0].'</p>':null!!}
        <div class="input-group mb-3 row  ms-0 me-0">
            <span class="input-group-text col-md-3" id="basic-addon1">Xuất khẩu</span>
            <input name="export" type="text" class="form-control" placeholder="Xuất khẩu" aria-describedby="basic-addon1">
        </div>

        {{-- Đóng gói --}}
        {!!$errors->has('pack')?'<p class="error mb-0" style = "color:red">'.$errors->get("pack")[0].'</p>':null!!}
        <div class="input-group mb-3 row  ms-0 me-0">
            <span class="input-group-text col-md-3" id="basic-addon1">Bao bì</span>
            <input name="export" type="text" class="form-control" placeholder="Bao bì đóng gói" aria-describedby="basic-addon1">
        </div>
        
        {{-- Công dụng --}}
        {!!$errors->has('use')?'<p class="error mb-0" style = "color:red">'.$errors->get("uses")[0].'</p>':null!!}
        <div class="input-group mb-3 row  ms-0 me-0">
            <span class="input-group-text col-md-3" id="basic-addon1">Công dụng</span>
            <input name="uses" type="text" class="form-control" placeholder="Công dụng" aria-describedby="basic-addon1">
        </div>

        {{-- Mô tả sản phẩm --}}
        {!!$errors->has('describe')?'<p class="error mb-0" style = "color:red">'.$errors->get("describe")[0].'</p>':null!!}
        <div class="input-group mb-3 row  ms-0 me-0">
            <span class="input-group-text col-md-3" id="basic-addon1">Mô tả</span>
            <input name="describe" type="text" class="form-control" placeholder="Mô tả sản phẩm" aria-describedby="basic-addon1">
        </div>

        {{-- Lưu ý --}}
        {!!$errors->has('note')?'<p class="error mb-0" style = "color:red">'.$errors->get("note")[0].'</p>':null!!}
        <div class="input-group mb-3 row  ms-0 me-0">
            <span class="input-group-text col-md-3" id="basic-addon1">Lưu ý</span>
            <input name="note" type="text" class="form-control" placeholder="Mô tả sản phẩm" aria-describedby="basic-addon1">
        </div>
        {{-- image --}}

        {{-- Hiện trên web --}}
        <div class="d-flex flex-row  mb-3 row  ms-0 me-0 align-items-center">
            <span class="col-md-3 input-group-text" id="basic-addon1">Show in web</span>
            <input class="col-md-2" type="checkbox" id="checkbox-changeimage" name="show_in_web" style="height: 20px">
        </div>

        {{-- Ảnh --}}
        {!!$errors->has('image')?'<p class="error mb-0" style = "color:red">'.$errors->get("image")[0].'</p>':null!!}
        <div class="input-group mb-3 row  ms-0 me-0">
            
            <span class="input-group-text col-md-3" id="basic-addon1">Ảnh</span>
            <input accept="image/*" name="image" type="file" class="form-control bg-light">
        </div>

        {{-- Nhiều ảnh --}}
        {!!$errors->has('image')?'<p class="error mb-0" style = "color:red">'.$errors->get("image")[0].'</p>':null!!}
        <div class="input-group mb-3 row  ms-0 me-0">
            
            <span class="input-group-text col-md-3" id="basic-addon1">Ảnh</span>
            <input type="file" class="form-control bg-light" name="photos[]" multiple />
        </div>
        <button type="submit" class="btn btn-primary mb-2">Tạo mới</button>
    </form>
</div>

@endsection