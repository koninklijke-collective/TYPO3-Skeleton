<?php
/**
 * Load CONTEXT dependent configuration. Keep in mind to move the configuration
 * to the correct configuration file if a environment dependent setting in the
 * INSTALL TOOL is changed.
 */
if (!defined('PATH_site_root')) {
    define('PATH_site_root', dirname(realpath(PATH_site)));
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

// Display current release
if (is_file(PATH_site_root . '/release')) {
    $release = include PATH_site_root . '/release';
    if (!empty($release)) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] .= ' [' . substr($release, 0, 8) . ']';
    }
}

// Load server setup
if (is_file(PATH_site_root . '/config/configuration.php')) {
    @include(PATH_site_root . '/config/configuration.php');
}
