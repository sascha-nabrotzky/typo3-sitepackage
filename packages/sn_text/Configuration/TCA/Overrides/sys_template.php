<?php

defined('TYPO3_MODE') || die();

call_user_func(function()
{
  $extensionKey = 'sn_text';

  // Add an entry in the static template list found in sys_templates for static TS
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $extensionKey,
    'Configuration/TypoScript',
    'Content-Element Text'
  );
});
