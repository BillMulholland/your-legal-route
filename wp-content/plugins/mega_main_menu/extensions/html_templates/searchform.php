
<?php
/**
 * @package mm
 * @subpackage mm
 * @since mm 1.0
 */
//	echo '
//	
//	<form  class="form-inline col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top:10px" action="' . esc_url( home_url( '/' ) ) . '">
// 
//  <div class="form-group">
//  
//    <input  class="form-control field" name="s" id="s"  placeholder="search site" style="width:150px"> 
//	<button type="submit" class="btn btn-warning btn-s" name="submit" id="searchsubmit" value="' . esc_attr__( 'Search', 'searchform_textdomain' ) . '" />GO</button>
//  </div>
// 
//</form>'
?>
<?php
	echo '
<form name="searchform" method="get" style = "border-radius: 10px!important;
-moz-border-radius: 10px!important;
-webkit-border-radius: 10px!important;
border: 0px solid #000000;" id="mega_main_menu_searchform" action="' . esc_url( home_url( '/' ) ) . '">

	<input type="submit" class="submit" name="submit" id="searchsubmit" value="' . esc_attr__( 'Search', 'searchform_textdomain' ) . '">	
	
<i class="im-icon-search-3 icosearch" id="sublmiticon" onClick="submitDetailsForm()" ></i>
	
	<input type="text"  name="s" id="s" placeholder="search site" style="border:none; padding:5px; font-weight:normal ; " />
</form>'

?>




