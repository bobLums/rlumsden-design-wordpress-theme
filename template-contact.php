<?php
/*
Template Name: Contact
*/
?>
<?php get_header();?>
<a href="<?php echo home_url('/contact') ?>"><p class="mt-5 salutations">
    <?php
    $a=array("Yow. What a gwan?", "	¡Hola! ¿Qué tal?", "Oi! Tudo bem?", "Bonjour ! Ça va ?", "Hey, how's it hanging?");
    $random_keys=array_rand($a,2);
    echo $a[$random_keys[0]];
    ?>
</p></a>
<p class="mb-4 fancy">Your hair looks great today.</p>
<div class="row mt-5 mb-5"> 
    <div class="col-md-6 mb-4">
        <div class="card p-5 contactdiv">
                <h1 class="smallh1">Contact</h1><br>
                <?php echo do_shortcode('[wpforms id="2000" title="false" description="false"]');?>
        </div>
    </div>
    <div class="col-md-6 mb-4 p-4">
        <img src="<?php the_post_thumbnail_url( '' )?>" alt="Message" class="w-100 img-fluid">
    </div>
</div>
<?php get_footer();?>