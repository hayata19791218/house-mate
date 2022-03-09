<?php get_header();?>

<div class="l-archive">
  <div class="c-tab">
    <div class="c-tab__wrap">
      <p class="u-js-tab u-js-tab__active">Youbride</p>
      <p class="u-js-tab">ゼクシイ縁結び</p>
    </div>
  </div>
  <div class="u-js-content u-js-show">
    <div class="c-tab__content-wrap">
        <?php 
          $newslist = get_posts(array(
            'category_name' => 'youbride',
            'posts_per_page' => 10000
          ));
          foreach($newslist as $post):
          setup_postdata($post);
        ?>
          <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('medium');?>
            <div class="c-tab__flex">
                <p class="c-tab__content-date"><?php the_time('Y.m.d'); ?></p>
                <p class="c-tab__content-title"><?php the_title();?></p>
            </div>
          </a>
        <?php endforeach; wp_reset_postdata();?>
    </div>
  </div>
  <div class="u-js-content">
    <div class="c-tab__content-wrap">
        <?php 
          $newslist = get_posts(array(
            'category_name' => 'zexy',
            'posts_per_page' => 10000
          ));
          foreach($newslist as $post):
          setup_postdata($post);
        ?>
          <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('medium');?>
            <div class="c-tab__flex">
                <p class="c-tab__content-date"><?php the_time('Y.m.d'); ?></p>
                <p class="c-tab__content-title"><?php the_title();?></p>
            </div>
          </a>
        <?php endforeach; wp_reset_postdata();?>
    </div>
  </div>
</div>

<?php get_footer();?>