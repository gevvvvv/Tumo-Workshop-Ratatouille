app = {}, UTIL = {
    fire: function(n, i, o) {
        var t = app;
        i = void 0 === i ? "init" : i, "" !== n && t[n] && "function" == typeof t[n][i] && t[n][i](o);
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
}, app.gallery = {
    init: function() {}
}, app.home = {
    init: function() {}
};