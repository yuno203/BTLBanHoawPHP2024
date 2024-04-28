
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoayeuthuong</title>
    <link rel="stylesheet" href="../css/Trangchu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="../link/angular.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../link/home.js"></script>
    <script src="../link/global.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.min.js"></script>
    
   
</head>
<body ng-app="AppBanHang" ng-controller="HomeCtrl">
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
                <div class="brand-tap">
                    <a href="#">
                        <img src="../anhhoa/434428_dien-hoa.png">
                        <h2>Hoa bó</h2>
                    </a>
                </div>
                <div class="brand-tap">
                    <a href="#">
                        <img src="../anhhoa/434427_hoa-cat-canh.png">
                        <h2>hoa tươi</h2>
                    </a>
                </div>
                <div class="brand-tap">
                    <a href="#">
                        <img src="../anhhoa/434426_cay-xanh.png">
                        <h2>cây hoa</h2>
                    </a>
                </div>
                <div class="brand-tap">
                    <a href="#">
                        <img src="../anhhoa/434454_only-rose.png">
                        <h2>Hoa hồng</h2>
                    </a>
                </div>
                <div class="brand-tap">
                    <a href="#">
                        <img src="../anhhoa/434436_hoa-tet (1).png">
                        <h2>Hoa tết</h2>
                    </a>
                </div>
                <div class="brand-tap">
                    <a href="#"> 
                        <img src="../anhhoa/434425_lan-ho-diep.png">
                        <h2>Hoa lan</h2>
                    </a>
                </div>
                <div class="brand-tap">
                    <a href="#"> 
                        <img src="../anhhoa/434422_qua-tang-gau-bong.png">
                        <h2> Tặng gấu bông</h2>
                    </a>
                </div>
                <div class="brand-tap">
                    <a href="#"> 
                        <img src="../anhhoa/434421_qua-tang-khac.png">
                        <h2>Quà tặng khác</h2>
                    </a>
                </div>
               
        </div>
        <nav>
            <div class="wrapper">
                <div class="logo">
                    <a href="/" title="Shop hoa yêu thương">
                        <img src="../anhhoa/logo-hoa-yeu-thuong.png">
                    </a>
                </div>
                <div class="search">
                    <input id="txtSearch" type="text" onclick="tiemkiem()" placeholder="Tìm sản phẩm"> 
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
                    <a id="shopping-cart" href="/giohang">
                        <img src="../anhhoa/shopping-bag.png">
                        <strong>Giỏ hàng</strong>
                    </a>
                </div>
                <div class="my-account">
                    <img src="../anhhoa/user.png" style="border-width: 0px;">
                    <a title="Tai Khoan" href="#">Tài khoản </a>
                        <div>

                        </div>
                </div>
            </div>
        </nav>
       
       @include('users.header_nav')
        <div id="Quangcao">
            <div class="wrapper">
                <div class="banner">
                    <div class="image">
                        <img id="img" onclick="changeImage()" src="../anhhoa/2.jpg">
                    </div>
                   <script>
                        var index = 1;
                        changeImage = function (){
                            var imgs = ["../anhhoa/2.jpg","../anhhoa/2.jpg","../anhhoa/3.jpg","../anhhoa/4.jpg"];
                            document.getElementById('img').src = imgs[index];
                            index++;
                            if(index ==3)
                            {
                                index = 0;
                            }
                        }
                        setInterval(changeImage,5000);
                    </script>
                   
                </div>
                <div class="filter">
                    <h2 style="text-align: center;color: #FFFFFF;font-size: 20px;margin-top: 20px;margin-bottom: 15px;">TƯ VẤN CHỌN HOA TƯƠI</h2>
                    <div></div>
                    <div class="f">
                        <label for="">Chủ đề</label>
                        <select name="" id="">
                        <option value="chude" selected>Hoa sinh nhật</option>
                        <option value="chude">Hoa cưới</option>
                        <option value="chude">Hoa chúc mừng</option>
                        <option value="chude">Hoa chia buồn</option>
                        <option value="chude">Hoa tốt nghiệp</option>
                        <option value="chude">Hoa tình yêu</option>
                    </select></div>
                    <div></div>
                    <div class="f">
                        <label for="">Mức giá</label>
                        <select name="" id="">
                            <option value="chude" selected>Tất cả</option>
                            <option value="chude">Dưới 250.000</option>
                            <option value="chude">Từ 250.000 đến 500.000</option>
                            <option value="chude">Từ 500.000 đến 1.000.000</option>
                            <option value="chude">Từ 1.000.000 đến 2.000.000</option>
                            <option value="chude">Trên 2.000.000</option>
                        </select>
                    </div>
                    <div class="f">
                        <button type="button">Tìm Kiếm</button>
                    </div>
                    <div class="d">
                        *Bạn có thể gọi nhanh cho chúng tôi theo số <span>1800 6353 </span>để đặt hoa theo thiết kế riêng
                    </div>
                </div>
                
            </div>
        </div>
        @include('users.banchay')
        <!-- <div class="icon_hoa">
            <div class="wrapper" >
                <h2> MẪU HOA BÁN CHẠY 2023</h2>
                <ul>
                    @foreach($products as $product)
                    <li>
                        <a href="#"><img src="{{ asset('anhhoa/' . $product->AnhDaiDien) }}" alt=""></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div> -->
       
        <div id="ds_muasp">
            <div class="wrapper">
                <div class="dulieu ">
                <h2>KHUYẾN MÃI</h2>
                @foreach($products as $product)
                    <div class="sanpham">
                       
                        <div>
                            <div class="i">
                            <a href="/Home/{{ $product->MaSanPham }}"><img src="{{ asset('anhhoa/' . $product->AnhDaiDien) }}" ></a>
                            </div>
                            <div class="t">
                                <a href="#" id="">{{ $product->TenSanPham }}</a><br>
                                <span class="thuoctinh">
                                    <em class="gianiemiet"></em>
                                    <em>{{$product->Gia}}đ</em>    
                                </span>
                                <span class="selebe"></span>
                            </div>
                        </div>
                      
                    </div>
                    @endforeach
                </div>
                <a href="#" class="xemthem">"Xem thêm, còn 76 sản phẩm"</a>
                <div class="dulieu_top">
                    <h2 class="dulieu_tieude">HOA GIAO NHANH 60 PHÚT</h2>
                    <div class="dulieu_link">
                        <a href="#">Bó hoa tươi</a>
                        <a href="#">Hộp hoa tươi</a>
                        <a href="#">Lãng hoa khai trương</a>
                        <a href="#">Hoa khai trương</a>
                    </div>
                </div>
                <div class="dulieu2"> 
                    <div class="sanpham">
                        <div class="i">
                            <a href="{{ url('/chitietsanpham') }}"><img src="../anhhoa/hoa1.jpg"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa2.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa3.jpg"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa4.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                            <span class="moi"></span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa5.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa6.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa7.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                            <span class="moi"></span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa8.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                            <span class="moi"></span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa9.jpg"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa10.jpg"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                            <span class="moi"></span>
                        </div>
                    </div>
                </div>
                <a href="#" class="xemthem">"Xem thêm, còn 123 sản phẩm"</a>
                <div class="anhsale">
                    <img src="./">
                    <div></div>
                    <div></div>
                </div>
                <div class="dulieu_top">
                    <h2 class="dulieu_tieude">KẸO NGỌT - QUÀ TẶNG</h2>
                    <div class="dulieu_link">
                        <a href="#">Bánh kem Tous les Jours</a>
                        <a href="#">Bánh kem Brodard</a>
                        <a href="#">Trái cây</a>
                        <a href="#">Qùa tặng kèm</a>
                    </div>
                </div>
                <div class="dulieu3">
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa1.jpg"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa2.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa3.jpg"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa4.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                            <span class="moi"></span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa5.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa6.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa7.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                            <span class="moi"></span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa8.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                            <span class="moi"></span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa9.jpg"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa10.jpg"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                            <span class="moi"></span>
                        </div>
                    </div>
                </div>
                <div class="dulieu_top">
                    <h2 class="dulieu_tieude">CÂY TÌNH YÊU
                       </h2>
                    <div class="dulieu_link">
                        <a href="#"> Lan hồ điệp</a>
                        <a href="#">Cây văn phòng</a>
                        <a href="#"> Cây thủy sinh</a>
                        <a href="#">Cây để bàn</a><a href="#">  Cây may mắn</a>
                    </div>
                </div>
                <div class="dulieu4">
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa1.jpg"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa2.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa3.jpg"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa4.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                            <span class="moi"></span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa5.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa6.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa7.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                            <span class="moi"></span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa8.png"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                            <span class="moi"></span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa9.jpg"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                        </div>
                    </div>
                    <div class="sanpham">
                        <div class="i">
                            <a><img src="../anhhoa/hoa10.jpg"></a>
                        </div>
                        <div class="t">
                            <a href="">white roses</a><br>
                            <span class="thuoctinh">
                            
                                <em class="gianiemiet">450.000d</em>
                                <em>350.000d</em>    
                            </span>
                            <span class="selebe">Sale</span>
                            <span class="moi"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <h3 class="h3_gioithieu">TẠI SAO BẠN NÊN DÙNG DỊCH VỤ CỦA CHÚNG TÔI?</h3>
                <div class="gioithieu">
                   <a href="#">
                    <div class="img_gioithieu">
                        <img src="../anhhoa/icon-free-ship.png" alt="">
                    </div>
                    <div class="text_gioithieu">
                        <div class="title_gt">Miễn phí giao hàng 63 tỉnh </div>
                        <div class="nd_gt">Free shipping (nội thành)</div>
                    </div>
                   </a>
                </div>
                <div class="gioithieu">
                    <a href="#">
                     <div class="img_gioithieu">
                         <img src="../anhhoa/icon-support-247.png" alt="">
                     </div>
                     <div class="text_gioithieu">
                         <div class="title_gt">Phục vụ 24/24</div>
                         <div class="nd_gt">24/7 service</div>
                     </div>
                    </a>
                 </div>
                 <div class="gioithieu">
                    <a href="#">
                     <div class="img_gioithieu">
                         <img src="../anhhoa/icon-vat.png" alt="">
                     </div>
                     <div class="text_gioithieu">
                         <div class="title_gt">Giá đã gồm 10% VAT</div>
                         <div class="nd_gt">Price iclude VAT</div>
                     </div>
                    </a>
                 </div>
                 <div class="gioithieu">
                    <a href="#">
                     <div class="img_gioithieu">
                         <img src="../anhhoa/icon-quick-delivery.png" alt="">
                     </div>
                     <div class="text_gioithieu">
                         <div class="title_gt">Giao nhanh trong 60 phút</div>
                         <div class="nd_gt">60 minutes quick delivery</div>
                     </div>
                    </a>
                 </div>
                 <div class="gioithieu">
                    <a href="#">
                     <div class="img_gioithieu">
                         <img src="../anhhoa/icon-guarantee-smile.png" alt="">
                     </div>
                     <div class="text_gioithieu">
                         <div class="title_gt">Cam kết hài lòng 100%</div>
                         <div class="nd_gt">100% guarantee smile</div>
                     </div>
                    </a>
                 </div>
                 <div class="gioithieu">
                    <a href="#">
                     <div class="img_gioithieu">
                         <img src="../anhhoa/icon-fresh-warranty.png" alt="">
                     </div>
                     <div class="text_gioithieu">
                         <div class="title_gt">Cam kết hoa tươi 3+ ngày</div>
                         <div class="nd_gt">3+ day fresh warranty</div>
                     </div>
                    </a>
                 </div>
                 <div class="gioithieu">
                    <a href="#">
                     <div class="img_gioithieu">
                         <img src="../anhhoa/icon-postcard.png" alt="">
                     </div>
                     <div class="text_gioithieu">
                         <div class="title_gt">Tặng thiệp cao cấp</div>
                         <div class="nd_gt">Free greeting cards</div>
                     </div>
                    </a>
                 </div>
                 <div class="gioithieu">
                    <a href="#">
                     <div class="img_gioithieu">
                         <img src="../anhhoa/icon-discount.png" alt="">
                     </div>
                     <div class="text_gioithieu">
                         <div class="title_gt">Giảm giá đến 10%</div>
                         <div class="nd_gt">Receive 3-10% discount</div>
                     </div>
                    </a>
                 </div>
            </div>
        </div>
        
        @include('users.footer')

    </div>
   
    <script>
        function tiemkiem(){
            var input, filter,ul,li,a,i,txtValue;
            input = document.getElementById("input");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for(i= 0; i<li.length;i++){
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.interText;
                if(txtValue.toUpperCase().indexOf(filter)>-1){
                    li[i].style.display="";
                }
                else{
                    li[i].style.display="none"
                }
            }
        }
    </script>
     <div class="nutup">
        <a href="#">
            <div class="tren">
                <i class="fa-sharp fa-light fa-triangle"></i>
            </div>
            <div class="duoi">
                <strong>Up</strong>
            </div>
        </a>
    </div>
    <script src="../js/trangchu.js"></script>
</body>
</html>
