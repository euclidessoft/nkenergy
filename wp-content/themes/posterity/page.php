<?php
/**
 * The template for displaying all pages.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

if(!posterity_check_for_renamed_templates()){
	//we are moving to different template
	return;
}


if(post_password_required()){
	/* don't use the_content() as it also applies filters that we don't need here, if we are using custom password page */
	echo get_the_content(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
else{
	global $posterity_a13;
	get_header();

	// Elementor `single` location
	if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ){

		the_post();
		posterity_title_bar();
		$add_class       = 'content-box';
		$sticky_one_page = $posterity_a13->posterity_get_meta( '_content_sticky_one_page' ) === 'on';
		if( $sticky_one_page ){
			$add_class .= ' a13-sticky-one-page';
		}
		?>

		<article id="content" class="clearfix"<?php posterity_schema_args('creative'); ?>>
			<div class="content-limiter">
				<div id="col-mask">

					<div id="post-<?php the_ID(); ?>" <?php
					post_class( $add_class );
					if( $sticky_one_page ){
						echo ' data-a13-sticky-one-page-icon-global-color="' . esc_attr( $posterity_a13->posterity_get_meta( '_content_sticky_one_page_bullet_color' ) ) . '"';
						echo ' data-a13-sticky-one-page-icon-global-icon="' . esc_attr( $posterity_a13->posterity_get_meta( '_content_sticky_one_page_bullet_icon' ) ) . '"';
					}
					?>>
						<div class="formatter">
							<?php posterity_title_bar( 'inside' ); ?>
							<div class="real-content"<?php posterity_schema_args('text'); ?>>
								<?php the_content(); ?>
								<div class="clear"></div>

								<?php
								wp_link_pages( array(
										'before' => '<div id="page-links">' . esc_html__( 'Pages: ', 'posterity' ),
										'after'  => '</div>'
									)
								);
								?>
							</div>

							<?php
							global $posterity_a13;

							$comments_on_pages = $posterity_a13->get_option( 'page_comments' ) === 'on';
							// If comments are open or we have at least one comment, load up the comment template.
							if( $comments_on_pages && ( comments_open() || get_comments_number() ) ) :
								comments_template( '', true );
							endif;
							?>

						</div>
					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</article>

		<?php
	}
	get_footer();
}//end of if password_protected