!function(t){function e(t,e){if(r[t]){var s=i(this);return r[t].apply(s,e)}throw new Error("method '"+t+"()' does not exist for slider.")}function i(e){var i=t(e).data("slider");if(i&&i instanceof h)return i;throw new Error(a.callingContextNotSliderInstance)}function s(e){var i=t(this),s=i.data("slider"),a="object"==typeof e&&e;return s||i.data("slider",s=new h(this,t.extend({},t.fn.slider.defaults,a))),i}var a={formatInvalidInputErrorMsg:function(t){return"Invalid input value '"+t+"' passed in"},callingContextNotSliderInstance:"Calling context element does not have instance of Slider bound to it. Check your code to make sure the JQuery object returned from the call to the slider() initializer is calling the method"},h=function(e,i){var s=this.element=t(e).show(),a=s.outerWidth(),h=!0,r=this.element.parent();r.hasClass("slider")===!0?(h=!0,this.picker=r):this.picker=t('<div class="slider"><div class="arf-slider-track"><div class="slider-selection"></div><div class="arf-slider-handle"></div><div class="arf-slider-handle"></div></div><div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner" style="font-weight:bold"></div></div></div>').insertBefore(this.element).append(this.element),this.id=this.element.data("slider-id")||i.id,this.id&&(this.picker[0].id=this.id),"undefined"!=typeof Modernizr&&Modernizr.touch&&(navigator.userAgent.match(/iPhone/i)||navigator.userAgent.match(/iPod/i)||navigator.userAgent.match(/Android/i)||navigator.userAgent.match(/iPad/i))&&(this.touchCapable=!0);var o=this.element.data("slider-tooltip")||i.tooltip;switch(this.tooltip=this.picker.find(".tooltip"),this.tooltipInner=this.tooltip.find("div.tooltip-inner"),this.orientation=this.element.data("slider-orientation")||i.orientation,this.orientation){case"vertical":this.picker.addClass("slider-vertical"),this.stylePos="top",this.mousePos="pageY",this.sizePos="offsetHeight",this.tooltip.addClass("right")[0].style.left="100%";break;default:this.picker.addClass("slider-horizontal").css("width",a),this.orientation="horizontal",this.stylePos="left",this.mousePos="pageX",this.sizePos="offsetWidth",this.tooltip.addClass("top")[0].style.top=-this.tooltip.outerHeight()-14+"px"}var n=["min","max","step","value"];for(key1 in n)attr=n[key1],"undefined"!=typeof s.data("slider-"+attr)?this[attr]=s.data("slider-"+attr):"undefined"!=typeof i[attr]?this[attr]=i[attr]:"undefined"!=typeof s.prop(attr)?this[attr]=s.prop(attr):this[attr]=0;this.value instanceof Array&&(this.range=!0),this.selection=this.element.data("slider-selection")||i.selection,this.selectionEl=this.picker.find(".slider-selection"),"none"===this.selection&&this.selectionEl.addClass("hide"),this.selectionElStyle=this.selectionEl[0].style,this.handle1=this.picker.find(".arf-slider-handle:first"),this.handle1Stype=this.handle1[0].style,this.handle2=this.picker.find(".arf-slider-handle:last"),this.handle2Stype=this.handle2[0].style;var l=this.element.data("arf-slider-handle")||i.handle;switch(l){case"round":this.handle1.addClass("round"),this.handle2.addClass("round");break;case"triangle":this.handle1.addClass("triangle"),this.handle2.addClass("triangle")}if(this.range?(this.value[0]=Math.max(this.min,Math.min(this.max,this.value[0])),this.value[1]=Math.max(this.min,Math.min(this.max,this.value[1]))):(this.value=[Math.max(this.min,Math.min(this.max,this.value))],this.handle2.addClass("hide"),"after"===this.selection?this.value[1]=this.max:this.value[1]=this.min),this.diff=this.max-this.min,this.percentage=[100*(this.value[0]-this.min)/this.diff,100*(this.value[1]-this.min)/this.diff,100*this.step/this.diff],this.offset=this.picker.offset(),this.size=this.picker[0][this.sizePos],this.formater=i.formater,this.reversed=this.element.data("slider-reversed")||i.reversed,this.layout(),this.picker.on(this.touchCapable?{touchstart:t.proxy(this.mousedown,this)}:{mousedown:t.proxy(this.mousedown,this)}),"hide"===o?this.tooltip.addClass("hide"):"always"===o?(this.showTooltip(),this.alwaysShowTooltip=!0):this.picker.on({mouseenter:t.proxy(this.showTooltip,this),mouseleave:t.proxy(this.hideTooltip,this)}),1==h){var d=this.getValue(),u=this.calculateValue();this.element.trigger({type:"slide",value:u}).data("value",u).prop("value",u),d!==u&&this.element.trigger({type:"slideChange","new":u,old:d}).data("value",u).prop("value",u)}this.enabled=i.enabled&&(void 0===this.element.data("slider-enabled")||this.element.data("slider-enabled")===!0),this.enabled||this.disable()};h.prototype={constructor:h,over:!1,inDrag:!1,showTooltip:function(){this.tooltip.addClass("in"),this.over=!0},hideTooltip:function(){this.inDrag===!1&&this.alwaysShowTooltip!==!0&&this.tooltip.removeClass("in"),this.over=!1},layout:function(){var t;t=this.reversed?[100-this.percentage[0],this.percentage[1]]:[this.percentage[0],this.percentage[1]],t[0]=t[0]?t[0]:0,t[1]=t[1]?t[1]:0,this.handle1Stype[this.stylePos]=t[0]+"%",this.handle2Stype[this.stylePos]=t[1]+"%","vertical"===this.orientation?(this.selectionElStyle.top=Math.min(t[0],t[1])+"%",this.selectionElStyle.height=Math.abs(t[0]-t[1])+"%"):(this.selectionElStyle.left=Math.min(t[0],t[1])+"%",this.selectionElStyle.width=Math.abs(t[0]-t[1])+"%"),this.range?(this.tooltipInner.text(this.formater(this.value[0])+" : "+this.formater(this.value[1])),this.tooltip[0].style[this.stylePos]=this.size*(t[0]+(t[1]-t[0])/2)/100-("vertical"===this.orientation?this.tooltip.outerHeight()/2:this.tooltip.outerWidth()/2)+"px"):(this.tooltipInner.text(this.formater(this.value[0])),this.tooltip[0].style[this.stylePos]=this.size*t[0]/100-("vertical"===this.orientation?this.tooltip.outerHeight()/2:this.tooltip.outerWidth()/2)+"px")},mousedown:function(e){if(!this.isEnabled())return!1;this.touchCapable&&"touchstart"===e.type&&(e=e.originalEvent),this.offset=this.picker.offset(),this.size=this.picker[0][this.sizePos];var i=this.getPercentage(e);if(this.range){var s=Math.abs(this.percentage[0]-i),a=Math.abs(this.percentage[1]-i);this.dragged=a>s?0:1}else this.dragged=0;this.percentage[this.dragged]=this.reversed?100-i:i,this.layout(),navigator.userAgent.match(/iPhone/i)||navigator.userAgent.match(/iPod/i)||navigator.userAgent.match(/Android/i)||navigator.userAgent.match(/iPad/i)?this.touchCapable=!0:this.touchCapable=!1,t(document).on(this.touchCapable?{touchmove:t.proxy(this.mousemove,this),touchend:t.proxy(this.mouseup,this)}:{mousemove:t.proxy(this.mousemove,this),mouseup:t.proxy(this.mouseup,this)}),this.inDrag=!0;var h=this.calculateValue();return this.setValue(h),this.element.trigger({type:"slideStart",value:h}).trigger({type:"slide",value:h}),!1},mousemove:function(t){if(!this.isEnabled())return!1;this.touchCapable&&"touchmove"===t.type&&(t=t.originalEvent);var e=this.getPercentage(t);this.range&&(0===this.dragged&&this.percentage[1]<e?(this.percentage[0]=this.percentage[1],this.dragged=1):1===this.dragged&&this.percentage[0]>e&&(this.percentage[1]=this.percentage[0],this.dragged=0)),this.percentage[this.dragged]=this.reversed?100-e:e,this.layout();var i=this.calculateValue();return this.setValue(i),this.element.trigger({type:"slide",value:i}).data("value",i).prop("value",i),!1},mouseup:function(){if(!this.isEnabled())return!1;t(document).off(this.touchCapable?{touchmove:this.mousemove,touchend:this.mouseup}:{mousemove:this.mousemove,mouseup:this.mouseup}),this.inDrag=!1,this.over===!1&&this.hideTooltip();var e=this.calculateValue();return this.layout(),this.element.data("value",e).prop("value",e).trigger({type:"slideStop",value:e}),!1},calculateValue:function(){var t;return this.range?(t=[Math.max(this.min,this.min+Math.round(this.diff*this.percentage[0]/100/this.step)*this.step),Math.min(this.max,this.min+Math.round(this.diff*this.percentage[1]/100/this.step)*this.step)],this.value=t):(t=this.min+Math.round(this.diff*this.percentage[0]/100/this.step)*this.step,t<this.min?t=this.min:t>this.max&&(t=this.max),t=parseFloat(t.toFixed(2)),this.value=[t,this.value[1]]),t},getPercentage:function(t){this.touchCapable&&(t=t.touches[0]);var e=100*(t[this.mousePos]-this.offset[this.stylePos])/this.size;return e=Math.round(e/this.percentage[2])*this.percentage[2],Math.max(0,Math.min(100,e))},getValue:function(){return this.range?this.value:this.value[0]},setValue:function(t){this.value=this.validateInputValue(t),this.range?(this.value[0]=Math.max(this.min,Math.min(this.max,this.value[0])),this.value[1]=Math.max(this.min,Math.min(this.max,this.value[1]))):(this.value=[Math.max(this.min,Math.min(this.max,this.value.toFixed(2)))],this.handle2.addClass("hide"),"after"===this.selection?this.value[1]=this.max:this.value[1]=this.min),this.diff=this.max-this.min,this.percentage=[100*(this.value[0]-this.min)/this.diff,100*(this.value[1]-this.min)/this.diff,100*this.step/this.diff],this.layout()},validateInputValue:function(t){if("number"==typeof t)return t;if(t instanceof Array)return t.forEach(function(t){if("number"!=typeof t)throw new Error(a.formatInvalidInputErrorMsg(t))}),t;throw new Error(a.formatInvalidInputErrorMsg(t))},destroy:function(){this.element.show().insertBefore(this.picker),this.picker.remove(),t(this.element).removeData("slider"),t(this.element).off()},disable:function(){this.enabled=!1,this.picker.addClass("slider-disabled"),this.element.trigger("slideDisabled")},enable:function(){this.enabled=!0,this.picker.removeClass("slider-disabled"),this.element.trigger("slideEnabled")},toggle:function(){this.enabled?this.disable():this.enable()},isEnabled:function(){return this.enabled}};var r={getValue:h.prototype.getValue,setValue:h.prototype.setValue,destroy:h.prototype.destroy,disable:h.prototype.disable,enable:h.prototype.enable,toggle:h.prototype.toggle,isEnabled:h.prototype.isEnabled};t.fn.slider=function(t){if("string"==typeof t){var i=Array.prototype.slice.call(arguments,1);return e.call(this,t,i)}return s.call(this,t)},t.fn.slider.defaults={min:0,max:10,step:1,orientation:"horizontal",value:5,selection:"before",tooltip:"show",handle:"round",reversed:!1,enabled:!0,formater:function(t){return t}},t.fn.slider.Constructor=h}(window.jQuery);