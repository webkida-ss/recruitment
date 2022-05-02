<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-description">
		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- 新卒採用情報トップ -->
		<?php get_template_part("php-recruit/_recruit-top"); ?>

		<!-- 新卒採用情報リンク一覧 -->
		<div class="c-inner u-page-px u-page-pt-80">
			<?php get_template_part("php-recruit/_recruit-link"); ?>
		</div>

		<section class="">
			<div class="c-inner u-page-py u-page-px u-page-bb">
				<div class="p-description__inner">
					<h2 class="u-page-title">募集要項</h2>

					<div class="p-description__links">
						<?php if (have_rows("description")) :  ?>
							<?php while (have_rows("description")) : the_row(); ?>
								<p><span class="p-description__triangle c-triangle"></span><a href="#<?php the_sub_field("description_id"); ?>"><?php the_sub_field("description_literary"); ?>の学生の皆様へ</a></p>
						<?php
							endwhile;
						endif; ?>
					</div>

					<?php if (have_rows("description")) :  ?>
						<?php while (have_rows("description")) : the_row(); ?>
							<div class="p-description__item" id="<?php the_sub_field("description_id"); ?>">
								<p class="p-description__title"><?php the_sub_field("description_literary"); ?>の学生の皆様へ（2023年3月卒業見込の方）</p>
								<div class="p-description-table">
									<!-- メイン -->
									<div class="p-description-table__main">
										<div class="p-description-table-main">
											<?php if (have_rows("description_main")) : ?>
												<dl class="p-description-table-main__list">
													<?php while (have_rows("description_main")) : the_row(); ?>
														<div class="p-description-table-main__item">
															<dt><span><?php the_sub_field("description_main_title"); ?></span></dt>
															<dd><?php the_sub_field("description_main_desc"); ?></dd>
														</div>
													<?php endwhile; ?>
												</dl>
											<?php endif; ?>
										</div>
									</div><!-- /.p-description-table__main -->
									<!-- サブ -->
									<div class="p-description-table__sub">
										<div class="p-description-table-sub">
											<div class="p-description-table-sub__treatment"><span>待遇</span></div>
											<?php if (have_rows("description_sub")) : ?>
												<dl class="p-description-table-sub__list">
													<?php while (have_rows("description_sub")) : the_row(); ?>
														<div class="p-description-table-sub__item">
															<dt><span><?php the_sub_field("description_sub_title"); ?></span></dt>
															<dd><?php the_sub_field("description_sub_desc"); ?></dd>
														</div>
													<?php endwhile; ?>
												</dl>
											<?php endif; ?>
										</div>
									</div><!-- /.p-description-table__sub -->
								</div><!-- /.p-description-table -->
							</div><!-- /.p-description__item -->
					<?php
						endwhile;
					endif; ?>
					<div class="p-description__notice">
						<?php get_template_part("php-recruit/_privacy-notice"); ?>
					</div>
				</div>
			</div>
		</section>
		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>
	<?php wp_footer(); ?>
</body>

</html>