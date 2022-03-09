jQuery(function() {

  //トップページで画面をスクロールすると途中から出てくる画面一番上に戻るボタン
  var btn = jQuery('.u-js-topbtn');
  jQuery(window).on('load scroll', function(){
    if(jQuery(this).scrollTop() > 50) {
      btn.addClass('u-js-btnactive');
    }else{
      btn.removeClass('u-js-btnactive');
    }
  });
  btn.on('click',function () {
    jQuery('body,html').animate({
      scrollTop: 0
    });
  });
  //一番上に戻るボタンここまで


  //ハンバーガーメニュー
  jQuery('.c-burger').on('click',function(){
    jQuery('.c-burger').toggleClass('close');
    jQuery('.l-top-header__lists').fadeToggle(100);
    jQuery('.l-top-header__lists').addClass('u-js-menu');
    btn.toggleClass('u-js-none');
  })
  //ハンバーガーメニューここまで


  //タブの切り替え
  jQuery(function(){
    let tabs = jQuery(".u-js-tab");
    jQuery(".u-js-tab").on("click",function(){
      jQuery(".u-js-tab__active").removeClass("u-js-tab__active");
      jQuery(this).addClass("u-js-tab__active");
      const index = tabs.index(this);
      jQuery(".u-js-content").removeClass("u-js-show").eq(index).addClass("u-js-show");
    });
  });
  //タブの切り替えここまで


  //トップページのアコーディオン
  jQuery(function(){
    jQuery('.l-top-main__question-answer-q').on("click",function(){
      jQuery(this).next().slideToggle();
    });
  });
  //アコーディオンここまで
});


//トップページのフェードイン
var window_h = jQuery(window).height();
jQuery("#wh span").text(window_h);
jQuery(window).on("scroll", function() {
  var scroll_top = jQuery(window).scrollTop();
  jQuery("#scroll span").text(scroll_top);
  jQuery(".u-js-initial1").each(function() {
    var elem_pos = jQuery(this).offset().top;
    jQuery(this).find(".box_pos span").text(Math.floor(elem_pos));
    if (scroll_top >= elem_pos - window_h+100) {
      jQuery(this).addClass("u-js-fadein");
    } else {
      jQuery(this).removeClass("u-js-fadein");
    }
  });
});
jQuery(window).on("scroll", function() {
  var scroll_top = jQuery(window).scrollTop();
  jQuery("#scroll span").text(scroll_top);
  jQuery(".u-js-initial2").each(function() {
    var elem_pos = jQuery(this).offset().top;
    jQuery(this).find(".box_pos span").text(Math.floor(elem_pos));
    if (scroll_top >= elem_pos - window_h+100) {
      jQuery(this).addClass("u-js-fadein");
    } else {
      jQuery(this).removeClass("u-js-fadein");
    }
  });
});
jQuery(window).on("scroll", function() {
  var scroll_top = jQuery(window).scrollTop();
  jQuery("#scroll span").text(scroll_top);
  jQuery(".u-js-initial3").each(function() {
    var elem_pos = jQuery(this).offset().top;
    jQuery(this).find(".box_pos span").text(Math.floor(elem_pos));
    if (scroll_top >= elem_pos - window_h+100) {
      jQuery(this).addClass("u-js-fadein");
    } else {
      jQuery(this).removeClass("u-js-fadein");
    }
  });
});
jQuery(window).on("scroll", function() {
  var scroll_top = jQuery(window).scrollTop();
  jQuery("#scroll span").text(scroll_top);
  jQuery(".u-js-initial4").each(function() {
    var elem_pos = jQuery(this).offset().top;
    jQuery(this).find(".box_pos span").text(Math.floor(elem_pos));
    if (scroll_top >= elem_pos - window_h+100) {
      jQuery(this).addClass("u-js-fadein");
    } else {
      jQuery(this).removeClass("u-js-fadein");
    }
  });
});
jQuery(window).on("scroll", function() {
  var scroll_top = jQuery(window).scrollTop();
  jQuery("#scroll span").text(scroll_top);
  jQuery(".u-js-initial5").each(function() {
    var elem_pos = jQuery(this).offset().top;
    jQuery(this).find(".box_pos span").text(Math.floor(elem_pos));
    if (scroll_top >= elem_pos - window_h+100) {
      jQuery(this).addClass("u-js-fadein");
    } else {
      jQuery(this).removeClass("u-js-fadein");
    }
  });
});
jQuery(window).on("scroll", function() {
  var scroll_top = jQuery(window).scrollTop();
  jQuery("#scroll span").text(scroll_top);
  jQuery(".u-js-initial6").each(function() {
    var elem_pos = jQuery(this).offset().top;
    jQuery(this).find(".box_pos span").text(Math.floor(elem_pos));
    if (scroll_top >= elem_pos - window_h+100) {
      jQuery(this).addClass("u-js-fadein");
    } else {
      jQuery(this).removeClass("u-js-fadein");
    }
  });
});
jQuery(window).on("scroll", function() {
  var scroll_top = jQuery(window).scrollTop();
  jQuery("#scroll span").text(scroll_top);
  jQuery(".u-js-initial7").each(function() {
    var elem_pos = jQuery(this).offset().top;
    jQuery(this).find(".box_pos span").text(Math.floor(elem_pos));
    if (scroll_top >= elem_pos - window_h+100) {
      jQuery(this).addClass("u-js-fadein");
    } else {
      jQuery(this).removeClass("u-js-fadein");
    }
  });
});
jQuery(window).on("scroll", function() {
  var scroll_top = jQuery(window).scrollTop();
  jQuery("#scroll span").text(scroll_top);
  jQuery(".u-js-initial8").each(function() {
    var elem_pos = jQuery(this).offset().top;
    jQuery(this).find(".box_pos span").text(Math.floor(elem_pos));
    if (scroll_top >= elem_pos - window_h+100) {
      jQuery(this).addClass("u-js-fadein");
    } else {
      jQuery(this).removeClass("u-js-fadein");
    }
  });
});
jQuery(window).on("scroll", function() {
  var scroll_top = jQuery(window).scrollTop();
  jQuery("#scroll span").text(scroll_top);
  jQuery(".u-js-initial9").each(function() {
    var elem_pos = jQuery(this).offset().top;
    jQuery(this).find(".box_pos span").text(Math.floor(elem_pos));
    if (scroll_top >= elem_pos - window_h+100) {
      jQuery(this).addClass("u-js-fadein2");
    } else {
      jQuery(this).removeClass("u-js-fadein2");
    }
  });
});
//フェードインここまで

//ヘッダーメニューをマウスオーバーすると色が変わる
jQuery(function(){
  jQuery('.l-top-header__lists-item').hover(
    function(){
      jQuery(this).addClass('u-js-color');
    },
    function(){
      jQuery(this).removeClass('u-js-color');
    }
  )
});
//色が変わるここまで

//トップページの学習内容の所
jQuery(function(){
  jQuery('.l-top-main__study-section1').hover(
    function(){
      jQuery('.l-top-main__study-fadein1').addClass('u-js-fadein3');
      jQuery('.l-top-main__study-img1').addClass('u-js-opacity');
      jQuery('.l-top-main__study-section-wrap1').addClass('u-js-opacity');
    },
    function(){
      jQuery('.l-top-main__study-fadein1').removeClass('u-js-fadein3');
      jQuery('.l-top-main__study-img1').removeClass('u-js-opacity');
      jQuery('.l-top-main__study-section-wrap1').removeClass('u-js-opacity');
    }
  );
  jQuery('.l-top-main__study-section2').hover(
    function(){
      jQuery('.l-top-main__study-fadein2').addClass('u-js-fadein3');
      jQuery('.l-top-main__study-img2').addClass('u-js-opacity');
      jQuery('.l-top-main__study-section-wrap2').addClass('u-js-opacity');
    },
    function(){
      jQuery('.l-top-main__study-fadein2').removeClass('u-js-fadein3');
      jQuery('.l-top-main__study-img2').removeClass('u-js-opacity');
      jQuery('.l-top-main__study-section-wrap2').removeClass('u-js-opacity');
    }
  );
  jQuery('.l-top-main__study-section3').hover(
    function(){
      jQuery('.l-top-main__study-fadein3').addClass('u-js-fadein3');
      jQuery('.l-top-main__study-img3').addClass('u-js-opacity');
      jQuery('.l-top-main__study-section-wrap3').addClass('u-js-opacity');
    },
    function(){
      jQuery('.l-top-main__study-fadein3').removeClass('u-js-fadein3');
      jQuery('.l-top-main__study-img3').removeClass('u-js-opacity');
      jQuery('.l-top-main__study-section-wrap3').removeClass('u-js-opacity');
    }
  );
});
//学習内容の所はここまで