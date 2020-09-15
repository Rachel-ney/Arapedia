<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

$isLocalhost = ($_SERVER['REMOTE_ADDR'] == "127.0.0.1" or $_SERVER['REMOTE_ADDR'] == "::1");

// ** MySQL settings - You can get this info from your web host ** //
if($isLocalhost) {
    // BDD
    define( 'DB_NAME', 'dbname' );
    define( 'DB_USER', 'dbuser' );
    define( 'DB_PASSWORD', 'dbpass' );
    define( 'DB_HOST', 'dbhost' );

    // Paramètres de debug
    define('WP_DEBUG', true); 		  // Debugage activé
    define('WP_DEBUG_LOG', true); 	  // Enregistrer les erreurs dans un fichier
    define('WP_DEBUG_DISPLAY', true); // Affichage des erreurs à l'écran

    // J'active l'installation de thème et pluggin
    define( 'DISALLOW_FILE_MODS', false );
    // Désactive les révision (sauvegarde automatiques) de chaque article
    define('WP_POST_REVISIONS', false);

    // Temps pendant lequel la corbeille est convervé
    define( 'EMPTY_TRASH_DAYS', 1 ); // 1 days

    // Pour que wp ne demande pas les identifant ftp à chaque téléchargement (thème, maj, pluggin...)
    define('FS_METHOD', 'direct');

} else { // A configurer pour la mise en ligne !
    // BDD
    define( 'DB_NAME', 'dbname' );
    define( 'DB_USER', 'dbuser' );
    define( 'DB_PASSWORD', 'dbpass' );
    define( 'DB_HOST', 'dbhost' );

    // J'active l'installation de thème et pluggin
    define( 'DISALLOW_FILE_MODS', false );
    // Limite les révision (sauvegarde automatiques) de chaque article
    define('WP_POST_REVISIONS', 5);
    // Augmente le temps (en secondes) entre chaque révision
    define('AUTOSAVE_INTERVAL', 300);

    // Temps pendant lequel la corbeille est convervé
    define( 'EMPTY_TRASH_DAYS', 30 ); // 30 days
}

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// Désactive l'édition de fichier directement depuis l'admin
define('DISALLOW_FILE_EDIT', true);

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'saltToChange');
define('SECURE_AUTH_KEY',  'saltToChange');
define('LOGGED_IN_KEY',    'saltToChange');
define('NONCE_KEY',        'saltToChange');
define('AUTH_SALT',        'saltToChange');
define('SECURE_AUTH_SALT', 'saltToChange');
define('LOGGED_IN_SALT',   'saltToChange');
define('NONCE_SALT',       'saltToChange');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

// Je viens définir le nouvel emplacement du dossier wp-content
define( 'WP_CONTENT_URL', 'http://monurl.local/content' );
define( 'WP_CONTENT_DIR', dirname( ABSPATH ) . '/content' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
