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
 * BirthInfo
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Generic_Domain_Model_BirthInfo extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * Birth data and time to the known precision. Usually, it is only the date that is known. Leave time as 00:00:00 if not known.
	 * @var integer
	 */
	protected $birthDateTime;
	
	/**
	 * Specify the duration of the uncertainity period as a range where BirthDateTime is in the middle of the range. Uses xsd:duration as the data type. The time interval is in the format: PnYnMnDTnHnMnS P: period (required), nY: number of years, nM: number of months, nD: number of days, T: start of a time section (required if hours, minutes or secords to be specified), nH: number of hours, nM: number of minutes, nS: number of seconds  P5Y -> period of 5 years P5Y2M10D -> 5 years, 2 months, 10 days, and 15 hours
	 * @var string
	 */
	protected $birthDateTimePrecision;
	
	/**
	 * birthPlaceDetails
	 * @var Tx_Generic_Domain_Model_Address
	 */
	protected $birthPlaceDetails;
	
	
	
	/**
	 * Setter for birthDateTime
	 *
	 * @param integer $birthDateTime Birth data and time to the known precision. Usually, it is only the date that is known. Leave time as 00:00:00 if not known.
	 * @return void
	 */
	public function setBirthDateTime($birthDateTime) {
		$this->birthDateTime = $birthDateTime;
	}

	/**
	 * Getter for birthDateTime
	 *
	 * @return integer Birth data and time to the known precision. Usually, it is only the date that is known. Leave time as 00:00:00 if not known.
	 */
	public function getBirthDateTime() {
		return $this->birthDateTime;
	}
	
	/**
	 * Setter for birthDateTimePrecision
	 *
	 * @param string $birthDateTimePrecision Specify the duration of the uncertainity period as a range where BirthDateTime is in the middle of the range. Uses xsd:duration as the data type. The time interval is in the format: PnYnMnDTnHnMnS P: period (required), nY: number of years, nM: number of months, nD: number of days, T: start of a time section (required if hours, minutes or secords to be specified), nH: number of hours, nM: number of minutes, nS: number of seconds  P5Y -> period of 5 years P5Y2M10D -> 5 years, 2 months, 10 days, and 15 hours
	 * @return void
	 */
	public function setBirthDateTimePrecision($birthDateTimePrecision) {
		$this->birthDateTimePrecision = $birthDateTimePrecision;
	}

	/**
	 * Getter for birthDateTimePrecision
	 *
	 * @return string Specify the duration of the uncertainity period as a range where BirthDateTime is in the middle of the range. Uses xsd:duration as the data type. The time interval is in the format: PnYnMnDTnHnMnS P: period (required), nY: number of years, nM: number of months, nD: number of days, T: start of a time section (required if hours, minutes or secords to be specified), nH: number of hours, nM: number of minutes, nS: number of seconds  P5Y -> period of 5 years P5Y2M10D -> 5 years, 2 months, 10 days, and 15 hours
	 */
	public function getBirthDateTimePrecision() {
		return $this->birthDateTimePrecision;
	}
	
	/**
	 * Setter for birthPlaceDetails
	 *
	 * @param Tx_Generic_Domain_Model_Address $birthPlaceDetails birthPlaceDetails
	 * @return void
	 */
	public function setBirthPlaceDetails(Tx_Generic_Domain_Model_Address $birthPlaceDetails) {
		$this->birthPlaceDetails = $birthPlaceDetails;
	}

	/**
	 * Getter for birthPlaceDetails
	 *
	 * @return Tx_Generic_Domain_Model_Address birthPlaceDetails
	 */
	public function getBirthPlaceDetails() {
		return $this->birthPlaceDetails;
	}
	
}
?>