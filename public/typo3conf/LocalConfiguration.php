<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '',
        'loginSecurityLevel' => 'rsa',
        'versionNumberInFilename' => '0',
    ],
    'EXT' => [
        'extConf' => [
            'fluid_styled_content' => 'a:1:{s:32:"loadContentElementWizardTsConfig";s:1:"1";}',
            'realurl' => 'a:5:{s:10:"configFile";s:34:"typo3conf/RealUrlConfiguration.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"1";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'scheduler' => 'a:4:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"0";s:15:"showSampleTasks";s:1:"0";s:11:"useAtdaemon";s:1:"0";}',
        ],
    ],
    'EXTCONF' => [],
    'FE' => [
        'debug' => false,
        'lockIP' => 4,
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [],
    'HTTP' => [
        'adapter' => 'curl',
    ],
    'INSTALL' => [],
    'MAIL' => [],
    'SYS' => [
        'clearCacheSystem' => true,
        'displayErrors' => 0,
        'enableDeprecationLog' => false,
        'encryptionKey' => '12345',
        'exceptionalErrors' => 28674,
        'isInitialInstallationInProgress' => false,
        'loginCopyrightWarrantyProvider' => 'Your Website',
        'loginCopyrightWarrantyURL' => 'http://www.your-website.com/',
        'sitename' => 'Your Website',
        'sqlDebug' => 0,
        'systemLogLevel' => 2,
        't3lib_cs_convMethod' => 'mbstring',
        't3lib_cs_utils' => 'mbstring',
    ],
];
