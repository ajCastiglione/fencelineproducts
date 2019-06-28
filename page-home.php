<?php
/*
 Template Name: Home Page 
*/
$hero = get_field('hero_img');
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">

		<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">



						<section class="entry-content cf" itemprop="articleBody">
							<div class="hero" style="background-image:url(<?php if (!empty($hero)) : echo $hero['url'];
																														endif; ?>)">
								<div class="large-wrapper">
									<div class="hero-content">
										<p class="hero-text"><?php echo get_field('hero_text'); ?></p>
										<a href="<?php echo get_field('cta_link'); ?>" class="link"><?php echo get_field('cta_text'); ?></a>
									</div>
								</div>
							</div>

							<div class="products">
								<div class="inner-products large-wrapper">

									<?php if (have_rows('products')) : while (have_rows('products')) : the_row(); ?>
											<div class="product">
												<div class="top">
													<h2 class="secondary-title"><?php $title = get_sub_field('title');
																											if (!empty($title)) : echo $title;
																											else : echo 'product name';
																											endif; ?></h2>
													<img src="<?php $img = get_sub_field('image');
																		if (!empty($img)) : echo $img[url];
																		else : echo get_template_directory_uri() . '/library/images/placeholder.png';
																		endif; ?>">
												</div>
												<p class="text"><?php $text = get_sub_field('text');
																				if (!empty($text)) : echo $text;
																				else : echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus sem quis mauris luctus, vitae sodales enim interdum. Praesent id odio in purus convallis accumsan ut id velit. In laoreet ac felis nec eleifend. Nulla tempor est nec malesuada feugiat. Proin lorem eros, fringilla congue magna ut, fermentum interdum quam. Suspendisse volutpat justo turpis, at accumsan diam pharetra ut.';
																				endif; ?></p>
												<a class="link" href="<?php $link = get_sub_field('cta_link');
																							if (!empty($link)) : echo $link;
																							else : echo '#';
																							endif; ?>" class="link view-more"><?php echo get_sub_field('cta_text'); ?></a>
											</div>
										<?php endwhile;
									endif; ?>
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