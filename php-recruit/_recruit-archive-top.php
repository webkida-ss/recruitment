<!-- アーカイブページトップ -->
<div class="c-recruit-archive-top">

	<?php
	global $post;
	$post_type = get_query_var('post_type');
	$item = array();
	if ($post_type == "project") {
		$item["subject"] = "プロジェクトストーリー";
		$item["add-class"] = "is-project";
		$item["txt"] = "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。";
		$item["mv"] = [
			"archive-top-sec01-mv01.jpg", "archive-top-sec01-mv02.jpg"
		];
		$item["img"] = "cmn-bg-title02.png";
	}
	$slug = $post->post_name;
	if ($slug == "interview") {
		$item["subject"] = "インタビュー";
		$item["add-class"] = "is-interview";
		$item["txt"] = "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。";
		$item["mv"] = [
			"archive-top-sec01-mv03.jpg", "archive-top-sec01-mv04.png", "archive-top-sec01-mv05.png"
		];
		$item["img"] = "cmn-bg-title01.png";
	}
	?>

	<div class="c-recruit-archive-top__bg <?php echo $item["add-class"]; ?>"></div>

	<div class="c-recruit-archive-top__inner c-inner">
		<div class="c-recruit-archive-top__content">
			<div class="c-recruit-archive-top__detail">
				<h1 class="c-recruit-archive-top__img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/common/' . $item["img"]); ?>" alt="<?php echo $item["subject"]; ?>">
				</h1>
				<p class="c-recruit-archive-top__txt"><?php echo $item["txt"]; ?></p>
				<div class="c-recruit-archive-top__bars <?php echo $item["add-class"]; ?> js-recruit-archive-top-bars"></div>
			</div>
			<div class="c-recruit-archive-top__mv js-recruit-archive-top-mv">
				<div class="c-recruit-archive-top__mv--inner js-recruit-archive-top-list">
					<?php foreach ($item["mv"] as $img) : ?>
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/archive-top/' . $img); ?>" alt="<?php echo $item["txt"]; ?>">
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div><!-- /.c-recruit-archive-top__inner -->
	<div class="c-recruit-archive-top__breadcrumb c-inner u-breadcrumb-font">
		<?php
		if (function_exists('bcn_display')) {
			bcn_display();
		}
		?>
	</div>
</div>