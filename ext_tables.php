<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Generic Domain Models'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Generic Domain Models');

//$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_pi1', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_list.xml');


t3lib_extMgm::addLLrefForTCAdescr('tx_generic_domain_model_party','EXT:generic/Resources/Private/Language/locallang_csh_tx_generic_domain_model_party.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_generic_domain_model_party');
$TCA['tx_generic_domain_model_party'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_party',
		'label' 			=> 'tx_extbase_type',
		'label_alt' 		=> 'uid',
		'label_alt_force' 	=> TRUE,
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'type'				=> 'tx_extbase_type',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_generic_domain_model_party.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_generic_domain_model_address','EXT:generic/Resources/Private/Language/locallang_csh_tx_generic_domain_model_address.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_generic_domain_model_address');
$TCA['tx_generic_domain_model_address'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address',
		'label' 			=> 'thoroughfare',
		'label_alt' 		=> 'post_code, locality',
		'label_alt_force' 	=> TRUE,
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'type'				=> 'tx_extbase_type',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_generic_domain_model_address.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_generic_domain_model_nameelement','EXT:generic/Resources/Private/Language/locallang_csh_tx_generic_domain_model_nameelement.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_generic_domain_model_nameelement');
$TCA['tx_generic_domain_model_nameelement'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_nameelement',
		'label' 			=> 'value',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'type'				=> 'tx_extbase_type',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_generic_domain_model_nameelement.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_generic_domain_model_name','EXT:generic/Resources/Private/Language/locallang_csh_tx_generic_domain_model_name.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_generic_domain_model_name');
$TCA['tx_generic_domain_model_name'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_name',
		'label' 			=> 'uid',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'type'				=> 'tx_extbase_type',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_generic_domain_model_name.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_generic_domain_model_electronicaddressidentifier','EXT:generic/Resources/Private/Language/locallang_csh_tx_generic_domain_model_electronicaddressidentifier.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_generic_domain_model_electronicaddressidentifier');
$TCA['tx_generic_domain_model_electronicaddressidentifier'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_electronicaddressidentifier',
		'label' 			=> 'value',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'type'				=> 'tx_extbase_type',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_generic_domain_model_electronicaddressidentifier.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_generic_domain_model_contactnumber','EXT:generic/Resources/Private/Language/locallang_csh_tx_generic_domain_model_contactnumber.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_generic_domain_model_contactnumber');
$TCA['tx_generic_domain_model_contactnumber'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_contactnumber',
		'label' 			=> 'value',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'type'				=> 'tx_extbase_type',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_generic_domain_model_contactnumber.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_generic_domain_model_organizationinfo','EXT:generic/Resources/Private/Language/locallang_csh_tx_generic_domain_model_organizationinfo.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_generic_domain_model_organizationinfo');
$TCA['tx_generic_domain_model_organizationinfo'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_organizationinfo',
		'label' 			=> 'uid',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'type'				=> 'tx_extbase_type',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_generic_domain_model_organizationinfo.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_generic_domain_model_personinfo','EXT:generic/Resources/Private/Language/locallang_csh_tx_generic_domain_model_personinfo.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_generic_domain_model_personinfo');
$TCA['tx_generic_domain_model_personinfo'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_personinfo',
		'label' 			=> 'uid',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'type'				=> 'tx_extbase_type',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_generic_domain_model_personinfo.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_generic_domain_model_birthinfo','EXT:generic/Resources/Private/Language/locallang_csh_tx_generic_domain_model_birthinfo.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_generic_domain_model_birthinfo');
$TCA['tx_generic_domain_model_birthinfo'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_birthinfo',
		'label' 			=> 'birth_date_time',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'type'				=> 'tx_extbase_type',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_generic_domain_model_birthinfo.gif'
	)
);

t3lib_extMgm::allowTableOnStandardPages('tx_generic_domain_model_value');
$TCA['tx_generic_domain_model_value'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value',
		'label' 			=> 'value',
		'label_alt' 		=> 'tx_extbase_type',
		'label_alt_force' 	=> TRUE,
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'type'				=> 'tx_extbase_type',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/tca.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_generic_domain_model_value.gif'
	)
);

?>