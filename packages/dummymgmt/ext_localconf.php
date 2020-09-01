<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Undkonsorten.Dummymgmt',
            'Dummytestplugin',
            [
                'Project' => 'list, show',
                'Publication' => 'list, show',
                'Employee' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Project' => '',
                'Publication' => '',
                'Employee' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        dummytestplugin {
                            iconIdentifier = dummymgmt-plugin-dummytestplugin
                            title = LLL:EXT:dummymgmt/Resources/Private/Language/locallang_db.xlf:tx_dummymgmt_dummytestplugin.name
                            description = LLL:EXT:dummymgmt/Resources/Private/Language/locallang_db.xlf:tx_dummymgmt_dummytestplugin.description
                            tt_content_defValues {
                                CType = list
                                list_type = dummymgmt_dummytestplugin
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'dummymgmt-plugin-dummytestplugin',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:dummymgmt/Resources/Public/Icons/user_plugin_dummytestplugin.svg']
			);
		
    }
);
