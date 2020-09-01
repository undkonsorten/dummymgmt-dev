<?php
defined('TYPO3_MODE') || die('Access denied.');


$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:dummymgmt/Configuration/FlexForms/flexform_dummytestplugin.xml');
