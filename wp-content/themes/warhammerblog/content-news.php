<?php
/**
 * The template used for displaying content in home.php
 *
 * @package 30k Gaming
 */
?>
<article class="news-entry">
    <h1><?php the_title(); ?></h1>
    <p class="date"><?php the_time( 'F j, Y'); ?></p>
    <?php the_excerpt() ?>
    <p>
        <a href="<?php the_permalink(); ?>" class="button">Read More</a>
    </p>
</article>