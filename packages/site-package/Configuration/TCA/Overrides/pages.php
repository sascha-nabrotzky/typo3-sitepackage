<?php

defined('TYPO3_MODE') || die();

call_user_func(function()
{

    $extensionKey = 'site-package';

    # Diese Datei (pages.php) meldet import.tsconfig im BE an, dort dann auswählen
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TSconfig/import.tsconfig',
        'site-package'
    );

    # Add an entry in the static template list found in sys_templates for static TS
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/*.typoscript',
        'site-package'
        );
});
