(()=>{"use strict";var r,e={227:()=>{const r=window.wp.blocks,e=window.wp.element,o=window.wp.i18n,t=window.wp.blockEditor,l=JSON.parse('{"u2":"starter-block-plugin/starter-block"}');(0,r.registerBlockType)(l.u2,{edit:function(){return(0,e.createElement)("p",(0,t.useBlockProps)(),(0,o.__)("Starter Block Plugin Block – hello from the editor!","starter-block"))},save:function(){return(0,e.createElement)("p",t.useBlockProps.save(),(0,o.__)("Starter Block Plugin Block – hello from the saved content!","starter-block"))}})}},o={};function t(r){var l=o[r];if(void 0!==l)return l.exports;var n=o[r]={exports:{}};return e[r](n,n.exports,t),n.exports}t.m=e,r=[],t.O=(e,o,l,n)=>{if(!o){var a=1/0;for(p=0;p<r.length;p++){for(var[o,l,n]=r[p],i=!0,s=0;s<o.length;s++)(!1&n||a>=n)&&Object.keys(t.O).every((r=>t.O[r](o[s])))?o.splice(s--,1):(i=!1,n<a&&(a=n));if(i){r.splice(p--,1);var c=l();void 0!==c&&(e=c)}}return e}n=n||0;for(var p=r.length;p>0&&r[p-1][2]>n;p--)r[p]=r[p-1];r[p]=[o,l,n]},t.o=(r,e)=>Object.prototype.hasOwnProperty.call(r,e),(()=>{var r={826:0,431:0};t.O.j=e=>0===r[e];var e=(e,o)=>{var l,n,[a,i,s]=o,c=0;if(a.some((e=>0!==r[e]))){for(l in i)t.o(i,l)&&(t.m[l]=i[l]);if(s)var p=s(t)}for(e&&e(o);c<a.length;c++)n=a[c],t.o(r,n)&&r[n]&&r[n][0](),r[n]=0;return t.O(p)},o=globalThis.webpackChunkstarter_block=globalThis.webpackChunkstarter_block||[];o.forEach(e.bind(null,0)),o.push=e.bind(null,o.push.bind(o))})();var l=t.O(void 0,[431],(()=>t(227)));l=t.O(l)})();