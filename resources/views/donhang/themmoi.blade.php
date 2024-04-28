@extends('adminlayouts.layout')

@section('content')
    <form method="post" action="{{ route('donhang.store') }}" enctype="multipart/form-data">
       
        <div class='form-group'>
            <label for='NgayDatHang'>Ngày đặt hàng</label>
            <input type='date' class='form-control' id='NgayDatHang' name='NgayDatHang' placeholder='Ngày đặt hàng' value="{{ old('NgayDatHang') }}">
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
