// Self-invoking anonymous function to encapsulate the code
(function(c, b, d) {
    // Define a function to detect touch events
    var isTouchDevice = function() {
        // Check if the browser supports touch events
        if (navigator.maxTouchPoints > 1) {
            return true;
        }
        // Check if the browser supports Mozilla touch events
        if (window.matchMedia && window.matchMedia("(-moz-touch-enabled)").matches) {
            return true;
        }
        // Check if the browser supports Webkit, Moz, O, ms, or Khtml touch events
        for (var i = 0, len = ["Webkit", "Moz", "O", "ms", "Khtml"].length; i < len; i++) {
            var prefix = ["Webkit", "Moz", "O", "ms", "Khtml"][i] + "MaxTouchPoints";
            if (prefix in navigator && navigator[prefix]) {
                return true;
            }
        }
        // Try to create a touch event to detect support
        try {
            document.createEvent("TouchEvent");
            return true;
        } catch (e) {}
        // If all else fails, assume it's not a touch device
        return false;
    }();

    // Define a function to get a cookie value
    var getCookieValue = function(a) {
        a += "=";
        for (var i = 0, len = document.cookie.split(";").length; i < len; i++) {
            var cookie = document.cookie.split(";")[i];
            while (cookie.charAt(0) == " ") {
                cookie = cookie.substring(1, cookie.length);
            }
            if (cookie.indexOf(a) == 0) {
                return cookie.substring(a.length, cookie.length);
            }
        }
        return null;
    };

    // Check if the user is not in browser editing mode
    if (getCookieValue("inbrowserediting") != "true") {
        // Get the device lock cookie value
        var deviceLock = getCookieValue("devicelock");
        // Determine the device type based on the cookie value and screen size
        var deviceType;
        if (deviceLock == "phone" && d) {
            deviceType = d;
        } else if (deviceLock == "tablet" && b) {
            deviceType = b;
        } else {
            if (window.matchMedia) {
                if (window.matchMedia("(max-device-width: 415px)").matches && d) {
                    deviceType = d;
                } else if (window.matchMedia("(max-device-width: 960px)").matches && b && isTouchDevice) {
                    deviceType = b;
                }
            } else {
                var screenWidth = Math.min(screen.width, screen.height) / (window.devicePixelRatio || 1);
                var systemXDPI = window.screen.systemXDPI || 0;
                var systemYDPI = window.screen.systemYDPI || 0;
                var dpi = systemXDPI > 0 && systemYDPI > 0 ? Math.min(screen.width / systemXDPI, screen.height / systemYDPI) : 0;
                if (screenWidth <= 370 || dpi != 0 && dpi <= 3) {
                    deviceType = d;
                } else if (screenWidth <= 960 && b && isTouchDevice) {
                    deviceType = b;
                }
            }
        }
        // If a device type is determined, redirect to the corresponding page
        if (deviceType) {
            var search = document.location.search || "";
            var hash = document.location.hash || "";
            document.write('<style type="text/css">body {visibility:hidden}</style>');
            document.location = deviceType + search + hash;
        }
    }
})("desktop", "indexPhone.php", "indexPhone.php");