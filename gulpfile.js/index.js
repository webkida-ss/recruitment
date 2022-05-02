// 変数宣言
const {
	src, // gulpからsrcをインポート
	dest, // gulpからdistをインポート
	parallel, // gulpからparallelをインポート
	watch, // gulpからwatchをインポート
} = require('gulp');
const $ = require('./modules.js'); // 分離したmodulesをインポート
const uglify = $.composer($.uglifyes, $.composer); // JS圧縮

// パス
const path = {
	src: './src', // 編集先
	dist: '.', // 出力先(rootディレクトリ)
};

// PHP =====================================================================================
function php() {
	return src([`./**/*.php`]) // 対象phpファイル
		.pipe(
			$.browserSync.reload({ // ブラウザ即時反映
				stream: true,
				once: true,
			})
		);
}

// scss ====================================================================================
function scss() {
	// 設定
	const output_style = {
		outputStyle: 'expanded'
	}; // 出力形式
	const browser_list = {
		overrideBrowserslist: ["last 2 versions", "ie >= 11"]
	}; // ベンダープレフィックス

	return src(`${path.src}/scss/*.scss`) // 対象scssファイル
		.pipe(
			$.plumber({ // エラーをデスクトップ通知
				errorHandler: $.notify.onError('Error: <%= error.message %>'),
			})
		)
		.pipe($.sourcemaps.init())
		.pipe($.sass(output_style))
		.pipe($.postcss([
			$.mqpacker(),
			$.autoprefixer(browser_list) // ベンダープレフィックス
		]))
		.pipe($.csscomb())
		// .pipe($.autoprefixer()) // ベンダープレフィックス
		.pipe($.sourcemaps.write()) // ソースマップ
		.pipe(dest(`${path.dist}/css`)) // 出力先
		// .pipe(
		// 	$.rename({
		// 		suffix: '.min', // サフィックスをつけてリネーム
		// 	})
		// )
		.pipe($.minifyCSS()) // CSS minify化
		.pipe(dest(`${path.dist}/css`))
		.pipe(
			$.browserSync.reload({
				stream: true,
				once: true,
			})
		);
}
// css：minify化なし
function css() {
	return src(`${path.src}/css/*.css`) // 対象cssファイル
		.pipe(dest(`${path.dist}/css/lib`)); // 出力先
}

// JavaScript =============================================================================
function js() {
	// return src(`${path.src}/js/**/*.js`, {
	return src(`${path.src}/js/common.js`, { // ライブラリはminify化しない(個別に読み込み)
			sourcemaps: true
		})
		.pipe(
			$.plumber({
				errorHandler: $.notify.onError('Error: <%= error.message %>'),
			})
		)
		.pipe(uglify({
			output: {
				comments: /^!/
			}
		}))
		.pipe(
			$.concat('common.js', {
				newLine: '\n',
			})
		)
		.pipe(dest(`${path.dist}/js`, {
			sourcemaps: true
		}))
		.pipe(
			$.browserSync.reload({
				stream: true,
				once: true,
			})
		);
}
// jsライブラリ：minify化なし
function js_library() {
	return src(`${path.src}/js/lib/*.js`)
		.pipe(dest(`${path.dist}/js/lib`));
}

// 画像 =====================================================================================
function img() {
	return src([ // 対象img
			`${path.src}/images/**/**`
		])
		.pipe($.changed(`${path.dist}/images/`)) // 変更されたファイルのみ
		.pipe(
			$.imagemin({
				optimizationLevel: 1, // 圧縮率（圧縮率を高めすぎると劣化する）
			})
		)
		.pipe(dest(`${path.dist}/images/`)); // 出力先
}

// BrowserSync ============================================================================
function bs() {
	$.browserSync.init({
		// server: {
		// 	baseDir: path.dist,
		// },
		proxy: 'http://recruitment.local/', // Local by Flywheelのドメイン
		notify: true,
		xip: false,
	});
}


// ========================================================================================
// タスクの定義
exports.php = php;
exports.scss = scss; // gulp scss
exports.css = css;
exports.js = js;
exports.js_library = js_library;
exports.bs = bs;
exports.img = img;

// デフォルト
exports.default = parallel([scss, img, bs], () => {
	watch(`${path.src}/scss/**`, scss);
	watch(`${path.src}/images/**`, img);
});

// WP版
exports.wp = parallel([php, scss, css, js, js_library, img, bs], () => {
	watch(`./**/*.php`, php);
	watch(`${path.src}/scss/**`, scss);
	watch(`${path.src}/css/**`, css);
	watch(`${path.src}/js/**`, js);
	watch(`${path.src}/js/**`, js_library);
	watch(`${path.src}/images/**`, img);
});