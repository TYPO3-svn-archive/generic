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
 * PersonName
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @prefix foaf: <http://xmlns.com/foaf/0.1/>
 * @prefix owl: <http://www.w3.org/2002/07/owl#>
 * @prefix rdfs: <http://www.w3.org/2000/01/rdf-schema#>
 * @prefix core: <http://www.typo3.org/semantic/core/>
 * @prefix gen: <http://www.typo3.org/semantic/ext/generic/domain/model/>
 * @semantic gen:PersonName rdfs:subClassOf gen:PartyName
 * @semantic gen:PersonName owl:equivalentClass foaf:name
 */
class Tx_Generic_Domain_Model_PersonName extends Tx_Generic_Domain_Model_PartyName {
	
	/**
	 * Enumerated list of type of name.  example: Legal name, common name
	 * @var Tx_Generic_Domain_Model_Type_PersonNameType
	 */
	protected $type;
		
}
?>