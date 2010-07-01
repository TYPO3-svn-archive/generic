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
 * ContactNumber
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Generic_Domain_Model_ContactNumber extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * TODO This should be represented as list of ContactNumberElement
	 * @var string
	 */
	protected $value;
	
	/**
	 * Free text explanation of the communication line type. e.g. telephone, land line, mobile, fax, pager, etc
	 * @var Tx_Generic_Domain_Model_Type_CommunicationMediaType
	 */
	protected $communicationMediaType;
	
	/**
	 * Current Status of Contact Number.  e.g. Old, Current, Inactive, Active, etc
	 * @var Tx_Generic_Domain_Model_Status_ContactNumberStatus
	 */
	protected $status;
	
	/**
	 * Nature of contact. Example: business, personal, free call, toll free, after hours, etc
	 * @var Tx_Generic_Domain_Model_Usage_ContactNumberUsage
	 */
	protected $usage;
	
	/**
	 * Free text expression of contact hours. e.g. 9:00AM-5:00PM
	 * @var string
	 */
	protected $contactHours;
	
	
	
	/**
	 * Setter for value
	 *
	 * @param string $value TODO This should be represented as list of ContactNumberElement
	 * @return void
	 */
	public function setValue($value) {
		$this->value = $value;
	}

	/**
	 * Getter for value
	 *
	 * @return string TODO This should be represented as list of ContactNumberElement
	 */
	public function getValue() {
		return $this->value;
	}
	
	/**
	 * Setter for communicationMediaType
	 *
	 * @param Tx_Generic_Domain_Model_Type_CommunicationMediaType $communicationMediaType Free text explanation of the communication line type. e.g. telephone, land line, mobile, fax, pager, etc
	 * @return void
	 */
	public function setCommunicationMediaType(Tx_Generic_Domain_Model_Type_CommunicationMediaType $communicationMediaType) {
		$this->communicationMediaType = $communicationMediaType;
	}

	/**
	 * Getter for communicationMediaType
	 *
	 * @return Tx_Generic_Domain_Model_Type_CommunicationMediaType Free text explanation of the communication line type. e.g. telephone, land line, mobile, fax, pager, etc
	 */
	public function getCommunicationMediaType() {
		return $this->communicationMediaType;
	}
	
	/**
	 * Setter for status
	 *
	 * @param Tx_Generic_Domain_Model_Status_ContactNumberStatus $status Current Status of Contact Number.  e.g. Old, Current, Inactive, Active, etc
	 * @return void
	 */
	public function setStatus(Tx_Generic_Domain_Model_Status_ContactNumberStatus $status) {
		$this->status = $status;
	}

	/**
	 * Getter for status
	 *
	 * @return Tx_Generic_Domain_Model_Status_ContactNumberStatus Current Status of Contact Number.  e.g. Old, Current, Inactive, Active, etc
	 */
	public function getStatus() {
		return $this->status;
	}
	
	/**
	 * Setter for usage
	 *
	 * @param Tx_Generic_Domain_Model_Usage_ContactNumberUsage $usage Nature of contact. Example: business, personal, free call, toll free, after hours, etc
	 * @return void
	 */
	public function setUsage(Tx_Generic_Domain_Model_Usage_ContactNumberUsage $usage) {
		$this->usage = $usage;
	}

	/**
	 * Getter for usage
	 *
	 * @return Tx_Generic_Domain_Model_Usage_ContactNumberUsage Nature of contact. Example: business, personal, free call, toll free, after hours, etc
	 */
	public function getUsage() {
		return $this->usage;
	}
	
	/**
	 * Setter for contactHours
	 *
	 * @param string $contactHours Free text expression of contact hours. e.g. 9:00AM-5:00PM
	 * @return void
	 */
	public function setContactHours($contactHours) {
		$this->contactHours = $contactHours;
	}

	/**
	 * Getter for contactHours
	 *
	 * @return string Free text expression of contact hours. e.g. 9:00AM-5:00PM
	 */
	public function getContactHours() {
		return $this->contactHours;
	}
	
	/**
	 * Returns a string representation of this contact number
	 *
	 * @return string The contact number
	 */
	public function __toString() {
		return $this->getValue();
	}
	
}
?>