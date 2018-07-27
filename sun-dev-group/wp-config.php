<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'sun');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Rb.{he|B-:6%!S2%s}Vs2_$.8{<e^%c`g4wjx8~Nc&uJyHg#<&B*n?fQN+/Y5Li`');
define('SECURE_AUTH_KEY',  '*>x5{*-KpndxoLfyxc%UDkK2DUM7F@T4p2NcNzVg2p2n~u76VKWtk,P[S;LhKdoR');
define('LOGGED_IN_KEY',    '4)Lq:qe)p|3VZm&&o367I(D&>s^haLq<L!_S_L4#.],#o^@tE`19*y?~?^CJ{66p');
define('NONCE_KEY',        'Hr_Jub*^[}d6i[NlC-A9GOestKY:#W`Pa1Zc$#D(ek!XT+UecH#MHc><Y`H{+iKj');
define('AUTH_SALT',        '6uQMy+6h_&ybCcC^zr0Yli5J`cTy MW|G<A]([1,zo@(K 5Hl)keLrcRSHxxT[3l');
define('SECURE_AUTH_SALT', 'o7SIK1R{_7DOyfeMB(:U0+#;_AmAgae1(gM/2-i-fC:;;yldk[hUK+y1E1OgJ=+l');
define('LOGGED_IN_SALT',   'T8~wlL+|t(P,K$Z-bic9s3OwVFo}_9:t9-zD^ScbdVD *u]>5<sRQZg;b23(j`g+');
define('NONCE_SALT',       ')W7rj<tHivtfz|>k6}[$8SeUE_;DDfv.pra529:t;*V1_F[sRlxnDV6Ic]XV!c._');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
