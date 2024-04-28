<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh muc</title>
    <link rel="stylesheet" href="../css/danhmuc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="../link/angular.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../link/user_danhmuc.js"></script>
    <script src="../link/global.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular-route.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body ng-app="AppBanHang" ng-controller="DanhMucCtrl">
    <div id="container">
        <header>
            <div class="dropdown" style="float: left;padding: 10px;">
                <div style="float: left;"> Nơi Giao Hàng :</div>
                <button class="dropbtn">Hà Nội</button>
                <div class="dropdown-content">
                  <a href="#">Hà Nội </a>
                  <a href="#">Sài Gòn</a>
                  <a href="#">Đà Nẵng</a>
                </div>
              </div>
            
        </header>
        <div class="wrapper">

        </div>
        <nav>
            <div class="wrapper clearfix">
                <div class="logo">
                    <a href="/" title="Shop hoa yêu thương">
                        <img src="../anhhoa/logo-hoa-yeu-thuong.png">
                    </a>
                </div>
                <div class="search">
                    <input id="txtSearch" type="text" ng-model="tenSanPham" placeholder="Tìm sản phẩm" oninput=""> <!-- onkeypress="txtSearchKeyUp()" -->
                    <a ng-click="LoadSanPham()" href="#" class="btntimkiem">Tìm Kiếm</a>
                    <a href="tel:032000907" class="support">
                        <strong>Hotline miền Nam</strong>
                        <span>032 7000907</span>
                    </a>
                    <a href="tel:0327000907" class="support">
                        <strong>Hotline miền Bắc</strong>
                        <span>032 7000907</span>
                    </a>
                    <a href="#" class="support zaloOA" ><img src="../anhhoa/zalo-chat-icon.png"></a>
                </div>
                <div class="cart">
                    <a id="shopping-cart" href="../html/giohang.html">
                        <img src="../anhhoa/shopping-bag.png">
                        <strong>Giỏ hàng</strong>
                    </a>
                </div>
                <div class="my-account">
                   <a href=""><img src="../anhhoa/user.png" style="border-width: 0px;"></a> 
                    <a title="Tai Khoan" href="#">Tài khoản </a>
                        <div>

                        </div>
                </div>
            </div>
        </nav>
        <div id="top_menu">
            <div class="wrapper">
                <ul class="header_nav" >
                    <li><strong><a href="Trangchu.html" title="Trang chủ">Trang chủ</a></strong></li>
                    <li class="has_child">
                        <h2>
                            <a href="#" title="Chủ đề">Chủ đề</a>
                        </h2>
                        <div >
                        @foreach($chuyenmucs1 as $chuyenmuc)
                            <h3 ><a href="{{ route('chuyenmuc.show', $chuyenmuc->MaChuyenMuc) }}" title="{{ $chuyenmuc->TenChuyenMuc }}">{{ $chuyenmuc->TenChuyenMuc }}</a></h3>
                            @endforeach
                        </div>
                    </li>
                    <li class="has_child">
                        <h2>
                            <a href="#" title="Đối Tượng">Đối Tượng</a>
                        </h2>
                        <div>
                            <h3><a href="#" title="Hoa Tặng Người Yêu">Hoa Tặng Người Yêu</a></h3>
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
        </div>
        <div id="content">
            <div class="wrapper">
                <ul class="hang">
                    <li style="margin: 0;">
                        <a href="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="">Chủ đề</a>
                    </li>
                    <li>
                        <a href="">Hoa sức khỏe</a>
                    </li>
                </ul>
                <div class="noidung">
                    <div class="ndtrai">
                        
                        <div class="doituong" id="doituong">
                            
                        </div>
                        <div class="mucgia" id="mucgia">
                            <h3>Giá</h3>
                            <!-- <div><button>Tất cả</button></div> -->
                            <div><button  ng-click="setDefaults()">Dưới 250.000</button></div> 
                            <div><button ng-click="setDefaults1()">Từ 250.000 đến 500.000</button></div>
                            <div><button>Từ 500.000 đến 1.000.000</button></div>
                            <div><button>Từ 1.000.000 đến 2.000.000</button></div>
                            <div><button  ng-click="setDefaultsmax()">Trên 2.000.000</button></div>
                            <div> <h4>Khoảng giá</h4></div>
                            <div>
                                <input type="number" ng-model="giaTo" name="" id="dau">
                                <span style="font-size: 18px;">-</span>
                                <input type="number" ng-model="giaFrom" name="" id="cuoi">
                                
                            </div>
                            <button ng-click="LoadSanPham()" class="btn1">Apply</button>
                        </div>
                        <div class="canhtrinhbay" id="canhtrinhbay">
                            <h3>CÁCH TRÌNH BÀY</h3>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Bó hoa tươi</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Giỏ hoa</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Hộp hoa </label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Hoa bình</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Hoa thả bình </label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Hoa chúc mừng</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Hoa chia buồn</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Chậu lan Hồ điệp</label>
                            </div>

                        </div>
                        <div class="mausac" id="mausac">
                            <h3>MÀU SẮC</h3>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">White</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Màu đỏ</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Pink</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Hoa tươi màu cam</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Purple</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Yellow&Gold</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Blue&Green</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Mix Color</label>
                            </div>

                        </div>
                        <div class="loaihoa" id="loaihoa">
                            <h3>LOẠI HOA</h3>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Only rose</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Hoa hồng</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Thiên điểu</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Hoa hạnh phúc</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Hồng môn</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Tú cầu</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Mõm sói</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Thạch thảo</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Hướng dương</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Hoa sen</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Đồng tiền</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Hoa lan</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Cẩm chướng</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Cát tường</label>
                            </div>
                            <div>
                                <input type="checkbox" name="" id="">
                                <label for="">Hoa baby</label>
                            </div>

                        </div>
                    </div>
                    <div class="ndphai">
                        <div class="tieuchi">
                            <ul>
                                <li><a class="macdinh" href="">MẶC ĐỊNH</a></li>
                                <li><a href="">GIÁ TỪ THẤP TỚI CAO</a> </li>
                                <li><a href=""> GIÁ TỪ CAO TỚI THẤP</a></li>
                                <li><a href=""> MỚI NHẤT</a></li>
                            </ul>
                        </div>
                        <div class="htcheckbox">
                            <span>Hoa chúc mừng <a class="" href=""><img src="../anhhoa/f-close.png" alt=""></a></span>
                            <span>Chủ đề hoa chúc sức khỏe <a class="" href=""><img src="../anhhoa/f-close.png" alt=""></a></span>
                        </div>
                        <div id="ds_muasp">                           
                                <div class="dulieu " id="dulieu">
                                    @foreach($products as $product)
                                            <div  class="sanpham1" id="sanpham1">
                                                <div class="sanpham sub" >
                                                    <div class="i">
                                                        <a ><img src="{{ asset('anhhoa/' . $product->AnhDaiDien) }}" alt=""></a>
                                                    </div>
                                                    <div class="t">
                                                        <a ></a><br>
                                                        <span class="thuoctinh">
                                                        
                                                            <em class="gianiemiet">450.000d</em>
                                                            <em>đ</em>    
                                                        </span>
                                                        <span class="selebe">Sale</span>
                                                    </div>
                                                </div>
                                    @endforeach
                                </div>
                    </div>
                </div>
            </div>
        </div>
@include('users.footer')
    </div>
    <script src="../js/danhmuc.js">
      </script>
</body>
</html>