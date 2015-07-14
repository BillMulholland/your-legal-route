<?php get_header(); ?>

			<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >

							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="entry-header article-header">

									<h3 ><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									
								</header>

								<section class="entry-content cf">

									<?php /*?><?php the_post_thumbnail( 'bones-thumb-300' ); ?><?php */?>

									<?php the_excerpt(); ?>

								</section>

								<footer class="article-footer">

								</footer>

							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

					

				</div>
</div>
			</div>

<?php get_footer(); ?>
