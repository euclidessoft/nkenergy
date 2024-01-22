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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'nkenergie' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l^=oZ<x~EC-c{},6Z$T$k1oekDwUAH&NWG4!oQ;X6@Tl4JhSU|WH,P`0Vy&xf}#a' );
define( 'SECURE_AUTH_KEY',  '&WvY`A>4~>NIej~0$iay95-AQEUZ@ewA|:gH =Oq(P2{gc(J*rnrG~1YIIf(}^1 ' );
define( 'LOGGED_IN_KEY',    '(6Wsl%xZTqOYiB]_&]5>E0Q5jGu[-SVQUm}w7h{`F<Sxlxia~e/6Y<P<D>=g7I0m' );
define( 'NONCE_KEY',        'ua)41z,rXY/l$Coi9eWL~XKN;>j<->Wk/:l!,17e[hP+]G=5%v5nm2BD^`hF0eMt' );
define( 'AUTH_SALT',        'eG61*_b!b+whJ9) E~XY/0!jo&2&RN)IjYx,k)GTGMD<V<{3 0DM9$#+Qr2{%UPN' );
define( 'SECURE_AUTH_SALT', '$d5,M9#aOb>pI&X9Pir@rxe  ohC=3*;}&aNDz[AB*tGV2>%;i5BKloSek$ygwk3' );
define( 'LOGGED_IN_SALT',   'N`tVj=hP4a!*Q/=>b pOFy7#{rnf%Kb*6<0s/uRpItHJ2mTKb><31ahbp@72o)pw' );
define( 'NONCE_SALT',       'JD5eW3G^ZwctNnoUhy_f>f,]F#{?=x+=:o#)WreQ!kY?>`2qhx5@oF{tk.,4*].`' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
