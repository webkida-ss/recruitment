<?php if (!strstr($_SERVER['REQUEST_URI'], 'recruit')) : ?>
	URLに「hoge」が含まれるページは処理しない

	<?php get_header(); ?>

	<main class="p-main">
		<section class="p-page-mv">
			<div class="p-page-mv__inner">
				<h1 class="p-page-mv__ttl p-page-mv__ttl--product">お探しのページは見つかりませんでした</h1>
			</div>
		</section>

		<section class="p-product">
			<section class="p-product__intro">
				<div>
					<p>ご指定されたページは以下のいずれかの理由により、現在ご利用できない可能性があります。</p>
					<ul>
						<li>別のURLに変更された</li>
						<li>入力されたURLに誤りがある</li>
						<li>ページが削除された</li>
					</ul>
					<!--<p>お手数ですが、サイトマップやサイト内検索より、目的のページをお探しください。</p>-->
					<div class="l-contact__inner__link u-mt40 u-mb80">
						<a class="c-btn--type01" href="/" style="pointer-events: auto;">TOPに戻る</a>
					</div>
				</div>
				</div>
				<style>
					.p-product__intro>div {
						display: block;
					}

					.p-product p {
						font-size: 1.6rem;
						width: auto !important;
						margin-bottom: 30px;
					}

					.p-product ul {
						margin-bottom: 30px;
					}

					.p-product ul li {
						font-size: 1.6rem;
						margin-bottom: 5px;
					}

					.p-product ul li:before {
						content: "";
						display: inline-block;
						width: 5px;
						height: 5px;
						vertical-align: middle;
						border-radius: 10px;
						background: #ccc;
						margin-right: 5px;
					}
				</style>

			</section>

		</section>


	</main><!-- /.p-main -->

	<?php get_footer(); ?>

<?php else : ?>

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

				<section class="p-company">
					<div class="c-inner">
						<div class="c-inner u-page-px">
							<h2 class="u-page-title p-company__title">お探しのページは見つかりませんでした</h2>
							<p class="p-career__txt01">ご指定されたページは以下のいずれかの理由により、現在ご利用できない可能性があります。</p>
							<ul>
								<li>別のURLに変更された</li>
								<li>入力されたURLに誤りがある</li>
								<li>ページが削除された</li>
							</ul>
							<!--<p class="p-career__txt01">お手数ですが、サイトマップやサイト内検索より、目的のページをお探しください。</p>-->
							<div class="c-privacy-notice__contact">
								<a href="/recruit/" class="u-href-under">トップページに戻る</a>
							</div>
						</div>
					</div>
					<style>
						.p-company {
							margin-top: 100px;
						}

						@media screen and (max-width: 767px) {
							.p-company {
								margin-top: 20vw;
							}
						}

						.p-company .p-career__txt01 {
							margin-bottom: 30px;
						}

						.p-company ul {
							margin-bottom: 30px;
						}

						.p-company ul li {
							font-size: 1.6rem;
							margin-bottom: 5px;
						}

						@media screen and (max-width: 767px) {
							.p-company ul li {
								font-size: 1.4rem;
							}
						}

						.p-company ul li:before {
							content: "";
							display: inline-block;
							width: 5px;
							height: 5px;
							vertical-align: middle;
							border-radius: 10px;
							background: #ccc;
							margin-right: 5px;
						}

						.c-privacy-notice__contact {
							margin-bottom: 20px;
						}
					</style>

				</section>

				<!-- フッター -->
				<?php get_template_part("php-recruit/_recruit-footer"); ?>

				<?php wp_footer(); ?>
	</body>

	</html>

<?php endif; ?>