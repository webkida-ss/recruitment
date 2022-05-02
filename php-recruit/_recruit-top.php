<!-- 採用情報トップ -->
<div class="c-recruit-top">
	<?php
	global $post;
	$slug = $post->post_name;
	$item = array();

	// 本来アーカイブページ用ではないが、
	// 働く環境のアーカイブページだけは通常の採用情報トップと同様のレイアウト

	// 親ページのslugを取得
	$parent_id = $post->post_parent; // 親ページのIDを取得
	$parent_slug = get_post($parent_id)->post_name; // 親ページのスラッグを取得

	// アーカイブページでない場合
	if (!is_archive()) {
		switch ($slug) {
			case "group":
				$item["add-class"] = "is-group";
				$item["txt-strong"] = "GROUP";
				$item["txt"] = "グループ採用情報";
				$item["mv"] = "recruit-top-sec01-mv08.jpg";
				$item["icon"] = "recruit-top-sec01-ico08.png";
				break;
			case "contact":
				$item["add-class"] = "is-contact";
				$item["txt-strong"] = "CONTACT";
				$item["txt"] = "お問い合わせ";
				$item["mv"] = "recruit-top-sec01-mv06.jpg";
				$item["icon"] = "recruit-top-sec01-ico06.png";
				break;
			case "person":
				$item["add-class"] = "is-person";
				$item["txt-strong"] = "PERSON";
				$item["txt"] = "人について";
				$item["mv"] = "recruit-top-sec01-mv05.jpg";
				$item["icon"] = "recruit-top-sec01-ico05.png";
				break;
			case "message":
				$item["add-class"] = "is-message";
				$item["txt-strong"] = "MESSAGE";
				$item["txt"] = "役員メッセージ";
				$item["mv"] = "recruit-top-sec01-mv04.jpg";
				$item["icon"] = "recruit-top-sec01-ico04.png";
				break;
			case "career":
				$item["add-class"] = "is-career";
				$item["txt-strong"] = "INFORMATION";
				$item["txt"] = "社会人採用情報";
				$item["mv"] = "recruit-top-sec01-mv03.jpg";
				$item["icon"] = "recruit-top-sec01-ico03.png";
				break;
			case "work":
				$item["add-class"] = "is-work";
				$item["txt-strong"] = "WORK";
				$item["txt"] = "仕事について";
				$item["mv"] = "recruit-top-sec01-mv02.jpg";
				$item["icon"] = "recruit-top-sec01-ico02.png";
				break;
			default:
				$item["add-class"] = "is-new";
				$item["txt-strong"] = "INFORMATION";
				$item["txt"] = "新卒採用情報";
				$item["mv"] = "recruit-top-sec01-mv01.jpg";
				$item["icon"] = "recruit-top-sec01-ico01.png";
		}
	} else { // アーカイブページ：働く環境について
		$item["add-class"] = "is-environment";
		$item["txt-strong"] = "ENVIRONMENT";
		$item["txt"] = "働く環境について";
		$item["mv"] = "recruit-top-sec01-mv07.jpg";
		$item["icon"] = "recruit-top-sec01-ico07.png";
	}

	?>
	<div class="c-recruit-top__bg <?php echo $item["add-class"]; ?>"></div>
	<div class="c-inner c-recruit-top__inner">

		<div class="c-recruit-top__mv">
			<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/recruit-top/' . $item["mv"]); ?>" alt="<?php echo $item["txt"]; ?>">
		</div>

		<div class="c-recruit-top__txt">
			<span class="c-recruit-top__txt--strong <?php echo $item["add-class"]; ?>"><?php echo $item["txt-strong"]; ?></span>
			<?php if ($parent_slug == "information") : ?>
				<p><?php echo $item["txt"]; ?></p>
			<?php else : ?>
				<h1><?php echo $item["txt"]; ?></h1>
			<?php endif; ?>
		</div>

		<div class="c-recruit-top__ico <?php echo $item["add-class"]; ?>">
			<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/recruit-top/' . $item["icon"]); ?>" alt="<?php echo $item["txt"]; ?>アイコン">
		</div>

		<div class="c-recruit-top__breadcrumb u-breadcrumb-font">
			<?php
			if (function_exists('bcn_display')) {
				bcn_display();
			}
			?>
		</div>

	</div>
</div>