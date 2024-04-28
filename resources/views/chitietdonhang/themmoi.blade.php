@extends('adminlayouts.layout')

@section('content')
    <form method="post" action="{{ route('chitietdonhang.store') }}" enctype="multipart/form-data">
        <div class='form-group'>
            <label for='MaDonHang'>Đơn hàng</label>
            <select class="form-control" id="MaDonHang" name="MaDonHang"  >
                @foreach($donhangs as $donhang)
                    <option value="{{ $donhang->MaDonHang }}">{{ $donhang->MaDonHang }}</option>
                @endforeach
            </select>
        </div>
        <div class='form-group'>
        <label for='MaSanPham'>Sản phẩm</label>
            <select class="form-control" id="MaSanPham" name="MaSanPham"  onchange="updateImageAndPrice()">
                @foreach($products as $product)
                    <option value="{{ $product->MaSanPham }}" data-image="{{  asset('anhhoa/' . $product->AnhDaiDien)}}" data-price="{{ $product->Gia }}">{{ $product->TenSanPham }}</option>
                @endforeach
            </select>
            <div id="productImageContainer">
                <img id="productImage" src="{{ asset('anhhoa/' . $products[0]->AnhDaiDien) }}" alt="{{ $products[0]->TenSanPham }}" style="width: 50px; height: 50px;">
            </div>
        </div>
        <div class="form-group">
            <label for="SoLuong">Số lượng</label>
            <input type="number" class="form-control" id="SoLuong" name="SoLuong" placeholder="Số lượng" value="{{ old('SoLuong') }}">
        </div>
        <div class="form-group">
            <label for="DonGia">Đơn giá</label>
            <input type="number" class="form-control" id="DonGia" name="DonGia" placeholder="Đơn giá" readonly>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
        @csrf
    </form>
@endsection
<script>
    function updateImage() {
        var select = document.getElementById("MaSanPham");
        var imageContainer = document.getElementById("productImageContainer");
        var selectedOption = select.options[select.selectedIndex];
        var imageUrl = selectedOption.getAttribute("data-image");
        var productImage = document.getElementById("productImage");

        productImage.src = imageUrl;
        productImage.alt = selectedOption.textContent;
    }
    function updatePrice() {
    var select = document.getElementById("MaSanPham");
    var selectedOption = select.options[select.selectedIndex];
    var price = selectedOption.getAttribute("data-price");
    var inputDonGia = document.getElementById("DonGia");
    inputDonGia.value = price;
}
function updateImageAndPrice() {
    updateImage();
    updatePrice();
}

</script>