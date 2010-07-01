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
 * OrganizationInfo
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Generic_Domain_Model_OrganizationInfo extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * Type of organisation. Free text description, e.g. Company, Trust, Bank, Society, Club, etc.
	 * @var string
	 */
	protected $type;
	
	/**
	 * Type of category the organisation belongs to such as club, association, company, vendor, etc
	 * @var string
	 */
	protected $categoryType;
	
	/**
	 * Status of the entity. e.g. Old, Current, Inactive, Active, etc
	 * @var string
	 */
	protected $status;
	
	/**
	 * Nature of the organisation. e.g. Public limited, Commercial, charity, non-commercial, etc.
	 * @var string
	 */
	protected $nature;
	
	/**
	 * Organisation Industry type such as IT, Manufacturing.
	 * @var string
	 */
	protected $industryType;
	
	/**
	 * Industry code or classification
	 * @var string
	 */
	protected $industryCode;
	
	/**
	 * Type of code used for industry code
	 * @var string
	 */
	protected $industryCodeType;
	
	/**
	 * Free text description of organisation size in terms of number of employees
	 * @var string
	 */
	protected $numberOfEmployees;
	
	/**
	 * Operating hour start time of the organisation, e.g. 9:00am
	 * @var string
	 */
	protected $operatingHourStartTime;
	
	/**
	 * Operating hour end time for the organisation. e.g. 5:00pm
	 * @var string
	 */
	protected $operatingHourEndTime;
	
	
	
	/**
	 * Setter for type
	 *
	 * @param string $type Type of organisation. Free text description, e.g. Company, Trust, Bank, Society, Club, etc.
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Getter for type
	 *
	 * @return string Type of organisation. Free text description, e.g. Company, Trust, Bank, Society, Club, etc.
	 */
	public function getType() {
		return $this->type;
	}
	
	/**
	 * Setter for categoryType
	 *
	 * @param string $categoryType Type of category the organisation belongs to such as club, association, company, vendor, etc
	 * @return void
	 */
	public function setCategoryType($categoryType) {
		$this->categoryType = $categoryType;
	}

	/**
	 * Getter for categoryType
	 *
	 * @return string Type of category the organisation belongs to such as club, association, company, vendor, etc
	 */
	public function getCategoryType() {
		return $this->categoryType;
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
	 * Setter for nature
	 *
	 * @param string $nature Nature of the organisation. e.g. Public limited, Commercial, charity, non-commercial, etc.
	 * @return void
	 */
	public function setNature($nature) {
		$this->nature = $nature;
	}

	/**
	 * Getter for nature
	 *
	 * @return string Nature of the organisation. e.g. Public limited, Commercial, charity, non-commercial, etc.
	 */
	public function getNature() {
		return $this->nature;
	}
	
	/**
	 * Setter for industryType
	 *
	 * @param string $industryType Organisation Industry type such as IT, Manufacturing.
	 * @return void
	 */
	public function setIndustryType($industryType) {
		$this->industryType = $industryType;
	}

	/**
	 * Getter for industryType
	 *
	 * @return string Organisation Industry type such as IT, Manufacturing.
	 */
	public function getIndustryType() {
		return $this->industryType;
	}
	
	/**
	 * Setter for industryCode
	 *
	 * @param string $industryCode Industry code or classification
	 * @return void
	 */
	public function setIndustryCode($industryCode) {
		$this->industryCode = $industryCode;
	}

	/**
	 * Getter for industryCode
	 *
	 * @return string Industry code or classification
	 */
	public function getIndustryCode() {
		return $this->industryCode;
	}
	
	/**
	 * Setter for industryCodeType
	 *
	 * @param string $industryCodeType Type of code used for industry code
	 * @return void
	 */
	public function setIndustryCodeType($industryCodeType) {
		$this->industryCodeType = $industryCodeType;
	}

	/**
	 * Getter for industryCodeType
	 *
	 * @return string Type of code used for industry code
	 */
	public function getIndustryCodeType() {
		return $this->industryCodeType;
	}
	
	/**
	 * Setter for numberOfEmployees
	 *
	 * @param string $numberOfEmployees Free text description of organisation size in terms of number of employees
	 * @return void
	 */
	public function setNumberOfEmployees($numberOfEmployees) {
		$this->numberOfEmployees = $numberOfEmployees;
	}

	/**
	 * Getter for numberOfEmployees
	 *
	 * @return string Free text description of organisation size in terms of number of employees
	 */
	public function getNumberOfEmployees() {
		return $this->numberOfEmployees;
	}
	
	/**
	 * Setter for operatingHourStartTime
	 *
	 * @param string $operatingHourStartTime Operating hour start time of the organisation, e.g. 9:00am
	 * @return void
	 */
	public function setOperatingHourStartTime($operatingHourStartTime) {
		$this->operatingHourStartTime = $operatingHourStartTime;
	}

	/**
	 * Getter for operatingHourStartTime
	 *
	 * @return string Operating hour start time of the organisation, e.g. 9:00am
	 */
	public function getOperatingHourStartTime() {
		return $this->operatingHourStartTime;
	}
	
	/**
	 * Setter for operatingHourEndTime
	 *
	 * @param string $operatingHourEndTime Operating hour end time for the organisation. e.g. 5:00pm
	 * @return void
	 */
	public function setOperatingHourEndTime($operatingHourEndTime) {
		$this->operatingHourEndTime = $operatingHourEndTime;
	}

	/**
	 * Getter for operatingHourEndTime
	 *
	 * @return string Operating hour end time for the organisation. e.g. 5:00pm
	 */
	public function getOperatingHourEndTime() {
		return $this->operatingHourEndTime;
	}
	
}
?>