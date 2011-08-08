<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

		<title><?php bp_page_title() ?></title>

		<?php do_action( 'bp_head' ) ?>

		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

		<?php if ( function_exists( 'bp_sitewide_activity_feed_link' ) ) : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> | <?php _e('Site Wide Activity RSS Feed', 'buddypress' ) ?>" href="<?php bp_sitewide_activity_feed_link() ?>" />
		<?php endif; ?>

		<?php if ( function_exists( 'bp_member_activity_feed_link' ) && bp_is_member() ) : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> | <?php bp_displayed_user_fullname() ?> | <?php _e( 'Activity RSS Feed', 'buddypress' ) ?>" href="<?php bp_member_activity_feed_link() ?>" />
		<?php endif; ?>

		<?php if ( function_exists( 'bp_group_activity_feed_link' ) && bp_is_group() ) : ?>
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> | <?php bp_current_group_name() ?> | <?php _e( 'Group Activity RSS Feed', 'buddypress' ) ?>" href="<?php bp_group_activity_feed_link() ?>" />
		<?php endif; ?>

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> <?php _e( 'Blog Posts RSS Feed', 'buddypress' ) ?>" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> <?php _e( 'Blog Posts Atom Feed', 'buddypress' ) ?>" href="<?php bloginfo('atom_url'); ?>" />

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php wp_head(); ?>

	</head>

	<body <?php body_class() ?> id="bp-default">

		<?php do_action( 'bp_before_header' ) ?>

		<!-- Start Header -->
        <div id="header">

			<a href="<?php echo site_url() ?>" title="<?php _e( 'Home', 'buddypress' ) ?>"><img src="<?php bloginfo('template_directory'); ?>/_inc/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
           
           <!-- Start Ad Header 468x60px -->
            <div id="ad-header">
            </div><!-- End Ad Header 468x60px -->
            
            <div class="clear"></div>
            
            <!-- Start Main Menu -->
			<div id="menu" class="dropdown">
				<div class="rounded">
					<?php wp_nav_menu( array('container' => '', 'container_class' => '', 'menu_class' => 'mainmenu', 'sort_column' => 'menu_order', 'theme_location' => 'primary' ) ); ?>
						
					<div class="clear"></div>
					
 					<?php wp_nav_menu( array('container' => '', 'container_class' => '', 'menu_class' => 'tagsmenu', 'sort_column' => 'menu_order', 'theme_location' => 'tertiary' ) ); ?>
				
				</div>
			</div><!-- End Main Menu -->


			<?php do_action( 'bp_header' ) ?>

		</div><!-- End Header -->

		<?php do_action( 'bp_after_header' ) ?>
		<?php do_action( 'bp_before_container' ) ?>

		<div id="container">