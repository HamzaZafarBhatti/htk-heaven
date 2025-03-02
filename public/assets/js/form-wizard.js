(function ($) {
    "use strict";
    /*[ Wizard Config ]
        ===========================================================*/
    const totalTabs = $(".tab-pane").length;
    const progressBar = $("#js-progress").find(".progress-bar");
    const progressVal = $("#js-progress").find(".progress-val");
    var val = parseInt(100 / totalTabs);
    progressBar.css("width", val + "%");
    progressVal.text(val + "%");

    try {
        $("#js-wizard-form").bootstrapWizard({
            tabClass: "nav-tab",
            nextSelector: ".btn-next",
            previousSelector: ".btn-back",
            lastSelector: ".btn-last",
            onNext: function (tab, navigation, index) {
                var current = tab.find("a").data("number") + 1;
                if (current > 1) {
                    var val = parseInt(progressBar.text());
                    val += 100 / totalTabs;
                    progressBar.css("width", val + "%");
                    progressVal.text(val + "%");
                }
            },
            onPrevious: function (tab, navigation, index) {
                var current = tab.find("a").data("number") - 1;
                if (current > 0) {
                    var val = parseInt(progressBar.text());
                    val -= 100 / totalTabs;
                    progressBar.css("width", val + "%");
                    progressVal.text(val + "%");
                }
            },
            onLast: function (tab, navigation, index) {
                document.getElementById("js-wizard-form").submit();
                return false;
            },
        });
    } catch (e) {
        console.log(e);
    }
})(jQuery);
