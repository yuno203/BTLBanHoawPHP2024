<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Don Hang</title>
    <link rel="stylesheet" href="../css/donhang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="../link/angular.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../link/user_dathang.js"></script>
    <script src="../link/global.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular-route.min.js"></script>
    </script>
</head>
<body ng-app="AppBanHang" ng-controller="DatHangCtrl">
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
                    <input id="txtSearch" type="text" placeholder="Tìm sản phẩm"> <!-- onkeypress="txtSearchKeyUp()" -->
                    <a href="#" class="btntimkiem">Tìm Kiếm</a>
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
                        <div>
                            <h3><a href="#" title="Hoa Sinh Nhật">Hoa Sinh Nhật</a></h3>
                            <h3><a href="#" title="Hoa Khai Chương">Hoa Khai Chương</a></h3>
                            <h3><a href="#" title="Hoa Chúc Mừng">Hoa Chúc Mừng</a></h3>
                            <h3><a href="#" title="Hoa Chia Buồn">Hoa Chia Buồn</a></h3>
                            <h3><a href="#" title="Hoa Sức Khỏe ">Hoa Sức Khỏe</a></h3>
                            <h3><a href="#" title="Hoa Tình Yêu  ">Hoa Tình Yêu</a></h3>
                            <h3><a href="#" title="Hoa Cảm Ơn ">Hoa Cảm Ơn</a></h3>
                            <h3><a href="#" title="Hoa Tốt Nghiệp">Hoa Tốt Nghiệp</a></h3>
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
                    <li>
                        <h4 ><a href="#">Trang chủ</a></h4>
                        <i class="fa-regular fa-slash-back" style="color: #511f1f;"></i>
                    </li>
                    <li>
                        <h4 style="margin-left: 20px;"><a href="#">Giỏ hàng</a></h4>
                    </li>
                </ul>
                <div class="thongtin" style="margin-top:10px ;">
                    
                    <div class="thongtinmua">
                        <div>
                            <h3>Thông tin người mua</h3>
                            <label for="" style="margin-top: 10px;">Lấy thông tin liên lạc từ: </label>
                            <a href="" style="margin-left: 10px;"><img style="height: 15px;margin-top: 10px;" src="../anhhoa/Screenshot 2023-03-25 104904.png" alt=""> Google</a>
                        </div>
                        <form method="post"  enctype="multipart/form-data">
                         @csrf
                        <div>
                            <label for=""><span class="red">*</span> Họ và tên:</label>
                            <input type="text" name="TenKhachHang" spellcheck="false" name="" id="tro" >
                            <span  class="tttrave" id="tttrave"></span>
                           
                        </div>
                        <div>
                            <label for=""><span class="red">*</span>Gioi tinh:</label>
                        <input type="number"  name="GioiTinh" spellcheck="false" id="trosdt" >
                        <span  class="tttrave" id="tttravesdt"></span>
                        </div>
                        <div>
                            <label for=""><span class="red">*</span> Điện thoại:</label>
                        <input type="text"  name="SDT" spellcheck="false" id="trosdt" >
                        <span  class="tttrave" id="tttravesdt"></span>
                        </div>
                       <div>
                        <label for=""><span class="red">*</span>Email của bạn:</label>
                        <input type="text"  spellcheck="false" name="Email" id="troemail" >
                        <span  class="tttrave" id="tttraveemail"></span>
                       </div>
                       <div>
                        <label for=""><span class="red">*</span>Địa chỉ :</label>
                        <input type="text" name="DiaChi" id="">
                       </div>
                     
                      
                       </form>
                       <!-- <div>
                        <input type="checkbox"> <label for="">Giấu tên người gửi?</label>
                       </div>      -->
                    </div>
                    <div class="thongtinmua">
                        <!-- <div>
                            <h3>Thông tin người nhận</h3>
                            
                        </div>
                        <div>
                            <label for="">Tôi là người nhận hoa</label>
                            <input type="checkbox">
                        </div>
                        <div>
                            <label for=""><span class="red">*</span>Tên người nhận:</label>
                        <input type="text" name="" ng-model="TenK_H" id="tro">
                        <div style="display: none;" class="tttrave">Please enter your full name</div>
                        </div>
                        <div>
                            <label for=""><span class="red">*</span> Điện thoại:</label>
                        <input type="number" ng-model="S_DT" name="" id="tro">
                        <div style="display: none;" class="tttrave">Please enter your phone number</div>
                        </div> -->
                      
                       <div>
                        <label for=""><span class="red">*</span>Địa chỉ nhận :</label>
                        <input type="text"ng-model="Diachigiaohang" name="" id="">
                        <div style="display: none;" class="tttrave">Nhập địa chỉ người nhận</div>
                       </div>
                       <!-- <div>
                            <label for=""><span class="red">*</span>Tỉnh/Thành phố:</label>
                            <div class="tinh">
                                <select name="" id="">
                                    <option value="" selected>Hà nội</option>
                                    <option value="">Hải phòng </option>
                                    <option value="">TP Hồ Chí Minh</option>
                                    <option value="">Hải dương</option>
                                </select>
                            </div>
                           <div class="huyen">
                            <select name="" id="">
                                <option value="" selected>Hà nội</option>
                                <option value="">Hải phòng </option>
                                <option value="">TP Hồ Chí Minh</option>
                                <option value="">Hải dương</option>
                            </select>
                           </div>
                       </div>
                       <div>
                         <label for=""><span class="red">*</span>Phí giao hàng:</label>
                         <span>Hoayeuthuong sẽ xác nhận lại phí giao hàng theo khu vực (nếu có) và thông báo cho khách hàng.</span>
                       </div>     
                    </div>
                    <div class="thongtinmua">
                        <div>
                            <h3>Thời gian giao hàng</h3>
                            
                        </div>
                        <div>
                            <div class="nam">
                                <select name="" id="">
                                    <option value="" selected>Năm 2023</option>
                                    <option value="">Năm 2024</option>
                                    
                                </select>
                            </div>
                           <div class="thang">
                            <select name="" id="">
                                <option value="">Tháng 1</option>
                                <option value="" selected>Tháng 2 </option>
                                <option value="">Tháng 3</option>
                                <option value="">Tháng 4</option>
                                <option value="">Tháng 5</option>
                                <option value="">Tháng 6</option>
                                <option value="">Tháng 7</option>
                                <option value="">Tháng 8</option>
                                <option value="">Tháng 9</option>
                                <option value="">Tháng 10</option>
                                <option value="">Tháng 11</option>
                                <option value="">Tháng 12</option>
                            </select>
                           </div>
                           <div class="ngay">
                            <select name="" id="">
                                <option value="" >1</option>
                                <option value="">2 </option>
                                <option value="">3 </option>
                                <option value="">4 </option>
                                <option value="">5 </option>
                                <option value="">6 </option>
                                <option value="">7 </option>
                                <option value="">8 </option>
                                <option value="">9 </option>
                                <option value="">10 </option>
                                <option value="">11 </option>
                                <option value="">12</option>
                                <option value="">13 </option>
                                <option value="">14 </option>
                                <option value="">15 </option>
                                <option value="">16 </option>
                                <option value="">17 </option>
                                <option value="">18 </option>
                                <option value="">19 </option>
                                <option value="">20 </option>
                                <option value="">21 </option>
                                <option value="">22 </option>
                                <option value="">23 </option>
                                <option value="">24 </option>
                                <option value="" selected>25 </option>
                                <option value="">26 </option>
                                <option value="">27 </option>
                                <option value="">28 </option>
                                <option value="">29 </option>
                                <option value="">30 </option>   <option value="">31 </option>
                              
                            </select>
                           </div>
                           <div class="gio">
                            <select name="" id="">
                                <option value="" >1h</option>
                                <option value="">2h </option>
                                <option value="">3h </option>
                                <option value="">4h</option>
                                <option value="">5h </option>
                                <option value="">6h </option>
                                <option value="">7h </option>
                                <option value="">8h </option>
                                <option value="">9h </option>
                                <option value="">10h </option>
                                <option value="">11h </option>
                                <option value="">12h</option>
                                <option value="">13h </option>
                                <option value="">14h </option>
                                <option value="">15h </option>
                                <option value="">16h </option>
                                <option value="">17h </option>
                                <option value="">18h </option>
                                <option value="">19h </option>
                                <option value="">20h </option>
                                <option value="">21h </option>
                                <option value="" selected>22h </option>
                                <option value="">23h </option>
                                <option value="">24h </option>
                            </select>
                           </div>
                        </div> -->
                    </div>
                    <div class="thongtinmua">
                        <div>
                            <h3>Lời nhắn</h3>

                        </div>
                        <div>
                            
                            <div class="thiep">
                                <label for="">Thiệp gửi tặng cho:</label>
                                <select name="" id="">
                                    <option value="" selected>Thiệp gửi cho</option>
                                    <option value="">Anh, chị em</option>
                                    <option value="">Bố mẹ </option>
                                    <option value="">Nguời yêu</option>
                                </select>
                            </div>
                            <div class="thiep">
                                <label for="">Nhân dịp:</label>
                                <select name="" id="">
                                    <option value="" selected>Nhân dịp</option>
                                    <option value="">Sinh nhật</option>
                                    <option value="">kỉ niệm</option>
                                    <option value="">Vui </option>
                                </select>
                            </div> 
                            <div class="thongdiep">
                                <label for="">Thông điệp:</label>
                                <textarea style="margin-top: 10px;" name="" id="" cols="91" rows="3"></textarea>
                            </div>
                            <div class="thongdiep">
                                <label style="width: 100%;" for="">Lời nhắn cho Hoayeuthuong.com:</label>
                                <textarea style="margin-top: 10px;" name="" id="" cols="91" rows="3"></textarea>
                            </div>
                            <div>
                                <input type="checkbox">
                                <label for="">Xuất hóa đơn GTGT</label>
                            </div>
                        </div>
                        <div>
                            <div class="datmua">
                                <a href=""><button  ng-click="DatHang()">Đặt mua</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thongtinphai">
                @foreach ($donhangs as $donhang)
                    <div class="mathang" >
                    <img src="{{ asset('anhhoa/' . $donhang->sanPhams->AnhDaiDien) }}" alt="">
                        <div class="tttritiet">
                           
                            <input type="hidden" name="MaSanPham" value="{{$donhang->sanPhams->MaSanPham }}">
                            <input type="hidden" name="SoLuong" > <!-- Số lượng sản phẩm mặc định là 1 -->
                            <a style="color: #bd2026;" href="">{{$donhang->sanPhams->TenSanPham}}</a>
                            <input type="hidden" name="Gia" value="{{$donhang->sanPhams->Gia }}">
                            <p style="padding: 10px 0px 10px;">
                                Số lượng : {{$donhang->SoLuong}}
                            <span>đ</span>
                            </p>
                        </div>
                    </div>
                   @endforeach
                   @php
                    $tongTien = 0;
                    foreach ($donhangs as $donhang) {
                        $tongTien += $donhang->sanPhams->Gia * $donhang->SoLuong;
                    }
                    @endphp
                    <div class="tong">
                        <div class="tamtinh">
                            <span>Tạm tính : </span>
                            <strong>{{$tongTien}}</strong>
                        </div>
                        <div class="phuphi">
                            <span>phụ phí : </span>
                            <strong>-</strong>
                        </div>
                        <div class="giamgia">
                            <span>Giảm giá : </span>
                            <strong>-</strong>
                        </div>
                        <div class="VAT">
                            <span>Hóa đơn VAT : </span>
                            <strong>10%</strong>
                        </div>
                        <div style="width: 100%;height: 0.5px;background-color: #e1e1e1;">
    
                        </div>  
                        <div class="tongcong" style="margin-bottom: 10px;">
                            <span >Tổng cộng : </span>
                            <strong>123.456</strong>
                      
                    </div>
                </div>
            </div>
        </div>



        <div class="footer">
            <div class="wrapper">
                <div class="cot1">
                    <h4>SHOP HOA TP. HCM</h4>
                    <strong>Địa chỉ:</strong>
                    <p>- 230B Võ Thị Sáu, P. Võ Thị Sáu, Quận 3</p>
                    <p>- 270L Võ Thị Sáu, P.Võ Thị Sáu, Quận 3 (Góc ngã tư Bà Huyện Thành Quan)</p>
                    <p>- 17D Nguyễn Thái Học, P. Cầu Ông Lãnh, Quận 1</p>
                    <strong>  
                        Điện thoại:
                        <a href="#">028 7300 2010</a>
                    </strong>
                    <p>Miễn phí giao hoa nội thành Tp. Hồ Chí Minh. Các quận ngoại thành vui lòng liên hệ để biết thêm chi tiết (Giá giao sẽ từ 30.000đ-70.000đ).</p>
                    <strong>Shop hoa ở Tp. HCM</strong>
                </div>
                <div class="cot2">
                    <h4>SHOP HOA HÀ NỘI</h4>
                    <strong>
                        Địa chỉ:
                        <p>532A Đường Láng, Quận Đống Đa</p>
                    </strong>
                    <strong>
                        Điện thoại:
                        <a href="#">024 7300 2010</a>
                    </strong>
                    <p>Miễn phí giao hoa tươi trên địa bàn Hà Nội: Cầu Giấy, Ba Đình, Đống Đa, Nam Từ Liêm, Hai Bà Trưng, Hoàn Kiếm, Thanh Xuân. Các quận khác vui lòng liên hệ để biết thêm chi tiết (Giá giao sẽ từ 30.000đ-70.000đ)</p>
                    <strong>Shop hoa ở Hà Nội</strong>
                </div>
                <div class="cot3">
                    <h4>SHOP HOA CÁC TỈNH</h4>
                    <p>
                        <strong>Cần Thơ </strong>
                        266 đường 30/4, P. Xuân khánh, Q.Ninh Kiều
                    </p>
                    <p>
                        <strong>Đà Nẵng</strong>
                        32 Lê Thanh Nghị, Quận Hải Châu
                    </p>
                    <p>
                        <strong>Huế</strong>
                        71 Trường Chinh, Phường Xuân Phú
                    </p>
                    <p>
                        <strong>Lâm Đồng </strong>
                        05 Phan Đình Phùng
                    </p>
                    <p>
                        <strong>Bình Dương</strong>
                         151 Phú Lợi, P. Phú Lợi, Tp. Thủ Dầu Một
                    </p>
                    <p>
                        <strong>Biên Hòa</strong>
                        40/198A Phạm Văn Thuận, KP.3, P.Tân Mai
                    </p>
                    <p>
                        <strong>Kiên Giang</strong>
                        418 Nguyễn Trung Trực, Thành phố Rạch Giá
                    </p>
                </div>
                <div class="cot4">
                    <br>
                   <p>
                    <strong>Tp. Nha Trang</strong>
                    181 Thống Nhất
                </p>
                   <p>
                    <strong>Vũng Tàu </strong>
                    185B Phạm Hồng Thái, Phường 7
                </p>
                   <p>
                    <strong>Tây Ninh </strong>
                    1174 Cách Mạng Tháng Tám
                </p>
                   <p>
                    <strong>Vĩnh Long</strong>
                    20/A2 Phạm Thái Bường
                </p>
                   <p>
                    <strong>Long An</strong>
                    163 Nguyễn Đình Chiểu, Phường 3
                </p>
                  
                    <strong>Xem thêm chi nhánh shop hoa</strong>
                </div>
            </div>
            <div class="wrapper" >
                <div class="cot1" style="margin-top: 15px;">
                    <h4>HOAYEUTHUONG.COM</h4>
                    <a href="#">Giới thiệu</a><br>
                    <a href="#">Tin tức</a><br> 
                    <a href="#">Trách nhiệm xã hội</a><br>
                    <a href="#">Tuyển dụng</a><br>
                    <a href="#">Câu hỏi thường gặp (FAQs)</a><br>
                    <a href="#">Blog</a><br>
                    <a href="#">Giới thiệu Hoayeuthuong.com đến người thân</a><br>
                    <a href="#">Liên hệ</a>
                </div>
                <div class="cot2" style="margin-top: 15px;">
                    <h4>CHĂM SÓC KHÁCH HÀNG</h4>
                    <a href="#">Thắc mắc và khiếu nại</a><br>
                    <a href="#">Cam kết hài lòng 100%</a><br>
                    <a href="#">Chính sách bảo mật thông tin</a><br>
                    <a href="#">Chính sách và điều khoản</a><br>
                    <a href="#">Hướng dẫn đặt hàng</a><br>
                    <a href="#">Chính sách bảo mật thanh toán</a><br>
                    <h5><a href="#">Hướng dẫn thanh toán</a></h5>
                    <h4>KẾT NỐI</h4>
                    <a href=""><img src="../anhhoa/icon-fb.png" alt=""></a>
                    <a href=""><img src="../anhhoa/icon-twitter.png" alt=""></a>
                    <a href=""><img src="../anhhoa/icon-youtube.png" alt=""></a>
                </div>
                <div class="cot3" style="margin-top: 15px;">
                    <h4>GIỚI THIỆU VỀ HOA</h4>
                    <a href="">Ý nghĩa hoa</a>
                    <a href="">Cách chăm sóc hoa</a>
                    <h4>NEWSLETTER</h4>
                    <p>Đăng kí ngay để nhận được các thông tin khuyến mãi và ưu đãi đặc biệt từ:    </p>
                    <strong>hoayeuthuong.com</strong>
                    <input type="text" placeholder="Email của bạn">
                    <button>OK</button>
                </div>
                <div class="cot4" style="margin-top: 15px;">
                    <h4>VĂN PHÒNG ĐIỀU HÀNH</h4>
                    <strong>Công ty Cổ Phần Color Life</strong>
                    <p>
                        <strong>Địa chỉ:</strong>
                        270F Võ Thị Sáu, P.7, Q. 3, Tp. Hồ Chí Minh
                    </p>
                    <p>
                        <strong>MST: </strong>
                        0313230072 cấp lần đầu ngày 25/04/2015 bởi Sở kế hoạch đầu tư Thành phố Hồ Chí Minh
                    </p>
                    <p>
                        <strong>Email:</strong>
                        contact@hoayeuthuong.com
                    </p>
                    <p>
                        <strong>Điện thoại:</strong>
                        <a href="">028 7300 2010 </a> - <a href=""> 024 7300 2010 </a>
                        (24/7)
                    </p>
                    <a href="#"><img src="../anhhoa/da-thong-bao.png" alt=""></a>
                    <a href="#"><img src="../anhhoa/dmca_copyright_protected150a.png" alt=""></a>
                </div>
            </div>
            <h7>Copyright ©2015, Hoayeuthuong.com, All rights reserved</h7>
        </div>
    </div>
    <script src="../js/donhang.js"></script>
</body>
</html>