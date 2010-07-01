<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_generic_domain_model_party'] = array(
	'ctrl' => $TCA['tx_generic_domain_model_party']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden,tx_extbase_type,party_names,organization_info,organization_names,person_info,birth_info,free_text_lines,addresses,electronic_address_identifiers,contact_numbers'
	),
	'types' => array(
		'0' => array('showitem' => 'hidden, tx_extbase_type,party_names;;;;1-1-1,free_text_lines,addresses,electronic_address_identifiers,contact_numbers'),
		'Tx_Generic_Domain_Model_Organization' => array('showitem' => 'hidden, tx_extbase_type,party_names;;;;1-1-1,free_text_lines,addresses;;;;2-2-2,electronic_address_identifiers,contact_numbers'),
		'Tx_Generic_Domain_Model_Person' => array('showitem' => 'hidden, tx_extbase_type,party_names;;;;1-1-1, person_info,birth_info,free_text_lines,addresses;;;;2-2-2,electronic_address_identifiers,contact_numbers')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_generic_domain_model_party',
				'foreign_table_where' => 'AND tx_generic_domain_model_party.uid=###REC_FIELD_l18n_parent### AND tx_generic_domain_model_party.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'tx_extbase_type' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_party.tx_extbase_type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_party.tx_extbase_type.0', '0'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_party.tx_extbase_type.Tx_Generic_Domain_Model_Organization', 'Tx_Generic_Domain_Model_Organization'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_party.tx_extbase_type.Tx_Generic_Domain_Model_Person', 'Tx_Generic_Domain_Model_Person')
				),
				'size' => 1,
				'maxitems' => 1,
				'default' => 'Tx_Generic_Domain_Model_Organization'
			)
		),
		'party_names' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_party.party_names',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_generic_domain_model_name',
				'MM' => 'tx_generic_party_name_mm',
				'maxitems' => 9999,
				'multiple' => 0,
				'appearance' => array(
					'useSelector' => 1,
					'useSortable' => 1,
					'collapseAll' => 0,
					'expandSingle' => 1,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
		'free_text_lines' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_party.free_text_lines',
			'config'  => array(
				'type' => 'text',
				'rows' => 15,
				'cols' => 40,
			)
		),
		'addresses' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_party.addresses',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_generic_domain_model_address',
				'foreign_field' => 'party',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
		'electronic_address_identifiers' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_party.electronic_address_identifiers',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_generic_domain_model_electronicaddressidentifier',
				'MM' => 'tx_generic_party_electronicaddressidentifier_mm',
				'maxitems' => 9999,
				'multiple' => 0,
				'appearance' => array(
					'hideSelector' => 1,
					'useSortable' => 1,
					'collapseAll' => 0,
					'expandSingle' => 1,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
		'contact_numbers' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_party.contact_numbers',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_generic_domain_model_contactnumber',
				'MM' => 'tx_generic_party_contactnumber_mm',
				'maxitems' => 9999,
				'multiple' => 0,
				'appearance' => array(
					'hideSelector' => 1,
					'useSortable' => 1,
					'collapseAll' => 0,
					'expandSingle' => 1,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
		'organization_info' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_organization.organization_info',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_generic_domain_model_organizationinfo',
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
		'person_info' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_person.person_info',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_generic_domain_model_personinfo',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
		'birth_info' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_person.birth_info',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_generic_domain_model_birthinfo',
				'maxitems'      => 9999
			)
		),
	),
);

$TCA['tx_generic_domain_model_address'] = array(
	'ctrl' => $TCA['tx_generic_domain_model_address']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'free_text_address,country,administrative_area,locality,thoroughfare,premises,post_code,rural_delivery,postal_delivery_point,post_office,type,address_id,address_id_type,tx_generic_usage,delivery_mode,status'
	),
	'types' => array(
		'1' => array('showitem' => 'type,tx_generic_usage,status,thoroughfare,post_code,locality,country,administrative_area')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_generic_domain_model_address',
				'foreign_table_where' => 'AND tx_generic_domain_model_address.uid=###REC_FIELD_l18n_parent### AND tx_generic_domain_model_address.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'free_text_address' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.free_text_address',
			'config'  => array(
				'type' => 'text',
				'rows' => 5,
				'cols' => 30,
			)
		),
		'country' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.country',
			'displayCond' => 'EXT:static_info_tables:LOADED:true',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'static_countries', // FIXME
				'items' => array(
					array('',0),
				),
				'itemsProcFunc' => 'tx_staticinfotables_div->selectItemsTCA',
				'itemsProcFunc_config' => array(
					'table' => 'static_countries',
					'indexField' => 'uid',
					'prependHotlist' => 1,
					'hotlistLimit' => 5,
					'hotlistApp' => 'tx_generic',
				),
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
				'default' => 54 // Germany
			)
		),
		'administrative_area' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.administrative_area',
			'displayCond' => 'EXT:static_info_tables:LOADED:true',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'static_country_zones', // FIXME
				'items' => array(
					array('',0),
				),
				'itemsProcFunc' => 'tx_staticinfotables_div->selectItemsTCA',
				'itemsProcFunc_config' => array(
					'table' => 'static_country_zones',
					// 'where' => '1 AND zn_country_uid='###REC_FIELD_country###'', // FIXME not implemented yet; fille feature request on static_info_tables
					'indexField' => 'uid',
					'prependHotlist' => 1,
					'hotlistLimit' => 5,
					'hotlistApp' => 'tx_generic',
				),
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'sub_administrative_area' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.sub_administrative_area',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'locality' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.locality',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_generic_domain_model_name',
				'maxitems' => 1,
			)
		),
		'thoroughfare' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.thoroughfare',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_generic_domain_model_name',
				'maxitems' => 1,
			)
		),
		'premises' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.premises',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'post_code' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.post_code',
			'config'  => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'trim'
			)
		),
		'rural_delivery' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.rural_delivery',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'postal_delivery_point' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.postal_delivery_point',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'post_office' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.post_office',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'type' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.type',
			'config'  => array(
				'type' => 'select',
				'foreign_table' => 'tx_generic_domain_model_value',
				'foreign_table_where' => 'AND tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Type_AddressType"',
			)
		),
		'address_id' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.address_id',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'address_id_type' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.address_id_type',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'tx_generic_usage' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.tx_generic_usage',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_generic_domain_model_value',
				'foreign_table_where' => 'AND tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Usage_AddressUsage"',
			)
		),
		'delivery_mode' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.delivery_mode',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'status' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_address.status',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_generic_domain_model_value',
				'foreign_table_where' => 'AND tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Status_AddressStatus"',
			)
		),
		'party' => array(
			'config' => array(
				'type' => 'passthrough',
			)
		),
	),
);

$TCA['tx_generic_domain_model_name'] = array(
	'ctrl' => $TCA['tx_generic_domain_model_name']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'tx_extbase_type,type,name_elements,sub_division_name'
	),
	'types' => array(
		'1' => array('showitem' => 'tx_extbase_type,type,name_elements,sub_division_name'),
		'Tx_Generic_Domain_Model_PersonName' => array('showitem' => 'tx_extbase_type,type,name_elements'),
		'Tx_Generic_Domain_Model_OrganizationName' => array('showitem' => 'tx_extbase_type,type,name_elements,sub_division_name')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_generic_domain_model_name',
				'foreign_table_where' => 'AND tx_generic_domain_model_name.uid=###REC_FIELD_l18n_parent### AND tx_generic_domain_model_name.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'tx_extbase_type' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_name.tx_extbase_type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_name.tx_extbase_type.0', '0'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_name.tx_extbase_type.Tx_Generic_Domain_Model_PersonName', 'Tx_Generic_Domain_Model_PersonName'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_name.tx_extbase_type.Tx_Generic_Domain_Model_OrganizationName', 'Tx_Generic_Domain_Model_OrganizationName'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_name.tx_extbase_type.Tx_Generic_Domain_Model_Locality', 'Tx_Generic_Domain_Model_Locality'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_name.tx_extbase_type.Tx_Generic_Domain_Model_Thoroughfare', 'Tx_Generic_Domain_Model_Thoroughfare'),
				),
				'size' => 1,
				'maxitems' => 1,
				'default' => 'Tx_Generic_Domain_Model_PersonName'
			)
		),
		'type' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_name.type',
			'config'  => array(
				'type' => 'select',
				'foreign_table' => 'tx_generic_domain_model_value',
				'foreign_table_where' => 'AND (tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Type_PersonNameType" OR tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Type_OrganizationNameType" OR tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Type_ThoroughfareType" OR tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Type_LocalityType")',
			)
		),
		'name_elements' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_party.name_elements',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_generic_domain_model_nameelement',
				'MM' => 'tx_generic_name_nameelement_mm',
				'maxitems' => 9999,
				'multiple' => 0,
				'appearance' => array(
					'useSortable' => 1,
					'collapseAll' => 0,
					'expandSingle' => 1,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
		'sub_name' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_name.sub_name',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_generic_domain_model_name',
				'MM' => 'tx_generic_name_name_mm',
				'maxitems' => 9999,
				'appearance' => array(
					'useSortable' => 1,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
	),
);

$TCA['tx_generic_domain_model_nameelement'] = array(
	'ctrl' => $TCA['tx_generic_domain_model_nameelement']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'value,type,abbrevation'
	),
	'types' => array(
		'1' => array('showitem' => 'value;;1')
	),
	'palettes' => array(
		'1' => array('showitem' => 'type,abbrevation')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_generic_domain_model_nameelement',
				'foreign_table_where' => 'AND tx_generic_domain_model_nameelement.uid=###REC_FIELD_l18n_parent### AND tx_generic_domain_model_nameelement.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'value' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_nameelement.value',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'type' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_nameelement.type',
			'config'  => array(
				'type' => 'select',
				'foreign_table' => 'tx_generic_domain_model_value',
				'foreign_table_where' => 'AND (tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Type_PersonNameElementType" OR tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Type_OrganizationNameElementType" OR tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Type_ThoroughfareNameElementType" OR tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Type_LocalityNameElementType")',
			)
		),
		'abbrevation' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_nameelement.abbrevation',
			'config'  => array(
				'type' => 'check',
				'default' => 0
			)
		),
	),
);

$TCA['tx_generic_domain_model_electronicaddressidentifier'] = array(
	'ctrl' => $TCA['tx_generic_domain_model_electronicaddressidentifier']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'value,type,status,tx_generic_usage,tx_generic_label'
	),
	'types' => array(
		'1' => array('showitem' => 'value;;1')
	),
	'palettes' => array(
		'1' => array('showitem' => 'type,status,tx_generic_usage')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_generic_domain_model_electronicaddressidentifier',
				'foreign_table_where' => 'AND tx_generic_domain_model_electronicaddressidentifier.uid=###REC_FIELD_l18n_parent### AND tx_generic_domain_model_electronicaddressidentifier.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'value' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_electronicaddressidentifier.value',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'type' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_electronicaddressidentifier.type',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_generic_domain_model_value',
				'foreign_table_where' => 'AND tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Type_ElectronicAddressIdentifierType"',
			)
		),
		'status' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_electronicaddressidentifier.status',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_generic_domain_model_value',
				'foreign_table_where' => 'AND tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Status_ElectronicAddressIdentifierStatus"',
			)
		),
		'tx_generic_usage' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_electronicaddressidentifier.tx_generic_usage',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_generic_domain_model_value',
				'foreign_table_where' => 'AND tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Usage_ElectronicAddressIdentifierUsage"',
			)
		),
		'tx_generic_label' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_electronicaddressidentifier.tx_generic_label',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
	),
);

$TCA['tx_generic_domain_model_contactnumber'] = array(
	'ctrl' => $TCA['tx_generic_domain_model_contactnumber']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'value,communication_media_type,status,tx_generic_usage,contact_hours'
	),
	'types' => array(
		'1' => array('showitem' => 'value;;1')
	),
	'palettes' => array(
		'1' => array('showitem' => 'communication_media_type,status,tx_generic_usage')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_generic_domain_model_contactnumber',
				'foreign_table_where' => 'AND tx_generic_domain_model_contactnumber.uid=###REC_FIELD_l18n_parent### AND tx_generic_domain_model_contactnumber.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'value' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_contactnumber.value',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'communication_media_type' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_contactnumber.communication_media_type',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_generic_domain_model_value',
				'foreign_table_where' => 'AND tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Type_CommunicationMediaType"',
			)
		),
		'status' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_contactnumber.status',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_generic_domain_model_value',
				'foreign_table_where' => 'AND tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Status_ContactNumberStatus"',
			)
		),
		'tx_generic_usage' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_contactnumber.tx_generic_usage',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_generic_domain_model_value',
				'foreign_table_where' => 'AND tx_generic_domain_model_value.tx_extbase_type="Tx_Generic_Domain_Model_Usage_ContactNumberUsage"',
			)
		),
		'contact_hours' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_contactnumber.contact_hours',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
	),
);

$TCA['tx_generic_domain_model_organizationinfo'] = array(
	'ctrl' => $TCA['tx_generic_domain_model_organizationinfo']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'type,category_type,status,nature,industry_type,industry_code,industry_code_type,number_of_employees,operating_hour_start_time,operating_hour_end_time'
	),
	'types' => array(
		'1' => array('showitem' => 'number_of_employees,operating_hour_start_time,operating_hour_end_time')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_generic_domain_model_organizationinfo',
				'foreign_table_where' => 'AND tx_generic_domain_model_organizationinfo.uid=###REC_FIELD_l18n_parent### AND tx_generic_domain_model_organizationinfo.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'type' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_organizationinfo.type',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'category_type' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_organizationinfo.category_type',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'status' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_organizationinfo.status',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'nature' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_organizationinfo.nature',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'industry_type' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_organizationinfo.industry_type',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'industry_code' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_organizationinfo.industry_code',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'industry_code_type' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_organizationinfo.industry_code_type',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'number_of_employees' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_organizationinfo.number_of_employees',
			'config'  => array(
				'type' => 'input',
				'size' => 5,
				'eval' => 'int,trim'
			)
		),
		'operating_hour_start_time' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_organizationinfo.operating_hour_start_time',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'operating_hour_end_time' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_organizationinfo.operating_hour_end_time',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
	),
);

$TCA['tx_generic_domain_model_personinfo'] = array(
	'ctrl' => $TCA['tx_generic_domain_model_personinfo']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'age,category_type,physical_status,marital_status,ethnicity,gender,religion'
	),
	'types' => array(
		'1' => array('showitem' => 'age,category_type,physical_status,marital_status,ethnicity,gender,religion')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_generic_domain_model_personinfo',
				'foreign_table_where' => 'AND tx_generic_domain_model_personinfo.uid=###REC_FIELD_l18n_parent### AND tx_generic_domain_model_personinfo.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'age' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_personinfo.age',
			'config'  => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'category_type' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_personinfo.category_type',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'physical_status' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_personinfo.physical_status',
			'config'  => array(
				'type' => 'input',
				'size' => 15,
				'eval' => 'trim'
			)
		),
		'marital_status' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_personinfo.marital_status',
			'config'  => array(
				'type' => 'input',
				'size' => 15,
				'eval' => 'trim'
			)
		),
		'ethnicity' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_personinfo.ethnicity',
			'config'  => array(
				'type' => 'input',
				'size' => 15,
				'eval' => 'trim'
			)
		),
		'gender' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_personinfo.gender',
			'config'  => array(
				'type'    => 'radio',
				'default' => 'm',
				'items'   => array(
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_personinfo.gender.m', 'm'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_personinfo.gender.f', 'f')
				)
			)
		),
		'religion' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_personinfo.religion',
			'config'  => array(
				'type' => 'input',
				'size' => 15,
				'eval' => 'trim'
			)
		),
	),
);

$TCA['tx_generic_domain_model_birthinfo'] = array(
	'ctrl' => $TCA['tx_generic_domain_model_birthinfo']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'birth_date_time,birth_date_time_precision,birth_place_details'
	),
	'types' => array(
		'1' => array('showitem' => 'birth_date_time,birth_date_time_precision,birth_place_details')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_generic_domain_model_birthinfo',
				'foreign_table_where' => 'AND tx_generic_domain_model_birthinfo.uid=###REC_FIELD_l18n_parent### AND tx_generic_domain_model_birthinfo.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'birth_date_time' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_birthinfo.birth_date_time',
			'config'  => array(
				'type' => 'input',
				'size' => 12,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => '0',
				'default' => '0'
			)
		),
		'birth_date_time_precision' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_birthinfo.birth_date_time_precision',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'birth_place_details' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_birthinfo.birth_place_details',
			'config'  => array(
				'type' => 'inline',
				'foreign_table' => 'tx_generic_domain_model_address',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'newRecordLinkPosition' => 'bottom',
				),
			)
		),
		'person' => array(
			'config' => array(
				'type' => 'passthrough',
			)
		),
	),
);

$TCA['tx_generic_domain_model_value'] = array(
	'ctrl' => $TCA['tx_generic_domain_model_value']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'tx_extbase_type,hidden,key,value'
	),
	'types' => array(
		'1' => array('showitem' => 'tx_extbase_type,hidden,key,value')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_generic_domain_model_value',
				'foreign_table_where' => 'AND tx_generic_domain_model_value.uid=###REC_FIELD_l18n_parent### AND tx_generic_domain_model_value.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'tx_extbase_type' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type',
			'config'  => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Status_AddressStatus', 'Tx_Generic_Domain_Model_Status_AddressStatus'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Status_ContactNumberStatus', 'Tx_Generic_Domain_Model_Status_ContactNumberStatus'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Status_ElectronicAddressIdentifierStatus', 'Tx_Generic_Domain_Model_Status_ElectronicAddressIdentifierStatus'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Type_AddressType', 'Tx_Generic_Domain_Model_Type_AddressType'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Type_LocalityType', 'Tx_Generic_Domain_Model_Type_LocalityType'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Type_LocalityNameElementType', 'Tx_Generic_Domain_Model_Type_LocalityNameElementType'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Type_ThoroughfareType', 'Tx_Generic_Domain_Model_Type_ThoroughfareType'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Type_ThoroughfareNameElementType', 'Tx_Generic_Domain_Model_Type_ThoroughfareNameElementType'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Type_CommunicationMediaType', 'Tx_Generic_Domain_Model_Type_CommunicationMediaType'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Type_ElectronicAddressIdentifierType', 'Tx_Generic_Domain_Model_Type_ElectronicAddressIdentifierType'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Type_OrganizationNameElementType', 'Tx_Generic_Domain_Model_Type_OrganizationNameElementType'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Type_OrganizationNameType', 'Tx_Generic_Domain_Model_Type_OrganizationNameType'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Type_PersonNameType', 'Tx_Generic_Domain_Model_Type_PersonNameType'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Type_PersonNameElementType', 'Tx_Generic_Domain_Model_Type_PersonNameElementType'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Type_SubDivisionType', 'Tx_Generic_Domain_Model_Type_SubDivisionType'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Usage_AddressUsage', 'Tx_Generic_Domain_Model_Usage_AddressUsage'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Usage_ContactNumberUsage', 'Tx_Generic_Domain_Model_Usage_ContactNumberUsage'),
					array('LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.type.Tx_Generic_Domain_Model_Usage_ElectronicAddressIdentifierUsage', 'Tx_Generic_Domain_Model_Usage_ElectronicAddressIdentifierUsage')
				),
				'size' => 1,
				'maxitems' => 1,
				'default' => 0
			)
		),
		'key' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.key',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'value' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:generic/Resources/Private/Language/locallang_db.xml:tx_generic_domain_model_value.value',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'required,trim'
			)
		),
	),
);

?>