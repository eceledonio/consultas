!function(e){var t={};function n(a){if(t[a])return t[a].exports;var i=t[a]={i:a,l:!1,exports:{}};return e[a].call(i.exports,i,i.exports,n),i.l=!0,i.exports}n.m=e,n.c=t,n.d=function(e,t,a){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:a})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var a=Object.create(null);if(n.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)n.d(a,i,function(t){return e[t]}.bind(null,i));return a},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=157)}({157:function(e,t,n){e.exports=n("hwQw")},hwQw:function(e,t,n){"use strict";var a={init:function(){$("#kt_tree_1").jstree({core:{themes:{responsive:!1}},types:{default:{icon:"fa fa-folder"},file:{icon:"fa fa-file"}},plugins:["types"]}),$("#kt_tree_2").jstree({core:{themes:{responsive:!1}},types:{default:{icon:"fa fa-folder text-warning"},file:{icon:"fa fa-file  text-warning"}},plugins:["types"]}),$("#kt_tree_2").on("select_node.jstree",(function(e,t){var n=$("#"+t.selected).find("a");if("#"!=n.attr("href")&&"javascript:;"!=n.attr("href")&&""!=n.attr("href"))return"_blank"==n.attr("target")&&(n.attr("href").target="_blank"),document.location.href=n.attr("href"),!1})),$("#kt_tree_3").jstree({plugins:["wholerow","checkbox","types"],core:{themes:{responsive:!1},data:[{text:"Same but with checkboxes",children:[{text:"initially selected",state:{selected:!0}},{text:"custom icon",icon:"fa fa-warning text-danger"},{text:"initially open",icon:"fa fa-folder text-default",state:{opened:!0},children:["Another node"]},{text:"custom icon",icon:"fa fa-warning text-waring"},{text:"disabled node",icon:"fa fa-check text-success",state:{disabled:!0}}]},"And wholerow selection"]},types:{default:{icon:"fa fa-folder text-warning"},file:{icon:"fa fa-file  text-warning"}}}),$("#kt_tree_4").jstree({core:{themes:{responsive:!1},check_callback:!0,data:[{text:"Parent Node",children:[{text:"Initially selected",state:{selected:!0}},{text:"Custom Icon",icon:"flaticon2-hourglass-1 text-danger"},{text:"Initially open",icon:"fa fa-folder text-success",state:{opened:!0},children:[{text:"Another node",icon:"fa fa-file text-waring"}]},{text:"Another Custom Icon",icon:"flaticon2-drop text-waring"},{text:"Disabled Node",icon:"fa fa-check text-success",state:{disabled:!0}},{text:"Sub Nodes",icon:"fa fa-folder text-danger",children:[{text:"Item 1",icon:"fa fa-file text-waring"},{text:"Item 2",icon:"fa fa-file text-success"},{text:"Item 3",icon:"fa fa-file text-default"},{text:"Item 4",icon:"fa fa-file text-danger"},{text:"Item 5",icon:"fa fa-file text-info"}]}]},"Another Node"]},types:{default:{icon:"fa fa-folder text-primary"},file:{icon:"fa fa-file  text-primary"}},state:{key:"demo2"},plugins:["contextmenu","state","types"]}),$("#kt_tree_5").jstree({core:{themes:{responsive:!1},check_callback:!0,data:[{text:"Parent Node",children:[{text:"Initially selected",state:{selected:!0}},{text:"Custom Icon",icon:"flaticon2-warning text-danger"},{text:"Initially open",icon:"fa fa-folder text-success",state:{opened:!0},children:[{text:"Another node",icon:"fa fa-file text-waring"}]},{text:"Another Custom Icon",icon:"flaticon2-bell-5 text-waring"},{text:"Disabled Node",icon:"fa fa-check text-success",state:{disabled:!0}},{text:"Sub Nodes",icon:"fa fa-folder text-danger",children:[{text:"Item 1",icon:"fa fa-file text-waring"},{text:"Item 2",icon:"fa fa-file text-success"},{text:"Item 3",icon:"fa fa-file text-default"},{text:"Item 4",icon:"fa fa-file text-danger"},{text:"Item 5",icon:"fa fa-file text-info"}]}]},"Another Node"]},types:{default:{icon:"fa fa-folder text-success"},file:{icon:"fa fa-file  text-success"}},state:{key:"demo2"},plugins:["dnd","state","types"]}),$("#kt_tree_6").jstree({core:{themes:{responsive:!1},check_callback:!0,data:{url:function(e){return HOST_URL+"/api//jstree/ajax_data.php"},data:function(e){return{parent:e.id}}}},types:{default:{icon:"fa fa-folder text-primary"},file:{icon:"fa fa-file  text-primary"}},state:{key:"demo3"},plugins:["dnd","state","types"]})}};jQuery(document).ready((function(){a.init()}))}});