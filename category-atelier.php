<?php
get_header();
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">

<?php
echo '<ol>';
while ( have_posts() ) :
    the_post();

    echo '<li>' . get_the_title() . '</li>';

endwhile;
echo '</ol>';