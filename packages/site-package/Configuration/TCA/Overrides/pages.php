<?php

defined('TYPO3_MODE') || die();

call_user_func(function()
{

    $extensionKey = 'site-package';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/page.tsconfig',
        'site-package'
    );
});