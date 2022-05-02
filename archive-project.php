<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-archive-project">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- アーカイブトップ -->
		<?php get_template_part("php-recruit/_recruit-archive-top"); ?>

		<!-- メイン -->
		<div class="p-archive-project__main c-inner u-page-px u-page-py u-page-bb">
			<?php
			$args = array(
				'post_type' => 'project', // 投稿タイプ
				'posts_per_page' => 3, // 3件取得
			);
			$the_query = get_posts($args); // 投稿取得
			?>
			<div class="p-archive-project-main">
				<ul class="p-archive-project-main__list">
					<?php if ($the_query) : ?>
						<?php foreach ($the_query as $post) :
							setup_postdata($post);
							$post_id = $post->ID;
						?>
							<li class="p-archive-project-main__item">
								<a href="<?php the_permalink(); ?>">
									<div class="p-archive-project-main__content">
										<p class="p-archive-project-main__title">「<?php the_title(); ?>」</p>
										<p class="p-archive-project-main__sub-title"><?php the_field("project_sub_title"); ?></p>
										<p class="p-archive-project-main__txt"><?php the_field("project_msg"); ?></p>
									</div>
									<div class="p-archive-project-main__img"><?php the_post_thumbnail() ?></div>
								</a>
							</li>
						<?php endforeach; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</ul>
			</div>
		</div>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>

	<?php wp_footer(); ?>
</body>

</html>