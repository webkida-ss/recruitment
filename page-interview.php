<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-archive-interview">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- アーカイブトップ -->
		<?php get_template_part("php-recruit/_recruit-archive-top"); ?>

		<!-- メイン -->
		<div class="p-archive-interview__main c-inner u-page-bb">
			<?php
			$category_flg = get_field("interview_category_flg"); // カテゴリー分けフラグ

			// カテゴリー分けあり ======================================================================
			if ($category_flg) :
				$args = array(
					'orderby' => 'terms_id',
					'order' => 'DESC',
				);
				$terms = get_terms("occupation", $args); // 職種のタームを取得
				for ($i = 0; $i < count($terms); $i++) :
					$item = $terms[$i];
					$num = $i + 1;
					$name = $item->name;
					$slug = $item->slug;

			?>
					<div class="p-archive-interview__occupation u-page-bb is-display-sp">
						<?php

						$args = array(
							'post_type' => 'interview', // 投稿タイプ
							'posts_per_page' => 4, // 4件取得
							'tax_query' => array(
								array(
									'taxonomy' => 'occupation',
									'field' => 'slug',
									'terms' => $slug
								)
							)
						);
						$the_query = get_posts($args); // 投稿取得
						$add_class = "is-arch-int"; // archive-interview特定クラス
						?>
						<h2 class="u-page-title u-page-title--pink u-page-title--sp-small"><?php echo $name; ?></h2>
						<ul class="p-archive-interview__list">
							<?php if ($the_query) : ?>
								<?php foreach ($the_query as $post) :
									setup_postdata($post);
									$post_id = $post->ID;
								?>
									<li class="p-archive-interview__item">
										<div class="p-archive-interview-item c-person-item <?php echo $add_class; ?>">
											<a href="<?php the_permalink(); ?>" class="u-href-100">
												<div class="p-archive-interview-item__img c-person-item__img">
													<?php the_post_thumbnail() ?></div><!-- サムネイル -->
												<p class="c-person-item__year"><?php the_field("person_year"); ?>年入社</p><!-- 入社年度 -->
												<p class="c-person-item__occupation is-narrow"><?php echo esc_html(get_field("person_occupation")->name); ?></p><!-- 職種 -->
												<p class="c-person-item__belongs"><?php the_field("person_belongs"); ?></p><!-- 所属 -->
											</a>
										</div>
									</li>
								<?php endforeach; ?>
							<?php endif; ?>
							<?php wp_reset_postdata(); ?>
						</ul>
					</div><!-- /.p-archive-interview__occupation -->
				<?php endfor; ?>

			<?php // カテゴリー分けなし ======================================================================
			else : ?>
				<div class="p-archive-interview__occupation u-page-bb is-display-sp">
					<?php

					$args = array(
						'post_type' => 'interview', // 投稿タイプ
						'posts_per_page' => -1, // 全件取得
					);
					$the_query = get_posts($args); // 投稿取得
					$add_class = "is-arch-int"; // archive-interview特定クラス
					?>
					<ul class="p-archive-interview__list">
						<?php if ($the_query) : ?>
							<?php foreach ($the_query as $post) :
								setup_postdata($post);
								$post_id = $post->ID;
							?>
								<li class="p-archive-interview__item">
									<div class="p-archive-interview-item c-person-item <?php echo $add_class; ?>">
										<a href="<?php the_permalink(); ?>" class="u-href-100">
											<div class="p-archive-interview-item__img c-person-item__img">
												<?php the_post_thumbnail() ?></div><!-- サムネイル -->
											<p class="c-person-item__year"><?php the_field("person_year"); ?>年入社</p><!-- 入社年度 -->
											<p class="c-person-item__occupation is-narrow"><?php echo esc_html(get_field("person_occupation")->name); ?></p><!-- 職種 -->
											<p class="c-person-item__belongs"><?php the_field("person_belongs"); ?></p><!-- 所属 -->
										</a>
									</div>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>
					</ul>
				</div><!-- /.p-archive-interview__occupation -->




			<?php endif; ?>

			<div class="p-archive-interview__project">
				<a href="<?php echo esc_url(home_url() . '/recruit/person/project'); ?>" class="u-href-100">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/person/person-sec01-img02.png'); ?>" alt="プロジェクトストーリー">
				</a>
			</div>
		</div>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>

	<?php wp_footer(); ?>
</body>

</html>