<?php
/*
 Template Name: Home Page 
*/
$hero = get_field('hero_img');
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

						<section class="entry-content cf" itemprop="articleBody">

							<div class="hero" style="background-image:url(<?= $hero['url']; ?>)">
								<div class="large-wrapper">
									<div class="hero-content">
										<p class="hero-text"><?php echo get_field('hero_text'); ?></p>
										<a href="<?php echo get_field('cta_link'); ?>" class="link"><?php echo get_field('cta_text'); ?></a>
									</div>
								</div>
							</div><!-- /hero -->

							<?= get_template_part('template-parts/content', 'home') ?>

						</section>

					</article>

			<?php endwhile;
			endif; ?>

		</main>

	</div>

</div>

<?php get_footer(); ?>