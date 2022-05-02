<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-flow">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- 新卒採用トップ -->
		<?php get_template_part("php-recruit/_recruit-top"); ?>

		<!-- 新卒採用情報リンク一覧 -->
		<div class="c-inner u-page-px u-page-pt-80">
			<?php get_template_part("php-recruit/_recruit-link"); ?>
		</div>

		<section class="p-flow__main c-fade-in c-scroll-in">
			<div class="c-inner u-page-py u-page-px u-page-bb">
				<div class="p-flow__inner">
					<h2 class="u-page-title">選考の流れ</h2>
					<p class="p-flow__txt01">エントリーから内定までのおおまかな流れです。詳細につきましては、採用窓口までお問い合わせください。</p>
					<ul class="p-flow__list">
						<li class="p-flow__item p-flow-item">
							<div class="p-flow-item__circle">
								STEP<span class="p-flow-item__num">01</span>
							</div>
							<p class="p-flow-item__txt">ステップ1</p>
						</li>
						<li class="p-flow__item p-flow-item">
							<div class="p-flow-item__circle">
								STEP<span class="p-flow-item__num">02</span>
							</div>
							<p class="p-flow-item__txt">ステップ2</p>
						</li>
						<li class="p-flow__item p-flow-item">
							<div class="p-flow-item__circle">
								STEP<span class="p-flow-item__num">03</span>
							</div>
							<p class="p-flow-item__txt">ステップ3</p>
						</li>
						<li class="p-flow__item p-flow-item">
							<div class="p-flow-item__circle">
								STEP<span class="p-flow-item__num">04</span>
							</div>
							<p class="p-flow-item__txt">ステップ4</p>
						</li>
						<li class="p-flow__item p-flow-item">
							<div class="p-flow-item__circle">
								STEP<span class="p-flow-item__num">05</span>
							</div>
							<p class="p-flow-item__txt">ステップ5</p>
						</li>
						<li class="p-flow__item p-flow-item">
							<div class="p-flow-item__circle">
								STEP<span class="p-flow-item__num">06</span>
							</div>
							<p class="p-flow-item__txt">ステップ6</p>
						</li>
						<li class="p-flow__item p-flow-item">
							<div class="p-flow-item__circle">
								STEP<span class="p-flow-item__num">07</span>
							</div>
							<p class="p-flow-item__txt">ステップ7</p>
						</li>
					</ul>
					<p class="p-flow__decision">内定</p>
					<div class="p-flow__btn c-btn c-btn--blue">
						<a href="/recruit/information" class="u-page-100">一覧に戻る</a>
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