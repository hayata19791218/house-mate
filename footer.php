        <!--footer-->
        <footer class="l-top-footer u-js-initial9">
          <div class="l-top-footer__wrap">
            <h1>
              <a href="<?php echo esc_url(home_url());?>">
                <img class="l-top-footer__logo" src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="">
              </a>
            </h1>
            <ul class="l-top-footer__lists">
              <li>
                <a class="l-top-footer__lists-item" href="#">ホーム</a>
              </li>
              <li>
                <a class="l-top-footer__lists-item" href="#">プロフィール</a>
              </li>
              <li>
                <a class="l-top-footer__lists-item" href="#">お問い合わせ</a>
              </li>
              <li>
                <p>学習内容</p>
                <a class="l-top-footer__lists-section" href="#">模写の練習</a>
                <a class="l-top-footer__lists-section" href="#">習得すること</a>
                <a class="l-top-footer__lists-section" href="#">実務</a>
              </li>
            </ul>
          </div>
          <p class="l-top-footer__copy">&copy;2021〜Corders All rights reserved.</p>
        </footer>

      </div>
      <?php wp_footer();?>
      <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/common.js"></script>
  </body>
</html>
