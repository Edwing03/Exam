<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
        <div class="oGrid">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
                $jour = get_the_date('j');
                $mois = get_the_date('m')%3+1;
                $gridArea = 'grid-area:'. $jour. '/' .$mois;
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
                echo '<h4 style="'.$gridArea.'">' . substr(get_the_title(),0,20) . ' '. get_the_date('j-m-Y'). '-'.$jour. '/' .$mois. '</h4>';


			endwhile;
        
		endif;
		?>
        </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
