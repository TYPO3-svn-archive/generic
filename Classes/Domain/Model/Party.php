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
 * An party (could be an organization or person)
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Generic_Domain_Model_Party extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * Party Names
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_PartyName>
	 * @cascade remove
	 */
	protected $partyNames;
	
	/**
	 * A text description of the party
	 * @var string
	 */
	protected $freeTextLines;
	
	/**
	 * addresses
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_Address>
	 * @cascade remove
	 */
	protected $addresses;
	
	/**
	 * electronicAddressIdentifiers
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_ElectronicAddressIdentifier>
	 * @cascade remove
	 */
	protected $electronicAddressIdentifiers;
	
	/**
	 * contactNumbers
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_ContactNumber>
	 * @cascade remove
	 */
	protected $contactNumbers;
	
	/**
	 * Constructor. Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 */
	public function __construct() {
		$this->partyNames = new Tx_Extbase_Persistence_ObjectStorage();
		$this->addresses = new Tx_Extbase_Persistence_ObjectStorage();
	}
	
	/**
	 * Returns the first name in the list of party names
	 *
	 * @return Tx_Generic_Domain_Model_PartyName
	 */
	public function getName() {
		$partyName = current($this->getPartyNames()->toArray());
		return (string)$partyName;
	}
	
	/**
	 * Setter for PartyNames
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_PartyName> $partyNames PartyNames
	 * @return void
	 */
	public function setPartyNames(Tx_Extbase_Persistence_ObjectStorage $partyNames) {
		$this->partyNames = $partyNames;
	}

	/**
	 * Getter for PartyNames
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_PartyName> PartyNames
	 */
	public function getPartyNames() {
		return clone $this->partyNames;
	}
	
	/**
	 * Adds a PartyName
	 *
	 * @param Tx_Generic_Domain_Model_PartyName The PartyName to be added
	 * @return void
	 */
	public function addPartyName(Tx_Generic_Domain_Model_PartyName $partyName) {
		$this->partyNames->attach($partyName);
	}
	
	/**
	 * Removes a PartyName
	 *
	 * @param Tx_Generic_Domain_Model_PartyName The PartyName to be removed
	 * @return void
	 */
	public function removePartyName(Tx_Generic_Domain_Model_PartyName $partyName) {
		$this->partyNames->detach($partyName);
	}
	
	/**
	 * Setter for freeTextLines
	 *
	 * @param string $freeTextLines A text description of the party
	 * @return void
	 */
	public function setFreeTextLines($freeTextLines) {
		$this->freeTextLines = $freeTextLines;
	}

	/**
	 * Getter for freeTextLines
	 *
	 * @return string A text description of the party
	 */
	public function getFreeTextLines() {
		return $this->freeTextLines;
	}
	
	/**
	 * Setter for addresses
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_Address> $addresses addresses
	 * @return void
	 */
	public function setAddresses(Tx_Extbase_Persistence_ObjectStorage $addresses) {
		$this->addresses = $addresses;
	}

	/**
	 * Returns the first address
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_Address> addresses
	 */
	public function getAddress() {
		$address = current($this->getAddresses()->toArray());
		return $address;
	}
	
	/**
	 * Getter for addresses
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_Address> addresses
	 */
	public function getAddresses() {
		return $this->addresses;
	}
	
	/**
	 * Adds a Address
	 *
	 * @param Tx_Generic_Domain_Model_Address The Address to be added
	 * @return void
	 */
	public function addAddress(Tx_Generic_Domain_Model_Address $address) {
		$this->addresses->attach($address);
	}
	
	/**
	 * Removes a Address
	 *
	 * @param Tx_Generic_Domain_Model_Address The Address to be removed
	 * @return void
	 */
	public function removeAddress(Tx_Generic_Domain_Model_Address $address) {
		$this->addresses->detach($address);
	}
	
	/**
	 * Setter for electronicAddressIdentifiers
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_ElectronicAddressIdentifier> $electronicAddressIdentifiers electronicAddressIdentifiers
	 * @return void
	 */
	public function setElectronicAddressIdentifiers(Tx_Extbase_Persistence_ObjectStorage $electronicAddressIdentifiers) {
		$this->electronicAddressIdentifiers = $electronicAddressIdentifiers;
	}

	/**
	 * Getter for electronicAddressIdentifiers
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_ElectronicAddressIdentifier> electronicAddressIdentifiers
	 */
	public function getElectronicAddressIdentifiers() {
		return $this->electronicAddressIdentifiers;
	}
	
	/**
	 * Adds a ElectronicAddressIdentifyer
	 *
	 * @param Tx_Generic_Domain_Model_ElectronicAddressIdentifier The ElectronicAddressIdentifyer to be added
	 * @return void
	 */
	public function addElectronicAddressIdentifier(Tx_Generic_Domain_Model_ElectronicAddressIdentifier $electronicAddressIdentifier) {
		$this->electronicAddressIdentifiers->attach($electronicAddressIdentifier);
	}
	
	/**
	 * Removes a ElectronicAddressIdentifyer
	 *
	 * @param Tx_Generic_Domain_Model_ElectronicAddressIdentifier The ElectronicAddressIdentifyer to be removed
	 * @return void
	 */
	public function removeElectronicAddressIdentifier(Tx_Generic_Domain_Model_ElectronicAddressIdentifier $electronicAddressIdentifier) {
		$this->electronicAddressIdentifiers->detach($electronicAddressIdentifier);
	}
	
	/**
	 * Setter for contactNumbers
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_ContactNumber> $contactNumbers contactNumbers
	 * @return void
	 */
	public function setContactNumbers(Tx_Extbase_Persistence_ObjectStorage $contactNumbers) {
		$this->contactNumbers = $contactNumbers;
	}

	/**
	 * Getter for contactNumbers
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_ContactNumber> contactNumbers
	 */
	public function getContactNumbers() {
		return $this->contactNumbers;
	}
	
	/**
	 * Adds a ContactNumber
	 *
	 * @param Tx_Generic_Domain_Model_ContactNumber The ContactNumber to be added
	 * @return void
	 */
	public function addContactNumber(Tx_Generic_Domain_Model_ContactNumber $contactNumber) {
		$this->contactNumbers->attach($contactNumber);
	}
	
	/**
	 * Removes a ContactNumber
	 *
	 * @param Tx_Generic_Domain_Model_ContactNumber The ContactNumber to be removed
	 * @return void
	 */
	public function removeContactNumber(Tx_Generic_Domain_Model_ContactNumber $contactNumber) {
		$this->contactNumbers->detach($contactNumber);
	}
	
	/**
	 * Returns a string representation of this name
	 *
	 * @return string The concatenated name
	 */
	public function __toString() {
		return $this->getName();
	}
	
}
?>