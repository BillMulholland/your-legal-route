<?php

class Widget_gravity_forms_themes extends WP_Widget {

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, instantiates the widget,
	 * loads localization files, and includes necessary stylesheets and JavaScript.
	 */
	public function __construct() {

		// load plugin text domain
		//add_action( 'init', array( $this, 'widget_textdomain' ) );

		parent::__construct(
			'gravity_forms_themes-id',
			__( 'Gravity Forms Themes', 'gravity-forms-themes' ),
			array(
				'description'	=>	__( 'Easily apply beautiful themes to your gravity forms..', 'gravity-forms-themes' )
			)
		);

		// Register admin styles and scripts
		add_action( 'admin_print_styles-widgets.php', array( $this, 'register_admin_styles_scripts' ) );

		// register front
		add_action( 'wp_enqueue_scripts', array( $this, 'register_widget_styles' ) );

	} // end constructor

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param	array	args		The array of form elements
	 * @param	array	instance	The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if( empty($instance) ){
			return;
		}

		if(isset($instance['__cur_tab__'])){
			unset($instance['__cur_tab__']);
		}
		extract( $args, EXTR_SKIP );

		echo $before_widget;

		if( !empty( $instance['id'] ) ){
		echo $before_title.get_the_title($instance['id']).$after_title;
	}

		//dump($instance);
		// TODO: Here is where you manipulate your widget's values based on their input fields
		$element = Gravity_Forms_Themes::get_instance();
		echo $element->render_element($instance, '', 'gravity_forms_themes');		

		echo $after_widget;


	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param	array	new_instance	The new instance of values to be generated via the update.
	 * @param	array	old_instance	The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		return $new_instance;


	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param	array	instance	The array of keys and values for the widget.
	 */
	public function form( $instance ) {

    	// TODO:	Define default values for your variables
		$instance = wp_parse_args(
			(array) $instance
		);
		
		//neeeto!
		$posts = get_posts(array('post_type' => 'gravity_forms_themes','posts_per_page' => -1));
		echo "<p><select class=\"widefat\" name=\"".self::get_field_name('id')."\" id=\"".self::get_field_id('id')."\">\r\n";
		if(empty($posts)){
			echo '<option value="">'.__('No items available','gravity-forms-themes').'</option>';
		}else{
			echo '<option value=""></option>';
			foreach($posts as $post){
				$sel = "";
				if(!empty($instance['id'])){
					if( $instance['id'] == $post->ID ){
						$sel = 'selected="slected"';
					}
				}
				echo '<option value="'.$post->ID.'" '.$sel.'> '.$post->post_title.'</option>'."\r\n";
			}
		}
		echo "<select></p>\r\n";
	} // end form

	/**
	 * Generates a group of fields for the widget.
	 *
	 */
	// build instance
	public function group($group, $instance){
		$depth = 1;


		foreach($group['fields'] as $field=>$settings){			
			if(!empty($instance[$field]) && !empty($group['multiple'])){
				if(count($instance[$field]) > $depth){
					$depth = count($instance[$field]);
				}
			}
		}

		for( $i=0; $i<$depth;$i++ ){
				if($i > 0){
					echo '  <div class="button button-primary right gravity-forms-themes-removeRow" style="margin:5px 5px 0;">'.__('Remove', 'gravity-forms-themes').'</div>';
				}			
			echo "<div class=\"form-table rowGroup groupitems\" id=\"groupitems\" ref=\"items\">\r\n";
				foreach($group['fields'] as $field=>$settings){
					//dump($settings);
					$id = self::get_field_id('field_'.$field).'_'.$i;
					$groupid = $group['id'];
					$name = self::get_field_name($field);
					$single = true;
					$value = $settings['default'];
					if(!empty($group['multiple'])){
						$name = self::get_field_name($field).'['.$i.']';
						if(isset($instance[$field][$i])){
							$value = $instance[$field][$i];
						}
					}else{
						if(isset($instance[$field])){
							$value = $instance[$field];
						}
					}
					$label = (!empty($settings['caption']) ? $settings['caption'] : $settings['label']);
					//$caption = $settings['caption'];
									
					echo '<div class="gravity-forms-themes-field-row"><label class="gravity-forms-themes_widget_label" for="'.$id.'">'.$label.'</label>';
					include self::get_path( dirname( __FILE__ ) ) . 'includes/field-'.$settings['type'].'.php';
					echo '</div>';
				}
			echo "</div>\r\n";
		}
		if(!empty($group['multiple'])){
			echo "<div><button class=\"button gravity-forms-themes-add-group-row\" type=\"button\" data-field=\"".self::get_field_id('ref')."\" data-rowtemplate=\"group-".$group['id']."-tmpl\">".__('Add Another','gravity-forms-themes')."</button></div>\r\n";
		}
		
		// Place html template for repeated fields.
		if(!empty($group['multiple'])){
			echo "<script type=\"text/html\" id=\"group-".$group['id']."-tmpl\">\r\n";
			echo '  <div class="button button-primary right gravity-forms-themes-removeRow" style="margin:5px 5px 0;">'.__('Remove','gravity-forms-themes').'</div>';
			echo "	<div class=\"form-table rowGroup groupitems\" id=\"groupitems\" ref=\"items\">\r\n";
				foreach($group['fields'] as $field=>$settings){
					//dump($settings);
					$id = self::get_field_id('field_{{id}}_'.$field);
					$groupid = $group['id'];
					$name = self::get_field_name($field);
					$single = true;
					if(!empty($group['multiple'])){
						$name = self::get_field_name($field).'[__count__]';
					}
					$label = $settings['label'];
					$caption = $settings['caption'];
					$value = $settings['default'];
					echo '<div class="gravity-forms-themes-field-row"><label class="gravity-forms-themes_widget_label" for="'.$id.'">'.$label.'</label>';
					include self::get_path( dirname( __FILE__ ) ) . 'includes/field-'.$settings['type'].'.php';
					echo '</div>';
				}
			echo "	</div>\r\n";
			echo "</script>";
		}
	}

	/*--------------------------------------------------*/
	/* Public Functions
	/*--------------------------------------------------*/

	/**
	 * Loads the Widget's text domain for localization and translation.
	 */
	public function widget_textdomain() {

		load_plugin_textdomain( 'gravity-forms-themes', false, self::get_path( dirname( __FILE__ ) ) . '/lang/' );

	} // end widget_textdomain

	/**
	 * Registers and enqueues admin-specific styles.
	 */
	public function register_admin_styles_scripts() {

		// Always good to have.
		wp_enqueue_media();
		wp_enqueue_script('media-upload');

		//$configfiles = glob( self::get_path( dirname( __FILE__ ) ) .'configs/gravity_forms_themes-*.php' );
		if(file_exists(self::get_path( dirname( __FILE__ ) ) .'configs/fieldgroups-gravity_forms_themes.php')){
			include self::get_path( dirname( __FILE__ ) ) .'configs/fieldgroups-gravity_forms_themes.php';		
		}else{
			return;
		}
		foreach ($configfiles as $key=>$fieldfile) {
			include $fieldfile;
			if(!empty($group['scripts'])){
				foreach($group['scripts'] as $script){
					wp_enqueue_script( 'gravity-forms-themes-'.strtok($script, '.'), self::get_url( 'assets/js/'.$script , dirname(__FILE__) ) , array('jquery') );					
				}
			}
			if(!empty($group['styles'])){
				foreach($group['styles'] as $style){
					wp_enqueue_style( 'gravity-forms-themes-'.strtok($style, '.'), self::get_url( 'assets/css/'.$style , dirname(__FILE__) ) );
				}
			}
		}

		wp_enqueue_style( 'gravity-forms-themes-panel-styles', self::get_url( 'assets/css/panel.css', dirname(__FILE__) ) );
		wp_enqueue_script( 'gravity-forms-themes-panel-script', self::get_url( 'assets/js/panel.js', dirname(__FILE__) ), array( 'jquery' ) );


	} // end register_admin_styles
	
	/**
	* Registers and enqueues widget-specific styles.
	*/
	public function register_widget_styles() {
		if ( is_active_widget( false, false, $this->id_base, true ) ) {
			$widget_settings = get_option('widget_'.$this->id_base);
			$sidebars = get_option('sidebars_widgets');
			foreach ($sidebars as $sidebarid => $sidebar) {
				if(is_active_sidebar($sidebarid) && $sidebarid != 'wp_inactive_widgets' && false === strpos($sidebarid, 'orphaned_widgets')){

					foreach($sidebar as $instance){
						if( false !== strpos( $instance, $this->id_base ) ){
							$instance_id = (int) str_replace($this->id_base.'-', '', $instance);
							if(!empty($widget_settings[$instance_id])){
								$settings = $widget_settings[$instance_id];
								if(empty($element)){
									$element = Gravity_Forms_Themes::get_instance();
								}
								echo $element->render_element($settings, '', 'gravity_forms_themes', true);

							}
						}
					}
				}
			}

		}

	} // end register_widget_styles

	

	/***
	 * Get the current URL
	 *
	 */
	static function get_url($src = null, $path = null) {
		if(!empty($path)){
			return plugins_url( $src, $path);
		}
		return trailingslashit( plugins_url( $path , __FILE__ ) );
	}

	/***
	 * Get the current URL
	 *
	 */
	static function get_path($src = null) {
		return plugin_dir_path( $src );

	}
	
} // end class

add_action( 'widgets_init', create_function( '', 'register_widget("Widget_gravity_forms_themes");' ) );
