<?php
// Add an entry in the static template list found in sys_templates for static TS
// on change flush BE
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
'sn_text',
'Configuration/TypoScript/',
'Content-Element Text'
);
