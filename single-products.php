<?php
//  Template for the single product pages
get_header();

$form = do_shortcode('[gravityform id="2" title="false" description="false" ajax="false" ]');
?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="cf" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article <?php post_class('product-single cf'); ?> role="article">

						<header class="product-header entry-header">
							<div class="product-header__intro">
								<h1 class="product-header__title single-title"><?php the_title(); ?></h1>
								<div class="product-header__content">
									<?= the_content(); ?>
								</div>
							</div>
							<div class="product-header__form">
								<?= $form ?>
							</div>
						</header>

						<section class="entry-content cf" itemprop="articleBody">
							<!-- Gallery will go here -->
						</section>

					</article>

				<?php endwhile; ?>

			<?php else : ?>

				<article id="post-not-found" class="hentry cf">

					<section class="entry-content">
						<p><?php _e('No product found at this location. Please try returning to the home page.', 'bonestheme'); ?></p>
					</section>

				</article>

			<?php endif; ?>

		</main>

	</div>

</div>

<?php get_footer(); ?>