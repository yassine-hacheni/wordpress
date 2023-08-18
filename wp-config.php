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
define( 'DB_NAME', 'Shamash-IT' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'z)|.iB{)Fh<TKKxcL;2o89PMO-L-!_A-Cf>vPxGq-d|n%fg<KJ*4jU}?q,auy,nw' );
define( 'SECURE_AUTH_KEY',  '3$N#QgeZh632Gub;i8*8c&z.k[oV7vi)!+j)lJKg]H~%&#Gm69l0_c3O#>[7 W22' );
define( 'LOGGED_IN_KEY',    'p,}pw|&NKw+wiRYgnp71)>}&b<JwOP?^J[n>5C{JoLMRri#7=[^dmLM|?v2:{bFm' );
define( 'NONCE_KEY',        'yvkpf#].qal#L FR$Cl.jxt_2<86[O8Jg*.tG6*a:p;3*XHa`}(r>OM@|Y2*h}Cv' );
define( 'AUTH_SALT',        'ug!yF<)pShAr&6VW(wTi5q+BhM+8no#ENE(5NEn /}HfW9BAQ~0&$4Tte91y}5*4' );
define( 'SECURE_AUTH_SALT', ':l_Gx5w._$}nophgaZ}n 1.tw_Jo};p-V*q)s]sNMV#+^roR~LniJVDhTn]|r6aM' );
define( 'LOGGED_IN_SALT',   '>Mt>$n9q!9jvjLEHCC54X+l&kEkRo={^16s#bvDS q03JX7NzNd5WUy_A_> Pz?`' );
define( 'NONCE_SALT',       '5$~`/bIaH/$[ `KLQfvUM*sG4)g-{?>N:*|&z7yFT3ETQi+8yy7H3^@f7ui4a;Cp' );
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
