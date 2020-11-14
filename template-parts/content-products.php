<?php

$products = get_field('products_to_display');

?>

<div class="all-products">

    <?php foreach ($products as $prod_id) :
        $title = get_the_title($prod_id);
        $content = get_the_content(null, null, $prod_id);
        $img = get_the_post_thumbnail_url($prod_id, 'full') ? get_the_post_thumbnail_url($prod_id, 'full') : get_template_directory_uri() . '/library/images/placeholder.png';
    ?>
        <div class="single-product">
            <h2 class="secondary-title"><?= !empty($title) ? $title : 'product name'; ?></h2>
            <div class="product-content"><?= $content ?></div>
            <img class='product-image' src="<?= $img ?>">
        </div>
    <?php endforeach; ?>

</div>