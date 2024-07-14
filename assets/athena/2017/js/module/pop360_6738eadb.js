(function() {
    var e = function e() {
            var i = $("html");
            var o = $(window).width();
            i.addClass("scroll-lock");
            var t = $(window).width();
            i.removeClass("scroll-lock");
            var s = t - o;
            $("<style type='text/css'>.scroll-lock-offset{margin-right:" + s + "px;}</style>").appendTo("head");
            return s
        },
        i = function e() {
            var i = $("html");
            i.addClass("scroll-lock scroll-lock-offset")
        },
        o = function e() {
            var i = $("html");
            i.removeClass("scroll-lock scroll-lock-offset")
        };
    e();

    function t(e) {
        this._ = {
            loading: e && e.loading !== undefined ? e.loading : true,
            fullscreen: e && e.fullscreen,
            enlarger: e && e.enlarger,
            bannerPano: e && e.bannerPano
        };
        this._init();
        this._initEvent()
    }
    t.prototype = {
        constructor: t,
        _init: function e() {
            var i = ['<div class="sr-pop360 ' + (this._.enlarger ? "enlarger" : "") + '" style="display: none;">', '    <div class="sr-pop360-cover J-cover"></div>', '    <div class="sr-pop360-wrap">', '        <div class="sr-pop360-view ' + (this._.loading ? "sr-pop360-loading" : "") + '">', '            <div class="J-view sr-pop360-content"></div>', '            <div class="sr-pop360-full J-full"><i class="ob-icon icon-fullscreen"></i></div>', '            <div class="sr-pop360-pop J-normal"><i class="ob-icon icon-fullscreen-out"></i></div>', "        </div>", '        <div class="sr-pop360-close J-close"><i class="ob-icon icon-delete"></i></div>', "    </div>", "</div>"];
            if (!this._.fullscreen) {
                i[5] = "";
                i[6] = ""
            }
            if (this._.bannerPano) {
                i = ['<div class="sr-pop360 sr-pop-360-banner' + (this._.enlarger ? "enlarger" : "") + '" style="display: none;">', '    <div class="sr-pop360-return"><a class="sr-pop360-return-link J-close J-banner-pano-close" href="javascript:;"><i class="ob-icon icon-arrow-left"></i>Return</a></div>', '    <div class="sr-pop360-wrap">', '        <div class="sr-pop360-view ' + (this._.loading ? "sr-pop360-loading" : "") + '">', '            <div class="J-view sr-pop360-content"></div>', "        </div>", "    </div>", "</div>"]
            }
            i = i.join("");
            var o = $(i);
            this._.doms = {
                popBox: o,
                cover: o.find(".J-cover"),
                close: o.find(".J-close"),
                viewBox: o.find(".J-view"),
                full: o.find(".J-full"),
                normal: o.find(".J-normal")
            };
            $(document.body).append(o)
        },
        _initEvent: function e() {
            var a = this;
            this._.doms.full.on("click", function() {
                a._.doms.popBox.addClass("open");
                $("body").addClass("sr-pop360-body-overflow")
            });
            this._.doms.normal.on("click", function() {
                a._.doms.popBox.removeClass("open");
                $("body").removeClass("sr-pop360-body-overflow")
            });
            this._.doms.close.on("click", function() {
                a.hide();
                $("body").removeClass("sr-pop360-body-overflow");
                var e = $(".J-pano-pic");
                if (e.length > 0) {
                    var i = $(".J-proSlide-container");
                    var o = i.offset().left;
                    var t = i.offset().top - $(document).scrollTop();
                    var s = i.width();
                    var n = i.height();
                    e.animate({
                        left: o + "px",
                        top: t + "px",
                        width: s + "px",
                        height: n + "px"
                    }, 800);
                    $(".swiper-pagination-bullet").eq(0).click();
                    setTimeout(function() {
                        $(".J-pano-pic").removeClass("pano-pic-active").css({
                            position: "absolute",
                            left: "0",
                            top: "0",
                            width: "100%",
                            height: "100%"
                        });
                        $("body").removeClass("pano-body")
                    }, 1e3);
                    setTimeout(function() {
                        $(".J-pano-pic").css({
                            zIndex: 1
                        })
                    }, 2e3)
                }
            });
            this._.doms.cover.on("click", function(e) {
                e.stopPropagation();
                e.preventDefault();
                a.hide()
            })
        },
        _preloadImage: function e(i, o) {
            var t = new Image;
            t.src = i;
            if (t.complete) {
                o && o(t)
            } else {
                t.onload = function() {
                    o && o(this)
                }
            }
        },
        winSize: function e() {
            var i = window;
            var o = document;
            var t = o.documentElement;
            var s = o.body;
            return {
                width: i.innerWidth || t.clientWidth || s.clientWidth || 0,
                height: i.innerHeight || t.clientHeight || s.clientHeight || 0
            }
        },
        show: function e(s, n) {
            i();
            var a = this;
            this._.doms.popBox.show();
            if (n) {
                var l = this._.doms.viewBox.parent();
                var r = this.winSize();
                this._preloadImage(n, function(e) {
                    var i, o;
                    i = e.width + 20;
                    o = e.height + 97;
                    var t = e.width / e.height;
                    if (e.width + 20 > r.width || e.height + 97 > r.height) {
                        if (e.width + 20 > r.width) {
                            i = r.width - 40;
                            o = (r.width - 40) / t + 97
                        } else {
                            o = r.height - 20;
                            i = (r.height - 97 + 20) * t
                        }
                    } else {
                        i = e.width + 20;
                        o = e.height + 97
                    }
                    l.css({
                        width: i + "px",
                        height: o + "px",
                        marginTop: -o / 2 + "px",
                        marginLeft: -i / 2 + "px"
                    });
                    a._.doms.viewBox.html(s.replace("{IMG}", '<img src="' + n + '" />'));
                    l.find(".img-cell").css({
                        width: i + "px",
                        height: o - 97 + "px"
                    });
                    setTimeout(function() {
                        a._.doms.viewBox.children().addClass("show")
                    }, 200)
                })
            } else {
                this._.doms.viewBox.html(s)
            }
        },
        hide: function e() {
            o();
            this._.doms.popBox.hide();
            this._.doms.viewBox.parent().removeAttr("style");
            this._.doms.viewBox.children().removeClass("show");
            this._.doms.viewBox.empty()
        },
        appendDeclaration: function e(i) {
            if (i) {
                var o = this._.doms.popBox.find(".alert-declaration");
                if (o.length > 0) {
                    o.find(".alert-txt").html(i);
                    o.show()
                } else {
                    var t = ['<div class="alert-new alert-declaration">', '    <div class="alert-con alert-half-black alert-state alert-del">', '        <span class="alert-txt"></span>', '        <a href="javascript:;" class="micon-del J-close-alert"><i class="ob-icon icon-delete"></i></a>', "    </div>", "</div>"].join("");
                    var s = $(t);
                    s.find(".alert-txt").html(i);
                    this._.doms.popBox.find(".sr-pop360-view").append(s);
                    this._.doms.popBox.find(".alert-new .J-close-alert").on("click", function() {
                        $(this).closest(".alert-new").hide()
                    })
                }
            }
        }
    };
    window.Pop = t
})();
$(function() {
    if ($(".J-pop360").length > 0) {
        var o = new Pop({
            fullscreen: false,
            loading: false
        });
        $(document).on("click", ".J-pop360", function(e) {
            var i = $(this).attr("view-url") || 0;
            e.preventDefault();
            e.stopPropagation();
            if (!i) {
                return
            }
            o.show('<iframe src="' + i + '" allowfullscreen="true" border="0"></iframe>')
        })
    }
    if ($(".J-banner-pop360").length > 0) {
        var r = new Pop({
            fullscreen: false,
            loading: false,
            bannerPano: true
        });
        $(document).on("click", ".J-banner-pop360", function(e) {
            var i = $(this).attr("view-url") || 0;
            e.preventDefault();
            e.stopPropagation();
            if (!i) {
                return
            }
            var o = $(".J-pano-pic");
            o.css({
                zIndex: 1e5
            }).addClass("pano-pic-active");
            $("body").addClass("pano-body");
            var t = $(".J-proSlide-container");
            var s = t.offset().left;
            var n = t.offset().top - $(document).scrollTop();
            var a = t.width();
            var l = t.height();
            o.css({
                position: "fixed",
                left: s + "px",
                top: n + "px",
                width: a + "px",
                height: l + "px"
            });
            setTimeout(function() {
                o.animate({
                    width: "100%",
                    height: "100%",
                    left: 0,
                    top: 0
                }, 800)
            }, 1e3);
            setTimeout(function() {
                r.show('<iframe src="' + i + '" allowfullscreen="true" border="0"></iframe>')
            }, 1800)
        })
    }
    if ($(".J-enlarger").length > 0) {
        var t = new Pop({
            enlarger: true
        });
        $(".J-enlarger").bind("click", function(e) {
            e.preventDefault();
            e.stopPropagation();
            var i = '<div class="sr-pop360-product-view">' + '<div class="sr-pop360-product-image img-center"><div class="img-cell">{IMG}</div></div>' + '<div class="sr-pop360-product-name">' + $(this).attr("data-name") + "</div></div>";
            t.show(i, $(this).attr("data-enlarger"))
        })
    }
});
//# sourceMappingURL=../../../../__sources__/athena/2017/js/module/pop360_6738eadb.js.map