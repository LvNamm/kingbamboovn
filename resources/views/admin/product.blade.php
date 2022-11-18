@extends('admin.layout')
@section('content')
<style>
    td{
        padding: 0.25rem 0.3rem!important;
    }
</style>

<table class="table table-bordered border-primary" style="width:1200px">
    <thead style="border-bottom: 1px solid black">
      <tr>
        
        <th scope="col">id</th>
        <th scope="col">Tiêu đề</th>
        <th scope="col">Giá</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Avata</th>
        <th scope="col">SKU</th>
        <th scope="col">N.Liệu</th>
        <th class="col">Xuất sứ</th>
        <th class="col">Bao bì</th>
        <th class="col">Công dụng</th>
        <th class="col" style="width:100px">Mô tả</th>
        <th class="col">Lưu ý</th>
        <th>L.Shopee</th>
        <th class="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($products as $product)

        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->title}}</td>
            <td>{{$product->price}} </td>
            <td>{{$product->amount}}</td>
            <td><img src="{{$product->url_img}}" style="height:70px" alt=""></td>
            <td>{{$product->sku}}</td>
            <td>{{$product->fabrics}}</td>
            <td>{{$product->export}}</td>
            <td>{{$product->pack}}</td>
            <td>{{$product->uses}}</td>
            <td width="20%">{{$product->describe}}</td>
            <td width="10%">{{$product->note}}</td>
            <td width="5%">
                {!! !empty($product->link_shopee) ? '<a taget = "_black"href="'.$product->link_shopee.'">Link</a>' :''!!}
            </td>
            <td>
                <a class="btn btn-primary mb-1" href="/admin/product/edit/{{$product->id}}">Sửa</a>
                <a class="btn btn-primary" onclick="confirmDelete({{$product->id}},event)" href="#">Xóa</a>
            </td>
          </tr>


        @endforeach
      
     
      
    </tbody>
  </table>

  <script> 
    function confirmDelete(id,e) {
        if (confirm("Xóa danh mục có id = " +id +"?") == true) {
            window.location = "/admin/product/delete/"+id;
        }
    }
    @foreach($products as $product)
        @foreach($product->categories as $c)
            console.log("{{$c->title}}");
        @endforeach
    @endforeach
</script>

@endsection