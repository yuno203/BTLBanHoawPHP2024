<div id="top_menu">
            <div class="wrapper">
                <ul class="header_nav" >
                    <li><strong><a href="" title="Trang chủ">Trang chủ</a></strong></li>
                   
                    <li class="has_child">
                        <h2>
                            <a  title="Chủ đề">Chủ đề</a>
                        </h2>
                        <div >
                        @foreach($chuyenmucs as $chuyenmuc)
                            <h3><a href="{{ route('chuyenmuc.show', $chuyenmuc->MaChuyenMuc) }}" title="Hoa Sinh Nhật">{{ $chuyenmuc->TenChuyenMuc }}</a></h3>
                        @endforeach

                        </div>
                    </li>
                    <li class="has_child">
                        <h2>
                            <a href="#" title="Đối Tượng">Đối Tượng</a>
                        </h2>
                        <div>
                            <h3><a href="{{ url('/danhmuc') }}" title="Hoa Tặng Người Yêu">Hoa Tặng Người Yêu</a></h3>
                            <h3><a href="#" title="Hoa Tặng Bố">Hoa Tặng Bố</a></h3>
                            <h3><a href="#" title="Hoa Tặng Mẹ">Hoa Tặng Mẹ</a></h3>
                            <h3><a href="#" title="Hoa Tặng Vợ">Hoa Tặng Vợ</a></h3>
                            <h3><a href="#" title="Hoa Tặng Chồng">Hoa Tặng Chồng</a></h3>
                            <h3><a href="#" title="Hoa Tặng Bạn Bè">Hoa Tặng Bạn Bè</a></h3>
                            <h3><a href="#" title="Hoa Tặng cho Nữ">Hoa Tặng cho Nữ</a></h3>
                            <h3><a href="#" title="Hoa Tặng cho Nam">Hoa Tặng cho Nam</a></h3>
                        </div>
                    </li>
                    <li class="has_child">
                        <h2>
                            <a href="#" title="Kiểu Dáng">Kiểu Dáng</a>
                        </h2>
                        <div>
                            <h3><a href="#" title="Bó Hoa Tươi">Bó Hoa Tươi</a></h3>
                            <h3><a href="#" title="Giỏ Hoa Tươi">Giỏ Hoa Tươi</a></h3>
                            <h3><a href="#" title="Hộp Hoa Tươi">Hộp Hoa Tươi</a></h3>
                            <h3><a href="#" title="Bình Hoa Tươi ">Bình Hoa Tươi </a></h3>
                            <h3><a href="#" title="Hoa Thả Bình">Hoa Thả Bình</a></h3>
                            <h3><a href="#" title="Lãng Hoa Khai Trương">Lãng Hoa Khai Trương</a></h3>
                            <h3><a href="#" title="Lãng Hoa Chia Buồn">Lãng Hoa Chia Buồn</a></h3>
                           
                        </div>
                    </li>
                    <li class="has_child">
                        <h2>
                            <a href="#" title="Hoa Tươi">Hoa Tươi</a>
                        </h2>
                        <div>
                            <h3><a href="#" title="Only Rose">Only Rose</a></h3>
                            <h3><a href="#" title="Hoa Hồng">Hoa Hồng</a></h3>
                            <h3><a href="#" title="Hoa Đồng Tiền">Hoa Đồng Tiền</a></h3>
                            <h3><a href="#" title="Lan Hồ Điệp">Lan Hồ Điệp</a></h3>
                            <h3><a href="#" title="Cẩm Chướng">Cẩm Chướng</a></h3>
                            <h3><a href="#" title="Hoa ly">Hoa ly</a></h3>
                            <h3><a href="#" title="Hoa Cát Tường">Hoa Cát Tường</a></h3>
                            <h3><a href="#" title="Hoa Cúc">Hoa Cúc</a></h3>
                        </div>
                    </li>
                    <li class="has_child">
                        <h2>
                            <a href="#" title="Màu Sắc ">Màu Sắc</a>
                        </h2>
                        <div>
                            <h3><a href="#" title="Màu đỏ ">Màu đỏ</a></h3>
                            <h3><a href="#" title="Màu cam ">Màu cam</a></h3>
                            <h3><a href="#" title="Màu vàng ">Màu vàng </a></h3>
                            <h3><a href="#" title="Màu lục ">Màu lục </a></h3>
                            <h3><a href="#" title="Màu lam">Màu lam</a></h3>
                            <h3><a href="#" title="Màu tràm">Màu tràm</a></h3>
                            <h3><a href="#" title="Màu tím">Màu tím</a></h3>
                            <h3><a href="#" title="Màu hồng">Màu hồng</a></h3>
                        </div>
                    </li>
                    <li class="has_child">
                        <h2>
                            <a href="#" title="Quà Tặng Kèm">Quà Tặng Kèm</a>
                        </h2>
                        <div>
                            <h3><a href="#" title="Bánh Kem">Bánh Kem</a></h3>
                            <h3><a href="#" title="Socola">Socola</a></h3>
                            <h3><a href="#" title="Gấu bông">Gấu bông</a></h3>
                            <h3><a href="#" title="Móc chìa Khóa">Móc chìa Khóa</a></h3>
                            <h3><a href="#" title="Trái Cây">Trái Cây</a></h3>
                            <h3><a href="#" title="Nến Thơm">Nến Thơm</a></h3>
                            <h3><a href="#" title="Hamter">Hamter</a></h3>
                           
                        </div>
                    </li>
                    <li >
                        <h2>
                            <a href="#" >Hoa Cưới</a>
                        </h2>
                    </li>
                    <li>
                        <h2>
                            <a href="#" title="Ý Nghĩa Hoa">Ý nghĩa hoa</a>
                        </h2>
                    </li>
                </ul>
            </div>
        </div >