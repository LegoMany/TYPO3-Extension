<?php

defined('TYPO3_MODE') or die();

(static function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'In2code.extension',
        'tools',
        'Module1',
        '',
        [
            \In2code\Extension\Controller\Backend\ModuleController::class => 'index'
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:in2solr/Resources/Public/Icons/module_status.svg',
            'labels' => 'LLL:EXT:extension/Resources/Private/Language/locallang.xlf',
        ]
    );
})();
