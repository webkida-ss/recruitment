<?php
$array_nav = [
	["会社について", "company"],
	["働く環境について", "environment"],
	["仕事について", "work"],
	["人について", "person"],
];
$array_btn = [
	["新卒採用情報", "information", "blue"],
	["社会人採用情報", "career", "green"],
	["グループ採用情報", "group", "pink"],
];
?>
<div class="l-recruit-footer">

	<!-- PC版 -->
	<div class="l-recruit-footer__pc">
		<!-- フッター上部 -->
		<div class="l-recruit-footer__upper l-recruit-footer-upper">
			<div class="c-inner">
				<h2 class="l-recruit-footer-upper__title">
					採用情報<span class="l-recruit-footer-upper__sub-title">INFOMATION</span>
				</h2>
				<ul class="l-recruit-footer-upper__btns">
					<?php for ($i = 0; $i < count($array_btn); $i++) :
						$item = $array_btn[$i];
						$num = $i + 1;
					?>
						<li class="l-recruit-footer-upper__btn0<?php echo $num; ?> l-recruit-footer-upper__btn--<?php echo $item[2]; ?>">
							<a href="<?php echo esc_url(home_url() . '/recruit/' . $item[1]); ?>" class="u-href-100">
								<span><?php echo $item[0]; ?></span>
							</a>
							<span class="l-recruit-footer-upper__btn-circle c-circle c-circle--white-<?php echo $item[2]; ?>">→</span>
						</li>
					<?php endfor; ?>
				</ul>
			</div>
		</div>
		<!-- フッター下部 -->
		<div class="l-recruit-footer__lower l-recruit-footer-lower">
			<div class="c-inner l-recruit-footer-lower__inner">
				<div class="l-recruit-footer-lower__left">
					<div class="l-recruit-footer-lower__logo">
						<a href="<?php echo esc_url(home_url() . '/recruit'); ?>" class="u-href-100 ">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/common/cmn-logo01.png'); ?>" alt="ロゴ">
						</a>
					</div>
					<div class="l-recruit-footer-lower__btn">
						<a href="<?php echo esc_url(home_url() . '/'); ?>" target="_blank" class="u-href-100">コーポレートサイト</a>
					</div>
				</div>
				<div class="l-recruit-footer-lower__right">
					<nav class="l-recruit-footer-lower__nav">
						<ul class="l-recruit-footer-lower__list">
							<?php foreach ($array_nav as $item) : ?>
								<li class="l-recruit-footer-lower__item">
									<a href="<?php echo esc_url(home_url() . '/recruit/' . $item[1]); ?>" class="u-href-100"><?php echo $item[0]; ?></a>
									<span class="l-recruit-footer-lower__item-circle c-circle c-circle--xsmall">→</span>
								</li>
							<?php endforeach; ?>
						</ul>
					</nav>
					<div class="l-recruit-footer-lower__links">
						<a href="<?php echo esc_url(home_url() . '/guide'); ?>" target="_blank" class="l-recruit-footer-lower__link01">本サイトの利用について</a>
						|
						<a href="<?php echo esc_url(home_url() . '/privacy'); ?>" target="_blank" class="l-recruit-footer-lower__link02">プライバシーポリシー</a>
						|
						<a href="<?php echo esc_url(home_url() . '/recruit/contact'); ?>" class="l-recruit-footer-lower__link03">お問い合わせはこちら</a>
					</div>
					<div class="l-recruit-footer-lower__form">
						<form id="cse-search-box-2" action="/recruit/result">
							<input type="hidden" name="cx" value="017674238351621653715:dlyzexvor0k" />
							<input type="hidden" name="ie" value="UTF-8" />
							<input type="text" name="q" style="background: white;" />
							<input type="submit" name="sa" value="検索" />
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- スクロールトップ -->
		<div class="l-recruit-footer__scroll-top js-scroll-top">
			<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/common/cmn-scroll01.png'); ?>" alt="スクロールトップ">
		</div>

		<!-- コピーライト -->
		<small class="l-recruit-footer__copyright">© 採用サイト</small>
	</div>

	<!-- スマホ版 -->
	<div class="l-recruit-footer-sp">
		<div class="l-recruit-footer-sp__logo">
			<a href="<?php echo esc_url(home_url() . '/recruit'); ?>">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/common/cmn-logo01.png'); ?>" alt="ロゴ">
			</a>
		</div>
		<div class="l-recruit-footer-sp__links">
			<a href="<?php echo esc_url(home_url() . '/guide'); ?>" target="_blank">本サイトのご利用について</a>
			｜
			<a href="<?php echo esc_url(home_url() . '/privacy'); ?>" target="_blank">プライバシーポリシー</a>
			<span>｜</span>
			<br>
			<a href="<?php echo esc_url(home_url() . '/recruit/contact'); ?>">お問い合わせはこちら</a>
		</div>
		<small class="l-recruit-footer-sp__copyright">© 採用サイト</small>

		<ul class="l-recruit-footer-sp__btns js-footer-sp-btn">
			<?php for ($i = 0; $i < count($array_btn); $i++) :
				$item = $array_btn[$i];
				$num = $i + 1;
			?>
				<li class="l-recruit-footer-sp__btn0<?php echo $num; ?> l-recruit-footer-sp__btn--<?php echo $item[2]; ?>">
					<a href="<?php echo esc_url(home_url() . '/recruit/' . $item[1]); ?>" class="u-href-100"><span><?php echo $item[0]; ?></span></a>
				</li>
			<?php endfor; ?>
		</ul>
	</div>
</div>