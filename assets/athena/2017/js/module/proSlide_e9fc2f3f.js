(function(t) {
    var o = false;
    if (typeof i18n !== "undefined") {
        o = i18n.currLocal === "sa"
    }
    if (window.ProSlide) {
        return
    }
    var e = {
        wrapper: ".J-proSlide-wrapper",
        container: ".J-proSlide-container",
        slideCls: ".J-proSlide-slide",
        paginationCls: ".J-proSlide-pagination",
        paginationDotCls: ".swiper-pagination-bullet",
        leftCls: ".J-proSlide-left",
        rightCls: ".J-proSlide-right",
        autoplay: 5e3,
        speed: 300,
        spaceBetween: 0,
        loop: true,
        autoplayDisableOnInteraction: false,
        slidesPerView: 1,
        slidesPerGroup: 1,
        lazyLoading: false,
        initialSlide: 0,
        onInit: function i() {},
        bindEvent: {},
        onSlideChangeStart: function i() {}
    };

    function i(i) {
        this.config = t.extend({}, e, i);
        this.init()
    }
    i.prototype = {
        init: function i() {
            this.$wrapper = t(this.config.wrapper);
            this.$container = t(this.config.container);
            var e = this;
            var n = this.$wrapper.find(this.config.slideCls).length;
            this.mySwiper = new Swiper(this.$container, t.extend({
                loop: e.config.loop && n > e.config.slidesPerView,
                pagination: n > e.config.slidesPerView ? this.config.paginationCls : false,
                spaceBetween: e.config.spaceBetween,
                autoplay: e.config.autoplay,
                speed: e.config.speed,
                paginationClickable: true,
                autoHeight: true,
                autoResize: true,
                resizeReInit: true,
                roundLengths: true,
                initialSlide: e.config.initialSlide,
                autoplayDisableOnInteraction: e.config.autoplayDisableOnInteraction,
                slidesPerView: e.config.slidesPerView,
                slidesPerGroup: e.config.slidesPerGroup,
                lazyLoading: e.config.lazyLoading,
                prevButton: o ? this.$wrapper.find(e.config.rightCls) : this.$wrapper.find(e.config.leftCls),
                nextButton: o ? this.$wrapper.find(e.config.leftCls) : this.$wrapper.find(e.config.rightCls),
                onInit: e.config.onInit,
                onSlideChangeStart: e.config.onSlideChangeStart
            }, e.config.bindEvent));
            this.$wrapper.on("hover", this.config.paginationDotCls, function(i) {
                e.mySwiper.stopAutoplay();
                t(i.currentTarget).click()
            }).on("mouseenter", function() {
                e.mySwiper.stopAutoplay()
            }).on("mouseleave", function() {
                e.mySwiper.startAutoplay()
            });
            this.$wrapper.on("mouseenter", function() {
                e.mySwiper.stopAutoplay();
                if (n > e.config.slidesPerView) {
                    e.$wrapper.addClass("sr-proSlide-left-open sr-proSlide-right-open")
                }
            }).on("mouseleave", function() {
                e.mySwiper.startAutoplay();
                e.$wrapper.removeClass("sr-proSlide-left-open sr-proSlide-right-open")
            })
        }
    };
    window.ProSlide = i
})(jQuery);
//# sourceMappingURL=../../../../__sources__/athena/2017/js/module/proSlide_e9fc2f3f.js.map