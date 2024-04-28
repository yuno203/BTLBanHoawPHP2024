@extends('adminlayouts.layout')

@section('content')
    <form method="post" action="{{ route('sanpham.store') }}" enctype="multipart/form-data">
        <div class='form-group'>
            <label for='TenSanPham'>Tên</label>
            <input type='text' class='form-control' id='TenSanPham' name='TenSanPham' placeholder='Tên' value="{{ old('TenSanPham') }}">
        </div>
        <div class='form-group'>
            <label for='AnhDaiDien'>Ảnh</label>
            <input type='file' class='form-control' id='AnhDaiDien' name='AnhDaiDien' onchange="previewImage(event)">
            <img id="preview" alt="Ảnh sản phẩm" style="max-width: 200px; max-height: 200px;">
        </div>
        <div class='form-group'>
            <label for='Gia'>Giá</label>
            <input type='text' class='form-control' id='Gia' name='Gia' placeholder='Giá' value="{{ old('Gia') }}">
        </div>
        <div class='form-group'>
            <label for='SoLuong'>Số lượng</label>
            <input type='text' class='form-control' id='SoLuong' name='SoLuong' placeholder='Số lượng' value="{{ old('SoLuong') }}">
        </div>
        <div class='form-group'>
            <label for='MaChuyenMuc'>Danh mục</label>
            <select class="form-control" id="MaChuyenMuc" name="MaChuyenMuc">
                @foreach($chuyenmucs as $chuyenmuc)
                    <option value="{{ $chuyenmuc->MaChuyenMuc }}">{{ $chuyenmuc->TenChuyenMuc }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
        @csrf
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
