
// Object bf_admin is available to use

(function($){

	var bf_admin_plugin_uur = {
		
		obj_landing : false,
		edit_landing_id : false,
		remove_landing_id : false,

		obj_offer : false,
		edit_offer_id : false,
		remove_offer_id : false,
		
		init : function()
		{
			jQuery(document).ready( function($){
				var nonce = bhittani_plugin_uur_js_admin.nonce;
				var func_landings = bhittani_plugin_uur_js_admin.func_landings;
				var func_offers = bhittani_plugin_uur_js_admin.func_offers;

				var image_chart = bhittani_plugin_uur_js_admin.image_chart;
				var img_remove = bhittani_plugin_uur_js_admin.image_remove;

				bf_admin_plugin_uur.obj_landing = bhittani_plugin_uur_js_admin.landing_url;
				bf_admin_plugin_uur.landing($('.bhittani-framework.uur'), func_landings, nonce, image_chart, img_remove);
				bf_admin_plugin_uur.event_stats_landing($('.bhittani-framework.uur'));
			    bf_admin_plugin_uur.event_edit_landing($('.bhittani-framework.uur'));
				bf_admin_plugin_uur.event_remove_landing($('.bhittani-framework.uur'));

				bf_admin_plugin_uur.obj_offer = bhittani_plugin_uur_js_admin.offer_url;
				bf_admin_plugin_uur.offer($('.bhittani-framework.uur'), func_offers, nonce, image_chart, img_remove);
				bf_admin_plugin_uur.event_stats_offer($('.bhittani-framework.uur'));
			    bf_admin_plugin_uur.event_edit_offer($('.bhittani-framework.uur'));
				bf_admin_plugin_uur.event_remove_offer($('.bhittani-framework.uur'));
			});
		},

		// LANDINGS
		
		landing : function(obj, func, nonce, image_chart, img_remove)
		{
			$('a[rel="uur-add-landing"]', obj).click( function(){
				var form = $('form[name="bf_form"]', obj);
				var values = form.serialize();

				var error_obj = $('.__bf_msg.bf-red', obj);
				error_obj.fadeOut('fast');
				
				var traffic = 0;
				$('.__landing_url.__traffic', obj).each(function(i){
					traffic += parseInt($(this).val());
				});
				if(traffic!=100)
				{
					error_obj.html('The traffic distribution should add up to 100').fadeIn('fast');
				}
				else
				{
					bf_admin.ajax_post($, values, func, nonce, 'Adding landing', function(response){
						if(response.success=='true')
						{
							var key = response.key;
							var lrow = $('.__table_landings tbody tr.row:last-child td:eq(0)', obj);
							var no = lrow.text() ? (parseInt(lrow.text())+1) : 1;
							var tr = '<tr>';
							tr += '	<td width="16">'+no+'</td>';
							tr += '	<td width="80">'+$('input[name="bp_uur_landings\[profile\]"]', obj).val()+'</td>';
							tr += '	<td><em>Refresh to view</em></td>';
							tr += '	<td width="18">'+$('input[name="bp_uur_landings\[rotations\]"]', obj).val()+'</td>';
							tr += '	<td width="18"><a href="#'+key+'" title="Edit" rel="uur-show-stats-landing"><img src="'+image_chart+'" alt="Stats" /></a></td>';
							tr += '	<td width="18"><a href="#'+key+'" title="Remove" rel="uur-show-remove-landing"><img src="'+img_remove+'" alt="Remove" /></a></td>';
							tr += '</tr>';
							$('.__table_landings tbody', obj).append(tr);
						}
						bf_admin_plugin_uur.close_landing_form(obj);
					});
				}
				return false;
			});
			
			$('a[rel="uur-edit-landing"]', obj).click( function(){
				var form = $('form[name="bf_form"]', obj);
				var values = form.serialize();
				bf_admin.ajax_post($, values+'&_edit='+bf_admin_plugin_uur.edit_landing_id, func, nonce, 'Updating landing', function(response){
					if(response.success=='true')
					{
						var wrap = $('.__table_landings tr.__edit', obj);
						$('td:eq(1)', wrap).html($('input[name="bp_uur_landings\[profile\]"]', obj).val());
						$('td:eq(3)', wrap).html($('input[name="bp_uur_landings\[rotations\]"]', obj).val());
					}
					bf_admin_plugin_uur.close_landing_form(obj);
					$('.__table_landings tr.__edit', obj).removeClass('__edit').hide();
				});
				return false;
			});

			$('input.__landing_rotations', obj).keyup( function(e){
				$('input.__landing_url', obj).parent().remove();
				var input = $(this);
				var parent = input.parent();
				var value = input.val();
				var intRegex = /^\d+$/;
				if(intRegex.test(value)) {
				   for(var i = 1; i <= value; i++)
				   {
				       $(bf_admin_plugin_uur.obj_landing).clone().appendTo($('.__landings_add', obj))
				       .find('h4 span').text(i)
				       .parent().parent().find('input[name="bp_uur_landings[rotation][url]"]').attr('name', 'bp_uur_landings[rotation]['+(i-1)+'][url]')
				       .parent().next().find('input[name="bp_uur_landings[rotation][traffic]"]').attr('name', 'bp_uur_landings[rotation]['+(i-1)+'][traffic]');
				   }
				}
			});
			
			$('a[rel="uur-remove-landing"]', obj).click( function(){
				bf_admin.ajax_post($, '_remove='+bf_admin_plugin_uur.remove_landing_id, func, nonce, 'Destroying landing', function(response){
					$('.__table_landings tr.__remove', obj).removeClass('__remove').hide();
					bf_admin_plugin_uur.remove_landing_id = false;
					$('.__landings_add_btns', obj).slideUp('fast', function(){
						$('.__landings_table', obj).slideDown('fast');
					});
				});
				return false;
			});
			
			$('a[rel="uur-cancel-landing"]', obj).click( function(){
				bf_admin_plugin_uur.close_landing_form(obj);
				return false;
			});
			
			$('a[rel="uur-show-add-landing"]', obj).click( function(){
				$('a[rel="uur-edit-landing"]', obj).hide();
				$('a[rel="uur-remove-landing"]', obj).hide();
				$('a[rel="uur-add-landing"]', obj).show();
				bf_admin_plugin_uur.show_landing_form(obj);
				return false;
			});
		},

		event_stats_landing : function(obj)
		{
			$('a[rel="uur-show-stats-landing"]', obj).unbind('click').click( function(){
				var current = $(this);
				var id = current.attr('href').split('#')[1];

				if($('#_landing_'+id, obj).hasClass('_hidden'))
				{
					$('#_landing_'+id, obj).slideDown('fast', function(){
						$(this).removeClass('_hidden');
					});
				}
				else
				{
					$('#_landing_'+id, obj).slideUp('fast', function(){
						$(this).addClass('_hidden');
					});
				}

				return false;
			});
		},
		
		event_edit_landing : function(obj)
		{
			$('a[rel="uur-show-edit-landing"]', obj).unbind('click').click( function(){
				var current = $(this);
				bf_admin_plugin_uur.edit_landing_id = current.attr('href').split('#')[1];
				var wrap = current.parent().parent();
				wrap.addClass('__edit');
				var profile = $('td:eq(1)', wrap).html();
				var rotations = $('td:eq(3)', wrap).html();
				
				$('a[rel="uur-add-landing"]', obj).hide();
				$('a[rel="uur-remove-landing"]', obj).hide();
				$('a[rel="uur-edit-landing"]', obj).show();
				
				$('input[name="bp_uur_landings\[profile\]"]', obj).val(profile);
				$('input[name="bp_uur_landings\[rotations\]"]', obj).val(rotations);
				
				bf_admin_plugin_uur.show_landing_form(obj);
				return false;
			});
		},
		
		event_remove_landing : function(obj)
		{
			$('a[rel="uur-show-remove-landing"]', obj).unbind('click').click( function(){
				$('a[rel="uur-add-landing"]', obj).hide();
				$('a[rel="uur-edit-landing"]', obj).hide();
				$('a[rel="uur-remove-landing"]', obj).show();
				
				var current = $(this);
				bf_admin_plugin_uur.remove_landing_id = current.attr('href').split('#')[1];
				var wrap = current.parent().parent();
				wrap.addClass('__remove');
				
				$('.__landings_table', obj).slideUp('fast', function(){
					$('.__landings_add_btns', obj).slideDown('fast');
				});
				return false;
			});
		},
		
		close_landing_form : function(obj)
		{
			bf_admin_plugin_uur.edit_landing_id = false;
			bf_admin_plugin_uur.remove_landing_id = false;
			$('.__landing_fields', obj).val('');
			$('.__table_landings tr', obj).removeClass('__edit').removeClass('__remove');
			$('.__landings_add_btns', obj).slideUp('fast');
			$('.__landings_add', obj).slideUp('fast', function(){
				$('.__landings_table', obj).slideDown('fast');
			});
		},
		
		show_landing_form : function(obj)
		{
			$('.__landings_table', obj).slideUp('fast', function(){
				$('.__landings_add', obj).slideDown('fast');
				$('.__landings_add_btns', obj).slideDown('fast');
			});
		},

	    // OFFERS
		
		offer : function(obj, func, nonce, image_chart, img_remove)
		{
			$('a[rel="uur-add-offer"]', obj).click( function(){
				var form = $('form[name="bf_form"]', obj);
				var values = form.serialize();

				var error_obj = $('.__bf_msg.bf-red', obj);
				error_obj.fadeOut('fast');
				
				var traffic = 0;
				$('.__offer_url.__traffic', obj).each(function(i){
					traffic += parseInt($(this).val());
				});
				if(traffic!=100)
				{
					error_obj.html('The traffic distribution should add up to 100').fadeIn('fast');
				}
				else
				{
					bf_admin.ajax_post($, values, func, nonce, 'Adding offer', function(response){
						if(response.success=='true')
						{
							var key = response.key;
							var lrow = $('.__table_offers tbody tr.row:last-child td:eq(0)', obj);
							var no = lrow.text() ? (parseInt(lrow.text())+1) : 1;
							var tr = '<tr>';
							tr += '	<td width="16">'+no+'</td>';
							tr += '	<td width="80">'+$('input[name="bp_uur_offers\[profile\]"]', obj).val()+'</td>';
							tr += '	<td><em>Refresh to view</em></td>';
							tr += '	<td width="18">'+$('input[name="bp_uur_offers\[rotations\]"]', obj).val()+'</td>';
							tr += '	<td width="18"><a href="#'+key+'" title="Edit" rel="uur-show-stats-offer"><img src="'+image_chart+'" alt="Stats" /></a></td>';
							tr += '	<td width="18"><a href="#'+key+'" title="Remove" rel="uur-show-remove-offer"><img src="'+img_remove+'" alt="Remove" /></a></td>';
							tr += '</tr>';
							$('.__table_offers tbody', obj).append(tr);
						}
						bf_admin_plugin_uur.close_offer_form(obj);
					});
				}
				return false;
			});
			
			$('a[rel="uur-edit-offer"]', obj).click( function(){
				var form = $('form[name="bf_form"]', obj);
				var values = form.serialize();
				bf_admin.ajax_post($, values+'&_edit='+bf_admin_plugin_uur.edit_offer_id, func, nonce, 'Updating offer', function(response){
					if(response.success=='true')
					{
						var wrap = $('.__table_offers tr.__edit', obj);
						$('td:eq(1)', wrap).html($('input[name="bp_uur_offers\[profile\]"]', obj).val());
						$('td:eq(3)', wrap).html($('input[name="bp_uur_offers\[rotations\]"]', obj).val());
					}
					bf_admin_plugin_uur.close_offer_form(obj);
					$('.__table_offers tr.__edit', obj).removeClass('__edit').hide();
				});
				return false;
			});

			$('input.__offer_rotations', obj).keyup( function(e){
				$('input.__offer_url', obj).parent().remove();
				var input = $(this);
				var parent = input.parent();
				var value = input.val();
				var intRegex = /^\d+$/;
				if(intRegex.test(value)) {
				   for(var i = 1; i <= value; i++)
				   {
				       $(bf_admin_plugin_uur.obj_offer).clone().appendTo($('.__offers_add', obj))
				       .find('h4 span').text(i)
				       .parent().parent().find('input[name="bp_uur_offers[rotation][url]"]').attr('name', 'bp_uur_offers[rotation]['+(i-1)+'][url]')
				       .parent().next().find('input[name="bp_uur_offers[rotation][traffic]"]').attr('name', 'bp_uur_offers[rotation]['+(i-1)+'][traffic]');
				   }
				}
			});
			
			$('a[rel="uur-remove-offer"]', obj).click( function(){
				bf_admin.ajax_post($, '_remove='+bf_admin_plugin_uur.remove_offer_id, func, nonce, 'Destroying offer', function(response){
					$('.__table_offers tr.__remove', obj).removeClass('__remove').hide();
					bf_admin_plugin_uur.remove_offer_id = false;
					$('.__offers_add_btns', obj).slideUp('fast', function(){
						$('.__offers_table', obj).slideDown('fast');
					});
				});
				return false;
			});
			
			$('a[rel="uur-cancel-offer"]', obj).click( function(){
				bf_admin_plugin_uur.close_offer_form(obj);
				return false;
			});
			
			$('a[rel="uur-show-add-offer"]', obj).click( function(){
				$('a[rel="uur-edit-offer"]', obj).hide();
				$('a[rel="uur-remove-offer"]', obj).hide();
				$('a[rel="uur-add-offer"]', obj).show();
				bf_admin_plugin_uur.show_offer_form(obj);
				return false;
			});
		},

		event_stats_offer : function(obj)
		{
			$('a[rel="uur-show-stats-offer"]', obj).unbind('click').click( function(){
				var current = $(this);
				var id = current.attr('href').split('#')[1];

				if($('#_offer_'+id, obj).hasClass('_hidden'))
				{
					$('#_offer_'+id, obj).slideDown('fast', function(){
						$(this).removeClass('_hidden');
					});
				}
				else
				{
					$('#_offer_'+id, obj).slideUp('fast', function(){
						$(this).addClass('_hidden');
					});
				}

				return false;
			});
		},
		
		event_edit_offer : function(obj)
		{
			$('a[rel="uur-show-edit-offer"]', obj).unbind('click').click( function(){
				var current = $(this);
				bf_admin_plugin_uur.edit_offer_id = current.attr('href').split('#')[1];
				var wrap = current.parent().parent();
				wrap.addClass('__edit');
				var profile = $('td:eq(1)', wrap).html();
				var rotations = $('td:eq(3)', wrap).html();
				
				$('a[rel="uur-add-offer"]', obj).hide();
				$('a[rel="uur-remove-offer"]', obj).hide();
				$('a[rel="uur-edit-offer"]', obj).show();
				
				$('input[name="bp_uur_offers\[profile\]"]', obj).val(profile);
				$('input[name="bp_uur_offers\[rotations\]"]', obj).val(rotations);
				
				bf_admin_plugin_uur.show_offer_form(obj);
				return false;
			});
		},
		
		event_remove_offer : function(obj)
		{
			$('a[rel="uur-show-remove-offer"]', obj).unbind('click').click( function(){
				$('a[rel="uur-add-offer"]', obj).hide();
				$('a[rel="uur-edit-offer"]', obj).hide();
				$('a[rel="uur-remove-offer"]', obj).show();
				
				var current = $(this);
				bf_admin_plugin_uur.remove_offer_id = current.attr('href').split('#')[1];
				var wrap = current.parent().parent();
				wrap.addClass('__remove');
				
				$('.__offers_table', obj).slideUp('fast', function(){
					$('.__offers_add_btns', obj).slideDown('fast');
				});
				return false;
			});
		},
		
		close_offer_form : function(obj)
		{
			bf_admin_plugin_uur.edit_offer_id = false;
			bf_admin_plugin_uur.remove_offer_id = false;
			$('.__offer_fields', obj).val('');
			$('.__table_offers tr', obj).removeClass('__edit').removeClass('__remove');
			$('.__offers_add_btns', obj).slideUp('fast');
			$('.__offers_add', obj).slideUp('fast', function(){
				$('.__offers_table', obj).slideDown('fast');
			});
		},
		
		show_offer_form : function(obj)
		{
			$('.__offers_table', obj).slideUp('fast', function(){
				$('.__offers_add', obj).slideDown('fast');
				$('.__offers_add_btns', obj).slideDown('fast');
			});
		}
	};


	
	bf_admin_plugin_uur.init();
   
})( jQuery );

