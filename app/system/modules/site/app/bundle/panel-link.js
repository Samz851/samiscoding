var Links=function(t){function e(n){if(o[n])return o[n].exports;var s=o[n]={exports:{},id:n,loaded:!1};return t[n].call(s.exports,s,s.exports,e),s.loaded=!0,s.exports}var o={};return e.m=t,e.c=o,e.p="",e(0)}([function(t,e,o){var n,s;n=o(1),s=o(2),t.exports=n||{},t.exports.__esModule&&(t.exports=t.exports["default"]),s&&(("function"==typeof t.exports?t.exports.options||(t.exports.options={}):t.exports).template=s)},function(t,e){"use strict";window.Links=t.exports={data:function(){return{type:!1,link:""}},watch:{type:{handler:function(t){!t&&this.types.length&&(this.type=this.types[0].value)},immediate:!0}},computed:{types:function o(){var t,o=[];return _.forIn(this.$options.components,function(e,n){t=e.options||{},t.link&&o.push({text:t.link.label,value:n})}),_.sortBy(o,"text")}},components:{}},Vue.component("panel-link",function(e){e(t.exports)})},function(t,e){t.exports=" <div class=uk-form-row> <label for=form-style class=uk-form-label>{{ 'Extension' | trans }}</label> <div class=uk-form-controls> <select id=form-style class=uk-width-1-1 v-model=type> <option v-for=\"type in types\" :value=type.value>{{ type.text }}</option> </select> </div> </div> <div :is=type :link.sync=link v-if=type></div> "}]);