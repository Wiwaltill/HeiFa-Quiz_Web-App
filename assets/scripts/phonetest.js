(function(c, b, d) {
    var a = function() {
            if (navigator.maxTouchPoints > 1)
                return !0;
            if (window.matchMedia && window.matchMedia("(-moz-touch-enabled)").matches)
                return !0;
            for (var a = ["Webkit", "Moz", "O", "ms", "Khtml"], b = 0, c = a.length; b < c; b++) {
                var d = a[b] + "MaxTouchPoints";
                if (d in navigator && navigator[d])
                    return !0
            }
            try {
                return document.createEvent("TouchEvent"), !0
            } catch (f) {}
            return !1
        }(),
        f = function(a) {
            a += "=";
            for (var b = document.cookie.split(";"), c = 0; c < b.length; c++) {
                for (var d = b[c]; d.charAt(0) == " ";)
                    d = d.substring(1, d.length);
                if (d.indexOf(a) ==
                0)
                    return d.substring(a.length, d.length)
            }
            return null
        };
    if (f("inbrowserediting") != "true") {
        var h,
            f = f("devicelock");
        f == "phone" && d ? h = d : f == "tablet" && b && (h = b);
        if (f != c && !h)
            if (window.matchMedia)
                window.matchMedia("(max-device-width: 415px)").matches && d ? h = d : window.matchMedia("(max-device-width: 960px)").matches && b && a && (h = b);
            else {
                var c = Math.min(screen.width, screen.height) / (window.devicePixelRatio || 1),
                    f = window.screen.systemXDPI || 0,
                    g = window.screen.systemYDPI || 0,
                    f = f > 0 && g > 0 ? Math.min(screen.width / f, screen.height / g) :
                    0;
                (c <= 370 || f != 0 && f <= 3) && d ? h = d : c <= 960 && b && a && (h = b)
            }
        if (h)
            b = document.location.search || "",
            d = document.location.hash || "",
            document.write('<style type="text/css">body {visibility:hidden}</style>'),
            document.location = h + b + d
    }
})("desktop", "indexPhone.php", "indexPhone.php");
/*1. Desktop; 2. Phone; 3. Tablet*/
