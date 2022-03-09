<?php
//初期設定
function my_setup(){
    add_theme_support('post-thumbnails'); //アイキャッチ画像が設定できるようになる
    add_theme_support('automatic-feed-links');  //RSSフィード
    add_theme_support('title-tag');  //タイトルタグを生成、headの中の<title>〜</title>がいらなくなる
    add_theme_support('html5',array(  //HTML5で出力
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme','my_setup');



function add_custom_post_type(){
    // 制作実績
    register_post_type(
        'seo', // 1.投稿タイプ名 
        array(   // 2.オプション 
            'label' => 'SEO', // 投稿タイプの名前
            'public'        => true, // 利用する場合はtrueにする 
            'has_archive'   => true, // この投稿タイプのアーカイブを有効にする
            'menu_position' => 5, // この投稿タイプが表示されるメニューの位置
            'menu_icon'     => 'dashicons-edit', // メニューで使用するアイコン
            'supports' => array( // サポートする機能
                'title',  // 記事タイトル
                'editor',  // 記事本文
                'thumbnail',  // アイキャッチ画像
                'revisions' 
                
            )
        )
    );
    register_post_type(
        'works', // 1.投稿タイプ名 
        array(   // 2.オプション 
            'label' => '制作実績', // 投稿タイプの名前
            'public'        => true, // 利用する場合はtrueにする 
            'has_archive'   => true, // この投稿タイプのアーカイブを有効にする
            'menu_position' => 5, // この投稿タイプが表示されるメニューの位置
            'menu_icon'     => 'dashicons-edit', // メニューで使用するアイコン
            'supports' => array( // サポートする機能
                'title',  // 記事タイトル
                'editor',  // 記事本文
                'thumbnail',  // アイキャッチ画像
                'revisions' 
                
            )
        )
    );
}
add_action('init', 'add_custom_post_type');




function create_post_type() {
	// カスタム投稿タイプを作成
	register_post_type( 'man', // スラッグ
		array(
			'label' => 'マンションを追加', // 管理画面のメニューに表示されるテキスト
			'labels' => array(
				'all_items' => 'マンションを追加' // 管理画面のメニューの下層に表示されるテキスト
			),
			'public' => true, 
			'has_archive' => true, // アーカイブページにアクセスできるようにする
			'menu_position' => 5, 
			'supports' => array(
				'title', // 記事タイトル
				'editor', // 記事本文
				'thumbnail', // アイキャッチ画像
			)
		)
	);
	
  // カスタムタクソノミーを作成
  register_taxonomy(
  'custom_taxonomy', // タクソノミー名
  'man', // 関連付けるカスタム投稿タイプ
  array(
    'label' => 'マンションのカテゴリー名を追加', // 管理画面のメニューに表示されるテキスト
    'singular_label' => 'マンション', // 管理画面のメニューに表示されるテキスト
    'labels' => array(
      'all_items' => 'マンションのカテゴリー名', // 管理画面のメニューの下層に表示されるテキスト
      'add_new_item' => 'マンションのカテゴリー名を追加' // タームの新規追加画面に表示されるテキスト
    ),
    'public' => true,
    'show_ui' => true,
    'show_in_nav_menus' => true,
    'hierarchical' => true // 階層関係を持たせるかどうか
    )
  );	
}
add_action( 'init', 'create_post_type' );







function create_post_type2() {
	// カスタム投稿タイプを作成
	register_post_type( 'apa', // スラッグ
		array(
			'label' => 'アパート', // 管理画面のメニューに表示されるテキスト
			'labels' => array(
				'all_items' => 'アパート一覧' // 管理画面のメニューの下層に表示されるテキスト
			),
			'public' => true, 
			'has_archive' => true, // アーカイブページにアクセスできるようにする
			'menu_position' => 5, 
			'supports' => array(
				'title', // 記事タイトル
				'editor', // 記事本文
				'thumbnail', // アイキャッチ画像
			)
		)
	);
	
  // カスタムタクソノミーを作成
  register_taxonomy(
  'custom_taxonomy2', // タクソノミー名
  'apa', // 関連付けるカスタム投稿タイプ
  array(
    'label' => 'アパート', // 管理画面のメニューに表示されるテキスト
    'singular_label' => 'アパート', // 管理画面のメニューに表示されるテキスト
    'labels' => array(
      'all_items' => 'アパート一覧', // 管理画面のメニューの下層に表示されるテキスト
      'add_new_item' => 'アパートを追加' // タームの新規追加画面に表示されるテキスト
    ),
    'public' => true,
    'show_ui' => true,
    'show_in_nav_menus' => true,
    'hierarchical' => true // 階層関係を持たせるかどうか
    )
  );	
}
add_action( 'init', 'create_post_type2' );

