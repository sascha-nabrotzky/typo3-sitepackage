<?php

defined('TYPO3_MODE') || die();

call_user_func(function()
{

    $extensionKey = 'sn_text';

    # Diese Datei (pages.php) meldet import.tsconfig im BE an, dort unter Resources dann auswählen
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TSconfig/layout.tsconfig',
        'sn_text'
    );
});
