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
define('DB_NAME', 'my_db');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'user');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '&?Y+plV#D~{{.ngtjy|)Ac9yIZ,vv%wbf,JtGRlh8R7ykG#a64SA/+:HCP~#Q;>5');
define('SECURE_AUTH_KEY',  'r(vY!6LvfjK@?X:z&&)r<:lg)h/KhB|]pB2rz:YT}V* }q<5~GEw%]P2oZ76w}=B');
define('LOGGED_IN_KEY',    '+_Z+gK$2G/;v}~W{PN.a[){SDFf~B;4Ttf%5.Ulf8BUux.2N|XWf{8gD[C2^Qd{V');
define('NONCE_KEY',        '[ac/E5q[,)^grcYS!n*Zrsd@9NMeF<S/N|+b0L5nW6-[I}Qg+3Y2v3q_~N2GH*%Z');
define('AUTH_SALT',        '(VIn]r5V3#Fj>m8qzA&+/EJLs==|w$CG(;znEj,a!u2|n>JJhsN^6d+q!4&EQtq;');
define('SECURE_AUTH_SALT', '317xV0+KnGG3mXzU}m[-c!7yYu*wE5A%b6=:;S}*G#,^_Q:^;_Aq$8Ehe0^^A$|g');
define('LOGGED_IN_SALT',   'p},m|V.nQS=Cz6(fY}pCnw-^X.(]MK`l7Px-vJm_6kvD/&7H0$});^Rz ucWP}Uw');
define('NONCE_SALT',       'ik_P+/Ev0wcNLcf)45tG<!lOb>4u_j([sD2Le%s{cPV]x(&ndldD:N.n1su<;&J^');
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