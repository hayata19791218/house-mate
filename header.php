<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>
      <div class="u-all-wrap">

        <!--header-->
        <header class="l-top-header">
          <nav class="l-top-header__wrap">
            <h1>
              <a href="<?php echo esc_url(home_url());?>" class="l-top-header__wrap-title">
                <img class="l-top-header__logo" src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="">
              </a>
            </h1>
            <ul class="l-top-header__lists">
              <li>
                <a class="l-top-header__lists-item" href="#">ホーム</a>
              </li>
              <li>
                <a class="l-top-header__lists-item" href="#">プロフィール</a>
              </li>
              <li>
                <a class="l-top-header__lists-item" href="#">お問い合わせ</a>
              </li>
              <li>
                <a class="l-top-header__lists-item" href="#">学習内容</a>
              </li>
            </ul>
          </nav>
          <div class="l-top-header__comment-wrap">
            <p class="l-top-header__comment-title">あなたを全力でコーダーに導きます！</p>
            <p class="l-top-header__comment-subtitle">コーダーになるためのサイトcordersへようこそ。</p>
          </div>

          <span class="c-burger">
            <span class="c-burger__bar c-burger__top"></span>
            <span class="c-burger__bar c-burger__middle"></span>
            <span class="c-burger__bar c-burger__bottom"></span>
          </span>
        </header>