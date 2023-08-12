<?php
/*Template Name: News*/
?>

<?php get_header()?>

<section class="main-block">
    <div class="container">
        <div class="main-block-tabs">
            <div class="main-block-title">
                <h1><?php the_title(); ?></h1>
            </div>
            <?php
                if ($items = get_posts(array('numberposts' => 3, 'post_type' => 'post', 'category' => 2))) {
                    echo '<div class="tabs-title">';
                        echo '<span class="tabs-title-text">'.get_cat_name(2).'</span>';   
                        echo '<a class="tabs-title-link" href="/fight-nights/">';
                            echo '<span>Смотреть все матчи</span>';
                            echo '<div class="tabs-title-link-icon" style="background-image: url('.get_template_directory_uri().'/img/arrow.svg)"></div>';
                        echo '</a>';
                    echo '</div>';
                    echo '<div class="tabs-block">';
                        foreach($items as $item) {
                            $date = get_field('date', $item->ID);
                            $first = get_field('comand-one', $item->ID);
                            $second = get_field('comand-two', $item->ID);
                            $image = get_field('image-one', $item->ID);
                            $imagetwo = get_field('image-two', $item->ID);
                            echo '<div class="tabs-block-item" style="background-image: url('.get_template_directory_uri().'/img/mma.svg)">';
                                echo '<div class="tabs-block-item-head">';
                                    echo '<div class="tabs-block-column">';
                                        if($image) {
                                            echo '<div class="tabs-block-img" style="background-image: url('.$image.')"></div>';
                                        } else {
                                            echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';   
                                        }
                                    echo '</div>';
                                    echo '<div class="tabs-block-column-center">';
                                        echo '<span>'.$date.'</span>';
                                    echo '</div>';
                                    echo '<div class="tabs-block-column right">';
                                        if($imagetwo) {
                                            echo '<div class="tabs-block-img" style="background-image: url('.$imagetwo.')"></div>';
                                        } else {
                                            echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';   
                                        }
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="tabs-block-item-name">';
                                    echo '<div class="tabs-block-column">';
                                        echo '<span>'.$first.'</span>';
                                    echo '</div>';
                                    echo '<div class="tabs-block-column right">';
                                        echo '<span>'.$second.'</span>';
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="tabs-block-item-bottom">';
                                    echo '<a href="'.get_permalink($item->ID).'">';
                                        echo '<div class="tabs-block-item-bottom-icon" style="background-image: url('.get_template_directory_uri().'/img/tv.svg)"></div>';
                                        echo '<span>Смотреть</span>';
                                    echo '</a>';
                                echo '</div>';
                            echo '</div>';
                        }
                    echo '</div>';
                }
            ?>
            <?php
                if ($items = get_posts(array('numberposts' => 3, 'post_type' => 'post', 'category' => 3))) {
                    echo '<div class="tabs-title">';
                        echo '<span class="tabs-title-text">'.get_cat_name(3).'</span>';   
                        echo '<a class="tabs-title-link" href="/mma-brave-cf/">';
                            echo '<span>Смотреть все матчи</span>';
                            echo '<div class="tabs-title-link-icon" style="background-image: url('.get_template_directory_uri().'/img/arrow.svg)"></div>';
                        echo '</a>';
                    echo '</div>';
                    echo '<div class="tabs-block">';
                        foreach($items as $item) {
                            $date = get_field('date', $item->ID);
                            $first = get_field('comand-one', $item->ID);
                            $second = get_field('comand-two', $item->ID);
                            $image = get_field('image-one', $item->ID);
                            $imagetwo = get_field('image-two', $item->ID);
                            echo '<div class="tabs-block-item" style="background-image: url('.get_template_directory_uri().'/img/mma.svg)">';
                                echo '<div class="tabs-block-item-head">';
                                    echo '<div class="tabs-block-column">';
                                        if($image) {
                                            echo '<div class="tabs-block-img" style="background-image: url('.$image.')"></div>';
                                        } else {
                                            echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';   
                                        }
                                    echo '</div>';
                                    echo '<div class="tabs-block-column-center">';
                                        echo '<span>'.$date.'</span>';
                                    echo '</div>';
                                    echo '<div class="tabs-block-column right">';
                                        if($imagetwo) {
                                            echo '<div class="tabs-block-img" style="background-image: url('.$imagetwo.')"></div>';
                                        } else {
                                            echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';   
                                        }
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="tabs-block-item-name">';
                                    echo '<div class="tabs-block-column">';
                                        echo '<span>'.$first.'</span>';
                                    echo '</div>';
                                    echo '<div class="tabs-block-column right">';
                                        echo '<span>'.$second.'</span>';
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="tabs-block-item-bottom">';
                                    echo '<a href="'.get_permalink($item->ID).'">';
                                        echo '<div class="tabs-block-item-bottom-icon" style="background-image: url('.get_template_directory_uri().'/img/tv.svg)"></div>';
                                        echo '<span>Смотреть</span>';
                                    echo '</a>';
                                echo '</div>';
                            echo '</div>';
                        }
                    echo '</div>';
                }
            ?>
            <?php
                if ($items = get_posts(array('numberposts' => 3, 'post_type' => 'post', 'category' => 4))) {
                    echo '<div class="tabs-title">';
                        echo '<span class="tabs-title-text">'.get_cat_name(4).'</span>';   
                        echo '<a class="tabs-title-link" href="/mma-ufc-on-espn/">';
                            echo '<span>Смотреть все матчи</span>';
                            echo '<div class="tabs-title-link-icon" style="background-image: url('.get_template_directory_uri().'/img/arrow.svg)"></div>';
                        echo '</a>';
                    echo '</div>';
                    echo '<div class="tabs-block">';
                        foreach($items as $item) {
                            $date = get_field('date', $item->ID);
                            $first = get_field('comand-one', $item->ID);
                            $second = get_field('comand-two', $item->ID);
                            $image = get_field('image-one', $item->ID);
                            $imagetwo = get_field('image-two', $item->ID);
                            echo '<div class="tabs-block-item" style="background-image: url('.get_template_directory_uri().'/img/mma.svg)">';
                                echo '<div class="tabs-block-item-head">';
                                    echo '<div class="tabs-block-column">';
                                        if($image) {
                                            echo '<div class="tabs-block-img" style="background-image: url('.$image.')"></div>';
                                        } else {
                                            echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';   
                                        }
                                    echo '</div>';
                                    echo '<div class="tabs-block-column-center">';
                                        echo '<span>'.$date.'</span>';
                                    echo '</div>';
                                    echo '<div class="tabs-block-column right">';
                                        if($imagetwo) {
                                            echo '<div class="tabs-block-img" style="background-image: url('.$imagetwo.')"></div>';
                                        } else {
                                            echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';   
                                        }
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="tabs-block-item-name">';
                                    echo '<div class="tabs-block-column">';
                                        echo '<span>'.$first.'</span>';
                                    echo '</div>';
                                    echo '<div class="tabs-block-column right">';
                                        echo '<span>'.$second.'</span>';
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="tabs-block-item-bottom">';
                                    echo '<a href="'.get_permalink($item->ID).'">';
                                        echo '<div class="tabs-block-item-bottom-icon" style="background-image: url('.get_template_directory_uri().'/img/tv.svg)"></div>';
                                        echo '<span>Смотреть</span>';
                                    echo '</a>';
                                echo '</div>';
                            echo '</div>';
                        }
                    echo '</div>';
                }
            ?>
            <?php
                if ($items = get_posts(array('numberposts' => 3, 'post_type' => 'post', 'category' => 5))) {
                    echo '<div class="tabs-title">';
                        echo '<span class="tabs-title-text">'.get_cat_name(5).'</span>';   
                        echo '<a class="tabs-title-link" href="/mma-cage-fury-fc/">';
                            echo '<span>Смотреть все матчи</span>';
                            echo '<div class="tabs-title-link-icon" style="background-image: url('.get_template_directory_uri().'/img/arrow.svg)"></div>';
                        echo '</a>';
                    echo '</div>';
                    echo '<div class="tabs-block">';
                        foreach($items as $item) {
                            $date = get_field('date', $item->ID);
                            $first = get_field('comand-one', $item->ID);
                            $second = get_field('comand-two', $item->ID);
                            $image = get_field('image-one', $item->ID);
                            $imagetwo = get_field('image-two', $item->ID);
                            echo '<div class="tabs-block-item" style="background-image: url('.get_template_directory_uri().'/img/mma.svg)">';
                                echo '<div class="tabs-block-item-head">';
                                    echo '<div class="tabs-block-column">';
                                        if($image) {
                                            echo '<div class="tabs-block-img" style="background-image: url('.$image.')"></div>';
                                        } else {
                                            echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';   
                                        }
                                    echo '</div>';
                                    echo '<div class="tabs-block-column-center">';
                                        echo '<span>'.$date.'</span>';
                                    echo '</div>';
                                    echo '<div class="tabs-block-column right">';
                                        if($imagetwo) {
                                            echo '<div class="tabs-block-img" style="background-image: url('.$imagetwo.')"></div>';
                                        } else {
                                            echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';   
                                        }
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="tabs-block-item-name">';
                                    echo '<div class="tabs-block-column">';
                                        echo '<span>'.$first.'</span>';
                                    echo '</div>';
                                    echo '<div class="tabs-block-column right">';
                                        echo '<span>'.$second.'</span>';
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="tabs-block-item-bottom">';
                                    echo '<a href="'.get_permalink($item->ID).'">';
                                        echo '<div class="tabs-block-item-bottom-icon" style="background-image: url('.get_template_directory_uri().'/img/tv.svg)"></div>';
                                        echo '<span>Смотреть</span>';
                                    echo '</a>';
                                echo '</div>';
                            echo '</div>';
                        }
                    echo '</div>';
                }
            ?>
            <?php
                if ($items = get_posts(array('numberposts' => 3, 'post_type' => 'post', 'category' => 6))) {
                    echo '<div class="tabs-title">';
                        echo '<span class="tabs-title-text">'.get_cat_name(6).'</span>';   
                        echo '<a class="tabs-title-link" href="/mma-ufc-260/">';
                            echo '<span>Смотреть все матчи</span>';
                            echo '<div class="tabs-title-link-icon" style="background-image: url('.get_template_directory_uri().'/img/arrow.svg)"></div>';
                        echo '</a>';
                    echo '</div>';
                    echo '<div class="tabs-block">';
                        foreach($items as $item) {
                            $date = get_field('date', $item->ID);
                            $first = get_field('comand-one', $item->ID);
                            $second = get_field('comand-two', $item->ID);
                            $image = get_field('image-one', $item->ID);
                            $imagetwo = get_field('image-two', $item->ID);
                            echo '<div class="tabs-block-item" style="background-image: url('.get_template_directory_uri().'/img/mma.svg)">';
                                echo '<div class="tabs-block-item-head">';
                                    echo '<div class="tabs-block-column">';
                                        if($image) {
                                            echo '<div class="tabs-block-img" style="background-image: url('.$image.')"></div>';
                                        } else {
                                            echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';   
                                        }
                                    echo '</div>';
                                    echo '<div class="tabs-block-column-center">';
                                        echo '<span>'.$date.'</span>';
                                    echo '</div>';
                                    echo '<div class="tabs-block-column right">';
                                        if($imagetwo) {
                                            echo '<div class="tabs-block-img" style="background-image: url('.$imagetwo.')"></div>';
                                        } else {
                                            echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';   
                                        }
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="tabs-block-item-name">';
                                    echo '<div class="tabs-block-column">';
                                        echo '<span>'.$first.'</span>';
                                    echo '</div>';
                                    echo '<div class="tabs-block-column right">';
                                        echo '<span>'.$second.'</span>';
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="tabs-block-item-bottom">';
                                    echo '<a href="'.get_permalink($item->ID).'">';
                                        echo '<div class="tabs-block-item-bottom-icon" style="background-image: url('.get_template_directory_uri().'/img/tv.svg)"></div>';
                                        echo '<span>Смотреть</span>';
                                    echo '</a>';
                                echo '</div>';
                            echo '</div>';
                        }
                    echo '</div>';
                }
            ?>
            <?php
                if ($items = get_posts(array('numberposts' => 3, 'post_type' => 'post', 'category' => 7))) {
                    echo '<div class="tabs-title">';
                        echo '<span class="tabs-title-text">'.get_cat_name(7).'</span>';   
                        echo '<a class="tabs-title-link" href="/aca-119/">';
                            echo '<span>Смотреть все матчи</span>';
                            echo '<div class="tabs-title-link-icon" style="background-image: url('.get_template_directory_uri().'/img/arrow.svg)"></div>';
                        echo '</a>';
                    echo '</div>';
                    echo '<div class="tabs-block">';
                        foreach($items as $item) {
                            $date = get_field('date', $item->ID);
                            $first = get_field('comand-one', $item->ID);
                            $second = get_field('comand-two', $item->ID);
                            $image = get_field('image-one', $item->ID);
                            $imagetwo = get_field('image-two', $item->ID);
                            echo '<div class="tabs-block-item" style="background-image: url('.get_template_directory_uri().'/img/mma.svg)">';
                                echo '<div class="tabs-block-item-head">';
                                    echo '<div class="tabs-block-column">';
                                        if($image) {
                                            echo '<div class="tabs-block-img" style="background-image: url('.$image.')"></div>';
                                        } else {
                                            echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';   
                                        }
                                    echo '</div>';
                                    echo '<div class="tabs-block-column-center">';
                                        echo '<span>'.$date.'</span>';
                                    echo '</div>';
                                    echo '<div class="tabs-block-column right">';
                                        if($imagetwo) {
                                            echo '<div class="tabs-block-img" style="background-image: url('.$imagetwo.')"></div>';
                                        } else {
                                            echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';   
                                        }
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="tabs-block-item-name">';
                                    echo '<div class="tabs-block-column">';
                                        echo '<span>'.$first.'</span>';
                                    echo '</div>';
                                    echo '<div class="tabs-block-column right">';
                                        echo '<span>'.$second.'</span>';
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="tabs-block-item-bottom">';
                                    echo '<a href="'.get_permalink($item->ID).'">';
                                        echo '<div class="tabs-block-item-bottom-icon" style="background-image: url('.get_template_directory_uri().'/img/tv.svg)"></div>';
                                        echo '<span>Смотреть</span>';
                                    echo '</a>';
                                echo '</div>';
                            echo '</div>';
                        }
                    echo '</div>';
                }
            ?>
            <div class="single-content-block-text">
                <?php echo the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer()?>