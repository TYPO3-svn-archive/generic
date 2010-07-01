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
 * A container for defining the unique characteristics of a person only
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @prefix foaf: <http://xmlns.com/foaf/0.1/>
 * @prefix owl: <http://www.w3.org/2002/07/owl#>
 * @prefix rdfs: <http://www.w3.org/2000/01/rdf-schema#>
 * @prefix core: <http://www.typo3.org/semantic/core/>
 * @prefix gen: <http://www.typo3.org/semantic/ext/generic/domain/model/>
 * @semantic gen:Person rdfs:subClassOf gen:Party
 * @semantic gen:Person owl:disjointWith gen:Organization
 * @semantic gen:Person core:isMemberOf gen:Organization
 */
class Tx_Generic_Domain_Model_Person extends Tx_Generic_Domain_Model_Party {
	
	/**
	 * Party Names
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_PersonName>
	 * @semantic gen:partyNames gen:areOfType foaf:name
	 */
	protected $partyNames;
	
	/**
	 * personInfo
	 * @var Tx_Generic_Domain_Model_PersonInfo
	 */
	protected $personInfo;
	
	/**
	 * birthInfo
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_BirthInfo>
	 */
	protected $birthInfo;
	
	/**
	 * Constructor. Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 */
	public function __construct() {
		$this->birthInfo = new Tx_Extbase_Persistence_ObjectStorage();
	}
	
	/**
	 * Setter for personInfo
	 *
	 * @param Tx_Generic_Domain_Model_PersonInfo $personInfo personInfo
	 * @return void
	 */
	public function setPersonInfo(Tx_Generic_Domain_Model_PersonInfo $personInfo) {
		$this->personInfo = $personInfo;
	}

	/**
	 * Getter for personInfo
	 *
	 * @return Tx_Generic_Domain_Model_PersonInfo personInfo
	 */
	public function getPersonInfo() {
		return $this->personInfo;
	}
	
	/**
	 * Setter for birthInfo
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_BirthInfo> $birthInfo birthInfo
	 * @return void
	 */
	public function setBirthInfo(Tx_Extbase_Persistence_ObjectStorage $birthInfo) {
		$this->birthInfo = $birthInfo;
	}

	/**
	 * Getter for birthInfo
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_BirthInfo> birthInfo
	 */
	public function getBirthInfo() {
		return $this->birthInfo;
	}
	
	/**
	 * Adds a BirthInfo
	 *
	 * @param Tx_Generic_Domain_Model_BirthInfo The BirthInfo to be added
	 * @return void
	 */
	public function addBirthInfo(Tx_Generic_Domain_Model_BirthInfo $birthInfo) {
		$this->birthInfo->attach($birthInfo);
	}
	
	/**
	 * Removes a BirthInfo
	 *
	 * @param Tx_Generic_Domain_Model_BirthInfo The BirthInfo to be removed
	 * @return void
	 */
	public function removeBirthInfo(Tx_Generic_Domain_Model_BirthInfo $birthInfo) {
		$this->birthInfo->detach($birthInfo);
	}
		
}
?>