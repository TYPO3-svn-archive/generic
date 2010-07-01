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
 * PersonInfo
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Generic_Domain_Model_PersonInfo extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * Age of the person as integer
	 * @var integer
	 */
	protected $age;
	
	/**
	 * Type of category the person belongs such as customer, employee, friend, prospect, etc
	 * @var string
	 */
	protected $categoryType;
	
	/**
	 * Status of the person. e.g. living, deceased, retired. To log the date of the status such as death or retired, use "Events" element
	 * @var string
	 */
	protected $physicalStatus;
	
	/**
	 * Free text description of the current marital status, e.g. married, separated, divorced, separated, etc.
	 * @var string
	 */
	protected $maritalStatus;
	
	/**
	 * Ethnicity of the person, e.g. Asian, Chinese, African, etc.
	 * @var string
	 */
	protected $ethnicity;
	
	/**
	 * Free text gender description.
	 * @var string
	 */
	protected $gender;
	
	/**
	 * Free text name of the religion
	 * @var string
	 */
	protected $religion;
	
	
	
	/**
	 * Setter for age
	 *
	 * @param integer $age Age of the person as integer
	 * @return void
	 */
	public function setAge($age) {
		$this->age = $age;
	}

	/**
	 * Getter for age
	 *
	 * @return integer Age of the person as integer
	 */
	public function getAge() {
		return $this->age;
	}
	
	/**
	 * Setter for categoryType
	 *
	 * @param string $categoryType Type of category the person belongs such as customer, employee, friend, prospect, etc
	 * @return void
	 */
	public function setCategoryType($categoryType) {
		$this->categoryType = $categoryType;
	}

	/**
	 * Getter for categoryType
	 *
	 * @return string Type of category the person belongs such as customer, employee, friend, prospect, etc
	 */
	public function getCategoryType() {
		return $this->categoryType;
	}
	
	/**
	 * Setter for physicalStatus
	 *
	 * @param string $physicalStatus Status of the person. e.g. living, deceased, retired. To log the date of the status such as death or retired, use "Events" element
	 * @return void
	 */
	public function setPhysicalStatus($physicalStatus) {
		$this->physicalStatus = $physicalStatus;
	}

	/**
	 * Getter for physicalStatus
	 *
	 * @return string Status of the person. e.g. living, deceased, retired. To log the date of the status such as death or retired, use "Events" element
	 */
	public function getPhysicalStatus() {
		return $this->physicalStatus;
	}
	
	/**
	 * Setter for maritalStatus
	 *
	 * @param string $maritalStatus Free text description of the current marital status, e.g. married, separated, divorced, separated, etc.
	 * @return void
	 */
	public function setMaritalStatus($maritalStatus) {
		$this->maritalStatus = $maritalStatus;
	}

	/**
	 * Getter for maritalStatus
	 *
	 * @return string Free text description of the current marital status, e.g. married, separated, divorced, separated, etc.
	 */
	public function getMaritalStatus() {
		return $this->maritalStatus;
	}
	
	/**
	 * Setter for ethnicity
	 *
	 * @param string $ethnicity Ethnicity of the person, e.g. Asian, Chinese, African, etc.
	 * @return void
	 */
	public function setEthnicity($ethnicity) {
		$this->ethnicity = $ethnicity;
	}

	/**
	 * Getter for ethnicity
	 *
	 * @return string Ethnicity of the person, e.g. Asian, Chinese, African, etc.
	 */
	public function getEthnicity() {
		return $this->ethnicity;
	}
	
	/**
	 * Setter for gender
	 *
	 * @param string $gender Free text gender description.
	 * @return void
	 */
	public function setGender($gender) {
		$this->gender = $gender;
	}

	/**
	 * Getter for gender
	 *
	 * @return string Free text gender description.
	 */
	public function getGender() {
		return $this->gender;
	}
	
	/**
	 * Setter for religion
	 *
	 * @param string $religion Free text name of the religion
	 * @return void
	 */
	public function setReligion($religion) {
		$this->religion = $religion;
	}

	/**
	 * Getter for religion
	 *
	 * @return string Free text name of the religion
	 */
	public function getReligion() {
		return $this->religion;
	}
	
}
?>