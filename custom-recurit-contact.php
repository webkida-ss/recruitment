<?php

/**
 * Template Name: 採用情報お問い合わせ
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-recruit-contact">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- お問い合わせトップ -->
		<?php get_template_part("php-recruit/_recruit-top"); ?>

		<section class="c-fade-in">
			<div class="u-page-pt">
				<div class="p-recruit-contact__inner c-inner u-page-px">
					<h2 class="u-page-title">お問い合わせフォーム</h2>
					<p class="p-recruit-contact__txt">
						プライバシーポリシーの内容に同意していただき、以下項目を入力の上「同意して次へ」をクリックしてください。
						<br>※日本以外の国からのお客様は、下記項目を英語表記でご記入ください。
					</p>
				</div>
				<div class="p-recruit-contact__form">
					<div class="c-inner u-page-px"><?php the_content(); ?></div>
				</div>
			</div>
		</section>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>

	<?php wp_footer(); ?>
</body>

</html>