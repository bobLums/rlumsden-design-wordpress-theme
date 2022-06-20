<?php if( have_posts() ): while( have_posts() ): the_post();?>
    <div class="col-sm-6 mb-4">
        <div class="card">
            <a href="<?php the_permalink();?>" class="card-link">
                <img src="<?php the_post_thumbnail_url( '' )?>" class="card-img-top circ-img mb-3" alt="<?php the_title();?>">
            </a>
            <div class="card-body">
            <h5 class="card-title"><?php the_title();?></h5>
            <p class="card-text"><?php the_field('sub_title');?></p>
            <a href="<?php the_permalink();?>" class="card-link float-right">See More!</a>
            </div>
        </div>
    </div>
<?php endwhile; else: endif;?>


