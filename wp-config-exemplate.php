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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpcurso' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '9epq|@5eWp|eu!ACL=y;3Nz+wO%)(E8{GM+1aoqZpb{{X $gPqUR{{|owM6a[~6,' );
define( 'SECURE_AUTH_KEY',  '5qjo{h,M;5_/gi!EM[f8paoUS)d79onqnr@P1tJJ*OOt HK_v<Q$r]H@ 4j35_s+' );
define( 'LOGGED_IN_KEY',    'EX_NugIyDFm7U4Nf7u$]eS#(p`KdU@#jnS1mM/GGi~y_:EFV}&z^!@il@MqwAvU0' );
define( 'NONCE_KEY',        '2}vV<wXI,%&JaP_kWOm/OO>}vo@5OaRusL>uXexlD6q5>D;jXz(Aam4MI5}Ynb,Q' );
define( 'AUTH_SALT',        '8rCwu?$e-p$)gW*X~E{kk1Vt%VK=M|UP|HTq<OBsS!/ y%JE+>TsnPbQA/bogctQ' );
define( 'SECURE_AUTH_SALT', 'NH67o?m:5P{RRE=OM~E9:[QX/fAxSlEX1QHJwYUahn?W]*ml${iN]R$9CE7YP&TS' );
define( 'LOGGED_IN_SALT',   'l7K<?B7@V!&W;.<xb;u`&zJzL3PhyD{ 4cV`/T*rTexH;/R/!r&B!L{mBz@|j`[9' );
define( 'NONCE_SALT',       '=Iu2bFjeZYqX2h6<T1R{XRy)ZYm:a[GsLSP]yw<OH5y%@p>`o3 |q3R!3[sEXO%2' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpc_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
const WP_DEBUG           = true;
const DISALLOW_FILE_EDIT = true; // Desativa edicao de arquivos do tema e plugins
const DISALLOW_FILE_MODS = true; // Desativa o gerenciamento de plugins
/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
