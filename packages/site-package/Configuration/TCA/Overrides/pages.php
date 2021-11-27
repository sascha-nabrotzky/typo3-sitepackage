<?php

defined('TYPO3_MODE') || die();

call_user_func(function()
{

    $extensionKey = 'site-package';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TSconfig/import.tsconfig',
        'site-package'
    );
});

# Diese Datei (pages.php) meldet import.tsconfig im BE an, dort dann auswählen