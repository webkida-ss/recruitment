<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-carrier-path">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- 新卒採用トップ -->
		<?php get_template_part("php-recruit/_recruit-top"); ?>

		<!-- 新卒採用情報リンク一覧 -->
		<div class="c-inner u-page-px u-page-pt-80">
			<?php get_template_part("php-recruit/_recruit-link"); ?>
		</div>

		<section class="p-carrier-path__main c-fade-in c-scroll-in">
			<div class="c-inner u-page-py u-page-px u-page-bb">
				<div class="p-carrier-path__inner">
					<h2 class="u-page-title">キャリアステップ</h2>
					<div class="p-carrier-path__img">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/career-path/career-path-sec01-mv01.png'); ?>" alt="キャリアステップ">
					</div>
					<p class="p-carrier-path__txt">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
					<div class="p-carrier-path__btn c-btn c-btn--blue">
						<a href="/recruit/information">一覧に戻る</a>
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