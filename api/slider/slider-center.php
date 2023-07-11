<style>
    .customers-talk.owl-carousel .owl-item img {
        width: 100px;
        height: 100px;
        display: inline;
    }

    .customers-talk .description::before {
        content: "";
        width: 75%;
        border-top: 1px solid #0a402b;
        margin: 0 auto;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .customers-talk .description:after {
        content: "";
        width: 20px;
        height: 20px;
        background: #fff;
        position: absolute;
        bottom: -10px;
        left: 50%;
        border-bottom: 1px solid #0a402b;
        border-right: 1px solid #0a402b;
        transform: translateX(-50%) rotate(45deg);
    }

    .customers-talk .owl-item.active.center {
        opacity: 1;
        transform: scale(1.1);
        transition: all 0.2s linear;
        background-color: #fff;
    }

    .customers-talk .owl-item.center {
        opacity: 1;
        transform: scale(1.1);
    }

    .customers-talk .owl-item.active {
        opacity: 0.2;
    }

    .customers-talk .owl-item {
        opacity: 0.2;
    }

    .customers-talk.owl-carousel .owl-stage-outer {
        padding: 30px 0px;
    }

    .customers-talk>.owl-nav>.owl-next {
        top: 50%;
        transform: translateY(-50%);
        position: absolute;
        right: -17px;
    }

    .customers-talk>.owl-nav>.owl-prev {
        top: 50%;
        transform: translateY(-50%);
        position: absolute;
        left: -17px;
    }

    .customers-talk .owl-nav [class*=owl-]:hover {
        color: unset;
        background-color: unset;
    }
</style>

<div class="row">
    <div class="customers-talk owl-carousel owl-theme rounded-pill py-4 px-0">
        <div style="height: 380px; border: 1px solid #0a402b;"
            class="d-flex align-items-center justify-content-center bg-white rounded p-4 mx-md-0 mx-4">
            <div>
                <div class="text-center mb-4">
                    <img width="100" height="100" src="public/demo/avartar-customer.png">
                </div>
                <p class="description position-relative fst-italic text-center pb-4">Shop đa dạng hàng hóa, gần như là
                    cái gì
                    mình muốn mua shop đều có hết.
                    Yêu shop, mãi ủng hộ shop.</p>
                <h4 class="text-bold-green text-center fw-bold">Long Lee</h4>
            </div>
        </div>
        <div style="height: 380px; border: 1px solid #0a402b;"
            class="d-flex align-items-center justify-content-center bg-white rounded p-4 mx-md-0 mx-4">
            <div>
                <div class="text-center mb-4">
                    <img width="100" height="100" src="public/demo/avartar-customer.png">
                </div>
                <p class="description position-relative fst-italic text-center pb-4">Shop đa dạng hàng hóa, gần như là
                    cái gì
                    mình muốn mua shop đều có hết.
                    Yêu shop, mãi ủng hộ shop.</p>
                <h4 class="text-bold-green text-center fw-bold">Xuân Minh</h4>
            </div>
        </div>
        <div style="height: 380px; border: 1px solid #0a402b;"
            class="d-flex align-items-center justify-content-center bg-white rounded p-4 mx-md-0 mx-4">
            <div>
                <div class="text-center mb-4">
                    <img width="100" height="100" src="public/demo/avartar-customer.png">
                </div>
                <p class="description position-relative fst-italic text-center pb-4">Shop đa dạng hàng hóa, gần như là
                    cái gì
                    mình muốn mua shop đều có hết.
                    Yêu shop, mãi ủng hộ shop.</p>
                <h4 class="text-bold-green text-center fw-bold">Anh Thư</h4>
            </div>
        </div>
        <div style="height: 380px; border: 1px solid #0a402b;"
            class="d-flex align-items-center justify-content-center bg-white rounded p-4 mx-md-0 mx-4">
            <div>
                <div class="text-center mb-4">
                    <img width="100" height="100" src="public/demo/avartar-customer.png">
                </div>
                <p class="description position-relative fst-italic text-center pb-4">Shop đa dạng hàng hóa, gần như là
                    cái gì
                    mình muốn mua shop đều có hết.
                    Yêu shop, mãi ủng hộ shop.</p>
                <h4 class="text-bold-green text-center fw-bold">Xuân Minh</h4>
            </div>
        </div>
        <div style="height: 380px; border: 1px solid #0a402b;"
            class="d-flex align-items-center justify-content-center bg-white rounded p-4 mx-md-0 mx-4">
            <div>
                <div class="text-center mb-4">
                    <img width="100" height="100" src="public/demo/avartar-customer.png">
                </div>
                <p class="description position-relative fst-italic text-center pb-4">Shop đa dạng hàng hóa, gần như là
                    cái gì
                    mình muốn mua shop đều có hết.
                    Yêu shop, mãi ủng hộ shop.</p>
                <h4 class="text-bold-green text-center fw-bold">Anh Thư</h4>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.customers-talk').owlCarousel({
            center: true,
            loop: true,
            dots: false,
            nav: true,
            margin: 40,
            autoplay: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 1,
                    stagePadding: 180,
                    center: true,
                },
                1400: {
                    items: 3,
                }
            }
        });

        $(".owl-next").html(`<i class="bi bi-chevron-right fs-4"></i>`);
        $(".owl-prev").html(`<i class="bi bi-chevron-left fs-4"></i>`);
    });
</script>