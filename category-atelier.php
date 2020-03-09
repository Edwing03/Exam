<?php
get_header();
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">
            
        <header class="page-header">
				<?php
				the_archive_description( '<h2 class="archive-description">', '</h2>' );
				?>
			</header><!-- .page-header -->
<?php
echo '<ol>';
while ( have_posts() ) :
    the_post();
    echo '<li style="color:grey;"> <a style="color:grey">' . get_the_title() . '_________</a>
            <a style="color:red;">' . get_post_field('post_name') . '</a>
            <a>________ ' . get_the_author_meta('display_name') . '</a>' . '</li>';
endwhile;
echo '</ol>';