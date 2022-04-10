<?php

defined('TYPO3_MODE') || die();

call_user_func(function()
{

    $extensionKey = 'site-package';

    # Diese Datei (pages.php) meldet import.tsconfig im BE an, dort dann unter Resources auswählen
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TSconfig/import.tsconfig',
        'site-package'
    );
});
