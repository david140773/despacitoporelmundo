<?php
define( 'WP_CACHE', true );

// hey day
define( 'WP_POST_REVISIONS', 5 );
define( 'AUTOSAVE_INTERVAL', 160 );
    if(isset($_SERVER['HTTP_X_FORWARDED_PROTO'] )) {
      if (strpos( $_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
        $_SERVER['HTTPS']='on';
      }
    };
    define( 'WP_MEMORY_LIMIT', '128M' );
    define( 'WP_MAX_MEMORY_LIMIT', '256M' );
    define( 'FS_METHOD', 'direct');
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '432160_58ae91ab8e11996aaa97b9502918fca8' );
/** MySQL database username */
define( 'DB_USER', 'easywp_346959' );
/** MySQL database password */
define( 'DB_PASSWORD', 'lNLrcpVKOhqLHJVxoSjxjNj1aBsu2hbv1+w4ojHJFb8=' );
/** MySQL hostname */
define( 'DB_HOST', 'mariadb-cluster-3-db-primary.database.svc.cluster.local' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'D$FMM:N;j7^st9vRY^PHYaO2-Vr<OeT$6a.JrE!zuo}=WSBHkrOC?<1)!{Zb16L4' );
define( 'SECURE_AUTH_KEY',   'fa2~`,UNgO6?M vrr6h#r)$U{{7D)6,zoo(BZ}GQ^]rJ|ivf IBATMwFT_GzF}CQ' );
define( 'LOGGED_IN_KEY',     'JT;?9.3AU*+eJ%)Un(5eR(tR-!<R_.~ 345.{xXP}+UF}zq8/A<z1h+iANwADn<o' );
define( 'NONCE_KEY',         'O/98 f(*{i1W(c]4psCa$d8Eq9zD`kr?/]E65F7TIm9Xg&w-sV%_gFf3oR.<` Zk' );
define( 'AUTH_SALT',         'Zh!^&Lk 8h@J[dT_V$>~3[gZ(R-jznb9SaqOD[u= _mLdrNBpajfNwB6|Jf2+F{^' );
define( 'SECURE_AUTH_SALT',  'pT41-X@H-pDkYy<wXJ{TCk=)tA,jA.X3{:F$xPn)LZ5HZEtbJyx47NgUvS:rw|(n' );
define( 'LOGGED_IN_SALT',    'B,r015y<@jJ&B#L!<?^K>5>DS Y -XuCNd7*Fcm[,[`#CZW9Q4(,f23LzpONnvAT' );
define( 'NONCE_SALT',        'i7>m`%&y7Ip#]#DP[e5E:n^:bA<;#@{/=3faN8#NTr`K*!q^NVPlF*HqoJ^{=;jX' );
define( 'WP_CACHE_KEY_SALT', 'H{Z</:^pB#0ugi2E4jgeBK3ThatwSuMpQtbjKsC~/H/aKV3:jNSJI$<@FyZQ@b9$' );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
