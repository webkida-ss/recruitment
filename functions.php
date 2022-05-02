<?php
/* アイキャッチ画像 */
add_theme_support('post-thumbnails');

/* 個別ページ抜粋 */
add_post_type_support('page', 'excerpt');

/* アドミンバーを消す */
add_filter('show_admin_bar', '__return_false');

/* プロフィールから項目を削除 */
function hide_profile_fields($contactmethods)
{
	unset($contactmethods['aim']);
	unset($contactmethods['jabber']);
	unset($contactmethods['yim']);
	return $contactmethods;
}

add_filter('user_contactmethods', 'hide_profile_fields');

/* セルフピンバックの禁止 */
function no_self_ping(&$links)
{
	$home = get_option('home');
	foreach ($links as $l => $link)
		if (0 === strpos($link, $home))
			unset($links[$l]);
}
add_action('pre_ping', 'no_self_ping');

/* moreリンクの#を無効化 */
function custom_content_more_link($output)
{
	$output = preg_replace('/#more-[\d]+/i', '', $output);
	return $output;
}
add_filter('the_content_more_link', 'custom_content_more_link');

/* the_excerpt() [...]を消す */
function new_excerpt_more($more)
{
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

/* WordPress のバージョン非表示 */
remove_action('wp_head', 'wp_generator');

/* アップデートのお知らせ非表示 */
add_filter('pre_site_transient_update_core', '__return_zero');
remove_action('wp_version_check', 'wp_version_check');
remove_action('admin_init', '_maybe_update_core');

/* プラグインアップデートのお知らせ非表示 */ /*
remove_action('load-update-core.php', 'wp_update_plugins');
add_filter('pre_site_transient_update_plugins', create_function('$a', "return null;"));
*/

/* エディター */
add_editor_style('editor-style.css');

/* 投稿でPタグを自動挿入させない */
//remove_filter('the_content', 'wpautop');

/* 固定ページでPタグを自動挿入させない */
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content)
{
	global $post;
	$remove_filter = false;

	$arr_types = array('page'); //自動整形タグを無効にする投稿タイプを指定
	$post_type = get_post_type($post->ID);
	if (in_array($post_type, $arr_types)) $remove_filter = true;

	if ($remove_filter) {
		remove_filter('the_content', 'wpautop');
		remove_filter('the_excerpt', 'wpautop');
	}

	return $content;
}

//管理画面の右上にあるヘルプを非表示
function disable_help_link()
{
	echo '<style type="text/css">6
            #contextual-help-link-wrap {display: none !important;}
          </style>';
}
add_action('admin_head', 'disable_help_link');


//投稿ショートコード
add_shortcode('tp', 'shortcode_tp');
function shortcode_tp($atts, $content = '')
{
	return get_template_directory_uri() . $content;
}

//TOPページ
add_shortcode('hurl', 'shortcode_hurl');
function shortcode_hurl()
{
	return home_url('/');
}

// クラス付加
add_filter('previous_post_link', 'add_prev_post_link_class');
function add_prev_post_link_class($output)
{
	return str_replace('<a href=', '<a class="entry-prev" href=', $output);
}
add_filter('next_post_link', 'add_next_post_link_class');
function add_next_post_link_class($output)
{
	return str_replace('<a href=', '<a class="entry-next" href=', $output);
}

//フォームの自作バリデーション
function mwform_validation_check_at_sign($validation_rules)
{
	if (!class_exists('MW_Validation_Rule_CheckAtSign')) {
		class MW_Validation_Rule_CheckAtSign extends MW_WP_Form_Abstract_Validation_Rule
		{
			protected $name = 'スペースのみでエラー';
			public function rule($name, array $options = array())
			{
				$value = $this->Data->get($name);

				$str = $value;
				$str = str_replace("　", " ", $str);

				if (!MWF_Functions::is_empty($value)) {
					if (preg_match('/^ +$/', $str)) {
						$defaults = array(
							'message' => __('テキストを入力してください。', 'mw-wp-form'),
						);
						$options  = array_merge($defaults, $options);
						return $options['message'];
					}
				}
			}

			public function admin($key, $value)
			{
?>
				<label>
					<input type="checkbox" <?php checked($value[$this->getName()], 1); ?> name="<?php echo MWF_Config::NAME; ?>[validation][<?php echo $key; ?>][<?php echo esc_attr($this->getName()); ?>]" value="1" />
					<?php esc_html_e('スペースのみ入力でエラー', 'mw-wp-form'); ?>
				</label>
<?php
			}
		}
	}

	$instance = new MW_Validation_Rule_CheckAtSign();
	$validation_rules[$instance->getName()] = $instance;
	return $validation_rules;
}
add_filter('mwform_validation_rules', 'mwform_validation_check_at_sign');

/** 採用ページ **/
get_template_part('php-recruit/_recruit-functions');
