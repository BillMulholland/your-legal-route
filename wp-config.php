<?php
# Database Configuration
define( 'DB_NAME', 'snapshot_yourlegalroute' );
define( 'DB_USER', 'yourlegalroute' );
define( 'DB_PASSWORD', 'Y7V7lBFCW7pVq8P5xLt3' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '*R[<jJq)^!oPhr8R+R%ZlS}*1?!]BdFF=-qD/ZIiLx(BkS7v<Z}bL;aoWO;-mPd3');
define('SECURE_AUTH_KEY',  'B-;`PMh5ZeuQ-+<-Fk-2FUuDa2<Bul>r4Uq=A}m&X2h5|Rn}8R{d^p->N,ycQW+O');
define('LOGGED_IN_KEY',    'N5a`b<]#Ak:gJm;Pj9$h.7:xs,7z}m83PF$I=+&&=z4;R yt&iFJ?6T#!(MYrq:E');
define('NONCE_KEY',        'qQL&|]JiLdpCbV @U8IN+/z~>~0H+WeL3|M^?CGZX <_`xrq3O50TKB%+dUsp^Hr');
define('AUTH_SALT',        'n|Yu]J%$*E]:eK|P(aE?NAJo^v7<0N8vE|r3sUHlw69`,*O>s|/h0&fjTFRBT@!3');
define('SECURE_AUTH_SALT', '|V-]{ouZk92,LKEW.xx+Q3lPd+SZ`zoP2c=ucLS}~r%Ud`4/h_wCn_0w~v|(*#y9');
define('LOGGED_IN_SALT',   'D4a`Uy?dd>Sh2$>s|^>?KX/A}74@HKQNj3;dXr[SwlnXBTs><-!x(P9rJ&[vp$+L');
define('NONCE_SALT',       'fhvz+3R}v7MOUNo.{Ei_*!}.U~Gl&Z{7ZjM7#gh:=aH _hQ)}NU<|#s@BH,Duzmo');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'yourlegalroute' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '600043901f068269b6dacadf3f81292b08369279' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '40555' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '178.79.173.81' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'www.yourlegalroute.co.uk', 1 => 'yourlegalroute.wpengine.com', 2 => 'yourlegalroute.co.uk', );

$wpe_varnish_servers=array ( 0 => 'pod-40555', );

$wpe_special_ips=array ( 0 => '178.79.173.81', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );

//define( 'WP_SITEURL', 'http://yourlegalroute.staging.wpengine.com' );

//define( 'WP_HOME', 'http://yourlegalroute.staging.wpengine.com' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
