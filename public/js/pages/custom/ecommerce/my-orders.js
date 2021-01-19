!function(e){var t={};function a(l){if(t[l])return t[l].exports;var n=t[l]={i:l,l:!1,exports:{}};return e[l].call(n.exports,n,n.exports,a),n.l=!0,n.exports}a.m=e,a.c=t,a.d=function(e,t,l){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:l})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var l=Object.create(null);if(a.r(l),Object.defineProperty(l,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)a.d(l,n,function(t){return e[t]}.bind(null,n));return l},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="/",a(a.s=104)}({104:function(e,t,a){e.exports=a("lKxH")},lKxH:function(e,t,a){"use strict";var l={init:function(){var e;e=$("#kt_datatable").KTDatatable({data:{type:"remote",source:{read:{url:HOST_URL+"/api/datatables/demos/default.php",map:function(e){var t=e;return void 0!==e.data&&(t=e.data),t}}},pageSize:10,serverPaging:!0,serverFiltering:!0,serverSorting:!0},layout:{scroll:!1,footer:!1},sortable:!0,pagination:!0,search:{input:$("#kt_datatable_search_query"),key:"generalSearch"},columns:[{field:"Product",title:"Product",sortable:"asc",width:160,template:function(e){var t=KTUtil.getRandomInt(1,15);return'<div class="d-flex align-items-center">                        <div class="symbol symbol-50 symbol-sm flex-shrink-0">                            <div class="symbol-label">                                <img class="h-75 align-self-end" src="assets/media/products/'+t+'.png" alt="photo"/>                            </div>                        </div>                        <div class="ml-4">                            <a href="#" class="text-dark-75 font-weight-bolder font-size-lg mb-0">'+["Smartwatch","Headphones","Sneakers","Mobile Device","Running Shoes","Bicycle","Fashion","Stylish Belt","Smartwatch","Headphones","Sneakers","Mobile Device","Running Shoes","Bicycle","Fashion","Mobile Device"][t]+"</a>                        </div>                    </div>"}},{field:"OrderID",title:"Order ID"},{field:"ShipDate",title:"Ship Date",type:"date",format:"MM/DD/YYYY"},{field:"Status",title:"Status",template:function(e){var t={1:{title:"Pending",class:" label-light-success"},2:{title:"Delivered",class:" label-light-danger"},3:{title:"Canceled",class:" label-light-primary"},4:{title:"Success",class:" label-light-success"},5:{title:"Info",class:" label-light-info"},6:{title:"Danger",class:" label-light-danger"},7:{title:"Warning",class:" label-light-warning"}};return'<span class="label font-weight-bold label-lg '+t[e.Status].class+' label-inline">'+t[e.Status].title+"</span>"}},{field:"Type",title:"Type",autoHide:!1,template:function(e){var t={1:{title:"Online",state:"danger"},2:{title:"Retail",state:"primary"},3:{title:"Direct",state:"success"}};return'<span class="label label-'+t[e.Type].state+' label-dot mr-2"></span><span class="font-weight-bold text-'+t[e.Type].state+'">'+t[e.Type].title+"</span>"}},{field:"Actions",title:"Actions",sortable:!1,width:125,overflow:"visible",autoHide:!1,template:function(){return'                        <div class="dropdown dropdown-inline">                            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown">                                <span class="svg-icon svg-icon-md">                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">                                            <rect x="0" y="0" width="24" height="24"/>                                            <path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>                                        </g>                                    </svg>                                </span>                            </a>                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">                                <ul class="navi flex-column navi-hover py-2">                                    <li class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">                                        Choose an action:                                    </li>                                    <li class="navi-item">                                        <a href="#" class="navi-link">                                            <span class="navi-icon"><i class="la la-print"></i></span>                                            <span class="navi-text">Print</span>                                        </a>                                    </li>                                    <li class="navi-item">                                        <a href="#" class="navi-link">                                            <span class="navi-icon"><i class="la la-copy"></i></span>                                            <span class="navi-text">Copy</span>                                        </a>                                    </li>                                    <li class="navi-item">                                        <a href="#" class="navi-link">                                            <span class="navi-icon"><i class="la la-file-excel-o"></i></span>                                            <span class="navi-text">Excel</span>                                        </a>                                    </li>                                    <li class="navi-item">                                        <a href="#" class="navi-link">                                            <span class="navi-icon"><i class="la la-file-text-o"></i></span>                                            <span class="navi-text">CSV</span>                                        </a>                                    </li>                                    <li class="navi-item">                                        <a href="#" class="navi-link">                                            <span class="navi-icon"><i class="la la-file-pdf-o"></i></span>                                            <span class="navi-text">PDF</span>                                        </a>                                    </li>                                </ul>                            </div>                        </div>                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">                            <span class="svg-icon svg-icon-md">                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">                                        <rect x="0" y="0" width="24" height="24"/>                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>                                    </g>                                </svg>                            </span>                        </a>                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">                            <span class="svg-icon svg-icon-md">                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">                                        <rect x="0" y="0" width="24" height="24"/>                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>                                    </g>                                </svg>                            </span>                        </a>                    '}}]}),$("#kt_datatable_search_status").on("change",(function(){e.search($(this).val().toLowerCase(),"Status")})),$("#kt_datatable_search_type").on("change",(function(){e.search($(this).val().toLowerCase(),"Type")})),$("#kt_datatable_search_status, #kt_datatable_search_type").selectpicker()}};jQuery(document).ready((function(){l.init()}))}});