<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2010 Jochen Rau <jochen.rau@typoplanet.de>, typoplanet
*  			
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Controller to setup static information like type, usage, and status
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Generic_Controller_AdministrationController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * Shows the Admin Panel
	 *
	 * @return void
	 */
	public function adminPanelAction() {
	}

	/**
	 * Populates the Extension with static data like ValueObjects for Type, Usage, and Status
	 *
	 * @return void
	 */
	public function populateAction() {
		$valueRepository = t3lib_div::makeInstance('Tx_Generic_Domain_Repository_ValueRepository');
		$valueRepository->removeAll();
		
		$classes = array(
			'Tx_Generic_Domain_Model_Status_AddressStatus' => array(
				'Undefined',
				'Active',
				'Inactive',
				),
			'Tx_Generic_Domain_Model_Status_ContactNumberStatus' => array(
				'Undefined',
				'Active',
				'Inactive',
				),
			'Tx_Generic_Domain_Model_Status_ElectronicAddressIdentifierStatus' => array(
				'Undefined',
				'Active',
				'Inactive',
				),
			'Tx_Generic_Domain_Model_Type_AddressType' => array(
				'Undefined',
				'Airport',
				'Business',
				'Caravan Park',
				'Commercial Park',
				'Community Development',
				'Educational Institution',
				'Entertainment',
				'Hospital',
				'Location',
				'Marina',
				'Military Base',
				'Overseas Military',
				'Port',
				'Primary',
				'Recreational Park',
				'Resort',
				'Retirement Village',
				'Rural',
				'Secondary',
				'Shopping Centre',
				'Sporting Centre',
				'Urban',
				),
			'Tx_Generic_Domain_Model_Type_CommunicationMediaType' => array(
				'Undefined',
				'Telephone',
				'Fax',
				'Cellphone',
				'Pager',
				'VOIP',
				),
			'Tx_Generic_Domain_Model_Type_ElectronicAddressIdentifierType' => array(
				'Undefined',
				'AIM',
				'E-Mail',
				'Google',
				'ICQ',
				'Jabber',
				'MSN',
				'SIP',
				'Skype',
				'URL',
				'Yahoo',
				),
			'Tx_Generic_Domain_Model_Type_OrganizationNameElementType' => array(
				'Unstructured',
				'FullName',
				'NameOnly',
				'TypeOnly',
				),
			'Tx_Generic_Domain_Model_Type_OrganizationNameType' => array(
				'Undefined',
				'LegalName',
				'FormerName',
				'CommonUse',
				'PublishingName',
				'OfficialName',
				'UnofficialName',
				),
			'Tx_Generic_Domain_Model_Type_PersonNameType' => array(
				'Undefined',
				'Legal Name',
				'Maiden Name',
				'Nick Name',
				),
			'Tx_Generic_Domain_Model_Type_PersonNameElementType' => array(
				'Unstructured',
				'Preceding Title',
				'Title',
				'First Name',
				'Middle Name',
				'Last Name',
				'Other Name',
				'Alias',
				'Generation Identifyer',
				'Degree',
				),
			'Tx_Generic_Domain_Model_Type_SubDivisionType' => array(
				'Undefined',
				'Department',
				'Division',
				'Branch',
				'BusinessUnit',
				'School',
				'Section',
				),
			'Tx_Generic_Domain_Model_Usage_AddressUsage' => array(
				'Undefined',
				'Business',
				'Billing',
				'Communication',
				'Contact',
				'Mailing',
				'Personal',
				'Postal',
				'Residential',
				),
			'Tx_Generic_Domain_Model_Usage_ContactNumberUsage' => array(
				'Undefined',
				'Business',
				'Personal',
				),
			'Tx_Generic_Domain_Model_Usage_ElectronicAddressIdentifierUsage' => array(
				'Undefined',
				'Business',
				'Personal',
				),
			'Tx_Generic_Domain_Model_Type_LocalityType' => array(
				'Undefined',
				'Municipality',
				'PostTown',
				'Place',
				'Suburb',
				'Town',
				'Village',
				'Area',
				'Zone',
				),
			'Tx_Generic_Domain_Model_Type_LocalityNameElementType' => array(
				'Undefined',
				'Name',
				'Number',
				'ReferenceLocation',
				'Type',
				),
			'Tx_Generic_Domain_Model_Type_ThoroughfareType' => array(
				'Undefined',
				'Street',
				'Road',
				'Avenue',
				),
			'Tx_Generic_Domain_Model_Type_ThoroughfareNameElementType' => array(
				'Unstructured',
				'NameOnly',
				'PreDirection',
				'PostDirection',
				'NameAndNumber',
				'NameAndType',
				'NameNumberAndType',
				'SubThoroughfareConnector',
				'ReferenceLocation',
				'Type',
				),
			'Tx_Generic_Domain_Model_Type_CountryNameType' => array(
				'Undefined',
				'Country',
				),
			);

		foreach ($classes as $className => $values) {
			foreach ($values as $value) {
				$valueObject = new $className($value);
				$valueRepository->add($valueObject);
			}
		}
		$this->flashMessages->add('The Static Objects were created.');
		$this->redirect('index');
	}

	
	
}
?>