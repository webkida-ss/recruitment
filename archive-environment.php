<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-archive-enviroment">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- トップ -->
		<?php get_template_part("php-recruit/_recruit-top"); ?>

		<!-- メイン -->
		<section class="p-archive-environment__main c-inner u-page-pt u-page-px u-page-bb">
			<div class="p-archive-environment-main">
				<h2 class="u-page-title u-page-title--orange u-page-title--sp-small">働く環境について</h2>

				<p class="p-archive-environment-main__txt">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>

				<!-- 本社 -->
				<div class="p-archive-environment-main__headquarters">
					<a href="<?php echo esc_url(home_url() . "/recruit/environment/headquarters"); ?>" class="u-href-100">
						<span>本社</span>
						<img src="<?php echo esc_url(get_template_directory_uri() . "/images/recruit/archive-environment/archive-environment-sec01-img01.jpg") ?>" alt="本社">
					</a>
				</div>

				<!-- 支社 -->
				<div class="p-archive-environment-main__branch">
					<?php $array_branch = [
						["大阪支社", "osaka"],
						["福岡支社", "hukuoka"],
						["名古屋支社", "nagoya"],
					]; ?>
					<ul class="p-archive-environment-main-branch">
						<?php for ($i = 0; $i < count($array_branch); $i++) :
							$item = $array_branch[$i];
							$num = $i + 2;
						?>
							<li class="p-archive-environment-main-branch__item">
								<a href="<?php echo esc_url(home_url() . "/recruit/environment/" . $item[1]); ?>" class="p-archive-environment-main-branch-item u-href-100">
									<div class="p-archive-environment-main-branch-item__img">
										<img src="<?php echo esc_url(get_template_directory_uri() . "/images/recruit/archive-environment/archive-environment-sec01-img0" . ($num) . ".jpeg") ?>" alt="<?php echo $item[0]; ?>">
									</div>
									<div class="p-archive-environment-main-branch-item__content">
										<p class="p-archive-environment-main-branch-item__txt"><?php echo $item[0]; ?></p>
										<span class="p-archive-environment-main-branch-item__circle c-circle c-circle--orange c-circle--medium">→</span>
									</div>
								</a>
							</li>
						<?php endfor; ?>
					</ul>
				</div>



			</div><!-- /.p-archive-environment-main -->
		</section>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>

	<?php wp_footer(); ?>
</body>

</html>