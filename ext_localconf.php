<?php

use TYPO3\CMS\Core\Utility\GeneralUtility;

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Hook for adding switch icon to website users
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/class.db_list_extra.inc']['actions'][] = 'Cabag\CabagLoginas\Hook\RecordListHook';

// Hook to check for redirection
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauth.php']['postUserLookUp'][] = 'Cabag\CabagLoginas\Hook\PostUserLookupHook->postUserLookUp';

// Needed to trigger authentication without setting FE_alwaysFetchUser globally
$cabag_loginas_data = GeneralUtility::_GP('tx_cabagloginas');
if (isset($cabag_loginas_data['userid']) && ($cabag_loginas_data['userid'] > 0)) {
    // Trigger authentication without setting FE_alwaysFetchUser globally
    $GLOBALS['TYPO3_CONF_VARS']['SVCONF']['auth']['setup']['FE_alwaysFetchUser'] = true;
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService($_EXTKEY, 'auth', 'Cabag\\CabagLoginas\\Service\\LoginAsService' /* sv key */,
	array(

		'title' => 'Login as Service',
		'description' => 'Authenticate a frontend user using a link',

		'subtype' => 'getUserFE,authUserFE',

		'available' => TRUE,
		'priority' => 70,
		'quality' => 70,

		'os' => '',
		'exec' => '',

		'className' => Cabag\CabagLoginas\Service\LoginAsService::class
	)
);

