define(["jquery", "jquery-ui", "datatables",
    "bootstrap", "datatables.bootstrap"], function () {
    $(function () {

        $('#tableContent').dataTable({
            "bProcessing": true,
            "language":{
               //baseUrl is define in application/header.php 
               "url": baseUrl+"/includes/datatables-plugins/i18n/French.lang"
            }
        });
    });
});