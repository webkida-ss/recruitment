<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-single-project">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- プロジェクトストーリートップ -->
		<div class="p-single-project__top">
			<div class="p-single-project-top">
				<div class="p-single-project-top__mv">
					<!-- サムネイル -->
					<div class="p-single-project-top__thumbnail">
						<img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>">
					</div>
					<!-- その他情報 -->
					<div class="p-single-project-top__content">
						<div class="p-single-project-top__inner c-inner">
							<!-- タイトル -->
							<h1 class="p-single-project-top__title">
								「<?php the_title(); ?>」
								<span class="p-single-project-top__title--sub"><?php the_field("project_sub_title"); ?></span>
							</h1>
						</div><!-- /.p-single-project-top__inenr.c-inner -->
					</div><!-- /.p-single-project-top__content -->
				</div><!-- /.p-single-project-top__mv -->
				<!-- パンくずリスト -->
				<div class="p-single-project-top__breadcrumb c-inner u-breadcrumb-font">
					<?php if (function_exists('bcn_display')) {
						bcn_display();
					}
					?>
				</div>
			</div><!-- /.p-single-project-top -->

		</div>

		<!-- メイン -->
		<div class="p-single-project__main c-inner u-page-px">
			<div class="p-single-project-main">
				<ul class="p-single-project-main__list">
					<?php if (have_rows("project_topics")) : ?>
						<?php while (have_rows("project_topics")) : the_row(); ?>
							<li class="p-single-project-main__item c-fade-in">
								<div class="p-single-project-main-item">
									<div class="p-single-project-main-item__img"><img src="<?php the_sub_field("project_topics_img"); ?>" alt="<?php echo str_replace("<br />", "", get_sub_field("project_topics_top")); ?>"></div>
									<p class="p-single-project-main-item__top"><?php the_sub_field("project_topics_top"); ?></p>
									<p class="p-single-project-main-item__detail"><?php the_sub_field("project_topics_detail"); ?></p>
								</div>
							</li>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
			<!-- /.p-single-project-main -->
		</div>

		<!-- 他のプロジェクト -->
		<section class="p-single-project__other c-fade-in">
			<?php
			$args = array(
				'post_type' => 'project', // 投稿タイプ：プロジェクトストーリー
				'posts_per_page'   => 2, // 2件取得
				'exclude'          => get_the_ID(), // 自分は除く
				'orderby'          => 'post_date', // 追加したものから表示
				'order'            => 'DESC',
			);
			$the_query = get_posts($args); // 投稿取得
			?>
			<div class="p-single-project-other c-inner u-page-px">
				<h2 class="u-page-title u-page-title--pink">
					他のプロジェクト<br class="u-display-only-sp">ストーリーを見る
				</h2>
				<ul class="p-single-project-other__list">
					<?php if ($the_query) : ?>
						<?php foreach ($the_query as $post) :
							setup_postdata($post);
						?>
							<li class="p-single-project-other__item">
								<a href="<?php the_permalink(); ?>" class="p-single-project-other-item u-href-100">
									<div class="p-single-project-other-item__thumbnail"><?php the_post_thumbnail(); ?></div>
									<p class="p-single-project-other-item__title">
										<?php the_title(); ?>
										<span class="p-single-project-other-item__title--sub"><?php the_field("project_sub_title"); ?></span>
									</p>
								</a>
							</li>
						<?php endforeach; ?>
					<?php endif; ?>
				</ul>
			</div>
			<?php wp_reset_postdata(); ?>
		</section>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>

	<?php wp_footer(); ?>
</body>

</html>