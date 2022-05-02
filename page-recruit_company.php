<?php

/**
 * Template Name: 採用情報 会社について
 *
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>

</head>

<body>
	<div class="p-top">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>
		<div class="c-recruit-top">
			<div class="c-recruit-top__bg is-company"></div>
			<div class="c-inner c-recruit-top__inner">

				<div class="c-recruit-top__mv">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/company/company-sec01-img01.jpg'); ?>" alt="仕事について">
				</div>
				<div class="c-recruit-top__txt">
					<span class="c-recruit-top__txt--strong is-company">COMPANY</span>
					<h1>会社について</h1>
				</div>
				<div class="c-recruit-top__ico is-company">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/company/company-sec01-ico02.png'); ?>" alt="会社についてアイコン">
				</div>

				<div class="c-recruit-top__breadcrumb u-breadcrumb-font">
					<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to ホーム." href="/recruit/" class="home"><span property="name">ホーム</span></a>
						<meta property="position" content="1">
					</span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name" class="post post-page current-item">会社について</span>
						<meta property="url" content="/recruit/work/">
						<meta property="position" content="3">
					</span>
				</div>

			</div>
		</div>

		<section class="p-company u-page-py u-page-px">
			<div class="p-company__lifeline u-page-px c-inner">
				<div class="c-inner">
					<h2 class="u-page-title p-company__title">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</h2>
					<div class="p-company__lifeline--movie">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/yCmSyMyAEPg" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<div class="c-inner u-page-pt u-page-px ">
				<div class="p-company__field">
					<h2 class="u-page-title u-page-title--blue">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</h2>
					<div class="p-company__item">
						<div class="p-company__item__content">
							<p class="p-company__item__txt">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
						</div>
					</div>
				</div>
			</div>

			<div class="p-company__strengths u-page-pt">
				<div class="c-inner u-page-px">
					<h2 class="u-page-title u-page-title--blue">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</h2>
					<div class="p-company__strengths__inner">
						<div class="p-company__item">
							<div class="p-company__item__content">
								<p class="p-company__item__txt">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
							</div>
						</div>
						<div class="p-company__strengths__consistent">
							<p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
						</div>
						<div class="p-company__item">
							<div class="p-company__item__content">
								<p class="p-company__item__txt">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
							</div>
						</div>
						<div class="p-company__item">
							<div class="p-company__item__content">
								<p class="p-company__item__txt">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
	<!-- フッター -->
	<?php get_template_part("php-recruit/_recruit-footer"); ?>

	<?php wp_footer(); ?>
</body>

</html>