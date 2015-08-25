<?php
/*
 Template Name: Discuss Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>
<?php get_header(); ?>

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
        <div class=" img-rounded" style=" background-image:url(http://yourlegalroute.staging.wpengine.com/wp-content/uploads/2015/08/employ.jpg);height:460px; margin-bottom:50px">
          <div id="cta" class="col-xs-10 col-sm-10 col-md-6 col-lg-7 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 img-rounded" >
            <p class="lead">
            <h2 class="pagetitle">Discuss</h2>
            <p style="color:white"> Join our community to discover how other business owners are dealing with their legal issues, and post your own.</p>
          </div>
        </div>
      </div>
      <a name="anchor"></a>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content();?>
      <?php endwhile; endif; ?>
   
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 img-rounded " style="background:#DBDBDB" >
        <h3>Categories</h3>
        <ul>
          <li> <a href="#" onclick="open_modal_box('110', '540', '800', 'flat-blue');" id="arf_modal_default" data-toggle="arfmodal" title="Sign In" class="arform_modal_link_110 " style="cursor:pointer;">Commercial</a></li>
          <li><a href="#" onclick="open_modal_box('110', '540', '800', 'flat-blue');" id="arf_modal_default" data-toggle="arfmodal" title="Sign In" class="arform_modal_link_110 " style="cursor:pointer;">Employment and Benefits</a></li>
          <li><a href="#" onclick="open_modal_box('110', '540', '800', 'flat-blue');" id="arf_modal_default" data-toggle="arfmodal" title="Sign In" class="arform_modal_link_110 " style="cursor:pointer;">Property</a></li>
          <li><a href="#" onclick="open_modal_box('110', '540', '800', 'flat-blue');" id="arf_modal_default" data-toggle="arfmodal" title="Sign In" class="arform_modal_link_110 " style="cursor:pointer;">Regulation and Compliance</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 " >
      
      
      <table width="100%" border="0" cellpadding="10" style="margin-bottom:20px">
  <tbody>
    <tr>
      <td>
      <a href="#" onclick="open_modal_box('110', '540', '800', 'flat-blue');" id="arf_modal_default" data-toggle="arfmodal" title="Sign In" class="arform_modal_link_110 btn btn-primary btn-lg active" style="cursor:pointer;">Post a question</a> 
      
     </td>
      <td>&nbsp;</td>
      <td align="right"><div class="dropdown">
     
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
   Sort by:
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
   
    <li>  <a href="#" onclick="open_modal_box('110', '540', '800', 'flat-blue');" id="arf_modal_default" data-toggle="arfmodal" title="Sign In" class="arform_modal_link_110 " style="cursor:pointer;">Most answers</a></li>
    <li><a href="#" onclick="open_modal_box('110', '540', '800', 'flat-blue');" id="arf_modal_default" data-toggle="arfmodal" title="Sign In" class="arform_modal_link_110 " style="cursor:pointer;">Latest</a></li>
    <li><a href="#" onclick="open_modal_box('110', '540', '800', 'flat-blue');" id="arf_modal_default" data-toggle="arfmodal" title="Sign In" class="arform_modal_link_110 " style="cursor:pointer;">Most popular</a></li>
  </ul>
</div></td>
    </tr>
  </tbody>
</table>
      
      
    <table width="100%" border="1" style="margin-bottom:20px; padding:10px;">
  <tbody>
    <tr >
      <td colspan="2" style=" padding:10px;"><h4><span id="docs-internal-guid-73ebff95-64a1-bb31-802e-0c89835d1ca1"><a href="#" onclick="open_modal_box('110', '540', '800', 'flat-blue');" id="arf_modal_default" data-toggle="arfmodal" title="Sign In" class="arform_modal_link_110 " style="cursor:pointer;">What is the legal number of hours employees can have between shifts?</a></span></h4></td>
      </tr>
    <tr>
      <td style=" padding:10px;">124 answers</td>
      <td align="right" style=" padding:10px;"><span id="docs-internal-guid-73ebff95-64a2-9f56-0100-52d288207051">Posted 4 hours ago</span></td>
      </tr>
  </tbody>
</table>

 <table width="100%" border="1" style="margin-bottom:20px">
  <tbody>
    <tr>
      <td colspan="2" style=" padding:10px;"><h4><span id="docs-internal-guid-73ebff95-64a1-bb31-802e-0c89835d1ca1"><a href="#" onclick="open_modal_box('110', '540', '800', 'flat-blue');" id="arf_modal_default" data-toggle="arfmodal" title="Sign In" class="arform_modal_link_110 " style="cursor:pointer;"><span id="docs-internal-guid-73ebff95-64a8-482c-2015-ddd58eb67eb1">What expenses can i claim through my business?</span></a></span></h4></td>
      </tr>
    <tr>
      <td style=" padding:10px;">120 answers</td>
      <td style=" padding:10px;" align="right"><span id="docs-internal-guid-73ebff95-64a2-9f56-0100-52d288207051">Posted 8 hours ago</span></td>
      </tr>
  </tbody>
</table>

 <table width="100%" border="1" style="margin-bottom:20px">
  <tbody>
    <tr>
      <td colspan="2" style=" padding:10px;"><h4><span id="docs-internal-guid-73ebff95-64a1-bb31-802e-0c89835d1ca1"><a href="#" onclick="open_modal_box('110', '540', '800', 'flat-blue');" id="arf_modal_default" data-toggle="arfmodal" title="Sign In" class="arform_modal_link_110 " style="cursor:pointer;"><span id="docs-internal-guid-73ebff95-64a8-7c09-749d-54354330910d">Working out pro-rata holiday entitlement </span></a></span></h4></td>
      </tr>
    <tr>
      <td style=" padding:10px;">80 answers</td>
      <td style=" padding:10px;" align="right"><span id="docs-internal-guid-73ebff95-64a2-9f56-0100-52d288207051">Posted 2 days ago</span></td>
      </tr>
  </tbody>
</table>

 <table width="100%" border="1" style="margin-bottom:20px">
  <tbody>
    <tr>
      <td colspan="2" style=" padding:10px;"><h4><a href="#" onclick="open_modal_box('110', '540', '800', 'flat-blue');" id="arf_modal_default" data-toggle="arfmodal" title="Sign In" class="arform_modal_link_110 " style="cursor:pointer;">
        <p dir="ltr" id="docs-internal-guid-73ebff95-64a9-17cc-0a8e-e1054267496a">Getting out of a three month notice period... </p>
      </a></span></h4></td>
      </tr>
    <tr>
      <td style=" padding:10px;">61 answers</td>
      <td style=" padding:10px;"align="right"><span id="docs-internal-guid-73ebff95-64a2-9f56-0100-52d288207051">Posted 7 days ago</span></td>
      </tr>
  </tbody>
</table>

 <table width="100%" border="1" style="margin-bottom:20px">
  <tbody>
    <tr>
      <td colspan="2" style=" padding:10px;"><h4><span id="docs-internal-guid-73ebff95-64a1-bb31-802e-0c89835d1ca1"><a href="#" onclick="open_modal_box('110', '540', '800', 'flat-blue');" id="arf_modal_default" data-toggle="arfmodal" title="Sign In" class="arform_modal_link_110 " style="cursor:pointer;"><span id="docs-internal-guid-73ebff95-64a9-4f5f-27e5-b14e82711917">When should a sole trader become a Ltd company? Confused!</span></a></span></h4></td>
      </tr>
    <tr>
      <td style=" padding:10px;">18 answers</td>
      <td style=" padding:10px;" align="right"><span id="docs-internal-guid-73ebff95-64a2-9f56-0100-52d288207051">Posted 1 hour ago</span></td>
      </tr>
  </tbody>
</table>

 <table width="100%" border="1" style="margin-bottom:20px">
  <tbody>
    <tr>
      <td style=" padding:10px;" colspan="2"><h4><span id="docs-internal-guid-73ebff95-64a1-bb31-802e-0c89835d1ca1"><a href="#" onclick="open_modal_box('110', '540', '800', 'flat-blue');" id="arf_modal_default" data-toggle="arfmodal" title="Sign In" class="arform_modal_link_110 " style="cursor:pointer;"><span id="docs-internal-guid-73ebff95-64ab-e675-9579-621df54f7521">How can i legally protect my brand? thanks. </span></a></span></h4></td>
      </tr>
    <tr>
      <td style=" padding:10px;">12 answers</td>
      <td style=" padding:10px;" align="right"><span id="docs-internal-guid-73ebff95-64a2-9f56-0100-52d288207051">Posted 3 weeks ago</span></td>
      </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>

 <?php echo maincontroller::get_form_shortcode_popup(array('id' => '110', 'desc'=>'', 'type'=>'link', 'height'=>'540', 'width'=>'800')); ?>
<?php get_footer(); ?>
