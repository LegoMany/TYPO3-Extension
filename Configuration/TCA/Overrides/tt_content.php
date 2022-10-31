<?php

defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Extension',
    'PluginName',
    'Plugin title',
    'extension_icon'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['extension_pluginname'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'extension_pluginname',
    'FILE:EXT:extension/Configuration/FlexForm/PluginName.xml'
);
