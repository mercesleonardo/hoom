!(function(t) {
    "use strict";

    function e() {
        this.$body = t("body");
    }
    (e.prototype.init = function() {
        (Dropzone.autoDiscover = !1),
        t('[data-plugin="dropzone"]').each(function() {
            var e = t(this).attr("action"),
                o = t(this).data("previewsContainer"),
                i = { url: e };
            o && (i.previewsContainer = o);
            var r = t(this).data("uploadPreviewTemplate");
            r && (i.previewTemplate = t(r).html());
            t(this).dropzone(i);
        });
    }),
    (t.FileUpload = new e()),
    (t.FileUpload.Constructor = e);
})(window.jQuery),
(function() {
    "use strict";
    window.jQuery.FileUpload.init();
})(),
0 < $('[data-plugins="dropify"]').length &&
    $('[data-plugins="dropify"]').dropify({
        messages: { default: "Arraste e solte um arquivo aqui ou clique", replace: "Arrastar e solte ou clicar para substituir", remove: "Remover", error: "Ooops, algo errado foi acrescentado." },
        error: { fileSize: "O tamanho do arquivo é muito grande (2M max)." },
    });