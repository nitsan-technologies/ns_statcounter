<?php
defined('TYPO3_MODE') || die('Access denied.');

if (version_compare(TYPO3_branch, '10.0', '>=')) {
    $moduleClass = \Nitsan\NsStatcounter\Controller\StatcounterController::class;
} else {
    $moduleClass = 'Statcounter';
}
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Nitsan.NsStatcounter',
    'Nsstatcounter',
    [
        $moduleClass => 'list'
    ],
    // non-cacheable actions
    [
        $moduleClass => ''
    ]
);
