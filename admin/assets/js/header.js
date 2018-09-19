if (window.innerWidth > 992) {!function(t,e){"use strict";"function"==typeof define&&define.amd?define([],e):"object"==typeof exports?module.exports=e():t.Headroom=e()}(this,function(){"use strict";function t(t){this.callback=t,this.ticking=!1}function e(t){return t&&"undefined"!=typeof window&&(t===window||t.nodeType)}function n(t){if(arguments.length<=0)throw new Error("Missing arguments in extend function");var i,o,s=t||{};for(o=1;o<arguments.length;o++){var r=arguments[o]||{};for(i in r)"object"!=typeof s[i]||e(s[i])?s[i]=s[i]||r[i]:s[i]=n(s[i],r[i])}return s}function i(t){return t===Object(t)?t:{down:t,up:t}}function o(t,e){e=n(e,o.options),this.lastKnownScrollY=0,this.elem=t,this.tolerance=i(e.tolerance),this.classes=e.classes,this.offset=e.offset,this.scroller=e.scroller,this.initialised=!1,this.onPin=e.onPin,this.onUnpin=e.onUnpin,this.onTop=e.onTop,this.onNotTop=e.onNotTop,this.onBottom=e.onBottom,this.onNotBottom=e.onNotBottom}var s={bind:!!function(){}.bind,classList:"classList"in document.documentElement,rAF:!!(window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame)};return window.requestAnimationFrame=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame,t.prototype={constructor:t,update:function(){this.callback&&this.callback(),this.ticking=!1},requestTick:function(){this.ticking||(requestAnimationFrame(this.rafCallback||(this.rafCallback=this.update.bind(this))),this.ticking=!0)},handleEvent:function(){this.requestTick()}},o.prototype={constructor:o,init:function(){return o.cutsTheMustard?(this.debouncer=new t(this.update.bind(this)),this.elem.classList.add(this.classes.initial),setTimeout(this.attachEvent.bind(this),100),this):void 0},destroy:function(){var t=this.classes;this.initialised=!1,this.elem.classList.remove(t.unpinned,t.pinned,t.top,t.notTop,t.initial),this.scroller.removeEventListener("scroll",this.debouncer,!1)},attachEvent:function(){this.initialised||(this.lastKnownScrollY=this.getScrollY(),this.initialised=!0,this.scroller.addEventListener("scroll",this.debouncer,!1),this.debouncer.handleEvent())},unpin:function(){var t=this.elem.classList,e=this.classes;!t.contains(e.pinned)&&t.contains(e.unpinned)||(t.add(e.unpinned),t.remove(e.pinned),this.onUnpin&&this.onUnpin.call(this))},pin:function(){var t=this.elem.classList,e=this.classes;t.contains(e.unpinned)&&(t.remove(e.unpinned),t.add(e.pinned),this.onPin&&this.onPin.call(this))},top:function(){var t=this.elem.classList,e=this.classes;t.contains(e.top)||(t.add(e.top),t.remove(e.notTop),this.onTop&&this.onTop.call(this))},notTop:function(){var t=this.elem.classList,e=this.classes;t.contains(e.notTop)||(t.add(e.notTop),t.remove(e.top),this.onNotTop&&this.onNotTop.call(this))},bottom:function(){var t=this.elem.classList,e=this.classes;t.contains(e.bottom)||(t.add(e.bottom),t.remove(e.notBottom),this.onBottom&&this.onBottom.call(this))},notBottom:function(){var t=this.elem.classList,e=this.classes;t.contains(e.notBottom)||(t.add(e.notBottom),t.remove(e.bottom),this.onNotBottom&&this.onNotBottom.call(this))},getScrollY:function(){return void 0!==this.scroller.pageYOffset?this.scroller.pageYOffset:void 0!==this.scroller.scrollTop?this.scroller.scrollTop:(document.documentElement||document.body.parentNode||document.body).scrollTop},getViewportHeight:function(){return window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight},getElementPhysicalHeight:function(t){return Math.max(t.offsetHeight,t.clientHeight)},getScrollerPhysicalHeight:function(){return this.scroller===window||this.scroller===document.body?this.getViewportHeight():this.getElementPhysicalHeight(this.scroller)},getDocumentHeight:function(){var t=document.body,e=document.documentElement;return Math.max(t.scrollHeight,e.scrollHeight,t.offsetHeight,e.offsetHeight,t.clientHeight,e.clientHeight)},getElementHeight:function(t){return Math.max(t.scrollHeight,t.offsetHeight,t.clientHeight)},getScrollerHeight:function(){return this.scroller===window||this.scroller===document.body?this.getDocumentHeight():this.getElementHeight(this.scroller)},isOutOfBounds:function(t){var e=0>t,n=t+this.getScrollerPhysicalHeight()>this.getScrollerHeight();return e||n},toleranceExceeded:function(t,e){return Math.abs(t-this.lastKnownScrollY)>=this.tolerance[e]},shouldUnpin:function(t,e){var n=t>this.lastKnownScrollY,i=t>=this.offset;return n&&i&&e},shouldPin:function(t,e){var n=t<this.lastKnownScrollY,i=t<=this.offset;return n&&e||i},update:function(){var t=this.getScrollY(),e=t>this.lastKnownScrollY?"down":"up",n=this.toleranceExceeded(t,e);this.isOutOfBounds(t)||(t<=this.offset?this.top():this.notTop(),t+this.getViewportHeight()>=this.getScrollerHeight()?this.bottom():this.notBottom(),this.shouldUnpin(t,n)?this.unpin():this.shouldPin(t,n)&&this.pin(),this.lastKnownScrollY=t)}},o.options={tolerance:{up:0,down:0},offset:0,scroller:window,classes:{pinned:"headroom--pinned",unpinned:"headroom--unpinned",top:"headroom--top",notTop:"headroom--not-top",bottom:"headroom--bottom",notBottom:"headroom--not-bottom",initial:"headroom"}},o.cutsTheMustard="undefined"!=typeof s&&s.rAF&&s.bind&&s.classList,o}),function(){var t=/\blang(?:uage)?-(?!\*)(\w+)\b/i,e=self.Prism={util:{type:function(t){return Object.prototype.toString.call(t).match(/\[object (\w+)\]/)[1]},clone:function(t){var n=e.util.type(t);switch(n){case"Object":var i={};for(var o in t)t.hasOwnProperty(o)&&(i[o]=e.util.clone(t[o]));return i;case"Array":return t.slice()}return t}},languages:{extend:function(t,n){var i=e.util.clone(e.languages[t]);for(var o in n)i[o]=n[o];return i},insertBefore:function(t,n,i,o){o=o||e.languages;var s=o[t],r={};for(var a in s)if(s.hasOwnProperty(a)){if(a==n)for(var l in i)i.hasOwnProperty(l)&&(r[l]=i[l]);r[a]=s[a]}return o[t]=r},DFS:function(t,n){for(var i in t)n.call(t,i,t[i]),"Object"===e.util.type(t)&&e.languages.DFS(t[i],n)}},highlightAll:function(t,n){for(var i,o=document.querySelectorAll('code[class*="language-"], [class*="language-"] code, code[class*="lang-"], [class*="lang-"] code'),s=0;i=o[s++];)e.highlightElement(i,t===!0,n)},highlightElement:function(i,o,s){for(var r,a,l=i;l&&!t.test(l.className);)l=l.parentNode;if(l&&(r=(l.className.match(t)||[,""])[1],a=e.languages[r]),a){i.className=i.className.replace(t,"").replace(/\s+/g," ")+" language-"+r,l=i.parentNode,/pre/i.test(l.nodeName)&&(l.className=l.className.replace(t,"").replace(/\s+/g," ")+" language-"+r);var c=i.textContent;if(c){c=c.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/\u00a0/g," ");var h={element:i,language:r,grammar:a,code:c};if(e.hooks.run("before-highlight",h),o&&self.Worker){var u=new Worker(e.filename);u.onmessage=function(t){h.highlightedCode=n.stringify(JSON.parse(t.data),r),e.hooks.run("before-insert",h),h.element.innerHTML=h.highlightedCode,s&&s.call(h.element),e.hooks.run("after-highlight",h)},u.postMessage(JSON.stringify({language:h.language,code:h.code}))}else h.highlightedCode=e.highlight(h.code,h.grammar,h.language),e.hooks.run("before-insert",h),h.element.innerHTML=h.highlightedCode,s&&s.call(i),e.hooks.run("after-highlight",h)}}},highlight:function(t,i,o){return n.stringify(e.tokenize(t,i),o)},tokenize:function(t,n){var i=e.Token,o=[t],s=n.rest;if(s){for(var r in s)n[r]=s[r];delete n.rest}t:for(var r in n)if(n.hasOwnProperty(r)&&n[r]){var a=n[r],l=a.inside,c=!!a.lookbehind,h=0;a=a.pattern||a;for(var u=0;u<o.length;u++){var d=o[u];if(o.length>t.length)break t;if(!(d instanceof i)){a.lastIndex=0;var g=a.exec(d);if(g){c&&(h=g[1].length);var m=g.index-1+h,g=g[0].slice(h),f=g.length,p=m+f,w=d.slice(0,m+1),y=d.slice(p+1),v=[u,1];w&&v.push(w);var b=new i(r,l?e.tokenize(g,l):g);v.push(b),y&&v.push(y),Array.prototype.splice.apply(o,v)}}}}return o},hooks:{all:{},add:function(t,n){var i=e.hooks.all;i[t]=i[t]||[],i[t].push(n)},run:function(t,n){var i=e.hooks.all[t];if(i&&i.length)for(var o,s=0;o=i[s++];)o(n)}}},n=e.Token=function(t,e){this.type=t,this.content=e};if(n.stringify=function(t,i,o){if("string"==typeof t)return t;if("[object Array]"==Object.prototype.toString.call(t))return t.map(function(e){return n.stringify(e,i,t)}).join("");var s={type:t.type,content:n.stringify(t.content,i,o),tag:"span",classes:["token",t.type],attributes:{},language:i,parent:o};"comment"==s.type&&(s.attributes.spellcheck="true"),e.hooks.run("wrap",s);var r="";for(var a in s.attributes)r+=a+'="'+(s.attributes[a]||"")+'"';return"<"+s.tag+' class="'+s.classes.join(" ")+'" '+r+">"+s.content+"</"+s.tag+">"},!self.document)return void self.addEventListener("message",function(t){var n=JSON.parse(t.data),i=n.language,o=n.code;self.postMessage(JSON.stringify(e.tokenize(o,e.languages[i]))),self.close()},!1);var i=document.getElementsByTagName("script");i=i[i.length-1],i&&(e.filename=i.src,document.addEventListener&&!i.hasAttribute("data-manual")&&document.addEventListener("DOMContentLoaded",e.highlightAll))}(),Prism.languages.markup={comment:/&lt;!--[\w\W]*?-->/g,prolog:/&lt;\?.+?\?>/,doctype:/&lt;!DOCTYPE.+?>/,cdata:/&lt;!\[CDATA\[[\w\W]*?]]>/i,tag:{pattern:/&lt;\/?[\w:-]+\s*(?:\s+[\w:-]+(?:=(?:("|')(\\?[\w\W])*?\1|\w+))?\s*)*\/?>/gi,inside:{tag:{pattern:/^&lt;\/?[\w:-]+/i,inside:{punctuation:/^&lt;\/?/,namespace:/^[\w-]+?:/}},"attr-value":{pattern:/=(?:('|")[\w\W]*?(\1)|[^\s>]+)/gi,inside:{punctuation:/=|>|"/g}},punctuation:/\/?>/g,"attr-name":{pattern:/[\w:-]+/g,inside:{namespace:/^[\w-]+?:/}}}},entity:/&amp;#?[\da-z]{1,8};/gi},Prism.hooks.add("wrap",function(t){"entity"===t.type&&(t.attributes.title=t.content.replace(/&amp;/,"&"))}),Prism.languages.css={comment:/\/\*[\w\W]*?\*\//g,atrule:{pattern:/@[\w-]+?.*?(;|(?=\s*{))/gi,inside:{punctuation:/[;:]/g}},url:/url\((["']?).*?\1\)/gi,selector:/[^\{\}\s][^\{\};]*(?=\s*\{)/g,property:/(\b|\B)[\w-]+(?=\s*:)/gi,string:/("|')(\\?.)*?\1/g,important:/\B!important\b/gi,ignore:/&(lt|gt|amp);/gi,punctuation:/[\{\};:]/g},Prism.languages.markup&&Prism.languages.insertBefore("markup","tag",{style:{pattern:/(&lt;|<)style[\w\W]*?(>|&gt;)[\w\W]*?(&lt;|<)\/style(>|&gt;)/gi,inside:{tag:{pattern:/(&lt;|<)style[\w\W]*?(>|&gt;)|(&lt;|<)\/style(>|&gt;)/gi,inside:Prism.languages.markup.tag.inside},rest:Prism.languages.css}}}),Prism.languages.clike={comment:{pattern:/(^|[^\\])(\/\*[\w\W]*?\*\/|(^|[^:])\/\/.*?(\r?\n|$))/g,lookbehind:!0},string:/("|')(\\?.)*?\1/g,"class-name":{pattern:/((?:(?:class|interface|extends|implements|trait|instanceof|new)\s+)|(?:catch\s+\())[a-z0-9_\.\\]+/gi,lookbehind:!0,inside:{punctuation:/(\.|\\)/}},keyword:/\b(if|else|while|do|for|return|in|instanceof|function|new|try|throw|catch|finally|null|break|continue)\b/g,"boolean":/\b(true|false)\b/g,"function":{pattern:/[a-z0-9_]+\(/gi,inside:{punctuation:/\(/}},number:/\b-?(0x[\dA-Fa-f]+|\d*\.?\d+([Ee]-?\d+)?)\b/g,operator:/[-+]{1,2}|!|&lt;=?|>=?|={1,3}|(&amp;){1,2}|\|?\||\?|\*|\/|\~|\^|\%/g,ignore:/&(lt|gt|amp);/gi,punctuation:/[{}[\];(),.:]/g},Prism.languages.javascript=Prism.languages.extend("clike",{keyword:/\b(var|let|if|else|while|do|for|return|in|instanceof|function|new|with|typeof|try|throw|catch|finally|null|break|continue)\b/g,number:/\b-?(0x[\dA-Fa-f]+|\d*\.?\d+([Ee]-?\d+)?|NaN|-?Infinity)\b/g}),Prism.languages.insertBefore("javascript","keyword",{regex:{pattern:/(^|[^/])\/(?!\/)(\[.+?]|\\.|[^/\r\n])+\/[gim]{0,3}(?=\s*($|[\r\n,.;})]))/g,lookbehind:!0}}),Prism.languages.markup&&Prism.languages.insertBefore("markup","tag",{script:{pattern:/(&lt;|<)script[\w\W]*?(>|&gt;)[\w\W]*?(&lt;|<)\/script(>|&gt;)/gi,inside:{tag:{pattern:/(&lt;|<)script[\w\W]*?(>|&gt;)|(&lt;|<)\/script(>|&gt;)/gi,inside:Prism.languages.markup.tag.inside},rest:Prism.languages.javascript}}}),function(){function t(t){this.strategies=t}t.prototype={constructor:t,init:function(){this.elements=document.querySelectorAll("[data-code-generator]")},generate:function(t){var e=this;[].forEach.call(this.elements,function(n){e.highlightElement(n,t)})},getStrategy:function(t){return this.strategies[t.getAttribute("data-code-generator")]},highlightElement:function(t,e){var n=this.getStrategy(t),i=t.querySelector("code");n&&(i.innerHTML=n(e),Prism.highlightElement(i,!1))}},window.CodeGenerator=t}(),function(t){function e(t){return JSON.stringify({offset:t.offset,tolerance:t.tolerance,classes:{initial:t.classes.initial,pinned:t.classes.pinned,unpinned:t.classes.unpinned}},null,"  ")}function n(t,e,n){this.form=t,this.codeGenerator=e,this.getOptions=n}n.prototype={constructor:n,init:function(){var t=this.form;return t&&(this.codeGenerator.init(),this.process(),t.addEventListener("change",this,!1)),this},process:function(){var e=this.getOptions(this.form);this.headroom&&this.headroom.destroy(),this.headroom=new Headroom(t.querySelector("header"),e).init(),this.codeGenerator.generate(e)},handleEvent:function(){this.process()},destroy:function(){this.form.removeEventListener("change",this)}};var i={widget:function(t){return"var headroom = new Headroom(elem, "+e(t)+");\nheadroom.init();\n\n// to destroy\nheadroom.destroy();"},plugin:function(t){return'$("header").headroom('+e(t)+');\n\n// to destroy\n$("#header").headroom("destroy");'},dataApi:function(t){return'&lt;header data-headroom data-tolerance="'+t.tolerance+'" data-offset="'+t.offset+"\" data-classes='"+JSON.stringify(t.classes)+'\'&gt;&lt;/header&gt;\n\n// to destroy, in your JS:\n$("header").data("headroom").destroy();'},angular:function(t){return'&lt;headroom tolerance="'+t.tolerance+'" offset="'+t.offset+"\" classes='"+JSON.stringify(t.classes)+"'&gt;&lt;/headroom&gt;"}};new n(t.querySelector("form"),new CodeGenerator(i),function(t){var e=t.querySelector("[name=classes]:checked");return{tolerance:t.querySelector("#tolerance").valueAsNumber,offset:t.querySelector("#offset").valueAsNumber,classes:JSON.parse(e.value)}}).init()}(document),function(){var t=new Headroom(document.querySelector("#header"),{tolerance:5,offset:205,classes:{initial:"animated",pinned:"slideDown",unpinned:"slideUp"}});t.init();var e=new Headroom(document.getElementById("btt"),{tolerance:0,offset:500,classes:{initial:"slide",pinned:"slide--reset",unpinned:"slide--down"}});e.init()}();}