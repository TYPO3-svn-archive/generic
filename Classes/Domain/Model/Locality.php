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
 * Details of Locality which is a named densely populated area  (a place) such as town, village, suburb, etc. A locality composes of many individual addresses.  Many localities exist in an administrative area or a sub adminisrative area. A locality can also have sub localities. For example, a municipality locality can have many villages associated with it which are sub localities. Example: Tamil Nadu State, Erode District, Bhavani Taluk, Paruvachi Village is a valid address in India. Tamil Nadu is the Administrative Area, Erode is the sub admin area, Bhavani is the locality, and Paruvachi is the sub locality
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Generic_Domain_Model_Locality extends Tx_Generic_Domain_Model_Name {
	
	/**
	 * @var Tx_Generic_Domain_Model_Type_LocalityType
	 */
	protected $type;
	
	/**
	 * subLocality
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Generic_Domain_Model_Locality>
	 */
	protected $subNames;
	
}
?>