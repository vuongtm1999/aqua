<style type="text/css">
  .nav-list>li>a {
    color: white;
  }

  .nav-list>li>a:hover {
    color: var(--mainColor2);
  }

  .nav-list-right>a:hover>i {
    transition: color .3s linear;
    color: var(--menuHover) !important;
  }

  .btn-cart-indicator {
    top: -6px;
    right: -6px;
    background-color: var(--mainColor2);
    font-size: 13px;
    min-width: 20px;
    height: 20px;
    line-height: 20px;
    border-radius: 12px;
  }

  .dropdown:hover>.dropdown-menu {
    transform: translateY(0);
    opacity: 1;
  }

  .dropdown>.dropdown-toggle:active {
    /*Without this, clicking will make it sticky*/
    pointer-events: auto;
  }

  .dropdown-menu {
    top: 100%;
    transition: all 0.4s;
    transform: translateY(40px);
    opacity: 0;
    display: block;
  }

  .logo-header {
    max-height: 39px;
  }

  .menu-close {
    height: 100%;
    width: 60px;
    background: var(--menuHover);
    padding: 0;
  }

  .icon_dropdown {
    transition: all 0.4s linear;
  }

  .open {
    transform: rotate(180deg);
  }

  .left-search {
    justify-content: center;
    width: 1200px;
    max-width: 100%;
  }

  .left-search input[type="text"] {
    height: 40px;
    background: var(--leftColBackground);
    color: #000;
    padding: 0 10px;
    font-size: 0.875rem;
    box-shadow: none;
  }

  .left-search .form-control {
    border-radius: 0;
    border: none;
    border-bottom: 1px solid #ddd;
  }

  .search-block {
    background: #fff;
    width: 100%;
    position: fixed;
    left: 0;
    top: 0 !important;
    display: flex;
    z-index: 11;
    justify-content: center;
    align-items: center;
    padding: 0 15px;
    height: 97px;
    transition: all 0.5s;
  }

  .btn-check:focus+.btn,
  .btn:focus {
    outline: 0;
    box-shadow: unset;
  }

  .search-block {
    transform: translateY(-100%);
  }

  .open-search {
    transform: translateY(0);
  }

  .overlay-search {
    position: fixed;
    top: 0 !important;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.5);
    z-index: 10;
    display: none;
  }


  /* md */
  @media (min-width: 768px) {
    .logo-header {
      max-height: 39px;
    }
  }

  /* PC */
  @media (min-width: 1400px) {
    .logo-header {
      max-height: 100%;
    }
  }
</style>

<div class="row px-6 bg-primary align-items-center py-2 py-lg-4">
  <div class="col-xxl-2 col-4 px-0">
    <a href="index.php"><img class="img-fluid logo-header" src="public/demo/logo (1).png" alt=""></a>
  </div>
  <div class="col-xxl-10 col-8 px-0">
    <div class="d-flex align-items-center justify-content-end">
      <ul class="list-unstyled d-xxl-flex d-none nav-list mb-0 mx-auto">
        <li class="px-3 py-2">
          <a class="px-2 py-2 fw-bold" href="index.php" title="Trang chủ">Trang chủ</a>
        </li>
        <li class="px-3 py-2">
          <a class="px-3 py-2 fw-bold" href="index.php?p=aboutus" title="Giới thiệu">Giới thiệu</a>
        </li>
        <li class="px-3 py-2 dropdown pointer">
          <a class="px-3 py-2 fw-bold dropdown-toggle" data-bs-toggle="dropdown"
            onclick="window.open('index.php?p=listproducts', '_self');" title="Sản phẩm">Sản phẩm</a>
          <ul style="min-width: 240px; border: 1px solid var(--mainColor);" class="dropdown-menu rounded"
            aria-labelledby="dropdownMenuLink">
            <li class="p-2"><a class="px-1 py-2" href="index.php?p=listproducts" title="Sản phẩm bán chạy">Sản phẩm bán
                chạy</a></li>
            <li class="p-2"><a class="px-1 py-2" href="index.php?p=listproducts" title="Sản phẩm nổi bật">Sản phẩm nổi
                bật</a></li>
            <li class="p-2"><a class="px-1 py-2" href="index.php?p=listproducts" title="Sản phẩm mới">Sản phẩm mới</a>
            </li>
          </ul>
        </li>
        <li class="px-3 py-2">
          <a class="px-3 py-2 fw-bold" href="index.php?p=news" title="Tin tức">Tin tức</a>
        </li>
        <li class="px-3 py-2">
          <a class="px-3 py-2 fw-bold" href="index.php?p=contactus" title="Liên hệ">Liên hệ</a>
        </li>
      </ul>
      <div class="d-flex flex-wrap align-items-center nav-list-right">
        <a href="javascript:;" class="p-1 px-2 js-toggle-search-box">
          <i style="font-size: 20px;" class="bi bi-search text-white"></i>
        </a>
        <a href="index.php?p=login" class="p-1 px-2">
          <i style="font-size: 20px;" class="bi bi-person-circle text-white"></i>
        </a>
        <div class="position-relative px-2">
          <a href="index.php?p=cart" class="p-1">
            <i style="font-size: 20px;" class="bi bi-cart3 text-white"></i>
          </a>
          <span class="btn-cart-indicator position-absolute text-center text-white">2</span>
        </div>
        <a class="p-1 px-2 d-xxl-none d-md-inline-block" data-bs-toggle="offcanvas" href="#header">
          <i class="bi bi-list text-white fs-5"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="header" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header bg-primary p-0">
    <a href="index.php" class="d-inline-block p-3">
      <img class="img-fluid" src="public/demo/logo (1).png" alt="">
    </a>
    <a type="button" class="menu-close d-inline-flex align-items-center justify-content-center"
      data-bs-dismiss="offcanvas" aria-label="Close">
      <i class="bi bi-x-lg fs-4 text-white"></i>
    </a>
  </div>
  <div style="background: var(--mainColor2);" class="offcanvas-body p-4">
    <ul class="p-xxl-0 px-xxl-3 m-0 list-unstyled position-static">
      <li class="pt-1 pt-xxl-2 pb-xxl-2 pb-1 border-1 border-bottom border-white">
        <a href="index.php" title="Trang chủ" class="text-white fw-bold py-1 pr-xxl-3 pr-2">
          Trang chủ
        </a>
      </li>
      <li class="pt-1 pt-xxl-2 pb-xxl-2 pb-1 border-1 border-bottom border-white">
        <a href="index.php?p=aboutus" title="Giới thiệu" class="text-white fw-bold d-block py-1 pl-xxl-3 pr-xxl-3 pr-2">
          Giới thiệu
        </a>
      </li>
      <li class="py-1 border-1 border-bottom border-white">
        <div class="d-flex justify-content-between align-items-center">
          <a href="index.php?p=listproducts" title="Sản phẩm" class="text-white fw-bold d-block">
            Sản phẩm
          </a>
          <i class="bi bi-caret-down-fill icon_dropdown px-2 py-1 text-white"></i>
        </div>
        <ul style="display: none;" class="list-group ps-2 pt-1 list-unstyled rounded js-submenu">
          <li class="pb-2">
            <a href="index.php?p=listproducts" class="py-1 py-xxl-2 pr-5 text-white fw-bold" title="Sản phẩm bán chạy">
              Sản phẩm bán chạy
            </a>
          </li>
          <li class="pb-2">
            <a href="index.php?p=listproducts" class="py-1 py-xxl-2 pr-5 text-white fw-bold" title="Sản phẩm nổi bật">
              Sản phẩm nổi bật
            </a>
          </li>
          <li class="pb-2">
            <a href="index.php?p=listproducts" class="py-1 py-xxl-2 pr-5 text-white fw-bold" title="Sản phẩm mới">
              Sản phẩm mới
            </a>
          </li>
        </ul>
      </li>
      <li class="pt-1 pt-xxl-2 pb-xxl-2 pb-1 border-1 border-bottom border-white">
        <a href="index.php?p=news" title="Tin tức" class="text-white fw-bold py-1 pl-xxl-3 pr-xxl-3 pr-2">
          Tin tức
        </a>
      </li>
      <li class="pt-1 pt-xxl-2 pb-xxl-2 pb-1 border-1 border-bottom border-white">
        <a href="index.php?p=contactus" title="Liên hệ" class="text-white fw-bold py-1 pl-xxl-3 pr-xxl-3 pr-2">
          Liên hệ
        </a>
      </li>
    </ul>
  </div>
</div>

<div class="search-block mr-3">
  <div class="input-group mb-3 left-search">
    <input type="text" class="form-control" placeholder="Từ khoá..." aria-describedby="button-addon2">
    <button class="btn position-absolute end-0">
      <i class="bi bi-search"></i>
    </button>
  </div>
</div>
<div class="overlay-search"></div>

<script>
  $(document).ready(function () {
    $('.icon_dropdown').click(function () {
      $(this).toggleClass('open');
      $('.js-submenu').slideToggle();
    })


    $('.js-toggle-search-box').click(function () {
      $('.search-block').toggleClass('open-search');
      $('.overlay-search').css('display', 'block');
    })

    $('.overlay-search').click(function () {
      $('.search-block').toggleClass('open-search');
      $('.overlay-search').css('display', 'none');
    })
  });
</script>