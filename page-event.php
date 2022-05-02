<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-event">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- 新卒採用トップ -->
		<?php get_template_part("php-recruit/_recruit-top"); ?>

		<!-- 新卒採用情報リンク一覧 -->
		<div class="c-inner u-page-px u-page-pt-80">
			<?php get_template_part("php-recruit/_recruit-link"); ?>
		</div>

		<!-- メインコンテンツ -->
		<section class="p-event__main c-fade-in">
			<?php
			$array_detail = [
				["実施時間", "10:00～18:00"],
				["実施場所", "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。"],
				["仕事", "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。"],
				["募集人数", "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。"],
				["資格・対象", "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。"],
				["交通費", "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。"],
			];
			?>
			<div class="c-inner u-page-px u-page-py u-page-bb">

				<h2 class="u-page-title"><?php the_title(); ?></h2>
				<p class="p-event__txt">
					この文章はダミーです。
					<span class="p-event__txt--lower">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</span>
				</p>

				<div class="p-event__course u-page-bb">
					<ul class="p-event-course">
						<?php if (have_rows("event_course")) : $counter = 1; ?>
							<?php while (have_rows("event_course")) : the_row(); ?>
								<li class="p-event-course__item">
									<div class="p-event-course__num">コース <?php echo $counter; ?></div>
									<p class="p-event-course__title"><?php the_sub_field("event_course_name"); ?></p>
									<div class="p-event-course__content">
										<dl class="p-event-course__schedule">
											<dt class="p-event-course__schedule-title">日程</dt>
											<dd class="p-event-course__schedule-date"><?php the_sub_field("event_course_schedule"); ?></dd>
										</dl>
										<p class="p-event-course__txt"><?php the_sub_field("event_course_desc"); ?></p>
									</div>
								</li>
						<?php
								$counter++;
							endwhile;
						endif; ?>
					</ul>
				</div>

				<div class="p-event__detail p-event-detail">
					<p class="p-event-detail__title">詳細情報（全コース共通）</p>
					<dl class="p-event-detail__list">
						<?php for ($i = 0; $i < count($array_detail); $i++) :
							$item = $array_detail[$i];
							$num = $i + 1;
						?>
							<div class="p-event-detail__item0<?php echo $num; ?>">
								<dt class="p-event-detail__item-title"><?php echo $item[0]; ?></dt>
								<dd class="p-event-detail__item-desc"><?php echo $item[1]; ?></dd>
							</div>
						<?php endfor; ?>
					</dl>
				</div>

				<div class="p-event__entry p-event-entry">
					<p class="p-event-entry__txt01">エントリーはこちら</p>
					<p class="p-event-entry__txt02">
						この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
					</p>
					<div class="p-event-entry__link">
						<?php get_template_part("php-recruit/_entry-link"); ?>
					</div>
				</div>

				<div class="p-event__main__btn c-btn c-btn--blue">
					<a href="<?php echo esc_url(home_url() . "/recruit/information"); ?>" class="u-href-100">一覧に戻る</a>
				</div>

			</div>

		</section>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>
	<?php wp_footer(); ?>
</body>

</html>