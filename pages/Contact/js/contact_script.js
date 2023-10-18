!(function () {
  "use strict";
  var t = window.location,
    e = window.document,
    n = e.currentScript,
    i = n.getAttribute("data-api") || new URL(n.src).origin + "/api/event";
  function a(t, e) {
    t && console.warn("Ignoring Event: " + t), e && e.callback && e.callback();
  }
  function r(r, o) {
    if (
      /^localhost$|^127(\.[0-9]+){0,2}\.[0-9]+$|^\[::1?\]$/.test(t.hostname) ||
      "file:" === t.protocol
    )
      return a("localhost", o);
    if (
      window._phantom ||
      window.__nightmare ||
      window.navigator.webdriver ||
      window.Cypress
    )
      return a(null, o);
    try {
      if ("true" === window.localStorage.plausible_ignore)
        return a("localStorage flag", o);
    } catch (r) {}
    var l = {},
      s =
        ((l.n = r),
        (l.u = t.href),
        (l.d = n.getAttribute("data-domain")),
        (l.r = e.referrer || null),
        o && o.meta && (l.m = JSON.stringify(o.meta)),
        o && o.props && (l.p = o.props),
        new XMLHttpRequest());
    s.open("POST", i, !0),
      s.setRequestHeader("Content-Type", "text/plain"),
      s.send(JSON.stringify(l)),
      (s.onreadystatechange = function () {
        4 === s.readyState && o && o.callback && o.callback();
      });
  }
  var o = (window.plausible && window.plausible.q) || [];
  window.plausible = r;
  for (var l, s = 0; s < o.length; s++) r.apply(this, o[s]);
  function p() {
    l !== t.pathname && ((l = t.pathname), r("pageview"));
  }
  var c,
    w = window.history;
  w.pushState &&
    ((c = w.pushState),
    (w.pushState = function () {
      c.apply(this, arguments), p();
    }),
    window.addEventListener("popstate", p)),
    "prerender" === e.visibilityState
      ? e.addEventListener("visibilitychange", function () {
          l || "visible" !== e.visibilityState || p();
        })
      : p();
})();
