@extends('adminlayouts.layout')

@section('content')
<div class="card shadow mb-4" >
    <div class="card-header py-3">
    
        <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
        <br>  
        <a href="/themmoichitietdonhang" class="btn btn-info btn-sm">Thêm Mới </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                    <th>TT</th>
                        <th>Mã đơn hàng</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Tổng tiền</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $tt=1;
                    @endphp
                    @foreach ($donhangs->chiTietDonHang as $chiTiet)
                        <tr>
                        <td>{{ $tt++ }}</td>
                            <td>#{{ $donhangs->MaDonHang }}</td>
                            <td>{{ $chiTiet->sanPham->TenSanPham }}</td>
                            <td><img src="{{ asset('anhhoa/'.$chiTiet->sanPham->AnhDaiDien) }}" alt="Hình ảnh" style="max-width: 100px; max-height: 100px;"></td>
                            <td>{{ $chiTiet->SoLuong }}</td>
                            <td>{{ $chiTiet->DonGia }}</td>
                            <td>{{ $chiTiet->SoLuong * $chiTiet->DonGia }}</td>
                            <td>
                            <a  class="btn btn-info btn-sm">Chỉnh sửa</a>
                            <!-- Form xóa sản phẩm -->
                            <form action="{{ route('chitietdonhang.destroy', $chiTiet->MaChiTietDonHang) }}" method="POST" style="display: inline;">
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


