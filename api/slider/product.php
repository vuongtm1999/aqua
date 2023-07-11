<style>
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

    .line_2 {
        display: -webkit-box;
        overflow: hidden;
        word-break: break-all;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
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
</style>

<div class="row">
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