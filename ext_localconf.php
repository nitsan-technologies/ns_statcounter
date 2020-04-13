<?php
defined('TYPO3_MODE') || die('Access denied.');


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