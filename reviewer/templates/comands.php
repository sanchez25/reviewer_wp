<?php
/*Template Name: Comands*/
?>

<?php get_header()?>

<section class="main-block">
    <div class="container">
        <div class="main-block-tabs">
            <div class="main-block-title">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="fighters-card-content">
            <?php
                if ($items = get_posts(array('numberposts' => 100, 'post_type' => 'Rivals'))) {
                    foreach($items as $item) {
                        $fight = get_field('fight', $item->ID);
                        $wins = get_field('wins', $item->ID);
                        $defeat = get_field('defeat', $item->ID);
                        $draws = get_field('draws', $item->ID);
                        echo '<div class="fighters-card-item">';
                            echo '<a href="'.get_permalink($item->ID).'">';
                                echo '<div class="fighters-card-item-title"> ';
                                    echo '<div class="tabs-block-logo" style="background-image: url('.get_template_directory_uri().'/img/fist.svg)"></div>';
                                    echo '<span>'.$item->post_title.'</span>';
                                echo '</div>';
                            echo '</a>';
                            echo '<div class="fighters-card-item-info">';
                                echo '<span class="fighters-card-item-info-left">Бои</span>';
                                echo '<span class="fighters-card-item-info-right">'.$fight.'</span>';
                            echo '</div>';
                            echo '<div class="fighters-card-item-info">';
                                echo '<span class="fighters-card-item-info-left">Победы</span>';
                                echo '<span class="fighters-card-item-info-right">'.$wins.'</span>';
                            echo '</div>';
                            echo '<div class="fighters-card-item-info">';
                                echo '<span class="fighters-card-item-info-left">Поражения</span>';
                                echo '<span class="fighters-card-item-info-right">'.$defeat.'</span>';
                            echo '</div>';
                            echo '<div class="fighters-card-item-info">';
                                echo '<span class="fighters-card-item-info-left">Ничьи</span>';
                                echo '<span class="fighters-card-item-info-right">'.$draws.'</span>';
                            echo '</div>';
                        echo '</div>';
                    }
                }
            ?>
            </div>
            <div class="single-content-block-text">
                <?php echo the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer()?>