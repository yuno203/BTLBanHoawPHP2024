@extends('adminlayouts.layout')

@section('content')
<div class="card shadow mb-4" action="{{ route('sanpham.index')}}">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>TT</th>
                        <th>Tên</th>
                        <th>Ảnh</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $tt=1;
                    @endphp
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$tt++}}</td>
                        <td>{{$product->TenSanPham}}</td>
                        <td><img src="{{ asset('anhhoa/' . $product->AnhDaiDien) }}" alt=""></td>
                        <td>{{$product->Gia}}</td>
                        <td>{{$product->SoLuong}}</td>
                        <td>
                            <a href="/sanpham{{$product->MaSanPham}}/edit" class="btn btn-info btn-sm">Chỉnh sửa</a>
                            <!-- Form xóa sản phẩm -->
                            <form action="{{ route('sanpham.destroy', $product->MaSanPham) }}" method="POST" style="display: inline;">
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