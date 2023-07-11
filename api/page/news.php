<style>
    .center-bottom-btn {
        left: 50%;
        bottom: -25px;
        transform: translateX(-50%);
    }

    .news {
        border: 1px solid #dee2e6 !important;
        border-radius: 10px;
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


    @media (min-width: 768px) {}

    @media (min-width: 1400px) {}
</style>

<div class="row px-6 bg-secondary py-1">
    <div>
        <a class="text-main2 small" href="index.php" title="Trang chủ">
            Trang chủ
        </a>
        <span class="slash-divider ms-2 me-2">/</span>
        <span class="small">Tin tức</span>
    </div>
</div>

<div class="row bg-white px-6 pb-4">
    <h4 class="fw-bold pb-3 pt-2 pt-xxl-5">Tin tức</h4>
    <div class="col-xxl-4 col-md-6 col-12 mb-5">
        <div class="bg-white h-100 p-2 position-relative rounded news">
            <a href="index.php?p=chitiettintuc" title="Mua nước khoáng ở đâu để đảm bảo chất lượng?"
                class="position-relative effect-ming overflow-hidden d-inline-block">
                <img src="public/demo/news.jpg" class="img-fluid"
                    alt="Mua nước khoáng ở đâu để đảm bảo chất lượng?">
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
    <div class="col-xxl-4 col-md-6 col-12 mb-5">
        <div class="bg-white h-100 p-2 position-relative rounded news">
            <a href="index.php?p=chitiettintuc" title="Mua nước khoáng ở đâu để đảm bảo chất lượng?"
                class="position-relative effect-ming overflow-hidden d-inline-block">
                <img src="public/demo/news.jpg" class="img-fluid"
                    alt="Mua nước khoáng ở đâu để đảm bảo chất lượng?">
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
    <div class="col-xxl-4 col-md-6 col-12 mb-5">
        <div class="bg-white h-100 p-2 position-relative rounded news">
            <a href="index.php?p=chitiettintuc" title="Mua nước khoáng ở đâu để đảm bảo chất lượng?"
                class="position-relative effect-ming overflow-hidden d-inline-block">
                <img src="public/demo/news.jpg" class="img-fluid"
                    alt="Mua nước khoáng ở đâu để đảm bảo chất lượng?">
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
    <div class="col-xxl-4 col-md-6 col-12 mb-5">
        <div class="bg-white h-100 p-2 position-relative rounded news">
            <a href="index.php?p=chitiettintuc" title="Mua nước khoáng ở đâu để đảm bảo chất lượng?"
                class="position-relative effect-ming overflow-hidden d-inline-block">
                <img src="public/demo/news.jpg" class="img-fluid"
                    alt="Mua nước khoáng ở đâu để đảm bảo chất lượng?">
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
    <div class="col-xxl-4 col-md-6 col-12 mb-5">
        <div class="bg-white h-100 p-2 position-relative rounded news">
            <a href="index.php?p=chitiettintuc" title="Mua nước khoáng ở đâu để đảm bảo chất lượng?"
                class="position-relative effect-ming overflow-hidden d-inline-block">
                <img src="public/demo/news.jpg" class="img-fluid"
                    alt="Mua nước khoáng ở đâu để đảm bảo chất lượng?">
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