<?php
/**
 * �������� ��������� WordPress.
 *
 * ���� ���� �������� ��������� ���������: ��������� MySQL, ������� ������,
 * ��������� ����� � ABSPATH. �������������� ���������� ����� ����� �� ��������
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * �������. ��������� MySQL ����� ������ � �������-����������.
 *
 * ���� ���� ������������ �������� ��� �������� wp-config.php � �������� ���������.
 * ������������� ������������ ���-���������, ����� ����������� ���� ����
 * � ������ "wp-config.php" � ��������� �������� �������.
 *
 * @package WordPress
 */

// ** ��������� MySQL: ��� ���������� ����� �������� � ������ �������-���������� ** //
/** ��� ���� ������ ��� WordPress */
define('DB_NAME', 'wordpress');

/** ��� ������������ MySQL */
define('DB_USER', 'artur');

/** ������ � ���� ������ MySQL */
define('DB_PASSWORD', 'qswaed');

/** ��� ������� MySQL */
define('DB_HOST', 'https://194.28.85.153/manager/ispmgr');

/** ��������� ���� ������ ��� �������� ������. */
define('DB_CHARSET', 'utf8');

/** ����� �������������. �� �������, ���� �� �������. */
define('DB_COLLATE', '');

/**#@+
 * ���������� ����� � ���� ��� ��������������.
 *
 * ������� �������� ������ ��������� �� ���������� �����.
 * ����� ������������� �� � ������� {@link https://api.wordpress.org/secret-key/1.1/salt/ ������� ������ �� WordPress.org}
 * ����� �������� ��, ����� ������� ������������ ����� cookies �����������������. ������������� ����������� �������������� �����.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-+_qx5A[IOrx{=,F+i9sUo0-~Y[YS,G[4_(knVinNZ,&iR|G&D7E?R`uo;u+m.nx');
define('SECURE_AUTH_KEY',  '64-krhqvV`lzhjZg-beDWA!mvMXk8+qnU J$<M4Sm|-#xE+yPE?d- qi%S&8vdf$');
define('LOGGED_IN_KEY',    'tc*@IQ-B`B}njnhjO,kyp0xo)}(3x4OG;<}CQ%08:wZntp@&C2i9T-y!-4f?%2-5');
define('NONCE_KEY',        'TMxKIH6|tS5S+4HNZ3%)w!#4R&XE<VW+2:@<26;pGB*s|vt6f]?nQ51-i0ig$}(h');
define('AUTH_SALT',        '$[m>mGm3iK}Z/QUNL|c$KJ40(:4qm}NKJ#I3;Nd|mz~&m[/9%us!|8Pqfz9AW{;!');
define('SECURE_AUTH_SALT', '^DI=PvaL.ATm}5%YI2WAIt#_~ET4nf+6b!=K{&Lj)9-Eu.LZ^:Ea=klj6l8HCDiV');
define('LOGGED_IN_SALT',   'ON@Y:K<#*29DOG`:%x^PX7|K5`5s0gJ($~Wi^qi_}~&C5499C<k)-=CWVyokp.YP');
define('NONCE_SALT',       'm:*4S7PRQieidKFrX(P0=INrX)_|y|/zP1$nhmMxZ*^iS%FruCm_Uph>ww!s!jGl');

/**#@-*/

/**
 * ������� ������ � ���� ������ WordPress.
 *
 * ����� ���������� ��������� ������ � ���� ���� ������, ���� ������������
 * ������ ��������. ����������, ���������� ������ �����, ����� � ���� �������������.
 */
$table_prefix  = 'wp_';

/**
 * ��� �������������: ����� ������� WordPress.
 *
 * �������� ��� �������� �� true, ����� �������� ����������� ����������� ��� ����������.
 * ������������� �������� � ��� ������������ ������������� ������������ WP_DEBUG
 * � ���� ������� ���������.
 */
define('WP_DEBUG', false);

/* ��� ��, ������ �� �����������. �������! */

/** ���������� ���� � ���������� WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** �������������� ���������� WordPress � ���������� �����. */
require_once(ABSPATH . 'wp-settings.php');