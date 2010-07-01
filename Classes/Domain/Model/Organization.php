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
 * A container for defining the unique characteristics of an organisation only
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Generic_Domain_Model_Organization extends Tx_Generic_Domain_Model_Party {
	
	/**
	 * Party Names
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_OrganizationName>
	 */
	protected $partyNames;
	
	/**
	 * organizationInfo
	 * @var Tx_Generic_Domain_Model_OrganizationInfo
	 */
	protected $organizationInfo;
	
	/**
	 * Setter for organizationInfo
	 *
	 * @param Tx_Generic_Domain_Model_OrganizationInfo $organizationInfo organizationInfo
	 * @return void
	 */
	public function setOrganizationInfo(Tx_Generic_Domain_Model_OrganizationInfo $organizationInfo) {
		$this->organizationInfo = $organizationInfo;
	}

	/**
	 * Getter for organizationInfo
	 *
	 * @return Tx_Generic_Domain_Model_OrganizationInfo organizationInfo
	 */
	public function getOrganizationInfo() {
		return $this->organizationInfo;
	}
		
}
?>