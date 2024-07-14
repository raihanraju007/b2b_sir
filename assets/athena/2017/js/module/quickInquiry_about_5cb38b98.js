document.domain = /[\w\-]+\.[\w\-]+$/.exec(window.location.hostname)[0];
var hisLoginStatus = false,
    hisformId = "",
    senderInfo = null,
    resetFlag = false,
    isShowSideEmail = false,
    hmToken = "",
    captchaIns, captchaId = "",
    logError = false;
var submitForm = "";
var submitBtn = "";
var captcha;
$(function() {
    $.ajax({
        type: "get",
        url: "//www.made-in-china.com/inquiryabout.do?xcase=getCookieSendEmail",
        dataType: "jsonp",
        success: function e(n) {
            if (n && n.senderMail) {
                if (document.forms["inqueryForm"]) {
                    document.forms["inqueryForm"].senderMail.value = n.senderMail
                }
                if (document.forms["sideInqueryForm"]) {
                    document.forms["sideInqueryForm"].senderMail.value = n.senderMail
                }
            }
        }
    });
    var e = $("#loginStatu").val();
    if (e && e != 0) {
        hisLoginStatus = true
    }
    if ($("#captcha").length > 0) {
        var n = $("#mlanLanguage").val();
        var i = {
            zh: "zh-CN",
            en: "en-us",
            es: "es",
            pt: "pt",
            fr: "fr",
            ru: "ru",
            de: "de",
            sa: "sa",
            it: "it",
            nl: "nl",
            jp: "jp",
            kr: "kr",
            hi: "hi",
            id: "id",
            vi: "vi",
            th: "th",
            tr: "tr"
        };
        var t;
        if (n) {
            if (i[n]) {
                t = i[n]
            } else {
                t = n
            }
        } else {
            t = "en-us"
        }
        captchaId = $(".J-hmCaptchaId").val();
        var r = "https://www.micstatic.com/common/js/business/plugs/rdcTest/rdcTest_a84e7128.js";
        Promise.all([loadAsyncScript("https://captcha.micstatic.com/js/FCaptcha-3.1.1.min.js"), loadAsyncScript(r)]).finally(function() {
            if (typeof RdcTest != "undefined") {
                captcha = new RdcTest({
                    captchaId: captchaId,
                    lan: t,
                    protocol: location.protocol + "//"
                })
            }
            initQuickInquiry()
        })
    } else {
        initQuickInquiry()
    }
    $(".J-side-contSupplier-message").on("focus", function() {
        if (!isShowSideEmail) {
            isShowSideEmail = true;
            $(".J-contSupplier-email-field").show("slow")
        }
    })
});

function loadAsyncScript(t) {
    return new Promise(function(e, n) {
        var i = document.createElement("script");
        i.type = "text/javascript";
        if (i.readyState) {
            i.onreadystatechange = function() {
                if (i.readyState === "complete" || i.readyState === "loaded") {
                    e()
                }
            }
        } else {
            i.onload = function() {
                e()
            }
        }
        i.src = t;
        document.head.appendChild(i)
    })
}

function logErrorFunc() {
    $.ajax({
        type: "post",
        url: "//www.made-in-china.com/sendInquiry/hmstat/",
        data: {
            captchaId: captchaId,
            mail: $("#" + submitForm).find('input[name="senderMail"]').val(),
            content: $("#" + submitForm).find("#inquiryContent").val()
        },
        dataType: "jsonp",
        success: function e(n) {}
    })
}

function initQuickInquiry() {
    if ($("#inqueryForm").length) {
        var n = inquiryFormValidate("inqueryForm");
        $("#inqueryForm").bind("submit", function(e) {
            quickRequestFormLog();
            e.preventDefault();
            if (n.isValidate()) {
                if (captcha && captcha.instance) {
                    submitForm = "inqueryForm";
                    submitBtn = "inquirySend";
                    captcha.onSuccess(function(e) {
                        hmToken = e.captchaVerification;
                        submitFun("inqueryForm", "inquirySend")
                    });
                    captcha.onError(function(e) {
                        logErrorFunc()
                    });
                    captcha.showCaptcha()
                } else {
                    submitFun("inqueryForm", "inquirySend")
                }
            }
        })
    }
    if ($("#sideInqueryForm").length) {
        var i = inquiryFormValidate("sideInqueryForm");
        $("#sideInqueryForm").bind("submit", function(e) {
            quickRequestFormLog();
            e.preventDefault();
            if (i.isValidate()) {
                if (captcha && captcha.instance) {
                    submitForm = "sideInqueryForm";
                    submitBtn = "sideInquirySend";
                    captcha.onSuccess(function(e) {
                        hmToken = e.captchaVerification;
                        submitFun("sideInqueryForm", "sideInquirySend")
                    });
                    captcha.onError(function(e) {
                        logErrorFunc()
                    });
                    captcha.showCaptcha()
                } else {
                    submitFun("sideInqueryForm", "sideInquirySend")
                }
                var n = new Image;
                n.onload = n.onerror = function() {
                    n = n.onload = n.onerror = null
                };
                n.src = "//stat.made-in-china.com/popup/common.html?t=9"
            }
        })
    }
}

function submitFun(e, n) {
    $("#" + n).addClass("btn-disabled").attr("disabled", "disabled");
    if (senderInfo && !hisLoginStatus && hisformId === e) {
        senderInfo.show();
        var i = $(senderInfo.DOM.content[0]).find("iframe")[0].contentWindow;
        initDialog(hisLoginStatus, i, false, e, n)
    } else {
        senderInfoDialog(e, n, hisLoginStatus)
    }
    hisformId = e;
    senderInfo && senderInfo.lock();
    senderInfo && senderInfo.position("50%", "33%")
}

function quickRequestFormLog() {
    var e = $("#showRoomUrl").val().replace(".html", "_1.html") + "&qkSendStep=second";
    $.ajax({
        type: "get",
        url: e,
        dataType: "jsonp",
        success: function e(n) {}
    })
}

function inquiryFormValidate(e) {
    var i = document.forms[e],
        n = i.content,
        t = window._GLOBAL_ERROR_MESSAGE_TMPL_ || '<div class="feedback-block"><div class="error">{Message}</div></div>';

    function r(e, n) {
        $(n).parent().find(".feedback-block").remove();
        $(n).parent().append(t.replace("{Message}", e))
    }
    $(i).on("blur", "[name=senderMail]", function(e) {
        if (o()) {
            $(e.target).parent().find(".feedback-block").remove()
        } else {
            r()
        }
    });
    $(n).bind("blur", function(e) {
        if (s()) {
            $(e.target).parent().find(".feedback-block").remove()
        } else {
            r()
        }
    });

    function o() {
        var e = true;
        var n = $(i).find("[name=senderMail]")[0];
        if (!/\S+/.test(n.value)) {
            r(ABOUT_LANG.errorMSG.senderMail.required, n);
            e = false;
            return e
        }
        if (!a(n.value)) {
            r(ABOUT_LANG.errorMSG.senderMail.email, n);
            e = false
        }
        return e
    }

    function a(e) {
        if (!/^[-\.\w]+@[-\.a-zA-Z0-9]+\.[-\.a-zA-Z0-9]+$/.test(e)) {
            return false
        }
        var n = e.split("@")[0];
        var i = e.split("@")[1];
        if (!/^.*[A-Za-z0-9]+.*$/.test(n)) {
            return false
        }
        if (/(^\..*)|(.*\.$)/.test(n)) {
            return false
        }
        if (/(\.){2,}/.test(n)) {
            return false
        }
        var t = i.lastIndexOf(".");
        var r = i.substr(0, t);
        var o = i.substr(t + 1);
        if (/(^[\.-].*)|(.*[\.-]$)/.test(r)) {
            return false
        }
        if (/(\.){2,}/.test(r)) {
            return false
        }
        if (!/^[a-zA-Z]+$/.test(o)) {
            return false
        }
        return true
    }

    function s() {
        var e = true;
        if (!/\S+/.test(n.value)) {
            r(ABOUT_LANG.errorMSG.content.required, n);
            e = false
        }
        if (n.value.length < 20 || n.value.length > 4e3) {
            r(ABOUT_LANG.errorMSG.content.maxLength, n);
            e = false
        }
        return e
    }
    return {
        isValidate: function e() {
            var n = o(),
                i = s();
            return n && i
        }
    }
}

function senderInfoDialog(i, t, r, o) {
    var e = "//www.made-in-china.com/sendInquiry/showQuickForm/?plant=" + ABOUT_LANG.lang + "&region=" + ABOUT_LANG.lang + "_quick";
    var n = "display:none";
    if ($.browser.msie && parseInt($.browser.version) <= 7) {
        n = "visibility:hidden;"
    }
    senderInfo = new art.dialog({
        fixed: true,
        show: o ? false : true,
        title: r ? "" : ABOUT_LANG.dialogTitle,
        duration: 0,
        content: '<div class="aui_loading" style="margin:60px auto; width:540px; height:55px; background:url(https://img.made-in-china.com/img/athena/loading-big.gif) no-repeat center center;"></div>' + '<iframe id="J-quick-inquiry-dialog" src="' + e + '" frameborder="0" style="max-height:550px;overflow-x: hidden;' + n + '"></iframe>',
        init: function e() {
            var n = this;
            resetFlag = false;
            $(this.DOM.content[0]).find("iframe").bind("load", function() {
                initDialog(r, $(n.DOM.content[0]).find("iframe")[0].contentWindow, o, i, t)
            })
        },
        close: function e() {
            asyncIsLogin(function(e) {
                if (e && e !== hisLoginStatus) {
                    window.location.reload()
                } else {
                    $("#" + t).removeClass("btn-disabled").removeAttr("disabled");
                    if (resetFlag) {
                        $("#" + i).find("#inquiryContent").val("");
                        senderInfo.close();
                        senderInfo = null
                    }
                }
            });
            if (!resetFlag) {
                senderInfo.hide();
                return false
            }
        }
    })
}

function initDialog(e, n, i, t, r) {
    var o = document.forms[t].content.value;
    var a = document.forms[t].senderMail.value;
    n.loginClickHandle = function() {
        login && login("&loginUserName=" + a, function(e, n, i) {
            senderInfoDialog(e, n, i);
            senderInfo && senderInfo.lock();
            senderInfo && senderInfo.position("50%", "33%")
        });
        senderInfo.close();
        senderInfo = null;
        $("#" + r).removeClass("btn-disabled").removeAttr("disabled")
    };
    var s = $("#showRoomUrl").val().replace(".html", "_1.html") + "&qkSendStep=second";
    if (t === "sideInqueryForm") {
        s += "&sc=1"
    }
    n.setForm && n.setForm({
        senderMail: a,
        content: o,
        requestUrl: s,
        hmToken: hmToken
    });
    if (!n.setForm) {
        resetFlag = true
    }
    if (senderInfo && !e || !n.setForm) {
        $(senderInfo.DOM.content[0]).find("iframe").css("visibility", "visible");
        $(senderInfo.DOM.content[0]).find("iframe").show();
        $(senderInfo.DOM.content[0]).find(".aui_loading").remove();
        resizeForm()
    }
    var d = function e(n) {
        var i = n.find(".aui_loading:visible");
        var t = n.find("iframe");
        var r = i.length > 0;
        var o = t.length <= 0 || t.filter(":hidden").length > 0 || t.css("visibility") === "hidden";
        return r || o
    };
    var c = function e(n) {
        var i = n.find(".aui_loading:visible");
        var t = n.find("iframe");
        if (i.length) {
            i.remove()
        }
        if (t.length) {
            t.css("visibility", "visible");
            t.show()
        }
    };
    if (n) {
        var l = $(senderInfo.DOM.content[0]);
        n.handleFormInvalid = function() {
            d(l) && c(l)
        }
    }
    if (e && !i) {
        n && n.autoSubmit && n.autoSubmit(hmToken)
    }
    if (n.result) {
        senderInfo.title("")
    }
}

function _resizeForm() {
    var e;
    if (senderInfo) {
        e = $(senderInfo.DOM.content[0]).find("iframe")[0];
        $(e).css({
            width: e.contentWindow.document.body.clientWidth,
            height: e.contentWindow.document.body.clientHeight + 20
        });
        senderInfo._reset()
    }
    if (window.senderQAInfo) {
        e = $(senderQAInfo.DOM.content[0]).find("iframe")[0];
        $(e).css({
            width: e.contentWindow.document.body.clientWidth,
            height: e.contentWindow.document.body.clientHeight + 20
        });
        senderQAInfo._reset()
    }
}
var resizeForm = function e() {
    setTimeout(_resizeForm, 25)
};
//# sourceMappingURL=../../../../__sources__/athena/2017/js/module/quickInquiry_about_5cb38b98.js.map