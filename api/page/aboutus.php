<style>
    .px-7 {
        padding-left: 15vw;
        padding-right: 15vw;
    }

    .line_middle:before {
        content: '';
        width: 1px;
        position: absolute;
        height: calc(100% + 40px);
        background: #fff;
        top: 50%;
        left: 27px;
        transform: translate(-50%, -50%);
    }

    .cir:before {
        left: 0;
        content: '';
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background: var(--mainColor2);
        position: absolute;
        top: 8px;
        transform: translateX(50%);
        filter: contrast(3);
    }

    .bg-img-aboutus {
        background-image: url(public/demo/about_us_bg_img.png);
        background-repeat: no-repeat;
        background-position: bottom right;
        background-size: cover;

    }

    .btn-toggle {
        font-size: 16px;
        color: #ffffff !important;
        display: block;
        background: var(--mainColor2);
        border-radius: 6px;
        padding: 5px 40px 5px 15px;
        position: relative;
        text-align: start;
    }

    .collapse.show {
        height: auto;
        overflow: hidden;
        display: block;
    }

    .collapse:not(.show) {
        display: none;
    }

    .collapse {
        height: 0;
        transition: height .35s ease, opacity .35s ease;
        display: block;
    }

    .tit_pr::before {
        content: '';
        width: 12px;
        height: 2px;
        background: #fff;
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
    }

    .tit_pr::after {
        content: '';
        width: 12px;
        height: 2px;
        background: #fff;
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
    }

    .tit_pr.collapsed:after {
        transform: translateY(-50%) rotate(-90deg);
    }

    .btn:focus {
        outline: 0;
        box-shadow: unset;
    }


    @media (min-width: 768px) {
        .line_middle:before {
            content: '';
            width: 1px;
            position: absolute;
            height: calc(100% + 40px);
            background: #fff;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .cir:before {
            right: 0;
            left: unset;
            content: '';
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: var(--mainColor2);
            position: absolute;
            top: 8px;
            transform: translateX(50%);
            filter: contrast(3);
        }
    }

    @media (min-width: 1400px) {}
</style>

<div class="row px-6 bg-secondary py-1">
    <div>
        <a class="text-main2 small" href="index.php" title="Trang chủ">
            Trang chủ
        </a>
        <span class="slash-divider ms-2 me-2">/</span>
        <span class="small">Giới thiệu</span>
    </div>
</div>

<div class="row bg-white px-6 pb-4 pt-5 pt-xxl-5 align-items-center">
    <div class="col-md-6 col-12">
        <h4 class="fw-bold pb-2 text-main">Tin tức</h4>
        <p>Là đại lý chính thức của Tổng công ty Cổ phần Nước tinh khoáng tinh khiết thiên nhên MewAQUA (AQUA Trading),
            Đại lý nước tinh khiết tại 266 Đội Cấn, Ba Đình, Hà Nội</p>
    </div>
    <div class="col-md-6 col-12">
        <img class="img-fluid rounded" src="public/demo/about_us_1.png" alt="">
    </div>
</div>

<div class="row bg-primary text-main2 py-5 px-6">
    <h4 class="text-center fw-bolld">SẢN PHẨM CHÍNH HÃNG</h4>
    <div class="text-white text-center px-7 small">
        Công ty TNHH MewAqua chính thức trở thành thành viên của tập đoàn Nestlé Water từ năm 1992. Trong suốt gần 30
        năm qua, công ty nước khoáng thiên nhiên La Vie không ngừng nỗ lực phát triển cung ứng sản phẩm và dịch vụ tốt
        nhất cho khác hàng. Theo BC Nielsen về sản lượng năm 2019, La Vie trở thành thương hiệu nước khoáng số 1 tại
        Việt Nam.
    </div>

    <div class="d-md-flex d-none flex-wrap position-relative mt-5 line_middle">
        <div class="col-md-6 col-12 text-white text-end pe-4 mb-2 position-relative cir">
            <h5 class="text-main2 fw-bold">
                Thành phần lành mạnh
            </h5>
            <p>Nước khoáng thiên nhiên MewAqua được khai thác từ mạch nước khoáng ngầm hàng ngàn năm tuổi, nằm sâu dưới
                lòng đất. Công nghệ đóng chai tại nguồn giúp giữ trọn vẹn hàm lượng nguyên tố vi lượng & khoáng chất tự
                nhiên quý giá của nước khoáng, gồm Natri, Kali, Canxi, Magie, Flouride, Bicarbonate, I-ốt.</p>
        </div>
        <div class="col-md-6 col-12 text-white text-start ps-4 mb-2">
            <h5 class="text-main2 fw-bold">
                Công nghệ hiện đại
            </h5>
            <p>Nước khoáng thiên nhiên MewAqua được khai thác từ mạch nước khoáng ngầm hàng ngàn năm tuổi, nằm sâu dưới
                lòng đất. Công nghệ đóng chai tại nguồn giúp giữ trọn vẹn hàm lượng nguyên tố vi lượng & khoáng chất tự
                nhiên quý giá của nước khoáng, gồm Natri, Kali, Canxi, Magie, Flouride, Bicarbonate, I-ốt.</p>
        </div>
        <div class="col-md-6 col-12 text-white text-end pe-4 mb-2 position-relative cir">
            <h5 class="text-main2 fw-bold">
                Thành phần lành mạnh
            </h5>
            <p>Nước khoáng thiên nhiên MewAqua được khai thác từ mạch nước khoáng ngầm hàng ngàn năm tuổi, nằm sâu dưới
                lòng đất. Công nghệ đóng chai tại nguồn giúp giữ trọn vẹn hàm lượng nguyên tố vi lượng & khoáng chất tự
                nhiên quý giá của nước khoáng, gồm Natri, Kali, Canxi, Magie, Flouride, Bicarbonate, I-ốt.</p>
        </div>
        <div class="col-md-6 col-12 text-white text-start ps-4 mb-2">
            <h5 class="text-main2 fw-bold">
                Thành phần lành mạnh
            </h5>
            <p>Nước khoáng thiên nhiên MewAqua được khai thác từ mạch nước khoáng ngầm hàng ngàn năm tuổi, nằm sâu dưới
                lòng đất. Công nghệ đóng chai tại nguồn giúp giữ trọn vẹn hàm lượng nguyên tố vi lượng & khoáng chất tự
                nhiên quý giá của nước khoáng, gồm Natri, Kali, Canxi, Magie, Flouride, Bicarbonate, I-ốt.</p>
        </div>
    </div>

    <div class="d-md-none d-flex flex-wrap position-relative mt-5 line_middle">
        <div class="col-md-6 col-12 text-white ps-5 mb-2 position-relative cir">
            <p>
                <a class="btn btn-toggle tit_pr" data-bs-toggle="collapse" href="#projectInfo-1" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Thành phần
                    lành mạnh
                </a>
            </p>
            <div class="collapse show" id="projectInfo-1">
                <p class="text-justify">Nước khoáng thiên nhiên MewAqua được khai thác từ mạch nước khoáng ngầm hàng
                    ngàn năm tuổi, nằm sâu
                    dưới
                    lòng đất. Công nghệ đóng chai tại nguồn giúp giữ trọn vẹn hàm lượng nguyên tố vi lượng & khoáng chất
                    tự
                    nhiên quý giá của nước khoáng, gồm Natri, Kali, Canxi, Magie, Flouride, Bicarbonate, I-ốt.</p>
            </div>
        </div>
        <div class="col-md-6 col-12 text-white text-start ps-5 mb-2 position-relative cir">
            <p>
                <a class="btn btn-toggle tit_pr collapsed" data-bs-toggle="collapse" href="#projectInfo-2" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Công nghệ hiện đại
                </a>
            </p>
            <div class="collapse" id="projectInfo-2">
                <p class="text-justify">Nước khoáng thiên nhiên MewAqua được khai thác từ mạch nước khoáng ngầm hàng
                    ngàn năm tuổi, nằm sâu
                    dưới
                    lòng đất. Công nghệ đóng chai tại nguồn giúp giữ trọn vẹn hàm lượng nguyên tố vi lượng & khoáng chất
                    tự
                    nhiên quý giá của nước khoáng, gồm Natri, Kali, Canxi, Magie, Flouride, Bicarbonate, I-ốt.</p>
            </div>
        </div>
        <div class="col-md-6 col-12 text-white text-end ps-5 mb-2 position-relative cir">
            <p>
                <a class="btn btn-toggle tit_pr collapsed" data-bs-toggle="collapse" href="#projectInfo-3" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Công nghệ hiện đại
                </a>
            </p>
            <div class="collapse" id="projectInfo-3">
                <p class="text-start">Nước khoáng thiên nhiên MewAqua được khai thác từ mạch nước khoáng ngầm hàng
                    ngàn năm tuổi, nằm sâu
                    dưới
                    lòng đất. Công nghệ đóng chai tại nguồn giúp giữ trọn vẹn hàm lượng nguyên tố vi lượng & khoáng chất
                    tự
                    nhiên quý giá của nước khoáng, gồm Natri, Kali, Canxi, Magie, Flouride, Bicarbonate, I-ốt.</p>
            </div>
        </div>
        <div class="col-md-6 col-12 text-white text-start ps-5 mb-2 position-relative cir">
            <p>
                <a class="btn btn-toggle tit_pr collapsed" data-bs-toggle="collapse" href="#projectInfo-4" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    Công nghệ hiện đại
                </a>
            </p>
            <div class="collapse" id="projectInfo-4">
                <p class="text-justify">Nước khoáng thiên nhiên MewAqua được khai thác từ mạch nước khoáng ngầm hàng
                    ngàn năm tuổi, nằm sâu
                    dưới
                    lòng đất. Công nghệ đóng chai tại nguồn giúp giữ trọn vẹn hàm lượng nguyên tố vi lượng & khoáng chất
                    tự
                    nhiên quý giá của nước khoáng, gồm Natri, Kali, Canxi, Magie, Flouride, Bicarbonate, I-ốt.</p>
            </div>
        </div>
    </div>
</div>

<div class="row bg-white px-6 align-items-center py-md-5 pt-3 pb-1">
    <div class="col-md-6 col-12 pt-4">
        <img class="img-fluid w-100 rounded" src="public/demo/about_us_2.png" alt="">
    </div>
    <div class="col-md-6 col-12 pt-4">
        <h4 class="fw-bold text-main text-center">Dịch vụ vận chuyển khép kín</h4>
        <div>
            <b>Mạng lưới vận chuyển rộng khắp cả nước:</b> Trải qua gần 130 năm phát triển, MewAQUA tự hào đã xây dựng
            được hệ thống phân phối trải dài từ Bắc chí Nam. Sở hữu mạng lưới vận chuyển bao phủ toàn quốc, MewAQUA mong
            muốn mang nước sạch đến mọi nơi, đáp ứng nhu cầu của người tiêu dùng trong cả nước.<br>
            <b>Đội ngũ cán bộ vận chuyển nhiệt tình, chu đáo:</b> Không chỉ riêng chất lượng sản phẩm mà dịch vụ cũng là
            điều MewAQUA
            đặc biệt quan tâm. Đội ngũ cán bộ vận chuyển nhiệt tình, chu đáo đảm bảo mỗi sản phẩm đến tay người tiêu
            dùng là một sự hài lòng trọn vẹn nhất.
        </div>
    </div>
</div>

<div class="row bg-white px-6 align-items-center py-md-5 py-1">
    <div class="col-md-6 col-12 pt-md-4 pt-2 order-2 order-xxl-1">
        <h4 class="fw-bold text-main text-center">Dịch vụ tư vấn toàn diện – miễn phí</h4>
        <div>
            <b>Tư vấn người tiêu dùng:</b> Bạn là người yêu thích nước tinh khiết MewAQUA? MewAQUA luôn sẵn sàng tư vấn
            cụ thể các thông tin liên quan đến sản phẩm khi khách hàng có nhu cầu.<br>
            <b>Tư vấn kinh doanh:</b> Bạn đang có ý định kinh doanh nước tinh khiết? MewAQUA sẽ giúp bạn giải đáp tất cả
            những thắc mắc ở mọi khía cạnh liên quan đến việc trở thành cơ sở phân phối chính thức.
        </div>
    </div>
    <div class="col-md-6 col-12 pt-md-4 pt-2 order-1 order-xxl-2">
        <img class="img-fluid w-100 rounded" src="public/demo/about_us_3.png" alt="">
    </div>
</div>

<div class="row bg-img-aboutus">
    <div style="        backdrop-filter: brightness(0.4);" class="text-start py-5 text-white px-6">
        <p>Với 100 nhà máy đặt tại 35 quốc gia,MewAqua sở hữu 52 nhãn hiệu đáp ứng nhu cầu khách hàng khác nhau tại mỗi
            quốc gia. Nước được coi là sự lựa chọn cho việc bù chất hàng ngày cho cơ thể vì nó không thêm bất kỳ calo
            trong khẩu phần ăn, đặc biệt là tình trạng béo phì trên thế giới đang ngày càng gia tăng. Nước đóng chai là
            nước giải khát tốt cho sức khỏe do không chứa calo, nguồn gốc nước được kiểm soát, chất lượng vượt trội, mùi
            vị và sự tiện lợi.</p>
    </div>
</div>

<div class="row bg-white px-6 pb-4 pt-5">
    <div class="col-xxl-6 col-12 px-2">
        <div class="d-flex flex-wrap mb-3">
            <div class="col-12 col-xxl-5 pe-xxl-1 pb-xxl-0 pb-3">
                <div class="mb-2 fw-bold">
                    Thông tin
                </div>
                <p class="mb-0">Ladeco Building, 266 Doi Can Street, Ba Dinh District, Hanoi.</p>
                <p class="mb-0">Hotline: <a href="tel:19006750" title="1900 6750">1900 6750</a></p>
                <p class="mb-0">E-mail: <a href="mailto:admin@tgsoft.vn" title="admin@tgsoft.vn">admin@tgsoft.vn</a></p>
            </div>
            <div class="col-12 col-xxl-7 ps-xxl-1 pb-3">
                <div class="mb-2 fw-bold">
                    Hệ thống đại lý
                </div>
                <p class="mb-0">Chi nhánh 1: Ladeco Building, 266 Doi Can Street, Ba Dinh District, Hanoi.</p>
                <p class="mb-0">Chi nhánh 2: Ladeco Building, 266 Doi Can Street, Ba Dinh District, Hanoi.</p>
                <p class="mb-0">Chi nhánh 3: Ladeco Building, 266 Doi Can Street, Ba Dinh District, Hanoi.</p>
            </div>
        </div>
        <iframe style="width: 100%;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.92991749446!2d106.67813260697501!3d10.816675268210842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528e1f241211f%3A0xc9ef195798144b1f!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBN4bufIFRQLkhDTSAtIEPGoSBz4bufIDM!5e0!3m2!1svi!2s!4v1683089586126!5m2!1svi!2s"
            height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-xxl-6 col-12 px-2">
        <address class="mb-4">
            <p class="mb-1"><b> </b>Ladeco Building, 266 Doi Can Street, Ba Dinh District, Hanoi.</p>
            <p class="mb-1"><b>Email: </b><a href="mailto:support@sapo.vn" title="support@sapo.vn">support@sapo.vn</a>
            </p>
            <p class="mb-1"><b>Hotline: </b>
                <a href="tel:19006750" title="1900 6750">1900 6750</a>
            </p>
            <p class="mb-1">Cung cấp nước uống tinh khiết, an toàn chất lượng tới mọi gia đình</p>
        </address>
        <div class="mb-3">
            <input type="text" class="form-control" name="contact[Name]" placeholder="Tên *" required="">
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="contact[email]" placeholder="Địa chỉ email *" required="">
        </div>
        <div class="mb-3">
            <textarea name="contact[Body]" placeholder="Nội dung *" class="form-control" rows="3"></textarea>
        </div>
        <span class="require d-block mb-3"><em class="required">* </em>Thông tin bắt buộc</span>

        <a class="view_mores bg-main2 d-inline-block rounded-main overflow-hidden fw-bold py-2 px-4 mt-1 mb-md-0 mb-2 text-center position-relative"
            href="index.php?p=aboutus" title="Gửi liên hệ">
            <span class="position-relative title fw-bold">Gửi liên hệ</span>
            <span></span><span></span><span></span><span></span>
        </a>
    </div>
</div>