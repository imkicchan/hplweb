<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'kikuchi');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jn%k89o+pGXXx1P5^[-7lF%+%(cbjE:b.%&Te;jh$2,c-ZEpkE)g3JA{&,twTClZ');
define('SECURE_AUTH_KEY',  '&SDT<_B-pWc0E6!{}:ZxE[qn!*J:6fJ=?PG|D}OOXG8U={F)6$p[_:7V(~[=.y^G');
define('LOGGED_IN_KEY',    'bE35m[$l@^8r=kTlbu?Ss?oN{_X%z@B Dy]0@a9NSWLj;DC3mmw]59b/9,k_2RYQ');
define('NONCE_KEY',        'dx>2CK]rM%YPYKVvI0zVw]7;e46>E<-zJ5[7.FC]EZv!}3El@Y%2-}hgxm8dE!0k');
define('AUTH_SALT',        'cW0G.Lx>M1Ifn->> _<&f}]o>9C.Ai*DHq{Rv<rL#pGOZ;v1O/Zsw&/#]dZ/+OgU');
define('SECURE_AUTH_SALT', 'dQc!_{`HMsVZ3(&yG3c-z#b#4eE{4e_ wN#G:W!Agt~422W[eU4cA?.fC(!O<_5R');
define('LOGGED_IN_SALT',   'mUMaBTby.wt}U6L4)j2Cm10eNkW+4Vp:/Orx(>E;hsHLQXw2yy!,:KCP!;Q(!l_4');
define('NONCE_SALT',       'u*e;YSb*iaq_Pb9IUT/vDUDAL5KI#[8g(kVagbq,yb(XC<Z}*hKpa<QcM.K:!!~,');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

