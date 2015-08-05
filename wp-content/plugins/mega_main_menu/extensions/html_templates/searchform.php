<?php
/**
 * @package mm
 * @subpackage mm
 * @since mm 1.0
 */
	echo '
	
	<form class="form-inline" style="width:250px;margin-top:10px" action="' . esc_url( home_url( '/' ) ) . '">
 
  <div class="form-group">
  
    <input  class="form-control field" name="s" id="s"  placeholder="search site" style="width:150px"> 
	<button type="submit" class="btn btn-warning btn-s" name="submit" id="searchsubmit" value="' . esc_attr__( 'Search', 'searchform_textdomain' ) . '" />GO</button>
  </div>
 
</form>'
?>
<?php
//<form method="get" id="mega_main_menu_searchform" action="' . esc_url( home_url( '/' ) ) . '">
//		<i class="im-icon-search-3 icosearch"></i>
//		<input type="submit" class="submit" name="submit" id="searchsubmit" value="' . esc_attr__( 'Search', 'searchform_textdomain' ) . '" />
//		<input type="text" class="field" name="s" id="s"  />
//	</form>

?>