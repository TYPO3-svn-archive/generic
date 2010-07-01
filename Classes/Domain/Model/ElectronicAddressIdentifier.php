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
 * ElectronicAddressIdentifyer
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Generic_Domain_Model_ElectronicAddressIdentifier extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * value
	 * @var string
	 */
	protected $value;
	
	/**
	 * Type of electronic address identifier
	 * @var Tx_Generic_Domain_Model_Type_ElectronicAddressIdentifierType
	 */
	protected $type;
	
	/**
	 * Status of the entity. e.g. Old, Current, Inactive, Active, etc
	 * @var string
	 */
	protected $status;
	
	/**
	 * Usage of electronic address identifier. e.g. business, personal
	 * @var Tx_Generic_Domain_Model_Usage_ElectronicAddressIdentifierUsage
	 */
	protected $usage;
	
	/**
	 * An electronic address identifier is usually stored (and probably exchanged) in conjunction with a label which is typically displayed and the URL/electronic identifier just links that label.
	 * @var string
	 */
	protected $label;
	
	
	
	/**
	 * Setter for value
	 *
	 * @param string $value value
	 * @return void
	 */
	public function setValue($value) {
		$this->value = $value;
	}

	/**
	 * Getter for value
	 *
	 * @return string value
	 */
	public function getValue() {
		return $this->value;
	}
	
	/**
	 * Setter for type
	 *
	 * @param Tx_Generic_Domain_Model_Status_ElectronicAddressIdentifierStatus $type Type of electronic address identifier
	 * @return void
	 */
	public function setType(Tx_Generic_Domain_Model_Status_ElectronicAddressIdentifierStatus $type) {
		$this->type = $type;
	}

	/**
	 * Getter for type
	 *
	 * @return Tx_Generic_Domain_Model_Status_ElectronicAddressIdentifierStatus Type of electronic address identifier
	 */
	public function getType() {
		return $this->type;
	}
	
	/**
	 * Setter for status
	 *
	 * @param string $status Status of the entity. e.g. Old, Current, Inactive, Active, etc
	 * @return void
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * Getter for status
	 *
	 * @return string Status of the entity. e.g. Old, Current, Inactive, Active, etc
	 */
	public function getStatus() {
		return $this->status;
	}
	
	/**
	 * Setter for usage
	 *
	 * @param Tx_Generic_Domain_Model_Usage_ElectronicAddressIdentifierUsage $usage Usage of electronic address identifier. e.g. business, personal
	 * @return void
	 */
	public function setUsage(Tx_Generic_Domain_Model_Usage_ElectronicAddressIdentifierUsage $usage) {
		$this->usage = $usage;
	}

	/**
	 * Getter for usage
	 *
	 * @return Tx_Generic_Domain_Model_Usage_ElectronicAddressIdentifierUsage Usage of electronic address identifier. e.g. business, personal
	 */
	public function getUsage() {
		return $this->usage;
	}
	
	/**
	 * Setter for label
	 *
	 * @param string $label An electronic address identifier is usually stored (and probably exchanged) in conjunction with a label which is typically displayed and the URL/electronic identifier just links that label.
	 * @return void
	 */
	public function setLabel($label) {
		$this->label = $label;
	}

	/**
	 * Getter for label
	 *
	 * @return string An electronic address identifier is usually stored (and probably exchanged) in conjunction with a label which is typically displayed and the URL/electronic identifier just links that label.
	 */
	public function getLabel() {
		return $this->label;
	}
	
	/**
	 * Returns a string representation of this electronic address identifier
	 *
	 * @return string The electronic address identifier
	 */
	public function __toString() {
		return $this->getValue();
	}
	
}
?>