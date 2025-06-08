<!-- news -->
<?php

/**
 * Template Name: archive-news
 * Description: This is the template
 */

get_header('news');
?>
<style>
    .tab-pane {
        display: none;
    }

    .tab-pane.active.show {
        display: block;
    }

    .nav-link.active {
        font-weight: bold;
        border-bottom: 2px solid black;
    }
</style>
<main>
    <!-- カテゴリタブ component-tagnavnews.php -->
    <?php get_template_part('component', 'tagnavnews'); ?>


</main>
<?php
get_footer();
?>