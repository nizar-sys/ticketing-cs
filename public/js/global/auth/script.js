/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************************!*\
  !*** ./resources/js/global/auth/script.js ***!
  \********************************************/
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
      $(".form-signin").validate({
        rules: {
          "email": {
            required: true,
            minlength: 3,
            email: true
          },
          "password": {
            required: true,
            minlength: 5
          }
        },
        messages: {
          "email": {
            required: "Please enter an email",
            minlength: "Your email must consist of at least 3 characters",
            email: "Please enter a valid email address"
          },
          "password": {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
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