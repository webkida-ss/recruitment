<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-single-interview">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<div>
			<div class="p-single-interview-top">
				<div class="p-single-interview-top__inner">
					<div class="c-inner">
						<div class="p-single-interview-top__main">
							<div class="p-single-interview-top__txt">
								<!-- テキスト -->
								<div class="p-single-interview-top__title">
									<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/common/cmn-bg-title01.gif'); ?>" alt="alt">
								</div>
								<div class="p-single-interview-top__top-msg">
									<p><?php the_field("person_top_msg"); ?></p>
								</div>
								<h1 class="p-single-interview-top__name"><?php the_title(); ?></h1>
								<p class="p-single-interview-top__other">
									<?php the_field("person_belongs"); ?>
									<br><?php the_field("person_year"); ?>年入社
									<br><?php the_field("person_major"); ?>
								</p>
							</div>
							<div class="p-single-interview-top__img">
								<div class="p-single-interview-top__img--inner"><?php the_post_thumbnail(); ?></div>
							</div><!-- 写真 -->
						</div><!-- /.p-single-interview-top__main -->
					</div><!-- /.c-inner -->
				</div><!-- /.p-single-interview-top__inner -->
				<!-- パンくずリスト -->
				<div class="p-single-interview-top__breadcrumb c-inner u-breadcrumb-font">
					<?php if (function_exists('bcn_display')) {
						bcn_display();
					}
					?>
				</div>
			</div><!-- /.p-single-interview-top -->
		</div>

		<!-- メイン -->
		<div class="p-single-interview__main c-inner c-fade-in">
			<?php
			$array_interview = [
				["入社経緯", "background", "入社した経緯はなんですか",  ""],
				["仕事内容", "content", "今の仕事内容を教えてください", "is-reverse"],
				["目標", "purpose", "今後の目標はなんですか？", ""],
			]
			?>
			<ul class="p-single-interview-main">
				<?php if (have_rows("person_topics")) : $counter = 1; ?>
					<?php while (have_rows("person_topics")) : the_row(); ?>
						<?php $add_class = ($counter % 2 == 0) ? "" : "is-reverse"; ?>
						<li class="p-single-interview-main__item c-fade-in">
							<div class="p-single-interview-main-item <?php echo $add_class; ?>">
								<!-- テキスト -->
								<div class="p-single-interview-main-item__txt <?php echo $add_class; ?>">
									<p class="p-single-interview-main-item__summary"><?php the_sub_field("person_topics_top"); ?></p>
									<p class="p-single-interview-main-item__title">Q. <?php the_sub_field("person_topics_question"); ?></p>
									<p class="p-single-interview-main-item__detail"><?php the_sub_field("person_topics_detail"); ?></p>
								</div>
								<!-- 画像 -->
								<div class="p-single-interview-main-item__img <?php echo $add_class; ?>>">
									<div class="p-single-interview-main-item__img--inner <?php $add_class; ?>">
										<img src="<?php the_sub_field("person_topics_img"); ?>" alt="<?php the_sub_field("person_topics_question"); ?>">
									</div>
								</div>
							</div>
						</li>
					<?php
						$counter++;
					endwhile; ?>
				<?php endif; ?>
			</ul>
		</div>

		<!-- 他のメンバーを見る -->
		<section class="p-single-interview__person c-fade-in">
			<div class="p-single-interview-person">
				<div class="c-inner">
					<div class="p-single-interview-person__inner">
						<h2 class="u-page-title u-page-title--pink">他のメンバーを見る</h2>
						<div class="p-single-interview-person__list"><?php get_template_part("php-recruit/_person-list"); ?></div>
					</div><!-- /.p-single-interview-person__inner -->
				</div>
			</div>
		</section>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>

	<?php wp_footer(); ?>
</body>

</html>