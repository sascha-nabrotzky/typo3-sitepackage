<?php

call_user_func(function () {

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

    $iconRegistry->registerIcon(
        'content-sn-text',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        [
            'source'     => 'EXT:sn_text/Resources/Public/Icons/Extension.svg'
        ]
    );


    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '
mod.wizards.newContentElement.wizardItems.common {
    elements {
        sn_text {
            iconIdentifier = content-sn-text
            # LLL:EXT:sn_text/Resources/Private/Language/Tca.xlf:yourextensionkey_newcontentelement.wizard.title
            title = einfacher Text
            description = Einfacher Text als Basis
            # LLL:EXT:sn_text/Resources/Private/Language/Tca.xlf:yourextensionkey_newcontentelement.wizard.description
            tt_content_defValues {
                CType = sn_text
                header_layout = 100
            }
        }
    }
    show := addToList(sn_text)
}
    '
    );
});
