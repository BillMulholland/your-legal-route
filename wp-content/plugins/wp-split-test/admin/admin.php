<div class="bhittani-framework uur">
	<div class="bf-wrap">
    <div class="bf_head">
        <div class="bf_logo">
            <h3>
            	<?php echo $h3; ?>
            </h3>
        </div>
        <!--bf_logo-->
        <ul class="bf_navs _right">
            <li class="bf-save"><a href="#" rel="save-options">Save</a></li>
        </ul>
        <!--bf_navs-->
        <ul class="bf_navs">
            <li class="active"><a href="#Settings">Settings</a></li>
            <li><a href="#Landings">Landing Pages</a></li>
            <li><a href="#Offers">Offer Pages</a></li>
        </ul>
        <!--bf_navs-->
    </div>
    <!--bf_head-->
    <form method="post" action="" name="bf_form">
    <div class="bf_container __settings <?php echo ($opt=='general')?'__active':''; ?>">
        <?php include 'settings.php'; ?>
    </div>
    <!--bf_container __general-->
    <div class="bf_container __landings <?php echo ($opt=='landings')?'__active':''; ?>">
        <?php include 'landing.php'; ?>
    </div>
    <!--bf_container __landings-->
    <div class="bf_container __offers <?php echo ($opt=='offers')?'__active':''; ?>">
        <?php include 'offer.php'; ?>
    </div>
    <!--bf_container __offers-->
	</form>
    </div>
    <!-- bf-wrap -->
</div>
<!--bhittani-framework-->
