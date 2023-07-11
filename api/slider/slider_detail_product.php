<style type="text/css">
    .detail-product .owl-nav [class*=owl-]:hover {
        color: unset;
        background-color: unset;
    }

    .detail-product>.owl-nav>.owl-next {
        top: 38%;
        position: absolute;
        right: -40px;
    }

    .detail-product>.owl-nav>.owl-prev {
        top: 38%;
        position: absolute;
        left: -40px;
    }

    .background-img-product {
        background-image: url(public/demo/product.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 105%;
    }

    .product-block {
        background: #f7f7f7;
        border: 1px solid transparent;
    }

    .product-block:hover {
        border-color: var(--color-red-main);
    }

    .btn-add-to-wishlist {
        top: 10px;
        right: 10px;
    }

    .btn-add-to-wishlist:hover {
        animation: heartbeat 1.5s infinite;
    }

    .btn-add-to-wishlist:hover i {
        color: var(--color-yellow-main);
    }

    /* modify dots */
    .flash-sale-slider .owl-dots .owl-dot span {
        margin: 0 3px !important;
        width: 15px;
        height: 5px;
        background: white;
        border: 1px solid white;
        border-radius: initial;
        opacity: 1;
    }

    .flash-sale-slider .owl-dots .owl-dot.active span {
        width: 30px;
        height: 5px;
        border-radius: initial;
        background: #0fb587;
        border: 1px solid #0fb587;
        transition: all 0.2s linear;
    }

    .flash-sale-slider .owl-dots {
        margin-top: 20px !important;
    }

    /* property center */
    .flash-sale-slider .owl-dots.disabled {
        display: block;
    }
    
</style>

<div class="row">
    <div class="suggestion-product owl-carousel owl-theme">
        <a href="index.php?p=chitietsanpham">
            <div class="product-block position-relative">
                <div class="background-img-product"></div>
                <span style="color: initial;" class="btn-add-to-wishlist position-absolute">
                    <i class="bi bi-heart-half"></i>
                </span>
                <div style="color: initial;" class="p-3">
                    <div>
                        Nhẫn nam Vàng trắng DVNATTT0100D298
                    </div>
                    <div class="fw-bold">
                        21.522.000 VND
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.detail-product').owlCarousel({
            center: false,
            loop: true,
            margin: 0,
            dots: true,
            margin: 35,
            autoplay: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 18,
                    nav: false,
                },
                768: {
                    items: 1,
                    nav: false,
                },
                1400: {
                    items: 1
                }
            }
        });

        $(".detail-product .owl-next").html(`<i class="bi bi-chevron-right fs-3"></i>`);
        $(".detail-product .owl-prev").html(`<i class="bi bi-chevron-left fs-3"></i>`);


        // replace dot to thumnail image
        $(".detail-product .owl-dot").each(function (index, element) {
            $(element).html(`<img class="img-fluid my-thumnail-img" src="public/demo/detail-product-thumnail-${index + 1}.jpg" alt="">`);
        })
    });
</script>