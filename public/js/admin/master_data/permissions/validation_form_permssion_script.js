/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************************************************************!*\
  !*** ./resources/js/admin/master_data/permissions/validation_form_permssion_script.js ***!
  \****************************************************************************************/
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

var Validation = /*#__PURE__*/function () {
  function Validation() {
    _classCallCheck(this, Validation);
  }

  _createClass(Validation, null, [{
    key: "initSignIn",
    value: function initSignIn() {
      Codebase.helpers("jq-validation");
      $(".form-permission").validate({
        rules: {
          name: {
            required: true,
            minlength: 3
          }
        },
        messages: {
          name: {
            required: "Please enter an permission name",
            minlength: "Permission name must consist of at least 3 characters"
          }
        }
      });
    }
  }]);

  return Validation;
}();

Codebase.onLoad(function () {
  return Validation.initSignIn();
});
/******/ })()
;