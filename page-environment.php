<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-environment">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- トップ -->
		<?php get_template_part("php-recruit/_recruit-top"); ?>

		<section class="c-fade-in">
			<div class="c-inner u-page-py u-page-px u-page-bb">
				<div class="p-environment__inner">
					<h2 class="u-page-title"><?php the_title(); ?></h2>
				</div>
			</div>
		</section>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>

	<?php wp_footer(); ?>
</body>

</html>