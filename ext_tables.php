<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'NsStatcounter');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nsstatcounter_domain_model_statcounter', 'EXT:ns_statcounter/Resources/Private/Language/locallang_csh_tx_nsstatcounter_domain_model_statcounter.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nsstatcounter_domain_model_statcounter');

    },
    $_EXTKEY
);
