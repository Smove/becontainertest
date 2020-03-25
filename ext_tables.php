<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {
    if (TYPO3_MODE === 'BE') {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
            'Jandelius.Becontainertest',
            'web',
            'becontainertest',
            'bottom',
            [
                'Demo' => 'demo',
            ],
            [
                'access' => 'user,group',
                'icon' => 'EXT:extbase/Resources/Public/Icons/Extension.png',
                'labels' => 'LLL:EXT:becontainertest/Resources/Private/Language/locallang_mod.xlf'
            ]
        );
    }
});
