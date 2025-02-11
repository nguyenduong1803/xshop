<?php
require "database/get.php";
$category = getCategory();
$listCate = [];
?>


<style>
  .banner_img {
    height: auto;
    max-height: 600px;
  }


  .products-title {
    font-weight: 1000;
    text-align: center;
    font-size: 40px;
    font-family: monospace;
    margin: 60px 0 10px 0;
  }

  .line {
    border-bottom: 2px solid tomato;
    width: 150px;
    margin: 0 auto;
    margin-bottom: 20px;
  }

  /* .bestSeller */

  .bestSeller {
    overflow: hidden;
    /* min-height: 900px; */
    height: auto;
    margin: 24px auto;
  }

  .sell-title {
    width: 100%;
    margin: 30px 0;

  }

  .sell-title p {
    display: inline-block;
    margin: 10px 0;
    font-size: 17px;
    font-family: 'Montserrat', sans-serif;

    min-height: 45px;
    text-align: center;
    line-height: 45px;
    font-weight: 20px;
  }

  .sell-title p:hover {
    color: #fff;
    cursor: pointer;
    background-color: rgba(17, 16, 16, 0.8);
  }

  .seller-item {
    position: relative;
    height: auto;
    text-align: center;
    margin-top: 24px;
  }



  .seller-item:hover>.seller_hover {
    filter: opacity(0.6);
    box-shadow: 5px 8px 12px rgba(87, 86, 86, 0.6);
    cursor: pointer;
    transition: all 0.9s;
  }

  .seller_hover {
    border-radius: 4px;
    box-shadow: 0px 2px 6px rgba(87, 86, 86, 0.3);
    display: block;
    width: 100%;
    height: 100% !important;
  }

  .seller-item h2 {
    margin: 16px 0;
    font-family: 'Montserrat', sans-serif;
    font-size: 18px
  }


  .money {
    display: inline;

    font-family: sans-serif;
    font-size: 15px;
    font-weight: 900;
    color: #f97e6c;
    margin-bottom: 10px;
  }

  @keyframes flash {
    0% {
      color: #fff
    }

    50% {
      color: #fce9ff;
    }

    100% {
      color: #f86363;
    }
  }

  @keyframes mymove {
    from {
      opacity: 0;
      right: 0;
    }

    to {
      opacity: 1;
      right: 15px;
    }
  }

  .shows {
    display: none;
    background-color: #fff;
    font-weight: 900;
    border-radius: 50%;
    border: 1px solid #f97e6c;
    color: #f97e6c;
    position: absolute;
    top: 15px;
    right: 15px;
    font-size: 30px;
    padding: 3px;
    animation: mymove 0.3s linear;
  }

  .eye {
    position: relative;
    top: -3px;
  }

  .add-cart {
    display: none;
    background-color: #fff;
    width: 40px;
    height: 40px;
    font-weight: 900;
    border-radius: 50%;
    border: 1px solid #f97e6c;
    color: #f97e6c;
    position: absolute;
    top: 60px;
    right: 15px;
    font-size: 30px;
    padding: 3px;
    animation: mymove 0.3s linear;
  }

  .shows:hover {
    border: 1px solid #fff;
    background-color: #f97e6c;
    cursor: pointer;
    color: #fff;
  }

  .add-cart:hover {
    border: 1px solid #fff;
    background-color: #f97e6c;
    cursor: pointer;
    color: #fff;
  }

  .shows:hover>.seller-item {}

  .seller-item:hover>.shows {
    display: block;
  }

  .seller-item:hover>.add-cart {
    display: block;
  }

  .sale {
    position: absolute;
    top: 6px;
    left: 6px;
    padding: 3px;
    line-height: 1.5;
    font-size: 15px;
    background-color: #f97e6c;
    font-family: 'Montserrat', sans-serif;
    color: #fff;
    border-radius: 2px;
    animation: flash infinite 1.4s;
  }

  .manClock.active {
    background-color: rgba(17, 16, 16, 0.8);
    color: #fff;
  }

  .manClock,
  .phuKien,
  .femanClock {
    width: 100%;
  }

  .femanClock.active {
    background-color: rgba(17, 16, 16, 0.8);
    color: #fff;
  }

  .phuKien.active {
    background-color: rgba(17, 16, 16, 0.8);
    color: #fff;
  }

  .seller-product2 {
    display: flex;
    justify-content: space-between;
  }


  .feman-title {
    margin: 0 158px;
  }

  .feman-product {
    display: flex;
    justify-content: space-between;
  }

  .feman-product2 {
    display: flex;
    justify-content: space-between;
  }

  .item-seller {
    display: none;
    margin: 0 auto;
    width: 80%;
    text-align: center;
  }

  .phuKien-product {
    display: flex;
    justify-content: space-between;
  }

  .phuKien-product2 {
    display: flex;
    justify-content: space-between;
  }

  .minusPrice {
    display: inline-block;
    margin-right: 10px;
    text-decoration: line-through;
    font-family: 'Montserrat', sans-serif;
    color: #000;
    font-weight: 700;
    opacity: 0.5;
    font-size: 12px;
  }

  /* detail */
  .details {
    display: none !important;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.4);
  }

  .detail__product {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 800px;
    height: 500px;
    background-color: #fff;
    display: flex;
    justify-content: space-between;
    padding: 10px;
  }

  .details__close {
    position: absolute;
    top: -5.5%;
    right: -3.7%;
    font-size: 37px;
    z-index: 11;
  }

  .detail__img img {
    height: 500px;
    height: 380px;
  }

  .detail__bigImg {
    border: 1px solid rgb(207, 206, 206);
    margin-bottom: 10px;
  }

  .detail__img {
    flex-basis: 49%;
  }

  .detail__imgMini img {
    border: 1px solid rgb(207, 206, 206);
    width: 80px;
    height: 80px;
  }

  .detail__imgMini {
    display: flex;
    justify-content: space-between;
  }

  .detail__imgMini .active {
    border: 1px solid red !important;
  }

  .detail__text {
    flex-basis: 49%;
  }

  .detail__text h2 {
    margin-bottom: 15px;
  }

  .space {
    display: inline-block;
    margin: 0 5px 10px 6px;
  }

  .detail__text span {
    font-size: 11.5px;
  }

  .money {}

  .detail__quantity {
    width: 219px;
    height: 40px;
    margin: 20px 0;
    color: rgb(61, 60, 60);
    display: flex;
    justify-content: space-between;
    text-align: center;
  }

  .minus {
    width: 40px;
    height: 100%;
    border-right: 1px solid rgb(207, 206, 206);
    font-size: 23px;
    margin-right: 15px;
  }

  .minus:hover {
    cursor: pointer;
  }

  .num {
    display: inline-block;
    width: 50px;
    height: 60px;
  }

  .plus:hover {
    cursor: pointer;
  }

  .plus {
    width: 40px;
    height: 100%;
    border-left: 1px solid rgb(207, 206, 206);
    margin-left: 15px;
    font-size: 23px;
  }

  .detail__s {
    display: flex;
    justify-content: space-between;
    margin-left: 10px;
    border: 1px solid rgb(207, 206, 206);
    width: 100px;
    height: 30px;
  }

  .detail__quantity span {
    font-size: 20px;
  }

  .detail__text button {
    height: 37px;
    width: 170px;
    background-color: #fff;
    color: #000;
    border: 1px solid rgb(83, 83, 83);
  }

  .detail__text button:hover {
    background-color: rgba(17, 16, 16, 0.8);
    color: #fff;
    cursor: pointer;
  }

  .size20 {
    font-size: 20px;
  }

  .detail__imgMini img:hover {
    cursor: pointer;
  }

  .detail__img {
    position: relative;
  }

  .nextPrev {}

  .detail__imgMini:hover>.nextPrev {
    background: #000;
  }

  .next {
    font-size: 40px;
    position: absolute;
    background-color: rgba(27, 27, 27, 0.3);
    color: #fff;
    right: 0;
    bottom: 5%;
    border-radius: 50%;
  }

  .next:hover {
    cursor: pointer;
  }

  .prev {
    color: #fff;
    position: absolute;
    left: 0;
    font-size: 40px;
    background-color: rgba(27, 27, 27, 0.3);
    bottom: 5%;
    border-radius: 50%;
  }

  .prev:hover {
    cursor: pointer;
  }

  .product__img {
    width: 100%;
    height: 80%;
    border-radius: 4px;
    object-fit: contain;
    transition: all 0.9s;

  }

  #toast {
    position: relative;
    visibility: hidden;
    max-width: 60px;
    height: 60px;
    /*margin-left: -125px;*/
    margin: auto;
    background-color: rgb(40 167 69 / 90%);
    color: #fff;
    text-align: center;
    border-radius: 2px;
    box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.5);
    position: fixed;
    z-index: 6;
    top: 100px;
    right: 20px;
    font-size: 17px;
    white-space: nowrap;
  }

  .toast_close {
    top: 10px;
    right: 10px;
    line-height: 2.1rem;
    position: absolute;
    transition: 1s;

  }

  #toast #img {
    width: 60px;
    height: 60px;
    float: left;
    padding-top: 16px;
    padding-bottom: 16px;
    box-sizing: border-box;
    background-color: rgb(40 167 69 / 80%);
    color: #fff;
  }

  #toast #desc {
    color: #fff;
    padding: 16px;
    overflow: hidden;
    white-space: nowrap;
  }

  #toast.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, expand 0.5s 0.5s, stay 3s 1s, shrink 0.5s 2s;
    animation: fadein 0.5s, expand 0.5s 0.5s, stay 3s 1s, shrink 0.5s 4s;
  }

  .toast_icon {
    font-size: 2rem;
    line-height: 1.5rem;
  }



  #toast2 {
    position: relative;
    visibility: hidden;
    max-width: 60px;
    height: 60px;
    /*margin-left: -125px;*/
    margin: auto;
    background-color: rgb(220 53 69 / 90%);
    color: #fff;
    text-align: center;
    border-radius: 2px;
    box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.5);
    position: fixed;
    z-index: 6;
    top: 100px;
    right: 20px;
    font-size: 17px;
    white-space: nowrap;
  }

  #toast2 #img2 {
    width: 60px;
    height: 60px;
    float: left;
    padding-top: 16px;
    padding-bottom: 16px;
    box-sizing: border-box;
    background-color: rgb(220 53 69 / 80%);
    color: #fff;
  }

  #toast2 #desc2 {
    color: #fff;
    padding: 16px;
    overflow: hidden;
    white-space: nowrap;
  }

  #toast2.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, expand 0.5s 0.5s, stay 3s 1s, shrink 0.5s 2s;
    animation: fadein 0.5s, expand 0.5s 0.5s, stay 3s 1s, shrink 0.5s 4s;
  }

  .btn-checkout {
    display: block;
    background-color: #f97e6c;
    color: #fff;
    width: 130px;
    height: 30px;
    text-align: center;
    margin: 10px auto 0px auto;
    text-decoration: none;
    border-radius: 2px;
  }

  .btn-checkout:hover {
    color: #fff;
    background-color: #f97e6cc4;
  }

  #title_name {
    margin: 10px 0 6px 0;
  }

  .wrap_list_products {
    display: none;
  }

  .wrap_list_products:first-child {
    display: flex;
  }

  @-webkit-keyframes fadein {
    from {
      bottom: 0;
      opacity: 0;
    }

    to {
      bottom: 30px;
      opacity: 1;
    }
  }

  @keyframes fadein {
    from {
      bottom: 0;
      opacity: 0;
    }

    to {
      bottom: 30px;
      opacity: 1;
    }
  }

  @-webkit-keyframes expand {
    from {
      min-width: 50px
    }

    to {
      min-width: 350px
    }
  }

  @keyframes expand {
    from {
      min-width: 50px
    }

    to {
      min-width: 350px
    }
  }

  @-webkit-keyframes stay {
    from {
      min-width: 350px
    }

    to {
      min-width: 350px
    }
  }

  @keyframes stay {
    from {
      min-width: 350px
    }

    to {
      min-width: 350px
    }
  }

  @-webkit-keyframes shrink {
    from {
      min-width: 350px;
    }

    to {
      min-width: 50px;
    }
  }

  @keyframes shrink {
    from {
      min-width: 350px;
    }

    to {
      min-width: 50px;
    }
  }

  @keyframes out {
    from {
      right: 10px;
    }

    to {
      right: -100px;

    }
  }
</style>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./public/img/banner.jpg" class="d-block w-100 banner_img" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./public/img/bannerLap.png" class="d-block w-100  banner_img" alt="...">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 banner_img" src="./public/img/bannerHead.jpg" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">
  <div class="top">
    <h2 class="products-title">TOP SẢN PHẨM BÁN CHẠY</h2>
    <div class="line"></div>
  </div>
  <div class="bestSeller">
    <div class="sell-title row justify-content-center">
      <?php
      foreach ($category as $key => $value) {
        array_push($listCate, $value['tenLoaiHang']);
      ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <p onclick="handleToggle(<?php echo $key ?>)" class="manClock <?php echo $key == 0 ? "active" : "" ?>"><?php echo $value['tenLoaiHang'] ?></p>
        </div>
      <?php } ?>
    </div>
    <div class="container">
      <?php
      foreach ($listCate as $key => $values) {
        $products = getProductbyCate($values);
      ?>
        <div class="row seller-item wrap_list_products">
          <?php
          foreach ($products as $key => $value) {
          ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="seller-item ">
                <a href="?page=detailProduct&&id=<?php echo $value['maHangHoa'] ?>" class="seller_hover">
                  <img class="product__img" id="" src="<?php echo $value['hinhAnh'] ?>" alt="">
                </a>
                <h2 id="title_name"><?php echo $value['tenHangHoa'] ?></h2>
                <span class="minusPrice"><?php echo number_format($value['donGia'], 0, ",", ".") ?></span>
                <p class="money"><?php echo number_format($value['donGia'] * (100 - $value['mucGiamGia']) / 100, 0, ",", ".") ?><u>đ</u></p>
                <ion-icon class="shows" name="eye-outline"></ion-icon>
                <a class="add-cart" href="?page=cart&&addCart=<?php echo $value['maHangHoa'] ?>">
                  <ion-icon class="eye" name="cart-outline"></ion-icon>
                </a>
                <span class="sale">-<?php echo $value['mucGiamGia'] ?>%</span>
                <a href="?page=checkout&listId=<?php echo $value['maHangHoa'] ?>&q=1" class=" btn-checkout">Mua ngay</a>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      <?php
      }

      ?>

    </div>

  </div>
</div>
<div id="toast">
  <div id="img"><i class="fa-solid fa-check toast_icon"></i></div>
  <div id="desc">Đã thêm vào giỏ hàng</div>
  <i class="fa-solid fa-xmark toast_close"></i>
</div>
<div id="toast2">
  <div id="img2"><i class="fa-solid fa-triangle-exclamation toast_icon"></i></i></div>
  <div id="desc2">Sản phẩm đã có trong giỏ hàng</div>
  <i class="fa-solid fa-xmark toast_close"></i>
</div>
<!-- <div class="details">
  <div class="detail__product">
    <ion-icon class="details__close" name="close-outline"></ion-icon>
    <div class="detail__img">
      <div class="detail__bigImg">
        <img src="${c.img}" alt="">
      </div>
      <div class="detail__imgMini">

      </div>
      <div class="nextPrev">
        <ion-icon class="prev" name="chevron-back-outline"></ion-icon>
        <ion-icon class="next" name="chevron-forward-outline"></ion-icon>
      </div>
    </div>
    <div class="detail__text">
      <h2>${c.name}</h2>
      <span>Thương hiệu: đang cập nhật</span><span class="space">|</span>
      <span>Mã sản phẩm: Đang cập nhật</span>
      <span class="minusPrice size20 ">${price1}<u>đ</u></span>
      <p class="money size20">${minusPrice.toLocaleString()}<u>đ</u></p>
      <div class="detail__quantity">
        <span class="size13">Số lượng: </span>
        <div class="detail__s">
          <ion-icon class="minus" name="remove-outline"></ion-icon>
          <span class="num">1</span>
          <ion-icon class="plus" name="add-outline"></ion-icon>
        </div>
      </div>
      <button class="addProduct">Thêm vào sản phẩm</button>
    </div>
  </div>
</div> -->
<script type="text/javascript">
  var listProducts = document.querySelectorAll(".wrap_list_products");
  var btn = document.querySelectorAll(".manClock");
  console.log(listProducts);
  const handleToggle = handleToggles();

  function handleToggles() {
    return function toggle(index) {
      listProducts.forEach((ele, i) => {
        if (index === i) {
          btn[i].classList.add("active")
          ele.style.display = "flex"
        } else {
          btn[i].classList.remove("active")
          ele.style.display = "none"
        }
      })
    }
  }

  function launch_toast(toast) {
    var x = document.getElementById(toast)
    x.className = "show";
    setTimeout(function() {
      x.className = x.className.replace("show", "");

    }, 5000);
    setTimeout(function() {
      const close = document.querySelectorAll(".toast_close").forEach((item) => {
        item.style.display = "none";
      })
    }, 3000)
  }
  <?php
  if (isset($_GET['sussec']) && $_GET['sussec'] === "true") {
    echo "launch_toast('toast')";
    // echo "thành công";
  } elseif (isset($_GET['sussec']) && $_GET['sussec'] === "false") {
    echo "launch_toast('toast2')";
  }
  ?>
</script>