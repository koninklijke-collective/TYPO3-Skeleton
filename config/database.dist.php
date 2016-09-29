<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// Copy this file to database.php for your local environment
$GLOBALS['TYPO3_CONF_VARS']['DB'] = [
    'host' => 'localhost',
    'database' => '',
    'username' => '',
    'password' => '',
    'socket' => '',
];
