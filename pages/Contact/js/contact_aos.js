!(function (e, t) {
  "object" == typeof exports && "undefined" != typeof module
    ? (module.exports = t())
    : "function" == typeof define && define.amd
    ? define(t)
    : (e.AOS = t());
})(this, function () {
  "use strict";
  var e =
      "undefined" != typeof window
        ? window
        : "undefined" != typeof global
        ? global
        : "undefined" != typeof self
        ? self
        : {},
    t = "Expected a function",
    n = NaN,
    o = "[object Symbol]",
    i = /^\s+|\s+$/g,
    a = /^[-+]0x[0-9a-f]+$/i,
    r = /^0b[01]+$/i,
    c = /^0o[0-7]+$/i,
    s = parseInt,
    u = "object" == typeof e && e && e.Object === Object && e,
    d = "object" == typeof self && self && self.Object === Object && self,
    l = u || d || Function("return this")(),
    f = Object.prototype.toString,
    m = Math.max,
    p = Math.min,
    b = function () {
      return l.Date.now();
    };
  function v(e) {
    var t = typeof e;
    return !!e && ("object" == t || "function" == t);
  }
  function g(e) {
    if ("number" == typeof e) return e;
    if (
      (function (e) {
        return (
          "symbol" == typeof e ||
          ((function (e) {
            return !!e && "object" == typeof e;
          })(e) &&
            f.call(e) == o)
        );
      })(e)
    )
      return n;
    if (v(e)) {
      var t = "function" == typeof e.valueOf ? e.valueOf() : e;
      e = v(t) ? t + "" : t;
    }
    if ("string" != typeof e) return 0 === e ? e : +e;
    e = e.replace(i, "");
    var u = r.test(e);
    return u || c.test(e) ? s(e.slice(2), u ? 2 : 8) : a.test(e) ? n : +e;
  }
  var w = function (e, n, o) {
      var i = !0,
        a = !0;
      if ("function" != typeof e) throw new TypeError(t);
      return (
        v(o) &&
          ((i = "leading" in o ? !!o.leading : i),
          (a = "trailing" in o ? !!o.trailing : a)),
        (function (e, n, o) {
          var i,
            a,
            r,
            c,
            s,
            u,
            d = 0,
            l = !1,
            f = !1,
            w = !0;
          if ("function" != typeof e) throw new TypeError(t);
          function y(t) {
            var n = i,
              o = a;
            return (i = a = void 0), (d = t), (c = e.apply(o, n));
          }
          function h(e) {
            var t = e - u;
            return void 0 === u || t >= n || t < 0 || (f && e - d >= r);
          }
          function k() {
            var e = b();
            if (h(e)) return x(e);
            s = setTimeout(
              k,
              (function (e) {
                var t = n - (e - u);
                return f ? p(t, r - (e - d)) : t;
              })(e)
            );
          }
          function x(e) {
            return (s = void 0), w && i ? y(e) : ((i = a = void 0), c);
          }
          function O() {
            var e = b(),
              t = h(e);
            if (((i = arguments), (a = this), (u = e), t)) {
              if (void 0 === s)
                return (function (e) {
                  return (d = e), (s = setTimeout(k, n)), l ? y(e) : c;
                })(u);
              if (f) return (s = setTimeout(k, n)), y(u);
            }
            return void 0 === s && (s = setTimeout(k, n)), c;
          }
          return (
            (n = g(n) || 0),
            v(o) &&
              ((l = !!o.leading),
              (r = (f = "maxWait" in o) ? m(g(o.maxWait) || 0, n) : r),
              (w = "trailing" in o ? !!o.trailing : w)),
            (O.cancel = function () {
              void 0 !== s && clearTimeout(s),
                (d = 0),
                (i = u = a = s = void 0);
            }),
            (O.flush = function () {
              return void 0 === s ? c : x(b());
            }),
            O
          );
        })(e, n, { leading: i, maxWait: n, trailing: a })
      );
    },
    y = /^\s+|\s+$/g,
    h = /^[-+]0x[0-9a-f]+$/i,
    k = /^0b[01]+$/i,
    x = /^0o[0-7]+$/i,
    O = parseInt,
    j = "object" == typeof e && e && e.Object === Object && e,
    N = "object" == typeof self && self && self.Object === Object && self,
    E = j || N || Function("return this")(),
    z = Object.prototype.toString,
    C = Math.max,
    A = Math.min,
    q = function () {
      return E.Date.now();
    };
  function L(e) {
    var t = typeof e;
    return !!e && ("object" == t || "function" == t);
  }
  function T(e) {
    if ("number" == typeof e) return e;
    if (
      (function (e) {
        return (
          "symbol" == typeof e ||
          ((function (e) {
            return !!e && "object" == typeof e;
          })(e) &&
            "[object Symbol]" == z.call(e))
        );
      })(e)
    )
      return NaN;
    if (L(e)) {
      var t = "function" == typeof e.valueOf ? e.valueOf() : e;
      e = L(t) ? t + "" : t;
    }
    if ("string" != typeof e) return 0 === e ? e : +e;
    e = e.replace(y, "");
    var n = k.test(e);
    return n || x.test(e) ? O(e.slice(2), n ? 2 : 8) : h.test(e) ? NaN : +e;
  }
  var M = function (e, t, n) {
      var o,
        i,
        a,
        r,
        c,
        s,
        u = 0,
        d = !1,
        l = !1,
        f = !0;
      if ("function" != typeof e) throw new TypeError("Expected a function");
      function m(t) {
        var n = o,
          a = i;
        return (o = i = void 0), (u = t), (r = e.apply(a, n));
      }
      function p(e) {
        var n = e - s;
        return void 0 === s || n >= t || n < 0 || (l && e - u >= a);
      }
      function b() {
        var e = q();
        if (p(e)) return v(e);
        c = setTimeout(
          b,
          (function (e) {
            var n = t - (e - s);
            return l ? A(n, a - (e - u)) : n;
          })(e)
        );
      }
      function v(e) {
        return (c = void 0), f && o ? m(e) : ((o = i = void 0), r);
      }
      function g() {
        var e = q(),
          n = p(e);
        if (((o = arguments), (i = this), (s = e), n)) {
          if (void 0 === c)
            return (function (e) {
              return (u = e), (c = setTimeout(b, t)), d ? m(e) : r;
            })(s);
          if (l) return (c = setTimeout(b, t)), m(s);
        }
        return void 0 === c && (c = setTimeout(b, t)), r;
      }
      return (
        (t = T(t) || 0),
        L(n) &&
          ((d = !!n.leading),
          (a = (l = "maxWait" in n) ? C(T(n.maxWait) || 0, t) : a),
          (f = "trailing" in n ? !!n.trailing : f)),
        (g.cancel = function () {
          void 0 !== c && clearTimeout(c), (u = 0), (o = s = i = c = void 0);
        }),
        (g.flush = function () {
          return void 0 === c ? r : v(q());
        }),
        g
      );
    },
    S = function () {};
  function D(e) {
    e &&
      e.forEach(function (e) {
        var t = Array.prototype.slice.call(e.addedNodes),
          n = Array.prototype.slice.call(e.removedNodes);
        if (
          (function e(t) {
            var n = void 0,
              o = void 0;
            for (n = 0; n < t.length; n += 1) {
              if ((o = t[n]).dataset && o.dataset.aos) return !0;
              if (o.children && e(o.children)) return !0;
            }
            return !1;
          })(t.concat(n))
        )
          return S();
      });
  }
  function H() {
    return (
      window.MutationObserver ||
      window.WebKitMutationObserver ||
      window.MozMutationObserver
    );
  }
  var $ = function () {
      return !!H();
    },
    W = function (e, t) {
      var n = window.document,
        o = new (H())(D);
      (S = t),
        o.observe(n.documentElement, {
          childList: !0,
          subtree: !0,
          removedNodes: !0,
        });
    },
    P = (function () {
      function e(e, t) {
        for (var n = 0; n < t.length; n++) {
          var o = t[n];
          (o.enumerable = o.enumerable || !1),
            (o.configurable = !0),
            "value" in o && (o.writable = !0),
            Object.defineProperty(e, o.key, o);
        }
      }
      return function (t, n, o) {
        return n && e(t.prototype, n), o && e(t, o), t;
      };
    })(),
    Y =
      Object.assign ||
      function (e) {
        for (var t = 1; t < arguments.length; t++) {
          var n = arguments[t];
          for (var o in n)
            Object.prototype.hasOwnProperty.call(n, o) && (e[o] = n[o]);
        }
        return e;
      },
    _ =
      /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i,
    B =
      /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,
    F =
      /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i,
    I =
      /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i;
  function K() {
    return navigator.userAgent || navigator.vendor || window.opera || "";
  }
  var G = new ((function () {
      function e() {
        !(function (e, t) {
          if (!(e instanceof t))
            throw new TypeError("Cannot call a class as a function");
        })(this, e);
      }
      return (
        P(e, [
          {
            key: "phone",
            value: function () {
              var e = K();
              return !(!_.test(e) && !B.test(e.substr(0, 4)));
            },
          },
          {
            key: "mobile",
            value: function () {
              var e = K();
              return !(!F.test(e) && !I.test(e.substr(0, 4)));
            },
          },
          {
            key: "tablet",
            value: function () {
              return this.mobile() && !this.phone();
            },
          },
          {
            key: "ie11",
            value: function () {
              return (
                "-ms-scroll-limit" in document.documentElement.style &&
                "-ms-ime-align" in document.documentElement.style
              );
            },
          },
        ]),
        e
      );
    })())(),
    J = function (e, t) {
      var n = void 0;
      return (
        G.ie11()
          ? (n = document.createEvent("CustomEvent")).initCustomEvent(
              e,
              !0,
              !0,
              { detail: t }
            )
          : (n = new CustomEvent(e, { detail: t })),
        document.dispatchEvent(n)
      );
    },
    Q = function (e) {
      return e.forEach(function (e, t) {
        return (function (e, t) {
          var n = e.options,
            o = e.position,
            i = e.node,
            a =
              (e.data,
              function () {
                e.animated &&
                  ((function (e, t) {
                    t &&
                      t.forEach(function (t) {
                        return e.classList.remove(t);
                      });
                  })(i, n.animatedClassNames),
                  J("aos:out", i),
                  e.options.id && J("aos:in:" + e.options.id, i),
                  (e.animated = !1));
              });
          n.mirror && t >= o.out && !n.once
            ? a()
            : t >= o.in
            ? e.animated ||
              ((function (e, t) {
                t &&
                  t.forEach(function (t) {
                    return e.classList.add(t);
                  });
              })(i, n.animatedClassNames),
              J("aos:in", i),
              e.options.id && J("aos:in:" + e.options.id, i),
              (e.animated = !0))
            : e.animated && !n.once && a();
        })(e, window.pageYOffset);
      });
    },
    R = function (e) {
      for (var t = 0, n = 0; e && !isNaN(e.offsetLeft) && !isNaN(e.offsetTop); )
        (t += e.offsetLeft - ("BODY" != e.tagName ? e.scrollLeft : 0)),
          (n += e.offsetTop - ("BODY" != e.tagName ? e.scrollTop : 0)),
          (e = e.offsetParent);
      return { top: n, left: t };
    },
    U = function (e, t, n) {
      var o = e.getAttribute("data-aos-" + t);
      if (void 0 !== o) {
        if ("true" === o) return !0;
        if ("false" === o) return !1;
      }
      return o || n;
    },
    V = function () {
      var e = document.querySelectorAll("[data-aos]");
      return Array.prototype.map.call(e, function (e) {
        return { node: e };
      });
    },
    X = [],
    Z = !1,
    ee = {
      offset: 120,
      delay: 0,
      easing: "ease",
      duration: 400,
      disable: !1,
      once: !1,
      mirror: !1,
      anchorPlacement: "top-bottom",
      startEvent: "DOMContentLoaded",
      animatedClassName: "aos-animate",
      initClassName: "aos-init",
      useClassNames: !1,
      disableMutationObserver: !1,
      throttleDelay: 99,
      debounceDelay: 50,
    },
    te = function () {
      return document.all && !window.atob;
    },
    ne = function () {
      arguments.length > 0 &&
        void 0 !== arguments[0] &&
        arguments[0] &&
        (Z = !0),
        Z &&
          ((X = (function (e, t) {
            return (
              e.forEach(function (e, n) {
                var o = U(e.node, "mirror", t.mirror),
                  i = U(e.node, "once", t.once),
                  a = U(e.node, "id"),
                  r = t.useClassNames && e.node.getAttribute("data-aos"),
                  c = [t.animatedClassName]
                    .concat(r ? r.split(" ") : [])
                    .filter(function (e) {
                      return "string" == typeof e;
                    });
                t.initClassName && e.node.classList.add(t.initClassName),
                  (e.position = {
                    in: (function (e, t, n) {
                      var o = window.innerHeight,
                        i = U(e, "anchor"),
                        a = U(e, "anchor-placement"),
                        r = Number(U(e, "offset", a ? 0 : t)),
                        c = a || n,
                        s = e;
                      i &&
                        document.querySelectorAll(i) &&
                        (s = document.querySelectorAll(i)[0]);
                      var u = R(s).top - o;
                      switch (c) {
                        case "top-bottom":
                          break;
                        case "center-bottom":
                          u += s.offsetHeight / 2;
                          break;
                        case "bottom-bottom":
                          u += s.offsetHeight;
                          break;
                        case "top-center":
                          u += o / 2;
                          break;
                        case "center-center":
                          u += o / 2 + s.offsetHeight / 2;
                          break;
                        case "bottom-center":
                          u += o / 2 + s.offsetHeight;
                          break;
                        case "top-top":
                          u += o;
                          break;
                        case "bottom-top":
                          u += o + s.offsetHeight;
                          break;
                        case "center-top":
                          u += o + s.offsetHeight / 2;
                      }
                      return u + r;
                    })(e.node, t.offset, t.anchorPlacement),
                    out:
                      o &&
                      (function (e, t) {
                        window.innerHeight;
                        var n = U(e, "anchor"),
                          o = U(e, "offset", t),
                          i = e;
                        return (
                          n &&
                            document.querySelectorAll(n) &&
                            (i = document.querySelectorAll(n)[0]),
                          R(i).top + i.offsetHeight - o
                        );
                      })(e.node, t.offset),
                  }),
                  (e.options = {
                    once: i,
                    mirror: o,
                    animatedClassNames: c,
                    id: a,
                  });
              }),
              e
            );
          })(X, ee)),
          Q(X),
          window.addEventListener(
            "scroll",
            w(function () {
              Q(X, ee.once);
            }, ee.throttleDelay)
          ));
    },
    oe = function () {
      if (((X = V()), ae(ee.disable) || te())) return ie();
      ne();
    },
    ie = function () {
      X.forEach(function (e, t) {
        e.node.removeAttribute("data-aos"),
          e.node.removeAttribute("data-aos-easing"),
          e.node.removeAttribute("data-aos-duration"),
          e.node.removeAttribute("data-aos-delay"),
          ee.initClassName && e.node.classList.remove(ee.initClassName),
          ee.animatedClassName && e.node.classList.remove(ee.animatedClassName);
      });
    },
    ae = function (e) {
      return (
        !0 === e ||
        ("mobile" === e && G.mobile()) ||
        ("phone" === e && G.phone()) ||
        ("tablet" === e && G.tablet()) ||
        ("function" == typeof e && !0 === e())
      );
    };
  return {
    init: function (e) {
      return (
        (ee = Y(ee, e)),
        (X = V()),
        ee.disableMutationObserver ||
          $() ||
          (console.info(
            '\n      aos: MutationObserver is not supported on this browser,\n      code mutations observing has been disabled.\n      You may have to call "refreshHard()" by yourself.\n    '
          ),
          (ee.disableMutationObserver = !0)),
        ee.disableMutationObserver || W("[data-aos]", oe),
        ae(ee.disable) || te()
          ? ie()
          : (document
              .querySelector("body")
              .setAttribute("data-aos-easing", ee.easing),
            document
              .querySelector("body")
              .setAttribute("data-aos-duration", ee.duration),
            document
              .querySelector("body")
              .setAttribute("data-aos-delay", ee.delay),
            -1 === ["DOMContentLoaded", "load"].indexOf(ee.startEvent)
              ? document.addEventListener(ee.startEvent, function () {
                  ne(!0);
                })
              : window.addEventListener("load", function () {
                  ne(!0);
                }),
            "DOMContentLoaded" === ee.startEvent &&
              ["complete", "interactive"].indexOf(document.readyState) > -1 &&
              ne(!0),
            window.addEventListener("resize", M(ne, ee.debounceDelay, !0)),
            window.addEventListener(
              "orientationchange",
              M(ne, ee.debounceDelay, !0)
            ),
            X)
      );
    },
    refresh: ne,
    refreshHard: oe,
  };
});
