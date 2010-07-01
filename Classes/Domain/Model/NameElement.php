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
 * NameElement
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Generic_Domain_Model_NameElement extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * The name value
	 * @var string
	 */
	protected $value;
	
	/**
	 * Semantics of data associated with name.
	 * @var Tx_Generic_Domain_Model_Type
	 */
	protected $type;
	
	/**
	 * abbrevation
	 * @var boolean
	 */
	protected $abbrevation;
	
	/**
	 * Constructor. Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 */
	public function __construct($value, $type = NULL, $abbrevation = FALSE) {
		$this->setValue($value);
		$this->setType($type);
		$this->setAbbrevation($abbrevation);
	}
	
	/**
	 * Setter for value
	 *
	 * @param string $value The name value
	 * @return void
	 */
	public function setValue($value) {
		$this->value = (string)$value;
	}

	/**
	 * Getter for value
	 *
	 * @return string The name value
	 */
	public function getValue() {
		return $this->value;
	}
	
	/**
	 * Setter for type
	 *
	 * @param Tx_Generic_Domain_Model_Type $type Semantics of data associated with name.
	 * @return void
	 */
	public function setType(Tx_Generic_Domain_Model_Type $type = NULL) {
		$this->type = $type;
	}

	/**
	 * Getter for type
	 *
	 * @return Tx_Generic_Domain_Model_Type Semantics of data associated with name.
	 */
	public function getType() {
		return $this->type;
	}
	
	/**
	 * Setter for abbrevation
	 *
	 * @param boolean $abbrevation abbrevation
	 * @return void
	 */
	public function setAbbrevation($abbrevation) {
		$this->abbrevation = (bool)$abbrevation;
	}

	/**
	 * Getter for abbrevation
	 *
	 * @return boolean abbrevation
	 */
	public function getAbbrevation() {
		return $this->abbrevation;
	}
	
	/**
	 * Returns the boolean state of abbrevation
	 *
	 * @return bool The state of abbrevation
	 */
	public function isAbbrevation() {
		return $this->getAbbrevation();
	}
	
	/**
	 * Returns a string representation of this name
	 *
	 * @return string The concatenated name
	 */
	public function __toString() {
		return $this->getValue();
	}
	
}
?>