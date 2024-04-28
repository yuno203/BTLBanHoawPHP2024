@extends('adminlayouts.layout')

@section('content')
<div class="card shadow mb-4" action="{{ route('khachhang.index')}}">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>TT</th>
                        <th>Tên khách hàng</th>
                        <th>Giới tính</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $tt=1;
                    @endphp
                    @foreach ($khachhangs as $khachhang)
                    <tr>
                        <td>{{$tt++}}</td>
                        <td>{{$khachhang->TenKhachHang}}</td>
                        <td>{{$khachhang->GioiTinh}}</td>
                        <td>{{$khachhang->DiaChi}}</td>
                        <td>{{$khachhang->SDT}}</td>
                        <td>{{$khachhang->Email}}</td>
                        <td>
                            <a href="/khachhang{{$khachhang->MaKhachHang}}/edit" class="btn btn-info btn-sm">Chỉnh sửa</a>
                            <!-- Form xóa sản phẩm -->
                            <form action="{{ route('khachhang.destroy', $khachhang->MaKhachHang) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                            </form>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
