(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_schools_SchoolDownloadedSchools_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/components/form/FormActionButton.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/components/form/FormActionButton.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_0__);
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  data: function data() {
    var _this$color, _this$icon, _ref;

    return _ref = {
      color: (_this$color = this.color) !== null && _this$color !== void 0 ? _this$color : 'gray',
      iconClass: " fa fa-" + ((_this$icon = this.icon) !== null && _this$icon !== void 0 ? _this$icon : 'home'),
      type: this.type,
      label: this.label
    }, _defineProperty(_ref, "color", this.color), _defineProperty(_ref, "href", this.href), _defineProperty(_ref, "csrf_token", document.querySelector('meta[name="csrf-token"]').getAttribute('content')), _ref;
  },
  created: function created() {},
  methods: {
    sumbmitForm: function sumbmitForm(ev) {
      axios__WEBPACK_IMPORTED_MODULE_0___default().post("api/".concat(href), {
        _token: csrf_token,
        _method: 'DELETE'
      }, {
        "Content-Type": "application/x-www-form-urlencoded"
      }).then();
    },
    sumbmitPost: function sumbmitPost(ev) {
      axios__WEBPACK_IMPORTED_MODULE_0___default().post("api/".concat(href), {
        _token: csrf_token,
        _method: 'POST'
      }, {
        "Content-Type": "application/x-www-form-urlencoded"
      }).then();
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/schools/SchoolDownloadedSchools.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/schools/SchoolDownloadedSchools.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _components_Header_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./../components/Header.vue */ "./resources/js/components/components/Header.vue");
/* harmony import */ var _components_form_FormActionButton_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./../components/form/FormActionButton.vue */ "./resources/js/components/components/form/FormActionButton.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  data: function data() {
    return {
      schools: schools
    };
  },
  created: function created() {
    axios.post("api/schools/downloadedSchools", {
      _token: csrf_token,
      _method: 'GET'
    }, {
      "Content-Type": "application/x-www-form-urlencoded"
    }).then(function (ev) {
      schools = ev.data.schools;
    });
  },
  methods: {}
});

/***/ }),

/***/ "./resources/js/components/components/form/FormActionButton.vue":
/*!**********************************************************************!*\
  !*** ./resources/js/components/components/form/FormActionButton.vue ***!
  \**********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _FormActionButton_vue_vue_type_template_id_3b33c109___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./FormActionButton.vue?vue&type=template&id=3b33c109& */ "./resources/js/components/components/form/FormActionButton.vue?vue&type=template&id=3b33c109&");
/* harmony import */ var _FormActionButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./FormActionButton.vue?vue&type=script&lang=js& */ "./resources/js/components/components/form/FormActionButton.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _FormActionButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _FormActionButton_vue_vue_type_template_id_3b33c109___WEBPACK_IMPORTED_MODULE_0__.render,
  _FormActionButton_vue_vue_type_template_id_3b33c109___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/components/form/FormActionButton.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/schools/SchoolDownloadedSchools.vue":
/*!*********************************************************************!*\
  !*** ./resources/js/components/schools/SchoolDownloadedSchools.vue ***!
  \*********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _SchoolDownloadedSchools_vue_vue_type_template_id_c4c879ce___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./SchoolDownloadedSchools.vue?vue&type=template&id=c4c879ce& */ "./resources/js/components/schools/SchoolDownloadedSchools.vue?vue&type=template&id=c4c879ce&");
/* harmony import */ var _SchoolDownloadedSchools_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./SchoolDownloadedSchools.vue?vue&type=script&lang=js& */ "./resources/js/components/schools/SchoolDownloadedSchools.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _SchoolDownloadedSchools_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _SchoolDownloadedSchools_vue_vue_type_template_id_c4c879ce___WEBPACK_IMPORTED_MODULE_0__.render,
  _SchoolDownloadedSchools_vue_vue_type_template_id_c4c879ce___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/schools/SchoolDownloadedSchools.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/components/form/FormActionButton.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************!*\
  !*** ./resources/js/components/components/form/FormActionButton.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_FormActionButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./FormActionButton.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/components/form/FormActionButton.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_FormActionButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/components/schools/SchoolDownloadedSchools.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************!*\
  !*** ./resources/js/components/schools/SchoolDownloadedSchools.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SchoolDownloadedSchools_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./SchoolDownloadedSchools.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/schools/SchoolDownloadedSchools.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SchoolDownloadedSchools_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/components/components/form/FormActionButton.vue?vue&type=template&id=3b33c109&":
/*!*****************************************************************************************************!*\
  !*** ./resources/js/components/components/form/FormActionButton.vue?vue&type=template&id=3b33c109& ***!
  \*****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_FormActionButton_vue_vue_type_template_id_3b33c109___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_FormActionButton_vue_vue_type_template_id_3b33c109___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_FormActionButton_vue_vue_type_template_id_3b33c109___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./FormActionButton.vue?vue&type=template&id=3b33c109& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/components/form/FormActionButton.vue?vue&type=template&id=3b33c109&");


/***/ }),

/***/ "./resources/js/components/schools/SchoolDownloadedSchools.vue?vue&type=template&id=c4c879ce&":
/*!****************************************************************************************************!*\
  !*** ./resources/js/components/schools/SchoolDownloadedSchools.vue?vue&type=template&id=c4c879ce& ***!
  \****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SchoolDownloadedSchools_vue_vue_type_template_id_c4c879ce___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SchoolDownloadedSchools_vue_vue_type_template_id_c4c879ce___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SchoolDownloadedSchools_vue_vue_type_template_id_c4c879ce___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./SchoolDownloadedSchools.vue?vue&type=template&id=c4c879ce& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/schools/SchoolDownloadedSchools.vue?vue&type=template&id=c4c879ce&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/components/form/FormActionButton.vue?vue&type=template&id=3b33c109&":
/*!********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/components/form/FormActionButton.vue?vue&type=template&id=3b33c109& ***!
  \********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _vm.type == _vm.form
      ? _c(
          "span",
          {
            on: {
              click: function($event) {
                return _vm.submitForm()
              }
            }
          },
          [
            _c(
              "a",
              {
                staticClass:
                  "fa rounded-full p-2 my-1 text-white \n                transition-colors duration-200 transform ",
                class: "bg-" + _vm.color + "-500 hover:bg-" + _vm.color + "-800"
              },
              [
                _vm.label
                  ? _c("span", { staticClass: "text-xs font-light" }, [
                      _vm._v(
                        "\n                " +
                          _vm._s(_vm.label) +
                          "\n            "
                      )
                    ])
                  : _vm._e()
              ]
            )
          ]
        )
      : _vm.type == _vm.post
      ? _c(
          "span",
          {
            on: {
              click: function($event) {
                return _vm.submitPost()
              }
            }
          },
          [
            _c(
              "a",
              {
                staticClass:
                  "fa rounded-full p-2 my-1 text-white \n                transition-colors duration-200 transform ",
                class: "bg-" + _vm.color + "-500 hover:bg-" + _vm.color + "-800"
              },
              [
                _vm.label
                  ? _c("span", { staticClass: "text-xs font-light" }, [
                      _vm._v(
                        "\n                " +
                          _vm._s(_vm.label) +
                          "\n            "
                      )
                    ])
                  : _vm._e()
              ]
            )
          ]
        )
      : _c(
          "span",
          [
            _c("router-link", { attrs: { to: _vm.href } }, [
              _c(
                "a",
                {
                  staticClass:
                    "fa rounded-full p-2 my-1 text-white \n                transition-colors duration-200 transform ",
                  class:
                    "bg-" + _vm.color + "-500 hover:bg-" + _vm.color + "-800"
                },
                [
                  _vm.label
                    ? _c("span", { staticClass: "text-xs font-light" }, [
                        _vm._v(
                          "\n                    " +
                            _vm._s(_vm.label) +
                            "\n                "
                        )
                      ])
                    : _vm._e()
                ]
              )
            ])
          ],
          1
        )
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/schools/SchoolDownloadedSchools.vue?vue&type=template&id=c4c879ce&":
/*!*******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/schools/SchoolDownloadedSchools.vue?vue&type=template&id=c4c879ce& ***!
  \*******************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "x-app-layout",
    [
      _vm._t("header", function() {
        return [_c("Header", { attrs: { title: "My downloaded Schools" } })]
      }),
      _vm._v(" "),
      _c("div", { staticClass: "overflow-x-auto" }, [
        _c("table", [
          _c("thead", [
            _c("tr", [
              _c("th", [_vm._v("Title")]),
              _vm._v(" "),
              _c("th", [_vm._v("Description")]),
              _vm._v(" "),
              _c("th", [_vm._v("Created")]),
              _vm._v(" "),
              _c("th", [_vm._v("Owner")]),
              _vm._v(" "),
              _c("th", { staticClass: "actions" }, [_vm._v("Actions")])
            ])
          ]),
          _vm._v(" "),
          _c(
            "tbody",
            _vm._l(_vm.schools, function(school) {
              return _c("tr", { key: school }, [
                _c("td", [
                  _vm._v(
                    "\n                        " +
                      _vm._s(school.title) +
                      "\n                    "
                  )
                ]),
                _vm._v(" "),
                _c("td", [
                  _vm._v(
                    "\n                        " +
                      _vm._s(school.description) +
                      "\n                    "
                  )
                ]),
                _vm._v(" "),
                _c("td", [
                  _vm._v(
                    "\n                        " +
                      _vm._s(school.created_at) +
                      "\n                    "
                  )
                ]),
                _vm._v(" "),
                _c("td", [
                  _vm._v(
                    "\n                        " +
                      _vm._s(school.user.email) +
                      "\n                    "
                  )
                ]),
                _vm._v(" "),
                _c(
                  "td",
                  { staticClass: "actions" },
                  [
                    _c("FormActionButton", {
                      staticClass: "fa-download",
                      attrs: {
                        color: "red",
                        type: "post",
                        href: "schools/" + school + "/cancelDownloadSchool"
                      }
                    })
                  ],
                  1
                )
              ])
            }),
            0
          )
        ])
      ])
    ],
    2
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);