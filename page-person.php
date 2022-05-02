<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-person">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- トップ -->
		<?php get_template_part("php-recruit/_recruit-top"); ?>

		<div class="c-fade-in">
			<div class="c-inner u-page-py u-page-px u-page-bb">
				<div class="p-person__inner">
					<div class="p-person__img01">
						<a href="/recruit/person/interview/" class="u-href-100">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/person/person-sec01-img01.png'); ?>" alt="alt">
						</a>
					</div>
				</div>
				<div class="p-person__img02">
					<a href="/recruit/person/project/" class="u-href-100">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/person/person-sec01-img02.png'); ?>" alt="alt">
					</a>
				</div>
			</div>
		</div>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>

	<?php wp_footer(); ?>
</body>

</html>