<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-qa">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- 新卒採用情報トップ -->
		<?php get_template_part("php-recruit/_recruit-top"); ?>

		<!-- 新卒採用情報リンク一覧 -->
		<div class="c-inner u-page-px u-page-pt-80">
			<?php get_template_part("php-recruit/_recruit-link"); ?>
		</div>

		<section class="c-fade-in">
			<div class="c-inner u-page-py u-page-px u-page-bb">
				<div class="p-qa__inner">

					<h2 class="u-page-title"><?php the_title(); ?></h2>
					<div class="p-qa__categories">
						<?php if (have_rows("qa_category")) :  ?>
							<?php while (have_rows("qa_category")) : the_row(); ?>
								<a href="#<?php the_sub_field("qa_category_id"); ?>"><span class="p-qa__triangle c-triangle"></span><?php the_sub_field("qa_category_name"); ?></a>
						<?php
							endwhile;
						endif; ?>
					</div>

					<?php if (have_rows("qa_category")) : ?>
						<?php while (have_rows("qa_category")) : the_row(); ?>
							<!-- カテゴリーごと -->
							<div class="p-qa__category">
								<p id="<?php the_sub_field("qa_category_id"); ?>" class="p-qa__head"><?php the_sub_field("qa_category_name"); ?></p>
								<!-- QA -->
								<ul class="p-qa__list">
									<?php if (have_rows("qa_category_list")) : ?>
										<?php while (have_rows("qa_category_list")) : the_row(); ?>
											<li class="p-qa__item p-qa-item">
												<div class="p-qa-item__question js-qa">
													<span class="p-qa-item__question-head">Q.</span>
													<p class="p-qa-item__question-txt"><?php the_sub_field("qa_category_list_q"); ?></p>
													<span class="p-qa-item__question-open js-qa-open"></span>
												</div>
												<div class="p-qa-item__answer js-qa-answer">
													<div class="p-qa-item__answer-inner">
														<span class="p-qa-item__answer-head">A.</span>
														<p class="p-qa-item__answer-txt"><?php the_sub_field("qa_category_list_a"); ?></p>
													</div>
												</div>
											</li>
									<?php
										endwhile;
									endif; ?>
								</ul>
							</div><!-- /.p-qa__category -->
					<?php
						endwhile;
					endif; ?>
				</div><!-- /.p-qa__inner -->

				<div class="p-qa__btn c-btn c-btn--blue">
					<a href="<?php echo esc_url(home_url() . "/recruit/contact/"); ?>" class="u-href-100">お問い合わせはこちらから</a>
				</div>

			</div>
		</section>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>

	<?php wp_footer(); ?>
</body>

</html>