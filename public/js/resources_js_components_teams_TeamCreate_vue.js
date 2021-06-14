(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_teams_TeamCreate_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/teams/TeamCreate.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/teams/TeamCreate.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _components_Header_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./../components/Header.vue */ "./resources/js/components/components/Header.vue");
/* harmony import */ var _components_form_FormButton_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./../components/form/FormButton.vue */ "./resources/js/components/components/form/FormButton.vue");
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
      title: title,
      description: description
    };
  },
  created: function created() {},
  methods: {
    createTeam: function createTeam(ev) {
      axios.post("api/teams", {
        _token: csrf_token,
        _method: 'POST',
        name: title,
        description: description
      }, {
        "Content-Type": "application/x-www-form-urlencoded"
      }).then($router.go(-1));
    }
  }
});

/***/ }),

/***/ "./resources/js/components/teams/TeamCreate.vue":
/*!******************************************************!*\
  !*** ./resources/js/components/teams/TeamCreate.vue ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _TeamCreate_vue_vue_type_template_id_44dc911d___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./TeamCreate.vue?vue&type=template&id=44dc911d& */ "./resources/js/components/teams/TeamCreate.vue?vue&type=template&id=44dc911d&");
/* harmony import */ var _TeamCreate_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./TeamCreate.vue?vue&type=script&lang=js& */ "./resources/js/components/teams/TeamCreate.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _TeamCreate_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _TeamCreate_vue_vue_type_template_id_44dc911d___WEBPACK_IMPORTED_MODULE_0__.render,
  _TeamCreate_vue_vue_type_template_id_44dc911d___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/teams/TeamCreate.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/teams/TeamCreate.vue?vue&type=script&lang=js&":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/teams/TeamCreate.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_TeamCreate_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./TeamCreate.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/teams/TeamCreate.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_TeamCreate_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/components/teams/TeamCreate.vue?vue&type=template&id=44dc911d&":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/teams/TeamCreate.vue?vue&type=template&id=44dc911d& ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_TeamCreate_vue_vue_type_template_id_44dc911d___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_TeamCreate_vue_vue_type_template_id_44dc911d___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_TeamCreate_vue_vue_type_template_id_44dc911d___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./TeamCreate.vue?vue&type=template&id=44dc911d& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/teams/TeamCreate.vue?vue&type=template&id=44dc911d&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/teams/TeamCreate.vue?vue&type=template&id=44dc911d&":
/*!****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/teams/TeamCreate.vue?vue&type=template&id=44dc911d& ***!
  \****************************************************************************************************************************************************************************************************************************/
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
        return [_c("Header", { attrs: { title: "Create new Team" } })]
      }),
      _vm._v(" "),
      _c("div", { staticClass: "flex flex-col" }, [
        _c("label", { attrs: { for: "title" } }, [_vm._v("Name")]),
        _vm._v(" "),
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.title,
              expression: "title"
            }
          ],
          attrs: { type: "text", name: "title", id: "title" },
          domProps: { value: _vm.title },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.title = $event.target.value
            }
          }
        }),
        _vm._v(" "),
        _c("label", { attrs: { for: "description" } }, [
          _vm._v("Description (Optional)")
        ]),
        _vm._v(" "),
        _c("input", {
          directives: [
            {
              name: "model",
              rawName: "v-model",
              value: _vm.description,
              expression: "description"
            }
          ],
          attrs: { type: "text", name: "description", id: "description" },
          domProps: { value: _vm.description },
          on: {
            input: function($event) {
              if ($event.target.composing) {
                return
              }
              _vm.description = $event.target.value
            }
          }
        }),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "flex flex-row space-x-1" },
          [
            _c("FormButton", { attrs: { color: "red", icon: "arrow-left" } }, [
              _vm._v("Cancel")
            ]),
            _vm._v(" "),
            _c(
              "FormButton",
              {
                attrs: { color: "green", icon: "save", type: "submit" },
                on: {
                  click: function($event) {
                    return _vm.createTeam()
                  }
                }
              },
              [_vm._v("Save")]
            )
          ],
          1
        )
      ])
    ],
    2
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);