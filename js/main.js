
requirejs.config({
    "baseUrl": "js/lib",
    "urlArgs": "bust=" + (new Date()).getTime(),
    "paths": {
        "modelView" : "../modelView",
        "jquery": "jquery/jquery.min",
        "jquery-ui": "jquery/jquery-ui.min",
        "knockout": "knockout/knockout",
        "bootstrap": "bootstrap/bootstrap.min",
        "datatables" : "dataTables/jquery.dataTables.min",
        "datatables.bootstrap" : "bootstrap/dataTables.bootstrap"
    }
});
require(["knockout", "jquery", "jquery-ui", "datatables",
    "bootstrap", "datatables.bootstrap", "modelView"]);