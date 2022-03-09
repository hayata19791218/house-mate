<?php get_header();?>

        <!--トップに戻るボタン-->
        <btn class="u-js-topbtn"><i class="fas fa-chevron-up"></i></btn>


        <div class="l-single">
          <?php if(function_exists('bcn_display')):?>
          <div class="c-breadcrumb">
            <i class="fas fa-home"></i><?php bcn_display();?>
          </div>
          <?php endif;?>

          <div class="l-single__field">

            <!--main-->
            <main class="l-single__main">
              <div>
                <p class="l-single__category">
                  <?php $cat = get_the_category();?>
                  <?php $cat = $cat[0];?>
                  <?php echo get_cat_name($cat->term_id);?>
                </p>
                <h1 class="l-single__title"><?php the_title();?></h1>
                <div class="l-single__area">
                  <div class="l-single__date-wrap">
                    <i class="fas fa-clock"></i>
                    <time datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y年m月d日');?></time>
                  </div>
                  <div class="l-single__update-wrap">
                    <i class="fas fa-pencil-alt"></i>
                    <?php echo date("Y年m月d日");?>
                  </div>
                </div>
                <?php the_content();?>
              </div>
              
              <!--関連記事-->
              <div class="c-related">
                <div class="c-related__wrap">
                  <i class="far fa-newspaper c-related__icon"></i>
                  <p class="c-related__title">関連記事はこちら</p>
                </div>
                <?php
                  $categ = get_the_category($post->ID);
                  $catID = array();

                  foreach($categ as $cat){
                    array_push($catID, $cat -> cat_ID);
                  }

                  $args = array(
                    'post__not_in' => array($post->ID),
                    'category__in' => $catID,
                    'posts_per_page' => 4,
                    'orderby' => 'rand'
                  );

                  $the_query = new WP_Query($args);
                  if($the_query -> have_posts()) :?>

                  <div class="c-related__flex">
                  <?php while($the_query -> have_posts()) : $the_query -> the_post();
                  ?>
                    <div class="c-related__flex-item">
                      <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): the_post_thumbnail('medium');
                          else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.jpg" alt="<?php the_title(); ?>">
                          <?php endif; ?>
                          </a>
                          <div class="c-related__flex-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                          </div>
                      </a>
                    </div>
                  <?php endwhile; ?>
                  </div>
                <?php endif; wp_reset_postdata(); ?>
              </div>
            </main>  

            <?php  get_sidebar();?>
          </div>
        </div>

        <?php get_footer();?>