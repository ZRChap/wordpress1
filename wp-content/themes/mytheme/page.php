<?php get_header();?>
<div class="page-wrap">
    <div class="container">

        <section class="row" id="section">
            <div class="col-lg-3">

                <?php if(is_active_sidebar('page-sidebar')):?>
                    <?php dynamic_sidebar('page-sidebar');?>
                <?php endif;?>

            </div>
        
            <div class="col-lg-9">

                <h1><?php the_title();?></h1>
                <?php get_template_part('includes/section', 'content');?>

            </div>
        </section>

    </div>
</div>




<?php get_footer();?>