jQuery(document).ready(function($) {
    pdfjsLib.GlobalWorkerOptions.workerSrc = '/wp-content/themes/omarfolio/assets/js/pdf.worker.min.js';

    let pdfDoc = null,
        scale = 2.8, // High DPI scaling
        canvas = $("#pdf-canvas")[0],
        ctx = canvas.getContext("2d");

    // Render PDF Page
    function renderPDF(pdfUrl) {
        pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
            pdfDoc = pdf;
            pdfDoc.getPage(1).then(function(page) {
                const viewport = page.getViewport({ scale: scale });
                const outputScale = window.devicePixelRatio || 1;

                // Canvas size for high DPI
                canvas.width = Math.floor(viewport.width * outputScale);
                canvas.height = Math.floor(viewport.height * outputScale);
                canvas.style.width = "100%";
                canvas.style.height = "auto";

                const transform = outputScale !== 1 ? [outputScale, 0, 0, outputScale, 0, 0] : null;

                const renderContext = {
                    canvasContext: ctx,
                    transform,
                    viewport: viewport
                };

                page.render(renderContext);
            });
        }).catch(function(error) {
            $("#pdf-error").text("Failed to load PDF: " + error.message).show();
            $("#pdf-canvas").hide();
            console.error("PDF Load Error:", error);
        });
    }

    // Popup Open
    $(document).on("click", ".pdf-popup-link", function(e) {
        e.preventDefault();
        const pdfUrl = $(this).data("pdf-url");
        const pdfTitle = $(this).data("pdf-title") || "PDF Preview";

        if (!pdfUrl) {
            alert("No PDF attached!");
            return;
        }

        $("#pdf-title").text(pdfTitle);
        $("#pdf-error").hide();
        $("#pdf-canvas").show();
        $("#pdf-popup").removeClass("hidden");

        // Body scroll lock
        $("body").addClass("overflow-hidden");

        renderPDF(pdfUrl);
    });

    // Popup Close
    function closePdfPopup() {
        $("#pdf-popup").addClass("hidden");
        $("#pdf-error").hide();
        $("#pdf-canvas").hide();
        $("body").removeClass("overflow-hidden");
        pdfDoc = null;
    }

    $("#pdf-close, #pdf-overlay").on("click", closePdfPopup);
    $(document).on("keydown", function(e) {
        if (e.key === "Escape" && !$("#pdf-popup").hasClass("hidden")) {
            closePdfPopup();
        }
    });

    // Close when clicking outside the popup container
    $(document).on("mousedown", function(e) {
        if (!$("#pdf-popup").hasClass("hidden") && $(e.target).closest(".pdf-container").length === 0) {
            closePdfPopup();
        }
    });
});