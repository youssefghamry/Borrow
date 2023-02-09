!function(){"use strict";var e={n:function(t){var l=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(l,{a:l}),l},d:function(t,l){for(var r in l)e.o(l,r)&&!e.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:l[r]})},o:function(e,t){return Object.prototype.hasOwnProperty.call(e,t)}},t=window.wp.element,l=window.wp.i18n,r=window.wp.blocks,a=window.wp.blockEditor,o=(0,t.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 242.5 239.46"},(0,t.createElement)("defs",null,(0,t.createElement)("clipPath",{id:"clip-path",transform:"translate(1.72)"},(0,t.createElement)("circle",{className:"cls-1",cx:"119.73",cy:"119.73",r:"116.15",fill:"none"}))),(0,t.createElement)("g",{id:"Layer_2","data-name":"Layer 2"},(0,t.createElement)("g",{id:"Layer_1","data-name":"Layer 1"},(0,t.createElement)("g",{className:"cls-2",clipPath:"url(#clip-path)"},(0,t.createElement)("circle",{className:"cls-3",cx:"121.45",cy:"119.73",r:"116.15",fill:"#33c6f4"}),(0,t.createElement)("path",{className:"cls-4",d:"M239.32,167.79c-53.41-24-108.37-91.46-113-94.55s-10.84.77-10.84.77c-3.87-6.19-10.06.77-10.06.77C76.77,123.55.14,170.11.14,170.11S36.94,237.79,122,237.79C208.48,237.79,239.32,167.79,239.32,167.79Z",transform:"translate(1.72)",fill:"#1b447e"}),(0,t.createElement)("path",{className:"cls-5",d:"M67.48,116.58s15.48-7,12.38,4.65-15.48,28.64-11.61,29.41S83,140.58,86.06,142.12s5.42.78,3.87,6.2-3.1,9.29,0,9.29,5.42-7,9.29-13.94,10.06-3.87,12.38-1.55,9.29,15.49,14.71,13.94,8.51-8.52,6.19-24,1.55-20.12,1.55-20.12,4.64-2.32,13.16,8.51,24,27.09,26.31,26.32-10.83-17.8-7.74-19.35,15.48,2.32,21.68,7.74c0,0,2.12,8.87,2.12.36L126.31,73.24,115.47,74l-10.06.77S80.64,111.94,67.48,116.58Z",transform:"translate(1.72)",fill:"#fff"}),(0,t.createElement)("path",{className:"cls-6",d:"M239.32,170.11c-53.41-24-108.37-93.78-113-96.87s-10.84.77-10.84.77c-3.87-6.19-10.06.77-10.06.77C76.77,123.55.14,170.11.14,170.11",transform:"translate(1.72)",fill:"none",stroke:"#221e1f",strokeMiterlimit:"10",strokeWidth:"8px"})),(0,t.createElement)("circle",{className:"cls-6",cx:"121.45",cy:"119.73",r:"116.15",fill:"none",stroke:"#1b447e",strokeMiterlimit:"10",strokeWidth:"8px"})))),n=window.wp.components,c=window.wp.apiFetch,s=e.n(c),m=window.wp.url;const i=e=>{let t="[contact-form-7]";return e.id&&(t=t.replace(/\]$/,` id="${e.id}"]`)),e.title&&(t=t.replace(/\]$/,` title="${e.title}"]`)),e.htmlId&&(t=t.replace(/\]$/,` html_id="${e.htmlId}"]`)),e.htmlName&&(t=t.replace(/\]$/,` html_name="${e.htmlName}"]`)),e.htmlTitle&&(t=t.replace(/\]$/,` html_title="${e.htmlTitle}"]`)),e.htmlClass&&(t=t.replace(/\]$/,` html_class="${e.htmlClass}"]`)),"raw_form"===e.output&&(t=t.replace(/\]$/,` output="${e.output}"]`)),t},d=e=>{const t=ajaxurl.replace(/\/admin-ajax\.php$/,"/admin.php");return(0,m.addQueryArgs)(t,{page:"wpcf7",post:e.id,action:"edit"})};var p,f={from:[{type:"shortcode",tag:"contact-form-7",attributes:{id:{type:"integer",shortcode:e=>{let{named:{id:t}}=e;return parseInt(t)}},title:{type:"string",shortcode:e=>{let{named:{title:t}}=e;return t}}}}],to:[{type:"block",blocks:["core/shortcode"],transform:e=>{const t=i(e);return(0,r.createBlock)("core/shortcode",{text:t})}}]};window.wpcf7=null!==(p=window.wpcf7)&&void 0!==p?p:{contactForms:[]},(0,r.registerBlockType)("contact-form-7/contact-form-selector",{icon:o,transforms:f,edit:function(e){let{attributes:r,setAttributes:o}=e;const c=e=>e.reduce(((e,t)=>e.set(t.id,t)),new Map),[i,p]=(0,t.useState)((()=>{var e;return c(null!==(e=window.wpcf7.contactForms)&&void 0!==e?e:[])}));return(0,t.createElement)(t.Fragment,null,(0,t.createElement)(a.InspectorControls,null,r.id&&(0,t.createElement)(n.PanelBody,{title:r.title},(0,t.createElement)(n.ExternalLink,{href:d(r)},(0,l.__)("Edit this contact form","contact-form-7"))),r.id&&(0,t.createElement)(n.PanelBody,{title:(0,l.__)("Form attributes","contact-form-7"),initialOpen:!1},(0,t.createElement)(n.TextControl,{label:(0,l.__)("ID","contact-form-7"),value:r.htmlId,onChange:e=>o({htmlId:e}),help:(0,l.__)("Used for the id attribute value of the form element.","contact-form-7")}),(0,t.createElement)(n.TextControl,{label:(0,l.__)("Name","contact-form-7"),value:r.htmlName,onChange:e=>o({htmlName:e}),help:(0,l.__)("Used for the name attribute value of the form element.","contact-form-7")}),(0,t.createElement)(n.TextControl,{label:(0,l.__)("Title","contact-form-7"),value:r.htmlTitle,onChange:e=>o({htmlTitle:e}),help:(0,l.__)("Used for the aria-label attribute value of the form element.","contact-form-7")}),(0,t.createElement)(n.TextControl,{label:(0,l.__)("Class","contact-form-7"),value:r.htmlClass,onChange:e=>o({htmlClass:e}),help:(0,l.__)("Used for the class attribute value of the form element.","contact-form-7")}))),(0,t.createElement)("div",(0,a.useBlockProps)({className:"components-placeholder",style:{marginTop:"28px",marginBottom:"28px"}}),(0,t.createElement)(n.ComboboxControl,{label:(0,l.__)("Select a contact form:","contact-form-7"),options:(e=>{const t=[];for(const[l,r]of e)t.push({value:l,label:r.title});return t})(i),value:r.id,onChange:e=>{var t;return o({id:parseInt(e),title:null===(t=i.get(parseInt(e)))||void 0===t?void 0:t.title})},onFilterValueChange:e=>{(async e=>s()({path:(0,m.addQueryArgs)("/contact-form-7/v1/contact-forms",{posts_per_page:20,orderby:"modified",order:"DESC",...e})}).then((e=>e)))({search:e}).then((e=>{p(c(e))}))}})))},save:e=>{let{attributes:l}=e;const r=i(l);return(0,t.createElement)("div",a.useBlockProps.save(),r)}})}();