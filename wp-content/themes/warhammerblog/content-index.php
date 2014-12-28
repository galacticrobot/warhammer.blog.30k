<?php
/**
 * Content-index
 *
 * @package 30k Gaming
 */
?>
<article>
    <p class="type"><?php the_category(', '); ?></p>
    <h1><?php the_title(); ?></h1>
    <p class="date"><?php the_time( 'F j, Y'); ?></p>
    <div class="entry-content">
        <?php the_content() ?>
    </div>
</article>