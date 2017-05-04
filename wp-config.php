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
define('DB_NAME', 'wevibes');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'a[0T4P@ap^k7A1G?`3IQq[yMRgEjGwhXf^q}#Q(Sn=shei=Z;aC!>F; -ZV0NRZ7');
define('SECURE_AUTH_KEY',  'WVYdVDcsTAP|W&=jm2#D/mvSlfQK?&^jpI@O^][5Iq4f_9?29UUL`^Btbia,n4`c');
define('LOGGED_IN_KEY',    'CsV($P<:,b?_K)hp7nnH.Nq8$e!_*lt`me1q*Dl@mFR7PvV#vw6v D/BqstC`iCe');
define('NONCE_KEY',        'ok.YqXkHIK+tht~QayL]5_NZO:`#@IoaHVC FabE1AC+Cm=r1]_CC^6(BECNg|*f');
define('AUTH_SALT',        '#-AN!XX?M1#vUW2}nYhX4&DlFY0$:t%:)vR(?iO$&!!0?J9j2INSrM$]VjG9W</f');
define('SECURE_AUTH_SALT', 'b/[@Kn%LSQGeKn|4(W>;B(`(dNJ7Ber?J-+F*R4Q&$9aU7?}`RprEA]-v9CQ|z(v');
define('LOGGED_IN_SALT',   'Y.1dK!3@T?ucyHEs-eBEkCD .|.!x>~l1p<-{?2r(oGek*k>Q#G{bJnT+pxlzlPl');
define('NONCE_SALT',       '=y(Y/ipD_iqGFd||gv(,PT;F9P(,&ypU.@uc|.-*kA<>P&:caaiQNZ9BYIFxsMm ');
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