$(document).ready(function () {
    $("#datatable").DataTable(), $("#datatable-buttons").DataTable({
        lengthChange: !1,
        buttons: ["copy", "excel", "pdf", "colvis"],
        order : []
    }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")
    $("#datatable").DataTable(), $("#datatable-buttons1").DataTable({
        lengthChange: !1,
        buttons: ["copy", "excel", "pdf", "colvis"],
        order : []
    }).buttons().container().appendTo("#datatable-buttons1_wrapper .col-md-6:eq(0)")
    $("#datatable").DataTable(), $("#datatable-buttons2").DataTable({
        lengthChange: !1,
        buttons: ["copy", "excel", "pdf", "colvis"],
        order : []
    }).buttons().container().appendTo("#datatable-buttons2_wrapper .col-md-6:eq(0)")

    $("#datatable").DataTable(), $("#datatable-buttons3").DataTable({
        lengthChange: !1,
        buttons: ["copy", "excel", "pdf", "colvis"],
        order : [[0,'desc']]
    }).buttons().container().appendTo("#datatable-buttons3_wrapper .col-md-6:eq(0)")

});
