@extends('adminlayouts.layout')

@section('content')
<div class="card shadow mb-4" action="{{ route('donhang.index')}}">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>TT</th>
                        <th>Mã đơn hàng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Khách hàng</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $tt=1;
                    @endphp
                    @foreach ($donhangs as $donhang)
                    <tr>
                        <td>{{$tt++}}</td>
                        <td>{{$donhang->MaDonHang}}</td>
                        <td>{{$donhang->NgayDatHang}}</td>
                        <td>{{ $donhang->khachHang->TenKhachHang }}</td>
                        <td>{{$donhang->trangThaiDonHang->TenTrangThaiDonHang}}</td>
                        <td>
                            <a href="/donhang{{$donhang->MaDonHang}}/edit" class="btn btn-info btn-sm">Chỉnh sửa</a>
                            <!-- Form xóa sản phẩm -->
                            <form action="{{ route('donhang.destroy', $donhang->MaDonHang) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                            </form>
                            <a href="/donhang{{$donhang->MaDonHang}}/info" type="button" class="btn btn-info btn-sm">Info</a>
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
