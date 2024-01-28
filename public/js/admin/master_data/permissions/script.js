/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************************************!*\
  !*** ./resources/js/admin/master_data/permissions/script.js ***!
  \**************************************************************/
var permissionTable;

function deletePermission(url) {
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#3085d6",
    confirmButtonText: "Yes, delete it!"
  }).then(function (result) {
    if (result.isConfirmed) {
      $.ajax({
        url: url,
        type: "DELETE",
        data: {
          _token: $('meta[name="csrf-token"]').attr("content")
        },
        success: function success(response) {
          if (response.status == "success") {
            permissionTable.ajax.reload();
            notify("success", response.message);
          } else {
            notify(response.status, response.message);
          }
        },
        error: function error(xhr) {
          notify("error", xhr.responseJSON.message);
        }
      });
    }
  });
}

$(document).ready(function () {
  permissionTable = $("#permissions-table").DataTable();
  $(document).on('click', '.delete-permission', function () {
    var url = $(this).data('url') || $(this).parent().data('url');
    deletePermission(url);
  });
});
/******/ })()
;