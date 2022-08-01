/******/
(() => { // webpackBootstrap
    /******/
    "use strict";
    var __webpack_exports__ = {};
    /*!**************************************************************!*\
      !*** ../demo1/src/js/pages/crud/datatables/basic/headers.js ***!
      \**************************************************************/

    var KTDatatablesBasicHeaders = function () {

        var initTable1 = function () {
            var table = $('#kt_datatable');

            // begin first table
            table.DataTable({
                responsive: true,
                buttons: [
                    'print',
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5',
                ],
                processing: true,
                serverSide: false,

            });
            $('#export_print').on('click', function (e) {
                e.preventDefault();
                table.button(0).trigger();
            });

            $('#export_copy').on('click', function (e) {
                e.preventDefault();
                table.button(1).trigger();
            });

            $('#export_excel').on('click', function (e) {
                e.preventDefault();
                table.button(2).trigger();
            });

            $('#export_csv').on('click', function (e) {
                e.preventDefault();
                table.button(3).trigger();
            });

            $('#export_pdf').on('click', function (e) {
                e.preventDefault();
                table.button(4).trigger();
            });

        };

        return {

            //main function to initiate the module
            init: function () {
                initTable1();
            },

        };

    }();

    jQuery(document).ready(function () {
        KTDatatablesBasicHeaders.init();
    });

    /******/
})();
//# sourceMappingURL=headers.js.map
