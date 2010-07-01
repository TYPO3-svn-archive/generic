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
 * An address
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @prefix foaf: <http://xmlns.com/foaf/0.1/>
 * @prefix owl: <http://www.w3.org/2002/07/owl#>
 * @prefix rdfs: <http://www.w3.org/2000/01/rdf-schema#>
 * @prefix core: <http://www.typo3.org/semantic/core/>
 * @prefix gen: <http://www.typo3.org/semantic/ext/generic/domain/model/>
 * @semantic gen:Address owl:equivalentClass foaf:adr
 */
class Tx_Generic_Domain_Model_Address extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * Container for free text address elements
	 * @var string
	 */
	protected $freeTextAddress;
	
	/**
	 * Country details
	 * @var Tx_Generic_Domain_Model_CountryName
	 */
	protected $country;
	
	/**
	 * Details of the top-level area division in the country, such as state, district, province, island, region, etc. Note that some countries do not have this
	 * @var Tx_Generic_Domain_Model_AdministrativeAreaName
	 */
	protected $administrativeArea;
	
	/**
	 * The next level down division of the area. E.g. state / county, province / reservation. Note that not all countries have a subadministrative area
	 * @var string
	 */
	protected $subAdministrativeArea;
	
	/**
	 * Details of Locality which is a named densely populated area  (a place) such as town, village, suburb, etc. A locality composes of many individual addresses.  Many localities exist in an administrative area or a sub adminisrative area. A locality can also have sub localities. For example, a municipality locality can have many villages associated with it which are sub localities. Example: Tamil Nadu State, Erode District, Bhavani Taluk, Paruvachi Village is a valid address in India. Tamil Nadu is the Administrative Area, Erode is the sub admin area, Bhavani is the locality, and Paruvachi is the sub locality
	 * @var Tx_Generic_Domain_Model_Locality
	 */
	protected $locality;
	
	/**
	 * Details of the Access route along which buildings/lot/land are located, such as street, road, channel, crescent, avenue, etc. This also includes canals/banks on which houses/boat houses are located where people live
	 * @var Tx_Generic_Domain_Model_Thoroughfare
	 */
	protected $thoroughfare;
	
	/**
	 * Details of the Premises (could be building(s), site, loaction, property, premise, place) which is a landmark place which has a main address such as large mail user (e.g. Airport, Hospital, University) or could be a building (e.g. apartment, house)  or a building or complex of buildings (e.g. an apartment complex or shopping centre) or even a vacant land (e.g. LOT). A premises can have many sub-addresses such as apartments in a building having its own addresses or buildings within an airport having its own addresses including its own thoroughfares
	 * @var string
	 */
	protected $premises;
	
	/**
	 * A container for a single free text or structured postcode. Note that not all countries have post codes
	 * @var string
	 */
	protected $postCode;
	
	/**
	 * A container for postal-specific delivery identifier for remote communities. Note that not all countries have RuralDelivery
	 * @var string
	 */
	protected $ruralDelivery;
	
	/**
	 * Final mail delivery point where the mail is dropped off for recipients to pick them up directly. E.g. POBox, Private Bag,  pigeon hole, free mail numbers, etc.
	 * @var string
	 */
	protected $postalDeliveryPoint;
	
	/**
	 * A delivery point/installation where all mails are delivered and the post man/delivery service picks up the mails and delivers it to the recipients through a delivery mode. Examples are a rural post office where post is delivered, a post office containing post office boxes/personal mail boxes. Note that not all countries have PostOffice. Can be used to represent overseas military addresses also along with PostalDeliveryPoint element
	 * @var string
	 */
	protected $postOffice;
	
	/**
	 * Defines the type of address. An address type can be" Primary Address, Secondary Address, Rural Address, Military Address, etc.
	 * @var Tx_Generic_Domain_Model_Type_AddressType
	 */
	protected $type;
	
	/**
	 * A unique address identifier such as postal delivery idetifier assigned to the address by local postal authority, e.g. DPID in Australia
	 * @var string
	 */
	protected $addressId;
	
	/**
	 * Type of address ID used. e.g. DPID, etc.
	 * @var string
	 */
	protected $addressIdType;
	
	/**
	 * The purpose the address is used for. E.g.  Postal, residential, business,  exchange, update, create, delete, etc
	 * @var Tx_Generic_Domain_Model_Usage_AddressUsage
	 */
	protected $usage;
	
	/**
	 * Mode of delivery of address. For example: rural route, normal delivery, post office box, etc.
	 * @var string
	 */
	protected $deliveryMode;
	
	/**
	 * Status of the entity. e.g. Old, Current, Inactive, Active, etc.
	 * @var Tx_Generic_Domain_Model_Status_AddressStatus
	 */
	protected $status;
	
	
	
	/**
	 * Setter for freeTextAddress
	 *
	 * @param string $freeTextAddress Container for free text address elements
	 * @return void
	 */
	public function setFreeTextAddress($freeTextAddress) {
		$this->freeTextAddress = $freeTextAddress;
	}

	/**
	 * Getter for freeTextAddress
	 *
	 * @return string Container for free text address elements
	 */
	public function getFreeTextAddress() {
		return $this->freeTextAddress;
	}
	
	/**
	 * Setter for country
	 *
	 * @param string $country Country details
	 * @return void
	 */
	public function setCountry($country) {
		$this->country = $country;
	}

	/**
	 * Getter for country
	 *
	 * @return string Country details
	 */
	public function getCountry() {
		return $this->country;
	}
	
	/**
	 * Setter for administrativeArea
	 *
	 * @param string $administrativeArea Details of the top-level area division in the country, such as state, district, province, island, region, etc. Note that some countries do not have this
	 * @return void
	 */
	public function setAdministrativeArea($administrativeArea) {
		$this->administrativeArea = $administrativeArea;
	}

	/**
	 * Getter for administrativeArea
	 *
	 * @return string Details of the top-level area division in the country, such as state, district, province, island, region, etc. Note that some countries do not have this
	 */
	public function getAdministrativeArea() {
		return $this->administrativeArea;
	}
	
	/**
	 * Setter for subAdministrativeArea
	 *
	 * @param string $subAdministrativeArea The next level down division of the area. E.g. state / county, province / reservation. Note that not all countries have a subadministrative area
	 * @return void
	 */
	public function setSubAdministrativeArea($subAdministrativeArea) {
		$this->subAdministrativeArea = $subAdministrativeArea;
	}

	/**
	 * Getter for subAdministrativeArea
	 *
	 * @return string The next level down division of the area. E.g. state / county, province / reservation. Note that not all countries have a subadministrative area
	 */
	public function getSubAdministrativeArea() {
		return $this->subAdministrativeArea;
	}
	
	/**
	 * Setter for locality
	 *
	 * @param Tx_Generic_Domain_Model_Locality $locality Details of Locality which is a named densely populated area  (a place) such as town, village, suburb, etc. A locality composes of many individual addresses.  Many localities exist in an administrative area or a sub adminisrative area. A locality can also have sub localities. For example, a municipality locality can have many villages associated with it which are sub localities. Example: Tamil Nadu State, Erode District, Bhavani Taluk, Paruvachi Village is a valid address in India. Tamil Nadu is the Administrative Area, Erode is the sub admin area, Bhavani is the locality, and Paruvachi is the sub locality
	 * @return void
	 */
	public function setLocality(Tx_Generic_Domain_Model_Locality $locality) {
		$this->locality = $locality;
	}

	/**
	 * Getter for locality
	 *
	 * @return Tx_Generic_Domain_Model_Locality Details of Locality which is a named densely populated area  (a place) such as town, village, suburb, etc. A locality composes of many individual addresses.  Many localities exist in an administrative area or a sub adminisrative area. A locality can also have sub localities. For example, a municipality locality can have many villages associated with it which are sub localities. Example: Tamil Nadu State, Erode District, Bhavani Taluk, Paruvachi Village is a valid address in India. Tamil Nadu is the Administrative Area, Erode is the sub admin area, Bhavani is the locality, and Paruvachi is the sub locality
	 */
	public function getLocality() {
		return $this->locality;
	}
	
	/**
	 * Setter for thoroughfare
	 *
	 * @param Tx_Generic_Domain_Model_Thoroughfare $thoroughfare Details of the Access route along which buildings/lot/land are located, such as street, road, channel, crescent, avenue, etc. This also includes canals/banks on which houses/boat houses are located where people live
	 * @return void
	 */
	public function setThoroughfare(Tx_Generic_Domain_Model_Thoroughfare $thoroughfare) {
		$this->thoroughfare = $thoroughfare;
	}

	/**
	 * Getter for thoroughfare
	 *
	 * @return Tx_Generic_Domain_Model_Thoroughfare Details of the Access route along which buildings/lot/land are located, such as street, road, channel, crescent, avenue, etc. This also includes canals/banks on which houses/boat houses are located where people live
	 */
	public function getThoroughfare() {
		return $this->thoroughfare;
	}
	
	/**
	 * Setter for premises
	 *
	 * @param string $premises Details of the Premises (could be building(s), site, loaction, property, premise, place) which is a landmark place which has a main address such as large mail user (e.g. Airport, Hospital, University) or could be a building (e.g. apartment, house)  or a building or complex of buildings (e.g. an apartment complex or shopping centre) or even a vacant land (e.g. LOT). A premises can have many sub-addresses such as apartments in a building having its own addresses or buildings within an airport having its own addresses including its own thoroughfares
	 * @return void
	 */
	public function setPremises($premises) {
		$this->premises = $premises;
	}

	/**
	 * Getter for premises
	 *
	 * @return string Details of the Premises (could be building(s), site, loaction, property, premise, place) which is a landmark place which has a main address such as large mail user (e.g. Airport, Hospital, University) or could be a building (e.g. apartment, house)  or a building or complex of buildings (e.g. an apartment complex or shopping centre) or even a vacant land (e.g. LOT). A premises can have many sub-addresses such as apartments in a building having its own addresses or buildings within an airport having its own addresses including its own thoroughfares
	 */
	public function getPremises() {
		return $this->premises;
	}
	
	/**
	 * Setter for postCode
	 *
	 * @param string $postCode A container for a single free text or structured postcode. Note that not all countries have post codes
	 * @return void
	 */
	public function setPostCode($postCode) {
		$this->postCode = $postCode;
	}

	/**
	 * Getter for postCode
	 *
	 * @return string A container for a single free text or structured postcode. Note that not all countries have post codes
	 */
	public function getPostCode() {
		return $this->postCode;
	}
	
	/**
	 * Setter for ruralDelivery
	 *
	 * @param string $ruralDelivery A container for postal-specific delivery identifier for remote communities. Note that not all countries have RuralDelivery
	 * @return void
	 */
	public function setRuralDelivery($ruralDelivery) {
		$this->ruralDelivery = $ruralDelivery;
	}

	/**
	 * Getter for ruralDelivery
	 *
	 * @return string A container for postal-specific delivery identifier for remote communities. Note that not all countries have RuralDelivery
	 */
	public function getRuralDelivery() {
		return $this->ruralDelivery;
	}
	
	/**
	 * Setter for postalDeliveryPoint
	 *
	 * @param string $postalDeliveryPoint Final mail delivery point where the mail is dropped off for recipients to pick them up directly. E.g. POBox, Private Bag,  pigeon hole, free mail numbers, etc.
	 * @return void
	 */
	public function setPostalDeliveryPoint($postalDeliveryPoint) {
		$this->postalDeliveryPoint = $postalDeliveryPoint;
	}

	/**
	 * Getter for postalDeliveryPoint
	 *
	 * @return string Final mail delivery point where the mail is dropped off for recipients to pick them up directly. E.g. POBox, Private Bag,  pigeon hole, free mail numbers, etc.
	 */
	public function getPostalDeliveryPoint() {
		return $this->postalDeliveryPoint;
	}
	
	/**
	 * Setter for postOffice
	 *
	 * @param string $postOffice A delivery point/installation where all mails are delivered and the post man/delivery service picks up the mails and delivers it to the recipients through a delivery mode. Examples are a rural post office where post is delivered, a post office containing post office boxes/personal mail boxes. Note that not all countries have PostOffice. Can be used to represent overseas military addresses also along with PostalDeliveryPoint element
	 * @return void
	 */
	public function setPostOffice($postOffice) {
		$this->postOffice = $postOffice;
	}

	/**
	 * Getter for postOffice
	 *
	 * @return string A delivery point/installation where all mails are delivered and the post man/delivery service picks up the mails and delivers it to the recipients through a delivery mode. Examples are a rural post office where post is delivered, a post office containing post office boxes/personal mail boxes. Note that not all countries have PostOffice. Can be used to represent overseas military addresses also along with PostalDeliveryPoint element
	 */
	public function getPostOffice() {
		return $this->postOffice;
	}
	
	/**
	 * Setter for type
	 *
	 * @param string $type Defines the type of address. An address type can be" Primary Address, Secondary Address, Rural Address, Military Address, etc.
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Getter for type
	 *
	 * @return string Defines the type of address. An address type can be" Primary Address, Secondary Address, Rural Address, Military Address, etc.
	 */
	public function getType() {
		return $this->type;
	}
	
	/**
	 * Setter for addressId
	 *
	 * @param string $addressId A unique address identifier such as postal delivery idetifier assigned to the address by local postal authority, e.g. DPID in Australia
	 * @return void
	 */
	public function setAddressId($addressId) {
		$this->addressId = $addressId;
	}

	/**
	 * Getter for addressId
	 *
	 * @return string A unique address identifier such as postal delivery idetifier assigned to the address by local postal authority, e.g. DPID in Australia
	 */
	public function getAddressId() {
		return $this->addressId;
	}
	
	/**
	 * Setter for addressIdType
	 *
	 * @param string $addressIdType Type of address ID used. e.g. DPID, etc.
	 * @return void
	 */
	public function setAddressIdType($addressIdType) {
		$this->addressIdType = $addressIdType;
	}

	/**
	 * Getter for addressIdType
	 *
	 * @return string Type of address ID used. e.g. DPID, etc.
	 */
	public function getAddressIdType() {
		return $this->addressIdType;
	}
	
	/**
	 * Setter for usage
	 *
	 * @param string $usage The purpose the address is used for. E.g.  Postal, residential, business,  exchange, update, create, delete, etc
	 * @return void
	 */
	public function setUsage($usage) {
		$this->usage = $usage;
	}

	/**
	 * Getter for usage
	 *
	 * @return string The purpose the address is used for. E.g.  Postal, residential, business,  exchange, update, create, delete, etc
	 */
	public function getUsage() {
		return $this->usage;
	}
	
	/**
	 * Setter for deliveryMode
	 *
	 * @param string $deliveryMode Mode of delivery of address. For example: rural route, normal delivery, post office box, etc.
	 * @return void
	 */
	public function setDeliveryMode($deliveryMode) {
		$this->deliveryMode = $deliveryMode;
	}

	/**
	 * Getter for deliveryMode
	 *
	 * @return string Mode of delivery of address. For example: rural route, normal delivery, post office box, etc.
	 */
	public function getDeliveryMode() {
		return $this->deliveryMode;
	}
	
	/**
	 * Setter for status
	 *
	 * @param string $status Status of the entity. e.g. Old, Current, Inactive, Active, etc.
	 * @return void
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * Getter for status
	 *
	 * @return string Status of the entity. e.g. Old, Current, Inactive, Active, etc.
	 */
	public function getStatus() {
		return $this->status;
	}
	
}
?>