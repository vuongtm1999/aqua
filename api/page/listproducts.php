<style>
    .banner-list-product .owl-nav [class*=owl-]:hover {
        color: initial;
        background-color: unset;
    }

    .owl-theme .owl-nav [class*=owl-] {
        margin: 0;
    }

    .banner-list-product.owl-carousel .owl-nav.disabled {
        display: block;
    }

    .banner-list-product.owl-carousel .owl-nav.disabled {
        display: block;
    }

    .banner-list-product.owl-carousel>.owl-nav>.owl-next {
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
        top: 50%;
        transform: translateY(-50%);
        position: absolute;
        right: 0;
        cursor: pointer;
    }

    .banner-list-product.owl-carousel>.owl-nav>.owl-prev {
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
        top: 50%;
        transform: translateY(-50%);
        position: absolute;
        left: 0;
        cursor: pointer;
    }

    .nav {
        background: rgba(255, 255, 255, 0.6);
        gap: 5px;
    }

    .nav-item.active>a,
    .nav-item:hover>a {
        background: var(--mainColor);
        border-radius: 20px;
        filter: hue-rotate(17deg) contrast(1.2);
    }

    .nav a,
    .nav a:hover {
        transition: 0.3s all ease;
    }

    .branch-select {
        transition: all 0.3s ease;
        width: 100%;
        display: inline-block;
    }

    .branch-select:hover {
        border-color: var(--mainColor) !important;
        color: var(--mainColor);
    }

    .branch-select.active {
        border-color: var(--mainColor) !important;
        color: var(--mainColor);
    }

    /* product */
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

    .product-item:hover {
        box-shadow: 0 0 20px 0 rgb(0 0 0 / 15%);
        transition: all 0.35s linear;
    }

    /* end product */

    .filter-item span {
        transition: all 0.3s ease;
    }

    .filter-item .active {
        border-color: var(--mainColor) !important;
        color: var(--mainColor);
    }

    .filter-item span:hover {
        border-color: var(--mainColor) !important;
        color: var(--mainColor);
    }

    /* start */
    .special-content_title {
        color: var(--mainColor2);
        font-size: 20px;
    }

    .special-content_title span:after,
    .special-content_title a:after {
        content: '';
        display: block;
        width: 100%;
        height: 3px;
        background: var(--mainColor2);
        position: absolute;
        bottom: -10px;
        left: 0;
    }

    /* end */

    .sortPagiBar {
        overflow: auto;
        white-space: nowrap;
    }
</style>

<div class="row px-6 bg-secondary py-1">
    <div>
        <a class="text-main2 small" href="index.php" title="Trang chủ">
            Trang chủ
        </a>
        <span class="slash-divider ms-2 me-2">/</span>
        <span class="small">
            Sản phẩm bán chạy</span>
    </div>
</div>

<div class="row px-6 bg-white">
    <div class="banner-list-product owl-carousel owl-theme px-0 mt-2">
        <img class="rounded overlay-banner pointer position-relative" src="public/demo/banner-list-product-1.jpg"
            alt="">
    </div>
</div>

<div class="row px-6 bg-white">
    <div class="col-xxl-3 col-12 d-none d-xxl-block px-0 mb-5">
        <div style="filter: contrast(1.2);" class="bg-primary">
            <ul class="nav navbar-pills p-2 flex-column ">
                <li class="nav-item active">
                    <a title="Sản phẩm bán chạy" class="nav-link fw-bold text-white" href="#">Sản
                        phẩm bán chạy</a>
                </li>
                <li class="nav-item ">
                    <a title="Sản phẩm nổi bật" class="nav-link fw-bold text-white" href="#">Sản
                        phẩm nổi bật</a>
                </li>
                <li class="nav-item ">
                    <a title="Sản phẩm mới" class="nav-link fw-bold text-white" href="#">Sản phẩm
                        mới</a>
                </li>
            </ul>
        </div>

        <p class="text-main fw-bold mt-3 mb-1">Lọc giá</p>
        <div class="row gx-3">
            <div class="col-6 col-md-12 col-xxl-6">
                <label class="d-flex align-items-baseline pt-1 pb-1 m-0" for="filter-khoanggia-tu">
                    <input type="text" id="filter-khoanggia-tu" class="form-control rounded pr-0" value=""
                        placeholder="Giá tối thiểu ">
                </label>
            </div>
            <div class="col-6 col-md-12 col-xxl-6">
                <label class="d-flex align-items-baseline pt-1 pb-1 m-0" for="filter-khoanggia-den">
                    <input type="text" id="filter-khoanggia-den" class="form-control rounded pr-0" value=""
                        placeholder=" Giá tối đa ">
                </label>
            </div>
        </div>
        <a class="btn btn-primary mt-2 fw-bold rounded" href="javascript:;">Áp dụng</a>


        <p class="text-main fw-bold mt-3 mb-1">Thương hiệu</p>
        <div class="row gx-3 gy-2">
            <div class="col-6 col-md-12 col-xxl-6">
                <span class="fa2 px-2 py-1 rounded border branch-select active">AQUAFINA</span>
            </div>
            <div class="col-6 col-md-12 col-xxl-6">
                <span class="fa2 px-2 py-1 rounded border branch-select">Lavie</span>
            </div>
            <div class="col-6 col-md-12 col-xxl-6">
                <span class="fa2 px-2 py-1 rounded border branch-select">MewAQUA</span>
            </div>
            <div class="col-6 col-md-12 col-xxl-6">
                <span class="fa2 px-2 py-1 rounded border branch-select">AQUAFINA</span>
            </div>
        </div>

        <p class="text-main fw-bold mt-3 mb-1">Loại</p>
        <div class="row gx-3 gy-2">
            <div class="col-6 col-md-12 col-xxl-6">
                <span class="fa2 px-2 py-1 rounded border branch-select active">2 lít</span>
            </div>
            <div class="col-6 col-md-12 col-xxl-6">
                <span class="fa2 px-2 py-1 rounded border branch-select">330ml</span>
            </div>
            <div class="col-6 col-md-12 col-xxl-6">
                <span class="fa2 px-2 py-1 rounded border branch-select">6 lít</span>
            </div>
        </div>

    </div>

    <div class="col-xxl-9 col-12">
        <div class="sortPagiBar py-3 border-bottom">
            <ul class="filter-vendor list-unstyled mb-0 d-flex align-items-baseline">
                <li class="me-2">
                    <span class="h6 title-head m-0 pt-2 pb-2 font-weight-bold">Sắp xếp: </span>
                </li>
                <li class="filter-item me-2">
                    <span class="px-2 py-2 rounded border active">Mặc định</span>
                </li>
                <li class="filter-item me-2">
                    <span class="px-2 py-2 rounded border">A → Z</span>
                </li>
                <li class="filter-item me-2">
                    <span class="px-2 py-2 rounded border">Z → A</span>
                </li>
                <li class="filter-item me-2">
                    <span class="px-2 py-2 rounded border">Giá tăng dần</span>
                </li>
                <li class="filter-item me-2">
                    <span class="px-2 py-2 rounded border">Giá giảm dần</span>
                </li>
                <li class="filter-item me-2">
                    <span class="px-2 py-2 rounded border">Mới nhất </span>
                </li>
                <li class="filter-item me-2">
                    <span class="px-2 py-2 rounded border">Cũ nhất</span>
                </li>
            </ul>
        </div>

        <div class="row gx-3 gy-3 mt-2">
            <div class="col-xxl-4 col-md-4 col-6">
                <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative product-item border">
                    <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
                        21%
                    </div>
                    <a href="index.php?p=detailproduct">
                        <div class="position-relative card-product-img">
                            <div class="img-product-main my-bg-img"
                                style="background-image: url(public/demo/img-product-1.jpg);">
                            </div>
                            <div class="img-product-second my-bg-img"
                                style="background-image: url(public/demo/img-product-2.jpg);">
                            </div>
                        </div>
                    </a>
                    <a class="line_2 text-center" href="index.php?p=detailproduct"
                        title="Nước khoáng lọc OASIS chai 2 lít">
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
            <div class="col-xxl-4 col-md-4 col-6">
                <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative product-item border">
                    <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
                        21%
                    </div>
                    <a href="index.php?p=detailproduct">
                        <div class="position-relative card-product-img">
                            <div class="img-product-main my-bg-img"
                                style="background-image: url(public/demo/img-product-1.jpg);">
                            </div>
                            <div class="img-product-second my-bg-img"
                                style="background-image: url(public/demo/img-product-2.jpg);">
                            </div>
                        </div>
                    </a>
                    <a class="line_2 text-center" href="index.php?p=detailproduct"
                        title="Nước khoáng lọc OASIS chai 2 lít">
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
            <div class="col-xxl-4 col-md-4 col-6">
                <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative product-item border">
                    <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
                        21%
                    </div>
                    <a href="index.php?p=detailproduct">
                        <div class="position-relative card-product-img">
                            <div class="img-product-main my-bg-img"
                                style="background-image: url(public/demo/img-product-1.jpg);">
                            </div>
                            <div class="img-product-second my-bg-img"
                                style="background-image: url(public/demo/img-product-2.jpg);">
                            </div>
                        </div>
                    </a>
                    <a class="line_2 text-center" href="index.php?p=detailproduct"
                        title="Nước khoáng lọc OASIS chai 2 lít">
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
            <div class="col-xxl-4 col-md-4 col-6">
                <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative product-item border">
                    <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
                        21%
                    </div>
                    <a href="index.php?p=detailproduct">
                        <div class="position-relative card-product-img">
                            <div class="img-product-main my-bg-img"
                                style="background-image: url(public/demo/img-product-1.jpg);">
                            </div>
                            <div class="img-product-second my-bg-img"
                                style="background-image: url(public/demo/img-product-2.jpg);">
                            </div>
                        </div>
                    </a>
                    <a class="line_2 text-center" href="index.php?p=detailproduct"
                        title="Nước khoáng lọc OASIS chai 2 lít">
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
            <div class="col-xxl-4 col-md-4 col-6">
                <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative product-item border">
                    <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
                        21%
                    </div>
                    <a href="index.php?p=detailproduct">
                        <div class="position-relative card-product-img">
                            <div class="img-product-main my-bg-img"
                                style="background-image: url(public/demo/img-product-1.jpg);">
                            </div>
                            <div class="img-product-second my-bg-img"
                                style="background-image: url(public/demo/img-product-2.jpg);">
                            </div>
                        </div>
                    </a>
                    <a class="line_2 text-center" href="index.php?p=detailproduct"
                        title="Nước khoáng lọc OASIS chai 2 lít">
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
            <div class="col-xxl-4 col-md-4 col-6">
                <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative product-item border">
                    <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
                        21%
                    </div>
                    <a href="index.php?p=detailproduct">
                        <div class="position-relative card-product-img">
                            <div class="img-product-main my-bg-img"
                                style="background-image: url(public/demo/img-product-1.jpg);">
                            </div>
                            <div class="img-product-second my-bg-img"
                                style="background-image: url(public/demo/img-product-2.jpg);">
                            </div>
                        </div>
                    </a>
                    <a class="line_2 text-center" href="index.php?p=detailproduct"
                        title="Nước khoáng lọc OASIS chai 2 lít">
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
            <div class="col-xxl-4 col-md-4 col-6">
                <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative product-item border">
                    <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
                        21%
                    </div>
                    <a href="index.php?p=detailproduct">
                        <div class="position-relative card-product-img">
                            <div class="img-product-main my-bg-img"
                                style="background-image: url(public/demo/img-product-1.jpg);">
                            </div>
                            <div class="img-product-second my-bg-img"
                                style="background-image: url(public/demo/img-product-2.jpg);">
                            </div>
                        </div>
                    </a>
                    <a class="line_2 text-center" href="index.php?p=detailproduct"
                        title="Nước khoáng lọc OASIS chai 2 lít">
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
            <div class="col-xxl-4 col-md-4 col-6">
                <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative product-item border">
                    <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
                        21%
                    </div>
                    <a href="index.php?p=detailproduct">
                        <div class="position-relative card-product-img">
                            <div class="img-product-main my-bg-img"
                                style="background-image: url(public/demo/img-product-1.jpg);">
                            </div>
                            <div class="img-product-second my-bg-img"
                                style="background-image: url(public/demo/img-product-2.jpg);">
                            </div>
                        </div>
                    </a>
                    <a class="line_2 text-center" href="index.php?p=detailproduct"
                        title="Nước khoáng lọc OASIS chai 2 lít">
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
            <div class="col-xxl-4 col-md-4 col-6">
                <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative product-item border">
                    <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
                        21%
                    </div>
                    <a href="index.php?p=detailproduct">
                        <div class="position-relative card-product-img">
                            <div class="img-product-main my-bg-img"
                                style="background-image: url(public/demo/img-product-1.jpg);">
                            </div>
                            <div class="img-product-second my-bg-img"
                                style="background-image: url(public/demo/img-product-2.jpg);">
                            </div>
                        </div>
                    </a>
                    <a class="line_2 text-center" href="index.php?p=detailproduct"
                        title="Nước khoáng lọc OASIS chai 2 lít">
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
</div>

<div class="row px-6 bg-white pt-5">
    <h3 class="special-content_title pb-2 pt-2 mb-3 fw-bold position-relative border-bottom">
        <span class="position-relative d-inline-block">
            Sản phẩm đã xem
        </span>
    </h3>

    <div class="viewed-product owl-carousel owl-theme px-0 mt-2 mb-5">
        <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative border">
            <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
                21%
            </div>
            <a href="index.php?p=detailproduct">
                <div class="position-relative card-product-img">
                    <div class="img-product-main my-bg-img"
                        style="background-image: url(public/demo/img-product-1.jpg);">
                    </div>
                    <div class="img-product-second my-bg-img"
                        style="background-image: url(public/demo/img-product-2.jpg);">
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
        <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative border">
            <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
                21%
            </div>
            <a href="index.php?p=detailproduct">
                <div class="position-relative card-product-img">
                    <div class="img-product-main my-bg-img"
                        style="background-image: url(public/demo/img-product-1.jpg);">
                    </div>
                    <div class="img-product-second my-bg-img"
                        style="background-image: url(public/demo/img-product-2.jpg);">
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
        <div class="p-2 p-xxl-3 bg-white rounded-3 position-relative border">
            <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm
                21%
            </div>
            <a href="index.php?p=detailproduct">
                <div class="position-relative card-product-img">
                    <div class="img-product-main my-bg-img"
                        style="background-image: url(public/demo/img-product-1.jpg);">
                    </div>
                    <div class="img-product-second my-bg-img"
                        style="background-image: url(public/demo/img-product-2.jpg);">
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

<script>
    $(document).ready(function () {
        $('.banner-list-product').owlCarousel({
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


        $(".banner-list-product .owl-next").html(`<i class="bi bi-chevron-right fs-3 ms-1"></i>`);
        $(".banner-list-product .owl-prev").html(`<i class="bi bi-chevron-left fs-3 me-1"></i>`);

        $('.viewed-product').owlCarousel({
            center: false,
            loop: false,
            dots: false,
            nav: false,
            autoplayTimeout: 3000,
            margin: 18,
            autoplay: true,
            responsive: {
                0: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                1400: {
                    items: 4
                }
            }
        });


    });
</script>