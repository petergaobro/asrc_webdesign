<?php
/**
 * Class Search Tab Form.
 *
 * @package TP Education
 * @since 1.0
 */

function tp_education_search_class_form() {
	?>
		<div class="search-wrapper clear">
			<form role="search" action="<?php echo esc_url( site_url('/') ); ?>" method="get" id="searchform">
				<label><?php _e( 'Search', 'tp-education' ); ?></label>
				<div class="search two-columns">
					<div class="column-wrapper">
						<?php
						$taxonomy = 'tp-class-category';
		                $args = array(
		                    'option_none_value'  => __( 'Class Category', 'tp-education' ),
		                    'hide_empty'         => 0,              
		                    'selected'           => 1,
		                    'hierarchical'       => 1,
		                    'name'               => 'tp_term',
		                    'class'              => 'form-control',              
		                    'taxonomy'           => $taxonomy,
		                    'selected'           => ( isset( $_GET[$taxonomy] ) ) ? esc_textarea( $_GET[$taxonomy] ) : 0,
		                    'value_field'        => 'slug'
		                );

		                wp_dropdown_categories( $args, $taxonomy );
						?>
						<input type="text" name="s" width="100%" placeholder="<?php _e( 'keyword', 'tp-education' ); ?>">
						<input type="hidden" name="post_type" value="tp-class" />
					</div><!-- .column-wrapper -->
					<div class="column-wrapper">
						<input type="submit" name="search" value="<?php _e( 'Search', 'tp-education' ); ?>"> 
					</div><!-- .column-wrapper -->
				</div><!-- .search/.two-columns -->
			</form>
		</div><!-- .search-wrapper -->
<?php
}
add_action( 'tp_education_search_class_form_action', 'tp_education_search_class_form', 10 );
