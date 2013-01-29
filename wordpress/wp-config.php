<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'WPayrole');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9DSB#<d(D)TBZY6Jo,_,jgxfH_x;(6^fb@1BuW *n[e1B&&^L)JbbG@d3>&#KAsQ');
define('SECURE_AUTH_KEY',  '[R;T0<n*h3$1!&p)NBMHNZ9IFI9nz84kKN[`/VsS1&LbmaG-RyF,-l4[){{%tD7!');
define('LOGGED_IN_KEY',    'b&7oa^^%WR9Weh{sJ@R>Wo>-J0Gw8wR)nQMH@R=GEJr~7H]Ji[VA~)ld_] A,#[#');
define('NONCE_KEY',        'H=$NN_#xDzpYe5-)uxjI2W8K34qK)&xx{j%o/n]#sx+SJm;bS3>a,F@,#kMT~02}');
define('AUTH_SALT',        '*KFfg<rQ(b5*j6oj>P79}Z@AM&U<%*h^[nc#gpzTXzY)ngaq|yc<2^a(O$Al>fPX');
define('SECURE_AUTH_SALT', '/ |G;ss?R*O]+0j-6v;mp8IOWd=94=PXy?wI0vmqV>4pz]j@Tx#*_aR~njjt8d_Y');
define('LOGGED_IN_SALT',   'sm.#z~D5,aJWc}*?=K72V,&$+@:5u^;vT5;SEvzAQxpx&?]>uob[2w;[1%v;U75S');
define('NONCE_SALT',       '`ooAM}&,#>(+VT>K$>OY^O.dMp{#/>f~wcKg^5z[xmS@mCA~A+@/r#x7R+<xnW<w');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');