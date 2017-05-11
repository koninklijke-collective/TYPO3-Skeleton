<?php
defined('TYPO3_MODE') or die ('Access denied.');

// Development - used for development

\TYPO3\CMS\Core\Utility\ArrayUtility::mergeRecursiveWithOverrule($GLOBALS['TYPO3_CONF_VARS'], [
    'BE' => [
        'debug' => true,
    ],
    'FE' => [
        'debug' => true,
    ],
    'SYS' => [
        'displayErrors' => 1,
        'devIPmask' => '*',
        'errorHandler' => \TYPO3\CMS\Core\Error\ErrorHandler::class,
        'errorHandlerErrors' => E_ALL & ~(E_STRICT | E_NOTICE | E_COMPILE_WARNING | E_COMPILE_ERROR | E_CORE_WARNING | E_CORE_ERROR | E_PARSE | E_ERROR),
        'exceptionalErrors' => E_ALL & ~(E_STRICT | E_NOTICE | E_COMPILE_WARNING | E_COMPILE_ERROR | E_CORE_WARNING | E_CORE_ERROR | E_PARSE | E_ERROR | E_DEPRECATED | E_WARNING | E_USER_ERROR | E_USER_NOTICE | E_USER_WARNING),
        'debugExceptionHandler' => \TYPO3\CMS\Core\Error\DebugExceptionHandler::class,
        'productionExceptionHandler' => \TYPO3\CMS\Core\Error\DebugExceptionHandler::class,
        'systemLogLevel' => '0',
        'enable_errorDLOG' => true,
        'enable_exceptionDLOG' => true,
    ],
]);
