<?php
/***** Theme Info Page *****/
if (!function_exists('enigma_info_page')) {
	function enigma_info_page() {
	$page1=add_theme_page(__('Creative', 'creative'), __('About Creative', 'creative'), 'edit_theme_options', 'creative_page', 'creative_display_theme_info_page');
	
	add_action('admin_print_styles-'.$page1, 'weblizar_admin_info');
	}
}
add_action('admin_menu', 'enigma_info_page');
function weblizar_admin_info(){
	wp_enqueue_style('admin',  get_template_directory_uri() .'/functions/theme-page/admin.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/fonts/font-awesome-4.5.0/css/font-awesome.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	
}
if (!function_exists('creative_display_theme_info_page')) {
	function creative_display_theme_info_page() {
		$theme_data = wp_get_theme(); ?>
		
<div class="row theme-info-wrap">
<div class="row theme-dtl guidline">
	<div class="col-md-6">
		<h1 id="theme_title"><?php printf(__('Welcome to %1s %2s', 'creative'), $theme_data->Name, $theme_data->Version ); ?></h1>
		<div class="row">
		<h4><?php printf(__('Getting Started with %s', 'creative'), $theme_data->Name); ?>:</h4>
		<p class="guidtext"><?php printf('1. To create Home Page Go to Admin Dashboard >> Settings >> Reading. Now select Static Page and set Front Page and Post Page as your choice.', 'creative'); ?></p>
		<p class="guidtext"><?php printf('2. To Configuration Go to Admin Dashboard >> pages >> Edit Page. </br> Now select Home Page Template that is stated on right side of page.', 'creative'); ?></p>
       <p class="guidtext"><?php printf(__('3. %s Supports the Theme Customizer for all theme settings. Click "Customize Theme" to open the Customizer now.',  'creative'), $theme_data->Name); ?></p>
	   <a href="<?php echo admin_url('customize.php'); ?>" class="customize_button"><?php _e('Customize Theme', 'creative'); ?></a>
		<p class="faq"><?php printf('FAQ.', 'creative', 'creative'); ?></p>
		<p class="faqtext">1. <?php _e("Child Theme:","creative"); ?></p>
		<p class="faqtext"><?php _e("If you modify the theme and it upgrade with next updated version. Then your modifications will be lost. <br>If you want to protect your modifications then you create child theme. Child theme will ensure your modifications and speed up your development time ", "creative"); ?></p>
		<p class="faqtext"><?php _e("For child theme click on" ,"creative"); ?> <a href="https://codex.wordpress.org/Child_Themes" target="_new" class="button">  <?php _e(' Child Theme', 'creative'); ?></a> <?php _e("Button.","creative"); ?></p>
		</div>
	</div>
	<div class="col-md-6">
		<div class="row">
		<p>		
		<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/screenshot.png" alt="<?php _e('Theme Screenshot', 'creative'); ?>" />
		</p>
	    </div>
	</div>
</div>
<div class="row proinfo">
	<div class="col-md-3">
	<h2> <?php printf(__('CREATIVE PREMIUM THEME', 'creative')); ?> </h2>
	<h3><?php printf(__('Get Our Premium Theme', 'creative')); ?></h3>
	</div>
	<div class="col-md-3">
	<h1><?php printf(__('Our Latest Feature Set', 'creative')); ?></h1>
	<ul> 
	    <li class="feature"><i class="fa fa-check fa-1x"></i> <?php printf(__('Customize Front Page', 'creative')); ?></li>
		<li class="feature"><i class="fa fa-check fa-1x"></i> <?php printf(__('Theme Option Panel', 'creative')); ?></li>
		<li class="feature"><i class="fa fa-check fa-1x"></i> <?php printf(__('Unlimited Color Skins', 'creative')); ?></li>
		<li class="feature"><i class="fa fa-check fa-1x"></i> <?php printf(__('Multiple Bakground Patterns', 'creative')); ?></li>
		<li class="feature"><i class="fa fa-check fa-1x"></i> <?php printf(__('Multiple Theme Templates', 'creative')); ?></li>
		<li class="feature"><i class="fa fa-check fa-1x"></i> <?php printf(__('5 Portfolio Layout', 'creative')); ?></li>
		<li class="feature"><i class="fa fa-check fa-1x"></i> <?php printf(__('3 Page Layout', 'creative')); ?></li>
	</ul>
	</div>	
	<div class="col-md-3 new">
	<ul>
		<li class="feature"><i class="fa fa-check fa-1x"></i> <?php printf(__('5 Blog Layout', 'creative')); ?></li>
		<li class="feature"><i class="fa fa-check fa-1x"></i> <?php printf(__('Multilingual', 'creative')); ?></li>
		<li class="feature"><i class="fa fa-check fa-1x"></i> <?php printf(__('Complete Doceumentation', 'creative')); ?></li>
		<li class="feature"><i class="fa fa-check fa-1x"></i> <?php printf(__('2 Service Page Template', 'creative')); ?></li>
		<li class="feature"><i class="fa fa-check fa-1x"></i> <?php printf(__('2 About Us Page with short-code', 'creative')); ?></li>
		<li class="feature"><i class="fa fa-check fa-1x"></i> <?php printf(__('3 Contact Us Page Template', 'creative')); ?></li>
		<li class="feature"><i class="fa fa-check fa-1x"></i> <?php printf(__('Custom Shortcodes', 'creative')); ?></li>
	</ul>
	</div>
	<div class="col-md-3 plan-feature">
		<ul>
		<li><a href="http://demo.weblizar.com/preview/#creative" target="_new" class="demo_button"><i class="fa fa-check-circle"></i> Demo</a></li>
		<li><a href="https://weblizar.com/themes/creative-premium/" target="_new" class="purchase_button"><i class="fa fa-shopping-cart"></i> Buy</a></li>
		</ul>
	</div>
</div>

  <!-- Theme Premium Features  -->
	<div class="container-fluid">
	<div class="col-md-12">
        <h1 class="section-title"> CREATIVE PREMIUM THEMES FEATURES </h1>
		<div class="line"></div>
	    <p class="section-description"> We create awesome themes which are the perfect solution for your website project. </p>
	</div>
	   <div class="container services">
	     <div class="col-md-12">
			<div class="col-md-4 col-sm-6 detail">
			<div class="icon">
				<i class="fa fa-tablet"></i>
				<h3> RESPONSIVE DESIGN </h3>
				 <p class="desc">Weblizar Pro adapts to different screen sizes so that your website will work (and be optimized for) iPhones, iPads and other mobile devices.</p>
		    </div>
			</div>
			
			<div class="col-md-4 col-sm-6 detail">
			<div class="icon">
				<i class="fa fa-eye"></i>
				<h3> RATINA READY </h3>
				 <p class="desc">Ratina ready - iOS Competible. </p>
			</div>
		    </div>
			
			<div class="col-md-4 col-sm-6 detail">
			<div class="icon">
				<i class="fa fa-language"></i>
				<h3> WPML COMPATIBLE </h3>
				 <p class="desc">All our themes are WPML translation ready including Creative.</p>
			</div>
		    </div>
			
			<div class="col-md-4 col-sm-6 detail">
			<div class="icon">
				<i class="fa fa-html5"></i>
				<h3> HTML5 </h3>
				 <p class="desc">Modern HTML5 Elements.</p>
			</div>
		    </div>
			
			<div class="col-md-4 col-sm-6 detail">
			<div class="icon">
				<i class="fa fa-css3"></i>
				<h3> CSS 3 </h3>
				 <p class="desc">Modern CSS 3 Elements.</p>
		    </div>
		    </div>
			
			<div class="col-md-4 col-sm-6 detail">
			<div class="icon">
				<i class="fa fa-globe"></i>
				<h3> MULTI PURPOSE </h3>
				 <p class="desc">Theme can be used for various purpose like : Corporate - Creative - Hotels - RealEstate - Pharma etc. </p>
			</div>
		    </div>
			
			<div class="col-md-4 col-sm-6 detail">
			<div class="icon">
				<i class="fa fa-th"></i>
				<h3> UNLIMITED COLOR SCHEME </h3>
				 <p class="desc">!0 Predifined color schemes including Custom Color picker so that you can create your own color layout .</p>
			</div>
		    </div>
			
			<div class="col-md-4 col-sm-6 detail">
			<div class="icon">
				<i class="fa fa-file-text-o"></i>
				<h3> WELL DOCUMENTED </h3>
				 <p class="desc">Our all themes have well docementation so that you could use our themes easily.</p>
			</div>
		    </div>
			<div class="col-md-4 col-sm-6 detail">
			<div class="icon">
				<i class="fa fa-copy"></i>
				<h3> MULTIPLE THEME TEMPLATES </h3>
				 <p class="desc">Theme have multiple templates for Services and Blogs.</p>
			</div>
		    </div>
			
			<div class="col-md-4 col-sm-6 detail">
			<div class="icon">
				<i class="fa fa-copy"></i>
				<h3> ULTIMATE PORTFOLIO DESIGN  </h3>
				 <p class="desc">Most Popular ISOTOPE Effects for Portfolio.</p>
				 </div>
		    </div>
			
			<div class="col-md-4 col-sm-6 detail">
			<div class="icon">
				<i class="fa fa-calendar"></i>
				<h3> COMING SOON MODE </h3>
				 <p class="desc">You can HIDE your website untill the site is Complete, Using COMING SOON MODE.</p>
			</div>
		    </div>
			
			<div class="col-md-4 col-sm-6 detail">
			<div class="icon">
				<i class="fa fa-gears"></i>
				<h3> THEME OPTION PANEL </h3>
				 <p class="desc">Easily customizable settings through Theme-Options.</p>
			</div>
		    </div>
			
			<div class="col-md-4 col-sm-6 detail">
			<div class="icon">
				<i class="fa fa-plus-square-o"></i>
				<h3> CUSTOM SHORTCODES </h3>
				 <p class="desc">Variety of Shortcodes.</p>
			</div>
		    </div>
			
			<div class="col-md-4 col-sm-6 detail">
			<div class="icon">
				<i class="fa fa-thumbs-up"></i>
				<h3> BROWSER COMPATIBILITY </h3>
				 <p class="desc">Theme supports all leading web browsers.</p>
			</div>
		    </div>
			
			<div class="col-md-4 col-sm-6 detail">
			<div class="icon">
				<i class="fa fa-check-square-o"></i>
				<h3> FAST & FRIENDLY SUPPORT </h3>
				 <p class="desc">Dedicated Support via email / forum / skype / teamviewer .</p>
			</div>
		    </div>
			
			<div class="col-md-4 col-sm-6 detail">
			<div class="icon">
				<i class="fa fa-copy"></i>
				<h3> TOUCH SLIDER </h3>
				 <p class="desc">Theme have responsive design and smoothly run on Mobile Devices.</p>
			</div>
		    </div>
			
		
	    </div>
	   </div>
	</div>
		<div id="theme-author">
		    <p><?php printf(__('%1s is proudly brought to you by %2s. If you like this WordPress theme, %3s.', 'creative'),
					$theme_data->Name,
					'<a target="_blank" href="https://weblizar.com/" title="weblizar">Weblizar</a>',
					'<a target="_blank" href="https://wordpress.org/support/view/theme-reviews/creative" title="creative Review">' . __('rate it', 'creative') . '</a>'); ?>
			</p>
		</div>
 </div>
<?php
	}
}
?>