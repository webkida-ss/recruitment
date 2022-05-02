<?php

/**
 * Template Name: 役員メッセージページ
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-message">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- 役員メッセージトップ -->
		<?php get_template_part("php-recruit/_recruit-top"); ?>

		<!-- メインコンテンツ -->
		<section class="p-message__main c-fade-in">
			<div class="c-inner u-page-py u-page-px u-page-bb">
				<div class="p-message__inner">
					<h2 class="u-page-title">役員メッセージ</h2>
					<div class="p-message__img">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/message/message-sec01-mv01.jpg'); ?>" alt="求める人財像">
					</div>
					<div class="p-message__content">
						<p class="p-message__txt01">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
						<p class="p-message__txt02">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
						<p class="p-message__txt03">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
						<p class="p-message__txt04">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
					</div>
					<div class="p-message__name">
						<p>役員</p>
						<p class="p-message__name--strong">武藤 敬司</p>
					</div>
					<div class="p-message__btn c-btn c-btn--blue">
						<a href="/recruit/">TOPに戻る</a>
					</div>
				</div>
			</div>
		</section>


		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>

	<?php wp_footer(); ?>
</body>

</html>