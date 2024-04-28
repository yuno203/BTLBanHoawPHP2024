@extends('adminlayouts.layout')

@section('content')
    <form method="post" action="{{ route('khachhang.update', $khachhangs->MaKhachHang) }}">
        @csrf
        @method('PUT')
        <div class='form-group'>
            <label for='TenKhachHang'>Tên khách hàng</label>
            <input type='text' class='form-control' id='TenKhachHang' name='TenKhachHang' value="{{ $khachhangs->TenKhachHang }}">
        </div>
        <div class='form-group'>
            <label for='GioiTinh'>Giới tính</label>
            <select class="form-control" id="GioiTinh" name="GioiTinh">
                <option value="0" {{ $khachhangs->GioiTinh == 0 ? 'selected' : '' }}>Nữ</option>
                <option value="1" {{ $khachhangs->GioiTinh == 1 ? 'selected' : '' }}>Nam</option>
            </select>
        </div>
        <div class='form-group'>
            <label for='DiaChi'>Địa chỉ</label>
            <input type='text' class='form-control' id='DiaChi' name='DiaChi' value="{{ $khachhangs->DiaChi }}">
        </div>
        <div class='form-group'>
            <label for='SDT'>Số điện thoại</label>
            <input type='text' class='form-control' id='SDT' name='SDT' value="{{ $khachhangs->SDT }}">
        </div>
        <div class='form-group'>
            <label for='Email'>Email</label>
            <input type='email' class='form-control' id='Email' name='Email' value="{{ $khachhangs->Email }}">
        </div>
        <!-- Thêm các trường thông tin khác của khách hàng cần chỉnh sửa -->
        <button type="submit" class="btn btn-primary">Lưu lại</button>
    </form>
@endsection
