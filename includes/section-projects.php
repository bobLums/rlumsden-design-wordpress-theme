<?php if( have_posts() ): while( have_posts() ): the_post();?>
	<div class="row mt-5">
		<div class="col-sm mb-3">
			<h1 class=""><?php the_title();?></h1>
			<p class="mb-2"><?php the_field('sub_title');?></p>
			<b><p class="zeromargin">Year</p></b>
			<p class="mb-2"><?php the_field('year');?></p>
			<b><p class="zeromargin">Industry</p></b>
			<p class=""><?php the_field('industry');?></p>
		</div>
		<div class="col-sm mb-3">
			<b><p>The work I did:</p></b>
			<?php
				$terms = get_the_terms( get_the_id(), 'types');
				if ( !empty( $terms ) && !is_wp_error( $terms ) ){
					foreach ( $terms as $term ) {
						echo '<h4 class="d-block"><a href="'. get_term_link( $term ) .'">'. $term->name .'</a></h4>';
					 }
				}
			?>
		</div>
		<div class="col-sm mb-3">
			<p class="fancy"><?php the_field('fancy');?></p>
		</div>
	</div>
	<?php the_content();?>
<?php endwhile; else: endif;?>