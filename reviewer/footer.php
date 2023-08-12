<footer>
    <div class="container">
        <div class="footer-block">
            <span>Copyright © 2021</span>
        </div>
    </div>
</footer>

<div class="container-table">
    <div class="cards-table">
        <div class="cards-table-row">
            <div class="cards-table-col">
                <div class="cards-table-btn-logo fonbet-logo"></div>
                <a href="/go/fonbet/" class="cards-table-btn">Перейти</a>
            </div>
            <div class="cards-table-col">
                <div class="cards-table-btn-logo winline-logo"></div>
                <a href="/go/winline/" class="cards-table-btn">Перейти</a>
            </div>
            <div class="cards-table-col">
                <div class="cards-table-btn-logo 1xstavka-logo"></div>
                <a href="/go/1xstavka/" class="cards-table-btn">Перейти</a>
            </div>
            <div class="cards-table-col">
                <div class="cards-table-btn-logo 888-logo"></div>
                <a href="/go/888/" class="cards-table-btn">Перейти</a>
            </div>
        </div>
        <div class="cards-table-row">
            <div class="cards-table-col">
                <div class="cards-table-btn-logo parimatch-logo"></div>
                <a href="/go/parimatch/" class="cards-table-btn">Перейти</a>
            </div>
            <div class="cards-table-col">
                <div class="cards-table-btn-logo leon-logo"></div>
                <a href="/go/leon/" class="cards-table-btn">Перейти</a>
            </div>
            <div class="cards-table-col">
                <div class="cards-table-btn-logo betboom-logo"></div>
                <a href="/go/betboom/" class="cards-table-btn">Перейти</a>
            </div>
            <div class="cards-table-col">
                <div class="cards-table-btn-logo melbet-logo"></div>
                <a href="/go/melbet/" class="cards-table-btn">Перейти</a>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
<script>
    jQuery(document).ready(function ($) {
        $("#owl-slider").owlCarousel ({
            navigation: false,
            dots: false,
            nav: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 9, 
            animateOut: 'fadeOut', 
            autoplay: false,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            loop: true,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false,
            responsive: {
                0: {
                    items: 1,
                },
                425: {
                    items: 2,
                },
                640: {
                    items: 3,
                },
                768: {
                    items: 4,
                },
                860: {
                    items: 5,
                },
                1024: {
                    items: 6,
                },
                1152: {
                    items: 7,
                },
                1360: {
                    items: 8,
                }
            }
        });
    });
</script>

</body>
</html>
