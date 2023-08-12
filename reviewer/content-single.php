<?php
/* Template Name: News */
 /* Template Post Type: post */
?>

<?php get_header(); ?>

<?php 
    $category = get_the_category();
    $category_id = get_cat_ID( $post->ID );
    $category_link = get_category_link( $category_id );
?>
<section class="single-content">
    <div class="container">
        <div class="single-content-block">
            <div class="single-content-block-title">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="single-content-block-translation">
                <?php echo get_field('iframe'); ?>
            </div>
            <div class="category-title">
                <div class="tabs-block-logo title" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/fist.svg)"></div>
                <?php the_category(', '); ?>
            </div>
            <div class="single-content-block-info">
                <div class="tabs-block-item-head single">
                    <div class="tabs-block-column single">
                        <?php
                            $image = get_field('image-one');
                            if($image) {
                                echo '<div class="tabs-block-img" style="background-image: url('.$image.')"></div>';
                            } else {
                                echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';   
                            }
                        ?>
                    </div>
                    <div class="tabs-block-column-center single">
                        <span><?php echo get_field('date'); ?></span>
                        <span class="tabs-block-column-location"><?php echo get_field('location'); ?></span>
                    </div>
                    <div class="tabs-block-column right single">
                        <?php
                            $imagetwo = get_field('image-two');
                            if($imagetwo) {
                                echo '<div class="tabs-block-img" style="background-image: url('.$imagetwo.')"></div>';
                            } else {
                                echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';   
                            }
                        ?>
                    </div>
                </div>
                <div class="tabs-block-item-name">
                    <div class="tabs-block-column single">
                        <span><?php echo get_field('comand-one'); ?></span>
                    </div>
                    <div class="tabs-block-column right single">
                        <span><?php echo get_field('comand-two'); ?></span>
                    </div>
                </div>
            </div>
            <div class="single-card-fighters">
                <div class="single-card-fighters-title">
                    <h2>Участники <?php echo $category[0]->cat_name; ?></h2>
                </div>
                <div class="fighters-card-content">
                    <?php echo get_field('comands'); ?>
                </div>
            </div>
            <div class="single-content-block-text">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

