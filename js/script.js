

$(function() {

    var tabs = $("#tabs").tabs();

    var tabTitle = $("#tab_title"),
            tabContent = $("#tab_content"),
            tabTemplate = "<li><a href='#{href}'>#{label}</a> <span class='ui-icon ui-icon-close' role='presentation'>Remove Tab</span></li>",
            tabCounter = 2;
// actual addTab function: adds new tab using the input from the form above
    function addTab() {
        var label = tabTitle.val() || "Tab " + tabCounter,
                id = "tabs-" + tabCounter,
                li = $(tabTemplate.replace(/#\{href\}/g, "#" + id).replace(/#\{label\}/g, label)),
                tabContentHtml = tabContent.val() || "Tab " + tabCounter + " content.";
        tabs.find(".ui-tabs-nav").append(li);
        tabs.append("<div id='" + id + "'><p>" + tabContentHtml + "</p></div>");
        tabs.tabs("refresh");
        tabCounter++;
    }
    // addTab button: just opens the dialog
    $("#add_tab")
            .click(function() {
                addTab();
            });
// close icon: removing the tab on click
    tabs.delegate("span.ui-icon-close", "click", function() {
        var panelId = $(this).closest("li").remove().attr("aria-controls");
        $("#" + panelId).remove();
        tabs.tabs("refresh");
    });
    tabs.bind("keyup", function(event) {
        if (event.altKey && event.keyCode === $.ui.keyCode.BACKSPACE) {
            var panelId = tabs.find(".ui-tabs-active").remove().attr("aria-controls");
            $("#" + panelId).remove();
            tabs.tabs("refresh");
        }
    });
});