 /*
 * lightbox
 * Copyright 2012 Kamal Khan
 * www.bhittani.com
 *
 * Version 1.0   -   First release
 *
 * This plug-in is dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 */
var bhittani_lightbox_js = {
	
	_popup : '',
	_popup_bg : '',
	_popup_exit : '',
	_popup_busy : '',
	_popup_lightbox : '',
	_popup_color : '',
	_popup_opacity : '',
	_popup_active : false,
	
	_init : function(id, color, opacity)
	{
		//id = '.'+id;
		bhittani_lightbox_js._popup = id+' div.kkpopup';
		bhittani_lightbox_js._popup_bg = id+' div.kkpopup-bg';
		bhittani_lightbox_js._popup_exit = id+' div.kkpopup-exit';
		bhittani_lightbox_js._popup_busy = id+' span.kkpopup__processing';
		bhittani_lightbox_js._popup_lightbox = 'div.kkpopup-lightbox'+id;
		bhittani_lightbox_js._popup_color = color ? color : '#000000';
		bhittani_lightbox_js._popup_opacity = opacity ? opacity : '0.7';
		bhittani_lightbox_js._events();
	},
	
	_events : function()
	{
	    jQuery(window).resize( function(){
			//bhittani_lightbox_js.lightbox_off();
			bhittani_lightbox_js.lightbox_center();
		});
		jQuery(window).scroll( function(){
			bhittani_lightbox_js.lightbox_center();
		});	
	},
	
	lightbox_off : function()
	{
		jQuery(bhittani_lightbox_js._popup_lightbox).css({
			'width' : '0px',
			'height' : '0px'
		});
	},
	
	lightbox_reset : function()
	{
		jQuery(bhittani_lightbox_js._popup_lightbox).css({
			'width' : jQuery(document).width(),
			'height' : jQuery(document).height(),
			'opacity' : bhittani_lightbox_js._popup_opacity,
			'background-color': bhittani_lightbox_js._popup_color,
		});
		if(bhittani_lightbox_js._popup_active) { jQuery(bhittani_lightbox_js._popup_lightbox).fadeIn('slow') }
	},
	
	lightbox_center : function()
	{
		bhittani_lightbox_js.lightbox_off();
		bhittani_lightbox_js.lightbox_reset();
		var width = jQuery(window).width();
		var height = jQuery(window).height();
		var popup = jQuery(bhittani_lightbox_js._popup);
		var epp_width = popup.width();
		var epp_height = popup.height();
		popup.stop(true,true).animate({
			'left' : ((width)/2) - (epp_width/2) + jQuery(document).scrollLeft(),
			'top' : ((height)/2) - (epp_height/2) + jQuery(document).scrollTop()
		}, 'fast', 'linear', function() {
		    jQuery(bhittani_lightbox_js._popup_exit).stop(true,true).animate({
				'left' : parseInt(popup.css('left'))+epp_width+25,
				'top' : parseInt(popup.css('top'))-25
			}, 'fast', 'linear');
			jQuery(bhittani_lightbox_js._popup_bg).stop(true,true).animate({
				'left' : ((width)/2) - (epp_width/2) + jQuery(document).scrollLeft() - 10,
				'top' : ((height)/2) - (epp_height/2) + jQuery(document).scrollTop() - 10
			}, 'fast', 'linear');	
		});
		if(bhittani_lightbox_js._popup_active) { popup.fadeIn('fast', function(){ jQuery(bhittani_lightbox_js._popup_bg).fadeIn('slow'); }); }
	},
	
	lightbox_close : function()
	{
		bhittani_lightbox_js._popup_active = false;
		jQuery(bhittani_lightbox_js._popup_lightbox).fadeOut('slow');
		jQuery(bhittani_lightbox_js._popup).fadeOut('fast',function(){ jQuery(bhittani_lightbox_js._popup_bg).fadeOut(200, function(){ jQuery(bhittani_lightbox_js._popup_exit).fadeOut(200); }); });
	},
	
	lightbox : function(html,arg,callback)
	{
		bhittani_lightbox_js._popup_active = true;
			
		var popup = jQuery(bhittani_lightbox_js._popup);
		
		popup.css({'width':'auto','height':'auto'});
		
		popup.html((arg=='busy'?jQuery(bhittani_lightbox_js._popup_busy).html():'')+html+(arg=='confirm'?bhittani_lightbox_js.lightbox_confirm(callback):''));

		var popup_width = popup.width() + 2;//(arg=='busy' ? jQuery(bhittani_lightbox_js._popup_busy).width() : 0);
		var popup_height = popup.height();
		popup.css({'width':popup_width+'px','height':popup_height+'px'});

		jQuery(bhittani_lightbox_js._popup_bg).css({'opacity':0.5,'width':(popup_width+20)+'px','height':(popup_height+20)+'px'});
        
		bhittani_lightbox_js.lightbox_center();

        if(arg!='unclose' && arg!='busy') 
		{
			jQuery(bhittani_lightbox_js._popup_exit).fadeIn('slow');
			
			jQuery(bhittani_lightbox_js._popup_exit+' a').bind('click', function(){
				jQuery(bhittani_lightbox_js._popup_exit+' a').unbind('click');
				bhittani_lightbox_js.lightbox_close();
				return false;
			});
			
			jQuery(bhittani_lightbox_js._popup_lightbox).bind('click', function(){
				jQuery(bhittani_lightbox_js._popup_lightbox).unbind('click');
				bhittani_lightbox_js.lightbox_close();
			});	
		}
		else if(arg)
		    jQuery(bhittani_lightbox_js._popup_exit).fadeOut('slow');
	},
	
	lightbox_confirm : function(callback)
	{
		return '<p><a href="#" title="Yes, I am sure" onclick="'+callback+'();return false;">Yes</a> | <a href="#" title="No, just bluffing" onclick="bhittani_lightbox_js.lightbox_close();return false;">No</a></p>';
	}
	
}

jQuery(document).ready( function($){
	bhittani_lightbox_js._init('.bhittani-lightbox', 'black', '0.6');
});

