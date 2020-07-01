<?php
defined('TYPO3_MODE') || die('Access denied.');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('ns_statcounter', 'Configuration/TypoScript', 'NsStatcounter');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nsstatcounter_domain_model_statcounter', 'EXT:ns_statcounter/Resources/Private/Language/locallang_csh_tx_nsstatcounter_domain_model_statcounter.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nsstatcounter_domain_model_statcounter');
