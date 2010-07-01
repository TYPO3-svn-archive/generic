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
 * Controller for the Party object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Generic_Controller_PartyController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * @var Tx_Generic_Domain_Repository_PartyRepository
	 */
	protected $partyRepository;
	
	/**
	 * @var Tx_Generic_Domain_Repository_ValueRepository
	 */
	protected $valueRepository;
	
	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	public function initializeAction() {
		$this->partyRepository = t3lib_div::makeInstance('Tx_Generic_Domain_Repository_PartyRepository');
		$this->valueRepository = t3lib_div::makeInstance('Tx_Generic_Domain_Repository_ValueRepository');
		$this->countryNameRepository = t3lib_div::makeInstance('Tx_Generic_Domain_Repository_CountryNameRepository');
	}
	
	/**
	 * Index action for this controller. Displays a list of parties.
	 *
	 * @return string The rendered view
	 */
	public function listAction() {
		$this->view->assign('parties', $this->partyRepository->findAll());
	}
	
	/**
	 * Index action for this controller. Displays a list of parties.
	 *
	 * @param Tx_Generic_Domain_Model_Party $party The party to be displayed
	 * @return string The rendered view
	 */
	public function showAction(Tx_Generic_Domain_Model_Party $party) {
		$this->view->assign('party', $party);
	}
	
	/**
	 * Displays a form for creating a new party
	 *
	 * @param Tx_Generic_Domain_Model_Organization $organization
	 * @return string HTML form
	 * @dontverify $party
	 */
	public function newOrganizationAction(Tx_Generic_Domain_Model_Organization $party = NULL) {
		$this->view->assign('party', $party);
		$this->view->assign('partyNameTypes', $this->valueRepository->findByRecordType('Tx_Generic_Domain_Model_Type_OrganizationNameType'));
		$this->view->assign('countryNames', $this->countryNameRepository->findAll());
	}

	/**
	 * Creates a new party
	 *
	 * @param Tx_Generic_Domain_Model_Organization $party
	 * @return void
	 * @dontverifyrequesthash
	 */
	public function createOrganizationAction(Tx_Generic_Domain_Model_Organization $party) {
		// debug($party);
		// return '';
		$this->partyRepository->add($party);
		$this->redirect('list');
	}
	
}