function _typeof(e) {
    "@babel/helpers - typeof";
    return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
        return typeof e
    } : function(e) {
        return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
    }, _typeof(e)
}

function ownKeys(t, e) {
    var i = Object.keys(t);
    if (Object.getOwnPropertySymbols) {
        var r = Object.getOwnPropertySymbols(t);
        e && (r = r.filter(function(e) {
            return Object.getOwnPropertyDescriptor(t, e).enumerable
        })), i.push.apply(i, r)
    }
    return i
}

function _objectSpread(t) {
    for (var e = 1; e < arguments.length; e++) {
        var i = null != arguments[e] ? arguments[e] : {};
        e % 2 ? ownKeys(Object(i), !0).forEach(function(e) {
            _defineProperty(t, e, i[e])
        }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(i)) : ownKeys(Object(i)).forEach(function(e) {
            Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(i, e))
        })
    }
    return t
}

function _defineProperty(e, t, i) {
    t = _toPropertyKey(t);
    if (t in e) {
        Object.defineProperty(e, t, {
            value: i,
            enumerable: true,
            configurable: true,
            writable: true
        })
    } else {
        e[t] = i
    }
    return e
}

function _toPropertyKey(e) {
    var t = _toPrimitive(e, "string");
    return _typeof(t) === "symbol" ? t : String(t)
}

function _toPrimitive(e, t) {
    if (_typeof(e) !== "object" || e === null) return e;
    var i = e[Symbol.toPrimitive];
    if (i !== undefined) {
        var r = i.call(e, t || "default");
        if (_typeof(r) !== "object") return r;
        throw new TypeError("@@toPrimitive must return a primitive value.")
    }
    return (t === "string" ? String : Number)(e)
}
$(function() {
    if (!$(".J-show-card").length) {
        return
    }
    var n = "";
    var s;
    var l = function e(t) {
        $(".J-card-error .error").show().html(t)
    };
    var c = function e(t) {
        return '<div class="virtual-card-wrap J-card-cnt">' + '<div class="card-cnt-detail J-card-detail">' + '<div class="J-card-step1">' + '<div class="detail-info">' + "Scan the QR code or leave your email address, you'll take my contact card on your mobile phone!" + "</div>" + '<div class="detail-qr">' + '<img src="' + t + '" alt="">' + "</div>" + '<div class="detail-form obelisk-form">' + '<form action="" class="J-card-form">' + '<div class="card-captcha" id="J-validator"></div>' + '<input class="input-text" type="text" name="businessCardEmail" placeholder="Email Address">' + '<a href="" class="btn btn-main detail-btn J-send">Get Card</a>' + '<div class="feedback-block J-card-error" wrapfor="businessCardEmail"><label for="businessCardEmail"class="error" style="display:none;"></label></div>' + "</form>" + "</div>" + "</div>" + "</div>" + "</div>"
    };
    var t = function e() {
        if ($(".J-card-form").valid()) {
            var t = $("#productId").val();
            var i = $(".J-card-form").serialize();
            var r = t ? $.param({
                productId: t
            }) + "&" + i : i;
            var a = $("#loginUserName").length > 0;
            if (a) {
                var o = $("#loginUserName").val();
                var n = "//" + o + ".en.made-in-china.com/sendBusinessCardEmail"
            } else {
                var n = "/sendBusinessCardEmail"
            }
            $.ajax({
                url: n,
                data: r,
                type: "post",
                crossDomain: a,
                xhrFields: {
                    withCredentials: a
                },
                dataType: "json",
                success: function e(t) {
                    if (t && t.execflag === "0") {
                        s && s.close();
                        artDialog.alert("The business card information has been sent to your mailbox successfully!", "Business Card", {
                            fn: function e() {},
                            text: "Confirm"
                        }, {
                            type: "success",
                            skin: "bussiness-card-okdlg"
                        })
                    } else {
                        l(t.errormsg || "net error")
                    }
                },
                error: function e() {
                    alert("net error")
                }
            })
        }
    };
    var a = function e() {
        $(".J-send").click(function(e) {
            e.preventDefault();
            t()
        });
        $(".J-card-form").submit(function(e) {
            e.preventDefault();
            t()
        })
    };
    var d = function e() {
        a();
        if (!!$("#J-validator").length) {
            var t = $("#loginUserName").length > 0;
            if (t) {
                var i = $("#loginUserName").val();
                var r = i + ".en.made-in-china.com"
            } else {
                var r = window.location.host
            }
            $.ajax({
                url: "//" + r + "/captcha?action=widget&k=6LfzAc0SAADE5CteqEn5zUBDtNHIGZ6NGtaHh0g9&inputattrs=maxLength%3D4%20placeholder%3D%22Enter%20the%20code%20shown%22%20Code%20autocorrect%3Doff%20autocapitalize%3Doff%20autocomplete%3Doff%20class%3Dtext",
                type: "get",
                dataType: "html",
                crossDomain: t,
                xhrFields: {
                    withCredentials: t
                },
                cache: false,
                success: function e(t) {
                    $("#J-validator").html(t)
                },
                error: function e() {}
            })
        }
        $(".J-card-form").validate({
            errorWrap: true,
            rules: {
                businessCardEmail: {
                    required: true,
                    email: true
                },
                verCode: {
                    required: true
                }
            },
            messages: {
                businessCardEmail: {
                    required: "Please enter your email address first!",
                    email: "Please enter a valid email."
                },
                verCode: {
                    required: "Please enter verification code."
                }
            }
        })
    };
    $(".J-show-card").click(function(e) {
        e.preventDefault();
        var t = $("#productId").val();
        var i = $("#loginUserName").length > 0;
        if (i) {
            var r = $("#loginUserName").val();
            var a = "//" + r + ".en.made-in-china.com/getBusinessCardQrUrl"
        } else {
            var a = "/getBusinessCardQrUrl"
        }
        var o = t ? a + "?productId=" + t : a;
        $.ajax({
            url: o,
            dataType: "json",
            crossDomain: i,
            xhrFields: {
                withCredentials: i
            },
            async: false,
            success: function e(t) {
                if (t && t.data) {
                    n = t.data;
                    s = new artDialog({
                        content: c(n),
                        skin: "bussiness-card-dlg",
                        title: "Business Card",
                        init: function e() {
                            d()
                        },
                        width: 390,
                        lock: true,
                        resize: false,
                        drag: false
                    })
                } else {
                    alert(t.errormsg || "net error")
                }
            },
            error: function e() {
                alert("net error")
            }
        })
    })
});
$(function() {
    var e = function e() {
        var t = $(".J-contact-fix");
        if (t.length === 0) {
            return
        }
        var i = !!t.parents(".sr-layout-nav:first").length ? t.parents(".sr-layout-nav:first") : t.parents(".sr-layout-extra:first");
        var r = !!$(".J-about-nav").length ? $(".J-about-nav").height() + 120 : 40;
        var a;
        var o;
        a = o = !!$(".J-about-nav").length ? i.offset().top - 40 : t.offset().top - 40;
        var n = function e() {
            return !!$(".J-about-nav").length ? i.offset().top - 40 : t.offset().top - 40
        };
        var s = new JFixed({
            carrier: t[0],
            isRestore: true,
            position: {
                top: r
            },
            triggerTop: o
        });
        var l = true;
        s.on("fixed", function() {
            t.css("width", i.width());
            l = true
        });
        $(".J-proGroup-more").click(function() {
            setTimeout(function() {
                s.triggerTop(n())
            }, 300)
        });
        $(".J-proGroup-less").click(function() {
            s.triggerTop(a);
            setTimeout(function() {
                s.triggerTop(n())
            }, 300)
        });
        s.on("unfixed", function() {
            t.css("width", "auto");
            if (l && o != n() && window.innerWidth >= 1024) {
                l = false;
                s.triggerTop(n())
            }
        });
        $(window).resize(function() {
            t.css("width", i.width())
        });
        s.fixed()
    };
    if (window.innerWidth >= 1024) {
        e()
    } else {
        var t = true;
        $(window).resize(function() {
            if (window.innerWidth >= 1024 && t) {
                setTimeout(function() {
                    e()
                }, 200);
                t = false
            }
        })
    }
});
(function() {
    var t = {
        target: ".J-show-comDialog",
        data: {}
    };

    function e(e) {
        this.config = $.extend({}, t, e);
        this._init()
    }
    e.prototype = {
        constructor: this,
        _init: function e() {
            var t = this;
            this.wrapTmpl = '<div class="sr-comshow-dialog J-comshow-dialog-wrap">' + '<div class="sr-comshow-cover J-comshow-cover"></div>' + '<div class="sr-comshow-wrap sr-proSlide J-comshow-wrapper"> ' + '<div class="sr-comshow-loading J-comshow-loading"></div>' + '<div class="sr-comshow-cnt swiper-container J-comshow-container J-loaded-show" style="display:none;"> ' + '<div class="sr-comshow-list J-comshow-list swiper-wrapper"></div>' + "</div>" + '<div class="sr-comshow-close J-comshow-close"><i class="ob-icon icon-delete"></i></div>    ' + '<div class="sr-comshow-btn btn-left J-proSlide-dialog-left" style="display:none;"><i class="ob-icon icon-left"></i></div>' + '<div class="sr-comshow-btn btn-right J-proSlide-dialog-right" style="display:none;"><i class="ob-icon icon-right"></i></div>' + "</div>" + "</div>";
            this.listTmpl = "{{ $.each(data, function(i,obj){ }}" + '<div class="swiper-slide J-comshow-item" {{if(obj.selected){}}cz-selected="selected"{{}}}>' + '<div class="sr-comshow-item J-scroll-item">' + '<div class="item-title">' + '<div class="title-txt">{{-obj.subject}}</div>' + '<span class="title-date">{{-obj.sciInptim}}</span>' + "</div>" + '<div class="item-pic">' + '<img src="{{=(obj.picUrl || "https://www.micstatic.com/common/img/noimage/no_photo_en160_28a2a216.png")}}" alt="" class="">' + "</div>" + '<div class="item-cnt rich-text cf J-item-cnt">{{=obj.diyDesctipt}}</div>' + "</div>" + "</div>" + "{{ }); }}";
            this.data = this.config.data;
            this.wrap = ".J-comshow-dialog-wrap";
            this.slider = null;
            $(this.config.target).off("click").click(function(e) {
                e.preventDefault();
                t.$target = $(this);
                if (!$(this.wrap).length) {
                    t._appendWrap();
                    t.showDialog()
                } else {
                    t.showDialog()
                }
            })
        },
        _bindEvent: function e() {
            var t = this;
            $(".J-comshow-close", $(this.wrap)).click(function() {
                t._resetDom();
                t.slider && t.slider.slideTo(0) && t.slider.destroy();
                $(t.wrap).remove()
            });
            $(window).resize(function() {
                if ($(this).height() < 800) {
                    !!$(".J-comshow-wrapper").length && $(".J-comshow-wrapper").addClass("wrap-min")
                }
            });
            forbiddenScroll($(this.wrap), ".swiper-slide-active .J-scroll-item")
        },
        _appendWrap: function e() {
            $("body").append(this.wrapTmpl);
            this._bindEvent()
        },
        _resetDom: function e() {
            $(".J-comshow-list", $(this.wrap)).empty();
            $(".J-proSlide-dialog-left,.J-proSlide-dialog-right").hide();
            $(".J-comshow-loading").show();
            $(".J-loaded-show").hide()
        },
        showDialog: function e() {
            var r = this;
            $(this.wrap).show();
            this.getData(function(e) {
                $(r.wrap).find(".J-comshow-loading").hide();
                $(r.wrap).find(".J-loaded-show").show();
                var t = "";
                var i = template(r.listTmpl);
                (typeof ABOUT_LANG !== "undefined" && ABOUT_LANG.lang === "sa" || typeof i18n !== "undefined" && i18n.currLocal === "sa") && e.reverse();
                $(".J-comshow-list", $(r.wrap)).append(i({
                    data: e
                }));
                if ($(window).height() < 800) {
                    $(".J-comshow-wrapper").addClass("wrap-min")
                }
                $(".J-comshow-item").each(function(e) {
                    if ($(this).attr("cz-selected") === "selected") {
                        t = e
                    }
                });
                r.slider = new Swiper($(".J-comshow-container"), {
                    loop: false,
                    autoplay: 0,
                    initialSlide: t,
                    prevButton: ".J-proSlide-dialog-left",
                    nextButton: ".J-proSlide-dialog-right",
                    simulateTouch: false,
                    speed: 300
                });
                if ($(r.wrap).find(".J-comshow-item").length > 1) {
                    $(".J-proSlide-dialog-left,.J-proSlide-dialog-right").show()
                }
                r.resetHeight()
            })
        },
        resetHeight: function e() {},
        getData: function e(a) {
            var o = this;
            var t = o.$target.find("[name=logUserName]").length ? o.$target.find("[name=logUserName]") : $("#loginUserName");
            var i = t.length > 0;
            if (i) {
                var r = t.val();
                var n = "//" + r + ".en.made-in-china.com/getDiyItemDetail4About"
            } else {
                var n = "/getDiyItemDetail4About"
            }
            var s = {
                selectedDiyCategoryId: o.$target.find("[name=selectedDiyCategoryId]").val(),
                selectedItemId: o.$target.find("[name=selectedItemId]").val()
            };
            var l = typeof ABOUT_LANG !== "undefined" ? ABOUT_LANG.lang : typeof i18n !== "undefined" ? i18n.currLocal : "";
            if (l) {
                s.lan = l
            }
            $.ajax({
                url: n,
                crossDomain: i,
                xhrFields: {
                    withCredentials: i
                },
                data: _objectSpread({}, s),
                dataType: "json",
                success: function e(t) {
                    if (t) {
                        var i = [];
                        if (o.config.isDiscover) {
                            for (var r = 0; r < t.length; r++) {
                                if (t[r].selected) {
                                    i.push(t[r]);
                                    break
                                }
                            }
                            a && a(i)
                        } else {
                            a && a(t)
                        }
                    }
                },
                error: function e() {}
            })
        }
    };
    window.ComShowDialog = e
})();
void
function(u) {
    var p;
    var l = function e(t, i, r, a, o, n, s, l) {
        var c = {
            el: t,
            videoUrl: i,
            oriEl: l || $(t).parents("[faw-video]")[0],
            autoplay: a || false,
            blank: "/vblank.html",
            token: r || "",
            muted: !!s,
            perf: true
        };
        var d = null;
        try {
            d = JSON.parse(document.querySelector("#video-subtitle").innerHTML.replace(/^\s+|\s+$/g, ""))
        } catch (e) {}
        if (d && d.length) {
            c.subtitles = d
        }
        p = new VideoPlayer(c);
        var f = false;
        p.on("play", function(e) {
            u.localStorage && u.localStorage.setItem("autoPlayVideo", "1");
            u.storage && u.storage("set", "autoPlayVideo", "1");
            if (!f) {
                f = true
            }
        });
        p.on("ended", function(e) {
            f = false
        });
        p.on("error", function() {
            if (n) {
                p.dispose();
                e(t, n, r, a, o)
            }
            f = false
        });
        p.on("loadstart", function(e) {});
        p.on("loadeddata", function(e) {});
        p.on("pause", function(e) {
            u.localStorage && u.localStorage.removeItem("autoPlayVideo");
            u.storage && u.storage("remove", "autoPlayVideo")
        })
    };
    var e = function e(t, i) {
        var r = i.videoUrl.split("$_$_$");
        var a = r[1] || "";
        var o = r[0].split("$_$");
        var n = o[0];
        var s = o[1] || "";
        l(t, n, s, i.autoplay, i.vid, a, i.muted, i.oriEl)
    };
    var t = function e(t) {};
    u.resolveAndPlayVideo = e;
    u.playVideo = l;
    u.closeVideoDialog = t
}.call(this, window);
void
function() {
    var t = function e() {
        $(".J-tab-item").each(function(e) {
            if ($(this).hasClass("current")) {
                $(".J-block").addClass("pad-block");
                $(".J-block").eq(e).removeClass("pad-block")
            }
        })
    };
    $(".J-view-report").on("click", function(e) {
        e.preventDefault();
        document.domain = "made-in-china.com";
        var r = "//www.made-in-china.com/auditReport.do?xcase=viewReportDetail";
        var a = this.getAttribute("data-commid");
        var o = this.getAttribute("data-reportid");
        var n = this.getAttribute("data-auditorganization");
        var t = $("#loginUserName").length > 0;
        if (t) {
            var i = $("#loginUserName").val();
            var s = "//" + i + ".en.made-in-china.com"
        } else {
            var s = ""
        }
        $.ajax({
            url: s + (document.getElementById("rootpath") == null ? "" : document.getElementById("rootpath").value) + "/head/headInfo.do",
            type: "post",
            async: false,
            crossDomain: t,
            xhrFields: {
                withCredentials: t
            },
            dataType: "json",
            success: function e(t) {
                var i = r + "&comId=" + a + "&recId=" + o + "&org=" + n;
                if (t[0].status == "1") {
                    window.open(s + "/readFreeTransition?" + "comId=" + a + "&recId=" + o + "&org=" + n)
                } else {
                    login();
                    return false
                }
            }
        })
    });
    $(".J-tab-item").click(function(e) {
        e.preventDefault();
        $(".J-tab-item").removeClass("current");
        $(this).addClass("current");
        t()
    });
    var e = 0;
    if (typeof ABOUT_LANG !== "undefined" && ABOUT_LANG.lang === "sa") {
        e = $(".J-comProfile-container").find(".J-comProfile-slide").length - 1;
        $(".J-comProfile-container").each(function() {
            var e = $(this).find(".J-comProfile-slide");
            for (var t = e.length - 1; t > -1; t--) {
                $(this).find(".swiper-wrapper").append(e[t])
            }
        })
    }
    new ProSlide({
        wrapper: ".J-comProfile-slider",
        container: ".J-comProfile-container",
        slideCls: ".J-comProfile-slide",
        paginationCls: ".J-comProfile-pagination",
        leftCls: ".J-comProfile-left",
        rightCls: ".J-comProfile-right",
        initialSlide: e,
        lazyLoading: true
    });
    var i = function e() {
        var t = $(".J-about-nav");
        var i = t.parents(".sr-layout-nav:first");
        var r = new JFixed({
            carrier: t[0],
            isRestore: true,
            position: {
                top: 40
            },
            triggerTop: t.offset().top - 40
        });
        r.on("fixed", function() {
            t.css("width", i.width())
        });
        r.on("unfixed", function() {
            t.css("width", "auto")
        });
        $(window).resize(function() {
            t.css("width", i.width())
        });
        r.fixed()
    };
    if ($(window).width() > 1024) {
        i()
    } else {
        var r = true;
        $(window).resize(function() {
            if ($(window).width() > 1024 && r) {
                setTimeout(function() {
                    i()
                }, 200);
                r = false
            }
        })
    }
    $(".J-about-nav-item").each(function(t) {
        $(this).click(function(e) {
            e.preventDefault();
            $("html,body").animate({
                scrollTop: $(".J-block").eq(t).offset().top - 40
            }, 500)
        })
    });
    var a = function e() {
        $(".J-block").each(function(e) {
            if ($(window).scrollTop() > $(this).offset().top - 120) {
                $(".J-about-nav-item").removeClass("selected");
                $(".J-about-nav-item").eq(e).addClass("selected")
            }
        })
    };
    $(window).scroll(function() {
        a()
    });
    $(".J-diy-wrapper").each(function() {
        var e = 0;
        if (typeof ABOUT_LANG !== "undefined" && ABOUT_LANG.lang === "sa") {
            e = $(this).find(".J-proSlide-slide").length;
            var t = $(this).find(".J-proSlide-slide");
            if (t.length < 4) {
                $(this).find(".swiper-wrapper").css({
                    direction: "rtl"
                })
            } else {
                for (var i = t.length - 1; i > -1; i--) {
                    $(this).find(".swiper-wrapper").append(t[i])
                }
            }
        }
        new ProSlide({
            wrapper: $(this),
            container: $(this).find(".J-diy-container"),
            slidesPerView: 4,
            slidesPerGroup: 4,
            spaceBetween: 20,
            loop: false,
            autoplay: 0,
            initialSlide: e
        })
    });
    var o = "" + '<div class="video-cnt">' + '\t<div class="video-main J-video"></div>' + '\t<div class="relatedViedo J-relatedViedo">' + '\t\t<div class="relatedViedo-wrap J-relatedViedo-wrap"></div>' + "\t</div>" + "</div>";
    var n = $(".J-play-video");
    if (n.length) {
        n.on("click", function(e) {
            e.preventDefault();
            e.stopPropagation();
            var i;
            try {
                i = JSON.parse($.trim($("script[type='text/data-video']", this).html()))
            } catch (e) {}
            if (!i) {
                return
            }
            new artDialog({
                title: i.name || "Video",
                content: o,
                lock: true,
                fixed: true,
                skin: "video-dlg",
                padding: 0,
                init: function e() {
                    var t = $(".J-video", this.content());
                    i["oriEl"] = n[0];
                    resolveAndPlayVideo(t[0], i)
                }
            })
        })
    }
    $(".J-comProfile-slider img").each(function() {
        if (!!$(this).attr("lazysrc")) {
            $(this).attr("src", $(this).attr("lazysrc"))
        }
    });
    new ComShowDialog;
    var s = $(".J-txt-wrap").find(".J-txt-cnt");
    if (s[0] && s[0].offsetHeight < s[0].scrollHeight) {
        s.siblings(".J-show-more").show()
    } else {
        s.siblings(".J-show-more").hide()
    }
    $(document).on("click", ".J-show-large-image", function() {
        var i = [];
        var e = $(this).attr("data-swiper-slide-index") || 0;
        $(".J-show-large-image").each(function() {
            var e = $(this).attr("data-swiper-slide-index") || 0;
            var t = $(this).find("img").attr("origsrc");
            i[e] = t
        });
        var t = document.getElementById("J-large-image-Temp").innerHTML;
        var r = template(t, {
            imageUrls: i
        });
        $("body").append(r);
        forbiddenScroll($(".J-largeImage"));
        $(".J-largeImage-close").on("click", function() {
            $(".J-largeImage").remove()
        });
        if (!i[0]) {
            i.splice(0, 1);
            e--
        }
        var a = new ProSlide({
            wrapper: ".J-largeImg-wrapper",
            container: ".J-largeImg-container",
            slideCls: ".J-largeImg-slide",
            pagination: false,
            leftCls: ".J-largeImg-left",
            rightCls: ".J-largeImg-right",
            autoplay: false,
            initialSlide: +e
        })
    }).on("click", ".J-show-license-photo", function() {
        var e = $(this).attr("src");
        var t = document.getElementById("J-large-image-Temp").innerHTML;
        var i = template(t, {
            imageUrls: [e]
        });
        $("body").append(i);
        forbiddenScroll($(".J-largeImage"));
        $(".J-largeImage-close").on("click", function() {
            $(".J-largeImage").remove()
        });
        var r = new ProSlide({
            wrapper: ".J-largeImg-wrapper",
            container: ".J-largeImg-container",
            slideCls: ".J-largeImg-slide",
            pagination: false,
            leftCls: ".J-largeImg-left",
            rightCls: ".J-largeImg-right",
            autoplay: false
        })
    });

    function l() {
        if ($(window).width() > 1024) {
            $("html,body").animate({
                scrollTop: $(".J-block").eq(4).offset().top - 40
            }, 500)
        } else {
            $(".J-tab-item").removeClass("current");
            $(".J-tab-item").eq(4).addClass("current");
            $(".J-block").addClass("pad-block");
            $(".J-block").eq(4).removeClass("pad-block")
        }
    }
    $(".rating-score span").on("click", function() {
        l()
    })
}.call(this);
//# sourceMappingURL=../../../../../__sources__/athena/2017/js/pages/about/about_088c0bc5.js.map