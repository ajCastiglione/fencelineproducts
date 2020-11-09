<?php
$products = get_field('products');
$services_title = get_field('services_title');
$services = get_field('services_offered');
$images = get_field('slider');
?>
<div class="products">
    <div class="inner-products large-wrapper">
        <?php foreach ($products as $prod_id) :
            $title = get_the_title($prod_id);
            $img = get_the_post_thumbnail_url($prod_id, 'full') ? get_the_post_thumbnail_url($prod_id, 'full') : get_template_directory_uri() . '/library/images/placeholder.png';
            $text = get_the_content(null, null, $prod_id) ? get_the_content(null, null, $prod_id) : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus sem quis mauris luctus, vitae sodales enim interdum. Praesent id odio in purus convallis accumsan ut id velit. In laoreet ac felis nec eleifend. Nulla tempor est nec malesuada feugiat. Proin lorem eros, fringilla congue magna ut, fermentum interdum quam. Suspendisse volutpat justo turpis, at accumsan diam pharetra ut.';
            $link = get_permalink($prod_id);
        ?>
            <div class="product">
                <div class="top">
                    <h2 class="secondary-title"><?= !empty($title) ? $title : 'product name'; ?></h2>
                    <img src="<?= $img ?>">
                </div>
                <div class="text"><?= $text ?></div>
                <a class="link" href="<?= $link; ?>" class="link view-more">learn more</a>
            </div>
        <?php endforeach; ?>
    </div>
</div><!-- /products -->

<div class="services">
    <h2 class="secondary-title"><?php echo $services_title; ?></h2>
    <div class="inner-services large-wrapper">
        <?php foreach ($services as $service) :
            $service_link = $service['cta_link'];
            $icon = $service['icon'];
            $service_text = $service['text'] ? $service['text'] : 'Lorem ipsum dolor sit amet, consect etuer';
        ?>
            <div class="service">
                <a href="<?= $service_link ?>" class="service-link">
                    <?= $icon ?>
                    <div class="text">
                        <?= $service_text ?>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
        <div class="content"><?= get_field('services_content'); ?></div>
    </div>
</div><!-- /services -->

<div class="slider">
    <?php if ($images) : ?>
        <ul class="owl-carousel owl-theme">
            <?php foreach ($images as $image) : ?>
                <li class="li">
                    <img class="slide" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>