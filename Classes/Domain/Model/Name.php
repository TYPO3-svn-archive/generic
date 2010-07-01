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
 * A name
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @prefix rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
 * @prefix rdfs="http://www.w3.org/2000/01/rdf-schema#"
 * @prefix foaf="http://xmlns.com/foaf/0.1/"
 * @semantic _:a rdfs:subClassOf Tx_Generic_Domain_Model_Party
 * @semantic _:a rdf:type foaf:name
 * @semantic _:a rdf:type foaf:name
 */
class Tx_Generic_Domain_Model_Name extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * Enumerated list of type of name.  example: Legal name, common name
	 * @var Tx_Generic_Domain_Model_Type
	 */
	protected $type;
		
	/**
	 * The name elements
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_NameElement>
	 */
	protected $nameElements;
	
	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_Name>
	 */
	protected $subNames;
	
	/**
	 * Constructor. Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 */
	public function __construct() {
		$this->nameElements = new Tx_Extbase_Persistence_ObjectStorage();
		$this->subNames = new Tx_Extbase_Persistence_ObjectStorage();
	}
	
	/**
	 * Setter for type
	 *
	 * @param string $type type of name.  example: Legal name, common name
	 * @return void
	 */
	public function setType(Tx_Generic_Domain_Model_Type $type) {
		$this->type = $type;
	}

	/**
	 * Getter for type
	 *
	 * @return string Enumerated list of type of name.  example: Legal name, common name
	 */
	public function getType() {
		return $this->type;
	}
	
	/**
	 * Setter for the name elements to this post
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage $nameElements An Object Storage of related Comment instances
	 * @return void
	 */
	public function setNameElements(Tx_Extbase_Persistence_ObjectStorage $nameElements) {
		$this->nameElements = $nameElements;
	}

	/**
	 * Returns the name elements to this post
	 *
	 * @return An Tx_Extbase_Persistence_ObjectStorage holding instances of Tx_Generic_Domain_Model_NameElement
	 */
	public function getNameElements() {
		return clone $this->nameElements;
	}
	
	/**
	 * Adds a NameElement
	 *
	 * @param Tx_Generic_Domain_Model_NameElement The NameElement to be added
	 * @return void
	 */
	public function addNameElement(Tx_Generic_Domain_Model_NameElement $nameElement) {
		$this->nameElements->attach($nameElement);
	}
	
	/**
	 * Removes a NameElement
	 *
	 * @param Tx_Generic_Domain_Model_NameElement The NameElement to be removed
	 * @return void
	 */
	public function removeNameElement(Tx_Generic_Domain_Model_NameElement $nameElement) {
		$this->nameElements->detach($nameElement);
	}
	
	/**
	 * Setter for subNames
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_Name> $subNames subNames
	 * @return void
	 */
	public function setSubNames(Tx_Extbase_Persistence_ObjectStorage $subNames) {
		$this->subNames = $subNames;
	}

	/**
	 * Getter for subNames
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_Name> subNames
	 */
	public function getSubNames() {
		return $this->subNames;
	}
	
	/**
	 * Adds a OrganizationName
	 *
	 * @param Tx_Generic_Domain_Model_Name The name to be added
	 * @return void
	 */
	public function addSubName(Tx_Generic_Domain_Model_Name $subName) {
		$this->subNames->attach($subName);
	}
	
	/**
	 * Removes a OrganizationName
	 *
	 * @param Tx_Generic_Domain_Model_Name The name to be removed
	 * @return void
	 */
	public function removeSubName(Tx_Generic_Domain_Model_Name $subName) {
		$this->subNames->detach($subName);
	}
	
	/**
	 * Returns a string representation of this name
	 *
	 * @return string The concatenated name
	 */
	public function __toString() {
		$nameElements = $this->getNameElements();
		return implode(' ', $nameElements->toArray());
	}
}
?>