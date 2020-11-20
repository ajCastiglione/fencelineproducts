<?php
/*
 Template Name: Products Page
*/
$aside_title = get_field('aside_title');
$aside_content = get_field('aside_content');
$form = do_shortcode('[gravityform id="2" title="false" description="false" ajax="false" ]');
$form_title = get_field('form_title');

?>

<?php get_header(); ?>

<div id="content">

	<header class="article-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header>

	<div id="inner-content" class="cf">

		<main id="main" class="cf">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<section class="entry-content main-content cf" itemprop="articleBody">
							<div class="large-wrapper">
								<div class="flex">
									<div class="left">
										<?= get_template_part('template-parts/content', 'products') ?>
									</div>
									<div class="right ">
										<div class="form">
											<h2 class="form-title"><?= $form_title ?></h2>
											<?= $form ?>
											<div class="img-wrapper">
												<img class="form-img" src="<?= get_template_directory_uri() . '/library/images/AY_DealerShield-green.png' ?>" alt="Active Yards Dealer">
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

					</article>

			<?php endwhile;
			endif; ?>

		</main>

	</div>

</div>


<?php get_footer(); ?>