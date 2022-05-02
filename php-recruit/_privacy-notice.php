<div class="c-privacy-notice">
	<?php
	global $post;
	$slug = $post->post_name;
	?>
	<p class="c-privacy-notice__txt">
		応募書類は当社にて適切に管理いたします。詳しくは、<a href="<?php echo esc_url(home_url() . '/privacy'); ?>" class="u-href-under">プライバシーポリシー</a>をご確認ください。
		<br>ご提出いただいた書類は、返却いたしかねますので予めご了承ください。
		<?php if ($slug == 'career') : ?>
			応募書類は郵送では受け付けておりませんので、上記ページより該当職種からエントリーください。追って担当者よりご連絡致します。
		<?php endif; ?>
	</p>
	<div class="c-privacy-notice__contact">
		<a href="<?php echo esc_url(home_url() . '/recruit/contact'); ?>" class="u-href-under">お問い合わせはこちら</a>
	</div>
</div>