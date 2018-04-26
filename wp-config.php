<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'upcrea');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '.|R)[n|mY9sWwoy+-LtBtxXGMhL23#%: hSB[)`0aqSqgtqb;1RNthM!BzRgPO<[');
define('SECURE_AUTH_KEY',  'ayI2J@rG:n}fYWfbvvt[tvwO-jK>&H[0c3SpaV!ZFh=m2=.RZtSDimPgre}Vx<B^');
define('LOGGED_IN_KEY',    'AQc^@^8Gni.h|WN-KQyR`~?{%7CLV=,@i=j9sY?_;SvY2[s9f=gk&_m>{[&(*JW5');
define('NONCE_KEY',        'H(:i=,@y:b,bi]7xrB~>%)<I&nyI|;amTt7bm4/))y-qZ9otnBlVEIrQUeDf@28i');
define('AUTH_SALT',        ' ^V1ce38e_3~}>*{%:5nb&]V9aJ0Ie?:G*FqeOKYj!-4);-9?m;)>?8thfJY>aA7');
define('SECURE_AUTH_SALT', 'Fnv6i(0,>m@J1?$=ab<f;,e;+T(g`%2oqqd 4%[L1^,G3d4>l.T:;JMSj3xZ?`4l');
define('LOGGED_IN_SALT',   ')NLRZNt:WG(ZR,fLY@{qxAdW1yKzt@3Gg+DfRI/7QjjicI&Ik+ htih;2/ZZ?ClN');
define('NONCE_SALT',       'xY>Z=K|WmExKZX*lOlfw<`!KSlE>|cUm>/Zv*hzG+z._.57vZ,)_9.15,rACL^F9');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');