<?php get_header(); ?>

    <div class="main group <?php echo wpb_option( 'general-sidebar', 'sidebar-right' ); ?>">

        <div class="content-part">
            <div class="pad">
                <div class="text">
					<?php woocommerce_content(); ?>
                    <div class="clear"></div>
                </div>
            </div><!--/.pad-->
        </div><!--/.content-part-->

        <div class="sidebar">
			<?php get_sidebar(); ?>
        </div><!--/.sidebar-->

    </div><!--/.main-->

<?php get_footer(); ?>