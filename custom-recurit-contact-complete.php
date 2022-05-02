<?php

/**
 * Template Name: 採用情報お問い合わせ完了画面
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
				<div class="p-recruit-contact__inner c-inner u-page-px u-page-bb">
					<?php the_content(); ?>
				</div>
			</div>
		</section>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>

	<?php wp_footer(); ?>
</body>

</html>