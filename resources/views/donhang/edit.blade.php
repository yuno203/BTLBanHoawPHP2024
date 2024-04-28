@extends('adminlayouts.layout')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa thông tin đơn hàng</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('donhang.update', $donhangs->MaDonHang) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="MaDonHang">Mã đơn hàng</label>
                <input type="text" class="form-control" id="MaDonHang" value="{{ $donhangs->MaDonHang }}" disabled>
            </div>
            <div class="form-group">
                <label for="NgayDatHang">Ngày đặt hàng</label>
                <input type="text" class="form-control" id="NgayDatHang" name="NgayDatHang" value="{{ $donhangs->NgayDatHang }}">
            </div>
            <div class='form-group'>
            <label for='MaKhachHang'>Mã khách hàng</label>
            <select class="form-control" id="MaKhachHang" name="MaKhachHang">
                @foreach($khachhangs as $khachhang)
                    <option value="{{ $khachhang->MaKhachHang }}">{{ $khachhang->TenKhachHang }}</option>
                @endforeach
            </select>
        </div>
        <div class='form-group'>
            <label for='MaTrangThaiDonHang'>Mã trạng thái đơn hàng</label>
            <select class="form-control" id="MaTrangThaiDonHang" name="MaTrangThaiDonHang">
                @foreach($trangthaidonhangs as $trangthaidonhang)
                    <option value="{{ $trangthaidonhang->MaTrangThaiDonHang }}">{{ $trangthaidonhang->TenTrangThaiDonHang }}</option>
                @endforeach
            </select>
        </div>
            <!-- Thêm các trường thông tin khác của đơn hàng cần chỉnh sửa -->
            <button type="submit" class="btn btn-primary">Lưu lại</button>
        </form>
    </div>
</div>
@endsection
