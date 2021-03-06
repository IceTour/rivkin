<?php
$about =new WP_Query([
        'post_type' => 'page',
        'page_id' => 10
]);
if ($about->have_posts()):
?>


<section class="main_desk_section d-flex align-items-end">

<?php
$images = get_field('main_gallery', '8');
if ($images): ?>

    <div class="main_page_slider">
        <?php foreach ($images as $image): ?>
        <div class="main_page_slider_item" style="background-image: url(<?php echo $image['url']; ?>)"></div>
        <?php endforeach; ?>
    </div>

<?php endif;
wp_reset_postdata();
?>

    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-sm-7 col-lg-5 ">
                <div class="sub_title sub_title_main">
                    <h3>Kirill A. Rivkin</h3>
                    <h4 >About me</h4>
                    <p><?= get_field('main_description', 8)  ?></p>
                    <a href="<?php echo get_permalink('10'); ?>">
                        <svg width="16" height="16">
                            <use xlink:href="#samurai_icon"></use>
                        </svg>
                        More info
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main_desk_social">
        <a href="<?php echo get_theme_mod('facebook'); ?>">
            <svg width="21" height="21">
                <use xlink:href="#fb_icon"></use>
            </svg>
        </a>
        <a href="<?php echo get_theme_mod('youtube'); ?>">
            <svg width="21" height="14">
                <use xlink:href="#yt_icon"></use>
            </svg>
        </a>
        <a href="<?php echo get_theme_mod('twitter'); ?>">
            <svg width="21" height="17">
                <use xlink:href="#twit_icon"></use>
            </svg>
        </a>
    </div>
</section>


<?php
endif;
wp_reset_postdata();