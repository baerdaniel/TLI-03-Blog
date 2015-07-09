<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	

	<!-- get post thumbnail url -->
	<?php global $post; ?>
	<?php
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
	?>
	<div class='preview trunk' style="background: url(<?php echo $src[0]; ?> )">
	</div>

	<!-- <div class='preview trunk'>
			<?php the_post_thumbnail('full'); ?>
		</div> -->

<!-- 		<div class='main-gallery'>
			<?php the_field('gallery'); ?>
		</div> -->

	<header class="entry-header trunk">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>, <?php the_field('price') ?>
		on<a class='buy' href='<?php the_field('purchase_link') ?>' target='_blank'>
				<?php the_field('foundry') ?>
			</a>
	</header><!-- .entry-header -->

	<div class="entry-content trunk">
		<?php the_category() ?>
	</div><!-- .entry-content -->

	<!--<div class="entry-footer trunk">
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	</div> .entry-footer -->

</article><!-- #post-## -->
