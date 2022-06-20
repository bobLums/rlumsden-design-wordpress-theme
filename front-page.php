<?php get_header();?>
	<div class="row mb-4">
        <div class="col">
            <h1 class="mt-5 mb-3"><span class="fancy">Graphic and Web Design &</span> Wordpress Development</h1>
            <p class="big-p">Design Services for creators, entrepreneurs and small businesses.</p>
        </div>
    </div>
    <div class="row gx-5 mb-4">
        <div class="col-md-6 d-flex align-items-center mb-4">
            <div class="shout">
                    <a href="<?php echo home_url('/about/#services') ?>" class="mx-auto">Services</a>
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-center mb-4">
            <div class="shout">
                    <a href="<?php echo home_url('/contact') ?>" class="mx-auto">Send a shout!</a>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <img src="/wp-content/uploads/2022/03/robert-lumsden-design-wide.png" alt="robert lumsden graphic and web design" class="frontimglg w-100 img-fluid">
            <img src="/wp-content/uploads/2022/03/robert-lumsden-design-mobile.png" alt="robert lumsden graphic and web design" class="frontimgsm w-100 img-fluid">
        </div>
    </div> 
    <div class="row mt-5 mb-3">
        <div class="col">
            <h2>Recent Projects</h2>
        </div>
    </div> 
	<!-- Dynamic Section -->
    <div class="row mb-5"> 
        <?php
        $args2 = array( 'post_type' => 'Projects', 
                        'numberposts' => 2 );
        $lastproj = get_posts( $args2 );
        foreach($lastproj as $post) : setup_postdata($post); ?>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <a href="<?php the_permalink();?>" class="card-link">
                        <img src="<?php the_post_thumbnail_url( '' )?>" class="card-img-top circ-img mb-3" alt="<?php the_title();?>">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title"><?php the_title();?></h4>
                        <p class="card-text mb-4"><?php the_field('sub_title');?></p>
                        <div class="shoutsml mx-auto"><a href="<?php the_permalink();?>" class="card-link">See More!</a></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?> 
    </div>
	<div class="row mb-5">
        <div class="col">
            <div class="shout">
                <a href="<?php echo home_url('/projects') ?>" class="mx-auto">More Projects!</a>
            </div>
        </div>
    </div>
<?php get_footer();?>