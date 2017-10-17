!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):e(jQuery)}(function(e){e.ui=e.ui||{};var t=(e.ui.version="1.12.1",0),i=Array.prototype.slice;e.cleanData=function(t){return function(i){var s,n,a;for(a=0;null!=(n=i[a]);a++)try{s=e._data(n,"events"),s&&s.remove&&e(n).triggerHandler("remove")}catch(e){}t(i)}}(e.cleanData),e.widget=function(t,i,s){var n,a,o,l={},u=t.split(".")[0];t=t.split(".")[1];var h=u+"-"+t;return s||(s=i,i=e.Widget),e.isArray(s)&&(s=e.extend.apply(null,[{}].concat(s))),e.expr[":"][h.toLowerCase()]=function(t){return!!e.data(t,h)},e[u]=e[u]||{},n=e[u][t],a=e[u][t]=function(e,t){return this._createWidget?void(arguments.length&&this._createWidget(e,t)):new a(e,t)},e.extend(a,n,{version:s.version,_proto:e.extend({},s),_childConstructors:[]}),o=new i,o.options=e.widget.extend({},o.options),e.each(s,function(t,s){return e.isFunction(s)?void(l[t]=function(){function e(){return i.prototype[t].apply(this,arguments)}function n(e){return i.prototype[t].apply(this,e)}return function(){var t,i=this._super,a=this._superApply;return this._super=e,this._superApply=n,t=s.apply(this,arguments),this._super=i,this._superApply=a,t}}()):void(l[t]=s)}),a.prototype=e.widget.extend(o,{widgetEventPrefix:n?o.widgetEventPrefix||t:t},l,{constructor:a,namespace:u,widgetName:t,widgetFullName:h}),n?(e.each(n._childConstructors,function(t,i){var s=i.prototype;e.widget(s.namespace+"."+s.widgetName,a,i._proto)}),delete n._childConstructors):i._childConstructors.push(a),e.widget.bridge(t,a),a},e.widget.extend=function(t){for(var s,n,a=i.call(arguments,1),o=0,l=a.length;o<l;o++)for(s in a[o])n=a[o][s],a[o].hasOwnProperty(s)&&void 0!==n&&(e.isPlainObject(n)?t[s]=e.isPlainObject(t[s])?e.widget.extend({},t[s],n):e.widget.extend({},n):t[s]=n);return t},e.widget.bridge=function(t,s){var n=s.prototype.widgetFullName||t;e.fn[t]=function(a){var o="string"==typeof a,l=i.call(arguments,1),u=this;return o?this.length||"instance"!==a?this.each(function(){var i,s=e.data(this,n);return"instance"===a?(u=s,!1):s?e.isFunction(s[a])&&"_"!==a.charAt(0)?(i=s[a].apply(s,l),i!==s&&void 0!==i?(u=i&&i.jquery?u.pushStack(i.get()):i,!1):void 0):e.error("no such method '"+a+"' for "+t+" widget instance"):e.error("cannot call methods on "+t+" prior to initialization; attempted to call method '"+a+"'")}):u=void 0:(l.length&&(a=e.widget.extend.apply(null,[a].concat(l))),this.each(function(){var t=e.data(this,n);t?(t.option(a||{}),t._init&&t._init()):e.data(this,n,new s(a,this))})),u}},e.Widget=function(){},e.Widget._childConstructors=[],e.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",defaultElement:"<div>",options:{classes:{},disabled:!1,create:null},_createWidget:function(i,s){s=e(s||this.defaultElement||this)[0],this.element=e(s),this.uuid=t++,this.eventNamespace="."+this.widgetName+this.uuid,this.bindings=e(),this.hoverable=e(),this.focusable=e(),this.classesElementLookup={},s!==this&&(e.data(s,this.widgetFullName,this),this._on(!0,this.element,{remove:function(e){e.target===s&&this.destroy()}}),this.document=e(s.style?s.ownerDocument:s.document||s),this.window=e(this.document[0].defaultView||this.document[0].parentWindow)),this.options=e.widget.extend({},this.options,this._getCreateOptions(),i),this._create(),this.options.disabled&&this._setOptionDisabled(this.options.disabled),this._trigger("create",null,this._getCreateEventData()),this._init()},_getCreateOptions:function(){return{}},_getCreateEventData:e.noop,_create:e.noop,_init:e.noop,destroy:function(){var t=this;this._destroy(),e.each(this.classesElementLookup,function(e,i){t._removeClass(i,e)}),this.element.off(this.eventNamespace).removeData(this.widgetFullName),this.widget().off(this.eventNamespace).removeAttr("aria-disabled"),this.bindings.off(this.eventNamespace)},_destroy:e.noop,widget:function(){return this.element},option:function(t,i){var s,n,a,o=t;if(0===arguments.length)return e.widget.extend({},this.options);if("string"==typeof t)if(o={},s=t.split("."),t=s.shift(),s.length){for(n=o[t]=e.widget.extend({},this.options[t]),a=0;a<s.length-1;a++)n[s[a]]=n[s[a]]||{},n=n[s[a]];if(t=s.pop(),1===arguments.length)return void 0===n[t]?null:n[t];n[t]=i}else{if(1===arguments.length)return void 0===this.options[t]?null:this.options[t];o[t]=i}return this._setOptions(o),this},_setOptions:function(e){var t;for(t in e)this._setOption(t,e[t]);return this},_setOption:function(e,t){return"classes"===e&&this._setOptionClasses(t),this.options[e]=t,"disabled"===e&&this._setOptionDisabled(t),this},_setOptionClasses:function(t){var i,s,n;for(i in t)n=this.classesElementLookup[i],t[i]!==this.options.classes[i]&&n&&n.length&&(s=e(n.get()),this._removeClass(n,i),s.addClass(this._classes({element:s,keys:i,classes:t,add:!0})))},_setOptionDisabled:function(e){this._toggleClass(this.widget(),this.widgetFullName+"-disabled",null,!!e),e&&(this._removeClass(this.hoverable,null,"ui-state-hover"),this._removeClass(this.focusable,null,"ui-state-focus"))},enable:function(){return this._setOptions({disabled:!1})},disable:function(){return this._setOptions({disabled:!0})},_classes:function(t){function i(i,a){var o,l;for(l=0;l<i.length;l++)o=n.classesElementLookup[i[l]]||e(),o=e(t.add?e.unique(o.get().concat(t.element.get())):o.not(t.element).get()),n.classesElementLookup[i[l]]=o,s.push(i[l]),a&&t.classes[i[l]]&&s.push(t.classes[i[l]])}var s=[],n=this;return t=e.extend({element:this.element,classes:this.options.classes||{}},t),this._on(t.element,{remove:"_untrackClassesElement"}),t.keys&&i(t.keys.match(/\S+/g)||[],!0),t.extra&&i(t.extra.match(/\S+/g)||[]),s.join(" ")},_untrackClassesElement:function(t){var i=this;e.each(i.classesElementLookup,function(s,n){e.inArray(t.target,n)!==-1&&(i.classesElementLookup[s]=e(n.not(t.target).get()))})},_removeClass:function(e,t,i){return this._toggleClass(e,t,i,!1)},_addClass:function(e,t,i){return this._toggleClass(e,t,i,!0)},_toggleClass:function(e,t,i,s){s="boolean"==typeof s?s:i;var n="string"==typeof e||null===e,a={extra:n?t:i,keys:n?e:t,element:n?this.element:e,add:s};return a.element.toggleClass(this._classes(a),s),this},_on:function(t,i,s){var n,a=this;"boolean"!=typeof t&&(s=i,i=t,t=!1),s?(i=n=e(i),this.bindings=this.bindings.add(i)):(s=i,i=this.element,n=this.widget()),e.each(s,function(s,o){function l(){if(t||a.options.disabled!==!0&&!e(this).hasClass("ui-state-disabled"))return("string"==typeof o?a[o]:o).apply(a,arguments)}"string"!=typeof o&&(l.guid=o.guid=o.guid||l.guid||e.guid++);var u=s.match(/^([\w:-]*)\s*(.*)$/),h=u[1]+a.eventNamespace,r=u[2];r?n.on(h,r,l):i.on(h,l)})},_off:function(t,i){i=(i||"").split(" ").join(this.eventNamespace+" ")+this.eventNamespace,t.off(i).off(i),this.bindings=e(this.bindings.not(t).get()),this.focusable=e(this.focusable.not(t).get()),this.hoverable=e(this.hoverable.not(t).get())},_delay:function(e,t){function i(){return("string"==typeof e?s[e]:e).apply(s,arguments)}var s=this;return setTimeout(i,t||0)},_hoverable:function(t){this.hoverable=this.hoverable.add(t),this._on(t,{mouseenter:function(t){this._addClass(e(t.currentTarget),null,"ui-state-hover")},mouseleave:function(t){this._removeClass(e(t.currentTarget),null,"ui-state-hover")}})},_focusable:function(t){this.focusable=this.focusable.add(t),this._on(t,{focusin:function(t){this._addClass(e(t.currentTarget),null,"ui-state-focus")},focusout:function(t){this._removeClass(e(t.currentTarget),null,"ui-state-focus")}})},_trigger:function(t,i,s){var n,a,o=this.options[t];if(s=s||{},i=e.Event(i),i.type=(t===this.widgetEventPrefix?t:this.widgetEventPrefix+t).toLowerCase(),i.target=this.element[0],a=i.originalEvent)for(n in a)n in i||(i[n]=a[n]);return this.element.trigger(i,s),!(e.isFunction(o)&&o.apply(this.element[0],[i].concat(s))===!1||i.isDefaultPrevented())}},e.each({show:"fadeIn",hide:"fadeOut"},function(t,i){e.Widget.prototype["_"+t]=function(s,n,a){"string"==typeof n&&(n={effect:n});var o,l=n?n===!0||"number"==typeof n?i:n.effect||i:t;n=n||{},"number"==typeof n&&(n={duration:n}),o=!e.isEmptyObject(n),n.complete=a,n.delay&&s.delay(n.delay),o&&e.effects&&e.effects.effect[l]?s[t](n):l!==t&&s[l]?s[l](n.duration,n.easing,a):s.queue(function(i){e(this)[t](),a&&a.call(s[0]),i()})}});var s=(e.widget,e.ui.keyCode={BACKSPACE:8,COMMA:188,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,LEFT:37,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SPACE:32,TAB:9,UP:38},e.ui.ie=!!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase()),!1);e(document).on("mouseup",function(){s=!1});e.widget("ui.mouse",{version:"1.12.1",options:{cancel:"input, textarea, button, select, option",distance:1,delay:0},_mouseInit:function(){var t=this;this.element.on("mousedown."+this.widgetName,function(e){return t._mouseDown(e)}).on("click."+this.widgetName,function(i){if(!0===e.data(i.target,t.widgetName+".preventClickEvent"))return e.removeData(i.target,t.widgetName+".preventClickEvent"),i.stopImmediatePropagation(),!1}),this.started=!1},_mouseDestroy:function(){this.element.off("."+this.widgetName),this._mouseMoveDelegate&&this.document.off("mousemove."+this.widgetName,this._mouseMoveDelegate).off("mouseup."+this.widgetName,this._mouseUpDelegate)},_mouseDown:function(t){if(!s){this._mouseMoved=!1,this._mouseStarted&&this._mouseUp(t),this._mouseDownEvent=t;var i=this,n=1===t.which,a=!("string"!=typeof this.options.cancel||!t.target.nodeName)&&e(t.target).closest(this.options.cancel).length;return!(n&&!a&&this._mouseCapture(t))||(this.mouseDelayMet=!this.options.delay,this.mouseDelayMet||(this._mouseDelayTimer=setTimeout(function(){i.mouseDelayMet=!0},this.options.delay)),this._mouseDistanceMet(t)&&this._mouseDelayMet(t)&&(this._mouseStarted=this._mouseStart(t)!==!1,!this._mouseStarted)?(t.preventDefault(),!0):(!0===e.data(t.target,this.widgetName+".preventClickEvent")&&e.removeData(t.target,this.widgetName+".preventClickEvent"),this._mouseMoveDelegate=function(e){return i._mouseMove(e)},this._mouseUpDelegate=function(e){return i._mouseUp(e)},this.document.on("mousemove."+this.widgetName,this._mouseMoveDelegate).on("mouseup."+this.widgetName,this._mouseUpDelegate),t.preventDefault(),s=!0,!0))}},_mouseMove:function(t){if(this._mouseMoved){if(e.ui.ie&&(!document.documentMode||document.documentMode<9)&&!t.button)return this._mouseUp(t);if(!t.which)if(t.originalEvent.altKey||t.originalEvent.ctrlKey||t.originalEvent.metaKey||t.originalEvent.shiftKey)this.ignoreMissingWhich=!0;else if(!this.ignoreMissingWhich)return this._mouseUp(t)}return(t.which||t.button)&&(this._mouseMoved=!0),this._mouseStarted?(this._mouseDrag(t),t.preventDefault()):(this._mouseDistanceMet(t)&&this._mouseDelayMet(t)&&(this._mouseStarted=this._mouseStart(this._mouseDownEvent,t)!==!1,this._mouseStarted?this._mouseDrag(t):this._mouseUp(t)),!this._mouseStarted)},_mouseUp:function(t){this.document.off("mousemove."+this.widgetName,this._mouseMoveDelegate).off("mouseup."+this.widgetName,this._mouseUpDelegate),this._mouseStarted&&(this._mouseStarted=!1,t.target===this._mouseDownEvent.target&&e.data(t.target,this.widgetName+".preventClickEvent",!0),this._mouseStop(t)),this._mouseDelayTimer&&(clearTimeout(this._mouseDelayTimer),delete this._mouseDelayTimer),this.ignoreMissingWhich=!1,s=!1,t.preventDefault()},_mouseDistanceMet:function(e){return Math.max(Math.abs(this._mouseDownEvent.pageX-e.pageX),Math.abs(this._mouseDownEvent.pageY-e.pageY))>=this.options.distance},_mouseDelayMet:function(){return this.mouseDelayMet},_mouseStart:function(){},_mouseDrag:function(){},_mouseStop:function(){},_mouseCapture:function(){return!0}}),e.widget("ui.slider",e.ui.mouse,{version:"1.12.1",widgetEventPrefix:"slide",options:{animate:!1,classes:{"ui-slider":"ui-corner-all","ui-slider-handle":"ui-corner-all","ui-slider-range":"ui-corner-all ui-widget-header"},distance:0,max:100,min:0,orientation:"horizontal",range:!1,step:1,value:0,values:null,change:null,slide:null,start:null,stop:null},numPages:5,_create:function(){this._keySliding=!1,this._mouseSliding=!1,this._animateOff=!0,this._handleIndex=null,this._detectOrientation(),this._mouseInit(),this._calculateNewMax(),this._addClass("ui-slider ui-slider-"+this.orientation,"ui-widget ui-widget-content"),this._refresh(),this._animateOff=!1},_refresh:function(){this._createRange(),this._createHandles(),this._setupEvents(),this._refreshValue()},_createHandles:function(){var t,i,s=this.options,n=this.element.find(".ui-slider-handle"),a="<span tabindex='0'></span>",o=[];for(i=s.values&&s.values.length||1,n.length>i&&(n.slice(i).remove(),n=n.slice(0,i)),t=n.length;t<i;t++)o.push(a);this.handles=n.add(e(o.join("")).appendTo(this.element)),this._addClass(this.handles,"ui-slider-handle","ui-state-default"),this.handle=this.handles.eq(0),this.handles.each(function(t){e(this).data("ui-slider-handle-index",t).attr("tabIndex",0)})},_createRange:function(){var t=this.options;t.range?(t.range===!0&&(t.values?t.values.length&&2!==t.values.length?t.values=[t.values[0],t.values[0]]:e.isArray(t.values)&&(t.values=t.values.slice(0)):t.values=[this._valueMin(),this._valueMin()]),this.range&&this.range.length?(this._removeClass(this.range,"ui-slider-range-min ui-slider-range-max"),this.range.css({left:"",bottom:""})):(this.range=e("<div>").appendTo(this.element),this._addClass(this.range,"ui-slider-range")),"min"!==t.range&&"max"!==t.range||this._addClass(this.range,"ui-slider-range-"+t.range)):(this.range&&this.range.remove(),this.range=null)},_setupEvents:function(){this._off(this.handles),this._on(this.handles,this._handleEvents),this._hoverable(this.handles),this._focusable(this.handles)},_destroy:function(){this.handles.remove(),this.range&&this.range.remove(),this._mouseDestroy()},_mouseCapture:function(t){var i,s,n,a,o,l,u,h,r=this,d=this.options;return!d.disabled&&(this.elementSize={width:this.element.outerWidth(),height:this.element.outerHeight()},this.elementOffset=this.element.offset(),i={x:t.pageX,y:t.pageY},s=this._normValueFromMouse(i),n=this._valueMax()-this._valueMin()+1,this.handles.each(function(t){var i=Math.abs(s-r.values(t));(n>i||n===i&&(t===r._lastChangedValue||r.values(t)===d.min))&&(n=i,a=e(this),o=t)}),l=this._start(t,o),l!==!1&&(this._mouseSliding=!0,this._handleIndex=o,this._addClass(a,null,"ui-state-active"),a.trigger("focus"),u=a.offset(),h=!e(t.target).parents().addBack().is(".ui-slider-handle"),this._clickOffset=h?{left:0,top:0}:{left:t.pageX-u.left-a.width()/2,top:t.pageY-u.top-a.height()/2-(parseInt(a.css("borderTopWidth"),10)||0)-(parseInt(a.css("borderBottomWidth"),10)||0)+(parseInt(a.css("marginTop"),10)||0)},this.handles.hasClass("ui-state-hover")||this._slide(t,o,s),this._animateOff=!0,!0))},_mouseStart:function(){return!0},_mouseDrag:function(e){var t={x:e.pageX,y:e.pageY},i=this._normValueFromMouse(t);return this._slide(e,this._handleIndex,i),!1},_mouseStop:function(e){return this._removeClass(this.handles,null,"ui-state-active"),this._mouseSliding=!1,this._stop(e,this._handleIndex),this._change(e,this._handleIndex),this._handleIndex=null,this._clickOffset=null,this._animateOff=!1,!1},_detectOrientation:function(){this.orientation="vertical"===this.options.orientation?"vertical":"horizontal"},_normValueFromMouse:function(e){var t,i,s,n,a;return"horizontal"===this.orientation?(t=this.elementSize.width,i=e.x-this.elementOffset.left-(this._clickOffset?this._clickOffset.left:0)):(t=this.elementSize.height,i=e.y-this.elementOffset.top-(this._clickOffset?this._clickOffset.top:0)),s=i/t,s>1&&(s=1),s<0&&(s=0),"vertical"===this.orientation&&(s=1-s),n=this._valueMax()-this._valueMin(),a=this._valueMin()+s*n,this._trimAlignValue(a)},_uiHash:function(e,t,i){var s={handle:this.handles[e],handleIndex:e,value:void 0!==t?t:this.value()};return this._hasMultipleValues()&&(s.value=void 0!==t?t:this.values(e),s.values=i||this.values()),s},_hasMultipleValues:function(){return this.options.values&&this.options.values.length},_start:function(e,t){return this._trigger("start",e,this._uiHash(t))},_slide:function(e,t,i){var s,n,a=this.value(),o=this.values();this._hasMultipleValues()&&(n=this.values(t?0:1),a=this.values(t),2===this.options.values.length&&this.options.range===!0&&(i=0===t?Math.min(n,i):Math.max(n,i)),o[t]=i),i!==a&&(s=this._trigger("slide",e,this._uiHash(t,i,o)),s!==!1&&(this._hasMultipleValues()?this.values(t,i):this.value(i)))},_stop:function(e,t){this._trigger("stop",e,this._uiHash(t))},_change:function(e,t){this._keySliding||this._mouseSliding||(this._lastChangedValue=t,this._trigger("change",e,this._uiHash(t)))},value:function(e){return arguments.length?(this.options.value=this._trimAlignValue(e),this._refreshValue(),void this._change(null,0)):this._value()},values:function(t,i){var s,n,a;if(arguments.length>1)return this.options.values[t]=this._trimAlignValue(i),this._refreshValue(),void this._change(null,t);if(!arguments.length)return this._values();if(!e.isArray(arguments[0]))return this._hasMultipleValues()?this._values(t):this.value();for(s=this.options.values,n=arguments[0],a=0;a<s.length;a+=1)s[a]=this._trimAlignValue(n[a]),this._change(null,a);this._refreshValue()},_setOption:function(t,i){var s,n=0;switch("range"===t&&this.options.range===!0&&("min"===i?(this.options.value=this._values(0),this.options.values=null):"max"===i&&(this.options.value=this._values(this.options.values.length-1),this.options.values=null)),e.isArray(this.options.values)&&(n=this.options.values.length),this._super(t,i),t){case"orientation":this._detectOrientation(),this._removeClass("ui-slider-horizontal ui-slider-vertical")._addClass("ui-slider-"+this.orientation),this._refreshValue(),this.options.range&&this._refreshRange(i),this.handles.css("horizontal"===i?"bottom":"left","");break;case"value":this._animateOff=!0,this._refreshValue(),this._change(null,0),this._animateOff=!1;break;case"values":for(this._animateOff=!0,this._refreshValue(),s=n-1;s>=0;s--)this._change(null,s);this._animateOff=!1;break;case"step":case"min":case"max":this._animateOff=!0,this._calculateNewMax(),this._refreshValue(),this._animateOff=!1;break;case"range":this._animateOff=!0,this._refresh(),this._animateOff=!1}},_setOptionDisabled:function(e){this._super(e),this._toggleClass(null,"ui-state-disabled",!!e)},_value:function(){var e=this.options.value;return e=this._trimAlignValue(e)},_values:function(e){var t,i,s;if(arguments.length)return t=this.options.values[e],t=this._trimAlignValue(t);if(this._hasMultipleValues()){for(i=this.options.values.slice(),s=0;s<i.length;s+=1)i[s]=this._trimAlignValue(i[s]);return i}return[]},_trimAlignValue:function(e){if(e<=this._valueMin())return this._valueMin();if(e>=this._valueMax())return this._valueMax();var t=this.options.step>0?this.options.step:1,i=(e-this._valueMin())%t,s=e-i;return 2*Math.abs(i)>=t&&(s+=i>0?t:-t),parseFloat(s.toFixed(5))},_calculateNewMax:function(){var e=this.options.max,t=this._valueMin(),i=this.options.step,s=Math.round((e-t)/i)*i;e=s+t,e>this.options.max&&(e-=i),this.max=parseFloat(e.toFixed(this._precision()))},_precision:function(){var e=this._precisionOf(this.options.step);return null!==this.options.min&&(e=Math.max(e,this._precisionOf(this.options.min))),e},_precisionOf:function(e){var t=e.toString(),i=t.indexOf(".");return i===-1?0:t.length-i-1},_valueMin:function(){return this.options.min},_valueMax:function(){return this.max},_refreshRange:function(e){"vertical"===e&&this.range.css({width:"",left:""}),"horizontal"===e&&this.range.css({height:"",bottom:""})},_refreshValue:function(){var t,i,s,n,a,o=this.options.range,l=this.options,u=this,h=!this._animateOff&&l.animate,r={};this._hasMultipleValues()?this.handles.each(function(s){i=(u.values(s)-u._valueMin())/(u._valueMax()-u._valueMin())*100,r["horizontal"===u.orientation?"left":"bottom"]=i+"%",e(this).stop(1,1)[h?"animate":"css"](r,l.animate),u.options.range===!0&&("horizontal"===u.orientation?(0===s&&u.range.stop(1,1)[h?"animate":"css"]({left:i+"%"},l.animate),1===s&&u.range[h?"animate":"css"]({width:i-t+"%"},{queue:!1,duration:l.animate})):(0===s&&u.range.stop(1,1)[h?"animate":"css"]({bottom:i+"%"},l.animate),1===s&&u.range[h?"animate":"css"]({height:i-t+"%"},{queue:!1,duration:l.animate}))),t=i}):(s=this.value(),n=this._valueMin(),a=this._valueMax(),i=a!==n?(s-n)/(a-n)*100:0,r["horizontal"===this.orientation?"left":"bottom"]=i+"%",this.handle.stop(1,1)[h?"animate":"css"](r,l.animate),"min"===o&&"horizontal"===this.orientation&&this.range.stop(1,1)[h?"animate":"css"]({width:i+"%"},l.animate),"max"===o&&"horizontal"===this.orientation&&this.range.stop(1,1)[h?"animate":"css"]({width:100-i+"%"},l.animate),"min"===o&&"vertical"===this.orientation&&this.range.stop(1,1)[h?"animate":"css"]({height:i+"%"},l.animate),"max"===o&&"vertical"===this.orientation&&this.range.stop(1,1)[h?"animate":"css"]({height:100-i+"%"},l.animate))},_handleEvents:{keydown:function(t){var i,s,n,a,o=e(t.target).data("ui-slider-handle-index");switch(t.keyCode){case e.ui.keyCode.HOME:case e.ui.keyCode.END:case e.ui.keyCode.PAGE_UP:case e.ui.keyCode.PAGE_DOWN:case e.ui.keyCode.UP:case e.ui.keyCode.RIGHT:case e.ui.keyCode.DOWN:case e.ui.keyCode.LEFT:if(t.preventDefault(),!this._keySliding&&(this._keySliding=!0,this._addClass(e(t.target),null,"ui-state-active"),i=this._start(t,o),i===!1))return}switch(a=this.options.step,s=n=this._hasMultipleValues()?this.values(o):this.value(),t.keyCode){case e.ui.keyCode.HOME:n=this._valueMin();break;case e.ui.keyCode.END:n=this._valueMax();break;case e.ui.keyCode.PAGE_UP:n=this._trimAlignValue(s+(this._valueMax()-this._valueMin())/this.numPages);break;case e.ui.keyCode.PAGE_DOWN:n=this._trimAlignValue(s-(this._valueMax()-this._valueMin())/this.numPages);break;case e.ui.keyCode.UP:case e.ui.keyCode.RIGHT:if(s===this._valueMax())return;n=this._trimAlignValue(s+a);break;case e.ui.keyCode.DOWN:case e.ui.keyCode.LEFT:if(s===this._valueMin())return;n=this._trimAlignValue(s-a)}this._slide(t,o,n)},keyup:function(t){var i=e(t.target).data("ui-slider-handle-index");this._keySliding&&(this._keySliding=!1,this._stop(t,i),this._change(t,i),this._removeClass(e(t.target),null,"ui-state-active"))}}})}),jQuery("#slider").slider({min:0,max:1e5,values:[7e3,5e4],range:!0,stop:function(e,t){jQuery("input#minCost").val(jQuery("#slider").slider("values",0)),jQuery("input#maxCost").val(jQuery("#slider").slider("values",1))},slide:function(e,t){jQuery("input#minCost").val(jQuery("#slider").slider("values",0)),jQuery("input#maxCost").val(jQuery("#slider").slider("values",1))}}),function(e){var t="undefined"!=typeof e("<input/>")[0].multiple,i=/msie/i.test(navigator.userAgent);e.fn.customFile=function(){return this.each(function(){var s=e(this).addClass("custom-file-upload-hidden"),n=e('<div class="file-upload-wrapper">'),a=e('<input type="text" class="file-upload-input custom_input full greyplace_holder" placeholder="Вы пока не выбрали файл"/>'),o=e('<button type="button" class="file-upload-button btn btn_wb">Выбрать</button>'),l=e('<label class="file-upload-button btn_wb" for="'+s[0].id+'">Выбрать</label>');s.css({position:"absolute",left:"-9999px"}),n.insertAfter(s).append(s,a,i?l:o),s.attr("tabIndex",-1),o.attr("tabIndex",-1),o.click(function(){s.focus().click()}),s.change(function(){var e,i,n=[];if(t){e=s[0].files;for(var o=0,l=e.length;o<l;o++)n.push(e[o].name);i=n.join(", ")}else i=s.val().split("\\").pop();a.val(i).attr("title",i).focus()}),a.on({blur:function(){s.trigger("blur")},keydown:function(e){if(13===e.which)i||s.trigger("click");else{if(8!==e.which&&46!==e.which)return 9===e.which&&void 0;s.replaceWith(s=s.clone(!0)),s.trigger("change"),a.val("")}}})})},t||e(document).on("change","input.customfile",function(){var t=e(this),i="customfile_"+(new Date).getTime(),s=t.parent(),n=s.siblings().find(".file-upload-input").filter(function(){return!this.value}),a=e('<input type="file" id="'+i+'" name="'+t.attr("name")+'"/>');setTimeout(function(){t.val()?n.length||(s.after(a),a.customFile()):(n.parent().remove(),s.appendTo(s.parent()),s.find("input").focus())},1)})}(jQuery),$("input[type=file]").customFile();