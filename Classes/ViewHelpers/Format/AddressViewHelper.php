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
 * View helper for rendering addresses.
 *
 * = Examples =
 *
 * <code>
 * <g:format.address name="{name}" address="{address}" format="IND" />
 * </code>
 *
 * <output>
 * <div>Geeta Vadhera<br />1 Palam Vihar Marg<br />CHAUMA<br />GURGAON&nbsp;-$nbsp;122001<br />INDIA</div>
 * </output>
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @api
 * @scope prototype
 */
class Tx_Generic_ViewHelpers_Format_AddressViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * @param Tx_Generic_Domain_Model_Address $content (optional) The address.
	 * @param Tx_Generic_Domain_Model_PartyName $name (optional) The person or organization name
	 * @param string $format (optional) The iso2 or iso3 code of the country.
	 * @param array $options (optional) The format options.
	 * @return string the formatted amount.
	 */
	public function render(Tx_Generic_Domain_Model_Address $content = NULL, Tx_Generic_Domain_Model_PartyName $name = NULL, $format = NULL, $options = array()) {
		if ($content === NULL) {
			$content = $this->renderChildren();
			if (!($content instanceof Tx_Generic_Domain_Model_Address)) {
				return '';
			}
		}
		
		$transformedOptions['showCountry'] = isset($options['showCountry']) ? (bool)$options['showCountry'] : FALSE;
		$sectionName = 'default';
		if (is_string($format) && strlen($format) > 0) {
			$sectionName = $format;
		} elseif ($content->getCountry() instanceof Tx_Generic_Domain_Model_CountryName) {
			$iso3Code = $content->getCountry()->getKey();
			if (strlen($iso3Code) > 0) {
				$sectionName = $iso3Code;
			}
		}

		$output = '';
		$view = clone $this->viewHelperVariableContainer->getView();
		$view->setPartialRootPath(t3lib_div::getFileAbsFileName('EXT:generic/Resources/Private/Partials/'));
		$output .= $view->renderPartial('Domain/Model/Address', $sectionName, array('name' => $name, 'content' => $content, 'options' => $transformedOptions), $this->viewHelperVariableContainer);
		
		return $output;
	}

}
?>