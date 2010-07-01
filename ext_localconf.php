<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'Party' => 'list,show,newOrganization,newPerson,createOrganization,createPerson',
		'Administration' => 'adminPanel,populate'
	),
	array(
		'Party' => 'newOrganization,newPerson',
		'Administration' => 'adminPanel,populate'
	)
);

?>