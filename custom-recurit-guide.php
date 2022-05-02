<?php

/**
 * Template Name: 本サイトの利用について
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-guide">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<section class="c-inner u-page-py u-page-px">
			<h2><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
		</section>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>

	<?php wp_footer(); ?>
</body>

</html>