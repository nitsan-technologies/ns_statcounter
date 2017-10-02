<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Nitsan.NsStatcounter',
            'Nsstatcounter',
            [
                'Statcounter' => 'list'
            ],
            // non-cacheable actions
            [
                'Statcounter' => ''
            ]
        );

    },
    $_EXTKEY
);
