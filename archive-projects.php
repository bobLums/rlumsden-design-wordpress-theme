<?php get_header();?>
	<h1 class="mt-5 mb-4">Projects <span class="fancy">& Work</span></h1>
	<div class="row">
		<div class="col d-flex flex-wrap mb-4">
			<?php
			$terms = get_terms('types');
			if ( !empty( $terms ) && !is_wp_error( $terms ) ){
				foreach ( $terms as $term ) {
					echo '<h4 class="p-2"><a href="'. get_term_link( $term ) .'">'. $term->name .'</a></h4>';
					}
			}
			?>
		</div>
	</div>
    <div class="row mb-5"> 
        <?php get_template_part('includes/section','blogarchive');?>
    </div>
    <div class="row mb-5"> 
        <div class="col">
			<div class="mx-auto" style="text-align: center !important;">
				<?php 
					global $wp_query;
					$big = 999999999;
					echo paginate_links(
						array(
							'base' => str_replace( $big, "%#%", esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
						)
					);
				?>
			</div>
		</div>
    </div>
<?php get_footer();?>