<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JS^%^zBFjUf2K<K,h:ofwMt6q1qZjifCd%N6X8D?:$UqlBSrI8~*F[00u(69*!yq' );
define( 'SECURE_AUTH_KEY',  '`D^=zKZG_k/2RaLG0/n4Frgc3e$x-){JbmA<|}X;wv0gz]ETT`1GNp,6tNYi;|aS' );
define( 'LOGGED_IN_KEY',    '/3|CHTULpi[6Pw3&?%%^#fXI&XG^^-B|ir7d1DQk*B?+_,K&bK#bj3dB/B&m^yld' );
define( 'NONCE_KEY',        'iJf=w?@Q!s`#UdSRD0-`M)/$2D?z~Rk:W*Hj]1n/lgnPQ{$[?Q~Y?frr*IED`B#G' );
define( 'AUTH_SALT',        'p#<keH%g/XFV<tpRTKs:c}|YjVW~!z&i[B.QHMH Td%z.P?le@Yn8%hk/Teu1N8W' );
define( 'SECURE_AUTH_SALT', 'umoetQtg{%[}ot+hI4*nqe~U;v_x1Y{vZrH{_Y${8$LWHS(i_5ftH |{F%pQHy3y' );
define( 'LOGGED_IN_SALT',   '@I.x>+L]Nbtyuj35AGFGTT}:]e1:;ugtsbF?@Re~z=,YCyd(:GnegO;VNlr6,J$;' );
define( 'NONCE_SALT',       'ZB]`o7|Wigk<g{4CAr#@~+M>t|=xTG: ^oi5*|_FS)@aF-%P( )y3g%><OWq%Tub' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
