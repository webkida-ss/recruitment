<?php

/************************************************************************
 * テーマのセットアップ
 ************************************************************************/
add_action('after_setup_theme', function () {
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
});

/************************************************************************
 * CSS・JS読み込み
 ************************************************************************/

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', array(), '1.0.0', 'all');
	wp_enqueue_style('slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array(), '1.0.0', 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/css/recruit.css', array(), '1.0.0', 'all');
	wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.0.0', false);
	wp_enqueue_script('script', get_template_directory_uri() . '/js/common.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('google-custom-search', "https://www.google.com/cse/brand?form=cse-search-box&lang=ja", array(), '1.0.0', true);
});


//画像パスを置換
function replaceImagePath($arg)
{
	$search  = array('/images/');
	$replace = array(get_template_directory_uri() . '/images/');
	$content = str_replace($search, $replace, $arg);
	return $content;
}
add_action('the_content', 'replaceImagePath');

/************************************************************************
 * パンくずリスト
 ************************************************************************/
// 全体適用カスタマイズ 
add_action('bcn_after_fill', function ($bcnObj) {

	// 個別修正
	global $post;
	$post_type = get_post_type($post); // 投稿種別
	$slug = $post->post_name; // slug

	/*************************************
	 * ルートをホーム（/recruit）に変更
	 *************************************/
	// 
	$count = count($bcnObj->trail);
	$bcnObj->trail[$count - 1]->set_title("ホーム");
	$bcnObj->trail[$count - 1]->set_url("/recruit/");

	/*************************************
	 * 採用情報（/recruit）削除
	 * ただしカスタム投稿は除く
	 * 　プロジェクトストーリー
	 * 　働く環境について
	 *************************************/
	// if ($post_type != "project" && $post_type != "interview" && $post_type != "environment") {
	// 	unset($bcnObj->trail[$count - 2]);
	// }

	/*************************************
	 * プロジェクトストーリー
	 *************************************/
	if ($post_type == "project") {
		$bcnObj->add(new bcn_breadcrumb('人について', null, array('post'), '/recruit/person/', null, true));
		if (is_archive()) {
			$trail_tmp = clone $bcnObj->trail[2];
			$bcnObj->trail[2] = clone $bcnObj->trail[1]; // ホーム
			$bcnObj->trail[1] = $trail_tmp; // 人について
		} else {
			$trail_tmp = clone $bcnObj->trail[3];
			$bcnObj->trail[3] = clone $bcnObj->trail[2]; // ホーム
			$bcnObj->trail[2] = $trail_tmp; // 人について
		}
	}

	/*************************************
	 * 
	 *************************************/
	if ($post_type == "interview") {
		$bcnObj->add(new bcn_breadcrumb('人について', null, array('post'), '/recruit/person/', null, true));
		if (is_archive()) {
			// do nothing
		} else {
			$bcnObj->add(new bcn_breadcrumb('インタビュー', null, array('post'), '/recruit/person/interview', null, true));
			$trail_tmp = clone $bcnObj->trail[3];
			$bcnObj->trail[3] = clone $bcnObj->trail[1]; // ホーム
			$bcnObj->trail[1] = $trail_tmp; // 
		}
	}

	// 私たちの働く環境の場合
	// do nothing

	return $bcnObj;
});

/************************************************************************
 * text/javascript削除
 * text/css削除
 ************************************************************************/
add_action('template_redirect', function () {
	ob_start(function ($buffer) {
		$buffer = str_replace(array('type="text/javascript"', "type='text/javascript'"), '', $buffer);
		$buffer = str_replace(array('type="text/css"', "type='text/css'"), '', $buffer);
		return $buffer;
	});
});

/************************************************************************
 * AIO - MW WP Form
 * mw_wp_form_token ID重複解除
 ************************************************************************/
add_filter('aioseo_disable_shortcode_parsing', '__return_true');

/************************************************************************
 * MW WP Form
 * actionが空で出力される
 ************************************************************************/
function my_do_shortcode_tag($output, $tag, $attr)
{
	if (
		'mwform_formkey' == $tag
		&&
		(
			(isset($attr['key']) && '52' == $attr['key']) // テスト環境
			||
			(isset($attr['key']) && '283' == $attr['key']) // 本番環境
		)
	) {
		$output = str_replace(
			'<form method="post" action="" enctype="multipart/form-data">',
			'<form method="post" enctype="multipart/form-data">',
			$output
		);
	}
	return $output;
}
add_filter('do_shortcode_tag', 'my_do_shortcode_tag', 10, 3);
