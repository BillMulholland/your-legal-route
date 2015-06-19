
jQuery(function($){
	var selection = false;
	var gravity_forms_themesShortcodePanel = $('#gravity-forms-themes-shortcode-panel-tmpl').html();

	$('body').append(gravity_forms_themesShortcodePanel);
	$('.media-modal-backdrop, .media-modal-close').on('click', function(){
		gravity_forms_themes_hideModal();
	})
	$(document).keyup(function(e) {
		if (e.keyCode == 27) {
			gravity_forms_themes_hideModal();
		}
	});

	// show modal
	$(document).on('click', '#gravity-forms-themes-shortcodeinsert', function(){
		if($(this).data('shortcode')){
			window.send_to_editor('['+$(this).data('shortcode')+']');
			return;
		}
				
		// autoload item
		var autoload = $('.gravity-forms-themes-autoload');
		if(autoload.length){
			gravity_forms_themes_loadtemplate(autoload.data('shortcode'));
		}
		$('#gravity-forms-themes-category-selector').on('change', function(){
			gravity_forms_themes_loadtemplate('');
			$('.gravity-forms-themes-elements-selector').hide();
			$('#gravity-forms-themes-elements-selector-'+this.value).show().val('');
		});

		$('.gravity-forms-themes-elements-selector').on('change', function(){
			gravity_forms_themes_loadtemplate(this.value);
		});

		if(typeof tinyMCE !== 'undefined'){
			if(tinyMCE.activeEditor !== null){
				selection = tinyMCE.activeEditor.selection.getContent();
			}else{
				selection = false;
			}
		}else{
			selection = false;
		}
		if(selection.length > 0){
			$('#gravity-forms-themes-content').html(selection);
		}
		$('#gravity-forms-themes-shortcode-panel').show();
	});
	$('#gravity-forms-themes-insert-shortcode').on('click', function(){
		gravity_forms_themes_sendCode();
	})
	// modal tabs
	$('#gravity-forms-themes-shortcode-config').on('click', '.gravity-forms-themes-shortcode-config-nav li a', function(){
		$('.gravity-forms-themes-shortcode-config-nav li').removeClass('current');
		$('.group').hide();
		$(''+$(this).attr('href')+'').show();
		$(this).parent().addClass('current');
		return false;
	});


});

function gravity_forms_themes_loadtemplate(shortcode){
	var target = jQuery('#gravity-forms-themes-shortcode-config');
	if(shortcode.length <= 0){
		target.html('');
	}
	target.html(jQuery('#gravity-forms-themes-'+shortcode+'-config-tmpl').html());
}

function gravity_forms_themes_sendCode(){

	var shortcode = jQuery('#gravity-forms-themes-shortcodekey').val(),
		output = '['+shortcode,
		ctype = '',
		fields = {};
	
	if(shortcode.length <= 0){return; }

	if(jQuery('#gravity-forms-themes-shortcodetype').val() === '2'){
		ctype = jQuery('#gravity-forms-themes-default-content').val()+'[/'+shortcode+']';
	}
	jQuery('#gravity-forms-themes-shortcode-config input,#gravity-forms-themes-shortcode-config select,#gravity-forms-themes-shortcode-config textarea').not('.configexclude').each(function(){
		if(this.value){
			// see if its a checkbox
			var thisinput = jQuery(this),
				attname = this.name;

			if(thisinput.prop('type') == 'checkbox'){
				if(!thisinput.prop('checked')){
					return;
				}
			}
			if(thisinput.prop('type') == 'radio'){
				if(!thisinput.prop('checked')){
					return;
				}
			}

			if(attname.indexOf('[') > -1){
				attname = attname.split('[')[0];
				var newloop = {};
				newloop[attname] = this.value;
				if(!fields[attname]){
					fields[attname] = [];
				}
				fields[attname].push(newloop);
			}else{
				var newfield = {};
				fields[attname] = this.value;
			}
		}
	});
	for( var field in fields){
		if(typeof fields[field] == 'object'){
			for(i=0;i<fields[field].length; i++){
				output += ' '+field+'_'+(i+1)+'="'+fields[field][i][field]+'"';
			}
		}else{
			output += ' '+field+'="'+fields[field]+'"';
		}
	}
	gravity_forms_themes_hideModal();
	window.send_to_editor(output+']'+ctype);

}
function gravity_forms_themes_hideModal(){
	jQuery('#gravity-forms-themes-shortcode-panel').hide();
	gravity_forms_themes_loadtemplate('');
	jQuery('#gravity-forms-themes-elements-selector').show();
	jQuery('.gravity-forms-themes-elements-selector').val('');	
	jQuery('#gravity-forms-themes-category-selector').val('');
}
