</div> <!-- /#container -->

	<?php do_action( 'bp_after_container' ) ?>
	<?php do_action( 'bp_before_footer' ) ?>
        
	<div class="clear"></div>
    
    <div class="pre_footer">
		
		<a href="<?php echo get_option('home'); ?>/">
				<img src="<?php bloginfo('template_directory'); ?>/_inc/images/logo_footer.png" alt="<?php bloginfo('name'); ?>" />
			</a>
		
			<span><a href="#top" title="top">&nbsp;</a></span>
		
		</div>
		
    <div id="footer_wrap">	
    <div id="footer">
            
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
		<?php endif; ?>
            
     <div class="clear"></div>       
     </div> <!-- /#footer -->
 	
        
        <div id="copyright">
			&copy; <?php _e('Copyright', 'buddypress') ?> <?php echo date("Y"); ?> &mdash; <a href="<?php echo get_option('home'); ?>/" class="on"><?php bloginfo('name'); ?></a>. <?php _e('All Rights Reserved', 'buddypress') ?>
		</div>
        </div><!-- /#footer_wrap -->

		<?php do_action( 'bp_footer' ) ?>

		<?php do_action( 'bp_after_footer' ) ?>

		<?php wp_footer(); ?>

	</body>

</html>