@extends('adminlayouts.layout')

@section('content')
    <form method="post" action="{{ route('khachhang.store') }}" enctype="multipart/form-data">
       
        <div class='form-group'>
            <label for='TenKhachHang'>Tên khách hàng</label>
            <input type='text' class='form-control' id='TenKhachHang' name='TenKhachHang' placeholder='Tên' value="{{ old('TenKhachHang') }}">
        </div>
        <div class="form-group">
            <label for="GioiTinh">Giới tính</label>
            <input type="number" class="form-control" id="GioiTinh" name="GioiTinh" placeholder="Gioi Tinh" value="{{ old('GioiTinh') }}">
        </div>
        <div class="form-group">
            <label for="DiaChi">Địa chỉ</label>
            <input type="text" class="form-control" id="DiaChi" name="DiaChi" placeholder="Địa chỉ" value="{{ old('DiaChi') }}">
        </div>
        <div class='form-group'>
            <label for='SDT'>Số điện thoại</label>
            <input type='text' class='form-control' id='SDT' name='SDT' placeholder='Số điện thoại' value="{{ old('SDT') }}">
        </div>
        <div class='form-group'>
            <label for='Email'>Email</label>
            <input type='email' class='form-control' id='Email' name='Email' placeholder='Email' value="{{ old('Email') }}">
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
