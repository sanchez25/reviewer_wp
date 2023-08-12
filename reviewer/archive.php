<?php get_header(); ?>

<section class="main-block">
    <div class="container">
        <div class="main-block-tabs">
            <div class="main-block-title">
                <h1><?php single_cat_title(); ?></h1>
            </div>
            <?php
                if ( have_posts() ) :
                    echo '<div class="tabs-block">';
                        while ( have_posts() ) : the_post();
                            echo '<div class="tabs-block-item" style="background-image: url('.get_template_directory_uri().'/img/mma.svg)">';
                                echo '<div class="tabs-block-item-head">';
                                    echo '<div class="tabs-block-column">';
                                        $image = get_field('image-one');
                                        if($image) {
                                            echo '<div class="tabs-block-img" style="background-image: url('.$image.')"></div>';
                                        } else {
                                            echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';   
                                        }
                                    echo '</div>';
                                    echo '<div class="tabs-block-column-center">';
                                        echo '<span>'.get_field( 'date' ).'</span>';
                                    echo '</div>';
                                    echo '<div class="tabs-block-column right">';
                                        $imagetwo = get_field('image-two');
                                        if($imagetwo) {
                                            echo '<div class="tabs-block-img" style="background-image: url('.$imagetwo.')"></div>';
                                        } else {
                                            echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';   
                                        }
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="tabs-block-item-name">';
                                    echo '<div class="tabs-block-column">';
                                        echo '<span>'.get_field( 'comand-one' ).'</span>';
                                    echo '</div>';
                                    echo '<div class="tabs-block-column right">';
                                        echo '<span>'.get_field( 'comand-two' ).'</span>';
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="tabs-block-item-bottom">';
                                    echo '<a href="'.get_permalink().'">';
                                        echo '<div class="tabs-block-item-bottom-icon" style="background-image: url('.get_template_directory_uri().'/img/tv.svg)"></div>';
                                        echo '<span>Смотреть</span>';
                                    echo '</a>';
                                echo '</div>';
                            echo '</div>';
                        endwhile;
                    echo '</div>';
                else :
                endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
