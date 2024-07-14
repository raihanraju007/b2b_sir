function _toConsumableArray(e) {
    return _arrayWithoutHoles(e) || _iterableToArray(e) || _unsupportedIterableToArray(e) || _nonIterableSpread()
}

function _nonIterableSpread() {
    throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
}

function _unsupportedIterableToArray(e, t) {
    if (!e) return;
    if (typeof e === "string") return _arrayLikeToArray(e, t);
    var n = Object.prototype.toString.call(e).slice(8, -1);
    if (n === "Object" && e.constructor) n = e.constructor.name;
    if (n === "Map" || n === "Set") return Array.from(e);
    if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(e, t)
}

function _iterableToArray(e) {
    if (typeof Symbol !== "undefined" && e[Symbol.iterator] != null || e["@@iterator"] != null) return Array.from(e)
}

function _arrayWithoutHoles(e) {
    if (Array.isArray(e)) return _arrayLikeToArray(e)
}

function _arrayLikeToArray(e, t) {
    if (t == null || t > e.length) t = e.length;
    for (var n = 0, i = new Array(t); n < t; n++) i[n] = e[n];
    return i
}

function ownKeys(t, e) {
    var n = Object.keys(t);
    if (Object.getOwnPropertySymbols) {
        var i = Object.getOwnPropertySymbols(t);
        e && (i = i.filter(function(e) {
            return Object.getOwnPropertyDescriptor(t, e).enumerable
        })), n.push.apply(n, i)
    }
    return n
}

function _objectSpread2(t) {
    for (var e = 1; e < arguments.length; e++) {
        var n = null != arguments[e] ? arguments[e] : {};
        e % 2 ? ownKeys(Object(n), !0).forEach(function(e) {
            _defineProperty2(t, e, n[e])
        }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(n)) : ownKeys(Object(n)).forEach(function(e) {
            Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(n, e))
        })
    }
    return t
}

function _defineProperty2(e, t, n) {
    t = _toPropertyKey(t);
    if (t in e) {
        Object.defineProperty(e, t, {
            value: n,
            enumerable: true,
            configurable: true,
            writable: true
        })
    } else {
        e[t] = n
    }
    return e
}

function _toPropertyKey(e) {
    var t = _toPrimitive(e, "string");
    return _typeof(t) === "symbol" ? t : String(t)
}

function _toPrimitive(e, t) {
    if (_typeof(e) !== "object" || e === null) return e;
    var n = e[Symbol.toPrimitive];
    if (n !== undefined) {
        var i = n.call(e, t || "default");
        if (_typeof(i) !== "object") return i;
        throw new TypeError("@@toPrimitive must return a primitive value.")
    }
    return (t === "string" ? String : Number)(e)
}

function _typeof(e) {
    "@babel/helpers - typeof";
    return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
        return typeof e
    } : function(e) {
        return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
    }, _typeof(e)
}
void
function() {
    var e = location.hostname;
    if (/^[\d\.]+$/.test(e)) {
        return
    }
    var n = /[\w\-]+\.[\w\-]+$/.exec(e)[0];
    var t = function e() {
        var t = false;
        var n = document.createElement("canvas");
        if (n.toDataURL) {
            t = /^data:image\/webp/.test(n.toDataURL("image/webp"))
        }
        return t
    };
    var i = function e(t) {
        var n = new Image;
        n.onload = function() {
            t(true)
        };
        n.onerror = function() {
            t(false)
        };
        n.src = "data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAUAmJaQAA3AA/vz0AAA="
    };
    var r = function e(t) {
        document.cookie = "webp=" + (t || "t") + "; path=/; domain=." + n + "; expires=" + new Date("2099-12-31").toUTCString()
    };
    if (t()) {
        r("t")
    } else {
        i(function(e) {
            if (e) {
                r("t")
            } else {
                r("f")
            }
        })
    }
}.call(this);
var Lass = window.Lass || {};
void
function() {
    var l = this.util = this.util || {};
    l.type = function(e) {
        var t, n = /\{\s*\[native\s*code\]\s*\}/i;
        null === e ? t = "null" : "undefined" === typeof e ? t = "undefined" : (t = Object.prototype.toString.call(e).match(/\w+/g)[1].toLowerCase(), "object" === t && n.test(e + "") && (t = "function"));
        return t
    };
    l.trim = function(e) {
        return (e + "").replace(/^[\s\u00A0]+|[\s\u00A0]+$/g, "")
    };
    l.extend = function() {
        var e = arguments.callee,
            t, n;
        "object" !== l.type(arguments[0]) ? (t = 1, n = !!arguments[0]) : (t = 0, n = !1);
        var i = arguments[t] || {};
        t = [].slice.call(arguments, t + 1);
        for (var r, a; t.length;)
            if (r = t.shift(), "object" === l.type(r)) {
                var o, s;
                for (s in r)
                    if (o = r[s], "object" === l.type(o)) {
                        if (o == window || o == document || "childNodes" in o && "nextSibling" in o && "nodeType" in o) {
                            if (n || !(s in i)) i[s] = o
                        } else if (o.jquery && /^[\d\.]+$/.test(o.jquery)) i[s] = o;
                        else {
                            a = l.type(i[s]);
                            if (!(s in i) || "undefined" === a || "null" === a) i[s] = {};
                            "object" === l.type(i[s]) && e(n, i[s], o)
                        }
                    } else if (n || !(s in i)) i[s] = o
            }
        return i
    };
    l.console = l.console || function(n) {
        var i = !0,
            e = {
                turn: function e(t) {
                    i = !!t
                },
                warn: function e() {}
            };
        return !n ? e : l.extend(!0, e, {
            warn: function e(t) {
                i && n.warn(t)
            }
        })
    }.call(window, window.console);
    l.indexOf = function(e, t, n) {
        var i = -1;
        n = ("number" === l.type(n) ? n : -1) + 1;
        for (var r = e.length; n < r; n++)
            if (e[n] === t) {
                i = n;
                break
            }
        return i
    };
    return l
}.call(Lass);
void
function() {
    var c = this.util,
        u = function e() {},
        f = {
            impl: function e(t, n) {
                "function" === c.type(n) && (this[t] = n)
            },
            mix: function e() {
                c.extend.apply(null, [!0, this].concat([].slice.call(arguments)))
            }
        },
        d = function e(t, n) {
            n = n || "impl super mix __getDefaultConfig __proto__ toString valueOf".split(" ");
            var i = c.extend(!0, {}, t);
            try {
                for (var r = 0; r < n.length; r++) delete i[n[r]]
            } catch (e) {}
            return i
        },
        h = function e(t, n) {
            var i = {},
                r = d(t),
                a;
            for (a in r) a in n && "function" === c.type(n[a]) && (i[a] = n[a]);
            return i
        },
        e = function i() {
            for (var i, e, r, t = [], n = 0; 3 > n; n++) t.push(c.type(arguments[n]));
            n = c.indexOf(t, "function");
            r = -1 === n ? u : arguments[n];
            for (n = -1; - 1 !== (n = c.indexOf(t, "object", n)) && !(!i && arguments[n].constructor === p ? i = arguments[n] : e || (e = arguments[n]), i && e););
            i || (i = {});
            e || (e = {});
            var a = e.config || {},
                o = [],
                s = e.inherit || u;
            e = e.mix || [{}];
            t = c.type(e);
            "object" === t ? e = [e] : "array" !== t && (e = [{}]);
            for (n = 0; n < e.length; n++) "object" === c.type(e[n]) && o.push(e[n]);
            e = null;
            var l = function e() {
                var t = h(s.prototype, this);
                this["super"] = c.extend(!0, {}, s.prototype, t);
                s.apply(this["super"], [].slice.call(arguments));
                t = d(this["super"]);
                c.extend(!0, this, t, {
                    __getDefaultConfig: function e() {
                        return a
                    }
                });
                this.mix.apply(this, o);
                for (var n in i) "function" === c.type(this[n]) && this[n].__IS_ABSTRACT_METHOD__ && (this[n] = function(t) {
                    var e = function e() {
                        i[t]()
                    };
                    e.__IS_ABSTRACT_METHOD__ = i[t].__IS_ABSTRACT_METHOD__;
                    var n = this;
                    e.impl = e.implement = function(e) {
                        n.impl(t, e)
                    };
                    return e
                }.call(this, n));
                this.constructor = arguments.callee;
                t = r.apply(this, [].slice.call(arguments));
                for (n in i)
                    if ("function" === c.type(this[n]) && this[n].__IS_ABSTRACT_METHOD__) i[n]();
                if ("object" === _typeof(t) && null !== t) return t
            };
            l.prototype = c.extend(!0, {}, f, i);
            l.extend = function(e) {
                var t = c.extend.apply(null, [!0, {}].concat([].slice.call(arguments)));
                c.extend.call(null, !0, l.prototype, t)
            };
            return l
        },
        t = this.Empty = new e,
        p = new e({
            inherit: t
        }, function(e, t) {
            var n, i;
            for (i in e) n = c.type(e[i]), "function" === n ? (this[i] = function(e, t) {
                return function() {
                    t && c.console.warn(e + " method is not implement.")
                }
            }.call(this, i, t), this[i].__IS_ABSTRACT_METHOD__ = !0) : this[i] = "object" === n ? c.extend(!0, {}, e[i]) : e[i]
        }),
        e = {
            Clazz: e,
            Abstract: p
        };
    c.extend(!0, this, e);
    c.extend(!0, window, e)
}.call(Lass);
void
function() {
    var s = this.util,
        a = function e(t, n, i) {
            this.handle = t;
            this.once = !!n;
            this.data = i || {}
        },
        l = function e(t, n) {
            this.type = t;
            this.data = n
        },
        e = function e() {
            this._ || (this._ = {});
            this._.events = {}
        };
    e.prototype = {
        __initEvent: function e(t) {
            this._.events[t] || (this._.events[t] = []);
            return this._.events[t]
        },
        __eventParams: function e(t, n) {
            var i = s.type(t);
            "function" === i ? n = [t] : "array" === i ? n = t : "object" !== i && (t = {});
            i = s.type(n);
            "function" === i ? n = [n] : "array" !== i && (n = []);
            return {
                data: t,
                handle: n
            }
        },
        __bindEvent: function e(t, n, i, r) {
            t = s.trim(t);
            t = this.__initEvent(t);
            n = this.__eventParams(n, i);
            for (i = 0; i < n.handle.length; i++) "function" === s.type(n.handle[i]) && t.push(new a(n.handle[i], !!r, s.extend(!0, {}, n.data)))
        },
        __search: function e(t, n) {
            for (var i = -1, r = 0; r < t.length; r++)
                if (t[r].handle === n) {
                    i = r;
                    break
                }
            return i
        },
        on: function e(t, n, i) {
            this.__bindEvent(t, n, i, !1);
            return this
        },
        one: function e(t, n, i) {
            this.__bindEvent(t, n, i, !0);
            return this
        },
        off: function e(t, n) {
            t = s.trim(t);
            "function" === s.type(n) && (n = [n]);
            if ("array" === s.type(n))
                for (var i = this.__initEvent(t), r, a = 0; a < n.length; a++) "function" === s.type(n[a]) && (r = this.__search(i, n[a]), -1 !== r && i.splice(r, 1));
            else this._.events[t] = [];
            return this
        },
        fire: function e(t, n) {
            t = s.trim(t);
            n = "object" === s.type(n) && n || {};
            for (var i = this.__initEvent(t), r = [], a, o = 0; o < i.length; o++) a = i[o], a.handle.call(this, new l(t, s.extend(!0, {}, a.data, n))), a.once && r.push(a.handle);
            this.off(t, r);
            return this
        }
    };
    this.Events = e
}.call(Lass);
void
function() {
    var n = this.util,
        e = this.Events,
        t = new this.Clazz({
            mix: {
                _: {},
                elems: {},
                config: {},
                setConfig: function e(t) {
                    return this.config = n.extend(!0, {}, this.__getDefaultConfig(), this.config, t)
                }
            },
            inherit: this.Empty
        });
    t.extend(new e);
    window.Component = this.Component = t
}.call(Lass);
var util = function(u) {
    var f = {};
    var o = function e() {};
    var r = Object.prototype.toString;
    f.type = function(e) {
        var t;
        var n = /\{\s*\[native\s*code\]\s*\}/i;
        if (e === null) {
            t = "null"
        } else if (typeof e === "undefined") {
            t = "undefined"
        } else {
            t = Object.prototype.toString.call(e).match(/\w+/g)[1].toLowerCase();
            if (t === "object" && n.test(e + "")) {
                t = "function"
            }
        }
        return t
    };
    f.trim = function(e) {
        return (e + "").replace(/^[\s\u00A0]+|[\s\u00A0]+$/g, "")
    };
    f.JSON = function(e) {
        var t = {};
        if (e) {
            t.stringify = e.stringify
        } else {
            t.stringify = function() {
                return ""
            }
        }
        t.parse = function(e) {
            var t;
            if (f.type(e) === "string") {
                try {
                    t = new Function("return " + e)()
                } catch (e) {
                    t = {}
                }
            } else {
                t = e
            }
            return t
        };
        return t
    }.call(this, window.JSON);
    f.extend = function() {
        var e = arguments.callee;
        var t, n;
        if (f.type(arguments[0]) !== "object") {
            t = 1;
            n = !!arguments[0]
        } else {
            t = 0;
            n = false
        }
        var i = arguments[t] || {};
        var r = [].slice.call(arguments, t + 1);
        var a;
        var o;
        while (r.length) {
            a = r.shift();
            if (f.type(a) !== "object") {
                continue
            }
            var s;
            for (var l in a) {
                s = a[l];
                if (f.type(s) === "object") {
                    if (s == window || s == document || "childNodes" in s && "nextSibling" in s && "nodeType" in s) {
                        if (!(!n && l in i)) {
                            i[l] = s
                        }
                        continue
                    }
                    o = f.type(i[l]);
                    if (!(l in i) || o === "undefined" || o === "null") {
                        i[l] = {}
                    }
                    if (f.type(i[l]) === "object") {
                        e(n, i[l], s)
                    }
                } else if (!(!n && l in i)) {
                    i[l] = s
                }
            }
        }
        return i
    };
    var n = Object.prototype.hasOwnProperty;
    var i = Array.prototype.indexOf;
    var t = Array.prototype.some;
    var s = Array.prototype.filter;
    var l = Array.prototype.map;
    var c = {};
    var d = f.each = function(e, t, n) {
        if (e == null) return;
        if ([].forEach && e.forEach === [].forEach) {
            e.forEach(t, n)
        } else if (e.length === +e.length) {
            for (var i = 0, r = e.length; i < r; i++) {
                if (t.call(n, e[i], i, e) === c) return
            }
        } else {
            for (var a in e) {
                if (f.has(e, a)) {
                    if (t.call(n, e[a], a, e) === c) return
                }
            }
        }
    };
    f.has = function(e, t) {
        return n.call(e, t)
    };
    f.identity = function(e) {
        return e
    };
    var h = f.some = f.any = function(e, i, r) {
        i || (i = f.identity);
        var a = false;
        if (e == null) return a;
        if (t && e.some === t) return e.some(i, r);
        d(e, function(e, t, n) {
            if (a || (a = i.call(r, e, t, n))) return c
        });
        return !!a
    };
    f.find = f.detect = function(e, i, r) {
        var a;
        h(e, function(e, t, n) {
            if (i.call(r, e, t, n)) {
                a = e;
                return true
            }
        });
        return a
    };
    f.contains = f.include = function(e, t) {
        if (e == null) return false;
        if (i && e.indexOf === i) return e.indexOf(t) != -1;
        return h(e, function(e) {
            return e === t
        })
    };
    f.filter = f.select = function(e, i, r) {
        var a = [];
        if (e == null) return a;
        if (s && e.filter === s) return e.filter(i, r);
        d(e, function(e, t, n) {
            if (i.call(r, e, t, n)) a[a.length] = e
        });
        return a
    };
    f.map = f.collect = function(e, i, r) {
        var a = [];
        if (e == null) return a;
        if (l && e.map === l) return e.map(i, r);
        d(e, function(e, t, n) {
            a[a.length] = i.call(r, e, t, n)
        });
        return a
    };
    f.invert = function(e) {
        var t = {};
        for (var n in e)
            if (f.has(e, n)) t[e[n]] = n;
        return t
    };
    f.keys = Object.keys || function(e) {
        if (e !== Object(e)) throw new TypeError("Invalid object");
        var t = [];
        for (var n in e)
            if (f.has(e, n)) t[t.length] = n;
        return t
    };
    f.values = function(e) {
        var t = [];
        for (var n in e)
            if (f.has(e, n)) t.push(e[n]);
        return t
    };
    var a = {
        escape: {
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#x27;",
            "/": "&#x2F;"
        }
    };
    a.unescape = f.invert(a.escape);
    var p = {
        escape: new RegExp("[" + f.keys(a.escape).join("") + "]", "g"),
        unescape: new RegExp("(" + f.keys(a.unescape).join("|") + ")", "g")
    };
    f.each(["escape", "unescape"], function(t) {
        f[t] = function(e) {
            if (e == null) return "";
            return ("" + e).replace(p[t], function(e) {
                return a[t][e]
            })
        }
    });
    f.indexOf = function(e, t) {
        if (e.indexOf) {
            return e.indexOf(t)
        }
        var n = -1;
        var i = 0,
            r = e.length;
        for (; i < r; i++) {
            if (e[i] === t) {
                n = i;
                break
            }
        }
        return n
    };
    f.unique = function(e) {
        var t = [];
        for (var n = 0, i = e.length; n < i; n++) {
            if (f.indexOf(t, e[n]) === -1) {
                t.push(e[n])
            }
        }
        return t
    };
    f.random = function() {
        var a = {};
        return function(e, t, n) {
            e = e || 0;
            t = f.type(t) === "number" && !isNaN(t) ? t === e ? t + 10 : t : e + 10;
            var i = e + "_" + t;
            if (!a[i]) {
                a[i] = []
            }
            if (a[i].length === t - e) {
                a[i] = [];
                f.type(n) === "function" && n.call(this)
            }
            var r;
            while (true) {
                r = e + ~~(Math.random() * (t - e));
                if (f.indexOf(a[i], r) === -1) {
                    a[i].push(r);
                    break
                }
            }
            return r
        }
    }.call(this);
    f.format = function() {
        var o = 24 * 60 * 60;
        var s = 60 * 60;
        var l = 60;
        var c = 1;
        var r = function e(t) {
            var n = Math.floor(t / o);
            var i = Math.floor((t - n * o) / s);
            var r = Math.floor((t - n * o - i * s) / l);
            var a = Math.floor((t - n * o - i * s - r * l) / c);
            return {
                days: n,
                hours: i,
                minutes: r,
                seconds: a
            }
        };
        var a = function e(t) {
            return t < 10 ? "0" + t : t + ""
        };
        return function(e, t) {
            t = t || "HH:mm:ss";
            var n = r(e);
            var i = {
                HH: a(n.hours),
                mm: a(n.minutes),
                ss: a(n.seconds)
            };
            return t.replace(/\w+/g, function(e) {
                return i[e]
            })
        }
    }.call(this);
    f.formatDate = function() {
        var d = function e(t, n) {
            n = n || 2;
            var i = "00000" + t;
            return i.substr(i.length - n, n)
        };
        return function(e, t) {
            var n = new Date(e);
            t = t || "yyyy-MM-dd HH:mm:ss";
            var i = n.getFullYear();
            var r = n.getMonth() + 1;
            var a = n.getDate();
            var o = n.getHours();
            var s = n.getMinutes();
            var l = n.getSeconds();
            var c = n.getMilliseconds();
            var u = n.getDay();
            var f = {
                yy: i.toString().match(/\d{2}$/)[0],
                yyyy: d(i, 4),
                M: r,
                MM: d(r),
                d: a,
                dd: d(a),
                H: o,
                HH: d(o),
                m: s,
                mm: d(s),
                s: l,
                ss: d(l),
                ms: c
            };
            return t.replace(/(\w+)/g, function(e, t) {
                return f[t] || t || ""
            })
        }
    }.call(this);
    f.formatNumber = function(e) {
        return (e + "").replace(/(?=(?:\B\d{3})+)(?:\.\d+|$)/g, ",")
    };
    f.flash = function(t, n) {
        var i = {
            enabled: false,
            version: 0
        };
        var r = "Shockwave Flash";
        var e = "ShockwaveFlash.ShockwaveFlash";
        var a = "application/x-shockwave-flash";
        var o = /\d+/g;
        var s = false;
        try {
            var l = new ActiveXObject(e);
            if (l) {
                i = {
                    enabled: true,
                    version: l.GetVariable("$version").match(o).join(".")
                }
            }
        } catch (e) {
            if (n && n[r] && n[r].description && !(t.mimeTypes && t.mimeTypes[a] && !t.mimeTypes[a].enabledPlugin)) {
                i = {
                    enabled: true,
                    version: /\d+\.\d+/.exec(n[r].description)[0]
                }
            }
        }
        return i
    }.call(this, window.navigator, window.navigator.plugins);
    f.console = function(n) {
        var i = false;
        var e = function e() {};
        var r = {
            ON: true,
            OFF: false
        };
        var t = {
            SWITCH: r,
            turn: function e(t) {
                i = r[!!t ? "ON" : "OFF"]
            },
            log: e,
            info: e,
            warn: e,
            error: e,
            debug: e
        };
        if (!n) {
            return t
        }
        if (!n.debug) {
            n.debug = n.log
        }
        if (!n.error) {
            n.error = n.warn
        }
        return f.extend(true, t, {
            log: function e(t) {
                if (i === r.ON) {
                    n.log(t)
                }
            },
            info: function e(t) {
                if (i === r.ON) {
                    n.info(t)
                }
            },
            warn: function e(t) {
                if (i === r.ON) {
                    n.warn(t)
                }
            },
            error: function e(t) {
                if (i === r.ON) {
                    n.error(t)
                }
            },
            debug: function e(t) {
                if (i === r.ON) {
                    n.debug(t)
                }
            }
        })
    }.call(window, window.console);
    f.preload = function() {
        var a = document.createElement("div");
        a.style.cssText = "position:absolute; top:0; left:0; width:1px; height:1px; overflow:hidden;";
        var t = false;
        var o = function e() {
            !t && document.body.appendChild(a);
            t = true
        };
        var s = function e() {};
        return function(e, t) {
            o();
            t = typeof t === "function" ? t : s;
            var n = document.createElement("img");
            var i = function e() {
                try {
                    n.onload = n.onerror = s;
                    a.removeChild(n)
                } catch (e) {}
            };
            var r = function e() {
                setTimeout(function() {
                    t.call(n, n);
                    i()
                }, 0)
            };
            n.onload = r;
            n.onerror = i;
            n.src = e;
            a.appendChild(n);
            if (n.complete) {
                r()
            }
        }
    }.call(this);
    f.scrollTo = function(e, t, n) {
        t = t || 0;
        e = e || 0;
        if (n) {
            u("html,body").animate({
                scrollTop: t,
                scrollLeft: e
            }, 404)
        } else {
            window.scroll(e, t)
        }
    };
    f.rect = function(e) {
        e = u(e)[0];
        var t = window.scrollTop || document.documentElement.scrollTop || document.body.scrollTop || 0;
        var n = window.scrollLeft || document.documentElement.scrollLeft || document.body.scrollLeft || 0;
        var i = e.getBoundingClientRect();
        if (u.browser && u.browser.msie && u.browser.version <= 7) {
            i = {
                top: i.top - 2,
                left: i.left - 2
            }
        }
        return {
            top: t + i.top,
            left: n + i.left
        }
    };
    f.domain = {
        main: "",
        toMain: function e() {
            return ""
        },
        isCross: function e() {
            return true
        }
    };
    var v = /[\w\-\_]+\.[\w\-\_]+$/.exec(window.location.hostname || "");
    if (v) {
        v = v[0];
        f.domain = {
            main: v,
            toMain: function e() {
                return document.domain = v
            },
            isCross: function e() {
                return document.domain !== window.location.hostname
            }
        }
    }
    f.copy = function(e) {
        var n = arguments.callee;
        var i;
        var t = r.call(e).match(/\w+/g)[1].toLowerCase();
        if (t === "object") {
            i = u.extend(true, {}, e)
        } else if (t === "array") {
            i = [];
            u(e).each(function(e, t) {
                i.push(n(t))
            })
        }
        return i
    };
    f.url = function(e, t) {
        var n = /\?(.+?)(#.*)?$/;
        var i = n;
        var r = {};
        var a = n.exec(e);
        if (a) {
            var o = /(\w+)\=(\w*)/g;
            a[1].replace(o, function(e, t, n) {
                r[t] = n
            })
        } else {
            i = /(\b|\B)(#.*)?$/
        }
        var s = u.extend(true, {}, r, t);
        var l = [];
        for (var c in s) {
            l.push(c + "=" + s[c])
        }
        return e.replace(i, "?" + l.join("&") + "$2")
    };
    f.cookie = function(e, a) {
        var r = {};
        var o = function e(t) {
            var n = new RegExp("(?:^|;\\s*)" + t + "\\=([^;]*)");
            var i = n.exec(a.cookie);
            return i ? i[1] : i
        };
        var s = function e(t, n, i, r, a) {
            var o = [t, "=", n + ""];
            if (i) {
                o.push("; ", "domain=", i.toString())
            }
            if (r) {
                o.push("; ", "path=", r.toString())
            }
            if (a && typeof a === "number" && !isNaN(a)) {
                a = (new Date).valueOf() + a;
                a = new Date(a)
            }
            if (a && a.valueOf && a.toUTCString) {
                o.push("; ", "expires=", a.toUTCString())
            }
            return document.cookie = o.join("")
        };
        var l = function e(t) {
            if (typeof t === "string") {
                t = t.split(/[\s\,\;]+/)
            }
            if (!t.length) {
                return
            }
            for (var n = 0; n < t.length; n++) {
                s(t[n], null, null, null, -1)
            }
        };
        var t = function e() {
            var t = a.cookie;
            var n = /([^;=\s]*)\=/g;
            var i = [];
            n.exec("");
            var r = null;
            while (r = n.exec(t)) {
                i.push(r[1])
            }
            l(i)
        };
        var n = function e(t, n, i) {
            if (!t) {
                return
            }
            if (n !== undefined) {
                i = u.extend(true, {}, r, i);
                return s(t, n, i.domain, i.path, i.expires)
            } else {
                return o(t)
            }
        };
        n.get = o;
        n.set = s;
        n.del = l;
        n.delAll = t;
        return n
    }(window, document);
    f.winSize = function() {
        var e = window;
        var t = document;
        var n = t.documentElement;
        var i = t.body;
        return {
            width: e.innerWidth || n.clientWidth || i.clientWidth || 0,
            height: e.innerHeight || n.clientHeight || i.clientHeight || 0
        }
    };
    f.tpl = function(e, t) {
        t = t || /\<\!--\s*#+\s*([\w\.]+)\s*#+\s*--\>([\w\W]*?)\<\!--\s*#+\s*end\s*#+\s*--\>/gi;
        e = e.toString() || "";
        t.exec("");
        var n = {};
        var i = null;
        while (i = t.exec(e)) {
            var r = i[1].split(".");
            var a = n;
            while (r.length) {
                var o = r.shift();
                if (!(o in a)) {
                    a[o] = {}
                }
                if (!r.length) {
                    a[o] = i[2].replace(/^[\s\u00A0]+|[\s\u00A0]+$/g, "")
                }
                a = a[o]
            }
        }
        return n
    };
    f.templatify = function() {
        var r = function e() {
            return ""
        };
        var a = Object.prototype.toString;
        var e = function e(t) {
            var n = r;
            if (typeof t === "string") {
                n = template(t)
            } else if (a.call(t) === "[object Object]") {
                n = {};
                for (var i in t) {
                    n[i] = f.templatify(t[i])
                }
            }
            return n
        };
        return e
    }.call(this);
    f.zoom = function(e, t) {
        var n = {
            maxWidth: 280,
            maxHeight: 280,
            minWidth: 1,
            minHeight: 1,
            mode: f.zoom.MODE.MAX
        };
        n = u.extend(true, n, t);
        var i = e.width / e.height;
        var r = {};
        if (n.mode === f.zoom.MODE.MAX) {
            if (e.width > n.maxWidth || e.height > n.maxHeight) {
                var a = n.maxWidth / n.maxHeight;
                if (i >= a) {
                    r.width = n.maxWidth;
                    r.height = r.width / i
                } else {
                    r.height = n.maxHeight;
                    r.width = r.height * i
                }
            } else {
                r = u.extend(true, r, e)
            }
        } else if (n.mode === f.zoom.MODE.MIN) {
            if (e.width < n.minWidth || e.height < n.minHeight) {
                var o = n.minWidth / n.minHeight;
                if (i >= o) {
                    r.height = n.minHeight;
                    r.width = r.height * i
                } else {
                    r.width = n.minWidth;
                    r.height = r.width / i
                }
            } else {
                r = u.extend(true, r, e)
            }
        }
        return r
    };
    f.zoom.MODE = {
        MAX: "max",
        MIN: "min"
    };
    f.BCenter = function(e, t, n) {
        if (!e) {
            return
        }
        var i = {
            mode: f.BCenter.MODE.PADDING,
            height: 340,
            width: 340,
            limitMode: f.zoom.MODE.MAX
        };
        i = u.extend(true, i, t);
        n = n || {
            width: e.clientWidth,
            height: e.clientHeight
        };
        var r = f.zoom(n, {
            maxWidth: i.width,
            maxHeight: i.height,
            minWidth: i.width,
            minHeight: i.height,
            mode: i.limitMode
        });
        var a = (i.height - r.height) / 2;
        var o = (i.width - r.width) / 2;
        r[(i.mode + "Top").replace(/\w/, function(e) {
            return e.toLowerCase()
        })] = a;
        r[(i.mode + "Left").replace(/\w/, function(e) {
            return e.toLowerCase()
        })] = o;
        r[(i.mode + "Right").replace(/\w/, function(e) {
            return e.toLowerCase()
        })] = o;
        r[(i.mode + "Bottom").replace(/\w/, function(e) {
            return e.toLowerCase()
        })] = a;
        u(e).css(r)
    };
    f.BCenter.MODE = {
        PADDING: "padding",
        MARGIN: "margin",
        POSITION: ""
    };
    f.Adapter = function(e, t) {
        this._ = {};
        this.config = f.extend(true, {}, e);
        this._.deep = !!t;
        this.init()
    };
    f.Adapter.prototype = {
        init: function e() {
            this._.dic = this.config;
            this._.rdic = {};
            for (var t in this.config) {
                this._.rdic[this.config[t]] = t
            }
        },
        __parse: function e(t, n, i) {
            var r = f.type(t);
            var a;
            switch (r) {
                case "object":
                    {
                        a = {};
                        for (var o in t) {
                            a[o in n ? n[o] : o] = i && /object|array/.test(f.type(t[o])) ? this.__parse(t[o], n, i) : t[o]
                        }
                    };
                    break;
                case "array":
                    {
                        a = [];
                        for (var s = 0; s < t.length; s++) {
                            a.push(this.__parse(t[s], n, i))
                        }
                    };
                    break;
                default:
                    {
                        a = n[t] || t
                    }
            }
            return a
        },
        parse: function e(t, n, i) {
            return this.__parse(t, n || this.config, i || this._.deep)
        },
        reverse: function e(t, n, i) {
            this.init();
            return this.__parse(t, n || this._.rdic, i || this._.deep)
        },
        filter: function e(t, n, i) {
            n = "," + n.split(/[,;_@ ]+/).join(",") + ",";
            var r = f.type(t);
            var a;
            switch (r) {
                case "object":
                    {
                        var a = {};
                        for (var o in t) {
                            if (n.indexOf("," + o + ",") !== -1) {
                                a[o] = i && /object|array/.test(f.type(t[o])) ? this.filter(t[o], n, i) : t[o]
                            }
                        }
                    };
                    break;
                case "array":
                    {
                        var a = [];
                        for (var s = 0; s < t.length; s++) {
                            a.push(this.filter(t[s], n, i))
                        }
                    };
                    break;
                default:
                    {
                        if (n.indexOf("," + t + ",") !== -1) {
                            a = t
                        }
                    }
            }
            return a
        }
    };
    var m = {
        sep: "",
        isJoin: true,
        filter: function e(t) {
            return t.filter(function() {
                return !this.disabled
            })
        },
        special: {
            names: [],
            values: {}
        }
    };
    f.Serialize = function(e) {
        this._ = {};
        this.config = f.extend(true, {}, m, e);
        this.init()
    };
    f.Serialize.prototype = {
        init: function e() {},
        parse: function e(t, n) {
            var i = this;
            var r = u(t);
            n = n || this.config.filter;
            var a = r.find("input[name],textarea[name],select[name]");
            a = n(a);
            var o = {};
            var s;
            a.each(function(e, t) {
                s = i.__getName(t.name);
                if (!o[s]) {
                    o[s] = []
                }
                o[s].push(t)
            });
            var l = {};
            u.each(o, function(e, t) {
                l[e] = i.__getValue(e, t)
            });
            return l
        },
        __getName: function e(t) {
            var n = this.config.special.names;
            var i = t;
            var r;
            var a;
            for (var o = 0; o < n.length; o++) {
                r = f.type(n[o].rule);
                if (r === "regexp") {
                    n[o].rule.exec("");
                    a = n[o].rule.exec(t);
                    a = !!(a && a.length);
                    if (a) {
                        i = n[o].name;
                        break
                    }
                } else if (r === "function") {
                    a = !!n[o].rule(t);
                    if (a) {
                        i = n[o].name;
                        break
                    }
                }
            }
            return i
        },
        __getValue: function e(t, n) {
            var i;
            if (t in this.config.special.values) {
                i = this.config.special.values[t](u(n), t)
            } else {
                i = [];
                u(n).each(function(e, t) {
                    if (t.tagName.toLowerCase() === "input" && (t.type === "checkbox" || t.type === "radio")) {
                        if (t.checked) {
                            i.push(t.value)
                        }
                    } else {
                        i.push(t.value)
                    }
                });
                if (i.length <= 1 || this.config.isJoin) {
                    i = i.join(this.config.sep || ",")
                }
            }
            return i
        }
    };
    f.path = function(e, t) {
        for (var n = document.getElementsByTagName((t || "script").toLowerCase()), i = 0; i < n.length; i++) {
            var r = n[i].src;
            if (r && 0 <= r.indexOf(e)) {
                return r.substr(0, r.indexOf(e))
            }
        }
        return ""
    };
    f.onCheckedChange = function(e, i, r) {
        if (typeof i === "function") {
            r = i;
            i = {
                radioChanged: "group"
            }
        } else {
            i = u.extend(true, {
                radioChanged: "group"
            }, i)
        }
        var n = u(e);
        var a = [];
        n.filter(":radio").each(function(e, t) {
            var n = t.name;
            var i = u(t).closest("form")[0] || document.body;
            if (!u.grep(a.slice(0), function(e) {
                    return e.name === t.name && e.form === i
                }).length) {
                a.push({
                    name: n,
                    form: i
                })
            }
        });
        n = n.not(":radio");
        u.each(a, function(e, t) {
            t.items = u('input:radio[name="' + t.name + '"]', t.form);
            n = n.add(t.items)
        });
        n.each(function(e, n) {
            if (!n || !/input/i.test(n.tagName) || !/checkbox|radio/.test(n.type)) {
                return
            }
            r = typeof r === "function" ? r : o;
            var t = u(n);
            t.bind("checkedChange", function(e, t) {
                r.call(n, t)
            });
            if (t.data("__checkedChangeBounded__")) {
                return
            }
            n.checkedChanged = function() {
                t.trigger("checkedChange", {
                    checked: !!n.checked
                });
                if (i.radioChanged === "each" && n.type === "radio" && n.checked) {
                    u.each(a, function(e, t) {
                        if (t.name === n.name && t.items.filter(function() {
                                return this === n
                            }).length) {
                            t.items.not(n).each(function() {
                                u(this).trigger("checkedChange", {
                                    checked: !!this.checked
                                })
                            })
                        }
                    })
                }
            };
            t.parent().click(function(e) {
                setTimeout(n.checkedChanged, 0)
            });
            t.data("__checkedChangeBounded__", true)
        })
    };
    f.FormStatus = function(e, t) {
        this.filter = typeof t === "function" ? t : null;
        this.parser = new f.Serialize;
        this.forms = u(e || "form");
        this.originalData = this.__getData();
        this.changed = false
    };
    f.FormStatus.prototype = {
        isChanged: function e(n) {
            if (!n && this.changed) {
                return this.changed
            }
            var i = this;
            var r = false;
            var t = this.__getData();
            var a = this.originalData;
            if (n) {
                u.each(t, function(e, t) {
                    if (t[n] !== a[e][n]) {
                        r = true
                    }
                });
                return r
            } else {
                u.each(t, function(e, t) {
                    if (!i.__equal(t, a[e])) {
                        r = true;
                        return false
                    }
                })
            }
            return this.changed = r
        },
        __equal: function e(t, n) {
            var i = [];
            var r = [];
            for (var a in t) {
                i.push(a)
            }
            for (var a in n) {
                r.push(a)
            }
            if (i.length !== r.length) {
                return false
            }
            var o;
            var s;
            var a;
            for (var l = 0; l < r.length; l++) {
                var a = r[l];
                if (!(a in t)) {
                    return false
                }
                o = t[a];
                s = n[a];
                var c = f.type(o);
                var u = f.type(s);
                if (c !== u) {
                    return false
                }
                if (c === "string") {
                    if (o !== s) {
                        return false
                    }
                }
                if (c === "array") {
                    if (o.length !== s.length) {
                        return false
                    }
                    if (o.join("#_#") !== s.join("#_#")) {
                        return false
                    }
                }
            }
            return true
        },
        filter: function e() {},
        __getData: function e() {
            var t = [];
            var n = this;
            this.forms.each(function() {
                t.push(n.parser.parse(this, n.filter))
            });
            return t
        }
    };
    f.FormHelper = function(e, t) {
        this._ = {};
        this._.dic = t || {};
        this._.form = u(e);
        this.__init()
    };
    f.FormHelper.prototype = {
        __init: function e() {},
        __getElem: function e(t, n) {
            var i = null;
            i = u("[name=" + t + "]", n);
            if (!i.length) {
                i = u("#" + t, n)
            }
            return i
        },
        fill: function e(t, n, i) {
            var n = f.extend(true, {}, this._.dic, n);
            i = i || u(this._.form);
            var r;
            var a;
            for (var o in t) {
                r = o;
                if (r in n) {
                    r = n[r]
                }
                a = t[o];
                var s = this.__getElem(r, i);
                if (s.length && /input/i.test(s[0].tagName) && /checkbox|radio/i.test(s[0].type)) {
                    a = f.type(a) === "array" ? a.join("$$$$$$$$$$$").split("$$$$$$$$$$$") : (a + "").split(/[\s,]+/)
                }
                s.val(a)
            }
        },
        reset: function e(t) {
            var n = u(t || this._.form);
            n.each(function(e, t) {
                t.reset()
            })
        }
    };
    f.isMobile = function(e) {
        var t = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series[46]0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i;
        var n = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series[46]0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|android|ipad|playbook|silk/i;
        if (!e) e = {};
        var i = e.ua;
        if (!i && typeof navigator !== "undefined") i = navigator.userAgent;
        if (i && i.headers && typeof i.headers["user-agent"] === "string") {
            i = i.headers["user-agent"]
        }
        if (typeof i !== "string") return false;
        var r = e.tablet ? n.test(i) : t.test(i);
        if (!r && e.tablet && e.featureDetect && navigator && navigator.maxTouchPoints > 1 && i.indexOf("Macintosh") !== -1 && i.indexOf("Safari") !== -1) {
            r = true
        }
        return r
    };
    if (window.jQuery) {
        jQuery.fn.appear = function(i) {
            u(this).each(function(e, t) {
                var n = u(t);
                clearTimeout(n.data("disappearTimer"));
                n.show().stop(false, true).animate({
                    opacity: 1
                }, 300, function() {
                    n.data("disappearTimer", setTimeout(function() {
                        n.disappear()
                    }, i || 5e3))
                })
            })
        };
        jQuery.fn.disappear = function() {
            u(this).each(function(e, t) {
                var n = u(t);
                n.stop(false, true).animate({
                    opacity: 1
                }, 300, function() {
                    n.hide()
                })
            })
        }
    }
    if (window.jQuery) {
        f.stopScrollPage = function() {
            var i = u.browser && u.browser.mozilla && !(!window.ActiveXObject && /function[\s\S]+?\[native\s+code\]/.test(window.ActiveXObject + ""));
            var n = function e(t) {
                t.preventDefault();
                var n = t.originalEvent[i ? "detail" : "wheelDelta"];
                if (!i) {
                    n = -n
                }
                this.scrollTop += n > 0 ? 56 : -56
            };
            return function(e) {
                var t = i ? "DOMMouseScroll" : "mousewheel";
                u(e).bind(t, n)
            }
        }.call(this)
    }
    return f
}.call(this, window.jQuery);
var observe = function() {
    var l = "__IS_OBSERVABLE__";
    var c = "__IS_ONCE_EVENT__";
    var u = [].slice;
    var f;
    try {
        var e = {};
        var t = "t";
        Object.defineProperty(e, t, {
            value: 1,
            writable: false,
            enumerable: false,
            configurable: false
        });
        f = function e(t, n, i) {
            Object.defineProperty(t, n, {
                value: i,
                writable: false,
                enumerable: false,
                configurable: false
            })
        }
    } catch (e) {
        f = function e(t, n, i) {
            t[n] = i
        }
    }
    var d = function e(t, n) {
        t.replace(/([^\s\,]+)/g, n)
    };
    var n = function e(t) {
        t = t || {};
        if (t[l]) {
            return t
        }
        f(t, l, true);
        var a = {};
        var o = function e(t) {
            return a[t] = a[t] || []
        };
        var n = function e(t) {
            d(t, function(e) {
                delete a[e]
            })
        };
        var r = function e() {
            a = {}
        };
        var i = function e(t, n, i) {
            if (typeof n === "function") {
                f(n, c, !!i);
                d(t, function(e) {
                    o(e).push(n)
                })
            }
        };
        var s = function e(t, n) {
            for (var i = 0; i < t.length; i++) {
                var r = t[i];
                r.apply(this, n);
                if (r[c]) {
                    t.splice(i--, 1)
                }
            }
        };
        f(t, "on", function(e, t) {
            i(e, t);
            return this
        });
        f(t, "one", function(e, t) {
            i(e, t, true);
            return this
        });
        f(t, "off", function(e, i) {
            if (typeof e === "string") {
                if (typeof i === "function") {
                    d(e, function(e) {
                        var t = o(e);
                        for (var n = 0; n < t.length; n++) {
                            if (t[n] === i) {
                                t.splice(n--, 1)
                            }
                        }
                    })
                } else {
                    n(e)
                }
            } else {
                r()
            }
            return this
        });
        f(t, "fire", function(e) {
            var n = this;
            var i = u.call(arguments, 1);
            if (typeof e === "string") {
                d(e, function(e) {
                    var t = o(e);
                    s.call(n, t, i)
                })
            } else {
                for (var t in a) {
                    if (a.hasOwnProperty(t)) {
                        var r = a[t];
                        s.call(n, r, i)
                    }
                }
            }
            return this
        });
        return t
    };
    return n
}.call(this);
void
function() {
    var e = window.location;
    if (/^192\.168\.\d+\.\d+$/.test(e.hostname)) {
        return
    }
    var t = "mad";
    var n = "e-i";
    var i = "n-ch";
    var r = "ina";
    var a = [t, n, i, r].join("");
    var o = "vemic";
    var s = "e-cigaretteschina";
    var l = "micstatic";
    var c = "bmic\\.org\\.cn";
    var u = "com";
    var f = "www";
    var d = "crov";
    var h = new RegExp("(?:^|\\.)(?:(?:" + [a, o, l, s, d].join("|") + ")\\." + u + "|" + c + ")$", "i");
    var p = /^[\w\-]+\.[\w\-]+$/;
    var v = window.self !== window.top;
    var m = document.referrer;
    var g;
    if (m) {
        g = m.match(/^\w+:\/\/([^\/]*)/)[1];
        g = g.replace(/\:\d+$/, "")
    }
    if (v && g && !h.test(g)) {
        var w = window.top;
        var y = e.href;
        try {
            w.location.replace ? w.location.replace(y) : w.location.href = y
        } catch (e) {
            w.top.location = y
        }
        return
    }
    if (!h.test(e.hostname)) {
        var y = e.href.replace(e.hostname.match(/[\w\-]+\.[\w\-]+$/)[0], (p.test(e.hostname) ? f + "." : "") + a + "." + u);
        e.replace ? e.replace(y) : e.href = y
    }
}.call(this);
void
function() {
    var e = location.hostname;
    if (/^[\d\.]+$/.test(e)) {
        return
    }
    var n = /[\w\-]+\.[\w\-]+$/.exec(e)[0];
    var t = function e() {
        var t = false;
        var n = document.createElement("canvas");
        if (n.toDataURL) {
            t = /^data:image\/webp/.test(n.toDataURL("image/webp"))
        }
        return t
    };
    var i = function e(t) {
        var n = new Image;
        n.onload = function() {
            t(true)
        };
        n.onerror = function() {
            t(false)
        };
        n.src = "data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAUAmJaQAA3AA/vz0AAA="
    };
    var r = function e(t) {
        document.cookie = "webp=" + (t || "t") + "; path=/; domain=." + n + "; expires=" + new Date("2099-12-31").toUTCString()
    };
    if (t()) {
        r("t")
    } else {
        i(function(e) {
            if (e) {
                r("t")
            } else {
                r("f")
            }
        })
    }
}.call(this);
if (typeof ATF === "undefined") {
    var events = "selectstart contextmenu dragstart mousedown copy cut";
    var shield = function e(t) {
        if (t.target.tagName.toLowerCase() === "img") {
            t.preventDefault()
        }
    };
    var ATF = function(n) {
        var e = function e(t) {
            n(t).unbind(events, shield).bind(events, shield)
        };
        e(".J-ATF");
        n(function() {
            e(".J-ATF")
        });
        return e
    }.call(this, this.jQuery)
}
void
function() {
    var e = 1;
    if (window.devicePixelRatio) {
        e = window.devicePixelRatio
    }
    var t = new Date;
    t.setFullYear(t.getFullYear + 1);
    try {
        document.cookie = ["dpr=", e, "; domain=", ".", document.domain.match(/[\w\-]+\.[\w\-]+$/)[0], "; path=/; expires=", t.toUTCString()].join("")
    } catch (e) {}
}.call(this);
var _templateResolve = function() {
    var l = /(.)^/;
    var t = {
        "&": "&amp;",
        "<": "&lt;",
        ">": "&gt;",
        '"': "&quot;",
        "'": "&#x27;",
        "/": "&#x2F;"
    };
    var c = {
        "'": "'",
        "\\": "\\",
        "\r": "r",
        "\n": "n",
        "\t": "t",
        "\u2028": "u2028",
        "\u2029": "u2029"
    };
    var u = /\\|'|\r|\n|\t|\u2028|\u2029/g;
    window.__htmlEscape = function(e) {
        if (e == null) return "";
        return ("" + e).replace(new RegExp("[&<>\"/']", "g"), function(e) {
            return t[e]
        })
    };
    var e = function e(a, t, n) {
        if (!a) return;
        var i;
        n = {
            evaluate: /{{([\s\S]+?)}}/g,
            interpolate: /{{=([\s\S]+?)}}/g,
            escape: /{{-([\s\S]+?)}}/g
        };
        var r = new RegExp([(n.escape || l).source, (n.interpolate || l).source, (n.evaluate || l).source].join("|") + "|$", "g");
        var o = 0;
        var s = "__p+='";
        a.replace(r, function(e, t, n, i, r) {
            s += a.slice(o, r).replace(u, function(e) {
                return "\\" + c[e]
            });
            if (t) {
                s += "'+\n((__t=(" + t + "))==null?'':__htmlEscape(__t))+\n'"
            }
            if (n) {
                s += "'+\n((__t=(" + n + "))==null?'':__t)+\n'"
            }
            if (i) {
                s += "';\n" + i + "\n__p+='"
            }
            o = r + e.length;
            return e
        });
        s += "';\n";
        if (!n.variable) s = "with(obj||{}){\n" + s + "}\n";
        s = "var __t,__p='',__j=Array.prototype.join," + "print=function(){__p+=__j.call(arguments,'');};\n" + s + "return __p;\n";
        try {
            i = new Function(n.variable || "obj", s)
        } catch (e) {
            e.source = s;
            throw e
        }
        if (t) return i(t);
        var e = function e(t) {
            return i.call(this, t)
        };
        e.source = "function(" + (n.variable || "obj") + "){\n" + s + "}";
        return e
    };
    return e
}();
void
function(o, y) {
    var b = function e() {
        return !!y(".J-top-loginInfo").length
    };
    var e = function e() {
        return !!y(".J-top-isOss").length
    };
    var t = function e() {
        return !!y(".J-top-named").length
    };
    var n = function e() {
        return !!y(".J-jumpNext").length
    };
    if (!y) {}
    if (o.topLoginInfo || !b()) {
        return
    }
    var i = y(".J-header-signInfo-2");
    if (i.length) {
        var r = y(".J-userFeature").clone();
        i.replaceWith(r);
        y(".J-search-remove", r).remove()
    }
    var a = y(".J-search-bar-wrap");
    var s = y(".J-top-logged-2");
    var l = y(".J-header-inquiry-2");
    var c = "user-signed";
    var u = "zero-num";
    var f = "middel-title";
    var x = function e(t, n, i) {
        n = n || 0;
        i = i || 0;
        var r;
        if (t) {
            r = n + i
        } else {
            r = i
        }
        if (r === 0) {
            s.addClass(f);
            l.addClass(f)
        } else {
            s.removeClass(f);
            l.removeClass(f)
        }
        if (n === 0) {
            s.addClass(u)
        } else {
            s.removeClass(u)
        }
        if (i === 0) {
            l.addClass(u)
        } else {
            l.removeClass(u)
        }
        if (t) {
            a.addClass(c)
        } else {
            a.removeClass(c)
        }
    };
    var _ = {
        BUYER: "1",
        SUPPLIER: "2",
        FREESUPPLIER: "3"
    };
    var C = function e(t) {
        if (!t.newMailNum && !t.rfqNum && !t.unReadNoticeNum || t.newMailNum) {
            y(".J-top-tab").eq(0).trigger("click")
        }
        if (!t.newMailNum && t.rfqNum) {
            y(".J-top-tab").eq(1).trigger("click")
        }
        if (!t.newMailNum && !t.rfqNum && t.unReadNoticeNum) {
            y(".J-top-tab").eq(2).trigger("click")
        }
    };
    var d = function e(t) {
        if (!b()) {
            return
        }
        t = y.extend({}, {
            messages: [],
            rfqContents: [],
            noticeContents: [],
            newMailNum: 0,
            rfqNum: 0,
            userType: "",
            isForeign: true
        }, t);
        var n = y(".J-focusChinaLink");
        if (t.userType === _.SUPPLIER || t.userType === _.FREESUPPLIER || t.userType === "" && !t.isForeign) {
            n.attr("href", "//www.focuschina.com/")
        }!!t.inquiryBasketNum ? y(".nail-header .J-top-basketNum").show() : y(".nail-header .J-top-basketNum").hide();
        y(".J-top-basketNum").html(t.inquiryBasketNum || 0);
        var i = 0;
        if (t.canManageInquiry) {
            i = parseInt(t.newMailNum + t.rfqNum) || 0
        } else {
            i = t.newMailNum || 0
        }
        x(t.login, i, t.inquiryBasketNum);
        if (!t.login) {
            y(".J-top-unlogin").show();
            y(".J-top-logged").hide();
            return
        }
        y(".J-top-unlogin").hide();
        y(".J-top-logged").show();
        var r = y(".J-top-username");
        if (!r.is(".J-top-named") && t.name) {
            r.text(t.name || "")
        }
        var a = y(".J-userFeature");
        if ((t.userType == _.SUPPLIER || t.userType == _.FREESUPPLIER) && !!y("#J-top-inquiry-tmpl").length) {
            var o = _templateResolve(y("#J-top-inquiry-tmpl").html()),
                s = _templateResolve(y("#J-top-rfq-tmpl").html()),
                l = _templateResolve(y("#J-top-notice-tmpl").html());
            var c = y(".J-top-notice", a);
            y(".J-num", c).html(t.unReadNoticeNum || 0);
            if (t.unReadNoticeNum) {
                i += t.unReadNoticeNum || 0
            }
            y(".J-top-inquiry-block", a).html(o(t));
            y(".J-top-rfq-block", a).html(s(t));
            y(".J-top-notice-block", a).html(l(t));
            C(t)
        }
        y(".J-messageTotal").html(i);
        if (t.userType == _.BUYER) {
            y(".J-buyer", a).show();
            y(".J-supplier", a).hide()
        } else if (t.userType == _.SUPPLIER) {
            y(".J-supplier", a).show();
            y(".J-buyer", a).hide()
        } else if (t.userType === _.FREESUPPLIER) {
            y(".J-supplier", a).show();
            y(".J-buyer", a).hide();
            y(".J-top-editor:not(:nth-child(2))", a).hide();
            y(".J-top-visit", a).hide();
            y(".J-top-visit", a).prev(".m-header-option-item.J-supplier").hide()
        } else {}
        var u = y(".J-top-inquiry", a);
        y(".J-num", u).html(t.newMailNum);
        if (t.newMailNum > 0) {
            var f = y(".J-top-inquiry a", a);
            f.attr("href", f.attr("data-unRead"))
        }
        var d = y(".J-top-rfq", a);
        y(".J-num", d).html(t.rfqNum || 0);
        if (t.userType == _.BUYER) {
            if (t.rfqNum && t.rfqNum > 0) {
                var h = y(".J-buyer.J-top-rfq a", a);
                h.attr("href", h.attr("data-unRead"))
            }
        }
        if (!t.canManageInquiry) {
            d.hide()
        } else {}
        var p = y(".J-top-editor:not(:nth-child(2))", a);
        var v = y(".J-top-visit", a);
        if (t.userType == _.SUPPLIER && !!t.canManageInfo) {} else {
            p.hide();
            v.hide();
            y(".J-top-visit", a).prev(".m-header-option-item.J-supplier").hide()
        }
        var m = "http://service.made-in-china.com/developing/activities/4992.html";
        var g = "//www.made-in-china.com/special/forbuyerapp/";
        var w = null;
        if (t.login || t.name) {
            if (t.userType === _.BUYER) {
                w = g
            } else {
                w = m
            }
        } else {
            w = g
        }
        y(".J-header-app-link").attr("href", w)
    };
    var h = null;
    var p = function e(t, n) {
        d(t);
        h = null;
        if (typeof n === "function") {
            n(t)
        }
        if (t.login && window["sensors"] && t.sensorsUserId) {
            window.sensors.login(t.sensorsUserId)
        } else if (window["sensors"]) {
            try {
                sensors.quick("isReady", function() {
                    if (sensors.store.getDistinctId() == "EEnxEJQbMJmm_00") {
                        sensors.logout(true)
                    }
                })
            } catch (e) {}
        }
    };
    var v = function e(t, n) {
        if (!b()) {
            return
        }
        var i = {};
        var r = y(".J-top-loginInfo").attr("data-useless");
        if (r) {
            i.useless = r
        }
        if (!!y(".J-top-head-type").length && y(".J-top-head-type").val() === "vo") {
            i.envo = true
        }
        y.extend(true, i, t);
        var a = "//www.made-in-china.com/head.do?xcase=getHead&callback=?";
        if (o.__HEADER_USER_INFO__) {
            o.__HEADER_USER_INFO__.then(function(e) {
                p(e, n)
            });
            return
        }
        h && h.abort();
        h = y.ajax({
            url: a,
            dataType: "jsonp",
            data: i,
            timeout: 100 * 1e3,
            success: function e(t) {
                p(t, n)
            },
            error: function e() {
                h = null
            }
        })
    };
    var m = null;
    var g = function e(t, n) {
        if (!b()) {
            return
        }
        var i = {};
        y.extend(true, i, t);
        var r = "//www.made-in-china.com/head.do?xcase=getBasketNum&callback=?";
        m && m.abort();
        m = y.ajax({
            url: r,
            dataType: "jsonp",
            data: i,
            timeout: 100 * 1e3,
            success: function e(t) {
                if (!b()) {
                    return
                }
                y(".J-top-basketNum").html(t.basketNum || 0);
                x(false, 0, t.basketNum);
                m = null;
                if (typeof n === "function") {
                    n(t)
                }
            },
            error: function e() {
                m = null
            },
            complete: function e() {
                if (window["sensors"]) {
                    try {
                        sensors.quick("isReady", function() {
                            if (sensors.store.getDistinctId() == "EEnxEJQbMJmm_00") {
                                sensors.logout(true)
                            }
                        })
                    } catch (e) {}
                }
            }
        })
    };
    y(".J-top-tab").each(function(e, t) {
        y(this).click(function() {
            y(".J-top-tab").removeClass("selected");
            y(this).addClass("selected");
            y(".J-top-block").hide();
            y(".J-top-block").eq(e).show()
        })
    });
    if (b()) {
        var w = encodeURIComponent(window.location.href);
        if (n()) {
            y(".J-top-signIn").attr("href", y(".J-top-signIn").attr("href") + "?jumpNext=1&baseNextPage=" + w)
        } else {
            y(".J-top-signIn").attr("href", y(".J-top-signIn").attr("href") + "?baseNextPage=" + w)
        }
        y(".J-top-signOut").attr("href", y(".J-top-signOut").attr("href") + "&baseNextPage=" + w)
    }
    if (!("__IS_USER_LOGED__" in o) || o.__IS_USER_LOGED__) {
        v()
    } else {
        g()
    }
    var S = function e(t) {
        v(null, t)
    };
    o.topLoginInfo = {
        update: d,
        request: v,
        getStatus: S
    }
}.call(this, this, this.jQuery || this.Zepto);
(function(f) {
    function e() {
        var e = "";
        if (f("#top .site-nav .inquiry a").eq(0).attr("href") === "/report-cart/") {
            e = "&sc=1"
        }
        var t = "//www.made-in-china.com/ajaxfunction.do?xcase=ajaxlogonconnection" + e + "&t=" + (new Date).getTime() + "&callback=?";
        f.ajax({
            url: t,
            type: "get",
            dataType: "jsonp",
            cache: false,
            success: function e(t) {
                n(t)
            },
            error: {}
        })
    }

    function n(e) {
        if (!e || !e.length) {
            return
        }
        var t = encodeURIComponent(window.location.href);
        var n = f("#top .user-nav").eq(0);
        var i = f("#top .site-nav .inquiry a strong")[0];
        var r = e[3] || 0;
        var a = e[4] ? "//purchase.made-in-china.com/" : "//membercenter.made-in-china.com";
        var o = '<li class="first menu-item">Welcome <a href="' + a + '"><strong>' + (e[1] || "") + "</strong></a>!";
        var s = '<li class="message menu-item"><a href="//membercenter.made-in-china.com/messagecenter.do?xcase=inbox" alt="' + r + ' New Message(s)" title="' + r + ' New Message(s)" class="red">' + '<i class="icon">&#xf0e0;</i>' + r + "</a></li>";
        var l = f("#sendInquiryBuyerStatus").val();
        var c = "";
        if (l == "1") {
            c = '<li class="menu-item last"><a rel="nofollow" href="https://login.made-in-china.com/logon.do?xcase=doLogout">Sign Out</a></li>'
        } else {
            c = '<li class="menu-item last"><a rel="nofollow" href="https://login.made-in-china.com/logon.do?xcase=doLogout&baseNextPage=' + t + '">Sign Out</a></li>'
        }
        i && f(i).html(e[2] || 0);
        if (n.length) {
            if (e && !e[0]) {
                var u = '<li class="first menu-item"><a rel="nofollow" href="//membercenter.made-in-china.com/join/">Join Free</a></li>' + '<li class="signin menu-item"><a rel="nofollow" href="https://login.made-in-china.com/sign-in/?baseNextPage=' + t + '">' + "Sign In</a></li>";
                n.empty();
                n.html(u);
                return
            }
            n.empty();
            n.html(o + s + c)
        }
        if (window["sensors"] && e && e[0] === 1) {
            window.sensors.login(e[5])
        } else if (window["sensors"]) {
            try {
                sensors.quick("isReady", function() {
                    if (sensors.store.getDistinctId() == "EEnxEJQbMJmm_00") {
                        sensors.logout(true)
                    }
                })
            } catch (e) {}
        }
    }
    if (window.topLoginInfo) {
        window.logonRefresh = window.topLoginInfo.request
    } else {
        e();
        window.logonRefresh = e
    }
})(this.jQuery || this.Zepto);
if (window.$) {
    $(function() {
        var t = "&#xf0d8;",
            n = "&#xf0d7;",
            i = ".dropmenu-hd",
            e = ".dropmenu-list",
            r = ".icon",
            a = [],
            o;
        a.push($("#multi-lang"));
        a.push($("#quick-nav"));
        a.push($("#dev_hotword"));
        a.push($("#buyer-guide"));
        a.push($("#supplier-guide"));
        for (var s = 0; s < a.length; s++) {
            o = a[s];
            if (o && o.length) {
                (function() {
                    var e = arguments[0];
                    e.find(i).bind("mouseover", function() {
                        e.addClass("hover");
                        e.find(r).html(t)
                    });
                    e.bind("mouseleave", function() {
                        e.removeClass("hover");
                        e.find(r).html(n)
                    })
                })(o)
            }
        }
        if ($("#buyerappend").length !== 0) {
            $("#buyer-guide").bind("mouseover", function() {
                if (!window["initAsyncBuyer"]) {
                    var e = '<a href="//purchase.made-in-china.com/trade-service/quotation-request.html" rel="nofollow">Post Sourcing Request</a>' + '<a href="//resources.made-in-china.com/industry-analysis-reports/" rel="nofollow">Industry Analysis</a>' + '<a href="//www.made-in-china.com/tradeservice/private-sourcing-meetings.html" rel="nofollow">Meet Suppliers</a>' + '<a href="//www.made-in-china.com/trademessenger/" rel="nofollow">TradeMessenger</a>';
                    $("#buyerappend").after(e);
                    window["initAsyncBuyer"] = true
                }
            })
        }
        if ($("#supplierappend").length !== 0) {
            $("#supplier-guide").bind("mouseover", function() {
                if (!window["initAsyncSupplier"]) {
                    var e = '<a href="//sourcing.made-in-china.com/suppliers.html" rel="nofollow">Search Sourcing Requests</a>' + '<a href="//membercenter.made-in-china.com/product.do?xcase=list" rel="nofollow">Manage Products</a>' + '<a href="//membercenter.made-in-china.com/messagecenter.do?xcase=inbox&assignFlag=0" rel="nofollow">Manage Messages</a>' + '<a href="http://service.made-in-china.com/" rel="nofollow">&#x4f1a;&#x5458;e&#x5bb6;</a>' + '<a href="//www.made-in-china.com/audited-suppliers/for-suppliers/index-cn.html" rel="nofollow">&#x52a0;&#x5165;&#x8ba4;&#x8bc1;&#x4f9b;&#x5e94;&#x5546;</a>';
                    $("#supplierappend").append(e);
                    window["initAsyncSupplier"] = true
                }
            })
        }
    })
}(function() {
    var e = typeof __supplierFeatureIsShowCn === "undefined" ? false : __supplierFeatureIsShowCn;
    var t = "";
    var n = !!$(".J-top-lan").length && $(".J-top-lan").val() !== "English" ? 1 : 0;
    var i = ["For Supplier", "中国供应商"][n];
    if (e) {
        t = '<li class="m-header-option J-showCn">' + '    <a rel="nofollow" href="//cn.made-in-china.com/" target="_blank">加入内贸站</a>' + "</li>"
    }
    var r = "";
    if (!window.__IS_USER_LOGED__) {
        r = '<li class="m-header-option-btns">' + '<a href="//login.made-in-china.com/join/?accountType=supplier" class="btn">注册供应商</a>' + '<a href="//login.made-in-china.com/sign-in/?switchLan=1" class="btn">登录</a>' + "</li>"
    }
    var a = '<div class="m-header-menu-item m-header-select pad-header-menu-item J-tab-trigger">' + '    <span class="m-header-menu-title m-header-select-title">' + i + '<i class="ob-icon icon-down"></i></span>' + '    <ul class="m-header-option-list m-header-option-list-supplier">' + '        <li class="m-header-option">' + '            <a ads-data="st:104" rel="nofollow" href="//www.made-in-china.com/supplier-membership.html" target="_blank">加入高级会员</a>' + "        </li>" + '        <li class="m-header-option">' + '            <a ads-data="st:104" rel="nofollow" href="//membercenter.made-in-china.com/package.do?xcase=packageList" target="_blank">外贸服务市场</a>' + "        </li>" + '        <li class="m-header-option">' + '            <a ads-data="st:104" rel="nofollow" href="//expo.made-in-china.com/about-us.html" target="_blank">加入云展会</a>' + "        </li>" + '        <li class="m-header-option">' + '            <a ads-data="st:104" rel="nofollow" href="//membercenter.made-in-china.com/supplier/point/mall.html" target="_blank">积分商城</a>' + "        </li>" + '        <li class="m-header-option">' + '            <a ads-data="st:104" rel="nofollow" href="//sourcing.made-in-china.com/suppliers.html" target="_blank">Search Sourcing Requests</a>' + "        </li>" + '        <li class="m-header-option">' + '            <a ads-data="st:104" rel="nofollow" href="https://logistics.made-in-china.com/" target="_blank">国际物流</a>' + "        </li>" + '        <li class="m-header-option">' + '            <a ads-data="st:104" href="//service.made-in-china.com/" target="_blank">外贸e家</a>' + "        </li>" + t + '        <li class="m-header-option">' + '            <a ads-data="st:104" rel="nofollow" href="//membercenter.made-in-china.com/newtrade/page/seller/introduce.html" target="_blank">加入交易服务</a>' + "        </li>" + r + "    </ul>" + "</div>";
    var o = $("#J-supplierFeature-container");
    o.replaceWith(a)
})();
$(function() {
    var e = function() {
        var i = document.createElement("div");
        var o = function e(t, n) {
            i.innerHTML = "";
            if (typeof n === "string") {
                i.innerHTML = n
            }
            n = i.firstChild.cloneNode(false);
            if (n && n.nodeType === 1) {
                t.parentNode && t.parentNode.insertBefore(n, t);
                n.appendChild(t)
            }
        };
        var e = function e(t, n) {
            if (!t || !n) {
                return
            }
            var i = typeof n === "function";
            t = "length" in t && typeof t !== "function" ? t : [t];
            var r;
            for (var a = 0; a < t.length; a++) {
                r = t[a];
                if (r) {
                    o(r, i ? n.call(r, a) : n)
                }
            }
        };
        return e
    }.call(this);
    if (document.getElementById("headRfqList")) {
        var t = '<div class="rfq-post-tip" style="display:none">' + '<div class="rfq-post-tipcont">' + "<h3>Easy Sourcing</h3>" + '<p class="rfq-sub-title">More Convenient, More Efficient</p>' + '<ul class="rfq-info-list">' + '<li><i class="micon">&#xe05a;</i>One request, multiple quotes</li>' + '<li><i class="micon">&#xe05a;</i>Verified suppliers matching</li>' + '<li><i class="micon">&#xe05a;</i>Quotes comparison and sample request</li>' + "</ul>" + '<div><a id="headRfqList-sub" href="//purchase.made-in-china.com/trade-service/quotation-request.html?source=2" class="btn btn-main">Post Your Request NOW</a></div>' + "</div>" + '<span class="arrow arrow-top"><span class="arrow arrow-in"></span></span>' + "</div>";
        if (!document.getElementById("rfqPostBox")) {
            e(document.getElementById("headRfqList"), "<div class='rfq-post-box' id='rfqPostBox'></div>");
            document.getElementById("rfqPostBox").innerHTML = document.getElementById("rfqPostBox").innerHTML + t;
            var n = document.createElement("link");
            n.type = "text/css";
            n.rel = "stylesheet";
            n.href = "https://www.micstatic.com/common/js/business/showRfqList/rfq-post-dropmenu_dff80909.css?t=20190626";
            document.getElementsByTagName("head")[0].appendChild(n)
        }
        document.getElementById("rfqPostBox").onmouseover = function() {
            $(".rfq-post-tip").show()
        };
        document.getElementById("rfqPostBox").onmouseout = function() {
            $(".rfq-post-tip").hide()
        }
    }
});
if (window.$) {
    $(function() {
        (function() {
            $("#androidapp").bind("click", function() {
                $("#appType").val("android");
                setTimeout(function() {
                    $("#appbuyerform").submit()
                }, 0)
            });
            $("#iphoneapp").bind("click", function() {
                $("#appType").val("iphone");
                setTimeout(function() {
                    $("#appbuyerform").submit()
                }, 0)
            })
        })()
    })
}(function(e) {
    var t = {
        mn: null,
        el: null,
        eopt: null,
        eotm: null,
        link: ""
    };
    t.link = encodeURIComponent(e.location.host + e.location.pathname);

    function n(e) {
        if (!e || Object.prototype.toString.call(e) !== "[object Object]") {
            throw "send ue log error: log format error!"
        }
        if (typeof Probe !== "undefined") {
            Probe().post($.extend({}, t, e))
        }
    }
    window.UELog = n
})(window);
$(function() {
    var e = $(".J-supplier a");
    if (e.length > 0) {
        e.bind("click", function() {
            UELog({
                mn: "headerLink",
                el: $(this).html(),
                eopt: "click"
            })
        })
    }
    var t = $(".vo-nav-sub-item");
    if (t.length > 0) {
        t.bind("click", function() {
            UELog({
                mn: "voSubNav",
                el: $(this).html(),
                eopt: "click"
            })
        })
    }
});
window.jQuery && function(p) {
    var v = {
        config: {
            cover_baseFloatZIndex: 888,
            cover_overlay: !0
        },
        setConfig: function e(t) {
            v.config = p.extend(!0, v.config, t || {})
        }
    };
    v.tools = function() {
        return {
            env: function() {
                var e = navigator.userAgent.toLowerCase();
                return {
                    ie: !1,
                    ie6: !1,
                    ie10: !1,
                    mac: -1 < e.indexOf("macintosh"),
                    webkit: -1 < e.indexOf(" applewebkit/"),
                    isCustomDomain: function e() {
                        if (!this.ie) return !1;
                        var t = document.domain,
                            n = window.location.hostname;
                        return t != n && t != "[" + n + "]"
                    }
                }
            }(),
            genKey: function e() {
                return Array.prototype.slice.call(arguments).join("-")
            },
            setOpacity: function e(t, n) {
                this.env.ie && !this.env.ie10 ? (n = Math.round(100 * n), p(t).css("filter", 100 <= n ? "" : "progid:DXImageTransform.Microsoft.Alpha(opacity=" + n + ")")) : p(t).css("opacity", n)
            },
            getViewPaneSize: function e() {
                var t = "CSS1Compat" == document.compatMode;
                return {
                    width: (t ? document.documentElement.clientWidth : document.body.clientWidth) || 0,
                    height: (t ? document.documentElement.clientHeight : document.body.clientHeight) || 0
                }
            },
            getScrollPosition: function e() {
                var t = window;
                if ("pageXOffset" in t) return {
                    x: t.pageXOffset || 0,
                    y: t.pageYOffset || 0
                };
                t = t.document;
                return {
                    x: t.documentElement.scrollLeft || t.body.scrollLeft || 0,
                    y: t.documentElement.scrollTop || t.body.scrollTop || 0
                }
            },
            getSize: function e(t) {
                return {
                    width: t.offsetWidth || 0,
                    height: t.offsetHeight || 0
                }
            }
        }
    }();
    v.cover = function() {
        function i(i) {
            var e = f.options,
                t = p(window);
            if (i) "function" == typeof i[i.data("options").showAnim] ? i[i.data("options").showAnim]() : i.show();
            else {
                var n = ['<div tabIndex="-1" style="position: ', v.tools.env.ie6 ? "absolute" : "fixed", "; z-index: ", u + 1, "; top: 0px; left: 0px;transform: translateZ(10px); ", v.tools.env.ie6 ? "" : "background-color: " + e.bgColor, '" style="display:none" class="', e.coverClass, '">'];
                v.tools.env.ie6 && v.bgIframe && n.push(v.bgIframe.html(e.bgColor));
                n.push("</div>");
                i = p(n.join(""));
                v.tools.setOpacity(i, void 0 != e.bgOpacity ? e.bgOpacity : .5);
                i.bind("keydown", function() {
                    return !1
                });
                i.bind("keypress", function() {
                    return !1
                });
                i.bind("keyup", function() {
                    return !1
                });
                p("body").append(i);
                i.data("options", e);
                "function" == typeof i[e.showAnim] ? i[e.showAnim]() : i.show();
                s[f.coverKey] = i;
                s[f.coverKey].used = !1
            }
            l = i;
            var r = i.data("options").rangeId,
                e = function e() {
                    var t = v.tools.getViewPaneSize();
                    if (r && 0 < p("#" + r).length && p("#" + r).attr("id") == r) {
                        var t = v.tools.getSize(p("#" + r).get(0)),
                            e = p("#" + r).offset().left,
                            n = p("#" + r).offset().top;
                        i.css("position", "absolute");
                        i.css({
                            left: e + "px",
                            top: n + "px"
                        })
                    }
                    i.css({
                        width: t.width + "px",
                        height: t.height + "px"
                    })
                },
                a = function e() {
                    var t = v.tools.getScrollPosition();
                    r && 0 < p("#" + r).length && p("#" + r).attr("id") == r && (t = {
                        x: p("#" + r).offset().left,
                        y: p("#" + r).offset().top
                    });
                    i.css({
                        left: t.x + "px",
                        top: t.y + "px"
                    })
                };
            c = e;
            t.bind("resize", e);
            e();
            v.tools.env.mac && v.tools.env.webkit || i.focus();
            if (v.tools.env.ie6) {
                var o = function e() {
                    a();
                    arguments.callee.prevScrollHandler.apply(this, arguments)
                };
                t.get(0).setTimeout(function() {
                    o.prevScrollHandler = window.onscroll || function() {};
                    window.onscroll = o
                }, 0);
                a()
            }
        }

        function r(e) {
            var t = e ? e : t;
            t && (e = p(window), t.hide(), e.unbind("resize", c), v.tools.env.ie6 && e.get(0).setTimeout(function() {
                window.onscroll = window.onscroll && window.onscroll.prevScrollHandler || null
            }, 0), c = null)
        }
        var s = {},
            a = [],
            l, c, u = null,
            f = {};
        return {
            show: function e(t) {
                v.tools.env.ie6 && v.setConfig({
                    cover_overlay: !1
                });
                f.options = p.extend(!0, {
                    rangeId: "",
                    bgColor: "#000",
                    bgOpacity: .65,
                    baseFloatZIndex: v.config.cover_baseFloatZIndex,
                    showAnim: "fadeIn",
                    dialog: null,
                    overlay: v.config.cover_overlay,
                    coverClass: ""
                }, t || {});
                f.coverKey = v.tools.genKey(f.options.bgColor, f.options.bgOpacity, f.options.baseFloatZIndex, f.options.rangeId);
                t = s[f.coverKey];
                if (null === u || 0 == a.length) u = v.config.cover_baseFloatZIndex;
                if (!f.options.overlay) {
                    var n = 0 < a.length ? a[a.length - 1] : null;
                    n && n.base && n.key != f.coverKey && r(s[n.key])
                }
                i(t);
                s[f.coverKey].used ? (t.css("z-index", u + 1), a.push({
                    key: f.coverKey
                })) : (s[f.coverKey].used = !0, a.push({
                    key: f.coverKey,
                    base: !0
                }));
                p(f.options.dialog).css("z-index", u += 10)
            },
            hide: function e() {
                if (0 != a.length) {
                    var t = a[a.length - 1],
                        n = 1 < a.length ? a[a.length - 2] : null;
                    n && t.key == n.key || r(l);
                    u -= 10;
                    n && (i(s[n.key]), s[n.key].css("z-index", u - 9));
                    t.base && (s[t.key].used = !1);
                    a.pop()
                }
            },
            remove: function e() {
                for (var t in s) s[t].remove();
                s = {};
                a = [];
                u = null
            },
            getCover: function e() {
                return l
            }
        }
    }();
    v.drag = function() {
        return function(e) {
            function n(e) {
                var t = v.tools.getSize(p(c).get(0)),
                    n = v.tools.getViewPaneSize(),
                    i = e.screenX,
                    r = e.screenY,
                    a = i - u.x,
                    o = r - u.y;
                u = {
                    x: i,
                    y: r
                };
                f.x += a;
                f.y += o;
                i = f.x + h[3] < d ? -h[3] : f.x - h[1] > n.width - t.width - d ? n.width - t.width + (l.rtl ? h[1] : 0) : f.x;
                t = f.y + h[0] < d ? -h[0] : f.y - h[2] > n.height - t.height - d ? n.height - t.height + h[2] : f.y;
                n = "fixed" == p(c).css("position");
                r = p(c).css("marginTop");
                a = p(c).css("marginLeft");
                s._.position = {
                    x: i,
                    y: t
                };
                0 != parseFloat(r) && "auto" != r && (t -= parseFloat(r));
                0 != parseFloat(a) && "auto" != a && (i -= parseFloat(a));
                n || (n = v.tools.getScrollPosition(), i += n.x, t += n.y);
                l.rtl && (n = v.tools.getSize(p(c).get(0)), i = v.tools.getViewPaneSize().width - n.width - i);
                t = {
                    top: (0 < t ? t : 0) + "px"
                };
                t[l.rtl ? "right" : "left"] = (0 < i ? i : 0) + "px";
                p(c).css(t);
                s._.moved = 1;
                e.preventDefault()
            }

            function i(e) {
                p(document).unbind("mousemove", n);
                p(document).unbind("mouseup", i);
                v.tools.env.ie6 && v.cover && 0 != v.cover.getCover().find(".bgiframe:visible").length && (e = v.cover.getCover().find(".bgiframe:visible").get(0).contentWindow.document, p(e).unbind("mousemove", n), p(e).unbind("mouseup", i))
            }

            function r() {
                var e = v.tools.getScrollPosition();
                s._.position = {
                    x: p(c).offset().left - e.x,
                    y: p(c).offset().top - e.y
                }
            }
            var s = this,
                l = s._ = p.extend(!0, {
                    dialog: null,
                    title: null,
                    margins: null,
                    magnetDistance: null,
                    rtl: !1
                }, e || {});
            if (l.dialog && l.title) {
                var c = l.dialog;
                e = l.title;
                var u = null,
                    f = null,
                    d = l.magnetDistance,
                    h = l.margins || [0, 0, 0, 0];
                null === d && (d = 20);
                p(e).bind("mousedown", function(e) {
                    r();
                    u = {
                        x: e.screenX,
                        y: e.screenY
                    };
                    p(document).bind("mousemove", n);
                    p(document).bind("mouseup", i);
                    f = s._.position || {};
                    if (v.tools.env.ie6 && v.cover && 0 != v.cover.getCover().find(".bgiframe:visible").length) {
                        var t = v.cover.getCover().find(".bgiframe:visible").get(0).contentWindow.document;
                        p(t).bind("mousemove", n);
                        p(t).bind("mouseup", i)
                    }
                    e.preventDefault()
                });
                p(e).bind("mouseover", function() {
                    p(this).css("cursor", "move")
                });
                p(e).bind("mouseout", function() {
                    p(this).css("cursor", "default")
                });
                r()
            }
        }
    }();
    v.bgIframe = function() {
        var n = function e(t) {
                if (!v.tools.env.ie6) return "";
                var n = [];
                t = "<html><body style=\\'background-color:" + t + ";\\'></body></html>";
                n.push('<iframe class="bgiframe" hidefocus="true" frameborder="0" tabindex="-1" style="z-index:-1" src="javascript:');
                n.push("void((function(){document.open();document.write( '" + t + "' );document.close();})())");
                n.push('" style="position:absolute;left:0;top:0;width:100%;height: 100%;progid:DXImageTransform.Microsoft.Alpha(opacity=100)"></iframe>');
                return n.join("")
            },
            e = function e(t) {
                t = p.extend(!0, {
                    dialog: null,
                    bgColor: "white"
                }, t || {});
                v.tools.env.ie6 && null != t.dialog && 0 !== p(t.dialog).length && 0 === p(t.dialog).children("iframe.bgiframe").length && p(t.dialog).prepend(n(t.bgColor))
            };
        e.html = n;
        return e
    }();
    v.center = function() {
        return function(e) {
            var t = e.dialog;
            if (0 != p(t).length) {
                delete e.dialog;
                e = p.extend(!0, {
                    dialog: null,
                    position: "absolute",
                    transform: "translateZ(20px)",
                    top: "50%",
                    left: "50%",
                    marginTop: 0,
                    relative: !0
                }, e || {});
                var n = p(t);
                "50%" == e.top && (e.marginTop = -n.outerHeight() / 2);
                "50%" == e.left && (e.marginLeft = -n.outerWidth() / 2);
                e.relative && !n.parent().is("body") && "static" == n.parent().css("position") && n.parent().css("position", "relative");
                delete e.relative;
                "fixed" == e.position && v.tools.env.ie6 && (e.marginTop += p(window).scrollTop(), e.position = "absolute", p(window).scroll(function() {
                    n.stop().animate({
                        marginTop: p(window).scrollTop() - n.outerHeight() / 2
                    })
                }));
                n.css(e)
            }
        }
    }();
    p.fn.focusUI = function() {
        return function(e) {
            var t = this.find("h2:first");
            0 != p(this).length && (e = p.extend(!0, {
                cover: !1,
                drag: !1,
                center: !1,
                bgIframe: !0,
                title: null
            }, e || {}), e.title && 0 < p(e.title).length && (t = p(e.title)), e.cover && FocusUI.cover.show({
                dialog: this
            }), e.bgIframe && (e.cover || FocusUI.bgIframe({
                dialog: this
            })), e.center && FocusUI.center({
                dialog: this,
                position: "fixed"
            }), e.drag && FocusUI.drag({
                dialog: this,
                title: t
            }))
        }
    }();
    window.FocusUI = v
}(jQuery);
jQuery(function() {
    var t = function e() {};
    var r = function e(t, n) {
        if (t.indexOf("?") !== -1) {
            t = t.split("?");
            if (t[1]) {
                t[1] = t[1] + "&" + n.join("&")
            } else {
                t[1] = n.join("&")
            }
            t = t.join("?")
        } else if (t.indexOf("#") !== -1) {
            t = t.splig("#");
            t[1] = "?" + n.join("&");
            t = t.join("#")
        } else {
            t += "?" + n.join("&")
        }
        return t
    };
    var a = "LOGON_CALLBACK_" + (new Date).valueOf();
    var n = {
        tmpl: '<div id="dialog4login" style="display:none;">' + '<div id="header4login">' + '<div id="title4login"></div>' + '<a href="javascript:void(\'close\')" id="close4login"></a>' + "</div>" + '<div id="content4login">' + "</div>" + "</div>",
        elems: {
            wrap: "#dialog4login",
            header: "#header4login",
            title: "#title4login",
            close: "#close4login",
            content: "#content4login"
        },
        style: {
            ifrWidth: 550,
            ifrHeight: 290,
            width: 565,
            height: "auto"
        },
        text: {
            title: "SIGN IN",
            close: ""
        },
        url: "",
        callback: t
    };
    var i = null;
    var o = [];
    var e = function e(t) {
        if (typeof t.callback === "function") {
            o.push(t.callback)
        }
        if (i) {
            return i
        }
        i = this;
        this._ = {};
        this.elems = {};
        this.config = jQuery.extend(true, {}, n, t);
        this.init()
    };
    e.prototype = {
        init: function e() {
            var t = this.elems;
            var n = this.config;
            t.$wrap = jQuery(n.tmpl);
            t.$header = t.$wrap.find(n.elems.header);
            t.$title = t.$wrap.find(n.elems.title);
            t.$close = t.$wrap.find(n.elems.close);
            t.$content = t.$wrap.find(n.elems.content);
            t.$title.html(n.text.title);
            t.$close.html(n.text.close);
            t.$wrap.appendTo(document.body).css({
                width: this.config.style.width,
                height: this.config.style.height
            });
            this.hide();
            var i = this;
            t.$close.click(function(e) {
                e.stopPropagation();
                e.preventDefault();
                i.hide();
                i.unload()
            })
        },
        load: function e(t, n) {
            document.domain = "made-in-china.com";
            this.unload();
            window[a] = function() {
                while (o.length) {
                    o.shift().apply(this, [].slice.call(arguments))
                }
            };
            var i = [];
            if (document.domain !== window.location.hostname) {
                i.push("domain=" + document.domain)
            }
            i.push("callback=" + a);
            n = r(n, i);
            t = r(t, ["forwardPage=" + encodeURIComponent(n)]);
            this.elems.$loginFrame = jQuery('<iframe src="' + t + '" frameborder="0" style="width:' + this.config.style.ifrWidth + "px; height:" + this.config.style.ifrHeight + 'px"></iframe>').appendTo(this.elems.$content)
        },
        unload: function e() {
            if (this.elems.$loginFrame) {
                this.elems.$loginFrame.remove()
            }
            window[a] = t
        },
        show: function e() {
            FocusUI.cover.hide();
            this.elems.$wrap.focusUI({
                cover: true,
                drag: false,
                center: true,
                bgIframe: true,
                bgColor: "#000",
                bgOpacity: .5
            });
            this.elems.$wrap.show().css("zIndex", 1e3)
        },
        hide: function e() {
            this.elems.$wrap.hide();
            FocusUI.cover.hide()
        },
        callback: function e(t) {
            typeof t === "function" && o.push(t)
        },
        title: function e(t) {
            this.elems.$title.html(t || this.config.text.title)
        },
        style: function e(t) {
            $.extend(true, this.config.style, t);
            this.elems.$wrap.css({
                width: this.config.style.width,
                height: this.config.style.height
            })
        }
    };
    window.LoginLayer = e
});
void
function($) {
    var header = {
        athena: function e() {
            $.ajax({
                url: "/head/headInfo.do",
                type: "post",
                dataType: "json",
                success: function e(t) {
                    n(t[0].status, t[0].welcomeUserName, t[0].newMailNumber)
                }
            });

            function n(e, t, n) {
                var i = encodeURIComponent(window.location.href);
                var r = $(".athena-user-state").eq(0);
                if (!r.length) {
                    r = $(".state").eq(0)
                }
                var a = e[3] || 0;
                var o = '<li class="user menu-item first" id="welUser">Welcome <a href="//membercenter.made-in-china.com"><strong>' + (t || "") + "</strong></a>!</li>";
                var s = '<li class="message menu-item"><a href="//membercenter.made-in-china.com/messagecenter.do?xcase=inbox" alt="' + n + ' New Message(s)" title="' + n + ' New Message(s)" class="red">' + '<i class="icon">&#xf0e0;</i>' + n + "</a></li>";
                var l = '<li class="sign menu-item last"><a rel="nofollow" href="https://login.made-in-china.com/logon.do?xcase=doLogout&baseNextPage=' + i + '">Sign Out</a></li>';
                if (!e) {
                    var c = '<li class="user menu-item">New user? <a rel="nofollow" href="//membercenter.made-in-china.com/join/">Join Free</a></li>' + '<li class="sign menu-item"><a rel="nofollow" href="javascript:login();">' + "Sign In</a></li>";
                    r.empty();
                    r.html(c);
                    return
                }
                r.empty();
                r.html(o + s + l)
            }
        },
        now: function now() {
            var _params = "";
            if ($("#top .site-nav .inquiry a").eq(0).attr("href") === "/report-cart/") {
                _params = "&sc=1"
            }
            window.MIC_SRVRNM = document.location.protocol + "//" + document.location.host;
            var logonStatusURI = (window.MIC_SRVRNM || "") + "/ajaxfunction.do?xcase=ajaxlogonconnection" + _params + "&t=" + (new Date).getTime();
            $.get(logonStatusURI, function(data) {
                var str = data.replace(/^.*(\[.*\]).*$/g, "$1");
                switchLogonStatus(eval(str))
            });

            function switchLogonStatus(e) {
                if (!e || !e.length) {
                    return
                }
                var t = encodeURIComponent(window.location.href);
                var n = $("#top .user-nav").eq(0);
                var i = $("#top .site-nav .inquiry a strong")[0];
                var r = e[3] || 0;
                var a = '<li class="first menu-item">Welcome <a href="//membercenter.made-in-china.com"><strong>' + (e[1] || "") + "</strong></a>!";
                var o = '<li class="message menu-item"><a href="//membercenter.made-in-china.com/messagecenter.do?xcase=inbox" alt="' + r + ' New Message(s)" title="' + r + ' New Message(s)" class="red">' + '<i class="icon">&#xf0e0;</i>' + r + "</a></li>";
                var s = '<li class="menu-item last"><a rel="nofollow" href="https://login.made-in-china.com/logon.do?xcase=doLogout&baseNextPage=' + t + '">Sign Out</a></li>';
                i.innerHTML = e[2] || 0;
                if (!e[0]) {
                    var l = '<li class="first menu-item">New user? <a rel="nofollow" href="//membercenter.made-in-china.com/join/">Join Free</a></li>' + '<li class="signin menu-item"><a rel="nofollow" href="https://login.made-in-china.com/logon.do?xcase=logon&amp;baseNextPage=' + t + '">' + "Sign In</a></li>";
                    n.empty();
                    n.html(l);
                    return
                }
                n.empty();
                n.html(a + o + s)
            }
        },
        old: function() {
            window.MIC_SRVRNM = document.location.protocol + "//" + document.location.host;
            var requestLogonStatus = function requestLogonStatus() {
                var logonStatusTimerMax = 1700;
                var logonStatusTimer = null;
                var logonStatusURI = (window.MIC_SRVRNM || "") + "/ajaxfunction.do?xcase=ajaxlogonconnection";
                var switchLogonStatus = function e() {
                    if (!window.logonStatus) {
                        return
                    }
                    var t = document.getElementById("welcome_logon_span");
                    var n = document.getElementById("inquiry_number_span");
                    var i = document.getElementById("join_now_span");
                    var r = document.getElementById("logout_span");
                    var a = document.getElementById("logon_span");
                    var o = document.getElementById("newMsg");
                    var s = document.getElementById("vohome_span");
                    if (parseInt(logonStatus[0]) > 0) {
                        t && (t.innerHTML = 'Welcome <a href="//membercenter.made-in-china.com">' + (logonStatus[1] ? "<strong>" + document.createTextNode(logonStatus[1]).nodeValue + "</strong>" : "") + "!</a> ");
                        n && (n.innerHTML = logonStatus[2]);
                        i && (i.style.display = "none");
                        r && (r.style.display = "inline");
                        a && (a.style.display = "none");
                        s && (s.style.display = "inline");
                        if (parseInt(logonStatus[3]) > 0) {
                            if (!o) {
                                o = document.createElement("span");
                                o.setAttribute("id", "newMsg");
                                t.parentNode.insertBefore(o, t.nextSibling)
                            }
                            o.innerHTML = ' | <a href="//membercenter.made-in-china.com/messagecenter.do?xcase=inbox"><img src="/images/new_msg.gif"  alt="#N0# New Message(s)" title="#N0# New Message(s)" /> #N0#</a>'.replace(/#N0#/g, logonStatus[3]);
                            o.style.display = "inline"
                        } else {
                            o && (o.style.display = "none")
                        }
                    } else {
                        t && (t.innerHTML = "");
                        n && (n.innerHTML = logonStatus[2]);
                        i && (i.style.display = "inline");
                        r && (r.style.display = "none");
                        a && (a.style.display = "inline");
                        o && (o.style.display = "none")
                    }
                };
                $.get(window.location.protocol + "//" + window.location.host + "/ajaxfunction.do?xcase=getLoginStatus", function(rsp) {
                    $.get(logonStatusURI, function(data) {
                        var str = data.replace(/^var\s*/, "window.");
                        eval(str);
                        switchLogonStatus()
                    })
                })
            };
            window.addMICtoFavorite = function(e, t) {
                try {
                    window.external.AddFavorite(e, t)
                } catch (e) {}
            };
            return function() {
                try {
                    logonStatus = "";
                    requestLogonStatus();
                    if (document.body.outerHTML) {
                        document.getElementById("welcome_fav").outerHTML = '<a id="welcome_fav" href="javascript:addMICtoFavorite(\'//www.made-in-china.com', "Made-in-China.com - The world of China products');\">Add Made-in-China.com to your favorites list</a>"
                    }
                } catch (e) {}
            }
        }.call(this)
    };
    window.headerStatus = header
}.call(this, window.jQuery);
void
function() {
    if (window["executeTM"] || window.self != window.top) {
        return
    }
    var ie = function() {
        var s = function e() {};
        var o = function e(t) {
            return t.replace(/^\s+|\s+$/g, "")
        };
        var r = function e(t, n) {
            var i = document.createElement("script");
            i.type = "text/javascript";
            i.async = i.defer = true;
            var r = false;
            var a = function e() {
                if (i.readyState === "complete" || i.readyState === "loaded") {
                    o.call(i)
                }
            };
            var o = function e() {
                i.onload = i.onerror = s;
                if (r) {
                    i.detachEvent("onreadystatechange", a)
                }
                setTimeout(n, 0)
            };
            i.onload = i.onerror = o;
            if (i.readyState && !i.addEventListener) {
                r = true;
                i.attachEvent("onreadystatechange", a)
            }
            i.src = t;
            document.body.appendChild(i)
        };
        var l = function e(t, n) {
            var i = arguments.callee;
            r(t.shift(), function() {
                if (t.length) {
                    i(t, n)
                } else {
                    n()
                }
            })
        };
        var e = function e() {
            var t = [].slice.call(arguments);
            if (!t.length) {
                return
            }
            var n = s;
            if (typeof t[t.length - 1] === "function") {
                n = t.pop()
            }
            var i = [];
            var r;
            for (var a = 0; a < t.length; a++) {
                r = t[a];
                if (typeof r === "function") {
                    r = r()
                }
                if (typeof r === "string") {
                    r = o(r);
                    if (r) {
                        i.push(r)
                    }
                }
            }
            if (!i.length) {
                n()
            } else {
                l(i, n)
            }
        };
        return e
    }.call(this);
    var n = function e(ne) {
        jQuery(function() {
            var r = function e() {};
            var h;
            var t;
            var l;
            var M = {
                NO_RIGHT: "TradeMessenger is currently available to non-Chinese buyers and suppliers with business lienses or identity card."
            };
            var c = Object.prototype.toString;
            var p = {
                map: function e(t, n) {
                    var i;
                    var r = c.call(t).match(/\w+/g)[1];
                    if (r === "Array") {
                        i = [];
                        for (var a = 0; a < t.length; a++) {
                            i.push(n(a, t[a]))
                        }
                    } else if (r === "Object") {
                        i = {};
                        for (var o in t) {
                            i[o] = n(o, t[o])
                        }
                    }
                    return i
                },
                where: function e(t, n) {
                    var i;
                    var r;
                    var a = c.call(t).match(/\w+/g)[1];
                    if (a === "Array") {
                        i = [];
                        for (var o = 0; o < t.length; o++) {
                            r = n(o, t[o]);
                            if (r) {
                                i.push(t[o])
                            }
                        }
                    } else if (a === "Object") {
                        i = {};
                        for (var s in t) {
                            r = n(s, t[s]);
                            if (r) {
                                i[s] = t[s]
                            }
                        }
                    }
                    return i
                },
                indexOf: function e(t, n) {
                    var i = -1;
                    for (var r = 0; r < t.length; r++) {
                        if (t[r] === n) {
                            i = r;
                            break
                        }
                    }
                    return i
                }
            };
            var a = function e(t) {
                var n = document.cookie.split("; ");
                for (var i = 0; i < n.length; i++) {
                    var r = n[i].split("=");
                    if (r[0] == t) return unescape(r[1])
                }
            };
            var o = {
                en: {
                    online: {
                        title: "Chat with supplier online now!",
                        href: "Chat Now",
                        text: "Chat with Supplier"
                    },
                    offline: {
                        title: "Supplier is offline now, please leave your message.",
                        href: "Please Leave a Message",
                        text: "Leave a message"
                    }
                },
                es: {
                    online: {
                        title: "¡Chatear con proveedor en línea ahora!",
                        href: "Hablar con el proveedor",
                        text: "Charlar"
                    },
                    offline: {
                        title: "El proveedor está fuera de línea ahora, por favor deje su mensaje",
                        href: "Dejar un mensaje",
                        text: "Dejar un mensaje"
                    }
                },
                pt: {
                    online: {
                        title: "Converse com o fornecedor online agora!",
                        href: "Fale com Fornecedor",
                        text: "Conversar"
                    },
                    offline: {
                        title: "O fornecedor está offline agora, deixe a sua mensagem, por favor.",
                        href: "Deixe uma mensagem",
                        text: "Deixe uma mensagem"
                    }
                },
                fr: {
                    online: {
                        title: "Chattez avec le fournisseur en ligne maintenant !",
                        href: "Discutez avec les Fournisseurs",
                        text: "Converser"
                    },
                    offline: {
                        title: "Le fournisseur est déconnecté maintenant, veuillez laisser votre message.",
                        href: "Laissez un message",
                        text: "Laissez un message"
                    }
                },
                ru: {
                    online: {
                        title: "Чат с поставщиком онлайн сейчас!",
                        href: "Чат с Поставщиком",
                        text: "Чат"
                    },
                    offline: {
                        title: "Поставщик офлайн теперь, пожалуйста, оставьте ваше сообщение.",
                        href: "Оставьте сообщение",
                        text: "Оставьте сообщение"
                    }
                },
                it: {
                    online: {
                        title: "Chatta con il fornitore in linea adesso!",
                        href: "Chatta con il fornitore",
                        text: "Chiacchierata"
                    },
                    offline: {
                        title: "Fornitore è in linea ora, si prega di lasciare il vostro messaggio.",
                        href: "Lasciate un messaggio",
                        text: "Lasciate un messaggio"
                    }
                },
                de: {
                    online: {
                        title: "Chatten Sie jetzt online mit dem Lieferanten!",
                        href: "Chatten Sie mit dem Lieferanten",
                        text: "Plaudern"
                    },
                    offline: {
                        title: "Der Lieferant ist jetzt offline. Bitte hinterlassen Sie Ihre Nachricht.",
                        href: "Hinterlass eine Nachricht",
                        text: "Hinterlass eine Nachricht"
                    }
                },
                nl: {
                    online: {
                        title: "Chat nu online met leverancier!",
                        href: "Chat met leverancier",
                        text: "Chatten"
                    },
                    offline: {
                        title: "Leverancier is nu offline, laat uw bericht achter.",
                        href: "Laat een bericht achter",
                        text: "Laat een bericht achter"
                    }
                },
                sa: {
                    online: {
                        title: "الدردشة مع المورد عبر الإنترنت الآن!",
                        href: "الدردشة مع المورد",
                        text: "دردشة"
                    },
                    offline: {
                        title: "المورد غير متصل الآن ، يرجى ترك رسالتك.",
                        href: "اترك رسالة",
                        text: "اترك رسالة"
                    }
                },
                ar: {
                    online: {
                        title: "الدردشة مع المورد عبر الإنترنت الآن!",
                        href: "الدردشة مع المورد",
                        text: "دردشة"
                    },
                    offline: {
                        title: "المورد غير متصل الآن ، يرجى ترك رسالتك.",
                        href: "اترك رسالة",
                        text: "اترك رسالة"
                    }
                },
                kr: {
                    online: {
                        title: "공급 업체 온라인과 채팅하십시오!",
                        href: "공급 업체와 채팅하십시오",
                        text: "채팅"
                    },
                    offline: {
                        title: "공급 업체는 현재 오프라인 상태입니다. 귀하의 메시지를 남겨주십시오.",
                        href: "메시지를 남겨주세요",
                        text: "메시지를 남겨주세요"
                    }
                },
                jp: {
                    online: {
                        title: "今すぐオンラインでサプライヤーとチャット！",
                        href: "サプライヤーとチャット",
                        text: "チャット"
                    },
                    offline: {
                        title: "サプライヤーは現在オフラインです。メッセージを残してください。",
                        href: "伝言を残す",
                        text: "伝言を残す"
                    }
                },
                hi: {
                    online: {
                        title: "आपूर्तिकर्ता के साथ अभी ऑनलाइन चैट करें!",
                        href: "अभी चैट करें",
                        text: "आपूर्तिकर्ता के साथ चैट करें"
                    },
                    offline: {
                        title: "आपूर्तिकर्ता अभी ऑफ़लाइन है, कृपया अपना संदेश छोड़ें.",
                        href: "कृपया कोई संदेश छोड़ें",
                        text: "एक संदेश भेजें"
                    }
                },
                th: {
                    online: {
                        title: "สนทนากับซัพพลายเออร์ออนไลน์ได้แล้ววันนี้!",
                        href: "แชทตอนนี้",
                        text: "แชทกับซัพพลายเออร์"
                    },
                    offline: {
                        title: "ซัพพลายเออร์ออฟไลน์อยู่ในขณะนี้โปรดฝากข้อความของคุณไว้",
                        href: "โปรดฝากข้อความ",
                        text: "ทิ้งข้อความ"
                    }
                },
                tr: {
                    online: {
                        title: "Hemen çevrimiçi olarak tedarikçi ile sohbet edin!",
                        href: "Şimdi Sohbet Et",
                        text: "Tedarikçi ile sohbet edin"
                    },
                    offline: {
                        title: "Tedarikçi şu anda çevrimdışı, lütfen mesajınızı bırakın.",
                        href: "Lütfen bir Mesaj bırakın",
                        text: "Mesaj bırakın"
                    }
                },
                vi: {
                    online: {
                        title: "Trò chuyện với nhà cung cấp trực tuyến ngay bây giờ!",
                        href: "Trò Chuyện Ngay",
                        text: "Trò chuyện với Nhà Cung Cấp"
                    },
                    offline: {
                        title: "Nhà cung cấp hiện đang ngoại tuyến, vui lòng để lại tin nhắn của bạn.",
                        href: "Vui lòng để lại tin nhắn",
                        text: "Để lại tin nhắn"
                    }
                },
                id: {
                    online: {
                        title: "Mengobrol dengan pemasok secara online sekarang!",
                        href: "Mengobrol Sekarang",
                        text: "Mengobrol dengan Pemasok"
                    },
                    offline: {
                        title: "Pemasok sedang offline sekarang, harap tinggalkan pesan Anda.",
                        href: "Harap tinggalkan pesan",
                        text: "Tinggalkan pesan"
                    }
                }
            };
            var e = location.hostname.split(".");
            if (e && e[0] in o) {
                e = e[0]
            } else if (e[0] == "membercenter") {
                e = window["tm3LanCode"] || "zh"
            } else if (e[0] == "purchase") {
                e = "en"
            } else {
                e = a("lang") || "en"
            }
            var f = function e() {
                var t = location.hostname.split(".");
                var n = {};
                n = {
                    lang: "en",
                    tmlang: "en"
                };
                if (t[0] in o) {
                    n.lang = t[0];
                    n.tmlang = t[0]
                } else {
                    n.lang = "en";
                    n.tmlang = "en"
                }
                if (h && h.userStatus && h.userStatus.userType && h.userStatus.userType == "2") {
                    n.tmlang = "en"
                }
                if (t[0] === "www") {
                    n.lang = "en";
                    n.tmlang = "en"
                }
                if (t[0] === "membercenter") {
                    n.lang = window["tm3LanCode"] || window["lanCode"] && ["en", "zh"][
                        [lanCode.value][0] || 1
                    ] || a("lang") || "en";
                    n.tmlang = window["tm3LanCode"] || window["lanCode"] && ["en", "zh"][
                        [lanCode.value][0] || 1
                    ] || a("lang") || "en"
                }
                if (t[0] === "purchase") {
                    var i = location.href.split("lan=");
                    if (i.length > 1 && i[1]) {
                        var r = i[1].split("&")[0];
                        n.lang = r;
                        n.tmlang = r
                    } else {
                        n.lang = "en";
                        n.tmlang = "en"
                    }
                }
                if (t[0] === "customsdata") {
                    n.lang = "zh";
                    n.tmlang = "zh"
                }
                return n
            };
            var R = function e(t) {
                var n = window.document.location.protocol + "//membercenter.made-in-china.com";
                var i = window.document.location.protocol + "//www.made-in-china.com";
                var r = window.document.location.protocol + "//webim.trademessenger.com";
                var a = "https://login.made-in-china.com";
                var o = {
                    tm: r,
                    tmloader: r + "/tm-new/assets/webtm/js/icon-new-loader.js?st=" + parseInt((new Date).valueOf() / 12 / 60 / 60 / 1e3),
                    userTMStatus: i + "/ajaxfunction.do?xcase=getTmStatus",
                    vo: n,
                    en: i,
                    token: n + "/tm.do?xcase=token4TMWeb&callback=?",
                    users: i + "/im.do?xcase=getSubAccount",
                    choose2talk: i + "/im.do?xcase=getTalk2User",
                    audit: n + "/tm.do?xcase=tmRightsCheck",
                    visitor: n + "/tm.do?xcase=visitorReg&lang=" + f().lang,
                    login: a + "/logon.do?xcase=logonPage4TM3",
                    transition: i + "/im.do?xcase=tmLogonHandle",
                    holderSelector: ".tm3_chat_status",
                    URL_THRESHOLD: 1500
                };
                h = $.extend(true, {}, o, ne.params);
                t(h)
            };
            var i = function() {
                var s = document.createElement("div");
                s.style.cssText = "width:1px; height:1px; position:absolute; top:0; left:0; overflow:hidden;";
                var l = false;
                return {
                    img: function e(t, n) {
                        if (!l) {
                            document.body.appendChild(s);
                            l = true
                        }
                        var i = document.createElement("img");
                        var r = [];
                        for (var a in n) {
                            r.push(a + "=" + encodeURIComponent(n[a]))
                        }
                        r.push("_=" + (new Date).valueOf());
                        var o = t + (/\?/.test(t) ? "&" : "?") + r.join("&");
                        i.src = o;
                        s.appendChild(i)
                    }
                }
            }();
            var P = function e() {
                i.img("//www.made-in-china.com/ajaxfunction.do?xcase=tmExceptionLog", {
                    type: 1,
                    para: encodeURIComponent(window.location.href)
                })
            };
            var s = function e(t, n) {
                i.img("//membercenter.made-in-china.com/tm.do?xcase=testTM", {
                    visitorId: t,
                    url: encodeURIComponent(n)
                })
            };
            var n = function e(t) {
                this.api = t || null;
                this.isReady = false;
                this.readyEvents = []
            };
            n.prototype = {
                execReady: function e() {
                    if (this.isReady) {
                        for (var t = 0; t < this.readyEvents.length; t++) {
                            this.readyEvents[t].call(this)
                        }
                        this.readyEvents = []
                    }
                },
                ready: function e(t) {
                    typeof t === "function" && this.readyEvents.push(t);
                    this.execReady()
                },
                beReady: function e() {
                    this.isReady = true;
                    this.execReady()
                },
                setApi: function e(t) {
                    if (t) {
                        this.api = t;
                        this.beReady()
                    }
                },
                chatTo: function e(t, n) {
                    this.api.chatTo($.extend(true, {
                        refer: location.href
                    }, t), n)
                }
            };
            var d = new n;
            var u = function e() {
                this.isReady = false;
                this.readyEvents = []
            };
            u.prototype = {
                execReady: function e() {
                    if (this.isReady) {
                        for (var t = 0; t < this.readyEvents.length; t++) {
                            this.readyEvents[t].call(this)
                        }
                    }
                },
                ready: function e(t) {
                    typeof t === "function" && this.readyEvents.push(t);
                    this.execReady()
                },
                beReady: function e() {
                    this.isReady = true;
                    this.execReady()
                }
            };
            var v = new u;
            var m = {
                chat: '<a rel="nofollow" ads-data="st:13" class="" href="javascript:void(\'Chat Now\')" title="Chat with supplier online now!">Chat with Supplier.</a>',
                online: '<a rel="nofollow" ads-data="st:13" class="" href="javascript:void(\'Chat Now\')" title="Chat with supplier online now!">Chat with Supplier.</a>',
                list: {
                    wrap: '<div class="tmer-list">' + '<div class="tm-manager-box"><span>Sales Manager: </span><div class="inline tm-manager"></div></div>' + '<div class="tm-person-box"><span>Sales Person: </span><div class="inline tm-person"></div></div>' + "</div>",
                    button: '<a rel="nofollow" ads-data="st:13" class="tm-user" href="javascript:void(\'Chat Now!\')" title="Chat with supplier online now!"></a>'
                },
                fixed: '<a rel="nofollow" ads-data="st:13" class="" href="javascript:void(\'Chat Now!\')" title="Chat with supplier online now!"></a>',
                teletext: '<div class="J-status"><div class="pic"><a rel="nofollow" ads-data="st:13" title="Chat with supplier online now!" href="#" class="J-hovertitle"><img src="https://www.micstatic.com/athena/img/tm-offline_7c6c0a90.png" alt="Offline" /></a></div><a rel="nofollow" ads-data="st:13" href="#" class="J-title">TM</a></div>',
                texticon: '<a rel="nofollow" ads-data="st:13" href="javascript:void(\'Chat Now\')" title="Chat with supplier online now!" class="tm"></a>'
            };
            var g = "Supplier is offline now, please leave your message.";
            var w = {};
            w.texticon = function(e) {
                this.$elem = jQuery(m.texticon);
                this.$elem.insertAfter(e)
            };
            w.texticon.prototype = {
                online: function e(t) {
                    this.$elem.show();
                    typeof t === "function" && t()
                },
                offline: function e(t) {
                    this.$elem.addClass("offline").show();
                    typeof t === "function" && t()
                }
            };
            w.fixed = function(e) {
                this.$elem = jQuery(m.fixed);
                this.$elem.insertAfter(e)
            };
            w.fixed.prototype = {
                online: function e(t) {
                    this.$elem.removeClass("sider-tm-off").addClass("sider-tm-on").show();
                    typeof t === "function" && t()
                },
                offline: function e(t) {
                    this.$elem.removeClass("sider-tm-on").addClass("sider-tm-off").show();
                    typeof t === "function" && t()
                }
            };
            w.teletext = function(e) {
                this.$elem = jQuery(m.teletext);
                this.$elem.insertAfter(e)
            };
            w.teletext.prototype = {
                online: function e(t) {
                    this.$elem.removeClass("offline").addClass("online");
                    this.$elem.find("img").attr({
                        alt: "online",
                        src: "https://www.micstatic.com/athena/img/tm-online_c0f9db97.png"
                    });
                    this.$elem.find(".J-title").html("Chat with Supplier");
                    this.$elem.find(".J-hovertitle").attr("title", "Chat with Supplier Online now!");
                    typeof t === "function" && t()
                },
                offline: function e(t) {
                    this.$elem.removeClass("online").addClass("offline");
                    this.$elem.find("img").attr({
                        alt: "offline",
                        src: "https://www.micstatic.com/athena/img/tm-offline_7c6c0a90.png"
                    });
                    this.$elem.find(".J-title").html("Leave a message");
                    this.$elem.find(".J-hovertitle").attr("title", g);
                    typeof t === "function" && t()
                }
            };
            w.chat = function(e) {
                this.$elem = jQuery(m.chat);
                this.$elem.insertAfter(e);
                this.lan = e.getAttribute("lan") || "en";
                this.tmLan = e.getAttribute("lan") || "en";
                this.text = e.getAttribute("text") ? JSON.parse(e.getAttribute("text"))[0] : o[this.lan]
            };
            w.chat.prototype = {
                online: function e(t) {
                    this.$elem.addClass("tm-status-on").attr({
                        title: this.text.online.title,
                        href: "javascript:void('" + this.text.online.href + "')"
                    }).html(this.text.online.text).show();
                    typeof t === "function" && t()
                },
                offline: function e(t) {
                    this.$elem.addClass("tm-status-off").attr({
                        title: this.text.offline.title,
                        href: "javascript:void('" + this.text.offline.href + "')"
                    }).html(this.text.offline.text).show();
                    typeof t === "function" && t()
                }
            };
            w.online = function(e) {
                this.$elem = jQuery(m.online);
                this.$elem.insertAfter(e)
            };
            w.online.prototype = {
                online: function e(t) {
                    this.$elem.addClass("tm-status-on").show();
                    typeof t === "function" && t()
                },
                offline: function e(t) {
                    this.$elem.addClass("tm-status-off").attr({
                        title: g,
                        href: "javascript:void('Please Leave a Message')"
                    }).html("Leave a message.").show();
                    typeof t === "function" && t()
                }
            };
            w.list = function(e, t) {
                var n = this.$wrap = jQuery(m.list.wrap);
                n.insertAfter(e);
                this.$managerBox = n.find(".tm-manager-box");
                this.$personBox = n.find(".tm-person-box");
                var i = n.find(".tm-manager");
                var r = n.find(".tm-person");
                var a = /00$/;
                this._ = {
                    has: {
                        manager: 0,
                        person: 0
                    }
                };
                var o = [];
                var s;
                var l;
                for (var c = 0; c < t.length; c++) {
                    l = t[c];
                    s = jQuery(m.list.button).html(l.name)[0];
                    s.uid = l.id;
                    if (a.test(l.id)) {
                        i.append(s);
                        this._.has.manager++
                    } else {
                        r.append(s);
                        this._.has.person++
                    }
                    o.push(s)
                }
                this.$elem = jQuery(o);
                !i.children("a.tm-user").length && i.hide();
                !r.children("a.tm-user").length && r.hide()
            };
            w.list.prototype = {
                online: function e(t) {
                    if (!this._.has.manager && !this._.has.person) {
                        this.$wrap.hide()
                    } else {
                        this.$wrap.show();
                        this.$elem.show();
                        if (!this._.has.manager) {
                            this.$managerBox.hide()
                        }
                        if (!this._.has.person) {
                            this.$personBox.hide()
                        }
                    }
                    typeof t === "function" && t()
                },
                offline: function e(t) {
                    this.$elem.hide();
                    typeof t === "function" && t()
                }
            };

            function J(e) {
                if (e) {
                    return e
                }
                if (ne && ne.render && ne.render.resetProcessors) {
                    var t = {};
                    jQuery.extend(true, t, w);
                    var n;
                    try {
                        n = ne.render.resetProcessors(t)
                    } catch (e) {
                        n = null
                    }
                    return n
                }
                return e
            }
            if (ne.render) {
                $.extend(true, m, ne.render.tags);
                $.extend(true, w, J(ne.render.processors))
            }
            var q = function e(t) {
                t.stopPropagation();
                window["faw"] && faw.manual && faw.manual.click(t.target)
            };
            var z = function e(t) {
                t.preventDefault()
            };
            var y = function e(t, n) {
                var i = t.getAttribute("processor");
                if (t.getAttribute("state") == "initialized") {
                    return null
                }
                if (i in w) {
                    var r = new w[i](t, n);
                    r.$elem.click(q).click(z);
                    if (window.sensors && window.sensors.quick) {
                        r.$elem.click(function() {
                            sensors.quick("trackAllHeatMap", this, {}, function() {})
                        })
                    }
                    t.setAttribute("state", "initialized");
                    return r
                }
                return null
            };
            var B = function e(n) {
                n = typeof n === "function" ? n : r;
                jQuery.ajax({
                    url: h.audit,
                    dataType: "jsonp",
                    jsonp: "callback",
                    cache: false,
                    success: function e(t) {
                        h.userStatus = t;
                        typeof n === "function" && n(t)
                    }
                })
            };
            var b = function e(t, n) {
                for (var i = 0; i < t.length; i++) {
                    if (t[i].id === n) {
                        return t[i]
                    }
                }
                return null
            };
            var U = function e(t, n) {
                this.id = t;
                this.elems = n ? [n] : [];
                this.users = [];
                this.online = [];
                this.offline = []
            };
            var x = function e() {
                var i = [];
                var r = [];
                var a;
                t.each(function(e, t) {
                    a = t.getAttribute("cid");
                    if (p.indexOf(r, a) === -1) {
                        r.push(a);
                        i.push(new U(a, t))
                    } else {
                        var n = b(i, a);
                        if (n) {
                            n.elems.push(t)
                        }
                    }
                });
                return {
                    coms: i,
                    ids4unique: r
                }
            };
            var _ = function e(o, s) {
                if (!l || !l.ids4unique.length) {
                    return
                }
                jQuery.ajax({
                    url: h.users,
                    dataType: "jsonp",
                    jsonp: "callback",
                    cache: false,
                    data: {
                        comIdStr: l.ids4unique.join(",")
                    },
                    success: function e(t) {
                        var n = false;
                        var i;
                        for (var r in t) {
                            n = true;
                            i = b(l.coms, r);
                            if (i) {
                                i.users = t[r].slice();
                                i.uids = [];
                                for (var a = 0; a < i.users.length; a++) {
                                    i.uids.push(i.users[a].id)
                                }
                            }
                        }
                        if (n) {
                            typeof o === "function" && o(t)
                        } else {
                            typeof s === "function" && s()
                        }
                    },
                    error: function e() {
                        typeof s === "function" && s()
                    }
                })
            };
            var C = function e(t, n) {
                var i = [];
                for (var r = 0; r < t.length; r++) {
                    if (p.indexOf(t[r].uids, n) !== -1) {
                        i.push(t[r])
                    }
                }
                return i
            };
            var H = function e() {
                var t = l.coms;
                var n = [];
                for (var i = 0; i < t.length; i++) {
                    if (!t[i].online.length) {
                        n.push(t[i])
                    }
                }
                return n
            };
            var G = function e(t, n) {
                var i = [];
                for (var r = 0; r < t.length; r++) {
                    i = i.concat(t[r][n])
                }
                return i
            };
            var W = function e(t, n, i) {
                i = i ? i : "user_ids[]=";
                var r = i;
                var a = h.URL_THRESHOLD;
                var o = [];
                var s = [];
                var l;
                for (var c = 0; c < t.length; c++) {
                    l = t[c];
                    if (n in l && l[n].length) {
                        if ((r + G(s, n).concat(l[n]).join("&" + i)).length <= a) {
                            s.push(l)
                        } else {
                            o.push(s);
                            s = [l]
                        }
                    }
                }
                o.push(s);
                return o
            };
            var V = function e(t, n, i) {
                var r = i || "user_ids[]=";
                i = "&" + r;
                var a = [];
                for (var o = 0; o < t.length; o++) {
                    a = a.concat(t[o][n])
                }
                return r + a.join(i)
            };
            var Q = function e(t, n, i) {
                jQuery.ajax({
                    url: h.choose2talk,
                    dataType: "json",
                    cache: false,
                    xhrFields: {
                        withCredentials: true
                    },
                    crossDomain: true,
                    data: {
                        userIdStr: t.online.length ? t.online.join(",") : t.offline.join(","),
                        dataId: t.dataId,
                        visitorId: t.visitorId || ""
                    },
                    success: n || r,
                    complete: i || r
                })
            };
            var X = function e(t) {
                var n = /1$/;
                var i = /([^_]+)_1$/;
                var r = "";
                if (n.test(t)) {
                    r = i.exec(t)[1]
                }
                return r
            };
            var K = {
                1: "product",
                2: "offer",
                3: "company",
                4: "productGroup"
            };
            var Y = function e(t) {
                var n = /([^_]+)_(\d)$/;
                var i = {
                    id: "null",
                    type: "null"
                };
                var r = n.exec(t);
                if (r) {
                    i = {
                        id: r[1],
                        type: K[r[2]] || "other"
                    }
                }
                return i
            };
            var S = function e(u) {
                d.ready(function() {
                    var n = function e(t) {
                        var n = this;
                        F = this;
                        c(this);
                        var i = jQuery(this);
                        var r = i.data("tmData");
                        if (!r.visitorId && h.userStatus && h.userStatus.visitorId) {
                            r.visitorId = h.userStatus.visitorId
                        }
                        var a = X(r.dataId);
                        var o = Y(r.dataId);
                        var s = r.orderId;
                        Q(r, function(e) {
                            if (e) {
                                if (a) {
                                    jQuery.extend(true, e, {
                                        productId: a
                                    })
                                }
                                if (o) {
                                    jQuery.extend(true, e, {
                                        inquiryData: o
                                    })
                                }
                                if (s) {
                                    jQuery.extend(true, e, {
                                        orderId: s
                                    })
                                }
                                if (u.lan) {
                                    jQuery.extend(true, e, {
                                        lang: f().lang
                                    })
                                }
                                if (u.tmLan) {
                                    jQuery.extend(true, e, {
                                        tmlang: f().tmlang
                                    })
                                }
                                d.chatTo(e)
                            }
                        }, function() {
                            l(n)
                        })
                    };
                    var l = function e(t) {
                        (t ? jQuery(t) : u.$elem).click(n)
                    };
                    var c = function e(t) {
                        jQuery(t).unbind("click", n)
                    };
                    l()
                })
            };
            var I = function e(t) {
                v.ready(function() {
                    var e = l.coms;
                    for (var t = 0; t < e.length; t++) {
                        jQuery(e[t].elems).each(function(e, t) {
                            t.buttonRefer && t.buttonRefer.$elem.click(function(e) {
                                e.preventDefault();
                                alert(M.NO_RIGHT)
                            })
                        })
                    }
                })
            };
            var Z = function e() {
                if ($(".J-header-refresh").length) {
                    window.location.reload(true);
                    return
                }
                if (window.topLoginInfo && window.topLoginInfo.request) {
                    return window.topLoginInfo.request()
                }
                var t = "header-type";
                if ($(".athena-user-state").length) {
                    t = "athena"
                } else if ($("#logon_span").length) {
                    t = "old"
                } else if ($("#welcome_logon_span").length) {
                    t = "now"
                }
                if (t in window.headerStatus) {
                    window.headerStatus[t]()
                } else if (typeof window.logonRefresh === "function") {
                    window.logonRefresh()
                }
            };
            var F = null;
            var T = {
                en: {
                    VISITOR: "Online Chat",
                    LOGIN: "SIGN IN"
                },
                es: {
                    VISITOR: "Charla en Línea",
                    LOGIN: "SIGN IN"
                },
                pt: {
                    VISITOR: "Bate-papo Online",
                    LOGIN: "SIGN IN"
                },
                fr: {
                    VISITOR: "Chat en Ligne",
                    LOGIN: "SIGN IN"
                },
                ru: {
                    VISITOR: "Онлайн Чат",
                    LOGIN: "SIGN IN"
                },
                it: {
                    VISITOR: "Chat Online",
                    LOGIN: "SIGN IN"
                },
                de: {
                    VISITOR: "Online Chat",
                    LOGIN: "SIGN IN"
                },
                nl: {
                    VISITOR: "Online Chat",
                    LOGIN: "SIGN IN"
                },
                sa: {
                    VISITOR: "المحادثة على الإنترنت",
                    LOGIN: "SIGN IN"
                },
                ar: {
                    VISITOR: "المحادثة على الإنترنت",
                    LOGIN: "SIGN IN"
                },
                kr: {
                    VISITOR: "온라인 채팅",
                    LOGIN: "SIGN IN"
                },
                jp: {
                    VISITOR: "オンラインチャット",
                    LOGIN: "SIGN IN"
                },
                zh: {
                    VISITOR: "在线聊天",
                    LOGIN: "SIGN IN"
                },
                cn: {
                    VISITOR: "在线聊天",
                    LOGIN: "SIGN IN"
                },
                hi: {
                    VISITOR: "ऑनलाइन चैट",
                    LOGIN: "SIGN IN"
                },
                th: {
                    VISITOR: "การแชทออนไลน์",
                    LOGIN: "SIGN IN"
                },
                tr: {
                    VISITOR: "Çevrimiçi Sohbet",
                    LOGIN: "SIGN IN"
                },
                vi: {
                    VISITOR: "Trò chuyện trực tuyến",
                    LOGIN: "SIGN IN"
                },
                id: {
                    VISITOR: "Obrolan Online",
                    LOGIN: "SIGN IN"
                }
            }[f().lang];
            var k = {
                VISITOR: {
                    ifrWidth: 475,
                    ifrHeight: 290,
                    width: 490,
                    height: "auto"
                },
                LOGIN: {
                    ifrWidth: 550,
                    ifrHeight: 290,
                    width: 565,
                    height: "auto"
                }
            };
            var O = new LoginLayer({
                callback: function e(t) {
                    var n = arguments.callee;
                    O.hide();
                    h.userStatus = $.extend(true, {}, h.userStatus, t);
                    if (t.tmaction === "signin") {
                        setTimeout(function() {
                            O.callback(n);
                            O.unload();
                            O.load(h.login, h.transition);
                            O.title(T.LOGIN);
                            O.style(k.LOGIN);
                            O.show()
                        }, 1)
                    } else if (t.visitorId) {
                        if (window.MaiTong) {
                            var i = h.token;
                            i += "&visitorId=" + t.visitorId;
                            h.userStatus.tm = "true";
                            MaiTong.updateConfig({
                                token_url: i
                            });
                            s(t.visitorId, i);
                            var r = jQuery(F).data("tmData");
                            jQuery(F).data("tmData", _objectSpread2(_objectSpread2({}, r), {}, {
                                visitorId: h.userStatus.visitorId
                            }));
                            if (h.userStatus && h.userStatus.tm === "true") {
                                MaiTong.startWeb();
                                d.setApi(MaiTong)
                            }
                            if (F) {
                                jQuery(F).click()
                            }
                        } else {
                            A(function() {
                                if (!window.MaiTong) {
                                    return
                                }
                                h.userStatus.tm = "true";
                                MaiTong.updateConfig({
                                    token_url: i
                                });
                                s(t.visitorId, i);
                                var e = jQuery(F).data("tmData");
                                jQuery(F).data("tmData", _objectSpread2(_objectSpread2({}, e), {}, {
                                    visitorId: h.userStatus.visitorId
                                }));
                                if (h.userStatus && h.userStatus.tm === "true") {
                                    MaiTong.startWeb();
                                    d.setApi(MaiTong)
                                }
                                if (F) {
                                    jQuery(F).click()
                                }
                            })
                        }
                        setTimeout(function() {
                            O.unload()
                        }, 1)
                    } else {
                        h.userStatus = $.extend(true, {}, h.userStatus, t, {
                            login: "true",
                            tm: t.tm
                        });
                        MaiTong.updateConfig({
                            tmlang: f().tmlang,
                            lang: f().lang
                        });
                        if (t.tm === "true") {
                            A(function() {
                                if (F) {
                                    jQuery(F).click()
                                }
                            })
                        } else {
                            I()
                        }
                        Z();
                        setTimeout(function() {
                            O.unload()
                        }, 1)
                    }
                }
            });
            var j = {};
            setTimeout(function() {
                j.show = function() {
                    if (h.userStatus.ip == "1") {
                        O.unload();
                        O.load(h.login, h.transition);
                        O.title(T.LOGIN);
                        O.style(k.LOGIN);
                        O.show()
                    } else {
                        O.unload();
                        O.load(h.visitor, h.transition);
                        O.title(T.VISITOR);
                        O.style(k.LOGIN);
                        O.show()
                    }
                };
                j.hide = function() {
                    O.hide()
                };
                j.callback = function(e) {
                    typeof e === "function" && O.callback(e)
                };
                if (!window["loginPopup"]) {
                    window.loginPopup = j
                }
            }, 1);
            var E = function e() {
                var t = "user_ids[]=";
                var n = H();
                var i = W(n, "uids", t);
                var r = 0;
                for (var a = 0; a < i.length; a++) {
                    var o = i[a];
                    void
                    function(d) {
                        jQuery.ajax({
                            url: h.userTMStatus + "&" + V(d, "uids", t),
                            dataType: "jsonp",
                            jsonp: "callback",
                            cache: false,
                            timeout: 1e4,
                            data: {
                                domain: "micen"
                            },
                            success: function e(t) {
                                var n;
                                for (var i in t) {
                                    if (t[i].online) {
                                        n = C(d, i);
                                        for (var r = 0; r < n.length; r++) {
                                            n[r].online.push(i)
                                        }
                                    } else {
                                        n = C(d, i);
                                        for (var r = 0; r < n.length; r++) {
                                            n[r].offline.push(i)
                                        }
                                    }
                                }
                                for (var r = 0; r < d.length; r++) {
                                    n = d[r];
                                    var a;
                                    for (var o = 0; o < n.elems.length; o++) {
                                        var s = n.elems[o];
                                        var l = s.getAttribute("processor");
                                        var c = s.getAttribute("dataid");
                                        var u = s.getAttribute("orderid");
                                        switch (l) {
                                            case "list":
                                                {
                                                    var f = p.where(n.users, function(e, t) {
                                                        return p.indexOf(n.online, t.id) !== -1
                                                    });a = y(s, f);
                                                    if (a) {
                                                        s.buttonRefer = a;
                                                        a.$elem.each(function(e, t) {
                                                            jQuery(t).data("tmData", {
                                                                online: [t.uid],
                                                                dataId: c,
                                                                orderId: u,
                                                                visitorId: h.userStatus && h.userStatus.visitorId || ""
                                                            })
                                                        })
                                                    }
                                                };
                                                break;
                                            default:
                                                {
                                                    a = y(n.elems[o]);
                                                    if (a) {
                                                        s.buttonRefer = a;
                                                        a.$elem.data("tmData", {
                                                            online: n.online.slice(),
                                                            offline: n.offline.slice(),
                                                            dataId: c,
                                                            orderId: u,
                                                            visitorId: h.userStatus && h.userStatus.visitorId || ""
                                                        });
                                                        if (!n.online.length) {
                                                            a.offline();
                                                            S(a);
                                                            continue
                                                        }
                                                    }
                                                }
                                        }
                                        if (a) {
                                            a.online();
                                            S(a)
                                        }
                                    }
                                }
                            },
                            error: function e() {
                                P()
                            },
                            complete: function e() {
                                r++;
                                if (r === i.length) {
                                    v.beReady()
                                }
                            }
                        })
                    }.call(this, o)
                }
            };
            var L = {
                UNLOAD: 1,
                LOADING: 2,
                LOADED: 3
            };
            var ee;
            var te = L.UNLOAD;
            var N = false;
            var D = function e(t, n) {
                if (!N) {
                    MaiTong.configWeb({
                        token_url: t || h.token,
                        domain: "micen",
                        lang: n || f().lang || "en",
                        tmlang: n || f().tmlang || "en"
                    });
                    N = true
                }
            };
            var A = function e(t) {
                t = typeof t === "function" ? t : r;
                if (te !== L.UNLOAD) {
                    t(window.MaiTong);
                    return
                }
                ie(h.tmloader, function() {
                    if (!window.MaiTong) {
                        return
                    }
                    if ("ip" in h.userStatus && h.userStatus.ip !== "1" && h.userStatus.login !== "true") {
                        if (h.userStatus && h.userStatus.tm === "true" && h.userStatus.visitorId) {
                            var e = h.token + "&visitorId=" + h.userStatus.visitorId;
                            D(e);
                            s(h.userStatus.visitorId, e);
                            MaiTong.startWeb();
                            d.setApi(MaiTong)
                        } else {
                            D();
                            if (h.userStatus && h.userStatus.tm === "true") {
                                MaiTong.startWeb();
                                d.setApi(MaiTong)
                            }
                        }
                    } else {
                        D();
                        d.setApi(MaiTong);
                        if (h.userStatus && h.userStatus.login === "true" && h.userStatus.tm === "true") {
                            MaiTong.startWeb()
                        }
                    }
                    t(MaiTong)
                })
            };
            R(function(e) {
                t = jQuery(h.holderSelector).filter(function() {
                    return !this.__tm_rendered__
                }).each(function() {
                    this.__tm_rendered__ = true
                });
                if (t.length) {
                    ee = f().tmlang
                }
                l = x();
                _(function() {
                    E()
                });
                B(function(e) {
                    if (e.login === "true" || e.visitorId) {
                        if (e.tm === "true") {
                            A()
                        } else {
                            I()
                        }
                    } else {
                        A()
                    }
                })
            });
            window.loadTmChat = function() {
                l = x();
                _(function() {
                    E()
                })
            }
        })
    };
    var i = function() {
        var t = false;
        return function() {
            if (t) {
                return
            }
            var e = document.createElement("link");
            e.rel = "stylesheet";
            e.type = "text/css";
            e.media = "all";
            e.href = "https://www.micstatic.com/common/css/tm/tm_e26ae765.css";
            document.getElementsByTagName("head")[0].appendChild(e);
            t = true
        }
    }.call(this);
    var r = function() {
        var t = [];
        var n = function e() {
            if (window.jQuery) {
                while (t.length) {
                    t.shift().call(this)
                }
            }
        };
        return function(e) {
            typeof e === "function" && t.push(e);
            n();
            if (!window.jQuery) {
                ie("https://www.micstatic.com/common/js/libs/jquery_2ad57377.js", function() {
                    n()
                })
            }
        }
    }.call(this);
    var e = function e(t) {
        i();
        r(function() {
            n(t || {})
        })
    };
    window.addEventListener ? window.addEventListener("load", e, false) : window.attachEvent("onload", e);
    window.executeTM = e
}.call(this);
(function(e, t) {
    (typeof exports === "undefined" ? "undefined" : _typeof(exports)) === "object" && typeof module !== "undefined" ? t(exports) : typeof define === "function" && define.amd ? define(["exports"], t) : (e = typeof globalThis !== "undefined" ? globalThis : e || self, t(e.future = e.future || {}))
})(this, function(b) {
    "use strict";

    function x(e, t) {
        if (t === void 0) t = {};
        var n = t.insertAt;
        if (!e || typeof document === "undefined") {
            return
        }
        var i = document.head || document.getElementsByTagName("head")[0];
        var r = document.createElement("style");
        r.type = "text/css";
        if (n === "top") {
            if (i.firstChild) {
                i.insertBefore(r, i.firstChild)
            } else {
                i.appendChild(r)
            }
        } else {
            i.appendChild(r)
        }
        if (r.styleSheet) {
            r.styleSheet.cssText = e
        } else {
            r.appendChild(document.createTextNode(e))
        }
    }

    function _(e, t, n) {
        if (t in e) {
            Object.defineProperty(e, t, {
                value: n,
                enumerable: true,
                configurable: true,
                writable: true
            })
        } else {
            e[t] = n
        }
        return e
    }

    function C(e, t) {
        if (e == null) return {};
        var n = {};
        var i = Object.keys(e);
        var r, a;
        for (a = 0; a < i.length; a++) {
            r = i[a];
            if (t.indexOf(r) >= 0) continue;
            n[r] = e[r]
        }
        return n
    }

    function S(e, t) {
        if (e == null) return {};
        var n = C(e, t);
        var i, r;
        if (Object.getOwnPropertySymbols) {
            var a = Object.getOwnPropertySymbols(e);
            for (r = 0; r < a.length; r++) {
                i = a[r];
                if (t.indexOf(i) >= 0) continue;
                if (!Object.prototype.propertyIsEnumerable.call(e, i)) continue;
                n[i] = e[i]
            }
        }
        return n
    }
    var I = typeof globalThis !== "undefined" ? globalThis : typeof window !== "undefined" ? window : typeof global !== "undefined" ? global : typeof self !== "undefined" ? self : {};
    var O = function e(t) {
        return t && t.Math == Math && t
    };
    var e = O((typeof globalThis === "undefined" ? "undefined" : _typeof(globalThis)) == "object" && globalThis) || O((typeof window === "undefined" ? "undefined" : _typeof(window)) == "object" && window) || O((typeof self === "undefined" ? "undefined" : _typeof(self)) == "object" && self) || O(_typeof(I) == "object" && I) || function() {
        return this
    }() || Function("return this")();
    var j = Function.prototype;
    var E = j.bind;
    var L = j.call;
    var N = E && E.bind(L);
    var t = E ? function(e) {
        return e && N(L, e)
    } : function(e) {
        return e && function() {
            return L.apply(e, arguments)
        }
    };
    var n = function e(t) {
        try {
            return !!t()
        } catch (e) {
            return true
        }
    };
    var D = t;
    var A = D({}.toString);
    var M = D("".slice);
    var R = function e(t) {
        return M(A(t), 8, -1)
    };
    var P = e;
    var J = t;
    var q = n;
    var z = R;
    var B = P.Object;
    var U = J("".split);
    var H = q(function() {
        return !B("z").propertyIsEnumerable(0)
    }) ? function(e) {
        return z(e) == "String" ? U(e, "") : B(e)
    } : B;
    var G = e;
    var W = G.TypeError;
    var V = function e(t) {
        if (t == undefined) throw W("Can't call method on " + t);
        return t
    };
    var Q = H;
    var X = V;
    var i = function e(t) {
        return Q(X(t))
    };
    var K = {
        exports: {}
    };
    var Y = e;
    var Z = Object.defineProperty;
    var ee = function e(t, n) {
        try {
            Z(Y, t, {
                value: n,
                configurable: true,
                writable: true
            })
        } catch (e) {
            Y[t] = n
        }
        return n
    };
    var te = e;
    var ue = ee;
    var fe = "__core-js_shared__";
    var de = te[fe] || ue(fe, {});
    var he = de;
    var pe = he;
    (K.exports = function(e, t) {
        return pe[e] || (pe[e] = t !== undefined ? t : {})
    })("versions", []).push({
        version: "3.19.1",
        mode: "global",
        copyright: "© 2021 Denis Pushkarev (zloirock.ru)"
    });
    var ve = e;
    var be = V;
    var xe = ve.Object;
    var _e = function e(t) {
        return xe(be(t))
    };
    var Ce = t;
    var Se = _e;
    var Ie = Ce({}.hasOwnProperty);
    var r = Object.hasOwn || function e(t, n) {
        return Ie(Se(t), n)
    };
    var $e = t;
    var Fe = 0;
    var Te = Math.random();
    var ke = $e(1..toString);
    var Oe = function e(t) {
        return "Symbol(" + (t === undefined ? "" : t) + ")_" + ke(++Fe + Te, 36)
    };
    var a = function e(t) {
        return typeof t == "function"
    };
    var je = e;
    var Ee = a;
    var Le = function e(t) {
        return Ee(t) ? t : undefined
    };
    var Ne = function e(t, n) {
        return arguments.length < 2 ? Le(je[t]) : je[t] && je[t][n]
    };
    var De = Ne;
    var Ae = De("navigator", "userAgent") || "";
    var Me = e;
    var Re = Ae;
    var Pe = Me.process;
    var Je = Me.Deno;
    var qe = Pe && Pe.versions || Je && Je.version;
    var ze = qe && qe.v8;
    var o, Be;
    if (ze) {
        o = ze.split(".");
        Be = o[0] > 0 && o[0] < 4 ? 1 : +(o[0] + o[1])
    }
    if (!Be && Re) {
        o = Re.match(/Edge\/(\d+)/);
        if (!o || o[1] >= 74) {
            o = Re.match(/Chrome\/(\d+)/);
            if (o) Be = +o[1]
        }
    }
    var Ue = Be;
    var He = Ue;
    var Ge = n;
    var We = !!Object.getOwnPropertySymbols && !Ge(function() {
        var e = Symbol();
        return !String(e) || !(Object(e) instanceof Symbol) || !Symbol.sham && He && He < 41
    });
    var Ve = We;
    var Qe = Ve && !Symbol.sham && _typeof(Symbol.iterator) == "symbol";
    var Xe = e;
    var Ke = K.exports;
    var Ye = r;
    var Ze = Oe;
    var et = We;
    var tt = Qe;
    var s = Ke("wks");
    var l = Xe.Symbol;
    var nt = l && l["for"];
    var it = tt ? l : l && l.withoutSetter || Ze;
    var c = function e(t) {
        if (!Ye(s, t) || !(et || typeof s[t] == "string")) {
            var n = "Symbol." + t;
            if (et && Ye(l, t)) {
                s[t] = l[t]
            } else if (tt && nt) {
                s[t] = nt(n)
            } else {
                s[t] = it(n)
            }
        }
        return s[t]
    };
    var rt = a;
    var u = function e(t) {
        return _typeof(t) == "object" ? t !== null : rt(t)
    };
    var at = e;
    var ot = u;
    var st = at.String;
    var lt = at.TypeError;
    var f = function e(t) {
        if (ot(t)) return t;
        throw lt(st(t) + " is not an object")
    };
    var ct = n;
    var d = !ct(function() {
        return Object.defineProperty({}, 1, {
            get: function e() {
                return 7
            }
        })[1] != 7
    });
    var h = {};
    var ut = e;
    var ft = u;
    var dt = ut.document;
    var ht = ft(dt) && ft(dt.createElement);
    var pt = function e(t) {
        return ht ? dt.createElement(t) : {}
    };
    var vt = d;
    var mt = n;
    var gt = pt;
    var wt = !vt && !mt(function() {
        return Object.defineProperty(gt("div"), "a", {
            get: function e() {
                return 7
            }
        }).a != 7
    });
    var yt = Function.prototype.call;
    var bt = yt.bind ? yt.bind(yt) : function() {
        return yt.apply(yt, arguments)
    };
    var xt = t;
    var _t = xt({}.isPrototypeOf);
    var Ct = e;
    var St = Ne;
    var It = a;
    var $t = _t;
    var Ft = Qe;
    var Tt = Ct.Object;
    var kt = Ft ? function(e) {
        return _typeof(e) == "symbol"
    } : function(e) {
        var t = St("Symbol");
        return It(t) && $t(t.prototype, Tt(e))
    };
    var Ot = e;
    var jt = Ot.String;
    var Et = function e(t) {
        try {
            return jt(t)
        } catch (e) {
            return "Object"
        }
    };
    var Lt = e;
    var Nt = a;
    var Dt = Et;
    var At = Lt.TypeError;
    var Mt = function e(t) {
        if (Nt(t)) return t;
        throw At(Dt(t) + " is not a function")
    };
    var Rt = Mt;
    var Pt = function e(t, n) {
        var i = t[n];
        return i == null ? undefined : Rt(i)
    };
    var Jt = e;
    var qt = bt;
    var zt = a;
    var Bt = u;
    var Ut = Jt.TypeError;
    var Ht = function e(t, n) {
        var i, r;
        if (n === "string" && zt(i = t.toString) && !Bt(r = qt(i, t))) return r;
        if (zt(i = t.valueOf) && !Bt(r = qt(i, t))) return r;
        if (n !== "string" && zt(i = t.toString) && !Bt(r = qt(i, t))) return r;
        throw Ut("Can't convert object to primitive value")
    };
    var Gt = e;
    var Wt = bt;
    var Vt = u;
    var Qt = kt;
    var Xt = Pt;
    var Kt = Ht;
    var Yt = c;
    var Zt = Gt.TypeError;
    var en = Yt("toPrimitive");
    var tn = function e(t, n) {
        if (!Vt(t) || Qt(t)) return t;
        var i = Xt(t, en);
        var r;
        if (i) {
            if (n === undefined) n = "default";
            r = Wt(i, t, n);
            if (!Vt(r) || Qt(r)) return r;
            throw Zt("Can't convert object to primitive value")
        }
        if (n === undefined) n = "number";
        return Kt(t, n)
    };
    var nn = tn;
    var rn = kt;
    var an = function e(t) {
        var n = nn(t, "string");
        return rn(n) ? n : n + ""
    };
    var on = e;
    var sn = d;
    var ln = wt;
    var cn = f;
    var un = an;
    var fn = on.TypeError;
    var dn = Object.defineProperty;
    h.f = sn ? dn : function e(t, n, i) {
        cn(t);
        n = un(n);
        cn(i);
        if (ln) try {
            return dn(t, n, i)
        } catch (e) {}
        if ("get" in i || "set" in i) throw fn("Accessors not supported");
        if ("value" in i) t[n] = i.value;
        return t
    };
    var hn = Math.ceil;
    var pn = Math.floor;
    var vn = function e(t) {
        var n = +t;
        return n !== n || n === 0 ? 0 : (n > 0 ? pn : hn)(n)
    };
    var mn = vn;
    var gn = Math.max;
    var wn = Math.min;
    var yn = function e(t, n) {
        var i = mn(t);
        return i < 0 ? gn(i + n, 0) : wn(i, n)
    };
    var bn = vn;
    var xn = Math.min;
    var _n = function e(t) {
        return t > 0 ? xn(bn(t), 9007199254740991) : 0
    };
    var Cn = _n;
    var Sn = function e(t) {
        return Cn(t.length)
    };
    var In = i;
    var $n = yn;
    var Fn = Sn;
    var Tn = function e(s) {
        return function(e, t, n) {
            var i = In(e);
            var r = Fn(i);
            var a = $n(n, r);
            var o;
            if (s && t != t)
                while (r > a) {
                    o = i[a++];
                    if (o != o) return true
                } else
                    for (; r > a; a++) {
                        if ((s || a in i) && i[a] === t) return s || a || 0
                    }
            return !s && -1
        }
    };
    var kn = {
        includes: Tn(true),
        indexOf: Tn(false)
    };
    var On = {};
    var jn = t;
    var En = r;
    var Ln = i;
    var Nn = kn.indexOf;
    var Dn = On;
    var An = jn([].push);
    var Mn = function e(t, n) {
        var i = Ln(t);
        var r = 0;
        var a = [];
        var o;
        for (o in i) !En(Dn, o) && En(i, o) && An(a, o);
        while (n.length > r)
            if (En(i, o = n[r++])) {
                ~Nn(a, o) || An(a, o)
            }
        return a
    };
    var Rn = ["constructor", "hasOwnProperty", "isPrototypeOf", "propertyIsEnumerable", "toLocaleString", "toString", "valueOf"];
    var Pn = Mn;
    var Jn = Rn;
    var qn = Object.keys || function e(t) {
        return Pn(t, Jn)
    };
    var zn = d;
    var Bn = h;
    var Un = f;
    var Hn = i;
    var Gn = qn;
    var Wn = zn ? Object.defineProperties : function e(t, n) {
        Un(t);
        var i = Hn(n);
        var r = Gn(n);
        var a = r.length;
        var o = 0;
        var s;
        while (a > o) Bn.f(t, s = r[o++], i[s]);
        return t
    };
    var Vn = Ne;
    var Qn = Vn("document", "documentElement");
    var Xn = K.exports;
    var Kn = Oe;
    var Yn = Xn("keys");
    var Zn = function e(t) {
        return Yn[t] || (Yn[t] = Kn(t))
    };
    var ei = f;
    var ti = Wn;
    var ni = Rn;
    var ii = On;
    var ri = Qn;
    var ai = pt;
    var oi = Zn;
    var si = ">";
    var li = "<";
    var ci = "prototype";
    var ui = "script";
    var fi = oi("IE_PROTO");
    var di = function e() {};
    var hi = function e(t) {
        return li + ui + si + t + li + "/" + ui + si
    };
    var pi = function e(t) {
        t.write(hi(""));
        t.close();
        var n = t.parentWindow.Object;
        t = null;
        return n
    };
    var vi = function e() {
        var t = ai("iframe");
        var n = "java" + ui + ":";
        var i;
        t.style.display = "none";
        ri.appendChild(t);
        t.src = String(n);
        i = t.contentWindow.document;
        i.open();
        i.write(hi("document.F=Object"));
        i.close();
        return i.F
    };
    var mi;
    var gi = function e() {
        try {
            mi = new ActiveXObject("htmlfile")
        } catch (e) {}
        gi = typeof document != "undefined" ? document.domain && mi ? pi(mi) : vi() : pi(mi);
        var t = ni.length;
        while (t--) delete gi[ci][ni[t]];
        return gi()
    };
    ii[fi] = true;
    var wi = Object.create || function e(t, n) {
        var i;
        if (t !== null) {
            di[ci] = ei(t);
            i = new di;
            di[ci] = null;
            i[fi] = t
        } else i = gi();
        return n === undefined ? i : ti(i, n)
    };
    var yi = c;
    var bi = wi;
    var xi = h;
    var _i = yi("unscopables");
    var Ci = Array.prototype;
    if (Ci[_i] == undefined) {
        xi.f(Ci, _i, {
            configurable: true,
            value: bi(null)
        })
    }
    var Si = function e(t) {
        Ci[_i][t] = true
    };
    var Ii = t;
    var $i = a;
    var Fi = he;
    var Ti = Ii(Function.toString);
    if (!$i(Fi.inspectSource)) {
        Fi.inspectSource = function(e) {
            return Ti(e)
        }
    }
    var ki = Fi.inspectSource;
    var Oi = e;
    var ji = a;
    var Ei = ki;
    var Li = Oi.WeakMap;
    var Ni = ji(Li) && /native code/.test(Ei(Li));
    var Di = function e(t, n) {
        return {
            enumerable: !(t & 1),
            configurable: !(t & 2),
            writable: !(t & 4),
            value: n
        }
    };
    var Ai = d;
    var Mi = h;
    var Ri = Di;
    var Pi = Ai ? function(e, t, n) {
        return Mi.f(e, t, Ri(1, n))
    } : function(e, t, n) {
        e[t] = n;
        return e
    };
    var Ji = Ni;
    var qi = e;
    var zi = t;
    var Bi = u;
    var Ui = Pi;
    var Hi = r;
    var Gi = he;
    var Wi = Zn;
    var Vi = On;
    var Qi = "Object already initialized";
    var Xi = qi.TypeError;
    var Ki = qi.WeakMap;
    var Yi, Zi, er;
    var tr = function e(t) {
        return er(t) ? Zi(t) : Yi(t, {})
    };
    var nr = function e(n) {
        return function(e) {
            var t;
            if (!Bi(e) || (t = Zi(e)).type !== n) {
                throw Xi("Incompatible receiver, " + n + " required")
            }
            return t
        }
    };
    if (Ji || Gi.state) {
        var p = Gi.state || (Gi.state = new Ki);
        var ir = zi(p.get);
        var rr = zi(p.has);
        var ar = zi(p.set);
        Yi = function e(t, n) {
            if (rr(p, t)) throw new Xi(Qi);
            n.facade = t;
            ar(p, t, n);
            return n
        };
        Zi = function e(t) {
            return ir(p, t) || {}
        };
        er = function e(t) {
            return rr(p, t)
        }
    } else {
        var v = Wi("state");
        Vi[v] = true;
        Yi = function e(t, n) {
            if (Hi(t, v)) throw new Xi(Qi);
            n.facade = t;
            Ui(t, v, n);
            return n
        };
        Zi = function e(t) {
            return Hi(t, v) ? t[v] : {}
        };
        er = function e(t) {
            return Hi(t, v)
        }
    }
    var or = {
        set: Yi,
        get: Zi,
        has: er,
        enforce: tr,
        getterFor: nr
    };
    var sr = {};
    var lr = {};
    var cr = {}.propertyIsEnumerable;
    var ur = Object.getOwnPropertyDescriptor;
    var fr = ur && !cr.call({
        1: 2
    }, 1);
    lr.f = fr ? function e(t) {
        var n = ur(this, t);
        return !!n && n.enumerable
    } : cr;
    var dr = d;
    var hr = bt;
    var pr = lr;
    var vr = Di;
    var mr = i;
    var gr = an;
    var wr = r;
    var yr = wt;
    var br = Object.getOwnPropertyDescriptor;
    sr.f = dr ? br : function e(t, n) {
        t = mr(t);
        n = gr(n);
        if (yr) try {
            return br(t, n)
        } catch (e) {}
        if (wr(t, n)) return vr(!hr(pr.f, t, n), t[n])
    };
    var xr = {
        exports: {}
    };
    var _r = d;
    var Cr = r;
    var Sr = Function.prototype;
    var Ir = _r && Object.getOwnPropertyDescriptor;
    var $r = Cr(Sr, "name");
    var Fr = $r && function e() {}.name === "something";
    var Tr = $r && (!_r || _r && Ir(Sr, "name").configurable);
    var kr = {
        EXISTS: $r,
        PROPER: Fr,
        CONFIGURABLE: Tr
    };
    var Or = e;
    var jr = a;
    var Er = r;
    var Lr = Pi;
    var Nr = ee;
    var Dr = ki;
    var Ar = or;
    var Mr = kr.CONFIGURABLE;
    var Rr = Ar.get;
    var Pr = Ar.enforce;
    var Jr = String(String).split("String");
    (xr.exports = function(e, t, n, i) {
        var r = i ? !!i.unsafe : false;
        var a = i ? !!i.enumerable : false;
        var o = i ? !!i.noTargetGet : false;
        var s = i && i.name !== undefined ? i.name : t;
        var l;
        if (jr(n)) {
            if (String(s).slice(0, 7) === "Symbol(") {
                s = "[" + String(s).replace(/^Symbol\(([^)]*)\)/, "$1") + "]"
            }
            if (!Er(n, "name") || Mr && n.name !== s) {
                Lr(n, "name", s)
            }
            l = Pr(n);
            if (!l.source) {
                l.source = Jr.join(typeof s == "string" ? s : "")
            }
        }
        if (e === Or) {
            if (a) e[t] = n;
            else Nr(t, n);
            return
        } else if (!r) {
            delete e[t]
        } else if (!o && e[t]) {
            a = true
        }
        if (a) e[t] = n;
        else Lr(e, t, n)
    })(Function.prototype, "toString", function e() {
        return jr(this) && Rr(this).source || Dr(this)
    });
    var qr = {};
    var zr = Mn;
    var Br = Rn;
    var Ur = Br.concat("length", "prototype");
    qr.f = Object.getOwnPropertyNames || function e(t) {
        return zr(t, Ur)
    };
    var Hr = {};
    Hr.f = Object.getOwnPropertySymbols;
    var Gr = Ne;
    var Wr = t;
    var Vr = qr;
    var Qr = Hr;
    var Xr = f;
    var Kr = Wr([].concat);
    var Yr = Gr("Reflect", "ownKeys") || function e(t) {
        var n = Vr.f(Xr(t));
        var i = Qr.f;
        return i ? Kr(n, i(t)) : n
    };
    var Zr = r;
    var ea = Yr;
    var ta = sr;
    var na = h;
    var ia = function e(t, n) {
        var i = ea(n);
        var r = na.f;
        var a = ta.f;
        for (var o = 0; o < i.length; o++) {
            var s = i[o];
            if (!Zr(t, s)) r(t, s, a(n, s))
        }
    };
    var ra = n;
    var aa = a;
    var oa = /#|\.prototype\./;
    var sa = function e(t, n) {
        var i = ca[la(t)];
        return i == fa ? true : i == ua ? false : aa(n) ? ra(n) : !!n
    };
    var la = sa.normalize = function(e) {
        return String(e).replace(oa, ".").toLowerCase()
    };
    var ca = sa.data = {};
    var ua = sa.NATIVE = "N";
    var fa = sa.POLYFILL = "P";
    var da = sa;
    var ha = e;
    var pa = sr.f;
    var va = Pi;
    var ma = xr.exports;
    var ga = ee;
    var wa = ia;
    var ya = da;
    var ba = function e(t, n) {
        var i = t.target;
        var r = t.global;
        var a = t.stat;
        var o, s, l, c, u, f;
        if (r) {
            s = ha
        } else if (a) {
            s = ha[i] || ga(i, {})
        } else {
            s = (ha[i] || {}).prototype
        }
        if (s)
            for (l in n) {
                u = n[l];
                if (t.noTargetGet) {
                    f = pa(s, l);
                    c = f && f.value
                } else c = s[l];
                o = ya(r ? l : i + (a ? "." : "#") + l, t.forced);
                if (!o && c !== undefined) {
                    if (_typeof(u) == _typeof(c)) continue;
                    wa(u, c)
                }
                if (t.sham || c && c.sham) {
                    va(u, "sham", true)
                }
                ma(s, l, u, t)
            }
    };
    var xa = n;
    var _a = !xa(function() {
        function e() {}
        e.prototype.constructor = null;
        return Object.getPrototypeOf(new e) !== e.prototype
    });
    var Ca = e;
    var Sa = r;
    var Ia = a;
    var $a = _e;
    var Fa = Zn;
    var Ta = _a;
    var ka = Fa("IE_PROTO");
    var Oa = Ca.Object;
    var ja = Oa.prototype;
    var Ea = Ta ? Oa.getPrototypeOf : function(e) {
        var t = $a(e);
        if (Sa(t, ka)) return t[ka];
        var n = t.constructor;
        if (Ia(n) && t instanceof n) {
            return n.prototype
        }
        return t instanceof Oa ? ja : null
    };
    var La = n;
    var Na = a;
    var Da = Ea;
    var Aa = xr.exports;
    var Ma = c;
    var Ra = Ma("iterator");
    var Pa = false;
    var m, Ja, qa;
    if ([].keys) {
        qa = [].keys();
        if (!("next" in qa)) Pa = true;
        else {
            Ja = Da(Da(qa));
            if (Ja !== Object.prototype) m = Ja
        }
    }
    var za = m == undefined || La(function() {
        var e = {};
        return m[Ra].call(e) !== e
    });
    if (za) m = {};
    if (!Na(m[Ra])) {
        Aa(m, Ra, function() {
            return this
        })
    }
    var Ba = {
        IteratorPrototype: m,
        BUGGY_SAFARI_ITERATORS: Pa
    };
    var Ua = h.f;
    var Ha = r;
    var Ga = c;
    var Wa = Ga("toStringTag");
    var Va = function e(t, n, i) {
        if (t && !Ha(t = i ? t : t.prototype, Wa)) {
            Ua(t, Wa, {
                configurable: true,
                value: n
            })
        }
    };
    var Qa = Ba.IteratorPrototype;
    var Xa = wi;
    var Ka = Di;
    var Ya = Va;
    var Za = function e(t, n, i) {
        var r = n + " Iterator";
        t.prototype = Xa(Qa, {
            next: Ka(1, i)
        });
        Ya(t, r, false);
        return t
    };
    var eo = e;
    var to = a;
    var no = eo.String;
    var io = eo.TypeError;
    var ro = function e(t) {
        if (_typeof(t) == "object" || to(t)) return t;
        throw io("Can't set " + no(t) + " as a prototype")
    };
    var ao = t;
    var oo = f;
    var so = ro;
    var lo = Object.setPrototypeOf || ("__proto__" in {} ? function() {
        var i = false;
        var e = {};
        var r;
        try {
            r = ao(Object.getOwnPropertyDescriptor(Object.prototype, "__proto__").set);
            r(e, []);
            i = e instanceof Array
        } catch (e) {}
        return function e(t, n) {
            oo(t);
            so(n);
            if (i) r(t, n);
            else t.__proto__ = n;
            return t
        }
    }() : undefined);
    var co = ba;
    var uo = bt;
    var fo = kr;
    var ho = a;
    var po = Za;
    var vo = Ea;
    var mo = lo;
    var go = Va;
    var wo = Pi;
    var yo = xr.exports;
    var bo = c;
    var xo = Ba;
    var _o = fo.PROPER;
    var Co = fo.CONFIGURABLE;
    var So = xo.IteratorPrototype;
    var Io = xo.BUGGY_SAFARI_ITERATORS;
    var $o = bo("iterator");
    var Fo = "keys";
    var To = "values";
    var ko = "entries";
    var Oo = function e() {
        return this
    };
    var jo = function e(t, n, i, r, a, o, s) {
        po(i, n, r);
        var l = function e(t) {
            if (t === a && h) return h;
            if (!Io && t in f) return f[t];
            switch (t) {
                case Fo:
                    return function e() {
                        return new i(this, t)
                    };
                case To:
                    return function e() {
                        return new i(this, t)
                    };
                case ko:
                    return function e() {
                        return new i(this, t)
                    }
            }
            return function() {
                return new i(this)
            }
        };
        var c = n + " Iterator";
        var u = false;
        var f = t.prototype;
        var d = f[$o] || f["@@iterator"] || a && f[a];
        var h = !Io && d || l(a);
        var p = n == "Array" ? f.entries || d : d;
        var v, m, g;
        if (p) {
            v = vo(p.call(new t));
            if (v !== Object.prototype && v.next) {
                if (vo(v) !== So) {
                    if (mo) {
                        mo(v, So)
                    } else if (!ho(v[$o])) {
                        yo(v, $o, Oo)
                    }
                }
                go(v, c, true)
            }
        }
        if (_o && a == To && d && d.name !== To) {
            if (Co) {
                wo(f, "name", To)
            } else {
                u = true;
                h = function e() {
                    return uo(d, this)
                }
            }
        }
        if (a) {
            m = {
                values: l(To),
                keys: o ? h : l(Fo),
                entries: l(ko)
            };
            if (s)
                for (g in m) {
                    if (Io || u || !(g in f)) {
                        yo(f, g, m[g])
                    }
                } else co({
                    target: n,
                    proto: true,
                    forced: Io || u
                }, m)
        }
        if (f[$o] !== h) {
            yo(f, $o, h, {
                name: a
            })
        }
        return m
    };
    var Eo = i;
    var Lo = Si;
    var No = or;
    var Do = jo;
    var Ao = "Array Iterator";
    var Mo = No.set;
    var Ro = No.getterFor(Ao);
    var Po = Do(Array, "Array", function(e, t) {
        Mo(this, {
            type: Ao,
            target: Eo(e),
            index: 0,
            kind: t
        })
    }, function() {
        var e = Ro(this);
        var t = e.target;
        var n = e.kind;
        var i = e.index++;
        if (!t || i >= t.length) {
            e.target = undefined;
            return {
                value: undefined,
                done: true
            }
        }
        if (n == "keys") return {
            value: i,
            done: false
        };
        if (n == "values") return {
            value: t[i],
            done: false
        };
        return {
            value: [i, t[i]],
            done: false
        }
    }, "values");
    Lo("keys");
    Lo("values");
    Lo("entries");
    var Jo = {
        CSSRuleList: 0,
        CSSStyleDeclaration: 0,
        CSSValueList: 0,
        ClientRectList: 0,
        DOMRectList: 0,
        DOMStringList: 0,
        DOMTokenList: 1,
        DataTransferItemList: 0,
        FileList: 0,
        HTMLAllCollection: 0,
        HTMLCollection: 0,
        HTMLFormElement: 0,
        HTMLSelectElement: 0,
        MediaList: 0,
        MimeTypeArray: 0,
        NamedNodeMap: 0,
        NodeList: 1,
        PaintRequestList: 0,
        Plugin: 0,
        PluginArray: 0,
        SVGLengthList: 0,
        SVGNumberList: 0,
        SVGPathSegList: 0,
        SVGPointList: 0,
        SVGStringList: 0,
        SVGTransformList: 0,
        SourceBufferList: 0,
        StyleSheetList: 0,
        TextTrackCueList: 0,
        TextTrackList: 0,
        TouchList: 0
    };
    var qo = pt;
    var zo = qo("span").classList;
    var Bo = zo && zo.constructor && zo.constructor.prototype;
    var Uo = Bo === Object.prototype ? undefined : Bo;
    var Ho = e;
    var Go = Jo;
    var Wo = Uo;
    var Vo = Po;
    var Qo = Pi;
    var Xo = c;
    var Ko = Xo("iterator");
    var Yo = Xo("toStringTag");
    var Zo = Vo.values;
    var es = function e(t, n) {
        if (t) {
            if (t[Ko] !== Zo) try {
                Qo(t, Ko, Zo)
            } catch (e) {
                t[Ko] = Zo
            }
            if (!t[Yo]) {
                Qo(t, Yo, n)
            }
            if (Go[n])
                for (var i in Vo) {
                    if (t[i] !== Vo[i]) try {
                        Qo(t, i, Vo[i])
                    } catch (e) {
                        t[i] = Vo[i]
                    }
                }
        }
    };
    for (var ts in Go) {
        es(Ho[ts] && Ho[ts].prototype, ts)
    }
    es(Wo, "DOMTokenList");
    var ns = '.ft-tooltip[data-animation=fade][data-state=hidden]{opacity:0}[data-tippy-root]{max-width:calc(100vw - 10px)}.ft-tooltip{border-radius:3px;box-shadow:0 9px 16px 8px rgba(0,0,0,.03),0 6px 10px 0 rgba(0,0,0,.06),0 3px 6px -3px rgba(0,0,0,.12);background-color:#fff;color:#555;font-size:14px;line-height:1.5;white-space:normal;outline:0;transition-property:transform,visibility,opacity;position:relative}.ft-tooltip[data-placement^=top]>.ft-tooltip-arrow{bottom:0}.ft-tooltip[data-placement^=top]>.ft-tooltip-arrow:before{bottom:-5px;left:0;border-width:6px 6px 0;border-top-color:initial;transform-origin:center top}.ft-tooltip[data-placement^=bottom]>.ft-tooltip-arrow{top:0}.ft-tooltip[data-placement^=bottom]>.ft-tooltip-arrow:before{top:-5px;left:0;border-width:0 6px 6px;border-bottom-color:initial;transform-origin:center bottom}.ft-tooltip[data-placement^=left]>.ft-tooltip-arrow{right:0}.ft-tooltip[data-placement^=left]>.ft-tooltip-arrow:before{border-width:6px 0 6px 6px;border-left-color:initial;right:-5px;transform-origin:center}.ft-tooltip[data-placement^=right]>.ft-tooltip-arrow{left:0}.ft-tooltip[data-placement^=right]>.ft-tooltip-arrow:before{left:-5px;border-width:6px 6px 6px 0;border-right-color:initial;transform-origin:center}.ft-tooltip[data-inertia][data-state=visible]{transition-timing-function:cubic-bezier(.54,1.5,.38,1.11)}.ft-tooltip-arrow{width:12px;height:12px;color:#fff}.ft-tooltip-arrow:before{content:"";position:absolute;border-color:transparent;border-style:solid}.ft-tooltip-content{padding:10px;position:relative;z-index:1}.ft-tooltip.is-dark{color:#fff;background-color:#222}.ft-tooltip.is-dark .ft-tooltip-arrow{color:#222}';
    x(ns, {
        id: "future-tooltip-2.0.1"
    });
    var ne = "top";
    var ie = "bottom";
    var re = "right";
    var ae = "left";
    var is = "auto";
    var rs = [ne, ie, re, ae];
    var oe = "start";
    var as = "end";
    var os = "clippingParents";
    var ss = "viewport";
    var ls = "popper";
    var cs = "reference";
    var us = rs.reduce(function(e, t) {
        return e.concat([t + "-" + oe, t + "-" + as])
    }, []);
    var fs = [].concat(rs, [is]).reduce(function(e, t) {
        return e.concat([t, t + "-" + oe, t + "-" + as])
    }, []);
    var ds = "beforeRead";
    var hs = "read";
    var ps = "afterRead";
    var vs = "beforeMain";
    var ms = "main";
    var gs = "afterMain";
    var ws = "beforeWrite";
    var ys = "write";
    var bs = "afterWrite";
    var xs = [ds, hs, ps, vs, ms, gs, ws, ys, bs];

    function g(e) {
        return e ? (e.nodeName || "").toLowerCase() : null
    }

    function $(e) {
        if (e == null) {
            return window
        }
        if (e.toString() !== "[object Window]") {
            var t = e.ownerDocument;
            return t ? t.defaultView || window : window
        }
        return e
    }

    function _s(e) {
        var t = $(e).Element;
        return e instanceof t || e instanceof Element
    }

    function w(e) {
        var t = $(e).HTMLElement;
        return e instanceof t || e instanceof HTMLElement
    }

    function Cs(e) {
        if (typeof ShadowRoot === "undefined") {
            return false
        }
        var t = $(e).ShadowRoot;
        return e instanceof t || e instanceof ShadowRoot
    }

    function Ss(e) {
        var r = e.state;
        Object.keys(r.elements).forEach(function(e) {
            var t = r.styles[e] || {};
            var n = r.attributes[e] || {};
            var i = r.elements[e];
            if (!w(i) || !g(i)) {
                return
            }
            Object.assign(i.style, t);
            Object.keys(n).forEach(function(e) {
                var t = n[e];
                if (t === false) {
                    i.removeAttribute(e)
                } else {
                    i.setAttribute(e, t === true ? "" : t)
                }
            })
        })
    }

    function Is(e) {
        var a = e.state;
        var o = {
            popper: {
                position: a.options.strategy,
                left: "0",
                top: "0",
                margin: "0"
            },
            arrow: {
                position: "absolute"
            },
            reference: {}
        };
        Object.assign(a.elements.popper.style, o.popper);
        a.styles = o;
        if (a.elements.arrow) {
            Object.assign(a.elements.arrow.style, o.arrow)
        }
        return function() {
            Object.keys(a.elements).forEach(function(e) {
                var t = a.elements[e];
                var n = a.attributes[e] || {};
                var i = Object.keys(a.styles.hasOwnProperty(e) ? a.styles[e] : o[e]);
                var r = i.reduce(function(e, t) {
                    e[t] = "";
                    return e
                }, {});
                if (!w(t) || !g(t)) {
                    return
                }
                Object.assign(t.style, r);
                Object.keys(n).forEach(function(e) {
                    t.removeAttribute(e)
                })
            })
        }
    }
    var $s = {
        name: "applyStyles",
        enabled: true,
        phase: "write",
        fn: Ss,
        effect: Is,
        requires: ["computeStyles"]
    };

    function se(e) {
        return e.split("-")[0]
    }

    function F(e, t) {
        var n = e.getBoundingClientRect();
        var i = 1;
        var r = 1;
        return {
            width: n.width / i,
            height: n.height / r,
            top: n.top / r,
            right: n.right / i,
            bottom: n.bottom / r,
            left: n.left / i,
            x: n.left / i,
            y: n.top / r
        }
    }

    function Fs(e) {
        var t = F(e);
        var n = e.offsetWidth;
        var i = e.offsetHeight;
        if (Math.abs(t.width - n) <= 1) {
            n = t.width
        }
        if (Math.abs(t.height - i) <= 1) {
            i = t.height
        }
        return {
            x: e.offsetLeft,
            y: e.offsetTop,
            width: n,
            height: i
        }
    }

    function Ts(e, t) {
        var n = t.getRootNode && t.getRootNode();
        if (e.contains(t)) {
            return true
        } else if (n && Cs(n)) {
            var i = t;
            do {
                if (i && e.isSameNode(i)) {
                    return true
                }
                i = i.parentNode || i.host
            } while (i)
        }
        return false
    }

    function T(e) {
        return $(e).getComputedStyle(e)
    }

    function ks(e) {
        return ["table", "td", "th"].indexOf(g(e)) >= 0
    }

    function k(e) {
        return ((_s(e) ? e.ownerDocument : e.document) || window.document).documentElement
    }

    function Os(e) {
        if (g(e) === "html") {
            return e
        }
        return e.assignedSlot || e.parentNode || (Cs(e) ? e.host : null) || k(e)
    }

    function js(e) {
        if (!w(e) || T(e).position === "fixed") {
            return null
        }
        return e.offsetParent
    }

    function Es(e) {
        var t = navigator.userAgent.toLowerCase().indexOf("firefox") !== -1;
        var n = navigator.userAgent.indexOf("Trident") !== -1;
        if (n && w(e)) {
            var i = T(e);
            if (i.position === "fixed") {
                return null
            }
        }
        var r = Os(e);
        while (w(r) && ["html", "body"].indexOf(g(r)) < 0) {
            var a = T(r);
            if (a.transform !== "none" || a.perspective !== "none" || a.contain === "paint" || ["transform", "perspective"].indexOf(a.willChange) !== -1 || t && a.willChange === "filter" || t && a.filter && a.filter !== "none") {
                return r
            } else {
                r = r.parentNode
            }
        }
        return null
    }

    function Ls(e) {
        var t = $(e);
        var n = js(e);
        while (n && ks(n) && T(n).position === "static") {
            n = js(n)
        }
        if (n && (g(n) === "html" || g(n) === "body" && T(n).position === "static")) {
            return t
        }
        return n || Es(e) || t
    }

    function Ns(e) {
        return ["top", "bottom"].indexOf(e) >= 0 ? "x" : "y"
    }
    var le = Math.max;
    var Ds = Math.min;
    var As = Math.round;

    function Ms(e, t, n) {
        return le(e, Ds(t, n))
    }

    function Rs() {
        return {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0
        }
    }

    function Ps(e) {
        return Object.assign({}, Rs(), e)
    }

    function Js(n, e) {
        return e.reduce(function(e, t) {
            e[t] = n;
            return e
        }, {})
    }
    var qs = function e(t, n) {
        t = typeof t === "function" ? t(Object.assign({}, n.rects, {
            placement: n.placement
        })) : t;
        return Ps(typeof t !== "number" ? t : Js(t, rs))
    };

    function zs(e) {
        var t;
        var n = e.state,
            i = e.name,
            r = e.options;
        var a = n.elements.arrow;
        var o = n.modifiersData.popperOffsets;
        var s = se(n.placement);
        var l = Ns(s);
        var c = [ae, re].indexOf(s) >= 0;
        var u = c ? "height" : "width";
        if (!a || !o) {
            return
        }
        var f = qs(r.padding, n);
        var d = Fs(a);
        var h = l === "y" ? ne : ae;
        var p = l === "y" ? ie : re;
        var v = n.rects.reference[u] + n.rects.reference[l] - o[l] - n.rects.popper[u];
        var m = o[l] - n.rects.reference[l];
        var g = Ls(a);
        var w = g ? l === "y" ? g.clientHeight || 0 : g.clientWidth || 0 : 0;
        var y = v / 2 - m / 2;
        var b = f[h];
        var x = w - d[u] - f[p];
        var _ = w / 2 - d[u] / 2 + y;
        var C = Ms(b, _, x);
        var S = l;
        n.modifiersData[i] = (t = {}, t[S] = C, t.centerOffset = C - _, t)
    }

    function Bs(e) {
        var t = e.state,
            n = e.options;
        var i = n.element,
            r = i === void 0 ? "[data-popper-arrow]" : i;
        if (r == null) {
            return
        }
        if (typeof r === "string") {
            r = t.elements.popper.querySelector(r);
            if (!r) {
                return
            }
        }
        if (!Ts(t.elements.popper, r)) {
            return
        }
        t.elements.arrow = r
    }
    var Us = {
        name: "arrow",
        enabled: true,
        phase: "main",
        fn: zs,
        effect: Bs,
        requires: ["popperOffsets"],
        requiresIfExists: ["preventOverflow"]
    };

    function ce(e) {
        return e.split("-")[1]
    }
    var Hs = {
        top: "auto",
        right: "auto",
        bottom: "auto",
        left: "auto"
    };

    function Gs(e) {
        var t = e.x,
            n = e.y;
        var i = window;
        var r = i.devicePixelRatio || 1;
        return {
            x: As(As(t * r) / r) || 0,
            y: As(As(n * r) / r) || 0
        }
    }

    function Ws(e) {
        var t;
        var n = e.popper,
            i = e.popperRect,
            r = e.placement,
            a = e.variation,
            o = e.offsets,
            s = e.position,
            l = e.gpuAcceleration,
            c = e.adaptive,
            u = e.roundOffsets;
        var f = u === true ? Gs(o) : typeof u === "function" ? u(o) : o,
            d = f.x,
            h = d === void 0 ? 0 : d,
            p = f.y,
            v = p === void 0 ? 0 : p;
        var m = o.hasOwnProperty("x");
        var g = o.hasOwnProperty("y");
        var w = ae;
        var y = ne;
        var b = window;
        if (c) {
            var x = Ls(n);
            var _ = "clientHeight";
            var C = "clientWidth";
            if (x === $(n)) {
                x = k(n);
                if (T(x).position !== "static" && s === "absolute") {
                    _ = "scrollHeight";
                    C = "scrollWidth"
                }
            }
            x = x;
            if (r === ne || (r === ae || r === re) && a === as) {
                y = ie;
                v -= x[_] - i.height;
                v *= l ? 1 : -1
            }
            if (r === ae || (r === ne || r === ie) && a === as) {
                w = re;
                h -= x[C] - i.width;
                h *= l ? 1 : -1
            }
        }
        var S = Object.assign({
            position: s
        }, c && Hs);
        if (l) {
            var I;
            return Object.assign({}, S, (I = {}, I[y] = g ? "0" : "", I[w] = m ? "0" : "", I.transform = (b.devicePixelRatio || 1) <= 1 ? "translate(" + h + "px, " + v + "px)" : "translate3d(" + h + "px, " + v + "px, 0)", I))
        }
        return Object.assign({}, S, (t = {}, t[y] = g ? v + "px" : "", t[w] = m ? h + "px" : "", t.transform = "", t))
    }

    function Vs(e) {
        var t = e.state,
            n = e.options;
        var i = n.gpuAcceleration,
            r = i === void 0 ? true : i,
            a = n.adaptive,
            o = a === void 0 ? true : a,
            s = n.roundOffsets,
            l = s === void 0 ? true : s;
        var c = {
            placement: se(t.placement),
            variation: ce(t.placement),
            popper: t.elements.popper,
            popperRect: t.rects.popper,
            gpuAcceleration: r
        };
        if (t.modifiersData.popperOffsets != null) {
            t.styles.popper = Object.assign({}, t.styles.popper, Ws(Object.assign({}, c, {
                offsets: t.modifiersData.popperOffsets,
                position: t.options.strategy,
                adaptive: o,
                roundOffsets: l
            })))
        }
        if (t.modifiersData.arrow != null) {
            t.styles.arrow = Object.assign({}, t.styles.arrow, Ws(Object.assign({}, c, {
                offsets: t.modifiersData.arrow,
                position: "absolute",
                adaptive: false,
                roundOffsets: l
            })))
        }
        t.attributes.popper = Object.assign({}, t.attributes.popper, {
            "data-popper-placement": t.placement
        })
    }
    var Qs = {
        name: "computeStyles",
        enabled: true,
        phase: "beforeWrite",
        fn: Vs,
        data: {}
    };
    var Xs = {
        passive: true
    };

    function Ks(e) {
        var t = e.state,
            n = e.instance,
            i = e.options;
        var r = i.scroll,
            a = r === void 0 ? true : r,
            o = i.resize,
            s = o === void 0 ? true : o;
        var l = $(t.elements.popper);
        var c = [].concat(t.scrollParents.reference, t.scrollParents.popper);
        if (a) {
            c.forEach(function(e) {
                e.addEventListener("scroll", n.update, Xs)
            })
        }
        if (s) {
            l.addEventListener("resize", n.update, Xs)
        }
        return function() {
            if (a) {
                c.forEach(function(e) {
                    e.removeEventListener("scroll", n.update, Xs)
                })
            }
            if (s) {
                l.removeEventListener("resize", n.update, Xs)
            }
        }
    }
    var Ys = {
        name: "eventListeners",
        enabled: true,
        phase: "write",
        fn: function e() {},
        effect: Ks,
        data: {}
    };
    var Zs = {
        left: "right",
        right: "left",
        bottom: "top",
        top: "bottom"
    };

    function el(e) {
        return e.replace(/left|right|bottom|top/g, function(e) {
            return Zs[e]
        })
    }
    var tl = {
        start: "end",
        end: "start"
    };

    function nl(e) {
        return e.replace(/start|end/g, function(e) {
            return tl[e]
        })
    }

    function il(e) {
        var t = $(e);
        var n = t.pageXOffset;
        var i = t.pageYOffset;
        return {
            scrollLeft: n,
            scrollTop: i
        }
    }

    function rl(e) {
        return F(k(e)).left + il(e).scrollLeft
    }

    function al(e) {
        var t = $(e);
        var n = k(e);
        var i = t.visualViewport;
        var r = n.clientWidth;
        var a = n.clientHeight;
        var o = 0;
        var s = 0;
        if (i) {
            r = i.width;
            a = i.height;
            if (!/^((?!chrome|android).)*safari/i.test(navigator.userAgent)) {
                o = i.offsetLeft;
                s = i.offsetTop
            }
        }
        return {
            width: r,
            height: a,
            x: o + rl(e),
            y: s
        }
    }

    function ol(e) {
        var t;
        var n = k(e);
        var i = il(e);
        var r = (t = e.ownerDocument) == null ? void 0 : t.body;
        var a = le(n.scrollWidth, n.clientWidth, r ? r.scrollWidth : 0, r ? r.clientWidth : 0);
        var o = le(n.scrollHeight, n.clientHeight, r ? r.scrollHeight : 0, r ? r.clientHeight : 0);
        var s = -i.scrollLeft + rl(e);
        var l = -i.scrollTop;
        if (T(r || n).direction === "rtl") {
            s += le(n.clientWidth, r ? r.clientWidth : 0) - a
        }
        return {
            width: a,
            height: o,
            x: s,
            y: l
        }
    }

    function sl(e) {
        var t = T(e),
            n = t.overflow,
            i = t.overflowX,
            r = t.overflowY;
        return /auto|scroll|overlay|hidden/.test(n + r + i)
    }

    function ll(e) {
        if (["html", "body", "#document"].indexOf(g(e)) >= 0) {
            return e.ownerDocument.body
        }
        if (w(e) && sl(e)) {
            return e
        }
        return ll(Os(e))
    }

    function cl(e, t) {
        var n;
        if (t === void 0) {
            t = []
        }
        var i = ll(e);
        var r = i === ((n = e.ownerDocument) == null ? void 0 : n.body);
        var a = $(i);
        var o = r ? [a].concat(a.visualViewport || [], sl(i) ? i : []) : i;
        var s = t.concat(o);
        return r ? s : s.concat(cl(Os(o)))
    }

    function ul(e) {
        return Object.assign({}, e, {
            left: e.x,
            top: e.y,
            right: e.x + e.width,
            bottom: e.y + e.height
        })
    }

    function fl(e) {
        var t = F(e);
        t.top = t.top + e.clientTop;
        t.left = t.left + e.clientLeft;
        t.bottom = t.top + e.clientHeight;
        t.right = t.left + e.clientWidth;
        t.width = e.clientWidth;
        t.height = e.clientHeight;
        t.x = t.left;
        t.y = t.top;
        return t
    }

    function dl(e, t) {
        return t === ss ? ul(al(e)) : w(t) ? fl(t) : ul(ol(k(e)))
    }

    function hl(e) {
        var t = cl(Os(e));
        var n = ["absolute", "fixed"].indexOf(T(e).position) >= 0;
        var i = n && w(e) ? Ls(e) : e;
        if (!_s(i)) {
            return []
        }
        return t.filter(function(e) {
            return _s(e) && Ts(e, i) && g(e) !== "body"
        })
    }

    function pl(i, e, t) {
        var n = e === "clippingParents" ? hl(i) : [].concat(e);
        var r = [].concat(n, [t]);
        var a = r[0];
        var o = r.reduce(function(e, t) {
            var n = dl(i, t);
            e.top = le(n.top, e.top);
            e.right = Ds(n.right, e.right);
            e.bottom = Ds(n.bottom, e.bottom);
            e.left = le(n.left, e.left);
            return e
        }, dl(i, a));
        o.width = o.right - o.left;
        o.height = o.bottom - o.top;
        o.x = o.left;
        o.y = o.top;
        return o
    }

    function vl(e) {
        var t = e.reference,
            n = e.element,
            i = e.placement;
        var r = i ? se(i) : null;
        var a = i ? ce(i) : null;
        var o = t.x + t.width / 2 - n.width / 2;
        var s = t.y + t.height / 2 - n.height / 2;
        var l;
        switch (r) {
            case ne:
                l = {
                    x: o,
                    y: t.y - n.height
                };
                break;
            case ie:
                l = {
                    x: o,
                    y: t.y + t.height
                };
                break;
            case re:
                l = {
                    x: t.x + t.width,
                    y: s
                };
                break;
            case ae:
                l = {
                    x: t.x - n.width,
                    y: s
                };
                break;
            default:
                l = {
                    x: t.x,
                    y: t.y
                }
        }
        var c = r ? Ns(r) : null;
        if (c != null) {
            var u = c === "y" ? "height" : "width";
            switch (a) {
                case oe:
                    l[c] = l[c] - (t[u] / 2 - n[u] / 2);
                    break;
                case as:
                    l[c] = l[c] + (t[u] / 2 - n[u] / 2);
                    break
            }
        }
        return l
    }

    function ml(e, t) {
        if (t === void 0) {
            t = {}
        }
        var n = t,
            i = n.placement,
            r = i === void 0 ? e.placement : i,
            a = n.boundary,
            o = a === void 0 ? os : a,
            s = n.rootBoundary,
            l = s === void 0 ? ss : s,
            c = n.elementContext,
            u = c === void 0 ? ls : c,
            f = n.altBoundary,
            d = f === void 0 ? false : f,
            h = n.padding,
            p = h === void 0 ? 0 : h;
        var v = Ps(typeof p !== "number" ? p : Js(p, rs));
        var m = u === ls ? cs : ls;
        var g = e.rects.popper;
        var w = e.elements[d ? m : u];
        var y = pl(_s(w) ? w : w.contextElement || k(e.elements.popper), o, l);
        var b = F(e.elements.reference);
        var x = vl({
            reference: b,
            element: g,
            strategy: "absolute",
            placement: r
        });
        var _ = ul(Object.assign({}, g, x));
        var C = u === ls ? _ : b;
        var S = {
            top: y.top - C.top + v.top,
            bottom: C.bottom - y.bottom + v.bottom,
            left: y.left - C.left + v.left,
            right: C.right - y.right + v.right
        };
        var I = e.modifiersData.offset;
        if (u === ls && I) {
            var $ = I[r];
            Object.keys(S).forEach(function(e) {
                var t = [re, ie].indexOf(e) >= 0 ? 1 : -1;
                var n = [ne, ie].indexOf(e) >= 0 ? "y" : "x";
                S[e] += $[n] * t
            })
        }
        return S
    }

    function gl(n, e) {
        if (e === void 0) {
            e = {}
        }
        var t = e,
            i = t.placement,
            r = t.boundary,
            a = t.rootBoundary,
            o = t.padding,
            s = t.flipVariations,
            l = t.allowedAutoPlacements,
            c = l === void 0 ? fs : l;
        var u = ce(i);
        var f = u ? s ? us : us.filter(function(e) {
            return ce(e) === u
        }) : rs;
        var d = f.filter(function(e) {
            return c.indexOf(e) >= 0
        });
        if (d.length === 0) {
            d = f
        }
        var h = d.reduce(function(e, t) {
            e[t] = ml(n, {
                placement: t,
                boundary: r,
                rootBoundary: a,
                padding: o
            })[se(t)];
            return e
        }, {});
        return Object.keys(h).sort(function(e, t) {
            return h[e] - h[t]
        })
    }

    function wl(e) {
        if (se(e) === is) {
            return []
        }
        var t = el(e);
        return [nl(e), t, nl(t)]
    }

    function yl(e) {
        var n = e.state,
            t = e.options,
            i = e.name;
        if (n.modifiersData[i]._skip) {
            return
        }
        var r = t.mainAxis,
            a = r === void 0 ? true : r,
            o = t.altAxis,
            s = o === void 0 ? true : o,
            l = t.fallbackPlacements,
            c = t.padding,
            u = t.boundary,
            f = t.rootBoundary,
            d = t.altBoundary,
            h = t.flipVariations,
            p = h === void 0 ? true : h,
            v = t.allowedAutoPlacements;
        var m = n.options.placement;
        var g = se(m);
        var w = g === m;
        var y = l || (w || !p ? [el(m)] : wl(m));
        var b = [m].concat(y).reduce(function(e, t) {
            return e.concat(se(t) === is ? gl(n, {
                placement: t,
                boundary: u,
                rootBoundary: f,
                padding: c,
                flipVariations: p,
                allowedAutoPlacements: v
            }) : t)
        }, []);
        var x = n.rects.reference;
        var _ = n.rects.popper;
        var C = new Map;
        var S = true;
        var I = b[0];
        for (var $ = 0; $ < b.length; $++) {
            var F = b[$];
            var T = se(F);
            var k = ce(F) === oe;
            var O = [ne, ie].indexOf(T) >= 0;
            var j = O ? "width" : "height";
            var E = ml(n, {
                placement: F,
                boundary: u,
                rootBoundary: f,
                altBoundary: d,
                padding: c
            });
            var L = O ? k ? re : ae : k ? ie : ne;
            if (x[j] > _[j]) {
                L = el(L)
            }
            var A = el(L);
            var N = [];
            if (a) {
                N.push(E[T] <= 0)
            }
            if (s) {
                N.push(E[L] <= 0, E[A] <= 0)
            }
            if (N.every(function(e) {
                    return e
                })) {
                I = F;
                S = false;
                break
            }
            C.set(F, N)
        }
        if (S) {
            var M = p ? 3 : 1;
            var R = function e(n) {
                var t = b.find(function(e) {
                    var t = C.get(e);
                    if (t) {
                        return t.slice(0, n).every(function(e) {
                            return e
                        })
                    }
                });
                if (t) {
                    I = t;
                    return "break"
                }
            };
            for (var D = M; D > 0; D--) {
                var P = R(D);
                if (P === "break") break
            }
        }
        if (n.placement !== I) {
            n.modifiersData[i]._skip = true;
            n.placement = I;
            n.reset = true
        }
    }
    var bl = {
        name: "flip",
        enabled: true,
        phase: "main",
        fn: yl,
        requiresIfExists: ["offset"],
        data: {
            _skip: false
        }
    };

    function xl(e, t, n) {
        if (n === void 0) {
            n = {
                x: 0,
                y: 0
            }
        }
        return {
            top: e.top - t.height - n.y,
            right: e.right - t.width + n.x,
            bottom: e.bottom - t.height + n.y,
            left: e.left - t.width - n.x
        }
    }

    function _l(t) {
        return [ne, re, ie, ae].some(function(e) {
            return t[e] >= 0
        })
    }

    function Cl(e) {
        var t = e.state,
            n = e.name;
        var i = t.rects.reference;
        var r = t.rects.popper;
        var a = t.modifiersData.preventOverflow;
        var o = ml(t, {
            elementContext: "reference"
        });
        var s = ml(t, {
            altBoundary: true
        });
        var l = xl(o, i);
        var c = xl(s, r, a);
        var u = _l(l);
        var f = _l(c);
        t.modifiersData[n] = {
            referenceClippingOffsets: l,
            popperEscapeOffsets: c,
            isReferenceHidden: u,
            hasPopperEscaped: f
        };
        t.attributes.popper = Object.assign({}, t.attributes.popper, {
            "data-popper-reference-hidden": u,
            "data-popper-escaped": f
        })
    }
    var Sl = {
        name: "hide",
        enabled: true,
        phase: "main",
        requiresIfExists: ["preventOverflow"],
        fn: Cl
    };

    function Il(e, t, n) {
        var i = se(e);
        var r = [ae, ne].indexOf(i) >= 0 ? -1 : 1;
        var a = typeof n === "function" ? n(Object.assign({}, t, {
                placement: e
            })) : n,
            o = a[0],
            s = a[1];
        o = o || 0;
        s = (s || 0) * r;
        return [ae, re].indexOf(i) >= 0 ? {
            x: s,
            y: o
        } : {
            x: o,
            y: s
        }
    }

    function $l(e) {
        var n = e.state,
            t = e.options,
            i = e.name;
        var r = t.offset,
            a = r === void 0 ? [0, 0] : r;
        var o = fs.reduce(function(e, t) {
            e[t] = Il(t, n.rects, a);
            return e
        }, {});
        var s = o[n.placement],
            l = s.x,
            c = s.y;
        if (n.modifiersData.popperOffsets != null) {
            n.modifiersData.popperOffsets.x += l;
            n.modifiersData.popperOffsets.y += c
        }
        n.modifiersData[i] = o
    }
    var Fl = {
        name: "offset",
        enabled: true,
        phase: "main",
        requires: ["popperOffsets"],
        fn: $l
    };

    function Tl(e) {
        var t = e.state,
            n = e.name;
        t.modifiersData[n] = vl({
            reference: t.rects.reference,
            element: t.rects.popper,
            strategy: "absolute",
            placement: t.placement
        })
    }
    var kl = {
        name: "popperOffsets",
        enabled: true,
        phase: "read",
        fn: Tl,
        data: {}
    };

    function Ol(e) {
        return e === "x" ? "y" : "x"
    }

    function jl(e) {
        var t = e.state,
            n = e.options,
            A = e.name;
        var i = n.mainAxis,
            r = i === void 0 ? true : i,
            a = n.altAxis,
            o = a === void 0 ? false : a,
            M = n.boundary,
            R = n.rootBoundary,
            P = n.altBoundary,
            J = n.padding,
            s = n.tether,
            l = s === void 0 ? true : s,
            c = n.tetherOffset,
            u = c === void 0 ? 0 : c;
        var f = ml(t, {
            boundary: M,
            rootBoundary: R,
            padding: J,
            altBoundary: P
        });
        var q = se(t.placement);
        var d = ce(t.placement);
        var h = !d;
        var p = Ns(q);
        var v = Ol(p);
        var m = t.modifiersData.popperOffsets;
        var g = t.rects.reference;
        var w = t.rects.popper;
        var y = typeof u === "function" ? u(Object.assign({}, t.rects, {
            placement: t.placement
        })) : u;
        var b = {
            x: 0,
            y: 0
        };
        if (!m) {
            return
        }
        if (r || o) {
            var x = p === "y" ? ne : ae;
            var _ = p === "y" ? ie : re;
            var C = p === "y" ? "height" : "width";
            var S = m[p];
            var I = m[p] + f[x];
            var $ = m[p] - f[_];
            var F = l ? -w[C] / 2 : 0;
            var z = d === oe ? g[C] : w[C];
            var B = d === oe ? -w[C] : -g[C];
            var T = t.elements.arrow;
            var U = l && T ? Fs(T) : {
                width: 0,
                height: 0
            };
            var k = t.modifiersData["arrow#persistent"] ? t.modifiersData["arrow#persistent"].padding : Rs();
            var O = k[x];
            var j = k[_];
            var E = Ms(0, g[C], U[C]);
            var H = h ? g[C] / 2 - F - E - O - y : z - E - O - y;
            var G = h ? -g[C] / 2 + F + E + j + y : B + E + j + y;
            var L = t.elements.arrow && Ls(t.elements.arrow);
            var W = L ? p === "y" ? L.clientTop || 0 : L.clientLeft || 0 : 0;
            var N = t.modifiersData.offset ? t.modifiersData.offset[t.placement][p] : 0;
            var V = m[p] + H - N - W;
            var Q = m[p] + G - N;
            if (r) {
                var X = Ms(l ? Ds(I, V) : I, S, l ? le($, Q) : $);
                m[p] = X;
                b[p] = X - S
            }
            if (o) {
                var K = p === "x" ? ne : ae;
                var Y = p === "x" ? ie : re;
                var D = m[v];
                var Z = D + f[K];
                var ee = D - f[Y];
                var te = Ms(l ? Ds(Z, V) : Z, D, l ? le(ee, Q) : ee);
                m[v] = te;
                b[v] = te - D
            }
        }
        t.modifiersData[A] = b
    }
    var El = {
        name: "preventOverflow",
        enabled: true,
        phase: "main",
        fn: jl,
        requiresIfExists: ["offset"]
    };

    function Ll(e) {
        return {
            scrollLeft: e.scrollLeft,
            scrollTop: e.scrollTop
        }
    }

    function Nl(e) {
        if (e === $(e) || !w(e)) {
            return il(e)
        } else {
            return Ll(e)
        }
    }

    function Dl(e) {
        var t = e.getBoundingClientRect();
        var n = t.width / e.offsetWidth || 1;
        var i = t.height / e.offsetHeight || 1;
        return n !== 1 || i !== 1
    }

    function Al(e, t, n) {
        if (n === void 0) {
            n = false
        }
        var i = w(t);
        w(t) && Dl(t);
        var r = k(t);
        var a = F(e);
        var o = {
            scrollLeft: 0,
            scrollTop: 0
        };
        var s = {
            x: 0,
            y: 0
        };
        if (i || !i && !n) {
            if (g(t) !== "body" || sl(r)) {
                o = Nl(t)
            }
            if (w(t)) {
                s = F(t);
                s.x += t.clientLeft;
                s.y += t.clientTop
            } else if (r) {
                s.x = rl(r)
            }
        }
        return {
            x: a.left + o.scrollLeft - s.x,
            y: a.top + o.scrollTop - s.y,
            width: a.width,
            height: a.height
        }
    }

    function Ml(e) {
        var n = new Map;
        var i = new Set;
        var r = [];
        e.forEach(function(e) {
            n.set(e.name, e)
        });

        function a(e) {
            i.add(e.name);
            var t = [].concat(e.requires || [], e.requiresIfExists || []);
            t.forEach(function(e) {
                if (!i.has(e)) {
                    var t = n.get(e);
                    if (t) {
                        a(t)
                    }
                }
            });
            r.push(e)
        }
        e.forEach(function(e) {
            if (!i.has(e.name)) {
                a(e)
            }
        });
        return r
    }

    function Rl(e) {
        var n = Ml(e);
        return xs.reduce(function(e, t) {
            return e.concat(n.filter(function(e) {
                return e.phase === t
            }))
        }, [])
    }

    function Pl(t) {
        var n;
        return function() {
            if (!n) {
                n = new Promise(function(e) {
                    Promise.resolve().then(function() {
                        n = undefined;
                        e(t())
                    })
                })
            }
            return n
        }
    }

    function Jl(e) {
        var t = e.reduce(function(e, t) {
            var n = e[t.name];
            e[t.name] = n ? Object.assign({}, n, t, {
                options: Object.assign({}, n.options, t.options),
                data: Object.assign({}, n.data, t.data)
            }) : t;
            return e
        }, {});
        return Object.keys(t).map(function(e) {
            return t[e]
        })
    }
    var ql = {
        placement: "bottom",
        modifiers: [],
        strategy: "absolute"
    };

    function zl() {
        for (var e = arguments.length, t = new Array(e), n = 0; n < e; n++) {
            t[n] = arguments[n]
        }
        return !t.some(function(e) {
            return !(e && typeof e.getBoundingClientRect === "function")
        })
    }

    function Bl(e) {
        if (e === void 0) {
            e = {}
        }
        var t = e,
            n = t.defaultModifiers,
            c = n === void 0 ? [] : n,
            i = t.defaultOptions,
            h = i === void 0 ? ql : i;
        return function e(r, a, t) {
            if (t === void 0) {
                t = h
            }
            var u = {
                placement: "bottom",
                orderedModifiers: [],
                options: Object.assign({}, ql, h),
                modifiersData: {},
                elements: {
                    reference: r,
                    popper: a
                },
                attributes: {},
                styles: {}
            };
            var s = [];
            var f = false;
            var d = {
                state: u,
                setOptions: function e(t) {
                    var n = typeof t === "function" ? t(u.options) : t;
                    l();
                    u.options = Object.assign({}, h, u.options, n);
                    u.scrollParents = {
                        reference: _s(r) ? cl(r) : r.contextElement ? cl(r.contextElement) : [],
                        popper: cl(a)
                    };
                    var i = Rl(Jl([].concat(c, u.options.modifiers)));
                    u.orderedModifiers = i.filter(function(e) {
                        return e.enabled
                    });
                    o();
                    return d.update()
                },
                forceUpdate: function e() {
                    if (f) {
                        return
                    }
                    var t = u.elements,
                        n = t.reference,
                        i = t.popper;
                    if (!zl(n, i)) {
                        return
                    }
                    u.rects = {
                        reference: Al(n, Ls(i), u.options.strategy === "fixed"),
                        popper: Fs(i)
                    };
                    u.reset = false;
                    u.placement = u.options.placement;
                    u.orderedModifiers.forEach(function(e) {
                        return u.modifiersData[e.name] = Object.assign({}, e.data)
                    });
                    for (var r = 0; r < u.orderedModifiers.length; r++) {
                        if (u.reset === true) {
                            u.reset = false;
                            r = -1;
                            continue
                        }
                        var a = u.orderedModifiers[r],
                            o = a.fn,
                            s = a.options,
                            l = s === void 0 ? {} : s,
                            c = a.name;
                        if (typeof o === "function") {
                            u = o({
                                state: u,
                                options: l,
                                name: c,
                                instance: d
                            }) || u
                        }
                    }
                },
                update: Pl(function() {
                    return new Promise(function(e) {
                        d.forceUpdate();
                        e(u)
                    })
                }),
                destroy: function e() {
                    l();
                    f = true
                }
            };
            if (!zl(r, a)) {
                return d
            }
            d.setOptions(t).then(function(e) {
                if (!f && t.onFirstUpdate) {
                    t.onFirstUpdate(e)
                }
            });

            function o() {
                u.orderedModifiers.forEach(function(e) {
                    var t = e.name,
                        n = e.options,
                        i = n === void 0 ? {} : n,
                        r = e.effect;
                    if (typeof r === "function") {
                        var a = r({
                            state: u,
                            name: t,
                            instance: d,
                            options: i
                        });
                        var o = function e() {};
                        s.push(a || o)
                    }
                })
            }

            function l() {
                s.forEach(function(e) {
                    return e()
                });
                s = []
            }
            return d
        }
    }
    var Ul = [Ys, kl, Qs, $s, Fl, bl, El, Us, Sl];
    var Hl = Bl({
        defaultModifiers: Ul
    });
    var Gl = "tippy-box";
    var Wl = "tippy-content";
    var Vl = "tippy-backdrop";
    var Ql = "tippy-arrow";
    var Xl = "tippy-svg-arrow";
    var me = {
        passive: true,
        capture: true
    };
    var Kl = function e() {
        return document.body
    };

    function Yl(e, t, n) {
        if (Array.isArray(e)) {
            var i = e[t];
            return i == null ? Array.isArray(n) ? n[t] : n : i
        }
        return e
    }

    function Zl(e, t) {
        var n = {}.toString.call(e);
        return n.indexOf("[object") === 0 && n.indexOf(t + "]") > -1
    }

    function ec(e, t) {
        return typeof e === "function" ? e.apply(void 0, t) : e
    }

    function tc(t, n) {
        if (n === 0) {
            return t
        }
        var i;
        return function(e) {
            clearTimeout(i);
            i = setTimeout(function() {
                t(e)
            }, n)
        }
    }

    function nc(e) {
        return e.split(/\s+/).filter(Boolean)
    }

    function ge(e) {
        return [].concat(e)
    }

    function ic(e, t) {
        if (e.indexOf(t) === -1) {
            e.push(t)
        }
    }

    function rc(n) {
        return n.filter(function(e, t) {
            return n.indexOf(e) === t
        })
    }

    function ac(e) {
        return e.split("-")[0]
    }

    function oc(e) {
        return [].slice.call(e)
    }

    function sc(n) {
        return Object.keys(n).reduce(function(e, t) {
            if (n[t] !== undefined) {
                e[t] = n[t]
            }
            return e
        }, {})
    }

    function lc() {
        return document.createElement("div")
    }

    function cc(t) {
        return ["Element", "Fragment"].some(function(e) {
            return Zl(t, e)
        })
    }

    function uc(e) {
        return Zl(e, "NodeList")
    }

    function fc(e) {
        return Zl(e, "MouseEvent")
    }

    function dc(e) {
        return !!(e && e._tippy && e._tippy.reference === e)
    }

    function hc(e) {
        if (cc(e)) {
            return [e]
        }
        if (uc(e)) {
            return oc(e)
        }
        if (Array.isArray(e)) {
            return e
        }
        return oc(document.querySelectorAll(e))
    }

    function pc(e, t) {
        e.forEach(function(e) {
            if (e) {
                e.style.transitionDuration = t + "ms"
            }
        })
    }

    function vc(e, t) {
        e.forEach(function(e) {
            if (e) {
                e.setAttribute("data-state", t)
            }
        })
    }

    function mc(e) {
        var t;
        var n = ge(e),
            i = n[0];
        return i != null && (t = i.ownerDocument) != null && t.body ? i.ownerDocument : document
    }

    function gc(e, t) {
        var v = t.clientX,
            m = t.clientY;
        return e.every(function(e) {
            var t = e.popperRect,
                n = e.popperState,
                i = e.props;
            var r = i.interactiveBorder;
            var a = ac(n.placement);
            var o = n.modifiersData.offset;
            if (!o) {
                return true
            }
            var s = a === "bottom" ? o.top.y : 0;
            var l = a === "top" ? o.bottom.y : 0;
            var c = a === "right" ? o.left.x : 0;
            var u = a === "left" ? o.right.x : 0;
            var f = t.top - m + s > r;
            var d = m - t.bottom - l > r;
            var h = t.left - v + c > r;
            var p = v - t.right - u > r;
            return f || d || h || p
        })
    }

    function wc(t, e, n) {
        var i = e + "EventListener";
        ["transitionend", "webkitTransitionEnd"].forEach(function(e) {
            t[i](e, n)
        })
    }

    function yc(e, t) {
        var n = t;
        while (n) {
            var i;
            if (e.contains(n)) {
                return true
            }
            n = n.getRootNode == null ? void 0 : (i = n.getRootNode()) == null ? void 0 : i.host
        }
        return false
    }
    var we = {
        isTouch: false
    };
    var bc = 0;

    function xc() {
        if (we.isTouch) {
            return
        }
        we.isTouch = true;
        if (window.performance) {
            document.addEventListener("mousemove", _c)
        }
    }

    function _c() {
        var e = performance.now();
        if (e - bc < 20) {
            we.isTouch = false;
            document.removeEventListener("mousemove", _c)
        }
        bc = e
    }

    function Cc() {
        var e = document.activeElement;
        if (dc(e)) {
            var t = e._tippy;
            if (e.blur && !t.state.isVisible) {
                e.blur()
            }
        }
    }

    function Sc() {
        document.addEventListener("touchstart", xc, me);
        window.addEventListener("blur", Cc)
    }
    var Ic = typeof window !== "undefined" && typeof document !== "undefined";
    var $c = Ic ? !!window.msCrypto : false;
    var Fc = {
        animateFill: false,
        followCursor: false,
        inlinePositioning: false,
        sticky: false
    };
    var Tc = {
        allowHTML: false,
        animation: "fade",
        arrow: true,
        content: "",
        inertia: false,
        maxWidth: 350,
        role: "tooltip",
        theme: "",
        zIndex: 9999
    };
    var ye = Object.assign({
        appendTo: Kl,
        aria: {
            content: "auto",
            expanded: "auto"
        },
        delay: 0,
        duration: [300, 250],
        getReferenceClientRect: null,
        hideOnClick: true,
        ignoreAttributes: false,
        interactive: false,
        interactiveBorder: 2,
        interactiveDebounce: 0,
        moveTransition: "",
        offset: [0, 10],
        onAfterUpdate: function e() {},
        onBeforeUpdate: function e() {},
        onCreate: function e() {},
        onDestroy: function e() {},
        onHidden: function e() {},
        onHide: function e() {},
        onMount: function e() {},
        onShow: function e() {},
        onShown: function e() {},
        onTrigger: function e() {},
        onUntrigger: function e() {},
        onClickOutside: function e() {},
        placement: "top",
        plugins: [],
        popperOptions: {},
        render: null,
        showOnCreate: false,
        touch: true,
        trigger: "mouseenter focus",
        triggerTarget: null
    }, Fc, Tc);
    var kc = Object.keys(ye);
    var Oc = function e(t) {
        var n = Object.keys(t);
        n.forEach(function(e) {
            ye[e] = t[e]
        })
    };

    function jc(a) {
        var e = a.plugins || [];
        var t = e.reduce(function(e, t) {
            var n = t.name,
                i = t.defaultValue;
            if (n) {
                var r;
                e[n] = a[n] !== undefined ? a[n] : (r = ye[n]) != null ? r : i
            }
            return e
        }, {});
        return Object.assign({}, a, t)
    }

    function Ec(e, t) {
        var n = t ? Object.keys(jc(Object.assign({}, ye, {
            plugins: t
        }))) : kc;
        var i = n.reduce(function(t, n) {
            var i = (e.getAttribute("data-tippy-" + n) || "").trim();
            if (!i) {
                return t
            }
            if (n === "content") {
                t[n] = i
            } else {
                try {
                    t[n] = JSON.parse(i)
                } catch (e) {
                    t[n] = i
                }
            }
            return t
        }, {});
        return i
    }

    function Lc(e, t) {
        var n = Object.assign({}, t, {
            content: ec(t.content, [e])
        }, t.ignoreAttributes ? {} : Ec(e, t.plugins));
        n.aria = Object.assign({}, ye.aria, n.aria);
        n.aria = {
            expanded: n.aria.expanded === "auto" ? t.interactive : n.aria.expanded,
            content: n.aria.content === "auto" ? t.interactive ? null : "describedby" : n.aria.content
        };
        return n
    }
    var Nc = function e() {
        return "innerHTML"
    };

    function Dc(e, t) {
        e[Nc()] = t
    }

    function Ac(e) {
        var t = lc();
        if (e === true) {
            t.className = Ql
        } else {
            t.className = Xl;
            if (cc(e)) {
                t.appendChild(e)
            } else {
                Dc(t, e)
            }
        }
        return t
    }

    function Mc(e, t) {
        if (cc(t.content)) {
            Dc(e, "");
            e.appendChild(t.content)
        } else if (typeof t.content !== "function") {
            if (t.allowHTML) {
                Dc(e, t.content)
            } else {
                e.textContent = t.content
            }
        }
    }

    function Rc(e) {
        var t = e.firstElementChild;
        var n = oc(t.children);
        return {
            box: t,
            content: n.find(function(e) {
                return e.classList.contains(Wl)
            }),
            arrow: n.find(function(e) {
                return e.classList.contains(Ql) || e.classList.contains(Xl)
            }),
            backdrop: n.find(function(e) {
                return e.classList.contains(Vl)
            })
        }
    }

    function Pc(o) {
        var s = lc();
        var e = lc();
        e.className = Gl;
        e.setAttribute("data-state", "hidden");
        e.setAttribute("tabindex", "-1");
        var t = lc();
        t.className = Wl;
        t.setAttribute("data-state", "hidden");
        Mc(t, o.props);
        s.appendChild(e);
        e.appendChild(t);
        n(o.props, o.props);

        function n(e, t) {
            var n = Rc(s),
                i = n.box,
                r = n.content,
                a = n.arrow;
            if (t.theme) {
                i.setAttribute("data-theme", t.theme)
            } else {
                i.removeAttribute("data-theme")
            }
            if (typeof t.animation === "string") {
                i.setAttribute("data-animation", t.animation)
            } else {
                i.removeAttribute("data-animation")
            }
            if (t.inertia) {
                i.setAttribute("data-inertia", "")
            } else {
                i.removeAttribute("data-inertia")
            }
            i.style.maxWidth = typeof t.maxWidth === "number" ? t.maxWidth + "px" : t.maxWidth;
            if (t.role) {
                i.setAttribute("role", t.role)
            } else {
                i.removeAttribute("role")
            }
            if (e.content !== t.content || e.allowHTML !== t.allowHTML) {
                Mc(r, o.props)
            }
            if (t.arrow) {
                if (!a) {
                    i.appendChild(Ac(t.arrow))
                } else if (e.arrow !== t.arrow) {
                    i.removeChild(a);
                    i.appendChild(Ac(t.arrow))
                }
            } else if (a) {
                i.removeChild(a)
            }
        }
        return {
            popper: s,
            onUpdate: n
        }
    }
    Pc.$$tippy = true;
    var Jc = 1;
    var qc = [];
    var zc = [];

    function Bc(u, A) {
        var r = Lc(u, Object.assign({}, ye, jc(sc(A))));
        var a;
        var n;
        var i;
        var s = false;
        var o = false;
        var l = false;
        var c = false;
        var f;
        var d;
        var h;
        var p = [];
        var v = tc(Y, r.interactiveDebounce);
        var m;
        var M = Jc++;
        var R = null;
        var e = rc(r.plugins);
        var P = {
            isEnabled: true,
            isVisible: false,
            isDestroyed: false,
            isMounted: false,
            isShown: false
        };
        var g = {
            id: M,
            reference: u,
            popper: lc(),
            popperInstance: R,
            props: r,
            state: P,
            plugins: e,
            clearDelayTimeouts: le,
            setProps: ce,
            setContent: ue,
            show: fe,
            hide: de,
            hideWithInteractivity: he,
            enable: oe,
            disable: se,
            unmount: pe,
            destroy: ve
        };
        if (!r.render) {
            return g
        }
        var t = r.render(g),
            w = t.popper,
            y = t.onUpdate;
        w.setAttribute("data-tippy-root", "");
        w.id = "tippy-" + g.id;
        g.popper = w;
        u._tippy = g;
        w._tippy = g;
        var J = e.map(function(e) {
            return e.fn(g)
        });
        var q = u.hasAttribute("aria-expanded");
        Q();
        k();
        F();
        T("onCreate", [g]);
        if (r.showOnCreate) {
            ae()
        }
        w.addEventListener("mouseenter", function() {
            if (g.props.interactive && g.state.isVisible) {
                g.clearDelayTimeouts()
            }
        });
        w.addEventListener("mouseleave", function() {
            if (g.props.interactive && g.props.trigger.indexOf("mouseenter") >= 0) {
                S().addEventListener("mousemove", v)
            }
        });
        return g;

        function b() {
            var e = g.props.touch;
            return Array.isArray(e) ? e : [e, 0]
        }

        function x() {
            return b()[0] === "hold"
        }

        function _() {
            var e;
            return !!((e = g.props.render) != null && e.$$tippy)
        }

        function C() {
            return m || u
        }

        function S() {
            var e = C().parentNode;
            return e ? mc(e) : document
        }

        function I() {
            return Rc(w)
        }

        function $(e) {
            if (g.state.isMounted && !g.state.isVisible || we.isTouch || f && f.type === "focus") {
                return 0
            }
            return Yl(g.props.delay, e ? 0 : 1, ye.delay)
        }

        function F(e) {
            if (e === void 0) {
                e = false
            }
            w.style.pointerEvents = g.props.interactive && !e ? "" : "none";
            w.style.zIndex = "" + g.props.zIndex
        }

        function T(t, n, e) {
            if (e === void 0) {
                e = true
            }
            J.forEach(function(e) {
                if (e[t]) {
                    e[t].apply(e, n)
                }
            });
            if (e) {
                var i;
                (i = g.props)[t].apply(i, n)
            }
        }

        function z() {
            var e = g.props.aria;
            if (!e.content) {
                return
            }
            var i = "aria-" + e.content;
            var r = w.id;
            var t = ge(g.props.triggerTarget || u);
            t.forEach(function(e) {
                var t = e.getAttribute(i);
                if (g.state.isVisible) {
                    e.setAttribute(i, t ? t + " " + r : r)
                } else {
                    var n = t && t.replace(r, "").trim();
                    if (n) {
                        e.setAttribute(i, n)
                    } else {
                        e.removeAttribute(i)
                    }
                }
            })
        }

        function k() {
            if (q || !g.props.aria.expanded) {
                return
            }
            var e = ge(g.props.triggerTarget || u);
            e.forEach(function(e) {
                if (g.props.interactive) {
                    e.setAttribute("aria-expanded", g.state.isVisible && e === C() ? "true" : "false")
                } else {
                    e.removeAttribute("aria-expanded")
                }
            })
        }

        function O() {
            S().removeEventListener("mousemove", v);
            qc = qc.filter(function(e) {
                return e !== v
            })
        }

        function j(e) {
            if (we.isTouch) {
                if (l || e.type === "mousedown") {
                    return
                }
            }
            var t = e.composedPath && e.composedPath()[0] || e.target;
            if (g.props.interactive && yc(w, t)) {
                return
            }
            if (ge(g.props.triggerTarget || u).some(function(e) {
                    return yc(e, t)
                })) {
                if (we.isTouch) {
                    return
                }
                if (g.state.isVisible && g.props.trigger.indexOf("click") >= 0) {
                    return
                }
            } else {
                T("onClickOutside", [g, e])
            }
            if (g.props.hideOnClick === true) {
                g.clearDelayTimeouts();
                g.hide();
                o = true;
                setTimeout(function() {
                    o = false
                });
                if (!g.state.isMounted) {
                    E()
                }
            }
        }

        function B() {
            l = true
        }

        function U() {
            l = false
        }

        function H() {
            var e = S();
            e.addEventListener("mousedown", j, true);
            e.addEventListener("touchend", j, me);
            e.addEventListener("touchstart", U, me);
            e.addEventListener("touchmove", B, me)
        }

        function E() {
            var e = S();
            e.removeEventListener("mousedown", j, true);
            e.removeEventListener("touchend", j, me);
            e.removeEventListener("touchstart", U, me);
            e.removeEventListener("touchmove", B, me)
        }

        function G(e, t) {
            V(e, function() {
                if (!g.state.isVisible && w.parentNode && w.parentNode.contains(w)) {
                    t()
                }
            })
        }

        function W(e, t) {
            V(e, t)
        }

        function V(e, t) {
            var n = I().box;

            function i(e) {
                if (e.target === n) {
                    wc(n, "remove", i);
                    t()
                }
            }
            if (e === 0) {
                return t()
            }
            wc(n, "remove", d);
            wc(n, "add", i);
            d = i
        }

        function L(t, n, i) {
            if (i === void 0) {
                i = false
            }
            var e = ge(g.props.triggerTarget || u);
            e.forEach(function(e) {
                e.addEventListener(t, n, i);
                p.push({
                    node: e,
                    eventType: t,
                    handler: n,
                    options: i
                })
            })
        }

        function Q() {
            if (x()) {
                L("touchstart", K, {
                    passive: true
                });
                L("touchend", Z, {
                    passive: true
                })
            }
            nc(g.props.trigger).forEach(function(e) {
                if (e === "manual") {
                    return
                }
                L(e, K);
                switch (e) {
                    case "mouseenter":
                        L("mouseleave", Z);
                        break;
                    case "focus":
                        L($c ? "focusout" : "blur", ee);
                        break;
                    case "focusin":
                        L("focusout", ee);
                        break
                }
            })
        }

        function X() {
            p.forEach(function(e) {
                var t = e.node,
                    n = e.eventType,
                    i = e.handler,
                    r = e.options;
                t.removeEventListener(n, i, r)
            });
            p = []
        }

        function K(t) {
            var e;
            var n = false;
            if (!g.state.isEnabled || te(t) || o) {
                return
            }
            var i = ((e = f) == null ? void 0 : e.type) === "focus";
            f = t;
            m = t.currentTarget;
            k();
            if (!g.state.isVisible && fc(t)) {
                qc.forEach(function(e) {
                    return e(t)
                })
            }
            if (t.type === "click" && (g.props.trigger.indexOf("mouseenter") < 0 || s) && g.props.hideOnClick !== false && g.state.isVisible) {
                n = true
            } else {
                ae(t)
            }
            if (t.type === "click") {
                s = !n
            }
            if (n && !i) {
                D(t)
            }
        }

        function Y(e) {
            var t = e.target;
            var n = C().contains(t) || w.contains(t);
            if (e.type === "mousemove" && n) {
                return
            }
            var i = N().concat(w).map(function(e) {
                var t;
                var n = e._tippy;
                var i = (t = n.popperInstance) == null ? void 0 : t.state;
                if (i) {
                    return {
                        popperRect: e.getBoundingClientRect(),
                        popperState: i,
                        props: r
                    }
                }
                return null
            }).filter(Boolean);
            if (gc(i, e)) {
                O();
                D(e)
            }
        }

        function Z(e) {
            var t = te(e) || g.props.trigger.indexOf("click") >= 0 && s;
            if (t) {
                return
            }
            if (g.props.interactive) {
                g.hideWithInteractivity(e);
                return
            }
            D(e)
        }

        function ee(e) {
            if (g.props.trigger.indexOf("focusin") < 0 && e.target !== C()) {
                return
            }
            if (g.props.interactive && e.relatedTarget && w.contains(e.relatedTarget)) {
                return
            }
            D(e)
        }

        function te(e) {
            return we.isTouch ? x() !== e.type.indexOf("touch") >= 0 : false
        }

        function ne() {
            ie();
            var e = g.props,
                t = e.popperOptions,
                n = e.placement,
                i = e.offset,
                r = e.getReferenceClientRect,
                a = e.moveTransition;
            var o = _() ? Rc(w).arrow : null;
            var s = r ? {
                getBoundingClientRect: r,
                contextElement: r.contextElement || C()
            } : u;
            var l = {
                name: "$$tippy",
                enabled: true,
                phase: "beforeWrite",
                requires: ["computeStyles"],
                fn: function e(t) {
                    var n = t.state;
                    if (_()) {
                        var i = I(),
                            r = i.box;
                        ["placement", "reference-hidden", "escaped"].forEach(function(e) {
                            if (e === "placement") {
                                r.setAttribute("data-placement", n.placement)
                            } else {
                                if (n.attributes.popper["data-popper-" + e]) {
                                    r.setAttribute("data-" + e, "")
                                } else {
                                    r.removeAttribute("data-" + e)
                                }
                            }
                        });
                        n.attributes.popper = {}
                    }
                }
            };
            var c = [{
                name: "offset",
                options: {
                    offset: i
                }
            }, {
                name: "preventOverflow",
                options: {
                    padding: {
                        top: 2,
                        bottom: 2,
                        left: 5,
                        right: 5
                    }
                }
            }, {
                name: "flip",
                options: {
                    padding: 5
                }
            }, {
                name: "computeStyles",
                options: {
                    adaptive: !a
                }
            }, l];
            if (_() && o) {
                c.push({
                    name: "arrow",
                    options: {
                        element: o,
                        padding: 3
                    }
                })
            }
            c.push.apply(c, (t == null ? void 0 : t.modifiers) || []);
            g.popperInstance = Hl(s, w, Object.assign({}, t, {
                placement: n,
                onFirstUpdate: h,
                modifiers: c
            }))
        }

        function ie() {
            if (g.popperInstance) {
                g.popperInstance.destroy();
                g.popperInstance = null
            }
        }

        function re() {
            var e = g.props.appendTo;
            var t;
            var n = C();
            if (g.props.interactive && e === Kl || e === "parent") {
                t = n.parentNode
            } else {
                t = ec(e, [n])
            }
            if (!t.contains(w)) {
                t.appendChild(w)
            }
            g.state.isMounted = true;
            ne()
        }

        function N() {
            return oc(w.querySelectorAll("[data-tippy-root]"))
        }

        function ae(e) {
            g.clearDelayTimeouts();
            if (e) {
                T("onTrigger", [g, e])
            }
            H();
            var t = $(true);
            var n = b(),
                i = n[0],
                r = n[1];
            if (we.isTouch && i === "hold" && r) {
                t = r
            }
            if (t) {
                a = setTimeout(function() {
                    g.show()
                }, t)
            } else {
                g.show()
            }
        }

        function D(e) {
            g.clearDelayTimeouts();
            T("onUntrigger", [g, e]);
            if (!g.state.isVisible) {
                E();
                return
            }
            if (g.props.trigger.indexOf("mouseenter") >= 0 && g.props.trigger.indexOf("click") >= 0 && ["mouseleave", "mousemove"].indexOf(e.type) >= 0 && s) {
                return
            }
            var t = $(false);
            if (t) {
                n = setTimeout(function() {
                    if (g.state.isVisible) {
                        g.hide()
                    }
                }, t)
            } else {
                i = requestAnimationFrame(function() {
                    g.hide()
                })
            }
        }

        function oe() {
            g.state.isEnabled = true
        }

        function se() {
            g.hide();
            g.state.isEnabled = false
        }

        function le() {
            clearTimeout(a);
            clearTimeout(n);
            cancelAnimationFrame(i)
        }

        function ce(e) {
            if (g.state.isDestroyed) {
                return
            }
            T("onBeforeUpdate", [g, e]);
            X();
            var t = g.props;
            var n = Lc(u, Object.assign({}, t, sc(e), {
                ignoreAttributes: true
            }));
            g.props = n;
            Q();
            if (t.interactiveDebounce !== n.interactiveDebounce) {
                O();
                v = tc(Y, n.interactiveDebounce)
            }
            if (t.triggerTarget && !n.triggerTarget) {
                ge(t.triggerTarget).forEach(function(e) {
                    e.removeAttribute("aria-expanded")
                })
            } else if (n.triggerTarget) {
                u.removeAttribute("aria-expanded")
            }
            k();
            F();
            if (y) {
                y(t, n)
            }
            if (g.popperInstance) {
                ne();
                N().forEach(function(e) {
                    requestAnimationFrame(e._tippy.popperInstance.forceUpdate)
                })
            }
            T("onAfterUpdate", [g, e])
        }

        function ue(e) {
            g.setProps({
                content: e
            })
        }

        function fe() {
            var e = g.state.isVisible;
            var t = g.state.isDestroyed;
            var n = !g.state.isEnabled;
            var i = we.isTouch && !g.props.touch;
            var a = Yl(g.props.duration, 0, ye.duration);
            if (e || t || n || i) {
                return
            }
            if (C().hasAttribute("disabled")) {
                return
            }
            T("onShow", [g], false);
            if (g.props.onShow(g) === false) {
                return
            }
            g.state.isVisible = true;
            if (_()) {
                w.style.visibility = "visible"
            }
            F();
            H();
            if (!g.state.isMounted) {
                w.style.transition = "none"
            }
            if (_()) {
                var r = I(),
                    o = r.box,
                    s = r.content;
                pc([o, s], 0)
            }
            h = function e() {
                var t;
                if (!g.state.isVisible || c) {
                    return
                }
                c = true;
                void w.offsetHeight;
                w.style.transition = g.props.moveTransition;
                if (_() && g.props.animation) {
                    var n = I(),
                        i = n.box,
                        r = n.content;
                    pc([i, r], a);
                    vc([i, r], "visible")
                }
                z();
                k();
                ic(zc, g);
                (t = g.popperInstance) == null ? void 0 : t.forceUpdate();
                T("onMount", [g]);
                if (g.props.animation && _()) {
                    W(a, function() {
                        g.state.isShown = true;
                        T("onShown", [g])
                    })
                }
            };
            re()
        }

        function de() {
            var e = !g.state.isVisible;
            var t = g.state.isDestroyed;
            var n = !g.state.isEnabled;
            var i = Yl(g.props.duration, 1, ye.duration);
            if (e || t || n) {
                return
            }
            T("onHide", [g], false);
            if (g.props.onHide(g) === false) {
                return
            }
            g.state.isVisible = false;
            g.state.isShown = false;
            c = false;
            s = false;
            if (_()) {
                w.style.visibility = "hidden"
            }
            O();
            E();
            F(true);
            if (_()) {
                var r = I(),
                    a = r.box,
                    o = r.content;
                if (g.props.animation) {
                    pc([a, o], i);
                    vc([a, o], "hidden")
                }
            }
            z();
            k();
            if (g.props.animation) {
                if (_()) {
                    G(i, g.unmount)
                }
            } else {
                g.unmount()
            }
        }

        function he(e) {
            S().addEventListener("mousemove", v);
            ic(qc, v);
            v(e)
        }

        function pe() {
            if (g.state.isVisible) {
                g.hide()
            }
            if (!g.state.isMounted) {
                return
            }
            ie();
            N().forEach(function(e) {
                e._tippy.unmount()
            });
            if (w.parentNode) {
                w.parentNode.removeChild(w)
            }
            zc = zc.filter(function(e) {
                return e !== g
            });
            g.state.isMounted = false;
            T("onHidden", [g])
        }

        function ve() {
            if (g.state.isDestroyed) {
                return
            }
            g.clearDelayTimeouts();
            g.unmount();
            X();
            delete u._tippy;
            g.state.isDestroyed = true;
            T("onDestroy", [g])
        }
    }

    function y(e, t) {
        if (t === void 0) {
            t = {}
        }
        var n = ye.plugins.concat(t.plugins || []);
        Sc();
        var i = Object.assign({}, t, {
            plugins: n
        });
        var r = hc(e);
        var a = r.reduce(function(e, t) {
            var n = t && Bc(t, i);
            if (n) {
                e.push(n)
            }
            return e
        }, []);
        return cc(e) ? a[0] : a
    }
    y.defaultProps = ye;
    y.setDefaultProps = Oc;
    y.currentInput = we;
    Object.assign({}, $s, {
        effect: function e(t) {
            var n = t.state;
            var i = {
                popper: {
                    position: n.options.strategy,
                    left: "0",
                    top: "0",
                    margin: "0"
                },
                arrow: {
                    position: "absolute"
                },
                reference: {}
            };
            Object.assign(n.elements.popper.style, i.popper);
            n.styles = i;
            if (n.elements.arrow) {
                Object.assign(n.elements.arrow.style, i.arrow)
            }
        }
    });
    var Uc = {
        clientX: 0,
        clientY: 0
    };
    var Hc = [];

    function Gc(e) {
        var t = e.clientX,
            n = e.clientY;
        Uc = {
            clientX: t,
            clientY: n
        }
    }

    function Wc(e) {
        e.addEventListener("mousemove", Gc)
    }

    function Vc(e) {
        e.removeEventListener("mousemove", Gc)
    }
    var Qc = {
        name: "followCursor",
        defaultValue: false,
        fn: function e(r) {
            var h = r.reference;
            var t = mc(r.props.triggerTarget || h);
            var a = false;
            var o = false;
            var n = true;
            var s = r.props;

            function l() {
                return r.props.followCursor === "initial" && r.state.isVisible
            }

            function c() {
                t.addEventListener("mousemove", i)
            }

            function u() {
                t.removeEventListener("mousemove", i)
            }

            function f() {
                a = true;
                r.setProps({
                    getReferenceClientRect: null
                });
                a = false
            }

            function i(e) {
                var t = e.target ? h.contains(e.target) : true;
                var l = r.props.followCursor;
                var c = e.clientX,
                    u = e.clientY;
                var n = h.getBoundingClientRect();
                var f = c - n.left;
                var d = u - n.top;
                if (t || !r.props.interactive) {
                    r.setProps({
                        getReferenceClientRect: function e() {
                            var t = h.getBoundingClientRect();
                            var n = c;
                            var i = u;
                            if (l === "initial") {
                                n = t.left + f;
                                i = t.top + d
                            }
                            var r = l === "horizontal" ? t.top : i;
                            var a = l === "vertical" ? t.right : n;
                            var o = l === "horizontal" ? t.bottom : i;
                            var s = l === "vertical" ? t.left : n;
                            return {
                                width: a - s,
                                height: o - r,
                                top: r,
                                right: a,
                                bottom: o,
                                left: s
                            }
                        }
                    })
                }
            }

            function d() {
                if (r.props.followCursor) {
                    Hc.push({
                        instance: r,
                        doc: t
                    });
                    Wc(t)
                }
            }

            function p() {
                Hc = Hc.filter(function(e) {
                    return e.instance !== r
                });
                if (Hc.filter(function(e) {
                        return e.doc === t
                    }).length === 0) {
                    Vc(t)
                }
            }
            return {
                onCreate: d,
                onDestroy: p,
                onBeforeUpdate: function e() {
                    s = r.props
                },
                onAfterUpdate: function e(t, n) {
                    var i = n.followCursor;
                    if (a) {
                        return
                    }
                    if (i !== undefined && s.followCursor !== i) {
                        p();
                        if (i) {
                            d();
                            if (r.state.isMounted && !o && !l()) {
                                c()
                            }
                        } else {
                            u();
                            f()
                        }
                    }
                },
                onMount: function e() {
                    if (r.props.followCursor && !o) {
                        if (n) {
                            i(Uc);
                            n = false
                        }
                        if (!l()) {
                            c()
                        }
                    }
                },
                onTrigger: function e(t, n) {
                    if (fc(n)) {
                        Uc = {
                            clientX: n.clientX,
                            clientY: n.clientY
                        }
                    }
                    o = n.type === "focus"
                },
                onHidden: function e() {
                    if (r.props.followCursor) {
                        f();
                        u();
                        n = true
                    }
                }
            }
        }
    };
    y.setDefaultProps({
        render: Pc
    });

    function Xc(t, n, e) {
        e.split(/\s+/).forEach(function(e) {
            if (e) {
                t.classList[n](e)
            }
        })
    }
    var Kc = {
        name: "className",
        defaultValue: "",
        fn: function e(n) {
            var t = n.popper.firstElementChild;
            var i = function e() {
                var t;
                return !!((t = n.props.render) !== null && t !== void 0 && t.$$tippy)
            };

            function r() {
                if (n.props.className && !i()) {
                    return
                }
                Xc(t, "add", n.props.className)
            }

            function a() {
                if (i()) {
                    Xc(t, "remove", n.props.className)
                }
            }
            return {
                onCreate: r,
                onBeforeUpdate: a,
                onAfterUpdate: r
            }
        }
    };
    var Yc = function e(t, n, i) {
        var r = t.querySelector(n);
        if (r) {
            r.classList.add(i)
        }
    };
    var Zc = {
        name: "prefixClassName",
        defaultValue: "",
        fn: function e(t) {
            return {
                onCreate: function e(t) {
                    var n = t.popper.firstElementChild;
                    var i = t.props.prefixClassName || "ft-popover";
                    if (n) {
                        n.classList.add(i);
                        Yc(n, ".tippy-content", "".concat(i, "-content"));
                        Yc(n, ".tippy-arrow", "".concat(i, "-arrow"));
                        Yc(n, ".tippy-backdrop", "".concat(i, "-backdrop"))
                    }
                }
            }
        }
    };

    function eu(t, e) {
        var n = Object.keys(t);
        if (Object.getOwnPropertySymbols) {
            var i = Object.getOwnPropertySymbols(t);
            if (e) {
                i = i.filter(function(e) {
                    return Object.getOwnPropertyDescriptor(t, e).enumerable
                })
            }
            n.push.apply(n, i)
        }
        return n
    }

    function tu(t) {
        for (var e = 1; e < arguments.length; e++) {
            var n = arguments[e] != null ? arguments[e] : {};
            if (e % 2) {
                eu(Object(n), true).forEach(function(e) {
                    _(t, e, n[e])
                })
            } else if (Object.getOwnPropertyDescriptors) {
                Object.defineProperties(t, Object.getOwnPropertyDescriptors(n))
            } else {
                eu(Object(n)).forEach(function(e) {
                    Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(n, e))
                })
            }
        }
        return t
    }
    var nu = function e(t, n) {
        var i = function(e) {
            var t = e.className,
                n = e.theme,
                i = e.plugins,
                r = S(e, ["className", "theme", "plugins"]);
            return tu({
                className: [t, n && "is-".concat(n)].filter(Boolean).join(" "),
                plugins: [Zc, Kc].concat(_toConsumableArray(i || [])),
                prefixClassName: "ft-tooltip"
            }, r)
        }(n);
        return y(t, i)
    };
    var iu = function e(t, n) {
        var i = function(e) {
            var t = e.offset,
                n = S(e, ["offset"]);
            return tu({
                offset: Array.isArray(t) && t.length >= 2 ? [t[1], t[0]] : [10, 12]
            }, n)
        }(n);
        return y(t, tu(tu({}, i), {}, {
            plugins: [Zc, Kc, Qc],
            prefixClassName: "ft-hover-title",
            followCursor: true,
            placement: "right-start",
            arrow: false,
            animation: false
        }))
    };
    b.hoverTitle = iu;
    b.tooltip = nu;
    Object.defineProperty(b, "__esModule", {
        value: true
    })
});
$(function() {
    function e() {
        $.map($(".as-logo[data-title]"), function(e) {
            var t = $(e).attr("data-title");
            if (t) {
                if (window.future && window.future.tooltip) {
                    window.future.tooltip(e, {
                        className: "tooltip2",
                        maxWidth: 385,
                        content: t,
                        placement: "bottom"
                    })
                } else {
                    window.future && window.future.Tooltip && new window.future.Tooltip.create({
                        namespace: "tooltip2",
                        el: $(".as-logo[data-title]"),
                        className: "tooltip2",
                        html: t,
                        placement: "bottomCenter",
                        fixed: true,
                        style: "maxWidth: 385px;color: #222;line-height: 24px; white-space: nowrap;"
                    })
                }
            }
        });
        $(".as-logo[data-title]").hover(function() {
            $(this).attr("data-title") && $(this).addClass("has-tooltip")
        }, function() {
            $(this).removeClass("has-tooltip")
        })
    }
    e();
    window.asLogoHoverEvent = e;
    var t = {
        es: {
            title: "Proveedor Auditado",
            moreDetail: "Más detalles"
        },
        pt: {
            title: "Fornecedor Auditado",
            moreDetail: "Mais Detalhes"
        },
        fr: {
            title: "Fournisseur Audité",
            moreDetail: "Plus de Détails"
        },
        ru: {
            title: "Сертифицированный Поставщик",
            moreDetail: "Подробнее"
        },
        it: {
            title: "Fornitore Verificato",
            moreDetail: "Più Dettaglio"
        },
        de: {
            title: "Geprüfter Lieferant",
            moreDetail: "Mehr Details"
        },
        nl: {
            title: "Gecontroleerde Leverancier",
            moreDetail: "Meer detail"
        },
        sa: {
            title: "مورد تم المراجعة عليه",
            moreDetail: "تفاصيل اكثر"
        },
        kr: {
            title: "감사를 받은 공급업체",
            moreDetail: "자세한 세부 사항"
        },
        jp: {
            title: "認証済みサプライヤー",
            moreDetail: "詳細"
        },
        hi: {
            title: "आपूर्तिकर्ता की ऑडिट की गई",
            moreDetail: "ज्यादा जानकारी"
        },
        th: {
            title: "ตรวจสอบโดยซัพพลายเออร์แล้ว",
            moreDetail: "รายละเอี่ยดเพิ่มเติม"
        },
        tr: {
            title: "Tedarikçi denetlendi",
            moreDetail: "Daha Fazla Ayrıntı"
        },
        vi: {
            title: "Nhà cung cấp được kiểm tra",
            moreDetail: "Thêm Chi Tiết"
        },
        id: {
            title: "Pemasok yang diaudit",
            moreDetail: "Rincian Lainnya"
        }
    };
    var n = "Audited Supplier";
    var i = location.hostname.split(".");
    var o = i[0] === "sa";
    if (i && i[0] in t) {
        i = i[0];
        n = t[i].title
    }
    var r = '<div id="asContentDiv" class="tip as-tip arrow-bottom as-content" style="display:none;">' + '<div class="tip-con tip-as-content">' + '<div class="as-title">' + n + "</div>" + '<div id="asContentDetail" class="as-detail">' + "</div>" + "</div>" + '<span class="arrow arrow-out"><span class="arrow arrow-in"></span></span>' + "</div>";
    (function() {
        var t = null;
        $('.as-logo[reportUsable="reportUsable"]').hover(function() {
            var e = this;
            t = setTimeout(function() {
                n($(e))
            }, 500)
        }, function() {
            var e = $(this);
            e.find("#asContentDiv").hide();
            clearTimeout(t);
            if (e.hasClass("as-logo-on")) {
                e.removeClass("as-logo as-logo-on").addClass("as-logo as-logo-now")
            }
        });

        function n(a) {
            if (a.find(".J-hasInfo").length == 0) {
                a.append(r);
                a.find(".J-as-more-detail").attr("href", a.find(".J-prod-reportUrl").attr("href"));
                var e = a.find("input[type=hidden]").eq(0).val();
                if (e !== null && e !== "" && e != "undefined") {
                    var t = $("input[name='lanCode']"),
                        n = 0;
                    if (t.length > 0) {
                        n = t.val()
                    }
                    var i = "//www.made-in-china.com/multi-search/sgs/report?comId=" + e;
                    if (n > 0) {
                        i = "//www.made-in-china.com/multi-search/sgs/report?comId=" + e + "&lanCode=" + n
                    }
                    $.get(i, function(e) {
                        if (e.code === 0 && e.data.length > 0) {
                            var i = $("<ul>");
                            $.each(e.data, function(e, t) {
                                var n = "";
                                if (t.audit) {
                                    n = $("<li>").html('<i class="ob-icon icon-yes2"></i>' + t.content)
                                } else {
                                    n = $("<li>").text(t.content)
                                }
                                if (!t.audit) {
                                    o ? n.addClass("sa-no-active") : n.addClass("no-active")
                                }
                                i.append(n)
                            });
                            a.find("#asContentDetail").html(i);
                            var t = a.find("#asContentDiv").outerHeight();
                            var n = a.find("#asContentDiv").innerWidth();
                            var r = a.find("img").innerWidth();
                            if (t > a.offset().top) {
                                a.find("#asContentDiv").css({
                                    left: -((n - r) / 2),
                                    top: a.height() + 15
                                }).show();
                                a.find(".arrow-out").css({
                                    left: (n - r) / 2
                                }).show().addClass("arrow-out-b")
                            } else {
                                a.find("#asContentDiv").css({
                                    left: -((n - r) / 2),
                                    top: -(t + 10)
                                }).show();
                                a.find(".arrow-out").css({
                                    left: (n - r) / 2
                                }).show()
                            }
                            a.find("#asContentDiv").addClass("J-hasInfo")
                        }
                    })
                }
            } else {
                a.find("#asContentDiv").show()
            }
            if (a.hasClass("as-logo-now")) {
                a.removeClass("as-logo as-logo-now").addClass("as-logo as-logo-on")
            }
        }
    })()
});
(function(e, t) {
    "undefined" !== typeof module && module.exports ? module.exports = t() : "function" === typeof define && define.amd ? define(t) : e.Placeholder = t.call(e)
})(this, function() {
    function h(e, t) {
        return e.currentStyle ? e.currentStyle[t] : s.getComputedStyle(e, null)[t]
    }

    function o(e, t, n) {
        "undefined" === typeof n && (n = !0);
        for (var i in t)
            if ("Object" === Object.prototype.toString.call(t[i])) o(e, t[i]);
            else if (!e[i] || n) e[i] = t[i];
        return e
    }
    var s = window,
        e = new Abstract({
            setPlaceholder: function e() {},
            show: function e() {},
            hide: function e() {},
            initPage: function e() {},
            onchange: function e() {}
        }),
        l = new Clazz(e, {
            config: {
                carrier: null,
                control: {
                    unifieddisplay: !1,
                    emMethod: "focus"
                },
                style: {
                    color: "#BBB"
                }
            },
            inherit: Component
        }, function(e) {
            this.setConfig(e);
            this._.support = "placeholder" in document.createElement("input");
            this._.placeholder = null;
            return this.__init()
        });
    l.initPage = function(e) {
        var t = [],
            n, i, r;
        if (document.querySelectorAll) {
            n = document.querySelectorAll("input[placeholder]");
            i = 0;
            for (r = n.length; i < r; i++) t.push(n[i]);
            n = document.querySelectorAll("textarea[placeholder]");
            i = 0;
            for (r = n.length; i < r; i++) t.push(n[i])
        } else {
            n = document.getElementsByTagName("input");
            i = 0;
            for (r = n.length; i < r; i++) n[i].placeholder && t.push(n[i]);
            n = document.getElementsByTagName("textarea");
            i = 0;
            for (r = n.length; i < r; i++) n[i].placeholder && t.push(n[i])
        }
        if (t.length) return new l(o({
            carrier: t
        }, e, !1))
    };
    l.extend({
        __init: function e() {
            var t = this.config.carrier;
            if ("[object Array]" === Object.prototype.toString.call(t)) {
                var n = [],
                    i, r, a;
                i = 0;
                for (r = t.length; i < r; i++)(a = t[i]) && 1 === a.nodeType && n.push(new l(o({
                    carrier: a
                }, this.config, !1)));
                return n
            }
            try {
                if (!t) throw "Placeholder init error:carrier must not be null.";
                if (!t.placeholder && !t.getAttributeNode("placeholder").nodeValue) throw "element not has placeholder attribute."
            } catch (e) {
                e && s.console && s.console.log(e)
            }
            this._reRenderColor();
            this.elems.carrier = t;
            this._.placeholder = t.placeholder || t.getAttributeNode("placeholder").nodeValue;
            this._.name = t.name || "";
            this._.id = "p_" + (new Date).getTime();
            this.config.control.unifieddisplay && (t.removeAttribute("placeholder"), this._.support = !1);
            this._.support || (t.id ? this._.id = t.id : t.id = this._.id, this.elems.label = this._createLabel(t), "" === t.value && (this.elems.label.innerHTML = this._.placeholder), t.parentNode.insertBefore(this.elems.label, t), this.__events())
        },
        _createLabel: function e(t) {
            var n, i = document.createElement("label"),
                r = h(t, "padding"),
                a = h(t, "margin"),
                o = h(t, "fontSize"),
                s = this.__formatNumber(h(t, "paddingLeft")),
                l = this.__formatNumber(h(t, "paddingRight")),
                c = this.__formatNumber(h(t, "borderTopWidth")),
                u = this.__formatNumber(h(t, "borderLeftWidth")),
                f = this.__formatNumber(h(t, "marginTop"));
            i.htmlFor = this._.id;
            a || (a = getComputedStyle(t, null).marginTop + " 0");
            r || (r = h(t, "paddingTop") + " " + l + "px " + h(t, "paddingBottom") + " " + s + "px");
            if (this.config.style) {
                var d;
                n = "";
                for (d in this.config.style) n += d + ":" + this.config.style[d] + ";";
                if ("input" === t.nodeName.toLowerCase()) {
                    d = h(t, "width");
                    if ("auto" === d || "100%" === d) d = t.offsetWidth - s - l;
                    n += "white-space:nowrap;overflow:hidden;width:" + (parseInt(d) - 2) + "px;"
                }
            }
            i.style.cssText = "position:absolute; cursor:text; padding:" + r + "; padding-left:" + (s + u) + "px; margin:" + a + "; margin-top:" + (f + c + 1) + "px; font-size:" + o + ";" + n;
            return i
        },
        __formatNumber: function e(t) {
            return isNaN(parseInt(t)) ? 0 : parseInt(t, 10)
        },
        __events: function e() {
            var t = this,
                n = this.elems.carrier;
            n.onblur = function() {
                t._blur()
            };
            "input" === this.config.control.emMethod ? n.onpropertychange = n.oninput = function() {
                t._blur()
            } : n.onfocus = function() {
                t._focus()
            }
        },
        _focus: function e() {
            this.elems.label.innerHTML = "";
            this.elems.label.style.display = "none"
        },
        _blur: function e() {
            var t = this.elems.label;
            "" === this.elems.carrier.value ? (t.innerHTML = this._.placeholder, this.elems.label.style.display = "") : t.innerHTML = ""
        },
        _reRenderColor: function e() {
            if (!document.getElementById("placeholderFixed")) {
                var t = document.getElementsByTagName("head")[0],
                    n;
                n = this.config.style.color;
                var i;
                i = ":-moz-placeholder{color:" + n + "; }" + ("::-moz-placeholder{color:" + n + ";}") + ("::-webkit-input-placeholder{color:" + n + ";}") + (":-ms-input-placeholder{color:" + n + "!important;}");
                n = document.createElement("style");
                n.type = "text/css";
                n.id = "placeholderFixed";
                t.appendChild(n);
                n.styleSheet ? n.styleSheet.cssText = i : document.getBoxObjectFor ? n.innerHTML += i : n.appendChild(document.createTextNode(i))
            }
        },
        setPlaceholder: function e(t) {
            var n = t !== this._.placeholder;
            this._.placeholder = t;
            this.config.control.unifieddisplay || this.elems.carrier.setAttribute("placeholder", t);
            !this._.support && "" === this.elems.carrier.value && (this.elems.label.innerHTML = t);
            n && this.fire("change")
        },
        show: function e() {
            this.elems.label && (this.elems.label.style.display = "", this._blur());
            this.elems.carrier.style.display = ""
        },
        hide: function e() {
            this.elems.label && (this.elems.label.style.display = "none");
            this.elems.carrier.style.display = "none"
        },
        onchange: function e(t) {
            if (t) this.on("change", t)
        }
    });
    return l
});
void
function() {
    var e = new Abstract({
        onchange: function e(t) {},
        triggerChange: function e() {},
        selectedIndex: function e(t) {},
        options: function e() {},
        optgroups: function e() {},
        disabled: function e(t) {},
        unfold: function e() {},
        value: function e() {}
    });
    var t = {
        carrier: null,
        trigger: "click",
        control: {
            dropRows: null,
            selectedHide: false
        },
        style: {
            tagName: "choice",
            listCls: "choice-list",
            menuCls: "choice-hd",
            optCls: "choice-option",
            optgroupCls: "choice-optgroup",
            chooseCls: "selected",
            unfoldCls: "hover",
            unfoldReverseCls: "hover-reverse"
        }
    };
    var n = new Clazz(e, {
        config: t,
        inherit: Component
    }, function(e) {
        this.setConfig(e);
        if (!i.call(this)) {
            return
        }
        r.call(this);
        a.call(this);
        this.onchange.implement(this._onchange);
        this.triggerChange.implement(this._triggerChange);
        this.selectedIndex.implement(this._selectedIndex);
        this.disabled.implement(this._disabled);
        this.unfold.implement(this._unfold);
        this.options.implement(this._options);
        this.optgroups.implement(this._optgroups);
        this.value.implement(this._value)
    });
    n.extend({
        _onchange: function e(t) {
            this._.changeEvents.push(t)
        },
        _triggerChange: function e() {
            u.call(this)
        },
        _selectedIndex: function e(t) {
            if (parseInt(t, 10) > this._.options.length) {
                return
            }
            this._.selectedIndex = t;
            s.call(this)
        },
        _disabled: function e(t) {
            this._.disabled = t
        },
        _unfold: function e() {
            if (!this._.disabled) {
                var t = $(p(this.config.style.tagName));
                var n = this.config.carrier;
                if (!n.nodeType) {
                    n = n[0]
                }
                for (var i = 0, r = t.length; i < r; i++) {
                    if (t[i] === n) {
                        continue
                    } else {
                        $(t[i]).removeClass(this.config.style.unfoldCls).removeClass(this.config.style.unfoldReverseCls)
                    }
                }
                if (o.call(this)) {
                    this._.showPos = this.config.style.unfoldReverseCls;
                    if (this.elems.$list.css("display") !== "none") {
                        this.elems.$carrier.addClass(this._.showPos)
                    }
                    this.elems.$carrier.removeClass(this.config.style.unfoldCls)
                } else {
                    this._.showPos = this.config.style.unfoldCls;
                    if (this.elems.$list.css("display") !== "none") {
                        this.elems.$carrier.addClass(this._.showPos)
                    }
                    this.elems.$carrier.removeClass(this.config.style.unfoldReverseCls)
                }
                this.elems.$carrier.toggleClass(this._.showPos);
                s.call(this)
            }
        },
        _options: function e() {
            if (this.config.style.optCls) {
                return this.elems.$list.find(p(this.config.style.optCls))
            }
            return []
        },
        _optgroups: function e() {
            if (this.config.style.optgroupCls) {
                return this.elems.$list.find(p(this.config.style.optgroupCls))
            }
            return []
        },
        _value: function e() {
            return this._.options[this._.selectedIndex].value
        }
    });

    function i() {
        var e = new Error;
        var t = this.config;
        try {
            e.name = "selectInit";
            if (!t.carrier) {
                e.message = "Carrier must not be null."
            }
            if (!t.style.menuCls || !t.style.listCls || !t.style.optCls) {
                e.message = "Style structure insufficiency."
            }
            throw e
        } catch (e) {
            if (window.console && e.message) {
                console.log(e.message);
                return null
            }
        }
        return true
    }

    function r() {
        this._.selectedIndex = 0;
        this._.triggerEvent = this.config.trigger;
        this._.selectedOption = null;
        this._.optsWidth = null;
        this._.disabled = false;
        this._.changeEvents = [];
        this._.showPos = this.config.style.unfoldCls;
        this.elems.$carrier = $(this.config.carrier);
        this.elems.$menu = this.elems.$carrier.find(p(this.config.style.menuCls));
        this.elems.$list = this.elems.$carrier.find(p(this.config.style.listCls));
        this._.target = this.elems.$carrier.find("select")[0];
        this._.data = h(this._.target, []);
        this._.options = d(this._.target.options);
        this._.selectedIndex = this._.target.selectedIndex;
        if (this.elems.$carrier.attr("data-trigger")) {
            this._.triggerEvent = this.elems.$carrier.attr("data-trigger")
        }
        if (this.elems.$carrier.attr("data-width")) {
            this._.optsWidth = this.elems.$carrier.attr("data-width");
            this.elems.$list.css("width", this._.optsWidth)
        }
        this.elems.$list.empty();
        this.elems.$list[0].appendChild(f.call(this, this._.data, document.createDocumentFragment()));
        if (this.config.control.selectedHide) {
            this._options().eq(this._.selectedIndex).remove()
        }
        s.call(this);
        if (this.config.control.dropRows && this._options().eq(0) && this.config.control.dropRows < this._.target.options.length + this._.target.getElementsByTagName("optgroup").length) {
            this.elems.$list.css({
                overflow: "auto",
                height: parseInt(this._options().eq(0).outerHeight(), 10) * this.config.control.dropRows
            })
        }
    }

    function a() {
        var n = this;
        if (this._.triggerEvent === "click") {
            this.elems.$menu.on(this._.triggerEvent, function(e) {
                e.stopPropagation();
                n._unfold.call(n)
            });
            $(document).on("click", function(e) {
                n.elems.$carrier.removeClass(n._.showPos)
            })
        }
        if (this._.triggerEvent === "mouseover") {
            this.elems.$carrier.hover(function() {
                n._unfold.call(n)
            }, function() {
                n.elems.$carrier.removeClass(n._.showPos)
            })
        }
        this.elems.$list.on("mouseover", function(e) {
            n.elems.$list.find(p(n.config.style.chooseCls)).removeClass(n.config.style.chooseCls)
        });
        this.elems.$list.on("click", function(e) {
            var t = n._.selectedIndex;
            e.stopPropagation();
            if (e.target.nodeName.toLowerCase() === "a") {
                n._.selectedIndex = c.call(n, e.target.innerText || decodeURIComponent(e.target.textContent));
                s.call(n);
                n.elems.$carrier.removeClass(n._.showPos);
                if (t !== n._.selectedIndex) {
                    u.call(n)
                }
            }
        })
    }

    function o() {
        var e = document.body.scrollTop || document.documentElement.scrollTop;
        if (parseInt(this.elems.$carrier.offset().top, 10) + parseInt(this.elems.$list.outerHeight(), 10) + parseInt(this.elems.$menu.outerHeight(), 10) > $(window).height() + e && parseInt(this.elems.$carrier.offset().top, 10) - e > parseInt(this.elems.$list.outerHeight(), 10)) {
            return true
        }
        return false
    }

    function s() {
        if (!this._options()) {
            return
        }
        if (this.config.control.selectedHide) {
            this.elems.$list.empty();
            this.elems.$list[0].appendChild(f.call(this, this._.data, document.createDocumentFragment()));
            this._options().eq(this._.selectedIndex).remove()
        } else {
            this._.selectedOption = this._options().eq(this._.selectedIndex);
            this._options().removeClass(this.config.style.chooseCls);
            this._.selectedOption.addClass(this.config.style.chooseCls)
        }
        this.elems.$menu.find("span").html(l.call(this) && l.call(this).text);
        this._.target.selectedIndex = this._.selectedIndex
    }

    function l() {
        if (this._.options[this._.selectedIndex]) {
            return this._.options[this._.selectedIndex]
        }
        return null
    }

    function c(e) {
        var t = 0,
            n;
        for (n = this._.options.length; t < n; t++) {
            if (e === this._.options[t].text) {
                return t
            }
        }
        return t
    }

    function u() {
        if (!this._.changeEvents.length) {
            return
        }
        var e = 0;
        while (this._.changeEvents[e]) {
            if (this._.changeEvents[e] instanceof Function) {
                this._.changeEvents[e].call(this._.target.options[this._.target.selectedIndex])
            }
            e++
        }
    }

    function f(e, t) {
        var n, i, r, a;
        for (n = 0, i = e.length; n < i; n++) {
            r = document.createElement("dd");
            if (e[n].value instanceof Array) {
                var o = document.createElement("dl");
                a = document.createElement("dt");
                if (!e[n].value.length && e[n].type) {
                    a.className = this.config.style.tagName + "-" + e[n].type;
                    o.appendChild(a)
                } else {
                    a.innerHTML = e[n].text;
                    o.appendChild(a);
                    o.className = this.config.style.optgroupCls;
                    o.appendChild(arguments.callee.call(this, e[n].value, document.createDocumentFragment()))
                }
                r.appendChild(o)
            } else {
                r.className = this.config.style.optCls;
                r.innerHTML = '<a href="javascript:;">' + e[n].text + "</a>"
            }
            t.appendChild(r)
        }
        return t
    }

    function d(e) {
        var t, n, i = [];
        for (t = 0, n = e.length; t < n; t++) {
            i.push({
                text: e[t].text,
                value: e[t].value
            })
        }
        return i
    }

    function h(e, t) {
        if (!e) {
            return null
        }
        var n = e.childNodes,
            i, r;
        for (i = 0; i < n.length; i++) {
            if (n[i] && n[i].nodeType === 1) {
                if (n[i].nodeName.toLowerCase() === "optgroup") {
                    r = {
                        text: n[i].label,
                        value: arguments.callee(n[i], [])
                    };
                    if (n[i].getAttributeNode("data-type")) {
                        r.type = n[i].getAttributeNode("data-type").nodeValue
                    }
                } else {
                    r = {
                        text: n[i].text,
                        value: n[i].value
                    }
                }
                t.push(r)
            }
        }
        return t
    }

    function p(e) {
        if (e.substring(0, 1) === ".") {
            return e
        } else {
            return "." + e
        }
    }
    this.MaskSelect = n
}.call(window);
(function(e, t) {
    "undefined" !== typeof module && module.exports ? module.exports = t() : "function" === typeof define && define.amd ? define(t) : e.InputSuggest = t.call(e)
})(this, function() {
    function r(t) {
        if (!t._.disabled) {
            var e = this.value;
            t._.hisWord = e;
            t.config.asyncData.url && (t._.timer && clearTimeout(t._.timer), t._.timer = setTimeout(function() {
                if (!e) return t.hide(), !1;
                s.call(t, e, function(e) {
                    a.call(t, e)
                })
            }, t.config.asyncData.interval));
            if (t.config.syncData.data) {
                var n;
                n = t.config.syncData.trigger;
                var i = t.config.syncData.tipFiled;
                l(t.config.syncData.data);
                !n || !i || !e ? t.hide() : RegExp(n, "g").test(e) ? (n = c.call(t, o(t.config.syncData.data, e, RegExp.$1, RegExp.$2), this.value.toLowerCase()), a.call(t, n)) : t.hide()
            }
        }
    }

    function n(e) {
        if (!this._.selected) return null;
        var t = this._.selected.attr("template");
        if (t && this[t + "CustomAction"] && this[t + "CustomAction"] instanceof Function) this[t + "CustomAction"](this._.selected, e)
    }

    function a(e) {
        this.elems.$list.empty();
        this._.selected = null;
        this.elems.$list[0].appendChild(e);
        $.trim(this.elems.$list.html()) ? (this.elems.$list.show(), this.fire("show"), this.elems.$list.children().addClass(this._.itemMark)) : this.hide()
    }

    function o(e, t, n, i) {
        if (!n) return e;
        var r, t = 0,
            e = $.extend(!0, {}, e);
        for (r in e)
            for (; e[r][t];) i && e[r][t].email.slice(0, i.length) !== i ? e[r].splice(t, 1) : (e[r][t].input = n, t++);
        return e
    }

    function s(n, i) {
        if (this.config.asyncData.blankInput || n) {
            var e = this.config.asyncData.url,
                r = this;
            e && (e = -1 !== e.indexOf("?") ? e + ("&_" + (new Date).getTime()) : e + ("?_" + (new Date).getTime()), r._.cache[n] ? i && i.call(null, c.call(r, r._.cache[n], n)) : $.ajax({
                type: "get",
                url: e.replace("#param#", this.config.isEncodeParam ? encodeURIComponent(n) : n),
                dataType: "json",
                success: function e(t) {
                    l(t);
                    r._.cache[n] || (r._.cache[n] = t, r._.hisWord = n);
                    i && i.call(null, c.call(r, t, n))
                }
            }))
        }
    }

    function l(e) {
        if (e) {
            var t = 0;
            try {
                for (var n in e)
                    if (e[n] && 0 < e[n].length)
                        for (t = 0; t < e[n].length; t++) e[n][t]._index = t
            } catch (e) {
                window.console && console.log("init index error")
            }
        }
    }

    function c(e, t) {
        var n, i, r, a, o, s = document.createDocumentFragment();
        o = "";
        var l = this.config.ignoreCase,
            c = this.config.style.highlightCls;
        for (n in e)
            if (e[n] && this.config.templates[n]) {
                r = 0;
                for (a = e[n].length; r < a; r++) {
                    e: {
                        var u = e[n][r];o = this.config.templates[n];
                        var f = "",
                            d = /<\$([\w\W]*?)\$>/gi,
                            h = null,
                            h = null,
                            p = void 0,
                            v = o;
                        for (h in u) {
                            p = u[h];
                            if ("string" === typeof p && (-1 !== p.indexOf('"') || -1 !== p.indexOf("'"))) p = p.replace(/"/g, '\\"'), p = p.replace(/'/g, "'");
                            f += "var " + h + '="' + p + '";'
                        }
                        for (; null !== (h = d.exec(o));) {
                            u = f;
                            u += h[1];
                            try {
                                v = v.replace(h[0], new Function(u)() || "")
                            } catch (e) {
                                o = "";
                                break e
                            }
                        }
                        o = v
                    }
                    for (i in e[n][r]) o = o.replace(RegExp("{" + i + "}", "gi"), e[n][r][i]);c && (o = o.replace(RegExp("({.+})", "gi"), function(e) {
                        e = e.substring(1, e.length - 1);
                        return l ? e.replace(RegExp(t, "gi"), '<span class="' + c + '">$&</span>') : e.replace(RegExp(t, "g"), '<span class="' + c + '">' + t + "</span>")
                    }));f = document.createElement("div");f.innerHTML = o;o = f.childNodes[0];o.setAttribute("template", n);s.appendChild(o)
                }
            }
        return s
    }

    function u(e) {
        var t = null,
            n = ("." === this._.itemMark.substring(0, 1) ? this._.itemMark : "." + this._.itemMark) + "[unchoose!=true]",
            i = this.elems.$list.children(n),
            r = this._.selected;
        r && r.removeClass(this.config.style.selectedCls);
        if (27 === e) return this.hide(), null;
        38 === e && (t = r && r.prev(n).length ? r.prev(n) : r ? null : i.last());
        40 === e && (t = r && r.next(n).length ? r.next(n) : r ? null : i.first());
        t && t.addClass(this.config.style.selectedCls);
        this._.selected = t
    }

    function f(e, t) {
        return e.hasClass(t) ? e : e.parents("." === t.substring(0, 1) ? t : "." + t)
    }
    var e = new Abstract({
            disabled: function e() {},
            show: function e() {},
            hide: function e() {},
            over: function e() {},
            originalMouseMove: function e() {},
            out: function e() {},
            inputChange: function e() {},
            loadData: function e() {},
            changeAsync: function e() {},
            getData: function e() {},
            getLastWord: function e() {}
        }),
        e = new Clazz(e, {
            config: {
                carrier: null,
                targetCarrier: null,
                ignoreCase: !1,
                isEncodeParam: !1,
                syncData: {
                    data: null,
                    trigger: null,
                    tipFiled: null
                },
                asyncData: {
                    isCache: !0,
                    url: null,
                    interval: 200,
                    blankInput: !1
                },
                style: {
                    highlightCls: null,
                    selectedCls: null,
                    listCls: null,
                    container: null
                },
                templates: {},
                triggerOver: !0
            },
            inherit: Component
        }, function(e) {
            this.setConfig(e);
            e = Error();
            try {
                throw e.name = "InputSuggestInit", this.config.carrier || (e.message = "Carrier must not be null."), this.config.style.listCls || (e.message = "Style structure insufficiency."), !this.config.asyncData.url && !this.config.syncData.data && (e.message = "asyncData: syncData and asyncData must be exist a."), e
            } catch (e) {
                if (window.console && e.message) return console.log(e.message), null
            }
            this.__init();
            this.__events()
        });
    e.extend({
        __init: function e() {
            this._.hisWord = null;
            this._.selected = null;
            this._.timer = null;
            this._.cache = {};
            this._.onInputHack = !0;
            this._.itemMark = "suggest_" + (new Date).getTime();
            this._.disabled = !1;
            this.elems.$carrier = $(this.config.carrier);
            var t = this.elems,
                n;
            n = document.createElement(this.config.style.container);
            n.className = this.config.style.listCls;
            n.style.display = "none";
            this.config.targetCarrier ? $(this.config.targetCarrier).append(n) : $(n).insertAfter(this.elems.$carrier);
            n = $(n);
            t.$list = n;
            this.elems.$carrier.attr("autocomplete", "off")
        },
        __events: function e() {
            var t, i = this;
            this.elems.$carrier.on("focus", function() {
                i.elems.$list.html() && i._.hisWord && i.show();
                "onpropertychange" in document.createElement("input") && (i._.onInputHack = !1, i._.hisWord = this.value)
            });
            this.elems.$carrier.on("blur", function() {
                i._.onInputHack = !0;
                setTimeout(function() {
                    i.hide();
                    i.fire("inputChange")
                }, 200)
            });
            this.elems.$carrier.on("keydown", function(e) {
                t = e.keyCode;
                i._.onInputHack = 38 === t || 40 === t ? !0 : !1;
                if (t && (38 === t || 40 === t || 27 === t)) !i.elems.$list.html() && 27 !== t ? i.show() : (u.call(i, t), i.fire("over", i._.selected)), e.preventDefault(), 27 !== t && (i._.selected && i._.selected.attr("val") ? i.elems.$carrier.val(i._.selected.attr("val")) : i._.hisWord && i.elems.$carrier.val(i._.hisWord));
                t && 13 === t && null !== n.call(i, e) && (i.hide(!0), e.preventDefault())
            });
            if ($.browser.msie && "9.0" === $.browser.version) this.elems.$carrier.on("keyup", function(e) {
                t = e.keyCode;
                (8 === t || 46 === t) && r.call(i.elems.$carrier[0], i)
            });
            this.elems.$list.on("mousedown", function(e) {
                if (0 === e.button || 1 === e.which) {
                    var t = f($(e.target), i._.itemMark);
                    t.attr("val") && ("onpropertychange" in document.createElement("input") && (i._.onInputHack = !0), i.elems.$carrier.val(t.attr("val")));
                    n.call(i, e)
                } else e.preventDefault()
            });
            this.elems.$list.on("mousemove", function(e) {
                var t = i._.selected,
                    e = f($(e.target), i._.itemMark),
                    n = i.config.style.selectedCls;
                if (!e.hasClass(n) || !i._.selected.hasClass(n)) t && t.removeClass(n), e.addClass(n), i._.selected = e, i.config.triggerOver ? i.fire("over", i._.selected) : i.fire("originalMouseMove", i._.selected)
            });
            this.elems.$list.on("mouseout", function(e) {
                var t = f($(e.relatedTarget), i._.itemMark),
                    n = i.config.style.selectedCls;
                if (!t.hasClass(n) || !i._.selected.hasClass(n))
                    if (t = i.elems.$list, e = e.relatedTarget, "undefined" === typeof t.nodeType && (t = t.get(0)), t.contains ? t != e && t.contains(e) : t.compareDocumentPosition(e) & 16) i.fire("out", i._.selected), i._.selected && i._.selected.removeClass(n), i._.selected = null
            });
            if ("onpropertychange" in document.createElement("input")) this.elems.$carrier[0].attachEvent("onpropertychange", function() {
                i._.onInputHack || (r.call(i.elems.$carrier[0], i), i.fire("inputChange"))
            });
            else this.elems.$carrier.on("input", function() {
                r.call(this, i);
                i.fire("inputChange")
            })
        },
        disabled: function e(t) {
            this._.disabled = t
        },
        show: function e() {
            if (!this._.disabled) {
                var t = this.elems.$carrier.val(),
                    n = this;
                t !== this._.hisWord || !this.elems.$list.html() ? (this.config.asyncData.url && s.call(this, t, function(e) {
                    a.call(n, e)
                }), n.config.syncData.data && r.call(n.elems.$carrier[0], n)) : (this.elems.$list.show(), this.fire("show"))
            }
        },
        hide: function e() {
            this._.hisWord = this.elems.$carrier.val();
            this._.selected && this._.selected.removeClass(this.config.style.selectedCls);
            this._.selected = null;
            this.elems.$list.hide();
            this.fire("hide");
            this.elems.$list.empty()
        },
        loadData: function e(t) {
            this.config.syncData.data && (l(t), this.config.syncData.data = t, r.call(this.elems.$carrier[0], this))
        },
        changeAsync: function e(t) {
            t && (this.config.asyncData.url = t, this._.cache = {})
        },
        getData: function e(t, n, i) {
            var r = this._.cache;
            if (r[t] && r[t][n] && (t = r[t][n], 0 < t.length))
                for (n = 0; n < t.length; n++)
                    if (t[n]._index + "" === i + "") return t[n];
            return null
        },
        getLastWord: function e() {
            return this._.hisWord || this.elems.$carrier.val()
        }
    });
    return e
});
(function e(t, n) {
    if ((typeof exports === "undefined" ? "undefined" : _typeof(exports)) === "object" && (typeof module === "undefined" ? "undefined" : _typeof(module)) === "object") module.exports = n();
    else if (typeof define === "function" && define.amd) define([], n);
    else {
        var i = n();
        for (var r in i)((typeof exports === "undefined" ? "undefined" : _typeof(exports)) === "object" ? exports : t)[r] = i[r]
    }
})(this, function() {
    return function(n) {
        var i = {};

        function r(e) {
            if (i[e]) return i[e].exports;
            var t = i[e] = {
                exports: {},
                id: e,
                loaded: false
            };
            n[e].call(t.exports, t, t.exports, r);
            t.loaded = true;
            return t.exports
        }
        r.m = n;
        r.c = i;
        r.p = "";
        return r(0)
    }([function(e, t, n) {
        n(7);
        n(8);
        e.exports = n(9)
    }, function(d, e, t) {
        (function(f) {
            (function(e) {
                var r = typeof f === "function" && f || function(e) {
                    setTimeout(e, 1)
                };

                function n(e, t) {
                    return function() {
                        e.apply(t, arguments)
                    }
                }
                var t = Array.isArray || function(e) {
                    return Object.prototype.toString.call(e) === "[object Array]"
                };

                function a(e) {
                    if (_typeof(this) !== "object") throw new TypeError("Promises must be constructed via new");
                    if (typeof e !== "function") throw new TypeError("not a function");
                    this._state = null;
                    this._value = null;
                    this._deferreds = [];
                    u(e, n(i, this), n(s, this))
                }

                function o(n) {
                    var i = this;
                    if (this._state === null) {
                        this._deferreds.push(n);
                        return
                    }
                    r(function() {
                        var e = i._state ? n.onFulfilled : n.onRejected;
                        if (e === null) {
                            (i._state ? n.resolve : n.reject)(i._value);
                            return
                        }
                        var t;
                        try {
                            t = e(i._value)
                        } catch (e) {
                            n.reject(e);
                            return
                        }
                        n.resolve(t)
                    })
                }

                function i(e) {
                    try {
                        if (e === this) throw new TypeError("A promise cannot be resolved with itself.");
                        if (e && (_typeof(e) === "object" || typeof e === "function")) {
                            var t = e.then;
                            if (typeof t === "function") {
                                u(n(t, e), n(i, this), n(s, this));
                                return
                            }
                        }
                        this._state = true;
                        this._value = e;
                        l.call(this)
                    } catch (e) {
                        s.call(this, e)
                    }
                }

                function s(e) {
                    this._state = false;
                    this._value = e;
                    l.call(this)
                }

                function l() {
                    for (var e = 0, t = this._deferreds.length; e < t; e++) {
                        o.call(this, this._deferreds[e])
                    }
                    this._deferreds = null
                }

                function c(e, t, n, i) {
                    this.onFulfilled = typeof e === "function" ? e : null;
                    this.onRejected = typeof t === "function" ? t : null;
                    this.resolve = n;
                    this.reject = i
                }

                function u(e, t, n) {
                    var i = false;
                    try {
                        e(function(e) {
                            if (i) return;
                            i = true;
                            t(e)
                        }, function(e) {
                            if (i) return;
                            i = true;
                            n(e)
                        })
                    } catch (e) {
                        if (i) return;
                        i = true;
                        n(e)
                    }
                }
                a.prototype["catch"] = function(e) {
                    return this.then(null, e)
                };
                a.prototype.then = function(n, i) {
                    var r = this;
                    return new a(function(e, t) {
                        o.call(r, new c(n, i, e, t))
                    })
                };
                a.all = function() {
                    var s = Array.prototype.slice.call(arguments.length === 1 && t(arguments[0]) ? arguments[0] : arguments);
                    return new a(function(i, r) {
                        if (s.length === 0) return i([]);
                        var a = s.length;

                        function o(t, e) {
                            try {
                                if (e && (_typeof(e) === "object" || typeof e === "function")) {
                                    var n = e.then;
                                    if (typeof n === "function") {
                                        n.call(e, function(e) {
                                            o(t, e)
                                        }, r);
                                        return
                                    }
                                }
                                s[t] = e;
                                if (--a === 0) {
                                    i(s)
                                }
                            } catch (e) {
                                r(e)
                            }
                        }
                        for (var e = 0; e < s.length; e++) {
                            o(e, s[e])
                        }
                    })
                };
                a.resolve = function(t) {
                    if (t && _typeof(t) === "object" && t.constructor === a) {
                        return t
                    }
                    return new a(function(e) {
                        e(t)
                    })
                };
                a.reject = function(n) {
                    return new a(function(e, t) {
                        t(n)
                    })
                };
                a.race = function(r) {
                    return new a(function(e, t) {
                        for (var n = 0, i = r.length; n < i; n++) {
                            r[n].then(e, t)
                        }
                    })
                };
                a._setImmediateFn = function e(t) {
                    r = t
                };
                a.prototype.always = function(t) {
                    var n = this.constructor;
                    return this.then(function(e) {
                        return n.resolve(t()).then(function() {
                            return e
                        })
                    }, function(e) {
                        return n.resolve(t()).then(function() {
                            throw e
                        })
                    })
                };
                if (typeof d !== "undefined" && d.exports) {
                    d.exports = a
                } else if (!e.Promise) {
                    e.Promise = a
                }
            })(this)
        }).call(e, t(2).setImmediate)
    }, function(e, r, a) {
        (function(e) {
            var t = typeof e !== "undefined" && e || typeof self !== "undefined" && self || window;
            var n = Function.prototype.apply;
            r.setTimeout = function() {
                return new i(n.call(setTimeout, t, arguments), clearTimeout)
            };
            r.setInterval = function() {
                return new i(n.call(setInterval, t, arguments), clearInterval)
            };
            r.clearTimeout = r.clearInterval = function(e) {
                if (e) {
                    e.close()
                }
            };

            function i(e, t) {
                this._id = e;
                this._clearFn = t
            }
            i.prototype.unref = i.prototype.ref = function() {};
            i.prototype.close = function() {
                this._clearFn.call(t, this._id)
            };
            r.enroll = function(e, t) {
                clearTimeout(e._idleTimeoutId);
                e._idleTimeout = t
            };
            r.unenroll = function(e) {
                clearTimeout(e._idleTimeoutId);
                e._idleTimeout = -1
            };
            r._unrefActive = r.active = function(t) {
                clearTimeout(t._idleTimeoutId);
                var e = t._idleTimeout;
                if (e >= 0) {
                    t._idleTimeoutId = setTimeout(function e() {
                        if (t._onTimeout) t._onTimeout()
                    }, e)
                }
            };
            a(3);
            r.setImmediate = typeof self !== "undefined" && self.setImmediate || typeof e !== "undefined" && e.setImmediate || this && this.setImmediate;
            r.clearImmediate = typeof self !== "undefined" && self.clearImmediate || typeof e !== "undefined" && e.clearImmediate || this && this.clearImmediate
        }).call(r, function() {
            return this
        }())
    }, function(e, t, n) {
        (function(e, w) {
            (function(i, r) {
                "use strict";
                if (i.setImmediate) {
                    return
                }
                var a = 1;
                var o = {};
                var n = false;
                var s = i.document;
                var l;

                function e(e) {
                    if (typeof e !== "function") {
                        e = new Function("" + e)
                    }
                    var t = new Array(arguments.length - 1);
                    for (var n = 0; n < t.length; n++) {
                        t[n] = arguments[n + 1]
                    }
                    var i = {
                        callback: e,
                        args: t
                    };
                    o[a] = i;
                    l(a);
                    return a++
                }

                function c(e) {
                    delete o[e]
                }

                function u(e) {
                    var t = e.callback;
                    var n = e.args;
                    switch (n.length) {
                        case 0:
                            t();
                            break;
                        case 1:
                            t(n[0]);
                            break;
                        case 2:
                            t(n[0], n[1]);
                            break;
                        case 3:
                            t(n[0], n[1], n[2]);
                            break;
                        default:
                            t.apply(r, n);
                            break
                    }
                }

                function f(e) {
                    if (n) {
                        setTimeout(f, 0, e)
                    } else {
                        var t = o[e];
                        if (t) {
                            n = true;
                            try {
                                u(t)
                            } finally {
                                c(e);
                                n = false
                            }
                        }
                    }
                }

                function t() {
                    l = function e(t) {
                        w.nextTick(function() {
                            f(t)
                        })
                    }
                }

                function d() {
                    if (i.postMessage && !i.importScripts) {
                        var e = true;
                        var t = i.onmessage;
                        i.onmessage = function() {
                            e = false
                        };
                        i.postMessage("", "*");
                        i.onmessage = t;
                        return e
                    }
                }

                function h() {
                    var n = "setImmediate$" + Math.random() + "$";
                    var e = function e(t) {
                        if (t.source === i && typeof t.data === "string" && t.data.indexOf(n) === 0) {
                            f(+t.data.slice(n.length))
                        }
                    };
                    if (i.addEventListener) {
                        i.addEventListener("message", e, false)
                    } else {
                        i.attachEvent("onmessage", e)
                    }
                    l = function e(t) {
                        i.postMessage(n + t, "*")
                    }
                }

                function p() {
                    var n = new MessageChannel;
                    n.port1.onmessage = function(e) {
                        var t = e.data;
                        f(t)
                    };
                    l = function e(t) {
                        n.port2.postMessage(t)
                    }
                }

                function v() {
                    var i = s.documentElement;
                    l = function e(t) {
                        var n = s.createElement("script");
                        n.onreadystatechange = function() {
                            f(t);
                            n.onreadystatechange = null;
                            i.removeChild(n);
                            n = null
                        };
                        i.appendChild(n)
                    }
                }

                function m() {
                    l = function e(t) {
                        setTimeout(f, 0, t)
                    }
                }
                var g = Object.getPrototypeOf && Object.getPrototypeOf(i);
                g = g && g.setTimeout ? g : i;
                if ({}.toString.call(i.process) === "[object process]") {
                    t()
                } else if (d()) {
                    h()
                } else if (i.MessageChannel) {
                    p()
                } else if (s && "onreadystatechange" in s.createElement("script")) {
                    v()
                } else {
                    m()
                }
                g.setImmediate = e;
                g.clearImmediate = c
            })(typeof self === "undefined" ? typeof e === "undefined" ? this : e : self)
        }).call(t, function() {
            return this
        }(), n(4))
    }, function(e, t) {
        var n = e.exports = {};
        var i;
        var r;

        function a() {
            throw new Error("setTimeout has not been defined")
        }

        function o() {
            throw new Error("clearTimeout has not been defined")
        }(function() {
            try {
                if (typeof setTimeout === "function") {
                    i = setTimeout
                } else {
                    i = a
                }
            } catch (e) {
                i = a
            }
            try {
                if (typeof clearTimeout === "function") {
                    r = clearTimeout
                } else {
                    r = o
                }
            } catch (e) {
                r = o
            }
        })();

        function s(t) {
            if (i === setTimeout) {
                return setTimeout(t, 0)
            }
            if ((i === a || !i) && setTimeout) {
                i = setTimeout;
                return setTimeout(t, 0)
            }
            try {
                return i(t, 0)
            } catch (e) {
                try {
                    return i.call(null, t, 0)
                } catch (e) {
                    return i.call(this, t, 0)
                }
            }
        }

        function l(t) {
            if (r === clearTimeout) {
                return clearTimeout(t)
            }
            if ((r === o || !r) && clearTimeout) {
                r = clearTimeout;
                return clearTimeout(t)
            }
            try {
                return r(t)
            } catch (e) {
                try {
                    return r.call(null, t)
                } catch (e) {
                    return r.call(this, t)
                }
            }
        }
        var c = [];
        var u = false;
        var f;
        var d = -1;

        function h() {
            if (!u || !f) {
                return
            }
            u = false;
            if (f.length) {
                c = f.concat(c)
            } else {
                d = -1
            }
            if (c.length) {
                p()
            }
        }

        function p() {
            if (u) {
                return
            }
            var e = s(h);
            u = true;
            var t = c.length;
            while (t) {
                f = c;
                c = [];
                while (++d < t) {
                    if (f) {
                        f[d].run()
                    }
                }
                d = -1;
                t = c.length
            }
            f = null;
            u = false;
            l(e)
        }
        n.nextTick = function(e) {
            var t = new Array(arguments.length - 1);
            if (arguments.length > 1) {
                for (var n = 1; n < arguments.length; n++) {
                    t[n - 1] = arguments[n]
                }
            }
            c.push(new v(e, t));
            if (c.length === 1 && !u) {
                s(p)
            }
        };

        function v(e, t) {
            this.fun = e;
            this.array = t
        }
        v.prototype.run = function() {
            this.fun.apply(null, this.array)
        };
        n.title = "browser";
        n.browser = true;
        n.env = {};
        n.argv = [];
        n.version = "";
        n.versions = {};

        function m() {}
        n.on = m;
        n.addListener = m;
        n.once = m;
        n.off = m;
        n.removeListener = m;
        n.removeAllListeners = m;
        n.emit = m;
        n.prependListener = m;
        n.prependOnceListener = m;
        n.listeners = function(e) {
            return []
        };
        n.binding = function(e) {
            throw new Error("process.binding is not supported")
        };
        n.cwd = function() {
            return "/"
        };
        n.chdir = function(e) {
            throw new Error("process.chdir is not supported")
        };
        n.umask = function() {
            return 0
        }
    }, function(e, t) {
        var c = function() {
            try {
                new Blob;
                return true
            } catch (e) {
                return false
            }
        }() ? window.Blob : function(e, t) {
            var n = new(window.BlobBuilder || window.WebKitBlobBuilder || window.MSBlobBuilder || window.MozBlobBuilder);
            e.forEach(function(e) {
                n.append(e)
            });
            return n.getBlob(t ? t.type : undefined)
        };

        function n() {
            var e = ~navigator.userAgent.indexOf("Android") && ~navigator.vendor.indexOf("Google") && !~navigator.userAgent.indexOf("Chrome");
            return e && navigator.userAgent.match(/AppleWebKit\/(\d+)/).pop() <= 534 || /MQQBrowser/g.test(navigator.userAgent)
        }
        var i = function() {
            var l = 0;

            function e() {
                var r = this,
                    a = [],
                    o = Array(21).join("-") + (+new Date * (1e16 * Math.random())).toString(36),
                    s = XMLHttpRequest.prototype.send;
                this.getParts = function() {
                    return a.toString()
                };
                this.append = function(e, t, n) {
                    a.push("--" + o + '\r\nContent-Disposition: form-data; name="' + e + '"');
                    if (t instanceof Blob) {
                        a.push('; filename="' + (n || "blob") + '"\r\nContent-Type: ' + t.type + "\r\n\r\n");
                        a.push(t)
                    } else {
                        a.push("\r\n\r\n" + t)
                    }
                    a.push("\r\n")
                };
                l++;
                XMLHttpRequest.prototype.send = function(e) {
                    var t, n, i = this;
                    if (e === r) {
                        a.push("--" + o + "--\r\n");
                        n = new c(a);
                        t = new FileReader;
                        t.onload = function() {
                            s.call(i, t.result)
                        };
                        t.onerror = function(e) {
                            throw e
                        };
                        t.readAsArrayBuffer(n);
                        this.setRequestHeader("Content-Type", "multipart/form-data; boundary=" + o);
                        l--;
                        if (l == 0) {
                            XMLHttpRequest.prototype.send = s
                        }
                    } else {
                        s.call(this, e)
                    }
                }
            }
            e.prototype = Object.create(FormData.prototype);
            return e
        }();
        e.exports = {
            Blob: c,
            FormData: n() ? i : FormData
        }
    }, function(b, x, e) {
        var _, C;
        (function() {
            var u = false;
            var e = this;
            var t = function e(t) {
                if (t instanceof e) return t;
                if (!(this instanceof e)) return new e(t);
                this.EXIFwrapped = t
            };
            if (true) {
                if (typeof b !== "undefined" && b.exports) {
                    x = b.exports = t
                }
                x.EXIF = t
            } else {
                e.EXIF = t
            }
            var c = t.Tags = {
                36864: "ExifVersion",
                40960: "FlashpixVersion",
                40961: "ColorSpace",
                40962: "PixelXDimension",
                40963: "PixelYDimension",
                37121: "ComponentsConfiguration",
                37122: "CompressedBitsPerPixel",
                37500: "MakerNote",
                37510: "UserComment",
                40964: "RelatedSoundFile",
                36867: "DateTimeOriginal",
                36868: "DateTimeDigitized",
                37520: "SubsecTime",
                37521: "SubsecTimeOriginal",
                37522: "SubsecTimeDigitized",
                33434: "ExposureTime",
                33437: "FNumber",
                34850: "ExposureProgram",
                34852: "SpectralSensitivity",
                34855: "ISOSpeedRatings",
                34856: "OECF",
                37377: "ShutterSpeedValue",
                37378: "ApertureValue",
                37379: "BrightnessValue",
                37380: "ExposureBias",
                37381: "MaxApertureValue",
                37382: "SubjectDistance",
                37383: "MeteringMode",
                37384: "LightSource",
                37385: "Flash",
                37396: "SubjectArea",
                37386: "FocalLength",
                41483: "FlashEnergy",
                41484: "SpatialFrequencyResponse",
                41486: "FocalPlaneXResolution",
                41487: "FocalPlaneYResolution",
                41488: "FocalPlaneResolutionUnit",
                41492: "SubjectLocation",
                41493: "ExposureIndex",
                41495: "SensingMethod",
                41728: "FileSource",
                41729: "SceneType",
                41730: "CFAPattern",
                41985: "CustomRendered",
                41986: "ExposureMode",
                41987: "WhiteBalance",
                41988: "DigitalZoomRation",
                41989: "FocalLengthIn35mmFilm",
                41990: "SceneCaptureType",
                41991: "GainControl",
                41992: "Contrast",
                41993: "Saturation",
                41994: "Sharpness",
                41995: "DeviceSettingDescription",
                41996: "SubjectDistanceRange",
                40965: "InteroperabilityIFDPointer",
                42016: "ImageUniqueID"
            };
            var f = t.TiffTags = {
                256: "ImageWidth",
                257: "ImageHeight",
                34665: "ExifIFDPointer",
                34853: "GPSInfoIFDPointer",
                40965: "InteroperabilityIFDPointer",
                258: "BitsPerSample",
                259: "Compression",
                262: "PhotometricInterpretation",
                274: "Orientation",
                277: "SamplesPerPixel",
                284: "PlanarConfiguration",
                530: "YCbCrSubSampling",
                531: "YCbCrPositioning",
                282: "XResolution",
                283: "YResolution",
                296: "ResolutionUnit",
                273: "StripOffsets",
                278: "RowsPerStrip",
                279: "StripByteCounts",
                513: "JPEGInterchangeFormat",
                514: "JPEGInterchangeFormatLength",
                301: "TransferFunction",
                318: "WhitePoint",
                319: "PrimaryChromaticities",
                529: "YCbCrCoefficients",
                532: "ReferenceBlackWhite",
                306: "DateTime",
                270: "ImageDescription",
                271: "Make",
                272: "Model",
                305: "Software",
                315: "Artist",
                33432: "Copyright"
            };
            var d = t.GPSTags = {
                0: "GPSVersionID",
                1: "GPSLatitudeRef",
                2: "GPSLatitude",
                3: "GPSLongitudeRef",
                4: "GPSLongitude",
                5: "GPSAltitudeRef",
                6: "GPSAltitude",
                7: "GPSTimeStamp",
                8: "GPSSatellites",
                9: "GPSStatus",
                10: "GPSMeasureMode",
                11: "GPSDOP",
                12: "GPSSpeedRef",
                13: "GPSSpeed",
                14: "GPSTrackRef",
                15: "GPSTrack",
                16: "GPSImgDirectionRef",
                17: "GPSImgDirection",
                18: "GPSMapDatum",
                19: "GPSDestLatitudeRef",
                20: "GPSDestLatitude",
                21: "GPSDestLongitudeRef",
                22: "GPSDestLongitude",
                23: "GPSDestBearingRef",
                24: "GPSDestBearing",
                25: "GPSDestDistanceRef",
                26: "GPSDestDistance",
                27: "GPSProcessingMethod",
                28: "GPSAreaInformation",
                29: "GPSDateStamp",
                30: "GPSDifferential"
            };
            var h = t.StringValues = {
                ExposureProgram: {
                    0: "Not defined",
                    1: "Manual",
                    2: "Normal program",
                    3: "Aperture priority",
                    4: "Shutter priority",
                    5: "Creative program",
                    6: "Action program",
                    7: "Portrait mode",
                    8: "Landscape mode"
                },
                MeteringMode: {
                    0: "Unknown",
                    1: "Average",
                    2: "CenterWeightedAverage",
                    3: "Spot",
                    4: "MultiSpot",
                    5: "Pattern",
                    6: "Partial",
                    255: "Other"
                },
                LightSource: {
                    0: "Unknown",
                    1: "Daylight",
                    2: "Fluorescent",
                    3: "Tungsten (incandescent light)",
                    4: "Flash",
                    9: "Fine weather",
                    10: "Cloudy weather",
                    11: "Shade",
                    12: "Daylight fluorescent (D 5700 - 7100K)",
                    13: "Day white fluorescent (N 4600 - 5400K)",
                    14: "Cool white fluorescent (W 3900 - 4500K)",
                    15: "White fluorescent (WW 3200 - 3700K)",
                    17: "Standard light A",
                    18: "Standard light B",
                    19: "Standard light C",
                    20: "D55",
                    21: "D65",
                    22: "D75",
                    23: "D50",
                    24: "ISO studio tungsten",
                    255: "Other"
                },
                Flash: {
                    0: "Flash did not fire",
                    1: "Flash fired",
                    5: "Strobe return light not detected",
                    7: "Strobe return light detected",
                    9: "Flash fired, compulsory flash mode",
                    13: "Flash fired, compulsory flash mode, return light not detected",
                    15: "Flash fired, compulsory flash mode, return light detected",
                    16: "Flash did not fire, compulsory flash mode",
                    24: "Flash did not fire, auto mode",
                    25: "Flash fired, auto mode",
                    29: "Flash fired, auto mode, return light not detected",
                    31: "Flash fired, auto mode, return light detected",
                    32: "No flash function",
                    65: "Flash fired, red-eye reduction mode",
                    69: "Flash fired, red-eye reduction mode, return light not detected",
                    71: "Flash fired, red-eye reduction mode, return light detected",
                    73: "Flash fired, compulsory flash mode, red-eye reduction mode",
                    77: "Flash fired, compulsory flash mode, red-eye reduction mode, return light not detected",
                    79: "Flash fired, compulsory flash mode, red-eye reduction mode, return light detected",
                    89: "Flash fired, auto mode, red-eye reduction mode",
                    93: "Flash fired, auto mode, return light not detected, red-eye reduction mode",
                    95: "Flash fired, auto mode, return light detected, red-eye reduction mode"
                },
                SensingMethod: {
                    1: "Not defined",
                    2: "One-chip color area sensor",
                    3: "Two-chip color area sensor",
                    4: "Three-chip color area sensor",
                    5: "Color sequential area sensor",
                    7: "Trilinear sensor",
                    8: "Color sequential linear sensor"
                },
                SceneCaptureType: {
                    0: "Standard",
                    1: "Landscape",
                    2: "Portrait",
                    3: "Night scene"
                },
                SceneType: {
                    1: "Directly photographed"
                },
                CustomRendered: {
                    0: "Normal process",
                    1: "Custom process"
                },
                WhiteBalance: {
                    0: "Auto white balance",
                    1: "Manual white balance"
                },
                GainControl: {
                    0: "None",
                    1: "Low gain up",
                    2: "High gain up",
                    3: "Low gain down",
                    4: "High gain down"
                },
                Contrast: {
                    0: "Normal",
                    1: "Soft",
                    2: "Hard"
                },
                Saturation: {
                    0: "Normal",
                    1: "Low saturation",
                    2: "High saturation"
                },
                Sharpness: {
                    0: "Normal",
                    1: "Soft",
                    2: "Hard"
                },
                SubjectDistanceRange: {
                    0: "Unknown",
                    1: "Macro",
                    2: "Close view",
                    3: "Distant view"
                },
                FileSource: {
                    3: "DSC"
                },
                Components: {
                    0: "",
                    1: "Y",
                    2: "Cb",
                    3: "Cr",
                    4: "R",
                    5: "G",
                    6: "B"
                }
            };

            function n(e, t, n) {
                if (e.addEventListener) {
                    e.addEventListener(t, n, false)
                } else if (e.attachEvent) {
                    e.attachEvent("on" + t, n)
                }
            }

            function r(e) {
                return !!e.exifdata
            }

            function o(e, t) {
                t = t || e.match(/^data\:([^\;]+)\;base64,/im)[1] || "";
                e = e.replace(/^data\:([^\;]+)\;base64,/gim, "");
                var n = atob(e);
                var i = n.length;
                var r = new ArrayBuffer(i);
                var a = new Uint8Array(r);
                for (var o = 0; o < i; o++) {
                    a[o] = n.charCodeAt(o)
                }
                return r
            }

            function s(e, t) {
                var n = new XMLHttpRequest;
                n.open("GET", e, true);
                n.responseType = "blob";
                n.onload = function(e) {
                    if (this.status == 200 || this.status === 0) {
                        t(this.response)
                    }
                };
                n.send()
            }

            function i(i, r) {
                function t(e) {
                    var t = l(e);
                    var n = p(e);
                    i.exifdata = t || {};
                    i.iptcdata = n || {};
                    if (r) {
                        r.call(i)
                    }
                }
                if (i.src) {
                    if (/^data\:/i.test(i.src)) {
                        var e = o(i.src);
                        t(e)
                    } else if (/^blob\:/i.test(i.src)) {
                        var n = new FileReader;
                        n.onload = function(e) {
                            t(e.target.result)
                        };
                        s(i.src, function(e) {
                            n.readAsArrayBuffer(e)
                        })
                    } else {
                        var a = new XMLHttpRequest;
                        a.onload = function() {
                            if (this.status == 200 || this.status === 0) {
                                t(a.response)
                            } else {
                                r(new Error("Could not load image"))
                            }
                            a = null
                        };
                        a.open("GET", i.src, true);
                        a.responseType = "arraybuffer";
                        a.send(null)
                    }
                } else if (window.FileReader && (i instanceof window.Blob || i instanceof window.File)) {
                    var n = new FileReader;
                    n.onload = function(e) {
                        if (u) console.log("Got file of length " + e.target.result.byteLength);
                        try {
                            t(e.target.result)
                        } catch (e) {
                            r.call(i, e)
                        }
                    };
                    n.readAsArrayBuffer(i)
                }
            }

            function l(e) {
                var t = new DataView(e);
                if (u) console.log("Got file of length " + e.byteLength);
                if (t.getUint8(0) != 255 || t.getUint8(1) != 216) {
                    if (u) console.log("Not a valid JPEG");
                    return false
                }
                var n = 2,
                    i = e.byteLength,
                    r;
                while (n < i) {
                    if (t.getUint8(n) != 255) {
                        if (u) console.log("Not a valid marker at offset " + n + ", found: " + t.getUint8(n));
                        return false
                    }
                    r = t.getUint8(n + 1);
                    if (u) console.log(r);
                    if (r == 225) {
                        if (u) console.log("Found 0xFFE1 marker");
                        return a(t, n + 4, t.getUint16(n + 2) - 2)
                    } else {
                        n += 2 + t.getUint16(n + 2)
                    }
                }
            }

            function p(e) {
                var t = new DataView(e);
                if (u) console.log("Got file of length " + e.byteLength);
                if (t.getUint8(0) != 255 || t.getUint8(1) != 216) {
                    if (u) console.log("Not a valid JPEG");
                    return false
                }
                var n = 2,
                    i = e.byteLength;
                var r = function e(t, n) {
                    return t.getUint8(n) === 56 && t.getUint8(n + 1) === 66 && t.getUint8(n + 2) === 73 && t.getUint8(n + 3) === 77 && t.getUint8(n + 4) === 4 && t.getUint8(n + 5) === 4
                };
                while (n < i) {
                    if (r(t, n)) {
                        var a = t.getUint8(n + 7);
                        if (a % 2 !== 0) a += 1;
                        if (a === 0) {
                            a = 4
                        }
                        var o = n + 8 + a;
                        var s = t.getUint16(n + 6 + a);
                        return m(e, o, s);
                        break
                    }
                    n++
                }
            }
            var v = {
                120: "caption",
                110: "credit",
                25: "keywords",
                55: "dateCreated",
                80: "byline",
                85: "bylineTitle",
                122: "captionWriter",
                105: "headline",
                116: "copyright",
                15: "category"
            };

            function m(e, t, n) {
                var i = new DataView(e);
                var r = {};
                var a, o, s, l, c;
                var u = t;
                while (u < t + n) {
                    if (i.getUint8(u) === 28 && i.getUint8(u + 1) === 2) {
                        l = i.getUint8(u + 2);
                        if (l in v) {
                            s = i.getInt16(u + 3);
                            c = s + 5;
                            o = v[l];
                            a = y(i, u + 5, s);
                            if (r.hasOwnProperty(o)) {
                                if (r[o] instanceof Array) {
                                    r[o].push(a)
                                } else {
                                    r[o] = [r[o], a]
                                }
                            } else {
                                r[o] = a
                            }
                        }
                    }
                    u++
                }
                return r
            }

            function g(e, t, n, i, r) {
                var a = e.getUint16(n, !r),
                    o = {},
                    s, l, c;
                for (c = 0; c < a; c++) {
                    s = n + c * 12 + 2;
                    l = i[e.getUint16(s, !r)];
                    if (!l && u) console.log("Unknown tag: " + e.getUint16(s, !r));
                    o[l] = w(e, s, t, n, r)
                }
                return o
            }

            function w(e, t, n, i, r) {
                var a = e.getUint16(t + 2, !r),
                    o = e.getUint32(t + 4, !r),
                    s = e.getUint32(t + 8, !r) + n,
                    l, c, u, f, d, h;
                switch (a) {
                    case 1:
                    case 7:
                        if (o == 1) {
                            return e.getUint8(t + 8, !r)
                        } else {
                            l = o > 4 ? s : t + 8;
                            c = [];
                            for (f = 0; f < o; f++) {
                                c[f] = e.getUint8(l + f)
                            }
                            return c
                        }
                    case 2:
                        l = o > 4 ? s : t + 8;
                        return y(e, l, o - 1);
                    case 3:
                        if (o == 1) {
                            return e.getUint16(t + 8, !r)
                        } else {
                            l = o > 2 ? s : t + 8;
                            c = [];
                            for (f = 0; f < o; f++) {
                                c[f] = e.getUint16(l + 2 * f, !r)
                            }
                            return c
                        }
                    case 4:
                        if (o == 1) {
                            return e.getUint32(t + 8, !r)
                        } else {
                            c = [];
                            for (f = 0; f < o; f++) {
                                c[f] = e.getUint32(s + 4 * f, !r)
                            }
                            return c
                        }
                    case 5:
                        if (o == 1) {
                            d = e.getUint32(s, !r);
                            h = e.getUint32(s + 4, !r);
                            u = new Number(d / h);
                            u.numerator = d;
                            u.denominator = h;
                            return u
                        } else {
                            c = [];
                            for (f = 0; f < o; f++) {
                                d = e.getUint32(s + 8 * f, !r);
                                h = e.getUint32(s + 4 + 8 * f, !r);
                                c[f] = new Number(d / h);
                                c[f].numerator = d;
                                c[f].denominator = h
                            }
                            return c
                        }
                    case 9:
                        if (o == 1) {
                            return e.getInt32(t + 8, !r)
                        } else {
                            c = [];
                            for (f = 0; f < o; f++) {
                                c[f] = e.getInt32(s + 4 * f, !r)
                            }
                            return c
                        }
                    case 10:
                        if (o == 1) {
                            return e.getInt32(s, !r) / e.getInt32(s + 4, !r)
                        } else {
                            c = [];
                            for (f = 0; f < o; f++) {
                                c[f] = e.getInt32(s + 8 * f, !r) / e.getInt32(s + 4 + 8 * f, !r)
                            }
                            return c
                        }
                }
            }

            function y(e, t, n) {
                var i = "",
                    r;
                for (r = t; r < t + n; r++) {
                    i += String.fromCharCode(e.getUint8(r))
                }
                return i
            }

            function a(e, t) {
                if (y(e, t, 4) != "Exif") {
                    if (u) console.log("Not valid EXIF data! " + y(e, t, 4));
                    return false
                }
                var n, i, r, a, o, s = t + 6;
                if (e.getUint16(s) == 18761) {
                    n = false
                } else if (e.getUint16(s) == 19789) {
                    n = true
                } else {
                    if (u) console.log("Not valid TIFF data! (no 0x4949 or 0x4D4D)");
                    return false
                }
                if (e.getUint16(s + 2, !n) != 42) {
                    if (u) console.log("Not valid TIFF data! (no 0x002A)");
                    return false
                }
                var l = e.getUint32(s + 4, !n);
                if (l < 8) {
                    if (u) console.log("Not valid TIFF data! (First offset less than 8)", e.getUint32(s + 4, !n));
                    return false
                }
                i = g(e, s, s + l, f, n);
                if (i.ExifIFDPointer) {
                    a = g(e, s, s + i.ExifIFDPointer, c, n);
                    for (r in a) {
                        switch (r) {
                            case "LightSource":
                            case "Flash":
                            case "MeteringMode":
                            case "ExposureProgram":
                            case "SensingMethod":
                            case "SceneCaptureType":
                            case "SceneType":
                            case "CustomRendered":
                            case "WhiteBalance":
                            case "GainControl":
                            case "Contrast":
                            case "Saturation":
                            case "Sharpness":
                            case "SubjectDistanceRange":
                            case "FileSource":
                                a[r] = h[r][a[r]];
                                break;
                            case "ExifVersion":
                            case "FlashpixVersion":
                                a[r] = String.fromCharCode(a[r][0], a[r][1], a[r][2], a[r][3]);
                                break;
                            case "ComponentsConfiguration":
                                a[r] = h.Components[a[r][0]] + h.Components[a[r][1]] + h.Components[a[r][2]] + h.Components[a[r][3]];
                                break
                        }
                        i[r] = a[r]
                    }
                }
                if (i.GPSInfoIFDPointer) {
                    o = g(e, s, s + i.GPSInfoIFDPointer, d, n);
                    for (r in o) {
                        switch (r) {
                            case "GPSVersionID":
                                o[r] = o[r][0] + "." + o[r][1] + "." + o[r][2] + "." + o[r][3];
                                break
                        }
                        i[r] = o[r]
                    }
                }
                return i
            }
            t.getData = function(e, t) {
                if ((e instanceof Image || e instanceof HTMLImageElement) && !e.complete) return false;
                if (!r(e)) {
                    i(e, t)
                } else {
                    if (t) {
                        t.call(e)
                    }
                }
                return true
            };
            t.getTag = function(e, t) {
                if (!r(e)) return;
                return e.exifdata[t]
            };
            t.getAllTags = function(e) {
                if (!r(e)) return {};
                var t, n = e.exifdata,
                    i = {};
                for (t in n) {
                    if (n.hasOwnProperty(t)) {
                        i[t] = n[t]
                    }
                }
                return i
            };
            t.pretty = function(e) {
                if (!r(e)) return "";
                var t, n = e.exifdata,
                    i = "";
                for (t in n) {
                    if (n.hasOwnProperty(t)) {
                        if (_typeof(n[t]) == "object") {
                            if (n[t] instanceof Number) {
                                i += t + " : " + n[t] + " [" + n[t].numerator + "/" + n[t].denominator + "]\r\n"
                            } else {
                                i += t + " : [" + n[t].length + " values]\r\n"
                            }
                        } else {
                            i += t + " : " + n[t] + "\r\n"
                        }
                    }
                }
                return i
            };
            t.readFromBinaryFile = function(e) {
                return l(e)
            };
            if (true) {
                !(_ = [], C = function() {
                    return t
                }.apply(x, _), C !== undefined && (b.exports = C))
            }
        }).call(this)
    }, function(t, n, e) {
        var i, r;
        (function() {
            function b(e) {
                var t = e.naturalWidth,
                    n = e.naturalHeight;
                if (t * n > 1024 * 1024) {
                    var i = document.createElement("canvas");
                    i.width = i.height = 1;
                    var r = i.getContext("2d");
                    r.drawImage(e, -t + 1, 0);
                    return r.getImageData(0, 0, 1, 1).data[3] === 0
                } else {
                    return false
                }
            }

            function x(e, t, n) {
                var i = document.createElement("canvas");
                i.width = 1;
                i.height = n;
                var r = i.getContext("2d");
                r.drawImage(e, 0, 0);
                var a = r.getImageData(0, 0, 1, n).data;
                var o = 0;
                var s = n;
                var l = n;
                while (l > o) {
                    var c = a[(l - 1) * 4 + 3];
                    if (c === 0) {
                        s = l
                    } else {
                        o = l
                    }
                    l = s + o >> 1
                }
                var u = l / n;
                return u === 0 ? 1 : u
            }

            function g(e, t, n) {
                var i = document.createElement("canvas");
                w(e, i, t, n);
                return i.toDataURL("image/jpeg", t.quality || .8)
            }

            function w(e, t, n, i) {
                var r = e.naturalWidth,
                    a = e.naturalHeight;
                var o = n.width,
                    s = n.height;
                var l = t.getContext("2d");
                l.save();
                _(t, l, o, s, n.orientation);
                var c = b(e);
                if (c) {
                    r /= 2;
                    a /= 2
                }
                var u = 1024;
                var f = document.createElement("canvas");
                f.width = f.height = u;
                var d = f.getContext("2d");
                var h = i ? x(e, r, a) : 1;
                var p = Math.ceil(u * o / r);
                var v = Math.ceil(u * s / a / h);
                var m = 0;
                var g = 0;
                while (m < a) {
                    var w = 0;
                    var y = 0;
                    while (w < r) {
                        d.clearRect(0, 0, u, u);
                        d.drawImage(e, -w, -m);
                        l.drawImage(f, 0, 0, u, u, y, g, p, v);
                        w += u;
                        y += p
                    }
                    m += u;
                    g += v
                }
                l.restore();
                f = d = null
            }

            function _(e, t, n, i, r) {
                switch (r) {
                    case 5:
                    case 6:
                    case 7:
                    case 8:
                        e.width = i;
                        e.height = n;
                        break;
                    default:
                        e.width = n;
                        e.height = i
                }
                switch (r) {
                    case 2:
                        t.translate(n, 0);
                        t.scale(-1, 1);
                        break;
                    case 3:
                        t.translate(n, i);
                        t.rotate(Math.PI);
                        break;
                    case 4:
                        t.translate(0, i);
                        t.scale(1, -1);
                        break;
                    case 5:
                        t.rotate(.5 * Math.PI);
                        t.scale(1, -1);
                        break;
                    case 6:
                        t.rotate(.5 * Math.PI);
                        t.translate(0, -i);
                        break;
                    case 7:
                        t.rotate(.5 * Math.PI);
                        t.translate(n, -i);
                        t.scale(-1, 1);
                        break;
                    case 8:
                        t.rotate(-.5 * Math.PI);
                        t.translate(-n, 0);
                        break;
                    default:
                        break
                }
            }

            function e(e) {
                if (window.Blob && e instanceof Blob) {
                    var t = new Image;
                    var n = window.URL && window.URL.createObjectURL ? window.URL : window.webkitURL && window.webkitURL.createObjectURL ? window.webkitURL : null;
                    if (!n) {
                        throw Error("No createObjectURL function found to create blob url")
                    }
                    t.src = n.createObjectURL(e);
                    this.blob = e;
                    e = t
                }
                if (!e.naturalWidth && !e.naturalHeight) {
                    var i = this;
                    e.onload = function() {
                        var e = i.imageLoadListeners;
                        if (e) {
                            i.imageLoadListeners = null;
                            for (var t = 0, n = e.length; t < n; t++) {
                                e[t]()
                            }
                        }
                    };
                    this.imageLoadListeners = []
                }
                this.srcImage = e
            }
            e.prototype.render = function(e, t, n) {
                if (this.imageLoadListeners) {
                    var i = this;
                    this.imageLoadListeners.push(function() {
                        i.render(e, t, n)
                    });
                    return
                }
                t = t || {};
                var r = this.srcImage,
                    a = r.src,
                    o = a.length,
                    s = r.naturalWidth,
                    l = r.naturalHeight,
                    c = t.width,
                    u = t.height,
                    f = t.maxWidth,
                    d = t.maxHeight,
                    h = this.blob && this.blob.type === "image/jpeg" || a.indexOf("data:image/jpeg") === 0 || a.indexOf(".jpg") === o - 4 || a.indexOf(".jpeg") === o - 5;
                if (c && !u) {
                    u = l * c / s << 0
                } else if (u && !c) {
                    c = s * u / l << 0
                } else {
                    c = s;
                    u = l
                }
                if (f && c > f) {
                    c = f;
                    u = l * c / s << 0
                }
                if (d && u > d) {
                    u = d;
                    c = s * u / l << 0
                }
                var p = {
                    width: c,
                    height: u
                };
                for (var v in t) p[v] = t[v];
                var m = e.tagName.toLowerCase();
                if (m === "img") {
                    e.src = g(this.srcImage, p, h)
                } else if (m === "canvas") {
                    w(this.srcImage, e, p, h)
                }
                if (typeof this.onrender === "function") {
                    this.onrender(e)
                }
                if (n) {
                    n()
                }
            };
            if (true) {
                !(i = [], r = function() {
                    return e
                }.apply(n, i), r !== undefined && (t.exports = r))
            } else {
                this.MegaPixImage = e
            }
        })()
    }, function(e, t) {
        function n(n) {
            var t = this;
            var a = Math.round;
            var f = Math.floor;
            var d = new Array(64);
            var h = new Array(64);
            var T = new Array(64);
            var k = new Array(64);
            var O;
            var j;
            var E;
            var L;
            var b = new Array(65535);
            var x = new Array(65535);
            var Z = new Array(64);
            var _ = new Array(64);
            var N = [];
            var D = 0;
            var A = 7;
            var M = new Array(64);
            var R = new Array(64);
            var P = new Array(64);
            var i = new Array(256);
            var J = new Array(2048);
            var r;
            var C = [0, 1, 5, 6, 14, 15, 27, 28, 2, 4, 7, 13, 16, 26, 29, 42, 3, 8, 12, 17, 25, 30, 41, 43, 9, 11, 18, 24, 31, 40, 44, 53, 10, 19, 23, 32, 39, 45, 52, 54, 20, 22, 33, 38, 46, 51, 55, 60, 21, 34, 37, 47, 50, 56, 59, 61, 35, 36, 48, 49, 57, 58, 62, 63];
            var l = [0, 0, 1, 5, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0];
            var c = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
            var u = [0, 0, 2, 1, 3, 3, 2, 4, 3, 5, 5, 4, 4, 0, 0, 1, 125];
            var p = [1, 2, 3, 0, 4, 17, 5, 18, 33, 49, 65, 6, 19, 81, 97, 7, 34, 113, 20, 50, 129, 145, 161, 8, 35, 66, 177, 193, 21, 82, 209, 240, 36, 51, 98, 114, 130, 9, 10, 22, 23, 24, 25, 26, 37, 38, 39, 40, 41, 42, 52, 53, 54, 55, 56, 57, 58, 67, 68, 69, 70, 71, 72, 73, 74, 83, 84, 85, 86, 87, 88, 89, 90, 99, 100, 101, 102, 103, 104, 105, 106, 115, 116, 117, 118, 119, 120, 121, 122, 131, 132, 133, 134, 135, 136, 137, 138, 146, 147, 148, 149, 150, 151, 152, 153, 154, 162, 163, 164, 165, 166, 167, 168, 169, 170, 178, 179, 180, 181, 182, 183, 184, 185, 186, 194, 195, 196, 197, 198, 199, 200, 201, 202, 210, 211, 212, 213, 214, 215, 216, 217, 218, 225, 226, 227, 228, 229, 230, 231, 232, 233, 234, 241, 242, 243, 244, 245, 246, 247, 248, 249, 250];
            var v = [0, 0, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0];
            var m = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
            var g = [0, 0, 2, 1, 2, 4, 4, 3, 4, 7, 5, 4, 4, 0, 1, 2, 119];
            var y = [0, 1, 2, 3, 17, 4, 5, 33, 49, 6, 18, 65, 81, 7, 97, 113, 19, 34, 50, 129, 8, 20, 66, 145, 161, 177, 193, 9, 35, 51, 82, 240, 21, 98, 114, 209, 10, 22, 36, 52, 225, 37, 241, 23, 24, 25, 26, 38, 39, 40, 41, 42, 53, 54, 55, 56, 57, 58, 67, 68, 69, 70, 71, 72, 73, 74, 83, 84, 85, 86, 87, 88, 89, 90, 99, 100, 101, 102, 103, 104, 105, 106, 115, 116, 117, 118, 119, 120, 121, 122, 130, 131, 132, 133, 134, 135, 136, 137, 138, 146, 147, 148, 149, 150, 151, 152, 153, 154, 162, 163, 164, 165, 166, 167, 168, 169, 170, 178, 179, 180, 181, 182, 183, 184, 185, 186, 194, 195, 196, 197, 198, 199, 200, 201, 202, 210, 211, 212, 213, 214, 215, 216, 217, 218, 226, 227, 228, 229, 230, 231, 232, 233, 234, 242, 243, 244, 245, 246, 247, 248, 249, 250];

            function o(e) {
                var t = [16, 11, 10, 16, 24, 40, 51, 61, 12, 12, 14, 19, 26, 58, 60, 55, 14, 13, 16, 24, 40, 57, 69, 56, 14, 17, 22, 29, 51, 87, 80, 62, 18, 22, 37, 56, 68, 109, 103, 77, 24, 35, 55, 64, 81, 104, 113, 92, 49, 64, 78, 87, 103, 121, 120, 101, 72, 92, 95, 98, 112, 100, 103, 99];
                for (var n = 0; n < 64; n++) {
                    var i = f((t[n] * e + 50) / 100);
                    if (i < 1) {
                        i = 1
                    } else {
                        if (i > 255) {
                            i = 255
                        }
                    }
                    d[C[n]] = i
                }
                var r = [17, 18, 24, 47, 99, 99, 99, 99, 18, 21, 26, 66, 99, 99, 99, 99, 24, 26, 56, 99, 99, 99, 99, 99, 47, 66, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99];
                for (var a = 0; a < 64; a++) {
                    var o = f((r[a] * e + 50) / 100);
                    if (o < 1) {
                        o = 1
                    } else {
                        if (o > 255) {
                            o = 255
                        }
                    }
                    h[C[a]] = o
                }
                var s = [1, 1.387039845, 1.306562965, 1.175875602, 1, .785694958, .5411961, .275899379];
                var l = 0;
                for (var c = 0; c < 8; c++) {
                    for (var u = 0; u < 8; u++) {
                        T[l] = 1 / (d[C[l]] * s[c] * s[u] * 8);
                        k[l] = 1 / (h[C[l]] * s[c] * s[u] * 8);
                        l++
                    }
                }
            }

            function e(e, t) {
                var n = 0;
                var i = 0;
                var r = new Array;
                for (var a = 1; a <= 16; a++) {
                    for (var o = 1; o <= e[a]; o++) {
                        r[t[i]] = [];
                        r[t[i]][0] = n;
                        r[t[i]][1] = a;
                        i++;
                        n++
                    }
                    n *= 2
                }
                return r
            }

            function s() {
                O = e(l, c);
                j = e(v, m);
                E = e(u, p);
                L = e(g, y)
            }

            function S() {
                var e = 1;
                var t = 2;
                for (var n = 1; n <= 15; n++) {
                    for (var i = e; i < t; i++) {
                        x[32767 + i] = n;
                        b[32767 + i] = [];
                        b[32767 + i][1] = n;
                        b[32767 + i][0] = i
                    }
                    for (var r = -(t - 1); r <= -e; r++) {
                        x[32767 + r] = n;
                        b[32767 + r] = [];
                        b[32767 + r][1] = n;
                        b[32767 + r][0] = t - 1 + r
                    }
                    e <<= 1;
                    t <<= 1
                }
            }

            function I() {
                for (var e = 0; e < 256; e++) {
                    J[e] = 19595 * e;
                    J[e + 256 >> 0] = 38470 * e;
                    J[e + 512 >> 0] = 7471 * e + 32768;
                    J[e + 768 >> 0] = -11059 * e;
                    J[e + 1024 >> 0] = -21709 * e;
                    J[e + 1280 >> 0] = 32768 * e + 8421375;
                    J[e + 1536 >> 0] = -27439 * e;
                    J[e + 1792 >> 0] = -5329 * e
                }
            }

            function q(e) {
                var t = e[0];
                var n = e[1] - 1;
                while (n >= 0) {
                    if (t & 1 << n) {
                        D |= 1 << A
                    }
                    n--;
                    A--;
                    if (A < 0) {
                        if (D == 255) {
                            w(255);
                            w(0)
                        } else {
                            w(D)
                        }
                        A = 7;
                        D = 0
                    }
                }
            }

            function w(e) {
                N.push(i[e])
            }

            function z(e) {
                w(e >> 8 & 255);
                w(e & 255)
            }

            function $(e, A) {
                var t, n, i, r, a, o, s, l;
                var c = 0;
                var u;
                var f = 8;
                var M = 64;
                for (u = 0; u < f; ++u) {
                    t = e[c];
                    n = e[c + 1];
                    i = e[c + 2];
                    r = e[c + 3];
                    a = e[c + 4];
                    o = e[c + 5];
                    s = e[c + 6];
                    l = e[c + 7];
                    var d = t + l;
                    var h = t - l;
                    var p = n + s;
                    var v = n - s;
                    var m = i + o;
                    var g = i - o;
                    var w = r + a;
                    var R = r - a;
                    var y = d + w;
                    var b = d - w;
                    var x = p + m;
                    var _ = p - m;
                    e[c] = y + x;
                    e[c + 4] = y - x;
                    var C = (_ + b) * .707106781;
                    e[c + 2] = b + C;
                    e[c + 6] = b - C;
                    y = R + g;
                    x = g + v;
                    _ = v + h;
                    var S = (y - _) * .382683433;
                    var I = .5411961 * y + S;
                    var $ = 1.306562965 * _ + S;
                    var F = x * .707106781;
                    var T = h + F;
                    var k = h - F;
                    e[c + 5] = k + I;
                    e[c + 3] = k - I;
                    e[c + 1] = T + $;
                    e[c + 7] = T - $;
                    c += 8
                }
                c = 0;
                for (u = 0; u < f; ++u) {
                    t = e[c];
                    n = e[c + 8];
                    i = e[c + 16];
                    r = e[c + 24];
                    a = e[c + 32];
                    o = e[c + 40];
                    s = e[c + 48];
                    l = e[c + 56];
                    var P = t + l;
                    var O = t - l;
                    var J = n + s;
                    var q = n - s;
                    var z = i + o;
                    var B = i - o;
                    var U = r + a;
                    var H = r - a;
                    var j = P + U;
                    var E = P - U;
                    var L = J + z;
                    var N = J - z;
                    e[c] = j + L;
                    e[c + 32] = j - L;
                    var G = (N + E) * .707106781;
                    e[c + 16] = E + G;
                    e[c + 48] = E - G;
                    j = H + B;
                    L = B + q;
                    N = q + O;
                    var W = (j - N) * .382683433;
                    var V = .5411961 * j + W;
                    var Q = 1.306562965 * N + W;
                    var X = L * .707106781;
                    var K = O + X;
                    var Y = O - X;
                    e[c + 40] = Y + V;
                    e[c + 24] = Y - V;
                    e[c + 8] = K + Q;
                    e[c + 56] = K - Q;
                    c++
                }
                var D;
                for (u = 0; u < M; ++u) {
                    D = e[u] * A[u];
                    Z[u] = D > 0 ? D + .5 | 0 : D - .5 | 0
                }
                return Z
            }

            function U() {
                z(65504);
                z(16);
                w(74);
                w(70);
                w(73);
                w(70);
                w(0);
                w(1);
                w(1);
                w(0);
                z(1);
                z(1);
                w(0);
                w(0)
            }

            function H(e, t) {
                z(65472);
                z(17);
                w(8);
                z(t);
                z(e);
                w(3);
                w(1);
                w(17);
                w(0);
                w(2);
                w(17);
                w(1);
                w(3);
                w(17);
                w(1)
            }

            function G() {
                z(65499);
                z(132);
                w(0);
                for (var e = 0; e < 64; e++) {
                    w(d[e])
                }
                w(1);
                for (var t = 0; t < 64; t++) {
                    w(h[t])
                }
            }

            function W() {
                z(65476);
                z(418);
                w(0);
                for (var e = 0; e < 16; e++) {
                    w(l[e + 1])
                }
                for (var t = 0; t <= 11; t++) {
                    w(c[t])
                }
                w(16);
                for (var n = 0; n < 16; n++) {
                    w(u[n + 1])
                }
                for (var i = 0; i <= 161; i++) {
                    w(p[i])
                }
                w(1);
                for (var r = 0; r < 16; r++) {
                    w(v[r + 1])
                }
                for (var a = 0; a <= 11; a++) {
                    w(m[a])
                }
                w(17);
                for (var o = 0; o < 16; o++) {
                    w(g[o + 1])
                }
                for (var s = 0; s <= 161; s++) {
                    w(y[s])
                }
            }

            function V() {
                z(65498);
                z(12);
                w(3);
                w(1);
                w(0);
                w(2);
                w(17);
                w(3);
                w(17);
                w(0);
                w(63);
                w(0)
            }

            function B(e, t, n, i, r) {
                var a = r[0];
                var o = r[240];
                var s;
                var l = 16;
                var c = 63;
                var u = 64;
                var f = $(e, t);
                for (var d = 0; d < u; ++d) {
                    _[C[d]] = f[d]
                }
                var h = _[0] - n;
                n = _[0];
                if (h == 0) {
                    q(i[0])
                } else {
                    s = 32767 + h;
                    q(i[x[s]]);
                    q(b[s])
                }
                var p = 63;
                for (; p > 0 && _[p] == 0; p--) {}
                if (p == 0) {
                    q(a);
                    return n
                }
                var v = 1;
                var m;
                while (v <= p) {
                    var g = v;
                    for (; _[v] == 0 && v <= p; ++v) {}
                    var w = v - g;
                    if (w >= l) {
                        m = w >> 4;
                        for (var y = 1; y <= m; ++y) {
                            q(o)
                        }
                        w = w & 15
                    }
                    s = 32767 + _[v];
                    q(r[(w << 4) + x[s]]);
                    q(b[s]);
                    v++
                }
                if (p != c) {
                    q(a)
                }
                return n
            }

            function F() {
                var e = String.fromCharCode;
                for (var t = 0; t < 256; t++) {
                    i[t] = e(t)
                }
            }
            this.encode = function(e, t, n) {
                var i = (new Date).getTime();
                if (t) {
                    Q(t)
                }
                N = new Array;
                D = 0;
                A = 7;
                z(65496);
                U();
                G();
                H(e.width, e.height);
                W();
                V();
                var r = 0;
                var a = 0;
                var o = 0;
                D = 0;
                A = 7;
                this.encode.displayName = "_encode_";
                var s = e.data;
                var l = e.width;
                var c = e.height;
                var u = l * 4;
                var f = l * 3;
                var d, h = 0;
                var p, v, m;
                var g, w, y, b, x;
                while (h < c) {
                    d = 0;
                    while (d < u) {
                        g = u * h + d;
                        w = g;
                        y = -1;
                        b = 0;
                        for (x = 0; x < 64; x++) {
                            b = x >> 3;
                            y = (x & 7) * 4;
                            w = g + b * u + y;
                            if (h + b >= c) {
                                w -= u * (h + 1 + b - c)
                            }
                            if (d + y >= u) {
                                w -= d + y - u + 4
                            }
                            p = s[w++];
                            v = s[w++];
                            m = s[w++];
                            M[x] = (J[p] + J[v + 256 >> 0] + J[m + 512 >> 0] >> 16) - 128;
                            R[x] = (J[p + 768 >> 0] + J[v + 1024 >> 0] + J[m + 1280 >> 0] >> 16) - 128;
                            P[x] = (J[p + 1280 >> 0] + J[v + 1536 >> 0] + J[m + 1792 >> 0] >> 16) - 128
                        }
                        r = B(M, T, r, O, E);
                        a = B(R, k, a, j, L);
                        o = B(P, k, o, j, L);
                        d += 32
                    }
                    h += 8
                }
                if (A >= 0) {
                    var _ = [];
                    _[1] = A + 1;
                    _[0] = (1 << A + 1) - 1;
                    q(_)
                }
                z(65497);
                if (n) {
                    var C = N.length;
                    var S = new Uint8Array(C);
                    for (var I = 0; I < C; I++) {
                        S[I] = N[I].charCodeAt()
                    }
                    N = [];
                    var $ = (new Date).getTime() - i;
                    return S
                }
                var F = "data:image/jpeg;base64," + btoa(N.join(""));
                N = [];
                var $ = (new Date).getTime() - i;
                return F
            };

            function Q(e) {
                if (e <= 0) {
                    e = 1
                }
                if (e > 100) {
                    e = 100
                }
                if (r == e) {
                    return
                }
                var t = 0;
                if (e < 50) {
                    t = Math.floor(5e3 / e)
                } else {
                    t = Math.floor(200 - e * 2)
                }
                o(t);
                r = e
            }

            function X() {
                var e = (new Date).getTime();
                if (!n) {
                    n = 50
                }
                F();
                s();
                S();
                I();
                Q(n);
                var t = (new Date).getTime() - e
            }
            X()
        }
        e.exports = n
    }, function(e, t, s) {
        s.p = i("lrz") + "/";
        window.URL = window.URL || window.webkitURL;
        var l = s(1),
            c = s(5),
            a = s(6);
        var u = function(e) {
            var t = /OS (.*) like Mac OS X/g.exec(e),
                n = /Android (\d.*?);/g.exec(e) || /Android\/(\d.*?) /g.exec(e);
            var i = t ? parseFloat(t.pop().replace(/_/g, ".")) : 0;
            var r = n ? +n.pop().substr(0, 3) : 0;
            return {
                oldIOS: t ? i < 8 : false,
                newIOS: t ? i >= 13.4 : false,
                oldAndroid: n ? r < 4.5 : false,
                iOS: /\(i[^;]+;( U;)? CPU.+Mac OS X/.test(e),
                android: /Android/g.test(e),
                isNewAndroid: e.indexOf("UCBrowser") > -1 && r >= 11,
                mQQBrowser: /MQQBrowser/g.test(e),
                mWXBrowser: /MicroMessenger/g.test(e)
            }
        }(navigator.userAgent);

        function n(e, t) {
            var n = this;
            if (!e) throw new Error("没有收到图片，可能的解决方案：https://github.com/think2011/localResizeIMG/issues/7");
            t = t || {};
            n.defaults = {
                width: null,
                height: null,
                fieldName: "file",
                ingnoreOrientation: u.iOS ? u.newIOS : u.isNewAndroid ? false : true,
                quality: .7
            };
            n.file = e;
            for (var i in t) {
                if (!t.hasOwnProperty(i)) continue;
                n.defaults[i] = t[i]
            }
            return this.init()
        }
        n.prototype.init = function() {
            var r = this,
                a = r.file,
                e = typeof a === "string",
                t = /^data:/.test(a),
                o = new Image,
                n = document.createElement("canvas"),
                s = e ? a : URL.createObjectURL(a);
            r.img = o;
            r.blob = s;
            r.canvas = n;
            if (e) {
                r.fileName = t ? "base64.jpg" : a.split("/").pop()
            } else {
                r.fileName = a.name
            }
            if (!document.createElement("canvas").getContext) {
                throw new Error("浏览器不支持canvas")
            }
            return new l(function(i, n) {
                o.onerror = function() {
                    var e = new Error("加载图片文件失败");
                    n(e);
                    throw e
                };
                o.onload = function() {
                    r._getBase64().then(function(e) {
                        if (e.length < 10) {
                            var t = new Error("生成base64失败");
                            n(t);
                            throw t
                        }
                        return e
                    }).then(function(e) {
                        var t = null;
                        if (_typeof(r.file) === "object" && e.length > r.file.size) {
                            t = new FormData;
                            a = r.file
                        } else if (u.android && u.mWXBrowser) {
                            t = new FormData;
                            a = f(e)
                        } else {
                            t = new c.FormData;
                            a = f(e)
                        }
                        t.append(r.defaults.fieldName, a, r.fileName.replace(/\..+/g, ".jpg"));
                        i({
                            formData: t,
                            fileLen: +a.size,
                            base64: e,
                            base64Len: e.length,
                            origin: r.file,
                            file: a
                        });
                        for (var n in r) {
                            if (!r.hasOwnProperty(n)) continue;
                            r[n] = null
                        }
                        URL.revokeObjectURL(r.blob)
                    })["catch"](n)
                };
                !t && (o.crossOrigin = "*");
                o.src = s
            })
        };
        n.prototype._getBase64 = function() {
            var n = this,
                e = n.img,
                i = n.file,
                r = n.canvas;
            return new l(function(t) {
                try {
                    a.getData(_typeof(i) === "object" ? i : e, function(e) {
                        if (e) {
                            n.orientation = 0
                        } else {
                            n.orientation = n.defaults.ingnoreOrientation ? 0 : a.getTag(this, "Orientation")
                        }
                        n.resize = n._getResize();
                        n.ctx = r.getContext("2d");
                        r.width = n.resize.width;
                        r.height = n.resize.height;
                        n.ctx.fillStyle = "#fff";
                        n.ctx.fillRect(0, 0, r.width, r.height);
                        if (u.oldIOS) {
                            n._createBase64ForOldIOS().then(t)
                        } else {
                            n._createBase64().then(t)
                        }
                    })
                } catch (e) {
                    throw new Error(e)
                }
            })
        };
        n.prototype._createBase64ForOldIOS = function() {
            var e = this,
                i = e.img,
                r = e.canvas,
                a = e.defaults,
                o = e.orientation;
            return new l(function(n) {
                ! function() {
                    var e = [s(7)];
                    (function(e) {
                        var t = new e(i);
                        if ("5678".indexOf(o) > -1) {
                            t.render(r, {
                                width: r.height,
                                height: r.width,
                                orientation: o
                            })
                        } else {
                            t.render(r, {
                                width: r.width,
                                height: r.height,
                                orientation: o
                            })
                        }
                        n(r.toDataURL("image/jpeg", a.quality))
                    }).apply(null, e)
                }()
            })
        };
        n.prototype._createBase64 = function() {
            var e = this,
                t = e.resize,
                n = e.img,
                r = e.canvas,
                a = e.ctx,
                o = e.defaults,
                i = e.orientation;
            switch (i) {
                case 3:
                    a.rotate(180 * Math.PI / 180);
                    a.drawImage(n, -t.width, -t.height, t.width, t.height);
                    break;
                case 6:
                    a.rotate(90 * Math.PI / 180);
                    a.drawImage(n, 0, -t.width, t.height, t.width);
                    break;
                case 8:
                    a.rotate(270 * Math.PI / 180);
                    a.drawImage(n, -t.height, 0, t.height, t.width);
                    break;
                case 2:
                    a.translate(t.width, 0);
                    a.scale(-1, 1);
                    a.drawImage(n, 0, 0, t.width, t.height);
                    break;
                case 4:
                    a.translate(t.width, 0);
                    a.scale(-1, 1);
                    a.rotate(180 * Math.PI / 180);
                    a.drawImage(n, -t.width, -t.height, t.width, t.height);
                    break;
                case 5:
                    a.translate(t.width, 0);
                    a.scale(-1, 1);
                    a.rotate(90 * Math.PI / 180);
                    a.drawImage(n, 0, -t.width, t.height, t.width);
                    break;
                case 7:
                    a.translate(t.width, 0);
                    a.scale(-1, 1);
                    a.rotate(270 * Math.PI / 180);
                    a.drawImage(n, -t.height, 0, t.height, t.width);
                    break;
                default:
                    a.drawImage(n, 0, 0, t.width, t.height)
            }
            return new l(function(i) {
                if (u.oldAndroid || u.mQQBrowser || !navigator.userAgent) {
                    ! function() {
                        var e = [s(8)];
                        (function(e) {
                            var t = new e,
                                n = a.getImageData(0, 0, r.width, r.height);
                            i(t.encode(n, o.quality * 100))
                        }).apply(null, e)
                    }()
                } else {
                    i(r.toDataURL("image/jpeg", o.quality))
                }
            })
        };
        n.prototype._getResize = function() {
            var e = this,
                t = e.img,
                n = e.defaults,
                i = n.width,
                r = n.height,
                a = e.orientation;
            var o = {
                width: t.width,
                height: t.height
            };
            if ("5678".indexOf(a) > -1) {
                o.width = t.height;
                o.height = t.width
            }
            if (o.width < i || o.height < r) {
                return o
            }
            var s = o.width / o.height;
            if (i && r) {
                if (s >= i / r) {
                    if (o.width > i) {
                        o.width = i;
                        o.height = Math.ceil(i / s)
                    }
                } else {
                    if (o.height > r) {
                        o.height = r;
                        o.width = Math.ceil(r * s)
                    }
                }
            } else if (i) {
                if (i < o.width) {
                    o.width = i;
                    o.height = Math.ceil(i / s)
                }
            } else if (r) {
                if (r < o.height) {
                    o.width = Math.ceil(r * s);
                    o.height = r
                }
            }
            while (o.width >= 3264 || o.height >= 2448) {
                o.width *= .8;
                o.height *= .8
            }
            return o
        };

        function i(t) {
            var e = null;
            if (t) {
                e = [].filter.call(document.scripts, function(e) {
                    return e.src.indexOf(t) !== -1
                })[0]
            } else {
                e = document.scripts[document.scripts.length - 1]
            }
            if (!e) return null;
            return e.src.substr(0, e.src.lastIndexOf("/"))
        }

        function f(e) {
            var t;
            if (e.split(",")[0].indexOf("base64") >= 0) t = atob(e.split(",")[1]);
            else t = unescape(e.split(",")[1]);
            var n = e.split(",")[0].split(":")[1].split(";")[0];
            var i = new Uint8Array(t.length);
            for (var r = 0; r < t.length; r++) {
                i[r] = t.charCodeAt(r)
            }
            return new c.Blob([i.buffer], {
                type: n
            })
        }
        window.lrz = function(e, t) {
            return new n(e, t)
        };
        window.lrz.version = "4.9.41";
        e.exports = window.lrz
    }])
});
$(function() {
    var p = false;
    var v = false;
    var m = $("#J-searchType-mlan").val() === "adv";
    if (typeof i18n !== "undefined") {
        p = i18n.currLocal !== "en";
        v = i18n.currLocal === "sa"
    }
    if ($("#J-search-new-flag").length == 0) {
        return
    }
    var n = {
        escape: {
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#x27;",
            "/": "&#x2F;"
        }
    };
    var e = [];
    for (var t in n.escape) {
        e.push(t)
    }
    var i = {
        escape: new RegExp("[" + e.join("") + "]", "g")
    };
    var g = function e(t) {
        if (t == null) return "";
        return ("" + t).replace(i.escape, function(e) {
            return n.escape[e]
        })
    };
    var C = $(".J-navController").length > 0;
    var S = $("form[name=searchForm]");
    if (S.length > 0) {
        S.each(function(e, t) {
            (function(e) {
                r(e)
            })(t)
        })
    }

    function r(c) {
        var t, u;
        if (!c || !(c.word || c.keyword)) {
            return
        }
        var f = c.word || c.keyword,
            e = $(c).find(".J-searchType select")[0],
            w = {
                product: "//keywordsuggestions.made-in-china.com/suggest/getEnProdSuggest.do?param=#param#&kind=5&ad=1&id=MICSearchSuggest&count=10&" + "ignoreCase=true&matchAnywhere=true&catflag=1&seo=1&call=?",
                supplier: "//keywordsuggestions.made-in-china.com/suggest/getEnSupplierSuggest.do?param=#param#&kind=5&ad=1&id=MICSearchSuggest&count=10&" + "ignoreCase=true&matchAnywhere=true&catflag=1&call=?"
            },
            y = false,
            u, b = $(f).attr("data-suggest"),
            t = $(c).attr("data-type");

        function n() {
            if (window.InputSuggest && !y && b && w[b]) {
                var d = function e(t, n, i) {
                    var r = parseInt(i.height(), 10),
                        a = parseInt(n.height(), 10),
                        o = 5,
                        s = 0;
                    if (t + r + o >= a) {
                        s = a - r - o
                    } else {
                        s = t + o
                    }
                    i.css("marginTop", s + "px")
                };
                var n = function e(t, n) {
                    if (C) {
                        return false
                    }
                    var i = t;
                    var r = i.elems.$list.parent(),
                        a = n.data[0],
                        o, s, l;
                    h = false;
                    v = null;
                    if (!m) {
                        S.find(".m-search-tips-wrap .J-suggest-list li").removeClass("hover")
                    }
                    $(a).addClass("hover");
                    if ($(a).hasClass("J-related")) {
                        r.addClass("m-query-open");
                        var c = "";
                        if (r.find(".J-suggest-related").length == 0) {
                            c += '<div class="m-search-tips-query J-suggest-related">'
                        }
                        c += '<div class="m-search-tips-query-box J-related-box">';
                        c += '<div class="m-search-tips-query-title">' + $(a).attr("val") + "</div>";
                        s = i.getData(i.getLastWord(), "sug", $(a).attr("data-index"));
                        if (s && s.related && s.related.length > 0) {
                            var u = i.getData(i.getLastWord(), "sug", 0);
                            o = u["rUrlMode"];
                            l = u["replaceWord"];
                            if (o) {
                                for (var f = 0; f < s.related.length; f++) {
                                    c += '<a href="' + o.replace(l, s.related[f]["linkWord"]) + '" class="m-search-tips-query-item">' + s.related[f]["word"] + "</a>"
                                }
                            }
                        }
                        c += "</div>";
                        if (r.find(".J-suggest-related").length == 0) {
                            c += "</div>";
                            r.append(c)
                        } else {
                            r.find(".J-suggest-related").html(c)
                        }
                        d(a.offsetTop, r.find(".J-suggest-related"), r.find(".J-related-box"));
                        h = true;
                        p = r.find(".J-related-box a")
                    } else {
                        r.find(".J-suggest-related").remove();
                        r.removeClass("m-query-open")
                    }
                    g = null
                };
                var e = {
                        sug: '<li class="m-search-tip <$ if (typeof related !="undefined" && related.length > 0) return "J-related"; $>" val="<$ return word.replace(/"/g, "&quot;"); $>" data-code="{catCode}" ' + '<$ if (typeof _index != "undefined") { return "data-index=\\"" + _index + "\\"" } $> >' + '{{word}}<$ if (catName) { return (" in " + "<em class=\\"keyword-cate\\">"+ catName + "</em>"); } else if (typeof related !="undefined" && related.length > 0) { return "<i class=\\"ob-icon icon-right\\"></i>"; } $></li>',
                        seo: '<li class="m-search-suggest-seo" unchoose="true"><a href="{link}">{word}</a></li>',
                        ads: '<li class="m-search-suggest-ads" unchoose="true"><div class="suggest-pro cf"><a href="{url}" target="_blank" class="pro-img" ads-data="{adsData},pa:1">' + '<img src="{img}" width="80" height="60" alt=""></a><div class="pro-links"><a href="{url}" target="_blank" ads-data="{adsData},pa:2">{name}</a>' + '<a href="{comUrl}" target="_blank" class="company" ads-data="{adsData},pa:3">{comName}</a></div></div><div class="<$ if (adsFlag=="true") return "ad-container" $>"></div></li>'
                    },
                    h = false,
                    t = false,
                    p = null,
                    v = null,
                    i = $(c).find(".J-searchSuggest");
                if (C) {
                    e.sug = '<li class="m-search-tip <$ if (typeof related !="undefined" && related.length > 0) return "J-related"; $>" ' + 'val="<$ return word.replace(/"/g, "&quot;"); $>" ' + 'data-code="{catCode}" ' + 'style="<$ if (related.length == 0) return "display:none"; $>"' + '<$ if (typeof _index != "undefined") { return "data-index=\\"" + _index + "\\"" } $> >' + "{{word}}</li>"
                }
                $(f).bind("keydown", function(e) {
                    if (!h) return;
                    v && v.removeClass("hover");
                    switch (e.keyCode) {
                        case 38:
                        case 40:
                            t = false;
                            v = null;
                            break;
                        case 37:
                            e.preventDefault();
                            if (v && v.prev("a").length) {
                                v = v.prev("a")
                            } else {
                                v = p.last()
                            }
                            break;
                        case 39:
                            if (v && v.next("a").length) {
                                v = v.next("a")
                            } else {
                                v = p.first()
                            }
                            break;
                        case 13:
                            if (v) {
                                t = true;
                                v.get(0).click()
                            }
                            break
                    }
                    v && v.addClass("hover")
                });
                var m = false;
                u = new InputSuggest({
                    carrier: f,
                    targetCarrier: i,
                    ignoreCase: true,
                    asyncData: {
                        url: w[b]
                    },
                    isEncodeParam: true,
                    style: {
                        container: "ul",
                        highlightCls: "keyword-highlight",
                        selectedCls: " ",
                        listCls: "J-suggest-list"
                    },
                    templates: e,
                    triggerOver: m
                });
                window.inputSuggest = u;
                u.sugCustomAction = function(e) {
                    if (t) return;
                    if (e.attr("data-code")) {
                        _(c, "code", e.attr("data-code"))
                    }
                    _(c, "log_from", "1");
                    $(c).submit()
                };
                u.adsCustomAction = function(e, t) {
                    if (t.keyCode == 13) {
                        e.find("a:eq(0)")[0].click()
                    }
                };
                u.on("show", function() {
                    if (C) {
                        if (i.find(".J-related").length) {
                            i.show()
                        } else {
                            i.hide()
                        }
                    } else {
                        i.show()
                    }
                });
                u.on("hide", function() {
                    i.hide()
                });
                var g = null;
                u.on("over", function(e) {
                    g = e;
                    n(this, g)
                });
                u.on("originalMouseMove", function(e) {
                    g = e
                });
                u.on("inputChange", function() {
                    var e = this.elems.$list.parent();
                    e.find(".J-suggest-related").remove();
                    e.removeClass("m-query-open")
                });
                $(f).bind("focus", function() {
                    if ($.trim($(f).val()).length) {
                        u.show()
                    }
                });
                y = true;
                var r = null;
                var a = -1;
                var o = S.find(".m-search-tips-wrap");
                var s = ".J-suggest-list .J-related";
                var l = ".J-suggest-list li";
                o.on("mouseleave", s, function(e) {
                    if (a < 0 && !r) {
                        r = {
                            x: e.clientX,
                            y: e.clientY
                        }
                    }
                }).on("mousemove", l, function(e) {
                    if (r) {
                        if (r.x !== e.clientX || r.y !== e.clientY) {
                            var t = Math.abs(x(r, {
                                x: e.clientX,
                                y: e.clientY
                            }));
                            if (t < 45) {
                                a = setTimeout(function() {
                                    if (g) {
                                        o.find(l).removeClass("hover");
                                        n(u, $.extend(true, {}, g));
                                        g = null
                                    }
                                    a = -1
                                }, 400)
                            } else {
                                o.find(l).removeClass("hover");
                                g && n(u, g)
                            }
                            r = null
                        }
                    } else if (a < 0) {
                        o.find(l).removeClass("hover");
                        g && n(u, g)
                    }
                }).on("mouseenter", ".J-suggest-related", function() {
                    if (a > 0) {
                        o.find(".J-suggest-list li.hover").trigger("mousemove");
                        clearTimeout(a);
                        a = -1
                    }
                })
            }
        }
        n();

        function x(e, t) {
            var n = t.x - e.x,
                i = t.y - e.y;
            return 360 * Math.atan(i / n) / (2 * Math.PI)
        }
        if (e) {
            var i = function e() {
                if (!y) {
                    n()
                }
                if (u) {
                    if (w[b]) {
                        u.changeAsync(w[b]);
                        u.disabled(false)
                    } else {
                        u.disabled(true)
                    }
                }
            };
            var r = $(c).find(".J-searchType"),
                a = null,
                o, s, l = new MaskSelect({
                    carrier: r,
                    trigger: "ontouchend" in window ? "click" : "mouseover",
                    control: {
                        selectedHide: $(c).find(".J-selectedHide").length ? $(c).find(".J-selectedHide").val() === "true" : false
                    },
                    style: {
                        tagName: "m-search-select",
                        listCls: "m-search-option-list",
                        menuCls: "m-search-select-title",
                        optCls: "m-search-option"
                    }
                }),
                d;
            window.topSearchSelect = l;
            l.onchange(function() {
                b = $(this).attr("data-suggest");
                t = this.value;
                c.action = $(this).attr("data-action");
                i();
                d = $(this).attr("data-width") + "px";
                r.parent().css("width", d);
                $(c).find(".m-search-input-wrap .layout-body").css("".concat(v ? "marginRight" : "marginLeft"), d);
                f.setAttribute("placeholder", this.getAttribute("placeholder"));
                a = $(c).attr("action");
                if (p) {
                    if (m) {
                        $(c).find(".J-thisSite-params").remove();
                        $(c).find(".J-mic-params").remove();
                        if (t === "3") {
                            $(c).find("input[type=hidden]").not("[name=previewPersonalFlag]").remove();
                            $(c).append($(".J-thisSite-params").clone());
                            $(".J-m-search-input").attr("name", "word")
                        }
                        if (t === "0") {
                            $(c).find("input[type=hidden]").not("[name=previewPersonalFlag]").remove();
                            $(c).append($(".J-mic-params").clone());
                            $(".J-m-search-input").attr("name", "keyword")
                        }
                    }
                } else {
                    if (a.indexOf("?") !== -1) {
                        a = a.split("?")[1];
                        $(c).find("input[type=hidden]").not("[name=previewPersonalFlag]").remove();
                        if (a.indexOf("&") !== -1) {
                            o = a.split("&");
                            for (var e = 0; e < o.length; e++) {
                                s = o[e].split("=");
                                h(s[0], s[1].indexOf("{word}") !== -1 ? encodeURIComponent(f.value) : s[1])
                            }
                        } else if (a.indexOf("=") !== -1) {
                            s = a.split("=");
                            h(s[0], s[1])
                        }
                    }
                }
            });
            l.triggerChange();
            l.onchange(function(e) {
                if ($(this).text() === "Products" && !document.documentMode) {
                    $(".J-at-pic-search").show()
                } else {
                    $(".J-at-pic-search").hide()
                }
            })
        }
        $(c).bind("submit", function(e) {
            if ($(f).attr("data-customLink") && $.trim(f.value) === "") {
                window.location.href = $(f).attr("data-customLink");
                e.preventDefault();
                return false
            }
            if ($.trim(f.value) === "") {
                alert(p ? i18n._("keywordRequired") : "Please enter a keyword at least for your search.");
                e.preventDefault();
                return false
            }
            if (!p) {
                if (!/^[\x00-\x7F\xB0]*$/.test(f.value)) {
                    alert("Please input the information in English only.");
                    e.preventDefault();
                    return false
                }
            }
            if ($(".J-reset-action").length > 0) {
                var t = $(".J-reset-action").val();
                var n = $(".J-extra-param");
                n.length > 0 && $(c).append(n);
                $(c).attr("action", t)
            }
        });

        function h(e, t) {
            var n = document.createElement("input");
            n.type = "hidden";
            n.name = e;
            n.value = t;
            c.appendChild(n)
        }

        function _(e, t, n) {
            if ($(e).find("input[name=" + t + "]").length > 0) {
                $(e).find("input[name=" + t + "]").remove()
            }
            $(e).append('<input type="hidden" name="' + t + '" value="' + n + '"/>')
        }(function() {
            var a = $(c).find(".J-searchHistory"),
                t = false,
                e = false;
            var n, i = ".J-search-tip-item",
                r;
            if (a.length === 0) return;
            $(c).find(".J-inputWrap").hover(function() {
                o();
                s()
            }, function(e) {
                l()
            });
            $(f).bind("keyup", function(e) {
                if (e.keyCode === 27) return;
                if ($.trim(f.value) !== "") {
                    l()
                } else {
                    s()
                }
            });
            $(f).bind("focus", function() {
                e = true;
                s()
            });
            $(f).bind("blur", function() {
                e = false
            });
            $(window).bind("load", function() {
                if (document.activeElement === f) {
                    e = true;
                    o()
                }
            });

            function o() {
                if (!t) {
                    t = true;
                    $.getJSON("//www.made-in-china.com/ajaxfunction.do?xcase=getKeywordHistory&jsoncallback=?", function(e) {
                        var t = "",
                            n = "<ul>",
                            i = "";
                        if (e && e.type) {
                            if (e.type == "1") {
                                t = p ? i18n._("popularSearches") : "Popular Searches"
                            }
                            if (e.type == "2") {
                                t = p ? i18n._("recentKeywords") : "Your Recent Keywords"
                            }
                        }
                        if (t) {
                            n += '<li class="m-search-tip-title">' + t + "</li>"
                        }
                        if (e && e.list && e.list.length > 0) {
                            i = e.list;
                            for (var r = 0; r < i.length; r++) {
                                n += '<li class="m-search-tip J-search-tip-item" ' + (e.type == "2" ? 'data-word="' + g(decodeURIComponent(i[r].word).replace(/\+/g, " ")) + '"' : "") + '><a class="ellipsis" href="' + (i[r].link ? i[r].link : "javascript:void(0);") + '">' + g(decodeURIComponent(i[r].word).replace(/\+/g, " ")) + "</a></li>"
                            }
                            if (e.type == "2") {
                                n += '<li class="m-search-tip-clear"><a class="link-blue J-clear-search-history" href="javascript:void(0);">'.concat(p ? i18n._("clearHistory") : "Clear History", "</a></li>")
                            }
                            n += "</ul>";
                            a.html(n);
                            s()
                        }
                    })
                }
            }

            function s() {
                if (a.css("display") !== "none") return;
                if (e && $.trim(f.value) === "" && $.trim(a.html()) !== "") {
                    a.show();
                    n = $(a).find(i);
                    n.hover(function() {
                        r && r.removeClass("hover");
                        $(this).addClass("hover");
                        r = $(this)
                    }, function() {
                        $(this).removeClass("hover")
                    })
                }
            }

            function l() {
                a.hide();
                r && r.removeClass("hover");
                r = null
            }
            $(f).bind("keydown", function(e) {
                if (!(n && n.length > 0)) return;
                r && r.removeClass("hover");
                switch (e.keyCode) {
                    case 38:
                        if (r && r.prev(i).length) {
                            r = r.prev(i)
                        } else {
                            if (!r) {
                                r = n.last()
                            } else {
                                r = null
                            }
                        }
                        break;
                    case 40:
                        if (r && r.next(i).length) {
                            r = r.next(i)
                        } else {
                            if (!r) {
                                r = n.first()
                            } else {
                                r = null
                            }
                        }
                        break;
                    case 13:
                        if (r) {
                            if (r.attr("data-word")) {
                                $(this).blur();
                                $(this).val(r.attr("data-word"));
                                $(c).submit()
                            } else {
                                r.find("a").get(0).click();
                                e.preventDefault()
                            }
                        }
                        break;
                    case 27:
                        l();
                        break
                }
                r && r.addClass("hover")
            });
            a.bind("click", function(e) {
                if ($(e.target).hasClass("J-clear-search-history")) {
                    if ($.removeCookie) {
                        $.removeCookie("_kwd");
                        $.removeCookie("_cat");
                        $.cookie("_kwd", "", {
                            domain: ".made-in-china.com",
                            expires: -1,
                            path: "/"
                        });
                        $.cookie("_cat", "", {
                            domain: ".made-in-china.com",
                            expires: -1,
                            path: "/"
                        });
                        a.empty();
                        a.hide();
                        t = false;
                        $.cookie("_kwd", "", {
                            domain: "www.made-in-china.com",
                            expires: -1,
                            path: "/"
                        });
                        $.cookie("_cat", "", {
                            domain: "www.made-in-china.com",
                            expires: -1,
                            path: "/"
                        })
                    }
                    e.preventDefault();
                    return false
                }
                if (e.target.nodeName.toLowerCase() === "a" && $(e.target).attr("href") === "javascript:void(0);") {
                    if ($.trim(e.target.innerHTML)) {
                        f.value = e.target.childNodes[0].nodeValue;
                        $(c).append("<input type='hidden' name='log_from' value='4'/>");
                        $(c).submit()
                    }
                    e.preventDefault();
                    return false
                }
            })
        })()
    }(function() {
        var d, h, p = 200;

        function e() {
            if (d) return;
            d = setTimeout(function() {
                d = null
            }, p);
            var e = $(".J-header-related-words");
            if (e.length > 0) {
                e.css("overflow", "inherit");
                var t = e.find(".J-related-content"),
                    n = e.find(".J-related-more"),
                    i = parseInt(n.width(), 10),
                    r = e.find(".J-related-more-list"),
                    a = r.find(".J-related-keywords"),
                    o = e.find(".J-related-keywords:visible"),
                    s = o.length - 1,
                    l = parseInt(e[0].scrollWidth, 10),
                    c = parseInt(e.width(), 10),
                    u = c - i,
                    f = parseInt(t.width(), 10),
                    a;
                if (h === c) {
                    return
                }
                h = c;
                if (l > c) {
                    while (o.eq(s).length > 0 && s > 0) {
                        l = l - parseInt(o.eq(s).width(), 10) - 10;
                        r.prepend(o.eq(s));
                        s--;
                        if (u > l) {
                            break
                        }
                    }
                    n.css("display", "inline-block")
                } else if (a.length > 0) {
                    r.show();
                    s = 0;
                    while (a.eq(s).length > 0) {
                        if (a.eq(s) && f + a.eq(s).width() + 10 < c) {
                            f = f + a.eq(s).width() + 10;
                            n.before(a.eq(s))
                        }
                        s++
                    }
                    r.removeAttr("style");
                    if (r.find(".J-related-keywords").length === 0) {
                        n.hide()
                    }
                }
            }
        }
        if ($(".J-hasSearchTip").length > 0) {
            var t = true;
            var n = '<div class="J-search-input-tip search-input-tip arrow-left">' + '<div class="tip-con">' + "Enter Product Name / CAS No. / Formula / EINECS" + '<i class="J-close-tip ob-icon icon-delete"></i>' + "</div>" + '<span class="arrow arrow-out">' + '<span class="arrow arrow-in"></span>' + "</span>" + "</div>";
            $(".J-inputWrap").append(n);
            $(".m-search-input").on("focus", function() {
                $(".J-search-input-tip").hide()
            }).on("blur", function() {
                if (!t) {
                    return
                }
                $(".J-search-input-tip").show()
            });
            $(document).on("click", ".J-close-tip", function() {
                $(".J-search-input-tip").hide();
                t = false
            })
        }
        e();
        $(window).bind("resize", e)
    })()
});
(function(n) {
    if (r()) {
        $(".J-at-pic-search").show()
    } else {
        return
    }
    var t = {
        "image/jpeg": true,
        "image/bmp": true,
        "image/png": true
    };
    var o = {
        show: function e() {
            $(".m-search-img-loading").css("display", "table")
        },
        close: function e() {
            $(".m-search-img-loading").css("display", "none")
        }
    };
    var i = {
        quality: .7,
        fieldName: "multipartFile"
    };
    var s = 500;
    var l = 0;
    var c = 0;
    var e = "Upload Image <span> (Max 20MB per Image) </span>";
    var o = {
        show: function e() {
            $(".m-search-img-loading").css("visibility", "visible")
        },
        close: function e() {
            $(".m-search-img-loading").css("visibility", "hidden")
        }
    };

    function r() {
        try {
            return "localStorage" in window && window["localStorage"] !== null && window.Promise
        } catch (e) {
            return false
        }
    }

    function u(r, a) {
        lrz(r, a).then(function(e) {
            if (!f(s)(e.file.size, "kb")) {
                var t = JSON.parse(JSON.stringify(a));
                t.quality -= .1;
                u(r, t)
            } else {
                var n = e.formData;
                var i = {
                    ImgWidth: l,
                    ImgHeight: c,
                    zipSize: e.file.size,
                    orgSize: r.size
                };
                d(n, i)
            }
        }).catch(function(e) {
            o.close();
            m()
        })
    }

    function a(e, t) {
        var n = (e / 1024).toFixed(2);
        var i = (n / 1024).toFixed(2);
        var r = {
            kb: n,
            mb: i
        };
        return parseFloat(r[t])
    }

    function f(n) {
        return function(e, t) {
            if (a(e, t) <= n) {
                return true
            } else {
                return false
            }
        }
    }

    function d(e, t) {
        e.append("orgwidth", t.ImgWidth);
        e.append("orgheight", t.ImgHeight);
        e.append("zipsize", t.zipSize);
        e.append("orgsize", t.orgSize);
        $.ajax({
            type: "post",
            url: "//file.made-in-china.com/img-search/upload",
            data: e,
            processData: false,
            contentType: false,
            crossDomain: true,
            success: function e(t) {
                if (t.code === 200) {
                    b(t.data.statUrl);
                    n.location.href = t.data.url
                } else {
                    o.close();
                    w()
                }
            },
            error: function e(t) {
                w();
                console.log(t);
                o.close()
            }
        })
    }

    function h(e) {
        return t[e] ? true : false
    }

    function p(n, i, r) {
        o.show();
        var e = new FileReader;
        e.readAsDataURL(n);
        e.onload = function(e) {
            var t = new Image;
            t.src = e.target.result;
            t.onload = function(e) {
                if (this.width) {
                    l = this.width;
                    c = this.height;
                    i(n)
                } else {
                    o.close();
                    r()
                }
            };
            t.onerror = function(e) {
                o.close();
                r()
            }
        }
    }

    function v(e) {
        o.show();
        if (!f(s)(e.size, "kb")) {
            u(e, i)
        } else {
            var t = new FormData;
            t.append("multipartFile", e);
            var n = {
                ImgWidth: l,
                ImgHeight: c,
                zipSize: e.size,
                orgSize: e.size
            };
            d(t, n)
        }
    }

    function m() {
        $(".m-search-img-tips").empty().append("Upload failed.Incorrect image format. Supported formats：JPG,PNG,BMP.");
        $(".m-search-img-tips").addClass("imgUpload-error-tip")
    }

    function g() {
        $(".m-search-img-tips").empty().append("Upload failed. Max image size is 20MB");
        $(".m-search-img-tips").addClass("imgUpload-error-tip")
    }

    function w() {
        $(".m-search-img-tips").empty().append("No network connection. Please check your networksettings and try again.");
        $(".m-search-img-tips").addClass("imgUpload-error-tip")
    }

    function y() {
        $(".m-search-img-tips").removeClass("imgUpload-error-tip");
        $(".m-search-img-tips").empty().html(e)
    }

    function b(e) {
        var t = new Image;
        t.src = e;
        if (t.readyState === "complete") {
            t = null
        } else {
            t.onload = function() {
                t = null
            }
        }
    }

    function x() {
        $(".J-at-pic-search").on("click", function(e) {
            if ($(".J-at-search-img-wrap").css("display") === "none") {
                $(".J-at-search-img-wrap").show();
                $(".J-searchHistory").hide()
            }
            e.preventDefault();
            e.stopPropagation()
        });
        $(".J-inputWrap .m-search-input").on("focus", function() {
            $(".J-at-search-img-wrap").hide();
            if ($(".J-inputWrap .J-at-pic-search").length > 0) {
                $(this).css("padding-right", "45px")
            }
        });
        $(document).on("click", function(e) {
            if (e.target !== $(".J-at-search-img-wrap").get(0)) {
                $(".J-at-search-img-wrap").hide();
                y()
            }
        });
        $(".J-at-search-img-wrap").on("click", function(e) {
            e.stopPropagation()
        });
        if ($(".J-searchType option:selected").length > 0 && $(".J-searchType option:selected").text() !== "Products") {
            $(".J-at-pic-search").hide()
        }
        $(".J-search-upload-img").on("change", function(e) {
            var t;
            t = e.target && e.target.files && e.target.files[0];
            $(e.target).val("");
            if (t) {
                if (!f(20)(t.size, "mb")) {
                    g();
                    return
                }
                if (!h(t.type)) {
                    m();
                    return
                }
                p(t, v, m)
            }
        })
    }
    x()
})(window);
$(function() {
    if ($("#J-search-new-flag").length > 0) {
        return
    }
    var f, n, r;
    var o = document.getElementById("SearchForm");
    if (!o || !(o.word || o.keyword)) {
        return
    }
    var s = o.word || o.keyword,
        i = "//keywordsuggestions.made-in-china.com/suggest/getEnProdSuggest.do?param=#param#&kind=5&ad=1&id=MICSearchSuggest&count=10&" + "ignoreCase=true&matchAnywhere=true&catflag=1&call=?",
        a = "//keywordsuggestions.made-in-china.com/suggest/getEnSupplierSuggest.do?param=#param#&kind=5&ad=1&id=MICSearchSuggest&count=10&" + "ignoreCase=true&matchAnywhere=true&catflag=1&call=?";
    if (window.InputSuggest) {
        var e = {
            sug: '<a href="javascript:;" val="<$ return word.replace(/"/g, "&quot;"); $>" J-code="{catCode}">{{word}}<$ if (catName) { return " in "; } $>' + "<span class=highlight-category>{catName}</span></a>",
            ads: '<div class="suggest-pro cf"><a href="{url}" target="_blank" class="pro-img" ads-data="{adsData},pa:1">' + '<img src="{img}" width="80" height="60" alt=""></a><div class="pro-links"><a href="{url}" target="_blank" ads-data="{adsData},pa:2">{name}</a>' + '<a href="{comUrl}" target="_blank" class="company" ads-data="{adsData},pa:3">{comName}</a></div></div>'
        };
        n = new InputSuggest({
            carrier: s,
            asyncData: {
                url: i
            },
            isEncodeParam: true,
            style: {
                container: "div",
                highlightCls: "blue",
                selectedCls: "hover",
                listCls: "dropmenu-list",
                itemMarkCls: "suggestItem"
            },
            templates: e
        });
        n.sugCustomAction = function(e) {
            if (e.attr("J-code")) {
                $(o).find("input[name=code]").val(e.attr("J-code"))
            }
            $(o).append("<input type='hidden' name='log_from' value='1'/>");
            o.submit()
        };
        n.adsCustomAction = function(e, t) {
            if (t.keyCode == 13) {
                e.find("a:eq(0)")[0].click()
            }
        };
        if ($("#searchType select").val() === "1" || $("#searchType select").val() === "2") {
            n && n.disabled(true)
        }
        n.on("show", function() {
            $(o).find(".J-inputWrap").addClass("search-focus")
        });
        n.on("hide", function() {
            $(o).find(".J-inputWrap").removeClass("search-focus")
        });
        $(s).bind("focus", function() {
            if ($.trim($(s).val()).length) {
                n.show()
            }
        })
    }
    if (document.getElementById("searchType")) {
        var t = function e(t) {
            if (n) {
                if (t === "0" || t === "1") {
                    if (t === "0") {
                        n.changeAsync(i)
                    } else {
                        n.changeAsync(a)
                    }
                    n.disabled(false)
                } else {
                    n.disabled(true)
                }
            }
        };
        f = new MaskSelect({
            carrier: document.getElementById("searchType"),
            control: {
                selectedHide: true
            }
        });
        var l = f._.target,
            c = f.value();
        t(c);
        f.onchange(function() {
            c = f.value();
            r = $(this).attr("data-args");
            o.action = $(this).attr("data-action");
            t(c);
            s.setAttribute("placeholder", this.getAttribute("placeholder"))
        })
    }
    $(o).bind("submit", function(e) {
        if ($.trim(s.value) === "") {
            alert("Please enter a keyword at least for your search.");
            e.preventDefault();
            return false
        }
        if (!/^[\x00-\x7F\xB0]*$/.test(s.value)) {
            alert("Please input the information in English only.");
            e.preventDefault();
            return false
        }
        if (!r && o.action.indexOf("?") != -1) {
            r = o.action.substr(o.action.indexOf("?") + 1)
        }
        if (r) {
            var t, n;
            $(o).find("input[type=hidden]").remove();
            if (r.indexOf("&") !== -1) {
                t = r.split("&");
                for (var i = 0; i < t.length; i++) {
                    n = t[i].split("=");
                    u(n[0], n[1].indexOf("{word}") !== -1 ? encodeURIComponent(s.value) : n[1])
                }
            } else if (r.indexOf("=") !== -1) {
                n = r.split("=");
                u(n[0], n[1])
            }
        }
        if (f && f.value() === "2") {
            window.location.href = "//sourcing.made-in-china.com/sourcingrequest?keyword=" + encodeURIComponent(s.value) + "&type=keyword&requestfor=1";
            e.preventDefault();
            return false
        }
    });

    function u(e, t) {
        var n = document.createElement("input");
        n.type = "hidden";
        n.name = e;
        n.value = t;
        o.appendChild(n)
    }(function() {
        var a = $(o).find(".J-history");
        var e = false;
        $(o).find(".J-inputWrap").hover(function() {
            if (!e) {
                e = true;
                $.getJSON("//www.made-in-china.com/ajaxfunction.do?xcase=getKeywordHistory&jsoncallback=?", function(e) {
                    var t = "",
                        n = '<div class="history-word J-hisWord"><a href="//www.made-in-china.com/browsing-history/"><strong>Your Recent KeyWords: </strong></a>',
                        i = "";
                    if (e && e.list && e.list.length > 0) {
                        i = e.list;
                        for (var r = 0; r < i.length; r++) {
                            n += '<a href="javascript:;">' + decodeURIComponent(i[r].word.replace(/\+/g, " ")) + "</a>" + (r === i.length - 1 ? "" : ", ")
                        }
                        n += "</div>";
                        a.html(n)
                    }
                })
            }
            if (s.value === "" && $.trim(a.html()) !== "") {
                a.show()
            }
        }, function(e) {
            a.hide()
        });
        $(s).bind("keyup", function() {
            if (s.value === "" && $.trim(a.html()) !== "") {
                a.show()
            } else {
                a.hide()
            }
        });
        $(o).find(".J-history").bind("click", function(e) {
            if (e.target.nodeName.toLowerCase() === "a" && $(e.target).attr("href") === "javascript:;") {
                if ($.trim(e.target.innerHTML)) {
                    s.value = e.target.childNodes[0].nodeValue;
                    $(o).append("<input type='hidden' name='log_from' value='4'/>");
                    $(o).submit()
                }
                e.preventDefault();
                return false
            }
        })
    })();
    (function() {
        if ($("#searchWordMore").length) {
            var e = "&#xf0d8;",
                t = "&#xf0d7;",
                n = ".dropmenu-hd",
                i = ".icon",
                r = $("#searchWordMore");
            r.find(n).bind("mouseover", function() {
                r.addClass("hover");
                r.find(i).html(e)
            });
            r.bind("mouseleave", function() {
                r.removeClass("hover");
                r.find(i).html(t)
            })
        }
        if ($("#qpMore").length && $("#linkMoreN").length === 0) {
            var a = null;
            $("#qpKeys").show();
            $("#qpMore").before($("#linkMore").clone().removeClass().attr("id", "linkMoreN").removeClass("mr").mouseover(function() {
                var e = $("#linkMoreN").position();
                var t = document.documentElement && document.documentElement.clientWidth + document.documentElement.scrollLeft || document.body && document.body.clientWidth + document.body.scrollLeft;
                if (e.left + $("#qpMore").width() > t) {
                    $("#qpKeys").css({
                        position: "absolute",
                        right: "-53px"
                    })
                } else {
                    $("#qpKeys").removeAttr("style")
                }
                $("#qpMore").css({
                    left: e.left - 8 + "px",
                    top: e.top + 5 + "px"
                }).show()
            })).hover(function() {
                clearTimeout(a)
            }, function() {
                clearTimeout(a);
                a = setTimeout(function() {
                    $("#qpMore").hide()
                }, 400)
            })
        }
    })();
    (function() {
        window.advancedSearch = function() {
            var e = "nolimit",
                t = "",
                n = "",
                i = "",
                r = "";
            i = $('.dropItem input[name="type"]').size() > 0 ? $('.dropItem input[name="type"]').val() : "999";
            if ($('.dropItem input[name="code"]').size() > 0) {
                n = $('.dropItem input[name="code"]').val();
                n = n == "-1" || n == "0" ? "" : n
            }
            switch (f.value()) {
                case "0":
                    t = "product";
                    break;
                case "1":
                    t = "supplier";
                    break;
                case "2":
                    t = "sourcing";
                    break;
                case "4":
                case "5":
                case "6":
                    t = "offer";
                    break
            }
            r = jQuery.trim(jQuery("#searchWord").val());
            var a = "";
            for (var o = 0; o < r.length; o++) {
                var s = r.substring(o, o + 1);
                if (s == "?") {
                    alert("Please input an legal keyword(s).");
                    return false
                }
                if (s != ".") {
                    if (/^\W+$/.test(s)) {
                        a += " "
                    } else {
                        a += s
                    }
                }
            }
            a = $.trim(a);
            var l = a.replace(/_/gi, " ").split(" ");
            var c = "";
            for (var u = 0; u < l.length; u++) {
                if (l[u] !== "") {
                    c += (u === 0 ? "" : "_") + l[u]
                }
            }
            window.location.href = "/advanced-search/" + c + "/" + t + "-" + n + "-" + e + "-" + i + "--.html"
        }
    })();
    (function() {
        if (!$("#advanced-search").length) {
            return
        }
        $("#advanced-search").attr("href", "javascript:;");
        $("#advanced-search").on("click", function() {
            advancedSearch()
        })
    })()
});
jQuery(function() {
    var t = function e() {};
    var n;
    var a = function e(t, n) {
        if (t.indexOf("?") !== -1) {
            t = t.split("?");
            if (t[1]) {
                t[1] = t[1] + "&" + n.join("&")
            } else {
                t[1] = n.join("&")
            }
            t = t.join("?")
        } else if (t.indexOf("#") !== -1) {
            t = t.splig("#");
            t[1] = "?" + n.join("&");
            t = t.join("#")
        } else {
            t += "?" + n.join("&")
        }
        return t
    };
    var o = "LOGON_CALLBACK_" + (new Date).valueOf();
    var i = {
        style: {
            ifrWidth: 560,
            ifrHeight: 345,
            width: 340,
            height: "auto"
        },
        text: {
            title: "Login",
            close: ""
        },
        url: "",
        callback: t,
        closeBack: t
    };
    var r = null;
    var e = function e(t) {
        if (r) {
            return r
        }
        r = this;
        this._ = {};
        this.elems = {};
        this.config = jQuery.extend(true, {}, i, t);
        this.init()
    };
    e.prototype = {
        init: function e() {
            var t = this.elems;
            var n = this.config
        },
        load: function e(t, n) {
            this.unload();
            window[o] = this.config.callback;
            var i = [];
            var r = this;
            if (document.domain !== window.location.hostname) {
                i.push("domain=" + document.domain)
            }
            i.push("callback=" + o);
            n = a(n, i);
            showPoploginArtdialog(window.location.href, t, "1")
        },
        unload: function e() {
            if (n) {
                n.close()
            }
            window[o] = t
        }
    };
    window.LoginLayer2 = e
});
(function(e, t) {
    "undefined" !== typeof module && module.exports ? module.exports = t() : "function" === typeof define && define.amd ? define(t) : e.JFixed = t.call(e)
})(this, function() {
    function o() {
        return parseInt(s.body.scrollTop ? s.body.scrollTop : s.documentElement.scrollTop) || 0
    }

    function i(e, t, n) {
        window.addEventListener ? e.addEventListener(t, n, !1) : window.attachEvent && e.attachEvent("on" + t, function() {
            n()
        })
    }
    if (!this.JFixed) {
        var r = this,
            s = document,
            e = new Abstract({
                fixed: function e() {},
                unFixed: function e() {},
                fixedEvent: function e() {},
                unFixedEvent: function e() {},
                scrollEvent: function e() {},
                onScroll: function e() {},
                position: function e() {},
                triggerTop: function e() {}
            }),
            e = new Clazz(e, {
                config: {
                    carrier: null,
                    triggerTop: null,
                    holder: {
                        left: null,
                        right: null,
                        bottom: null
                    },
                    isRestore: !1,
                    position: {
                        top: null,
                        right: null,
                        bottom: null,
                        left: null
                    },
                    isAbsolute: !1
                },
                inherit: Component
            }, function(e) {
                this.setConfig(e)
            });
        e.extend({
            __init: function e() {
                if (this._.init) return this;
                if (!this.config.carrier) throw "carrier must be not null!";
                this._.ISSUPPORT = !(!+"\v1" && !r.XMLHttpRequest);
                this._.ISIE = !+"\v1";
                this._.viewHeight = s.documentElement.clientHeight;
                this._.height = 0;
                this._.width = 0;
                this._.flag = !0;
                this._.init = !1;
                this._.ISSUPPORT || (s.getElementsByTagName("html")[0].style.cssText = "background-image:url(about:blank); background-attachment:fixed;");
                this.config.isAbsolute && (this._.ISSUPPORT = !1);
                this.position();
                this.__holdCheck()
            },
            fixed: function e() {
                var t = this.config.carrier,
                    n = t.style.visibility,
                    i = t.style.display;
                this.__init();
                "none" === i && (t.style.position = "absolute", t.style.visibility = "hidden", t.style.display = "");
                this._.height = t.offsetHeight;
                this._.width = t.offsetWidth;
                "none" === i && (t.style.visibility = n, t.style.display = "none");
                if (!this.config.triggerTop || this.__checkDistance()) t.style.position = this._.ISSUPPORT ? "fixed" : "absolute", this.fire("fixed");
                this._.init || this.__events();
                this._.init = !0;
                return this
            },
            unFixed: function e() {
                this._.flag = !1;
                this.config.carrier.style.position = this.config.isRestore ? this._.hisPosition || "static" : "static";
                this.fire("unfixed")
            },
            triggerTop: function e(t) {
                if (t && !isNaN(t)) return this.config.triggerTop = t, this._.flag && this.fixed(), this
            },
            position: function e(t, n) {
                var i = t || this.config.position;
                if (!i) return "";
                n && (this.config.holder = n);
                var r = this.config.carrier;
                i.top && i.bottom && (i.bottom = null);
                i.left && i.right && (i.right = null);
                for (var a in i) r.style[a] = null !== i[a] ? parseInt(i[a], 10) + "px" : "auto"
            },
            onScroll: function e(t) {
                this._.onScroll = t;
                return this
            },
            __events: function e() {
                var t = this,
                    n = null;
                i(r, "scroll", function(e) {
                    t._.flag && (t.__holdCheck(), t.config.triggerTop && t.__checkDistance(), t.fire("scroll", {
                        event: e,
                        top: o(),
                        viewHeight: t._.viewHeight
                    }), t._.onScroll && t._.onScroll(e, o(), t._.viewHeight))
                });
                i(r, "resize", function() {
                    t._.flag && (t._.viewHeight = s.documentElement.clientHeight, t._.ISIE && !t._.ISSUPPORT && !n ? n = setTimeout(function() {
                        n = null;
                        t.__fixedIE6Top()
                    }, 200) : t.__holdCheck())
                });
                this.__domReady(function() {
                    t.config.triggerTop || (t.config.carrier.style.display = "");
                    t.__holdCheck()
                })
            },
            __domReady: function e(t) {
                function n() {
                    try {
                        document.documentElement.doScroll("left"), l()
                    } catch (e) {
                        setTimeout(n, 1)
                    }
                }
                if ("function" === typeof t) {
                    var i = document.addEventListener ? "DomContentLoaded" : "onreadystatechange",
                        r = !1,
                        a, o, s, l = function e() {
                            r || (r = !0, t.call(window))
                        };
                    if ("complete" === document.readyState) return l();
                    if (document.addEventListener) s = function e() {
                        document.removeEventListener(i, s, !1);
                        l()
                    }, document.addEventListener(i, s, !1), window.addEventListener("load", l, !1);
                    else if (document.attachEvent) {
                        a = function e() {
                            "complete" === document.readyState && (document.detachEvent(i, a), l())
                        };
                        document.attachEvent(i, a);
                        window.attachEvent("onload", l);
                        try {
                            o = null == window.frameElement
                        } catch (e) {}
                        document.documentElement.doScroll && o && n()
                    }
                    r && t.call(window)
                }
            },
            __checkDistance: function e() {
                var t = !1,
                    n = this.config.carrier;
                this.config.triggerTop && (o() >= this.config.triggerTop && (t = !0), t ? (n.style.position = this._.ISSUPPORT ? "fixed" : "absolute", this.fire("fixed")) : (n.style.position = this.config.isRestore ? this._.hisPosition || "static" : "static", this.fire("unfixed")));
                return t
            },
            __fixedIE6Top: function e() {
                var t = this.config,
                    n = o();
                null !== t.position.top && (t.carrier.style.top = n + parseInt(t.position.top, 10) + "px");
                null !== t.position.bottom && (t.carrier.style.top = n + this._.viewHeight - this._.height - parseInt(t.position.bottom, 10) + "px")
            },
            __holdCheck: function e() {
                if (this._.flag) {
                    var t = this.config,
                        n = t.holder,
                        i = 0,
                        r = 0,
                        r = r = 0;
                    this._.ISSUPPORT || this.__fixedIE6Top();
                    n.left && (r = parseInt(t.position.right, 10), i = s.body.clientWidth / 2 - this._.width - n.left, r && !isNaN(r) && r <= i ? (t.carrier.style.left = "auto", t.carrier.style.right = r + "px") : (t.carrier.style.left = s.body.clientWidth / 2 + n.left + "px", t.carrier.style.right = "auto"));
                    n.right && (r = parseInt(t.position.left, 10), i = s.body.clientWidth / 2 - this._.width - n.right, t.carrier.style.left = r && !isNaN(r) && r <= i ? r + "px" : s.body.clientWidth / 2 - n.right - this._.width + "px");
                    if (n.bottom) {
                        var a, r = o();
                        a = i = s.body.clientHeight - this._.viewHeight - r;
                        i = 0 >= i ? 0 : i;
                        if (this._.ISSUPPORT) {
                            if (0 === this.config.position.top || this.config.position.top) t.carrier.style.top = "auto", a = s.body.clientHeight - r - this._.height;
                            a <= n.bottom ? t.carrier.style.bottom = n.bottom - i + (null === t.position.bottom ? 0 : parseInt(t.position.bottom, 10)) + "px" : (t.carrier.style.top = null === t.position.top ? "auto" : parseInt(t.position.top, 10) + "px", t.carrier.style.bottom = null === t.position.bottom ? "auto" : parseInt(t.position.bottom, 10) + "px")
                        } else i <= n.bottom && (t.carrier.style.top = r + this._.viewHeight - this._.height - (n.bottom - i) - (null === t.position.bottom ? 0 : parseInt(t.position.bottom, 10)) + "px")
                    }
                }
            }
        });
        return e
    }
});
(function(e, t) {
    if (typeof module !== "undefined" && module.exports) {
        module.exports = t()
    } else if (typeof define === "function" && define.amd) {
        define(t)
    } else {
        e.SlideNav = t.call(e)
    }
})(this, function() {
    "use strict";
    var t = null,
        n = window,
        i = document,
        r = {
            containerTag: "ul",
            containerCls: "float-action-box",
            itemTag: "li",
            template: '<li data-aliases="{aliases}"><a href="{link}" ads-data="{adsData}" class="{cls}" rel="nofollow" target="{target}"></a>' + '<div class="popup-wrap"><div class="popup"><div class="popup-box">{text}<div class="arrow"><div class="arrow-inner"></div></div></div></div></div></li>',
            hoverCls: "hover",
            language: "en-US"
        },
        a = {
            "en-US": {
                goTop: "Back to Top",
                liveChat: "Any questions about our website?<br/>Talk to me!",
                tm: {
                    onLine: "Chat with Supplier",
                    offLine: "Leave a message"
                },
                contactNow: "Contact Now",
                contact: "Contact Buyer Service",
                survey: "Do Survey, Get Rewards",
                help: "Help",
                myAccount: "My Asset"
            },
            "zh-CN": {
                goTop: "返回顶部",
                liveChat: "在线客服",
                contact: "联系买家服务",
                survey: "在线调查",
                myAccount: "我的资产"
            }
        };

    function o(e) {
        if (t || !n["jQuery"] && !n["$"]) return t;
        if (this instanceof o) {
            t = this
        }
        this.c = $.extend(r, e);
        this.__init()
    }
    o.prototype = {
        constructor: this,
        __init: function e() {
            var t = this;
            this._ = {};
            this._.order = 0;
            this._.mapping = {};
            this._.language = a[this.c.language] || {};
            this.carrier = i.createElement(this.c.containerTag);
            this.carrier.style.display = "none";
            this.carrier.className = this.c.containerCls || "";
            this._addCss(function() {
                i.body.appendChild(t.carrier)
            })
        },
        __events: function e(t, n, i) {
            if (this.c.hoverCls) {
                var r = this.c.hoverCls;
                $(t).hover(function() {
                    $(this).children(".popup-wrap").addClass("open")
                }, function() {
                    $(this).children(".popup-wrap").stop().removeClass("open")
                })
            }
            if (!t || !i) return;
            $(t).bind("click", n, i)
        },
        __render: function e(t) {
            if (!t) return;
            var n = t.template || this.c.template;
            if (!t.link) {
                t.link = "javascript:;"
            }
            if (!t.cls) {
                t.cls = ""
            }
            if (!t.target) {
                t.target = "_blank"
            }
            if (!t.adsData) {
                n = n.replace('ads-data="{adsData}"', "")
            }
            if (n) {
                for (var i in t) {
                    n = n.replace(new RegExp("{" + i + "}", "gi"), t[i] || "")
                }
            }
            return n
        },
        _addCss: function e(t) {
            if (this.c.cssLink === false) {
                return
            }
            var n = document.createElement("link");
            n.type = "text/css";
            n.rel = "stylesheet";
            n.href = null;
            if (!!this.c.cssLink) {
                n.href = this.c.cssLink
            } else if (!!$(".J-float-action-box-expo").length) {
                n.href = $(".J-float-action-box-expo").val() + "?t=" + (new Date).getTime()
            } else {
                n.href = "https://www.micstatic.com/common/js/business/plugs/slideNav/float-action-box_17983b22.css?t=" + (new Date).getTime()
            }
            document.getElementsByTagName("head")[0].appendChild(n);
            n.onload = function() {
                t()
            }
        },
        addItem: function e(t, n) {
            var i = "slideNav_" + this._.order,
                r, a;
            this._.order++;
            if (typeof t === "string" && this.getItem(t).length === 0) {
                r = o[t];
                r && (r.view.aliases = t);
                if (this._.language[t]) {
                    r.view.text = this._.language[t]
                }
            }
            if (t instanceof Object) {
                t.aliases = i;
                r = {
                    view: t,
                    handle: n
                }
            }
            if (!r || r.isShow && !r.isShow()) return;
            r.init && r.init();
            a = $(this.__render(r.view));
            $(this.carrier).append(a);
            this.__events(a, i, r.handle);
            if (!this._.mapping[i]) {
                this._.mapping[i] = r
            }
        },
        getItem: function e(t) {
            return $(this.carrier).find(this.c.itemTag + "[data-aliases=" + t + "]")
        },
        show: function e() {
            this.carrier.style.display = "block"
        },
        hide: function e() {
            this.carrier.style.display = "none"
        },
        getLanguage: function e() {
            return this._.language
        },
        destroy: function e() {
            $(this.carrier).children().remove();
            $(this.carrier).remove();
            this._ = null;
            this.carrier = null;
            this.c = null;
            t = null
        }
    };
    return o
});
if (window["SlideNav"]) {
    SlideNav.defaultsInit = function(e) {
        var l = parseInt(window.screen.width, 10);

        function t() {
            var e = 150,
                t = 10,
                n = document.documentElement.clientHeight,
                i = document.documentElement.clientWidth,
                r = document.body.clientHeight,
                a = {},
                o = {},
                s;
            if ($("#footer").length > 0) {
                t = parseInt($("#footer").height(), 10) - e
            } else if ($(".m-footer").length > 0) {
                t = parseInt($(".m-footer").height(), 10) - e
            }
            if (i <= 1200) {
                a.left = null;
                a.right = 10
            } else {
                a.right = null;
                if ($(".grid").length > 0) {
                    s = parseInt($(".grid").eq(0).width(), 10);
                    if ((i - s) / 2 <= 50 || (l - s) / 2 <= 60) {
                        o.left = s / 2 - 54
                    } else {
                        o.left = s / 2 + 10
                    }
                } else {
                    o.left = 505
                }
            }
            if (n > r) {
                a.top = r / 2
            } else {
                a.bottom = e;
                o.bottom = t
            }
            a.right = 20;
            a.left = null;
            o.left = null;
            return {
                pos: a,
                holder: o
            }
        }
        if (window["JFixed"]) {
            var n = t();
            var i = new JFixed({
                carrier: e.carrier,
                holder: n.holder,
                position: n.pos
            });
            if (e.getItem("goTop")) {
                i.onScroll(function() {
                    SlideNav.goTop.toggle(e.getItem("goTop"))
                });
                SlideNav.goTop.toggle(e.getItem("goTop"))
            }
            i.fixed();
            if (i.position) {
                var r = null;
                $(window).bind("resize", function() {
                    if (r) return;
                    r = setTimeout(function() {
                        var e = t();
                        i.position(e.pos, e.holder);
                        i.__holdCheck();
                        clearTimeout(r);
                        r = null
                    }, 300)
                })
            }
        }
    };
    SlideNav.goTop = {
        view: {
            text: "Back to Top",
            cls: "f-go-top"
        },
        handle: function e(t) {
            $("html, body").animate({
                scrollTop: 0
            }, 200);
            t.preventDefault()
        },
        toggle: function e(t) {
            var n = document.body.scrollTop || document.documentElement.scrollTop || 0,
                i = document.documentElement.clientHeight,
                r = document.body.scrollHeight;
            if (Math.floor(r / i) >= 2 && n > i * .7) {
                $(t).css("visibility", "visible")
            } else {
                $(t).css("visibility", "hidden")
            }
        }
    };
    SlideNav.liveChat = {
        view: {
            text: "Live Chat",
            cls: "f-live-chat",
            link: location.protocol + "//membercenter.made-in-china.com/tm.do?xcase=foropentmwin",
            adsData: "st:35"
        },
        handle: function e(t) {
            window.open("//membercenter.made-in-china.com/tm.do?xcase=foropentmwin&referrer=" + encodeURIComponent(document.location.href), "kefu", "toolbar=no,location=no,directories=no,resizable=yes,status=yes,menubar=no,scrollbars=yes,width=860,height=600,left=0,top=0");
            t.preventDefault()
        }
    };
    SlideNav.app = {
        view: {
            text: $(".J-top-userType").val() == "1" || $(".J-top-userType").val() === "" ? '<div class="f-app-title">Download App!</div>\n                <div class="f-app-popup-text">Explore App Exclusive Discounts</div>\n                <div class="f-app-popup-left"></div>\n                <div class="f-app-popup-right">\n                    <a class="f-app-popup-google" href="//www.made-in-china.com/mobile/forbuyerapp-android?referrer=utm_source%3Dmic%26utm_medium%3Dgoogle_play%26utm_campaign%3D-1"></a>\n                    <a class="f-app-popup-store" href="//www.made-in-china.com/mobile/forbuyerapp-iphone?utm_source=mic&utm_medium=apple_store&utm_campaign=-1"></a>\n                </div>' : "Get Apps",
            cls: "f-app",
            adsData: "st:26"
        },
        init: function e() {
            $(function() {
                function e() {
                    if ($(".f-app + .popup-wrap").length) {
                        $(".f-app + .popup-wrap").css("top", "-5px");
                        $(".f-app + .popup-wrap .popup .popup-box").css("width", "auto").css("padding", "5px 10px");
                        return
                    }
                    setTimeout(function() {
                        e()
                    }, 1e3)
                }

                function t() {
                    if ($(".f-app + .popup-wrap").length) {
                        $(".f-app + .popup-wrap").click(function(e) {
                            e.stopPropagation()
                        });
                        return
                    }
                    setTimeout(function() {
                        t()
                    }, 1e3)
                }
                if ($(".J-top-userType").val() !== "1" && $(".J-top-userType").val() !== "") {
                    e()
                }
                t()
            })
        },
        handle: function e(t) {
            var n = $("input[name='lanCode']"),
                i = 0;
            if (n.length > 0) {
                i = parseInt(n.val())
            }
            if ($(".J-top-userType").val() === "1" || $(".J-top-userType").val() === "") {
                if (i == 0) {
                    window.open("//www.made-in-china.com/special/forbuyerapp/", "_self")
                }
            } else {
                window.open("http://service.made-in-china.com/developing/activities/4992.html", "_blank")
            }
            t.preventDefault()
        }
    };
    SlideNav.rfq = {
        view: {
            text: "Post Sourcing Request",
            cls: "f-rfq",
            adsData: "st:16"
        },
        init: function e() {
            if ($("#search-word-for-rfq").length > 0 && $("#search-word-for-rfq").val()) {
                SlideNav.rfq.view.link = "//purchase.made-in-china.com/trade-service/quotation-request.html?source=4&prodName=" + escape($("#search-word-for-rfq").val())
            } else if ($("#search-word-for-rfq").length > 0) {
                SlideNav.rfq.view.link = "//purchase.made-in-china.com/trade-service/quotation-request.html?source=4"
            }
        },
        isShow: function e() {
            if ($("#search-word-for-rfq").length > 0) {
                return true
            }
            return false
        }
    };
    SlideNav.tm = {
        view: {
            text: "Talk to Me",
            cls: "f-tm-on"
        },
        handle: null,
        isShow: function e() {
            return !!$("#J-SlideNav-TM").length
        },
        init: function e() {
            if ($("#J-SlideNav-TM").length > 0) {
                SlideNav.tm.view = {
                    text: "Talk to Me",
                    aliases: "tm",
                    cls: "f-tm-on",
                    dataId: $("#J-SlideNav-TM").attr("dataid"),
                    processor: "fixed2",
                    cid: $("#J-SlideNav-TM").attr("cid"),
                    template: '<li data-aliases="{aliases}"><a href="{link}" style="display:none;" dataId="{dataId}" processor="{processor}" cid="{cid}" ' + 'class="{cls}" rel="nofollow" target="_blank"></a><div class="popup-wrap">' + '<div class="popup"><div class="popup-box"><span>{text}</span><div class="arrow"><div class="arrow-inner"></div></div></div></div></div></li>'
                };
                SlideNav.tm.__waitTM(function() {
                    var n = new SlideNav;
                    var e = n.getItem("tm");
                    var t = function e(t) {
                        this.$elem = jQuery('<a rel="nofollow" class="f-tm-on" href="javascript:void(\'Chat Now!\')"></a>');
                        this.$elem.insertAfter(t)
                    };
                    t.prototype = {
                        online: function e(t) {
                            this.$elem.removeClass("f-tm-off").show();
                            this.$elem.parent().find("span").html(n.getLanguage().tm.onLine || "");
                            typeof t === "function" && t()
                        },
                        offline: function e(t) {
                            this.$elem.addClass("f-tm-off").show();
                            this.$elem.parent().find("span").html(n.getLanguage().tm.offLine || "");
                            typeof t === "function" && t()
                        }
                    };
                    executeTM({
                        params: {
                            holderSelector: e.find("a")
                        },
                        render: {
                            processors: {
                                fixed2: t
                            }
                        }
                    })
                })
            }
        },
        __waitTM: function e(t) {
            var n = null;
            if (!window["executeTM"] || (new SlideNav).getItem("tm").length === 0) {
                n = setInterval(function() {
                    if (window["executeTM"] && (new SlideNav).getItem("tm").length > 0) {
                        clearInterval(n);
                        t && t()
                    }
                }, 1e3)
            } else {
                t && t()
            }
        }
    };
    SlideNav.contactNow = {
        view: {
            text: "Contact Now",
            cls: "f-contact"
        },
        init: function e() {
            if ($("#J-SlideNav-Contact").length > 0 && $("#J-SlideNav-Contact").val()) {
                SlideNav.contactNow.view.link = $("#J-SlideNav-Contact").val()
            }
        },
        isShow: function e() {
            if ($("#J-SlideNav-Contact").length > 0 && $("#J-SlideNav-Contact").val()) {
                return true
            }
            return false
        }
    };
    SlideNav.contact = {
        view: {
            text: "Contact Buyer Service",
            cls: "f-contact-buyer-service",
            link: "//sourcing.made-in-china.com/trades-service-from/trds-contact/index/contact-us.html"
        },
        handle: null
    };
    SlideNav.survey = {
        view: {
            text: "Do Survey, Get Rewards",
            cls: "f-survey"
        },
        handle: null,
        init: function e() {
            var t = $("#J-SlideNav-Survey");
            var n = !!t.attr("isLogin"),
                i = !!t.attr("isAbroadIP"),
                r = t.attr("comId"),
                a = !!t.attr("isBuyer");
            if (typeof SlideNav.survey.view.link === "string") {
                SlideNav.survey.view.link = SlideNav.survey.view.link + r
            }
            if (SlideNav.survey.view.link instanceof Array) {
                if (!n && i) {
                    SlideNav.survey.view.link = SlideNav.survey.view.link[0] + r
                }
                if (n && a) {
                    SlideNav.survey.view.link = SlideNav.survey.view.link[1] + r
                }
            }
        },
        isShow: function e() {
            var t = $("#J-SlideNav-Survey");
            if (!t || !SlideNav.survey.view.link) {
                return false
            }
            var n = !!t.attr("isLogin"),
                i = !!t.attr("isAbroadIP"),
                r = t.attr("comId"),
                a = !!t.attr("isBuyer");
            if ((!n && i || n && a) && r) {
                return true
            }
            return false
        }
    };
    SlideNav.help = {
        view: {
            text: "Help",
            cls: "f-help"
        },
        handle: null
    };
    SlideNav.myAccount = {
        view: {
            text: "account",
            cls: "f-my-account",
            link: location.protocol + "//membercenter.made-in-china.com/recharge.do?xcase=account"
        },
        handle: null,
        isShow: function e() {
            if (location.pathname === "/recharge.do" && location.search.indexOf("?xcase=account") > -1) {
                return false
            }
            return true
        }
    }
}
if (document.domain != "made-in-china.com") {
    document.domain = "made-in-china.com"
}
var receiveHandle = function e(t) {
    var n = document.getElementById("popupIframe");
    if (n) {
        try {
            var i = t.data.split(/[\*x]/);
            i[0] = parseFloat(i[0]);
            i[1] = parseFloat(i[1]);
            if (!isNaN(i[0]) && typeof i[0] === "number") {
                n.width = i[0]
            }
            if (!isNaN(i[1]) && typeof i[1] === "number") {
                n.height = i[1]
            }
            setTimeout(function() {
                if (artDialog && artDialog.list["popupDialog"]) {
                    artDialog.list["popupDialog"]._reset()
                }
            }, 0)
        } catch (e) {}
    }
};
window.addEventListener ? window.addEventListener("message", receiveHandle, false) : window.attachEvent("onmessage", receiveHandle);

function showPoploginCommon(e, t, n, i) {
    var r = i;
    if (i.indexOf("?") > -1) {
        r += "&currentPage=" + encodeURIComponent(e)
    } else {
        r += "?currentPage=" + encodeURIComponent(e)
    }
    if (t) {
        r = r + "&" + t
    }
    if (n && n == "1") {
        r = r + "&isForSupplier=1"
    }
    var a = "<iframe id='popupIframe' frameborder='0' src='" + r + "' scrolling='no' width='430' height='350'></iframe>";
    if (!window.postMessage) {
        a = "<iframe id='popupIframe' frameborder='0' src='" + r + " width='430' height='350'></iframe>"
    }
    var o = new artDialog({
        id: "popupDialog",
        cancel: false,
        title: false,
        lock: true,
        opacity: .4,
        padding: "0",
        content: a
    });
    return o
}

function closePopupDialog() {
    setTimeout(function() {
        artDialog.get("popupDialog").close()
    }, 0)
}
var lan = $("#lan").val() || "en";

function showPoploginArtdialog(e, t, n) {
    return showPoploginCommon(e, t, n, "https://login.made-in-china.com/sign-in-popup/".concat(isNaN(+lan) && lan != "en" ? "?lan=".concat(lan) : ""))
}

function showPopRegisterArtdialog(e, t, n) {
    return showPoploginCommon(e, t, n, "https://login.made-in-china.com/join-popup/".concat(isNaN(+lan) && lan != "en" ? "?lan=".concat(lan) : ""))
}
$(function() {
    var e = function() {
        var i = document.createElement("div");
        var o = function e(t, n) {
            i.innerHTML = "";
            if (typeof n === "string") {
                i.innerHTML = n
            }
            n = i.firstChild.cloneNode(false);
            if (n && n.nodeType === 1) {
                t.parentNode && t.parentNode.insertBefore(n, t);
                n.appendChild(t)
            }
        };
        var e = function e(t, n) {
            if (!t || !n) {
                return
            }
            var i = typeof n === "function";
            t = "length" in t && typeof t !== "function" ? t : [t];
            var r;
            for (var a = 0; a < t.length; a++) {
                r = t[a];
                if (r) {
                    o(r, i ? n.call(r, a) : n)
                }
            }
        };
        return e
    }.call(this);
    if (document.getElementById("headRfqList")) {
        var t = '<div class="rfq-post-tip" style="display:none">' + '<div class="rfq-post-tipcont">' + "<h3>Easy Sourcing</h3>" + '<p class="rfq-sub-title">More Convenient, More Efficient</p>' + '<ul class="rfq-info-list">' + '<li><i class="micon">&#xe05a;</i>One request, multiple quotes</li>' + '<li><i class="micon">&#xe05a;</i>Verified suppliers matching</li>' + '<li><i class="micon">&#xe05a;</i>Quotes comparison and sample request</li>' + "</ul>" + '<div><a id="headRfqList-sub" href="//purchase.made-in-china.com/trade-service/quotation-request.html?source=2" class="btn btn-main">Post Your Request NOW</a></div>' + "</div>" + '<span class="arrow arrow-top"><span class="arrow arrow-in"></span></span>' + "</div>";
        if (!document.getElementById("rfqPostBox")) {
            e(document.getElementById("headRfqList"), "<div class='rfq-post-box' id='rfqPostBox'></div>");
            document.getElementById("rfqPostBox").innerHTML = document.getElementById("rfqPostBox").innerHTML + t;
            var n = document.createElement("link");
            n.type = "text/css";
            n.rel = "stylesheet";
            n.href = "https://www.micstatic.com/common/js/business/showRfqList/rfq-post-dropmenu_dff80909.css?t=20190626";
            document.getElementsByTagName("head")[0].appendChild(n)
        }
        document.getElementById("rfqPostBox").onmouseover = function() {
            $(".rfq-post-tip").show()
        };
        document.getElementById("rfqPostBox").onmouseout = function() {
            $(".rfq-post-tip").hide()
        }
    }
});
jQuery(function() {
    var o = function e(n) {
        window.MIC_SRVRNM = document.domain;
        var t = "https://login.made-in-china.com?xcase=logonPage4Showroom&logonInCode=17&newShow=1";
        var i = window.location.protocol + "//" + window.location.host + (document.getElementById("rootpath") == null ? "" : document.getElementById("rootpath").value) + "/head/transition.do";
        var r = new LoginLayer2({
            callback: function e(t) {
                r.unload();
                $.ajax({
                    url: (document.getElementById("rootpath") == null ? "" : document.getElementById("rootpath").value) + "/head/headInfo.do",
                    type: "POST",
                    error: function e() {},
                    dataType: "json",
                    success: function e(t) {
                        h(t[0].status, t[0].welcomeUserName, t[0].newMailNumber);
                        typeof n === "function" && n()
                    }
                })
            }
        });
        r.load(t, i)
    };
    var t = {
        add: "//www.made-in-china.com/addFav.do",
        del: "//www.made-in-china.com/addFav.do?xcase=calc"
    };
    var e = {
        added: "&#xe038;",
        unadd: "&#xe037;"
    };
    var i = {
        added: "icon-heart-f",
        unadd: "icon-heart"
    };
    var f = {
        manageFav: {
            en: "You can manage your favorites in account center.",
            es: "Puede administrar sus favoritos en el centro de cuentas.",
            pt: "Você pode gerenciar seus favoritos no centro de conta.",
            fr: "Vous pouvez gérer vos favoris dans le centre de compte.",
            ru: "Вы можете управлять своими избранными в центре аккаунта .",
            it: "Puoi gestire i tuoi preferiti nell'account center.",
            de: "Sie können Ihre Favoriten im Account Center verwalten.",
            nl: "U kunt uw favorieten beheren in het accountcentrum.",
            sa: "يمكنك إدارة المفضلة لديك في مركز الحساب.",
            kr: "계정 센터에서 즐겨 찾기를 관리 할 수 있습니다.",
            jp: "あなたはアカウントセンターであなたのお気に入りを管理することができます。",
            hi: "आप खाता केंद्र में अपने पसंदीदा प्रबंधित कर सकते हैं।.",
            th: "คุณสามารถจัดการรายการโปรดของคุณได้ในศูนย์บัญชี.",
            tr: "Sık kullanılanlarınızı hesap merkezinde yönetebilirsiniz.",
            vi: "Bạn có thể quản lý các mục yêu thích của mình trong trung tâm tài khoản.",
            id: "Anda dapat mengelola favorit Anda di pusat akun."
        },
        prodMax: {
            en: "Your favorite products have reached the maximum limit of 100.",
            es: "Sus productos favoritos han alcanzado el límite máximo de 100.",
            pt: "Seus produtos favoritos atingiram o limite máximo de 100.",
            fr: "Vos produits préférés ont atteint la limite maximale de 100.",
            ru: "Ваши любимые продукты достигли максимального предела 100.",
            it: "I tuoi prodotti preferiti hanno raggiunto il limite massimo di 100.",
            de: "Ihre Lieblingsprodukte haben die Höchstgrenze von 100 erreicht.",
            nl: "Je favoriete producten hebben de maximale limiet van 100 bereikt.",
            sa: "وصلت منتجاتك المفضلة إلى الحد الأقصى 100.",
            kr: "좋아하는 제품이 최대 한도 인 100에 도달했습니다.",
            jp: "あなたのお気に入りの商品は最大100個に達しました。",
            hi: "आपके पसंदीदा उत्पाद 100 की अधिकतम सीमा तक पहुँच गए हैं.",
            th: "ผลิตภัณฑ์โปรดของคุณถึงขีดจำกัดสูงสุดที่ 100 แล้ว.",
            tr: "Favori ürünleriniz maksimum 100 sınırına ulaştı.",
            vi: "Các sản phẩm yêu thích của bạn đã đạt đến giới hạn tối đa là 100.",
            id: "Produk favorit Anda telah mencapai batas maksimal 100."
        },
        comMax: {
            en: "Your favorite companies have reached the maximum limit of 100.",
            es: "Sus compañías favoritas han alcanzado el límite máximo de 100.",
            pt: "Suas empresas favoritas atingiram o limite máximo de 100.",
            fr: "Vos entreprises préférées ont atteint la limite maximale de 100.",
            ru: "Ваши любимые компании достигли максимального предела 100.",
            it: "Le tue aziende preferite hanno raggiunto il limite massimo di 100.",
            de: "Ihre Lieblingsfirmen haben die Höchstgrenze von 100 erreicht.",
            nl: "Je favoriete bedrijven hebben de maximale limiet van 100 bereikt.",
            sa: "بلغت الشركات المفضلة لديك الحد الأقصى وهو 100.",
            kr: "좋아하는 회사가 최대 한도 인 100에 도달했습니다.",
            jp: "あなたの大好きな会社は100の最大限界に達しました。",
            hi: "आपकी पसंदीदा कंपनियां 100 की अधिकतम सीमा तक पहुंच चुकी हैं।",
            th: "บริษัทโปรดของคุณถึงขีดจำกัดสูงสุดที่ 100 แล้ว.",
            tr: "Favori şirketleriniz maksimum 100 sınırına ulaştı.",
            vi: "Các công ty yêu thích của bạn đã đạt đến giới hạn tối đa là 100.",
            id: "Perusahaan favorit Anda telah mencapai batas maksimum 100."
        },
        oops: {
            en: "Oops, something went wrong. Please try again later.",
            es: "Huy, algo salió mal. Por favor, inténtelo de nuevo más tarde.",
            pt: "Oops,algo está errado.Por favor, tente novamente mais tarde.",
            fr: "Oups, quelque chose s'est mal passé. Veuillez réessayer plus tard.",
            ru: "К сожалению! Что-то пошло не так. Пожалуйста, попробуйте позже.",
            it: "Oops! Qualcosa è andato storto. Per favore riprova più tardi.",
            de: "Ups! Irgendwas lief schief. Bitte versuchen Sie es später noch einmal.",
            nl: "Oeps! Er is iets misgegaan. Probeer het later opnieuw.",
            sa: "تبا شيء ما حدث بشكل خاطئ. الرجاء معاودة المحاولة في وقت لاحق.",
            kr: "아차! 문제가 발생했습니다. 나중에 다시 시도하십시오.",
            jp: "おっと！何かが間違っていた。 後でもう一度やり直してください。",
            hi: "ओह, कुछ गलत हुआ.कृपया बाद में फिर से प्रयास करें.",
            th: "ขออภัยเกิดข้อผิดพลาดบางประการโปรดลองอีกครั้งในภายหลัง.",
            tr: "Bir sorun oluştu.Lütfen daha sonra tekrar deneyin.",
            vi: "Rất tiếc, có gì đó không ổn.Vui lòng thử lại sau.",
            id: "UPS, terjadi kesalahan.Silakan coba lagi nanti."
        }
    };
    var d = "en";
    if (typeof i18n !== "undefined") {
        d = i18n.currLocal
    }
    if (typeof ABOUT_LANG !== "undefined") {
        d = ABOUT_LANG.lang
    }
    var s = function e(t, n, i) {
        var r = t[0].getBoundingClientRect();
        var a = i || "succ";
        var o = "";
        var s = f.manageFav[d];
        if (a === "info") {
            o = "add-fav-tip-info";
            if (n === "prod") {
                s = f.prodMax[d]
            } else {
                s = f.comMax[d]
            }
        } else if (a === "error") {
            o = "add-fav-tip-error";
            s = f.oops[d]
        }
        var l = $('<div class="add-fav-tip ' + o + '">' + s + "</div>");
        l.appendTo("body");
        var c = r.top + (window.scrollTop || document.documentElement.scrollTop || document.body.scrollTop || 0) - l.height() - 15;
        var u = r.left + (window.scrollLeft || document.documentElement.scrollLeft || document.body.scrollLeft || 0);
        l.css({
            top: c,
            left: u
        });
        setTimeout(function() {
            var e = -Math.abs(t.width() - l.width()) / 2;
            if (e + u < 0) {
                e = -u
            }
            l.css({
                top: r.top + (window.scrollTop || document.documentElement.scrollTop || document.body.scrollTop || 0) - l.height() - 15,
                marginLeft: e
            });
            l.addClass("add-fav-tip-am");
            setTimeout(function() {
                l.remove()
            }, 3e3)
        }, 0)
    };
    var n = function e(n) {
        $.ajax({
            url: t.add,
            type: "POST",
            dataType: "jsonp",
            jsonp: "callBackParam",
            data: {
                userName: n.attr("cz-username"),
                sourceId: n.attr("cz-sourceid"),
                sourceType: n.attr("cz-sourcetype")
            },
            timeout: 60 * 1e3,
            success: function e(t) {
                if (!t) {
                    return
                }
                switch (t.execFlag) {
                    case "00":
                        {
                            o(function() {
                                n.click()
                            })
                        };
                        break;
                    case "01":
                        {
                            s(n, null, "error")
                        };
                        break;
                    case "02":
                        {
                            s(n, n.attr("cz-sourcetype"), "info")
                        };
                        break;
                    case "03":
                        {
                            n.addClass("J-added already-fav");$(".J-fav-icon", n).removeClass(i.unadd).addClass(i.added);s(n)
                        };
                        break;
                    default:
                        ;
                }
            },
            error: function e() {}
        })
    };
    var r = function e(n) {
        $.ajax({
            url: t.del,
            type: "POST",
            dataType: "jsonp",
            jsonp: "callBackParam",
            data: {
                userName: n.attr("cz-username"),
                sourceId: n.attr("cz-sourceid"),
                sourceType: n.attr("cz-sourcetype")
            },
            timeout: 60 * 1e3,
            success: function e(t) {
                if (!t) {
                    return
                }
                switch (t.execFlag) {
                    case "00":
                        {
                            o(function() {
                                n.click()
                            })
                        };
                        break;
                    case "01":
                        {
                            s(n, null, "error")
                        };
                        break;
                    case "02":
                    case "03":
                        {
                            n.removeClass("J-added already-fav");$(".J-fav-icon", n).removeClass(i.added).addClass(i.unadd)
                        };
                        break;
                    default:
                        ;
                }
            },
            error: function e() {}
        })
    };
    $(document).on("click", ".J-add2Fav", function(e) {
        e.preventDefault();
        var t = $(e.target);
        if (!t.is(".J-add2Fav")) {
            t = t.parents(".J-add2Fav:first")
        }
        if ($(e.currentTarget).is(".J-added")) {
            r(t)
        } else {
            n(t)
        }
    });
    $(document).on("click", ".J-company-sign", function(e) {
        e.preventDefault();
        o(function() {
            window.location.reload()
        })
    });
    var l = false;
    $("#add2Fav2").click(function(e) {
        e.preventDefault();
        if (l) {
            return false
        }
        e.preventDefault();
        var t = $("#add2Fav2").attr("cz-username");
        var n = $("#add2Fav2").attr("cz-sourceid");
        var i = $("#add2Fav2").attr("cz-sourcetype");
        var r = "//www.made-in-china.com";
        var a = "/addFav.do?userName=" + t + "&sourceId=" + n + "&sourceType=" + i;
        $.ajax({
            url: r + a,
            type: "post",
            dataType: "jsonp",
            jsonp: "callBackParam",
            success: function e(t) {
                if (!t) {
                    return
                }
                if (t.execFlag == "00") {
                    o(function() {
                        l = true;
                        $.ajax({
                            url: r + a,
                            dataType: "jsonp",
                            jsonp: "callBackParam",
                            success: function e(t) {
                                if (!t) {
                                    return
                                } else if (t.execFlag == "01") {
                                    s($("#add2Fav2"), null, "error")
                                } else if (t.execFlag == "02") {
                                    s($("#add2Fav2"), $("#add2Fav2").attr("cz-sourcetype"), "info")
                                } else if (t.execFlag == "03") {
                                    $("div.com-fav").find("a[id=add2Fav2]").html('<span class="sh-ico sh-ico-fav com-fav"></span>Already in Company Favorites').attr("target", "_blank").attr("href", "//membercenter.made-in-china.com/micfavorite.do?xcase=getCompanyList");
                                    $("div.com-fav").find("#add2Pic").html('<img src="https://img.made-in-china.com/img/athena/already-fav.png" alt="Add to Company Favorites">').attr("href", "//membercenter.made-in-china.com/micfavorite.do?xcase=getCompanyList").attr("target", "_blank");
                                    $("#add2Fav2").unbind();
                                    $("#add2Pic").unbind()
                                }
                            }
                        })
                    })
                } else if (t.execFlag == "01") {
                    s($("#add2Fav2"), null, "error")
                } else if (t.execFlag == "02") {
                    s($("#add2Fav2"), $("#add2Fav2").attr("cz-sourcetype"), "info")
                } else if (t.execFlag == "03") {
                    $("div.com-fav").find("a[id=add2Fav2]").html('<span class="sh-ico sh-ico-check"></span>Already in Company Favorites').attr("target", "_blank").attr("href", "//membercenter.made-in-china.com/micfavorite.do?xcase=getCompanyList");
                    $("div.com-fav").find("#add2Pic").html('<img src="https://img.made-in-china.com/img/athena/already-fav.png" alt="Add to Company Favorites">').attr("href", "//membercenter.made-in-china.com/micfavorite.do?xcase=getCompanyList").attr("target", "_blank");
                    l = true;
                    $("#add2Fav2").unbind();
                    $("#add2Pic").unbind()
                }
            },
            error: function e() {}
        })
    });
    $("#add2Pic").click(function(e) {
        e.preventDefault();
        if (l) {
            return false
        }
        var t = $("#add2Pic").attr("cz-username");
        var n = $("#add2Pic").attr("cz-sourceid");
        var i = $("#add2Pic").attr("cz-sourcetype");
        var r = "//www.made-in-china.com";
        var a = "/addFav.do?userName=" + t + "&sourceId=" + n + "&sourceType=" + i;
        $.ajax({
            url: r + a,
            type: "post",
            dataType: "jsonp",
            jsonp: "callBackParam",
            success: function e(t) {
                if (!t) {
                    return
                }
                if (t.execFlag == "00") {
                    o(function() {
                        l = true;
                        $.ajax({
                            url: r + a,
                            dataType: "jsonp",
                            jsonp: "callBackParam",
                            success: function e(t) {
                                if (!t) {
                                    return
                                } else if (t.execFlag == "01") {
                                    s($("#add2Pic"), null, "error")
                                } else if (t.execFlag == "02") {
                                    s($("#add2Pic"), $("#add2Pic").attr("cz-sourcetype"), "info")
                                } else if (t.execFlag == "03") {
                                    $("div.com-fav").find("a[id=add2Fav2]").html('<span class="sh-ico sh-ico-fav com-fav"></span>Already in Company Favorites').attr("target", "_blank").attr("href", "//membercenter.made-in-china.com/micfavorite.do?xcase=getCompanyList");
                                    $("div.com-fav").find("#add2Pic").html('<img src="https://img.made-in-china.com/img/athena/already-fav.png" alt="Add to Company Favorites">').attr("href", "//membercenter.made-in-china.com/micfavorite.do?xcase=getCompanyList").attr("target", "_blank");
                                    $("#add2Fav2").unbind();
                                    $("#add2Pic").unbind()
                                }
                            }
                        })
                    })
                } else if (t.execFlag == "01") {
                    s($("#add2Pic"), null, "error")
                } else if (t.execFlag == "02") {
                    s($("#add2Pic"), $("#add2Pic").attr("cz-sourcetype"), "info")
                } else if (t.execFlag == "03") {
                    $("div.com-fav").find("a[id=add2Fav2]").html('<span class="sh-ico sh-ico-fav com-fav"></span>Already in Company Favorites').attr("target", "_blank").attr("href", "//membercenter.made-in-china.com/micfavorite.do?xcase=getCompanyList");
                    $("div.com-fav").find("#add2Pic").html('<img src="//img.made-in-china.com/img/athena/already-fav.png" alt="Add to Company Favorites">').attr("href", "//membercenter.made-in-china.com/micfavorite.do?xcase=getCompanyList").attr("target", "_blank");
                    l = true;
                    $("#add2Fav2").unbind();
                    $("#add2Pic").unbind()
                }
            },
            error: function e() {}
        })
    });
    window.buyReport = function(r, a, o) {
        document.domain = "made-in-china.com";
        var s = "//www.made-in-china.com/reviewAR.do?xcase=reviewARForFree";
        $.ajax({
            url: (document.getElementById("rootpath") == null ? "" : document.getElementById("rootpath").value) + "/head/headInfo.do",
            type: "post",
            dataType: "json",
            success: function e(t) {
                var n = s + "&comId=" + r + "&reportId=" + a;
                if (t[0].status == "1") {
                    window.location.href = s + "&comId=" + r + "&reportId=" + a
                } else {
                    var i = function e() {
                        var t = '<iframe id="ifr" src="//membercenter.made-in-china.com/account.do?xcase=reportLogin&nextPage=' + encodeURIComponent(n) + "&comId=" + r + "&reportId=" + a + "&userName=" + o + '" frameborder="0" allowTransparency="true" style="margin:0 auto;padding:0; border:0; width:650px;overflow:static;height:610px;z-index:999;position:absolute;z-index:9999"></iframe>';
                        jQuery("body").append(t);
                        jQuery("#ifr").css("top", jQuery(document).scrollTop() + jQuery(window).height() / 2 - 100).css("left", jQuery(window).width() / 2 - 300)
                    };
                    i();
                    $("body").mask && $("body").mask("", "", "0.4");
                    $(".maskdivgen").bgiframe && $(".maskdivgen").bgiframe();
                    return false
                }
            }
        })
    };
    window.viweReport = function(i, r, a) {
        document.domain = "made-in-china.com";
        var o = "//www.made-in-china.com/auditReport.do?xcase=viewReportDetail";
        $.ajax({
            url: (document.getElementById("rootpath") == null ? "" : document.getElementById("rootpath").value) + "/head/headInfo.do",
            type: "post",
            async: false,
            dataType: "json",
            success: function e(t) {
                var n = o + "&comId=" + i + "&recId=" + r + "&org=" + a;
                if (t[0].status == "1") {
                    window.open("/readFreeTransition?" + "comId=" + i + "&recId=" + r + "&org=" + a)
                } else {
                    showPoploginArtdialog(window.location.href, "viewReportFree=0&fromAthena=true&arReportId=" + r);
                    return false
                }
            }
        })
    };

    function a() {
        new artDialog({
            id: "rfqDialog",
            lock: true,
            opacity: .4,
            title: "",
            width: 300,
            height: 130,
            content: "Only buyer users can read the report!",
            close: function e() {
                window.location.reload()
            }
        })
    }

    function c() {
        new artDialog({
            id: "rfqDialog",
            lock: true,
            opacity: .4,
            title: "",
            width: 400,
            height: 130,
            content: 'You\'ve already read 5 reports today. If you want to read more, please come tomorrow or<a href="mailto:luyuan@made-in-china.com"> contact us</a>.',
            close: function e() {
                window.location.reload()
            }
        })
    }

    function u() {
        new artDialog({
            id: "needEmailCheclDialog",
            lock: true,
            opacity: .4,
            title: "",
            width: 400,
            height: 130,
            content: 'Verify your email address, and then you can read the report for free!<br /><a target="_blank" href="//membercenter.made-in-china.com/company.do?xcase=inviteEmailVerification">Verify Now</a>',
            ok: function e() {
                window.open("//membercenter.made-in-china.com/company.do?xcase=inviteEmailVerification");
                artDialog.get("needEmailCheclDialog").close()
            },
            okVal: "Verify Now",
            close: function e() {
                window.location.reload()
            }
        })
    }

    function h(e, t, n) {
        var i = encodeURIComponent(window.location.href);
        var r = $(".state").eq(0);
        var a = e[3] || 0;
        var o = '<li class="user" id="welUser">Welcome <a href="//membercenter.made-in-china.com"><strong>' + (t || "") + "</strong></a>!</li>";
        var s = '<li class="message menu-item"><a href="//membercenter.made-in-china.com/messagecenter.do?xcase=inbox" alt="' + n + ' New Message(s)" title="' + n + ' New Message(s)" class="red">' + '<i class="icon">&#xf0e0;</i>' + n + "</a></li>";
        var l = '<li class="sign"><a rel="nofollow" href="https://login.made-in-china.com/logon.do?xcase=doLogout&baseNextPage=' + i + '">Sign Out</a></li>';
        if (!e) {
            var c = '<li>New user? <a rel="nofollow" href="//membercenter.made-in-china.com/join/">Join Free</a>&nbsp;&nbsp;&nbsp;&nbsp;' + '<a rel="nofollow" href="javascript:test();">' + "Sign In</a></li>";
            r.empty();
            r.html(c);
            return
        }
        r.empty();
        r.html(o + s + l)
    }
    $(".J-add2Rep").click(function(e) {
        e.preventDefault();
        var n = "//www.made-in-china.com";
        var t = n + "/ajaxfunction.do?xcase=getShoppingCart&callback=?";
        var i = $(this).attr("cz-reportId");
        var r = $(this);
        $.ajax({
            url: t,
            type: "post",
            dataType: "json",
            success: function e(t) {
                if (t.number < 100) {
                    $.ajax({
                        url: n + "/reportcart.do?xcase=add&callback=?",
                        type: "post",
                        dataType: "json",
                        data: {
                            reportId: i
                        },
                        success: function e(t) {
                            r.html('<span class="sh-ico sh-ico-check"></span>Edit Report Cart').attr("href", "//www.made-in-china.com/report-cart/")
                        }
                    })
                } else {
                    window.open(n + "/reportcart.do?xcase=list&over=1", "")
                }
            }
        });
        r.unbind("click", arguments.callee)
    });
    $(".ar-preview .title").click(function() {
        $(this).siblings(".ar-preview-cnt").toggleClass("show");
        $(this).find(".sh-ico").toggleClass("sh-ico-less")
    });
    $(".sample-cnt-link").hover(function() {
        $(this).parents(".ar-sample-act").addClass("on-top").end().siblings(".sample-cnt").show()
    }, function() {
        $(this).parents(".ar-sample-act").removeClass("on-top").end().siblings(".sample-cnt").hide()
    })
});
if (!window["JS_lazyload_loaded_hook"]) {
    window["JS_lazyload_loaded_hook"] = true;
    (function() {
        var a = jQuery.event.special,
            n = "D" + +new Date,
            i = "D" + (+new Date + 1);
        a.scrollstart = {
            setup: function e() {
                var r, t = function e(t) {
                    var n = this,
                        i = arguments;
                    if (r) {
                        clearTimeout(r)
                    } else {
                        t.type = "scrollstart";
                        jQuery.event.handle.apply(n, i)
                    }
                    r = setTimeout(function() {
                        r = null
                    }, a.scrollstop.latency)
                };
                jQuery(this).bind("scroll", t).data(n, t)
            },
            teardown: function e() {
                jQuery(this).unbind("scroll", jQuery(this).data(n))
            }
        };
        a.scrollstop = {
            latency: 300,
            setup: function e() {
                var r, t = function e(t) {
                    var n = this,
                        i = arguments;
                    if (r) {
                        clearTimeout(r)
                    }
                    r = setTimeout(function() {
                        r = null;
                        t.type = "scrollstop";
                        jQuery.event.handle.apply(n, i)
                    }, a.scrollstop.latency)
                };
                jQuery(this).bind("scroll", t).data(i, t)
            },
            teardown: function e() {
                jQuery(this).unbind("scroll", jQuery(this).data(i))
            }
        }
    })();
    (function(a) {
        a.fn.lazyload = function(e) {
            var i = {
                ignoreRight: false,
                threshold: 0,
                failure_limit: 0,
                event: "scroll",
                effect: "show",
                container: window,
                skip_invisible: true,
                no_horizontal_limit: false
            };
            if (e) {
                if (undefined !== e.failurelimit) {
                    e.failure_limit = e.failurelimit;
                    delete e.failurelimit
                }
                a.extend(i, e)
            }
            var r = this;
            if (0 == i.event.indexOf("scroll")) a(i.container).bind(i.event, function(e) {
                var t = 0;
                r.each(function() {
                    if (i.skip_invisible && !a(this).is(":visible")) return;
                    if (a.abovethetop(this, i) || !i.no_horizontal_limit && a.leftofbegin(this, i));
                    else if (!a.belowthefold(this, i) && !(!i.no_horizontal_limit && a.rightoffold(this, i))) a(this).trigger("appear");
                    else if (++t > i.failure_limit) return false
                });
                var n = a.grep(r, function(e) {
                    return !e.loaded
                });
                r = a(n)
            });
            this.each(function() {
                var t = this;
                t.loaded = false;
                a(t).one("appear", function() {
                    if (!this.loaded) a("<img />").bind("load", function() {
                        a(t).hide().attr("src", a(t).attr("data-original"))[i.effect](i.effectspeed);
                        t.loaded = true
                    }).attr("src", a(t).attr("data-original"))
                });
                if (0 != i.event.indexOf("scroll")) a(t).bind(i.event, function(e) {
                    if (!t.loaded) a(t).trigger("appear")
                })
            });
            a(i.container).trigger(i.event);
            return this
        };
        a.belowthefold = function(e, t) {
            if (void 0 === t.container || t.container === window) var n = a(window).height() + a(window).scrollTop();
            else var n = a(t.container).offset().top + a(t.container).height();
            return n <= a(e).offset().top - t.threshold
        };
        a.rightoffold = function(e, t) {
            if (t.ignoreRight) {
                return false
            }
            if (void 0 === t.container || t.container === window) var n = a(window).width() + a(window).scrollLeft();
            else var n = a(t.container).offset().left + a(t.container).width();
            return n <= a(e).offset().left - t.threshold
        };
        a.abovethetop = function(e, t) {
            if (void 0 === t.container || t.container === window) var n = a(window).scrollTop();
            else var n = a(t.container).offset().top;
            return n >= a(e).offset().top + t.threshold + a(e).height()
        };
        a.leftofbegin = function(e, t) {
            if (void 0 === t.container || t.container === window) var n = a(window).scrollLeft();
            else var n = a(t.container).offset().left;
            return n >= a(e).offset().left + t.threshold + a(e).width()
        };
        a.extend(a.expr[":"], {
            "below-the-fold": function e(t) {
                return a.belowthefold(t, {
                    threshold: 0,
                    container: window
                })
            },
            "above-the-fold": function e(t) {
                return !a.belowthefold(t, {
                    threshold: 0,
                    container: window
                })
            },
            "right-of-fold": function e(t) {
                return a.rightoffold(t, {
                    threshold: 0,
                    container: window
                })
            },
            "left-of-fold": function e(t) {
                return !a.rightoffold(t, {
                    threshold: 0,
                    container: window
                })
            }
        })
    })(jQuery)
}
$(function() {
    $("img[data-original]").lazyload({
        threshold: 250,
        failurelimit: 100
    })
});
$(window).on("pageshow", function() {
    $("img[data-original]").lazyload({
        threshold: 250,
        failurelimit: 100
    })
});
var statMonitor = function(e) {
    var t = function e(t, n, i, r, a) {};
    t.send = function() {};
    return t
}.call(this, window.jQuery);
var statMonitor = function(e) {
    var t = function e(t, n, i, r, a) {};
    t.send = function() {};
    return t
}.call(this, window.jQuery);
void
function(i, r) {
    var a = i(".J-data-uid").val();
    var o = i(".J-data-pid").val();
    var s = i(".J-data-layout").val() || 3;
    var l = i(".J-data-stat").map(function(e, t) {
        var n = t.getAttribute("cz-id");
        var i = parseInt(t.getAttribute("cz-type")) || 0;
        var r = parseInt(t.getAttribute("cz-from")) || 0;
        return {
            id: n,
            t: i,
            f: r
        }
    }).toArray();
    statMonitor(".J-data-stat", "//stat.made-in-china.com/event/rec.gif", function(e) {
        var t = {};
        t.pdid = o;
        t.list = window.asyncRenderListData || l;
        if (s) {
            t.layout = s
        }
        t.action = e.getAttribute("cz-id");
        t.pos = i(e).parent().find(".J-data-stat").index(e);
        t.times = e.getAttribute("cz-times") || 0;
        t.random = e.getAttribute("cz-random") || 0;
        var n = {
            type: 11,
            data: encodeURIComponent(r.stringify(t)),
            st: (new Date).valueOf()
        };
        if (a) {
            n.userid = a
        }
        return n
    }, true, 300)
}.call(this, window.jQuery, window.JSON);
void
function() {
    statMonitor(".J-data-refresh-times", "//stat.made-in-china.com/event/rec.gif", function(e) {
        return {
            type: 9,
            times: $(e).attr("cz-times")
        }
    })
}.call(this);
void
function(n, e) {
    if (!n || !e || !n(".J-mlan-stat").length || !n(".J-mlan-stat-data").length) {
        return
    }
    var i = e.parse(n.trim(n(".J-mlan-stat-data").html()));
    statMonitor(".J-mlan-stat", "//stat.made-in-china.com/event/mlan.gif", function(e, t) {
        return n.extend(true, {}, i, {
            mlan: encodeURIComponent(e.title)
        })
    }, false, 300)
}.call(this, window.jQuery, window.JSON);
void
function() {
    if (/^\/solutions/i.test(location.pathname) && $(".J-data-referrer").length) {
        statMonitor(".J-data-referrer", "//stat.made-in-china.com/event/agent.gif", function(e, t) {
            return {
                t: (new Date).valueOf()
            }
        }, true, 300)
    }
}.call(this);
void
function() {
    if ($(".page-product-details .J-showPicGifs").length) {
        statMonitor(".J-showPicGifs", "//stat.made-in-china.com/event/gif.gif?type=0&prodId=" + $("#prodId"), function(e, t) {
            return {
                t: (new Date).valueOf()
            }
        }, true, 300)
    }
}.call(this);
void
function() {
    if (/^\/productimage/i.test(location.pathname) && $(".J-picGifBox").length) {
        statMonitor(".J-picGifBox", "//stat.made-in-china.com/event/gif.gif?type=1&prodId=" + $("#prodId"), function(e, t) {
            return {
                t: (new Date).valueOf()
            }
        }, true, 300)
    }
}.call(this);
void
function() {
    if ($(".J-get-driving-derection").length) {
        statMonitor(".J-get-driving-derection", "//stat.made-in-china.com/event/rec.gif", function(e, t) {
            var n = e.getAttribute("ads-data");
            var i = {};
            var r = /([^&=]+)=([^&=]*)/g;
            var a;
            r.exec("");
            while (a = r.exec(n)) {
                i[a[1]] = a[2]
            }
            i.t = (new Date).valueOf();
            return i
        }, true, 300)
    }
}.call(this);
window.jQuery && function(p) {
    var v = {
        config: {
            cover_baseFloatZIndex: 888,
            cover_overlay: !0
        },
        setConfig: function e(t) {
            v.config = p.extend(!0, v.config, t || {})
        }
    };
    v.tools = function() {
        return {
            env: function() {
                var e = navigator.userAgent.toLowerCase();
                return {
                    ie: !1,
                    ie6: !1,
                    ie10: !1,
                    mac: -1 < e.indexOf("macintosh"),
                    webkit: -1 < e.indexOf(" applewebkit/"),
                    isCustomDomain: function e() {
                        if (!this.ie) return !1;
                        var t = document.domain,
                            n = window.location.hostname;
                        return t != n && t != "[" + n + "]"
                    }
                }
            }(),
            genKey: function e() {
                return Array.prototype.slice.call(arguments).join("-")
            },
            setOpacity: function e(t, n) {
                this.env.ie && !this.env.ie10 ? (n = Math.round(100 * n), p(t).css("filter", 100 <= n ? "" : "progid:DXImageTransform.Microsoft.Alpha(opacity=" + n + ")")) : p(t).css("opacity", n)
            },
            getViewPaneSize: function e() {
                var t = "CSS1Compat" == document.compatMode;
                return {
                    width: (t ? document.documentElement.clientWidth : document.body.clientWidth) || 0,
                    height: (t ? document.documentElement.clientHeight : document.body.clientHeight) || 0
                }
            },
            getScrollPosition: function e() {
                var t = window;
                if ("pageXOffset" in t) return {
                    x: t.pageXOffset || 0,
                    y: t.pageYOffset || 0
                };
                t = t.document;
                return {
                    x: t.documentElement.scrollLeft || t.body.scrollLeft || 0,
                    y: t.documentElement.scrollTop || t.body.scrollTop || 0
                }
            },
            getSize: function e(t) {
                return {
                    width: t.offsetWidth || 0,
                    height: t.offsetHeight || 0
                }
            }
        }
    }();
    v.cover = function() {
        function i(i) {
            var e = f.options,
                t = p(window);
            if (i) "function" == typeof i[i.data("options").showAnim] ? i[i.data("options").showAnim]() : i.show();
            else {
                var n = ['<div tabIndex="-1" style="position: ', v.tools.env.ie6 ? "absolute" : "fixed", "; z-index: ", u + 1, "; top: 0px; left: 0px;transform: translateZ(10px); ", v.tools.env.ie6 ? "" : "background-color: " + e.bgColor, '" style="display:none" class="', e.coverClass, '">'];
                v.tools.env.ie6 && v.bgIframe && n.push(v.bgIframe.html(e.bgColor));
                n.push("</div>");
                i = p(n.join(""));
                v.tools.setOpacity(i, void 0 != e.bgOpacity ? e.bgOpacity : .5);
                i.bind("keydown", function() {
                    return !1
                });
                i.bind("keypress", function() {
                    return !1
                });
                i.bind("keyup", function() {
                    return !1
                });
                p("body").append(i);
                i.data("options", e);
                "function" == typeof i[e.showAnim] ? i[e.showAnim]() : i.show();
                s[f.coverKey] = i;
                s[f.coverKey].used = !1
            }
            l = i;
            var r = i.data("options").rangeId,
                e = function e() {
                    var t = v.tools.getViewPaneSize();
                    if (r && 0 < p("#" + r).length && p("#" + r).attr("id") == r) {
                        var t = v.tools.getSize(p("#" + r).get(0)),
                            e = p("#" + r).offset().left,
                            n = p("#" + r).offset().top;
                        i.css("position", "absolute");
                        i.css({
                            left: e + "px",
                            top: n + "px"
                        })
                    }
                    i.css({
                        width: t.width + "px",
                        height: t.height + "px"
                    })
                },
                a = function e() {
                    var t = v.tools.getScrollPosition();
                    r && 0 < p("#" + r).length && p("#" + r).attr("id") == r && (t = {
                        x: p("#" + r).offset().left,
                        y: p("#" + r).offset().top
                    });
                    i.css({
                        left: t.x + "px",
                        top: t.y + "px"
                    })
                };
            c = e;
            t.bind("resize", e);
            e();
            v.tools.env.mac && v.tools.env.webkit || i.focus();
            if (v.tools.env.ie6) {
                var o = function e() {
                    a();
                    arguments.callee.prevScrollHandler.apply(this, arguments)
                };
                t.get(0).setTimeout(function() {
                    o.prevScrollHandler = window.onscroll || function() {};
                    window.onscroll = o
                }, 0);
                a()
            }
        }

        function r(e) {
            var t = e ? e : t;
            t && (e = p(window), t.hide(), e.unbind("resize", c), v.tools.env.ie6 && e.get(0).setTimeout(function() {
                window.onscroll = window.onscroll && window.onscroll.prevScrollHandler || null
            }, 0), c = null)
        }
        var s = {},
            a = [],
            l, c, u = null,
            f = {};
        return {
            show: function e(t) {
                v.tools.env.ie6 && v.setConfig({
                    cover_overlay: !1
                });
                f.options = p.extend(!0, {
                    rangeId: "",
                    bgColor: "#000",
                    bgOpacity: .65,
                    baseFloatZIndex: v.config.cover_baseFloatZIndex,
                    showAnim: "fadeIn",
                    dialog: null,
                    overlay: v.config.cover_overlay,
                    coverClass: ""
                }, t || {});
                f.coverKey = v.tools.genKey(f.options.bgColor, f.options.bgOpacity, f.options.baseFloatZIndex, f.options.rangeId);
                t = s[f.coverKey];
                if (null === u || 0 == a.length) u = v.config.cover_baseFloatZIndex;
                if (!f.options.overlay) {
                    var n = 0 < a.length ? a[a.length - 1] : null;
                    n && n.base && n.key != f.coverKey && r(s[n.key])
                }
                i(t);
                s[f.coverKey].used ? (t.css("z-index", u + 1), a.push({
                    key: f.coverKey
                })) : (s[f.coverKey].used = !0, a.push({
                    key: f.coverKey,
                    base: !0
                }));
                p(f.options.dialog).css("z-index", u += 10)
            },
            hide: function e() {
                if (0 != a.length) {
                    var t = a[a.length - 1],
                        n = 1 < a.length ? a[a.length - 2] : null;
                    n && t.key == n.key || r(l);
                    u -= 10;
                    n && (i(s[n.key]), s[n.key].css("z-index", u - 9));
                    t.base && (s[t.key].used = !1);
                    a.pop()
                }
            },
            remove: function e() {
                for (var t in s) s[t].remove();
                s = {};
                a = [];
                u = null
            },
            getCover: function e() {
                return l
            }
        }
    }();
    v.drag = function() {
        return function(e) {
            function n(e) {
                var t = v.tools.getSize(p(c).get(0)),
                    n = v.tools.getViewPaneSize(),
                    i = e.screenX,
                    r = e.screenY,
                    a = i - u.x,
                    o = r - u.y;
                u = {
                    x: i,
                    y: r
                };
                f.x += a;
                f.y += o;
                i = f.x + h[3] < d ? -h[3] : f.x - h[1] > n.width - t.width - d ? n.width - t.width + (l.rtl ? h[1] : 0) : f.x;
                t = f.y + h[0] < d ? -h[0] : f.y - h[2] > n.height - t.height - d ? n.height - t.height + h[2] : f.y;
                n = "fixed" == p(c).css("position");
                r = p(c).css("marginTop");
                a = p(c).css("marginLeft");
                s._.position = {
                    x: i,
                    y: t
                };
                0 != parseFloat(r) && "auto" != r && (t -= parseFloat(r));
                0 != parseFloat(a) && "auto" != a && (i -= parseFloat(a));
                n || (n = v.tools.getScrollPosition(), i += n.x, t += n.y);
                l.rtl && (n = v.tools.getSize(p(c).get(0)), i = v.tools.getViewPaneSize().width - n.width - i);
                t = {
                    top: (0 < t ? t : 0) + "px"
                };
                t[l.rtl ? "right" : "left"] = (0 < i ? i : 0) + "px";
                p(c).css(t);
                s._.moved = 1;
                e.preventDefault()
            }

            function i(e) {
                p(document).unbind("mousemove", n);
                p(document).unbind("mouseup", i);
                v.tools.env.ie6 && v.cover && 0 != v.cover.getCover().find(".bgiframe:visible").length && (e = v.cover.getCover().find(".bgiframe:visible").get(0).contentWindow.document, p(e).unbind("mousemove", n), p(e).unbind("mouseup", i))
            }

            function r() {
                var e = v.tools.getScrollPosition();
                s._.position = {
                    x: p(c).offset().left - e.x,
                    y: p(c).offset().top - e.y
                }
            }
            var s = this,
                l = s._ = p.extend(!0, {
                    dialog: null,
                    title: null,
                    margins: null,
                    magnetDistance: null,
                    rtl: !1
                }, e || {});
            if (l.dialog && l.title) {
                var c = l.dialog;
                e = l.title;
                var u = null,
                    f = null,
                    d = l.magnetDistance,
                    h = l.margins || [0, 0, 0, 0];
                null === d && (d = 20);
                p(e).bind("mousedown", function(e) {
                    r();
                    u = {
                        x: e.screenX,
                        y: e.screenY
                    };
                    p(document).bind("mousemove", n);
                    p(document).bind("mouseup", i);
                    f = s._.position || {};
                    if (v.tools.env.ie6 && v.cover && 0 != v.cover.getCover().find(".bgiframe:visible").length) {
                        var t = v.cover.getCover().find(".bgiframe:visible").get(0).contentWindow.document;
                        p(t).bind("mousemove", n);
                        p(t).bind("mouseup", i)
                    }
                    e.preventDefault()
                });
                p(e).bind("mouseover", function() {
                    p(this).css("cursor", "move")
                });
                p(e).bind("mouseout", function() {
                    p(this).css("cursor", "default")
                });
                r()
            }
        }
    }();
    v.bgIframe = function() {
        var n = function e(t) {
                if (!v.tools.env.ie6) return "";
                var n = [];
                t = "<html><body style=\\'background-color:" + t + ";\\'></body></html>";
                n.push('<iframe class="bgiframe" hidefocus="true" frameborder="0" tabindex="-1" style="z-index:-1" src="javascript:');
                n.push("void((function(){document.open();document.write( '" + t + "' );document.close();})())");
                n.push('" style="position:absolute;left:0;top:0;width:100%;height: 100%;progid:DXImageTransform.Microsoft.Alpha(opacity=100)"></iframe>');
                return n.join("")
            },
            e = function e(t) {
                t = p.extend(!0, {
                    dialog: null,
                    bgColor: "white"
                }, t || {});
                v.tools.env.ie6 && null != t.dialog && 0 !== p(t.dialog).length && 0 === p(t.dialog).children("iframe.bgiframe").length && p(t.dialog).prepend(n(t.bgColor))
            };
        e.html = n;
        return e
    }();
    v.center = function() {
        return function(e) {
            var t = e.dialog;
            if (0 != p(t).length) {
                delete e.dialog;
                e = p.extend(!0, {
                    dialog: null,
                    position: "absolute",
                    transform: "translateZ(20px)",
                    top: "50%",
                    left: "50%",
                    marginTop: 0,
                    relative: !0
                }, e || {});
                var n = p(t);
                "50%" == e.top && (e.marginTop = -n.outerHeight() / 2);
                "50%" == e.left && (e.marginLeft = -n.outerWidth() / 2);
                e.relative && !n.parent().is("body") && "static" == n.parent().css("position") && n.parent().css("position", "relative");
                delete e.relative;
                "fixed" == e.position && v.tools.env.ie6 && (e.marginTop += p(window).scrollTop(), e.position = "absolute", p(window).scroll(function() {
                    n.stop().animate({
                        marginTop: p(window).scrollTop() - n.outerHeight() / 2
                    })
                }));
                n.css(e)
            }
        }
    }();
    p.fn.focusUI = function() {
        return function(e) {
            var t = this.find("h2:first");
            0 != p(this).length && (e = p.extend(!0, {
                cover: !1,
                drag: !1,
                center: !1,
                bgIframe: !0,
                title: null
            }, e || {}), e.title && 0 < p(e.title).length && (t = p(e.title)), e.cover && FocusUI.cover.show({
                dialog: this
            }), e.bgIframe && (e.cover || FocusUI.bgIframe({
                dialog: this
            })), e.center && FocusUI.center({
                dialog: this,
                position: "fixed"
            }), e.drag && FocusUI.drag({
                dialog: this,
                title: t
            }))
        }
    }();
    window.FocusUI = v
}(jQuery);
jQuery(function() {
    var t = function e() {};
    var r = function e(t, n) {
        if (t.indexOf("?") !== -1) {
            t = t.split("?");
            if (t[1]) {
                t[1] = t[1] + "&" + n.join("&")
            } else {
                t[1] = n.join("&")
            }
            t = t.join("?")
        } else if (t.indexOf("#") !== -1) {
            t = t.splig("#");
            t[1] = "?" + n.join("&");
            t = t.join("#")
        } else {
            t += "?" + n.join("&")
        }
        return t
    };
    var a = "LOGON_CALLBACK_" + (new Date).valueOf();
    var n = {
        tmpl: '<div id="dialog4login" style="display:none;">' + '<div id="header4login">' + '<div id="title4login"></div>' + '<a href="javascript:void(\'close\')" id="close4login"></a>' + "</div>" + '<div id="content4login">' + "</div>" + "</div>",
        elems: {
            wrap: "#dialog4login",
            header: "#header4login",
            title: "#title4login",
            close: "#close4login",
            content: "#content4login"
        },
        style: {
            ifrWidth: 550,
            ifrHeight: 290,
            width: 565,
            height: "auto"
        },
        text: {
            title: "SIGN IN",
            close: ""
        },
        url: "",
        callback: t
    };
    var i = null;
    var o = [];
    var e = function e(t) {
        if (typeof t.callback === "function") {
            o.push(t.callback)
        }
        if (i) {
            return i
        }
        i = this;
        this._ = {};
        this.elems = {};
        this.config = jQuery.extend(true, {}, n, t);
        this.init()
    };
    e.prototype = {
        init: function e() {
            var t = this.elems;
            var n = this.config;
            t.$wrap = jQuery(n.tmpl);
            t.$header = t.$wrap.find(n.elems.header);
            t.$title = t.$wrap.find(n.elems.title);
            t.$close = t.$wrap.find(n.elems.close);
            t.$content = t.$wrap.find(n.elems.content);
            t.$title.html(n.text.title);
            t.$close.html(n.text.close);
            t.$wrap.appendTo(document.body).css({
                width: this.config.style.width,
                height: this.config.style.height
            });
            this.hide();
            var i = this;
            t.$close.click(function(e) {
                e.stopPropagation();
                e.preventDefault();
                i.hide();
                i.unload()
            })
        },
        load: function e(t, n) {
            document.domain = "made-in-china.com";
            this.unload();
            window[a] = function() {
                while (o.length) {
                    o.shift().apply(this, [].slice.call(arguments))
                }
            };
            var i = [];
            if (document.domain !== window.location.hostname) {
                i.push("domain=" + document.domain)
            }
            i.push("callback=" + a);
            n = r(n, i);
            t = r(t, ["forwardPage=" + encodeURIComponent(n)]);
            this.elems.$loginFrame = jQuery('<iframe src="' + t + '" frameborder="0" style="width:' + this.config.style.ifrWidth + "px; height:" + this.config.style.ifrHeight + 'px"></iframe>').appendTo(this.elems.$content)
        },
        unload: function e() {
            if (this.elems.$loginFrame) {
                this.elems.$loginFrame.remove()
            }
            window[a] = t
        },
        show: function e() {
            FocusUI.cover.hide();
            this.elems.$wrap.focusUI({
                cover: true,
                drag: false,
                center: true,
                bgIframe: true,
                bgColor: "#000",
                bgOpacity: .5
            });
            this.elems.$wrap.show().css("zIndex", 1e3)
        },
        hide: function e() {
            this.elems.$wrap.hide();
            FocusUI.cover.hide()
        },
        callback: function e(t) {
            typeof t === "function" && o.push(t)
        },
        title: function e(t) {
            this.elems.$title.html(t || this.config.text.title)
        },
        style: function e(t) {
            $.extend(true, this.config.style, t);
            this.elems.$wrap.css({
                width: this.config.style.width,
                height: this.config.style.height
            })
        }
    };
    window.LoginLayer = e
});
void
function($) {
    var header = {
        athena: function e() {
            $.ajax({
                url: "/head/headInfo.do",
                type: "post",
                dataType: "json",
                success: function e(t) {
                    n(t[0].status, t[0].welcomeUserName, t[0].newMailNumber)
                }
            });

            function n(e, t, n) {
                var i = encodeURIComponent(window.location.href);
                var r = $(".athena-user-state").eq(0);
                if (!r.length) {
                    r = $(".state").eq(0)
                }
                var a = e[3] || 0;
                var o = '<li class="user menu-item first" id="welUser">Welcome <a href="//membercenter.made-in-china.com"><strong>' + (t || "") + "</strong></a>!</li>";
                var s = '<li class="message menu-item"><a href="//membercenter.made-in-china.com/messagecenter.do?xcase=inbox" alt="' + n + ' New Message(s)" title="' + n + ' New Message(s)" class="red">' + '<i class="icon">&#xf0e0;</i>' + n + "</a></li>";
                var l = '<li class="sign menu-item last"><a rel="nofollow" href="https://login.made-in-china.com/logon.do?xcase=doLogout&baseNextPage=' + i + '">Sign Out</a></li>';
                if (!e) {
                    var c = '<li class="user menu-item">New user? <a rel="nofollow" href="//membercenter.made-in-china.com/join/">Join Free</a></li>' + '<li class="sign menu-item"><a rel="nofollow" href="javascript:login();">' + "Sign In</a></li>";
                    r.empty();
                    r.html(c);
                    return
                }
                r.empty();
                r.html(o + s + l)
            }
        },
        now: function now() {
            var _params = "";
            if ($("#top .site-nav .inquiry a").eq(0).attr("href") === "/report-cart/") {
                _params = "&sc=1"
            }
            window.MIC_SRVRNM = document.location.protocol + "//" + document.location.host;
            var logonStatusURI = (window.MIC_SRVRNM || "") + "/ajaxfunction.do?xcase=ajaxlogonconnection" + _params + "&t=" + (new Date).getTime();
            $.get(logonStatusURI, function(data) {
                var str = data.replace(/^.*(\[.*\]).*$/g, "$1");
                switchLogonStatus(eval(str))
            });

            function switchLogonStatus(e) {
                if (!e || !e.length) {
                    return
                }
                var t = encodeURIComponent(window.location.href);
                var n = $("#top .user-nav").eq(0);
                var i = $("#top .site-nav .inquiry a strong")[0];
                var r = e[3] || 0;
                var a = '<li class="first menu-item">Welcome <a href="//membercenter.made-in-china.com"><strong>' + (e[1] || "") + "</strong></a>!";
                var o = '<li class="message menu-item"><a href="//membercenter.made-in-china.com/messagecenter.do?xcase=inbox" alt="' + r + ' New Message(s)" title="' + r + ' New Message(s)" class="red">' + '<i class="icon">&#xf0e0;</i>' + r + "</a></li>";
                var s = '<li class="menu-item last"><a rel="nofollow" href="https://login.made-in-china.com/logon.do?xcase=doLogout&baseNextPage=' + t + '">Sign Out</a></li>';
                i.innerHTML = e[2] || 0;
                if (!e[0]) {
                    var l = '<li class="first menu-item">New user? <a rel="nofollow" href="//membercenter.made-in-china.com/join/">Join Free</a></li>' + '<li class="signin menu-item"><a rel="nofollow" href="https://login.made-in-china.com/logon.do?xcase=logon&amp;baseNextPage=' + t + '">' + "Sign In</a></li>";
                    n.empty();
                    n.html(l);
                    return
                }
                n.empty();
                n.html(a + o + s)
            }
        },
        old: function() {
            window.MIC_SRVRNM = document.location.protocol + "//" + document.location.host;
            var requestLogonStatus = function requestLogonStatus() {
                var logonStatusTimerMax = 1700;
                var logonStatusTimer = null;
                var logonStatusURI = (window.MIC_SRVRNM || "") + "/ajaxfunction.do?xcase=ajaxlogonconnection";
                var switchLogonStatus = function e() {
                    if (!window.logonStatus) {
                        return
                    }
                    var t = document.getElementById("welcome_logon_span");
                    var n = document.getElementById("inquiry_number_span");
                    var i = document.getElementById("join_now_span");
                    var r = document.getElementById("logout_span");
                    var a = document.getElementById("logon_span");
                    var o = document.getElementById("newMsg");
                    var s = document.getElementById("vohome_span");
                    if (parseInt(logonStatus[0]) > 0) {
                        t && (t.innerHTML = 'Welcome <a href="//membercenter.made-in-china.com">' + (logonStatus[1] ? "<strong>" + document.createTextNode(logonStatus[1]).nodeValue + "</strong>" : "") + "!</a> ");
                        n && (n.innerHTML = logonStatus[2]);
                        i && (i.style.display = "none");
                        r && (r.style.display = "inline");
                        a && (a.style.display = "none");
                        s && (s.style.display = "inline");
                        if (parseInt(logonStatus[3]) > 0) {
                            if (!o) {
                                o = document.createElement("span");
                                o.setAttribute("id", "newMsg");
                                t.parentNode.insertBefore(o, t.nextSibling)
                            }
                            o.innerHTML = ' | <a href="//membercenter.made-in-china.com/messagecenter.do?xcase=inbox"><img src="/images/new_msg.gif"  alt="#N0# New Message(s)" title="#N0# New Message(s)" /> #N0#</a>'.replace(/#N0#/g, logonStatus[3]);
                            o.style.display = "inline"
                        } else {
                            o && (o.style.display = "none")
                        }
                    } else {
                        t && (t.innerHTML = "");
                        n && (n.innerHTML = logonStatus[2]);
                        i && (i.style.display = "inline");
                        r && (r.style.display = "none");
                        a && (a.style.display = "inline");
                        o && (o.style.display = "none")
                    }
                };
                $.get(window.location.protocol + "//" + window.location.host + "/ajaxfunction.do?xcase=getLoginStatus", function(rsp) {
                    $.get(logonStatusURI, function(data) {
                        var str = data.replace(/^var\s*/, "window.");
                        eval(str);
                        switchLogonStatus()
                    })
                })
            };
            window.addMICtoFavorite = function(e, t) {
                try {
                    window.external.AddFavorite(e, t)
                } catch (e) {}
            };
            return function() {
                try {
                    logonStatus = "";
                    requestLogonStatus();
                    if (document.body.outerHTML) {
                        document.getElementById("welcome_fav").outerHTML = '<a id="welcome_fav" href="javascript:addMICtoFavorite(\'//www.made-in-china.com', "Made-in-China.com - The world of China products');\">Add Made-in-China.com to your favorites list</a>"
                    }
                } catch (e) {}
            }
        }.call(this)
    };
    window.headerStatus = header
}.call(this, window.jQuery);
void
function() {
    if (window["executeTM"] || window.self != window.top) {
        return
    }
    var ie = function() {
        var s = function e() {};
        var o = function e(t) {
            return t.replace(/^\s+|\s+$/g, "")
        };
        var r = function e(t, n) {
            var i = document.createElement("script");
            i.type = "text/javascript";
            i.async = i.defer = true;
            var r = false;
            var a = function e() {
                if (i.readyState === "complete" || i.readyState === "loaded") {
                    o.call(i)
                }
            };
            var o = function e() {
                i.onload = i.onerror = s;
                if (r) {
                    i.detachEvent("onreadystatechange", a)
                }
                setTimeout(n, 0)
            };
            i.onload = i.onerror = o;
            if (i.readyState && !i.addEventListener) {
                r = true;
                i.attachEvent("onreadystatechange", a)
            }
            i.src = t;
            document.body.appendChild(i)
        };
        var l = function e(t, n) {
            var i = arguments.callee;
            r(t.shift(), function() {
                if (t.length) {
                    i(t, n)
                } else {
                    n()
                }
            })
        };
        var e = function e() {
            var t = [].slice.call(arguments);
            if (!t.length) {
                return
            }
            var n = s;
            if (typeof t[t.length - 1] === "function") {
                n = t.pop()
            }
            var i = [];
            var r;
            for (var a = 0; a < t.length; a++) {
                r = t[a];
                if (typeof r === "function") {
                    r = r()
                }
                if (typeof r === "string") {
                    r = o(r);
                    if (r) {
                        i.push(r)
                    }
                }
            }
            if (!i.length) {
                n()
            } else {
                l(i, n)
            }
        };
        return e
    }.call(this);
    var n = function e(ne) {
        jQuery(function() {
            var r = function e() {};
            var h;
            var t;
            var l;
            var M = {
                NO_RIGHT: "TradeMessenger is currently available to non-Chinese buyers and suppliers with business lienses or identity card."
            };
            var c = Object.prototype.toString;
            var p = {
                map: function e(t, n) {
                    var i;
                    var r = c.call(t).match(/\w+/g)[1];
                    if (r === "Array") {
                        i = [];
                        for (var a = 0; a < t.length; a++) {
                            i.push(n(a, t[a]))
                        }
                    } else if (r === "Object") {
                        i = {};
                        for (var o in t) {
                            i[o] = n(o, t[o])
                        }
                    }
                    return i
                },
                where: function e(t, n) {
                    var i;
                    var r;
                    var a = c.call(t).match(/\w+/g)[1];
                    if (a === "Array") {
                        i = [];
                        for (var o = 0; o < t.length; o++) {
                            r = n(o, t[o]);
                            if (r) {
                                i.push(t[o])
                            }
                        }
                    } else if (a === "Object") {
                        i = {};
                        for (var s in t) {
                            r = n(s, t[s]);
                            if (r) {
                                i[s] = t[s]
                            }
                        }
                    }
                    return i
                },
                indexOf: function e(t, n) {
                    var i = -1;
                    for (var r = 0; r < t.length; r++) {
                        if (t[r] === n) {
                            i = r;
                            break
                        }
                    }
                    return i
                }
            };
            var a = function e(t) {
                var n = document.cookie.split("; ");
                for (var i = 0; i < n.length; i++) {
                    var r = n[i].split("=");
                    if (r[0] == t) return unescape(r[1])
                }
            };
            var o = {
                en: {
                    online: {
                        title: "Chat with supplier online now!",
                        href: "Chat Now",
                        text: "Chat with Supplier"
                    },
                    offline: {
                        title: "Supplier is offline now, please leave your message.",
                        href: "Please Leave a Message",
                        text: "Leave a message"
                    }
                },
                es: {
                    online: {
                        title: "¡Chatear con proveedor en línea ahora!",
                        href: "Hablar con el proveedor",
                        text: "Charlar"
                    },
                    offline: {
                        title: "El proveedor está fuera de línea ahora, por favor deje su mensaje",
                        href: "Dejar un mensaje",
                        text: "Dejar un mensaje"
                    }
                },
                pt: {
                    online: {
                        title: "Converse com o fornecedor online agora!",
                        href: "Fale com Fornecedor",
                        text: "Conversar"
                    },
                    offline: {
                        title: "O fornecedor está offline agora, deixe a sua mensagem, por favor.",
                        href: "Deixe uma mensagem",
                        text: "Deixe uma mensagem"
                    }
                },
                fr: {
                    online: {
                        title: "Chattez avec le fournisseur en ligne maintenant !",
                        href: "Discutez avec les Fournisseurs",
                        text: "Converser"
                    },
                    offline: {
                        title: "Le fournisseur est déconnecté maintenant, veuillez laisser votre message.",
                        href: "Laissez un message",
                        text: "Laissez un message"
                    }
                },
                ru: {
                    online: {
                        title: "Чат с поставщиком онлайн сейчас!",
                        href: "Чат с Поставщиком",
                        text: "Чат"
                    },
                    offline: {
                        title: "Поставщик офлайн теперь, пожалуйста, оставьте ваше сообщение.",
                        href: "Оставьте сообщение",
                        text: "Оставьте сообщение"
                    }
                },
                it: {
                    online: {
                        title: "Chatta con il fornitore in linea adesso!",
                        href: "Chatta con il fornitore",
                        text: "Chiacchierata"
                    },
                    offline: {
                        title: "Fornitore è in linea ora, si prega di lasciare il vostro messaggio.",
                        href: "Lasciate un messaggio",
                        text: "Lasciate un messaggio"
                    }
                },
                de: {
                    online: {
                        title: "Chatten Sie jetzt online mit dem Lieferanten!",
                        href: "Chatten Sie mit dem Lieferanten",
                        text: "Plaudern"
                    },
                    offline: {
                        title: "Der Lieferant ist jetzt offline. Bitte hinterlassen Sie Ihre Nachricht.",
                        href: "Hinterlass eine Nachricht",
                        text: "Hinterlass eine Nachricht"
                    }
                },
                nl: {
                    online: {
                        title: "Chat nu online met leverancier!",
                        href: "Chat met leverancier",
                        text: "Chatten"
                    },
                    offline: {
                        title: "Leverancier is nu offline, laat uw bericht achter.",
                        href: "Laat een bericht achter",
                        text: "Laat een bericht achter"
                    }
                },
                sa: {
                    online: {
                        title: "الدردشة مع المورد عبر الإنترنت الآن!",
                        href: "الدردشة مع المورد",
                        text: "دردشة"
                    },
                    offline: {
                        title: "المورد غير متصل الآن ، يرجى ترك رسالتك.",
                        href: "اترك رسالة",
                        text: "اترك رسالة"
                    }
                },
                ar: {
                    online: {
                        title: "الدردشة مع المورد عبر الإنترنت الآن!",
                        href: "الدردشة مع المورد",
                        text: "دردشة"
                    },
                    offline: {
                        title: "المورد غير متصل الآن ، يرجى ترك رسالتك.",
                        href: "اترك رسالة",
                        text: "اترك رسالة"
                    }
                },
                kr: {
                    online: {
                        title: "공급 업체 온라인과 채팅하십시오!",
                        href: "공급 업체와 채팅하십시오",
                        text: "채팅"
                    },
                    offline: {
                        title: "공급 업체는 현재 오프라인 상태입니다. 귀하의 메시지를 남겨주십시오.",
                        href: "메시지를 남겨주세요",
                        text: "메시지를 남겨주세요"
                    }
                },
                jp: {
                    online: {
                        title: "今すぐオンラインでサプライヤーとチャット！",
                        href: "サプライヤーとチャット",
                        text: "チャット"
                    },
                    offline: {
                        title: "サプライヤーは現在オフラインです。メッセージを残してください。",
                        href: "伝言を残す",
                        text: "伝言を残す"
                    }
                },
                hi: {
                    online: {
                        title: "आपूर्तिकर्ता के साथ अभी ऑनलाइन चैट करें!",
                        href: "अभी चैट करें",
                        text: "आपूर्तिकर्ता के साथ चैट करें"
                    },
                    offline: {
                        title: "आपूर्तिकर्ता अभी ऑफ़लाइन है, कृपया अपना संदेश छोड़ें.",
                        href: "कृपया कोई संदेश छोड़ें",
                        text: "एक संदेश भेजें"
                    }
                },
                th: {
                    online: {
                        title: "สนทนากับซัพพลายเออร์ออนไลน์ได้แล้ววันนี้!",
                        href: "แชทตอนนี้",
                        text: "แชทกับซัพพลายเออร์"
                    },
                    offline: {
                        title: "ซัพพลายเออร์ออฟไลน์อยู่ในขณะนี้โปรดฝากข้อความของคุณไว้",
                        href: "โปรดฝากข้อความ",
                        text: "ทิ้งข้อความ"
                    }
                },
                tr: {
                    online: {
                        title: "Hemen çevrimiçi olarak tedarikçi ile sohbet edin!",
                        href: "Şimdi Sohbet Et",
                        text: "Tedarikçi ile sohbet edin"
                    },
                    offline: {
                        title: "Tedarikçi şu anda çevrimdışı, lütfen mesajınızı bırakın.",
                        href: "Lütfen bir Mesaj bırakın",
                        text: "Mesaj bırakın"
                    }
                },
                vi: {
                    online: {
                        title: "Trò chuyện với nhà cung cấp trực tuyến ngay bây giờ!",
                        href: "Trò Chuyện Ngay",
                        text: "Trò chuyện với Nhà Cung Cấp"
                    },
                    offline: {
                        title: "Nhà cung cấp hiện đang ngoại tuyến, vui lòng để lại tin nhắn của bạn.",
                        href: "Vui lòng để lại tin nhắn",
                        text: "Để lại tin nhắn"
                    }
                },
                id: {
                    online: {
                        title: "Mengobrol dengan pemasok secara online sekarang!",
                        href: "Mengobrol Sekarang",
                        text: "Mengobrol dengan Pemasok"
                    },
                    offline: {
                        title: "Pemasok sedang offline sekarang, harap tinggalkan pesan Anda.",
                        href: "Harap tinggalkan pesan",
                        text: "Tinggalkan pesan"
                    }
                }
            };
            var e = location.hostname.split(".");
            if (e && e[0] in o) {
                e = e[0]
            } else if (e[0] == "membercenter") {
                e = window["tm3LanCode"] || "zh"
            } else if (e[0] == "purchase") {
                e = "en"
            } else {
                e = a("lang") || "en"
            }
            var f = function e() {
                var t = location.hostname.split(".");
                var n = {};
                n = {
                    lang: "en",
                    tmlang: "en"
                };
                if (t[0] in o) {
                    n.lang = t[0];
                    n.tmlang = t[0]
                } else {
                    n.lang = "en";
                    n.tmlang = "en"
                }
                if (h && h.userStatus && h.userStatus.userType && h.userStatus.userType == "2") {
                    n.tmlang = "en"
                }
                if (t[0] === "www") {
                    n.lang = "en";
                    n.tmlang = "en"
                }
                if (t[0] === "membercenter") {
                    n.lang = window["tm3LanCode"] || window["lanCode"] && ["en", "zh"][
                        [lanCode.value][0] || 1
                    ] || a("lang") || "en";
                    n.tmlang = window["tm3LanCode"] || window["lanCode"] && ["en", "zh"][
                        [lanCode.value][0] || 1
                    ] || a("lang") || "en"
                }
                if (t[0] === "purchase") {
                    var i = location.href.split("lan=");
                    if (i.length > 1 && i[1]) {
                        var r = i[1].split("&")[0];
                        n.lang = r;
                        n.tmlang = r
                    } else {
                        n.lang = "en";
                        n.tmlang = "en"
                    }
                }
                if (t[0] === "customsdata") {
                    n.lang = "zh";
                    n.tmlang = "zh"
                }
                return n
            };
            var R = function e(t) {
                var n = window.document.location.protocol + "//membercenter.made-in-china.com";
                var i = window.document.location.protocol + "//www.made-in-china.com";
                var r = window.document.location.protocol + "//webim.trademessenger.com";
                var a = "https://login.made-in-china.com";
                var o = {
                    tm: r,
                    tmloader: r + "/tm-new/assets/webtm/js/icon-new-loader.js?st=" + parseInt((new Date).valueOf() / 12 / 60 / 60 / 1e3),
                    userTMStatus: i + "/ajaxfunction.do?xcase=getTmStatus",
                    vo: n,
                    en: i,
                    token: n + "/tm.do?xcase=token4TMWeb&callback=?",
                    users: i + "/im.do?xcase=getSubAccount",
                    choose2talk: i + "/im.do?xcase=getTalk2User",
                    audit: n + "/tm.do?xcase=tmRightsCheck",
                    visitor: n + "/tm.do?xcase=visitorReg&lang=" + f().lang,
                    login: a + "/logon.do?xcase=logonPage4TM3",
                    transition: i + "/im.do?xcase=tmLogonHandle",
                    holderSelector: ".tm3_chat_status",
                    URL_THRESHOLD: 1500
                };
                h = $.extend(true, {}, o, ne.params);
                t(h)
            };
            var i = function() {
                var s = document.createElement("div");
                s.style.cssText = "width:1px; height:1px; position:absolute; top:0; left:0; overflow:hidden;";
                var l = false;
                return {
                    img: function e(t, n) {
                        if (!l) {
                            document.body.appendChild(s);
                            l = true
                        }
                        var i = document.createElement("img");
                        var r = [];
                        for (var a in n) {
                            r.push(a + "=" + encodeURIComponent(n[a]))
                        }
                        r.push("_=" + (new Date).valueOf());
                        var o = t + (/\?/.test(t) ? "&" : "?") + r.join("&");
                        i.src = o;
                        s.appendChild(i)
                    }
                }
            }();
            var P = function e() {
                i.img("//www.made-in-china.com/ajaxfunction.do?xcase=tmExceptionLog", {
                    type: 1,
                    para: encodeURIComponent(window.location.href)
                })
            };
            var s = function e(t, n) {
                i.img("//membercenter.made-in-china.com/tm.do?xcase=testTM", {
                    visitorId: t,
                    url: encodeURIComponent(n)
                })
            };
            var n = function e(t) {
                this.api = t || null;
                this.isReady = false;
                this.readyEvents = []
            };
            n.prototype = {
                execReady: function e() {
                    if (this.isReady) {
                        for (var t = 0; t < this.readyEvents.length; t++) {
                            this.readyEvents[t].call(this)
                        }
                        this.readyEvents = []
                    }
                },
                ready: function e(t) {
                    typeof t === "function" && this.readyEvents.push(t);
                    this.execReady()
                },
                beReady: function e() {
                    this.isReady = true;
                    this.execReady()
                },
                setApi: function e(t) {
                    if (t) {
                        this.api = t;
                        this.beReady()
                    }
                },
                chatTo: function e(t, n) {
                    this.api.chatTo($.extend(true, {
                        refer: location.href
                    }, t), n)
                }
            };
            var d = new n;
            var u = function e() {
                this.isReady = false;
                this.readyEvents = []
            };
            u.prototype = {
                execReady: function e() {
                    if (this.isReady) {
                        for (var t = 0; t < this.readyEvents.length; t++) {
                            this.readyEvents[t].call(this)
                        }
                    }
                },
                ready: function e(t) {
                    typeof t === "function" && this.readyEvents.push(t);
                    this.execReady()
                },
                beReady: function e() {
                    this.isReady = true;
                    this.execReady()
                }
            };
            var v = new u;
            var m = {
                chat: '<a rel="nofollow" ads-data="st:13" class="" href="javascript:void(\'Chat Now\')" title="Chat with supplier online now!">Chat with Supplier.</a>',
                online: '<a rel="nofollow" ads-data="st:13" class="" href="javascript:void(\'Chat Now\')" title="Chat with supplier online now!">Chat with Supplier.</a>',
                list: {
                    wrap: '<div class="tmer-list">' + '<div class="tm-manager-box"><span>Sales Manager: </span><div class="inline tm-manager"></div></div>' + '<div class="tm-person-box"><span>Sales Person: </span><div class="inline tm-person"></div></div>' + "</div>",
                    button: '<a rel="nofollow" ads-data="st:13" class="tm-user" href="javascript:void(\'Chat Now!\')" title="Chat with supplier online now!"></a>'
                },
                fixed: '<a rel="nofollow" ads-data="st:13" class="" href="javascript:void(\'Chat Now!\')" title="Chat with supplier online now!"></a>',
                teletext: '<div class="J-status"><div class="pic"><a rel="nofollow" ads-data="st:13" title="Chat with supplier online now!" href="#" class="J-hovertitle"><img src="https://www.micstatic.com/athena/img/tm-offline_7c6c0a90.png" alt="Offline" /></a></div><a rel="nofollow" ads-data="st:13" href="#" class="J-title">TM</a></div>',
                texticon: '<a rel="nofollow" ads-data="st:13" href="javascript:void(\'Chat Now\')" title="Chat with supplier online now!" class="tm"></a>'
            };
            var g = "Supplier is offline now, please leave your message.";
            var w = {};
            w.texticon = function(e) {
                this.$elem = jQuery(m.texticon);
                this.$elem.insertAfter(e)
            };
            w.texticon.prototype = {
                online: function e(t) {
                    this.$elem.show();
                    typeof t === "function" && t()
                },
                offline: function e(t) {
                    this.$elem.addClass("offline").show();
                    typeof t === "function" && t()
                }
            };
            w.fixed = function(e) {
                this.$elem = jQuery(m.fixed);
                this.$elem.insertAfter(e)
            };
            w.fixed.prototype = {
                online: function e(t) {
                    this.$elem.removeClass("sider-tm-off").addClass("sider-tm-on").show();
                    typeof t === "function" && t()
                },
                offline: function e(t) {
                    this.$elem.removeClass("sider-tm-on").addClass("sider-tm-off").show();
                    typeof t === "function" && t()
                }
            };
            w.teletext = function(e) {
                this.$elem = jQuery(m.teletext);
                this.$elem.insertAfter(e)
            };
            w.teletext.prototype = {
                online: function e(t) {
                    this.$elem.removeClass("offline").addClass("online");
                    this.$elem.find("img").attr({
                        alt: "online",
                        src: "https://www.micstatic.com/athena/img/tm-online_c0f9db97.png"
                    });
                    this.$elem.find(".J-title").html("Chat with Supplier");
                    this.$elem.find(".J-hovertitle").attr("title", "Chat with Supplier Online now!");
                    typeof t === "function" && t()
                },
                offline: function e(t) {
                    this.$elem.removeClass("online").addClass("offline");
                    this.$elem.find("img").attr({
                        alt: "offline",
                        src: "https://www.micstatic.com/athena/img/tm-offline_7c6c0a90.png"
                    });
                    this.$elem.find(".J-title").html("Leave a message");
                    this.$elem.find(".J-hovertitle").attr("title", g);
                    typeof t === "function" && t()
                }
            };
            w.chat = function(e) {
                this.$elem = jQuery(m.chat);
                this.$elem.insertAfter(e);
                this.lan = e.getAttribute("lan") || "en";
                this.tmLan = e.getAttribute("lan") || "en";
                this.text = e.getAttribute("text") ? JSON.parse(e.getAttribute("text"))[0] : o[this.lan]
            };
            w.chat.prototype = {
                online: function e(t) {
                    this.$elem.addClass("tm-status-on").attr({
                        title: this.text.online.title,
                        href: "javascript:void('" + this.text.online.href + "')"
                    }).html(this.text.online.text).show();
                    typeof t === "function" && t()
                },
                offline: function e(t) {
                    this.$elem.addClass("tm-status-off").attr({
                        title: this.text.offline.title,
                        href: "javascript:void('" + this.text.offline.href + "')"
                    }).html(this.text.offline.text).show();
                    typeof t === "function" && t()
                }
            };
            w.online = function(e) {
                this.$elem = jQuery(m.online);
                this.$elem.insertAfter(e)
            };
            w.online.prototype = {
                online: function e(t) {
                    this.$elem.addClass("tm-status-on").show();
                    typeof t === "function" && t()
                },
                offline: function e(t) {
                    this.$elem.addClass("tm-status-off").attr({
                        title: g,
                        href: "javascript:void('Please Leave a Message')"
                    }).html("Leave a message.").show();
                    typeof t === "function" && t()
                }
            };
            w.list = function(e, t) {
                var n = this.$wrap = jQuery(m.list.wrap);
                n.insertAfter(e);
                this.$managerBox = n.find(".tm-manager-box");
                this.$personBox = n.find(".tm-person-box");
                var i = n.find(".tm-manager");
                var r = n.find(".tm-person");
                var a = /00$/;
                this._ = {
                    has: {
                        manager: 0,
                        person: 0
                    }
                };
                var o = [];
                var s;
                var l;
                for (var c = 0; c < t.length; c++) {
                    l = t[c];
                    s = jQuery(m.list.button).html(l.name)[0];
                    s.uid = l.id;
                    if (a.test(l.id)) {
                        i.append(s);
                        this._.has.manager++
                    } else {
                        r.append(s);
                        this._.has.person++
                    }
                    o.push(s)
                }
                this.$elem = jQuery(o);
                !i.children("a.tm-user").length && i.hide();
                !r.children("a.tm-user").length && r.hide()
            };
            w.list.prototype = {
                online: function e(t) {
                    if (!this._.has.manager && !this._.has.person) {
                        this.$wrap.hide()
                    } else {
                        this.$wrap.show();
                        this.$elem.show();
                        if (!this._.has.manager) {
                            this.$managerBox.hide()
                        }
                        if (!this._.has.person) {
                            this.$personBox.hide()
                        }
                    }
                    typeof t === "function" && t()
                },
                offline: function e(t) {
                    this.$elem.hide();
                    typeof t === "function" && t()
                }
            };

            function J(e) {
                if (e) {
                    return e
                }
                if (ne && ne.render && ne.render.resetProcessors) {
                    var t = {};
                    jQuery.extend(true, t, w);
                    var n;
                    try {
                        n = ne.render.resetProcessors(t)
                    } catch (e) {
                        n = null
                    }
                    return n
                }
                return e
            }
            if (ne.render) {
                $.extend(true, m, ne.render.tags);
                $.extend(true, w, J(ne.render.processors))
            }
            var q = function e(t) {
                t.stopPropagation();
                window["faw"] && faw.manual && faw.manual.click(t.target)
            };
            var z = function e(t) {
                t.preventDefault()
            };
            var y = function e(t, n) {
                var i = t.getAttribute("processor");
                if (t.getAttribute("state") == "initialized") {
                    return null
                }
                if (i in w) {
                    var r = new w[i](t, n);
                    r.$elem.click(q).click(z);
                    if (window.sensors && window.sensors.quick) {
                        r.$elem.click(function() {
                            sensors.quick("trackAllHeatMap", this, {}, function() {})
                        })
                    }
                    t.setAttribute("state", "initialized");
                    return r
                }
                return null
            };
            var B = function e(n) {
                n = typeof n === "function" ? n : r;
                jQuery.ajax({
                    url: h.audit,
                    dataType: "jsonp",
                    jsonp: "callback",
                    cache: false,
                    success: function e(t) {
                        h.userStatus = t;
                        typeof n === "function" && n(t)
                    }
                })
            };
            var b = function e(t, n) {
                for (var i = 0; i < t.length; i++) {
                    if (t[i].id === n) {
                        return t[i]
                    }
                }
                return null
            };
            var U = function e(t, n) {
                this.id = t;
                this.elems = n ? [n] : [];
                this.users = [];
                this.online = [];
                this.offline = []
            };
            var x = function e() {
                var i = [];
                var r = [];
                var a;
                t.each(function(e, t) {
                    a = t.getAttribute("cid");
                    if (p.indexOf(r, a) === -1) {
                        r.push(a);
                        i.push(new U(a, t))
                    } else {
                        var n = b(i, a);
                        if (n) {
                            n.elems.push(t)
                        }
                    }
                });
                return {
                    coms: i,
                    ids4unique: r
                }
            };
            var _ = function e(o, s) {
                if (!l || !l.ids4unique.length) {
                    return
                }
                jQuery.ajax({
                    url: h.users,
                    dataType: "jsonp",
                    jsonp: "callback",
                    cache: false,
                    data: {
                        comIdStr: l.ids4unique.join(",")
                    },
                    success: function e(t) {
                        var n = false;
                        var i;
                        for (var r in t) {
                            n = true;
                            i = b(l.coms, r);
                            if (i) {
                                i.users = t[r].slice();
                                i.uids = [];
                                for (var a = 0; a < i.users.length; a++) {
                                    i.uids.push(i.users[a].id)
                                }
                            }
                        }
                        if (n) {
                            typeof o === "function" && o(t)
                        } else {
                            typeof s === "function" && s()
                        }
                    },
                    error: function e() {
                        typeof s === "function" && s()
                    }
                })
            };
            var C = function e(t, n) {
                var i = [];
                for (var r = 0; r < t.length; r++) {
                    if (p.indexOf(t[r].uids, n) !== -1) {
                        i.push(t[r])
                    }
                }
                return i
            };
            var H = function e() {
                var t = l.coms;
                var n = [];
                for (var i = 0; i < t.length; i++) {
                    if (!t[i].online.length) {
                        n.push(t[i])
                    }
                }
                return n
            };
            var G = function e(t, n) {
                var i = [];
                for (var r = 0; r < t.length; r++) {
                    i = i.concat(t[r][n])
                }
                return i
            };
            var W = function e(t, n, i) {
                i = i ? i : "user_ids[]=";
                var r = i;
                var a = h.URL_THRESHOLD;
                var o = [];
                var s = [];
                var l;
                for (var c = 0; c < t.length; c++) {
                    l = t[c];
                    if (n in l && l[n].length) {
                        if ((r + G(s, n).concat(l[n]).join("&" + i)).length <= a) {
                            s.push(l)
                        } else {
                            o.push(s);
                            s = [l]
                        }
                    }
                }
                o.push(s);
                return o
            };
            var V = function e(t, n, i) {
                var r = i || "user_ids[]=";
                i = "&" + r;
                var a = [];
                for (var o = 0; o < t.length; o++) {
                    a = a.concat(t[o][n])
                }
                return r + a.join(i)
            };
            var Q = function e(t, n, i) {
                jQuery.ajax({
                    url: h.choose2talk,
                    dataType: "json",
                    cache: false,
                    xhrFields: {
                        withCredentials: true
                    },
                    crossDomain: true,
                    data: {
                        userIdStr: t.online.length ? t.online.join(",") : t.offline.join(","),
                        dataId: t.dataId,
                        visitorId: t.visitorId || ""
                    },
                    success: n || r,
                    complete: i || r
                })
            };
            var X = function e(t) {
                var n = /1$/;
                var i = /([^_]+)_1$/;
                var r = "";
                if (n.test(t)) {
                    r = i.exec(t)[1]
                }
                return r
            };
            var K = {
                1: "product",
                2: "offer",
                3: "company",
                4: "productGroup"
            };
            var Y = function e(t) {
                var n = /([^_]+)_(\d)$/;
                var i = {
                    id: "null",
                    type: "null"
                };
                var r = n.exec(t);
                if (r) {
                    i = {
                        id: r[1],
                        type: K[r[2]] || "other"
                    }
                }
                return i
            };
            var S = function e(u) {
                d.ready(function() {
                    var n = function e(t) {
                        var n = this;
                        F = this;
                        c(this);
                        var i = jQuery(this);
                        var r = i.data("tmData");
                        if (!r.visitorId && h.userStatus && h.userStatus.visitorId) {
                            r.visitorId = h.userStatus.visitorId
                        }
                        var a = X(r.dataId);
                        var o = Y(r.dataId);
                        var s = r.orderId;
                        Q(r, function(e) {
                            if (e) {
                                if (a) {
                                    jQuery.extend(true, e, {
                                        productId: a
                                    })
                                }
                                if (o) {
                                    jQuery.extend(true, e, {
                                        inquiryData: o
                                    })
                                }
                                if (s) {
                                    jQuery.extend(true, e, {
                                        orderId: s
                                    })
                                }
                                if (u.lan) {
                                    jQuery.extend(true, e, {
                                        lang: f().lang
                                    })
                                }
                                if (u.tmLan) {
                                    jQuery.extend(true, e, {
                                        tmlang: f().tmlang
                                    })
                                }
                                d.chatTo(e)
                            }
                        }, function() {
                            l(n)
                        })
                    };
                    var l = function e(t) {
                        (t ? jQuery(t) : u.$elem).click(n)
                    };
                    var c = function e(t) {
                        jQuery(t).unbind("click", n)
                    };
                    l()
                })
            };
            var I = function e(t) {
                v.ready(function() {
                    var e = l.coms;
                    for (var t = 0; t < e.length; t++) {
                        jQuery(e[t].elems).each(function(e, t) {
                            t.buttonRefer && t.buttonRefer.$elem.click(function(e) {
                                e.preventDefault();
                                alert(M.NO_RIGHT)
                            })
                        })
                    }
                })
            };
            var Z = function e() {
                if ($(".J-header-refresh").length) {
                    window.location.reload(true);
                    return
                }
                if (window.topLoginInfo && window.topLoginInfo.request) {
                    return window.topLoginInfo.request()
                }
                var t = "header-type";
                if ($(".athena-user-state").length) {
                    t = "athena"
                } else if ($("#logon_span").length) {
                    t = "old"
                } else if ($("#welcome_logon_span").length) {
                    t = "now"
                }
                if (t in window.headerStatus) {
                    window.headerStatus[t]()
                } else if (typeof window.logonRefresh === "function") {
                    window.logonRefresh()
                }
            };
            var F = null;
            var T = {
                en: {
                    VISITOR: "Online Chat",
                    LOGIN: "SIGN IN"
                },
                es: {
                    VISITOR: "Charla en Línea",
                    LOGIN: "SIGN IN"
                },
                pt: {
                    VISITOR: "Bate-papo Online",
                    LOGIN: "SIGN IN"
                },
                fr: {
                    VISITOR: "Chat en Ligne",
                    LOGIN: "SIGN IN"
                },
                ru: {
                    VISITOR: "Онлайн Чат",
                    LOGIN: "SIGN IN"
                },
                it: {
                    VISITOR: "Chat Online",
                    LOGIN: "SIGN IN"
                },
                de: {
                    VISITOR: "Online Chat",
                    LOGIN: "SIGN IN"
                },
                nl: {
                    VISITOR: "Online Chat",
                    LOGIN: "SIGN IN"
                },
                sa: {
                    VISITOR: "المحادثة على الإنترنت",
                    LOGIN: "SIGN IN"
                },
                ar: {
                    VISITOR: "المحادثة على الإنترنت",
                    LOGIN: "SIGN IN"
                },
                kr: {
                    VISITOR: "온라인 채팅",
                    LOGIN: "SIGN IN"
                },
                jp: {
                    VISITOR: "オンラインチャット",
                    LOGIN: "SIGN IN"
                },
                zh: {
                    VISITOR: "在线聊天",
                    LOGIN: "SIGN IN"
                },
                cn: {
                    VISITOR: "在线聊天",
                    LOGIN: "SIGN IN"
                },
                hi: {
                    VISITOR: "ऑनलाइन चैट",
                    LOGIN: "SIGN IN"
                },
                th: {
                    VISITOR: "การแชทออนไลน์",
                    LOGIN: "SIGN IN"
                },
                tr: {
                    VISITOR: "Çevrimiçi Sohbet",
                    LOGIN: "SIGN IN"
                },
                vi: {
                    VISITOR: "Trò chuyện trực tuyến",
                    LOGIN: "SIGN IN"
                },
                id: {
                    VISITOR: "Obrolan Online",
                    LOGIN: "SIGN IN"
                }
            }[f().lang];
            var k = {
                VISITOR: {
                    ifrWidth: 475,
                    ifrHeight: 290,
                    width: 490,
                    height: "auto"
                },
                LOGIN: {
                    ifrWidth: 550,
                    ifrHeight: 290,
                    width: 565,
                    height: "auto"
                }
            };
            var O = new LoginLayer({
                callback: function e(t) {
                    var n = arguments.callee;
                    O.hide();
                    h.userStatus = $.extend(true, {}, h.userStatus, t);
                    if (t.tmaction === "signin") {
                        setTimeout(function() {
                            O.callback(n);
                            O.unload();
                            O.load(h.login, h.transition);
                            O.title(T.LOGIN);
                            O.style(k.LOGIN);
                            O.show()
                        }, 1)
                    } else if (t.visitorId) {
                        if (window.MaiTong) {
                            var i = h.token;
                            i += "&visitorId=" + t.visitorId;
                            h.userStatus.tm = "true";
                            MaiTong.updateConfig({
                                token_url: i
                            });
                            s(t.visitorId, i);
                            var r = jQuery(F).data("tmData");
                            jQuery(F).data("tmData", _objectSpread2(_objectSpread2({}, r), {}, {
                                visitorId: h.userStatus.visitorId
                            }));
                            if (h.userStatus && h.userStatus.tm === "true") {
                                MaiTong.startWeb();
                                d.setApi(MaiTong)
                            }
                            if (F) {
                                jQuery(F).click()
                            }
                        } else {
                            A(function() {
                                if (!window.MaiTong) {
                                    return
                                }
                                h.userStatus.tm = "true";
                                MaiTong.updateConfig({
                                    token_url: i
                                });
                                s(t.visitorId, i);
                                var e = jQuery(F).data("tmData");
                                jQuery(F).data("tmData", _objectSpread2(_objectSpread2({}, e), {}, {
                                    visitorId: h.userStatus.visitorId
                                }));
                                if (h.userStatus && h.userStatus.tm === "true") {
                                    MaiTong.startWeb();
                                    d.setApi(MaiTong)
                                }
                                if (F) {
                                    jQuery(F).click()
                                }
                            })
                        }
                        setTimeout(function() {
                            O.unload()
                        }, 1)
                    } else {
                        h.userStatus = $.extend(true, {}, h.userStatus, t, {
                            login: "true",
                            tm: t.tm
                        });
                        MaiTong.updateConfig({
                            tmlang: f().tmlang,
                            lang: f().lang
                        });
                        if (t.tm === "true") {
                            A(function() {
                                if (F) {
                                    jQuery(F).click()
                                }
                            })
                        } else {
                            I()
                        }
                        Z();
                        setTimeout(function() {
                            O.unload()
                        }, 1)
                    }
                }
            });
            var j = {};
            setTimeout(function() {
                j.show = function() {
                    if (h.userStatus.ip == "1") {
                        O.unload();
                        O.load(h.login, h.transition);
                        O.title(T.LOGIN);
                        O.style(k.LOGIN);
                        O.show()
                    } else {
                        O.unload();
                        O.load(h.visitor, h.transition);
                        O.title(T.VISITOR);
                        O.style(k.LOGIN);
                        O.show()
                    }
                };
                j.hide = function() {
                    O.hide()
                };
                j.callback = function(e) {
                    typeof e === "function" && O.callback(e)
                };
                if (!window["loginPopup"]) {
                    window.loginPopup = j
                }
            }, 1);
            var E = function e() {
                var t = "user_ids[]=";
                var n = H();
                var i = W(n, "uids", t);
                var r = 0;
                for (var a = 0; a < i.length; a++) {
                    var o = i[a];
                    void
                    function(d) {
                        jQuery.ajax({
                            url: h.userTMStatus + "&" + V(d, "uids", t),
                            dataType: "jsonp",
                            jsonp: "callback",
                            cache: false,
                            timeout: 1e4,
                            data: {
                                domain: "micen"
                            },
                            success: function e(t) {
                                var n;
                                for (var i in t) {
                                    if (t[i].online) {
                                        n = C(d, i);
                                        for (var r = 0; r < n.length; r++) {
                                            n[r].online.push(i)
                                        }
                                    } else {
                                        n = C(d, i);
                                        for (var r = 0; r < n.length; r++) {
                                            n[r].offline.push(i)
                                        }
                                    }
                                }
                                for (var r = 0; r < d.length; r++) {
                                    n = d[r];
                                    var a;
                                    for (var o = 0; o < n.elems.length; o++) {
                                        var s = n.elems[o];
                                        var l = s.getAttribute("processor");
                                        var c = s.getAttribute("dataid");
                                        var u = s.getAttribute("orderid");
                                        switch (l) {
                                            case "list":
                                                {
                                                    var f = p.where(n.users, function(e, t) {
                                                        return p.indexOf(n.online, t.id) !== -1
                                                    });a = y(s, f);
                                                    if (a) {
                                                        s.buttonRefer = a;
                                                        a.$elem.each(function(e, t) {
                                                            jQuery(t).data("tmData", {
                                                                online: [t.uid],
                                                                dataId: c,
                                                                orderId: u,
                                                                visitorId: h.userStatus && h.userStatus.visitorId || ""
                                                            })
                                                        })
                                                    }
                                                };
                                                break;
                                            default:
                                                {
                                                    a = y(n.elems[o]);
                                                    if (a) {
                                                        s.buttonRefer = a;
                                                        a.$elem.data("tmData", {
                                                            online: n.online.slice(),
                                                            offline: n.offline.slice(),
                                                            dataId: c,
                                                            orderId: u,
                                                            visitorId: h.userStatus && h.userStatus.visitorId || ""
                                                        });
                                                        if (!n.online.length) {
                                                            a.offline();
                                                            S(a);
                                                            continue
                                                        }
                                                    }
                                                }
                                        }
                                        if (a) {
                                            a.online();
                                            S(a)
                                        }
                                    }
                                }
                            },
                            error: function e() {
                                P()
                            },
                            complete: function e() {
                                r++;
                                if (r === i.length) {
                                    v.beReady()
                                }
                            }
                        })
                    }.call(this, o)
                }
            };
            var L = {
                UNLOAD: 1,
                LOADING: 2,
                LOADED: 3
            };
            var ee;
            var te = L.UNLOAD;
            var N = false;
            var D = function e(t, n) {
                if (!N) {
                    MaiTong.configWeb({
                        token_url: t || h.token,
                        domain: "micen",
                        lang: n || f().lang || "en",
                        tmlang: n || f().tmlang || "en"
                    });
                    N = true
                }
            };
            var A = function e(t) {
                t = typeof t === "function" ? t : r;
                if (te !== L.UNLOAD) {
                    t(window.MaiTong);
                    return
                }
                ie(h.tmloader, function() {
                    if (!window.MaiTong) {
                        return
                    }
                    if ("ip" in h.userStatus && h.userStatus.ip !== "1" && h.userStatus.login !== "true") {
                        if (h.userStatus && h.userStatus.tm === "true" && h.userStatus.visitorId) {
                            var e = h.token + "&visitorId=" + h.userStatus.visitorId;
                            D(e);
                            s(h.userStatus.visitorId, e);
                            MaiTong.startWeb();
                            d.setApi(MaiTong)
                        } else {
                            D();
                            if (h.userStatus && h.userStatus.tm === "true") {
                                MaiTong.startWeb();
                                d.setApi(MaiTong)
                            }
                        }
                    } else {
                        D();
                        d.setApi(MaiTong);
                        if (h.userStatus && h.userStatus.login === "true" && h.userStatus.tm === "true") {
                            MaiTong.startWeb()
                        }
                    }
                    t(MaiTong)
                })
            };
            R(function(e) {
                t = jQuery(h.holderSelector).filter(function() {
                    return !this.__tm_rendered__
                }).each(function() {
                    this.__tm_rendered__ = true
                });
                if (t.length) {
                    ee = f().tmlang
                }
                l = x();
                _(function() {
                    E()
                });
                B(function(e) {
                    if (e.login === "true" || e.visitorId) {
                        if (e.tm === "true") {
                            A()
                        } else {
                            I()
                        }
                    } else {
                        A()
                    }
                })
            });
            window.loadTmChat = function() {
                l = x();
                _(function() {
                    E()
                })
            }
        })
    };
    var i = function() {
        var t = false;
        return function() {
            if (t) {
                return
            }
            var e = document.createElement("link");
            e.rel = "stylesheet";
            e.type = "text/css";
            e.media = "all";
            e.href = "https://www.micstatic.com/common/css/tm/tm_e26ae765.css";
            document.getElementsByTagName("head")[0].appendChild(e);
            t = true
        }
    }.call(this);
    var r = function() {
        var t = [];
        var n = function e() {
            if (window.jQuery) {
                while (t.length) {
                    t.shift().call(this)
                }
            }
        };
        return function(e) {
            typeof e === "function" && t.push(e);
            n();
            if (!window.jQuery) {
                ie("https://www.micstatic.com/common/js/libs/jquery_2ad57377.js", function() {
                    n()
                })
            }
        }
    }.call(this);
    var e = function e(t) {
        i();
        r(function() {
            n(t || {})
        })
    };
    window.addEventListener ? window.addEventListener("load", e, false) : window.attachEvent("onload", e);
    window.executeTM = e
}.call(this);

function asyncIsLogin(n) {
    var e = $("#loginUserName").length > 0;
    if (e) {
        var t = $("#loginUserName").val();
        var i = "//" + t + ".en.made-in-china.com"
    } else {
        var i = "//" + window.location.host
    }
    $.ajax({
        url: i + (document.getElementById("rootpath") == null ? "" : document.getElementById("rootpath").value) + "/head/loginStatu.do?t=" + (new Date).getTime(),
        error: function e() {},
        dataType: "json",
        crossDomain: e,
        xhrFields: {
            withCredentials: e
        },
        success: function e(t) {
            if (n) {
                n(t[0].loginStatu === "1")
            } else {
                window.location.reload(true)
            }
        }
    })
}(function(u) {
    u.extend(u.fn, {
        validate: function e(t) {
            if (!this.length) {
                if (t && t.debug && window.console) {
                    console.warn("nothing selected, can't validate, returning nothing")
                }
                return
            }
            var n = u.data(this[0], "validator");
            if (n) {
                return n
            }
            this.attr("novalidate", "novalidate");
            n = new u.validator(t, this[0]);
            u.data(this[0], "validator", n);
            if (n.settings.onsubmit) {
                this.validateDelegate(":submit", "click", function(e) {
                    if (n.settings.submitHandler) {
                        n.submitButton = e.target
                    }
                    if (u(e.target).hasClass("cancel")) {
                        n.cancelSubmit = true
                    }
                });
                this.submit(function(t) {
                    if (n.settings.debug) {
                        t.preventDefault()
                    }

                    function e() {
                        var e;
                        if (n.settings.submitHandler) {
                            if (n.submitButton) {
                                e = u("<input type='hidden'/>").attr("name", n.submitButton.name).val(n.submitButton.value).appendTo(n.currentForm)
                            }
                            n.settings.submitHandler.call(n, n.currentForm, t);
                            if (n.submitButton) {
                                e.remove()
                            }
                            return false
                        }
                        return true
                    }
                    if (n.cancelSubmit) {
                        n.cancelSubmit = false;
                        return e()
                    }
                    if (n.form()) {
                        if (n.pendingRequest) {
                            n.formSubmitted = true;
                            return false
                        }
                        return e()
                    } else {
                        n.focusInvalid();
                        return false
                    }
                })
            }
            return n
        },
        valid: function e() {
            if (u(this[0]).is("form")) {
                return this.validate().form()
            } else {
                var e = true;
                var t = u(this[0].form).validate();
                this.each(function() {
                    e &= t.element(this)
                });
                return e
            }
        },
        removeAttrs: function e(t) {
            var n = {},
                i = this;
            u.each(t.split(/\s/), function(e, t) {
                n[t] = i.attr(t);
                i.removeAttr(t)
            });
            return n
        },
        rules: function e(t, n) {
            var i = this[0];
            if (t) {
                var r = u.data(i.form, "validator").settings;
                var a = r.rules;
                var o = u.validator.staticRules(i);
                switch (t) {
                    case "add":
                        u.extend(o, u.validator.normalizeRule(n));
                        a[i.name] = o;
                        if (n.messages) {
                            r.messages[i.name] = u.extend(r.messages[i.name], n.messages)
                        }
                        break;
                    case "remove":
                        if (!n) {
                            delete a[i.name];
                            return o
                        }
                        var s = {};
                        u.each(n.split(/\s/), function(e, t) {
                            s[t] = o[t];
                            delete o[t]
                        });
                        return s
                }
            }
            var l = u.validator.normalizeRules(u.extend({}, u.validator.metadataRules(i), u.validator.classRules(i), u.validator.attributeRules(i), u.validator.staticRules(i)), i);
            if (l.required) {
                var c = l.required;
                delete l.required;
                l = u.extend({
                    required: c
                }, l)
            }
            return l
        }
    });
    u.extend(u.expr[":"], {
        blank: function e(t) {
            return !u.trim("" + t.value)
        },
        filled: function e(t) {
            return !!u.trim("" + t.value)
        },
        unchecked: function e(t) {
            return !t.checked
        }
    });
    u.validator = function(e, t) {
        this.settings = u.extend(true, {}, u.validator.defaults, e);
        this.currentForm = t;
        this.init()
    };
    u.validator.format = function(n, e) {
        if (arguments.length === 1) {
            return function() {
                var e = u.makeArray(arguments);
                e.unshift(n);
                return u.validator.format.apply(this, e)
            }
        }
        if (arguments.length > 2 && e.constructor !== Array) {
            e = u.makeArray(arguments).slice(1)
        }
        if (e.constructor !== Array) {
            e = [e]
        }
        u.each(e, function(e, t) {
            n = n.replace(new RegExp("\\{" + e + "\\}", "g"), t)
        });
        return n
    };
    u.extend(u.validator, {
        defaults: {
            messages: {},
            groups: {},
            rules: {},
            errorClass: "error",
            validClass: "valid",
            errorElement: "label",
            focusInvalid: true,
            errorContainer: u([]),
            errorLabelContainer: u([]),
            onsubmit: true,
            ignore: ":hidden",
            ignoreTitle: false,
            onfocusin: function e(t, n) {
                this.lastActive = t;
                if (this.settings.focusCleanup && !this.blockFocusCleanup) {
                    if (this.settings.unhighlight) {
                        this.settings.unhighlight.call(this, t, this.settings.highlightErrorClass, this.settings.highlightValidClass)
                    }
                    this.addWrapper(this.errorsFor(t)).hide()
                }
            },
            onfocusout: function e(t, n) {
                if (!this.checkable(t) && (t.name in this.submitted || !this.optional(t))) {
                    this.element(t)
                }
            },
            onkeyup: function e(t, n) {
                if (n.which === 9 && this.elementValue(t) === "") {
                    return
                } else if (t.name in this.submitted || t === this.lastActive) {
                    this.element(t)
                }
            },
            onclick: function e(t, n) {
                if (t.name in this.submitted) {
                    this.element(t)
                } else if (t.parentNode.name in this.submitted) {
                    this.element(t.parentNode)
                }
            },
            highlight: function e(t, n, i) {
                if (t.type === "radio") {
                    this.findByName(t.name).addClass(n).removeClass(i)
                } else {
                    u(t).addClass(n).removeClass(i)
                }
            },
            unhighlight: function e(t, n, i) {
                if (t.type === "radio") {
                    this.findByName(t.name).removeClass(n).addClass(i)
                } else {
                    u(t).removeClass(n).addClass(i)
                }
            }
        },
        setDefaults: function e(t) {
            u.extend(u.validator.defaults, t)
        },
        messages: {
            required: "This field is required.",
            remote: "Please fix this field.",
            email: "Please enter a valid email address.",
            url: "Please enter a valid URL.",
            date: "Please enter a valid date.",
            dateISO: "Please enter a valid date (ISO).",
            number: "Please enter a valid number.",
            digits: "Please enter only digits.",
            creditcard: "Please enter a valid credit card number.",
            equalTo: "Please enter the same value again.",
            maxlength: u.validator.format("Please enter no more than {0} characters."),
            minlength: u.validator.format("Please enter at least {0} characters."),
            rangelength: u.validator.format("Please enter a value between {0} and {1} characters long."),
            range: u.validator.format("Please enter a value between {0} and {1}."),
            max: u.validator.format("Please enter a value less than or equal to {0}."),
            min: u.validator.format("Please enter a value greater than or equal to {0}.")
        },
        autoCreateRanges: false,
        prototype: {
            init: function e() {
                this.labelContainer = u(this.settings.errorLabelContainer);
                this.errorContext = this.labelContainer.length && this.labelContainer || u(this.currentForm);
                this.containers = u(this.settings.errorContainer).add(this.settings.errorLabelContainer);
                this.submitted = {};
                this.valueCache = {};
                this.pendingRequest = 0;
                this.pending = {};
                this.invalid = {};
                this.reset();
                var i = this.groups = {};
                u.each(this.settings.groups, function(n, e) {
                    u.each(e.split(/[\s,]+/), function(e, t) {
                        i[t] = n
                    })
                });
                var n = this.settings.rules;
                u.each(n, function(e, t) {
                    n[e] = u.validator.normalizeRule(t)
                });

                function t(e) {
                    var t = u.data(this[0].form, "validator"),
                        n = "on" + e.type.replace(/^validate/, "");
                    if (t.settings[n]) {
                        t.settings[n].call(t, this[0], e)
                    }
                }
                u(this.currentForm).validateDelegate(":text, [type='password'], [type='file'], select, textarea, " + "[type='number'], [type='search'] ,[type='tel'], [type='url'], " + "[type='email'], [type='datetime'], [type='date'], [type='month'], " + "[type='week'], [type='time'], [type='datetime-local'], " + "[type='range'], [type='color'] ", "focusin focusout keyup", t).validateDelegate("[type='radio'], [type='checkbox'], select, option", "click", t);
                if (this.settings.invalidHandler) {
                    u(this.currentForm).bind("invalid-form.validate", this.settings.invalidHandler)
                }
            },
            form: function e() {
                this.checkForm();
                u.extend(this.submitted, this.errorMap);
                this.invalid = u.extend({}, this.errorMap);
                if (!this.valid()) {
                    u(this.currentForm).triggerHandler("invalid-form", [this])
                }
                this.showErrors();
                return this.valid()
            },
            checkForm: function e() {
                this.prepareForm();
                for (var t = 0, n = this.currentElements = this.elements(); n[t]; t++) {
                    this.check(n[t])
                }
                return this.valid()
            },
            element: function e(t) {
                t = this.validationTargetFor(this.clean(t));
                this.lastElement = t;
                this.prepareElement(t);
                this.currentElements = u(t);
                var n = this.check(t) !== false;
                if (n) {
                    delete this.invalid[t.name]
                } else {
                    this.invalid[t.name] = true
                }
                if (!this.numberOfInvalids()) {
                    this.toHide = this.toHide.add(this.containers)
                }
                this.showErrors();
                return n
            },
            showErrors: function e(t) {
                if (t) {
                    u.extend(this.errorMap, t);
                    this.errorList = [];
                    for (var n in t) {
                        this.errorList.push({
                            message: t[n],
                            element: this.findByName(n)[0]
                        })
                    }
                    this.successList = u.grep(this.successList, function(e) {
                        return !(e.name in t)
                    })
                }
                if (this.settings.showErrors) {
                    this.settings.showErrors.call(this, this.errorMap, this.errorList)
                } else {
                    this.defaultShowErrors()
                }
            },
            resetForm: function e() {
                if (u.fn.resetForm) {
                    u(this.currentForm).resetForm()
                }
                this.submitted = {};
                this.lastElement = null;
                this.prepareForm();
                this.hideErrors();
                this.elements().removeClass(this.settings.errorClass).removeData("previousValue")
            },
            numberOfInvalids: function e() {
                return this.objectLength(this.invalid)
            },
            objectLength: function e(t) {
                var n = 0;
                for (var i in t) {
                    n++
                }
                return n
            },
            hideErrors: function e() {
                this.addWrapper(this.toHide).hide()
            },
            valid: function e() {
                return this.size() === 0
            },
            size: function e() {
                return this.errorList.length
            },
            focusInvalid: function e() {
                if (this.settings.focusInvalid) {
                    try {
                        var t = u(this.findLastActive() || this.invalidElements().length && this.invalidElements() || []).filter(":first");
                        t.focus().trigger("focusin");
                        if (t.is(":hidden")) {
                            var n = null;
                            if (this.settings.errorWrap) {
                                n = this.errorWrapsFor(t[0])
                            } else {
                                n = this.errorsFor(t[0])
                            }
                            setTimeout(function() {
                                var e = n[0].getBoundingClientRect();
                                var t = (document.documentElement.scrollTop || document.body.scrollTop || 0) + e.top - 100;
                                document.documentElement.scrollTop = document.body.scrollTop = t
                            }, 0)
                        }
                    } catch (e) {}
                }
            },
            findLastActive: function e() {
                var t = this.lastActive;
                return t && u.grep(this.errorList, function(e) {
                    return e.element.name === t.name
                }).length === 1 && t
            },
            elements: function e() {
                var t = this,
                    n = {};
                return u(this.currentForm).find("input, select, textarea").not(":submit, :reset, :image, [disabled]").not(this.settings.ignore).filter(function() {
                    if (!this.name && t.settings.debug && window.console) {
                        console.error("%o has no name assigned", this)
                    }
                    if (this.name in n || !t.objectLength(u(this).rules())) {
                        return false
                    }
                    n[this.name] = true;
                    return true
                })
            },
            clean: function e(t) {
                return u(t)[0]
            },
            errors: function e() {
                var t = this.settings.errorClass.replace(" ", ".");
                return u(this.settings.errorElement + "." + t, this.errorContext)
            },
            reset: function e() {
                this.successList = [];
                this.errorList = [];
                this.errorMap = {};
                this.toShow = u([]);
                this.toHide = u([]);
                this.currentElements = u([])
            },
            prepareForm: function e() {
                this.reset();
                this.toHide = this.errors().add(this.containers)
            },
            prepareElement: function e(t) {
                this.reset();
                this.toHide = this.errorsFor(t)
            },
            elementValue: function e(t) {
                var n = u(t).attr("type"),
                    i = u(t).val();
                if (n === "radio" || n === "checkbox") {
                    return u('input[name="' + u(t).attr("name") + '"]:checked').val()
                }
                if (typeof i === "string") {
                    return i.replace(/\r/g, "")
                }
                return i
            },
            check: function e(t) {
                t = this.validationTargetFor(this.clean(t));
                var n = u(t).rules();
                var i = false;
                var r = this.elementValue(t);
                var a;
                for (var o in n) {
                    var s = {
                        method: o,
                        parameters: n[o]
                    };
                    try {
                        a = u.validator.methods[o].call(this, r, t, s.parameters);
                        if (a === "dependency-mismatch") {
                            i = true;
                            continue
                        }
                        i = false;
                        if (a === "pending") {
                            this.toHide = this.toHide.not(this.errorsFor(t));
                            return
                        }
                        if (!a) {
                            this.formatAndAdd(t, s);
                            return false
                        }
                    } catch (e) {
                        if (this.settings.debug && window.console) {
                            console.log("exception occured when checking element " + t.id + ", check the '" + s.method + "' method", e)
                        }
                        throw e
                    }
                }
                if (i) {
                    return
                }
                if (this.objectLength(n)) {
                    this.successList.push(t)
                }
                return true
            },
            customMetaMessage: function e(t, n) {
                if (!u.metadata) {
                    return
                }
                var i = this.settings.meta ? u(t).metadata()[this.settings.meta] : u(t).metadata();
                return i && i.messages && i.messages[n]
            },
            customDataMessage: function e(t, n) {
                return u(t).data("msg-" + n.toLowerCase()) || t.attributes && u(t).attr("data-msg-" + n.toLowerCase())
            },
            customMessage: function e(t, n) {
                var i = this.settings.messages[t];
                return i && (i.constructor === String ? i : i[n])
            },
            findDefined: function e() {
                for (var t = 0; t < arguments.length; t++) {
                    if (arguments[t] !== undefined) {
                        return arguments[t]
                    }
                }
                return undefined
            },
            defaultMessage: function e(t, n) {
                return this.findDefined(this.customMessage(t.name, n), this.customDataMessage(t, n), this.customMetaMessage(t, n), !this.settings.ignoreTitle && t.title || undefined, u.validator.messages[n], "<strong>Warning: No message defined for " + t.name + "</strong>")
            },
            formatAndAdd: function e(t, n) {
                var i = this.defaultMessage(t, n.method),
                    r = /\$?\{(\d+)\}/g;
                if (typeof i === "function") {
                    i = i.call(this, n.parameters, t)
                } else if (r.test(i)) {
                    i = u.validator.format(i.replace(r, "{$1}"), n.parameters)
                }
                this.errorList.push({
                    message: i,
                    element: t
                });
                this.errorMap[t.name] = i;
                this.submitted[t.name] = i
            },
            addWrapper: function e(t) {
                if (this.settings.wrapper) {
                    t = t.add(t.parent(this.settings.wrapper))
                }
                return t
            },
            defaultShowErrors: function e() {
                var t, n;
                for (t = 0; this.errorList[t]; t++) {
                    var i = this.errorList[t];
                    if (this.settings.highlight) {
                        this.settings.highlight.call(this, i.element, this.settings.highlightErrorClass, this.settings.highlightValidClass)
                    }
                    this.showLabel(i.element, i.message)
                }
                if (this.errorList.length) {
                    this.toShow = this.toShow.add(this.containers)
                }
                if (this.settings.success) {
                    for (t = 0; this.successList[t]; t++) {
                        this.showLabel(this.successList[t])
                    }
                }
                if (this.settings.unhighlight) {
                    for (t = 0, n = this.validElements(); n[t]; t++) {
                        this.settings.unhighlight.call(this, n[t], this.settings.highlightErrorClass, this.settings.highlightValidClass)
                    }
                }
                this.toHide = this.toHide.not(this.toShow).filter(function(e, t) {
                    return u(t).is("[for]") || u(t).parent().is("wrapfor")
                });
                this.hideErrors();
                this.addWrapper(this.toShow).show()
            },
            validElements: function e() {
                return this.currentElements.not(this.invalidElements())
            },
            invalidElements: function e() {
                return u(this.errorList).map(function() {
                    return this.element
                })
            },
            showLabel: function e(t, n) {
                var i = this.errorsFor(t);
                if (i.length) {
                    i.removeClass(this.settings.validClass).addClass(this.settings.errorClass);
                    if (i.attr("generated")) {
                        i.html(n)
                    }
                } else {
                    i = u("<" + this.settings.errorElement + "/>").attr({
                        for: this.idOrName(t),
                        generated: true
                    }).addClass(this.settings.errorClass).html(n || "");
                    if (this.settings.wrapper) {
                        i = i.hide().show().wrap("<" + this.settings.wrapper + "/>").parent()
                    }
                    if (!this.labelContainer.append(i).length) {
                        if (this.settings.errorPlacement) {
                            this.settings.errorPlacement(i, u(t))
                        } else {
                            i.insertAfter(t)
                        }
                    }
                }
                if (!n && this.settings.success) {
                    i.text("");
                    if (typeof this.settings.success === "string") {
                        i.addClass(this.settings.success)
                    } else {
                        this.settings.success(i, t)
                    }
                }
                this.toShow = this.toShow.add(i)
            },
            errorsFor: function e(t) {
                var n = this.idOrName(t);
                return this.errors().filter(function() {
                    return u(this).attr("for") === n || u(this).parent().attr("wrapfor") === n
                })
            },
            idOrName: function e(t) {
                return this.groups[t.name] || (this.checkable(t) ? t.name : t.id || t.name)
            },
            validationTargetFor: function e(t) {
                if (this.checkable(t)) {
                    t = this.findByName(t.name).not(this.settings.ignore)[0]
                }
                return t
            },
            checkable: function e(t) {
                return /radio|checkbox/i.test(t.type)
            },
            findByName: function e(t) {
                return u(this.currentForm).find('[name="' + t + '"]')
            },
            getLength: function e(t, n) {
                switch (n.nodeName.toLowerCase()) {
                    case "select":
                        return u("option:selected", n).length;
                    case "input":
                        if (this.checkable(n)) {
                            return this.findByName(n.name).filter(":checked").length
                        }
                }
                return t.length
            },
            depend: function e(t, n) {
                return this.dependTypes[_typeof(t)] ? this.dependTypes[_typeof(t)](t, n) : true
            },
            dependTypes: {
                boolean: function e(t, n) {
                    return t
                },
                string: function e(t, n) {
                    return !!u(t, n.form).length
                },
                function: function e(t, n) {
                    return t(n)
                }
            },
            optional: function e(t) {
                var n = this.elementValue(t);
                return !u.validator.methods.required.call(this, n, t) && "dependency-mismatch"
            },
            startRequest: function e(t) {
                if (!this.pending[t.name]) {
                    this.pendingRequest++;
                    this.pending[t.name] = true
                }
            },
            stopRequest: function e(t, n) {
                this.pendingRequest--;
                if (this.pendingRequest < 0) {
                    this.pendingRequest = 0
                }
                delete this.pending[t.name];
                if (n && this.pendingRequest === 0 && this.formSubmitted && this.form()) {
                    u(this.currentForm).submit();
                    this.formSubmitted = false
                } else if (!n && this.pendingRequest === 0 && this.formSubmitted) {
                    u(this.currentForm).triggerHandler("invalid-form", [this]);
                    this.formSubmitted = false
                }
            },
            previousValue: function e(t) {
                return u.data(t, "previousValue") || u.data(t, "previousValue", {
                    old: null,
                    valid: true,
                    message: this.defaultMessage(t, "remote")
                })
            }
        },
        classRuleSettings: {
            required: {
                required: true
            },
            email: {
                email: true
            },
            url: {
                url: true
            },
            date: {
                date: true
            },
            dateISO: {
                dateISO: true
            },
            number: {
                number: true
            },
            digits: {
                digits: true
            },
            creditcard: {
                creditcard: true
            }
        },
        addClassRules: function e(t, n) {
            if (t.constructor === String) {
                this.classRuleSettings[t] = n
            } else {
                u.extend(this.classRuleSettings, t)
            }
        },
        classRules: function e(t) {
            var n = {};
            var i = u(t).attr("class");
            if (i) {
                u.each(i.split(" "), function() {
                    if (this in u.validator.classRuleSettings) {
                        u.extend(n, u.validator.classRuleSettings[this])
                    }
                })
            }
            return n
        },
        attributeRules: function e(t) {
            var n = {};
            var i = u(t);
            for (var r in u.validator.methods) {
                var a;
                if (r === "required") {
                    a = i.get(0).getAttribute(r);
                    if (a === "") {
                        a = true
                    }
                    a = !!a
                } else {
                    a = i.attr(r)
                }
                if (a) {
                    n[r] = a
                } else if (i[0].getAttribute("type") === r) {
                    n[r] = true
                }
            }
            if (n.maxlength && /-1|2147483647|524288/.test(n.maxlength)) {
                delete n.maxlength
            }
            return n
        },
        metadataRules: function e(t) {
            if (!u.metadata) {
                return {}
            }
            var n = u.data(t.form, "validator").settings.meta;
            return n ? u(t).metadata()[n] : u(t).metadata()
        },
        staticRules: function e(t) {
            var n = {};
            var i = u.data(t.form, "validator");
            if (i.settings.rules) {
                n = u.validator.normalizeRule(i.settings.rules[t.name]) || {}
            }
            return n
        },
        normalizeRules: function e(i, r) {
            u.each(i, function(e, t) {
                if (t === false) {
                    delete i[e];
                    return
                }
                if (t.param || t.depends) {
                    var n = true;
                    switch (_typeof(t.depends)) {
                        case "string":
                            n = !!u(t.depends, r.form).length;
                            break;
                        case "function":
                            n = t.depends.call(r, r);
                            break
                    }
                    if (n) {
                        i[e] = t.param !== undefined ? t.param : true
                    } else {
                        delete i[e]
                    }
                }
            });
            u.each(i, function(e, t) {
                i[e] = u.isFunction(t) ? t(r) : t
            });
            u.each(["minlength", "maxlength", "min", "max"], function() {
                if (i[this]) {
                    i[this] = Number(i[this])
                }
            });
            u.each(["rangelength", "range"], function() {
                if (i[this]) {
                    i[this] = [Number(i[this][0]), Number(i[this][1])]
                }
            });
            if (u.validator.autoCreateRanges) {
                if (i.min && i.max) {
                    i.range = [i.min, i.max];
                    delete i.min;
                    delete i.max
                }
                if (i.minlength && i.maxlength) {
                    i.rangelength = [i.minlength, i.maxlength];
                    delete i.minlength;
                    delete i.maxlength
                }
            }
            if (i.messages) {
                delete i.messages
            }
            return i
        },
        normalizeRule: function e(t) {
            if (typeof t === "string") {
                var n = {};
                u.each(t.split(/\s/), function() {
                    n[this] = true
                });
                t = n
            }
            return t
        },
        addMethod: function e(t, n, i) {
            u.validator.methods[t] = n;
            u.validator.messages[t] = i !== undefined ? i : u.validator.messages[t];
            if (n.length < 3) {
                u.validator.addClassRules(t, u.validator.normalizeRule(t))
            }
        },
        methods: {
            required: function e(t, n, i) {
                if (!this.depend(i, n)) {
                    return "dependency-mismatch"
                }
                if (n.nodeName.toLowerCase() === "select") {
                    var r = u(n).val();
                    return r && r.length > 0
                }
                if (this.checkable(n)) {
                    return this.getLength(t, n) > 0
                }
                return u.trim(t).length > 0
            },
            remote: function e(o, s, t) {
                if (this.optional(s)) {
                    return "dependency-mismatch"
                }
                var l = this.previousValue(s);
                if (!this.settings.messages[s.name]) {
                    this.settings.messages[s.name] = {}
                }
                l.originalMessage = this.settings.messages[s.name].remote;
                this.settings.messages[s.name].remote = l.message;
                t = typeof t === "string" && {
                    url: t
                } || t;
                if (this.pending[s.name]) {
                    return "pending"
                }
                if (l.old === o) {
                    return l.valid
                }
                l.old = o;
                var c = this;
                this.startRequest(s);
                var n = {};
                n[s.name] = o;
                u.ajax(u.extend(true, {
                    url: t,
                    mode: "abort",
                    port: "validate" + s.name,
                    dataType: "json",
                    data: n,
                    success: function e(t) {
                        if (typeof c.settings.messages[s.name] != "undefined") {
                            c.settings.messages[s.name].remote = l.originalMessage
                        }
                        var n = t === true || t === "true";
                        if (n) {
                            var i = c.formSubmitted;
                            c.prepareElement(s);
                            c.formSubmitted = i;
                            c.successList.push(s);
                            delete c.invalid[s.name];
                            c.showErrors()
                        } else {
                            var r = {};
                            var a = t || c.defaultMessage(s, "remote");
                            r[s.name] = l.message = u.isFunction(a) ? a(o) : a;
                            c.invalid[s.name] = true;
                            c.showErrors(r)
                        }
                        l.valid = n;
                        c.stopRequest(s, n)
                    }
                }, t));
                return "pending"
            },
            minlength: function e(t, n, i) {
                var r = u.isArray(t) ? t.length : this.getLength(u.trim(t), n);
                return this.optional(n) || r >= i
            },
            maxlength: function e(t, n, i) {
                var r = u.isArray(t) ? t.length : this.getLength(u.trim(t), n);
                return this.optional(n) || r <= i
            },
            rangelength: function e(t, n, i) {
                var r = u.isArray(t) ? t.length : this.getLength(u.trim(t), n);
                return this.optional(n) || r >= i[0] && r <= i[1]
            },
            min: function e(t, n, i) {
                return this.optional(n) || t >= i
            },
            max: function e(t, n, i) {
                return this.optional(n) || t <= i
            },
            range: function e(t, n, i) {
                return this.optional(n) || t >= i[0] && t <= i[1]
            },
            email: function e(t, n) {
                return this.optional(n) || /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(t)
            },
            url: function e(t, n) {
                return this.optional(n) || /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(t)
            },
            date: function e(t, n) {
                return this.optional(n) || !/Invalid|NaN/.test(new Date(t))
            },
            dateISO: function e(t, n) {
                return this.optional(n) || /^\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}$/.test(t)
            },
            number: function e(t, n) {
                return this.optional(n) || /^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(t)
            },
            digits: function e(t, n) {
                return this.optional(n) || /^\d+$/.test(t)
            },
            creditcard: function e(t, n) {
                if (this.optional(n)) {
                    return "dependency-mismatch"
                }
                if (/[^0-9 \-]+/.test(t)) {
                    return false
                }
                var i = 0,
                    r = 0,
                    a = false;
                t = t.replace(/\D/g, "");
                for (var o = t.length - 1; o >= 0; o--) {
                    var s = t.charAt(o);
                    r = parseInt(s, 10);
                    if (a) {
                        if ((r *= 2) > 9) {
                            r -= 9
                        }
                    }
                    i += r;
                    a = !a
                }
                return i % 10 === 0
            },
            equalTo: function e(t, n, i) {
                var r = u(i);
                if (this.settings.onfocusout) {
                    r.unbind(".validate-equalTo").bind("blur.validate-equalTo", function() {
                        u(n).valid()
                    })
                }
                return t === r.val()
            }
        }
    });
    u.format = u.validator.format
})(jQuery);
(function(i) {
    var r = {};
    if (i.ajaxPrefilter) {
        i.ajaxPrefilter(function(e, t, n) {
            var i = e.port;
            if (e.mode === "abort") {
                if (r[i]) {
                    r[i].abort()
                }
                r[i] = n
            }
        })
    } else {
        var a = i.ajax;
        i.ajax = function(e) {
            var t = ("mode" in e ? e : i.ajaxSettings).mode,
                n = ("port" in e ? e : i.ajaxSettings).port;
            if (t === "abort") {
                if (r[n]) {
                    r[n].abort()
                }
                return r[n] = a.apply(this, arguments)
            }
            return a.apply(this, arguments)
        }
    }
})(jQuery);
(function(r) {
    if (!jQuery.event.special.focusin && !jQuery.event.special.focusout && document.addEventListener) {
        r.each({
            focus: "focusin",
            blur: "focusout"
        }, function(t, i) {
            r.event.special[i] = {
                setup: function e() {
                    this.addEventListener(t, n, true)
                },
                teardown: function e() {
                    this.removeEventListener(t, n, true)
                },
                handler: function e(t) {
                    var n = arguments;
                    n[0] = r.event.fix(t);
                    n[0].type = i;
                    return r.event.handle.apply(this, n)
                }
            };

            function n(e) {
                e = r.event.fix(e);
                e.type = i;
                return r.event.handle.call(this, e)
            }
        })
    }
    r.extend(r.fn, {
        validateDelegate: function e(n, t, i) {
            return this.bind(t, function(e) {
                var t = r(e.target);
                if (t.is(n)) {
                    return i.apply(t, arguments)
                }
            })
        }
    })
})(jQuery);
$.extend(true, $.validator, {
    defaults: {
        errorWrap: false,
        errorWrapElement: '<div class="feedback-block"></div>',
        ignore: ":disabled",
        onkeyup: false,
        onfocus: false,
        highlightErrorClass: "hlt-error",
        highlightValidClass: "hlt-valid",
        showErrors: function e(t, n) {
            var i = this;
            $.each(n, function(e, t) {
                i.errorsFor(t.element).html(t.message)
            });
            this.defaultShowErrors()
        },
        highlight: false,
        unhighlight: false
    },
    messages: {
        enonly: "Please enter in English only.",
        teleCountryNum: "请用数字填写电话的国家区号",
        teleAreaNum: "请用数字填写电话的地区区号",
        telephoneNum: "请用数字、连字符（-）或空格填写电话号码",
        singleTelNum: "请输入电话号码"
    },
    prototype: {
        formatAndAdd: function e(t, n) {
            var i = this.defaultMessage(t, n.method),
                r = /\$?\{(\d+)\}/g;
            if (typeof i === "function") {
                i = i.call(this, n.parameters, t)
            } else if (r.test(i)) {
                i = $.validator.format(i.replace(r, "{$1}"), n.parameters)
            }
            this.errorList.push({
                message: i,
                element: t,
                method: n.method
            });
            this.errorMap[t.name] = i;
            this.submitted[t.name] = i
        },
        elements: function e() {
            var t = this,
                n = {};
            return $(this.currentForm).find("input, select, textarea").not(":submit, :reset, :image, [disabled]").not(this.settings.ignore).filter(function() {
                if (!this.name && t.settings.debug && window.console) {
                    console.error("%o has no name assigned", this)
                }
                if (!t.objectLength($(this).rules())) {
                    return false
                }
                n[this.name] = true;
                return true
            })
        },
        errorWrapsFor: function e(t) {
            var n = this.idOrName(t);
            return $(t).parents("form:first").find('[wrapfor="' + n + '"]')
        },
        showLabel: function e(t, n) {
            var i = this.errorsFor(t);
            if (i.length) {
                i.removeClass(this.settings.validClass).addClass(this.settings.errorClass);
                if (i.attr("generated")) {
                    i.html(n)
                }
            } else {
                i = $("<" + this.settings.errorElement + "/>").attr({
                    for: this.idOrName(t),
                    generated: true
                }).addClass(this.settings.errorClass).html(n || "");
                if (this.settings.wrapper) {
                    i = i.hide().show().wrap("<" + this.settings.wrapper + "/>").parent()
                }
                if (!this.labelContainer.append(i).length) {
                    if (this.settings.errorPlacement) {
                        this.settings.errorPlacement(i, $(t))
                    } else if (this.settings.errorWrap) {
                        var r;
                        r = this.errorWrapsFor(t);
                        if (!r.length) {
                            r = $(typeof this.settings.errorWrap === "string" ? this.settings.errorWrap : this.settings.errorWrapElement).attr({
                                wrapfor: this.idOrName(t)
                            });
                            if (this.settings.errorWrapPlacement) {
                                this.settings.errorWrapPlacement(r, $(t))
                            } else {
                                $(t).after(r)
                            }
                        }
                        r.append(i)
                    } else {
                        i.insertAfter(t)
                    }
                }
            }
            if (!n && this.settings.success) {
                i.text("");
                if (typeof this.settings.success === "string") {
                    i.addClass(this.settings.success)
                } else {
                    this.settings.success(i, t)
                }
            }
            this.toShow = this.toShow.add(i)
        },
        getLength: function e(t, n) {
            switch (n.nodeName.toLowerCase()) {
                case "select":
                    return $("option:selected", n).length;
                case "input":
                    if (this.checkable(n)) {
                        return this.findByName(n.name).filter(":checked").length
                    }
                case "textarea":
                    t = t.replace(/\n/g, "**");
                    break
            }
            return t.replace(/[^\x00-\x7f]/g, "**").length
        }
    },
    methods: {
        date: function e(t, n) {
            return this.optional(n) || !/Invalid|NaN/.test(new Date(t.replace(/-/g, "/")))
        },
        enonly: function e(t, n, i) {
            return !/[^\x00-\x7f]/.test(t)
        },
        email: function e(t, n) {
            var e = $.trim(t);
            if (e === "") {
                return true
            }
            if (!/^[-\.\w]+@[-\.a-zA-Z0-9]+\.[-\.a-zA-Z0-9]+$/.test(e)) {
                return false
            }
            var i = e.split("@")[0];
            var r = e.split("@")[1];
            if (!/^.*[A-Za-z0-9]+.*$/.test(i)) {
                return false
            }
            if (/(^\..*)|(.*\.$)/.test(i)) {
                return false
            }
            if (/(\.){2,}/.test(i)) {
                return false
            }
            var a = r.lastIndexOf(".");
            var o = r.substr(0, a);
            var s = r.substr(a + 1);
            if (/(^[\.-].*)|(.*[\.-]$)/.test(o)) {
                return false
            }
            if (/(\.){2,}/.test(o)) {
                return false
            }
            if (!/^[a-zA-Z]+$/.test(s)) {
                return false
            }
            return true
        },
        url: function e(t, n) {
            t = $.trim(t);
            return this.optional(n) || /^((?:https?):\/\/)?(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(t)
        },
        teleCountryNum: function e(t, n) {
            t = $.trim(t);
            return this.optional(n) || /^\d+$/.test(t)
        },
        teleAreaNum: function e(t, n) {
            t = $.trim(t);
            return this.optional(n) || /^\d+$/.test(t)
        },
        telephoneNum: function e(t) {
            t = $.trim(t);
            return !t || /^[\d\s\-]*$/.test(t)
        },
        singleTelNum: function e(t) {
            t = $.trim(t);
            return !t || /^[a-zA-Z0-9\+\(\)\-]{1,20}$/.test(t)
        }
    }
});
$.fn.staticTip = function() {
    this.each(function(e, i) {
        if (/input/i.test(i.tagName) && /text|password|hidden/i.test(i.type) || /textarea/i.test(i.tagName)) {
            $(i).blur(function() {
                var e = i.getAttribute("static-tip");
                var t = i.name || i.id;
                var n = $("[tip4=" + t + "]");
                if ($(i).valid()) {
                    if (e && !/true|false/i.test(e)) {
                        n.html(e)
                    }
                    n.show()
                } else {
                    n.hide()
                }
            })
        }
    })
};
$(function() {
    $("input[static-tip],textarea[static-tip]").each(function() {
        $(this).staticTip()
    })
});
$(function() {
    var n = false;
    var e = false;
    if (typeof i18n !== "undefined") {
        n = i18n.currLocal !== "en";
        e = i18n.currLocal === "sa"
    }
    if (!!$(".J-nav-fix").length) {
        var t = new JFixed({
            carrier: $(".J-nav-fix")[0],
            isRestore: true,
            position: {
                top: 0
            },
            triggerTop: $(".J-nav-fix").offset().top
        }).fixed();
        if (!!$(".sr-nav-liveFlag").length) {
            var i = $(".sr-nav-liveFlag");
            t.on("fixed", function() {
                if (i.hasClass("in")) return;
                i.addClass("in")
            });
            t.on("unfixed", function() {
                if (!i.hasClass("in")) return;
                i.removeClass("in")
            })
        }
    }
    if (!!$(".J-editEntrance").length) {
        var r = $(".J-editEntrance");
        var a = r.offset().top - 51;
        var o = $(".J-layout").offset().top + r.innerWidth() + 61;
        var s = $(".sr-crumb").length;
        if (s) {
            a = a + 41;
            r.attr("style", "top:" + o + "px")
        }
        $(document).on("scroll", function() {
            if ($(document).scrollTop() > a) {
                r.addClass("fix");
                if (s) {
                    r.attr("style", "")
                }
            } else {
                r.removeClass("fix");
                if (s) {
                    r.attr("style", "top:" + o + "px")
                }
            }
        })
    } else {
        if (!!$(".sr-nav-wrap").length) {
            setTimeout(function() {
                var e = $(".sr-nav-wrap").position().top + 51;
                var t = $(".sr-nav-wrap").position().top + 223;
                var n = $(".J-editEntrance", "body");
                n.attr("style", "top:" + t + "px");
                $(document).on("scroll", function() {
                    if ($(document).scrollTop() > e) {
                        n.addClass("fix");
                        n.attr("style", "")
                    } else {
                        n.removeClass("fix");
                        n.attr("style", "top:" + t + "px")
                    }
                })
            })
        }
    }
    if (!!$(".J-show-more").length) {
        $(".J-show-more").click(function(e) {
            e.preventDefault();
            var t = $(this).parents(".J-txt-wrap:first");
            var n = "View More";
            var i = "View Less";
            if (typeof i18n !== "undefined" && i18n.lang !== {}) {
                n = i18n._("more");
                i = i18n._("less")
            }
            if (typeof ABOUT_LANG !== "undefined") {
                n = ABOUT_LANG.more;
                i = ABOUT_LANG.less
            }
            var r = n + '<i class="ob-icon icon-down"></i>';
            var a = i + '<i class="ob-icon icon-up"></i>';
            if (t.hasClass("more")) {
                t.removeClass("more");
                $(this).html(r)
            } else {
                t.addClass("more");
                $(this).html(a)
            }
        })
    }
    $(document).on("click", ".J-proGroup-more", function(e) {
        e.preventDefault();
        $(this).hide();
        $(".J-proGroup-less").show();
        $(".J-proGroup-more-list").slideDown(300)
    });
    $(document).on("click", ".J-proGroup-less", function(e) {
        e.preventDefault();
        $(this).hide();
        $(".J-proGroup-more").show();
        $(".J-proGroup-more-list").slideUp(300)
    });
    var l = "ontouchend" in window ? "touchend" : "click";
    var c = $(".J-menu-entry");
    var u = $(".J-menu-wrap");
    var f = $(".J-tab-trigger", u);
    var d = $(".J-header-mark");
    var h = $(".J-search-entry");
    var p = $(".J-pad-search-bar");
    var v = $("html,body");
    var m = $(".J-pad-rfq-wrap");
    var g = $(".pad-search-bar");
    var w = "open";
    var y = "ontouchend" in window;
    c.on(l, function() {
        u.addClass(w);
        d.fadeIn(200);
        g.css("z-index", "-1");
        v.css({
            overflow: "hidden",
            height: "100%"
        });
        v.on("touchmove", function(e) {
            e.preventDefault()
        });
        u.on("touchmove", function(e) {
            e.stopPropagation()
        })
    });
    $(".J-header-mark,.J-menu-close").on(l, function() {
        u.removeClass(w);
        f.removeClass(w);
        d.fadeOut(200);
        g.css("z-index", "");
        v.css({
            overflow: "auto",
            height: "auto"
        });
        v.unbind("touchmove")
    });
    $(".J-menu-wrap").on(l, ".J-tab-trigger", function(e) {
        e.stopPropagation();
        f.removeClass(w);
        $(this).addClass(w)
    });
    h.on(l, function() {
        p.addClass(w);
        d.fadeIn(200);
        v.css({
            overflow: "hidden",
            height: "100%"
        })
    });
    $(".J-header-mark,.J-search-close").on(l, function() {
        p.removeClass(w);
        d.fadeOut(200);
        v.css({
            overflow: "auto",
            height: "auto"
        });
        v.unbind("touchmove")
    });
    $(".J-searchType, .J-inputWrap").on("click touchstart touchmove touchend", function(e) {
        e.stopPropagation()
    });
    $(".m-search-input").on("focus", function() {
        var e = $(".J-searchType");
        if (e.hasClass("hover")) {
            e.removeClass("hover")
        }
    });
    $(document).on("click touchstart touchmove touchend", function(e) {
        var t = $(".J-searchType");
        if (t.hasClass("hover")) {
            t.removeClass("hover")
        }
        if (y && e.type === "click" && !!$(".J-cate-in-pc .cate-item.hover,.J-cate-in-pc .cate-more.hover").length) {
            $(".J-cate-in-pc .cate-item.hover,.J-cate-in-pc .cate-more.hover").removeClass("hover");
            e.preventDefault();
            e.stopPropagation()
        }
        $(".m-search-input").blur()
    });
    $(".J-searchProdsByKeyWord").click(function(e) {
        e.preventDefault();
        var t = $(this).parent().find("[name=searchInKeywordList]");
        t.find("[name=searchKeyword]").val($(this).attr("cz-value"));
        t.submit()
    });
    if (!!$("#safeimage").length) {
        $("#safeimage").find("input:checkbox").change(function() {
            window.location.href = $(this).val()
        })
    }
    var b = null;
    var x = "ontouchend" in window;
    if (!x) {
        $(".J-title-comName").addClass("in-pc")
    }
    $(".J-title-comName").hover(function() {
        if (!x) {
            b = setTimeout(function() {
                $(".J-comInfo-details").stop(false, true).slideDown(300);
                $(".animate-start").addClass("animate-end")
            }, 200)
        }
    }, function() {
        if (!x) {
            b && clearTimeout(b);
            $(".J-comInfo-details").stop(false, true).slideUp(300);
            setTimeout(function() {
                $(".animate-start").removeClass("animate-end")
            }, 300)
        }
    });
    window.login = function(e, n, t) {
        var i = "logonFrom=6&logonInCode=17&newShow=1" + (e || "");
        var r = window.location.protocol + "//" + window.location.host + (document.getElementById("rootpath") == null ? "" : document.getElementById("rootpath").value) + "/head/transition.do";
        var a = window.loginLayer = new LoginLayer2({
            callback: function e(t) {
                a.unload();
                asyncIsLogin(n)
            },
            closeBack: function e() {
                t && t()
            }
        });
        a.load(i, r)
    };
    $(".J-sign-in").on("click", function() {
        login();
        return false
    });

    function _() {
        var e = encodeURIComponent(window.location.href);
        var t = "https://login.made-in-china.com/logon.do?xcase=doLogout&baseNextPage=" + e + "";
        $("#J-signout a").attr("href", t)
    }
    if ($("#J-signout").length) {
        _()
    }
    if (window["SlideNav"]) {
        var C = new SlideNav;
        C.addItem("goTop");
        if ($("#J-SlideNav-Survey").length > 0) {
            SlideNav.survey.view.link = $("#J-SlideNav-Survey").attr("linkData");
            C.addItem("survey")
        }
        SlideNav.defaultsInit(C);
        C.show()
    }
    var S = function e() {};
    var I = function e(t) {
        alert(t)
    };
    var F = {
        require: [{
            handle: function e(t) {
                return t !== ""
            },
            errMsg: n ? i18n._("productKeywordRequired") : "Please input keyword(s).",
            ok: S,
            err: I
        }],
        enonly: [{
            handle: function e(t) {
                if (n) return true;
                return /^[\x00-\x7F]*$/.test(t)
            },
            errMsg: "Please input the information in English only.",
            ok: S,
            err: I
        }]
    };
    var T = function e(t) {
        var n = jQuery.trim(t.val());
        var i = true;
        var r;
        var a;
        var o;
        for (var s in F) {
            a = F[s];
            for (var l = 0; l < a.length; l++) {
                o = a[l];
                r = Object.prototype.toString.call(o.handle).match(/\w+/g)[1].toLowerCase();
                if (r === "function") {
                    i = o.handle.call(t[0], n)
                } else if (r === "regexp") {
                    o.handle.exec("");
                    i = o.handle.test(n)
                }
                if (i) {
                    o.ok.call(t[0])
                } else {
                    o.err.call(t[0], o.errMsg);
                    break
                }
            }
            if (!i) {
                break
            }
        }
        return i
    };
    var k = [{
        form: "[name=searchInKeywordSide]",
        text: "[name=searchKeywordSide]"
    }, {
        form: "#searchInKeywordList",
        text: "[name=searchKeyword]"
    }];
    $.each(k, function(e, t) {
        var n = jQuery(t.form);
        var i = n.find(t.text);
        if (n.length && i.length) {
            n.submit(function(e) {
                var t = T(i);
                if (!t) {
                    e.preventDefault()
                }
            })
        }
    });
    var O = $("#loginUserName").val();
    var j = n ? "/co_".concat(O) : "";
    $.ajax({
        url: j + "/liveFlag",
        dataType: "json",
        type: "get",
        success: function e(t) {
            if (t && !!$(".sr-nav-liveFlag")) {
                $(".sr-nav-liveFlag").show()
            }
        },
        error: function e() {}
    })
});
var forbiddenScroll = function e(t, n) {
    if ($.browser.mozilla && !(!window.ActiveXObject && /function[\s\S]+?\[native\s+code\]/.test(window.ActiveXObject + ""))) {
        t.bind("DOMMouseScroll", function(e) {
            this.scrollTop += e.originalEvent.detail > 0 ? 56 : -56;
            if (n && !!$(n, this).length) {
                $(n, this)[0].scrollTop += e.originalEvent.detail > 0 ? 56 : -56
            }
            e.preventDefault()
        })
    } else {
        t.bind("mousewheel", function(e) {
            this.scrollTop += e.originalEvent.wheelDelta > 0 ? -56 : 56;
            if (n && !!$(n, this).length) {
                $(n, this)[0].scrollTop += e.originalEvent.wheelDelta > 0 ? -56 : 56
            }
            e.preventDefault()
        })
    }
};
//# sourceMappingURL=../../../../__sources__/athena/2017/js/global/common_8ffb77aa.js.map