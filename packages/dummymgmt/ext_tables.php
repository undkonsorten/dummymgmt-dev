<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Undkonsorten.Dummymgmt',
            'Dummytestplugin',
            'Dummytestplugin'
        );

        $pluginSignature = str_replace('_', '', 'dummymgmt') . '_dummytestplugin';

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('dummymgmt', 'Configuration/TypoScript', 'dummymgmt');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dummymgmt_domain_model_project', 'EXT:dummymgmt/Resources/Private/Language/locallang_csh_tx_dummymgmt_domain_model_project.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dummymgmt_domain_model_project');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dummymgmt_domain_model_publication', 'EXT:dummymgmt/Resources/Private/Language/locallang_csh_tx_dummymgmt_domain_model_publication.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dummymgmt_domain_model_publication');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dummymgmt_domain_model_employee', 'EXT:dummymgmt/Resources/Private/Language/locallang_csh_tx_dummymgmt_domain_model_employee.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dummymgmt_domain_model_employee');

    }
);
