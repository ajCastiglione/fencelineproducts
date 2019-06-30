<?php
/*
 Template Name: Contact Page
*/
$desc = get_field('contact_description');
$addr = get_field('address');
$id = get_field('contact_form_id'); 
$sc = "[gravityform id='{$id}' title='false' description='false' ajax='true']";
?>

<?php get_header(); ?>

			<div id="content" class="contact">

			<header class="article-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header>

				<div id="inner-content" class="large-wrapper cf">

						<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<section class="entry-content cf" itemprop="articleBody">
									<?php the_content(); ?>
									<div class="flex">
										<div class="left">
											<h2 class="item-title">contact info</h2>
											<div class="desc"><?php echo $desc; ?></div>
											<div class="address"><?php echo $addr; ?></div>
										</div>
										<div class="right">
											<h2 class="item-title">contact form</h2>
											<?php echo do_shortcode($sc); ?>
										</div>
									</div>
								</section>

							</article>

							<?php endwhile; endif; ?>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
