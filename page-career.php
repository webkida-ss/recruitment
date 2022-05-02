<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-career">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- キャリア採用情報トップ -->
		<?php get_template_part("php-recruit/_recruit-top"); ?>

		<section class="c-fade-in c-scroll-in">
			<div class="c-inner u-page-py u-page-px u-page-bb">
				<div class="p-career__inner">
					<h2 class="u-page-title p-career__title">募集要項</h2>
					<p class="p-career__txt01">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
					<a href="#" class="p-career__img u-href-100" target="_blank" rel="noopener">
						<img class="pc" src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/career/career-sec01-mv01.jpg'); ?>" alt="キャリア採用募集要項">
					</a>
					<p class="p-career__txt02">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
					<p class="p-career__txt03">募集要項</p>
					<p class="p-career__txt04">
						この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
						<br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
					</p>
					<p class="p-career__txt05">注意事項</p>
					<ul class="p-career__list">
						<li>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</li>
						<li>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</li>
						<li>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</li>
						<li>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</li>
						<li>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</li>
					</ul>
					<div class="p-career__notice">
						<div class="c-privacy-notice">
							<p class="c-privacy-notice__txt">
								この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。<a href="/privacy" class="u-href-under">プライバシーポリシー</a>をご確認ください。
								<br>ご提出いただいた書類は、返却いたしかねますので予めご了承ください。応募書類は郵送では受け付けていませんので、上記ページより該当職種からエントリーしてください。追って担当者よりご連絡いたします。
							</p>
							<div class="c-privacy-notice__contact">
								<a href="/recruit/contact" class="u-href-under">お問い合わせはこちら</a>
							</div>
						</div>
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