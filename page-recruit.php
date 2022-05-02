<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-top">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- メインコンテンツエリア ============================================= -->
		<!-- メインビジュアル -->
		<div class="p-top-mv">
			<div class="p-top-mv__main"><img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/top/top-sec01-img01.jpg'); ?>" alt="alt" /></div>
			<ul class="p-top-mv__list">
				<li class="p-top-mv__item01"><img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/top/top-sec01-img03.jpg'); ?>" alt="トップ - メインビュー3" /></li>
				<li class="p-top-mv__item02"><img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/top/top-sec01-img04.jpg'); ?>" alt="トップ - メインビュー4" /></li>
				<li class="p-top-mv__item03"><img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/top/top-sec01-img05.jpg'); ?>" alt="トップ - メインビュー5" /></li>
				<li class="p-top-mv__item04"><img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/top/top-sec01-img06.jpg'); ?>" alt="トップ - メインビュー6" /></li>
				<li class="p-top-mv__item05"><img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/top/top-sec01-img07.jpg'); ?>" alt="トップ - メインビュー7" /></li>
				<li class="p-top-mv__item06"><img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/top/top-sec01-img08.jpg'); ?>" alt="トップ - メインビュー8" /></li>
			</ul>
		</div>
		<!-- メッセージ -->

		<section class="p-top-msg">
			<div class="c-inner">
				<h2 class="p-top-msg__title c-fade-in">MESSAGE</h2>
				<p class="p-top-msg__txt01 c-fade-in">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
				<p class="p-top-msg__txt02 c-fade-in">
					この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
					この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
					この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
				</p>
				<div class="p-top-msg__btn c-fade-in">
					<div class="p-top-msg__btn--inner c-btn c-btn--blue"><a class="u-href-100" href="/recruit/message/">メッセージ</a></div>
				</div>
			</div>
		</section><!-- 会社について/仕事について/働く環境について -->

		<section class="p-top-know">
			<ul class="p-top-know__list c-inner">
				<li class="p-top-know__item p-top-know__item--company c-fade-in">
					<div class="p-top-know__content">
						<h2 class="p-top-know__title">会社について</h2>
						<p class="p-top-know__txt01">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
						<p class="p-top-know__txt02">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
						<div class="p-top-know__btn c-btn c-btn--blue"><a class="u-href-100" href="/recruit/company/">詳しく見る</a></div>
					</div>
					<div class="p-top-know__img"><img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/top/top-sec03-img01.jpg'); ?>" alt="会社について" />
						<div class="p-top-know__icon p-top-know__icon--company"><img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/top/top-sec03-ico01.png'); ?>" alt="会社について" /></div>
					</div>
				</li>
				<li class="p-top-know__item p-top-know__item--job c-fade-in">
					<div class="p-top-know__content">
						<h2 class="p-top-know__title p-top-know__title--green">仕事について</h2>
						<p class="p-top-know__txt01">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
						<p class="p-top-know__txt02">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
						<div class="p-top-know__btn c-btn c-btn--green"><a class="u-href-100" href="/recruit/work/">詳しく見る</a></div>
					</div>
					<div class="p-top-know__img">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/top/top-sec03-img02.jpg'); ?>" alt="仕事について" />
						<div class="p-top-know__icon p-top-know__icon--job"><img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/top/top-sec03-ico02.png'); ?>" alt="仕事について" /></div>
					</div>
				</li>
				<li class="p-top-know__item p-top-know__item--env c-fade-in">
					<div class="p-top-know__content">
						<h2 class="p-top-know__title p-top-know__title--orange">働く環境について</h2>
						<p class="p-top-know__txt01">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
						<p class="p-top-know__txt02">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
						<div class="p-top-know__btn c-btn c-btn--orange"><a class="u-href-100" href="/recruit/environment/">詳しく見る</a></div>
					</div>
					<div class="p-top-know__link">
						<div class="p-top-know__link-upper"><a class="u-href-100" href="/recruit/environment/headquarters/">
								<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/top/top-sec03-img03.png'); ?>" alt="本社・全国営業拠点" />
								本社
								<span class="c-circle c-circle--orange">→</span>
							</a></div>
						<div class="p-top-know__link-down"><a class="u-href-100" href="/recruit/environment/nagasaka'">大阪支社
								<br>
								<span class="u-fs-pc-18 u-fs-sp-12">（大阪府）</span>
								<span class="p-top-know__link-down-circle c-circle c-circle--medium c-circle--orange">→</span>
							</a>
							<a class="u-href-100" href="/recruit/environment/ita'">福岡支社
								<br>
								<span class="u-fs-pc-18 u-fs-sp-12">（福岡県）</span>
								<span class="p-top-know__link-down-circle c-circle c-circle--medium c-circle--orange">→</span>
							</a>
							<a class="u-href-100" href="/recruit/environment/chino'">名古屋支社
								<br>
								<span class="u-fs-pc-18 u-fs-sp-12">（愛知県）</span>
								<span class="p-top-know__link-down-circle c-circle c-circle--medium c-circle--orange">→</span>
							</a>
						</div>
					</div>
				</li>
			</ul>
		</section><!-- 人について -->

		<section class="c-fade-in p-top-person">
			<div class="c-inner">
				<h2 class="p-top-person__title">人について</h2>
				<div class="p-top-person__upper">
					<p class="p-top-person__upper-txt01">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
					<p class="p-top-person__upper-txt02">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>

				</div>
				<div class="p-top-person__img">
					<a class="u-href-100" href="/recruit/person/project/">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/top/top-sec04-mv01.png'); ?>" alt="プロジェクトストーリー" />
					</a>
				</div>
			</div>
		</section>

		<div class="p-top-person__main">
			<h3 class="p-top-person__main-title">社員紹介</h3>
			<div class="p-top-person__list"><?php get_template_part("php-recruit/_person-list"); ?></div>
		</div>

		<div class="p-top-person__btn c-btn c-btn--pink">
			<a href="<?php echo esc_url(home_url() . '/recruit/person/interview'); ?>" class="u-href-100">詳しく見る</a>
		</div>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div><!-- /.p-top -->

	<?php wp_footer(); ?>
</body>

</html>