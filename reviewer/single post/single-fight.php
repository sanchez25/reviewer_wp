<?php
/* Template Name: Post rivals */
 /* Template Post Type: Rivals */
?>


<?php get_header()?>

<section class="single-content">
    <div class="container">
        <div class="single-content-block">
            <div class="single-content-block-title">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="single-fighter-card">
                <div class="single-fighter-card-top">
                    <div class="single-fighter-card-image">
                        <?php echo get_the_post_thumbnail($item->ID); ?>
                    </div>
                    <div class="single-fighter-card-info">
                        <div class="single-fighter-card-info-title">
                            <div class="block-age">
                                <span class="block-age-title">Дата рождения:</span>
                                <span><?php echo get_field('birthday'); ?></span>
                            </div>
                            <div class="block-age">
                                <span class="block-age-title">Возраст:</span>
                                <span><?php echo get_field('age'); ?></span>
                            </div>
                        </div>
                        <div class="single-fighter-card-all-info">
                            <div class="single-fighter-card-column">
                                <span class="single-fighter-card-column-title">Вес</span>
                                <span class="single-fighter-card-column-category"><?php echo get_field('weight'); ?></span>
                            </div>
                            <div class="single-fighter-card-column">
                                <span class="single-fighter-card-column-title">Рост</span>
                                <span class="single-fighter-card-column-category"><?php echo get_field('growth'); ?></span>
                            </div>
                            <div class="single-fighter-card-column">
                                <span class="single-fighter-card-column-title">Весовая категория</span>
                                <span class="single-fighter-card-column-category"><?php echo get_field('сategory'); ?></span>
                            </div>
                        </div>
                        <div class="single-fighter-card-all-wins">
                            <div class="single-fighter-wins-row">
                                <span class="single-fighter-wins-row-title fight">Всего боев</span>
                                <div class="single-fighter-wins-row-block fight"><?php echo get_field('fight'); ?></div>
                            </div>
                            <div class="single-fighter-wins-row">
                                <span class="single-fighter-wins-row-title win">Победы</span>
                                <div class="single-fighter-wins-row-block win"><?php echo get_field('wins'); ?></div>
                            </div>
                            <div class="single-fighter-wins-row">
                                <span class="single-fighter-wins-row-title defeat">Поражения</span>
                                <div class="single-fighter-wins-row-block defeat"><?php echo get_field('defeat'); ?></div>
                            </div>
                            <div class="single-fighter-wins-row">
                                <span class="single-fighter-wins-row-title draw">Ничьи</span>
                                <div class="single-fighter-wins-row-block draw"><?php echo get_field('draws'); ?></div>
                            </div>
                        </div>
                        <div class="single-fighter-card-info-country">
                            <div class="country-flag" style="background-image: url(<?php echo get_field('flag'); ?>"></div>
                            <span><?php echo get_field('country'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="single-fighter-card-bottom">
                    <?php echo the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer()?>

