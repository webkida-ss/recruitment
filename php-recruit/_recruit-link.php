<!-- 新卒採用情報リンク一覧 -->
<ul class="c-recruit-link">
	<?php
	global $post;
	$slug = $post->post_name;
	$array_link = [
		["選考の流れ", "flow"],
		["研修制度", "training"],
		["キャリアステップ", "career_path"],
		["新卒向けイベント", "event"],
		["募集要項", "description"],
		["よくある質問", "qa"],
	];
	for ($i = 0; $i < count($array_link); $i++) :
		$item = $array_link[$i];
		$num = $i + 1;
		$color_class = ($slug == $item[1]) ? "c-btn--blue" : "c-btn--white-blue";
	?>
		<li class="c-recruit-link__btn c-btn <?php echo $color_class; ?>">
			<a href="<?php echo esc_url(home_url() . "/recruit/information/" . $item[1]); ?>" class="u-href-100">
				<span><?php echo $item[0]; ?></span></a>
		</li>
	<?php endfor; ?>

</ul>