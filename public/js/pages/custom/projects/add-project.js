!function(e){var t={};function o(n){if(t[n])return t[n].exports;var i=t[n]={i:n,l:!1,exports:{}};return e[n].call(i.exports,i,i.exports,o),i.l=!0,i.exports}o.m=e,o.c=t,o.d=function(e,t,n){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)o.d(n,i,function(t){return e[t]}.bind(null,i));return n},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="/",o(o.s=115)}({115:function(e,t,o){e.exports=o("COur")},COur:function(e,t,o){"use strict";var n,i,r,a,s=(a=[],{init:function(){n=KTUtil.getById("kt_projects_add"),i=KTUtil.getById("kt_projects_add_form"),(r=new KTWizard(n,{startStep:1,clickableSteps:!1})).on("change",(function(e){if(!(e.getStep()>e.getNewStep())){var t=a[e.getStep()-1];return t&&t.validate().then((function(t){"Valid"==t?(e.goTo(e.getNewStep()),KTUtil.scrollTop()):Swal.fire({text:"Sorry, looks like there are some errors detected, please try again.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{confirmButton:"btn font-weight-bold btn-light"}}).then((function(){KTUtil.scrollTop()}))})),!1}})),r.on("changed",(function(e){KTUtil.scrollTop()})),r.on("submit",(function(e){Swal.fire({text:"All is good! Please confirm the form submission.",icon:"success",showCancelButton:!0,buttonsStyling:!1,confirmButtonText:"Yes, submit!",cancelButtonText:"No, cancel",customClass:{confirmButton:"btn font-weight-bold btn-primary",cancelButton:"btn font-weight-bold btn-default"}}).then((function(e){e.value?i.submit():"cancel"===e.dismiss&&Swal.fire({text:"Your form has not been submitted!.",icon:"error",buttonsStyling:!1,confirmButtonText:"Ok, got it!",customClass:{confirmButton:"btn font-weight-bold btn-primary"}})}))})),a.push(FormValidation.formValidation(i,{fields:{projectname:{validators:{notEmpty:{message:"Project name is required"}}},projectowner:{validators:{notEmpty:{message:"Project owner is required"}}},customername:{validators:{notEmpty:{message:"Customer name is required"}}},phone:{validators:{notEmpty:{message:"Phone is required"},phone:{country:"US",message:"The value is not a valid US phone number. (e.g 5554443333)"}}},email:{validators:{notEmpty:{message:"Email is required"},emailAddress:{message:"The value is not a valid email address"}}},companywebsite:{validators:{notEmpty:{message:"Website URL is required"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap({eleValidClass:""})}})),a.push(FormValidation.formValidation(i,{fields:{communication:{validators:{choice:{min:1,message:"Please select at least 1 option"}}},language:{validators:{notEmpty:{message:"Please select a language"}}},timezone:{validators:{notEmpty:{message:"Please select a timezone"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap({eleValidClass:""})}})),a.push(FormValidation.formValidation(i,{fields:{address1:{validators:{notEmpty:{message:"Address is required"}}},postcode:{validators:{notEmpty:{message:"Postcode is required"}}},city:{validators:{notEmpty:{message:"City is required"}}},state:{validators:{notEmpty:{message:"state is required"}}},country:{validators:{notEmpty:{message:"Country is required"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap({eleValidClass:""})}}))}});jQuery(document).ready((function(){s.init()}))}});