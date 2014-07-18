app = {}, UTIL = {
    fire: function(n, i, o) {
        var a = app;
        i = void 0 === i ? "init" : i, "" !== n && a[n] && "function" == typeof a[n][i] && a[n][i](o);
    },
    loadEvents: function() {
        var n = document.body.id;
        UTIL.fire("common"), UTIL.fire(n), $.each(document.body.className.split(/\s+/), function(i, o) {
            UTIL.fire(n, o);
        }), UTIL.fire("common", "finalize");
    }
}, $(document).ready(UTIL.loadEvents), app.common = {
    init: function() {},
    finalize: function() {}
}, app.eskizas = {
    init: function() {
        $(document).ready(function() {
            $("#pikame").PikaChoose({
                carousel: !0
            });
        });
    }
}, app.gallery = {
    init: function() {
        $(document).ready(function() {
            $("#pikame").PikaChoose({
                carousel: !0
            });
        });
    }
}, app.home = {
    init: function() {
        alert("Hello World!");
    }
};