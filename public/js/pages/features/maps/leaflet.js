!function(e){var o={};function t(n){if(o[n])return o[n].exports;var l=o[n]={i:n,l:!1,exports:{}};return e[n].call(l.exports,l,l.exports,t),l.l=!0,l.exports}t.m=e,t.c=o,t.d=function(e,o,n){t.o(e,o)||Object.defineProperty(e,o,{enumerable:!0,get:n})},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},t.t=function(e,o){if(1&o&&(e=t(e)),8&o)return e;if(4&o&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(t.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&o&&"string"!=typeof e)for(var l in e)t.d(n,l,function(o){return e[o]}.bind(null,l));return n},t.n=function(e){var o=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(o,"a",o),o},t.o=function(e,o){return Object.prototype.hasOwnProperty.call(e,o)},t.p="/",t(t.s=146)}({146:function(e,o,t){e.exports=t("Zaqm")},Zaqm:function(e,o,t){"use strict";var n={init:function(){!function(){var e=L.map("kt_leaflet_1",{center:[-37.8179793,144.9671293],zoom:11});L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{attribution:'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(e);var o=L.divIcon({html:'<span class="svg-icon svg-icon-danger svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>',bgPos:[10,10],iconAnchor:[20,37],popupAnchor:[0,-37],className:"leaflet-marker"});L.marker([-37.8179793,144.9671293],{icon:o}).addTo(e).bindPopup("<b>Flinder's Station</b><br/>Melbourne, Victoria").openPopup()}(),function(){var e=L.map("kt_leaflet_2",{center:[51.5073219,-.1276474],zoom:11});L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{attribution:'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(e);var o=L.divIcon({html:'<span class="svg-icon svg-icon-danger svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>',bgPos:[10,10],iconAnchor:[20,37],popupAnchor:[0,-37],className:"leaflet-marker"});L.marker([51.5073219,-.1276474],{icon:o}).addTo(e).bindPopup("<b>City of London</b>").openPopup(),L.circle([51.5073219,-.1276474],{color:"#4A7DFF",fillColor:"#6993FF",fillOpacity:.5,radius:700}).addTo(e)}(),function(){var e=L.map("kt_leaflet_3",{center:[47.339,11.602],zoom:3});L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{attribution:'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(e);var o=L.divIcon({html:'<span class="svg-icon svg-icon-danger svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>',bgPos:[10,10],iconAnchor:[20,37],popupAnchor:[0,-37],className:"leaflet-marker"}),t=L.divIcon({html:'<span class="svg-icon svg-icon-primary svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>',bgPos:[10,10],iconAnchor:[20,37],popupAnchor:[0,-37],className:"leaflet-marker"}),n=L.divIcon({html:'<span class="svg-icon svg-icon-warning svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>',bgPos:[10,10],iconAnchor:[20,37],popupAnchor:[0,-37],className:"leaflet-marker"}),l=L.divIcon({html:'<span class="svg-icon svg-icon-success svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>',bgPos:[10,10],iconAnchor:[20,37],popupAnchor:[0,-37],className:"leaflet-marker"}),r=L.marker([39.3262345,-4.8380649],{icon:o}).addTo(e),i=L.marker([41.804,13.843],{icon:t}).addTo(e),a=L.marker([51.11,10.371],{icon:n}).addTo(e),s=L.marker([46.74,2.417],{icon:l}).addTo(e);r.bindPopup("Spain",{closeButton:!1}),i.bindPopup("Italy",{closeButton:!1}),a.bindPopup("Germany",{closeButton:!1}),s.bindPopup("France",{closeButton:!1}),L.control.scale().addTo(e)}(),function(){var e=L.map("kt_leaflet_4",{center:[51.505,-.09],zoom:13});L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{attribution:'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(e);var o=L.divIcon({html:'<span class="svg-icon svg-icon-danger svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>',bgPos:[10,10],iconAnchor:[20,37],popupAnchor:[0,-37],className:"leaflet-marker"});L.marker([51.5,-.09],{icon:o}).addTo(e),L.circle([51.508,-.11],{color:"#4A7DFF",fillColor:"#6993FF",fillOpacity:.5,radius:700}).addTo(e),L.polygon([[51.509,-.08],[51.503,-.06],[51.51,-.047]]).addTo(e)}(),function(){var e,o=L.map("kt_leaflet_5",{center:[40.725,-73.985],zoom:13});L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{attribution:'&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'}).addTo(o),e=void 0===L.esri.Geocoding?L.esri.geocodeService():L.esri.Geocoding.geocodeService();var t=L.layerGroup().addTo(o),n=L.divIcon({html:'<span class="svg-icon svg-icon-danger svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>',bgPos:[10,10],iconAnchor:[20,37],popupAnchor:[0,-37],className:"leaflet-marker"});o.on("click",(function(o){e.reverse().latlng(o.latlng).run((function(e,o){e||(t.clearLayers(),L.marker(o.latlng,{icon:n}).addTo(t).bindPopup(o.address.Match_addr,{closeButton:!1}).openPopup(),alert("You've clicked on the following address: ".concat(o.address.Match_addr)))}))}))}(),function(){var e=[{loc:[41.57533,13.102411],title:"aquamarine"},{loc:[41.57573,13.002411],title:"black"},{loc:[41.807149,13.162994],title:"blue"},{loc:[41.507149,13.172994],title:"chocolate"},{loc:[41.847149,14.132994],title:"coral"},{loc:[41.21919,13.062145],title:"cyan"},{loc:[41.34419,13.242145],title:"darkblue"},{loc:[41.67919,13.122145],title:"Darkred"},{loc:[41.32919,13.192145],title:"Darkgray"},{loc:[41.37929,13.122545],title:"dodgerblue"},{loc:[41.40919,13.362145],title:"gray"},{loc:[41.794008,12.583884],title:"green"},{loc:[41.805008,12.982884],title:"greenyellow"},{loc:[41.536175,13.27359],title:"red"},{loc:[41.516175,13.37359],title:"rosybrown"},{loc:[41.507175,13.27369],title:"royalblue"},{loc:[41.836175,13.67359],title:"salmon"},{loc:[41.796175,13.57059],title:"seagreen"},{loc:[41.436175,13.57359],title:"seashell"},{loc:[41.336175,13.97359],title:"silver"},{loc:[41.236175,13.27359],title:"skyblue"},{loc:[41.546175,13.47359],title:"yellow"},{loc:[41.23929,13.032145],title:"white"}],o=new L.Map("kt_leaflet_6",{zoom:10,center:new L.latLng(e[0].loc)});o.addLayer(new L.TileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png")),L.control.scale().addTo(o);var t=L.divIcon({html:'<span class="svg-icon svg-icon-danger svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>',bgPos:[10,10],iconAnchor:[20,37],popupAnchor:[0,-37],className:"leaflet-marker"});e.forEach((function(e){L.marker(e.loc,{icon:t}).addTo(o).bindPopup(e.title,{closeButton:!1})}))}()}};jQuery(document).ready((function(){n.init()}))}});