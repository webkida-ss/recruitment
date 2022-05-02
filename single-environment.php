<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-single-enviroment">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- トップ -->
		<section class="p-single-environment__top">
			<div class="p-single-environment-top">
				<div class="p-single-environment-top__mv">
					<img src="<?php echo esc_url(get_field("environment_top")["environment_top_pc"]); ?>" alt="<?php the_title(); ?>">
					<h1 class="p-single-environment-top__title"><?php the_title(); ?></h1>
				</div>
				<div class="p-single-environment-top__breadcrumb c-inner u-breadcrumb-font">
					<?php
					if (function_exists('bcn_display')) {
						bcn_display();
					}
					?>
				</div>
			</div>
		</section>


		<!-- メイン -->
		<section class="p-single-environment__main c-inner u-page-px">
			<?php $main = get_field("environment_main"); ?>
			<div class="p-single-environment-main">
				<h2 class="p-single-environment-main__title u-page-title u-page-title--orange u-page-title--sp-small"><?php the_title(); ?>について</h2>
				<div class="p-single-environment-main__mv">
					<img src="<?php echo esc_url($main["environment_main_img_pc"]); ?>" alt="<?php the_title(); ?>" class="u-display-only-pc">
				</div>
				<div class="p-single-environment-main__msg"><?php echo $main["environment_main_msg"]; ?></div>
				<div class="p-single-environment-main__content">
					<div class="p-single-environment-main__map">
						<div class="p-single-environment-main__map--inner">
							<iframe src="https://maps.google.co.jp/maps?output=embed&z=16&q=<?php echo esc_html($main["environment_main_address"]); ?>"></iframe>
						</div>
					</div>
					<dl class="p-single-environment-main__detail">
						<div class="p-single-environment-main__address">
							<dt>所在地・アクセス</dt>
							<dd>
								〒<?php echo esc_html($main["environment_main_postal"]); ?>
								<br><span><?php echo esc_html($main["environment_main_address"]); ?></span>
								<br><span>TEL: <?php echo esc_html($main["environment_main_tel"]); ?></span>
							</dd>
						</div>
						<?php
						$product = $main["environment_main_product"];
						if ($product) :
						?>
							<div class="p-single-environment-main__product">
								<dt>この工場の主な生産品目</dt>
								<dd><?php echo esc_html($main["environment_main_product"]); ?></dd>
							</div>
						<?php endif; ?>
					</dl>
				</div><!-- /.p-single-environment-main__content -->
			</div><!-- /.p-single-environment-main -->
		</section>


		<!-- 特徴 -->
		<section class="p-single-environment__feature">
			<div class="p-single-environment-feature c-inner u-page-px">
				<h2 class="p-single-environment-feature__title u-page-title u-page-title--orange u-page-title--sp-small">特徴</h2>
				<ul class="p-single-environment-feature__list">
					<?php if (have_rows("environment_feature")) :  $counter = 1; ?>
						<?php while (have_rows("environment_feature")) : the_row(); ?>
							<li class="p-single-environment-feature__item">
								<div class="p-single-environment-feature-item">
									<div class="p-single-environment-feature-item__img is-0<?php echo $counter; ?>">
										<div class="p-single-environment-feature-item__img--inner">
											<img src="<?php the_sub_field("environment_feature_img"); ?>" alt="<?php the_sub_field("environment_feature_name"); ?>">
										</div>
									</div>
									<p class="p-single-environment-feature-item__name"><?php the_sub_field("environment_feature_name"); ?></p>
									<p class="p-single-environment-feature-item__desc"><?php the_sub_field("environment_feature_desc"); ?></p>
								</div>
							</li>
					<?php
							$counter++;
						endwhile;
					endif; ?>
				</ul><!-- /.p-single-environment-list -->
			</div><!-- /.p-single-environment-feature -->
		</section>


		<!-- 暮らし -->
		<section class="p-single-environment__life">
			<?php $life = get_field("environment_life"); ?>
			<div class="p-single-environment-life c-inner u-page-px">
				<h2 class="p-single-environment-life__title u-page-title u-page-title--orange u-page-title--sp-small"><?php echo $life["environment_life_city"]; ?>での暮らし</h2>
				<p class="p-single-environment-life__msg"><?php echo $life["environment_life_msg"]; ?></p>
				<?php
				$speciality = $life["environment_life_specialty"];
				if ($speciality) :
				?>
					<dl class="p-single-environment-life__speciality">
						<dt>名産・特産品</dt>
						<dd><?php echo $speciality; ?></dd>
					</dl>
				<?php endif; ?>
			</div><!-- /.p-single-environment-life -->
		</section>

		<!-- 近隣のスポット -->
		<section class="p-single-environment__spot">
			<div class="p-single-environment-spot c-inner u-page-px">
				<h2 class="p-single-environment-spot__title u-page-title u-page-title--orange u-page-title--sp-small">近隣のスポット</h2>
				<ul class="p-single-environment-spot__list">
					<?php if (have_rows("environment_spot")) :  ?>
						<?php while (have_rows("environment_spot")) : the_row(); ?>
							<li class="p-single-environment-spot__item">
								<div class="p-single-environment-spot__img">
									<img src="<?php the_sub_field("environment_spot_img"); ?>" alt="<?php the_sub_field("environment_spot_name"); ?>">
								</div>
								<p class="p-single-environment-spot__name"><?php the_sub_field("environment_spot_name"); ?></p>
								<p class="p-single-environment-spot__desc"><?php the_sub_field("environment_spot_desc"); ?></p>
							</li>
					<?php
						endwhile;
					endif; ?>
				</ul>
			</div><!-- /.p-single-environment-spot -->
		</section>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>

	<?php wp_footer(); ?>
</body>

</html>