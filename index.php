<?php get_header();?>

  <!--main-->
  <main class="l-top-main">



  <!-- <?php if ( is_object_in_term($post->ID, 'man','man1') ): ?>


    sss


<?php endif; ?>
 -->

<?php
  $args = array(
    'tax_query' => array(
      array(
        //タクソノミー（カスタム分類）を指定
          'taxonomy' => 'custom_taxonomy',
    //先述の指定方法をスラッグに
          'field' => 'slug',
       //指定したタクソノミーが持つターム名
          'terms' => array('man1','man2')  , 
        //子孫タクソノミーを持つ場合に含めるかどうか（初期値はtrue）
          'include_children' => true,
  //演算子の指定（初期値はIN、'IN' 'NOT IN' 'AND'が使用可能）
          'operator' => 'IN'
      )
  )
  );
 //サブループにパラメータを適用
  $the_query = new WP_Query( $args );
 //記事があるか無いかの判別
  if ( $the_query->have_posts() ) :
  while ( $the_query->have_posts() ) : $the_query->the_post();
?>
   <a href="<?php the_permalink();?>">
   <?php the_field('mane'); ?>
   <?php the_field('category'); ?>
  </a>

<?php endwhile; ?>
<?php else: ?>
    
<?php endif; ?>
<?php
  wp_reset_postdata();//ループの設定をリセット
?>





<?php
  $args = array(
    'tax_query' => array(
      array(
        //タクソノミー（カスタム分類）を指定
          'taxonomy' => 'custom_taxonomy',
    //先述の指定方法をスラッグに
          'field' => 'slug',
       //指定したタクソノミーが持つターム名
          'terms' => 'man3' , 
        //子孫タクソノミーを持つ場合に含めるかどうか（初期値はtrue）
          'include_children' => true,
  //演算子の指定（初期値はIN、'IN' 'NOT IN' 'AND'が使用可能）
          'operator' => 'IN'
      )
  )
  );
 //サブループにパラメータを適用
  $the_query = new WP_Query( $args );
 //記事があるか無いかの判別
  if ( $the_query->have_posts() ) :
  while ( $the_query->have_posts() ) : $the_query->the_post();
?>
   
   <?php the_field('mane'); ?>
   <?php the_field('category'); ?>


<?php endwhile; ?>
<?php else: ?>
    
<?php endif; ?>
<?php
  wp_reset_postdata();//ループの設定をリセット
?>








    <!--トップに戻るボタン-->
    <btn class="u-js-topbtn"><i class="fas fa-chevron-up"></i></btn>

    <!--サポート-->
    <section>
      <div class="l-top-main__support u-js-initial1">
        <h2 class="l-top-main__support-title">実務経験者がコーダーになるためにサポート</h2>
        <p class="l-top-main__support-content">コーダーになりたいけど何を勉強すれば実務ができるかが分からない人が多くいるはずです。<br>そんな人達を実務に繋げるためのサイトです。<br>このサイトで実務をするためには何が必要かを知りましょう。</p>
      </div>
    </section>

    <!--自己紹介-->
    <secition>
      <div class="l-top-main__introduce u-js-initial2">
        <h2 class="l-top-main__introduce-title">簡単な自己紹介</h2>
        <p class="l-top-main__introduce-content">はじめまして、サイト運営の責任者のjonioです。<br>このサイトは複数人のコーダーとデザイナーで運営しています。<br>私は2019年の6月からコーダーになるための勉強を始めて2020年の3月からコーダーとして実務を開始しました。<br>現在はサイト作成とWEBアプリを作るWEBエンジニアです。<br>私が勉強を始めたときは何を勉強すればいいかが全く分からず手探りで色々勉強しました。<br>その時の大変だった思いがあってこれからコーダーになりたい人が最短の勉強でコーダーになるための情報を伝えることができるサイトを作りました。</p>
      </div>
    </section>

    <!--学習内容-->
    <section>
      <div class="l-top-main__study">
        <h2 class="l-top-main__study-title">学習内容</h2>
        <div class="l-top-main__study-wrap">
          <a href="" class="l-top-main__study-section1 u-js-initial3">
            <img class="l-top-main__study-img1" src="<?php echo get_template_directory_uri();?>/images/top-img2.png" alt="">
            <p class="l-top-main__study-fadein1">模写の練習はここから</p>
            <div class="l-top-main__study-section-wrap1">
              <h2 class="l-top-main__study-title1">[模写の練習]</h2>
              <p class="l-top-main__study-content1">コーダーはコーディングができないと話になりません。このセクションでは私が作ったデザインカンプを元にコーディングの練習をしてもらいます。</p>
            </div>
          </a>
          <a href="" class="l-top-main__study-section2 u-js-initial4">
            <img class="l-top-main__study-img2" src="<?php echo get_template_directory_uri();?>/images/top-img3.png" alt="">
            <p class="l-top-main__study-fadein2">習得することはここから</p>
            <div class="l-top-main__study-section-wrap2">
              <h2 class="l-top-main__study-title2">[習得すること]</h2>
              <p class="l-top-main__study-content2">コーダーはコーディングができないと話になりません。このセクションでは私が作ったデザインカンプを元にコーディングの練習をしてもらいます。</p>
            </div>
          </a>
          <a href="" class="l-top-main__study-section3 u-js-initial5">
            <img class="l-top-main__study-img3" src="<?php echo get_template_directory_uri();?>/images/top-img4.png" alt="">
            <p class="l-top-main__study-fadein3">実務はここから</p>
            <div class="l-top-main__study-section-wrap3">
              <h2 class="l-top-main__study-title3">[実務]</h2>
              <p class="l-top-main__study-content3">コーダーはコーディングができないと話になりません。このセクションでは私が作ったデザインカンプを元にコーディングの練習をしてもらいます。</p>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!--Q&A-->
    <section>
      <div class="l-top-main__question-answer u-js-initial6">
        <h2 class="l-top-main__question-answer-title">Q&A</h2>
        <div class="l-top-main__question-answer-wrap">
          <ul>
            <li class="l-top-main__question-answer-q">Q.有料ですか？ <i class="fas fa-chevron-down"></i></li>
            <li class="l-top-main__question-answer-a">A.完全無料です</li>
            <li class="l-top-main__question-answer-q">Q.模写で分からない所があったらどうしよう？ <i class="fas fa-chevron-down"></i></li>
            <li class="l-top-main__question-answer-a">A.お問い合わせから私に質問してください</li>
            <li class="l-top-main__question-answer-q">Q.0から勉強する人でも大丈夫？ <i class="fas fa-chevron-down"></i></li>
            <li class="l-top-main__question-answer-a">A.ProgateのHTML&CSSコースを何周か勉強してからの方がいいです</li>
            <li class="l-top-main__question-answer-q">Q.模写の添削をしてくれますか？ <i class="fas fa-chevron-down"></i></li>
            <li class="l-top-main__question-answer-a">A.希望する人が多くいたら考えます</li>
          </ul>
        </div>
      </div>
    </section>

    <!--Twitter-->
    <section>
      <div class="l-top-main__twitter u-js-initial7">
        <h2 class="l-top-main__twitter-title">Follow me</h2>
        <p class="l-top-main__twitter-content">毎日実務関連でツイートしています。よかったらフォローお願いします</p>
        <img src="<?php echo get_template_directory_uri();?>/images/top-img5.png" alt="">
      </div>
    </section>

    <!--YouTube-->
    <section>
      <div class="l-top-main__youtube u-js-initial8">
        <h2 class="l-top-main__youtube-title">YouTube</h2>
        <p class="l-top-main__youtube-content">不定期でYouTubeの動画を配信しています、WEB関係の動画を配信していますのでよかったら見てください</p>
        <img src="<?php echo get_template_directory_uri();?>/images/top-img6.png" alt="">
      </div>
    </section>
  </main>
<?php get_footer();?>