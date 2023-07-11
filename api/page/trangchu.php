<style type="text/css">
  .banner-slider .owl-nav [class*=owl-]:hover {
    color: var(--mainColor);
    background-color: unset;
  }

  .owl-theme .owl-nav [class*=owl-] {
    margin: 0;
  }

  .banner-slider .owl-prev.disabled {
    display: none;
  }

  .banner-slider .owl-next.disabled {
    display: none;
  }

  .banner-slider.owl-carousel>.owl-nav>.owl-next {
    width: 30px;
    height: 60px;
    transition: .3s;
    outline: none;
    opacity: .9;
    padding-left: 7px;
    border-radius: 100px 0 0 100px;
    background: #f7f7f7;
    box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
    right: 0;
    top: 46%;
    position: absolute;
    right: 0;
  }

  .banner-slider.owl-carousel>.owl-nav>.owl-prev {
    width: 30px;
    height: 60px;
    transition: .3s;
    outline: none;
    opacity: .9;
    padding-left: 7px;
    border-radius: 0 100px 100px 0;
    background: #f7f7f7;
    box-shadow: 0 0 4px 0 rgb(0 0 0 / 20%);
    right: 0;
    top: 45%;
    position: absolute;
    left: 0;
  }

  .bg-img-banner {
    background-image: url(//bizweb.dktcdn.net/100/479/406/themes/897580/assets/bg_slide.png?1681025660821);
    background-repeat: no-repeat;
    background-position: bottom center;
  }

  .dance {
    animation: dance infinite 2s ease-in-out;
  }

  .my-bg-img {
    padding-bottom: 100%;
    background-position: top center;
    background-size: cover;
    background-repeat: no-repeat;
    transition: 0.6s all;
  }

  .img-product-main {
    opacity: 1;
  }

  .img-product-second {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0;
  }

  .card-product-img:hover .img-product-main {
    opacity: 0;
  }

  .card-product-img:hover .img-product-second {
    opacity: 1;
  }

  .price {
    color: var(--accentColor2);
  }

  .old-price {
    font-size: 13px;
    color: var(--accentColor1);
    vertical-align: text-bottom;
  }

  .sale-label {
    top: 5px;
    left: 5px;
    color: #ffffff;
    background: var(--accentColor2);
    padding: 4px 6px;
    z-index: 2;
    font-size: 12px;
    border-top-left-radius: 9px;
    border-bottom-right-radius: 9px;
    box-shadow: 0px 0px 5px 1px #fff;
    opacity: 0.8;
  }

  .aqua_reviews {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }

  .aqua_reviews:before {
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    background: linear-gradient(180deg, var(--mainColor) 0%, transparent 50%, var(--mainColor) 100%);
    top: 0;
    left: 0;
  }

  .aqua_reviews .content_tip {
    background: rgba(255, 255, 255, 0.85);
  }

  .aqua_reviews .i_fm {
    width: 80px;
    height: 80px;
    border: 2px solid var(--mainColor2);
  }

  .reviews.owl-carousel .owl-item img {
    width: unset;
  }

  /* .owl-theme .owl-dots .owl-dot span {
    display: none;
  } */

  .reviews.owl-theme .owl-dots .owl-dot {
    position: relative;
  }

  .reviews.owl-theme .owl-dots .owl-dot span::before {
    transition: 0.7s width;
    width: 100%;
    left: 0;
    right: auto;
    opacity: 1;
  }

  .see-all:hover {
    color: #fff;
  }

  .center-bottom-btn {
    left: 50%;
    bottom: -20px;
    transform: translateX(-50%);
  }

  .effect-ming:hover .overlay::before {
    opacity: 1;
    transform: scale3d(1, 1, 1);
  }

  .effect-ming .overlay::before {
    content: '';
    position: absolute;
    top: 30px;
    right: 30px;
    bottom: 30px;
    left: 30px;
    border: 1px solid #fff;
    border-radius: 0.25rem;
    box-shadow: 0 0 0 45px rgb(255 255 255 / 20%);
    opacity: 0;
    transition: opacity 0.35s, transform 0.35s;
    transform: scale3d(1.4, 1.4, 1);
    background-image: url(public/demo/favicon.png);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 70px;
    background-color: rgba(0, 123, 255, 0.15);
  }

  .effect-ming .overlay {
    top: 0;
    left: 0;
    padding: 30px;
    backface-visibility: hidden;
    pointer-events: none;
    z-index: 3;
  }

  .news-slider.owl-carousel .owl-stage-outer {
    /* overflow:visible; */
  }

  .line_2 {
    display: -webkit-box;
    overflow: hidden;
    word-break: break-all;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
  }




  /* md */
  @media (min-width: 768px) {}

  /* pc */
  @media (min-width: 1400px) {}
</style>

<!-- slider banner -->
<div class="row px-6 pb-5 bg-img-banner bg-primary">
  <div class="banner-slider owl-carousel owl-theme px-0">
    <img class="rounded" src="public/demo/slide-img1.png" alt="">
    <img class="rounded" src="public/demo/slide-img2.png" alt="">
  </div>
</div>

<!-- Dịch vụ của chúng tôi -->
<div class="row bg-primary">
  <div style="backdrop-filter: brightness(0.9);" class="d-flex flex-wrap  px-6">
    <div class="col-xxl-6 col-12 dance order-2 order-xxl-1 text-center text-xxl-start">
      <img class="img-fluid" src="public/demo/bn_about.png" alt="">
    </div>
    <div class="col-xxl-6 col-12 mt-5 pt-4 order-1 order-xxl-2">
      <h4 class="pb-1 fw-bold text-white">
        Dịch vụ của chúng tôi
      </h4>
      <p class="text-hover">Là đại lý chính thức của Tổng công ty Cổ phần Nước tinh khoáng tinh khiết thiên nhên MewAQUA
        (AQUA Trading), Đại lý nước tinh khiết tại 266 Đội Cấn, Ba Đình, Hà Nội cam kết cung cấp nước lọc, nước khoáng,
        nước tinh khiết với các tiêu chuẩn và dịch vụ sau:</p>
      <div class="d-flex flex-wrap">
        <div class="col-6 col-xxl-4 mb-3">
          <div class="item d-flex align-items-center">
            <div class="me-2">
              <img width="65" height="65" class="" src="public/demo/service_1.png" alt="">
            </div>
            <div class="fw-bold text-white">
              Sản phẩm chính hãng
            </div>
          </div>
        </div>
        <div class="col-6 col-xxl-4 mb-3">
          <div class="item d-flex align-items-center">
            <div class="me-2">
              <img width="65" height="65" class="" src="public/demo/service_2.png" alt="">
            </div>
            <div class="fw-bold text-white">
              6 Giai đoạn lọc
            </div>
          </div>
        </div>
        <div class="col-6 col-xxl-4 mb-3">
          <div class="item d-flex align-items-center">
            <div class="me-2">
              <img width="65" height="65" class="" src="public/demo/service_3.png" alt="">
            </div>
            <div class="fw-bold text-white">
              Thành phần lành mạnh
            </div>
          </div>
        </div>
        <div class="col-6 col-xxl-4 mb-3">
          <div class="item d-flex align-items-center">
            <div class="me-2">
              <img width="65" height="65" class="" src="public/demo/service_4.png" alt="">
            </div>
            <div class="fw-bold text-white">
              Kiểm soát hoàn toàn
            </div>
          </div>
        </div>
        <div class="col-6 col-xxl-4 mb-3">
          <div class="item d-flex align-items-center">
            <div class="me-2">
              <img width="65" height="65" class="" src="public/demo/service_5.png" alt="">
            </div>
            <div class="fw-bold text-white">
              Vận chuyển khép kín
            </div>
          </div>
        </div>
        <div class="col-6 col-xxl-4 mb-3">
          <div class="item d-flex align-items-center">
            <div class="me-2">
              <img width="65" height="65" class="" src="public/demo/service_6.png" alt="">
            </div>
            <div class="fw-bold text-white">
              Tư vấn toàn diện
            </div>
          </div>
        </div>
      </div>

      <a class="view_mores bg-main d-inline-block rounded-main overflow-hidden fw-bold py-2 px-4 mt-3 text-center position-relative"
        href="index.php?p=aboutus" title="Đọc thêm">
        <span class="position-relative title fw-bold">Đọc thêm</span>
        <span></span><span></span><span></span><span></span>
      </a>
    </div>
  </div>
</div>

<!-- Sản Phẩm -->
<div class="row bg-primary py-md-5 pt-4 pb-3 px-6">
  <h2 class="text-white text-center fw-bold">
    Sản Phẩm
  </h2>
  <p class="text-center text-hover">Tổng công ty Cổ phần Nước tinh khoáng tinh khiết thiên nhên MewAQUA (AQUA Trading)
  </p>
  <!-- products-slider owl-carousel owl-theme px-0 -->
  <div class="products-slider owl-carousel owl-theme px-0">
    <div class="row">
      <div class="col-12 mb-3">
        <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative">
          <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
            21%
          </div>
          <a href="index.php?p=detailproduct">
            <div class="position-relative card-product-img">
              <div class="img-product-main my-bg-img" style="background-image: url(public/demo/img-product-1.jpg);">
              </div>
              <div class="img-product-second my-bg-img" style="background-image: url(public/demo/img-product-2.jpg);">
              </div>
            </div>
          </a>
          <a class="line_2 text-center" href="index.php?p=detailproduct" title="Nước khoáng lọc OASIS chai 2 lít">
            Nước khoáng lọc OASIS chai 2 lít
          </a>
          <div class="text-center">
            <span class="price fw-bold">220.000₫</span>
            <del class="old-price"> 280.000₫</del>
          </div>
          <div class="text-center">
            <a class="view_mores bg-main2 d-inline-block rounded-main overflow-hidden fw-bold py-2 px-3 mt-3 text-center position-relative"
              href="index.php?p=aboutus" title="Đọc thêm">
              <span class="position-relative title fw-bold">
                <i class="bi bi-cart3 me-2"></i>
                Đặt hàng ngay
              </span>
              <span></span><span></span><span></span><span></span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative">
          <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
            21%
          </div>
          <a href="index.php?p=detailproduct">
            <div class="position-relative card-product-img">
              <div class="img-product-main my-bg-img" style="background-image: url(public/demo/img-product-1.jpg);">
              </div>
              <div class="img-product-second my-bg-img" style="background-image: url(public/demo/img-product-2.jpg);">
              </div>
            </div>
          </a>
          <a class="line_2 text-center" href="index.php?p=detailproduct" title="Nước khoáng lọc OASIS chai 2 lít">
            Nước khoáng lọc OASIS chai 2 lít
          </a>
          <div class="text-center">
            <span class="price fw-bold">220.000₫</span>
            <del class="old-price"> 280.000₫</del>
          </div>
          <div class="text-center">
            <a class="view_mores bg-main2 d-inline-block rounded-main overflow-hidden fw-bold py-2 px-3 mt-3 text-center position-relative"
              href="index.php?p=aboutus" title="Đọc thêm">
              <span class="position-relative title fw-bold">
                <i class="bi bi-cart3 me-2"></i>
                Đặt hàng ngay
              </span>
              <span></span><span></span><span></span><span></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 mb-3">
        <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative">
          <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
            21%
          </div>
          <a href="index.php?p=detailproduct">
            <div class="position-relative card-product-img">
              <div class="img-product-main my-bg-img" style="background-image: url(public/demo/img-product-1.jpg);">
              </div>
              <div class="img-product-second my-bg-img" style="background-image: url(public/demo/img-product-2.jpg);">
              </div>
            </div>
          </a>
          <a class="line_2 text-center" href="index.php?p=detailproduct" title="Nước khoáng lọc OASIS chai 2 lít">
            Nước khoáng lọc OASIS chai 2 lít
          </a>
          <div class="text-center">
            <span class="price fw-bold">220.000₫</span>
            <del class="old-price"> 280.000₫</del>
          </div>
          <div class="text-center">
            <a class="view_mores bg-main2 d-inline-block rounded-main overflow-hidden fw-bold py-2 px-3 mt-3 text-center position-relative"
              href="index.php?p=aboutus" title="Đọc thêm">
              <span class="position-relative title fw-bold">
                <i class="bi bi-cart3 me-2"></i>
                Đặt hàng ngay
              </span>
              <span></span><span></span><span></span><span></span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative">
          <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
            21%
          </div>
          <a href="index.php?p=detailproduct">
            <div class="position-relative card-product-img">
              <div class="img-product-main my-bg-img" style="background-image: url(public/demo/img-product-1.jpg);">
              </div>
              <div class="img-product-second my-bg-img" style="background-image: url(public/demo/img-product-2.jpg);">
              </div>
            </div>
          </a>
          <a class="line_2 text-center" href="index.php?p=detailproduct" title="Nước khoáng lọc OASIS chai 2 lít">
            Nước khoáng lọc OASIS chai 2 lít
          </a>
          <div class="text-center">
            <span class="price fw-bold">220.000₫</span>
            <del class="old-price"> 280.000₫</del>
          </div>
          <div class="text-center">
            <a class="view_mores bg-main2 d-inline-block rounded-main overflow-hidden fw-bold py-2 px-3 mt-3 text-center position-relative"
              href="index.php?p=aboutus" title="Đọc thêm">
              <span class="position-relative title fw-bold">
                <i class="bi bi-cart3 me-2"></i>
                Đặt hàng ngay
              </span>
              <span></span><span></span><span></span><span></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 mb-3">
        <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative">
          <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
            21%
          </div>
          <a href="index.php?p=detailproduct">
            <div class="position-relative card-product-img">
              <div class="img-product-main my-bg-img" style="background-image: url(public/demo/img-product-1.jpg);">
              </div>
              <div class="img-product-second my-bg-img" style="background-image: url(public/demo/img-product-2.jpg);">
              </div>
            </div>
          </a>
          <a class="line_2 text-center" href="index.php?p=detailproduct" title="Nước khoáng lọc OASIS chai 2 lít">
            Nước khoáng lọc OASIS chai 2 lít
          </a>
          <div class="text-center">
            <span class="price fw-bold">220.000₫</span>
            <del class="old-price"> 280.000₫</del>
          </div>
          <div class="text-center">
            <a class="view_mores bg-main2 d-inline-block rounded-main overflow-hidden fw-bold py-2 px-3 mt-3 text-center position-relative"
              href="index.php?p=aboutus" title="Đọc thêm">
              <span class="position-relative title fw-bold">
                <i class="bi bi-cart3 me-2"></i>
                Đặt hàng ngay
              </span>
              <span></span><span></span><span></span><span></span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative">
          <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
            21%
          </div>
          <a href="index.php?p=detailproduct">
            <div class="position-relative card-product-img">
              <div class="img-product-main my-bg-img" style="background-image: url(public/demo/img-product-1.jpg);">
              </div>
              <div class="img-product-second my-bg-img" style="background-image: url(public/demo/img-product-2.jpg);">
              </div>
            </div>
          </a>
          <a class="line_2 text-center" href="index.php?p=detailproduct" title="Nước khoáng lọc OASIS chai 2 lít">
            Nước khoáng lọc OASIS chai 2 lít
          </a>
          <div class="text-center">
            <span class="price fw-bold">220.000₫</span>
            <del class="old-price"> 280.000₫</del>
          </div>
          <div class="text-center">
            <a class="view_mores bg-main2 d-inline-block rounded-main overflow-hidden fw-bold py-2 px-3 mt-3 text-center position-relative"
              href="index.php?p=aboutus" title="Đọc thêm">
              <span class="position-relative title fw-bold">
                <i class="bi bi-cart3 me-2"></i>
                Đặt hàng ngay
              </span>
              <span></span><span></span><span></span><span></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 mb-3">
        <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative">
          <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
            21%
          </div>
          <a href="index.php?p=detailproduct">
            <div class="position-relative card-product-img">
              <div class="img-product-main my-bg-img" style="background-image: url(public/demo/img-product-1.jpg);">
              </div>
              <div class="img-product-second my-bg-img" style="background-image: url(public/demo/img-product-2.jpg);">
              </div>
            </div>
          </a>
          <a class="line_2 text-center" href="index.php?p=detailproduct" title="Nước khoáng lọc OASIS chai 2 lít">
            Nước khoáng lọc OASIS chai 2 lít
          </a>
          <div class="text-center">
            <span class="price fw-bold">220.000₫</span>
            <del class="old-price"> 280.000₫</del>
          </div>
          <div class="text-center">
            <a class="view_mores bg-main2 d-inline-block rounded-main overflow-hidden fw-bold py-2 px-3 mt-3 text-center position-relative"
              href="index.php?p=aboutus" title="Đọc thêm">
              <span class="position-relative title fw-bold">
                <i class="bi bi-cart3 me-2"></i>
                Đặt hàng ngay
              </span>
              <span></span><span></span><span></span><span></span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative">
          <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
            21%
          </div>
          <a href="index.php?p=detailproduct">
            <div class="position-relative card-product-img">
              <div class="img-product-main my-bg-img" style="background-image: url(public/demo/img-product-1.jpg);">
              </div>
              <div class="img-product-second my-bg-img" style="background-image: url(public/demo/img-product-2.jpg);">
              </div>
            </div>
          </a>
          <a class="line_2 text-center" href="index.php?p=detailproduct" title="Nước khoáng lọc OASIS chai 2 lít">
            Nước khoáng lọc OASIS chai 2 lít
          </a>
          <div class="text-center">
            <span class="price fw-bold">220.000₫</span>
            <del class="old-price"> 280.000₫</del>
          </div>
          <div class="text-center">
            <a class="view_mores bg-main2 d-inline-block rounded-main overflow-hidden fw-bold py-2 px-3 mt-3 text-center position-relative"
              href="index.php?p=aboutus" title="Đọc thêm">
              <span class="position-relative title fw-bold">
                <i class="bi bi-cart3 me-2"></i>
                Đặt hàng ngay
              </span>
              <span></span><span></span><span></span><span></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center mt-4">
    <a class="view_mores bg-main d-inline-block rounded-main overflow-hidden fw-bold py-2 px-4 mt-3 text-center position-relative"
      href="index.php?p=aboutus" title="Đọc thêm">
      <span class="position-relative title fw-bold">Xem tất cả</span>
      <span></span><span></span><span></span><span></span>
    </a>
  </div>
</div>

<div class="row">
  <img class="img-fluid px-0" src="public/demo/water_background.png" alt="">
</div>

<div class="row bg-primary">
  <h2 class="mb-2 mt-5 text-white text-center">
    Thành phần khoáng chất
  </h2>
  <p class="text-center mb-4 text-hover">
    Thành phân khoáng chất cao có trong nước lọc đóng chai - MewAQUA
  </p>
</div>

<div class="row px-6 py-xxl-5 py-3 bg-primary align-items-center">
  <div class="col-xxl-3 col-md-6 col-6 text-xxl-start">
    <div class="mb-4 text-center text-xxl-start mb-xxl-5">
      <h4 class="text-white mb-1">
        Calcium+
      </h4>
      <p class="text-main2 fw-bold mb-2">5-12 mg/dm3</p>
      <div class="sum_comp text-hover line_3">
        Calci là một thành phần quan trọng của khẩu phần dinh dưỡng.
      </div>
    </div>
    <div class="mb-4 text-center text-xxl-start mb-xxl-5">
      <h4 class=" text-white mb-1">
        Magnesium
      </h4>
      <p class="text-main2 fw-bold mb-2">2-5 mg/dm3</p>
      <div class="sum_comp text-hover line_3">
        Magnesi hữu cơ là quan trọng cho cả thực vật và động vật
      </div>
    </div>
    <div class="mb-4 text-center text-xxl-start mb-xxl-0">
      <h4 class="text-white mb-1">
        Sodium
      </h4>
      <p class="text-main2 fw-bold mb-2">20-25 mg/dm3</p>
      <div class="sum_comp text-hover line_3">
        Kim loại kiềm này là thành phần của natri chloride (NaCl, muối ăn) là một chất quan trọng cho sự sống
      </div>
    </div>
  </div>
  <div class="d-none d-xxl-block col-xxl-6 text-center">
    <img class="img-fluid" src="public/demo/composition.png">
  </div>
  <div class="col-xxl-3 col-md-6 col-6 text-xxl-end">
    <div class="mb-4 text-center text-xxl-start mb-xxl-5">
      <h4 class="text-white mb-1">
        Chlorine
      </h4>
      <p class="sub_comp text-main2 font-weight-bold mb-2">~46 mg/dm3</p>
      <div class="sum_comp text-hover line_3">
        Chlor là một hóa chất quan trọng trong làm tinh khiết nước, trong việc khử trùng hay tẩy trắng
      </div>
    </div>
    <div class="mb-4 text-center text-xxl-start mb-lg-5">
      <h4 class=" text-white mb-1">
        Potassium
      </h4>
      <p class="sub_comp text-main2 font-weight-bold mb-2">6,8-7,3mg/dm3</p>
      <div class="sum_comp text-hover line_3">
        Cation kali là dưỡng chất thiết yếu cho con người và sức khỏe
      </div>
    </div>
    <div class="mb-4 text-center text-xxl-start mb-lg-0">
      <h4 class=" text-white mb-1">
        Sulphates
      </h4>
      <p class="sub_comp text-main2 font-weight-bold mb-2">5-12 mg/dm3</p>
      <div class="sum_comp text-hover line_3">
        Các muối sunfat là một thành phần tồn tại rộng rãi trong tự nhiên
      </div>
    </div>
  </div>
</div>

<div style="background-image: url(public/demo/bg_customer_review.png);"
  class="row py-5 aqua_reviews position-relative px-6">
  <h3 style="z-index: 2;" class="fw-bold text-white text-center mt-md-5 pt-md-5">
    Khách hàng với chúng tôi
  </h3>
  <div style="z-index: 2;" class="reviews owl-carousel owl-theme px-0 py-md-5">
    <div class="content_tip text-center p-3 rounded_module">
      <div class="d-flex align-items-center mb-3">
        <img class="rounded-circle i_fm" src="public/demo/ykkh_1.jpg">
        <div class="ms-2">
          <p class="fw-bold text-main text-start mb-0">Trang Xinh</p>
          <span>CEO Hẻm Khói</span>
        </div>
      </div>
      <div class="hgroup position-relative">
        <p class="text-start">Mew AQUA cung cấp nước uống chất lượng tuyệt vời đảm bảo an toàn, uy tín cao. Quy
          trình chuyên nghiệp, vận chuyển nhanh chóng, tôi rất hài lòng với các bạn. Rất vui và sẽ hợp tác lâu dài với
          các bạn, cảm ơn rất nhiều.</p>
      </div>
    </div>
    <div class="content_tip text-center p-3 rounded_module">
      <div class="d-flex align-items-center mb-3">
        <img class="rounded-circle i_fm" src="public/demo/ykkh_2.jpg">
        <div class="ms-2">
          <p class="fw-bold text-main text-start mb-0">Trang Xinh</p>
          <span>CEO Hẻm Khói</span>
        </div>
      </div>
      <div class="hgroup position-relative">
        <p class="text-start">Mew AQUA cung cấp nước uống chất lượng tuyệt vời đảm bảo an toàn, uy tín cao. Quy
          trình chuyên nghiệp, vận chuyển nhanh chóng, tôi rất hài lòng với các bạn. Rất vui và sẽ hợp tác lâu dài với
          các bạn, cảm ơn rất nhiều.</p>
      </div>
    </div>
    <div class="content_tip text-center p-3 rounded_module">
      <div class="d-flex align-items-center mb-3">
        <img class="rounded-circle i_fm" src="public/demo/ykkh_3.jpg">
        <div class="ms-2">
          <p class="fw-bold text-main text-start mb-0">Trang Xinh</p>
          <span>CEO Hẻm Khói</span>
        </div>
      </div>
      <div class="hgroup position-relative">
        <p class="text-start">Mew AQUA cung cấp nước uống chất lượng tuyệt vời đảm bảo an toàn, uy tín cao. Quy
          trình chuyên nghiệp, vận chuyển nhanh chóng, tôi rất hài lòng với các bạn. Rất vui và sẽ hợp tác lâu dài với
          các bạn, cảm ơn rất nhiều.</p>
      </div>
    </div>
  </div>
</div>

<div class="row px-6 py-md-5">
  <h2 class="text-white fw-bold text-center">Tin tức</h2>
  <div class="text-center">
    <a class="see-all mb-3 mb-xxl-4 text-hover d-inline-block" href="tin-tuc" title="Xem tất cả">
      Xem tất cả &gt;&gt;
    </a>
  </div>

  <div class="news-slider owl-carousel owl-theme px-0">
    <div class="bg-white h-100 p-2 position-relative rounded">
      <a href="index.php?p=chitiettintuc" title="Mua nước khoáng ở đâu để đảm bảo chất lượng?"
        class="position-relative effect-ming overflow-hidden d-inline-block">
        <img src="public/demo/news.jpg" class="img-fluid" alt="Mua nước khoáng ở đâu để đảm bảo chất lượng?">
        <div class="position-absolute w-100 h-100 overlay"></div>
      </a>
      <div class="pt-3 text-center">
        <a class="fs-6 fw-bold" href="index.php?p=chitiettintuc"
          title="Mua nước khoáng ở đâu để đảm bảo chất lượng?">Mua nước
          khoáng ở đâu để đảm bảo chất lượng?</a>
        <div class="small text-center text-muted my-1">
          <i style="color: #9f9f9f;" class="bi bi-person-circle"></i>
          <span class="me-2">Mew Theme</span>
          <i style="color: #9f9f9f;" class="bi bi-clock"></i>
          02/03/2023
        </div>
        <div class="mb-3 line_2 h-auto text-center">
          Vì các loại nước khoáng có chứa nhiều khoáng chất tốt cho sức khỏe của người sử dụng nên rất được ưa chuộng.
          Do
          nhu cầu sử dụng ngày càng cao nên thị trường xuất hiện rất nhiều cơ sở cung cấp nước khoáng kém chất lượng,
          không vệ sinh, không đạt tiêu chuẩn, điều đó khiến một số khách...
        </div>

        <a class="view_mores center-bottom-btn bg-main rounded-main overflow-hidden d-inline-block py-2 px-4 text-center position-absolute"
          href="index.php?p=chitiettintuc" title="Đọc thêm">
          <span class="position-relative fw-bold title">Đọc thêm</span>
          <span></span><span></span><span></span><span></span>
        </a>
      </div>
    </div>
    <div class="bg-white h-100 p-2 position-relative rounded">
      <a href="index.php?p=chitiettintuc" title="Mua nước khoáng ở đâu để đảm bảo chất lượng?"
        class="position-relative effect-ming overflow-hidden d-inline-block">
        <img src="public/demo/news.jpg" class="img-fluid" alt="Mua nước khoáng ở đâu để đảm bảo chất lượng?">
        <div class="position-absolute w-100 h-100 overlay"></div>
      </a>
      <div class="pt-3 text-center">
        <a class="fs-6 fw-bold" href="index.php?p=chitiettintuc"
          title="Mua nước khoáng ở đâu để đảm bảo chất lượng?">Mua nước
          khoáng ở đâu để đảm bảo chất lượng?</a>
        <div class="small text-center text-muted my-1">
          <i style="color: #9f9f9f;" class="bi bi-person-circle"></i>
          <span class="me-2">Mew Theme</span>
          <i style="color: #9f9f9f;" class="bi bi-clock"></i>
          02/03/2023
        </div>
        <div class="mb-3 line_2 h-auto text-center">
          Vì các loại nước khoáng có chứa nhiều khoáng chất tốt cho sức khỏe của người sử dụng nên rất được ưa chuộng.
          Do
          nhu cầu sử dụng ngày càng cao nên thị trường xuất hiện rất nhiều cơ sở cung cấp nước khoáng kém chất lượng,
          không vệ sinh, không đạt tiêu chuẩn, điều đó khiến một số khách...
        </div>

        <a class="view_mores center-bottom-btn bg-main rounded-main overflow-hidden d-inline-block py-2 px-4 text-center position-absolute"
          href="index.php?p=chitiettintuc" title="Đọc thêm">
          <span class="position-relative fw-bold title">Đọc thêm</span>
          <span></span><span></span><span></span><span></span>
        </a>
      </div>
    </div>
    <div class="bg-white h-100 p-2 position-relative rounded">
      <a href="index.php?p=chitiettintuc" title="Mua nước khoáng ở đâu để đảm bảo chất lượng?"
        class="position-relative effect-ming overflow-hidden d-inline-block">
        <img src="public/demo/news.jpg" class="img-fluid" alt="Mua nước khoáng ở đâu để đảm bảo chất lượng?">
        <div class="position-absolute w-100 h-100 overlay"></div>
      </a>
      <div class="pt-3 text-center">
        <a class="fs-6 fw-bold" href="index.php?p=chitiettintuc"
          title="Mua nước khoáng ở đâu để đảm bảo chất lượng?">Mua nước
          khoáng ở đâu để đảm bảo chất lượng?</a>
        <div class="small text-center text-muted my-1">
          <i style="color: #9f9f9f;" class="bi bi-person-circle"></i>
          <span class="me-2">Mew Theme</span>
          <i style="color: #9f9f9f;" class="bi bi-clock"></i>
          02/03/2023
        </div>
        <div class="mb-3 line_2 h-auto text-center">
          Vì các loại nước khoáng có chứa nhiều khoáng chất tốt cho sức khỏe của người sử dụng nên rất được ưa chuộng.
          Do
          nhu cầu sử dụng ngày càng cao nên thị trường xuất hiện rất nhiều cơ sở cung cấp nước khoáng kém chất lượng,
          không vệ sinh, không đạt tiêu chuẩn, điều đó khiến một số khách...
        </div>

        <a class="view_mores center-bottom-btn bg-main rounded-main overflow-hidden d-inline-block py-2 px-4 text-center position-absolute"
          href="index.php?p=chitiettintuc" title="Đọc thêm">
          <span class="position-relative fw-bold title">Đọc thêm</span>
          <span></span><span></span><span></span><span></span>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="row px-6 pt-5">
  <div class="logo-slider owl-carousel owl-theme px-4 py-5 bg-white rounded_module">
    <img class="img-fluid" decoding="async" src="public/demo/brand1.png" alt="MewAQUA">
    <img class="img-fluid" decoding="async" src="public/demo/brand2.png" alt="MewAQUA">
    <img class="img-fluid" decoding="async" src="public/demo/brand3.png" alt="MewAQUA">
    <img class="img-fluid" decoding="async" src="public/demo/brand4.png" alt="MewAQUA">
    <img class="img-fluid" decoding="async" src="public/demo/brand5.png" alt="MewAQUA">
    <img class="img-fluid" decoding="async" src="public/demo/brand6.png" alt="MewAQUA">
  </div>
</div>



<script src="owlcarousel/owl.carousel.min.js"></script>
<script>
  $(document).ready(function () {
    $('.banner-slider').owlCarousel({
      center: false,
      loop: false,
      dots: false,
      nav: true,
      autoplayTimeout: 5000,
      autoplay: true,
      responsive: {
        0: {
          items: 1,
          margin: 18,
        },
        768: {
          items: 1,
        },
        1400: {
          items: 1
        }
      }
    });

    $(".banner-slider .owl-next").html(`<i class="bi bi-chevron-right fs-3 ms-1"></i>`);
    $(".banner-slider .owl-prev").html(`<i class="bi bi-chevron-left fs-3 me-1"></i>`);

    $('.products-slider').owlCarousel({
      center: false,
      loop: false,
      dots: false,
      nav: false,
      margin: 18,
      autoplay: false,
      responsive: {
        0: {
          items: 2,
          margin: 12,
        },
        768: {
          items: 3,
          margin: 14,
        },
        1400: {
          items: 4
        }
      }
    });

    $('.reviews').owlCarousel({
      center: false,
      loop: false,
      dots: true,
      nav: false,
      margin: 40,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
          margin: 12,
        },
        768: {
          items: 2,
          margin: 20,
        },
        1400: {
          items: 2
        }
      }
    });

    $('.news-slider').owlCarousel({
      center: false,
      loop: false,
      dots: false,
      nav: false,
      margin: 18,
      autoplay: false,
      responsive: {
        0: {
          items: 1,
          margin: 12,
        },
        768: {
          items: 2.4,
          margin: 14,
        },
        1400: {
          items: 3
        }
      }
    });

    $('.logo-slider').owlCarousel({
      center: false,
      loop: false,
      dots: false,
      nav: false,
      margin: 18,
      autoplay: false,
      responsive: {
        0: {
          items: 2,
          margin: 12,
        },
        768: {
          items: 4,
          margin: 14,
        },
        1400: {
          items: 6
        }
      }
    });


  });
</script>