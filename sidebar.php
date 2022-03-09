<div class="c-sidebar">
    <div class="c-sidebar__new c-fade__top">
        <p class="c-sidebar__new-title">最新の記事</p>
        <?php 
            $news_query = new WP_Query(
                array(
                    'post_type' => 'post',
                    'posts_per_page' => 5
                )
            );
        ?>
        <?php if($news_query->have_posts()):?>
            <?php while($news_query->have_posts()):?>
                <?php $news_query->the_post();?>
                    <div>
                        <a href="<?php the_permalink();?>">
                            <p><?php the_title();?></p>
                        </a>
                    </div>
                <?php endwhile;?>
            <?php endif;?>
        <?php wp_reset_postdata();?>

        <!-- page-archive.phpにリンク -->
        <a class="c-sidebar__link" href="<?php echo esc_url(home_url('archive'));?>">一覧を見る</a>
    </div>
    <div class="c-sidebar__search c-fade__left">
        <p class="c-sidebar__search-title">検索</p>
        <form role="search" method="get" action="<?php bloginfo('url');?>">
            <input class="c-form__text" type="text" value="" name="s" id="search-text">
        </form>
    </div>
    <div class="c-sidebar__profile c-fade__right">
        <p class="c-sidebar__profile-title">プロフィール</p>
        <img class="c-sidebar__profile-img" src="<?php echo get_template_directory_uri();?>/images/introduce.png" alt="">
        <p class="c-sidebar__profile-text">サイト運営者のいさじです。Youbrideとゼクシイ縁結びで婚活をしてやり取りをした人について解説します。</p>
    </div>
</div>