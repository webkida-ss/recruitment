<div class="c-entry-link">
	<ul class="c-entry-link__list">
		<?php
		$array_upper_list = ["リクナビ", "マイナビ"];
		$array_link_list = ["#", "#"];
		for ($i = 0; $i < count($array_upper_list); $i++) :
			$item = $array_upper_list[$i];
			$item_link = $array_link_list[$i];
			$num = $i + 1;
		?>
			<li class="c-entry-link__item0<?php echo $num; ?>">
				<div class="c-entry-link__img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/entry-link/entry-link-sec01-img0' . $num . '.png'); ?>" alt="	<?php echo $item; ?>">
				</div>
				<a href="<?php echo $item_link; ?>" class="c-entry-link__link" target="_blank"><?php echo $item; ?>からエントリー</a>
			</li>
		<?php endfor; ?>
		<li class="c-entry-link__item03">
			<p class="c-entry-link__txt">リクナビ・マイナビに<br>登録されていない方はこちらから</p>
			<a href="#" class="c-entry-link__link">エントリー</a>
		</li>
	</ul>
</div>