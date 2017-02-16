<?php
defined('TYPO3_MODE') or die ('Access denied.');

// Copy this file to configuration.php for your local environment
\TYPO3\CMS\Core\Utility\ArrayUtility::mergeRecursiveWithOverrule($GLOBALS['TYPO3_CONF_VARS']['DB'], [
    'host' => 'localhost',
    'database' => '',
    'username' => '',
    'password' => '',
    'socket' => '',
]);

// Server specific credentials
$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['specific_extension'] = [
    'api_token' => '',
    'api_url' => '',
];
