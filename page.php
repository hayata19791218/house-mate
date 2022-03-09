<?php get_header();?>

    
<main>

<article>
    <div class="article-wrap article-page page">

        <?php if(have_posts()): while(have_posts()): the_post();?>
        <?php the_content();?>
        <?php endwhile; endif;?>

    </div>
</article>
</main>

<?php get_footer();?>