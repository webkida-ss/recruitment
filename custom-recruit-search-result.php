<?php

/**
 * Template Name: 採用情報検索結果
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-recruit-result">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- トップ -->
		<section class="p-recruit-result__top">
			<div class="p-recruit-result-top">
				<div class="p-recruit-result-top__mv">
					<p class="p-recruit-result-top__inner c-inner"><?php the_title(); ?></p>
				</div>
			</div>
			<div class="p-recruit-result-top__breadcrumb c-inner u-breadcrumb-font">
				<?php
				if (function_exists('bcn_display')) {
					bcn_display();
				}
				?>
			</div>
		</section>

		<!-- 検索結果 -->
		<section class="p-recruit-result__main c-inner u-page-bb">
			<div class="p-recruit-result-main">
				<script>
					(function() {
						var cx = '017674238351621653715:dlyzexvor0k';
						var gcse = document.createElement('script');
						gcse.type = 'text/javascript';
						gcse.async = true;
						gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
							'//www.google.com/cse/cse.js?cx=' + cx;
						var s = document.getElementsByTagName('script')[0];
						s.parentNode.insertBefore(gcse, s);
					})();
				</script>
				<gcse:searchresults-only></gcse:searchresults-only>
			</div>
		</section>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>

	<?php wp_footer(); ?>
</body>

</html>