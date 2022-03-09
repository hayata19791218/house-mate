<?php get_header();?>

    <!--main-->
    <main class="l-top-main">

        <!--トップに戻るボタン-->
        <btn class="u-js-topbtn"><i class="fas fa-chevron-up"></i></btn>

        <div class="c-search">
            <h2 class="c-search__title">-SEARCH-</h2>
            <?php if (have_posts()): ?>
            <p class="c-search__content">
                <?php
                if (isset($_GET['s']) && empty($_GET['s'])) {
                    echo '検索キーワードを入力してください';
                } else {
                    echo '「'.$_GET['s'] .'」の検索結果'; 
                }
                ?>
            </p>
        </div>
        <div class="c-search__article-wrap">
            <?php while(have_posts()): the_post(); ?>
                <a href="<?php the_permalink();?>" class="c-search__link">
                    <?php the_post_thumbnail('medium');?>
                    <h2 class="c-search__title"><?php the_title();?></h2>
                </a>
            <?php endwhile; ?>  
        </div>
        <?php else: ?>
            検索されたキーワードにマッチする記事はありませんでした
        <?php endif; ?>

        <!--ページネーション-->
        <div class="c-pagination">
            <?php 
                $arg = array(
                'end_size' => 0,
                'mid_size' => 1,
                'prev_next' => false
                );
            ?>
            <?php echo paginate_links($arg);?>
        </div>
    </main>

<?php get_footer();?>