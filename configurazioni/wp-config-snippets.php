<?php
/**
 * 747 Disco - Snippet Ottimizzazione wp-config.php
 * 
 * IMPORTANTE: 
 * - Fai BACKUP di wp-config.php prima di modificare
 * - Inserisci questi snippet PRIMA della riga: "That's all, stop editing!"
 * - Non duplicare definizioni se già esistono
 */

// ============================================================================
// OTTIMIZZAZIONI PERFORMANCE
// ============================================================================

/**
 * Aumenta limite memoria PHP
 * Migliora performance per operazioni complesse (Elementor, media library, ecc.)
 */
define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '512M');

/**
 * Limita revisioni post
 * Riduce dimensione database e migliora query performance
 * Default: illimitate. Consigliato: 3-5 revisioni
 */
define('WP_POST_REVISIONS', 3);

/**
 * Aumenta intervallo autosave
 * Riduce carico server durante editing
 * Default: 60 secondi. Consigliato: 300 secondi (5 minuti)
 */
define('AUTOSAVE_INTERVAL', 300);

/**
 * Riduce tempo cestino
 * Svuota cestino automaticamente dopo X giorni
 * Default: 30 giorni. Consigliato: 7 giorni
 */
define('EMPTY_TRASH_DAYS', 7);

/**
 * Disabilita editor file da dashboard (SICUREZZA)
 * Previene modifiche non autorizzate a theme/plugin files
 */
define('DISALLOW_FILE_EDIT', true);

/**
 * Disabilita aggiornamenti automatici (opzionale)
 * Utile se preferisci controllo manuale
 * ATTENZIONE: Mantieni WordPress aggiornato per sicurezza!
 */
// define('AUTOMATIC_UPDATER_DISABLED', true);
// define('WP_AUTO_UPDATE_CORE', false);

// ============================================================================
// OTTIMIZZAZIONI DATABASE
// ============================================================================

/**
 * Ottimizza query database
 * Salva query database in cache per query ripetute
 */
define('WP_CACHE', true);

/**
 * Repair database automatico
 * Abilita modalità riparazione database (solo quando necessario!)
 * NOTA: Commenta dopo uso, non lasciare attivo permanentemente
 */
// define('WP_ALLOW_REPAIR', true);

// ============================================================================
// CONFIGURAZIONI SICUREZZA
// ============================================================================

/**
 * Chiavi di sicurezza
 * Genera nuove chiavi su: https://api.wordpress.org/secret-key/1.1/salt/
 * IMPORTANTE: Se modifichi, tutti gli utenti dovranno ri-loggarsi
 */
// Sostituisci con chiavi generate dal link sopra (già presenti in wp-config standard)

/**
 * Force SSL per admin area
 * DECOMMENTARE SOLO SE HAI CERTIFICATO SSL ATTIVO
 */
// define('FORCE_SSL_ADMIN', true);

/**
 * Blocca richieste esterne in wp-admin (aumenta sicurezza)
 * Previene chiamate HTTP non necessarie
 */
define('WP_HTTP_BLOCK_EXTERNAL', false); // Imposta true per bloccare tutte
// Se imposti true, whitelist domini necessari:
// define('WP_ACCESSIBLE_HOSTS', '*.wordpress.org,*.github.com,*.google.com');

/**
 * Disabilita XML-RPC (previene attacchi brute force)
 * ATTENZIONE: Jetpack e alcune app mobile usano XML-RPC
 */
add_filter('xmlrpc_enabled', '__return_false');

// ============================================================================
// DEBUG E LOGGING (SOLO DEVELOPMENT)
// ============================================================================

/**
 * Modalità debug WordPress
 * ATTENZIONE: Disattiva in PRODUZIONE! Mostra errori PHP e rallenta sito
 */
define('WP_DEBUG', false); // Imposta true solo per debug
define('WP_DEBUG_LOG', false); // Salva errori in /wp-content/debug.log
define('WP_DEBUG_DISPLAY', false); // Non mostrare errori a schermo
@ini_set('display_errors', 0);

/**
 * Script debug (per sviluppatori)
 * Carica versioni non-minificate di JS/CSS core
 */
define('SCRIPT_DEBUG', false);

/**
 * Salva query database per analisi performance
 * SOLO per development! Usa con plugin Query Monitor
 */
define('SAVEQUERIES', false);

// ============================================================================
// OTTIMIZZAZIONI MEDIA E UPLOAD
// ============================================================================

/**
 * Aumenta dimensione massima upload
 * Utile per video e file grandi
 * NOTA: Deve corrispondere a php.ini e .htaccess
 */
// Configurato via .htaccess (vedi file separato)

/**
 * Disabilita generazione thumbnail per dimensioni non usate
 * Inserisci in functions.php del child theme:
 */
/*
add_filter('intermediate_image_sizes_advanced', function($sizes) {
    // Rimuovi dimensioni thumbnail non usate
    unset($sizes['medium_large']);
    unset($sizes['1536x1536']);
    unset($sizes['2048x2048']);
    return $sizes;
});
*/

// ============================================================================
// CONFIGURAZIONI CRON
// ============================================================================

/**
 * Disabilita WordPress Cron (se usi cron server)
 * Migliora performance evitando cron durante caricamento pagina
 * NOTA: Devi configurare cron vero nel server cPanel
 */
// define('DISABLE_WP_CRON', true);

/**
 * Comando cron da aggiungere in cPanel (se disabiliti WP_CRON):
 * 
 * */15 * * * * wget -q -O - https://747disco.it/wp-cron.php?doing_wp_cron >/dev/null 2>&1
 * 
 * Oppure:
 * 
 * */15 * * * * php /home/username/public_html/wp-cron.php >/dev/null 2>&1
 */

// ============================================================================
// OTTIMIZZAZIONI MULTISITE (Solo se usi WordPress Multisite)
// ============================================================================

/**
 * Configurazioni multisite
 * SALTA QUESTA SEZIONE se non usi multisite
 */
// define('WP_ALLOW_MULTISITE', true);
// define('MULTISITE', true);
// define('SUBDOMAIN_INSTALL', false);
// define('DOMAIN_CURRENT_SITE', '747disco.it');
// define('PATH_CURRENT_SITE', '/');
// define('SITE_ID_CURRENT_SITE', 1);
// define('BLOG_ID_CURRENT_SITE', 1);

// ============================================================================
// CONFIGURAZIONI ELEMENTOR PRO
// ============================================================================

/**
 * Ottimizzazioni specifiche Elementor
 * Migliora performance editor e frontend
 */

// Disabilita Google Fonts (se usi solo font custom)
// add_filter('elementor/frontend/print_google_fonts', '__return_false');

// Riduce chiamate API Elementor
// define('ELEMENTOR_DISABLE_AUTO_UPDATE', true);

// ============================================================================
// CONFIGURAZIONI REDIS/MEMCACHED (Avanzato - solo se supportato da hosting)
// ============================================================================

/**
 * Redis cache (se disponibile su hosting)
 * Migliora drasticamente performance database
 */
// define('WP_REDIS_HOST', '127.0.0.1');
// define('WP_REDIS_PORT', 6379);
// define('WP_REDIS_DATABASE', 0);
// define('WP_CACHE_KEY_SALT', '747disco_');

/**
 * Memcached (alternativa a Redis)
 */
// define('MEMCACHED_SERVERS', array('default' => array('127.0.0.1:11211')));

// ============================================================================
// LIMITI PHP (via ini_set)
// ============================================================================

/**
 * Aumenta limiti PHP direttamente
 * Alcuni hosting potrebbero non permettere override
 */
@ini_set('memory_limit', '256M');
@ini_set('max_execution_time', '300');
@ini_set('max_input_time', '300');
@ini_set('post_max_size', '64M');
@ini_set('upload_max_filesize', '64M');

// ============================================================================
// CUSTOM CONSTANTS (Specifiche 747 Disco)
// ============================================================================

/**
 * Definizioni custom per tracking e analytics
 */
// define('DISCO747_PHONE', '+393471811119');
// define('DISCO747_EMAIL', 'info@747disco.it');
// define('DISCO747_ADDRESS', 'Viale J. F. Kennedy, 131, 00043 Ciampino RM');

// ============================================================================
// OTTIMIZZAZIONI HEARTBEAT API
// ============================================================================

/**
 * Riduce frequenza WordPress Heartbeat
 * Migliora performance riducendo chiamate AJAX in background
 */

// Aggiungi in functions.php del theme:
/*
add_filter('heartbeat_settings', function($settings) {
    $settings['interval'] = 60; // Secondi (default: 15)
    return $settings;
});

// Disabilita heartbeat in frontend (mantieni solo in admin)
add_action('init', function() {
    if (!is_admin()) {
        wp_deregister_script('heartbeat');
    }
});
*/

// ============================================================================
// NOTES E BEST PRACTICES
// ============================================================================

/**
 * CHECKLIST DOPO IMPLEMENTAZIONE:
 * 
 * 1. ✅ Testa sito su tutti i browser
 * 2. ✅ Verifica login admin funzionante
 * 3. ✅ Controlla form contatto
 * 4. ✅ Test PageSpeed Insights
 * 5. ✅ Verifica upload media
 * 6. ✅ Controlla log errori (se WP_DEBUG_LOG attivo)
 * 7. ✅ Backup database e file
 * 
 * MONITORAGGIO:
 * - Controlla /wp-content/debug.log per errori
 * - Monitora Google Search Console
 * - Verifica Analytics settimanalmente
 * 
 * SICUREZZA:
 * - Cambia chiavi di sicurezza ogni 6-12 mesi
 * - Mantieni WordPress, plugin, theme aggiornati
 * - Backup regolari (UpdraftPlus già installato)
 * - Usa password forti per tutti gli utenti
 * 
 * PERFORMANCE:
 * - Pulisci database mensilmente (WP Rocket > Database)
 * - Ottimizza nuove immagini (ShortPixel)
 * - Controlla broken links
 * - Rimuovi plugin non usati
 */

// ============================================================================
// FINE SNIPPET
// ============================================================================

/**
 * IMPORTANTE - STRUTTURA FILE:
 * 
 * 1. Database settings (già presenti)
 * 2. [INSERISCI SNIPPET SOPRA QUI]
 * 3. $table_prefix (già presente)
 * 4. Authentication Unique Keys (già presenti)
 * 5. [ULTIMI SNIPPET QUI SE NECESSARIO]
 * 6. if (!defined('ABSPATH')) ...
 * 7. require_once(ABSPATH . 'wp-settings.php');
 * 
 * NON modificare/rimuovere righe esistenti, solo aggiungere!
 */

/* That's all, stop editing! Happy publishing. */
