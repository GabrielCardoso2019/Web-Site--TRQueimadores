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
define( 'DB_NAME', 'bdTRqueimadores' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
//define( 'DB_HOST', 'localhost' );
define( 'DB_HOST', '127.0.0.1' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'H(q~AS;m03~Q:z9}NbE+N,pIa>[/jH4/5Ylr&N]KF.cPWr:ZES]m#eb_Te(hZ7-]' );
define( 'SECURE_AUTH_KEY',  'l#c10DdRF)+2Bw4Mg.D#qzP^pDMw`CR[;9,F_LK}CuDR I0VM5Kv{zHcbXa%>_o,' );
define( 'LOGGED_IN_KEY',    '_Bm3v>TIDez@S)({B0v^zXQluST21j^-}J[1{51!Dl=MQ%XnA?V*}&^QJ0B<D-aS' );
define( 'NONCE_KEY',        '/qXg0#+BI5jpo,br1,n_kOJTzSU%&,XYXGFvLpeo6];-r`/>N/Z~)q/o?QZQc%w^' );
define( 'AUTH_SALT',        'Es+G R`gaN/Pom&7e!jJf+@r=},|LFqS[D_tqqA=;9a8t8F`d1(>{|P }W4MSs`#' );
define( 'SECURE_AUTH_SALT', ' `hVbS[*p]H+/ViD0TJw?w?luc0hTGeG5{!]o>Fj,>lQ`@z=ZNg~`WP!#ARt1&=I' );
define( 'LOGGED_IN_SALT',   '*_[os,Pj3H?1Iz)fo)Z5HZH-c%Jg|BcrDM&4*PkPP<<RYNR%[}6HnH@e[BbZ`#m7' );
define( 'NONCE_SALT',       'Hn(urc)DWf2&tb^X4v.:DrN.,Sk(~j#X1YIj~lbJ>fh]z}Gjeu^b]vkP>HP6a_rW' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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

define('WP_ALLOW_MULTISITE', true);

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
