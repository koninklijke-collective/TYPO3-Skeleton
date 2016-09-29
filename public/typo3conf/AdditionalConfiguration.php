<?php
/**
 * Load CONTEXT dependent configuration. Keep in mind to move the configuration
 * to the correct configuration file if a environment dependent setting in the
 * INSTALL TOOL is changed.
 */
if (!defined('PATH_site_root')) {
    define('PATH_site_root', dirname(PATH_site));
}

switch (\TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext()) {
    case 'Development':
        @include(PATH_site_root . '/config/defaults/development.php');
        break;
    case 'Production/Staging':
        @include(PATH_site_root . '/config/defaults/acceptance.php');
        break;
    default:
        @include(PATH_site_root . '/config/defaults/production.php');
}

// Load server setup
if (is_file(PATH_site_root . '/config/database.php')) {
    @include(PATH_site_root . '/config/database.php');
}

if (is_file(PATH_site_root . '/config/configuration.php')) {
    @include(PATH_site_root . '/config/configuration.php');
}
