<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<gQI_x@MT[~xdKtmnf{80Kcwv=f:S4T84|,]WfDg$.csp*TCEDFF571OgC(p&HEg' );
define( 'SECURE_AUTH_KEY',  'IyoH,FPT9WSPg<X:S.kkNnWP!U*>p>Eey<&!mlxtns o.?WDj^$DQ*k.;;Simef,' );
define( 'LOGGED_IN_KEY',    'Aap-ENG55n/>_d[&C3I{(;em{9+|G(5QlpICzi$Tx>~ZRpj:S%.A:*Fv*u[ik}Ak' );
define( 'NONCE_KEY',        'Ai>Dj?CITB[mQ;CR|~+Z)/WehMLy] p8a8,<YOx/qj[K/ZGP!:t,F?-.mm#(gPMm' );
define( 'AUTH_SALT',        '?E+|>]F>;C]|{?Z$qxo@`UlU?%Dr]3#5/bPZx[t=PB*!O|$OeS1sf&[l%)/WLfoP' );
define( 'SECURE_AUTH_SALT', '6 u!Y|g|G}mMs2>zcJE1VR0Y>pD2TA;^?c:dL;s{14 }d+IWs_P1:6>Cf}4=?*|H' );
define( 'LOGGED_IN_SALT',   '+,.K%dvfS3YgpMyHK-W@`E&5w#<lY33N{<3O[WWzTFJ1!IPp)z-2Oem5Va{XP}4$' );
define( 'NONCE_SALT',       'X3@?I5?m3fT3Yb8>Sl~ei61f=v}/h]${s=[^^i#PGFqca@;>6g!^%>DkrU7fU(`b' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
