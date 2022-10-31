<?php

defined('TYPO3_MODE') || die();

(static function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:extension/Configuration/TsConfig/NewContentElement.tsconfig">'
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Extension',
        'PluginName',
        [
            \In2code\Extension\Controller\ExtensionController::class => 'indexAction',
        ],
        [
            \In2code\Extension\Controller\ExtensionController::class => 'indexAction',
        ]
    );

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Imaging\IconRegistry::class
    );
    $iconRegistry->registerIcon(
        'extension-icon',
        \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        ['source' => 'EXT:extension/ext_icon.png']
    );
})();