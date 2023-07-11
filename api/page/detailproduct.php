<style>
    .detail-product .owl-nav [class*=owl-]:hover {
        color: var(--mainColor);
        background-color: unset;
    }

    .owl-theme .owl-nav [class*=owl-] {
        margin: 0;
    }

    .owl-theme .owl-nav .owl-prev.disabled {
        opacity: 0 !important;
    }

    .owl-theme .owl-nav .owl-next.disabled {
        opacity: 0 !important;
    }

    .detail-product.owl-carousel .owl-stage-outer {
        border: 1px solid #dee2e6 !important;
    }

    .detail-product.owl-carousel>.owl-nav>.owl-next {
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

    .detail-product.owl-carousel>.owl-nav>.owl-prev {
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

    .img-detail-product {
        padding-top: 100%;
        background-position: top center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .special-price {
        font-size: 1.9rem;
        color: var(--accentColor2);
    }

    .prd_quantity {
        max-width: 60px;
    }

    .view_mores a:hover {
        box-shadow: 0 0px 2px 0 var(--mainColor), 0 0px 6px 0px var(--mainColor);
    }

    .bg_cl {
        height: 50%;
        bottom: 0;
        background: linear-gradient(#ffffff00, #fff);
    }

    .item-price .special-price {
        font-size: 1.2rem;
    }

    .item-price .old-price {
        font-size: 13px;
        color: var(--accentColor1);
        vertical-align: 2px;
    }

    .scroll_vertical {
        max-height: 300px;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .dance {
        animation: dance infinite 2s ease-in-out;
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

    .line_2 {
        display: -webkit-box;
        overflow: hidden;
        word-break: break-all;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 2;
    }

    .news-slider .owl-nav [class*=owl-]:hover {
        color: initial;
        background-color: unset;
    }

    .owl-theme .owl-nav [class*=owl-] {
        margin: 0;
    }

    .owl-theme .owl-nav .owl-prev.disabled {
        opacity: 0 !important;
    }

    .owl-theme .owl-nav .owl-next.disabled {
        opacity: 0 !important;
    }

    .news-slider.owl-carousel>.owl-nav>.owl-next {
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

    .news-slider.owl-carousel>.owl-nav>.owl-prev {
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


    /* product */
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

    /* end product */

    .my-width {
        width: 100%;
    }

    @media (min-width: 1400px) {
        .my-width {
            width: auto;
        }
    }
</style>

<div class="row px-6 bg-secondary py-1">
    <div>
        <a class="text-main2 small" href="index.php" title="Trang chủ">
            Trang chủ
        </a>
        <span class="slash-divider ms-2 me-2">/</span>
        <span class="text-main2 small">
            Sản phẩm bán chạy</span>
        <span class="slash-divider ms-2 me-2">/</span>
        <span class="small">Nước khoáng lọc OASIS chai 2 lít</span>
    </div>
</div>

<div class="row bg-white px-6 pb-3">
    <div class="col-md-6">
        <div class="detail-product owl-carousel owl-theme px-0 mt-2">
            <div style="background-image: url(public/demo/detail-product-1.jpg);" class="img-detail-product"></div>
            <div style="background-image: url(public/demo/detail-product-2.jpg);" class="img-detail-product"></div>
        </div>
    </div>
    <div class="col-md-6">
        <h3 class="text-main fw-bold">Nước khoáng lọc OASIS chai 2 lít</h3>
        <div class="mb-3">
            Nước khoáng thiên nhiên La Vie 500ml phù hợp để mang theo khi bạn đang ở bên ngoài, dù bạn đang chạy vội đến
            lớp hay đi công việc, La Vie giúp cơ thể bạn luôn trong tr...
        </div>
        <div class="d-flex flex-wrap">
            <div style="border-right: 1px solid #dee2e6;" class="px-3 px-xxl-5 text-center">
                <div class="dd-flex align-items-center mb-2 justify-content-center">
                    <img alt="Quy cách" src="public/demo/icon_detail.png">
                </div>
                <div class="small">
                    Quy cách
                </div>
                <div class="font-weight-bold">
                    12 chai/thùng
                </div>
            </div>
            <div class="px-3 px-xxl-5 text-center">
                <div class="dd-flex align-items-center mb-2 justify-content-center">
                    <img alt="Quy cách" src="public/demo/icon_detail.png">
                </div>
                <div class="small">
                    Dung tích
                </div>
                <div class="font-weight-bold">
                    2 lít
                </div>
            </div>
        </div>

        <div class="product-price p-3 mt-3 mb-2 bg-light rounded mb-3 mb-md-4">
            <span class="fw-bold special-price m-0">220.000₫</span>
            <del style="vertical-align: 3px;" class="me-2">280.000₫</del>
        </div>

        <div class="product-quantity mb-3 d-flex align-items-center clearfix">
            <header class="fw-bold me-2">Số lượng </header>
            <div class="fw-bold d-flex rounded border">
                <button style="background: initial;" class="border-0 justify-content-center align-items-center d-flex">
                    <i class="bi bi-dash-lg"></i>
                </button>
                <input type="text" name="quantity" min="1" value="1"
                    class="fw-bold border-0 text-center form-control prd_quantity" id="qtym">
                <button style="background: initial;" class="border-0 justify-content-center align-items-center d-flex">
                    <i class="bi bi-plus-lg"></i>
                </button>
            </div>
        </div>

        <div class="d-flex flex-wrap">
            <div class="my-width me-xxl-3">
                <a class="view_mores bg-main2 d-md-block d-xxl-inline-block rounded-main overflow-hidden fw-bold py-2 px-4 text-center position-relative"
                    href="index.php?p=aboutus" title="Đọc thêm">
                    <span class="position-relative title fw-bold">Đặt hàng ngay</span>
                    <span></span><span></span><span></span><span></span>
                </a>
            </div>

            <div class="my-width mt-2 mt-xxl-0">
                <a class="view_mores bg-main d-md-block d-xxl-inline-block rounded-main overflow-hidden fw-bold py-2 px-4 text-center position-relative"
                    href="index.php?p=aboutus" title="Đọc thêm">
                    <span class="position-relative title fw-bold">Hotline: 1900 6750</span>
                    <span></span><span></span><span></span><span></span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row bg-white px-6">
    <div class="col-xxl-8 col-12">
        <h3 class="special-content_title fw-bold pb-2 mb-3 border-bottom mt-3">
            <span class="position-relative d-inline-block">Thông tin chi tiết</span>
        </h3>
        <div class="content_coll position-relative rte">
            <p>Nước khoáng thiên nhiên La Vie 500ml phù hợp để mang theo khi bạn đang ở bên ngoài, dù bạn đang chạy vội
                đến
                lớp hay đi công việc, La Vie giúp cơ thể bạn luôn trong trạng thái đủ nước đủ khoáng suốt ngày dài năng
                động.</p>
            <p><br>
                Không đường &amp; không calo, nước khoáng thiên nhiên La Vie với 6 khoáng chất thiết yếu là sự lựa chọn
                tuyệt vời để thay thế các loại nước giải khát chứa nhiều đường, giúp bạn và gia đình duy trì cuộc sống
                khỏe
                mạnh.<br>
                Mỗi chai nước khoáng thiên nhiên La Vie đều được đóng chai tại nguồn &amp; phải trải qua quá trình quản
                lý
                chất lượng bao gồm 12 bước nghiêm ngặt theo tiêu chuẩn của tập đoàn Nestle, chúng tôi đảm bảo các quy
                định
                vệ sinh và giữ được chất lượng &amp; thành phần khoáng cơ bản của nước. Đó lý do La Vie trở thành thương
                hiệu nước khoáng số 1 tại Việt Nam*</p>
            <p>Nước khoáng thiên nhiên La Vie 500ml phù hợp để mang theo khi bạn đang ở bên ngoài, dù bạn đang chạy vội
                đến
                lớp hay đi công việc, La Vie giúp cơ thể bạn luôn trong trạng thái đủ nước đủ khoáng suốt ngày dài năng
                động.<br>
                Không đường &amp; không calo, nước khoáng thiên nhiên La Vie với 6 khoáng chất thiết yếu là sự lựa chọn
                tuyệt vời để thay thế các loại nước giải khát chứa nhiều đường, giúp bạn và gia đình duy trì cuộc sống
                khỏe
                mạnh.<br>
                Mỗi chai nước khoáng thiên nhiên La Vie đều được đóng chai tại nguồn &amp; phải trải qua quá trình quản
                lý
                chất lượng bao gồm 12 bước nghiêm ngặt theo tiêu chuẩn của tập đoàn Nestle, chúng tôi đảm bảo các quy
                định
                vệ sinh và giữ được chất lượng &amp; thành phần khoáng cơ bản của nước. Đó lý do La Vie trở thành thương
                hiệu nước khoáng số 1 tại Việt Nam*</p>
            <div class="bg_cl position-absolute w-100"></div>

            <div class="view_mores text-center mb-2">
                <a href="javascript:;"
                    class="one pt-2 pb-2 pl-4 pr-4 modal-open position-relative btn rounded shadow fw-bold"
                    title="Đọc thêm">Đọc thêm</a>
                <!-- <a href="javascript:;"
                    class="two pt-2 pb-2 pl-4 pr-4 modal-open position-relative btn rounded-10 box_shadow fw-bold d-none"
                    title="Thu gọn">Thu gọn</a> -->
            </div>
        </div>
    </div>

    <div class="col-xxl-4 col-12">
        <h3 class="special-content_title fw-bold pb-2 mb-3 border-bottom mt-3">
            <span class="position-relative d-inline-block">Sản phẩm liên quan</span>
        </h3>

        <div class="position-relative scroll_vertical pr-2">
            <div class="product-item position-relative rounded bg-white mb-3 p-2 border">
                <div class="row align-items-center">
                    <div class="col-3 pe-0">
                        <a href="index.php?p=detailproduct" class="d-block" title="Nước lọc AQUFINA chai 2 lít">
                            <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect">
                                <img src="public/demo/related-products.jpg" class="img-fluid"
                                    alt="Nước lọc AQUFINA chai 2 lít">
                            </div>
                        </a>
                    </div>
                    <div class="col-9">
                        <h6 class="fw-bold">
                            <a class="d-block" href="index.php?p=detailproduct" title="Nước lọc AQUFINA chai 2 lít">
                                Nước lọc AQUFINA chai 2 lít
                            </a>
                        </h6>
                        <div class="item-price mb-1">
                            <span class="special-price fw-bold">17.000₫</span>
                            <del class="old-price"> 135.000₫</del>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-item position-relative rounded bg-white mb-3 p-2 border">
                <div class="row align-items-center">
                    <div class="col-3 pe-0">
                        <a href="index.php?p=detailproduct" class="d-block" title="Nước lọc AQUFINA chai 2 lít">
                            <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect">
                                <img src="public/demo/related-products.jpg" class="img-fluid"
                                    alt="Nước lọc AQUFINA chai 2 lít">
                            </div>
                        </a>
                    </div>
                    <div class="col-9">
                        <h6 class="fw-bold">
                            <a class="d-block" href="index.php?p=detailproduct" title="Nước lọc AQUFINA chai 2 lít">
                                Nước lọc AQUFINA chai 2 lít
                            </a>
                        </h6>
                        <div class="item-price mb-1">
                            <span class="special-price fw-bold">17.000₫</span>
                            <del class="old-price"> 135.000₫</del>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-item position-relative rounded bg-white mb-3 p-2 border">
                <div class="row align-items-center">
                    <div class="col-3 pe-0">
                        <a href="index.php?p=detailproduct" class="d-block" title="Nước lọc AQUFINA chai 2 lít">
                            <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect">
                                <img src="public/demo/related-products.jpg" class="img-fluid"
                                    alt="Nước lọc AQUFINA chai 2 lít">
                            </div>
                        </a>
                    </div>
                    <div class="col-9">
                        <h6 class="fw-bold">
                            <a class="d-block" href="index.php?p=detailproduct" title="Nước lọc AQUFINA chai 2 lít">
                                Nước lọc AQUFINA chai 2 lít
                            </a>
                        </h6>
                        <div class="item-price mb-1">
                            <span class="special-price fw-bold">17.000₫</span>
                            <del class="old-price"> 135.000₫</del>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-item position-relative rounded bg-white mb-3 p-2 border">
                <div class="row align-items-center">
                    <div class="col-3 pe-0">
                        <a href="index.php?p=detailproduct" class="d-block" title="Nước lọc AQUFINA chai 2 lít">
                            <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect">
                                <img src="public/demo/related-products.jpg" class="img-fluid"
                                    alt="Nước lọc AQUFINA chai 2 lít">
                            </div>
                        </a>
                    </div>
                    <div class="col-9">
                        <h6 class="fw-bold">
                            <a class="d-block" href="index.php?p=detailproduct" title="Nước lọc AQUFINA chai 2 lít">
                                Nước lọc AQUFINA chai 2 lít
                            </a>
                        </h6>
                        <div class="item-price mb-1">
                            <span class="special-price fw-bold">17.000₫</span>
                            <del class="old-price"> 135.000₫</del>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row bg-white px-6">
    <div class="col-xxl-8 col-12">
        <h3 class="special-content_title fw-bold pb-2 mb-3 border-bottom mt-3">
            <span class="position-relative d-inline-block">Dịch vụ của chúng tôi</span>
        </h3>
        <p>
            Là đại lý chính thức của Tổng công ty Cổ phần Nước tinh khoáng tinh khiết thiên nhên MewAQUA (AQUA Trading),
            Đại lý nước tinh khiết tại 266 Đội Cấn, Ba Đình, Hà Nội cam kết cung cấp nước lọc, nước khoáng, nước tinh
            khiết với các tiêu chuẩn và dịch vụ sau:
        </p>
        <div class="d-flex flex-wrap">
            <div class="col-6 col-xxl-4 mb-3 pe-1">
                <div class="item d-flex align-items-center">
                    <div class="me-2">
                        <img width="65" height="65" class="" src="public/demo/service_1.png" alt="">
                    </div>
                    <div class="fw-bold">
                        Sản phẩm chính hãng
                    </div>
                </div>
            </div>
            <div class="col-6 col-xxl-4 mb-3">
                <div class="item d-flex align-items-center">
                    <div class="me-2">
                        <img width="65" height="65" class="" src="public/demo/service_2.png" alt="">
                    </div>
                    <div class="fw-bold">
                        6 Giai đoạn lọc
                    </div>
                </div>
            </div>
            <div class="col-6 col-xxl-4 mb-3">
                <div class="item d-flex align-items-center">
                    <div class="me-2">
                        <img width="65" height="65" class="" src="public/demo/service_3.png" alt="">
                    </div>
                    <div class="fw-bold">
                        Thành phần lành mạnh
                    </div>
                </div>
            </div>
            <div class="col-6 col-xxl-4 mb-3">
                <div class="item d-flex align-items-center">
                    <div class="me-2">
                        <img width="65" height="65" class="" src="public/demo/service_4.png" alt="">
                    </div>
                    <div class="fw-bold">
                        Kiểm soát hoàn toàn
                    </div>
                </div>
            </div>
            <div class="col-6 col-xxl-4 mb-3">
                <div class="item d-flex align-items-center">
                    <div class="me-2">
                        <img width="65" height="65" class="" src="public/demo/service_5.png" alt="">
                    </div>
                    <div class="fw-bold">
                        Vận chuyển khép kín
                    </div>
                </div>
            </div>
            <div class="col-6 col-xxl-4 mb-3">
                <div class="item d-flex align-items-center">
                    <div class="me-2">
                        <img width="65" height="65" class="" src="public/demo/service_6.png" alt="">
                    </div>
                    <div class="fw-bold">
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

    <div class="col-xxl-4 col-12">
        <div class="dance">
            <img class="img-fluid" src="public/demo/bn_about.png" alt="">
        </div>
    </div>
</div>

<div class="row bg-white px-6">
    <div class="col-xxl-8 col-12">
        <h3 class="special-content_title fw-bold pb-2 mb-3 border-bottom mt-3">
            <span class="position-relative d-inline-block">Tin tức</span>
        </h3>
    </div>

    <div class="news-slider owl-carousel owl-theme px-0 mb-5">
        <div class="bg-white h-100 p-2 position-relative rounded border">
            <a href="index.php?p=chitiettintuc" title="Mua nước khoáng ở đâu để đảm bảo chất lượng?"
                class="position-relative effect-ming overflow-hidden d-inline-block">
                <img src="public/demo/news.jpg" class="img-fluid" alt="Mua nước khoáng ở đâu để đảm bảo chất lượng?">
                <div class="position-absolute w-100 h-100 overlay"></div>
            </a>
            <div class="pt-3 text-center">
                <a class="fs-6 fw-bold lh-sm" href="index.php?p=chitiettintuc"
                    title="Mua nước khoáng ở đâu để đảm bảo chất lượng?">Mua nước
                    khoáng ở đâu để đảm bảo chất lượng?</a>
                <div class="small text-center text-muted my-1">
                    <i style="color: #9f9f9f;" class="bi bi-person-circle"></i>
                    <span class="me-2">Mew Theme</span>
                    <i style="color: #9f9f9f;" class="bi bi-clock"></i>
                    02/03/2023
                </div>
                <div class="mb-3 line_2 h-auto text-center">
                    Vì các loại nước khoáng có chứa nhiều khoáng chất tốt cho sức khỏe của người sử dụng nên rất được ưa
                    chuộng.
                    Do
                    nhu cầu sử dụng ngày càng cao nên thị trường xuất hiện rất nhiều cơ sở cung cấp nước khoáng kém chất
                    lượng,
                    không vệ sinh, không đạt tiêu chuẩn, điều đó khiến một số khách...
                </div>

                <a class="view_mores center-bottom-btn bg-main rounded-main overflow-hidden d-inline-block py-2 px-4 text-center position-absolute"
                    href="index.php?p=chitiettintuc" title="Đọc thêm">
                    <span class="position-relative fw-bold title">Đọc thêm</span>
                    <span></span><span></span><span></span><span></span>
                </a>
            </div>
        </div>
        <div class="bg-white h-100 p-2 position-relative rounded border">
            <a href="index.php?p=chitiettintuc" title="Mua nước khoáng ở đâu để đảm bảo chất lượng?"
                class="position-relative effect-ming overflow-hidden d-inline-block">
                <img src="public/demo/news.jpg" class="img-fluid" alt="Mua nước khoáng ở đâu để đảm bảo chất lượng?">
                <div class="position-absolute w-100 h-100 overlay"></div>
            </a>
            <div class="pt-3 text-center">
                <a class="fs-6 fw-bold lh-sm" href="index.php?p=chitiettintuc"
                    title="Mua nước khoáng ở đâu để đảm bảo chất lượng?">Mua nước
                    khoáng ở đâu để đảm bảo chất lượng?</a>
                <div class="small text-center text-muted my-1">
                    <i style="color: #9f9f9f;" class="bi bi-person-circle"></i>
                    <span class="me-2">Mew Theme</span>
                    <i style="color: #9f9f9f;" class="bi bi-clock"></i>
                    02/03/2023
                </div>
                <div class="mb-3 line_2 h-auto text-center">
                    Vì các loại nước khoáng có chứa nhiều khoáng chất tốt cho sức khỏe của người sử dụng nên rất được ưa
                    chuộng.
                    Do
                    nhu cầu sử dụng ngày càng cao nên thị trường xuất hiện rất nhiều cơ sở cung cấp nước khoáng kém chất
                    lượng,
                    không vệ sinh, không đạt tiêu chuẩn, điều đó khiến một số khách...
                </div>

                <a class="view_mores center-bottom-btn bg-main rounded-main overflow-hidden d-inline-block py-2 px-4 text-center position-absolute"
                    href="index.php?p=chitiettintuc" title="Đọc thêm">
                    <span class="position-relative fw-bold title">Đọc thêm</span>
                    <span></span><span></span><span></span><span></span>
                </a>
            </div>
        </div>
        <div class="bg-white h-100 p-2 position-relative rounded border">
            <a href="index.php?p=chitiettintuc" title="Mua nước khoáng ở đâu để đảm bảo chất lượng?"
                class="position-relative effect-ming overflow-hidden d-inline-block">
                <img src="public/demo/news.jpg" class="img-fluid" alt="Mua nước khoáng ở đâu để đảm bảo chất lượng?">
                <div class="position-absolute w-100 h-100 overlay"></div>
            </a>
            <div class="pt-3 text-center">
                <a class="fs-6 fw-bold lh-sm" href="index.php?p=chitiettintuc"
                    title="Mua nước khoáng ở đâu để đảm bảo chất lượng?">Mua nước
                    khoáng ở đâu để đảm bảo chất lượng?</a>
                <div class="small text-center text-muted my-1">
                    <i style="color: #9f9f9f;" class="bi bi-person-circle"></i>
                    <span class="me-2">Mew Theme</span>
                    <i style="color: #9f9f9f;" class="bi bi-clock"></i>
                    02/03/2023
                </div>
                <div class="mb-3 line_2 h-auto text-center">
                    Vì các loại nước khoáng có chứa nhiều khoáng chất tốt cho sức khỏe của người sử dụng nên rất được ưa
                    chuộng.
                    Do
                    nhu cầu sử dụng ngày càng cao nên thị trường xuất hiện rất nhiều cơ sở cung cấp nước khoáng kém chất
                    lượng,
                    không vệ sinh, không đạt tiêu chuẩn, điều đó khiến một số khách...
                </div>

                <a class="view_mores center-bottom-btn bg-main rounded-main overflow-hidden d-inline-block py-2 px-4 text-center position-absolute"
                    href="index.php?p=chitiettintuc" title="Đọc thêm">
                    <span class="position-relative fw-bold title">Đọc thêm</span>
                    <span></span><span></span><span></span><span></span>
                </a>
            </div>
        </div>
        <div class="bg-white h-100 p-2 position-relative rounded border">
            <a href="index.php?p=chitiettintuc" title="Mua nước khoáng ở đâu để đảm bảo chất lượng?"
                class="position-relative effect-ming overflow-hidden d-inline-block">
                <img src="public/demo/news.jpg" class="img-fluid" alt="Mua nước khoáng ở đâu để đảm bảo chất lượng?">
                <div class="position-absolute w-100 h-100 overlay"></div>
            </a>
            <div class="pt-3 text-center">
                <a class="fs-6 fw-bold lh-sm" href="index.php?p=chitiettintuc"
                    title="Mua nước khoáng ở đâu để đảm bảo chất lượng?">Mua nước
                    khoáng ở đâu để đảm bảo chất lượng?</a>
                <div class="small text-center text-muted my-1">
                    <i style="color: #9f9f9f;" class="bi bi-person-circle"></i>
                    <span class="me-2">Mew Theme</span>
                    <i style="color: #9f9f9f;" class="bi bi-clock"></i>
                    02/03/2023
                </div>
                <div class="mb-3 line_2 h-auto text-center">
                    Vì các loại nước khoáng có chứa nhiều khoáng chất tốt cho sức khỏe của người sử dụng nên rất được ưa
                    chuộng.
                    Do
                    nhu cầu sử dụng ngày càng cao nên thị trường xuất hiện rất nhiều cơ sở cung cấp nước khoáng kém chất
                    lượng,
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

<div class="row px-6 bg-white pt-2">
    <h3 class="special-content_title pb-2 pt-2 mb-3 fw-bold position-relative border-bottom">
        <span class="position-relative d-inline-block">
            Sản phẩm đã xem
        </span>
    </h3>

    <div class="viewed-product owl-carousel owl-theme mt-2 mb-5">
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
        $('.detail-product').owlCarousel({
            center: false,
            loop: false,
            dots: false,
            nav: true,
            margin: 20,
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

        $('.news-slider').owlCarousel({
            center: false,
            loop: false,
            dots: false,
            nav: true,
            margin: 18,
            autoplay: false,
            responsive: {
                0: {
                    items: 1.3,
                },
                768: {
                    items: 2.3,
                },
                1400: {
                    items: 3
                }
            }
        });

        $(".owl-next").html(`<i class="bi bi-chevron-right fs-3 ms-1"></i>`);
        $(".owl-prev").html(`<i class="bi bi-chevron-left fs-3 me-1"></i>`);


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
                    margin: 12,
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