<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-information">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- 新卒採用トップ -->
		<?php get_template_part("php-recruit/_recruit-top"); ?>

		<!-- メインコンテンツ -->
		<section class="p-information__main c-fade-in">
			<div class="u-page-py u-page-bb">

				<div class="c-inner u-page-px">
					<h2 class="u-page-title">エントリーはこちら</h2>
					<div class="p-information__upper">
						<div class="c-entry-link">
							<ul class="c-entry-link__list">
								<li class="c-entry-link__item01">
									<div class="c-entry-link__img">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/entry-link/entry-link-sec01-img01.png'); ?>" alt="リクナビ">
									</div>
									<a href="#" class="c-entry-link__link" target="_blank" rel="noopener">リクナビからエントリー</a>
								</li>
								<li class="c-entry-link__item02">
									<div class="c-entry-link__img">
										<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/entry-link/entry-link-sec01-img02.png'); ?>" alt="マイナビ">

									</div>
									<a href="#" class="c-entry-link__link" target="_blank" rel="noopener">マイナビからエントリー</a>
								</li>
								<li class="c-entry-link__item03">
									<p class="c-entry-link__txt">リクナビ・マイナビに<br>登録されていない方はこちらから</p>
									<a href="#" class="c-entry-link__link">エントリー</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="p-information__lower p-information-lower">
					<div class="c-inner u-page-px">
						<ul class="p-information-lower__block1">
							<li class="p-information-lower__block1-item01">
								<a href="/recruit/information/flow" class="u-href-100">選考の流れ</a>
							</li>
							<li class="p-information-lower__block1-item02">
								<a href="/recruit/information/training" class="u-href-100">研修制度</a>
							</li>
							<li class="p-information-lower__block1-item03">
								<a href="/recruit/information/career_path" class="u-href-100">キャリアアップ</a>
							</li>
						</ul>

						<div class="p-information-lower__block2">
							<a href="/recruit/information/event" class="u-href-100">新卒イベント</a>
						</div>

						<ul class="p-information-lower__block3">
							<li class="p-information-lower__block3-item01">
								<a href="/recruit/information/description" class="u-href-100">募集要項</a>
							</li>
							<li class="p-information-lower__block3-item02">
								<a href="/recruit/information/qa" class="u-href-100">よくある質問</a>
							</li>
						</ul>
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