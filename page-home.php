<?php
/*
 Template Name: Home Page 
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<section class="hero" style="background-image:url(<?php $hero = get_field('hero_img');
																															if (!empty($hero)) : echo $hero['url'];
																															endif; ?>)">
							<div class="large-wrapper">
								<div class="hero-content">
									<p class="hero-text"><?php echo get_field('hero_text'); ?></p>
									<a href="<?php echo get_field('cta_link'); ?>" class="link"><?php echo get_field('cta_text'); ?></a>
								</div>
							</div>
						</section>

						<section class="entry-content cf" itemprop="articleBody">
							<?php the_content(); ?>
						</section>

					</article>

				<?php endwhile;
		endif; ?>

		</main>

	</div>

</div>

<?php get_footer(); ?>