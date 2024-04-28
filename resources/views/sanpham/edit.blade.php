@extends('adminlayouts.layout')

@section('content')
    <form method="POST" action="{{ route('sanpham.update', $product->MaSanPham) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class='form-group'>
            <label for='ID'>Mã sản phẩm</label>
            <input type='text' class='form-control' id='MaSanPham' value="{{$product->MaSanPham}}" placeholder='Mã sản phẩm' disabled>
        </div>
        <div class='form-group'>
            <label for='Ten'>Tên</label>
            <input type='text' class='form-control' id='Ten' name='TenSanPham' value="{{$product->TenSanPham}}" placeholder='Tên'>
        </div>
        <div class='form-group'>
            <label for='Anh'>Ảnh</label>
            <input type='file' class='form-control' id='Anh' name='AnhDaiDien' onchange="previewImage(event)">
            <img id="preview" src="{{ asset('anhhoa/'.$product->AnhDaiDien) }}" alt="Ảnh sản phẩm" style="max-width: 200px; max-height: 200px;">
        </div>
        <div class='form-group'>
            <label for='MaDanhMuc'>Mã danh muc</label>
            <select class="form-control" id="MaDanhMuc" name="MaDanhMuc">
                @foreach($chuyenmucs as $chuyenmuc)
                    <option value="{{ $chuyenmuc->MaChuyenMuc }}">{{ $chuyenmuc->TenChuyenMuc }}</option>
                @endforeach
            </select>
        </div>
        <div class='form-group'>
            <label for='Gia'>Giá</label>
            <input type='text' class='form-control' id='Gia' name='Gia' value="{{$product->Gia}}" placeholder='Giá'>
        </div>
        <div class='form-group'>
            <label for='SoLuong'>Số Lượng</label>
            <input type='text' class='form-control' id='SoLuong' name='SoLuong' value="{{$product->SoLuong}}" placeholder='Số lượng'>
        </div>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
    </form>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
