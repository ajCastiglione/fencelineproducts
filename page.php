<?php

$aside_title = get_field('aside_title');
$aside_content = get_field('aside_content');
$best_tbd_title = get_field('best_tbd_section_title');
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
										<?php the_content(); ?>
									</div>
									<div class="right">
										<?php echo "<h1 class='aside-title'>{$aside_title}</h1>"; ?>
										<?php echo "<div class='aside-content'>{$aside_content}</div>"; ?>
									</div>
								</div>
							</div>
						</section>

						<section class="entry-content best-section">
							<div class="large-wrapper">
								<h2 class="secondary-title"><?php echo $best_tbd_title; ?></h2>
								<div class="inner-best-section">
									<?php if (have_rows('best_offers')) : while (have_rows('best_offers')) : the_row(); ?>
											<?php $title = get_sub_field('title');
											$content = get_sub_field('content');
											$link = get_sub_field('cta_link');
											$cta_text = get_sub_field('cta_text'); ?>
											<div class="offer">
												<h3 class="item-title"><?php if (!empty($title)) : echo $title;
																		else : echo 'pretium quis, sem. Nulla consequat';
																		endif; ?></h3>
												<div><?php if (!empty($content)) : echo $content;
														else : echo 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultr icies nec, pellentesque eu, pretium quis, sem. Nulla con sequat massa quis enim. Nullam dictum felis eu pede. Integer tincidunt. Cras dapibus.';
														endif; ?></div>
												<a class="link" href="<?php if (!empty($link)) : echo $link;
																		else : echo '#';
																		endif; ?>"><?php if (!empty($cta_text)) : echo $cta_text;
																					else : echo 'read more';
																					endif; ?></a>
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