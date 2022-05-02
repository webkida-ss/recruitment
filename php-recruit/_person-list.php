<?php
$args = array(
	'post_type' => 'interview', // 投稿タイプ：
	'posts_per_page'   => -1, // 全件取得
);
$the_query = get_posts($args); // 投稿取得
?>

<ul class="c-person-list js-top-person-list">
	<?php if ($the_query) : ?>
		<?php foreach ($the_query as $post) :
			setup_postdata($post);
			$post_id = $post->ID;
		?>
			<li class="c-person-item">
				<a href="<?php the_permalink(); ?>" class="u-href-100">
					<div class="c-person-item__img"><?php the_post_thumbnail() ?></div><!-- サムネイル -->
					<p class="c-person-item__year"><?php the_field("person_year"); ?>年入社</p><!-- 入社年度 -->
					<p class="c-person-item__occupation"><?php echo esc_html(get_field("person_occupation")->name); ?></p><!-- 職種 -->
					<p class="c-person-item__belongs"><?php the_field("person_belongs"); ?></p><!-- 所属 -->
				</a>
			</li>
		<?php endforeach; ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</ul>