//baseUrl is define in application/header.php 
requirejs.config({
    "baseUrl": baseUrl+"assets",
    "urlArgs": "bust=" + (new Date()).getTime(),
    "paths": {
//        "metro":"metro-ui-css/min/metro.min",
        "modelView" : "../js/modelView",
        "jquery": "jquery/dist/jquery.min",
        "jquery-ui": "jquery-ui/jquery-ui.min",
        "angular": "angular/angular.min",
        "bootstrap": "bootstrap/dist/js/bootstrap.min",
        "datatables" : "datatables/media/js/jquery.dataTables.min",
        "datatables.bootstrap" : "datatables-bootstrap3/BS3/assets/js/datatables"
    }
});
require(["jquery", "jquery-ui", "angular", "datatables",
    "bootstrap", "datatables.bootstrap", "modelView"]);